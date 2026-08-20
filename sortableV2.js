/*
Changelog:
    5/31,6/1 WC
    *Added methods for processing hour/minute time
    *Added regex handling for date+time and decimals
    *Changed date handling to use splits instead of substrings
    *Corrected capitalization error in first date-format regex
    *Tidied european-date and string-month handling
    *Fixed a crash from exceeding array bounds durin while loop in ts_resortTable
    *Cleaned up regex section in ts_resortTable, made one unified date/time regex
03/19/2020  JC
    * recognized date time with milliseconds as a date-time field

V2:  JC, 9/23/2021
    * replaced home-grown trim() function with javascript trim() method
*/
/*
Table sorting script  by Joost de Valk, check it out at http://www.joostdevalk.nl/code/sortable-table/.
Based on a script from http://www.kryogenix.org/code/browser/sorttable/.
Distributed under the MIT license: http://www.kryogenix.org/code/browser/licence.html .

Copyright (c) 1997-2006 Stuart Langridge, Joost de Valk.

Version 1.5.6.1  (includes fix to trim function)
*/

/* You can change these values */
//var image_path = "http://www.joostdevalk.nl/code/sortable-table/";
//var image_up = "arrow-up.gif";
//var image_down = "arrow-down.gif";
//var image_none = "arrow-none.gif";
var image_up = "1.gif";
var image_down = "1.gif";
var image_none = "1.gif";
var europeandate = false;
var alternate_row_colors = true;

/* Don't change anything below this unless you know what you're doing */
addEvent(window, "load", sortables_init);

var SORT_COLUMN_INDEX;
var thead = false;

function sortables_init() {
	// Find all tables with class sortable and make them sortable
	if (!document.getElementsByTagName) return;
	tbls = document.getElementsByTagName("table");
	for (ti=0;ti<tbls.length;ti++) {
		thisTbl = tbls[ti];
		if (((' '+thisTbl.className+' ').indexOf("sortable") != -1) && (thisTbl.id)) {
			ts_makeSortable(thisTbl);
		}
	}
}

function ts_makeSortable(t) {
    // don't sort a table that has a header but no content
	if (t.rows && t.rows.length > 0) {
		if (t.tHead && t.tHead.rows.length > 0) {
			var firstRow = t.tHead.rows[t.tHead.rows.length-1];
			thead = true;
		} else {
			var firstRow = t.rows[0];
		}
	}
	if (!firstRow) return;
	
	// We have a first row: assume it's the header, and make its contents clickable links
    if (t.rows.length > 2) {
		for (var i=0;i<firstRow.cells.length;i++) {
			var cell = firstRow.cells[i];
			var txt = ts_getInnerText(cell);
			if (cell.className != "unsortable" && cell.className.indexOf("unsortable") == -1) {
				cell.innerHTML = '<a href="#" class="sortheader" onclick="ts_resortTable(this, '+i+');return false;">'+txt+'<span class="sortarrow"><img border=0 src="'+ image_none + '" alt="&darr;"/></span></a>';
			}
		}
	}
//	if (alternate_row_colors) {
//		alternate(t);
//	}
}

function ts_getInnerText(el) {
	if (typeof el == "string") return el;
	if (typeof el == "undefined") { return el };
	if (el.innerText) return el.innerText;	//Not needed but it is faster
	var str = "";
	
	var cs = el.childNodes;
	var l = cs.length;
	for (var i = 0; i < l; i++) {
		switch (cs[i].nodeType) {
			case 1: //ELEMENT_NODE
				str += ts_getInnerText(cs[i]);
				break;
			case 3:	//TEXT_NODE
				str += cs[i].nodeValue;
				break;
		}
	}
	return str;
}

