<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-language" content="en-us">
<title>Pack 12 Austin</title>
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:n,b,bi">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  <!--
  body
  {
   font-family: 'Montserrat', sans-serif;
  }
  -->
</style>
<link rel="stylesheet" type="text/css" href="/css/bootstrap_override_v11.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap_override_colors_Cub_Scouts.css">
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/XOqlk8PL_yVx6IdpLbpXdiLy/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-5gTdLl6IS0Y6zKiLKimmhaY3IOLosQFpvj9Tvt9s2RAiKLtLUEWOP5N8mtHLNUzF"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script language="JavaScript" src="/soapclient.js">
</script>
<script type="text/javascript" src="/sortableV2.js">
</script>
<script language="JavaScript" src="/CalendarPopup.js">
</script>
<script language="JavaScript" src="/easyJSfunctionsV15.js">
</script>
<script language="JavaScript" src="/GetDeviceWidth.js">
</script>
<script language="JavaScript">
  var cal = new CalendarPopup();
</script>
<script language="JavaScript1.1">
  <!-- Comment out script for old browers
  var win2;
  function ValuesChanged()
  {
    var ChangeFlag = false;
    var easyform = document.getElementById('easyform');
    for (i=0;i<easyform.length;i++)
    {
  	 var tempobj=easyform.elements[i];
      try
      {
      if(tempobj.hasAttribute('name')){
      if (tempobj.name.substring(0,5)=="ENTRY"||(tempobj.name.substring(0,2)=="CB"&&tempobj.name.indexOf("ROW")>=0))
      {
        var newval = "";
        if (tempobj.name.substring(0,5)=="ENTRY")
        {
          var oldvalfieldname="OLD"+tempobj.name.substring(5,14);
        }
        else
        {
          var oldvalfieldname="OLD"+tempobj.name;
        }
        var oldval=easyform.elements[oldvalfieldname].value;
        if (tempobj.type=="radio"||tempobj.type=="checkbox")
        {
          if (tempobj.checked)
          {
            newval=tempobj.value;
          }
          else
          {
            if (tempobj.type=="checkbox")
            {
              newval='N';
            }
            else
            {
              newval=oldval;
            }
          }
          if (tempobj.type=="checkbox")
          {
            if (trim(oldval)=="")
            {
              oldval="N";
            }
          }
        }
        else
        {
          if (tempobj.type=="file")
          {
            if (trim(tempobj.value)=="")
            {
              newval=oldval;
            }
            else
            {
              newval=tempobj.value;
            }
          }
          else
          {
            newval = tempobj.value;
            newval = newval.replace(/&nbsp;/gi,' ');
            oldval = oldval.replace(/&nbsp;/gi,' ');
            newval = newval.replace(/&#34;/gi,'"');
            oldval = oldval.replace(/&#34;/gi,'"');
            newval = newval.replace(/&quot;/gi,'"');
            oldval = oldval.replace(/&quot;/gi,'"');
          }
        }
        if (newval!= oldval)
  	   {
  	     if (parseFloat(newval)==0)
  	     {
  	       newval='';
  	     }
  	     if (parseFloat(oldval)==0)
  	     {
  	       oldval='';
  	     }
        if (newval!= oldval)
  	     {
  	     ChangeFlag = true;
  	     }
  	   }
      }
      }
    }
    catch(err)
    {
    }
    }
    if (ChangeFlag)
    {
      if (confirm('You have not saved your work.  If you continue, this information will be lost.  Click OK to continue'))
      {
        ChangeFlag = false;
      }
    }
    return ChangeFlag;
  }
  function LinkTo(targetURL,targetWindow)
  {
    try
    {
      if (ValuesChanged())
      {
  	  return false;
      }
    }
    catch(err)
    {
    }
      if (targetURL=="language"||targetURL=="format"||targetURL=="reportoption")
      {
         document.body.style.cursor = 'wait';
    	    easyform.Selected_Action.value=targetURL;
     	easyform.submit();
         return true;
      }
      else
      {
        if (targetWindow=='FormReportMultiSectionaspxWindow'||targetWindow=='FormReportaspxWindow')
        {
          var pop = document.getElementById('ModalReportPop');
    	     var popup = document.getElementById('ModalReport');
     	 pop.innerHTML = '<a href="' + targetURL + '&ReportFormat=PDF" target="_blank">Print (Export to PDF)</a><br><br><a href="' + targetURL + '&ReportFormat=XLS" target="_blank">Open in Excel</a>';
          $("#ModalReport").modal("show");
        }
        else
        {
          if (targetWindow=='')
          {
           document.body.style.cursor = 'wait';
  	       window.location=targetURL;
            return true;
          }
          else
          {
            document.body.style.cursor = 'wait';
            var win2 = window.open(targetURL,targetWindow);
            return true;
          }
        }
      }
  }
  function CloseErrorBox()
  {
    if (win2!= undefined)
    {
      if (win2!= null)
      {
        win2.close();
      }
    }
  }
  function TestRegExp(thisfield,regex,errormsg)
  {
    var goodcolor = "#FFFFFF";
    var errorcolor = "#FFAAAA";
    var Hover_Action = document.getElementById('Hover_Action');
    var hoveraction = Hover_Action.value;
    var testvalue = trim(easyGetFieldValue(thisfield.name));
      if ((thisfield.type == "select-one")&&(testvalue=="0"))
      {
        var Index = document.getElementById(thisfield.name).selectedIndex;
  	  if(Index==0)
  	  {
  		if(trim(document.getElementById(thisfield.name).options[Index].text)=="")
  		{
  		  testvalue = "";
  		}
  	  }
      }
      if (thisfield.title==errormsg) thisfield.title="";
      thisfield.style.backgroundColor=goodcolor;
      if ((testvalue.length==0)||(testvalue.match(/^\ +$/)))
      {
        var fieldname = thisfield.name;
        if(fieldname.substr(0,5)=='ENTRY'||fieldname.substr(0,4)=='DATE'||fieldname.substr(0,4)=='TIME'||fieldname.substr(0,4)=='AMPM')
        {
          var requiredflag;
          if(fieldname.substr(0,5)=='ENTRY')
          {
            requiredflag = document.getElementById('RVAL'+thisfield.name);
          }
          else
          {
            requiredflag = document.getElementById('RVALENTRY'+thisfield.name.substring(4));
          }
          if (requiredflag.value=='Y'&&hoveraction!='cancel')
          {
               thisfield.style.backgroundColor=errorcolor;
          }
          else
          {
            return true;
          }
        }
        else
        {
          return true;
        }
      }
      else
      {
        var scriptpattern = new RegExp('< *(?:javascript|script)[^\n\r>]*>');
        if (scriptpattern.test(testvalue.toLowerCase()))
        {
          thisfield.style.backgroundColor=errorcolor;
          thisfield.title='Illegal input detected';
          return false;
        }
        if (regex.length!=0)
        {
          var objRegExp = new RegExp(regex);
          if (objRegExp.test(thisfield.value))
    	     {
            return true;
    	     }
          else
          {
            thisfield.style.backgroundColor=errorcolor;
            thisfield.title=errormsg;
            return false;
          }
        }
        else
        {
          return true;
        }
      }
  }
    function easyFieldExit(thisfield)
    {
      var undefined;
      var onLoad = false;
      if (thisfield.type==undefined)
      {
        onLoad = true;
      }
    }
  //-->
</script>
</head>
<body onunload="CloseErrorBox()" onload="easySetFocus();GetDeviceWidth();">
<form enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/FormList.aspx" target="_self" method="post" name="easyform" id="easyform">
<script language="JavaScript" type="text/javascript">
  <!--
  function submitForm() {
  	//change the following line to true to submit form
  	return true;
  }
  //-->
</script>
<input type="hidden" name="menuopenflag" id="menuopenflag" value="N">
<input type="hidden" name="Selected_Action" id="Selected_Action" value="">
<input type="hidden" name="Hover_Action" id="Hover_Action" value="">
<input type="hidden" name="Selected_Button_ID" id="Selected_Button_ID" value="">
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="346">
<input type="hidden" name="Form_ID" id="Form_ID" value="1331">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=346&amp;Stack=1">
<a href="javascript:togglemenu();">
<div class="navicon" style="width:64px;">
  <table>
    <tbody><tr>
      <td>
        <span class="fa fa-bars" id="main-menu-icon" name="main-menu-icon"></span><span style="font-size:13px;font-family:arial,helvetica,sans-serif;vertical-align:middle;">&nbsp; menu</span>
      </td>
    </tr>
  </tbody></table>
</div>
</a>
<table class="navtable">
  <tbody><tr class="navrow">
    <td style="width:76px;">
    </td>
    <td style="padding:4px;">
      <a href="#" class="navlink nav-home-link" onclick="LinkTo('Pack12Austin/Index.htm','_top')">Pack 12 Austin</a>
    </td>
    <td class="quickmenu1">
      <table>
        <tbody><tr>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6496&amp;Stack=0&amp;Custom_Form_ID=2','');">About Us</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6775&amp;Stack=0&amp;Custom_Form_ID=7','');">Uniform</a>
          </td>
        </tr>
      </tbody></table>
    </td>
    <td class="pull-right">
      <table>
        <tbody><tr>
          <td class="navlink"><a href="javascript:logoff();"><span class="glyphicon glyphicon-user"></span> Log Off</a>
          </td>
          <td class="navlink"><a href="javascript:togglehelp();" style="font-size:1.5em;" id="help-menu-icon" name="help-menu-icon">?</a>
          </td>
          <td class="navlink"><a href="javascript:toggletools();"><span class="glyphicon glyphicon-cog" id="tools-menu-icon" name="tools-menu-icon"></span></a>
          </td>
        </tr>
      </tbody></table>
    </td>
    <td style="width:12px;">
    </td>
  </tr>
  <tr class="navrow quickmenu2">
    <td colspan="5" align="center">
      <table>
        <tbody><tr>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6496&amp;Stack=0&amp;Custom_Form_ID=2','');">About Us</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6775&amp;Stack=0&amp;Custom_Form_ID=7','');">Uniform</a>
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>
<?php require dirname(__DIR__) . '/includes/menu.php'; ?>
<div class="modal fade" id="ModalPageFormat" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <a style="float:right;margin-right:30px;" href="help.aspx?ID=235" target="_blank">
        <span class="glyphicon glyphicon-question-sign help-icon"></span>
        </a>
        Format this site for...
        <br><br>
        <div class="form-group">
          <input type="radio" name="Page_Layout" id="Page_Layout_1" value="1" tabindex="1" checked=""> &nbsp;
          Laptop / Desktop Computer
        </div>
        <div class="form-group">
          <input type="radio" name="Page_Layout" id="Page_Layout_2" value="2" tabindex="2"> &nbsp;
          Smart Phone / Mobile Device
        </div>
      </div>
      <div class="modal-footer">
        <input class="btn btn-success" style="float: left;" tabindex="3" type="button" value="OK" name="Page_Layout_Button" id="Page_Layout_Button" onclick="LinkTo('format','');">
        <button type="button" class="btn btn-danger" style="float: right;" tabindex="4" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div id="toolsmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalPageFormat">Format</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalReportingOptions">Reporting Options</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=346">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=346">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=346">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=180" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=346">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=346">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=346">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=346">My Unit's Support Tickets</a></li>
  <li class="list-group-item"><a href="https://www.TroopWebHost.com/newsletter.htm" target="_blank">TroopWebHost Newsletter</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalAboutSite">About This Site</a></li>
  </ul>
