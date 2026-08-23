<html lang="en"><head><meta http-equiv="origin-trial" content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
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
<body onunload="CloseErrorBox()" onload="easyFieldExit(this); ValidateGrid();easySetFocus();GetDeviceWidth();">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="3201">
<input type="hidden" name="Form_ID" id="Form_ID" value="4174">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=3201">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=3201">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=3201">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=329" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=3201">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=3201">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=3201">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=3201">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0&amp;Application_ID=2840
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
<input type="hidden" name="ID" id="ID" value="1">
<div class="new-row" id="fs16598">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr>
          <td class="bodysubheading text-center" colspan="2">
            TroopWebHost Administrative Contacts
            <br><br>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs16599">
  <div class="container-fluid container-flex">
    <ul class="nav nav-tabs">
    <li class="active">
    <a href="#">
    Leadership Positions
    </a>
    </li>
    <li>
    <a href="#" onclick="buttonlink(this)" id="savelink4173" name="savelink4173">
    Individual Members
    </a>
    </li>
    <li>
    <a href="#" onclick="buttonlink(this)" id="savelink4172" name="savelink4172">
    Current Contacts
    </a>
    </li>
    </ul>
  </div>
</div>
<div class="new-row" id="fs16601">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 800px; min-width: 200px;">
      <p>
      For each position, check the boxes to let members who currently hold that position receive the TroopWebHost newsletter and/or receive reminders when our TroopWebHost subscription is up for renewal.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs16602">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON5" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="120" id="BUTTON6" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON6">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs16600">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid16600">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB16600" id="ROWCOUNTCB16600" value="28">
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Title<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">TWH Newsletters<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">TWH Renewal Reminders<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW0" id="CHILDCB16600ROW0" value="21">
                <td class="text-center " id="TD16600ROW0DATA49780">
                  Advancement Chair
                </td>
                <td class="text-center " id="TD16600ROW0DATA49781">
                  <input type="hidden" name="OLDCB16600ROW0DATA49781" id="OLDCB16600ROW0DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW0DATA49781" name="CB16600ROW0DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW0DATA49782">
                  <input type="hidden" name="OLDCB16600ROW0DATA49782" id="OLDCB16600ROW0DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW0DATA49782" name="CB16600ROW0DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW1" id="CHILDCB16600ROW1" value="27">
                <td class="text-center " id="TD16600ROW1DATA49780">
                  Assistant Committee Chair
                </td>
                <td class="text-center " id="TD16600ROW1DATA49781">
                  <input type="hidden" name="OLDCB16600ROW1DATA49781" id="OLDCB16600ROW1DATA49781" value="Y">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" checked="" value="Y" id="CB16600ROW1DATA49781" name="CB16600ROW1DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW1DATA49782">
                  <input type="hidden" name="OLDCB16600ROW1DATA49782" id="OLDCB16600ROW1DATA49782" value="Y">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" checked="" value="Y" id="CB16600ROW1DATA49782" name="CB16600ROW1DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW2" id="CHILDCB16600ROW2" value="22">
                <td class="text-center " id="TD16600ROW2DATA49780">
                  Assistant Cubmaster
                </td>
                <td class="text-center " id="TD16600ROW2DATA49781">
                  <input type="hidden" name="OLDCB16600ROW2DATA49781" id="OLDCB16600ROW2DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW2DATA49781" name="CB16600ROW2DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW2DATA49782">
                  <input type="hidden" name="OLDCB16600ROW2DATA49782" id="OLDCB16600ROW2DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW2DATA49782" name="CB16600ROW2DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW3" id="CHILDCB16600ROW3" value="13">
                <td class="text-center " id="TD16600ROW3DATA49780">
                  Asst. Den Leader
                </td>
                <td class="text-center " id="TD16600ROW3DATA49781">
                  <input type="hidden" name="OLDCB16600ROW3DATA49781" id="OLDCB16600ROW3DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW3DATA49781" name="CB16600ROW3DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW3DATA49782">
                  <input type="hidden" name="OLDCB16600ROW3DATA49782" id="OLDCB16600ROW3DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW3DATA49782" name="CB16600ROW3DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW4" id="CHILDCB16600ROW4" value="23">
                <td class="text-center " id="TD16600ROW4DATA49780">
                  Chaplain
                </td>
                <td class="text-center " id="TD16600ROW4DATA49781">
                  <input type="hidden" name="OLDCB16600ROW4DATA49781" id="OLDCB16600ROW4DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW4DATA49781" name="CB16600ROW4DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW4DATA49782">
                  <input type="hidden" name="OLDCB16600ROW4DATA49782" id="OLDCB16600ROW4DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW4DATA49782" name="CB16600ROW4DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW5" id="CHILDCB16600ROW5" value="11">
                <td class="text-center " id="TD16600ROW5DATA49780">
                  Chartered Organization Rep.
                </td>
                <td class="text-center " id="TD16600ROW5DATA49781">
                  <input type="hidden" name="OLDCB16600ROW5DATA49781" id="OLDCB16600ROW5DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW5DATA49781" name="CB16600ROW5DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW5DATA49782">
                  <input type="hidden" name="OLDCB16600ROW5DATA49782" id="OLDCB16600ROW5DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW5DATA49782" name="CB16600ROW5DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW6" id="CHILDCB16600ROW6" value="5">
                <td class="text-center " id="TD16600ROW6DATA49780">
                  Committee Chairman
                </td>
                <td class="text-center " id="TD16600ROW6DATA49781">
                  <input type="hidden" name="OLDCB16600ROW6DATA49781" id="OLDCB16600ROW6DATA49781" value="Y">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" checked="" value="Y" id="CB16600ROW6DATA49781" name="CB16600ROW6DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW6DATA49782">
                  <input type="hidden" name="OLDCB16600ROW6DATA49782" id="OLDCB16600ROW6DATA49782" value="Y">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" checked="" value="Y" id="CB16600ROW6DATA49782" name="CB16600ROW6DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW7" id="CHILDCB16600ROW7" value="2">
                <td class="text-center " id="TD16600ROW7DATA49780">
                  Committee Member
                </td>
                <td class="text-center " id="TD16600ROW7DATA49781">
                  <input type="hidden" name="OLDCB16600ROW7DATA49781" id="OLDCB16600ROW7DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW7DATA49781" name="CB16600ROW7DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW7DATA49782">
                  <input type="hidden" name="OLDCB16600ROW7DATA49782" id="OLDCB16600ROW7DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW7DATA49782" name="CB16600ROW7DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW8" id="CHILDCB16600ROW8" value="1">
                <td class="text-center " id="TD16600ROW8DATA49780">
                  Cubmaster
                </td>
                <td class="text-center " id="TD16600ROW8DATA49781">
                  <input type="hidden" name="OLDCB16600ROW8DATA49781" id="OLDCB16600ROW8DATA49781" value="Y">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" checked="" value="Y" id="CB16600ROW8DATA49781" name="CB16600ROW8DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW8DATA49782">
                  <input type="hidden" name="OLDCB16600ROW8DATA49782" id="OLDCB16600ROW8DATA49782" value="Y">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" checked="" value="Y" id="CB16600ROW8DATA49782" name="CB16600ROW8DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW9" id="CHILDCB16600ROW9" value="6">
                <td class="text-center " id="TD16600ROW9DATA49780">
                  Den Leader
                </td>
                <td class="text-center " id="TD16600ROW9DATA49781">
                  <input type="hidden" name="OLDCB16600ROW9DATA49781" id="OLDCB16600ROW9DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW9DATA49781" name="CB16600ROW9DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW9DATA49782">
                  <input type="hidden" name="OLDCB16600ROW9DATA49782" id="OLDCB16600ROW9DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW9DATA49782" name="CB16600ROW9DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW10" id="CHILDCB16600ROW10" value="24">
                <td class="text-center " id="TD16600ROW10DATA49780">
                  Event Chair
                </td>
                <td class="text-center " id="TD16600ROW10DATA49781">
                  <input type="hidden" name="OLDCB16600ROW10DATA49781" id="OLDCB16600ROW10DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW10DATA49781" name="CB16600ROW10DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW10DATA49782">
                  <input type="hidden" name="OLDCB16600ROW10DATA49782" id="OLDCB16600ROW10DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW10DATA49782" name="CB16600ROW10DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW11" id="CHILDCB16600ROW11" value="12">
                <td class="text-center " id="TD16600ROW11DATA49780">
                  Executive Officer
                </td>
                <td class="text-center " id="TD16600ROW11DATA49781">
                  <input type="hidden" name="OLDCB16600ROW11DATA49781" id="OLDCB16600ROW11DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW11DATA49781" name="CB16600ROW11DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW11DATA49782">
                  <input type="hidden" name="OLDCB16600ROW11DATA49782" id="OLDCB16600ROW11DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW11DATA49782" name="CB16600ROW11DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW12" id="CHILDCB16600ROW12" value="9">
                <td class="text-center " id="TD16600ROW12DATA49780">
                  Key 3 Delegate
                </td>
                <td class="text-center " id="TD16600ROW12DATA49781">
                  <input type="hidden" name="OLDCB16600ROW12DATA49781" id="OLDCB16600ROW12DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW12DATA49781" name="CB16600ROW12DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW12DATA49782">
                  <input type="hidden" name="OLDCB16600ROW12DATA49782" id="OLDCB16600ROW12DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW12DATA49782" name="CB16600ROW12DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW13" id="CHILDCB16600ROW13" value="10">
                <td class="text-center " id="TD16600ROW13DATA49780">
                  Lion Den Leader
                </td>
                <td class="text-center " id="TD16600ROW13DATA49781">
                  <input type="hidden" name="OLDCB16600ROW13DATA49781" id="OLDCB16600ROW13DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW13DATA49781" name="CB16600ROW13DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW13DATA49782">
                  <input type="hidden" name="OLDCB16600ROW13DATA49782" id="OLDCB16600ROW13DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW13DATA49782" name="CB16600ROW13DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW14" id="CHILDCB16600ROW14" value="8">
                <td class="text-center " id="TD16600ROW14DATA49780">
                  New Member Coordinator
                </td>
                <td class="text-center " id="TD16600ROW14DATA49781">
                  <input type="hidden" name="OLDCB16600ROW14DATA49781" id="OLDCB16600ROW14DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW14DATA49781" name="CB16600ROW14DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW14DATA49782">
                  <input type="hidden" name="OLDCB16600ROW14DATA49782" id="OLDCB16600ROW14DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW14DATA49782" name="CB16600ROW14DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW15" id="CHILDCB16600ROW15" value="14">
                <td class="text-center " id="TD16600ROW15DATA49780">
                  Pack Trainer
                </td>
                <td class="text-center " id="TD16600ROW15DATA49781">
                  <input type="hidden" name="OLDCB16600ROW15DATA49781" id="OLDCB16600ROW15DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW15DATA49781" name="CB16600ROW15DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW15DATA49782">
                  <input type="hidden" name="OLDCB16600ROW15DATA49782" id="OLDCB16600ROW15DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW15DATA49782" name="CB16600ROW15DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW16" id="CHILDCB16600ROW16" value="25">
                <td class="text-center " id="TD16600ROW16DATA49780">
                  Popcorn Kernel
                </td>
                <td class="text-center " id="TD16600ROW16DATA49781">
                  <input type="hidden" name="OLDCB16600ROW16DATA49781" id="OLDCB16600ROW16DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW16DATA49781" name="CB16600ROW16DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW16DATA49782">
                  <input type="hidden" name="OLDCB16600ROW16DATA49782" id="OLDCB16600ROW16DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW16DATA49782" name="CB16600ROW16DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW17" id="CHILDCB16600ROW17" value="29">
                <td class="text-center " id="TD16600ROW17DATA49780">
                  Quartermaster
                </td>
                <td class="text-center " id="TD16600ROW17DATA49781">
                  <input type="hidden" name="OLDCB16600ROW17DATA49781" id="OLDCB16600ROW17DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW17DATA49781" name="CB16600ROW17DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW17DATA49782">
                  <input type="hidden" name="OLDCB16600ROW17DATA49782" id="OLDCB16600ROW17DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW17DATA49782" name="CB16600ROW17DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW18" id="CHILDCB16600ROW18" value="4">
                <td class="text-center " id="TD16600ROW18DATA49780">
                  Secretary
                </td>
                <td class="text-center " id="TD16600ROW18DATA49781">
                  <input type="hidden" name="OLDCB16600ROW18DATA49781" id="OLDCB16600ROW18DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW18DATA49781" name="CB16600ROW18DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW18DATA49782">
                  <input type="hidden" name="OLDCB16600ROW18DATA49782" id="OLDCB16600ROW18DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW18DATA49782" name="CB16600ROW18DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW19" id="CHILDCB16600ROW19" value="17">
                <td class="text-center " id="TD16600ROW19DATA49780">
                  Tiger Den Leader
                </td>
                <td class="text-center " id="TD16600ROW19DATA49781">
                  <input type="hidden" name="OLDCB16600ROW19DATA49781" id="OLDCB16600ROW19DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW19DATA49781" name="CB16600ROW19DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW19DATA49782">
                  <input type="hidden" name="OLDCB16600ROW19DATA49782" id="OLDCB16600ROW19DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW19DATA49782" name="CB16600ROW19DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW20" id="CHILDCB16600ROW20" value="3">
                <td class="text-center " id="TD16600ROW20DATA49780">
                  Treasurer
                </td>
                <td class="text-center " id="TD16600ROW20DATA49781">
                  <input type="hidden" name="OLDCB16600ROW20DATA49781" id="OLDCB16600ROW20DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW20DATA49781" name="CB16600ROW20DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW20DATA49782">
                  <input type="hidden" name="OLDCB16600ROW20DATA49782" id="OLDCB16600ROW20DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW20DATA49782" name="CB16600ROW20DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW21" id="CHILDCB16600ROW21" value="19">
                <td class="text-center " id="TD16600ROW21DATA49780">
                  Unit Scouter Reserve
                </td>
                <td class="text-center " id="TD16600ROW21DATA49781">
                  <input type="hidden" name="OLDCB16600ROW21DATA49781" id="OLDCB16600ROW21DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW21DATA49781" name="CB16600ROW21DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW21DATA49782">
                  <input type="hidden" name="OLDCB16600ROW21DATA49782" id="OLDCB16600ROW21DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW21DATA49782" name="CB16600ROW21DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW22" id="CHILDCB16600ROW22" value="15">
                <td class="text-center " id="TD16600ROW22DATA49780">
                  Unit Training Chair
                </td>
                <td class="text-center " id="TD16600ROW22DATA49781">
                  <input type="hidden" name="OLDCB16600ROW22DATA49781" id="OLDCB16600ROW22DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW22DATA49781" name="CB16600ROW22DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW22DATA49782">
                  <input type="hidden" name="OLDCB16600ROW22DATA49782" id="OLDCB16600ROW22DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW22DATA49782" name="CB16600ROW22DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW23" id="CHILDCB16600ROW23" value="20">
                <td class="text-center " id="TD16600ROW23DATA49780">
                  Webelos Assistant Den Leader
                </td>
                <td class="text-center " id="TD16600ROW23DATA49781">
                  <input type="hidden" name="OLDCB16600ROW23DATA49781" id="OLDCB16600ROW23DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW23DATA49781" name="CB16600ROW23DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW23DATA49782">
                  <input type="hidden" name="OLDCB16600ROW23DATA49782" id="OLDCB16600ROW23DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW23DATA49782" name="CB16600ROW23DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW24" id="CHILDCB16600ROW24" value="7">
                <td class="text-center " id="TD16600ROW24DATA49780">
                  Webelos Den Leader
                </td>
                <td class="text-center " id="TD16600ROW24DATA49781">
                  <input type="hidden" name="OLDCB16600ROW24DATA49781" id="OLDCB16600ROW24DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW24DATA49781" name="CB16600ROW24DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW24DATA49782">
                  <input type="hidden" name="OLDCB16600ROW24DATA49782" id="OLDCB16600ROW24DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW24DATA49782" name="CB16600ROW24DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW25" id="CHILDCB16600ROW25" value="28">
                <td class="text-center " id="TD16600ROW25DATA49780">
                  Webmaster
                </td>
                <td class="text-center " id="TD16600ROW25DATA49781">
                  <input type="hidden" name="OLDCB16600ROW25DATA49781" id="OLDCB16600ROW25DATA49781" value="Y">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" checked="" value="Y" id="CB16600ROW25DATA49781" name="CB16600ROW25DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW25DATA49782">
                  <input type="hidden" name="OLDCB16600ROW25DATA49782" id="OLDCB16600ROW25DATA49782" value="Y">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" checked="" value="Y" id="CB16600ROW25DATA49782" name="CB16600ROW25DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW26" id="CHILDCB16600ROW26" value="26">
                <td class="text-center " id="TD16600ROW26DATA49780">
                  Wreath Wrangler
                </td>
                <td class="text-center " id="TD16600ROW26DATA49781">
                  <input type="hidden" name="OLDCB16600ROW26DATA49781" id="OLDCB16600ROW26DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW26DATA49781" name="CB16600ROW26DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW26DATA49782">
                  <input type="hidden" name="OLDCB16600ROW26DATA49782" id="OLDCB16600ROW26DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW26DATA49782" name="CB16600ROW26DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB16600ROW27" id="CHILDCB16600ROW27" value="16">
                <td class="text-center " id="TD16600ROW27DATA49780">
                  Youth Protection Champion
                </td>
                <td class="text-center " id="TD16600ROW27DATA49781">
                  <input type="hidden" name="OLDCB16600ROW27DATA49781" id="OLDCB16600ROW27DATA49781" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW27DATA49781" name="CB16600ROW27DATA49781" size="1" title="Check this box if all leaders with this position should receive the monthly TroopWebHost newsletter announcement e-mail unless they personally opt out">
                </td>
                <td class="text-center " id="TD16600ROW27DATA49782">
                  <input type="hidden" name="OLDCB16600ROW27DATA49782" id="OLDCB16600ROW27DATA49782" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="CB16600ROW27DATA49782" name="CB16600ROW27DATA49782" size="1" title="Check this box if all leaders holding this position should receive reminders when your TroopWebHost subscription is up for renewal unless they personally opt out.">
                </td>
              </tr>
              </tbody>
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
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON5">
</form>
<script language="JavaScript" type="text/javascript">
  function ValidateGrid()
  {
    var easyform = document.getElementById('easyform');
    for (i=0;i<easyform.length;i++)
    {
      try
      {
        var tempobj=easyform.elements[i];
        var tempname=tempobj.name;

      }
      catch(err)
      {
      }
    }
  }
</script>
<div style="height: 100px;">&nbsp;</div>


</body></html>