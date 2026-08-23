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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="309">
<input type="hidden" name="Form_ID" id="Form_ID" value="218">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=309&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=309">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=309">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=309">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=39" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=309">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=309">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=309">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=309">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=309&amp;Stack=1&amp;Application_ID=2840
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
Sign Up For Events
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="977">
<div class="new-row" id="fs595">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY324169">
          <td class="text-center" "="" colspan="1">
            <input type="hidden" name="RVALENTRY324169" id="RVALENTRY324169" value="">
            <input type="hidden" name="OLD324169" id="OLD324169" value="Michael Bucklin">
            <input type="hidden" name="ENTRY324169" id="ENTRY324169" value="Michael Bucklin">
            <span class="bodyheading">
            Michael Bucklin
            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="1">
            Click the <b>Sign Up</b> button next to each event you wish to sign up for.
            <br><br>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs21547">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs7530">
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
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid7530">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB7530" id="ROWCOUNTCB7530" value="22">
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Event<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Currently Signed Up<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Sign-Up Deadline<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD7530ROW0DATA29775">
                  Join Scouting Night (08/25/26)
                </td>
                <td class="text-center " id="TD7530ROW0DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW0DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=236424&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW0DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW1DATA29775">
                  Welcome Back, Pack Picnic (08/29/26)
                </td>
                <td class="text-center " id="TD7530ROW1DATA29778">
                  YES: Emmett Bucklin, Mary Bucklin, Michael Bucklin
                </td>
                <td class="text-center " id="TD7530ROW1DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=241820&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW1DATA29776">
                  08/29/26
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW2DATA29775">
                  District Roundtable (09/03/26)
                </td>
                <td class="text-center " id="TD7530ROW2DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW2DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=232385&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW2DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW3DATA29775">
                  Cub World (09/25/26)
                </td>
                <td class="text-center " id="TD7530ROW3DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW3DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=234299&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW3DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW4DATA29775">
                  District Roundtable (10/01/26)
                </td>
                <td class="text-center " id="TD7530ROW4DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW4DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=232492&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW4DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW5DATA29775">
                  Scouting 101 and Cub Mobile (Troop Hosted Event) (10/03/26)
                </td>
                <td class="text-center " id="TD7530ROW5DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW5DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=243957&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW5DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW6DATA29775">
                  District Roundtable (11/05/26)
                </td>
                <td class="text-center " id="TD7530ROW6DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW6DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=232727&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW6DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW7DATA29775">
                  Fall Campout (11/13/26)
                </td>
                <td class="text-center " id="TD7530ROW7DATA29778">
                  YES: Emmett Bucklin, Mary Bucklin, Michael Bucklin
                </td>
                <td class="text-center " id="TD7530ROW7DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=231280&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW7DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW8DATA29775">
                  District Roundtable (12/03/26)
                </td>
                <td class="text-center " id="TD7530ROW8DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW8DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=232828&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW8DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW9DATA29775">
                  District Roundtable (01/07/27)
                </td>
                <td class="text-center " id="TD7530ROW9DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW9DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=233092&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW9DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW10DATA29775">
                  USS Lexington (Overnight) (01/16/27)
                </td>
                <td class="text-center " id="TD7530ROW10DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW10DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=231182&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW10DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW11DATA29775">
                  Winter Overnight (01/23/27)
                </td>
                <td class="text-center " id="TD7530ROW11DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW11DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=231077&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW11DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW12DATA29775">
                  District Roundtable (02/04/27)
                </td>
                <td class="text-center " id="TD7530ROW12DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW12DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=233198&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW12DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW13DATA29775">
                  Pinewood Derby Inspections (Option 1) (02/16/27)
                </td>
                <td class="text-center " id="TD7530ROW13DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW13DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=230731&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW13DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW14DATA29775">
                  Pinewood Derby Inspections (Option 2) (02/18/27)
                </td>
                <td class="text-center " id="TD7530ROW14DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW14DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=230810&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW14DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW15DATA29775">
                  Pinewood Derby (02/20/27)
                </td>
                <td class="text-center " id="TD7530ROW15DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW15DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=230450&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW15DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW16DATA29775">
                  District Roundtable (03/04/27)
                </td>
                <td class="text-center " id="TD7530ROW16DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW16DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=233298&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW16DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW17DATA29775">
                  Cubmaster Campout and Crossover (03/05/27)
                </td>
                <td class="text-center " id="TD7530ROW17DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW17DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=230337&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW17DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW18DATA29775">
                  District Roundtable (04/01/27)
                </td>
                <td class="text-center " id="TD7530ROW18DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW18DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=233563&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW18DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW19DATA29775">
                  Spring Campout (04/16/27)
                </td>
                <td class="text-center " id="TD7530ROW19DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW19DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=230099&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW19DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW20DATA29775">
                  District Roundtable (05/06/27)
                </td>
                <td class="text-center " id="TD7530ROW20DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW20DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=233669&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW20DATA29776">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7530ROW21DATA29775">
                  Graduation (05/22/27)
                </td>
                <td class="text-center " id="TD7530ROW21DATA29778">
                  UNKNOWN
                </td>
                <td class="text-center " id="TD7530ROW21DATA29777">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON5" type="button" name="save continue" title="Sign Up" value="Sign Up" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Form_ID=1530&amp;FK=229976&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7530ROW21DATA29776">
                  &nbsp;
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="4" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=309&amp;Form_ID=218&amp;ID=977&amp;Stack=1&amp;SectionID=7530&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=309&amp;Form_ID=218&amp;ID=977&amp;Stack=1&amp;SectionID=7530&amp;ReportFormat=XLS','_blank');">
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
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON5">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>