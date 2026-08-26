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
<link rel="stylesheet" type="text/css" href="/css/bootstrap_override_v11.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap_override_colors_Cub_Scouts.css">
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/xg_pWYS8-HRESiV6Rdg4aY_R/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-qWH0xCejb2gc1yqo8ob4TQrvIcQ9XjhOfGKbhFr/+LvFrJdTE3bA+FQP/FLAiQhz"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="359">
<input type="hidden" name="Form_ID" id="Form_ID" value="337">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="7">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=359&amp;Stack=7">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=7','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=7','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=7','');">Users &amp; Passwords</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=7','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=7','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=7','');">Users &amp; Passwords</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=359">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=359">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=359">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=126" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=359">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=359">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=359">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=359">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=359&amp;Stack=7&amp;Application_ID=2840
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
Event Balances
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs1021">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="LinkTo('/money/query.php','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="cancel" title="Exit" value="Exit" onclick="LinkTo('/home/home.php','_top');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs1020">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP47762" id="OP47762" value="">
    <input type="hidden" name="OP48651" id="OP48651" value="">
    <input type="hidden" name="OP47772" id="OP47772" value="">
    <input type="hidden" name="OP270872" id="OP270872" value="">
    <input type="hidden" name="OP4778143" id="OP4778143" value="">
    <input type="hidden" name="OP4778144" id="OP4778144" value="">
    <input type="hidden" name="OP2708817" id="OP2708817" value="">
    <input type="hidden" name="OP2681669" id="OP2681669" value="">
    <input type="hidden" name="OP2681769" id="OP2681769" value="">
    <input type="hidden" name="OP2681869" id="OP2681869" value="">
    <input type="hidden" name="OP2681969" id="OP2681969" value="">
    <input type="hidden" name="OP2682069" id="OP2682069" value="">
    <input type="hidden" name="OP2709016" id="OP2709016" value="">
    <input type="hidden" name="OP2709111" id="OP2709111" value="">
    <input type="hidden" name="OP2708936" id="OP2708936" value="">
    <input type="hidden" name="OP2709372" id="OP2709372" value="">
    <input type="hidden" name="OP2709469" id="OP2709469" value="">
    <input type="hidden" name="OP2709569" id="OP2709569" value="">
  </div>
</div>
<div class="new-row" id="fs1022">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid1022">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB1022" id="ROWCOUNTCB1022" value="89">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Event<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Location<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Start<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Income<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Expense<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">Balance<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 8);return false;"># Members Charged<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 9);return false;">Average Charge<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD1022ROW0DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=541&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW0DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW0DATA4783">
                  Graduation
                </td>
                <td class="text-center " id="TD1022ROW0DATA4785">
                  Oak Hill United Methodist Church
                </td>
                <td class="text-center " id="TD1022ROW0DATA4787">
                  05/15/27 3:00 PM
                </td>
                <td class="text-center " id="TD1022ROW0DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW0DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW0DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW0DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW0DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW1DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=563&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW1DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW1DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW1DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW1DATA4787">
                  05/06/27 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW1DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW1DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW1DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW1DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW1DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW2DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=585&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW2DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW2DATA4783">
                  Spring Picnic
                </td>
                <td class="text-center " id="TD1022ROW2DATA4785">
                  VFW Post 4443
                </td>
                <td class="text-center " id="TD1022ROW2DATA4787">
                  05/01/27 10:00 AM
                </td>
                <td class="text-center " id="TD1022ROW2DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW2DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW2DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW2DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW2DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW3DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=540&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW3DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW3DATA4783">
                  Rocket Derby
                </td>
                <td class="text-center " id="TD1022ROW3DATA4785">
                  Founders Memorial Park
                </td>
                <td class="text-center " id="TD1022ROW3DATA4787">
                  04/17/27 10:00 AM
                </td>
                <td class="text-center " id="TD1022ROW3DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW3DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW3DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW3DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW3DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW4DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=542&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW4DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW4DATA4783">
                  Spring Campout
                </td>
                <td class="text-center " id="TD1022ROW4DATA4785">
                  Garner State Park
                </td>
                <td class="text-center " id="TD1022ROW4DATA4787">
                  04/02/27 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW4DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW4DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW4DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW4DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW4DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW5DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=562&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW5DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW5DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW5DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW5DATA4787">
                  04/01/27 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW5DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW5DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW5DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW5DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW5DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW6DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=584&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW6DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW6DATA4783">
                  Arrows &amp; BB's Adventure Day
                </td>
                <td class="text-center " id="TD1022ROW6DATA4785">
                  Camp Tom Wooten - Cub World
                </td>
                <td class="text-center " id="TD1022ROW6DATA4787">
                  03/06/27 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW6DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW6DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW6DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW6DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW6DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW7DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=543&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW7DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW7DATA4783">
                  Webelos Wilderness Weekend
                </td>
                <td class="text-center " id="TD1022ROW7DATA4785">
                  Camp Tom Wooten - Cub World
                </td>
                <td class="text-center " id="TD1022ROW7DATA4787">
                  03/05/27 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW7DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW7DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW7DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW7DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW7DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW8DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=561&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW8DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW8DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW8DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW8DATA4787">
                  03/04/27 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW8DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW8DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW8DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW8DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW8DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW9DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=583&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW9DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW9DATA4783">
                  AOL Crossover Ceremony
                </td>
                <td class="text-center " id="TD1022ROW9DATA4785">
                  Oak Hill United Methodist Church
                </td>
                <td class="text-center " id="TD1022ROW9DATA4787">
                  02/27/27 4:00 PM
                </td>
                <td class="text-center " id="TD1022ROW9DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW9DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW9DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW9DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW9DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW10DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=544&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW10DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW10DATA4783">
                  Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW10DATA4785">
                  Clayton Elementary
                </td>
                <td class="text-center " id="TD1022ROW10DATA4787">
                  02/20/27 3:00 PM
                </td>
                <td class="text-center " id="TD1022ROW10DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW10DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW10DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW10DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW10DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW11DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=546&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW11DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW11DATA4783">
                  Pinewood Derby Inspections (Option 2)
                </td>
                <td class="text-center " id="TD1022ROW11DATA4785">
                  Bucklin House
                </td>
                <td class="text-center " id="TD1022ROW11DATA4787">
                  02/18/27 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW11DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW11DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW11DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW11DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW11DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW12DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=545&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW12DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW12DATA4783">
                  Pinewood Derby Inspections (Option 1)
                </td>
                <td class="text-center " id="TD1022ROW12DATA4785">
                  Bucklin House
                </td>
                <td class="text-center " id="TD1022ROW12DATA4787">
                  02/16/27 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW12DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW12DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW12DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW12DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW12DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW13DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=560&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW13DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW13DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW13DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW13DATA4787">
                  02/04/27 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW13DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW13DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW13DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW13DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW13DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW14DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=547&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW14DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW14DATA4783">
                  Winter Overnight (Lone Star Flight Museum)
                </td>
                <td class="text-center " id="TD1022ROW14DATA4785">
                  Lone Star Flight Museum
                </td>
                <td class="text-center " id="TD1022ROW14DATA4787">
                  01/23/27 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW14DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW14DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW14DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW14DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW14DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW15DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=548&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW15DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW15DATA4783">
                  USS Lexington (Overnight)
                </td>
                <td class="text-center " id="TD1022ROW15DATA4785">
                  USS Lexington
                </td>
                <td class="text-center " id="TD1022ROW15DATA4787">
                  01/16/27
                </td>
                <td class="text-center " id="TD1022ROW15DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW15DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW15DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW15DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW15DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW16DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=559&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW16DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW16DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW16DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW16DATA4787">
                  01/07/27 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW16DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW16DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW16DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW16DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW16DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW17DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=558&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW17DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW17DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW17DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW17DATA4787">
                  12/03/26 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW17DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW17DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW17DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW17DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW17DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW18DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=549&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW18DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW18DATA4783">
                  Fall Campout
                </td>
                <td class="text-center " id="TD1022ROW18DATA4785">
                  Lake Somerville State Park
                </td>
                <td class="text-center " id="TD1022ROW18DATA4787">
                  11/13/26 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW18DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW18DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW18DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW18DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW18DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW19DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=557&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW19DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW19DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW19DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW19DATA4787">
                  11/05/26 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW19DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW19DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW19DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW19DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW19DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW20DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=582&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW20DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW20DATA4783">
                  Scouting 101 &amp; Cub Mobile (Troop Hosted Event)
                </td>
                <td class="text-center " id="TD1022ROW20DATA4785">
                  Oak Hill United Methodist Church
                </td>
                <td class="text-center " id="TD1022ROW20DATA4787">
                  10/03/26
                </td>
                <td class="text-center " id="TD1022ROW20DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW20DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW20DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW20DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW20DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW21DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=556&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW21DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW21DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW21DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW21DATA4787">
                  10/01/26 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW21DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW21DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW21DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW21DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW21DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW22DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=566&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW22DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW22DATA4783">
                  Arrows, BBs &amp; Campfires
                </td>
                <td class="text-center " id="TD1022ROW22DATA4785">
                  Camp Tom Wooten - Cub World
                </td>
                <td class="text-center " id="TD1022ROW22DATA4787">
                  09/25/26 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW22DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW22DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW22DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW22DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW22DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW23DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=555&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW23DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW23DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW23DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW23DATA4787">
                  09/03/26 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW23DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW23DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW23DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW23DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW23DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW24DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=581&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW24DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW24DATA4783">
                  Welcome Back, Pack Picnic
                </td>
                <td class="text-center " id="TD1022ROW24DATA4785">
                  VFW Post 4443
                </td>
                <td class="text-center " id="TD1022ROW24DATA4787">
                  08/29/26 10:00 AM
                </td>
                <td class="text-center " id="TD1022ROW24DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW24DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW24DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW24DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW24DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW25DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=580&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW25DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW25DATA4783">
                  Webelos and AOL Swim Adventure
                </td>
                <td class="text-center " id="TD1022ROW25DATA4785">
                  Meridian Neighborhood Pavilion and Pool
                </td>
                <td class="text-center " id="TD1022ROW25DATA4787">
                  08/22/26 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW25DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW25DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW25DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW25DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW25DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW26DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=554&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW26DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW26DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW26DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW26DATA4787">
                  08/06/26 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW26DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW26DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW26DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW26DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW26DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW27DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=567&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW27DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW27DATA4783">
                  Natural Bridge Caverns
                </td>
                <td class="text-center " id="TD1022ROW27DATA4785">
                  Natural Bridge Caverns
                </td>
                <td class="text-center " id="TD1022ROW27DATA4787">
                  07/18/26 10:15 AM
                </td>
                <td class="text-center " id="TD1022ROW27DATA4800">
                  832.50
                </td>
                <td class="text-center " id="TD1022ROW27DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW27DATA4786">
                  832.50
                </td>
                <td class="text-center " id="TD1022ROW27DATA7737">
                  35
                </td>
                <td class="text-center " id="TD1022ROW27DATA7738">
                  23.785714
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW28DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=511&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW28DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW28DATA4783">
                  Circle C 4th of July Parade
                </td>
                <td class="text-center " id="TD1022ROW28DATA4785">
                  Circle C Swim Center
                </td>
                <td class="text-center " id="TD1022ROW28DATA4787">
                  07/04/26 8:45 AM
                </td>
                <td class="text-center " id="TD1022ROW28DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW28DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW28DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW28DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW28DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW29DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=565&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW29DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW29DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW29DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW29DATA4787">
                  07/02/26 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW29DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW29DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW29DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW29DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW29DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW30DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=506&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW30DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW30DATA4783">
                  Cidercade Hangout
                </td>
                <td class="text-center " id="TD1022ROW30DATA4785">
                  Cidercade
                </td>
                <td class="text-center " id="TD1022ROW30DATA4787">
                  06/20/26 2:00 PM
                </td>
                <td class="text-center " id="TD1022ROW30DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW30DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW30DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW30DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW30DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW31DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=564&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW31DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW31DATA4783">
                  District Roundtable
                </td>
                <td class="text-center " id="TD1022ROW31DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW31DATA4787">
                  06/04/26 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW31DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW31DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW31DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW31DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW31DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW32DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=500&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW32DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW32DATA4783">
                  Raingutter Regatta
                </td>
                <td class="text-center " id="TD1022ROW32DATA4785">
                  VFW Post 4443
                </td>
                <td class="text-center " id="TD1022ROW32DATA4787">
                  05/30/26 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW32DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW32DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW32DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW32DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW32DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW33DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=507&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW33DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW33DATA4783">
                  Ceremony of Colors at Baldwin Elementary Graduation
                </td>
                <td class="text-center " id="TD1022ROW33DATA4785">
                  Baldwin Elementary
                </td>
                <td class="text-center " id="TD1022ROW33DATA4787">
                  05/28/26 8:30 AM
                </td>
                <td class="text-center " id="TD1022ROW33DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW33DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW33DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW33DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW33DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW34DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=383&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW34DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW34DATA4783">
                  Pack 12 Graduation
                </td>
                <td class="text-center " id="TD1022ROW34DATA4785">
                  Clayton Elementary - Cafeteria
                </td>
                <td class="text-center " id="TD1022ROW34DATA4787">
                  05/16/26 3:00 PM
                </td>
                <td class="text-center " id="TD1022ROW34DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW34DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW34DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW34DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW34DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW35DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=380&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW35DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW35DATA4783">
                  Rocket Derby
                </td>
                <td class="text-center " id="TD1022ROW35DATA4785">
                  Founders Memorial Park
                </td>
                <td class="text-center " id="TD1022ROW35DATA4787">
                  05/09/26 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW35DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW35DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW35DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW35DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW35DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW36DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=509&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW36DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW36DATA4783">
                  Rocket Derby Inspections and Build (Session 2)
                </td>
                <td class="text-center " id="TD1022ROW36DATA4785">
                  Bucklin House
                </td>
                <td class="text-center " id="TD1022ROW36DATA4787">
                  05/07/26 5:30 PM
                </td>
                <td class="text-center " id="TD1022ROW36DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW36DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW36DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW36DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW36DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW37DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=508&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW37DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW37DATA4783">
                  Rocket Derby Inspections and Build (Session 1)
                </td>
                <td class="text-center " id="TD1022ROW37DATA4785">
                  Bucklin House
                </td>
                <td class="text-center " id="TD1022ROW37DATA4787">
                  05/06/26 5:30 PM
                </td>
                <td class="text-center " id="TD1022ROW37DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW37DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW37DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW37DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW37DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW38DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=502&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW38DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW38DATA4783">
                  Spring Campout - Alternative Event - Please RSVP
                </td>
                <td class="text-center " id="TD1022ROW38DATA4785">
                  VFW Post 4443
                </td>
                <td class="text-center " id="TD1022ROW38DATA4787">
                  04/18/26 2:00 PM
                </td>
                <td class="text-center " id="TD1022ROW38DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW38DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW38DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW38DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW38DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW39DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=503&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW39DATA26815">
                  Community Service
                </td>
                <td class="text-center " id="TD1022ROW39DATA4783">
                  Messengers Of Peace Service Project
                </td>
                <td class="text-center " id="TD1022ROW39DATA4785">
                  Onion Creek Park
                </td>
                <td class="text-center " id="TD1022ROW39DATA4787">
                  04/18/26 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW39DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW39DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW39DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW39DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW39DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW40DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=378&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW40DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW40DATA4783">
                  RESCHEDULED TO FALL -- Spring Campout
                </td>
                <td class="text-center " id="TD1022ROW40DATA4785">
                  Garner State Park
                </td>
                <td class="text-center " id="TD1022ROW40DATA4787">
                  04/17/26 5:00 PM
                </td>
                <td class="text-center " id="TD1022ROW40DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW40DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW40DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW40DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW40DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW41DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=373&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW41DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW41DATA4783">
                  AOL Crossover Ceremony
                </td>
                <td class="text-center " id="TD1022ROW41DATA4785">
                  Oak Hill United Methodist Church
                </td>
                <td class="text-center " id="TD1022ROW41DATA4787">
                  03/07/26 4:00 PM
                </td>
                <td class="text-center " id="TD1022ROW41DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW41DATA4801">
                  552.42
                </td>
                <td class="text-center " id="TD1022ROW41DATA4786">
                  -552.42
                </td>
                <td class="text-center " id="TD1022ROW41DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW41DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW42DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=372&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW42DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW42DATA4783">
                  CANCELLED - Cubmaster Campout
                </td>
                <td class="text-center " id="TD1022ROW42DATA4785">
                  Camp Tom Wooten - Cub World
                </td>
                <td class="text-center " id="TD1022ROW42DATA4787">
                  03/06/26 5:00 PM
                </td>
                <td class="text-center " id="TD1022ROW42DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW42DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW42DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW42DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW42DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW43DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=371&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW43DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW43DATA4783">
                  Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW43DATA4785">
                  Clayton Elementary - Cafeteria
                </td>
                <td class="text-center " id="TD1022ROW43DATA4787">
                  02/07/26 3:00 PM
                </td>
                <td class="text-center " id="TD1022ROW43DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW43DATA4801">
                  119.23
                </td>
                <td class="text-center " id="TD1022ROW43DATA4786">
                  -119.23
                </td>
                <td class="text-center " id="TD1022ROW43DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW43DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW44DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=486&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW44DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW44DATA4783">
                  Weigh-in day for Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW44DATA4785">
                  7224 Mitra Dr
                </td>
                <td class="text-center " id="TD1022ROW44DATA4787">
                  02/05/26 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW44DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW44DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW44DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW44DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW44DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW45DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=485&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW45DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW45DATA4783">
                  Weigh-in day for Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW45DATA4785">
                  7224 Mitra Dr
                </td>
                <td class="text-center " id="TD1022ROW45DATA4787">
                  02/04/26 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW45DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW45DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW45DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW45DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW45DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW46DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=369&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW46DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW46DATA4783">
                  Winter Overnight at San Antonio Zoo
                </td>
                <td class="text-center " id="TD1022ROW46DATA4785">
                  San Antonio Zoo
                </td>
                <td class="text-center " id="TD1022ROW46DATA4787">
                  01/31/26 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW46DATA4800">
                  9450.00
                </td>
                <td class="text-center " id="TD1022ROW46DATA4801">
                  70.00
                </td>
                <td class="text-center " id="TD1022ROW46DATA4786">
                  9380.00
                </td>
                <td class="text-center " id="TD1022ROW46DATA7737">
                  116
                </td>
                <td class="text-center " id="TD1022ROW46DATA7738">
                  81.465517
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW47DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=488&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW47DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW47DATA4783">
                  Block Cutting for Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW47DATA4785">
                  Alvarez House
                </td>
                <td class="text-center " id="TD1022ROW47DATA4787">
                  01/22/26 5:00 PM
                </td>
                <td class="text-center " id="TD1022ROW47DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW47DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW47DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW47DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW47DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW48DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=484&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW48DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW48DATA4783">
                  Block Cutting for Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW48DATA4785">
                  Alvarez House
                </td>
                <td class="text-center " id="TD1022ROW48DATA4787">
                  01/19/26 10:00 AM
                </td>
                <td class="text-center " id="TD1022ROW48DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW48DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW48DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW48DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW48DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW49DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=483&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW49DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW49DATA4783">
                  Block Cutting for Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW49DATA4785">
                  Alvarez House
                </td>
                <td class="text-center " id="TD1022ROW49DATA4787">
                  01/18/26 11:00 AM
                </td>
                <td class="text-center " id="TD1022ROW49DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW49DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW49DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW49DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW49DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW50DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=482&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW50DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW50DATA4783">
                  Block Cutting for Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW50DATA4785">
                  Alvarez House
                </td>
                <td class="text-center " id="TD1022ROW50DATA4787">
                  01/17/26 10:00 AM
                </td>
                <td class="text-center " id="TD1022ROW50DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW50DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW50DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW50DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW50DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW51DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=478&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW51DATA26815">
                  Training
                </td>
                <td class="text-center " id="TD1022ROW51DATA4783">
                  BALOO Training
                </td>
                <td class="text-center " id="TD1022ROW51DATA4785">
                  Palm Valley Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW51DATA4787">
                  01/09/26 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW51DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW51DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW51DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW51DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW51DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW52DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="650" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=475&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW52DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW52DATA4783">
                  Troop 448 troop meeting
                </td>
                <td class="text-center " id="TD1022ROW52DATA4785">
                  St. Catherine of Siena Catholic Church
                </td>
                <td class="text-center " id="TD1022ROW52DATA4787">
                  12/08/25 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW52DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW52DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW52DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW52DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW52DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW53DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="660" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=477&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW53DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW53DATA4783">
                  Troop 448 Meeting with AOL Activities
                </td>
                <td class="text-center " id="TD1022ROW53DATA4785">
                  St. Catherine of Siena Catholic Church
                </td>
                <td class="text-center " id="TD1022ROW53DATA4787">
                  12/08/25 7:00 PM
                </td>
                <td class="text-center " id="TD1022ROW53DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW53DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW53DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW53DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW53DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW54DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="670" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=409&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW54DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW54DATA4783">
                  Troop 19 Campout - Pedernales Falls
                </td>
                <td class="text-center " id="TD1022ROW54DATA4785">
                  Pedernales Falls State Park
                </td>
                <td class="text-center " id="TD1022ROW54DATA4787">
                  12/06/25 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW54DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW54DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW54DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW54DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW54DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW55DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="680" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=465&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW55DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW55DATA4783">
                  Touch An Ambulance Event/First Aide with Ally Medical
                </td>
                <td class="text-center " id="TD1022ROW55DATA4785">
                  Circle C Community Center
                </td>
                <td class="text-center " id="TD1022ROW55DATA4787">
                  11/16/25 2:00 PM
                </td>
                <td class="text-center " id="TD1022ROW55DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW55DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW55DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW55DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW55DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW56DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="690" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=462&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW56DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW56DATA4783">
                  Lion's Service Project Art on Display @ Austin Studio Tour
                </td>
                <td class="text-center " id="TD1022ROW56DATA4785">
                  Austin Lighthouse School for the Blind
                </td>
                <td class="text-center " id="TD1022ROW56DATA4787">
                  11/15/25 12:00 PM
                </td>
                <td class="text-center " id="TD1022ROW56DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW56DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW56DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW56DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW56DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW57DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="700" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=472&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW57DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW57DATA4783">
                  Veterans Day Flag Ceremony at Clayton Elementary
                </td>
                <td class="text-center " id="TD1022ROW57DATA4785">
                  Clayton Elementary - Cafeteria
                </td>
                <td class="text-center " id="TD1022ROW57DATA4787">
                  11/11/25 8:00 AM
                </td>
                <td class="text-center " id="TD1022ROW57DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW57DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW57DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW57DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW57DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW58DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="710" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=469&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW58DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW58DATA4783">
                  Veterans Day Flag Ceremony at Baldwin Elementary
                </td>
                <td class="text-center " id="TD1022ROW58DATA4785">
                  Baldwin Elementary - Cafeteria
                </td>
                <td class="text-center " id="TD1022ROW58DATA4787">
                  11/11/25 7:50 AM
                </td>
                <td class="text-center " id="TD1022ROW58DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW58DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW58DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW58DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW58DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW59DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="720" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=364&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW59DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW59DATA4783">
                  Fall Campout
                </td>
                <td class="text-center " id="TD1022ROW59DATA4785">
                  Inks Lake State Park
                </td>
                <td class="text-center " id="TD1022ROW59DATA4787">
                  11/07/25 5:00 PM
                </td>
                <td class="text-center " id="TD1022ROW59DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW59DATA4801">
                  351.00
                </td>
                <td class="text-center " id="TD1022ROW59DATA4786">
                  -351.00
                </td>
                <td class="text-center " id="TD1022ROW59DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW59DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW60DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="730" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=458&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW60DATA26815">
                  Community Service
                </td>
                <td class="text-center " id="TD1022ROW60DATA4783">
                  Baldwin Campus Cleanup Service Project
                </td>
                <td class="text-center " id="TD1022ROW60DATA4785">
                  Baldwin Elementary
                </td>
                <td class="text-center " id="TD1022ROW60DATA4787">
                  10/26/25 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW60DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW60DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW60DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW60DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW60DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW61DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="740" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=384&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW61DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW61DATA4783">
                  Scouting 101 (formerly Webelos Woods)
                </td>
                <td class="text-center " id="TD1022ROW61DATA4785">
                  Bethany Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW61DATA4787">
                  10/25/25 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW61DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW61DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW61DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW61DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW61DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW62DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="750" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=459&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW62DATA26815">
                  Other
                </td>
                <td class="text-center " id="TD1022ROW62DATA4783">
                  Lion's Den #6 &amp; #7 Art Supply Pickup
                </td>
                <td class="text-center " id="TD1022ROW62DATA4785">
                  Den Leader Home
                </td>
                <td class="text-center " id="TD1022ROW62DATA4787">
                  10/12/25 9:30 AM
                </td>
                <td class="text-center " id="TD1022ROW62DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW62DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW62DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW62DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW62DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW63DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="760" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=358&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW63DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW63DATA4783">
                  New Scout Family Meeting
                </td>
                <td class="text-center " id="TD1022ROW63DATA4785">
                  Clayton Elementary - Cafeteria
                </td>
                <td class="text-center " id="TD1022ROW63DATA4787">
                  09/14/25 4:00 PM
                </td>
                <td class="text-center " id="TD1022ROW63DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW63DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW63DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW63DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW63DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW64DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="770" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=351&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW64DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW64DATA4783">
                  Innerspace Caverns
                </td>
                <td class="text-center " id="TD1022ROW64DATA4785">
                  Innerspace Cavern
                </td>
                <td class="text-center " id="TD1022ROW64DATA4787">
                  07/19/25 9:45 AM
                </td>
                <td class="text-center " id="TD1022ROW64DATA4800">
                  672.00
                </td>
                <td class="text-center " id="TD1022ROW64DATA4801">
                  79.00
                </td>
                <td class="text-center " id="TD1022ROW64DATA4786">
                  593.00
                </td>
                <td class="text-center " id="TD1022ROW64DATA7737">
                  31
                </td>
                <td class="text-center " id="TD1022ROW64DATA7738">
                  20.645161
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW65DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="780" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=257&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW65DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW65DATA4783">
                  Pack 12 Graduation
                </td>
                <td class="text-center " id="TD1022ROW65DATA4785">
                  Clayton Elementary - Cafeteria
                </td>
                <td class="text-center " id="TD1022ROW65DATA4787">
                  05/17/25 3:00 PM
                </td>
                <td class="text-center " id="TD1022ROW65DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW65DATA4801">
                  50.00
                </td>
                <td class="text-center " id="TD1022ROW65DATA4786">
                  -50.00
                </td>
                <td class="text-center " id="TD1022ROW65DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW65DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW66DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="790" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=256&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW66DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW66DATA4783">
                  Rocket Derby
                </td>
                <td class="text-center " id="TD1022ROW66DATA4785">
                  Founders Memorial Park
                </td>
                <td class="text-center " id="TD1022ROW66DATA4787">
                  05/10/25 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW66DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW66DATA4801">
                  714.56
                </td>
                <td class="text-center " id="TD1022ROW66DATA4786">
                  -714.56
                </td>
                <td class="text-center " id="TD1022ROW66DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW66DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW67DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="800" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=254&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW67DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW67DATA4783">
                  Spring Campout
                </td>
                <td class="text-center " id="TD1022ROW67DATA4785">
                  Pedernales Falls State Park
                </td>
                <td class="text-center " id="TD1022ROW67DATA4787">
                  04/11/25
                </td>
                <td class="text-center " id="TD1022ROW67DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW67DATA4801">
                  335.96
                </td>
                <td class="text-center " id="TD1022ROW67DATA4786">
                  -335.96
                </td>
                <td class="text-center " id="TD1022ROW67DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW67DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW68DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="810" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=339&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW68DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW68DATA4783">
                  Cubmaster Campout
                </td>
                <td class="text-center " id="TD1022ROW68DATA4785">
                  Muleshoe Bend Recreation Area
                </td>
                <td class="text-center " id="TD1022ROW68DATA4787">
                  03/01/25 10:00 AM
                </td>
                <td class="text-center " id="TD1022ROW68DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW68DATA4801">
                  558.08
                </td>
                <td class="text-center " id="TD1022ROW68DATA4786">
                  -558.08
                </td>
                <td class="text-center " id="TD1022ROW68DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW68DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW69DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="820" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=337&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW69DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW69DATA4783">
                  Crossover Ceremony
                </td>
                <td class="text-center " id="TD1022ROW69DATA4785">
                  Abiding Love Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW69DATA4787">
                  02/22/25 1:00 PM
                </td>
                <td class="text-center " id="TD1022ROW69DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW69DATA4801">
                  218.88
                </td>
                <td class="text-center " id="TD1022ROW69DATA4786">
                  -218.88
                </td>
                <td class="text-center " id="TD1022ROW69DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW69DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW70DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="830" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=252&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW70DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW70DATA4783">
                  Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW70DATA4785">
                  Clayton Elementary - Cafeteria
                </td>
                <td class="text-center " id="TD1022ROW70DATA4787">
                  02/08/25 3:00 PM
                </td>
                <td class="text-center " id="TD1022ROW70DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW70DATA4801">
                  428.49
                </td>
                <td class="text-center " id="TD1022ROW70DATA4786">
                  -428.49
                </td>
                <td class="text-center " id="TD1022ROW70DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW70DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW71DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="840" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=335&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW71DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW71DATA4783">
                  Pinewood Derby Weigh-In
                </td>
                <td class="text-center " id="TD1022ROW71DATA4785">
                  TBD
                </td>
                <td class="text-center " id="TD1022ROW71DATA4787">
                  02/05/25 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW71DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW71DATA4801">
                  40.00
                </td>
                <td class="text-center " id="TD1022ROW71DATA4786">
                  -40.00
                </td>
                <td class="text-center " id="TD1022ROW71DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW71DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW72DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="850" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=255&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW72DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW72DATA4783">
                  Sea World Winter Overnight
                </td>
                <td class="text-center " id="TD1022ROW72DATA4785">
                  Sea World San Antonio
                </td>
                <td class="text-center " id="TD1022ROW72DATA4787">
                  01/25/25 5:00 PM
                </td>
                <td class="text-center " id="TD1022ROW72DATA4800">
                  15529.00
                </td>
                <td class="text-center " id="TD1022ROW72DATA4801">
                  2756.62
                </td>
                <td class="text-center " id="TD1022ROW72DATA4786">
                  12772.38
                </td>
                <td class="text-center " id="TD1022ROW72DATA7737">
                  127
                </td>
                <td class="text-center " id="TD1022ROW72DATA7738">
                  122.275590
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW73DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="860" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=289&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW73DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW73DATA4783">
                  Overnight at the USS Lexington
                </td>
                <td class="text-center " id="TD1022ROW73DATA4785">
                  USS Lexington
                </td>
                <td class="text-center " id="TD1022ROW73DATA4787">
                  01/11/25 2:00 PM
                </td>
                <td class="text-center " id="TD1022ROW73DATA4800">
                  4275.00
                </td>
                <td class="text-center " id="TD1022ROW73DATA4801">
                  150.00
                </td>
                <td class="text-center " id="TD1022ROW73DATA4786">
                  4125.00
                </td>
                <td class="text-center " id="TD1022ROW73DATA7737">
                  50
                </td>
                <td class="text-center " id="TD1022ROW73DATA7738">
                  85.500000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW74DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="870" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=234&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW74DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW74DATA4783">
                  Fall Campout - Goliad State Park
                </td>
                <td class="text-center " id="TD1022ROW74DATA4785">
                  Goliad State Park &amp; Historic Site
                </td>
                <td class="text-center " id="TD1022ROW74DATA4787">
                  11/01/24 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW74DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW74DATA4801">
                  291.53
                </td>
                <td class="text-center " id="TD1022ROW74DATA4786">
                  -291.53
                </td>
                <td class="text-center " id="TD1022ROW74DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW74DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW75DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="880" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=299&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW75DATA26815">
                  Community Service
                </td>
                <td class="text-center " id="TD1022ROW75DATA4783">
                  Service Project - Baldwin Campus Cleanup &amp; Planter Construction
                </td>
                <td class="text-center " id="TD1022ROW75DATA4785">
                  Baldwin Elementary
                </td>
                <td class="text-center " id="TD1022ROW75DATA4787">
                  10/27/24 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW75DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW75DATA4801">
                  33.35
                </td>
                <td class="text-center " id="TD1022ROW75DATA4786">
                  -33.35
                </td>
                <td class="text-center " id="TD1022ROW75DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW75DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW76DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="890" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=274&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW76DATA26815">
                  Training
                </td>
                <td class="text-center " id="TD1022ROW76DATA4783">
                  BALOO Adult Leader Training
                </td>
                <td class="text-center " id="TD1022ROW76DATA4785">
                  McGimsey Scout Park
                </td>
                <td class="text-center " id="TD1022ROW76DATA4787">
                  10/11/24 6:00 PM
                </td>
                <td class="text-center " id="TD1022ROW76DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW76DATA4801">
                  100.00
                </td>
                <td class="text-center " id="TD1022ROW76DATA4786">
                  -100.00
                </td>
                <td class="text-center " id="TD1022ROW76DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW76DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW77DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="900" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=222&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW77DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW77DATA4783">
                  Cubmobile Derby
                </td>
                <td class="text-center " id="TD1022ROW77DATA4785">
                  Clayton Elementary
                </td>
                <td class="text-center " id="TD1022ROW77DATA4787">
                  08/18/24 8:00 AM
                </td>
                <td class="text-center " id="TD1022ROW77DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW77DATA4801">
                  17.79
                </td>
                <td class="text-center " id="TD1022ROW77DATA4786">
                  -17.79
                </td>
                <td class="text-center " id="TD1022ROW77DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW77DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW78DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="910" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=218&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW78DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW78DATA4783">
                  Raingutter Regatta
                </td>
                <td class="text-center " id="TD1022ROW78DATA4785">
                  VFW Post 4443
                </td>
                <td class="text-center " id="TD1022ROW78DATA4787">
                  06/08/24 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW78DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW78DATA4801">
                  39.47
                </td>
                <td class="text-center " id="TD1022ROW78DATA4786">
                  -39.47
                </td>
                <td class="text-center " id="TD1022ROW78DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW78DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW79DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="920" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=120&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW79DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW79DATA4783">
                  Crossover
                </td>
                <td class="text-center " id="TD1022ROW79DATA4785">
                  VFW Post 4443
                </td>
                <td class="text-center " id="TD1022ROW79DATA4787">
                  02/24/24 10:00 AM
                </td>
                <td class="text-center " id="TD1022ROW79DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW79DATA4801">
                  189.30
                </td>
                <td class="text-center " id="TD1022ROW79DATA4786">
                  -189.30
                </td>
                <td class="text-center " id="TD1022ROW79DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW79DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW80DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="930" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=119&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW80DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW80DATA4783">
                  Pinewood Derby
                </td>
                <td class="text-center " id="TD1022ROW80DATA4785">
                  Clayton Elementary - Cafeteria
                </td>
                <td class="text-center " id="TD1022ROW80DATA4787">
                  02/03/24 3:00 PM
                </td>
                <td class="text-center " id="TD1022ROW80DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW80DATA4801">
                  848.48
                </td>
                <td class="text-center " id="TD1022ROW80DATA4786">
                  -848.48
                </td>
                <td class="text-center " id="TD1022ROW80DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW80DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW81DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="940" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=96&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW81DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW81DATA4783">
                  Winter Overnight: NASA Space Center Houston
                </td>
                <td class="text-center " id="TD1022ROW81DATA4785">
                  Space Center Houston
                </td>
                <td class="text-center " id="TD1022ROW81DATA4787">
                  01/27/24 5:00 PM
                </td>
                <td class="text-center " id="TD1022ROW81DATA4800">
                  18960.00
                </td>
                <td class="text-center " id="TD1022ROW81DATA4801">
                  2720.00
                </td>
                <td class="text-center " id="TD1022ROW81DATA4786">
                  16240.00
                </td>
                <td class="text-center " id="TD1022ROW81DATA7737">
                  183
                </td>
                <td class="text-center " id="TD1022ROW81DATA7738">
                  103.606557
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW82DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="950" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=62&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW82DATA26815">
                  Campout
                </td>
                <td class="text-center " id="TD1022ROW82DATA4783">
                  Cubmaster Campout
                </td>
                <td class="text-center " id="TD1022ROW82DATA4785">
                  Whittmeyer Ranch
                </td>
                <td class="text-center " id="TD1022ROW82DATA4787">
                  12/08/23 5:00 PM
                </td>
                <td class="text-center " id="TD1022ROW82DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW82DATA4801">
                  113.57
                </td>
                <td class="text-center " id="TD1022ROW82DATA4786">
                  -113.57
                </td>
                <td class="text-center " id="TD1022ROW82DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW82DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW83DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="960" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=81&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW83DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW83DATA4783">
                  Jamboree On The Air
                </td>
                <td class="text-center " id="TD1022ROW83DATA4785">
                  The Bennetts
                </td>
                <td class="text-center " id="TD1022ROW83DATA4787">
                  10/20/23 5:00 PM
                </td>
                <td class="text-center " id="TD1022ROW83DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW83DATA4801">
                  91.98
                </td>
                <td class="text-center " id="TD1022ROW83DATA4786">
                  -91.98
                </td>
                <td class="text-center " id="TD1022ROW83DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW83DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW84DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="970" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=55&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW84DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW84DATA4783">
                  New Scout Ceremony
                </td>
                <td class="text-center " id="TD1022ROW84DATA4785">
                  Abiding Love Lutheran Church
                </td>
                <td class="text-center " id="TD1022ROW84DATA4787">
                  09/16/23 5:30 PM
                </td>
                <td class="text-center " id="TD1022ROW84DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW84DATA4801">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW84DATA4786">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW84DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW84DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW85DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="980" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=36&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW85DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW85DATA4783">
                  NEW DATE: Cubmobile Derby
                </td>
                <td class="text-center " id="TD1022ROW85DATA4785">
                  Oak Hill United Methodist Church
                </td>
                <td class="text-center " id="TD1022ROW85DATA4787">
                  08/26/23 8:00 AM
                </td>
                <td class="text-center " id="TD1022ROW85DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW85DATA4801">
                  54.24
                </td>
                <td class="text-center " id="TD1022ROW85DATA4786">
                  -54.24
                </td>
                <td class="text-center " id="TD1022ROW85DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW85DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW86DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="990" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=35&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW86DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW86DATA4783">
                  Bowling with the Pack
                </td>
                <td class="text-center " id="TD1022ROW86DATA4785">
                  Westgate Lanes
                </td>
                <td class="text-center " id="TD1022ROW86DATA4787">
                  07/15/23 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW86DATA4800">
                  297.00
                </td>
                <td class="text-center " id="TD1022ROW86DATA4801">
                  286.00
                </td>
                <td class="text-center " id="TD1022ROW86DATA4786">
                  11.00
                </td>
                <td class="text-center " id="TD1022ROW86DATA7737">
                  22
                </td>
                <td class="text-center " id="TD1022ROW86DATA7738">
                  13.500000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW87DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1000" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=23&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW87DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW87DATA4783">
                  Raingutter Regatta
                </td>
                <td class="text-center " id="TD1022ROW87DATA4785">
                  VFW Post 4443
                </td>
                <td class="text-center " id="TD1022ROW87DATA4787">
                  06/17/23 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW87DATA4800">
                  0.00
                </td>
                <td class="text-center " id="TD1022ROW87DATA4801">
                  39.35
                </td>
                <td class="text-center " id="TD1022ROW87DATA4786">
                  -39.35
                </td>
                <td class="text-center " id="TD1022ROW87DATA7737">
                  0
                </td>
                <td class="text-center " id="TD1022ROW87DATA7738">
                  0.000000
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD1022ROW88DATA4781">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1010" id="BUTTON20" type="button" name="update" title="View Details" value="View Details" onclick="LinkTo('/money/member-balance-details.php?Form_ID=338&amp;FK=0&amp;ID=19&amp;Stack=8','');">
                </td>
                <td class="text-center " id="TD1022ROW88DATA26815">
                  Special Event
                </td>
                <td class="text-center " id="TD1022ROW88DATA4783">
                  Rocket Derby
                </td>
                <td class="text-center " id="TD1022ROW88DATA4785">
                  Founders Memorial Park
                </td>
                <td class="text-center " id="TD1022ROW88DATA4787">
                  05/21/23 9:00 AM
                </td>
                <td class="text-center " id="TD1022ROW88DATA4800">
                  93.20
                </td>
                <td class="text-center " id="TD1022ROW88DATA4801">
                  433.83
                </td>
                <td class="text-center " id="TD1022ROW88DATA4786">
                  -340.63
                </td>
                <td class="text-center " id="TD1022ROW88DATA7737">
                  1
                </td>
                <td class="text-center " id="TD1022ROW88DATA7738">
                  93.200000
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="10" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=359&amp;Form_ID=337&amp;Stack=7&amp;SectionID=1022&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=359&amp;Form_ID=337&amp;Stack=7&amp;SectionID=1022&amp;ReportFormat=XLS','_blank');">
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
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1020" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1030" id="BUTTON1" type="button" name="cancel" title="Exit" value="Exit" onclick="LinkTo('/home/home.php','_top');">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON0">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>