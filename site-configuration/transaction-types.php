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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="404">
<input type="hidden" name="Form_ID" id="Form_ID" value="1374">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=404&amp;Stack=1">
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
      <a href="#" class="navlink nav-home-link" onclick="LinkTo('/home/home.php','_top')">Pack 12 Austin</a>
    </td>
    <td class="quickmenu1">
      <table>
        <tbody><tr>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=404">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=404">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=404">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=186" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=404">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=404">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=404">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=404">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=404&amp;Stack=1&amp;Application_ID=2840
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
Transaction Types
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs6856">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=0&amp;Stack=2','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON2" type="button" name="save continue" title="Enable Budget Using Recommended Settings" value="Enable Budget Using Recommended Settings" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON3" type="button" name="save continue" title="Disable Budget" value="Disable Budget" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs6855">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP261621" id="OP261621" value="">
    <input type="hidden" name="OP2616311" id="OP2616311" value="">
    <input type="hidden" name="OP2616411" id="OP2616411" value="">
    <input type="hidden" name="OP2616511" id="OP2616511" value="">
    <input type="hidden" name="OP2616611" id="OP2616611" value="">
    <input type="hidden" name="OP2616711" id="OP2616711" value="">
    <input type="hidden" name="OP2616811" id="OP2616811" value="">
    <input type="hidden" name="OP3116911" id="OP3116911" value="">
    <input type="hidden" name="OP2616911" id="OP2616911" value="">
    <input type="hidden" name="OP2617011" id="OP2617011" value="">
    <input type="hidden" name="OP6296711" id="OP6296711" value="">
    <input type="hidden" name="OP6296811" id="OP6296811" value="">
    <input type="hidden" name="OP2617111" id="OP2617111" value="">
    <input type="hidden" name="OP2617211" id="OP2617211" value="">
  </div>
