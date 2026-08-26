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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="299">
<input type="hidden" name="Form_ID" id="Form_ID" value="285">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=299&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=299">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=299">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=299">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=195" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=299">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=299">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=299">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=299">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=299&amp;Stack=1&amp;Application_ID=2840
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
Leadership History
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs829">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP40502" id="OP40502" value="">
    <input type="hidden" name="OP40182" id="OP40182" value="">
    <input type="hidden" name="OP405116" id="OP405116" value="">
    <input type="hidden" name="OP405216" id="OP405216" value="">
  </div>
</div>
<div class="new-row" id="fs830">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON4" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON5" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=0&amp;Stack=2','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON6" type="button" name="save continue" title="Unfilled Adult Leadership Positions Report" value="Unfilled Adult Leadership Positions Report" onclick="LinkTo('FormReport.aspx?Menu_Item_ID=299&amp;Form_ID=6414&amp;FK=0&amp;ID=0&amp;Stack=1','FormReportaspxWindow');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs844">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 500px; min-width: 200px;">
      <p>
      When a leader's term has expired, set the "End Date" on his or her leadership record instead of deleting the record. This will save the leadership history while removing the individual from this position.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs831">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid831">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB831" id="ROWCOUNTCB831" value="47">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Member<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Position<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Start<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">End<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD831ROW0DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=220&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW0DATA4023">
                  Duryee, David
                </td>
                <td class="text-center " id="TD831ROW0DATA4024">
                  Chartered Organization Rep.
                </td>
                <td class="text-center " id="TD831ROW0DATA4025">
                  02/03/2026
                </td>
                <td class="text-center " id="TD831ROW0DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW0DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=220&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW1DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=214&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW1DATA4023">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD831ROW1DATA4024">
                  Committee Chairman
                </td>
                <td class="text-center " id="TD831ROW1DATA4025">
                  01/29/2026
                </td>
                <td class="text-center " id="TD831ROW1DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW1DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=214&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW2DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=215&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW2DATA4023">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD831ROW2DATA4024">
                  Key 3 Delegate
                </td>
                <td class="text-center " id="TD831ROW2DATA4025">
                  01/29/2026
                </td>
                <td class="text-center " id="TD831ROW2DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW2DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=215&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW3DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=212&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW3DATA4023">
                  Babb, Chris
                </td>
                <td class="text-center " id="TD831ROW3DATA4024">
                  Unit Training Chair
                </td>
                <td class="text-center " id="TD831ROW3DATA4025">
                  12/01/2025
                </td>
                <td class="text-center " id="TD831ROW3DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW3DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=212&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW4DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=211&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW4DATA4023">
                  Whittington, Aric
                </td>
                <td class="text-center " id="TD831ROW4DATA4024">
                  Asst. Den Leader
                </td>
                <td class="text-center " id="TD831ROW4DATA4025">
                  10/20/2025
                </td>
                <td class="text-center " id="TD831ROW4DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW4DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=211&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW5DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=210&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW5DATA4023">
                  Westphal, Jenny
                </td>
                <td class="text-center " id="TD831ROW5DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW5DATA4025">
                  09/15/2025
                </td>
                <td class="text-center " id="TD831ROW5DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW5DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=210&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW6DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=207&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW6DATA4023">
                  Chidester, Amy
                </td>
                <td class="text-center " id="TD831ROW6DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW6DATA4025">
                  09/14/2025
                </td>
                <td class="text-center " id="TD831ROW6DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW6DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=207&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW7DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=208&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW7DATA4023">
                  Nguyen, Phuong
                </td>
                <td class="text-center " id="TD831ROW7DATA4024">
                  Secretary
                </td>
                <td class="text-center " id="TD831ROW7DATA4025">
                  09/14/2025
                </td>
                <td class="text-center " id="TD831ROW7DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW7DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=208&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW8DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=191&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW8DATA4023">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD831ROW8DATA4024">
                  Asst. Den Leader
                </td>
                <td class="text-center " id="TD831ROW8DATA4025">
                  08/10/2025
                </td>
                <td class="text-center " id="TD831ROW8DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW8DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=191&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW9DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=196&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW9DATA4023">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD831ROW9DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW9DATA4025">
                  08/10/2025
                </td>
                <td class="text-center " id="TD831ROW9DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW9DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=196&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW10DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=203&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW10DATA4023">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD831ROW10DATA4024">
                  Tiger Den Leader
                </td>
                <td class="text-center " id="TD831ROW10DATA4025">
                  08/10/2025
                </td>
                <td class="text-center " id="TD831ROW10DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW10DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=203&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW11DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=205&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW11DATA4023">
                  Goodine, David
                </td>
                <td class="text-center " id="TD831ROW11DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW11DATA4025">
                  07/17/2025
                </td>
                <td class="text-center " id="TD831ROW11DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW11DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=205&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW12DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=190&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW12DATA4023">
                  Goodine, David
                </td>
                <td class="text-center " id="TD831ROW12DATA4024">
                  Asst. Den Leader
                </td>
                <td class="text-center " id="TD831ROW12DATA4025">
                  07/01/2025
                </td>
                <td class="text-center " id="TD831ROW12DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW12DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=190&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW13DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=202&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW13DATA4023">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD831ROW13DATA4024">
                  Committee Member
                </td>
                <td class="text-center " id="TD831ROW13DATA4025">
                  06/28/2025
                </td>
                <td class="text-center " id="TD831ROW13DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW13DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=202&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW14DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=188&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW14DATA4023">
                  DeMartini, Trevor
                </td>
                <td class="text-center " id="TD831ROW14DATA4024">
                  Unit Scouter Reserve
                </td>
                <td class="text-center " id="TD831ROW14DATA4025">
                  06/12/2025
                </td>
                <td class="text-center " id="TD831ROW14DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW14DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=188&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW15DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=186&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW15DATA4023">
                  Hickman, Trey
                </td>
                <td class="text-center " id="TD831ROW15DATA4024">
                  Asst. Den Leader
                </td>
                <td class="text-center " id="TD831ROW15DATA4025">
                  06/01/2025
                </td>
                <td class="text-center " id="TD831ROW15DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW15DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=186&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW16DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=189&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW16DATA4023">
                  Mallios, Jason
                </td>
                <td class="text-center " id="TD831ROW16DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW16DATA4025">
                  06/01/2025
                </td>
                <td class="text-center " id="TD831ROW16DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW16DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=189&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW17DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=199&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW17DATA4023">
                  Bucklin, Mary
                </td>
                <td class="text-center " id="TD831ROW17DATA4024">
                  Advancement Chair
                </td>
                <td class="text-center " id="TD831ROW17DATA4025">
                  04/16/2025
                </td>
                <td class="text-center " id="TD831ROW17DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW17DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=199&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW18DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=182&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW18DATA4023">
                  Bucklin, Mary
                </td>
                <td class="text-center " id="TD831ROW18DATA4024">
                  Committee Member
                </td>
                <td class="text-center " id="TD831ROW18DATA4025">
                  04/15/2025
                </td>
                <td class="text-center " id="TD831ROW18DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW18DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=182&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW19DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=173&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW19DATA4023">
                  Hayes, David
                </td>
                <td class="text-center " id="TD831ROW19DATA4024">
                  Unit Scouter Reserve
                </td>
                <td class="text-center " id="TD831ROW19DATA4025">
                  12/05/2024
                </td>
                <td class="text-center " id="TD831ROW19DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW19DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=173&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW20DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=204&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW20DATA4023">
                  De Los Santos Tamez, Diego
                </td>
                <td class="text-center " id="TD831ROW20DATA4024">
                  Tiger Den Leader
                </td>
                <td class="text-center " id="TD831ROW20DATA4025">
                  10/24/2024
                </td>
                <td class="text-center " id="TD831ROW20DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW20DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=204&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW21DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=180&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW21DATA4023">
                  McFarland, Ian
                </td>
                <td class="text-center " id="TD831ROW21DATA4024">
                  Asst. Den Leader
                </td>
                <td class="text-center " id="TD831ROW21DATA4025">
                  10/19/2024
                </td>
                <td class="text-center " id="TD831ROW21DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW21DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=180&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW22DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=170&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW22DATA4023">
                  De Los Santos Tamez, Diego
                </td>
                <td class="text-center " id="TD831ROW22DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW22DATA4025">
                  10/16/2024
                </td>
                <td class="text-center " id="TD831ROW22DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW22DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=170&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW23DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=200&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW23DATA4023">
                  Byrd, Amanda
                </td>
                <td class="text-center " id="TD831ROW23DATA4024">
                  Committee Member
                </td>
                <td class="text-center " id="TD831ROW23DATA4025">
                  10/07/2024
                </td>
                <td class="text-center " id="TD831ROW23DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW23DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=200&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW24DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=169&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW24DATA4023">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD831ROW24DATA4024">
                  Treasurer
                </td>
                <td class="text-center " id="TD831ROW24DATA4025">
                  09/24/2024
                </td>
                <td class="text-center " id="TD831ROW24DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW24DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=169&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW25DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=165&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW25DATA4023">
                  Gaete, Holly
                </td>
                <td class="text-center " id="TD831ROW25DATA4024">
                  New Member Coordinator
                </td>
                <td class="text-center " id="TD831ROW25DATA4025">
                  09/22/2024
                </td>
                <td class="text-center " id="TD831ROW25DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW25DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="650" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=165&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW26DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="660" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=164&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW26DATA4023">
                  Swantner, Albert
                </td>
                <td class="text-center " id="TD831ROW26DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW26DATA4025">
                  09/21/2024
                </td>
                <td class="text-center " id="TD831ROW26DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW26DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="670" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=164&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW27DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="680" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=201&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW27DATA4023">
                  Byrd, Ryan
                </td>
                <td class="text-center " id="TD831ROW27DATA4024">
                  Tiger Den Leader
                </td>
                <td class="text-center " id="TD831ROW27DATA4025">
                  09/01/2024
                </td>
                <td class="text-center " id="TD831ROW27DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW27DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="690" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=201&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW28DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="700" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=146&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW28DATA4023">
                  Byrd, Ryan
                </td>
                <td class="text-center " id="TD831ROW28DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW28DATA4025">
                  08/12/2024
                </td>
                <td class="text-center " id="TD831ROW28DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW28DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="710" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=146&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW29DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="720" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=141&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW29DATA4023">
                  Byrd, Amanda
                </td>
                <td class="text-center " id="TD831ROW29DATA4024">
                  Quartermaster
                </td>
                <td class="text-center " id="TD831ROW29DATA4025">
                  06/05/2024
                </td>
                <td class="text-center " id="TD831ROW29DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW29DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="730" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=141&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW30DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="740" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=142&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW30DATA4023">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD831ROW30DATA4024">
                  Cubmaster
                </td>
                <td class="text-center " id="TD831ROW30DATA4025">
                  05/19/2024
                </td>
                <td class="text-center " id="TD831ROW30DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW30DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="750" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=142&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW31DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="760" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=144&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW31DATA4023">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD831ROW31DATA4024">
                  Key 3 Delegate
                </td>
                <td class="text-center " id="TD831ROW31DATA4025">
                  05/19/2024
                </td>
                <td class="text-center " id="TD831ROW31DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW31DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="770" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=144&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW32DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="780" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=127&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW32DATA4023">
                  Marshall, Mark
                </td>
                <td class="text-center " id="TD831ROW32DATA4024">
                  Unit Scouter Reserve
                </td>
                <td class="text-center " id="TD831ROW32DATA4025">
                  09/17/2023
                </td>
                <td class="text-center " id="TD831ROW32DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW32DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="790" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=127&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW33DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="800" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=103&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW33DATA4023">
                  Alvarez, Kristy
                </td>
                <td class="text-center " id="TD831ROW33DATA4024">
                  Event Chair
                </td>
                <td class="text-center " id="TD831ROW33DATA4025">
                  05/31/2023
                </td>
                <td class="text-center " id="TD831ROW33DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW33DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="810" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=103&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW34DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="820" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=198&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW34DATA4023">
                  Alvarez, Kristy
                </td>
                <td class="text-center " id="TD831ROW34DATA4024">
                  Committee Member
                </td>
                <td class="text-center " id="TD831ROW34DATA4025">
                  05/31/2023
                </td>
                <td class="text-center " id="TD831ROW34DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW34DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="830" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=198&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW35DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="840" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=76&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW35DATA4023">
                  Mallios, Jim
                </td>
                <td class="text-center " id="TD831ROW35DATA4024">
                  Unit Scouter Reserve
                </td>
                <td class="text-center " id="TD831ROW35DATA4025">
                  11/02/2022
                </td>
                <td class="text-center " id="TD831ROW35DATA4026">
                  &nbsp;
                </td>
                <td class="text-center " id="TD831ROW35DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="850" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=76&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW36DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="860" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=157&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW36DATA4023">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD831ROW36DATA4024">
                  Webmaster
                </td>
                <td class="text-center " id="TD831ROW36DATA4025">
                  09/18/2024
                </td>
                <td class="text-center " id="TD831ROW36DATA4026">
                  01/29/2026
                </td>
                <td class="text-center " id="TD831ROW36DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="870" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=157&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW37DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="880" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=209&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW37DATA4023">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD831ROW37DATA4024">
                  Assistant Committee Chair
                </td>
                <td class="text-center " id="TD831ROW37DATA4025">
                  09/14/2025
                </td>
                <td class="text-center " id="TD831ROW37DATA4026">
                  01/28/2026
                </td>
                <td class="text-center " id="TD831ROW37DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="890" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=209&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW38DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="900" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=206&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW38DATA4023">
                  Slonsky, Henry
                </td>
                <td class="text-center " id="TD831ROW38DATA4024">
                  Unit Scouter Reserve
                </td>
                <td class="text-center " id="TD831ROW38DATA4025">
                  01/01/2025
                </td>
                <td class="text-center " id="TD831ROW38DATA4026">
                  12/01/2025
                </td>
                <td class="text-center " id="TD831ROW38DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="910" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=206&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW39DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="920" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=185&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW39DATA4023">
                  Slonsky, Henry
                </td>
                <td class="text-center " id="TD831ROW39DATA4024">
                  Committee Member
                </td>
                <td class="text-center " id="TD831ROW39DATA4025">
                  06/01/2025
                </td>
                <td class="text-center " id="TD831ROW39DATA4026">
                  09/26/2025
                </td>
                <td class="text-center " id="TD831ROW39DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="930" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=185&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW40DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="940" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=168&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW40DATA4023">
                  Mallios, Jason
                </td>
                <td class="text-center " id="TD831ROW40DATA4024">
                  Asst. Den Leader
                </td>
                <td class="text-center " id="TD831ROW40DATA4025">
                  09/22/2024
                </td>
                <td class="text-center " id="TD831ROW40DATA4026">
                  05/31/2025
                </td>
                <td class="text-center " id="TD831ROW40DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="950" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=168&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW41DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="960" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=116&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW41DATA4023">
                  Files, Michael
                </td>
                <td class="text-center " id="TD831ROW41DATA4024">
                  Committee Member
                </td>
                <td class="text-center " id="TD831ROW41DATA4025">
                  08/20/2023
                </td>
                <td class="text-center " id="TD831ROW41DATA4026">
                  02/22/2025
                </td>
                <td class="text-center " id="TD831ROW41DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="970" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=116&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW42DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="980" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=179&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW42DATA4023">
                  Files, Michael
                </td>
                <td class="text-center " id="TD831ROW42DATA4024">
                  Committee Member
                </td>
                <td class="text-center " id="TD831ROW42DATA4025">
                  08/20/2023
                </td>
                <td class="text-center " id="TD831ROW42DATA4026">
                  02/22/2025
                </td>
                <td class="text-center " id="TD831ROW42DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="990" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=179&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW43DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1000" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=98&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW43DATA4023">
                  Files, Michael
                </td>
                <td class="text-center " id="TD831ROW43DATA4024">
                  Assistant Cubmaster
                </td>
                <td class="text-center " id="TD831ROW43DATA4025">
                  01/01/2023
                </td>
                <td class="text-center " id="TD831ROW43DATA4026">
                  02/22/2025
                </td>
                <td class="text-center " id="TD831ROW43DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1010" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=98&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW44DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1020" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=124&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW44DATA4023">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD831ROW44DATA4024">
                  Den Leader
                </td>
                <td class="text-center " id="TD831ROW44DATA4025">
                  09/18/2023
                </td>
                <td class="text-center " id="TD831ROW44DATA4026">
                  09/30/2024
                </td>
                <td class="text-center " id="TD831ROW44DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1030" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=124&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW45DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1040" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=121&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW45DATA4023">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD831ROW45DATA4024">
                  Tiger Den Leader
                </td>
                <td class="text-center " id="TD831ROW45DATA4025">
                  08/21/2023
                </td>
                <td class="text-center " id="TD831ROW45DATA4026">
                  05/19/2024
                </td>
                <td class="text-center " id="TD831ROW45DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1050" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=121&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD831ROW46DATA4021">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1060" id="BUTTON9" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=299&amp;Form_ID=283&amp;FK=0&amp;ID=101&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD831ROW46DATA4023">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD831ROW46DATA4024">
                  Assistant Cubmaster
                </td>
                <td class="text-center " id="TD831ROW46DATA4025">
                  05/07/2023
                </td>
                <td class="text-center " id="TD831ROW46DATA4026">
                  05/19/2024
                </td>
                <td class="text-center " id="TD831ROW46DATA4022">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1070" id="BUTTON14" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=299&amp;Form_ID=284&amp;FK=0&amp;ID=101&amp;Stack=2','');">
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="6" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=299&amp;Form_ID=285&amp;Stack=1&amp;SectionID=831&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=299&amp;Form_ID=285&amp;Stack=1&amp;SectionID=831&amp;ReportFormat=XLS','_blank');">
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
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON4">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>