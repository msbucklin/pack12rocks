/*Changelog
    6/5/12 WC  Added FocusTestRegExp
    2/7/15 JC  Added mobile support
    7/7/16 JC  V7: Added easyToggleTbody function; modified ClickCheckbox and ClickCheckbox all to support new TBODYxCOUNT field
    3/19/20  JC  V11:  buttonlink now disables the button that was just clicked to prevent clicking twice
    5/6/20  JC  V12  Bypass errors when menu is not included on current page
*/


function SetAction(obj) {
    var Hover_Action = document.getElementById('Hover_Action');
    Hover_Action.value = obj.name;
}
function ResetAction() {
    var Hover_Action = document.getElementById('Hover_Action');
    Hover_Action.value = '';
}
function ClickCheckbox(thisfield) {
    var easyform = document.getElementById('easyform');
    var matchfieldname = thisfield.name + 'DATA';
    for (i = 0; i < easyform.length; i++) {
        var tempobj = easyform.elements[i];
        try
        {
            if (tempobj.name.length > matchfieldname.length) {
                if (tempobj.name.substring(0, matchfieldname.length) == matchfieldname) {
                    easyform.elements[i].disabled = !thisfield.checked;
                }
            }
        }
        catch(err)
        {

        }
    }
    try
    {
        var thisfieldid = thisfield.id;
        var endpos = thisfieldid.indexOf('ROW');
        var sectionid = thisfieldid.substring(2,endpos);
        var counterobjid = 'TBODY' + sectionid + 'COUNT';
        var countervalue = parseInt(document.getElementById(counterobjid).innerHTML);
        if (thisfield.checked)
        {
            countervalue = countervalue + 1;
        }
        else
        {
            countervalue = countervalue - 1;
        }
        document.getElementById(counterobjid).innerHTML = String(countervalue);
    }
    catch(err)
    {
    }
}
function CheckboxListChangeParticipation(thisfield) {
    var newfieldvalue = easyGetFieldValue(thisfield.name);
    var disabledValue = true;
    if (newfieldvalue == 'Y') {
        disabledValue = false;
    }
    var easyform = document.getElementById('easyform');
    var matchfieldname = thisfield.name;
    var endpos = matchfieldname.indexOf("DATA") + 4;
    matchfieldname = matchfieldname.substr(0, endpos);
    for (i = 0; i < easyform.length; i++) {
        var tempobj = easyform.elements[i];
        try 
        {
            if (tempobj.name.length > matchfieldname.length) {
                if (tempobj.name.substring(0, matchfieldname.length) == matchfieldname) {
                    if (tempobj.name != thisfield.name) {
                        easyform.elements[i].disabled = disabledValue;
                    }
                }
            }
        }
        catch(err)
        {

        }
    }
}
function ClickCheckboxAll(thisfield) 
{
    var easyform = document.getElementById('easyform');
    var counter = 0;
    for (i = 0; i < easyform.length; i++) 
    {
        var tempobj = easyform.elements[i];
        try
        {
            if (tempobj.name.length > thisfield.name.length) 
            {
                if (tempobj.name.substring(0, thisfield.name.length) == thisfield.name) 
                {
                    var tempname = tempobj.name;
                    if (tempname.indexOf('DATA') >= 0) 
                    { 
                        easyform.elements[i].disabled = !thisfield.checked;
                    }
                    else 
                    {
                        if (tempobj.type == 'checkbox') 
                        {
                            tempobj.checked = thisfield.checked;
                            counter = counter + 1;
                        }
                    }
                }

            }
        }
        catch(err)
        {

        }
    }
    if (!thisfield.checked)
    {
        counter = 0;
    }
    var sectionid = thisfield.id.substring(2);
    var counterid = 'TBODY' + sectionid + 'COUNT';
    try
    {
        document.getElementById(counterid).innerHTML = String(counter);
    }
    catch(err)
    {

    }
}
// Undo all checkboxes if the current field value changed and submit form
function UnClickCheckboxAll(thisfield) {
    var easyform = document.getElementById('easyform');

    if (FieldValueChanged(thisfield)) {
        for (i = 0; i < easyform.length; i++) {
            var tempobj = easyform.elements[i];
            if (tempobj.type == 'checkbox') {
                tempobj.checked = false;
            }
        }
    }
}
function FieldValueChanged(thisfield) {
    var newfieldvalue = easyGetFieldValue(thisfield.name);
    var hiddenfieldname = thisfield.name;
    hiddenfieldname = hiddenfieldname.replace('ENTRY', 'OLD');
    var hiddenfieldobj = document.getElementById(hiddenfieldname);
    var hiddenfieldvalue = hiddenfieldobj.value;
    if (newfieldvalue == hiddenfieldvalue) {
        return false;
    }
    else {
        return true;
    }
}

