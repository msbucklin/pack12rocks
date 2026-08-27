<html lang="en"><head><meta http-equiv="origin-trial" content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-language" content="en-us">
<title>Pack 12 Austin</title>
<link rel="shortcut icon" href="favicon.ico">
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
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap_override_v11.css">
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap_override_colors_Cub_Scouts.css">
<link rel="stylesheet" type="text/css" href="https://ogo.blob.core.windows.net/cspack12austin/bootstrap_override_pack12_v23_202682781617853727410.css">
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/GY0lZUzQQgeA0wDxVI-SQEZw/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-NChJ2cXgODPp5agrUf6ahapDln/pkXyyqTB9Bce/aSQACS3OlLS1j3sKya1lVM+n"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script language="JavaScript" src="/assets/js/soapclient.js">
</script>
<script type="text/javascript" src="/assets/js/sortableV2.js">
</script>
<script language="JavaScript" src="/assets/js/CalendarPopup.js">
</script>
<script language="JavaScript" src="/assets/js/easyJSfunctionsV15.js">
</script>
<script language="JavaScript" src="/assets/js/GetDeviceWidth.js">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="399">
<input type="hidden" name="Form_ID" id="Form_ID" value="1499">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="2">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=399&amp;Stack=2">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=2','');">My Contact Information</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=2','');">My Contact Information</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=399">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=399">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=399">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=214" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=399">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=399">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=399">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=399">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=399&amp;Stack=2&amp;Application_ID=2840
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
Awards
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7401">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=0&amp;Stack=3','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON2" type="button" name="save continue" title="Delete Unused Awards" value="Delete Unused Awards" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON3" type="button" name="save continue" title="View Master Award List" value="View Master Award List" onclick="buttonlink(this,'N');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs7400">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP293231" id="OP293231" value="">
    <input type="hidden" name="OP529295" id="OP529295" value="">
    <input type="hidden" name="OP5498811" id="OP5498811" value="">
  </div>