</div>
<div class="modal fade" id="ModalAboutSite" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <img src="https://www.TroopWebHost.com/images/Compass50.png" height="50" width="50" style="float: left; margin-top: 10px; margin-bottom: 20px; margin-left: 0px; margin-right: 15px;">
        This site is provided by <a href="http://www.TroopWebHostCS.com" target="_blank">TroopWebHostCS</a>
        <br><br>
        Copyright&nbsp; 2026 &nbsp;Web Host Services LLC
        <br><br>
        The current user is:&nbsp; &nbsp; mbucklin2
        <br><br>
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=346&amp;Stack=1&amp;Application_ID=2840
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ModalReportingOptions" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <div class="form-group">
          <input type="radio" name="Report_option" id="Report_option_1" value="1" tabindex="1"> &nbsp;
          Open reports as PDF only
        </div>
        <div class="form-group">
          <input type="radio" name="Report_option" id="Report_option_2" value="2" tabindex="2" checked=""> &nbsp;
          Choose to open reports either as PDF or Excel
        </div>
      </div>
      <div class="modal-footer">
        <input class="btn btn-success" style="float: left;" tabindex="3" type="button" value="OK" name="Report_option_Button" id="Report_option_Button" onclick="LinkTo('reportoption','');">
        <button type="button" class="btn btn-danger" style="float: right;" tabindex="4" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ModalReport" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <div class="text-center" id="ModalReportPop" name="ModalReportPop">
        </div>
      </div>
    </div>
  </div>