function easyEnableField(fieldname, enablevalue, setvisibility) {
    var targetfield = document.getElementById(fieldname);
    var disablevalue = !enablevalue;
    targetfield.disabled = disablevalue;
    if (setvisibility) {
        var targetdiv = document.getElementById('DIV' + fieldname);
        if (enablevalue) {
            targetdiv.style.visibility = 'visible';
            targetdiv.style.display = 'table-row';
        }
        else {
            targetdiv.style.visibility = 'collapse';
            targetdiv.style.display = 'none';
        }
        // In mobile format there is a second <TR> tag for the input control
        try {
            var targetdiv = document.getElementById('DIV' + fieldname + 'X');
            if (enablevalue) {
                targetdiv.style.visibility = 'visible';
                targetdiv.style.display = 'table-row';
            }
            else {
                targetdiv.style.visibility = 'collapse';
                targetdiv.style.display = 'none';
            }
        }
        catch (err) {
        }
    }
    if (targetfield.type == "radio") {
        var easyform = document.getElementById('easyform');
        for (i = 0; i < easyform.length; i++) {
            var tempobj = easyform.elements[i];
            if (tempobj.name == targetfield.name) {
                tempobj.disabled = disablevalue;
            }
        }
    }
}

function easyEnableDateField(fieldname, fieldtype, enablevalue, setvisibility) {
    var entryFieldName = fieldname.replace('ENTRY', fieldtype);
    var targetfield = document.getElementById(entryFieldName);
    var disablevalue = !enablevalue;
    targetfield.disabled = disablevalue;
    if (setvisibility && fieldtype == 'DATE') {
        var targetdiv = document.getElementById('DIV' + fieldname);
        if (enablevalue) {
            targetdiv.style.visibility = 'visible';
            targetdiv.style.display = 'table-row';
        }
        else {
            targetdiv.style.visibility = 'collapse';
            targetdiv.style.display = 'none';
        }
        // In mobile format there is a second <TR> tag for the input control
        try {
            targetdiv = document.getElementById('DIV' + fieldname + 'X');
            if (enablevalue) {
                targetdiv.style.visibility = 'visible';
                targetdiv.style.display = 'table-row';
            }
            else {
                targetdiv.style.visibility = 'collapse';
                targetdiv.style.display = 'none';
            }
        }
        catch (err) {
        }
    }
    if (targetfield.type == "radio") {
        var easyform = document.getElementById('easyform');
        for (i = 0; i < easyform.length; i++) {
            var tempobj = easyform.elements[i];
            if (tempobj.name == targetfield.name) {
                tempobj.disabled = disablevalue;
            }
        }
    }
}


function easySetVisibility(fieldname, visible) {
    var targetdiv = document.getElementById('DIV' + fieldname);
    if (visible) {
        targetdiv.style.visibility = 'visible';
        targetdiv.style.display = 'table-row';
    }
    else {
        targetdiv.style.visibility = 'collapse';
        targetdiv.style.display = 'none';
    }
    // In mobile format there is a second <TR> tag for the input control
    try {
        var targetdiv = document.getElementById('DIV' + fieldname + 'X');
        if (visible) {
            targetdiv.style.visibility = 'visible';
            targetdiv.style.display = 'table-row';
        }
        else {
            targetdiv.style.visibility = 'collapse';
            targetdiv.style.display = 'none';
        }
    }
    catch (err) {
    }
}

function easyGetSelectDisplayValue(fieldname) {
    var targetfield = document.getElementById(fieldname);
    var Index = document.getElementById(fieldname).selectedIndex;
    var displayvalue = document.getElementById(fieldname).options[Index].text;
    return displayvalue;
}

function easyGetFieldValue(fieldname) {
    var targetfield = document.getElementById(fieldname);
    var fieldvalue = "";
    if (targetfield.type == "checkbox") {
        if (targetfield.checked) {
            fieldvalue = targetfield.value;
        }
        else {
            fieldvalue = 'N';
        }
    }
    if (targetfield.type == "radio") {
        var easyform = document.getElementById('easyform');
        for (i = 0; i < easyform.length; i++) {
            var tempobj = easyform.elements[i];
            if (tempobj.name == targetfield.name) {
                if (tempobj.checked) {
                    fieldvalue = tempobj.value;
                }
            }
        }
    }
    if (targetfield.type == "select-one") {
        var Index = document.getElementById(fieldname).selectedIndex;
        fieldvalue = document.getElementById(fieldname).options[Index].value;
    }
    if (targetfield.type == 'text' || targetfield.type == 'tel' || targetfield.type == 'email' || targetfield.type == 'textarea' || targetfield.type == 'hidden' || targetfield.type == 'password') {
        fieldvalue = targetfield.value;
    }
    return fieldvalue;
}