</div>
<div class="new-row" id="fs7402">
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
</span></div>
</td>
</tr>
        <tr>
          <td>
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid7402">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB7402" id="ROWCOUNTCB7402" value="81">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Award<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">BSA Code<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Multiple Allowed?<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD7402ROW0DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=233&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW0DATA29328">
                  50-Miler Award
                </td>
                <td class="text-center " id="TD7402ROW0DATA52930">
                  97
                </td>
                <td class="text-center " id="TD7402ROW0DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW0DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=233&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW1DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=234&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW1DATA29328">
                  Alumni Award
                </td>
                <td class="text-center " id="TD7402ROW1DATA52930">
                  21
                </td>
                <td class="text-center " id="TD7402ROW1DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW1DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=234&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW2DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=235&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW2DATA29328">
                  Asian American Spirit of Scouting Service Award
                </td>
                <td class="text-center " id="TD7402ROW2DATA52930">
                  23
                </td>
                <td class="text-center " id="TD7402ROW2DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW2DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=235&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW3DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=236&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW3DATA29328">
                  Community Organization Award
                </td>
                <td class="text-center " id="TD7402ROW3DATA52930">
                  25
                </td>
                <td class="text-center " id="TD7402ROW3DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW3DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=236&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW4DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=237&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW4DATA29328">
                  Cub Scout Den Leader Award
                </td>
                <td class="text-center " id="TD7402ROW4DATA52930">
                  26
                </td>
                <td class="text-center " id="TD7402ROW4DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW4DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=237&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW5DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=238&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW5DATA29328">
                  Cub Scout Nova Award - 1-2-3 Go!
                </td>
                <td class="text-center " id="TD7402ROW5DATA52930">
                  157
                </td>
                <td class="text-center " id="TD7402ROW5DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW5DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=238&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW6DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=239&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW6DATA29328">
                  Cub Scout Nova Award - Down and Dirty
                </td>
                <td class="text-center " id="TD7402ROW6DATA52930">
                  160
                </td>
                <td class="text-center " id="TD7402ROW6DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW6DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=239&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW7DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=240&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW7DATA29328">
                  Cub Scout Nova Award - Fearful Symmetry
                </td>
                <td class="text-center " id="TD7402ROW7DATA52930">
                  3,405
                </td>
                <td class="text-center " id="TD7402ROW7DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW7DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=240&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW8DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=241&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW8DATA29328">
                  Cub Scout Nova Award - Nova WILD!
                </td>
                <td class="text-center " id="TD7402ROW8DATA52930">
                  161
                </td>
                <td class="text-center " id="TD7402ROW8DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW8DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=241&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW9DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=242&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW9DATA29328">
                  Cub Scout Nova Award - Out of This World
                </td>
                <td class="text-center " id="TD7402ROW9DATA52930">
                  177
                </td>
                <td class="text-center " id="TD7402ROW9DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW9DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=242&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW10DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=243&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW10DATA29328">
                  Cub Scout Nova Award - Science Everywhere
                </td>
                <td class="text-center " id="TD7402ROW10DATA52930">
                  154
                </td>
                <td class="text-center " id="TD7402ROW10DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW10DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=243&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW11DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=244&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW11DATA29328">
                  Cub Scout Nova Award - Swing!
                </td>
                <td class="text-center " id="TD7402ROW11DATA52930">
                  156
                </td>
                <td class="text-center " id="TD7402ROW11DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW11DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=244&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW12DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=245&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW12DATA29328">
                  Cub Scout Nova Award - Tech Talk
                </td>
                <td class="text-center " id="TD7402ROW12DATA52930">
                  155
                </td>
                <td class="text-center " id="TD7402ROW12DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW12DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=245&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW13DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=246&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW13DATA29328">
                  Cub Scout Nova Award - Uncovering the Past
                </td>
                <td class="text-center " id="TD7402ROW13DATA52930">
                  3,404
                </td>
                <td class="text-center " id="TD7402ROW13DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW13DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=246&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW14DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=247&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW14DATA29328">
                  Cub Scout Outdoor Activity Award v2015 (Bear)
                </td>
                <td class="text-center " id="TD7402ROW14DATA52930">
                  175
                </td>
                <td class="text-center " id="TD7402ROW14DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW14DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=247&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW15DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=248&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW15DATA29328">
                  Cub Scout Outdoor Activity Award v2015 (Tiger)
                </td>
                <td class="text-center " id="TD7402ROW15DATA52930">
                  173
                </td>
                <td class="text-center " id="TD7402ROW15DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW15DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=248&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW16DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=249&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW16DATA29328">
                  Cub Scout Outdoor Activity Award v2015 (Webelos)
                </td>
                <td class="text-center " id="TD7402ROW16DATA52930">
                  176
                </td>
                <td class="text-center " id="TD7402ROW16DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW16DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=249&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW17DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=250&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW17DATA29328">
                  Cub Scout Outdoor Activity Award v2015 (Wolf)
                </td>
                <td class="text-center " id="TD7402ROW17DATA52930">
                  174
                </td>
                <td class="text-center " id="TD7402ROW17DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW17DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=250&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW18DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=251&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW18DATA29328">
                  Cub Scout Supernova Award
                </td>
                <td class="text-center " id="TD7402ROW18DATA52930">
                  3,407
                </td>
                <td class="text-center " id="TD7402ROW18DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW18DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=251&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW19DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=252&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW19DATA29328">
                  Cub Scout World Conservation Award v2015 (Bear)
                </td>
                <td class="text-center " id="TD7402ROW19DATA52930">
                  171
                </td>
                <td class="text-center " id="TD7402ROW19DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW19DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=252&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW20DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=253&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW20DATA29328">
                  Cub Scout World Conservation Award v2015 (Webelos)
                </td>
                <td class="text-center " id="TD7402ROW20DATA52930">
                  172
                </td>
                <td class="text-center " id="TD7402ROW20DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW20DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=253&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW21DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=254&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW21DATA29328">
                  Cub Scout World Conservation Award v2015 (Wolf)
                </td>
                <td class="text-center " id="TD7402ROW21DATA52930">
                  170
                </td>
                <td class="text-center " id="TD7402ROW21DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW21DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=254&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW22DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=255&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW22DATA29328">
                  Cub Scouting's Leave No Trace Awareness Award (for Leaders)
                </td>
                <td class="text-center " id="TD7402ROW22DATA52930">
                  56
                </td>
                <td class="text-center " id="TD7402ROW22DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW22DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=255&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW23DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=256&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW23DATA29328">
                  District Award of Merit
                </td>
                <td class="text-center " id="TD7402ROW23DATA52930">
                  28
                </td>
                <td class="text-center " id="TD7402ROW23DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW23DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=256&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW24DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=257&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW24DATA29328">
                  Eagle Scout NESA Life Membership Award
                </td>
                <td class="text-center " id="TD7402ROW24DATA52930">
                  31
                </td>
                <td class="text-center " id="TD7402ROW24DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW24DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=257&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW25DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="650" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=258&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW25DATA29328">
                  Emergency Preparedness Award
                </td>
                <td class="text-center " id="TD7402ROW25DATA52930">
                  3,534
                </td>
                <td class="text-center " id="TD7402ROW25DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW25DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="660" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=258&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW26DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="670" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=259&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW26DATA29328">
                  Emergency Preparedness BSA (Bear)
                </td>
                <td class="text-center " id="TD7402ROW26DATA52930">
                  150
                </td>
                <td class="text-center " id="TD7402ROW26DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW26DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="680" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=259&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW27DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="690" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=260&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW27DATA29328">
                  Emergency Preparedness BSA (Tiger)
                </td>
                <td class="text-center " id="TD7402ROW27DATA52930">
                  148
                </td>
                <td class="text-center " id="TD7402ROW27DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW27DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="700" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=260&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW28DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="710" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=261&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW28DATA29328">
                  Emergency Preparedness BSA (Webelos)
                </td>
                <td class="text-center " id="TD7402ROW28DATA52930">
                  151
                </td>
                <td class="text-center " id="TD7402ROW28DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW28DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="720" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=261&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW29DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="730" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=262&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW29DATA29328">
                  Emergency Preparedness BSA (Wolf)
                </td>
                <td class="text-center " id="TD7402ROW29DATA52930">
                  149
                </td>
                <td class="text-center " id="TD7402ROW29DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW29DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="740" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=262&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW30DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="750" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=263&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW30DATA29328">
                  Heroism Award
                </td>
                <td class="text-center " id="TD7402ROW30DATA52930">
                  32
                </td>
                <td class="text-center " id="TD7402ROW30DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW30DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="760" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=263&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW31DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="770" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=264&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW31DATA29328">
                  Historic Trails Award
                </td>
                <td class="text-center " id="TD7402ROW31DATA52930">
                  99
                </td>
                <td class="text-center " id="TD7402ROW31DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW31DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="780" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=264&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW32DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="790" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=265&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW32DATA29328">
                  Honor Medal
                </td>
                <td class="text-center " id="TD7402ROW32DATA52930">
                  33
                </td>
                <td class="text-center " id="TD7402ROW32DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW32DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="800" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=265&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW33DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="810" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=266&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW33DATA29328">
                  International Scouter
                </td>
                <td class="text-center " id="TD7402ROW33DATA52930">
                  34
                </td>
                <td class="text-center " id="TD7402ROW33DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW33DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="820" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=266&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW34DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="830" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=267&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW34DATA29328">
                  International Spirit Award - Youth
                </td>
                <td class="text-center " id="TD7402ROW34DATA52930">
                  3,413
                </td>
                <td class="text-center " id="TD7402ROW34DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW34DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="840" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=267&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW35DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="850" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=268&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW35DATA29328">
                  Interpreter Strip
                </td>
                <td class="text-center " id="TD7402ROW35DATA52930">
                  100
                </td>
                <td class="text-center " id="TD7402ROW35DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW35DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="860" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=268&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW36DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="870" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=269&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW36DATA29328">
                  James E. West Fellowship Award
                </td>
                <td class="text-center " id="TD7402ROW36DATA52930">
                  35
                </td>
                <td class="text-center " id="TD7402ROW36DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW36DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="880" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=269&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW37DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="890" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=270&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW37DATA29328">
                  Medal of Merit
                </td>
                <td class="text-center " id="TD7402ROW37DATA52930">
                  36
                </td>
                <td class="text-center " id="TD7402ROW37DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW37DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="900" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=270&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW38DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="910" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=271&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW38DATA29328">
                  Messengers of Peace
                </td>
                <td class="text-center " id="TD7402ROW38DATA52930">
                  141
                </td>
                <td class="text-center " id="TD7402ROW38DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW38DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="920" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=271&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW39DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="930" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=272&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW39DATA29328">
                  National Summertime Pack Award pin (Bear)
                </td>
                <td class="text-center " id="TD7402ROW39DATA52930">
                  66
                </td>
                <td class="text-center " id="TD7402ROW39DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW39DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="940" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=272&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW40DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="950" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=273&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW40DATA29328">
                  National Summertime Pack Award pin (Tiger Cub)
                </td>
                <td class="text-center " id="TD7402ROW40DATA52930">
                  64
                </td>
                <td class="text-center " id="TD7402ROW40DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW40DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="960" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=273&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW41DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="970" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=274&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW41DATA29328">
                  National Summertime Pack Award pin (Webelos)
                </td>
                <td class="text-center " id="TD7402ROW41DATA52930">
                  67
                </td>
                <td class="text-center " id="TD7402ROW41DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW41DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="980" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=274&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW42DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="990" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=275&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW42DATA29328">
                  National Summertime Pack Award pin (Wolf)
                </td>
                <td class="text-center " id="TD7402ROW42DATA52930">
                  65
                </td>
                <td class="text-center " id="TD7402ROW42DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW42DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1000" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=275&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW43DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1010" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=276&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW43DATA29328">
                  NOVA Cub Scouts Emblem
                </td>
                <td class="text-center " id="TD7402ROW43DATA52930">
                  179
                </td>
                <td class="text-center " id="TD7402ROW43DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW43DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1020" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=276&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW44DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1030" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=277&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW44DATA29328">
                  NOVA Pi Device
                </td>
                <td class="text-center " id="TD7402ROW44DATA52930">
                  180
                </td>
                <td class="text-center " id="TD7402ROW44DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW44DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1040" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=277&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW45DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1050" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=278&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW45DATA29328">
                  Order of the Arrow Distinguished Service Award
                </td>
                <td class="text-center " id="TD7402ROW45DATA52930">
                  37
                </td>
                <td class="text-center " id="TD7402ROW45DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW45DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1060" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=278&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW46DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1070" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=279&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW46DATA29328">
                  Outdoor Ethics Action Award (Cub Scout)
                </td>
                <td class="text-center " id="TD7402ROW46DATA52930">
                  112
                </td>
                <td class="text-center " id="TD7402ROW46DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW46DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1080" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=279&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW47DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1090" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=280&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW47DATA29328">
                  Outdoor Ethics Awareness Award (Cub Scout)
                </td>
                <td class="text-center " id="TD7402ROW47DATA52930">
                  111
                </td>
                <td class="text-center " id="TD7402ROW47DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW47DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1100" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=280&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW48DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1110" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=281&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW48DATA29328">
                  Recruiter Strip
                </td>
                <td class="text-center " id="TD7402ROW48DATA52930">
                  146
                </td>
                <td class="text-center " id="TD7402ROW48DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW48DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1120" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=281&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW49DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1130" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=282&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW49DATA29328">
                  Religious emblem - Adult
                </td>
                <td class="text-center " id="TD7402ROW49DATA52930">
                  41
                </td>
                <td class="text-center " id="TD7402ROW49DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW49DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1140" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=282&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW50DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1150" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=283&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW50DATA29328">
                  Religious emblem - Youth
                </td>
                <td class="text-center " id="TD7402ROW50DATA52930">
                  42
                </td>
                <td class="text-center " id="TD7402ROW50DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW50DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1160" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=283&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW51DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1170" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=284&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW51DATA29328">
                  Scouter's Key
                </td>
                <td class="text-center " id="TD7402ROW51DATA52930">
                  43
                </td>
                <td class="text-center " id="TD7402ROW51DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW51DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1180" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=284&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW52DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1190" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=285&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW52DATA29328">
                  Scouter's Training Award
                </td>
                <td class="text-center " id="TD7402ROW52DATA52930">
                  44
                </td>
                <td class="text-center " id="TD7402ROW52DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW52DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1200" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=285&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW53DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1210" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=286&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW53DATA29328">
                  Scouting ... Vale la Pena! Service Award
                </td>
                <td class="text-center " id="TD7402ROW53DATA52930">
                  45
                </td>
                <td class="text-center " id="TD7402ROW53DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW53DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1220" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=286&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW54DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1230" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=287&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW54DATA29328">
                  SCOUTStrong Be MedWise (CS)
                </td>
                <td class="text-center " id="TD7402ROW54DATA52930">
                  3,549
                </td>
                <td class="text-center " id="TD7402ROW54DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW54DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1240" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=287&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW55DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1250" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=288&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW55DATA29328">
                  SCOUTStrong PALA Challenge (Cub Scouts)
                </td>
                <td class="text-center " id="TD7402ROW55DATA52930">
                  3,409
                </td>
                <td class="text-center " id="TD7402ROW55DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW55DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1260" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=288&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW56DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1270" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=289&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW56DATA29328">
                  SCOUTStrong USA Triathlon (CS)
                </td>
                <td class="text-center " id="TD7402ROW56DATA52930">
                  3,547
                </td>
                <td class="text-center " id="TD7402ROW56DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW56DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1280" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=289&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW57DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1290" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=290&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW57DATA29328">
                  Shooting Sports Award - Bear
                </td>
                <td class="text-center " id="TD7402ROW57DATA52930">
                  3,383
                </td>
                <td class="text-center " id="TD7402ROW57DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW57DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1300" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=290&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW58DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1310" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=291&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW58DATA29328">
                  Shooting Sports Award - Tiger
                </td>
                <td class="text-center " id="TD7402ROW58DATA52930">
                  3,375
                </td>
                <td class="text-center " id="TD7402ROW58DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW58DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1320" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=291&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW59DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1330" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=292&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW59DATA29328">
                  Shooting Sports Award - Webelos
                </td>
                <td class="text-center " id="TD7402ROW59DATA52930">
                  3,387
                </td>
                <td class="text-center " id="TD7402ROW59DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW59DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1340" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=292&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW60DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1350" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=293&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW60DATA29328">
                  Shooting Sports Award - Wolf
                </td>
                <td class="text-center " id="TD7402ROW60DATA52930">
                  3,379
                </td>
                <td class="text-center " id="TD7402ROW60DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW60DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1360" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=293&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW61DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1370" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=294&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW61DATA29328">
                  Shooting Sports Pin - Bear Archery
                </td>
                <td class="text-center " id="TD7402ROW61DATA52930">
                  3,384
                </td>
                <td class="text-center " id="TD7402ROW61DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW61DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1380" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=294&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW62DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1390" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=295&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW62DATA29328">
                  Shooting Sports Pin - Bear BB Gun
                </td>
                <td class="text-center " id="TD7402ROW62DATA52930">
                  3,385
                </td>
                <td class="text-center " id="TD7402ROW62DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW62DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1400" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=295&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW63DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1410" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=296&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW63DATA29328">
                  Shooting Sports Pin - Bear Slingshot
                </td>
                <td class="text-center " id="TD7402ROW63DATA52930">
                  3,386
                </td>
                <td class="text-center " id="TD7402ROW63DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW63DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1420" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=296&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW64DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1430" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=297&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW64DATA29328">
                  Shooting Sports Pin - Tiger Archery
                </td>
                <td class="text-center " id="TD7402ROW64DATA52930">
                  3,376
                </td>
                <td class="text-center " id="TD7402ROW64DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW64DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1440" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=297&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW65DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1450" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=298&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW65DATA29328">
                  Shooting Sports Pin - Tiger BB Gun
                </td>
                <td class="text-center " id="TD7402ROW65DATA52930">
                  3,377
                </td>
                <td class="text-center " id="TD7402ROW65DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW65DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1460" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=298&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW66DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1470" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=299&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW66DATA29328">
                  Shooting Sports Pin - Tiger Slingshot
                </td>
                <td class="text-center " id="TD7402ROW66DATA52930">
                  3,378
                </td>
                <td class="text-center " id="TD7402ROW66DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW66DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1480" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=299&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW67DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1490" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=300&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW67DATA29328">
                  Shooting Sports Pin - Webelos Archery
                </td>
                <td class="text-center " id="TD7402ROW67DATA52930">
                  3,388
                </td>
                <td class="text-center " id="TD7402ROW67DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW67DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1500" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=300&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW68DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1510" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=301&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW68DATA29328">
                  Shooting Sports Pin - Webelos BB Gun
                </td>
                <td class="text-center " id="TD7402ROW68DATA52930">
                  3,389
                </td>
                <td class="text-center " id="TD7402ROW68DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW68DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1520" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=301&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW69DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1530" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=302&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW69DATA29328">
                  Shooting Sports Pin - Webelos Slingshot
                </td>
                <td class="text-center " id="TD7402ROW69DATA52930">
                  3,390
                </td>
                <td class="text-center " id="TD7402ROW69DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW69DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1540" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=302&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW70DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1550" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=303&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW70DATA29328">
                  Shooting Sports Pin - Wolf Archery
                </td>
                <td class="text-center " id="TD7402ROW70DATA52930">
                  3,380
                </td>
                <td class="text-center " id="TD7402ROW70DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW70DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1560" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=303&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW71DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1570" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=304&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW71DATA29328">
                  Shooting Sports Pin - Wolf BB Gun
                </td>
                <td class="text-center " id="TD7402ROW71DATA52930">
                  3,381
                </td>
                <td class="text-center " id="TD7402ROW71DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW71DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1580" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=304&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW72DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1590" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=305&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW72DATA29328">
                  Shooting Sports Pin - Wolf Slingshot
                </td>
                <td class="text-center " id="TD7402ROW72DATA52930">
                  3,382
                </td>
                <td class="text-center " id="TD7402ROW72DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW72DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1600" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=305&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW73DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1610" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=306&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW73DATA29328">
                  Silver Antelope Award
                </td>
                <td class="text-center " id="TD7402ROW73DATA52930">
                  46
                </td>
                <td class="text-center " id="TD7402ROW73DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW73DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1620" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=306&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW74DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1630" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=307&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW74DATA29328">
                  Silver Beaver Award
                </td>
                <td class="text-center " id="TD7402ROW74DATA52930">
                  47
                </td>
                <td class="text-center " id="TD7402ROW74DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW74DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1640" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=307&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW75DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1650" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=308&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW75DATA29328">
                  Silver Buffalo Award
                </td>
                <td class="text-center " id="TD7402ROW75DATA52930">
                  48
                </td>
                <td class="text-center " id="TD7402ROW75DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW75DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1660" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=308&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW76DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1670" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=309&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW76DATA29328">
                  Unit Leader Award of Merit
                </td>
                <td class="text-center " id="TD7402ROW76DATA52930">
                  49
                </td>
                <td class="text-center " id="TD7402ROW76DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW76DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1680" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=309&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW77DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1690" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=310&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW77DATA29328">
                  Webelos Scout Supernova Award
                </td>
                <td class="text-center " id="TD7402ROW77DATA52930">
                  3,400
                </td>
                <td class="text-center " id="TD7402ROW77DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW77DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1700" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=310&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW78DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1710" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=311&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW78DATA29328">
                  Whitney M. Young Jr. Award
                </td>
                <td class="text-center " id="TD7402ROW78DATA52930">
                  52
                </td>
                <td class="text-center " id="TD7402ROW78DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW78DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1720" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=311&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW79DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1730" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=312&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW79DATA29328">
                  Whittling Chip
                </td>
                <td class="text-center " id="TD7402ROW79DATA52930">
                  109
                </td>
                <td class="text-center " id="TD7402ROW79DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW79DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1740" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=312&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7402ROW80DATA29326">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1750" id="BUTTON7" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=313&amp;Stack=3','');">
                </td>
                <td class="text-left " id="TD7402ROW80DATA29328">
                  William D. Boyce New-Unit Organizer Award
                </td>
                <td class="text-center " id="TD7402ROW80DATA52930">
                  53
                </td>
                <td class="text-center " id="TD7402ROW80DATA54989">
                  No
                </td>
                <td class="text-center " id="TD7402ROW80DATA29327">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1760" id="BUTTON11" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=399&amp;Form_ID=1498&amp;FK=0&amp;ID=313&amp;Stack=3','');">
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="5" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=399&amp;Form_ID=1499&amp;Stack=2&amp;SectionID=7402&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=399&amp;Form_ID=1499&amp;Stack=2&amp;SectionID=7402&amp;ReportFormat=XLS','_blank');">
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
</span></div>
</td>
</tr>
      </tbody></table>
    </div>
  </div>
</div>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1770" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1780" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=399&amp;Form_ID=1497&amp;FK=0&amp;ID=0&amp;Stack=3','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1790" id="BUTTON2" type="button" name="save continue" title="Delete Unused Awards" value="Delete Unused Awards" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1800" id="BUTTON3" type="button" name="save continue" title="View Master Award List" value="View Master Award List" onclick="buttonlink(this,'N');">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON0">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>