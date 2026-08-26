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
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/xg_pWYS8-HRESiV6Rdg4aY_R/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-qWH0xCejb2gc1yqo8ob4TQrvIcQ9XjhOfGKbhFr/+LvFrJdTE3bA+FQP/FLAiQhz"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script language="JavaScript" src="/assets/js/soapclient.js">
</script>
<script type="text/JavaScript" src="/assets/js/sortableV2.js">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="397">
<input type="hidden" name="Form_ID" id="Form_ID" value="1442">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=397&amp;Stack=1">
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=397">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=397">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=397">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=193" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=397">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=397">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=397">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=397">My Unit's Support Tickets</a></li>
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
        The current user is:&nbsp; &nbsp; MBucklin796
        <br><br>
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=397&amp;Stack=1&amp;Application_ID=2840
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
Leadership Positions
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7202">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=0&amp;Stack=2','');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs7201">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP283491" id="OP283491" value="">
    <input type="hidden" name="OP283501" id="OP283501" value="">
    <input type="hidden" name="OP283515" id="OP283515" value="">
    <input type="hidden" name="OP4933611" id="OP4933611" value="">
    <input type="hidden" name="OP499032" id="OP499032" value="">
    <input type="hidden" name="OP4990411" id="OP4990411" value="">
    <input type="hidden" name="OP4990511" id="OP4990511" value="">
    <input type="hidden" name="OP577685" id="OP577685" value="">
    <input type="hidden" name="OP5776969" id="OP5776969" value="">
    <input type="hidden" name="OP5777069" id="OP5777069" value="">
  </div>