function easySetFieldValue(fieldname, newvalue) {
    var targetfield = document.getElementById(fieldname);
    if (targetfield.type == "checkbox") {
        if (newvalue == "Y") {
            targetfield.checked = true;
        }
        else {
            targetfield.checked = false;
        }
    }
    if (targetfield.type == "radio") {
        var easyform = document.getElementById('easyform');
        for (i = 0; i < easyform.length; i++) {
            var tempobj = easyform.elements[i];
            if (tempobj.name == targetfield.name) {
                if (tempobj.value == newvalue) {
                    tempobj.checked = true;
                }
            }
        }
    }
    if (targetfield.type == "select-one") {
        var valuefound = 0;
        for (i = 0; i < targetfield.length; i++) {
            if (targetfield.options[i].value == newvalue) {
                targetfield.options[i].selected = true;
                valuefound = 1;
            }
        }
    }
    if (targetfield.type == 'text' || targetfield.type == 'tel' || targetfield.type == 'email' || targetfield.type == 'textarea' || targetfield.type == 'hidden') {
        targetfield.value = newvalue;
    }
}
function RemoveImage(imagedivname, hiddenobjname) {
    var imagediv = document.getElementById(imagedivname);
    imagediv.innerHTML = '&nbsp;';
    var hiddenfield = document.getElementById(hiddenobjname);
    hiddenfield.value = 'Remove';
}
function easyEnableCheckboxlist(checkboxlistsectionname, enablevalue, clearvalue) 
{
    var targetdiv = document.getElementById('DIV' + checkboxlistsectionname);
    if (enablevalue) 
    {
        targetdiv.style.visibility = 'visible';
    }
    else 
    {
        if (clearvalue) 
        {
            var sectionnamelength = checkboxlistsectionname.length;
            var easyform = document.getElementById('easyform');
            for (i = 0; i < easyform.length; i++) {
                var tempobj = easyform.elements[i];
                try
                {
                    var tempobjname = tempobj.name;
                    if (tempobjname.substr(0, sectionnamelength + 3) == checkboxlistsectionname + 'ROW') {
                        if (tempobj.type == 'checkbox') {
                            tempobj.checked = false;
                        }
                    }
                }
                catch(err)
                {

                }
            }
        }
        targetdiv.style.visibility = 'hidden';
    }
}

function easySetRequired(fieldname, requiredvalue) {
    var targetfield = document.getElementById('RVAL' + fieldname);
    var targetdiv = document.getElementById('RDIV' + fieldname);
    var undefined;
    if (requiredvalue) {
        targetfield.value = 'Y';
        if (targetdiv != undefined) {
            targetdiv.style.visibility = 'visible';
        }
    }
    else {
        targetfield.value = 'N';
        if (targetdiv != undefined) {
            targetdiv.style.visibility = 'hidden';
        }
    }
}
function easySetFocus()
{
    try
    {
        var undefined;
        var hiddenfield = document.getElementById('FirstControl');
        if (hiddenfield != undefined) {
            var fieldname = hiddenfield.value;
            if (trim(fieldname) != '') {
                var targetfield = document.getElementById(fieldname);
                if (targetfield != undefined) {
                    if (fieldname == 'User_Login') {
                        $('#ModalLogon').on('shown.bs.modal', function () {
                            $('#User_Login').focus();
                        })
                    }
                    if (targetfield.disabled || targetfield.type == 'hidden') {
                        var saveindex = -1;
                        var easyform = document.getElementById('easyform');
                        for (i = 0; i < easyform.length; i++) {
                            if (easyform.elements[i].name == targetfield.name) {
                                saveindex = i;
                                i = easyform.length + 1;
                            }
                        }
                        for (i = saveindex + 1; i < easyform.length; i++) {
                            var tempobj = easyform.elements[i];
                            if (tempobj.type != undefined) {
                                if ((!tempobj.disabled) && (tempobj.type != 'hidden') && (tempobj.type != 'button')) {
                                    try {
                                        tempobj.focus();
                                    }
                                    catch (err) {
                                        i = i;
                                    }
                                    i = easyform.length + 1;
                                }
                            }
                        }

                    }
                    else {
                        try {
                            targetfield.focus();
                        }
                        catch (err) {
                            i = i;
                        }
                    }
                }
            }
        }
    }
    catch(err)
    {

    }
}