function ts_resortTable(lnk, clid) {
	var span;
	for (var ci=0;ci<lnk.childNodes.length;ci++) {
		if (lnk.childNodes[ci].tagName && lnk.childNodes[ci].tagName.toLowerCase() == 'span') span = lnk.childNodes[ci];
	}
	var spantext = ts_getInnerText(span);
	var td = lnk.parentNode;
	var column = clid || td.cellIndex;
	var t = getParent(td,'TABLE');
	// Work out a type for the column
	if (t.rows.length <= 1) return;
	var itm = "";
	var i = 1;
	while (itm == "") { 
		var itm = ts_getInnerText(t.tBodies[0].rows[i].cells[column]);
		//itm = trim(itm);
		itm = itm.trim();
		if (itm.substr(0,4) == "<!--" || itm.length == 0) {
			itm = "";
		}
		i++;
		//Keep this from breaking in an empty column
		if (i >= t.tBodies[0].rows.length) {
		    return;
		}
	}
	sortfn = ts_sort_caseinsensitive;
	//Catch all time formats, including string/int months, 2/4 digit years, and present/absent hour:minute time
	if (itm.match(/^\d\d[\/\.-](\d\d|[a-zA-Z]{3})[\/\.-]\d\d(\d{2})?( [01]?\d:\d\d (AM|PM))?$/)) {
	    sortfn = ts_sort_date;
    }
    else if (itm.match(/^\d\d[\/\.-](\d\d|[a-zA-Z]{3})[\/\.-]\d\d(\d{2})?( [01]?\d:\d\d:\d\d (AM|PM))?$/)) {
        sortfn = ts_sort_date;
    }
	//Catch monetary and decimal formatting, sort as numeric
	else if (itm.match(/^-?\d+(.\d+)?$/)||itm.match(/^-?[£$€Û¢´]\d/))
	{
	    sortfn = ts_sort_numeric;
	}
	
	// if (itm.match(/^-?(\d+[,\.]?)+(E[-+][\d]+)?+%?$/)) sortfn = ts_sort_numeric;
	SORT_COLUMN_INDEX = column;
	var firstRow = new Array();
	var newRows = new Array();
	for (k=0;k<t.tBodies.length;k++) {
		for (i=0;i<t.tBodies[k].rows[0].length;i++) { 
			firstRow[i] = t.tBodies[k].rows[0][i]; 
		}
	}
	for (k=0;k<t.tBodies.length;k++) {
		if (!thead) {
			// Skip the first row
			for (j=1;j<t.tBodies[k].rows.length;j++) { 
				newRows[j-1] = t.tBodies[k].rows[j];
			}
		} else {
			// Do NOT skip the first row
			for (j=0;j<t.tBodies[k].rows.length;j++) { 
				newRows[j] = t.tBodies[k].rows[j];
			}
		}
	}
	newRows.sort(sortfn);
	if (span.getAttribute("sortdir") == 'down') {
			ARROW = '<img border=0 src="'+ image_down + '" alt="&darr;"/>';
			newRows.reverse();
			span.setAttribute('sortdir','up');
	} else {
			ARROW = '<img border=0 src="'+ image_up + '" alt="&uarr;"/>';
			span.setAttribute('sortdir','down');
	} 
    // We appendChild rows that already exist to the tbody, so it moves them rather than creating new ones
    // don't do sortbottom rows
    for (i=0; i<newRows.length; i++) { 
		if (!newRows[i].className || (newRows[i].className && (newRows[i].className.indexOf('sortbottom') == -1))) {
			t.tBodies[0].appendChild(newRows[i]);
		}
	}
    // do sortbottom rows only
    for (i=0; i<newRows.length; i++) {
		if (newRows[i].className && (newRows[i].className.indexOf('sortbottom') != -1)) 
			t.tBodies[0].appendChild(newRows[i]);
	}
	// Delete any other arrows there may be showing
	var allspans = document.getElementsByTagName("span");
	for (var ci=0;ci<allspans.length;ci++) {
		if (allspans[ci].className == 'sortarrow') {
			if (getParent(allspans[ci],"table") == getParent(lnk,"table")) { // in the same table as us?
				allspans[ci].innerHTML = '<img border=0 src="'+ image_none + '" alt="&darr;"/>';
			}
		}
	}		
	span.innerHTML = ARROW;
	alternate(t);
}