</div>
<div class="new-row" id="fs7203">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid7203">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB7203" id="ROWCOUNTCB7203" value="28">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Title<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Code<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Sequence<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Disable Public Display<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Authorized User Role<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">TWH Newsletters<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">TWH Renewal Reminders<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 8);return false;">Desired Number<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD7203ROW0DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=1&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW0DATA28357">
                  Cubmaster
                </td>
                <td class="text-center " id="TD7203ROW0DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW0DATA28359">
                  0
                </td>
                <td class="text-center " id="TD7203ROW0DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW0DATA49906">
                  Site Administrator
                </td>
                <td class="text-center " id="TD7203ROW0DATA49907">
                  Yes
                </td>
                <td class="text-center " id="TD7203ROW0DATA49908">
                  Yes
                </td>
                <td class="text-center " id="TD7203ROW0DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW0DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=1&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW1DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=22&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW1DATA28357">
                  Assistant Cubmaster
                </td>
                <td class="text-center " id="TD7203ROW1DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW1DATA28359">
                  10
                </td>
                <td class="text-center " id="TD7203ROW1DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW1DATA49906">
                  Leader
                </td>
                <td class="text-center " id="TD7203ROW1DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW1DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW1DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW1DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=22&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW2DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=10&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW2DATA28357">
                  Lion Den Leader
                </td>
                <td class="text-center " id="TD7203ROW2DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW2DATA28359">
                  80
                </td>
                <td class="text-center " id="TD7203ROW2DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW2DATA49906">
                  Leader
                </td>
                <td class="text-center " id="TD7203ROW2DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW2DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW2DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW2DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=10&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW3DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=17&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW3DATA28357">
                  Tiger Den Leader
                </td>
                <td class="text-center " id="TD7203ROW3DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW3DATA28359">
                  90
                </td>
                <td class="text-center " id="TD7203ROW3DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW3DATA49906">
                  Leader
                </td>
                <td class="text-center " id="TD7203ROW3DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW3DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW3DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW3DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=17&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW4DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=6&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW4DATA28357">
                  Den Leader
                </td>
                <td class="text-center " id="TD7203ROW4DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW4DATA28359">
                  100
                </td>
                <td class="text-center " id="TD7203ROW4DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW4DATA49906">
                  Leader
                </td>
                <td class="text-center " id="TD7203ROW4DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW4DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW4DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW4DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=6&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW5DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=13&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW5DATA28357">
                  Asst. Den Leader
                </td>
                <td class="text-center " id="TD7203ROW5DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW5DATA28359">
                  110
                </td>
                <td class="text-center " id="TD7203ROW5DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW5DATA49906">
                  Leader
                </td>
                <td class="text-center " id="TD7203ROW5DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW5DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW5DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW5DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=13&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW6DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=7&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW6DATA28357">
                  Webelos Den Leader
                </td>
                <td class="text-center " id="TD7203ROW6DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW6DATA28359">
                  150
                </td>
                <td class="text-center " id="TD7203ROW6DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW6DATA49906">
                  Leader
                </td>
                <td class="text-center " id="TD7203ROW6DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW6DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW6DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW6DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=7&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW7DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW7DATA28357">
                  Webelos Assistant Den Leader
                </td>
                <td class="text-center " id="TD7203ROW7DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW7DATA28359">
                  160
                </td>
                <td class="text-center " id="TD7203ROW7DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW7DATA49906">
                  Leader
                </td>
                <td class="text-center " id="TD7203ROW7DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW7DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW7DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW7DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW8DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=12&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW8DATA28357">
                  Executive Officer
                </td>
                <td class="text-center " id="TD7203ROW8DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW8DATA28359">
                  190
                </td>
                <td class="text-center " id="TD7203ROW8DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW8DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW8DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW8DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW8DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW8DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=12&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW9DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=11&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW9DATA28357">
                  Chartered Organization Rep.
                </td>
                <td class="text-center " id="TD7203ROW9DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW9DATA28359">
                  195
                </td>
                <td class="text-center " id="TD7203ROW9DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW9DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW9DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW9DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW9DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW9DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=11&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW10DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=9&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW10DATA28357">
                  Key 3 Delegate
                </td>
                <td class="text-center " id="TD7203ROW10DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW10DATA28359">
                  199
                </td>
                <td class="text-center " id="TD7203ROW10DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW10DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW10DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW10DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW10DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW10DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=9&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW11DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=5&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW11DATA28357">
                  Committee Chairman
                </td>
                <td class="text-center " id="TD7203ROW11DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW11DATA28359">
                  200
                </td>
                <td class="text-center " id="TD7203ROW11DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW11DATA49906">
                  Site Administrator
                </td>
                <td class="text-center " id="TD7203ROW11DATA49907">
                  Yes
                </td>
                <td class="text-center " id="TD7203ROW11DATA49908">
                  Yes
                </td>
                <td class="text-center " id="TD7203ROW11DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW11DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=5&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW12DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=27&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW12DATA28357">
                  Assistant Committee Chair
                </td>
                <td class="text-center " id="TD7203ROW12DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW12DATA28359">
                  250
                </td>
                <td class="text-center " id="TD7203ROW12DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW12DATA49906">
                  Site Administrator
                </td>
                <td class="text-center " id="TD7203ROW12DATA49907">
                  Yes
                </td>
                <td class="text-center " id="TD7203ROW12DATA49908">
                  Yes
                </td>
                <td class="text-center " id="TD7203ROW12DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW12DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=27&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW13DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=2&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW13DATA28357">
                  Committee Member
                </td>
                <td class="text-center " id="TD7203ROW13DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW13DATA28359">
                  300
                </td>
                <td class="text-center " id="TD7203ROW13DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW13DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW13DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW13DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW13DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW13DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=2&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW14DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=4&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW14DATA28357">
                  Secretary
                </td>
                <td class="text-center " id="TD7203ROW14DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW14DATA28359">
                  300
                </td>
                <td class="text-center " id="TD7203ROW14DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW14DATA49906">
                  Web Page Editor
                </td>
                <td class="text-center " id="TD7203ROW14DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW14DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW14DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW14DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=4&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW15DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=3&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW15DATA28357">
                  Treasurer
                </td>
                <td class="text-center " id="TD7203ROW15DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW15DATA28359">
                  300
                </td>
                <td class="text-center " id="TD7203ROW15DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW15DATA49906">
                  Treasurer
                </td>
                <td class="text-center " id="TD7203ROW15DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW15DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW15DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW15DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=3&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW16DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=25&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW16DATA28357">
                  Popcorn Kernel
                </td>
                <td class="text-center " id="TD7203ROW16DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW16DATA28359">
                  310
                </td>
                <td class="text-center " id="TD7203ROW16DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW16DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW16DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW16DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW16DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW16DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=25&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW17DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=26&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW17DATA28357">
                  Wreath Wrangler
                </td>
                <td class="text-center " id="TD7203ROW17DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW17DATA28359">
                  310
                </td>
                <td class="text-center " id="TD7203ROW17DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW17DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW17DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW17DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW17DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW17DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=26&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW18DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=8&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW18DATA28357">
                  New Member Coordinator
                </td>
                <td class="text-center " id="TD7203ROW18DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW18DATA28359">
                  320
                </td>
                <td class="text-center " id="TD7203ROW18DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW18DATA49906">
                  Membership
                </td>
                <td class="text-center " id="TD7203ROW18DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW18DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW18DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW18DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=8&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW19DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=24&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW19DATA28357">
                  Event Chair
                </td>
                <td class="text-center " id="TD7203ROW19DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW19DATA28359">
                  330
                </td>
                <td class="text-center " id="TD7203ROW19DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW19DATA49906">
                  Event Planner
                </td>
                <td class="text-center " id="TD7203ROW19DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW19DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW19DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW19DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=24&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW20DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=29&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW20DATA28357">
                  Quartermaster
                </td>
                <td class="text-center " id="TD7203ROW20DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW20DATA28359">
                  335
                </td>
                <td class="text-center " id="TD7203ROW20DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW20DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW20DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW20DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW20DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW20DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=29&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW21DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=14&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW21DATA28357">
                  Pack Trainer
                </td>
                <td class="text-center " id="TD7203ROW21DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW21DATA28359">
                  350
                </td>
                <td class="text-center " id="TD7203ROW21DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW21DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW21DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW21DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW21DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW21DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=14&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW22DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=15&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW22DATA28357">
                  Unit Training Chair
                </td>
                <td class="text-center " id="TD7203ROW22DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW22DATA28359">
                  360
                </td>
                <td class="text-center " id="TD7203ROW22DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW22DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW22DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW22DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW22DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW22DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=15&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW23DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=16&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW23DATA28357">
                  Youth Protection Champion
                </td>
                <td class="text-center " id="TD7203ROW23DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW23DATA28359">
                  370
                </td>
                <td class="text-center " id="TD7203ROW23DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW23DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW23DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW23DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW23DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW23DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=16&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW24DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=21&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW24DATA28357">
                  Advancement Chair
                </td>
                <td class="text-center " id="TD7203ROW24DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW24DATA28359">
                  380
                </td>
                <td class="text-center " id="TD7203ROW24DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW24DATA49906">
                  Cub Scout Advancement
                </td>
                <td class="text-center " id="TD7203ROW24DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW24DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW24DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW24DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=21&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW25DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=28&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW25DATA28357">
                  Webmaster
                </td>
                <td class="text-center " id="TD7203ROW25DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW25DATA28359">
                  385
                </td>
                <td class="text-center " id="TD7203ROW25DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW25DATA49906">
                  Site Administrator
                </td>
                <td class="text-center " id="TD7203ROW25DATA49907">
                  Yes
                </td>
                <td class="text-center " id="TD7203ROW25DATA49908">
                  Yes
                </td>
                <td class="text-center " id="TD7203ROW25DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW25DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=28&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW26DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="650" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=23&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW26DATA28357">
                  Chaplain
                </td>
                <td class="text-center " id="TD7203ROW26DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW26DATA28359">
                  390
                </td>
                <td class="text-center " id="TD7203ROW26DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW26DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW26DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW26DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW26DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW26DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="660" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=23&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7203ROW27DATA28354">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="670" id="BUTTON13" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=19&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7203ROW27DATA28357">
                  Unit Scouter Reserve
                </td>
                <td class="text-center " id="TD7203ROW27DATA28358">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW27DATA28359">
                  500
                </td>
                <td class="text-center " id="TD7203ROW27DATA49337">
                  No
                </td>
                <td class="text-center " id="TD7203ROW27DATA49906">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW27DATA49907">
                  No
                </td>
                <td class="text-center " id="TD7203ROW27DATA49908">
                  No
                </td>
                <td class="text-center " id="TD7203ROW27DATA57771">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7203ROW27DATA28355">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="680" id="BUTTON22" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=397&amp;Form_ID=1441&amp;FK=0&amp;ID=19&amp;Stack=2','');">
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="10" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=397&amp;Form_ID=1442&amp;Stack=1&amp;SectionID=7203&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=397&amp;Form_ID=1442&amp;Stack=1&amp;SectionID=7203&amp;ReportFormat=XLS','_blank');">
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
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="690" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="700" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('/site-configuration/leadership-positions-add.php?Form_ID=1440&amp;FK=0&amp;ID=0&amp;Stack=2','');">
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