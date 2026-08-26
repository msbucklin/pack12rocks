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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="398">
<input type="hidden" name="Form_ID" id="Form_ID" value="1447">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="2">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=398&amp;Stack=2">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=2','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=2','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=398">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=398">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=398">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=210" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=398">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=398">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=398">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=398">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=398&amp;Stack=2&amp;Application_ID=2840
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
Training Courses
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7222">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=0&amp;Stack=3','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON2" type="button" name="cancel" title="Exit" value="Exit" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON3" type="button" name="save continue" title="Delete Unused Courses" value="Delete Unused Courses" onclick="buttonlink(this,'N');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs7221">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP284241" id="OP284241" value="">
    <input type="hidden" name="OP49301142" id="OP49301142" value="">
    <input type="hidden" name="OP2842510" id="OP2842510" value="">
    <input type="hidden" name="OP284265" id="OP284265" value="">
    <input type="hidden" name="OP4775316" id="OP4775316" value="">
    <input type="hidden" name="OP6404116" id="OP6404116" value="">
    <input type="hidden" name="OP5673311" id="OP5673311" value="">
    <input type="hidden" name="OP386912" id="OP386912" value="">
  </div>
</div>
<div class="new-row" id="fs7223">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid7223">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB7223" id="ROWCOUNTCB7223" value="44">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Training Name<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Code<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Description<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Exp Months<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">State Required?<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Required For<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">Not Valid After<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 8);return false;">Certification End Date<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 9);return false;">Add'l Info<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD7223ROW0DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=91&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW0DATA28431">
                  BALOO (Basic Adult Ldr Outdoor Orient)
                </td>
                <td class="text-center " id="TD7223ROW0DATA49302">
                  C32
                </td>
                <td class="text-center " id="TD7223ROW0DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW0DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW0DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW0DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW0DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW0DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW0DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW0DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=91&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW1DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=60&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW1DATA28431">
                  BSA Standards and Volunteers
                </td>
                <td class="text-center " id="TD7223ROW1DATA49302">
                  SCO_270
                </td>
                <td class="text-center " id="TD7223ROW1DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW1DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW1DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW1DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW1DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW1DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW1DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW1DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=60&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW2DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=98&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW2DATA28431">
                  Bullying
                </td>
                <td class="text-center " id="TD7223ROW2DATA49302">
                  SCO_3010
                </td>
                <td class="text-center " id="TD7223ROW2DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW2DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW2DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW2DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW2DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW2DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW2DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW2DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=98&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW3DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=38&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW3DATA28431">
                  CS19 Advancement
                </td>
                <td class="text-center " id="TD7223ROW3DATA49302">
                  SCO_453
                </td>
                <td class="text-center " id="TD7223ROW3DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW3DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW3DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW3DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW3DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW3DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW3DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW3DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=38&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW4DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=36&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW4DATA28431">
                  CS19 Aims and Methods of Cub Scouting
                </td>
                <td class="text-center " id="TD7223ROW4DATA49302">
                  SCO_451
                </td>
                <td class="text-center " id="TD7223ROW4DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW4DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW4DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW4DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW4DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW4DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW4DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW4DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=36&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW5DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=55&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW5DATA28431">
                  CS19 Annual Charter Renewal Rechartering
                </td>
                <td class="text-center " id="TD7223ROW5DATA49302">
                  SCO_469
                </td>
                <td class="text-center " id="TD7223ROW5DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW5DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW5DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW5DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW5DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW5DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW5DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW5DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=55&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW6DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=54&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW6DATA28431">
                  CS19 Annual Program Planning for Cub Scouting
                </td>
                <td class="text-center " id="TD7223ROW6DATA49302">
                  SCO_468
                </td>
                <td class="text-center " id="TD7223ROW6DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW6DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW6DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW6DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW6DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW6DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW6DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW6DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=54&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW7DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=37&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW7DATA28431">
                  CS19 Bobcat
                </td>
                <td class="text-center " id="TD7223ROW7DATA49302">
                  SCO_452
                </td>
                <td class="text-center " id="TD7223ROW7DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW7DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW7DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW7DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW7DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW7DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW7DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW7DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=37&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW8DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=48&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW8DATA28431">
                  CS19 Childhood Development
                </td>
                <td class="text-center " id="TD7223ROW8DATA49302">
                  SCO_465
                </td>
                <td class="text-center " id="TD7223ROW8DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW8DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW8DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW8DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW8DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW8DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW8DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW8DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=48&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW9DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=40&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW9DATA28431">
                  CS19 Conducting a Cub Scout Den Meeting
                </td>
                <td class="text-center " id="TD7223ROW9DATA49302">
                  SCO_455
                </td>
                <td class="text-center " id="TD7223ROW9DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW9DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW9DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW9DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW9DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW9DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW9DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW9DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=40&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW10DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=51&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW10DATA28431">
                  CS19 Conducting a Cub Scout Pack Meeting
                </td>
                <td class="text-center " id="TD7223ROW10DATA49302">
                  SCO_458
                </td>
                <td class="text-center " id="TD7223ROW10DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW10DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW10DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW10DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW10DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW10DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW10DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW10DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=51&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW11DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=52&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW11DATA28431">
                  CS19 Conducting a Pack Committee Meeting
                </td>
                <td class="text-center " id="TD7223ROW11DATA49302">
                  SCO_459
                </td>
                <td class="text-center " id="TD7223ROW11DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW11DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW11DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW11DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW11DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW11DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW11DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW11DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=52&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW12DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=49&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW12DATA28431">
                  CS19 Continue the Journey
                </td>
                <td class="text-center " id="TD7223ROW12DATA49302">
                  SCO_466
                </td>
                <td class="text-center " id="TD7223ROW12DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW12DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW12DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW12DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW12DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW12DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW12DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW12DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=49&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW13DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=39&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW13DATA28431">
                  CS19 Cub Scout Uniforms
                </td>
                <td class="text-center " id="TD7223ROW13DATA49302">
                  SCO_454
                </td>
                <td class="text-center " id="TD7223ROW13DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW13DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW13DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW13DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW13DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW13DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW13DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW13DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=39&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW14DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=42&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW14DATA28431">
                  CS19 Den Management
                </td>
                <td class="text-center " id="TD7223ROW14DATA49302">
                  SCO_457
                </td>
                <td class="text-center " id="TD7223ROW14DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW14DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW14DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW14DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW14DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW14DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW14DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW14DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=42&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW15DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=47&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW15DATA28431">
                  CS19 Denners and Den Chiefs
                </td>
                <td class="text-center " id="TD7223ROW15DATA49302">
                  SCO_464
                </td>
                <td class="text-center " id="TD7223ROW15DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW15DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW15DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW15DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW15DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW15DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW15DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW15DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=47&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW16DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=45&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW16DATA28431">
                  CS19 Involving Adults in Cub Scouting
                </td>
                <td class="text-center " id="TD7223ROW16DATA49302">
                  SCO_462
                </td>
                <td class="text-center " id="TD7223ROW16DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW16DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW16DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW16DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW16DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW16DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW16DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW16DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=45&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW17DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=44&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW17DATA28431">
                  CS19 Keeping Cub Scouting Safe
                </td>
                <td class="text-center " id="TD7223ROW17DATA49302">
                  SCO_461
                </td>
                <td class="text-center " id="TD7223ROW17DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW17DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW17DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW17DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW17DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW17DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW17DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW17DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=44&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW18DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=53&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW18DATA28431">
                  CS19 Pack Finance
                </td>
                <td class="text-center " id="TD7223ROW18DATA49302">
                  SCO_467
                </td>
                <td class="text-center " id="TD7223ROW18DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW18DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW18DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW18DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW18DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW18DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW18DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW18DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=53&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW19DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=46&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW19DATA28431">
                  CS19 Pack Structure
                </td>
                <td class="text-center " id="TD7223ROW19DATA49302">
                  SCO_463
                </td>
                <td class="text-center " id="TD7223ROW19DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW19DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW19DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW19DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW19DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW19DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW19DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW19DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=46&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW20DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=43&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW20DATA28431">
                  CS19 Preparing Families for Outdoor Adventures
                </td>
                <td class="text-center " id="TD7223ROW20DATA49302">
                  SCO_460
                </td>
                <td class="text-center " id="TD7223ROW20DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW20DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW20DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW20DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW20DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW20DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW20DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW20DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=43&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW21DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=41&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW21DATA28431">
                  CS19 Resources
                </td>
                <td class="text-center " id="TD7223ROW21DATA49302">
                  SCO_456
                </td>
                <td class="text-center " id="TD7223ROW21DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW21DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW21DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW21DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW21DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW21DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW21DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW21DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=41&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW22DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=35&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW22DATA28431">
                  CS19 Welcome
                </td>
                <td class="text-center " id="TD7223ROW22DATA49302">
                  SCO_450
                </td>
                <td class="text-center " id="TD7223ROW22DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW22DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW22DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW22DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW22DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW22DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW22DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW22DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=35&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW23DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=34&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW23DATA28431">
                  Cub Scout Den Ldr/Asst Pos Spec Tng Classroom
                </td>
                <td class="text-center " id="TD7223ROW23DATA49302">
                  C42
                </td>
                <td class="text-center " id="TD7223ROW23DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW23DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW23DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW23DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW23DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW23DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW23DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW23DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=34&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW24DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=3&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW24DATA28431">
                  Cubmaster Fast Start
                </td>
                <td class="text-center " id="TD7223ROW24DATA49302">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW24DATA28432">
                  Fast Start training is the first step for any new volunteer and is to be delivered immediately after a new leader registers and before he or she meets with any youth member.
                </td>
                <td class="text-center " id="TD7223ROW24DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW24DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW24DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW24DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW24DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW24DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW24DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=3&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW25DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="650" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=4&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW25DATA28431">
                  Den Leader Fast Start
                </td>
                <td class="text-center " id="TD7223ROW25DATA49302">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW25DATA28432">
                  Fast Start training is the first step for any new volunteer and is to be delivered immediately after a new leader registers and before he or she meets with any youth member.
                </td>
                <td class="text-center " id="TD7223ROW25DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW25DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW25DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW25DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW25DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW25DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW25DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="660" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=4&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW26DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="670" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=2&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW26DATA28431">
                  Den Leader Position-Specific Training
                </td>
                <td class="text-center " id="TD7223ROW26DATA49302">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW26DATA28432">
                  This course is intended to provide Tiger Cub, Wolf, and Bear den leaders with the basic information they need to conduct successful den meetings.
                </td>
                <td class="text-center " id="TD7223ROW26DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW26DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW26DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW26DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW26DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW26DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW26DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="680" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=2&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW27DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="690" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=50&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW27DATA28431">
                  Hazardous Weather Training
                </td>
                <td class="text-center " id="TD7223ROW27DATA49302">
                  SCO_800
                </td>
                <td class="text-center " id="TD7223ROW27DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW27DATA28433">
                  24
                </td>
                <td class="text-center " id="TD7223ROW27DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW27DATA38693">
                  Den Leaders
                </td>
                <td class="text-center " id="TD7223ROW27DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW27DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW27DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW27DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="700" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=50&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW28DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="710" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=92&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW28DATA28431">
                  Introduction to the Cub Scout Outdoor Program v2
                </td>
                <td class="text-center " id="TD7223ROW28DATA49302">
                  SCO_280
                </td>
                <td class="text-center " id="TD7223ROW28DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW28DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW28DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW28DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW28DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW28DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW28DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW28DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="720" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=92&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW29DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="730" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=56&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW29DATA28431">
                  Journey to Excellence
                </td>
                <td class="text-center " id="TD7223ROW29DATA49302">
                  SCO_530
                </td>
                <td class="text-center " id="TD7223ROW29DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW29DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW29DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW29DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW29DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW29DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW29DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW29DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="740" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=56&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW30DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="750" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=96&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW30DATA28431">
                  Overview and Policies
                </td>
                <td class="text-center " id="TD7223ROW30DATA49302">
                  SCO_3008
                </td>
                <td class="text-center " id="TD7223ROW30DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW30DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW30DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW30DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW30DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW30DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW30DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW30DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="760" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=96&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW31DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="770" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=93&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW31DATA28431">
                  Pack Camping Program
                </td>
                <td class="text-center " id="TD7223ROW31DATA49302">
                  SCO_281
                </td>
                <td class="text-center " id="TD7223ROW31DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW31DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW31DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW31DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW31DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW31DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW31DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW31DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="780" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=93&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW32DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="790" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=94&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW32DATA28431">
                  Planning Your Cub Scout Outdoor Event v2
                </td>
                <td class="text-center " id="TD7223ROW32DATA49302">
                  SCO_282
                </td>
                <td class="text-center " id="TD7223ROW32DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW32DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW32DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW32DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW32DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW32DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW32DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW32DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="800" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=94&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW33DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="810" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=95&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW33DATA28431">
                  Planning Your Event
                </td>
                <td class="text-center " id="TD7223ROW33DATA49302">
                  SCO_283
                </td>
                <td class="text-center " id="TD7223ROW33DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW33DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW33DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW33DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW33DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW33DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW33DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW33DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="820" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=95&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW34DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="830" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=80&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW34DATA28431">
                  Safeguarding Youth Training
                </td>
                <td class="text-center " id="TD7223ROW34DATA49302">
                  SCO_3014
                </td>
                <td class="text-center " id="TD7223ROW34DATA28432">
                  Replaced Youth Protection Training (YPT) in May, 2025
                </td>
                <td class="text-center " id="TD7223ROW34DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW34DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW34DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW34DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW34DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW34DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW34DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="840" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=80&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW35DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="850" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=81&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW35DATA28431">
                  Safeguarding Youth Training Certification
                </td>
                <td class="text-center " id="TD7223ROW35DATA49302">
                  Y01
                </td>
                <td class="text-center " id="TD7223ROW35DATA28432">
                  Replaced Youth Protection Training (YPT) in May, 2025
                </td>
                <td class="text-center " id="TD7223ROW35DATA28433">
                  12
                </td>
                <td class="text-center " id="TD7223ROW35DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW35DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW35DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW35DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW35DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW35DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="860" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=81&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW36DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="870" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=58&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW36DATA28431">
                  Scouting Units
                </td>
                <td class="text-center " id="TD7223ROW36DATA49302">
                  SCO_268
                </td>
                <td class="text-center " id="TD7223ROW36DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW36DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW36DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW36DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW36DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW36DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW36DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW36DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="880" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=58&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW37DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="890" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=97&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW37DATA28431">
                  Sexual Abuse
                </td>
                <td class="text-center " id="TD7223ROW37DATA49302">
                  SCO_3009
                </td>
                <td class="text-center " id="TD7223ROW37DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW37DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW37DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW37DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW37DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW37DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW37DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW37DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="900" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=97&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW38DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="910" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=59&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW38DATA28431">
                  The COR Position
                </td>
                <td class="text-center " id="TD7223ROW38DATA49302">
                  SCO_269
                </td>
                <td class="text-center " id="TD7223ROW38DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW38DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW38DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW38DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW38DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW38DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW38DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW38DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="920" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=59&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW39DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="930" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=5&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW39DATA28431">
                  This is Scouting
                </td>
                <td class="text-center " id="TD7223ROW39DATA49302">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW39DATA28432">
                  This on-line course stresses some important points for leaders to consider as the BSA moves forward into the future. Although continuing to address organization, goals, history and traditions, and funding, this course places increased emphasis on the BSA’s mission, vision, and values; its programs for boys of all ages and abilities; its role in the community; its aim to protect youth members; and its legacy. And it stresses the fun boys can have when they join Scouting.
                </td>
                <td class="text-center " id="TD7223ROW39DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW39DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW39DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW39DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW39DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW39DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW39DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="940" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=5&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW40DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="950" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=57&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW40DATA28431">
                  What is a Charter?
                </td>
                <td class="text-center " id="TD7223ROW40DATA49302">
                  SCO_267
                </td>
                <td class="text-center " id="TD7223ROW40DATA28432">
                  Added via upload on 4/8/2023
                </td>
                <td class="text-center " id="TD7223ROW40DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW40DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW40DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW40DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW40DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW40DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW40DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="960" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=57&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW41DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="970" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=1&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW41DATA28431">
                  Youth Protection Training
                </td>
                <td class="text-center " id="TD7223ROW41DATA49302">
                  Y01
                </td>
                <td class="text-center " id="TD7223ROW41DATA28432">
                  Youth Protection training is required for all leaders who have direct contact with youth. At all times, youth safety is the number one priority. At the same time, adults need to know the rules for keeping themselves safe, too. Comprehensive Youth Protection training teaches all the do’s and don’ts of working with youth.
                </td>
                <td class="text-center " id="TD7223ROW41DATA28433">
                  24
                </td>
                <td class="text-center " id="TD7223ROW41DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW41DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW41DATA54539">
                  10/01/2018
                </td>
                <td class="text-center " id="TD7223ROW41DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW41DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW41DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="980" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=1&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW42DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="990" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=6&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW42DATA28431">
                  Youth Protection Training 2
                </td>
                <td class="text-center " id="TD7223ROW42DATA49302">
                  Y01
                </td>
                <td class="text-center " id="TD7223ROW42DATA28432">
                  Version 2 of Youth Protection Training was announced on 2/1/2018 and is mandatory by 10/1/2018
                </td>
                <td class="text-center " id="TD7223ROW42DATA28433">
                  24
                </td>
                <td class="text-center " id="TD7223ROW42DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW42DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW42DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW42DATA64042">
                  05/31/2026
                </td>
                <td class="text-center " id="TD7223ROW42DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW42DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1000" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=6&amp;Stack=3','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7223ROW43DATA28429">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1010" id="BUTTON12" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=99&amp;Stack=3','');">
                </td>
                <td class="text-center " id="TD7223ROW43DATA28431">
                  YPT Certification Test
                </td>
                <td class="text-center " id="TD7223ROW43DATA49302">
                  SCO_3011
                </td>
                <td class="text-center " id="TD7223ROW43DATA28432">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD7223ROW43DATA28433">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW43DATA56734">
                  No
                </td>
                <td class="text-center " id="TD7223ROW43DATA38693">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW43DATA54539">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW43DATA64042">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW43DATA38694">
                  &nbsp;
                </td>
                <td class="text-center " id="TD7223ROW43DATA28430">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1020" id="BUTTON25" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=398&amp;Form_ID=1446&amp;FK=0&amp;ID=99&amp;Stack=3','');">
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="11" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=398&amp;Form_ID=1447&amp;Stack=2&amp;SectionID=7223&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=398&amp;Form_ID=1447&amp;Stack=2&amp;SectionID=7223&amp;ReportFormat=XLS','_blank');">
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
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1030" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1040" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('/site-configuration/training-courses-add.php?Form_ID=1445&amp;FK=0&amp;ID=0&amp;Stack=3','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1050" id="BUTTON2" type="button" name="cancel" title="Exit" value="Exit" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1060" id="BUTTON3" type="button" name="save continue" title="Delete Unused Courses" value="Delete Unused Courses" onclick="buttonlink(this,'N');">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON0">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>