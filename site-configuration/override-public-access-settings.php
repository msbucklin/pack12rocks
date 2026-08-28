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
<body onunload="CloseErrorBox()" onload="easyFieldExit(this); easySetFocus();GetDeviceWidth();">
<form enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/FormDetail.aspx" target="_self" method="post" name="easyform" id="easyform">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="1212">
<input type="hidden" name="Form_ID" id="Form_ID" value="2534">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=1212&amp;Stack=0">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=1212">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=1212">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=1212">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=289" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=1212">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=1212">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=1212">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=1212">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=1212&amp;Stack=0&amp;Application_ID=2840
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
Override Default Public Access Settings
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="2840">
<div class="new-row" id="fs11326">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY396011">
          <td class="text-center" "="" colspan="1">
            <input type="hidden" name="RVALENTRY396011" id="RVALENTRY396011" value="">
            <span class="bodysubheading">
            Pack 12 Austin
            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="1">
            Put a checkmark next to each menu item for which you wish to override the public access setting.
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="1">
            Then select a value for public access.  <b>Yes</b> will allow the public to access this item without logging on.
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="1">
            Click the <b>Save</b> button to save your changes.
            <br><br>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs11328">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON4" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="130" id="BUTTON5" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON5">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs11327">
  <div class="container-fluid container-flex">
    <div class="center-block " id="DIVCB11327">
      <table class="table table-striped table-bordered table-condensed table-responsive table-curved sortable" id="sortablegrid6">
        <thead>
        <tr>
          <th class="unsortable" id="TH11327" name="TH11327"><input type="checkbox" class="form-control" id="CB11327" name="CB11327" onclick="ClickCheckboxAll(this);"></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Public Access<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Menu Path<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Default Public Access Value<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
        </tr>
        </thead>
        <tbody>
        <input type="hidden" name="ROWCOUNTCB11327" id="ROWCOUNTCB11327" value="17">
        <tr>
          <input type="hidden" name="LINKCB11327ROW0" id="LINKCB11327ROW0" value="6496">
          <input type="hidden" name="CHILDCB11327ROW0" id="CHILDCB11327ROW0" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="140" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW0" name="CB11327ROW0" size="1">
            <input type="hidden" name="OLDCB11327ROW0" id="OLDCB11327ROW0" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW0DATA39608" id="OLDCB11327ROW0DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW0DATA39608" name="SPAN11327ROW0DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW0DATA39608" name="CB11327ROW0DATA39608" tabindex="150" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW0DATA39608" name="CB11327ROW0DATA39608" tabindex="150" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW0DATA39605" id="OLDCB11327ROW0DATA39605" value="Home--&gt;About Us">
            Home--&gt;About Us
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW0DATA39609" id="OLDCB11327ROW0DATA39609" value="Yes">
            Yes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW1" id="LINKCB11327ROW1" value="6775">
          <input type="hidden" name="CHILDCB11327ROW1" id="CHILDCB11327ROW1" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="180" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW1" name="CB11327ROW1" size="1">
            <input type="hidden" name="OLDCB11327ROW1" id="OLDCB11327ROW1" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW1DATA39608" id="OLDCB11327ROW1DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW1DATA39608" name="SPAN11327ROW1DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW1DATA39608" name="CB11327ROW1DATA39608" tabindex="190" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW1DATA39608" name="CB11327ROW1DATA39608" tabindex="190" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW1DATA39605" id="OLDCB11327ROW1DATA39605" value="Home--&gt;Uniform">
            Home--&gt;Uniform
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW1DATA39609" id="OLDCB11327ROW1DATA39609" value="Yes">
            Yes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW2" id="LINKCB11327ROW2" value="6578">
          <input type="hidden" name="CHILDCB11327ROW2" id="CHILDCB11327ROW2" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="220" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW2" name="CB11327ROW2" size="1">
            <input type="hidden" name="OLDCB11327ROW2" id="OLDCB11327ROW2" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW2DATA39608" id="OLDCB11327ROW2DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW2DATA39608" name="SPAN11327ROW2DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW2DATA39608" name="CB11327ROW2DATA39608" tabindex="230" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW2DATA39608" name="CB11327ROW2DATA39608" tabindex="230" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW2DATA39605" id="OLDCB11327ROW2DATA39605" value="Home--&gt;Camping">
            Home--&gt;Camping
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW2DATA39609" id="OLDCB11327ROW2DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW3" id="LINKCB11327ROW3" value="6776">
          <input type="hidden" name="CHILDCB11327ROW3" id="CHILDCB11327ROW3" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="260" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW3" name="CB11327ROW3" size="1">
            <input type="hidden" name="OLDCB11327ROW3" id="OLDCB11327ROW3" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW3DATA39608" id="OLDCB11327ROW3DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW3DATA39608" name="SPAN11327ROW3DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW3DATA39608" name="CB11327ROW3DATA39608" tabindex="270" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW3DATA39608" name="CB11327ROW3DATA39608" tabindex="270" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW3DATA39605" id="OLDCB11327ROW3DATA39605" value="Home--&gt;Fundraising">
            Home--&gt;Fundraising
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW3DATA39609" id="OLDCB11327ROW3DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW4" id="LINKCB11327ROW4" value="7593">
          <input type="hidden" name="CHILDCB11327ROW4" id="CHILDCB11327ROW4" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="300" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW4" name="CB11327ROW4" size="1">
            <input type="hidden" name="OLDCB11327ROW4" id="OLDCB11327ROW4" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW4DATA39608" id="OLDCB11327ROW4DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW4DATA39608" name="SPAN11327ROW4DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW4DATA39608" name="CB11327ROW4DATA39608" tabindex="310" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW4DATA39608" name="CB11327ROW4DATA39608" tabindex="310" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW4DATA39605" id="OLDCB11327ROW4DATA39605" value="Home--&gt;Renewing Your Membership">
            Home--&gt;Renewing Your Membership
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW4DATA39609" id="OLDCB11327ROW4DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW5" id="LINKCB11327ROW5" value="7069">
          <input type="hidden" name="CHILDCB11327ROW5" id="CHILDCB11327ROW5" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="340" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW5" name="CB11327ROW5" size="1">
            <input type="hidden" name="OLDCB11327ROW5" id="OLDCB11327ROW5" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW5DATA39608" id="OLDCB11327ROW5DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW5DATA39608" name="SPAN11327ROW5DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW5DATA39608" name="CB11327ROW5DATA39608" tabindex="350" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW5DATA39608" name="CB11327ROW5DATA39608" tabindex="350" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW5DATA39605" id="OLDCB11327ROW5DATA39605" value="Home--&gt;How to Make Payments">
            Home--&gt;How to Make Payments
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW5DATA39609" id="OLDCB11327ROW5DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW6" id="LINKCB11327ROW6" value="6579">
          <input type="hidden" name="CHILDCB11327ROW6" id="CHILDCB11327ROW6" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="380" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW6" name="CB11327ROW6" size="1">
            <input type="hidden" name="OLDCB11327ROW6" id="OLDCB11327ROW6" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW6DATA39608" id="OLDCB11327ROW6DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW6DATA39608" name="SPAN11327ROW6DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW6DATA39608" name="CB11327ROW6DATA39608" tabindex="390" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW6DATA39608" name="CB11327ROW6DATA39608" tabindex="390" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW6DATA39605" id="OLDCB11327ROW6DATA39605" value="Home--&gt;Volunteering">
            Home--&gt;Volunteering
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW6DATA39609" id="OLDCB11327ROW6DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW7" id="LINKCB11327ROW7" value="8610">
          <input type="hidden" name="CHILDCB11327ROW7" id="CHILDCB11327ROW7" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="420" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW7" name="CB11327ROW7" size="1">
            <input type="hidden" name="OLDCB11327ROW7" id="OLDCB11327ROW7" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW7DATA39608" id="OLDCB11327ROW7DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW7DATA39608" name="SPAN11327ROW7DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW7DATA39608" name="CB11327ROW7DATA39608" tabindex="430" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW7DATA39608" name="CB11327ROW7DATA39608" tabindex="430" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW7DATA39605" id="OLDCB11327ROW7DATA39605" value="Home--&gt;Organization Chart">
            Home--&gt;Organization Chart
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW7DATA39609" id="OLDCB11327ROW7DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW8" id="LINKCB11327ROW8" value="6764">
          <input type="hidden" name="CHILDCB11327ROW8" id="CHILDCB11327ROW8" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="460" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW8" name="CB11327ROW8" size="1">
            <input type="hidden" name="OLDCB11327ROW8" id="OLDCB11327ROW8" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW8DATA39608" id="OLDCB11327ROW8DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW8DATA39608" name="SPAN11327ROW8DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW8DATA39608" name="CB11327ROW8DATA39608" tabindex="470" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW8DATA39608" name="CB11327ROW8DATA39608" tabindex="470" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW8DATA39605" id="OLDCB11327ROW8DATA39605" value="Home--&gt;Den Leader Resources">
            Home--&gt;Den Leader Resources
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW8DATA39609" id="OLDCB11327ROW8DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW9" id="LINKCB11327ROW9" value="290">
          <input type="hidden" name="CHILDCB11327ROW9" id="CHILDCB11327ROW9" value="1037">
          <td>
            <input type="checkbox" class="form-control" tabindex="500" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW9" name="CB11327ROW9" size="1">
            <input type="hidden" name="OLDCB11327ROW9" id="OLDCB11327ROW9" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW9DATA39608" id="OLDCB11327ROW9DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW9DATA39608" name="SPAN11327ROW9DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW9DATA39608" name="CB11327ROW9DATA39608" tabindex="510" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW9DATA39608" name="CB11327ROW9DATA39608" tabindex="510" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW9DATA39605" id="OLDCB11327ROW9DATA39605" value="Home--&gt;Our Leaders">
            Home--&gt;Our Leaders
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW9DATA39609" id="OLDCB11327ROW9DATA39609" value="Yes">
            Yes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW10" id="LINKCB11327ROW10" value="304">
          <input type="hidden" name="CHILDCB11327ROW10" id="CHILDCB11327ROW10" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="540" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW10" name="CB11327ROW10" size="1">
            <input type="hidden" name="OLDCB11327ROW10" id="OLDCB11327ROW10" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW10DATA39608" id="OLDCB11327ROW10DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW10DATA39608" name="SPAN11327ROW10DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW10DATA39608" name="CB11327ROW10DATA39608" tabindex="550" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW10DATA39608" name="CB11327ROW10DATA39608" tabindex="550" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW10DATA39605" id="OLDCB11327ROW10DATA39605" value="My Stuff--&gt;Change My Password">
            My Stuff--&gt;Change My Password
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW10DATA39609" id="OLDCB11327ROW10DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW11" id="LINKCB11327ROW11" value="318">
          <input type="hidden" name="CHILDCB11327ROW11" id="CHILDCB11327ROW11" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="580" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW11" name="CB11327ROW11" size="1">
            <input type="hidden" name="OLDCB11327ROW11" id="OLDCB11327ROW11" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW11DATA39608" id="OLDCB11327ROW11DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW11DATA39608" name="SPAN11327ROW11DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW11DATA39608" name="CB11327ROW11DATA39608" tabindex="590" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW11DATA39608" name="CB11327ROW11DATA39608" tabindex="590" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW11DATA39605" id="OLDCB11327ROW11DATA39605" value="Events--&gt;Calendar">
            Events--&gt;Calendar
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW11DATA39609" id="OLDCB11327ROW11DATA39609" value="No">
            No
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW12" id="LINKCB11327ROW12" value="326">
          <input type="hidden" name="CHILDCB11327ROW12" id="CHILDCB11327ROW12" value="1025">
          <td>
            <input type="checkbox" class="form-control" tabindex="620" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW12" name="CB11327ROW12" size="1">
            <input type="hidden" name="OLDCB11327ROW12" id="OLDCB11327ROW12" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW12DATA39608" id="OLDCB11327ROW12DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW12DATA39608" name="SPAN11327ROW12DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW12DATA39608" name="CB11327ROW12DATA39608" tabindex="630" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW12DATA39608" name="CB11327ROW12DATA39608" tabindex="630" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW12DATA39605" id="OLDCB11327ROW12DATA39605" value="Photo Gallery--&gt;View Photos">
            Photo Gallery--&gt;View Photos
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW12DATA39609" id="OLDCB11327ROW12DATA39609" value="Yes">
            Yes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW13" id="LINKCB11327ROW13" value="327">
          <input type="hidden" name="CHILDCB11327ROW13" id="CHILDCB11327ROW13" value="1026">
          <td>
            <input type="checkbox" class="form-control" tabindex="660" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW13" name="CB11327ROW13" size="1">
            <input type="hidden" name="OLDCB11327ROW13" id="OLDCB11327ROW13" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW13DATA39608" id="OLDCB11327ROW13DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW13DATA39608" name="SPAN11327ROW13DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW13DATA39608" name="CB11327ROW13DATA39608" tabindex="670" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW13DATA39608" name="CB11327ROW13DATA39608" tabindex="670" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW13DATA39605" id="OLDCB11327ROW13DATA39605" value="Photo Gallery--&gt;View Videos">
            Photo Gallery--&gt;View Videos
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW13DATA39609" id="OLDCB11327ROW13DATA39609" value="Yes">
            Yes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW14" id="LINKCB11327ROW14" value="390">
          <input type="hidden" name="CHILDCB11327ROW14" id="CHILDCB11327ROW14" value="1027">
          <td>
            <input type="checkbox" class="form-control" tabindex="700" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW14" name="CB11327ROW14" size="1">
            <input type="hidden" name="OLDCB11327ROW14" id="OLDCB11327ROW14" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW14DATA39608" id="OLDCB11327ROW14DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW14DATA39608" name="SPAN11327ROW14DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW14DATA39608" name="CB11327ROW14DATA39608" tabindex="710" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW14DATA39608" name="CB11327ROW14DATA39608" tabindex="710" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW14DATA39605" id="OLDCB11327ROW14DATA39605" value="Resources--&gt;Forms &amp; Documents">
            Resources--&gt;Forms &amp; Documents
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW14DATA39609" id="OLDCB11327ROW14DATA39609" value="Yes">
            Yes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW15" id="LINKCB11327ROW15" value="391">
          <input type="hidden" name="CHILDCB11327ROW15" id="CHILDCB11327ROW15" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="740" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW15" name="CB11327ROW15" size="1">
            <input type="hidden" name="OLDCB11327ROW15" id="OLDCB11327ROW15" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW15DATA39608" id="OLDCB11327ROW15DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW15DATA39608" name="SPAN11327ROW15DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW15DATA39608" name="CB11327ROW15DATA39608" tabindex="750" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW15DATA39608" name="CB11327ROW15DATA39608" tabindex="750" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW15DATA39605" id="OLDCB11327ROW15DATA39605" value="Resources--&gt;Web Links">
            Resources--&gt;Web Links
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW15DATA39609" id="OLDCB11327ROW15DATA39609" value="Yes">
            Yes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11327ROW16" id="LINKCB11327ROW16" value="2877">
          <input type="hidden" name="CHILDCB11327ROW16" id="CHILDCB11327ROW16" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="780" onclick="ClickCheckbox(this);" value="Y" id="CB11327ROW16" name="CB11327ROW16" size="1">
            <input type="hidden" name="OLDCB11327ROW16" id="OLDCB11327ROW16" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW16DATA39608" id="OLDCB11327ROW16DATA39608" value="N">
            <span class="text-left" id="SPAN11327ROW16DATA39608" name="SPAN11327ROW16DATA39608">
            <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW16DATA39608" name="CB11327ROW16DATA39608" tabindex="790" disabled="" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB11327ROW16DATA39608" name="CB11327ROW16DATA39608" tabindex="790" disabled="" onclick="easyFieldExit(this)" checked="" value="N">No</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW16DATA39605" id="OLDCB11327ROW16DATA39605" value="Events--&gt;Event Reports--&gt;Upcoming Events Summary">
            Events--&gt;Event Reports--&gt;Upcoming Events Summary
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11327ROW16DATA39609" id="OLDCB11327ROW16DATA39609" value="No">
            No
          </td>
        </tr>
        </tbody>
      </table>


</div>
</div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON4">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>