function easyAdjustQuantity(obj) {
    var objname = obj.name;
    var qtyname = '';
    var delta = 0;
    var qty = 0;
    if (objname.substr(0, 4) == 'PLUS') {
        delta = 1;
        qtyname = objname.substr(4);
    }
    else   // objname begins with 'MINUS'
    {
        delta = -1;
        qtyname = objname.substr(5);
    }
    var qtyobj = document.getElementById(qtyname);
    var qty = qtyobj.value;
    qty = Number(qty);
    var qtystr = qty.toString();
    if (qtystr == 'NaN') {
        qty = 0;
    }
    qty = qty + delta;
    if (qty < 0) {
        qty = 0;
    }
    qtyobj.value = qty;
    qtyobj.focus();
}


function toggleLower(objID) {
    if (!document.getElementById) return;
    var ob = document.getElementById(objID).style;
    ob.display = (ob.display == 'block') ? 'none' : 'block';

    var icon = document.getElementById(objID + '-icon');
    if (ob.display == 'none') {
        icon.className = 'fa fa-caret-right pull-right';
    }
    else {
        icon.className = 'fa fa-caret-down pull-right';
    }
}


function togglemenu() {
    var menuopenflag = document.getElementById('menuopenflag');
    if (menuopenflag.value == "Y") {
        menuopenflag.value = "N";
        document.getElementById('mainmenu').style.left = "-420px";
    }
    else {
        menuopenflag.value = "Y";
        document.getElementById('mainmenu').style.left = "0px";
        $('html, body').animate({ scrollTop: 0 }, 'fast');
    }
}

/* Clicking outside any of the menus should close the menu */
$(document).on("click", function (event) {
    try {
        var $trigger = $(".navmenu");
        var clickTarget = event.target;
        var isMenuTrigger = clickTarget && (
            clickTarget.id == 'main-menu-icon' ||
            clickTarget.closest && (
                clickTarget.closest('.navicon') ||
                clickTarget.closest('a[href*="togglemenu"]')
            )
        );

        if (!isMenuTrigger && $trigger !== event.target && !$trigger.has(event.target).length && event.target.id != 'main-menu-icon') {
            var menuopenflag = document.getElementById('menuopenflag');
            if (menuopenflag.value == "Y") {
                menuopenflag.value = "N";
                document.getElementById('mainmenu').style.left = "-420px";
            }
        }

        var $trigger = $(".navtools");
        if ($trigger !== event.target && !$trigger.has(event.target).length && event.target.id != 'tools-menu-icon') {
            var menu = document.getElementById('toolsmenu');
            if (menu.style.right == '0%') {
                menu.style.right = "-300px";
            }
        }

        if ($trigger !== event.target && !$trigger.has(event.target).length && event.target.id != 'help-menu-icon') {
            var menu = document.getElementById('helpmenu');
            if (menu.style.right == '0%') {
                menu.style.right = "-300px";
            }
        }
    }
    catch (err) {
        /* bypass errors if menu not displayed on current page - jc - 5/6/2020 */
    }
});


function menuswitch(oldmenu, newmenu) {
    document.getElementById(oldmenu).style.left = "-500px";
    document.getElementById(newmenu).style.left = "0px";
}

function toggletools() {
    var menu = document.getElementById('toolsmenu');
    if (menu.style.right == '0%') {
        menu.style.right = "-300px";
    }
    else {
        document.getElementById('helpmenu').style.right = "-300px";
        menu.style.right = "0%";
    }
}

function togglehelp() {
    var menu = document.getElementById('helpmenu');
    if (menu.style.right == '0%') {
        menu.style.right = "-300px";
    }
    else {
        document.getElementById('toolsmenu').style.right = "-300px";
        menu.style.right = "0%";
    }
}





function FocusTestRegExp(thisfield, regex, errormsg) {
    if (thisfield.value == "") {
        return true;
    }
    else {
        return TestRegExp(thisfield, regex, errormsg);
    }
}

function trim(STRING) {
    STRING = ltrim(STRING);
    return rtrim(STRING);
}

function rtrim(STRING) {
    while (STRING.charAt((STRING.length - 1)) == " ") {
        STRING = STRING.substring(0, STRING.length - 1);
    }
    return STRING;
}

function ltrim(STRING) {
    while (STRING.charAt(0) == " ") {
        STRING = STRING.replace(STRING.charAt(0), "");
    }
    return STRING;
}

function easyEditHTMLPage() {
    var easyform = document.getElementById('easyform');
    var Selected_Action = document.getElementById('Selected_Action');
    Selected_Action.value = "EditHTMLPage";
    easyform.submit();
}

function easyCalendarSet(selectcontrolname, selectvalue) {
    easySetFieldValue(selectcontrolname, selectvalue);
    easyFormSubmit('show');
}

function easyFormSubmit(action) {
    var easyform = document.getElementById('easyform');
    var Selected_Action = document.getElementById('Selected_Action');
    Selected_Action.value = action;
    easyform.submit();
}