</div>
<p class="page-title">
Display User Permissions
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7075">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP277491" id="OP277491" value="">
    <input type="hidden" name="OP277511" id="OP277511" value="">
    <input type="hidden" name="OP277501" id="OP277501" value="">
    <input type="hidden" name="OP277521" id="OP277521" value="">
  </div>
</div>
<div class="new-row" id="fs6639">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON4" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs6640">
  <div class="container-fluid container-flex">
    <div class="center-block table-responsive">
      <table>
        <tbody><tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage" onchange="SetRowsPerPage(this);">
<option value="20">20</option>
<option value="50">50</option>
<option value="100" selected="">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('6640,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('6640,2');"><img src="pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        <tr>
          <td>
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid6640">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB6640" id="ROWCOUNTCB6640" value="100">
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">User Name<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">User ID<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Role<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Role Description<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD6640ROW0DATA25304">
                  Aarons, Andrew
                </td>
                <td class="text-center " id="TD6640ROW0DATA25305">
                  AAarons
                </td>
                <td class="text-center " id="TD6640ROW0DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW0DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW1DATA25304">
                  Aarons, Ashley
                </td>
                <td class="text-center " id="TD6640ROW1DATA25305">
                  AAarons766
                </td>
                <td class="text-center " id="TD6640ROW1DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW1DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW2DATA25304">
                  Aarons, Stephen
                </td>
                <td class="text-center " id="TD6640ROW2DATA25305">
                  SAarons
                </td>
                <td class="text-center " id="TD6640ROW2DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW2DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW3DATA25304">
                  Abbott, Albert
                </td>
                <td class="text-center " id="TD6640ROW3DATA25305">
                  AAbbott
                </td>
                <td class="text-center " id="TD6640ROW3DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW3DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW4DATA25304">
                  Abbott, William
                </td>
                <td class="text-center " id="TD6640ROW4DATA25305">
                  WAbbott
                </td>
                <td class="text-center " id="TD6640ROW4DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW4DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW5DATA25304">
                  Almaraz, Alexander
                </td>
                <td class="text-center " id="TD6640ROW5DATA25305">
                  AAlmaraz
                </td>
                <td class="text-center " id="TD6640ROW5DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW5DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW6DATA25304">
                  Almaraz, Eric
                </td>
                <td class="text-center " id="TD6640ROW6DATA25305">
                  EAlmaraz
                </td>
                <td class="text-center " id="TD6640ROW6DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW6DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW7DATA25304">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD6640ROW7DATA25305">
                  JAlvarez
                </td>
                <td class="text-center " id="TD6640ROW7DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW7DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW8DATA25304">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD6640ROW8DATA25305">
                  JAlvarez
                </td>
                <td class="text-center " id="TD6640ROW8DATA25306">
                  Financial Review
                </td>
                <td class="text-center " id="TD6640ROW8DATA25307">
                  View, but not update, all financial information
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW9DATA25304">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD6640ROW9DATA25305">
                  JAlvarez
                </td>
                <td class="text-center " id="TD6640ROW9DATA25306">
                  Membership
                </td>
                <td class="text-center " id="TD6640ROW9DATA25307">
                  Can add and update membership information
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW10DATA25304">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD6640ROW10DATA25305">
                  JAlvarez
                </td>
                <td class="text-center " id="TD6640ROW10DATA25306">
                  Site Administrator
                </td>
                <td class="text-center " id="TD6640ROW10DATA25307">
                  Sets security for the web site
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW11DATA25304">
                  Alvarez, Kristen "Kristy"
                </td>
                <td class="text-center " id="TD6640ROW11DATA25305">
                  KAlvarez
                </td>
                <td class="text-center " id="TD6640ROW11DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW11DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW12DATA25304">
                  Alvarez, Kristen "Kristy"
                </td>
                <td class="text-center " id="TD6640ROW12DATA25305">
                  KAlvarez
                </td>
                <td class="text-center " id="TD6640ROW12DATA25306">
                  Event Planner
                </td>
                <td class="text-center " id="TD6640ROW12DATA25307">
                  Create and maintain upcoming events and record what happened afterward
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW13DATA25304">
                  Alvarez, Layla
                </td>
                <td class="text-center " id="TD6640ROW13DATA25305">
                  LAlvarez
                </td>
                <td class="text-center " id="TD6640ROW13DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW13DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW14DATA25304">
                  Alvarez, Mateo
                </td>
                <td class="text-center " id="TD6640ROW14DATA25305">
                  MAlvarez
                </td>
                <td class="text-center " id="TD6640ROW14DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW14DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW15DATA25304">
                  Applegate, Chris
                </td>
                <td class="text-center " id="TD6640ROW15DATA25305">
                  CApplegate
                </td>
                <td class="text-center " id="TD6640ROW15DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW15DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW16DATA25304">
                  Applegate, Sebastian
                </td>
                <td class="text-center " id="TD6640ROW16DATA25305">
                  SApplegate
                </td>
                <td class="text-center " id="TD6640ROW16DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW16DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW17DATA25304">
                  Babb, Chris
                </td>
                <td class="text-center " id="TD6640ROW17DATA25305">
                  CBabb
                </td>
                <td class="text-center " id="TD6640ROW17DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW17DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW18DATA25304">
                  Babb, Tyson
                </td>
                <td class="text-center " id="TD6640ROW18DATA25305">
                  TBabb
                </td>
                <td class="text-center " id="TD6640ROW18DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW18DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW19DATA25304">
                  Bayes, Dylan
                </td>
                <td class="text-center " id="TD6640ROW19DATA25305">
                  DBayes
                </td>
                <td class="text-center " id="TD6640ROW19DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW19DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW20DATA25304">
                  Bayes, Phillip
                </td>
                <td class="text-center " id="TD6640ROW20DATA25305">
                  PBayes
                </td>
                <td class="text-center " id="TD6640ROW20DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW20DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW21DATA25304">
                  Blair, Frankie
                </td>
                <td class="text-center " id="TD6640ROW21DATA25305">
                  FBlair
                </td>
                <td class="text-center " id="TD6640ROW21DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW21DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW22DATA25304">
                  Blair, Joe
                </td>
                <td class="text-center " id="TD6640ROW22DATA25305">
                  JBlair
                </td>
                <td class="text-center " id="TD6640ROW22DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW22DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW23DATA25304">
                  Bruyn, Emerson
                </td>
                <td class="text-center " id="TD6640ROW23DATA25305">
                  EBruyn
                </td>
                <td class="text-center " id="TD6640ROW23DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW23DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW24DATA25304">
                  Bruyn, Meaghan
                </td>
                <td class="text-center " id="TD6640ROW24DATA25305">
                  MBruyn
                </td>
                <td class="text-center " id="TD6640ROW24DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW24DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW25DATA25304">
                  Bucklin, Emmett
                </td>
                <td class="text-center " id="TD6640ROW25DATA25305">
                  EBucklin
                </td>
                <td class="text-center " id="TD6640ROW25DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW25DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW26DATA25304">
                  Bucklin, Mary
                </td>
                <td class="text-center " id="TD6640ROW26DATA25305">
                  MBucklin
                </td>
                <td class="text-center " id="TD6640ROW26DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW26DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW27DATA25304">
                  Bucklin, Mary
                </td>
                <td class="text-center " id="TD6640ROW27DATA25305">
                  MBucklin
                </td>
                <td class="text-center " id="TD6640ROW27DATA25306">
                  Cub Scout Advancement
                </td>
                <td class="text-center " id="TD6640ROW27DATA25307">
                  Update cub scout status on adventures, badges, and awards
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW28DATA25304">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD6640ROW28DATA25305">
                  MBucklin796
                </td>
                <td class="text-center " id="TD6640ROW28DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW28DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW29DATA25304">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD6640ROW29DATA25305">
                  MBucklin796
                </td>
                <td class="text-center " id="TD6640ROW29DATA25306">
                  Financial Review
                </td>
                <td class="text-center " id="TD6640ROW29DATA25307">
                  View, but not update, all financial information
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW30DATA25304">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD6640ROW30DATA25305">
                  MBucklin796
                </td>
                <td class="text-center " id="TD6640ROW30DATA25306">
                  Leader
                </td>
                <td class="text-center " id="TD6640ROW30DATA25307">
                  A member in a leadership position with access to additional functions
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW31DATA25304">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD6640ROW31DATA25305">
                  MBucklin796
                </td>
                <td class="text-center " id="TD6640ROW31DATA25306">
                  Membership
                </td>
                <td class="text-center " id="TD6640ROW31DATA25307">
                  Can add and update membership information
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW32DATA25304">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD6640ROW32DATA25305">
                  MBucklin796
                </td>
                <td class="text-center " id="TD6640ROW32DATA25306">
                  Site Administrator
                </td>
                <td class="text-center " id="TD6640ROW32DATA25307">
                  Sets security for the web site
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW33DATA25304">
                  Bucklin, Michael2
                </td>
                <td class="text-center " id="TD6640ROW33DATA25305">
                  mbucklin2
                </td>
                <td class="text-center " id="TD6640ROW33DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW33DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW34DATA25304">
                  Bucklin, Michael2
                </td>
                <td class="text-center " id="TD6640ROW34DATA25305">
                  mbucklin2
                </td>
                <td class="text-center " id="TD6640ROW34DATA25306">
                  Site Administrator
                </td>
                <td class="text-center " id="TD6640ROW34DATA25307">
                  Sets security for the web site
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW35DATA25304">
                  Bucklin, Michael3
                </td>
                <td class="text-center " id="TD6640ROW35DATA25305">
                  mbucklin3
                </td>
                <td class="text-center " id="TD6640ROW35DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW35DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW36DATA25304">
                  Bush, Greg
                </td>
                <td class="text-center " id="TD6640ROW36DATA25305">
                  GBush
                </td>
                <td class="text-center " id="TD6640ROW36DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW36DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW37DATA25304">
                  Bush, Kai
                </td>
                <td class="text-center " id="TD6640ROW37DATA25305">
                  KBush
                </td>
                <td class="text-center " id="TD6640ROW37DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW37DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW38DATA25304">
                  Byrd, Amanda
                </td>
                <td class="text-center " id="TD6640ROW38DATA25305">
                  AByrd
                </td>
                <td class="text-center " id="TD6640ROW38DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW38DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW39DATA25304">
                  Byrd, Benjamin
                </td>
                <td class="text-center " id="TD6640ROW39DATA25305">
                  BByrd
                </td>
                <td class="text-center " id="TD6640ROW39DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW39DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW40DATA25304">
                  Byrd, Bradley "Ryan"
                </td>
                <td class="text-center " id="TD6640ROW40DATA25305">
                  RByrd
                </td>
                <td class="text-center " id="TD6640ROW40DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW40DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW41DATA25304">
                  Byrd, Bradley "Ryan"
                </td>
                <td class="text-center " id="TD6640ROW41DATA25305">
                  RByrd
                </td>
                <td class="text-center " id="TD6640ROW41DATA25306">
                  Leader
                </td>
                <td class="text-center " id="TD6640ROW41DATA25307">
                  A member in a leadership position with access to additional functions
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW42DATA25304">
                  Chakarvarty, Mridul
                </td>
                <td class="text-center " id="TD6640ROW42DATA25305">
                  MChakarvarty
                </td>
                <td class="text-center " id="TD6640ROW42DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW42DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW43DATA25304">
                  Chidester, Amy
                </td>
                <td class="text-center " id="TD6640ROW43DATA25305">
                  AChidester
                </td>
                <td class="text-center " id="TD6640ROW43DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW43DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW44DATA25304">
                  Chidester, Amy
                </td>
                <td class="text-center " id="TD6640ROW44DATA25305">
                  AChidester
                </td>
                <td class="text-center " id="TD6640ROW44DATA25306">
                  Leader
                </td>
                <td class="text-center " id="TD6640ROW44DATA25307">
                  A member in a leadership position with access to additional functions
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW45DATA25304">
                  Chidester, Ella
                </td>
                <td class="text-center " id="TD6640ROW45DATA25305">
                  EChidester
                </td>
                <td class="text-center " id="TD6640ROW45DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW45DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW46DATA25304">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD6640ROW46DATA25305">
                  RChidester
                </td>
                <td class="text-center " id="TD6640ROW46DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW46DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW47DATA25304">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD6640ROW47DATA25305">
                  RChidester
                </td>
                <td class="text-center " id="TD6640ROW47DATA25306">
                  Event Planner
                </td>
                <td class="text-center " id="TD6640ROW47DATA25307">
                  Create and maintain upcoming events and record what happened afterward
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW48DATA25304">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD6640ROW48DATA25305">
                  RChidester
                </td>
                <td class="text-center " id="TD6640ROW48DATA25306">
                  Financial Review
                </td>
                <td class="text-center " id="TD6640ROW48DATA25307">
                  View, but not update, all financial information
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW49DATA25304">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD6640ROW49DATA25305">
                  RChidester
                </td>
                <td class="text-center " id="TD6640ROW49DATA25306">
                  Leader
                </td>
                <td class="text-center " id="TD6640ROW49DATA25307">
                  A member in a leadership position with access to additional functions
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW50DATA25304">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD6640ROW50DATA25305">
                  RChidester
                </td>
                <td class="text-center " id="TD6640ROW50DATA25306">
                  Treasurer
                </td>
                <td class="text-center " id="TD6640ROW50DATA25307">
                  Can update financial information
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW51DATA25304">
                  Chidester, Taylor
                </td>
                <td class="text-center " id="TD6640ROW51DATA25305">
                  TChidester
                </td>
                <td class="text-center " id="TD6640ROW51DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW51DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW52DATA25304">
                  Daru, Bhargav
                </td>
                <td class="text-center " id="TD6640ROW52DATA25305">
                  BDaru
                </td>
                <td class="text-center " id="TD6640ROW52DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW52DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW53DATA25304">
                  de los Santos Garza, Andrea
                </td>
                <td class="text-center " id="TD6640ROW53DATA25305">
                  ADelossantosgarza
                </td>
                <td class="text-center " id="TD6640ROW53DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW53DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW54DATA25304">
                  de los Santos Garza, Diego "Leo"
                </td>
                <td class="text-center " id="TD6640ROW54DATA25305">
                  DDelossantosgarza
                </td>
                <td class="text-center " id="TD6640ROW54DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW54DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW55DATA25304">
                  De Los Santos Tamez, Diego
                </td>
                <td class="text-center " id="TD6640ROW55DATA25305">
                  DDe Los Santos Tamez
                </td>
                <td class="text-center " id="TD6640ROW55DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW55DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW56DATA25304">
                  De Los Santos Tamez, Diego
                </td>
                <td class="text-center " id="TD6640ROW56DATA25305">
                  DDe Los Santos Tamez
                </td>
                <td class="text-center " id="TD6640ROW56DATA25306">
                  Leader
                </td>
                <td class="text-center " id="TD6640ROW56DATA25307">
                  A member in a leadership position with access to additional functions
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW57DATA25304">
                  DeMartini, Emilia
                </td>
                <td class="text-center " id="TD6640ROW57DATA25305">
                  EDemartini
                </td>
                <td class="text-center " id="TD6640ROW57DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW57DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW58DATA25304">
                  DeMartini, Trevor
                </td>
                <td class="text-center " id="TD6640ROW58DATA25305">
                  TDeMartini
                </td>
                <td class="text-center " id="TD6640ROW58DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW58DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW59DATA25304">
                  DeMartini, Vincent
                </td>
                <td class="text-center " id="TD6640ROW59DATA25305">
                  VDemartini
                </td>
                <td class="text-center " id="TD6640ROW59DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW59DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW60DATA25304">
                  Dennis, Khoi
                </td>
                <td class="text-center " id="TD6640ROW60DATA25305">
                  KDennis
                </td>
                <td class="text-center " id="TD6640ROW60DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW60DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW61DATA25304">
                  Dennis, Michael
                </td>
                <td class="text-center " id="TD6640ROW61DATA25305">
                  MDennis
                </td>
                <td class="text-center " id="TD6640ROW61DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW61DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW62DATA25304">
                  Desouky, Noura
                </td>
                <td class="text-center " id="TD6640ROW62DATA25305">
                  NDesouky
                </td>
                <td class="text-center " id="TD6640ROW62DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW62DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW63DATA25304">
                  Diaz, Adam
                </td>
                <td class="text-center " id="TD6640ROW63DATA25305">
                  ADiaz
                </td>
                <td class="text-center " id="TD6640ROW63DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW63DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW64DATA25304">
                  Diaz, Winslow
                </td>
                <td class="text-center " id="TD6640ROW64DATA25305">
                  WDiaz
                </td>
                <td class="text-center " id="TD6640ROW64DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW64DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW65DATA25304">
                  Dranguet, Benjamin
                </td>
                <td class="text-center " id="TD6640ROW65DATA25305">
                  BDranguet
                </td>
                <td class="text-center " id="TD6640ROW65DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW65DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW66DATA25304">
                  Duryee, David
                </td>
                <td class="text-center " id="TD6640ROW66DATA25305">
                  DDuryee
                </td>
                <td class="text-center " id="TD6640ROW66DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW66DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW67DATA25304">
                  D'Vincent, Lilli
                </td>
                <td class="text-center " id="TD6640ROW67DATA25305">
                  LD'Vincent
                </td>
                <td class="text-center " id="TD6640ROW67DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW67DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW68DATA25304">
                  D'Vincent, Mason
                </td>
                <td class="text-center " id="TD6640ROW68DATA25305">
                  MDvincent
                </td>
                <td class="text-center " id="TD6640ROW68DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW68DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW69DATA25304">
                  Elrakabawy, Erin
                </td>
                <td class="text-center " id="TD6640ROW69DATA25305">
                  EElrakabawy
                </td>
                <td class="text-center " id="TD6640ROW69DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW69DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW70DATA25304">
                  Espejel, Dean
                </td>
                <td class="text-center " id="TD6640ROW70DATA25305">
                  DEspejel
                </td>
                <td class="text-center " id="TD6640ROW70DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW70DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW71DATA25304">
                  Espejel, Moshe
                </td>
                <td class="text-center " id="TD6640ROW71DATA25305">
                  MEspejel
                </td>
                <td class="text-center " id="TD6640ROW71DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW71DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW72DATA25304">
                  Gaete, Holly
                </td>
                <td class="text-center " id="TD6640ROW72DATA25305">
                  HGaete
                </td>
                <td class="text-center " id="TD6640ROW72DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW72DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW73DATA25304">
                  Gaete, Holly
                </td>
                <td class="text-center " id="TD6640ROW73DATA25305">
                  HGaete
                </td>
                <td class="text-center " id="TD6640ROW73DATA25306">
                  Membership
                </td>
                <td class="text-center " id="TD6640ROW73DATA25307">
                  Can add and update membership information
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW74DATA25304">
                  Gaete, Lincoln
                </td>
                <td class="text-center " id="TD6640ROW74DATA25305">
                  LGaete
                </td>
                <td class="text-center " id="TD6640ROW74DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW74DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW75DATA25304">
                  Galdo, Anne
                </td>
                <td class="text-center " id="TD6640ROW75DATA25305">
                  AGaldo
                </td>
                <td class="text-center " id="TD6640ROW75DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW75DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW76DATA25304">
                  Galdo, Henry
                </td>
                <td class="text-center " id="TD6640ROW76DATA25305">
                  HGaldo
                </td>
                <td class="text-center " id="TD6640ROW76DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW76DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW77DATA25304">
                  Gibson, Charleston
                </td>
                <td class="text-center " id="TD6640ROW77DATA25305">
                  CGibson
                </td>
                <td class="text-center " id="TD6640ROW77DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW77DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW78DATA25304">
                  Gibson, Steven
                </td>
                <td class="text-center " id="TD6640ROW78DATA25305">
                  SGibson
                </td>
                <td class="text-center " id="TD6640ROW78DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW78DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW79DATA25304">
                  Goodine, David
                </td>
                <td class="text-center " id="TD6640ROW79DATA25305">
                  DGoodine
                </td>
                <td class="text-center " id="TD6640ROW79DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW79DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW80DATA25304">
                  Goodine, David
                </td>
                <td class="text-center " id="TD6640ROW80DATA25305">
                  DGoodine
                </td>
                <td class="text-center " id="TD6640ROW80DATA25306">
                  Leader
                </td>
                <td class="text-center " id="TD6640ROW80DATA25307">
                  A member in a leadership position with access to additional functions
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW81DATA25304">
                  Goodine, Jack
                </td>
                <td class="text-center " id="TD6640ROW81DATA25305">
                  JGoodine
                </td>
                <td class="text-center " id="TD6640ROW81DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW81DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW82DATA25304">
                  Gurrola, Benjamin
                </td>
                <td class="text-center " id="TD6640ROW82DATA25305">
                  BGurrola
                </td>
                <td class="text-center " id="TD6640ROW82DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW82DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW83DATA25304">
                  Gurrola, Jacqueline
                </td>
                <td class="text-center " id="TD6640ROW83DATA25305">
                  JGurrola
                </td>
                <td class="text-center " id="TD6640ROW83DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW83DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW84DATA25304">
                  Gurrola, Matthew
                </td>
                <td class="text-center " id="TD6640ROW84DATA25305">
                  mpgurrola
                </td>
                <td class="text-center " id="TD6640ROW84DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW84DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW85DATA25304">
                  Hallar, Henry
                </td>
                <td class="text-center " id="TD6640ROW85DATA25305">
                  HHallar
                </td>
                <td class="text-center " id="TD6640ROW85DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW85DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW86DATA25304">
                  Hallar, Ingrid
                </td>
                <td class="text-center " id="TD6640ROW86DATA25305">
                  IHallar
                </td>
                <td class="text-center " id="TD6640ROW86DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW86DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW87DATA25304">
                  Hanss Blair, Rachel
                </td>
                <td class="text-center " id="TD6640ROW87DATA25305">
                  RHanss Blair
                </td>
                <td class="text-center " id="TD6640ROW87DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW87DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW88DATA25304">
                  Harrison, Abi
                </td>
                <td class="text-center " id="TD6640ROW88DATA25305">
                  AHarrison
                </td>
                <td class="text-center " id="TD6640ROW88DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW88DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW89DATA25304">
                  Harrison, James
                </td>
                <td class="text-center " id="TD6640ROW89DATA25305">
                  JHarrison
                </td>
                <td class="text-center " id="TD6640ROW89DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW89DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW90DATA25304">
                  Hayes, David
                </td>
                <td class="text-center " id="TD6640ROW90DATA25305">
                  DHayes
                </td>
                <td class="text-center " id="TD6640ROW90DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW90DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW91DATA25304">
                  Hickman, Arthur "Trey"
                </td>
                <td class="text-center " id="TD6640ROW91DATA25305">
                  THickman
                </td>
                <td class="text-center " id="TD6640ROW91DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW91DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW92DATA25304">
                  Hickman, Arthur "Trey"
                </td>
                <td class="text-center " id="TD6640ROW92DATA25305">
                  THickman
                </td>
                <td class="text-center " id="TD6640ROW92DATA25306">
                  Leader
                </td>
                <td class="text-center " id="TD6640ROW92DATA25307">
                  A member in a leadership position with access to additional functions
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW93DATA25304">
                  Hickman, Maya
                </td>
                <td class="text-center " id="TD6640ROW93DATA25305">
                  MHickman
                </td>
                <td class="text-center " id="TD6640ROW93DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW93DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW94DATA25304">
                  Hoy, Ashton
                </td>
                <td class="text-center " id="TD6640ROW94DATA25305">
                  AHoy
                </td>
                <td class="text-center " id="TD6640ROW94DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW94DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW95DATA25304">
                  Hoy, Nicole
                </td>
                <td class="text-center " id="TD6640ROW95DATA25305">
                  NHoy
                </td>
                <td class="text-center " id="TD6640ROW95DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW95DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW96DATA25304">
                  Hume, Beatrix
                </td>
                <td class="text-center " id="TD6640ROW96DATA25305">
                  BHume
                </td>
                <td class="text-center " id="TD6640ROW96DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW96DATA25307">
                  A cub scout
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW97DATA25304">
                  Hume, John
                </td>
                <td class="text-center " id="TD6640ROW97DATA25305">
                  JHume
                </td>
                <td class="text-center " id="TD6640ROW97DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW97DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW98DATA25304">
                  Idell, Claire
                </td>
                <td class="text-center " id="TD6640ROW98DATA25305">
                  CIdell
                </td>
                <td class="text-center " id="TD6640ROW98DATA25306">
                  Adult
                </td>
                <td class="text-center " id="TD6640ROW98DATA25307">
                  A parent or adult leader
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6640ROW99DATA25304">
                  Idell, Gabe
                </td>
                <td class="text-center " id="TD6640ROW99DATA25305">
                  GIdell
                </td>
                <td class="text-center " id="TD6640ROW99DATA25306">
                  Scout
                </td>
                <td class="text-center " id="TD6640ROW99DATA25307">
                  A cub scout
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="4" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=346&amp;Form_ID=1331&amp;Stack=1&amp;SectionID=6640&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=346&amp;Form_ID=1331&amp;Stack=1&amp;SectionID=6640&amp;ReportFormat=XLS','_blank');">
                </td>
              </tr>
              </tfoot>
            </table>
          </td>
        </tr>
        <tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage" onchange="SetRowsPerPage(this);">
<option value="20">20</option>
<option value="50">50</option>
<option value="100" selected="">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('6640,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('6640,2');"><img src="pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
      </tbody></table>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON4">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>