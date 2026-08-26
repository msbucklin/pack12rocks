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
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/XOqlk8PL_yVx6IdpLbpXdiLy/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-5gTdLl6IS0Y6zKiLKimmhaY3IOLosQFpvj9Tvt9s2RAiKLtLUEWOP5N8mtHLNUzF"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script language="JavaScript" src="/assets/js/PaymentCollectorV2.js">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="353">
<input type="hidden" name="Form_ID" id="Form_ID" value="330">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=353&amp;Stack=1">
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=353">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=353">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=353">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=120" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=353">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=353">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=353">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=353">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=353&amp;Stack=1&amp;Application_ID=2840
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
Group Transactions
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs991">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="LinkTo('/money/query.php','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=0&amp;Stack=2','');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs990">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP46612" id="OP46612" value="">
    <input type="hidden" name="OP466216" id="OP466216" value="">
    <input type="hidden" name="OP46631" id="OP46631" value="">
    <input type="hidden" name="OP46641" id="OP46641" value="">
    <input type="hidden" name="OP466536" id="OP466536" value="">
    <input type="hidden" name="OP46662" id="OP46662" value="">
    <input type="hidden" name="OP48672" id="OP48672" value="">
    <input type="hidden" name="OP46682" id="OP46682" value="">
    <input type="hidden" name="OP46692" id="OP46692" value="">
    <input type="hidden" name="OP268402" id="OP268402" value="">
    <input type="hidden" name="OP268412" id="OP268412" value="">
  </div>
