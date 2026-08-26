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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="313">
<input type="hidden" name="Form_ID" id="Form_ID" value="577">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=313&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=313">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=313">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=313">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=42" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=313">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=313">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=313">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=313">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=313&amp;Stack=1&amp;Application_ID=2840
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
My Training History
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs2215">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP87682" id="OP87682" value="">
    <input type="hidden" name="OP876916" id="OP876916" value="">
    <input type="hidden" name="OP877010" id="OP877010" value="">
  </div>
</div>
<div class="new-row" id="fs2218">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 500px; min-width: 200px;">
      <p>
      These are all of the training classes that you have completed.
      </p>
      <p>
      If you completed the same class more than once, add a new record for each time you took the class.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs2217">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid2217">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB2217" id="ROWCOUNTCB2217" value="31">
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Training<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Completed<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Comment<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Expires<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Certificate<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD2217ROW0DATA8776">
                  BALOO (Basic Adult Ldr Outdoor Orient)
                </td>
                <td class="text-center " id="TD2217ROW0DATA8777">
                  10/04/2025
                </td>
                <td class="text-center " id="TD2217ROW0DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW0DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW0DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW1DATA8776">
                  Bullying
                </td>
                <td class="text-center " id="TD2217ROW1DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW1DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW1DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW1DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW2DATA8776">
                  CS19 Advancement
                </td>
                <td class="text-center " id="TD2217ROW2DATA8777">
                  08/11/2025
                </td>
                <td class="text-center " id="TD2217ROW2DATA8778">
                  Added via upload on 9/30/2025
                </td>
                <td class="text-center " id="TD2217ROW2DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW2DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW3DATA8776">
                  CS19 Aims and Methods of Cub Scouting
                </td>
                <td class="text-center " id="TD2217ROW3DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW3DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW3DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW3DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW4DATA8776">
                  CS19 Annual Charter Renewal Rechartering
                </td>
                <td class="text-center " id="TD2217ROW4DATA8777">
                  09/13/2025
                </td>
                <td class="text-center " id="TD2217ROW4DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW4DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW4DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW5DATA8776">
                  CS19 Annual Program Planning for Cub Scouting
                </td>
                <td class="text-center " id="TD2217ROW5DATA8777">
                  09/13/2025
                </td>
                <td class="text-center " id="TD2217ROW5DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW5DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW5DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW6DATA8776">
                  CS19 Bobcat
                </td>
                <td class="text-center " id="TD2217ROW6DATA8777">
                  08/11/2025
                </td>
                <td class="text-center " id="TD2217ROW6DATA8778">
                  Added via upload on 9/30/2025
                </td>
                <td class="text-center " id="TD2217ROW6DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW6DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW7DATA8776">
                  CS19 Childhood Development
                </td>
                <td class="text-center " id="TD2217ROW7DATA8777">
                  08/11/2025
                </td>
                <td class="text-center " id="TD2217ROW7DATA8778">
                  Added via upload on 9/30/2025
                </td>
                <td class="text-center " id="TD2217ROW7DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW7DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW8DATA8776">
                  CS19 Conducting a Cub Scout Den Meeting
                </td>
                <td class="text-center " id="TD2217ROW8DATA8777">
                  08/11/2025
                </td>
                <td class="text-center " id="TD2217ROW8DATA8778">
                  Added via upload on 9/30/2025
                </td>
                <td class="text-center " id="TD2217ROW8DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW8DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW9DATA8776">
                  CS19 Conducting a Pack Committee Meeting
                </td>
                <td class="text-center " id="TD2217ROW9DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW9DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW9DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW9DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW10DATA8776">
                  CS19 Continue the Journey
                </td>
                <td class="text-center " id="TD2217ROW10DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW10DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW10DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW10DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW11DATA8776">
                  CS19 Cub Scout Uniforms
                </td>
                <td class="text-center " id="TD2217ROW11DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW11DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW11DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW11DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW12DATA8776">
                  CS19 Den Management
                </td>
                <td class="text-center " id="TD2217ROW12DATA8777">
                  08/11/2025
                </td>
                <td class="text-center " id="TD2217ROW12DATA8778">
                  Added via upload on 9/30/2025
                </td>
                <td class="text-center " id="TD2217ROW12DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW12DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW13DATA8776">
                  CS19 Denners and Den Chiefs
                </td>
                <td class="text-center " id="TD2217ROW13DATA8777">
                  08/11/2025
                </td>
                <td class="text-center " id="TD2217ROW13DATA8778">
                  Added via upload on 9/30/2025
                </td>
                <td class="text-center " id="TD2217ROW13DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW13DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW14DATA8776">
                  CS19 Involving Adults in Cub Scouting
                </td>
                <td class="text-center " id="TD2217ROW14DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW14DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW14DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW14DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW15DATA8776">
                  CS19 Keeping Cub Scouting Safe
                </td>
                <td class="text-center " id="TD2217ROW15DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW15DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW15DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW15DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW16DATA8776">
                  CS19 Pack Finance
                </td>
                <td class="text-center " id="TD2217ROW16DATA8777">
                  09/13/2025
                </td>
                <td class="text-center " id="TD2217ROW16DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW16DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW16DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW17DATA8776">
                  CS19 Pack Structure
                </td>
                <td class="text-center " id="TD2217ROW17DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW17DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW17DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW17DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW18DATA8776">
                  CS19 Preparing Families for Outdoor Adventures
                </td>
                <td class="text-center " id="TD2217ROW18DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW18DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW18DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW18DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW19DATA8776">
                  CS19 Resources
                </td>
                <td class="text-center " id="TD2217ROW19DATA8777">
                  08/11/2025
                </td>
                <td class="text-center " id="TD2217ROW19DATA8778">
                  Added via upload on 9/30/2025
                </td>
                <td class="text-center " id="TD2217ROW19DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW19DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW20DATA8776">
                  CS19 Welcome
                </td>
                <td class="text-center " id="TD2217ROW20DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW20DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW20DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW20DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW21DATA8776">
                  Hazardous Weather Training
                </td>
                <td class="text-center " id="TD2217ROW21DATA8777">
                  08/11/2025
                </td>
                <td class="text-center " id="TD2217ROW21DATA8778">
                  Added via upload on 9/30/2025
                </td>
                <td class="text-center " id="TD2217ROW21DATA9456">
                  08/11/2027
                </td>
                <td class="text-center " id="TD2217ROW21DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW22DATA8776">
                  Introduction to the Cub Scout Outdoor Program v2
                </td>
                <td class="text-center " id="TD2217ROW22DATA8777">
                  09/30/2025
                </td>
                <td class="text-center " id="TD2217ROW22DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW22DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW22DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW23DATA8776">
                  Overview and Policies
                </td>
                <td class="text-center " id="TD2217ROW23DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW23DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW23DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW23DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW24DATA8776">
                  Pack Camping Program
                </td>
                <td class="text-center " id="TD2217ROW24DATA8777">
                  09/30/2025
                </td>
                <td class="text-center " id="TD2217ROW24DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW24DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW24DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW25DATA8776">
                  Planning Your Cub Scout Outdoor Event v2
                </td>
                <td class="text-center " id="TD2217ROW25DATA8777">
                  09/30/2025
                </td>
                <td class="text-center " id="TD2217ROW25DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW25DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW25DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW26DATA8776">
                  Planning Your Event
                </td>
                <td class="text-center " id="TD2217ROW26DATA8777">
                  09/30/2025
                </td>
                <td class="text-center " id="TD2217ROW26DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW26DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW26DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW27DATA8776">
                  Safeguarding Youth Training Certification
                </td>
                <td class="text-center " id="TD2217ROW27DATA8777">
                  05/13/2026
                </td>
                <td class="text-center " id="TD2217ROW27DATA8778">
                  Added via upload on 5/14/2026
                </td>
                <td class="text-center " id="TD2217ROW27DATA9456">
                  05/13/2027
                </td>
                <td class="text-center " id="TD2217ROW27DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW28DATA8776">
                  Sexual Abuse
                </td>
                <td class="text-center " id="TD2217ROW28DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW28DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW28DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW28DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW29DATA8776">
                  Youth Protection Training 2
                </td>
                <td class="text-center " id="TD2217ROW29DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW29DATA8778">
                  Added via upload on 2/23/2025
                </td>
                <td class="text-center " id="TD2217ROW29DATA9456">
                  05/31/2026
                </td>
                <td class="text-center " id="TD2217ROW29DATA38689">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2217ROW30DATA8776">
                  YPT Certification Test
                </td>
                <td class="text-center " id="TD2217ROW30DATA8777">
                  10/06/2024
                </td>
                <td class="text-center " id="TD2217ROW30DATA8778">
                  Added via upload on 12/16/2025
                </td>
                <td class="text-center " id="TD2217ROW30DATA9456">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2217ROW30DATA38689">
                  &nbsp;
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="5" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=313&amp;Form_ID=577&amp;Stack=1&amp;SectionID=2217&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=313&amp;Form_ID=577&amp;Stack=1&amp;SectionID=2217&amp;ReportFormat=XLS','_blank');">
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
<div class="new-row" id="fs2216">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>