function getParent(el, pTagName) {
	if (el == null) {
		return null;
	} else if (el.nodeType == 1 && el.tagName.toLowerCase() == pTagName.toLowerCase()) {
		return el;
	} else {
		return getParent(el.parentNode, pTagName);
	}
}

function sort_date(datetime) {	
	// y2k notes: two digit years less than 50 are treated as 20XX, greater than 50 are treated as 19XX
    dt = "00000000";
    
	//get an array of the date, the time if it's there, and the AM/PM value
    //mainsplit = trim(datetime).split(" ");
    var temp = datetime.trim();
    mainsplit = temp.split(" ");
    
    //split the date into month, day, and year, handling for / and - separators
    var datesplit = ["00","00","0000"];
	if(mainsplit[0].match( /^\d+\/(\d+|[a-zA-Z]+)\/\d+$/) ){
	    datesplit = mainsplit[0].split("/");
	}
	else if(mainsplit[0].match(/^\d+-(\d+|[a-zA-Z]+)-\d+$/)) {
	    datesplit = mainsplit[0].split("-");
	}
	
	//Handle european formatting
	if(europeandate==true) {
	    monthtemp = datesplit[1];
	    datesplit[1] = datesplit[0];
	    datesplit[0] = monthtemp;
    }
	
	//Handle string months
	if (datesplit[0].length == 3) {
	    mtstr = datesplit[0];
	    mtstr = mtstr.toLowerCase();
	    switch (mtstr) {
	        case "jan": var mt = "01"; break;
	        case "feb": var mt = "02"; break;
	        case "mar": var mt = "03"; break;
	        case "apr": var mt = "04"; break;
	        case "may": var mt = "05"; break;
	        case "jun": var mt = "06"; break;
	        case "jul": var mt = "07"; break;
	        case "aug": var mt = "08"; break;
	        case "sep": var mt = "09"; break;
	        case "oct": var mt = "10"; break;
	        case "nov": var mt = "11"; break;
	        case "dec": var mt = "12"; break;
	        // default: var mt = "00"; 
	    }
	    datesplit[0] = mt;
	}
	//Handle two-digit year
	if (mainsplit[0].length == 8) {
	    yr = datesplit[2];
	    if (parseInt(yr) < 50) {
	        yr = '20' + yr;
	    } else {
	        yr = '19' + yr;
	    }
	    datesplit[2] = yr;
	}
	
	//String formatting
	dt = datesplit[2] + datesplit[0] + datesplit[1];
	
	//Handling for time values
	if (mainsplit.length > 1) {
	    dt = dt + time_pm_noted(mainsplit[1], mainsplit[2]);
	}
	return dt;
}

//Take a time of the form IX:YZ and an AM or PM.  Add a 0 on front for 12 AMs, a 1 for 1 AM to 12:59 PM, and a 2 for 1 PM to 11:59 PM.
function time_pm_noted(time, part) {
    tspl = time.split(":");
    //add leading zero to hours
    if (tspl[0].length == 1) {
        tspl[0] = "0" + tspl[0];
    }
    tpn = tspl[0] + tspl[1];
    if (tspl[0] == "12") {
        if (part == "AM") {
            tpn = "0" + tpn;
        }
        else //part=="PM"
        {
            tpn = "1" + tpn;
        }
    }
    else {  //Hour not 12
        if (part == "AM") {
            tpn = "1" + tpn;
        }
        else {//part == "PM"
            tpn = "2" + tpn;
        }
    }
    return tpn;
}