</div>
<div class="new-row" id="fs6857">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid6857">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB6857" id="ROWCOUNTCB6857" value="22">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Transaction Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Group Debit<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Group Credit<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Person Debit<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Person Credit<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Event Debit<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">Event Credit<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 8);return false;">Payment for Event<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 9);return false;">Fund Debit<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 10);return false;">Credit Fund<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 11);return false;">Fiscal Year<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 12);return false;">Budget Expense<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 13);return false;">Budget Income<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 14);return false;">Deposit Date<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 15);return false;">Disabled<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD6857ROW0DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=16&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW0DATA26177">
                  Charge Member Account
                </td>
                <td class="text-center " id="TD6857ROW0DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26180">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW0DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW0DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=16&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW1DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=4&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW1DATA26177">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD6857ROW1DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26180">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW1DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26183">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW1DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW1DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=4&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW2DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=5&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW2DATA26177">
                  Charge Member Dues
                </td>
                <td class="text-center " id="TD6857ROW2DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26180">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW2DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW2DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=5&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW3DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=15&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW3DATA26177">
                  Credit Member Account
                </td>
                <td class="text-center " id="TD6857ROW3DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26181">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW3DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW3DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=15&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW4DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=7&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW4DATA26177">
                  Credit Member Account From Event
                </td>
                <td class="text-center " id="TD6857ROW4DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA26181">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW4DATA26182">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW4DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW4DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=7&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW5DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=13&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW5DATA26177">
                  Deposit To Group Account
                </td>
                <td class="text-center " id="TD6857ROW5DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA26179">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW5DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA26186">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW5DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW5DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=13&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW6DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=6&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW6DATA26177">
                  Deposit To Group Account From Event
                </td>
                <td class="text-center " id="TD6857ROW6DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA26179">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW6DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA26183">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW6DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA26186">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW6DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW6DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=6&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW7DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=1&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW7DATA26177">
                  Deposit To Member Account
                </td>
                <td class="text-center " id="TD6857ROW7DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA26179">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW7DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA26181">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW7DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA26186">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW7DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW7DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=1&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW8DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=12&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW8DATA26177">
                  Group Expense Paid By Member
                </td>
                <td class="text-center " id="TD6857ROW8DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26181">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW8DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW8DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=12&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW9DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=3&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW9DATA26177">
                  Group Expense Paid By Member For Event
                </td>
                <td class="text-center " id="TD6857ROW9DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA26181">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW9DATA26182">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW9DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW9DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=3&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW10DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=14&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW10DATA26177">
                  Group Expense Paid From Group Account
                </td>
                <td class="text-center " id="TD6857ROW10DATA26178">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW10DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW10DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=14&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW11DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=2&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW11DATA26177">
                  Group Expense Paid From Group Account For Event
                </td>
                <td class="text-center " id="TD6857ROW11DATA26178">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW11DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA26182">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW11DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW11DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=2&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW12DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=22&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW12DATA26177">
                  PayPal Deposit To Member Account
                </td>
                <td class="text-center " id="TD6857ROW12DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA26179">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW12DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA26181">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW12DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW12DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=22&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW13DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=17&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW13DATA26177">
                  Reimburse Member From Member Account
                </td>
                <td class="text-center " id="TD6857ROW13DATA26178">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW13DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA26180">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW13DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW13DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=17&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW14DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=11&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW14DATA26177">
                  Starting Account Balance for Our Group
                </td>
                <td class="text-center " id="TD6857ROW14DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26179">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW14DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW14DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=11&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW15DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=18&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW15DATA26177">
                  Starting Event Balance
                </td>
                <td class="text-center " id="TD6857ROW15DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26183">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW15DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW15DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=18&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW16DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW16DATA26177">
                  Starting Fund Balance
                </td>
                <td class="text-center " id="TD6857ROW16DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26185">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW16DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW16DATA26187">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW16DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW17DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=10&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW17DATA26177">
                  Starting Member Account Balance
                </td>
                <td class="text-center " id="TD6857ROW17DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26181">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW17DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW17DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=10&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW18DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=19&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW18DATA26177">
                  Transfer Between Events
                </td>
                <td class="text-center " id="TD6857ROW18DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26182">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW18DATA26183">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW18DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW18DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=19&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW19DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=21&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW19DATA26177">
                  Transfer Between Funds
                </td>
                <td class="text-center " id="TD6857ROW19DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA26184">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW19DATA26185">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW19DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW19DATA26187">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW19DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=21&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW20DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=9&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW20DATA26177">
                  Transfer Between Group Accounts
                </td>
                <td class="text-center " id="TD6857ROW20DATA26178">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW20DATA26179">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW20DATA26180">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA26181">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW20DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=9&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD6857ROW21DATA26175">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON19" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=8&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD6857ROW21DATA26177">
                  Transfer Between Member Accounts
                </td>
                <td class="text-center " id="TD6857ROW21DATA26178">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA26179">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA26180">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW21DATA26181">
                  Yes
                </td>
                <td class="text-center " id="TD6857ROW21DATA26182">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA26183">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA31171">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA26184">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA26185">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA31172">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA62965">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA62966">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA26186">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA26187">
                  No
                </td>
                <td class="text-center " id="TD6857ROW21DATA26176">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON35" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=404&amp;Form_ID=1373&amp;FK=0&amp;ID=8&amp;Stack=2','');">
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="17" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=404&amp;Form_ID=1374&amp;Stack=1&amp;SectionID=6857&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=404&amp;Form_ID=1374&amp;Stack=1&amp;SectionID=6857&amp;ReportFormat=XLS','_blank');">
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
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=404&amp;Form_ID=1372&amp;FK=0&amp;ID=0&amp;Stack=2','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON2" type="button" name="save continue" title="Enable Budget Using Recommended Settings" value="Enable Budget Using Recommended Settings" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON3" type="button" name="save continue" title="Disable Budget" value="Disable Budget" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON0">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>