</div>
<div class="new-row" id="fs992">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid992">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB992" id="ROWCOUNTCB992" value="22">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Transaction Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Date<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Description<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Ref<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Amount<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Number<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">Total Amount<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 8);return false;">Debit Group Account<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 9);return false;">Debit Event<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 10);return false;">Credit Event<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 11);return false;">Debit Fund<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 12);return false;">Credit Fund<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD992ROW0DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=25&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW0DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW0DATA4675">
                  07/18/2026
                </td>
                <td class="text-center " id="TD992ROW0DATA4676">
                  Natural Bridge Caverns
                </td>
                <td class="text-center " id="TD992ROW0DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW0DATA4678">
                  14.50
                </td>
                <td class="text-center " id="TD992ROW0DATA43367">
                  17
                </td>
                <td class="text-center " id="TD992ROW0DATA43368">
                  338.75
                </td>
                <td class="text-center " id="TD992ROW0DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW0DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW0DATA4682">
                  Natural Bridge Caverns (07/18/26)
                </td>
                <td class="text-center " id="TD992ROW0DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW0DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW0DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=25&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW1DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=26&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW1DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW1DATA4675">
                  07/18/2026
                </td>
                <td class="text-center " id="TD992ROW1DATA4676">
                  Natural Bridge Caverns
                </td>
                <td class="text-center " id="TD992ROW1DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW1DATA4678">
                  19.75
                </td>
                <td class="text-center " id="TD992ROW1DATA43367">
                  18
                </td>
                <td class="text-center " id="TD992ROW1DATA43368">
                  493.75
                </td>
                <td class="text-center " id="TD992ROW1DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW1DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW1DATA4682">
                  Natural Bridge Caverns (07/18/26)
                </td>
                <td class="text-center " id="TD992ROW1DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW1DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW1DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=26&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW2DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=22&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW2DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW2DATA4675">
                  10/19/2025
                </td>
                <td class="text-center " id="TD992ROW2DATA4676">
                  Winter Overnight at San Antonio Zoo - Adult Participant
                </td>
                <td class="text-center " id="TD992ROW2DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW2DATA4678">
                  70.00
                </td>
                <td class="text-center " id="TD992ROW2DATA43367">
                  54
                </td>
                <td class="text-center " id="TD992ROW2DATA43368">
                  3780.00
                </td>
                <td class="text-center " id="TD992ROW2DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW2DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW2DATA4682">
                  Winter Overnight at San Antonio Zoo (01/31/26)
                </td>
                <td class="text-center " id="TD992ROW2DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW2DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW2DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=22&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW3DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=23&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW3DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW3DATA4675">
                  10/19/2025
                </td>
                <td class="text-center " id="TD992ROW3DATA4676">
                  Winter Overnight at San Antonio Zoo - Scout Participant
                </td>
                <td class="text-center " id="TD992ROW3DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW3DATA4678">
                  70.00
                </td>
                <td class="text-center " id="TD992ROW3DATA43367">
                  62
                </td>
                <td class="text-center " id="TD992ROW3DATA43368">
                  4340.00
                </td>
                <td class="text-center " id="TD992ROW3DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW3DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW3DATA4682">
                  Winter Overnight at San Antonio Zoo (01/31/26)
                </td>
                <td class="text-center " id="TD992ROW3DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW3DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW3DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=23&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW4DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=24&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW4DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW4DATA4675">
                  10/19/2025
                </td>
                <td class="text-center " id="TD992ROW4DATA4676">
                  Winter Overnight at San Antonio Zoo - Guests
                </td>
                <td class="text-center " id="TD992ROW4DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW4DATA4678">
                  70.00
                </td>
                <td class="text-center " id="TD992ROW4DATA43367">
                  18
                </td>
                <td class="text-center " id="TD992ROW4DATA43368">
                  1330.00
                </td>
                <td class="text-center " id="TD992ROW4DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW4DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW4DATA4682">
                  Winter Overnight at San Antonio Zoo (01/31/26)
                </td>
                <td class="text-center " id="TD992ROW4DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW4DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW4DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=24&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW5DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=21&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW5DATA4674">
                  Charge Member Dues
                </td>
                <td class="text-center " id="TD992ROW5DATA4675">
                  09/10/2025
                </td>
                <td class="text-center " id="TD992ROW5DATA4676">
                  Annual Pack Fees, Due 9/30/25
                </td>
                <td class="text-center " id="TD992ROW5DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW5DATA4678">
                  170.00
                </td>
                <td class="text-center " id="TD992ROW5DATA43367">
                  105
                </td>
                <td class="text-center " id="TD992ROW5DATA43368">
                  17850.00
                </td>
                <td class="text-center " id="TD992ROW5DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW5DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW5DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW5DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW5DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW5DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=21&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW6DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW6DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW6DATA4675">
                  07/13/2025
                </td>
                <td class="text-center " id="TD992ROW6DATA4676">
                  Innerspace Caverns Tour - July 2025
                </td>
                <td class="text-center " id="TD992ROW6DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW6DATA4678">
                  15.00
                </td>
                <td class="text-center " id="TD992ROW6DATA43367">
                  31
                </td>
                <td class="text-center " id="TD992ROW6DATA43368">
                  606.00
                </td>
                <td class="text-center " id="TD992ROW6DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW6DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW6DATA4682">
                  Innerspace Caverns (07/19/25)
                </td>
                <td class="text-center " id="TD992ROW6DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW6DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW6DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW7DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=19&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW7DATA4674">
                  Charge Member Dues
                </td>
                <td class="text-center " id="TD992ROW7DATA4675">
                  01/29/2025
                </td>
                <td class="text-center " id="TD992ROW7DATA4676">
                  Enrichment fee
                </td>
                <td class="text-center " id="TD992ROW7DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW7DATA4678">
                  100.00
                </td>
                <td class="text-center " id="TD992ROW7DATA43367">
                  56
                </td>
                <td class="text-center " id="TD992ROW7DATA43368">
                  5371.25
                </td>
                <td class="text-center " id="TD992ROW7DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW7DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW7DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW7DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW7DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW7DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=19&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW8DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=18&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW8DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW8DATA4675">
                  01/08/2025
                </td>
                <td class="text-center " id="TD992ROW8DATA4676">
                  $95 per person for SeaWorld Winter Overnight
                </td>
                <td class="text-center " id="TD992ROW8DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW8DATA4678">
                  95.00
                </td>
                <td class="text-center " id="TD992ROW8DATA43367">
                  126
                </td>
                <td class="text-center " id="TD992ROW8DATA43368">
                  13870.00
                </td>
                <td class="text-center " id="TD992ROW8DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW8DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW8DATA4682">
                  Sea World Winter Overnight (01/25/25)
                </td>
                <td class="text-center " id="TD992ROW8DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW8DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW8DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=18&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW9DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=17&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW9DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW9DATA4675">
                  12/05/2024
                </td>
                <td class="text-center " id="TD992ROW9DATA4676">
                  Overnight at the USS Lexington, Jan 11-12
                </td>
                <td class="text-center " id="TD992ROW9DATA4677">
                  Overnight at the USS Lexington, Jan 11-12
                </td>
                <td class="text-center " id="TD992ROW9DATA4678">
                  75.00
                </td>
                <td class="text-center " id="TD992ROW9DATA43367">
                  50
                </td>
                <td class="text-center " id="TD992ROW9DATA43368">
                  3750.00
                </td>
                <td class="text-center " id="TD992ROW9DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW9DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW9DATA4682">
                  Overnight at the USS Lexington (01/11/25)
                </td>
                <td class="text-center " id="TD992ROW9DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW9DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW9DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=17&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW10DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=16&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW10DATA4674">
                  Charge Member Account
                </td>
                <td class="text-center " id="TD992ROW10DATA4675">
                  10/17/2024
                </td>
                <td class="text-center " id="TD992ROW10DATA4676">
                  Pack 12 t-shirt
                </td>
                <td class="text-center " id="TD992ROW10DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW10DATA4678">
                  12.50
                </td>
                <td class="text-center " id="TD992ROW10DATA43367">
                  5
                </td>
                <td class="text-center " id="TD992ROW10DATA43368">
                  87.50
                </td>
                <td class="text-center " id="TD992ROW10DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW10DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW10DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW10DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW10DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW10DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=16&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW11DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=15&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW11DATA4674">
                  Charge Member Account
                </td>
                <td class="text-center " id="TD992ROW11DATA4675">
                  09/19/2024
                </td>
                <td class="text-center " id="TD992ROW11DATA4676">
                  Pack 12 t-shirt
                </td>
                <td class="text-center " id="TD992ROW11DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW11DATA4678">
                  12.50
                </td>
                <td class="text-center " id="TD992ROW11DATA43367">
                  8
                </td>
                <td class="text-center " id="TD992ROW11DATA43368">
                  100.00
                </td>
                <td class="text-center " id="TD992ROW11DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW11DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW11DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW11DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW11DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW11DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=15&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW12DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=14&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW12DATA4674">
                  Charge Member Dues
                </td>
                <td class="text-center " id="TD992ROW12DATA4675">
                  09/16/2024
                </td>
                <td class="text-center " id="TD992ROW12DATA4676">
                  2024-25 Pack 12 fee ($70/scout)
                </td>
                <td class="text-center " id="TD992ROW12DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW12DATA4678">
                  70.00
                </td>
                <td class="text-center " id="TD992ROW12DATA43367">
                  113
                </td>
                <td class="text-center " id="TD992ROW12DATA43368">
                  7910.00
                </td>
                <td class="text-center " id="TD992ROW12DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW12DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW12DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW12DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW12DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW12DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=14&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW13DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=12&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW13DATA4674">
                  Charge Member Dues
                </td>
                <td class="text-center " id="TD992ROW13DATA4675">
                  02/05/2024
                </td>
                <td class="text-center " id="TD992ROW13DATA4676">
                  BSA National Registration Fee = $80 per scout
                </td>
                <td class="text-center " id="TD992ROW13DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW13DATA4678">
                  80.00
                </td>
                <td class="text-center " id="TD992ROW13DATA43367">
                  109
                </td>
                <td class="text-center " id="TD992ROW13DATA43368">
                  8720.00
                </td>
                <td class="text-center " id="TD992ROW13DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW13DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW13DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW13DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW13DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW13DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=12&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW14DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=13&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW14DATA4674">
                  Credit Member Account
                </td>
                <td class="text-center " id="TD992ROW14DATA4675">
                  02/05/2024
                </td>
                <td class="text-center " id="TD992ROW14DATA4676">
                  Credit BSA charge to new scouts
                </td>
                <td class="text-center " id="TD992ROW14DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW14DATA4678">
                  80.00
                </td>
                <td class="text-center " id="TD992ROW14DATA43367">
                  31
                </td>
                <td class="text-center " id="TD992ROW14DATA43368">
                  2480.00
                </td>
                <td class="text-center " id="TD992ROW14DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW14DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW14DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW14DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW14DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW14DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=13&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW15DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=11&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW15DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW15DATA4675">
                  12/20/2023
                </td>
                <td class="text-center " id="TD992ROW15DATA4676">
                  Charge for Winter Overnight NASA space center 01/27/2024
                </td>
                <td class="text-center " id="TD992ROW15DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW15DATA4678">
                  80.00
                </td>
                <td class="text-center " id="TD992ROW15DATA43367">
                  23
                </td>
                <td class="text-center " id="TD992ROW15DATA43368">
                  2320.00
                </td>
                <td class="text-center " id="TD992ROW15DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW15DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW15DATA4682">
                  Winter Overnight: NASA Space Center Houston (01/27/24)
                </td>
                <td class="text-center " id="TD992ROW15DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW15DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW15DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=11&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW16DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=9&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW16DATA4674">
                  Charge Member Account
                </td>
                <td class="text-center " id="TD992ROW16DATA4675">
                  11/16/2023
                </td>
                <td class="text-center " id="TD992ROW16DATA4676">
                  Enrichment Fee
                </td>
                <td class="text-center " id="TD992ROW16DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW16DATA4678">
                  100.00
                </td>
                <td class="text-center " id="TD992ROW16DATA43367">
                  53
                </td>
                <td class="text-center " id="TD992ROW16DATA43368">
                  4747.06
                </td>
                <td class="text-center " id="TD992ROW16DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW16DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW16DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW16DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW16DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW16DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=9&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW17DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=8&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW17DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW17DATA4675">
                  10/10/2023
                </td>
                <td class="text-center " id="TD992ROW17DATA4676">
                  Charge for Winter Overnight NASA space center 01/27/2024
                </td>
                <td class="text-center " id="TD992ROW17DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW17DATA4678">
                  80.00
                </td>
                <td class="text-center " id="TD992ROW17DATA43367">
                  160
                </td>
                <td class="text-center " id="TD992ROW17DATA43368">
                  15680.00
                </td>
                <td class="text-center " id="TD992ROW17DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW17DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW17DATA4682">
                  Winter Overnight: NASA Space Center Houston (01/27/24)
                </td>
                <td class="text-center " id="TD992ROW17DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW17DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW17DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=8&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW18DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=6&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW18DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW18DATA4675">
                  10/03/2023
                </td>
                <td class="text-center " id="TD992ROW18DATA4676">
                  Winter Overnight: NASA Space Center Houston 01/27/24
                </td>
                <td class="text-center " id="TD992ROW18DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW18DATA4678">
                  80.00
                </td>
                <td class="text-center " id="TD992ROW18DATA43367">
                  1
                </td>
                <td class="text-center " id="TD992ROW18DATA43368">
                  160.00
                </td>
                <td class="text-center " id="TD992ROW18DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW18DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW18DATA4682">
                  Winter Overnight: NASA Space Center Houston (01/27/24)
                </td>
                <td class="text-center " id="TD992ROW18DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW18DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW18DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=6&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW19DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=7&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW19DATA4674">
                  Charge Member Account
                </td>
                <td class="text-center " id="TD992ROW19DATA4675">
                  09/18/2023
                </td>
                <td class="text-center " id="TD992ROW19DATA4676">
                  Pack 12 t-shirt(s) - $12.50 each
                </td>
                <td class="text-center " id="TD992ROW19DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW19DATA4678">
                  12.50
                </td>
                <td class="text-center " id="TD992ROW19DATA43367">
                  4
                </td>
                <td class="text-center " id="TD992ROW19DATA43368">
                  112.50
                </td>
                <td class="text-center " id="TD992ROW19DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW19DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW19DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW19DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW19DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW19DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=7&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW20DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=5&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW20DATA4674">
                  Charge Member Dues
                </td>
                <td class="text-center " id="TD992ROW20DATA4675">
                  09/13/2023
                </td>
                <td class="text-center " id="TD992ROW20DATA4676">
                  Pack 12 dues
                </td>
                <td class="text-center " id="TD992ROW20DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW20DATA4678">
                  70.00
                </td>
                <td class="text-center " id="TD992ROW20DATA43367">
                  121
                </td>
                <td class="text-center " id="TD992ROW20DATA43368">
                  8470.00
                </td>
                <td class="text-center " id="TD992ROW20DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW20DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW20DATA4682">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW20DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW20DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW20DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=5&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD992ROW21DATA4672">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON14" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=4&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD992ROW21DATA4674">
                  Charge Member Account For Event
                </td>
                <td class="text-center " id="TD992ROW21DATA4675">
                  07/15/2023
                </td>
                <td class="text-center " id="TD992ROW21DATA4676">
                  Bowling Charges
                </td>
                <td class="text-center " id="TD992ROW21DATA4677">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW21DATA4678">
                  11.00
                </td>
                <td class="text-center " id="TD992ROW21DATA43367">
                  22
                </td>
                <td class="text-center " id="TD992ROW21DATA43368">
                  297.00
                </td>
                <td class="text-center " id="TD992ROW21DATA4679">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW21DATA4681">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW21DATA4682">
                  Bowling with the Pack (07/15/23)
                </td>
                <td class="text-center " id="TD992ROW21DATA61586">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW21DATA61585">
                  &nbsp;
                </td>
                <td class="text-center " id="TD992ROW21DATA4673">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON27" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=353&amp;Form_ID=329&amp;FK=0&amp;ID=4&amp;Stack=2','');">
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="14" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=353&amp;Form_ID=330&amp;Stack=1&amp;SectionID=992&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=353&amp;Form_ID=330&amp;Stack=1&amp;SectionID=992&amp;ReportFormat=XLS','_blank');">
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
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('/money/transaction-add.php?Form_ID=328&amp;FK=0&amp;ID=0&amp;Stack=2','');">
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