function ts_sort_date(a,b) {
	dt1 = sort_date(ts_getInnerText(a.cells[SORT_COLUMN_INDEX]));
	dt2 = sort_date(ts_getInnerText(b.cells[SORT_COLUMN_INDEX]));
	
	if (dt1==dt2) {
		return 0;
	}
	if (dt1<dt2) { 
		return -1;
	}
	return 1;
}
function ts_sort_numeric(a,b) {
	var aa = ts_getInnerText(a.cells[SORT_COLUMN_INDEX]);
	aa = clean_num(aa);
	var bb = ts_getInnerText(b.cells[SORT_COLUMN_INDEX]);
	bb = clean_num(bb);
	return compare_numeric(aa,bb);
}
function compare_numeric(a,b) {
	var a = parseFloat(a);
	a = (isNaN(a) ? 0 : a);
	var b = parseFloat(b);
	b = (isNaN(b) ? 0 : b);
	return a - b;
}
function ts_sort_caseinsensitive(a,b) {
	aa = ts_getInnerText(a.cells[SORT_COLUMN_INDEX]).toLowerCase();
	bb = ts_getInnerText(b.cells[SORT_COLUMN_INDEX]).toLowerCase();
	if (aa==bb) {
		return 0;
	}
	if (aa<bb) {
		return -1;
	}
	return 1;
}
function ts_sort_default(a,b) {
	aa = ts_getInnerText(a.cells[SORT_COLUMN_INDEX]);
	bb = ts_getInnerText(b.cells[SORT_COLUMN_INDEX]);
	if (aa==bb) {
		return 0;
	}
	if (aa<bb) {
		return -1;
	}
	return 1;
}
function addEvent(elm, evType, fn, useCapture)
// addEvent and removeEvent
// cross-browser event handling for IE5+,	NS6 and Mozilla
// By Scott Andrew
{
	if (elm.addEventListener){
		elm.addEventListener(evType, fn, useCapture);
		return true;
	} else if (elm.attachEvent){
		var r = elm.attachEvent("on"+evType, fn);
		return r;
	} else {
		alert("Handler could not be removed");
	}
}
function clean_num(str) {
	str = str.replace(new RegExp(/[^-?0-9.]/g),"");
	return str;
}

//  OLD VERSION
//function trim(s) {
//	while (s.substring(0,1) == ' ') {
//		s = s.substring(1,s.length);
//	}
//	while (s.substring(s.length-1,s.length) == ' ') {
//		s = s.substring(0,s.length-1);
//	}
//	return s;
//}

// NEWER VERSION - disabled 9/23/21 JC
/*
function trim(s) {
    var test = s.replace(/^\s+|\s+$/g, "");
    window.alert(test + ' length: ' + test.length.toString());
    return s.replace(/^\s+|\s+$/g, "");
}
*/

function alternate(table) {
	// Take object table and get all it's tbodies.
	var tableBodies = table.getElementsByTagName("tbody");
	// Loop through these tbodies
	for (var i = 0; i < tableBodies.length; i++) {
		// Take the tbody, and get all it's rows
		var tableRows = tableBodies[i].getElementsByTagName("tr");
		// Loop through these rows
		// Start at 1 because we want to leave the heading row untouched
		for (var j = 1; j < tableRows.length; j++) {
			// Check if j is even, and apply classes for both possible results
			if ( (j % 2) == 0  ) {
				if ( !(tableRows[j].className.indexOf('odd') == -1) ) {
					tableRows[j].className = tableRows[j].className.replace('odd', 'even');
				} else {
					if ( tableRows[j].className.indexOf('even') == -1 ) {
						tableRows[j].className += " even";
					}
				}
			} else {
				if ( !(tableRows[j].className.indexOf('even') == -1) ) {
					tableRows[j].className = tableRows[j].className.replace('even', 'odd');
				} else {
					if ( tableRows[j].className.indexOf('odd') == -1 ) {
						tableRows[j].className += " odd";
					}
				}
			} 
		}
	}
}