function ShowUploadPhoto(thisobj) {
    const divname = 'DIVPHOTO' + thisobj.id.substring(5);
    const photodiv = document.getElementById(divname);

    const clearDiv = () => photodiv.innerHTML = '';

    const putNonPreviewText = () => {
        clearDiv();
        var labelDiv = document.createElement('div');
        labelDiv.innerText = `Unable to display a preview for this file.`
        photodiv.appendChild(labelDiv);
    }

    const putPreview = (data) => {
        clearDiv();
        var photoImgTag = document.createElement("img");
        photodiv.appendChild(photoImgTag);
        photoImgTag.onerror = () => {
            putNonPreviewText();
        }
        photoImgTag.height = 120;
        photoImgTag.width = 120;
        photoImgTag.src = data;
    }

    if (thisobj.files && thisobj.files[0]) {
        var reader = new FileReader()
        reader.onload = (loadEvent) => {
            putPreview(loadEvent.target.result);
        }
        reader.readAsDataURL(thisobj.files[0]);
    }
}
function GetGoogleGeoCode(address, targetname) {
    var geocoder = new google.maps.Geocoder();
    var target = document.getElementById(targetname);

    geocoder.geocode({ 'address': address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var cvalue = results[0].geometry.location.toString();
            target.value = cvalue.substr(1, cvalue.length - 2);
            //            target.value = results[0].geometry.location.toString();
            LoadGoogleMap(targetname);
        } else {
            alert("Could not find map location for the following reason: " + status);
        }
    });


    /*
      var geocoder = new GClientGeocoder();
      geocoder.getLatLng(
        address,
        function(point) 
        {
          if (!point) 
          {
            window.alert("Location not found for " + address);
          } 
          else 
          {
            var lat = point.lat();
            var lng = point.lng();
            var result = lat + ',' + lng;
            var target = document.getElementById(targetname);
            target.value = result;
            LoadGoogleMap(targetname)
          }
        }
      );
    */
}
function LoadGoogleMap(thisobjname) {
    var thisobj = document.getElementById(thisobjname);
    var StringObj = thisobj.value;
    if (StringObj.indexOf(",") > 0) {
        var divname = 'DIVMAP' + thisobjname.substring(5);
        var LocArray = new Array();
        LocArray = StringObj.split(",");
        var value1 = trim(LocArray[0]);
        var value2 = trim(LocArray[1]);
        if ((value1.match(/[-+]?\b[0-9]*\.?[0-9]+\b/)) && (value2.match(/[-+]?\b[0-9]*\.?[0-9]+\b/))) {
            var num1 = Number(value1);
            var num2 = Number(value2);
            if ((num1 >= -90) && (num1 <= 90) && (num2 >= -180) && (num2 <= 180)) {

                var div = document.getElementById(divname);
                div.style.width = "500px";
                div.style.height = "300px";

                var myOptions = {
                    fullscreenControl: true,
                    zoom: 12,
                    center: new google.maps.LatLng(value1, value2),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(document.getElementById(divname), myOptions);
                //            map.enableScrollWheelZoom();
                var point = new google.maps.LatLng(value1, value2);
                var marker = new google.maps.Marker({
                    position: point,
                    map: map
                });

                /* old code no longer compatible with Google Maps V3
                          var div = document.getElementById(divname);
                          div.style.width = "500px";
                          div.style.height = "300px";
                          var map = new GMap2(document.getElementById(divname));
                          var point = new GLatLng(value1,value2);
                          map.setCenter(point,13);
                          map.addOverlay(new GMarker(point));
                          map.addControl(new GSmallMapControl());
                          map.addControl(new GMapTypeControl());
                          map.enableContinuousZoom();
                */
            }
        }
    }
}


function easyTimeKeyStroke(obj) {
    var k = window.event.keyCode;
    // ignore the arrow, tab, and shift keys
    if ((k >= 37 && k <= 40) || k == 9 || k == 16) {
        return;
    }
    var numsNoZero = '123456789';
    var nums = '1234567890';
    var num6 = '012345';
    var numsPlus = '1234567890:';
    t = obj.value;

    t = t.replace('::', ':');
    t = t.replace(' ', '');
    var colonpos = t.indexOf(':');
    if (colonpos == 0) {
        t = t.substr(1);
        colonpos = t.indexOf(':');
    }
    var i = 0;

    l = t.length;

    var testchars = numsPlus;

    // remove any invalid characters from the string
    for (i = 0; i < l; i++) {
        var test1 = t.substr(i, 1);
        if (i > colonpos) {
            testchars = nums;
        }
        if (testchars.indexOf(test1) == -1) {
            if (i == 0) {
                t = t.substr(1);
            }
            else {
                t = t.substr(0, i) + t.substr(i + 1);
            }
            l = l - 1;
        }
    }
    // make  sure the hours aren't > 12
    t = ValidHours(t);

    // make sure the minutes aren't > 59
    t = ValidTenMinutes(t);

    l = t.length;

    if (l == 0) {
        obj.value = t;
        return;
    }
    var c = t.substr(l - 1);

    switch (l) {
        case 1:
            if (numsNoZero.indexOf(c) == -1) {
                t = '';
            }
            //            if (t != '1') {
            //                t = t + ':';
            //            }
            break;
        case 2:
            if (c != ':') {
                if (nums.indexOf(c) == -1) {
                    t = t.substr(0, 1);
                }
                else {
                    if (Number(c) > 5) {
                        t = t.substr(0, 1);
                    }
                }
            }
            break;
        case 3:
            if (t.indexOf(':') > -1) {
                if (c == ':') {
                    if (!(test2digits(t))) {
                        t = t.substr(0, 1) + ':' + t.substr(1, 1);
                    }
                }
                else {
                    if (num6.indexOf(c) == -1) {
                        t = t.substr(0, 2);
                    }
                }
            }
            else {
                if (nums.indexOf(c) == -1) {
                    t = t.substr(0, 2);
                }
                else {
                    if (!(test2digits(t))) {
                        t = t.substr(0, 1) + ':' + t.substr(1);
                    }
                }
            }
            break;
        case 4:
            if (t.indexOf(':') == -1) {
                if (nums.indexOf(c) == -1) {
                    t = t.substr(0, 1) + ':' + t.substr(1);
                }
                else {
                    if (test2digits(t)) {
                        t = t.substr(0, 2) + ':' + t.substr(2);
                    }
                    else {
                        t = t.substr(0, 1) + ':' + t.substr(1, 2);
                    }
                    t = ValidTenMinutes(t);
                }
            }
            else {
                t = TruncateTime(t);
            }
            break;
        default:
            t = TruncateTime(t);
            break;
    }
    obj.value = t;
}

function test2digits(inputstring) {
    var t = inputstring.substr(0, 2);
    if (t == '10' || t == '11' || t == '12') {
        return true;
    }
    else {
        return false;
    }
}
function TruncateTime(inputstring) {
    var colonpos = inputstring.indexOf(':');
    if (colonpos == 1) {
        return inputstring.substr(0, 4);
    }
    else {
        return inputstring.substr(0, 5);
    }
}
function ValidHours(inputstring) {
    var colonpos = inputstring.indexOf(':');
    if (colonpos > 2) {
        inputstring = inputstring.substr(0, 2) + ':' + inputstring.substr(2, colonpos - 2) + inputstring.substr(colonpos + 1);
    }
    var colonpos = inputstring.indexOf(':');
    if (colonpos == 2) {
        if (!(test2digits(inputstring))) {
            inputstring = inputstring.substr(0, 1) + ':' + inputstring.substr(1, 1) + inputstring.substr(3);
        }
    }
    return inputstring;
}

function ValidTenMinutes(inputstring) {
    var num6 = '012345';
    var inputlength = inputstring.length;
    var colonpos = inputstring.indexOf(':');
    if ((colonpos != -1) && (colonpos + 1 < inputlength)) {
        var testchar = inputstring.substr(colonpos + 1, 1);
        if (num6.indexOf(testchar) == -1) {
            inputstring = inputstring.substr(0, colonpos + 1);
        }
    }
    return inputstring;
}

function easyTimeExit(obj, msg) {
    var nums = '1234567890';
    var t = obj.value;

    t = t.replace(' ', '');

    if ((t.length == 1 && nums.indexOf(t) > -1) || (t.length == 2 && test2digits(t))) {
        t = t + ':00';
    }
    //    else {
    //        var len = t.length;
    //        if (t.substr(len - 1, 1) == ':') {
    //            t = t + '00';
    //        }
    //    }
    if (t.length == 3 && t.indexOf(':') == -1) {
        t = t.substr(0, 1) + ':' + t.substr(1);
    }
    obj.value = t;

    //TestRegExp(obj,/(10|11|12|[0]?[1-9]):[0-5]?\d/, msg);

    TestRegExp(obj, /^((1{1}[012]{1})|([123456789]{1}))(((:)[012345]{1}[0123456789]{1}))$/, msg);

}


function DispErr(thisfield, errormsg) {
    window.alert(errormsg);
}
function buttonlink(control, reportflag) {
    document.body.style.cursor = 'wait';
    if (reportflag == undefined) {
        reportflag = 'N';
    }

    var easyform = document.getElementById('easyform');
    var Selected_Action = document.getElementById('Selected_Action');
    Selected_Action.value = control.name;
    var Selected_Button_ID = document.getElementById('Selected_Button_ID');
    Selected_Button_ID.value = control.id;
    for (i = 0; i < easyform.length; i++) {
        easyform.elements[i].disabled = false;
        if (easyform.elements[i].id.substr(0, 11) == 'HTMLEditKey') {
            submitForm();
        }
    }
    if (reportflag == 'Y') {
        var pop = document.getElementById('ModalReportPop');
        var popup = document.getElementById('ModalReport');
        pop.innerHTML = '<a onclick="easySetReportFormatPDF();">Print (Export to PDF)</a><br><br><a onclick="easySetReportFormatXLS();">Open in Excel</a>';
        $("#ModalReport").modal("show");
    }
    else {
        // disable the button so they don't click it twice.   -jc  3/19/2020
        try {
            control.disabled = true;
        }
        catch (err) {
        }
        easyform.submit(); 				        // Submit the form

    }
}

function easySetReportFormatPDF() {
    var hiddenobj = document.getElementById('Report_Format');
    var easyform = document.getElementById('easyform');
    hiddenobj.value = "PDF";
    easyform.submit();
}
function easySetReportFormatXLS() {
    var hiddenobj = document.getElementById('Report_Format');
    var easyform = document.getElementById('easyform');
    hiddenobj.value = "XLS";
    easyform.submit();
}

//  This function supports select boxes that can save the current page and link you to another page
function selectlink(control) {
    var easyform = document.getElementById('easyform');

    var Index = control.selectedIndex;
    var selectedValue = control.options[Index].value;

    var Selected_Action = document.getElementById('Selected_Action');
    Selected_Action.value = selectedValue;
    var Selected_Button_ID = document.getElementById('Selected_Button_ID');
    Selected_Button_ID.value = selectedValue;
    for (i = 0; i < easyform.length; i++) {
        easyform.elements[i].disabled = false;
        if (easyform.elements[i].id.substr(0, 11) == 'HTMLEditKey') {
            submitForm();
        }
    }
    easyform.submit(); 				        // Submit the form
}

function logoff() {
    var easyform = document.getElementById('easyform');
    var Selected_Action = document.getElementById('Selected_Action');
    Selected_Action.value = 'logoff';
    for (i = 0; i < easyform.length; i++) {
        easyform.elements[i].disabled = false;
        if (easyform.elements[i].id.substr(0, 11) == 'HTMLEditKey') {
            submitForm();
        }
    }
    easyform.submit(); 				        // Submit the form
}

// For mobile format we use a DIV with contenteditable as the rich text editor box.
// On submission, this needs to be copied to a hidden field so it will be uploaded with the form.
function copyMobileRTEs() {
    var easyform = document.getElementById('easyform');
    for (i = 0; i < easyform.length; i++)
    {
        try
        {
            if (easyform.elements[i].id.substr(0, 11) == 'HTMLEditKey') 
            {
                var ControlID = easyform.elements[i].id.substr(11);
                var DivID = 'HTMLEdit' + ControlID;
                var Div = document.getElementById(DivID);
                var HiddenControl = document.getElementById(ControlID);
                HiddenControl.value = Div.innerHTML;
            }
        }
        catch(err)
        {

        }
    }
}



function ConfirmDeleteMultiple(control) {
    var easyform = document.getElementById('easyform');
    var selectcount = 0;
    for (i = 0; i < easyform.length; i++)
    {
        try
        {
            if (easyform.elements[i].id.substr(0, 2) == 'CB' && easyform.elements[i].id.indexOf("ROW") > 0) 
            {
                var tempobj = easyform.elements[i];
                if (tempobj.checked) {
                    selectcount = selectcount + 1;
                }
            }
        }
        catch(err)
        {

        }
    }
    if (selectcount == 0) {
        window.alert("You did not select any items to delete.");
        return false;
    }
    var ok = window.confirm("Your are about to delete " + selectcount + " items.  Press OK to continue.");
    if (ok == true) {
        buttonlink(control);
    }
    else {
        return false;
    }
}

function TestQueryOperator(thisfield) {
    var fieldname = thisfield.name;
    var controlname = 'QUERY' + fieldname.substring(2, 11);
    var controlnameI = controlname + 'I';
    var control2name = 'QUERY2' + fieldname.substring(2, 11);
    var control2nameI = control2name + 'I';
    var control3name = 'QAND' + fieldname.substring(2, 11);
    var control4name = 'QTEXT' + fieldname.substring(2, 11);

    var easyform = document.getElementById('easyform');
    if (easyform.elements[controlname] != undefined) {
        if ((easyform.elements[controlname].length > 1) && (easyform.elements[controlname].type != 'select-multiple')) {
            for (i = 0; i < easyform.elements[controlname].length; i++) {
                if (thisfield.value == '' || thisfield.value == 'is null' || thisfield.value == 'not null') {
                    easyform[controlname][i].style.visibility = 'hidden';
                    easyform[controlname][i].disabled = true;
                }
                else {
                    easyform[controlname][i].style.visibility = 'visible';
                    easyform[controlname][i].disabled = false;
                }
            }
        }
        else {
            if (thisfield.value == '' || thisfield.value == 'is null' || thisfield.value == 'not null') {
                easyform[controlname].style.visibility = 'hidden';
                easyform[controlname].disabled = true;
                if (easyform[controlnameI] != undefined) {
                    easyform[controlnameI].style.visibility = 'hidden';
                }
            }
            else {
                easyform[controlname].style.visibility = 'visible';
                easyform[controlname].disabled = false;
                if (easyform[controlnameI] != undefined) {
                    easyform[controlnameI].style.visibility = 'visible';
                }
            }
        }
    }
    if (easyform.elements[control2name] != undefined) {
        if (easyform.elements[control2name].length > 1) {
            for (i = 0; i < easyform.elements[control2name].length; i++) {
                if (thisfield.value == 'between') {
                    easyform.elements[control2name][i].style.visibility = 'visible';
                    easyform.elements[control2name][i].disabled = false;
                }
                else {
                    easyform.elements[control2name][i].style.visibility = 'hidden';
                    easyform.elements[control2name][i].disabled = true;
                }
            }
        }
        else {
            if (thisfield.value == 'between') {
                easyform.elements[control2name].style.visibility = 'visible';
                easyform.elements[control2name].disabled = false;
                if (easyform[control2nameI] != undefined) {
                    easyform[control2nameI].style.visibility = 'visible';
                }
            }
            else {
                easyform.elements[control2name].style.visibility = 'hidden';
                easyform.elements[control2name].disabled = true;
                if (easyform[control2nameI] != undefined) {
                    easyform[control2nameI].style.visibility = 'hidden';
                }
            }
        }
    }
    if (document.all[control3name] != undefined) {
        if (thisfield.value == 'between') {
            document.all[control3name].style.visibility = 'visible';
        }
        else {
            document.all[control3name].style.visibility = 'hidden';
        }
    }
    if (document.all[control4name] != undefined) {
        for (i = 0; i < document.all[control4name].length; i++) {
            if (thisfield.value == '' || thisfield.value == 'is null' || thisfield.value == 'not null') {
                document.all[control4name][i].style.visibility = 'hidden';
            }
            else {
                document.all[control4name][i].style.visibility = 'visible';
            }
        }
    }
}

function GoToSectionPageNumber(newvalue) {
    var hiddenfield = document.getElementById('NextSectionPageNumber');
    hiddenfield.value = newvalue;

    var Selected_Action = document.getElementById('Selected_Action');
    Selected_Action.value = 'save';
    easyform.submit();
}

function SetRowsPerPage(thisfield) {
    var hiddenfield = document.getElementById('NewRowsPerPage');
    hiddenfield.value = thisfield.value;
    var Selected_Action = document.getElementById('Selected_Action');
    Selected_Action.value = 'save';
    easyform.submit();
}

function AddBookmark(title, url) {
    try {
        // Internet Explorer 
        window.external.AddFavorite(url, title);
    }
    catch (e) {
        try {
            // Mozilla 
            window.sidebar.addPanel(title, url, "");
        }
        catch (e) {
            // Opera 
            if (typeof (opera) == "object") {
                var elem = document.createElement('a');
                elem.setAttribute('href', url);
                elem.setAttribute('title', title);
                elem.setAttribute('rel', 'sidebar');
                elem.click();
            }
            else {
                // Unknown 
                window.alert('This browser does not support this function. You will need to create the bookmark manually to point to this URL: ' + url);
            }
        }
    }
}

function easyToggleTbody(thisobj, sectionid) {
    var tbodyid = 'TBODY' + sectionid;
    var thid = 'TH' + sectionid;
    var op = thisobj.innerHTML;
    if (op == '&nbsp;+&nbsp;') {
        thisobj.innerHTML = '&nbsp;-&nbsp;';
        document.getElementById(tbodyid).style.display = 'table-row-group';
        document.getElementById(thid).style.display = 'table-cell';
    }
    else {
        thisobj.innerHTML = '&nbsp;+&nbsp;';
        document.getElementById(tbodyid).style.display = 'none';
        document.getElementById(thid).style.display = 'none';
    }
}
