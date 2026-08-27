<html lang="en"><head>
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
               easyFieldExit(thisfield);
          }
          else
          {
            easyFieldExit(thisfield);
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
            easyFieldExit(thisfield);
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
          easyFieldExit(thisfield);
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

 if (onLoad||thisfield.name=='ENTRY2832284')
{
  var Document_Type = trim(easyGetFieldValue('ENTRY2832284'));
  if (Document_Type=='URL Link')
  {
    easyEnableField('ENTRY2832275',false,true);
    easyEnableField('ENTRY2832285',true,true);
    easySetRequired('ENTRY2832275',false);
    easySetRequired('ENTRY2832285',false);
  }
  else
  {
    easyEnableField('ENTRY2832275',true,true);
    easyEnableField('ENTRY2832285',false,true);
    easySetRequired('ENTRY2832275',false);
    easySetRequired('ENTRY2832285',false);
  }
}

if (onLoad||thisfield.name=='ENTRY4862184')
{
  var Document_Type = trim(easyGetFieldValue('ENTRY4862184'));
  if (Document_Type=='URL Link')
  {
    easyEnableField('ENTRY4862175',false,true);
    easyEnableField('ENTRY4862185',true,true);
    easySetRequired('ENTRY4862175',false);
    easySetRequired('ENTRY4862185',false);
  }
  else
  {
    easyEnableField('ENTRY4862175',true,true);
    easyEnableField('ENTRY4862185',false,true);
    easySetRequired('ENTRY4862175',false);
    easySetRequired('ENTRY4862185',false);
  }
}



		if (onLoad||thisfield.name=='ENTRY3860144')
		{
		  var startID = '3860143';
		  var endID =   '386117';
		  var startTimeSpan = document.getElementById('DIVTIME'+startID);

		  var startTime = document.getElementById('TIME'+startID);
		  var startAmPm = document.getElementById('AMPM'+startID);

		  var endTimeSpan = document.getElementById('DIVTIME'+endID);
		  var endTime = document.getElementById('TIME'+endID);
		  var endAmPm = document.getElementById('AMPM'+endID);

		  var allDay = easyGetFieldValue('ENTRY3860144');
		  if (allDay=='Y')
		  {
		  	startTimeSpan.style.display = 'none';
		  	startTime.value = '12:00';
		  	startAmPm.value = 'AM';
		  	endTimeSpan.style.display = 'none';
		  	endTime.value = '11:59';
		  	endAmPm.value = 'PM';
		  }
		  else
		  {
		  	startTimeSpan.style.display = 'inline';
		  	endTimeSpan.style.display = 'inline';
		  }
		}

      if (thisfield.name=='DATE3860143')
		{
		  var endDateObj = document.getElementById('DATE386117');
		  var endDate = endDateObj.value;
		  if (endDate == '')
		  {
			endDateObj.value = easyGetFieldValue('DATE3860143');
		  }
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="318">
<input type="hidden" name="Form_ID" id="Form_ID" value="267">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="3">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org//events/event.php?;Form_ID=267&amp;Stack=3&amp;ID=581&amp;FK=0">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=3','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=3','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=3','');">Users &amp; Passwords</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=3','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=3','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=3','');">Users &amp; Passwords</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=318">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=318">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=318">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=89" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=318">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=318">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=318">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=318">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org//events/event.php?;Form_ID=267&amp;Stack=3&amp;ID=581&amp;FK=0&amp;Application_ID=2840
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
Sign-up List
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="581">
<div class="new-row" id="fs18426">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY5241669">
          <td class="text-center" "="" colspan="1">
            <input type="hidden" name="RVALENTRY5241669" id="RVALENTRY5241669" value="">
            <span class="bodysubheading">
            Welcome Back, Pack Picnic (08/29/26)
            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs788">
  <div class="container-fluid container-flex">
    <ul class="nav nav-tabs">
    <li>
    <a href="#" onclick="LinkTo('event-edit-details.php','')" id="savelink167" name="savelink167">
    Event Details
    </a>
    </li>
    <li>
    <a href="#" onclick="LinkTo('event-edit-documents.php','')" id="savelink5442" name="savelink5442">
    Documents
    </a>
    </li>
    <li>
    <a href="#" onclick="LinkTo('event-edit-schedule.php','')" id="savelink3154" name="savelink3154">
    Schedule
    </a>
    </li>
    <li>
    <a href="#" onclick="LinkTo('event-edit-stuff-to-bring.php','')" id="savelink5441" name="savelink5441">
    Stuff To Bring
    </a>
    </li>
    <li class="active">
    <a href="#">
    Sign-up List
    </a>
    </li>
    </ul>
  </div>
</div>
<div class="new-row" id="fs777">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON8" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON9" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON10" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="150" id="BUTTON11" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON11">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON12" type="button" name="save" title="Print Participant List" value="Print Participant List" onclick="buttonlink(this,'Y');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON14" type="button" name="save continue" title="Tour Permit Worksheet" value="Tour Permit Worksheet" onclick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&amp;Form_ID=608&amp;FK=581&amp;ID=581&amp;Stack=3','FormReportMultiSectionaspxWindow');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs6785">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY2585869">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2585869" style="visibility: hidden">
            *
            </span>
            Total Participants
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2585869" id="RVALENTRY2585869" value="N">
            <span class="text-left">
            53
            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs780">
  <div class="container-fluid container-flex">
    <div class="center-block " id="DIVCB780">
      <table class="table table-striped table-bordered table-condensed table-responsive table-curved sortable" id="sortablegrid16">
        <thead>
        <tr>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Participation<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Name<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Additional Guests<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Comment<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Signed Up<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
        </tr>
        </thead>
        <tbody>
        <input type="hidden" name="ROWCOUNTCB780" id="ROWCOUNTCB780" value="177">
        <tr>
          <input type="hidden" name="LINKCB780ROW0" id="LINKCB780ROW0" value="1063">
          <input type="hidden" name="CHILDCB780ROW0" id="CHILDCB780ROW0" value="241848">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW0DATA22466" id="OLDCB780ROW0DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW0DATA22466" name="SPAN780ROW0DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW0DATA22466" name="CB780ROW0DATA22466" tabindex="190" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW0DATA22466" name="CB780ROW0DATA22466" tabindex="190" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW0DATA22466" name="CB780ROW0DATA22466" tabindex="190" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW0DATA3869" id="OLDCB780ROW0DATA3869" value="Almaraz, Alexander">
            Almaraz, Alexander
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW0DATA28817" id="OLDCB780ROW0DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW0DATA29712" id="OLDCB780ROW0DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW0DATA29712" name="CB780ROW0DATA29712" tabindex="220" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW0DATA3871" id="OLDCB780ROW0DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW0DATA3871" name="CB780ROW0DATA3871" tabindex="230" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW0DATA3870" id="OLDCB780ROW0DATA3870" value="08/19/2026 9:38 PM">
            <input type="text" class="form-control" id="CB780ROW0DATE387017" name="CB780ROW0DATE387017" tabindex="240" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/19/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="240" onclick="cal.select(window.easyform.CB780ROW0DATE387017,'CB780ROW0DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW0DATE387017.value); return false;" name="CB780ROW0DATE387017X" id="CB780ROW0DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW0DATE387017I" id="CB780ROW0DATE387017I"></a><span id="DIVCB780ROW0TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW0TIME387017" name="CB780ROW0TIME387017" tabindex="240" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:38"><select id="CB780ROW0AMPM387017" name="CB780ROW0AMPM387017" class="form-control" tabindex="240" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW1" id="LINKCB780ROW1" value="1064">
          <input type="hidden" name="CHILDCB780ROW1" id="CHILDCB780ROW1" value="241896">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW1DATA22466" id="OLDCB780ROW1DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW1DATA22466" name="SPAN780ROW1DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW1DATA22466" name="CB780ROW1DATA22466" tabindex="250" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW1DATA22466" name="CB780ROW1DATA22466" tabindex="250" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW1DATA22466" name="CB780ROW1DATA22466" tabindex="250" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW1DATA3869" id="OLDCB780ROW1DATA3869" value="Almaraz, Eric">
            Almaraz, Eric
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW1DATA28817" id="OLDCB780ROW1DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW1DATA29712" id="OLDCB780ROW1DATA29712" value="1">
            <input type="text" class="form-control" id="CB780ROW1DATA29712" name="CB780ROW1DATA29712" tabindex="280" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW1DATA3871" id="OLDCB780ROW1DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW1DATA3871" name="CB780ROW1DATA3871" tabindex="290" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW1DATA3870" id="OLDCB780ROW1DATA3870" value="08/19/2026 9:38 PM">
            <input type="text" class="form-control" id="CB780ROW1DATE387017" name="CB780ROW1DATE387017" tabindex="300" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/19/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="300" onclick="cal.select(window.easyform.CB780ROW1DATE387017,'CB780ROW1DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW1DATE387017.value); return false;" name="CB780ROW1DATE387017X" id="CB780ROW1DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW1DATE387017I" id="CB780ROW1DATE387017I"></a><span id="DIVCB780ROW1TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW1TIME387017" name="CB780ROW1TIME387017" tabindex="300" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:38"><select id="CB780ROW1AMPM387017" name="CB780ROW1AMPM387017" class="form-control" tabindex="300" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW2" id="LINKCB780ROW2" value="668">
          <input type="hidden" name="CHILDCB780ROW2" id="CHILDCB780ROW2" value="241845">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW2DATA22466" id="OLDCB780ROW2DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW2DATA22466" name="SPAN780ROW2DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW2DATA22466" name="CB780ROW2DATA22466" tabindex="310" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW2DATA22466" name="CB780ROW2DATA22466" tabindex="310" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW2DATA22466" name="CB780ROW2DATA22466" tabindex="310" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW2DATA3869" id="OLDCB780ROW2DATA3869" value="Alvarez, Jorge">
            Alvarez, Jorge
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW2DATA28817" id="OLDCB780ROW2DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW2DATA29712" id="OLDCB780ROW2DATA29712" value="1">
            <input type="text" class="form-control" id="CB780ROW2DATA29712" name="CB780ROW2DATA29712" tabindex="340" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW2DATA3871" id="OLDCB780ROW2DATA3871" value="Paolo">
            <input type="text" class="form-control" id="CB780ROW2DATA3871" name="CB780ROW2DATA3871" tabindex="350" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="Paolo" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW2DATA3870" id="OLDCB780ROW2DATA3870" value="08/22/2026 10:05 PM">
            <input type="text" class="form-control" id="CB780ROW2DATE387017" name="CB780ROW2DATE387017" tabindex="360" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/22/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="360" onclick="cal.select(window.easyform.CB780ROW2DATE387017,'CB780ROW2DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW2DATE387017.value); return false;" name="CB780ROW2DATE387017X" id="CB780ROW2DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW2DATE387017I" id="CB780ROW2DATE387017I"></a><span id="DIVCB780ROW2TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW2TIME387017" name="CB780ROW2TIME387017" tabindex="360" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:05"><select id="CB780ROW2AMPM387017" name="CB780ROW2AMPM387017" class="form-control" tabindex="360" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW3" id="LINKCB780ROW3" value="714">
          <input type="hidden" name="CHILDCB780ROW3" id="CHILDCB780ROW3" value="241852">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW3DATA22466" id="OLDCB780ROW3DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW3DATA22466" name="SPAN780ROW3DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW3DATA22466" name="CB780ROW3DATA22466" tabindex="370" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW3DATA22466" name="CB780ROW3DATA22466" tabindex="370" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW3DATA22466" name="CB780ROW3DATA22466" tabindex="370" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW3DATA3869" id="OLDCB780ROW3DATA3869" value="Alvarez, Kristy">
            Alvarez, Kristy
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW3DATA28817" id="OLDCB780ROW3DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW3DATA29712" id="OLDCB780ROW3DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW3DATA29712" name="CB780ROW3DATA29712" tabindex="400" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW3DATA3871" id="OLDCB780ROW3DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW3DATA3871" name="CB780ROW3DATA3871" tabindex="410" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW3DATA3870" id="OLDCB780ROW3DATA3870" value="08/22/2026 10:05 PM">
            <input type="text" class="form-control" id="CB780ROW3DATE387017" name="CB780ROW3DATE387017" tabindex="420" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/22/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="420" onclick="cal.select(window.easyform.CB780ROW3DATE387017,'CB780ROW3DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW3DATE387017.value); return false;" name="CB780ROW3DATE387017X" id="CB780ROW3DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW3DATE387017I" id="CB780ROW3DATE387017I"></a><span id="DIVCB780ROW3TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW3TIME387017" name="CB780ROW3TIME387017" tabindex="420" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:05"><select id="CB780ROW3AMPM387017" name="CB780ROW3AMPM387017" class="form-control" tabindex="420" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW4" id="LINKCB780ROW4" value="1239">
          <input type="hidden" name="CHILDCB780ROW4" id="CHILDCB780ROW4" value="241744">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW4DATA22466" id="OLDCB780ROW4DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW4DATA22466" name="SPAN780ROW4DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW4DATA22466" name="CB780ROW4DATA22466" tabindex="430" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW4DATA22466" name="CB780ROW4DATA22466" tabindex="430" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW4DATA22466" name="CB780ROW4DATA22466" tabindex="430" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW4DATA3869" id="OLDCB780ROW4DATA3869" value="Alvarez, Layla">
            Alvarez, Layla
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW4DATA28817" id="OLDCB780ROW4DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW4DATA29712" id="OLDCB780ROW4DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW4DATA29712" name="CB780ROW4DATA29712" tabindex="460" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW4DATA3871" id="OLDCB780ROW4DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW4DATA3871" name="CB780ROW4DATA3871" tabindex="470" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW4DATA3870" id="OLDCB780ROW4DATA3870" value="08/22/2026 10:05 PM">
            <input type="text" class="form-control" id="CB780ROW4DATE387017" name="CB780ROW4DATE387017" tabindex="480" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/22/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="480" onclick="cal.select(window.easyform.CB780ROW4DATE387017,'CB780ROW4DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW4DATE387017.value); return false;" name="CB780ROW4DATE387017X" id="CB780ROW4DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW4DATE387017I" id="CB780ROW4DATE387017I"></a><span id="DIVCB780ROW4TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW4TIME387017" name="CB780ROW4TIME387017" tabindex="480" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:05"><select id="CB780ROW4AMPM387017" name="CB780ROW4AMPM387017" class="form-control" tabindex="480" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW5" id="LINKCB780ROW5" value="664">
          <input type="hidden" name="CHILDCB780ROW5" id="CHILDCB780ROW5" value="241765">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW5DATA22466" id="OLDCB780ROW5DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW5DATA22466" name="SPAN780ROW5DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW5DATA22466" name="CB780ROW5DATA22466" tabindex="490" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW5DATA22466" name="CB780ROW5DATA22466" tabindex="490" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW5DATA22466" name="CB780ROW5DATA22466" tabindex="490" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW5DATA3869" id="OLDCB780ROW5DATA3869" value="Alvarez, Mateo">
            Alvarez, Mateo
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW5DATA28817" id="OLDCB780ROW5DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW5DATA29712" id="OLDCB780ROW5DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW5DATA29712" name="CB780ROW5DATA29712" tabindex="520" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW5DATA3871" id="OLDCB780ROW5DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW5DATA3871" name="CB780ROW5DATA3871" tabindex="530" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW5DATA3870" id="OLDCB780ROW5DATA3870" value="08/22/2026 10:05 PM">
            <input type="text" class="form-control" id="CB780ROW5DATE387017" name="CB780ROW5DATE387017" tabindex="540" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/22/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="540" onclick="cal.select(window.easyform.CB780ROW5DATE387017,'CB780ROW5DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW5DATE387017.value); return false;" name="CB780ROW5DATE387017X" id="CB780ROW5DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW5DATE387017I" id="CB780ROW5DATE387017I"></a><span id="DIVCB780ROW5TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW5TIME387017" name="CB780ROW5TIME387017" tabindex="540" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:05"><select id="CB780ROW5AMPM387017" name="CB780ROW5AMPM387017" class="form-control" tabindex="540" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW6" id="LINKCB780ROW6" value="964">
          <input type="hidden" name="CHILDCB780ROW6" id="CHILDCB780ROW6" value="241729">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW6DATA22466" id="OLDCB780ROW6DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW6DATA22466" name="SPAN780ROW6DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW6DATA22466" name="CB780ROW6DATA22466" tabindex="550" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW6DATA22466" name="CB780ROW6DATA22466" tabindex="550" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW6DATA22466" name="CB780ROW6DATA22466" tabindex="550" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW6DATA3869" id="OLDCB780ROW6DATA3869" value="Bucklin, Emmett">
            Bucklin, Emmett
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW6DATA28817" id="OLDCB780ROW6DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW6DATA29712" id="OLDCB780ROW6DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW6DATA29712" name="CB780ROW6DATA29712" tabindex="580" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW6DATA3871" id="OLDCB780ROW6DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW6DATA3871" name="CB780ROW6DATA3871" tabindex="590" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW6DATA3870" id="OLDCB780ROW6DATA3870" value="08/11/2026 11:34 PM">
            <input type="text" class="form-control" id="CB780ROW6DATE387017" name="CB780ROW6DATE387017" tabindex="600" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="600" onclick="cal.select(window.easyform.CB780ROW6DATE387017,'CB780ROW6DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW6DATE387017.value); return false;" name="CB780ROW6DATE387017X" id="CB780ROW6DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW6DATE387017I" id="CB780ROW6DATE387017I"></a><span id="DIVCB780ROW6TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW6TIME387017" name="CB780ROW6TIME387017" tabindex="600" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:34"><select id="CB780ROW6AMPM387017" name="CB780ROW6AMPM387017" class="form-control" tabindex="600" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW7" id="LINKCB780ROW7" value="976">
          <input type="hidden" name="CHILDCB780ROW7" id="CHILDCB780ROW7" value="241766">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW7DATA22466" id="OLDCB780ROW7DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW7DATA22466" name="SPAN780ROW7DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW7DATA22466" name="CB780ROW7DATA22466" tabindex="610" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW7DATA22466" name="CB780ROW7DATA22466" tabindex="610" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW7DATA22466" name="CB780ROW7DATA22466" tabindex="610" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW7DATA3869" id="OLDCB780ROW7DATA3869" value="Bucklin, Mary">
            Bucklin, Mary
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW7DATA28817" id="OLDCB780ROW7DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW7DATA29712" id="OLDCB780ROW7DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW7DATA29712" name="CB780ROW7DATA29712" tabindex="640" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW7DATA3871" id="OLDCB780ROW7DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW7DATA3871" name="CB780ROW7DATA3871" tabindex="650" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW7DATA3870" id="OLDCB780ROW7DATA3870" value="08/11/2026 11:34 PM">
            <input type="text" class="form-control" id="CB780ROW7DATE387017" name="CB780ROW7DATE387017" tabindex="660" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="660" onclick="cal.select(window.easyform.CB780ROW7DATE387017,'CB780ROW7DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW7DATE387017.value); return false;" name="CB780ROW7DATE387017X" id="CB780ROW7DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW7DATE387017I" id="CB780ROW7DATE387017I"></a><span id="DIVCB780ROW7TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW7TIME387017" name="CB780ROW7TIME387017" tabindex="660" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:34"><select id="CB780ROW7AMPM387017" name="CB780ROW7AMPM387017" class="form-control" tabindex="660" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW8" id="LINKCB780ROW8" value="977">
          <input type="hidden" name="CHILDCB780ROW8" id="CHILDCB780ROW8" value="241820">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW8DATA22466" id="OLDCB780ROW8DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW8DATA22466" name="SPAN780ROW8DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW8DATA22466" name="CB780ROW8DATA22466" tabindex="670" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW8DATA22466" name="CB780ROW8DATA22466" tabindex="670" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW8DATA22466" name="CB780ROW8DATA22466" tabindex="670" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW8DATA3869" id="OLDCB780ROW8DATA3869" value="Bucklin, Michael">
            Bucklin, Michael
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW8DATA28817" id="OLDCB780ROW8DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW8DATA29712" id="OLDCB780ROW8DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW8DATA29712" name="CB780ROW8DATA29712" tabindex="700" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW8DATA3871" id="OLDCB780ROW8DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW8DATA3871" name="CB780ROW8DATA3871" tabindex="710" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW8DATA3870" id="OLDCB780ROW8DATA3870" value="08/11/2026 11:34 PM">
            <input type="text" class="form-control" id="CB780ROW8DATE387017" name="CB780ROW8DATE387017" tabindex="720" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="720" onclick="cal.select(window.easyform.CB780ROW8DATE387017,'CB780ROW8DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW8DATE387017.value); return false;" name="CB780ROW8DATE387017X" id="CB780ROW8DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW8DATE387017I" id="CB780ROW8DATE387017I"></a><span id="DIVCB780ROW8TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW8TIME387017" name="CB780ROW8TIME387017" tabindex="720" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:34"><select id="CB780ROW8AMPM387017" name="CB780ROW8AMPM387017" class="form-control" tabindex="720" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW9" id="LINKCB780ROW9" value="1143">
          <input type="hidden" name="CHILDCB780ROW9" id="CHILDCB780ROW9" value="241828">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW9DATA22466" id="OLDCB780ROW9DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW9DATA22466" name="SPAN780ROW9DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW9DATA22466" name="CB780ROW9DATA22466" tabindex="730" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW9DATA22466" name="CB780ROW9DATA22466" tabindex="730" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW9DATA22466" name="CB780ROW9DATA22466" tabindex="730" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW9DATA3869" id="OLDCB780ROW9DATA3869" value="Chidester, Ella">
            Chidester, Ella
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW9DATA28817" id="OLDCB780ROW9DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW9DATA29712" id="OLDCB780ROW9DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW9DATA29712" name="CB780ROW9DATA29712" tabindex="760" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW9DATA3871" id="OLDCB780ROW9DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW9DATA3871" name="CB780ROW9DATA3871" tabindex="770" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW9DATA3870" id="OLDCB780ROW9DATA3870" value="08/23/2026 10:38 PM">
            <input type="text" class="form-control" id="CB780ROW9DATE387017" name="CB780ROW9DATE387017" tabindex="780" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="780" onclick="cal.select(window.easyform.CB780ROW9DATE387017,'CB780ROW9DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW9DATE387017.value); return false;" name="CB780ROW9DATE387017X" id="CB780ROW9DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW9DATE387017I" id="CB780ROW9DATE387017I"></a><span id="DIVCB780ROW9TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW9TIME387017" name="CB780ROW9TIME387017" tabindex="780" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:38"><select id="CB780ROW9AMPM387017" name="CB780ROW9AMPM387017" class="form-control" tabindex="780" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW10" id="LINKCB780ROW10" value="986">
          <input type="hidden" name="CHILDCB780ROW10" id="CHILDCB780ROW10" value="241858">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW10DATA22466" id="OLDCB780ROW10DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW10DATA22466" name="SPAN780ROW10DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW10DATA22466" name="CB780ROW10DATA22466" tabindex="790" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW10DATA22466" name="CB780ROW10DATA22466" tabindex="790" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW10DATA22466" name="CB780ROW10DATA22466" tabindex="790" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW10DATA3869" id="OLDCB780ROW10DATA3869" value="Chidester, Russ">
            Chidester, Russ
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW10DATA28817" id="OLDCB780ROW10DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW10DATA29712" id="OLDCB780ROW10DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW10DATA29712" name="CB780ROW10DATA29712" tabindex="820" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW10DATA3871" id="OLDCB780ROW10DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW10DATA3871" name="CB780ROW10DATA3871" tabindex="830" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW10DATA3870" id="OLDCB780ROW10DATA3870" value="08/23/2026 10:38 PM">
            <input type="text" class="form-control" id="CB780ROW10DATE387017" name="CB780ROW10DATE387017" tabindex="840" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="840" onclick="cal.select(window.easyform.CB780ROW10DATE387017,'CB780ROW10DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW10DATE387017.value); return false;" name="CB780ROW10DATE387017X" id="CB780ROW10DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW10DATE387017I" id="CB780ROW10DATE387017I"></a><span id="DIVCB780ROW10TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW10TIME387017" name="CB780ROW10TIME387017" tabindex="840" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:38"><select id="CB780ROW10AMPM387017" name="CB780ROW10AMPM387017" class="form-control" tabindex="840" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW11" id="LINKCB780ROW11" value="983">
          <input type="hidden" name="CHILDCB780ROW11" id="CHILDCB780ROW11" value="241838">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW11DATA22466" id="OLDCB780ROW11DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW11DATA22466" name="SPAN780ROW11DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW11DATA22466" name="CB780ROW11DATA22466" tabindex="850" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW11DATA22466" name="CB780ROW11DATA22466" tabindex="850" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW11DATA22466" name="CB780ROW11DATA22466" tabindex="850" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW11DATA3869" id="OLDCB780ROW11DATA3869" value="Chidester, Taylor">
            Chidester, Taylor
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW11DATA28817" id="OLDCB780ROW11DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW11DATA29712" id="OLDCB780ROW11DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW11DATA29712" name="CB780ROW11DATA29712" tabindex="880" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW11DATA3871" id="OLDCB780ROW11DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW11DATA3871" name="CB780ROW11DATA3871" tabindex="890" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW11DATA3870" id="OLDCB780ROW11DATA3870" value="08/23/2026 10:38 PM">
            <input type="text" class="form-control" id="CB780ROW11DATE387017" name="CB780ROW11DATE387017" tabindex="900" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="900" onclick="cal.select(window.easyform.CB780ROW11DATE387017,'CB780ROW11DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW11DATE387017.value); return false;" name="CB780ROW11DATE387017X" id="CB780ROW11DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW11DATE387017I" id="CB780ROW11DATE387017I"></a><span id="DIVCB780ROW11TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW11TIME387017" name="CB780ROW11TIME387017" tabindex="900" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:38"><select id="CB780ROW11AMPM387017" name="CB780ROW11AMPM387017" class="form-control" tabindex="900" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW12" id="LINKCB780ROW12" value="1609">
          <input type="hidden" name="CHILDCB780ROW12" id="CHILDCB780ROW12" value="243120">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW12DATA22466" id="OLDCB780ROW12DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW12DATA22466" name="SPAN780ROW12DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW12DATA22466" name="CB780ROW12DATA22466" tabindex="910" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW12DATA22466" name="CB780ROW12DATA22466" tabindex="910" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW12DATA22466" name="CB780ROW12DATA22466" tabindex="910" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW12DATA3869" id="OLDCB780ROW12DATA3869" value="Espejel, Moshe">
            Espejel, Moshe
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW12DATA28817" id="OLDCB780ROW12DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW12DATA29712" id="OLDCB780ROW12DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW12DATA29712" name="CB780ROW12DATA29712" tabindex="940" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW12DATA3871" id="OLDCB780ROW12DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW12DATA3871" name="CB780ROW12DATA3871" tabindex="950" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW12DATA3870" id="OLDCB780ROW12DATA3870" value="08/23/2026 11:34 AM">
            <input type="text" class="form-control" id="CB780ROW12DATE387017" name="CB780ROW12DATE387017" tabindex="960" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="960" onclick="cal.select(window.easyform.CB780ROW12DATE387017,'CB780ROW12DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW12DATE387017.value); return false;" name="CB780ROW12DATE387017X" id="CB780ROW12DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW12DATE387017I" id="CB780ROW12DATE387017I"></a><span id="DIVCB780ROW12TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW12TIME387017" name="CB780ROW12TIME387017" tabindex="960" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:34"><select id="CB780ROW12AMPM387017" name="CB780ROW12AMPM387017" class="form-control" tabindex="960" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW13" id="LINKCB780ROW13" value="832">
          <input type="hidden" name="CHILDCB780ROW13" id="CHILDCB780ROW13" value="241899">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW13DATA22466" id="OLDCB780ROW13DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW13DATA22466" name="SPAN780ROW13DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW13DATA22466" name="CB780ROW13DATA22466" tabindex="970" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW13DATA22466" name="CB780ROW13DATA22466" tabindex="970" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW13DATA22466" name="CB780ROW13DATA22466" tabindex="970" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW13DATA3869" id="OLDCB780ROW13DATA3869" value="Goodine, David">
            Goodine, David
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW13DATA28817" id="OLDCB780ROW13DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW13DATA29712" id="OLDCB780ROW13DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW13DATA29712" name="CB780ROW13DATA29712" tabindex="1000" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW13DATA3871" id="OLDCB780ROW13DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW13DATA3871" name="CB780ROW13DATA3871" tabindex="1010" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW13DATA3870" id="OLDCB780ROW13DATA3870" value="08/24/2026 9:59 PM">
            <input type="text" class="form-control" id="CB780ROW13DATE387017" name="CB780ROW13DATE387017" tabindex="1020" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/24/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1020" onclick="cal.select(window.easyform.CB780ROW13DATE387017,'CB780ROW13DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW13DATE387017.value); return false;" name="CB780ROW13DATE387017X" id="CB780ROW13DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW13DATE387017I" id="CB780ROW13DATE387017I"></a><span id="DIVCB780ROW13TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW13TIME387017" name="CB780ROW13TIME387017" tabindex="1020" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:59"><select id="CB780ROW13AMPM387017" name="CB780ROW13AMPM387017" class="form-control" tabindex="1020" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW14" id="LINKCB780ROW14" value="811">
          <input type="hidden" name="CHILDCB780ROW14" id="CHILDCB780ROW14" value="241822">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW14DATA22466" id="OLDCB780ROW14DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW14DATA22466" name="SPAN780ROW14DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW14DATA22466" name="CB780ROW14DATA22466" tabindex="1030" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW14DATA22466" name="CB780ROW14DATA22466" tabindex="1030" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW14DATA22466" name="CB780ROW14DATA22466" tabindex="1030" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW14DATA3869" id="OLDCB780ROW14DATA3869" value="Goodine, Jack">
            Goodine, Jack
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW14DATA28817" id="OLDCB780ROW14DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW14DATA29712" id="OLDCB780ROW14DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW14DATA29712" name="CB780ROW14DATA29712" tabindex="1060" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW14DATA3871" id="OLDCB780ROW14DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW14DATA3871" name="CB780ROW14DATA3871" tabindex="1070" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW14DATA3870" id="OLDCB780ROW14DATA3870" value="08/24/2026 9:59 PM">
            <input type="text" class="form-control" id="CB780ROW14DATE387017" name="CB780ROW14DATE387017" tabindex="1080" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/24/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1080" onclick="cal.select(window.easyform.CB780ROW14DATE387017,'CB780ROW14DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW14DATE387017.value); return false;" name="CB780ROW14DATE387017X" id="CB780ROW14DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW14DATE387017I" id="CB780ROW14DATE387017I"></a><span id="DIVCB780ROW14TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW14TIME387017" name="CB780ROW14TIME387017" tabindex="1080" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:59"><select id="CB780ROW14AMPM387017" name="CB780ROW14AMPM387017" class="form-control" tabindex="1080" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW15" id="LINKCB780ROW15" value="1157">
          <input type="hidden" name="CHILDCB780ROW15" id="CHILDCB780ROW15" value="241800">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW15DATA22466" id="OLDCB780ROW15DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW15DATA22466" name="SPAN780ROW15DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW15DATA22466" name="CB780ROW15DATA22466" tabindex="1090" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW15DATA22466" name="CB780ROW15DATA22466" tabindex="1090" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW15DATA22466" name="CB780ROW15DATA22466" tabindex="1090" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW15DATA3869" id="OLDCB780ROW15DATA3869" value="Hallar, Henry">
            Hallar, Henry
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW15DATA28817" id="OLDCB780ROW15DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW15DATA29712" id="OLDCB780ROW15DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW15DATA29712" name="CB780ROW15DATA29712" tabindex="1120" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW15DATA3871" id="OLDCB780ROW15DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW15DATA3871" name="CB780ROW15DATA3871" tabindex="1130" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW15DATA3870" id="OLDCB780ROW15DATA3870" value="08/21/2026 10:28 PM">
            <input type="text" class="form-control" id="CB780ROW15DATE387017" name="CB780ROW15DATE387017" tabindex="1140" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/21/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1140" onclick="cal.select(window.easyform.CB780ROW15DATE387017,'CB780ROW15DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW15DATE387017.value); return false;" name="CB780ROW15DATE387017X" id="CB780ROW15DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW15DATE387017I" id="CB780ROW15DATE387017I"></a><span id="DIVCB780ROW15TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW15TIME387017" name="CB780ROW15TIME387017" tabindex="1140" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:28"><select id="CB780ROW15AMPM387017" name="CB780ROW15AMPM387017" class="form-control" tabindex="1140" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW16" id="LINKCB780ROW16" value="1170">
          <input type="hidden" name="CHILDCB780ROW16" id="CHILDCB780ROW16" value="241739">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW16DATA22466" id="OLDCB780ROW16DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW16DATA22466" name="SPAN780ROW16DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW16DATA22466" name="CB780ROW16DATA22466" tabindex="1150" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW16DATA22466" name="CB780ROW16DATA22466" tabindex="1150" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW16DATA22466" name="CB780ROW16DATA22466" tabindex="1150" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW16DATA3869" id="OLDCB780ROW16DATA3869" value="Hallar, Ingrid">
            Hallar, Ingrid
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW16DATA28817" id="OLDCB780ROW16DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW16DATA29712" id="OLDCB780ROW16DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW16DATA29712" name="CB780ROW16DATA29712" tabindex="1180" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW16DATA3871" id="OLDCB780ROW16DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW16DATA3871" name="CB780ROW16DATA3871" tabindex="1190" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW16DATA3870" id="OLDCB780ROW16DATA3870" value="08/21/2026 10:28 PM">
            <input type="text" class="form-control" id="CB780ROW16DATE387017" name="CB780ROW16DATE387017" tabindex="1200" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/21/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1200" onclick="cal.select(window.easyform.CB780ROW16DATE387017,'CB780ROW16DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW16DATE387017.value); return false;" name="CB780ROW16DATE387017X" id="CB780ROW16DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW16DATE387017I" id="CB780ROW16DATE387017I"></a><span id="DIVCB780ROW16TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW16TIME387017" name="CB780ROW16TIME387017" tabindex="1200" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:28"><select id="CB780ROW16AMPM387017" name="CB780ROW16AMPM387017" class="form-control" tabindex="1200" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW17" id="LINKCB780ROW17" value="833">
          <input type="hidden" name="CHILDCB780ROW17" id="CHILDCB780ROW17" value="241770">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW17DATA22466" id="OLDCB780ROW17DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW17DATA22466" name="SPAN780ROW17DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW17DATA22466" name="CB780ROW17DATA22466" tabindex="1210" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW17DATA22466" name="CB780ROW17DATA22466" tabindex="1210" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW17DATA22466" name="CB780ROW17DATA22466" tabindex="1210" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW17DATA3869" id="OLDCB780ROW17DATA3869" value="Hickman, Trey">
            Hickman, Trey
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW17DATA28817" id="OLDCB780ROW17DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW17DATA29712" id="OLDCB780ROW17DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW17DATA29712" name="CB780ROW17DATA29712" tabindex="1240" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW17DATA3871" id="OLDCB780ROW17DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW17DATA3871" name="CB780ROW17DATA3871" tabindex="1250" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW17DATA3870" id="OLDCB780ROW17DATA3870" value="08/17/2026 2:59 PM">
            <input type="text" class="form-control" id="CB780ROW17DATE387017" name="CB780ROW17DATE387017" tabindex="1260" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/17/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1260" onclick="cal.select(window.easyform.CB780ROW17DATE387017,'CB780ROW17DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW17DATE387017.value); return false;" name="CB780ROW17DATE387017X" id="CB780ROW17DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW17DATE387017I" id="CB780ROW17DATE387017I"></a><span id="DIVCB780ROW17TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW17TIME387017" name="CB780ROW17TIME387017" tabindex="1260" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="2:59"><select id="CB780ROW17AMPM387017" name="CB780ROW17AMPM387017" class="form-control" tabindex="1260" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW18" id="LINKCB780ROW18" value="1188">
          <input type="hidden" name="CHILDCB780ROW18" id="CHILDCB780ROW18" value="241778">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW18DATA22466" id="OLDCB780ROW18DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW18DATA22466" name="SPAN780ROW18DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW18DATA22466" name="CB780ROW18DATA22466" tabindex="1270" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW18DATA22466" name="CB780ROW18DATA22466" tabindex="1270" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW18DATA22466" name="CB780ROW18DATA22466" tabindex="1270" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW18DATA3869" id="OLDCB780ROW18DATA3869" value="Hickman, Maya">
            Hickman, Maya
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW18DATA28817" id="OLDCB780ROW18DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW18DATA29712" id="OLDCB780ROW18DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW18DATA29712" name="CB780ROW18DATA29712" tabindex="1300" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW18DATA3871" id="OLDCB780ROW18DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW18DATA3871" name="CB780ROW18DATA3871" tabindex="1310" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW18DATA3870" id="OLDCB780ROW18DATA3870" value="08/17/2026 2:59 PM">
            <input type="text" class="form-control" id="CB780ROW18DATE387017" name="CB780ROW18DATE387017" tabindex="1320" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/17/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1320" onclick="cal.select(window.easyform.CB780ROW18DATE387017,'CB780ROW18DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW18DATE387017.value); return false;" name="CB780ROW18DATE387017X" id="CB780ROW18DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW18DATE387017I" id="CB780ROW18DATE387017I"></a><span id="DIVCB780ROW18TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW18TIME387017" name="CB780ROW18TIME387017" tabindex="1320" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="2:59"><select id="CB780ROW18AMPM387017" name="CB780ROW18AMPM387017" class="form-control" tabindex="1320" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW19" id="LINKCB780ROW19" value="880">
          <input type="hidden" name="CHILDCB780ROW19" id="CHILDCB780ROW19" value="241853">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW19DATA22466" id="OLDCB780ROW19DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW19DATA22466" name="SPAN780ROW19DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW19DATA22466" name="CB780ROW19DATA22466" tabindex="1330" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW19DATA22466" name="CB780ROW19DATA22466" tabindex="1330" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW19DATA22466" name="CB780ROW19DATA22466" tabindex="1330" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW19DATA3869" id="OLDCB780ROW19DATA3869" value="Keenan, Lilly">
            Keenan, Lilly
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW19DATA28817" id="OLDCB780ROW19DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW19DATA29712" id="OLDCB780ROW19DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW19DATA29712" name="CB780ROW19DATA29712" tabindex="1360" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW19DATA3871" id="OLDCB780ROW19DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW19DATA3871" name="CB780ROW19DATA3871" tabindex="1370" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW19DATA3870" id="OLDCB780ROW19DATA3870" value="08/23/2026 12:19 PM">
            <input type="text" class="form-control" id="CB780ROW19DATE387017" name="CB780ROW19DATE387017" tabindex="1380" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1380" onclick="cal.select(window.easyform.CB780ROW19DATE387017,'CB780ROW19DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW19DATE387017.value); return false;" name="CB780ROW19DATE387017X" id="CB780ROW19DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW19DATE387017I" id="CB780ROW19DATE387017I"></a><span id="DIVCB780ROW19TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW19TIME387017" name="CB780ROW19TIME387017" tabindex="1380" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="12:19"><select id="CB780ROW19AMPM387017" name="CB780ROW19AMPM387017" class="form-control" tabindex="1380" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW20" id="LINKCB780ROW20" value="882">
          <input type="hidden" name="CHILDCB780ROW20" id="CHILDCB780ROW20" value="241790">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW20DATA22466" id="OLDCB780ROW20DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW20DATA22466" name="SPAN780ROW20DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW20DATA22466" name="CB780ROW20DATA22466" tabindex="1390" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW20DATA22466" name="CB780ROW20DATA22466" tabindex="1390" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW20DATA22466" name="CB780ROW20DATA22466" tabindex="1390" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW20DATA3869" id="OLDCB780ROW20DATA3869" value="Keenan, Peter">
            Keenan, Peter
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW20DATA28817" id="OLDCB780ROW20DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW20DATA29712" id="OLDCB780ROW20DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW20DATA29712" name="CB780ROW20DATA29712" tabindex="1420" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW20DATA3871" id="OLDCB780ROW20DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW20DATA3871" name="CB780ROW20DATA3871" tabindex="1430" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW20DATA3870" id="OLDCB780ROW20DATA3870" value="08/23/2026 12:19 PM">
            <input type="text" class="form-control" id="CB780ROW20DATE387017" name="CB780ROW20DATE387017" tabindex="1440" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1440" onclick="cal.select(window.easyform.CB780ROW20DATE387017,'CB780ROW20DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW20DATE387017.value); return false;" name="CB780ROW20DATE387017X" id="CB780ROW20DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW20DATE387017I" id="CB780ROW20DATE387017I"></a><span id="DIVCB780ROW20TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW20TIME387017" name="CB780ROW20TIME387017" tabindex="1440" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="12:19"><select id="CB780ROW20AMPM387017" name="CB780ROW20AMPM387017" class="form-control" tabindex="1440" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW21" id="LINKCB780ROW21" value="688">
          <input type="hidden" name="CHILDCB780ROW21" id="CHILDCB780ROW21" value="241854">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW21DATA22466" id="OLDCB780ROW21DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW21DATA22466" name="SPAN780ROW21DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW21DATA22466" name="CB780ROW21DATA22466" tabindex="1450" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW21DATA22466" name="CB780ROW21DATA22466" tabindex="1450" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW21DATA22466" name="CB780ROW21DATA22466" tabindex="1450" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW21DATA3869" id="OLDCB780ROW21DATA3869" value="Mallios, Jason">
            Mallios, Jason
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW21DATA28817" id="OLDCB780ROW21DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW21DATA29712" id="OLDCB780ROW21DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW21DATA29712" name="CB780ROW21DATA29712" tabindex="1480" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW21DATA3871" id="OLDCB780ROW21DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW21DATA3871" name="CB780ROW21DATA3871" tabindex="1490" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW21DATA3870" id="OLDCB780ROW21DATA3870" value="08/25/2026 9:30 PM">
            <input type="text" class="form-control" id="CB780ROW21DATE387017" name="CB780ROW21DATE387017" tabindex="1500" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1500" onclick="cal.select(window.easyform.CB780ROW21DATE387017,'CB780ROW21DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW21DATE387017.value); return false;" name="CB780ROW21DATE387017X" id="CB780ROW21DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW21DATE387017I" id="CB780ROW21DATE387017I"></a><span id="DIVCB780ROW21TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW21TIME387017" name="CB780ROW21TIME387017" tabindex="1500" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:30"><select id="CB780ROW21AMPM387017" name="CB780ROW21AMPM387017" class="form-control" tabindex="1500" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW22" id="LINKCB780ROW22" value="493">
          <input type="hidden" name="CHILDCB780ROW22" id="CHILDCB780ROW22" value="241825">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW22DATA22466" id="OLDCB780ROW22DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW22DATA22466" name="SPAN780ROW22DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW22DATA22466" name="CB780ROW22DATA22466" tabindex="1510" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW22DATA22466" name="CB780ROW22DATA22466" tabindex="1510" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW22DATA22466" name="CB780ROW22DATA22466" tabindex="1510" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW22DATA3869" id="OLDCB780ROW22DATA3869" value="Mallios, Nicholas">
            Mallios, Nicholas
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW22DATA28817" id="OLDCB780ROW22DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW22DATA29712" id="OLDCB780ROW22DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW22DATA29712" name="CB780ROW22DATA29712" tabindex="1540" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW22DATA3871" id="OLDCB780ROW22DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW22DATA3871" name="CB780ROW22DATA3871" tabindex="1550" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW22DATA3870" id="OLDCB780ROW22DATA3870" value="08/25/2026 9:30 PM">
            <input type="text" class="form-control" id="CB780ROW22DATE387017" name="CB780ROW22DATE387017" tabindex="1560" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1560" onclick="cal.select(window.easyform.CB780ROW22DATE387017,'CB780ROW22DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW22DATE387017.value); return false;" name="CB780ROW22DATE387017X" id="CB780ROW22DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW22DATE387017I" id="CB780ROW22DATE387017I"></a><span id="DIVCB780ROW22TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW22TIME387017" name="CB780ROW22TIME387017" tabindex="1560" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:30"><select id="CB780ROW22AMPM387017" name="CB780ROW22AMPM387017" class="form-control" tabindex="1560" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW23" id="LINKCB780ROW23" value="1294">
          <input type="hidden" name="CHILDCB780ROW23" id="CHILDCB780ROW23" value="241781">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW23DATA22466" id="OLDCB780ROW23DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW23DATA22466" name="SPAN780ROW23DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW23DATA22466" name="CB780ROW23DATA22466" tabindex="1570" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW23DATA22466" name="CB780ROW23DATA22466" tabindex="1570" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW23DATA22466" name="CB780ROW23DATA22466" tabindex="1570" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW23DATA3869" id="OLDCB780ROW23DATA3869" value="Nallathambi, Kalki">
            Nallathambi, Kalki
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW23DATA28817" id="OLDCB780ROW23DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW23DATA29712" id="OLDCB780ROW23DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW23DATA29712" name="CB780ROW23DATA29712" tabindex="1600" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW23DATA3871" id="OLDCB780ROW23DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW23DATA3871" name="CB780ROW23DATA3871" tabindex="1610" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW23DATA3870" id="OLDCB780ROW23DATA3870" value="08/25/2026 1:57 PM">
            <input type="text" class="form-control" id="CB780ROW23DATE387017" name="CB780ROW23DATE387017" tabindex="1620" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1620" onclick="cal.select(window.easyform.CB780ROW23DATE387017,'CB780ROW23DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW23DATE387017.value); return false;" name="CB780ROW23DATE387017X" id="CB780ROW23DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW23DATE387017I" id="CB780ROW23DATE387017I"></a><span id="DIVCB780ROW23TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW23TIME387017" name="CB780ROW23TIME387017" tabindex="1620" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="1:57"><select id="CB780ROW23AMPM387017" name="CB780ROW23AMPM387017" class="form-control" tabindex="1620" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW24" id="LINKCB780ROW24" value="789">
          <input type="hidden" name="CHILDCB780ROW24" id="CHILDCB780ROW24" value="241886">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW24DATA22466" id="OLDCB780ROW24DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW24DATA22466" name="SPAN780ROW24DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW24DATA22466" name="CB780ROW24DATA22466" tabindex="1630" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW24DATA22466" name="CB780ROW24DATA22466" tabindex="1630" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW24DATA22466" name="CB780ROW24DATA22466" tabindex="1630" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW24DATA3869" id="OLDCB780ROW24DATA3869" value="Nguyen, Phuong">
            Nguyen, Phuong
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW24DATA28817" id="OLDCB780ROW24DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW24DATA29712" id="OLDCB780ROW24DATA29712" value="1">
            <input type="text" class="form-control" id="CB780ROW24DATA29712" name="CB780ROW24DATA29712" tabindex="1660" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW24DATA3871" id="OLDCB780ROW24DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW24DATA3871" name="CB780ROW24DATA3871" tabindex="1670" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW24DATA3870" id="OLDCB780ROW24DATA3870" value="08/26/2026 9:47 AM">
            <input type="text" class="form-control" id="CB780ROW24DATE387017" name="CB780ROW24DATE387017" tabindex="1680" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/26/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1680" onclick="cal.select(window.easyform.CB780ROW24DATE387017,'CB780ROW24DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW24DATE387017.value); return false;" name="CB780ROW24DATE387017X" id="CB780ROW24DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW24DATE387017I" id="CB780ROW24DATE387017I"></a><span id="DIVCB780ROW24TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW24TIME387017" name="CB780ROW24TIME387017" tabindex="1680" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:47"><select id="CB780ROW24AMPM387017" name="CB780ROW24AMPM387017" class="form-control" tabindex="1680" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW25" id="LINKCB780ROW25" value="1277">
          <input type="hidden" name="CHILDCB780ROW25" id="CHILDCB780ROW25" value="241797">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW25DATA22466" id="OLDCB780ROW25DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW25DATA22466" name="SPAN780ROW25DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW25DATA22466" name="CB780ROW25DATA22466" tabindex="1690" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW25DATA22466" name="CB780ROW25DATA22466" tabindex="1690" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW25DATA22466" name="CB780ROW25DATA22466" tabindex="1690" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW25DATA3869" id="OLDCB780ROW25DATA3869" value="Niphadkar, Sahana">
            Niphadkar, Sahana
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW25DATA28817" id="OLDCB780ROW25DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW25DATA29712" id="OLDCB780ROW25DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW25DATA29712" name="CB780ROW25DATA29712" tabindex="1720" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW25DATA3871" id="OLDCB780ROW25DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW25DATA3871" name="CB780ROW25DATA3871" tabindex="1730" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW25DATA3870" id="OLDCB780ROW25DATA3870" value="08/25/2026 12:02 PM">
            <input type="text" class="form-control" id="CB780ROW25DATE387017" name="CB780ROW25DATE387017" tabindex="1740" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1740" onclick="cal.select(window.easyform.CB780ROW25DATE387017,'CB780ROW25DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW25DATE387017.value); return false;" name="CB780ROW25DATE387017X" id="CB780ROW25DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW25DATE387017I" id="CB780ROW25DATE387017I"></a><span id="DIVCB780ROW25TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW25TIME387017" name="CB780ROW25TIME387017" tabindex="1740" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="12:02"><select id="CB780ROW25AMPM387017" name="CB780ROW25AMPM387017" class="form-control" tabindex="1740" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW26" id="LINKCB780ROW26" value="1283">
          <input type="hidden" name="CHILDCB780ROW26" id="CHILDCB780ROW26" value="241833">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW26DATA22466" id="OLDCB780ROW26DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW26DATA22466" name="SPAN780ROW26DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW26DATA22466" name="CB780ROW26DATA22466" tabindex="1750" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW26DATA22466" name="CB780ROW26DATA22466" tabindex="1750" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW26DATA22466" name="CB780ROW26DATA22466" tabindex="1750" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW26DATA3869" id="OLDCB780ROW26DATA3869" value="Niphadkar, Shraddha">
            Niphadkar, Shraddha
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW26DATA28817" id="OLDCB780ROW26DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW26DATA29712" id="OLDCB780ROW26DATA29712" value="4">
            <input type="text" class="form-control" id="CB780ROW26DATA29712" name="CB780ROW26DATA29712" tabindex="1780" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="4" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW26DATA3871" id="OLDCB780ROW26DATA3871" value="Bringing a guest family. 6 adults total.">
            <input type="text" class="form-control" id="CB780ROW26DATA3871" name="CB780ROW26DATA3871" tabindex="1790" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="Bringing a guest family. 6 adults total." title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW26DATA3870" id="OLDCB780ROW26DATA3870" value="08/25/2026 12:02 PM">
            <input type="text" class="form-control" id="CB780ROW26DATE387017" name="CB780ROW26DATE387017" tabindex="1800" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1800" onclick="cal.select(window.easyform.CB780ROW26DATE387017,'CB780ROW26DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW26DATE387017.value); return false;" name="CB780ROW26DATE387017X" id="CB780ROW26DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW26DATE387017I" id="CB780ROW26DATE387017I"></a><span id="DIVCB780ROW26TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW26TIME387017" name="CB780ROW26TIME387017" tabindex="1800" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="12:02"><select id="CB780ROW26AMPM387017" name="CB780ROW26AMPM387017" class="form-control" tabindex="1800" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW27" id="LINKCB780ROW27" value="1173">
          <input type="hidden" name="CHILDCB780ROW27" id="CHILDCB780ROW27" value="241738">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW27DATA22466" id="OLDCB780ROW27DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW27DATA22466" name="SPAN780ROW27DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW27DATA22466" name="CB780ROW27DATA22466" tabindex="1810" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW27DATA22466" name="CB780ROW27DATA22466" tabindex="1810" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW27DATA22466" name="CB780ROW27DATA22466" tabindex="1810" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW27DATA3869" id="OLDCB780ROW27DATA3869" value="Patel, Sujan">
            Patel, Sujan
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW27DATA28817" id="OLDCB780ROW27DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW27DATA29712" id="OLDCB780ROW27DATA29712" value="1">
            <input type="text" class="form-control" id="CB780ROW27DATA29712" name="CB780ROW27DATA29712" tabindex="1840" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW27DATA3871" id="OLDCB780ROW27DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW27DATA3871" name="CB780ROW27DATA3871" tabindex="1850" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW27DATA3870" id="OLDCB780ROW27DATA3870" value="08/24/2026 11:39 PM">
            <input type="text" class="form-control" id="CB780ROW27DATE387017" name="CB780ROW27DATE387017" tabindex="1860" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/24/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1860" onclick="cal.select(window.easyform.CB780ROW27DATE387017,'CB780ROW27DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW27DATE387017.value); return false;" name="CB780ROW27DATE387017X" id="CB780ROW27DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW27DATE387017I" id="CB780ROW27DATE387017I"></a><span id="DIVCB780ROW27TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW27TIME387017" name="CB780ROW27TIME387017" tabindex="1860" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:39"><select id="CB780ROW27AMPM387017" name="CB780ROW27AMPM387017" class="form-control" tabindex="1860" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW28" id="LINKCB780ROW28" value="765">
          <input type="hidden" name="CHILDCB780ROW28" id="CHILDCB780ROW28" value="241813">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW28DATA22466" id="OLDCB780ROW28DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW28DATA22466" name="SPAN780ROW28DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW28DATA22466" name="CB780ROW28DATA22466" tabindex="1870" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW28DATA22466" name="CB780ROW28DATA22466" tabindex="1870" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW28DATA22466" name="CB780ROW28DATA22466" tabindex="1870" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW28DATA3869" id="OLDCB780ROW28DATA3869" value="Phan, Erik">
            Phan, Erik
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW28DATA28817" id="OLDCB780ROW28DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW28DATA29712" id="OLDCB780ROW28DATA29712" value="1">
            <input type="text" class="form-control" id="CB780ROW28DATA29712" name="CB780ROW28DATA29712" tabindex="1900" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW28DATA3871" id="OLDCB780ROW28DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW28DATA3871" name="CB780ROW28DATA3871" tabindex="1910" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW28DATA3870" id="OLDCB780ROW28DATA3870" value="08/26/2026 9:47 AM">
            <input type="text" class="form-control" id="CB780ROW28DATE387017" name="CB780ROW28DATE387017" tabindex="1920" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/26/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1920" onclick="cal.select(window.easyform.CB780ROW28DATE387017,'CB780ROW28DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW28DATE387017.value); return false;" name="CB780ROW28DATE387017X" id="CB780ROW28DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW28DATE387017I" id="CB780ROW28DATE387017I"></a><span id="DIVCB780ROW28TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW28TIME387017" name="CB780ROW28TIME387017" tabindex="1920" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:47"><select id="CB780ROW28AMPM387017" name="CB780ROW28AMPM387017" class="form-control" tabindex="1920" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW29" id="LINKCB780ROW29" value="1247">
          <input type="hidden" name="CHILDCB780ROW29" id="CHILDCB780ROW29" value="241887">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW29DATA22466" id="OLDCB780ROW29DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW29DATA22466" name="SPAN780ROW29DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW29DATA22466" name="CB780ROW29DATA22466" tabindex="1930" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW29DATA22466" name="CB780ROW29DATA22466" tabindex="1930" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW29DATA22466" name="CB780ROW29DATA22466" tabindex="1930" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW29DATA3869" id="OLDCB780ROW29DATA3869" value="Porter, Koley">
            Porter, Koley
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW29DATA28817" id="OLDCB780ROW29DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW29DATA29712" id="OLDCB780ROW29DATA29712" value="1">
            <input type="text" class="form-control" id="CB780ROW29DATA29712" name="CB780ROW29DATA29712" tabindex="1960" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW29DATA3871" id="OLDCB780ROW29DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW29DATA3871" name="CB780ROW29DATA3871" tabindex="1970" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW29DATA3870" id="OLDCB780ROW29DATA3870" value="08/12/2026 8:03 PM">
            <input type="text" class="form-control" id="CB780ROW29DATE387017" name="CB780ROW29DATE387017" tabindex="1980" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/12/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="1980" onclick="cal.select(window.easyform.CB780ROW29DATE387017,'CB780ROW29DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW29DATE387017.value); return false;" name="CB780ROW29DATE387017X" id="CB780ROW29DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW29DATE387017I" id="CB780ROW29DATE387017I"></a><span id="DIVCB780ROW29TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW29TIME387017" name="CB780ROW29TIME387017" tabindex="1980" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="8:03"><select id="CB780ROW29AMPM387017" name="CB780ROW29AMPM387017" class="form-control" tabindex="1980" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW30" id="LINKCB780ROW30" value="1242">
          <input type="hidden" name="CHILDCB780ROW30" id="CHILDCB780ROW30" value="241742">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW30DATA22466" id="OLDCB780ROW30DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW30DATA22466" name="SPAN780ROW30DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW30DATA22466" name="CB780ROW30DATA22466" tabindex="1990" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW30DATA22466" name="CB780ROW30DATA22466" tabindex="1990" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW30DATA22466" name="CB780ROW30DATA22466" tabindex="1990" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW30DATA3869" id="OLDCB780ROW30DATA3869" value="Porter, Thora">
            Porter, Thora
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW30DATA28817" id="OLDCB780ROW30DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW30DATA29712" id="OLDCB780ROW30DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW30DATA29712" name="CB780ROW30DATA29712" tabindex="2020" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW30DATA3871" id="OLDCB780ROW30DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW30DATA3871" name="CB780ROW30DATA3871" tabindex="2030" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW30DATA3870" id="OLDCB780ROW30DATA3870" value="08/12/2026 8:03 PM">
            <input type="text" class="form-control" id="CB780ROW30DATE387017" name="CB780ROW30DATE387017" tabindex="2040" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/12/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2040" onclick="cal.select(window.easyform.CB780ROW30DATE387017,'CB780ROW30DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW30DATE387017.value); return false;" name="CB780ROW30DATE387017X" id="CB780ROW30DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW30DATE387017I" id="CB780ROW30DATE387017I"></a><span id="DIVCB780ROW30TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW30TIME387017" name="CB780ROW30TIME387017" tabindex="2040" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="8:03"><select id="CB780ROW30AMPM387017" name="CB780ROW30AMPM387017" class="form-control" tabindex="2040" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW31" id="LINKCB780ROW31" value="899">
          <input type="hidden" name="CHILDCB780ROW31" id="CHILDCB780ROW31" value="241777">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW31DATA22466" id="OLDCB780ROW31DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW31DATA22466" name="SPAN780ROW31DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW31DATA22466" name="CB780ROW31DATA22466" tabindex="2050" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW31DATA22466" name="CB780ROW31DATA22466" tabindex="2050" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW31DATA22466" name="CB780ROW31DATA22466" tabindex="2050" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW31DATA3869" id="OLDCB780ROW31DATA3869" value="Slonsky, Henry">
            Slonsky, Henry
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW31DATA28817" id="OLDCB780ROW31DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW31DATA29712" id="OLDCB780ROW31DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW31DATA29712" name="CB780ROW31DATA29712" tabindex="2080" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW31DATA3871" id="OLDCB780ROW31DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW31DATA3871" name="CB780ROW31DATA3871" tabindex="2090" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW31DATA3870" id="OLDCB780ROW31DATA3870" value="08/23/2026 10:23 PM">
            <input type="text" class="form-control" id="CB780ROW31DATE387017" name="CB780ROW31DATE387017" tabindex="2100" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2100" onclick="cal.select(window.easyform.CB780ROW31DATE387017,'CB780ROW31DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW31DATE387017.value); return false;" name="CB780ROW31DATE387017X" id="CB780ROW31DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW31DATE387017I" id="CB780ROW31DATE387017I"></a><span id="DIVCB780ROW31TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW31TIME387017" name="CB780ROW31TIME387017" tabindex="2100" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:23"><select id="CB780ROW31AMPM387017" name="CB780ROW31AMPM387017" class="form-control" tabindex="2100" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW32" id="LINKCB780ROW32" value="583">
          <input type="hidden" name="CHILDCB780ROW32" id="CHILDCB780ROW32" value="241893">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW32DATA22466" id="OLDCB780ROW32DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW32DATA22466" name="SPAN780ROW32DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW32DATA22466" name="CB780ROW32DATA22466" tabindex="2110" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW32DATA22466" name="CB780ROW32DATA22466" tabindex="2110" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW32DATA22466" name="CB780ROW32DATA22466" tabindex="2110" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW32DATA3869" id="OLDCB780ROW32DATA3869" value="Slonsky, Kyle">
            Slonsky, Kyle
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW32DATA28817" id="OLDCB780ROW32DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW32DATA29712" id="OLDCB780ROW32DATA29712" value="1">
            <input type="text" class="form-control" id="CB780ROW32DATA29712" name="CB780ROW32DATA29712" tabindex="2140" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW32DATA3871" id="OLDCB780ROW32DATA3871" value="Keanu">
            <input type="text" class="form-control" id="CB780ROW32DATA3871" name="CB780ROW32DATA3871" tabindex="2150" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="Keanu" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW32DATA3870" id="OLDCB780ROW32DATA3870" value="08/23/2026 10:23 PM">
            <input type="text" class="form-control" id="CB780ROW32DATE387017" name="CB780ROW32DATE387017" tabindex="2160" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2160" onclick="cal.select(window.easyform.CB780ROW32DATE387017,'CB780ROW32DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW32DATE387017.value); return false;" name="CB780ROW32DATE387017X" id="CB780ROW32DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW32DATE387017I" id="CB780ROW32DATE387017I"></a><span id="DIVCB780ROW32TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW32TIME387017" name="CB780ROW32TIME387017" tabindex="2160" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:23"><select id="CB780ROW32AMPM387017" name="CB780ROW32AMPM387017" class="form-control" tabindex="2160" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW33" id="LINKCB780ROW33" value="591">
          <input type="hidden" name="CHILDCB780ROW33" id="CHILDCB780ROW33" value="241879">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW33DATA22466" id="OLDCB780ROW33DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW33DATA22466" name="SPAN780ROW33DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW33DATA22466" name="CB780ROW33DATA22466" tabindex="2170" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW33DATA22466" name="CB780ROW33DATA22466" tabindex="2170" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW33DATA22466" name="CB780ROW33DATA22466" tabindex="2170" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW33DATA3869" id="OLDCB780ROW33DATA3869" value="Slonsky, Yasemin">
            Slonsky, Yasemin
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW33DATA28817" id="OLDCB780ROW33DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW33DATA29712" id="OLDCB780ROW33DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW33DATA29712" name="CB780ROW33DATA29712" tabindex="2200" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW33DATA3871" id="OLDCB780ROW33DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW33DATA3871" name="CB780ROW33DATA3871" tabindex="2210" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW33DATA3870" id="OLDCB780ROW33DATA3870" value="08/23/2026 10:23 PM">
            <input type="text" class="form-control" id="CB780ROW33DATE387017" name="CB780ROW33DATE387017" tabindex="2220" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2220" onclick="cal.select(window.easyform.CB780ROW33DATE387017,'CB780ROW33DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW33DATE387017.value); return false;" name="CB780ROW33DATE387017X" id="CB780ROW33DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW33DATE387017I" id="CB780ROW33DATE387017I"></a><span id="DIVCB780ROW33TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW33TIME387017" name="CB780ROW33TIME387017" tabindex="2220" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:23"><select id="CB780ROW33AMPM387017" name="CB780ROW33AMPM387017" class="form-control" tabindex="2220" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW34" id="LINKCB780ROW34" value="1162">
          <input type="hidden" name="CHILDCB780ROW34" id="CHILDCB780ROW34" value="241755">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW34DATA22466" id="OLDCB780ROW34DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW34DATA22466" name="SPAN780ROW34DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW34DATA22466" name="CB780ROW34DATA22466" tabindex="2230" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW34DATA22466" name="CB780ROW34DATA22466" tabindex="2230" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW34DATA22466" name="CB780ROW34DATA22466" tabindex="2230" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW34DATA3869" id="OLDCB780ROW34DATA3869" value="Sujan, Jaxson">
            Sujan, Jaxson
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW34DATA28817" id="OLDCB780ROW34DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW34DATA29712" id="OLDCB780ROW34DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW34DATA29712" name="CB780ROW34DATA29712" tabindex="2260" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW34DATA3871" id="OLDCB780ROW34DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW34DATA3871" name="CB780ROW34DATA3871" tabindex="2270" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW34DATA3870" id="OLDCB780ROW34DATA3870" value="08/24/2026 11:01 AM">
            <input type="text" class="form-control" id="CB780ROW34DATE387017" name="CB780ROW34DATE387017" tabindex="2280" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/24/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2280" onclick="cal.select(window.easyform.CB780ROW34DATE387017,'CB780ROW34DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW34DATE387017.value); return false;" name="CB780ROW34DATE387017X" id="CB780ROW34DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW34DATE387017I" id="CB780ROW34DATE387017I"></a><span id="DIVCB780ROW34TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW34TIME387017" name="CB780ROW34TIME387017" tabindex="2280" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:01"><select id="CB780ROW34AMPM387017" name="CB780ROW34AMPM387017" class="form-control" tabindex="2280" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW35" id="LINKCB780ROW35" value="1163">
          <input type="hidden" name="CHILDCB780ROW35" id="CHILDCB780ROW35" value="241835">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW35DATA22466" id="OLDCB780ROW35DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW35DATA22466" name="SPAN780ROW35DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW35DATA22466" name="CB780ROW35DATA22466" tabindex="2290" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW35DATA22466" name="CB780ROW35DATA22466" tabindex="2290" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW35DATA22466" name="CB780ROW35DATA22466" tabindex="2290" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW35DATA3869" id="OLDCB780ROW35DATA3869" value="Sujan, Kira">
            Sujan, Kira
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW35DATA28817" id="OLDCB780ROW35DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW35DATA29712" id="OLDCB780ROW35DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW35DATA29712" name="CB780ROW35DATA29712" tabindex="2320" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW35DATA3871" id="OLDCB780ROW35DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW35DATA3871" name="CB780ROW35DATA3871" tabindex="2330" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW35DATA3870" id="OLDCB780ROW35DATA3870" value="08/24/2026 11:01 AM">
            <input type="text" class="form-control" id="CB780ROW35DATE387017" name="CB780ROW35DATE387017" tabindex="2340" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/24/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2340" onclick="cal.select(window.easyform.CB780ROW35DATE387017,'CB780ROW35DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW35DATE387017.value); return false;" name="CB780ROW35DATE387017X" id="CB780ROW35DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW35DATE387017I" id="CB780ROW35DATE387017I"></a><span id="DIVCB780ROW35TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW35TIME387017" name="CB780ROW35TIME387017" tabindex="2340" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:01"><select id="CB780ROW35AMPM387017" name="CB780ROW35AMPM387017" class="form-control" tabindex="2340" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW36" id="LINKCB780ROW36" value="992">
          <input type="hidden" name="CHILDCB780ROW36" id="CHILDCB780ROW36" value="241862">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW36DATA22466" id="OLDCB780ROW36DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW36DATA22466" name="SPAN780ROW36DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW36DATA22466" name="CB780ROW36DATA22466" tabindex="2350" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW36DATA22466" name="CB780ROW36DATA22466" tabindex="2350" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW36DATA22466" name="CB780ROW36DATA22466" tabindex="2350" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW36DATA3869" id="OLDCB780ROW36DATA3869" value="Swenson, Jack">
            Swenson, Jack
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW36DATA28817" id="OLDCB780ROW36DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW36DATA29712" id="OLDCB780ROW36DATA29712" value="1">
            <input type="text" class="form-control" id="CB780ROW36DATA29712" name="CB780ROW36DATA29712" tabindex="2380" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW36DATA3871" id="OLDCB780ROW36DATA3871" value="Sister will join">
            <input type="text" class="form-control" id="CB780ROW36DATA3871" name="CB780ROW36DATA3871" tabindex="2390" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="Sister will join" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW36DATA3870" id="OLDCB780ROW36DATA3870" value="08/23/2026 4:06 PM">
            <input type="text" class="form-control" id="CB780ROW36DATE387017" name="CB780ROW36DATE387017" tabindex="2400" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2400" onclick="cal.select(window.easyform.CB780ROW36DATE387017,'CB780ROW36DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW36DATE387017.value); return false;" name="CB780ROW36DATE387017X" id="CB780ROW36DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW36DATE387017I" id="CB780ROW36DATE387017I"></a><span id="DIVCB780ROW36TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW36TIME387017" name="CB780ROW36TIME387017" tabindex="2400" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="4:06"><select id="CB780ROW36AMPM387017" name="CB780ROW36AMPM387017" class="form-control" tabindex="2400" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW37" id="LINKCB780ROW37" value="996">
          <input type="hidden" name="CHILDCB780ROW37" id="CHILDCB780ROW37" value="241753">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW37DATA22466" id="OLDCB780ROW37DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW37DATA22466" name="SPAN780ROW37DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW37DATA22466" name="CB780ROW37DATA22466" tabindex="2410" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW37DATA22466" name="CB780ROW37DATA22466" tabindex="2410" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW37DATA22466" name="CB780ROW37DATA22466" tabindex="2410" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW37DATA3869" id="OLDCB780ROW37DATA3869" value="Swenson, Lindsey">
            Swenson, Lindsey
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW37DATA28817" id="OLDCB780ROW37DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW37DATA29712" id="OLDCB780ROW37DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW37DATA29712" name="CB780ROW37DATA29712" tabindex="2440" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW37DATA3871" id="OLDCB780ROW37DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW37DATA3871" name="CB780ROW37DATA3871" tabindex="2450" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW37DATA3870" id="OLDCB780ROW37DATA3870" value="08/23/2026 4:06 PM">
            <input type="text" class="form-control" id="CB780ROW37DATE387017" name="CB780ROW37DATE387017" tabindex="2460" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2460" onclick="cal.select(window.easyform.CB780ROW37DATE387017,'CB780ROW37DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW37DATE387017.value); return false;" name="CB780ROW37DATE387017X" id="CB780ROW37DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW37DATE387017I" id="CB780ROW37DATE387017I"></a><span id="DIVCB780ROW37TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW37TIME387017" name="CB780ROW37TIME387017" tabindex="2460" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="4:06"><select id="CB780ROW37AMPM387017" name="CB780ROW37AMPM387017" class="form-control" tabindex="2460" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW38" id="LINKCB780ROW38" value="1089">
          <input type="hidden" name="CHILDCB780ROW38" id="CHILDCB780ROW38" value="241843">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW38DATA22466" id="OLDCB780ROW38DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW38DATA22466" name="SPAN780ROW38DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW38DATA22466" name="CB780ROW38DATA22466" tabindex="2470" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW38DATA22466" name="CB780ROW38DATA22466" tabindex="2470" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW38DATA22466" name="CB780ROW38DATA22466" tabindex="2470" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW38DATA3869" id="OLDCB780ROW38DATA3869" value="Swenson, Matt">
            Swenson, Matt
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW38DATA28817" id="OLDCB780ROW38DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW38DATA29712" id="OLDCB780ROW38DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW38DATA29712" name="CB780ROW38DATA29712" tabindex="2500" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW38DATA3871" id="OLDCB780ROW38DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW38DATA3871" name="CB780ROW38DATA3871" tabindex="2510" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW38DATA3870" id="OLDCB780ROW38DATA3870" value="08/23/2026 4:06 PM">
            <input type="text" class="form-control" id="CB780ROW38DATE387017" name="CB780ROW38DATE387017" tabindex="2520" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2520" onclick="cal.select(window.easyform.CB780ROW38DATE387017,'CB780ROW38DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW38DATE387017.value); return false;" name="CB780ROW38DATE387017X" id="CB780ROW38DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW38DATE387017I" id="CB780ROW38DATE387017I"></a><span id="DIVCB780ROW38TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW38TIME387017" name="CB780ROW38TIME387017" tabindex="2520" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="4:06"><select id="CB780ROW38AMPM387017" name="CB780ROW38AMPM387017" class="form-control" tabindex="2520" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW39" id="LINKCB780ROW39" value="1081">
          <input type="hidden" name="CHILDCB780ROW39" id="CHILDCB780ROW39" value="241883">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW39DATA22466" id="OLDCB780ROW39DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW39DATA22466" name="SPAN780ROW39DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW39DATA22466" name="CB780ROW39DATA22466" tabindex="2530" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW39DATA22466" name="CB780ROW39DATA22466" tabindex="2530" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW39DATA22466" name="CB780ROW39DATA22466" tabindex="2530" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW39DATA3869" id="OLDCB780ROW39DATA3869" value="Tabie, Logan">
            Tabie, Logan
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW39DATA28817" id="OLDCB780ROW39DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW39DATA29712" id="OLDCB780ROW39DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW39DATA29712" name="CB780ROW39DATA29712" tabindex="2560" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW39DATA3871" id="OLDCB780ROW39DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW39DATA3871" name="CB780ROW39DATA3871" tabindex="2570" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW39DATA3870" id="OLDCB780ROW39DATA3870" value="08/25/2026 9:30 PM">
            <input type="text" class="form-control" id="CB780ROW39DATE387017" name="CB780ROW39DATE387017" tabindex="2580" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2580" onclick="cal.select(window.easyform.CB780ROW39DATE387017,'CB780ROW39DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW39DATE387017.value); return false;" name="CB780ROW39DATE387017X" id="CB780ROW39DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW39DATE387017I" id="CB780ROW39DATE387017I"></a><span id="DIVCB780ROW39TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW39TIME387017" name="CB780ROW39TIME387017" tabindex="2580" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:30"><select id="CB780ROW39AMPM387017" name="CB780ROW39AMPM387017" class="form-control" tabindex="2580" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW40" id="LINKCB780ROW40" value="1085">
          <input type="hidden" name="CHILDCB780ROW40" id="CHILDCB780ROW40" value="241769">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW40DATA22466" id="OLDCB780ROW40DATA22466" value="Y">
            <span class="text-left" id="SPAN780ROW40DATA22466" name="SPAN780ROW40DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW40DATA22466" name="CB780ROW40DATA22466" tabindex="2590" onclick="easyFieldExit(this)" checked="" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW40DATA22466" name="CB780ROW40DATA22466" tabindex="2590" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW40DATA22466" name="CB780ROW40DATA22466" tabindex="2590" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW40DATA3869" id="OLDCB780ROW40DATA3869" value="Tabie, Mike">
            Tabie, Mike
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW40DATA28817" id="OLDCB780ROW40DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW40DATA29712" id="OLDCB780ROW40DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW40DATA29712" name="CB780ROW40DATA29712" tabindex="2620" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW40DATA3871" id="OLDCB780ROW40DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW40DATA3871" name="CB780ROW40DATA3871" tabindex="2630" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW40DATA3870" id="OLDCB780ROW40DATA3870" value="08/25/2026 9:30 PM">
            <input type="text" class="form-control" id="CB780ROW40DATE387017" name="CB780ROW40DATE387017" tabindex="2640" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2640" onclick="cal.select(window.easyform.CB780ROW40DATE387017,'CB780ROW40DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW40DATE387017.value); return false;" name="CB780ROW40DATE387017X" id="CB780ROW40DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW40DATE387017I" id="CB780ROW40DATE387017I"></a><span id="DIVCB780ROW40TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW40TIME387017" name="CB780ROW40TIME387017" tabindex="2640" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="9:30"><select id="CB780ROW40AMPM387017" name="CB780ROW40AMPM387017" class="form-control" tabindex="2640" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW41" id="LINKCB780ROW41" value="1018">
          <input type="hidden" name="CHILDCB780ROW41" id="CHILDCB780ROW41" value="241889">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW41DATA22466" id="OLDCB780ROW41DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW41DATA22466" name="SPAN780ROW41DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW41DATA22466" name="CB780ROW41DATA22466" tabindex="2650" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW41DATA22466" name="CB780ROW41DATA22466" tabindex="2650" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW41DATA22466" name="CB780ROW41DATA22466" tabindex="2650" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW41DATA3869" id="OLDCB780ROW41DATA3869" value="Aarons, Andrew">
            Aarons, Andrew
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW41DATA28817" id="OLDCB780ROW41DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW41DATA29712" id="OLDCB780ROW41DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW41DATA29712" name="CB780ROW41DATA29712" tabindex="2680" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW41DATA3871" id="OLDCB780ROW41DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW41DATA3871" name="CB780ROW41DATA3871" tabindex="2690" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW41DATA3870" id="OLDCB780ROW41DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW41DATE387017" name="CB780ROW41DATE387017" tabindex="2700" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2700" onclick="cal.select(window.easyform.CB780ROW41DATE387017,'CB780ROW41DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW41DATE387017.value); return false;" name="CB780ROW41DATE387017X" id="CB780ROW41DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW41DATE387017I" id="CB780ROW41DATE387017I"></a><span id="DIVCB780ROW41TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW41TIME387017" name="CB780ROW41TIME387017" tabindex="2700" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW41AMPM387017" name="CB780ROW41AMPM387017" class="form-control" tabindex="2700" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW42" id="LINKCB780ROW42" value="1027">
          <input type="hidden" name="CHILDCB780ROW42" id="CHILDCB780ROW42" value="241740">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW42DATA22466" id="OLDCB780ROW42DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW42DATA22466" name="SPAN780ROW42DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW42DATA22466" name="CB780ROW42DATA22466" tabindex="2710" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW42DATA22466" name="CB780ROW42DATA22466" tabindex="2710" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW42DATA22466" name="CB780ROW42DATA22466" tabindex="2710" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW42DATA3869" id="OLDCB780ROW42DATA3869" value="Aarons, Ashley">
            Aarons, Ashley
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW42DATA28817" id="OLDCB780ROW42DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW42DATA29712" id="OLDCB780ROW42DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW42DATA29712" name="CB780ROW42DATA29712" tabindex="2740" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW42DATA3871" id="OLDCB780ROW42DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW42DATA3871" name="CB780ROW42DATA3871" tabindex="2750" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW42DATA3870" id="OLDCB780ROW42DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW42DATE387017" name="CB780ROW42DATE387017" tabindex="2760" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2760" onclick="cal.select(window.easyform.CB780ROW42DATE387017,'CB780ROW42DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW42DATE387017.value); return false;" name="CB780ROW42DATE387017X" id="CB780ROW42DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW42DATE387017I" id="CB780ROW42DATE387017I"></a><span id="DIVCB780ROW42TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW42TIME387017" name="CB780ROW42TIME387017" tabindex="2760" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW42AMPM387017" name="CB780ROW42AMPM387017" class="form-control" tabindex="2760" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW43" id="LINKCB780ROW43" value="1086">
          <input type="hidden" name="CHILDCB780ROW43" id="CHILDCB780ROW43" value="241846">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW43DATA22466" id="OLDCB780ROW43DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW43DATA22466" name="SPAN780ROW43DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW43DATA22466" name="CB780ROW43DATA22466" tabindex="2770" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW43DATA22466" name="CB780ROW43DATA22466" tabindex="2770" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW43DATA22466" name="CB780ROW43DATA22466" tabindex="2770" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW43DATA3869" id="OLDCB780ROW43DATA3869" value="Aarons, Stephen">
            Aarons, Stephen
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW43DATA28817" id="OLDCB780ROW43DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW43DATA29712" id="OLDCB780ROW43DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW43DATA29712" name="CB780ROW43DATA29712" tabindex="2800" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW43DATA3871" id="OLDCB780ROW43DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW43DATA3871" name="CB780ROW43DATA3871" tabindex="2810" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW43DATA3870" id="OLDCB780ROW43DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW43DATE387017" name="CB780ROW43DATE387017" tabindex="2820" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2820" onclick="cal.select(window.easyform.CB780ROW43DATE387017,'CB780ROW43DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW43DATE387017.value); return false;" name="CB780ROW43DATE387017X" id="CB780ROW43DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW43DATE387017I" id="CB780ROW43DATE387017I"></a><span id="DIVCB780ROW43TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW43TIME387017" name="CB780ROW43TIME387017" tabindex="2820" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW43AMPM387017" name="CB780ROW43AMPM387017" class="form-control" tabindex="2820" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW44" id="LINKCB780ROW44" value="910">
          <input type="hidden" name="CHILDCB780ROW44" id="CHILDCB780ROW44" value="241756">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW44DATA22466" id="OLDCB780ROW44DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW44DATA22466" name="SPAN780ROW44DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW44DATA22466" name="CB780ROW44DATA22466" tabindex="2830" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW44DATA22466" name="CB780ROW44DATA22466" tabindex="2830" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW44DATA22466" name="CB780ROW44DATA22466" tabindex="2830" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW44DATA3869" id="OLDCB780ROW44DATA3869" value="Abbott, Albert">
            Abbott, Albert
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW44DATA28817" id="OLDCB780ROW44DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW44DATA29712" id="OLDCB780ROW44DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW44DATA29712" name="CB780ROW44DATA29712" tabindex="2860" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW44DATA3871" id="OLDCB780ROW44DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW44DATA3871" name="CB780ROW44DATA3871" tabindex="2870" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW44DATA3870" id="OLDCB780ROW44DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW44DATE387017" name="CB780ROW44DATE387017" tabindex="2880" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2880" onclick="cal.select(window.easyform.CB780ROW44DATE387017,'CB780ROW44DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW44DATE387017.value); return false;" name="CB780ROW44DATE387017X" id="CB780ROW44DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW44DATE387017I" id="CB780ROW44DATE387017I"></a><span id="DIVCB780ROW44TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW44TIME387017" name="CB780ROW44TIME387017" tabindex="2880" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW44AMPM387017" name="CB780ROW44AMPM387017" class="form-control" tabindex="2880" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW45" id="LINKCB780ROW45" value="914">
          <input type="hidden" name="CHILDCB780ROW45" id="CHILDCB780ROW45" value="241826">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW45DATA22466" id="OLDCB780ROW45DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW45DATA22466" name="SPAN780ROW45DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW45DATA22466" name="CB780ROW45DATA22466" tabindex="2890" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW45DATA22466" name="CB780ROW45DATA22466" tabindex="2890" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW45DATA22466" name="CB780ROW45DATA22466" tabindex="2890" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW45DATA3869" id="OLDCB780ROW45DATA3869" value="Abbott, William">
            Abbott, William
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW45DATA28817" id="OLDCB780ROW45DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW45DATA29712" id="OLDCB780ROW45DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW45DATA29712" name="CB780ROW45DATA29712" tabindex="2920" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW45DATA3871" id="OLDCB780ROW45DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW45DATA3871" name="CB780ROW45DATA3871" tabindex="2930" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW45DATA3870" id="OLDCB780ROW45DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW45DATE387017" name="CB780ROW45DATE387017" tabindex="2940" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="2940" onclick="cal.select(window.easyform.CB780ROW45DATE387017,'CB780ROW45DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW45DATE387017.value); return false;" name="CB780ROW45DATE387017X" id="CB780ROW45DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW45DATE387017I" id="CB780ROW45DATE387017I"></a><span id="DIVCB780ROW45TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW45TIME387017" name="CB780ROW45TIME387017" tabindex="2940" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW45AMPM387017" name="CB780ROW45AMPM387017" class="form-control" tabindex="2940" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW46" id="LINKCB780ROW46" value="1245">
          <input type="hidden" name="CHILDCB780ROW46" id="CHILDCB780ROW46" value="241759">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW46DATA22466" id="OLDCB780ROW46DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW46DATA22466" name="SPAN780ROW46DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW46DATA22466" name="CB780ROW46DATA22466" tabindex="2950" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW46DATA22466" name="CB780ROW46DATA22466" tabindex="2950" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW46DATA22466" name="CB780ROW46DATA22466" tabindex="2950" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW46DATA3869" id="OLDCB780ROW46DATA3869" value="Applegate, Chris">
            Applegate, Chris
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW46DATA28817" id="OLDCB780ROW46DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW46DATA29712" id="OLDCB780ROW46DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW46DATA29712" name="CB780ROW46DATA29712" tabindex="2980" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW46DATA3871" id="OLDCB780ROW46DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW46DATA3871" name="CB780ROW46DATA3871" tabindex="2990" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW46DATA3870" id="OLDCB780ROW46DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW46DATE387017" name="CB780ROW46DATE387017" tabindex="3000" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3000" onclick="cal.select(window.easyform.CB780ROW46DATE387017,'CB780ROW46DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW46DATE387017.value); return false;" name="CB780ROW46DATE387017X" id="CB780ROW46DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW46DATE387017I" id="CB780ROW46DATE387017I"></a><span id="DIVCB780ROW46TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW46TIME387017" name="CB780ROW46TIME387017" tabindex="3000" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW46AMPM387017" name="CB780ROW46AMPM387017" class="form-control" tabindex="3000" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW47" id="LINKCB780ROW47" value="1240">
          <input type="hidden" name="CHILDCB780ROW47" id="CHILDCB780ROW47" value="241799">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW47DATA22466" id="OLDCB780ROW47DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW47DATA22466" name="SPAN780ROW47DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW47DATA22466" name="CB780ROW47DATA22466" tabindex="3010" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW47DATA22466" name="CB780ROW47DATA22466" tabindex="3010" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW47DATA22466" name="CB780ROW47DATA22466" tabindex="3010" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW47DATA3869" id="OLDCB780ROW47DATA3869" value="Applegate, Sebastian">
            Applegate, Sebastian
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW47DATA28817" id="OLDCB780ROW47DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW47DATA29712" id="OLDCB780ROW47DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW47DATA29712" name="CB780ROW47DATA29712" tabindex="3040" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW47DATA3871" id="OLDCB780ROW47DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW47DATA3871" name="CB780ROW47DATA3871" tabindex="3050" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW47DATA3870" id="OLDCB780ROW47DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW47DATE387017" name="CB780ROW47DATE387017" tabindex="3060" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3060" onclick="cal.select(window.easyform.CB780ROW47DATE387017,'CB780ROW47DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW47DATE387017.value); return false;" name="CB780ROW47DATE387017X" id="CB780ROW47DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW47DATE387017I" id="CB780ROW47DATE387017I"></a><span id="DIVCB780ROW47TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW47TIME387017" name="CB780ROW47TIME387017" tabindex="3060" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW47AMPM387017" name="CB780ROW47AMPM387017" class="form-control" tabindex="3060" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW48" id="LINKCB780ROW48" value="1202">
          <input type="hidden" name="CHILDCB780ROW48" id="CHILDCB780ROW48" value="241745">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW48DATA22466" id="OLDCB780ROW48DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW48DATA22466" name="SPAN780ROW48DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW48DATA22466" name="CB780ROW48DATA22466" tabindex="3070" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW48DATA22466" name="CB780ROW48DATA22466" tabindex="3070" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW48DATA22466" name="CB780ROW48DATA22466" tabindex="3070" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW48DATA3869" id="OLDCB780ROW48DATA3869" value="Babb, Chris">
            Babb, Chris
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW48DATA28817" id="OLDCB780ROW48DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW48DATA29712" id="OLDCB780ROW48DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW48DATA29712" name="CB780ROW48DATA29712" tabindex="3100" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW48DATA3871" id="OLDCB780ROW48DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW48DATA3871" name="CB780ROW48DATA3871" tabindex="3110" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW48DATA3870" id="OLDCB780ROW48DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW48DATE387017" name="CB780ROW48DATE387017" tabindex="3120" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3120" onclick="cal.select(window.easyform.CB780ROW48DATE387017,'CB780ROW48DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW48DATE387017.value); return false;" name="CB780ROW48DATE387017X" id="CB780ROW48DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW48DATE387017I" id="CB780ROW48DATE387017I"></a><span id="DIVCB780ROW48TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW48TIME387017" name="CB780ROW48TIME387017" tabindex="3120" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW48AMPM387017" name="CB780ROW48AMPM387017" class="form-control" tabindex="3120" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW49" id="LINKCB780ROW49" value="1184">
          <input type="hidden" name="CHILDCB780ROW49" id="CHILDCB780ROW49" value="241891">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW49DATA22466" id="OLDCB780ROW49DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW49DATA22466" name="SPAN780ROW49DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW49DATA22466" name="CB780ROW49DATA22466" tabindex="3130" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW49DATA22466" name="CB780ROW49DATA22466" tabindex="3130" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW49DATA22466" name="CB780ROW49DATA22466" tabindex="3130" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW49DATA3869" id="OLDCB780ROW49DATA3869" value="Babb, Tyson">
            Babb, Tyson
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW49DATA28817" id="OLDCB780ROW49DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW49DATA29712" id="OLDCB780ROW49DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW49DATA29712" name="CB780ROW49DATA29712" tabindex="3160" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW49DATA3871" id="OLDCB780ROW49DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW49DATA3871" name="CB780ROW49DATA3871" tabindex="3170" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW49DATA3870" id="OLDCB780ROW49DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW49DATE387017" name="CB780ROW49DATE387017" tabindex="3180" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3180" onclick="cal.select(window.easyform.CB780ROW49DATE387017,'CB780ROW49DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW49DATE387017.value); return false;" name="CB780ROW49DATE387017X" id="CB780ROW49DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW49DATE387017I" id="CB780ROW49DATE387017I"></a><span id="DIVCB780ROW49TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW49TIME387017" name="CB780ROW49TIME387017" tabindex="3180" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW49AMPM387017" name="CB780ROW49AMPM387017" class="form-control" tabindex="3180" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW50" id="LINKCB780ROW50" value="488">
          <input type="hidden" name="CHILDCB780ROW50" id="CHILDCB780ROW50" value="241867">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW50DATA22466" id="OLDCB780ROW50DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW50DATA22466" name="SPAN780ROW50DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW50DATA22466" name="CB780ROW50DATA22466" tabindex="3190" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW50DATA22466" name="CB780ROW50DATA22466" tabindex="3190" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW50DATA22466" name="CB780ROW50DATA22466" tabindex="3190" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW50DATA3869" id="OLDCB780ROW50DATA3869" value="Bayes, Dylan">
            Bayes, Dylan
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW50DATA28817" id="OLDCB780ROW50DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW50DATA29712" id="OLDCB780ROW50DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW50DATA29712" name="CB780ROW50DATA29712" tabindex="3220" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW50DATA3871" id="OLDCB780ROW50DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW50DATA3871" name="CB780ROW50DATA3871" tabindex="3230" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW50DATA3870" id="OLDCB780ROW50DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW50DATE387017" name="CB780ROW50DATE387017" tabindex="3240" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3240" onclick="cal.select(window.easyform.CB780ROW50DATE387017,'CB780ROW50DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW50DATE387017.value); return false;" name="CB780ROW50DATE387017X" id="CB780ROW50DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW50DATE387017I" id="CB780ROW50DATE387017I"></a><span id="DIVCB780ROW50TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW50TIME387017" name="CB780ROW50TIME387017" tabindex="3240" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW50AMPM387017" name="CB780ROW50AMPM387017" class="form-control" tabindex="3240" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW51" id="LINKCB780ROW51" value="578">
          <input type="hidden" name="CHILDCB780ROW51" id="CHILDCB780ROW51" value="241751">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW51DATA22466" id="OLDCB780ROW51DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW51DATA22466" name="SPAN780ROW51DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW51DATA22466" name="CB780ROW51DATA22466" tabindex="3250" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW51DATA22466" name="CB780ROW51DATA22466" tabindex="3250" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW51DATA22466" name="CB780ROW51DATA22466" tabindex="3250" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW51DATA3869" id="OLDCB780ROW51DATA3869" value="Bayes, Phillip">
            Bayes, Phillip
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW51DATA28817" id="OLDCB780ROW51DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW51DATA29712" id="OLDCB780ROW51DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW51DATA29712" name="CB780ROW51DATA29712" tabindex="3280" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW51DATA3871" id="OLDCB780ROW51DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW51DATA3871" name="CB780ROW51DATA3871" tabindex="3290" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW51DATA3870" id="OLDCB780ROW51DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW51DATE387017" name="CB780ROW51DATE387017" tabindex="3300" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3300" onclick="cal.select(window.easyform.CB780ROW51DATE387017,'CB780ROW51DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW51DATE387017.value); return false;" name="CB780ROW51DATE387017X" id="CB780ROW51DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW51DATE387017I" id="CB780ROW51DATE387017I"></a><span id="DIVCB780ROW51TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW51TIME387017" name="CB780ROW51TIME387017" tabindex="3300" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW51AMPM387017" name="CB780ROW51AMPM387017" class="form-control" tabindex="3300" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW52" id="LINKCB780ROW52" value="1621">
          <input type="hidden" name="CHILDCB780ROW52" id="CHILDCB780ROW52" value="248930">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW52DATA22466" id="OLDCB780ROW52DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW52DATA22466" name="SPAN780ROW52DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW52DATA22466" name="CB780ROW52DATA22466" tabindex="3310" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW52DATA22466" name="CB780ROW52DATA22466" tabindex="3310" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW52DATA22466" name="CB780ROW52DATA22466" tabindex="3310" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW52DATA3869" id="OLDCB780ROW52DATA3869" value="Benson, Lawrence">
            Benson, Lawrence
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW52DATA28817" id="OLDCB780ROW52DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW52DATA29712" id="OLDCB780ROW52DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW52DATA29712" name="CB780ROW52DATA29712" tabindex="3340" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW52DATA3871" id="OLDCB780ROW52DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW52DATA3871" name="CB780ROW52DATA3871" tabindex="3350" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW52DATA3870" id="OLDCB780ROW52DATA3870" value="08/23/2026 11:53 PM">
            <input type="text" class="form-control" id="CB780ROW52DATE387017" name="CB780ROW52DATE387017" tabindex="3360" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3360" onclick="cal.select(window.easyform.CB780ROW52DATE387017,'CB780ROW52DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW52DATE387017.value); return false;" name="CB780ROW52DATE387017X" id="CB780ROW52DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW52DATE387017I" id="CB780ROW52DATE387017I"></a><span id="DIVCB780ROW52TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW52TIME387017" name="CB780ROW52TIME387017" tabindex="3360" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:53"><select id="CB780ROW52AMPM387017" name="CB780ROW52AMPM387017" class="form-control" tabindex="3360" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW53" id="LINKCB780ROW53" value="1617">
          <input type="hidden" name="CHILDCB780ROW53" id="CHILDCB780ROW53" value="246712">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW53DATA22466" id="OLDCB780ROW53DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW53DATA22466" name="SPAN780ROW53DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW53DATA22466" name="CB780ROW53DATA22466" tabindex="3370" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW53DATA22466" name="CB780ROW53DATA22466" tabindex="3370" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW53DATA22466" name="CB780ROW53DATA22466" tabindex="3370" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW53DATA3869" id="OLDCB780ROW53DATA3869" value="Benson, Nicolas">
            Benson, Nicolas
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW53DATA28817" id="OLDCB780ROW53DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW53DATA29712" id="OLDCB780ROW53DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW53DATA29712" name="CB780ROW53DATA29712" tabindex="3400" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW53DATA3871" id="OLDCB780ROW53DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW53DATA3871" name="CB780ROW53DATA3871" tabindex="3410" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW53DATA3870" id="OLDCB780ROW53DATA3870" value="08/23/2026 11:52 PM">
            <input type="text" class="form-control" id="CB780ROW53DATE387017" name="CB780ROW53DATE387017" tabindex="3420" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3420" onclick="cal.select(window.easyform.CB780ROW53DATE387017,'CB780ROW53DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW53DATE387017.value); return false;" name="CB780ROW53DATE387017X" id="CB780ROW53DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW53DATE387017I" id="CB780ROW53DATE387017I"></a><span id="DIVCB780ROW53TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW53TIME387017" name="CB780ROW53TIME387017" tabindex="3420" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:52"><select id="CB780ROW53AMPM387017" name="CB780ROW53AMPM387017" class="form-control" tabindex="3420" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW54" id="LINKCB780ROW54" value="1154">
          <input type="hidden" name="CHILDCB780ROW54" id="CHILDCB780ROW54" value="241801">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW54DATA22466" id="OLDCB780ROW54DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW54DATA22466" name="SPAN780ROW54DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW54DATA22466" name="CB780ROW54DATA22466" tabindex="3430" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW54DATA22466" name="CB780ROW54DATA22466" tabindex="3430" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW54DATA22466" name="CB780ROW54DATA22466" tabindex="3430" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW54DATA3869" id="OLDCB780ROW54DATA3869" value="Blair, Frankie">
            Blair, Frankie
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW54DATA28817" id="OLDCB780ROW54DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW54DATA29712" id="OLDCB780ROW54DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW54DATA29712" name="CB780ROW54DATA29712" tabindex="3460" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW54DATA3871" id="OLDCB780ROW54DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW54DATA3871" name="CB780ROW54DATA3871" tabindex="3470" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW54DATA3870" id="OLDCB780ROW54DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW54DATE387017" name="CB780ROW54DATE387017" tabindex="3480" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3480" onclick="cal.select(window.easyform.CB780ROW54DATE387017,'CB780ROW54DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW54DATE387017.value); return false;" name="CB780ROW54DATE387017X" id="CB780ROW54DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW54DATE387017I" id="CB780ROW54DATE387017I"></a><span id="DIVCB780ROW54TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW54TIME387017" name="CB780ROW54TIME387017" tabindex="3480" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW54AMPM387017" name="CB780ROW54AMPM387017" class="form-control" tabindex="3480" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW55" id="LINKCB780ROW55" value="1155">
          <input type="hidden" name="CHILDCB780ROW55" id="CHILDCB780ROW55" value="241876">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW55DATA22466" id="OLDCB780ROW55DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW55DATA22466" name="SPAN780ROW55DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW55DATA22466" name="CB780ROW55DATA22466" tabindex="3490" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW55DATA22466" name="CB780ROW55DATA22466" tabindex="3490" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW55DATA22466" name="CB780ROW55DATA22466" tabindex="3490" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW55DATA3869" id="OLDCB780ROW55DATA3869" value="Blair, Joe">
            Blair, Joe
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW55DATA28817" id="OLDCB780ROW55DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW55DATA29712" id="OLDCB780ROW55DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW55DATA29712" name="CB780ROW55DATA29712" tabindex="3520" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW55DATA3871" id="OLDCB780ROW55DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW55DATA3871" name="CB780ROW55DATA3871" tabindex="3530" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW55DATA3870" id="OLDCB780ROW55DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW55DATE387017" name="CB780ROW55DATE387017" tabindex="3540" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3540" onclick="cal.select(window.easyform.CB780ROW55DATE387017,'CB780ROW55DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW55DATE387017.value); return false;" name="CB780ROW55DATE387017X" id="CB780ROW55DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW55DATE387017I" id="CB780ROW55DATE387017I"></a><span id="DIVCB780ROW55TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW55TIME387017" name="CB780ROW55TIME387017" tabindex="3540" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW55AMPM387017" name="CB780ROW55AMPM387017" class="form-control" tabindex="3540" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW56" id="LINKCB780ROW56" value="1156">
          <input type="hidden" name="CHILDCB780ROW56" id="CHILDCB780ROW56" value="241743">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW56DATA22466" id="OLDCB780ROW56DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW56DATA22466" name="SPAN780ROW56DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW56DATA22466" name="CB780ROW56DATA22466" tabindex="3550" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW56DATA22466" name="CB780ROW56DATA22466" tabindex="3550" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW56DATA22466" name="CB780ROW56DATA22466" tabindex="3550" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW56DATA3869" id="OLDCB780ROW56DATA3869" value="Bruyn, Emerson">
            Bruyn, Emerson
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW56DATA28817" id="OLDCB780ROW56DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW56DATA29712" id="OLDCB780ROW56DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW56DATA29712" name="CB780ROW56DATA29712" tabindex="3580" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW56DATA3871" id="OLDCB780ROW56DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW56DATA3871" name="CB780ROW56DATA3871" tabindex="3590" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW56DATA3870" id="OLDCB780ROW56DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW56DATE387017" name="CB780ROW56DATE387017" tabindex="3600" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3600" onclick="cal.select(window.easyform.CB780ROW56DATE387017,'CB780ROW56DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW56DATE387017.value); return false;" name="CB780ROW56DATE387017X" id="CB780ROW56DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW56DATE387017I" id="CB780ROW56DATE387017I"></a><span id="DIVCB780ROW56TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW56TIME387017" name="CB780ROW56TIME387017" tabindex="3600" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW56AMPM387017" name="CB780ROW56AMPM387017" class="form-control" tabindex="3600" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW57" id="LINKCB780ROW57" value="1169">
          <input type="hidden" name="CHILDCB780ROW57" id="CHILDCB780ROW57" value="241850">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW57DATA22466" id="OLDCB780ROW57DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW57DATA22466" name="SPAN780ROW57DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW57DATA22466" name="CB780ROW57DATA22466" tabindex="3610" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW57DATA22466" name="CB780ROW57DATA22466" tabindex="3610" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW57DATA22466" name="CB780ROW57DATA22466" tabindex="3610" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW57DATA3869" id="OLDCB780ROW57DATA3869" value="Bruyn, Meaghan">
            Bruyn, Meaghan
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW57DATA28817" id="OLDCB780ROW57DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW57DATA29712" id="OLDCB780ROW57DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW57DATA29712" name="CB780ROW57DATA29712" tabindex="3640" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW57DATA3871" id="OLDCB780ROW57DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW57DATA3871" name="CB780ROW57DATA3871" tabindex="3650" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW57DATA3870" id="OLDCB780ROW57DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW57DATE387017" name="CB780ROW57DATE387017" tabindex="3660" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3660" onclick="cal.select(window.easyform.CB780ROW57DATE387017,'CB780ROW57DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW57DATE387017.value); return false;" name="CB780ROW57DATE387017X" id="CB780ROW57DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW57DATE387017I" id="CB780ROW57DATE387017I"></a><span id="DIVCB780ROW57TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW57TIME387017" name="CB780ROW57TIME387017" tabindex="3660" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW57AMPM387017" name="CB780ROW57AMPM387017" class="form-control" tabindex="3660" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW58" id="LINKCB780ROW58" value="1610">
          <input type="hidden" name="CHILDCB780ROW58" id="CHILDCB780ROW58" value="243748">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW58DATA22466" id="OLDCB780ROW58DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW58DATA22466" name="SPAN780ROW58DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW58DATA22466" name="CB780ROW58DATA22466" tabindex="3670" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW58DATA22466" name="CB780ROW58DATA22466" tabindex="3670" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW58DATA22466" name="CB780ROW58DATA22466" tabindex="3670" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW58DATA3869" id="OLDCB780ROW58DATA3869" value="Bucklin, Michael2">
            Bucklin, Michael2
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW58DATA28817" id="OLDCB780ROW58DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW58DATA29712" id="OLDCB780ROW58DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW58DATA29712" name="CB780ROW58DATA29712" tabindex="3700" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW58DATA3871" id="OLDCB780ROW58DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW58DATA3871" name="CB780ROW58DATA3871" tabindex="3710" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW58DATA3870" id="OLDCB780ROW58DATA3870" value="08/20/2026 4:54 PM">
            <input type="text" class="form-control" id="CB780ROW58DATE387017" name="CB780ROW58DATE387017" tabindex="3720" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/20/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3720" onclick="cal.select(window.easyform.CB780ROW58DATE387017,'CB780ROW58DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW58DATE387017.value); return false;" name="CB780ROW58DATE387017X" id="CB780ROW58DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW58DATE387017I" id="CB780ROW58DATE387017I"></a><span id="DIVCB780ROW58TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW58TIME387017" name="CB780ROW58TIME387017" tabindex="3720" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="4:54"><select id="CB780ROW58AMPM387017" name="CB780ROW58AMPM387017" class="form-control" tabindex="3720" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW59" id="LINKCB780ROW59" value="1611">
          <input type="hidden" name="CHILDCB780ROW59" id="CHILDCB780ROW59" value="244156">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW59DATA22466" id="OLDCB780ROW59DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW59DATA22466" name="SPAN780ROW59DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW59DATA22466" name="CB780ROW59DATA22466" tabindex="3730" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW59DATA22466" name="CB780ROW59DATA22466" tabindex="3730" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW59DATA22466" name="CB780ROW59DATA22466" tabindex="3730" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW59DATA3869" id="OLDCB780ROW59DATA3869" value="Bucklin, Michael3">
            Bucklin, Michael3
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW59DATA28817" id="OLDCB780ROW59DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW59DATA29712" id="OLDCB780ROW59DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW59DATA29712" name="CB780ROW59DATA29712" tabindex="3760" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW59DATA3871" id="OLDCB780ROW59DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW59DATA3871" name="CB780ROW59DATA3871" tabindex="3770" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW59DATA3870" id="OLDCB780ROW59DATA3870" value="08/22/2026 2:35 PM">
            <input type="text" class="form-control" id="CB780ROW59DATE387017" name="CB780ROW59DATE387017" tabindex="3780" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/22/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3780" onclick="cal.select(window.easyform.CB780ROW59DATE387017,'CB780ROW59DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW59DATE387017.value); return false;" name="CB780ROW59DATE387017X" id="CB780ROW59DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW59DATE387017I" id="CB780ROW59DATE387017I"></a><span id="DIVCB780ROW59TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW59TIME387017" name="CB780ROW59TIME387017" tabindex="3780" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="2:35"><select id="CB780ROW59AMPM387017" name="CB780ROW59AMPM387017" class="form-control" tabindex="3780" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW60" id="LINKCB780ROW60" value="785">
          <input type="hidden" name="CHILDCB780ROW60" id="CHILDCB780ROW60" value="241815">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW60DATA22466" id="OLDCB780ROW60DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW60DATA22466" name="SPAN780ROW60DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW60DATA22466" name="CB780ROW60DATA22466" tabindex="3790" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW60DATA22466" name="CB780ROW60DATA22466" tabindex="3790" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW60DATA22466" name="CB780ROW60DATA22466" tabindex="3790" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW60DATA3869" id="OLDCB780ROW60DATA3869" value="Bush, Greg">
            Bush, Greg
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW60DATA28817" id="OLDCB780ROW60DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW60DATA29712" id="OLDCB780ROW60DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW60DATA29712" name="CB780ROW60DATA29712" tabindex="3820" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW60DATA3871" id="OLDCB780ROW60DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW60DATA3871" name="CB780ROW60DATA3871" tabindex="3830" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW60DATA3870" id="OLDCB780ROW60DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW60DATE387017" name="CB780ROW60DATE387017" tabindex="3840" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3840" onclick="cal.select(window.easyform.CB780ROW60DATE387017,'CB780ROW60DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW60DATE387017.value); return false;" name="CB780ROW60DATE387017X" id="CB780ROW60DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW60DATE387017I" id="CB780ROW60DATE387017I"></a><span id="DIVCB780ROW60TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW60TIME387017" name="CB780ROW60TIME387017" tabindex="3840" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW60AMPM387017" name="CB780ROW60AMPM387017" class="form-control" tabindex="3840" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW61" id="LINKCB780ROW61" value="762">
          <input type="hidden" name="CHILDCB780ROW61" id="CHILDCB780ROW61" value="241798">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW61DATA22466" id="OLDCB780ROW61DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW61DATA22466" name="SPAN780ROW61DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW61DATA22466" name="CB780ROW61DATA22466" tabindex="3850" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW61DATA22466" name="CB780ROW61DATA22466" tabindex="3850" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW61DATA22466" name="CB780ROW61DATA22466" tabindex="3850" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW61DATA3869" id="OLDCB780ROW61DATA3869" value="Bush, Kai">
            Bush, Kai
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW61DATA28817" id="OLDCB780ROW61DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW61DATA29712" id="OLDCB780ROW61DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW61DATA29712" name="CB780ROW61DATA29712" tabindex="3880" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW61DATA3871" id="OLDCB780ROW61DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW61DATA3871" name="CB780ROW61DATA3871" tabindex="3890" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW61DATA3870" id="OLDCB780ROW61DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW61DATE387017" name="CB780ROW61DATE387017" tabindex="3900" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3900" onclick="cal.select(window.easyform.CB780ROW61DATE387017,'CB780ROW61DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW61DATE387017.value); return false;" name="CB780ROW61DATE387017X" id="CB780ROW61DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW61DATE387017I" id="CB780ROW61DATE387017I"></a><span id="DIVCB780ROW61TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW61TIME387017" name="CB780ROW61TIME387017" tabindex="3900" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW61AMPM387017" name="CB780ROW61AMPM387017" class="form-control" tabindex="3900" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW62" id="LINKCB780ROW62" value="908">
          <input type="hidden" name="CHILDCB780ROW62" id="CHILDCB780ROW62" value="241793">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW62DATA22466" id="OLDCB780ROW62DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW62DATA22466" name="SPAN780ROW62DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW62DATA22466" name="CB780ROW62DATA22466" tabindex="3910" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW62DATA22466" name="CB780ROW62DATA22466" tabindex="3910" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW62DATA22466" name="CB780ROW62DATA22466" tabindex="3910" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW62DATA3869" id="OLDCB780ROW62DATA3869" value="Byrd, Amanda">
            Byrd, Amanda
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW62DATA28817" id="OLDCB780ROW62DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW62DATA29712" id="OLDCB780ROW62DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW62DATA29712" name="CB780ROW62DATA29712" tabindex="3940" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW62DATA3871" id="OLDCB780ROW62DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW62DATA3871" name="CB780ROW62DATA3871" tabindex="3950" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW62DATA3870" id="OLDCB780ROW62DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW62DATE387017" name="CB780ROW62DATE387017" tabindex="3960" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="3960" onclick="cal.select(window.easyform.CB780ROW62DATE387017,'CB780ROW62DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW62DATE387017.value); return false;" name="CB780ROW62DATE387017X" id="CB780ROW62DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW62DATE387017I" id="CB780ROW62DATE387017I"></a><span id="DIVCB780ROW62TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW62TIME387017" name="CB780ROW62TIME387017" tabindex="3960" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW62AMPM387017" name="CB780ROW62AMPM387017" class="form-control" tabindex="3960" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW63" id="LINKCB780ROW63" value="1618">
          <input type="hidden" name="CHILDCB780ROW63" id="CHILDCB780ROW63" value="247451">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW63DATA22466" id="OLDCB780ROW63DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW63DATA22466" name="SPAN780ROW63DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW63DATA22466" name="CB780ROW63DATA22466" tabindex="3970" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW63DATA22466" name="CB780ROW63DATA22466" tabindex="3970" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW63DATA22466" name="CB780ROW63DATA22466" tabindex="3970" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW63DATA3869" id="OLDCB780ROW63DATA3869" value="Byrd, Barrett">
            Byrd, Barrett
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW63DATA28817" id="OLDCB780ROW63DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW63DATA29712" id="OLDCB780ROW63DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW63DATA29712" name="CB780ROW63DATA29712" tabindex="4000" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW63DATA3871" id="OLDCB780ROW63DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW63DATA3871" name="CB780ROW63DATA3871" tabindex="4010" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW63DATA3870" id="OLDCB780ROW63DATA3870" value="08/23/2026 11:52 PM">
            <input type="text" class="form-control" id="CB780ROW63DATE387017" name="CB780ROW63DATE387017" tabindex="4020" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4020" onclick="cal.select(window.easyform.CB780ROW63DATE387017,'CB780ROW63DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW63DATE387017.value); return false;" name="CB780ROW63DATE387017X" id="CB780ROW63DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW63DATE387017I" id="CB780ROW63DATE387017I"></a><span id="DIVCB780ROW63TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW63TIME387017" name="CB780ROW63TIME387017" tabindex="4020" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:52"><select id="CB780ROW63AMPM387017" name="CB780ROW63AMPM387017" class="form-control" tabindex="4020" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW64" id="LINKCB780ROW64" value="763">
          <input type="hidden" name="CHILDCB780ROW64" id="CHILDCB780ROW64" value="241870">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW64DATA22466" id="OLDCB780ROW64DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW64DATA22466" name="SPAN780ROW64DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW64DATA22466" name="CB780ROW64DATA22466" tabindex="4030" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW64DATA22466" name="CB780ROW64DATA22466" tabindex="4030" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW64DATA22466" name="CB780ROW64DATA22466" tabindex="4030" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW64DATA3869" id="OLDCB780ROW64DATA3869" value="Byrd, Benjamin">
            Byrd, Benjamin
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW64DATA28817" id="OLDCB780ROW64DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW64DATA29712" id="OLDCB780ROW64DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW64DATA29712" name="CB780ROW64DATA29712" tabindex="4060" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW64DATA3871" id="OLDCB780ROW64DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW64DATA3871" name="CB780ROW64DATA3871" tabindex="4070" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW64DATA3870" id="OLDCB780ROW64DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW64DATE387017" name="CB780ROW64DATE387017" tabindex="4080" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4080" onclick="cal.select(window.easyform.CB780ROW64DATE387017,'CB780ROW64DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW64DATE387017.value); return false;" name="CB780ROW64DATE387017X" id="CB780ROW64DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW64DATE387017I" id="CB780ROW64DATE387017I"></a><span id="DIVCB780ROW64TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW64TIME387017" name="CB780ROW64TIME387017" tabindex="4080" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW64AMPM387017" name="CB780ROW64AMPM387017" class="form-control" tabindex="4080" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW65" id="LINKCB780ROW65" value="786">
          <input type="hidden" name="CHILDCB780ROW65" id="CHILDCB780ROW65" value="241892">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW65DATA22466" id="OLDCB780ROW65DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW65DATA22466" name="SPAN780ROW65DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW65DATA22466" name="CB780ROW65DATA22466" tabindex="4090" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW65DATA22466" name="CB780ROW65DATA22466" tabindex="4090" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW65DATA22466" name="CB780ROW65DATA22466" tabindex="4090" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW65DATA3869" id="OLDCB780ROW65DATA3869" value="Byrd, Ryan">
            Byrd, Ryan
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW65DATA28817" id="OLDCB780ROW65DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW65DATA29712" id="OLDCB780ROW65DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW65DATA29712" name="CB780ROW65DATA29712" tabindex="4120" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW65DATA3871" id="OLDCB780ROW65DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW65DATA3871" name="CB780ROW65DATA3871" tabindex="4130" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW65DATA3870" id="OLDCB780ROW65DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW65DATE387017" name="CB780ROW65DATE387017" tabindex="4140" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4140" onclick="cal.select(window.easyform.CB780ROW65DATE387017,'CB780ROW65DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW65DATE387017.value); return false;" name="CB780ROW65DATE387017X" id="CB780ROW65DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW65DATE387017I" id="CB780ROW65DATE387017I"></a><span id="DIVCB780ROW65TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW65TIME387017" name="CB780ROW65TIME387017" tabindex="4140" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW65AMPM387017" name="CB780ROW65AMPM387017" class="form-control" tabindex="4140" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW66" id="LINKCB780ROW66" value="1535">
          <input type="hidden" name="CHILDCB780ROW66" id="CHILDCB780ROW66" value="241836">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW66DATA22466" id="OLDCB780ROW66DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW66DATA22466" name="SPAN780ROW66DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW66DATA22466" name="CB780ROW66DATA22466" tabindex="4150" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW66DATA22466" name="CB780ROW66DATA22466" tabindex="4150" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW66DATA22466" name="CB780ROW66DATA22466" tabindex="4150" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW66DATA3869" id="OLDCB780ROW66DATA3869" value="Chakarvarty, Mridul">
            Chakarvarty, Mridul
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW66DATA28817" id="OLDCB780ROW66DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW66DATA29712" id="OLDCB780ROW66DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW66DATA29712" name="CB780ROW66DATA29712" tabindex="4180" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW66DATA3871" id="OLDCB780ROW66DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW66DATA3871" name="CB780ROW66DATA3871" tabindex="4190" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW66DATA3870" id="OLDCB780ROW66DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW66DATE387017" name="CB780ROW66DATE387017" tabindex="4200" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4200" onclick="cal.select(window.easyform.CB780ROW66DATE387017,'CB780ROW66DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW66DATE387017.value); return false;" name="CB780ROW66DATE387017X" id="CB780ROW66DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW66DATE387017I" id="CB780ROW66DATE387017I"></a><span id="DIVCB780ROW66TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW66TIME387017" name="CB780ROW66TIME387017" tabindex="4200" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW66AMPM387017" name="CB780ROW66AMPM387017" class="form-control" tabindex="4200" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW67" id="LINKCB780ROW67" value="630">
          <input type="hidden" name="CHILDCB780ROW67" id="CHILDCB780ROW67" value="241786">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW67DATA22466" id="OLDCB780ROW67DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW67DATA22466" name="SPAN780ROW67DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW67DATA22466" name="CB780ROW67DATA22466" tabindex="4210" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW67DATA22466" name="CB780ROW67DATA22466" tabindex="4210" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW67DATA22466" name="CB780ROW67DATA22466" tabindex="4210" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW67DATA3869" id="OLDCB780ROW67DATA3869" value="Corkill, Cynthia">
            Corkill, Cynthia
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW67DATA28817" id="OLDCB780ROW67DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW67DATA29712" id="OLDCB780ROW67DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW67DATA29712" name="CB780ROW67DATA29712" tabindex="4240" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW67DATA3871" id="OLDCB780ROW67DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW67DATA3871" name="CB780ROW67DATA3871" tabindex="4250" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW67DATA3870" id="OLDCB780ROW67DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW67DATE387017" name="CB780ROW67DATE387017" tabindex="4260" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4260" onclick="cal.select(window.easyform.CB780ROW67DATE387017,'CB780ROW67DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW67DATE387017.value); return false;" name="CB780ROW67DATE387017X" id="CB780ROW67DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW67DATE387017I" id="CB780ROW67DATE387017I"></a><span id="DIVCB780ROW67TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW67TIME387017" name="CB780ROW67TIME387017" tabindex="4260" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW67AMPM387017" name="CB780ROW67AMPM387017" class="form-control" tabindex="4260" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW68" id="LINKCB780ROW68" value="1259">
          <input type="hidden" name="CHILDCB780ROW68" id="CHILDCB780ROW68" value="241735">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW68DATA22466" id="OLDCB780ROW68DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW68DATA22466" name="SPAN780ROW68DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW68DATA22466" name="CB780ROW68DATA22466" tabindex="4270" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW68DATA22466" name="CB780ROW68DATA22466" tabindex="4270" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW68DATA22466" name="CB780ROW68DATA22466" tabindex="4270" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW68DATA3869" id="OLDCB780ROW68DATA3869" value="Daru, Bhargav">
            Daru, Bhargav
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW68DATA28817" id="OLDCB780ROW68DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW68DATA29712" id="OLDCB780ROW68DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW68DATA29712" name="CB780ROW68DATA29712" tabindex="4300" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW68DATA3871" id="OLDCB780ROW68DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW68DATA3871" name="CB780ROW68DATA3871" tabindex="4310" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW68DATA3870" id="OLDCB780ROW68DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW68DATE387017" name="CB780ROW68DATE387017" tabindex="4320" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4320" onclick="cal.select(window.easyform.CB780ROW68DATE387017,'CB780ROW68DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW68DATE387017.value); return false;" name="CB780ROW68DATE387017X" id="CB780ROW68DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW68DATE387017I" id="CB780ROW68DATE387017I"></a><span id="DIVCB780ROW68TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW68TIME387017" name="CB780ROW68TIME387017" tabindex="4320" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW68AMPM387017" name="CB780ROW68AMPM387017" class="form-control" tabindex="4320" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW69" id="LINKCB780ROW69" value="984">
          <input type="hidden" name="CHILDCB780ROW69" id="CHILDCB780ROW69" value="241733">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW69DATA22466" id="OLDCB780ROW69DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW69DATA22466" name="SPAN780ROW69DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW69DATA22466" name="CB780ROW69DATA22466" tabindex="4330" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW69DATA22466" name="CB780ROW69DATA22466" tabindex="4330" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW69DATA22466" name="CB780ROW69DATA22466" tabindex="4330" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW69DATA3869" id="OLDCB780ROW69DATA3869" value="De Los Santos Garza, Andrea">
            De Los Santos Garza, Andrea
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW69DATA28817" id="OLDCB780ROW69DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW69DATA29712" id="OLDCB780ROW69DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW69DATA29712" name="CB780ROW69DATA29712" tabindex="4360" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW69DATA3871" id="OLDCB780ROW69DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW69DATA3871" name="CB780ROW69DATA3871" tabindex="4370" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW69DATA3870" id="OLDCB780ROW69DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW69DATE387017" name="CB780ROW69DATE387017" tabindex="4380" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4380" onclick="cal.select(window.easyform.CB780ROW69DATE387017,'CB780ROW69DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW69DATE387017.value); return false;" name="CB780ROW69DATE387017X" id="CB780ROW69DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW69DATE387017I" id="CB780ROW69DATE387017I"></a><span id="DIVCB780ROW69TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW69TIME387017" name="CB780ROW69TIME387017" tabindex="4380" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW69AMPM387017" name="CB780ROW69AMPM387017" class="form-control" tabindex="4380" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW70" id="LINKCB780ROW70" value="965">
          <input type="hidden" name="CHILDCB780ROW70" id="CHILDCB780ROW70" value="241796">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW70DATA22466" id="OLDCB780ROW70DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW70DATA22466" name="SPAN780ROW70DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW70DATA22466" name="CB780ROW70DATA22466" tabindex="4390" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW70DATA22466" name="CB780ROW70DATA22466" tabindex="4390" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW70DATA22466" name="CB780ROW70DATA22466" tabindex="4390" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW70DATA3869" id="OLDCB780ROW70DATA3869" value="De Los Santos Garza, Leo  Jr.">
            De Los Santos Garza, Leo  Jr.
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW70DATA28817" id="OLDCB780ROW70DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW70DATA29712" id="OLDCB780ROW70DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW70DATA29712" name="CB780ROW70DATA29712" tabindex="4420" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW70DATA3871" id="OLDCB780ROW70DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW70DATA3871" name="CB780ROW70DATA3871" tabindex="4430" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW70DATA3870" id="OLDCB780ROW70DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW70DATE387017" name="CB780ROW70DATE387017" tabindex="4440" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4440" onclick="cal.select(window.easyform.CB780ROW70DATE387017,'CB780ROW70DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW70DATE387017.value); return false;" name="CB780ROW70DATE387017X" id="CB780ROW70DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW70DATE387017I" id="CB780ROW70DATE387017I"></a><span id="DIVCB780ROW70TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW70TIME387017" name="CB780ROW70TIME387017" tabindex="4440" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW70AMPM387017" name="CB780ROW70AMPM387017" class="form-control" tabindex="4440" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW71" id="LINKCB780ROW71" value="978">
          <input type="hidden" name="CHILDCB780ROW71" id="CHILDCB780ROW71" value="241900">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW71DATA22466" id="OLDCB780ROW71DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW71DATA22466" name="SPAN780ROW71DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW71DATA22466" name="CB780ROW71DATA22466" tabindex="4450" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW71DATA22466" name="CB780ROW71DATA22466" tabindex="4450" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW71DATA22466" name="CB780ROW71DATA22466" tabindex="4450" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW71DATA3869" id="OLDCB780ROW71DATA3869" value="De Los Santos Tamez, Diego">
            De Los Santos Tamez, Diego
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW71DATA28817" id="OLDCB780ROW71DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW71DATA29712" id="OLDCB780ROW71DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW71DATA29712" name="CB780ROW71DATA29712" tabindex="4480" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW71DATA3871" id="OLDCB780ROW71DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW71DATA3871" name="CB780ROW71DATA3871" tabindex="4490" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW71DATA3870" id="OLDCB780ROW71DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW71DATE387017" name="CB780ROW71DATE387017" tabindex="4500" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4500" onclick="cal.select(window.easyform.CB780ROW71DATE387017,'CB780ROW71DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW71DATE387017.value); return false;" name="CB780ROW71DATE387017X" id="CB780ROW71DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW71DATE387017I" id="CB780ROW71DATE387017I"></a><span id="DIVCB780ROW71TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW71TIME387017" name="CB780ROW71TIME387017" tabindex="4500" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW71AMPM387017" name="CB780ROW71AMPM387017" class="form-control" tabindex="4500" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW72" id="LINKCB780ROW72" value="1135">
          <input type="hidden" name="CHILDCB780ROW72" id="CHILDCB780ROW72" value="241869">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW72DATA22466" id="OLDCB780ROW72DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW72DATA22466" name="SPAN780ROW72DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW72DATA22466" name="CB780ROW72DATA22466" tabindex="4510" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW72DATA22466" name="CB780ROW72DATA22466" tabindex="4510" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW72DATA22466" name="CB780ROW72DATA22466" tabindex="4510" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW72DATA3869" id="OLDCB780ROW72DATA3869" value="DeMartini, Emilia">
            DeMartini, Emilia
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW72DATA28817" id="OLDCB780ROW72DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW72DATA29712" id="OLDCB780ROW72DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW72DATA29712" name="CB780ROW72DATA29712" tabindex="4540" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW72DATA3871" id="OLDCB780ROW72DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW72DATA3871" name="CB780ROW72DATA3871" tabindex="4550" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW72DATA3870" id="OLDCB780ROW72DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW72DATE387017" name="CB780ROW72DATE387017" tabindex="4560" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4560" onclick="cal.select(window.easyform.CB780ROW72DATE387017,'CB780ROW72DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW72DATE387017.value); return false;" name="CB780ROW72DATE387017X" id="CB780ROW72DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW72DATE387017I" id="CB780ROW72DATE387017I"></a><span id="DIVCB780ROW72TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW72TIME387017" name="CB780ROW72TIME387017" tabindex="4560" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW72AMPM387017" name="CB780ROW72AMPM387017" class="form-control" tabindex="4560" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW73" id="LINKCB780ROW73" value="1139">
          <input type="hidden" name="CHILDCB780ROW73" id="CHILDCB780ROW73" value="241752">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW73DATA22466" id="OLDCB780ROW73DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW73DATA22466" name="SPAN780ROW73DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW73DATA22466" name="CB780ROW73DATA22466" tabindex="4570" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW73DATA22466" name="CB780ROW73DATA22466" tabindex="4570" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW73DATA22466" name="CB780ROW73DATA22466" tabindex="4570" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW73DATA3869" id="OLDCB780ROW73DATA3869" value="DeMartini, Trevor">
            DeMartini, Trevor
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW73DATA28817" id="OLDCB780ROW73DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW73DATA29712" id="OLDCB780ROW73DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW73DATA29712" name="CB780ROW73DATA29712" tabindex="4600" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW73DATA3871" id="OLDCB780ROW73DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW73DATA3871" name="CB780ROW73DATA3871" tabindex="4610" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW73DATA3870" id="OLDCB780ROW73DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW73DATE387017" name="CB780ROW73DATE387017" tabindex="4620" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4620" onclick="cal.select(window.easyform.CB780ROW73DATE387017,'CB780ROW73DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW73DATE387017.value); return false;" name="CB780ROW73DATE387017X" id="CB780ROW73DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW73DATE387017I" id="CB780ROW73DATE387017I"></a><span id="DIVCB780ROW73TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW73TIME387017" name="CB780ROW73TIME387017" tabindex="4620" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW73AMPM387017" name="CB780ROW73AMPM387017" class="form-control" tabindex="4620" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW74" id="LINKCB780ROW74" value="1136">
          <input type="hidden" name="CHILDCB780ROW74" id="CHILDCB780ROW74" value="241761">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW74DATA22466" id="OLDCB780ROW74DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW74DATA22466" name="SPAN780ROW74DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW74DATA22466" name="CB780ROW74DATA22466" tabindex="4630" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW74DATA22466" name="CB780ROW74DATA22466" tabindex="4630" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW74DATA22466" name="CB780ROW74DATA22466" tabindex="4630" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW74DATA3869" id="OLDCB780ROW74DATA3869" value="DeMartini, Vincent">
            DeMartini, Vincent
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW74DATA28817" id="OLDCB780ROW74DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW74DATA29712" id="OLDCB780ROW74DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW74DATA29712" name="CB780ROW74DATA29712" tabindex="4660" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW74DATA3871" id="OLDCB780ROW74DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW74DATA3871" name="CB780ROW74DATA3871" tabindex="4670" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW74DATA3870" id="OLDCB780ROW74DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW74DATE387017" name="CB780ROW74DATE387017" tabindex="4680" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4680" onclick="cal.select(window.easyform.CB780ROW74DATE387017,'CB780ROW74DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW74DATE387017.value); return false;" name="CB780ROW74DATE387017X" id="CB780ROW74DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW74DATE387017I" id="CB780ROW74DATE387017I"></a><span id="DIVCB780ROW74TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW74TIME387017" name="CB780ROW74TIME387017" tabindex="4680" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW74AMPM387017" name="CB780ROW74AMPM387017" class="form-control" tabindex="4680" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW75" id="LINKCB780ROW75" value="1241">
          <input type="hidden" name="CHILDCB780ROW75" id="CHILDCB780ROW75" value="241873">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW75DATA22466" id="OLDCB780ROW75DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW75DATA22466" name="SPAN780ROW75DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW75DATA22466" name="CB780ROW75DATA22466" tabindex="4690" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW75DATA22466" name="CB780ROW75DATA22466" tabindex="4690" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW75DATA22466" name="CB780ROW75DATA22466" tabindex="4690" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW75DATA3869" id="OLDCB780ROW75DATA3869" value="Dennis, Khoi">
            Dennis, Khoi
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW75DATA28817" id="OLDCB780ROW75DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW75DATA29712" id="OLDCB780ROW75DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW75DATA29712" name="CB780ROW75DATA29712" tabindex="4720" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW75DATA3871" id="OLDCB780ROW75DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW75DATA3871" name="CB780ROW75DATA3871" tabindex="4730" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW75DATA3870" id="OLDCB780ROW75DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW75DATE387017" name="CB780ROW75DATE387017" tabindex="4740" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4740" onclick="cal.select(window.easyform.CB780ROW75DATE387017,'CB780ROW75DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW75DATE387017.value); return false;" name="CB780ROW75DATE387017X" id="CB780ROW75DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW75DATE387017I" id="CB780ROW75DATE387017I"></a><span id="DIVCB780ROW75TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW75TIME387017" name="CB780ROW75TIME387017" tabindex="4740" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW75AMPM387017" name="CB780ROW75AMPM387017" class="form-control" tabindex="4740" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW76" id="LINKCB780ROW76" value="1246">
          <input type="hidden" name="CHILDCB780ROW76" id="CHILDCB780ROW76" value="241809">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW76DATA22466" id="OLDCB780ROW76DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW76DATA22466" name="SPAN780ROW76DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW76DATA22466" name="CB780ROW76DATA22466" tabindex="4750" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW76DATA22466" name="CB780ROW76DATA22466" tabindex="4750" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW76DATA22466" name="CB780ROW76DATA22466" tabindex="4750" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW76DATA3869" id="OLDCB780ROW76DATA3869" value="Dennis, Michael">
            Dennis, Michael
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW76DATA28817" id="OLDCB780ROW76DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW76DATA29712" id="OLDCB780ROW76DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW76DATA29712" name="CB780ROW76DATA29712" tabindex="4780" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW76DATA3871" id="OLDCB780ROW76DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW76DATA3871" name="CB780ROW76DATA3871" tabindex="4790" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW76DATA3870" id="OLDCB780ROW76DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW76DATE387017" name="CB780ROW76DATE387017" tabindex="4800" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4800" onclick="cal.select(window.easyform.CB780ROW76DATE387017,'CB780ROW76DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW76DATE387017.value); return false;" name="CB780ROW76DATE387017X" id="CB780ROW76DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW76DATE387017I" id="CB780ROW76DATE387017I"></a><span id="DIVCB780ROW76TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW76TIME387017" name="CB780ROW76TIME387017" tabindex="4800" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW76AMPM387017" name="CB780ROW76AMPM387017" class="form-control" tabindex="4800" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW77" id="LINKCB780ROW77" value="614">
          <input type="hidden" name="CHILDCB780ROW77" id="CHILDCB780ROW77" value="241875">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW77DATA22466" id="OLDCB780ROW77DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW77DATA22466" name="SPAN780ROW77DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW77DATA22466" name="CB780ROW77DATA22466" tabindex="4810" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW77DATA22466" name="CB780ROW77DATA22466" tabindex="4810" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW77DATA22466" name="CB780ROW77DATA22466" tabindex="4810" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW77DATA3869" id="OLDCB780ROW77DATA3869" value="Desouky, Noura">
            Desouky, Noura
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW77DATA28817" id="OLDCB780ROW77DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW77DATA29712" id="OLDCB780ROW77DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW77DATA29712" name="CB780ROW77DATA29712" tabindex="4840" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW77DATA3871" id="OLDCB780ROW77DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW77DATA3871" name="CB780ROW77DATA3871" tabindex="4850" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW77DATA3870" id="OLDCB780ROW77DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW77DATE387017" name="CB780ROW77DATE387017" tabindex="4860" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4860" onclick="cal.select(window.easyform.CB780ROW77DATE387017,'CB780ROW77DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW77DATE387017.value); return false;" name="CB780ROW77DATE387017X" id="CB780ROW77DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW77DATE387017I" id="CB780ROW77DATE387017I"></a><span id="DIVCB780ROW77TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW77TIME387017" name="CB780ROW77TIME387017" tabindex="4860" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW77AMPM387017" name="CB780ROW77AMPM387017" class="form-control" tabindex="4860" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW78" id="LINKCB780ROW78" value="1268">
          <input type="hidden" name="CHILDCB780ROW78" id="CHILDCB780ROW78" value="241782">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW78DATA22466" id="OLDCB780ROW78DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW78DATA22466" name="SPAN780ROW78DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW78DATA22466" name="CB780ROW78DATA22466" tabindex="4870" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW78DATA22466" name="CB780ROW78DATA22466" tabindex="4870" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW78DATA22466" name="CB780ROW78DATA22466" tabindex="4870" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW78DATA3869" id="OLDCB780ROW78DATA3869" value="Diaz, Adam">
            Diaz, Adam
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW78DATA28817" id="OLDCB780ROW78DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW78DATA29712" id="OLDCB780ROW78DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW78DATA29712" name="CB780ROW78DATA29712" tabindex="4900" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW78DATA3871" id="OLDCB780ROW78DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW78DATA3871" name="CB780ROW78DATA3871" tabindex="4910" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW78DATA3870" id="OLDCB780ROW78DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW78DATE387017" name="CB780ROW78DATE387017" tabindex="4920" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4920" onclick="cal.select(window.easyform.CB780ROW78DATE387017,'CB780ROW78DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW78DATE387017.value); return false;" name="CB780ROW78DATE387017X" id="CB780ROW78DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW78DATE387017I" id="CB780ROW78DATE387017I"></a><span id="DIVCB780ROW78TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW78TIME387017" name="CB780ROW78TIME387017" tabindex="4920" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW78AMPM387017" name="CB780ROW78AMPM387017" class="form-control" tabindex="4920" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW79" id="LINKCB780ROW79" value="1266">
          <input type="hidden" name="CHILDCB780ROW79" id="CHILDCB780ROW79" value="241821">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW79DATA22466" id="OLDCB780ROW79DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW79DATA22466" name="SPAN780ROW79DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW79DATA22466" name="CB780ROW79DATA22466" tabindex="4930" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW79DATA22466" name="CB780ROW79DATA22466" tabindex="4930" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW79DATA22466" name="CB780ROW79DATA22466" tabindex="4930" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW79DATA3869" id="OLDCB780ROW79DATA3869" value="Diaz, Winslow">
            Diaz, Winslow
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW79DATA28817" id="OLDCB780ROW79DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW79DATA29712" id="OLDCB780ROW79DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW79DATA29712" name="CB780ROW79DATA29712" tabindex="4960" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW79DATA3871" id="OLDCB780ROW79DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW79DATA3871" name="CB780ROW79DATA3871" tabindex="4970" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW79DATA3870" id="OLDCB780ROW79DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW79DATE387017" name="CB780ROW79DATE387017" tabindex="4980" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="4980" onclick="cal.select(window.easyform.CB780ROW79DATE387017,'CB780ROW79DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW79DATE387017.value); return false;" name="CB780ROW79DATE387017X" id="CB780ROW79DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW79DATE387017I" id="CB780ROW79DATE387017I"></a><span id="DIVCB780ROW79TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW79TIME387017" name="CB780ROW79TIME387017" tabindex="4980" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW79AMPM387017" name="CB780ROW79AMPM387017" class="form-control" tabindex="4980" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW80" id="LINKCB780ROW80" value="562">
          <input type="hidden" name="CHILDCB780ROW80" id="CHILDCB780ROW80" value="241811">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW80DATA22466" id="OLDCB780ROW80DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW80DATA22466" name="SPAN780ROW80DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW80DATA22466" name="CB780ROW80DATA22466" tabindex="4990" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW80DATA22466" name="CB780ROW80DATA22466" tabindex="4990" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW80DATA22466" name="CB780ROW80DATA22466" tabindex="4990" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW80DATA3869" id="OLDCB780ROW80DATA3869" value="Dranguet, Benjamin">
            Dranguet, Benjamin
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW80DATA28817" id="OLDCB780ROW80DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW80DATA29712" id="OLDCB780ROW80DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW80DATA29712" name="CB780ROW80DATA29712" tabindex="5020" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW80DATA3871" id="OLDCB780ROW80DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW80DATA3871" name="CB780ROW80DATA3871" tabindex="5030" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW80DATA3870" id="OLDCB780ROW80DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW80DATE387017" name="CB780ROW80DATE387017" tabindex="5040" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5040" onclick="cal.select(window.easyform.CB780ROW80DATE387017,'CB780ROW80DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW80DATE387017.value); return false;" name="CB780ROW80DATE387017X" id="CB780ROW80DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW80DATE387017I" id="CB780ROW80DATE387017I"></a><span id="DIVCB780ROW80TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW80TIME387017" name="CB780ROW80TIME387017" tabindex="5040" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW80AMPM387017" name="CB780ROW80AMPM387017" class="form-control" tabindex="5040" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW81" id="LINKCB780ROW81" value="1281">
          <input type="hidden" name="CHILDCB780ROW81" id="CHILDCB780ROW81" value="241865">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW81DATA22466" id="OLDCB780ROW81DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW81DATA22466" name="SPAN780ROW81DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW81DATA22466" name="CB780ROW81DATA22466" tabindex="5050" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW81DATA22466" name="CB780ROW81DATA22466" tabindex="5050" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW81DATA22466" name="CB780ROW81DATA22466" tabindex="5050" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW81DATA3869" id="OLDCB780ROW81DATA3869" value="Duryee, David">
            Duryee, David
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW81DATA28817" id="OLDCB780ROW81DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW81DATA29712" id="OLDCB780ROW81DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW81DATA29712" name="CB780ROW81DATA29712" tabindex="5080" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW81DATA3871" id="OLDCB780ROW81DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW81DATA3871" name="CB780ROW81DATA3871" tabindex="5090" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW81DATA3870" id="OLDCB780ROW81DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW81DATE387017" name="CB780ROW81DATE387017" tabindex="5100" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5100" onclick="cal.select(window.easyform.CB780ROW81DATE387017,'CB780ROW81DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW81DATE387017.value); return false;" name="CB780ROW81DATE387017X" id="CB780ROW81DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW81DATE387017I" id="CB780ROW81DATE387017I"></a><span id="DIVCB780ROW81TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW81TIME387017" name="CB780ROW81TIME387017" tabindex="5100" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW81AMPM387017" name="CB780ROW81AMPM387017" class="form-control" tabindex="5100" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW82" id="LINKCB780ROW82" value="654">
          <input type="hidden" name="CHILDCB780ROW82" id="CHILDCB780ROW82" value="241871">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW82DATA22466" id="OLDCB780ROW82DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW82DATA22466" name="SPAN780ROW82DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW82DATA22466" name="CB780ROW82DATA22466" tabindex="5110" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW82DATA22466" name="CB780ROW82DATA22466" tabindex="5110" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW82DATA22466" name="CB780ROW82DATA22466" tabindex="5110" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW82DATA3869" id="OLDCB780ROW82DATA3869" value="Elrakabawy, Erin">
            Elrakabawy, Erin
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW82DATA28817" id="OLDCB780ROW82DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW82DATA29712" id="OLDCB780ROW82DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW82DATA29712" name="CB780ROW82DATA29712" tabindex="5140" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW82DATA3871" id="OLDCB780ROW82DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW82DATA3871" name="CB780ROW82DATA3871" tabindex="5150" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW82DATA3870" id="OLDCB780ROW82DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW82DATE387017" name="CB780ROW82DATE387017" tabindex="5160" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5160" onclick="cal.select(window.easyform.CB780ROW82DATE387017,'CB780ROW82DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW82DATE387017.value); return false;" name="CB780ROW82DATE387017X" id="CB780ROW82DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW82DATE387017I" id="CB780ROW82DATE387017I"></a><span id="DIVCB780ROW82TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW82TIME387017" name="CB780ROW82TIME387017" tabindex="5160" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW82AMPM387017" name="CB780ROW82AMPM387017" class="form-control" tabindex="5160" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW83" id="LINKCB780ROW83" value="1539">
          <input type="hidden" name="CHILDCB780ROW83" id="CHILDCB780ROW83" value="242853">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW83DATA22466" id="OLDCB780ROW83DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW83DATA22466" name="SPAN780ROW83DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW83DATA22466" name="CB780ROW83DATA22466" tabindex="5170" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW83DATA22466" name="CB780ROW83DATA22466" tabindex="5170" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW83DATA22466" name="CB780ROW83DATA22466" tabindex="5170" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW83DATA3869" id="OLDCB780ROW83DATA3869" value="Espejel, Dean">
            Espejel, Dean
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW83DATA28817" id="OLDCB780ROW83DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW83DATA29712" id="OLDCB780ROW83DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW83DATA29712" name="CB780ROW83DATA29712" tabindex="5200" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW83DATA3871" id="OLDCB780ROW83DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW83DATA3871" name="CB780ROW83DATA3871" tabindex="5210" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW83DATA3870" id="OLDCB780ROW83DATA3870" value="08/18/2026 8:01 PM">
            <input type="text" class="form-control" id="CB780ROW83DATE387017" name="CB780ROW83DATE387017" tabindex="5220" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/18/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5220" onclick="cal.select(window.easyform.CB780ROW83DATE387017,'CB780ROW83DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW83DATE387017.value); return false;" name="CB780ROW83DATE387017X" id="CB780ROW83DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW83DATE387017I" id="CB780ROW83DATE387017I"></a><span id="DIVCB780ROW83TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW83TIME387017" name="CB780ROW83TIME387017" tabindex="5220" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="8:01"><select id="CB780ROW83AMPM387017" name="CB780ROW83AMPM387017" class="form-control" tabindex="5220" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW84" id="LINKCB780ROW84" value="888">
          <input type="hidden" name="CHILDCB780ROW84" id="CHILDCB780ROW84" value="241832">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW84DATA22466" id="OLDCB780ROW84DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW84DATA22466" name="SPAN780ROW84DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW84DATA22466" name="CB780ROW84DATA22466" tabindex="5230" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW84DATA22466" name="CB780ROW84DATA22466" tabindex="5230" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW84DATA22466" name="CB780ROW84DATA22466" tabindex="5230" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW84DATA3869" id="OLDCB780ROW84DATA3869" value="Gaete, Holly">
            Gaete, Holly
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW84DATA28817" id="OLDCB780ROW84DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW84DATA29712" id="OLDCB780ROW84DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW84DATA29712" name="CB780ROW84DATA29712" tabindex="5260" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW84DATA3871" id="OLDCB780ROW84DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW84DATA3871" name="CB780ROW84DATA3871" tabindex="5270" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW84DATA3870" id="OLDCB780ROW84DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW84DATE387017" name="CB780ROW84DATE387017" tabindex="5280" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5280" onclick="cal.select(window.easyform.CB780ROW84DATE387017,'CB780ROW84DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW84DATE387017.value); return false;" name="CB780ROW84DATE387017X" id="CB780ROW84DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW84DATE387017I" id="CB780ROW84DATE387017I"></a><span id="DIVCB780ROW84TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW84TIME387017" name="CB780ROW84TIME387017" tabindex="5280" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW84AMPM387017" name="CB780ROW84AMPM387017" class="form-control" tabindex="5280" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW85" id="LINKCB780ROW85" value="886">
          <input type="hidden" name="CHILDCB780ROW85" id="CHILDCB780ROW85" value="241861">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW85DATA22466" id="OLDCB780ROW85DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW85DATA22466" name="SPAN780ROW85DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW85DATA22466" name="CB780ROW85DATA22466" tabindex="5290" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW85DATA22466" name="CB780ROW85DATA22466" tabindex="5290" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW85DATA22466" name="CB780ROW85DATA22466" tabindex="5290" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW85DATA3869" id="OLDCB780ROW85DATA3869" value="Gaete, Lincoln">
            Gaete, Lincoln
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW85DATA28817" id="OLDCB780ROW85DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW85DATA29712" id="OLDCB780ROW85DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW85DATA29712" name="CB780ROW85DATA29712" tabindex="5320" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW85DATA3871" id="OLDCB780ROW85DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW85DATA3871" name="CB780ROW85DATA3871" tabindex="5330" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW85DATA3870" id="OLDCB780ROW85DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW85DATE387017" name="CB780ROW85DATE387017" tabindex="5340" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5340" onclick="cal.select(window.easyform.CB780ROW85DATE387017,'CB780ROW85DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW85DATE387017.value); return false;" name="CB780ROW85DATE387017X" id="CB780ROW85DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW85DATE387017I" id="CB780ROW85DATE387017I"></a><span id="DIVCB780ROW85TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW85TIME387017" name="CB780ROW85TIME387017" tabindex="5340" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW85AMPM387017" name="CB780ROW85AMPM387017" class="form-control" tabindex="5340" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW86" id="LINKCB780ROW86" value="893">
          <input type="hidden" name="CHILDCB780ROW86" id="CHILDCB780ROW86" value="241772">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW86DATA22466" id="OLDCB780ROW86DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW86DATA22466" name="SPAN780ROW86DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW86DATA22466" name="CB780ROW86DATA22466" tabindex="5350" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW86DATA22466" name="CB780ROW86DATA22466" tabindex="5350" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW86DATA22466" name="CB780ROW86DATA22466" tabindex="5350" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW86DATA3869" id="OLDCB780ROW86DATA3869" value="Galdo, Anne">
            Galdo, Anne
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW86DATA28817" id="OLDCB780ROW86DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW86DATA29712" id="OLDCB780ROW86DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW86DATA29712" name="CB780ROW86DATA29712" tabindex="5380" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW86DATA3871" id="OLDCB780ROW86DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW86DATA3871" name="CB780ROW86DATA3871" tabindex="5390" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW86DATA3870" id="OLDCB780ROW86DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW86DATE387017" name="CB780ROW86DATE387017" tabindex="5400" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5400" onclick="cal.select(window.easyform.CB780ROW86DATE387017,'CB780ROW86DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW86DATE387017.value); return false;" name="CB780ROW86DATE387017X" id="CB780ROW86DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW86DATE387017I" id="CB780ROW86DATE387017I"></a><span id="DIVCB780ROW86TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW86TIME387017" name="CB780ROW86TIME387017" tabindex="5400" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW86AMPM387017" name="CB780ROW86AMPM387017" class="form-control" tabindex="5400" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW87" id="LINKCB780ROW87" value="1088">
          <input type="hidden" name="CHILDCB780ROW87" id="CHILDCB780ROW87" value="241788">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW87DATA22466" id="OLDCB780ROW87DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW87DATA22466" name="SPAN780ROW87DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW87DATA22466" name="CB780ROW87DATA22466" tabindex="5410" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW87DATA22466" name="CB780ROW87DATA22466" tabindex="5410" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW87DATA22466" name="CB780ROW87DATA22466" tabindex="5410" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW87DATA3869" id="OLDCB780ROW87DATA3869" value="Galdo, Henry">
            Galdo, Henry
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW87DATA28817" id="OLDCB780ROW87DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW87DATA29712" id="OLDCB780ROW87DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW87DATA29712" name="CB780ROW87DATA29712" tabindex="5440" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW87DATA3871" id="OLDCB780ROW87DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW87DATA3871" name="CB780ROW87DATA3871" tabindex="5450" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW87DATA3870" id="OLDCB780ROW87DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW87DATE387017" name="CB780ROW87DATE387017" tabindex="5460" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5460" onclick="cal.select(window.easyform.CB780ROW87DATE387017,'CB780ROW87DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW87DATE387017.value); return false;" name="CB780ROW87DATE387017X" id="CB780ROW87DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW87DATE387017I" id="CB780ROW87DATE387017I"></a><span id="DIVCB780ROW87TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW87TIME387017" name="CB780ROW87TIME387017" tabindex="5460" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW87AMPM387017" name="CB780ROW87AMPM387017" class="form-control" tabindex="5460" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW88" id="LINKCB780ROW88" value="1114">
          <input type="hidden" name="CHILDCB780ROW88" id="CHILDCB780ROW88" value="241806">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW88DATA22466" id="OLDCB780ROW88DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW88DATA22466" name="SPAN780ROW88DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW88DATA22466" name="CB780ROW88DATA22466" tabindex="5470" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW88DATA22466" name="CB780ROW88DATA22466" tabindex="5470" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW88DATA22466" name="CB780ROW88DATA22466" tabindex="5470" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW88DATA3869" id="OLDCB780ROW88DATA3869" value="Gibson, Charleston">
            Gibson, Charleston
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW88DATA28817" id="OLDCB780ROW88DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW88DATA29712" id="OLDCB780ROW88DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW88DATA29712" name="CB780ROW88DATA29712" tabindex="5500" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW88DATA3871" id="OLDCB780ROW88DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW88DATA3871" name="CB780ROW88DATA3871" tabindex="5510" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW88DATA3870" id="OLDCB780ROW88DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW88DATE387017" name="CB780ROW88DATE387017" tabindex="5520" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5520" onclick="cal.select(window.easyform.CB780ROW88DATE387017,'CB780ROW88DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW88DATE387017.value); return false;" name="CB780ROW88DATE387017X" id="CB780ROW88DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW88DATE387017I" id="CB780ROW88DATE387017I"></a><span id="DIVCB780ROW88TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW88TIME387017" name="CB780ROW88TIME387017" tabindex="5520" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW88AMPM387017" name="CB780ROW88AMPM387017" class="form-control" tabindex="5520" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW89" id="LINKCB780ROW89" value="1123">
          <input type="hidden" name="CHILDCB780ROW89" id="CHILDCB780ROW89" value="241817">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW89DATA22466" id="OLDCB780ROW89DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW89DATA22466" name="SPAN780ROW89DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW89DATA22466" name="CB780ROW89DATA22466" tabindex="5530" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW89DATA22466" name="CB780ROW89DATA22466" tabindex="5530" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW89DATA22466" name="CB780ROW89DATA22466" tabindex="5530" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW89DATA3869" id="OLDCB780ROW89DATA3869" value="Gibson, Steven">
            Gibson, Steven
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW89DATA28817" id="OLDCB780ROW89DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW89DATA29712" id="OLDCB780ROW89DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW89DATA29712" name="CB780ROW89DATA29712" tabindex="5560" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW89DATA3871" id="OLDCB780ROW89DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW89DATA3871" name="CB780ROW89DATA3871" tabindex="5570" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW89DATA3870" id="OLDCB780ROW89DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW89DATE387017" name="CB780ROW89DATE387017" tabindex="5580" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5580" onclick="cal.select(window.easyform.CB780ROW89DATE387017,'CB780ROW89DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW89DATE387017.value); return false;" name="CB780ROW89DATE387017X" id="CB780ROW89DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW89DATE387017I" id="CB780ROW89DATE387017I"></a><span id="DIVCB780ROW89TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW89TIME387017" name="CB780ROW89TIME387017" tabindex="5580" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW89AMPM387017" name="CB780ROW89AMPM387017" class="form-control" tabindex="5580" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW90" id="LINKCB780ROW90" value="1187">
          <input type="hidden" name="CHILDCB780ROW90" id="CHILDCB780ROW90" value="241890">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW90DATA22466" id="OLDCB780ROW90DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW90DATA22466" name="SPAN780ROW90DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW90DATA22466" name="CB780ROW90DATA22466" tabindex="5590" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW90DATA22466" name="CB780ROW90DATA22466" tabindex="5590" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW90DATA22466" name="CB780ROW90DATA22466" tabindex="5590" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW90DATA3869" id="OLDCB780ROW90DATA3869" value="Gurrola, Benjamin">
            Gurrola, Benjamin
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW90DATA28817" id="OLDCB780ROW90DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW90DATA29712" id="OLDCB780ROW90DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW90DATA29712" name="CB780ROW90DATA29712" tabindex="5620" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW90DATA3871" id="OLDCB780ROW90DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW90DATA3871" name="CB780ROW90DATA3871" tabindex="5630" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW90DATA3870" id="OLDCB780ROW90DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW90DATE387017" name="CB780ROW90DATE387017" tabindex="5640" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5640" onclick="cal.select(window.easyform.CB780ROW90DATE387017,'CB780ROW90DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW90DATE387017.value); return false;" name="CB780ROW90DATE387017X" id="CB780ROW90DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW90DATE387017I" id="CB780ROW90DATE387017I"></a><span id="DIVCB780ROW90TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW90TIME387017" name="CB780ROW90TIME387017" tabindex="5640" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW90AMPM387017" name="CB780ROW90AMPM387017" class="form-control" tabindex="5640" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW91" id="LINKCB780ROW91" value="1204">
          <input type="hidden" name="CHILDCB780ROW91" id="CHILDCB780ROW91" value="241902">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW91DATA22466" id="OLDCB780ROW91DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW91DATA22466" name="SPAN780ROW91DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW91DATA22466" name="CB780ROW91DATA22466" tabindex="5650" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW91DATA22466" name="CB780ROW91DATA22466" tabindex="5650" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW91DATA22466" name="CB780ROW91DATA22466" tabindex="5650" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW91DATA3869" id="OLDCB780ROW91DATA3869" value="Gurrola, Jacqueline">
            Gurrola, Jacqueline
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW91DATA28817" id="OLDCB780ROW91DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW91DATA29712" id="OLDCB780ROW91DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW91DATA29712" name="CB780ROW91DATA29712" tabindex="5680" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW91DATA3871" id="OLDCB780ROW91DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW91DATA3871" name="CB780ROW91DATA3871" tabindex="5690" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW91DATA3870" id="OLDCB780ROW91DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW91DATE387017" name="CB780ROW91DATE387017" tabindex="5700" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5700" onclick="cal.select(window.easyform.CB780ROW91DATE387017,'CB780ROW91DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW91DATE387017.value); return false;" name="CB780ROW91DATE387017X" id="CB780ROW91DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW91DATE387017I" id="CB780ROW91DATE387017I"></a><span id="DIVCB780ROW91TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW91TIME387017" name="CB780ROW91TIME387017" tabindex="5700" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW91AMPM387017" name="CB780ROW91AMPM387017" class="form-control" tabindex="5700" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW92" id="LINKCB780ROW92" value="1232">
          <input type="hidden" name="CHILDCB780ROW92" id="CHILDCB780ROW92" value="241842">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW92DATA22466" id="OLDCB780ROW92DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW92DATA22466" name="SPAN780ROW92DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW92DATA22466" name="CB780ROW92DATA22466" tabindex="5710" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW92DATA22466" name="CB780ROW92DATA22466" tabindex="5710" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW92DATA22466" name="CB780ROW92DATA22466" tabindex="5710" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW92DATA3869" id="OLDCB780ROW92DATA3869" value="Gurrola, Matthew">
            Gurrola, Matthew
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW92DATA28817" id="OLDCB780ROW92DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW92DATA29712" id="OLDCB780ROW92DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW92DATA29712" name="CB780ROW92DATA29712" tabindex="5740" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW92DATA3871" id="OLDCB780ROW92DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW92DATA3871" name="CB780ROW92DATA3871" tabindex="5750" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW92DATA3870" id="OLDCB780ROW92DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW92DATE387017" name="CB780ROW92DATE387017" tabindex="5760" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5760" onclick="cal.select(window.easyform.CB780ROW92DATE387017,'CB780ROW92DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW92DATE387017.value); return false;" name="CB780ROW92DATE387017X" id="CB780ROW92DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW92DATE387017I" id="CB780ROW92DATE387017I"></a><span id="DIVCB780ROW92TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW92TIME387017" name="CB780ROW92TIME387017" tabindex="5760" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW92AMPM387017" name="CB780ROW92AMPM387017" class="form-control" tabindex="5760" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW93" id="LINKCB780ROW93" value="1171">
          <input type="hidden" name="CHILDCB780ROW93" id="CHILDCB780ROW93" value="241787">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW93DATA22466" id="OLDCB780ROW93DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW93DATA22466" name="SPAN780ROW93DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW93DATA22466" name="CB780ROW93DATA22466" tabindex="5770" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW93DATA22466" name="CB780ROW93DATA22466" tabindex="5770" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW93DATA22466" name="CB780ROW93DATA22466" tabindex="5770" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW93DATA3869" id="OLDCB780ROW93DATA3869" value="Hanss Blair, Rachel">
            Hanss Blair, Rachel
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW93DATA28817" id="OLDCB780ROW93DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW93DATA29712" id="OLDCB780ROW93DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW93DATA29712" name="CB780ROW93DATA29712" tabindex="5800" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW93DATA3871" id="OLDCB780ROW93DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW93DATA3871" name="CB780ROW93DATA3871" tabindex="5810" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW93DATA3870" id="OLDCB780ROW93DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW93DATE387017" name="CB780ROW93DATE387017" tabindex="5820" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5820" onclick="cal.select(window.easyform.CB780ROW93DATE387017,'CB780ROW93DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW93DATE387017.value); return false;" name="CB780ROW93DATE387017X" id="CB780ROW93DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW93DATE387017I" id="CB780ROW93DATE387017I"></a><span id="DIVCB780ROW93TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW93TIME387017" name="CB780ROW93TIME387017" tabindex="5820" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW93AMPM387017" name="CB780ROW93AMPM387017" class="form-control" tabindex="5820" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW94" id="LINKCB780ROW94" value="944">
          <input type="hidden" name="CHILDCB780ROW94" id="CHILDCB780ROW94" value="241736">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW94DATA22466" id="OLDCB780ROW94DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW94DATA22466" name="SPAN780ROW94DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW94DATA22466" name="CB780ROW94DATA22466" tabindex="5830" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW94DATA22466" name="CB780ROW94DATA22466" tabindex="5830" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW94DATA22466" name="CB780ROW94DATA22466" tabindex="5830" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW94DATA3869" id="OLDCB780ROW94DATA3869" value="Harrison, Abi">
            Harrison, Abi
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW94DATA28817" id="OLDCB780ROW94DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW94DATA29712" id="OLDCB780ROW94DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW94DATA29712" name="CB780ROW94DATA29712" tabindex="5860" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW94DATA3871" id="OLDCB780ROW94DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW94DATA3871" name="CB780ROW94DATA3871" tabindex="5870" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW94DATA3870" id="OLDCB780ROW94DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW94DATE387017" name="CB780ROW94DATE387017" tabindex="5880" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5880" onclick="cal.select(window.easyform.CB780ROW94DATE387017,'CB780ROW94DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW94DATE387017.value); return false;" name="CB780ROW94DATE387017X" id="CB780ROW94DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW94DATE387017I" id="CB780ROW94DATE387017I"></a><span id="DIVCB780ROW94TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW94TIME387017" name="CB780ROW94TIME387017" tabindex="5880" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW94AMPM387017" name="CB780ROW94AMPM387017" class="form-control" tabindex="5880" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW95" id="LINKCB780ROW95" value="940">
          <input type="hidden" name="CHILDCB780ROW95" id="CHILDCB780ROW95" value="241855">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW95DATA22466" id="OLDCB780ROW95DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW95DATA22466" name="SPAN780ROW95DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW95DATA22466" name="CB780ROW95DATA22466" tabindex="5890" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW95DATA22466" name="CB780ROW95DATA22466" tabindex="5890" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW95DATA22466" name="CB780ROW95DATA22466" tabindex="5890" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW95DATA3869" id="OLDCB780ROW95DATA3869" value="Harrison, James">
            Harrison, James
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW95DATA28817" id="OLDCB780ROW95DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW95DATA29712" id="OLDCB780ROW95DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW95DATA29712" name="CB780ROW95DATA29712" tabindex="5920" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW95DATA3871" id="OLDCB780ROW95DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW95DATA3871" name="CB780ROW95DATA3871" tabindex="5930" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW95DATA3870" id="OLDCB780ROW95DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW95DATE387017" name="CB780ROW95DATE387017" tabindex="5940" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="5940" onclick="cal.select(window.easyform.CB780ROW95DATE387017,'CB780ROW95DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW95DATE387017.value); return false;" name="CB780ROW95DATE387017X" id="CB780ROW95DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW95DATE387017I" id="CB780ROW95DATE387017I"></a><span id="DIVCB780ROW95TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW95TIME387017" name="CB780ROW95TIME387017" tabindex="5940" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW95AMPM387017" name="CB780ROW95AMPM387017" class="form-control" tabindex="5940" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW96" id="LINKCB780ROW96" value="1084">
          <input type="hidden" name="CHILDCB780ROW96" id="CHILDCB780ROW96" value="241901">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW96DATA22466" id="OLDCB780ROW96DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW96DATA22466" name="SPAN780ROW96DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW96DATA22466" name="CB780ROW96DATA22466" tabindex="5950" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW96DATA22466" name="CB780ROW96DATA22466" tabindex="5950" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW96DATA22466" name="CB780ROW96DATA22466" tabindex="5950" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW96DATA3869" id="OLDCB780ROW96DATA3869" value="Hayes, David">
            Hayes, David
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW96DATA28817" id="OLDCB780ROW96DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW96DATA29712" id="OLDCB780ROW96DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW96DATA29712" name="CB780ROW96DATA29712" tabindex="5980" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW96DATA3871" id="OLDCB780ROW96DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW96DATA3871" name="CB780ROW96DATA3871" tabindex="5990" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW96DATA3870" id="OLDCB780ROW96DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW96DATE387017" name="CB780ROW96DATE387017" tabindex="6000" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6000" onclick="cal.select(window.easyform.CB780ROW96DATE387017,'CB780ROW96DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW96DATE387017.value); return false;" name="CB780ROW96DATE387017X" id="CB780ROW96DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW96DATE387017I" id="CB780ROW96DATE387017I"></a><span id="DIVCB780ROW96TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW96TIME387017" name="CB780ROW96TIME387017" tabindex="6000" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW96AMPM387017" name="CB780ROW96AMPM387017" class="form-control" tabindex="6000" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW97" id="LINKCB780ROW97" value="1285">
          <input type="hidden" name="CHILDCB780ROW97" id="CHILDCB780ROW97" value="241750">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW97DATA22466" id="OLDCB780ROW97DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW97DATA22466" name="SPAN780ROW97DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW97DATA22466" name="CB780ROW97DATA22466" tabindex="6010" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW97DATA22466" name="CB780ROW97DATA22466" tabindex="6010" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW97DATA22466" name="CB780ROW97DATA22466" tabindex="6010" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW97DATA3869" id="OLDCB780ROW97DATA3869" value="Hoy, Ashton">
            Hoy, Ashton
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW97DATA28817" id="OLDCB780ROW97DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW97DATA29712" id="OLDCB780ROW97DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW97DATA29712" name="CB780ROW97DATA29712" tabindex="6040" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW97DATA3871" id="OLDCB780ROW97DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW97DATA3871" name="CB780ROW97DATA3871" tabindex="6050" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW97DATA3870" id="OLDCB780ROW97DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW97DATE387017" name="CB780ROW97DATE387017" tabindex="6060" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6060" onclick="cal.select(window.easyform.CB780ROW97DATE387017,'CB780ROW97DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW97DATE387017.value); return false;" name="CB780ROW97DATE387017X" id="CB780ROW97DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW97DATE387017I" id="CB780ROW97DATE387017I"></a><span id="DIVCB780ROW97TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW97TIME387017" name="CB780ROW97TIME387017" tabindex="6060" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW97AMPM387017" name="CB780ROW97AMPM387017" class="form-control" tabindex="6060" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW98" id="LINKCB780ROW98" value="1287">
          <input type="hidden" name="CHILDCB780ROW98" id="CHILDCB780ROW98" value="241903">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW98DATA22466" id="OLDCB780ROW98DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW98DATA22466" name="SPAN780ROW98DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW98DATA22466" name="CB780ROW98DATA22466" tabindex="6070" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW98DATA22466" name="CB780ROW98DATA22466" tabindex="6070" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW98DATA22466" name="CB780ROW98DATA22466" tabindex="6070" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW98DATA3869" id="OLDCB780ROW98DATA3869" value="Hoy, Nicole">
            Hoy, Nicole
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW98DATA28817" id="OLDCB780ROW98DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW98DATA29712" id="OLDCB780ROW98DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW98DATA29712" name="CB780ROW98DATA29712" tabindex="6100" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW98DATA3871" id="OLDCB780ROW98DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW98DATA3871" name="CB780ROW98DATA3871" tabindex="6110" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW98DATA3870" id="OLDCB780ROW98DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW98DATE387017" name="CB780ROW98DATE387017" tabindex="6120" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6120" onclick="cal.select(window.easyform.CB780ROW98DATE387017,'CB780ROW98DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW98DATE387017.value); return false;" name="CB780ROW98DATE387017X" id="CB780ROW98DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW98DATE387017I" id="CB780ROW98DATE387017I"></a><span id="DIVCB780ROW98TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW98TIME387017" name="CB780ROW98TIME387017" tabindex="6120" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW98AMPM387017" name="CB780ROW98AMPM387017" class="form-control" tabindex="6120" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW99" id="LINKCB780ROW99" value="1216">
          <input type="hidden" name="CHILDCB780ROW99" id="CHILDCB780ROW99" value="241731">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW99DATA22466" id="OLDCB780ROW99DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW99DATA22466" name="SPAN780ROW99DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW99DATA22466" name="CB780ROW99DATA22466" tabindex="6130" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW99DATA22466" name="CB780ROW99DATA22466" tabindex="6130" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW99DATA22466" name="CB780ROW99DATA22466" tabindex="6130" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW99DATA3869" id="OLDCB780ROW99DATA3869" value="Hume, Beatrix">
            Hume, Beatrix
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW99DATA28817" id="OLDCB780ROW99DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW99DATA29712" id="OLDCB780ROW99DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW99DATA29712" name="CB780ROW99DATA29712" tabindex="6160" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW99DATA3871" id="OLDCB780ROW99DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW99DATA3871" name="CB780ROW99DATA3871" tabindex="6170" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW99DATA3870" id="OLDCB780ROW99DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW99DATE387017" name="CB780ROW99DATE387017" tabindex="6180" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6180" onclick="cal.select(window.easyform.CB780ROW99DATE387017,'CB780ROW99DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW99DATE387017.value); return false;" name="CB780ROW99DATE387017X" id="CB780ROW99DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW99DATE387017I" id="CB780ROW99DATE387017I"></a><span id="DIVCB780ROW99TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW99TIME387017" name="CB780ROW99TIME387017" tabindex="6180" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW99AMPM387017" name="CB780ROW99AMPM387017" class="form-control" tabindex="6180" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW100" id="LINKCB780ROW100" value="1225">
          <input type="hidden" name="CHILDCB780ROW100" id="CHILDCB780ROW100" value="241749">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW100DATA22466" id="OLDCB780ROW100DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW100DATA22466" name="SPAN780ROW100DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW100DATA22466" name="CB780ROW100DATA22466" tabindex="6190" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW100DATA22466" name="CB780ROW100DATA22466" tabindex="6190" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW100DATA22466" name="CB780ROW100DATA22466" tabindex="6190" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW100DATA3869" id="OLDCB780ROW100DATA3869" value="Hume, John">
            Hume, John
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW100DATA28817" id="OLDCB780ROW100DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW100DATA29712" id="OLDCB780ROW100DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW100DATA29712" name="CB780ROW100DATA29712" tabindex="6220" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW100DATA3871" id="OLDCB780ROW100DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW100DATA3871" name="CB780ROW100DATA3871" tabindex="6230" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW100DATA3870" id="OLDCB780ROW100DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW100DATE387017" name="CB780ROW100DATE387017" tabindex="6240" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6240" onclick="cal.select(window.easyform.CB780ROW100DATE387017,'CB780ROW100DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW100DATE387017.value); return false;" name="CB780ROW100DATE387017X" id="CB780ROW100DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW100DATE387017I" id="CB780ROW100DATE387017I"></a><span id="DIVCB780ROW100TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW100TIME387017" name="CB780ROW100TIME387017" tabindex="6240" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW100AMPM387017" name="CB780ROW100AMPM387017" class="form-control" tabindex="6240" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW101" id="LINKCB780ROW101" value="1205">
          <input type="hidden" name="CHILDCB780ROW101" id="CHILDCB780ROW101" value="241767">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW101DATA22466" id="OLDCB780ROW101DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW101DATA22466" name="SPAN780ROW101DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW101DATA22466" name="CB780ROW101DATA22466" tabindex="6250" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW101DATA22466" name="CB780ROW101DATA22466" tabindex="6250" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW101DATA22466" name="CB780ROW101DATA22466" tabindex="6250" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW101DATA3869" id="OLDCB780ROW101DATA3869" value="Idell, Claire">
            Idell, Claire
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW101DATA28817" id="OLDCB780ROW101DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW101DATA29712" id="OLDCB780ROW101DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW101DATA29712" name="CB780ROW101DATA29712" tabindex="6280" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW101DATA3871" id="OLDCB780ROW101DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW101DATA3871" name="CB780ROW101DATA3871" tabindex="6290" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW101DATA3870" id="OLDCB780ROW101DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW101DATE387017" name="CB780ROW101DATE387017" tabindex="6300" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6300" onclick="cal.select(window.easyform.CB780ROW101DATE387017,'CB780ROW101DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW101DATE387017.value); return false;" name="CB780ROW101DATE387017X" id="CB780ROW101DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW101DATE387017I" id="CB780ROW101DATE387017I"></a><span id="DIVCB780ROW101TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW101TIME387017" name="CB780ROW101TIME387017" tabindex="6300" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW101AMPM387017" name="CB780ROW101AMPM387017" class="form-control" tabindex="6300" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW102" id="LINKCB780ROW102" value="1189">
          <input type="hidden" name="CHILDCB780ROW102" id="CHILDCB780ROW102" value="241857">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW102DATA22466" id="OLDCB780ROW102DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW102DATA22466" name="SPAN780ROW102DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW102DATA22466" name="CB780ROW102DATA22466" tabindex="6310" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW102DATA22466" name="CB780ROW102DATA22466" tabindex="6310" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW102DATA22466" name="CB780ROW102DATA22466" tabindex="6310" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW102DATA3869" id="OLDCB780ROW102DATA3869" value="Idell, Gabe">
            Idell, Gabe
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW102DATA28817" id="OLDCB780ROW102DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW102DATA29712" id="OLDCB780ROW102DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW102DATA29712" name="CB780ROW102DATA29712" tabindex="6340" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW102DATA3871" id="OLDCB780ROW102DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW102DATA3871" name="CB780ROW102DATA3871" tabindex="6350" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW102DATA3870" id="OLDCB780ROW102DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW102DATE387017" name="CB780ROW102DATE387017" tabindex="6360" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6360" onclick="cal.select(window.easyform.CB780ROW102DATE387017,'CB780ROW102DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW102DATE387017.value); return false;" name="CB780ROW102DATE387017X" id="CB780ROW102DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW102DATE387017I" id="CB780ROW102DATE387017I"></a><span id="DIVCB780ROW102TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW102TIME387017" name="CB780ROW102TIME387017" tabindex="6360" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW102AMPM387017" name="CB780ROW102AMPM387017" class="form-control" tabindex="6360" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW103" id="LINKCB780ROW103" value="1292">
          <input type="hidden" name="CHILDCB780ROW103" id="CHILDCB780ROW103" value="241844">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW103DATA22466" id="OLDCB780ROW103DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW103DATA22466" name="SPAN780ROW103DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW103DATA22466" name="CB780ROW103DATA22466" tabindex="6370" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW103DATA22466" name="CB780ROW103DATA22466" tabindex="6370" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW103DATA22466" name="CB780ROW103DATA22466" tabindex="6370" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW103DATA3869" id="OLDCB780ROW103DATA3869" value="Ingram, Alistair">
            Ingram, Alistair
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW103DATA28817" id="OLDCB780ROW103DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW103DATA29712" id="OLDCB780ROW103DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW103DATA29712" name="CB780ROW103DATA29712" tabindex="6400" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW103DATA3871" id="OLDCB780ROW103DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW103DATA3871" name="CB780ROW103DATA3871" tabindex="6410" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW103DATA3870" id="OLDCB780ROW103DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW103DATE387017" name="CB780ROW103DATE387017" tabindex="6420" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6420" onclick="cal.select(window.easyform.CB780ROW103DATE387017,'CB780ROW103DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW103DATE387017.value); return false;" name="CB780ROW103DATE387017X" id="CB780ROW103DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW103DATE387017I" id="CB780ROW103DATE387017I"></a><span id="DIVCB780ROW103TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW103TIME387017" name="CB780ROW103TIME387017" tabindex="6420" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW103AMPM387017" name="CB780ROW103AMPM387017" class="form-control" tabindex="6420" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW104" id="LINKCB780ROW104" value="1534">
          <input type="hidden" name="CHILDCB780ROW104" id="CHILDCB780ROW104" value="241757">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW104DATA22466" id="OLDCB780ROW104DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW104DATA22466" name="SPAN780ROW104DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW104DATA22466" name="CB780ROW104DATA22466" tabindex="6430" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW104DATA22466" name="CB780ROW104DATA22466" tabindex="6430" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW104DATA22466" name="CB780ROW104DATA22466" tabindex="6430" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW104DATA3869" id="OLDCB780ROW104DATA3869" value="Ingrams, Julie and Robert">
            Ingrams, Julie and Robert
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW104DATA28817" id="OLDCB780ROW104DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW104DATA29712" id="OLDCB780ROW104DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW104DATA29712" name="CB780ROW104DATA29712" tabindex="6460" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW104DATA3871" id="OLDCB780ROW104DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW104DATA3871" name="CB780ROW104DATA3871" tabindex="6470" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW104DATA3870" id="OLDCB780ROW104DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW104DATE387017" name="CB780ROW104DATE387017" tabindex="6480" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6480" onclick="cal.select(window.easyform.CB780ROW104DATE387017,'CB780ROW104DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW104DATE387017.value); return false;" name="CB780ROW104DATE387017X" id="CB780ROW104DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW104DATE387017I" id="CB780ROW104DATE387017I"></a><span id="DIVCB780ROW104TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW104TIME387017" name="CB780ROW104TIME387017" tabindex="6480" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW104AMPM387017" name="CB780ROW104AMPM387017" class="form-control" tabindex="6480" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW105" id="LINKCB780ROW105" value="1293">
          <input type="hidden" name="CHILDCB780ROW105" id="CHILDCB780ROW105" value="241895">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW105DATA22466" id="OLDCB780ROW105DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW105DATA22466" name="SPAN780ROW105DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW105DATA22466" name="CB780ROW105DATA22466" tabindex="6490" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW105DATA22466" name="CB780ROW105DATA22466" tabindex="6490" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW105DATA22466" name="CB780ROW105DATA22466" tabindex="6490" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW105DATA3869" id="OLDCB780ROW105DATA3869" value="Kathuria, Kabir">
            Kathuria, Kabir
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW105DATA28817" id="OLDCB780ROW105DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW105DATA29712" id="OLDCB780ROW105DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW105DATA29712" name="CB780ROW105DATA29712" tabindex="6520" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW105DATA3871" id="OLDCB780ROW105DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW105DATA3871" name="CB780ROW105DATA3871" tabindex="6530" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW105DATA3870" id="OLDCB780ROW105DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW105DATE387017" name="CB780ROW105DATE387017" tabindex="6540" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6540" onclick="cal.select(window.easyform.CB780ROW105DATE387017,'CB780ROW105DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW105DATE387017.value); return false;" name="CB780ROW105DATE387017X" id="CB780ROW105DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW105DATE387017I" id="CB780ROW105DATE387017I"></a><span id="DIVCB780ROW105TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW105TIME387017" name="CB780ROW105TIME387017" tabindex="6540" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW105AMPM387017" name="CB780ROW105AMPM387017" class="form-control" tabindex="6540" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW106" id="LINKCB780ROW106" value="883">
          <input type="hidden" name="CHILDCB780ROW106" id="CHILDCB780ROW106" value="241864">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW106DATA22466" id="OLDCB780ROW106DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW106DATA22466" name="SPAN780ROW106DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW106DATA22466" name="CB780ROW106DATA22466" tabindex="6550" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW106DATA22466" name="CB780ROW106DATA22466" tabindex="6550" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW106DATA22466" name="CB780ROW106DATA22466" tabindex="6550" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW106DATA3869" id="OLDCB780ROW106DATA3869" value="Keenan, Danielle">
            Keenan, Danielle
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW106DATA28817" id="OLDCB780ROW106DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW106DATA29712" id="OLDCB780ROW106DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW106DATA29712" name="CB780ROW106DATA29712" tabindex="6580" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW106DATA3871" id="OLDCB780ROW106DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW106DATA3871" name="CB780ROW106DATA3871" tabindex="6590" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW106DATA3870" id="OLDCB780ROW106DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW106DATE387017" name="CB780ROW106DATE387017" tabindex="6600" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6600" onclick="cal.select(window.easyform.CB780ROW106DATE387017,'CB780ROW106DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW106DATE387017.value); return false;" name="CB780ROW106DATE387017X" id="CB780ROW106DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW106DATE387017I" id="CB780ROW106DATE387017I"></a><span id="DIVCB780ROW106TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW106TIME387017" name="CB780ROW106TIME387017" tabindex="6600" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW106AMPM387017" name="CB780ROW106AMPM387017" class="form-control" tabindex="6600" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW107" id="LINKCB780ROW107" value="1190">
          <input type="hidden" name="CHILDCB780ROW107" id="CHILDCB780ROW107" value="241732">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW107DATA22466" id="OLDCB780ROW107DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW107DATA22466" name="SPAN780ROW107DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW107DATA22466" name="CB780ROW107DATA22466" tabindex="6610" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW107DATA22466" name="CB780ROW107DATA22466" tabindex="6610" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW107DATA22466" name="CB780ROW107DATA22466" tabindex="6610" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW107DATA3869" id="OLDCB780ROW107DATA3869" value="kommineni, anish">
            kommineni, anish
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW107DATA28817" id="OLDCB780ROW107DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW107DATA29712" id="OLDCB780ROW107DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW107DATA29712" name="CB780ROW107DATA29712" tabindex="6640" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW107DATA3871" id="OLDCB780ROW107DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW107DATA3871" name="CB780ROW107DATA3871" tabindex="6650" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW107DATA3870" id="OLDCB780ROW107DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW107DATE387017" name="CB780ROW107DATE387017" tabindex="6660" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6660" onclick="cal.select(window.easyform.CB780ROW107DATE387017,'CB780ROW107DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW107DATE387017.value); return false;" name="CB780ROW107DATE387017X" id="CB780ROW107DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW107DATE387017I" id="CB780ROW107DATE387017I"></a><span id="DIVCB780ROW107TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW107TIME387017" name="CB780ROW107TIME387017" tabindex="6660" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW107AMPM387017" name="CB780ROW107AMPM387017" class="form-control" tabindex="6660" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW108" id="LINKCB780ROW108" value="517">
          <input type="hidden" name="CHILDCB780ROW108" id="CHILDCB780ROW108" value="241881">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW108DATA22466" id="OLDCB780ROW108DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW108DATA22466" name="SPAN780ROW108DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW108DATA22466" name="CB780ROW108DATA22466" tabindex="6670" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW108DATA22466" name="CB780ROW108DATA22466" tabindex="6670" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW108DATA22466" name="CB780ROW108DATA22466" tabindex="6670" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW108DATA3869" id="OLDCB780ROW108DATA3869" value="kommineni, Avighna">
            kommineni, Avighna
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW108DATA28817" id="OLDCB780ROW108DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW108DATA29712" id="OLDCB780ROW108DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW108DATA29712" name="CB780ROW108DATA29712" tabindex="6700" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW108DATA3871" id="OLDCB780ROW108DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW108DATA3871" name="CB780ROW108DATA3871" tabindex="6710" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW108DATA3870" id="OLDCB780ROW108DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW108DATE387017" name="CB780ROW108DATE387017" tabindex="6720" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6720" onclick="cal.select(window.easyform.CB780ROW108DATE387017,'CB780ROW108DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW108DATE387017.value); return false;" name="CB780ROW108DATE387017X" id="CB780ROW108DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW108DATE387017I" id="CB780ROW108DATE387017I"></a><span id="DIVCB780ROW108TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW108TIME387017" name="CB780ROW108TIME387017" tabindex="6720" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW108AMPM387017" name="CB780ROW108AMPM387017" class="form-control" tabindex="6720" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW109" id="LINKCB780ROW109" value="577">
          <input type="hidden" name="CHILDCB780ROW109" id="CHILDCB780ROW109" value="241859">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW109DATA22466" id="OLDCB780ROW109DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW109DATA22466" name="SPAN780ROW109DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW109DATA22466" name="CB780ROW109DATA22466" tabindex="6730" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW109DATA22466" name="CB780ROW109DATA22466" tabindex="6730" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW109DATA22466" name="CB780ROW109DATA22466" tabindex="6730" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW109DATA3869" id="OLDCB780ROW109DATA3869" value="Kommineni, Vijaya Bhaskar">
            Kommineni, Vijaya Bhaskar
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW109DATA28817" id="OLDCB780ROW109DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW109DATA29712" id="OLDCB780ROW109DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW109DATA29712" name="CB780ROW109DATA29712" tabindex="6760" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW109DATA3871" id="OLDCB780ROW109DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW109DATA3871" name="CB780ROW109DATA3871" tabindex="6770" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW109DATA3870" id="OLDCB780ROW109DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW109DATE387017" name="CB780ROW109DATE387017" tabindex="6780" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6780" onclick="cal.select(window.easyform.CB780ROW109DATE387017,'CB780ROW109DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW109DATE387017.value); return false;" name="CB780ROW109DATE387017X" id="CB780ROW109DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW109DATE387017I" id="CB780ROW109DATE387017I"></a><span id="DIVCB780ROW109TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW109TIME387017" name="CB780ROW109TIME387017" tabindex="6780" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW109AMPM387017" name="CB780ROW109AMPM387017" class="form-control" tabindex="6780" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW110" id="LINKCB780ROW110" value="1623">
          <input type="hidden" name="CHILDCB780ROW110" id="CHILDCB780ROW110" value="249845">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW110DATA22466" id="OLDCB780ROW110DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW110DATA22466" name="SPAN780ROW110DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW110DATA22466" name="CB780ROW110DATA22466" tabindex="6790" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW110DATA22466" name="CB780ROW110DATA22466" tabindex="6790" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW110DATA22466" name="CB780ROW110DATA22466" tabindex="6790" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW110DATA3869" id="OLDCB780ROW110DATA3869" value="Koran, Katie and Kenny">
            Koran, Katie and Kenny
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW110DATA28817" id="OLDCB780ROW110DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW110DATA29712" id="OLDCB780ROW110DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW110DATA29712" name="CB780ROW110DATA29712" tabindex="6820" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW110DATA3871" id="OLDCB780ROW110DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW110DATA3871" name="CB780ROW110DATA3871" tabindex="6830" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW110DATA3870" id="OLDCB780ROW110DATA3870" value="08/23/2026 11:56 PM">
            <input type="text" class="form-control" id="CB780ROW110DATE387017" name="CB780ROW110DATE387017" tabindex="6840" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6840" onclick="cal.select(window.easyform.CB780ROW110DATE387017,'CB780ROW110DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW110DATE387017.value); return false;" name="CB780ROW110DATE387017X" id="CB780ROW110DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW110DATE387017I" id="CB780ROW110DATE387017I"></a><span id="DIVCB780ROW110TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW110TIME387017" name="CB780ROW110TIME387017" tabindex="6840" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:56"><select id="CB780ROW110AMPM387017" name="CB780ROW110AMPM387017" class="form-control" tabindex="6840" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW111" id="LINKCB780ROW111" value="1619">
          <input type="hidden" name="CHILDCB780ROW111" id="CHILDCB780ROW111" value="248138">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW111DATA22466" id="OLDCB780ROW111DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW111DATA22466" name="SPAN780ROW111DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW111DATA22466" name="CB780ROW111DATA22466" tabindex="6850" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW111DATA22466" name="CB780ROW111DATA22466" tabindex="6850" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW111DATA22466" name="CB780ROW111DATA22466" tabindex="6850" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW111DATA3869" id="OLDCB780ROW111DATA3869" value="Koran, Teddy">
            Koran, Teddy
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW111DATA28817" id="OLDCB780ROW111DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW111DATA29712" id="OLDCB780ROW111DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW111DATA29712" name="CB780ROW111DATA29712" tabindex="6880" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW111DATA3871" id="OLDCB780ROW111DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW111DATA3871" name="CB780ROW111DATA3871" tabindex="6890" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW111DATA3870" id="OLDCB780ROW111DATA3870" value="08/23/2026 11:52 PM">
            <input type="text" class="form-control" id="CB780ROW111DATE387017" name="CB780ROW111DATE387017" tabindex="6900" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6900" onclick="cal.select(window.easyform.CB780ROW111DATE387017,'CB780ROW111DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW111DATE387017.value); return false;" name="CB780ROW111DATE387017X" id="CB780ROW111DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW111DATE387017I" id="CB780ROW111DATE387017I"></a><span id="DIVCB780ROW111TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW111TIME387017" name="CB780ROW111TIME387017" tabindex="6900" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:52"><select id="CB780ROW111AMPM387017" name="CB780ROW111AMPM387017" class="form-control" tabindex="6900" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW112" id="LINKCB780ROW112" value="933">
          <input type="hidden" name="CHILDCB780ROW112" id="CHILDCB780ROW112" value="241760">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW112DATA22466" id="OLDCB780ROW112DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW112DATA22466" name="SPAN780ROW112DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW112DATA22466" name="CB780ROW112DATA22466" tabindex="6910" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW112DATA22466" name="CB780ROW112DATA22466" tabindex="6910" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW112DATA22466" name="CB780ROW112DATA22466" tabindex="6910" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW112DATA3869" id="OLDCB780ROW112DATA3869" value="Lorenzini, Mitch">
            Lorenzini, Mitch
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW112DATA28817" id="OLDCB780ROW112DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW112DATA29712" id="OLDCB780ROW112DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW112DATA29712" name="CB780ROW112DATA29712" tabindex="6940" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW112DATA3871" id="OLDCB780ROW112DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW112DATA3871" name="CB780ROW112DATA3871" tabindex="6950" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW112DATA3870" id="OLDCB780ROW112DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW112DATE387017" name="CB780ROW112DATE387017" tabindex="6960" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="6960" onclick="cal.select(window.easyform.CB780ROW112DATE387017,'CB780ROW112DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW112DATE387017.value); return false;" name="CB780ROW112DATE387017X" id="CB780ROW112DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW112DATE387017I" id="CB780ROW112DATE387017I"></a><span id="DIVCB780ROW112TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW112TIME387017" name="CB780ROW112TIME387017" tabindex="6960" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW112AMPM387017" name="CB780ROW112AMPM387017" class="form-control" tabindex="6960" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW113" id="LINKCB780ROW113" value="1217">
          <input type="hidden" name="CHILDCB780ROW113" id="CHILDCB780ROW113" value="241795">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW113DATA22466" id="OLDCB780ROW113DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW113DATA22466" name="SPAN780ROW113DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW113DATA22466" name="CB780ROW113DATA22466" tabindex="6970" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW113DATA22466" name="CB780ROW113DATA22466" tabindex="6970" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW113DATA22466" name="CB780ROW113DATA22466" tabindex="6970" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW113DATA3869" id="OLDCB780ROW113DATA3869" value="Lorenzini, Paige">
            Lorenzini, Paige
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW113DATA28817" id="OLDCB780ROW113DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW113DATA29712" id="OLDCB780ROW113DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW113DATA29712" name="CB780ROW113DATA29712" tabindex="7000" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW113DATA3871" id="OLDCB780ROW113DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW113DATA3871" name="CB780ROW113DATA3871" tabindex="7010" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW113DATA3870" id="OLDCB780ROW113DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW113DATE387017" name="CB780ROW113DATE387017" tabindex="7020" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7020" onclick="cal.select(window.easyform.CB780ROW113DATE387017,'CB780ROW113DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW113DATE387017.value); return false;" name="CB780ROW113DATE387017X" id="CB780ROW113DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW113DATE387017I" id="CB780ROW113DATE387017I"></a><span id="DIVCB780ROW113TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW113TIME387017" name="CB780ROW113TIME387017" tabindex="7020" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW113AMPM387017" name="CB780ROW113AMPM387017" class="form-control" tabindex="7020" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW114" id="LINKCB780ROW114" value="922">
          <input type="hidden" name="CHILDCB780ROW114" id="CHILDCB780ROW114" value="241803">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW114DATA22466" id="OLDCB780ROW114DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW114DATA22466" name="SPAN780ROW114DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW114DATA22466" name="CB780ROW114DATA22466" tabindex="7030" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW114DATA22466" name="CB780ROW114DATA22466" tabindex="7030" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW114DATA22466" name="CB780ROW114DATA22466" tabindex="7030" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW114DATA3869" id="OLDCB780ROW114DATA3869" value="Lorenzini, Pepper">
            Lorenzini, Pepper
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW114DATA28817" id="OLDCB780ROW114DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW114DATA29712" id="OLDCB780ROW114DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW114DATA29712" name="CB780ROW114DATA29712" tabindex="7060" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW114DATA3871" id="OLDCB780ROW114DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW114DATA3871" name="CB780ROW114DATA3871" tabindex="7070" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW114DATA3870" id="OLDCB780ROW114DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW114DATE387017" name="CB780ROW114DATE387017" tabindex="7080" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7080" onclick="cal.select(window.easyform.CB780ROW114DATE387017,'CB780ROW114DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW114DATE387017.value); return false;" name="CB780ROW114DATE387017X" id="CB780ROW114DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW114DATE387017I" id="CB780ROW114DATE387017I"></a><span id="DIVCB780ROW114TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW114TIME387017" name="CB780ROW114TIME387017" tabindex="7080" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW114AMPM387017" name="CB780ROW114AMPM387017" class="form-control" tabindex="7080" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW115" id="LINKCB780ROW115" value="1032">
          <input type="hidden" name="CHILDCB780ROW115" id="CHILDCB780ROW115" value="241860">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW115DATA22466" id="OLDCB780ROW115DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW115DATA22466" name="SPAN780ROW115DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW115DATA22466" name="CB780ROW115DATA22466" tabindex="7090" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW115DATA22466" name="CB780ROW115DATA22466" tabindex="7090" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW115DATA22466" name="CB780ROW115DATA22466" tabindex="7090" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW115DATA3869" id="OLDCB780ROW115DATA3869" value="Lynch, Dixon">
            Lynch, Dixon
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW115DATA28817" id="OLDCB780ROW115DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW115DATA29712" id="OLDCB780ROW115DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW115DATA29712" name="CB780ROW115DATA29712" tabindex="7120" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW115DATA3871" id="OLDCB780ROW115DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW115DATA3871" name="CB780ROW115DATA3871" tabindex="7130" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW115DATA3870" id="OLDCB780ROW115DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW115DATE387017" name="CB780ROW115DATE387017" tabindex="7140" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7140" onclick="cal.select(window.easyform.CB780ROW115DATE387017,'CB780ROW115DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW115DATE387017.value); return false;" name="CB780ROW115DATE387017X" id="CB780ROW115DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW115DATE387017I" id="CB780ROW115DATE387017I"></a><span id="DIVCB780ROW115TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW115TIME387017" name="CB780ROW115TIME387017" tabindex="7140" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW115AMPM387017" name="CB780ROW115AMPM387017" class="form-control" tabindex="7140" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW116" id="LINKCB780ROW116" value="1034">
          <input type="hidden" name="CHILDCB780ROW116" id="CHILDCB780ROW116" value="241829">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW116DATA22466" id="OLDCB780ROW116DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW116DATA22466" name="SPAN780ROW116DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW116DATA22466" name="CB780ROW116DATA22466" tabindex="7150" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW116DATA22466" name="CB780ROW116DATA22466" tabindex="7150" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW116DATA22466" name="CB780ROW116DATA22466" tabindex="7150" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW116DATA3869" id="OLDCB780ROW116DATA3869" value="Lynch, Scott">
            Lynch, Scott
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW116DATA28817" id="OLDCB780ROW116DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW116DATA29712" id="OLDCB780ROW116DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW116DATA29712" name="CB780ROW116DATA29712" tabindex="7180" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW116DATA3871" id="OLDCB780ROW116DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW116DATA3871" name="CB780ROW116DATA3871" tabindex="7190" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW116DATA3870" id="OLDCB780ROW116DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW116DATE387017" name="CB780ROW116DATE387017" tabindex="7200" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7200" onclick="cal.select(window.easyform.CB780ROW116DATE387017,'CB780ROW116DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW116DATE387017.value); return false;" name="CB780ROW116DATE387017X" id="CB780ROW116DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW116DATE387017I" id="CB780ROW116DATE387017I"></a><span id="DIVCB780ROW116TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW116TIME387017" name="CB780ROW116TIME387017" tabindex="7200" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW116AMPM387017" name="CB780ROW116AMPM387017" class="form-control" tabindex="7200" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW117" id="LINKCB780ROW117" value="693">
          <input type="hidden" name="CHILDCB780ROW117" id="CHILDCB780ROW117" value="241804">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW117DATA22466" id="OLDCB780ROW117DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW117DATA22466" name="SPAN780ROW117DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW117DATA22466" name="CB780ROW117DATA22466" tabindex="7210" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW117DATA22466" name="CB780ROW117DATA22466" tabindex="7210" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW117DATA22466" name="CB780ROW117DATA22466" tabindex="7210" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW117DATA3869" id="OLDCB780ROW117DATA3869" value="Mallios, Jim">
            Mallios, Jim
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW117DATA28817" id="OLDCB780ROW117DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW117DATA29712" id="OLDCB780ROW117DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW117DATA29712" name="CB780ROW117DATA29712" tabindex="7240" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW117DATA3871" id="OLDCB780ROW117DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW117DATA3871" name="CB780ROW117DATA3871" tabindex="7250" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW117DATA3870" id="OLDCB780ROW117DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW117DATE387017" name="CB780ROW117DATE387017" tabindex="7260" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7260" onclick="cal.select(window.easyform.CB780ROW117DATE387017,'CB780ROW117DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW117DATE387017.value); return false;" name="CB780ROW117DATE387017X" id="CB780ROW117DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW117DATE387017I" id="CB780ROW117DATE387017I"></a><span id="DIVCB780ROW117TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW117TIME387017" name="CB780ROW117TIME387017" tabindex="7260" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW117AMPM387017" name="CB780ROW117AMPM387017" class="form-control" tabindex="7260" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW118" id="LINKCB780ROW118" value="556">
          <input type="hidden" name="CHILDCB780ROW118" id="CHILDCB780ROW118" value="241818">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW118DATA22466" id="OLDCB780ROW118DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW118DATA22466" name="SPAN780ROW118DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW118DATA22466" name="CB780ROW118DATA22466" tabindex="7270" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW118DATA22466" name="CB780ROW118DATA22466" tabindex="7270" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW118DATA22466" name="CB780ROW118DATA22466" tabindex="7270" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW118DATA3869" id="OLDCB780ROW118DATA3869" value="Mallios, Tracy">
            Mallios, Tracy
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW118DATA28817" id="OLDCB780ROW118DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW118DATA29712" id="OLDCB780ROW118DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW118DATA29712" name="CB780ROW118DATA29712" tabindex="7300" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW118DATA3871" id="OLDCB780ROW118DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW118DATA3871" name="CB780ROW118DATA3871" tabindex="7310" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW118DATA3870" id="OLDCB780ROW118DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW118DATE387017" name="CB780ROW118DATE387017" tabindex="7320" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7320" onclick="cal.select(window.easyform.CB780ROW118DATE387017,'CB780ROW118DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW118DATE387017.value); return false;" name="CB780ROW118DATE387017X" id="CB780ROW118DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW118DATE387017I" id="CB780ROW118DATE387017I"></a><span id="DIVCB780ROW118TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW118TIME387017" name="CB780ROW118TIME387017" tabindex="7320" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW118AMPM387017" name="CB780ROW118AMPM387017" class="form-control" tabindex="7320" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW119" id="LINKCB780ROW119" value="1260">
          <input type="hidden" name="CHILDCB780ROW119" id="CHILDCB780ROW119" value="241802">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW119DATA22466" id="OLDCB780ROW119DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW119DATA22466" name="SPAN780ROW119DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW119DATA22466" name="CB780ROW119DATA22466" tabindex="7330" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW119DATA22466" name="CB780ROW119DATA22466" tabindex="7330" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW119DATA22466" name="CB780ROW119DATA22466" tabindex="7330" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW119DATA3869" id="OLDCB780ROW119DATA3869" value="Marquez, David">
            Marquez, David
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW119DATA28817" id="OLDCB780ROW119DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW119DATA29712" id="OLDCB780ROW119DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW119DATA29712" name="CB780ROW119DATA29712" tabindex="7360" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW119DATA3871" id="OLDCB780ROW119DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW119DATA3871" name="CB780ROW119DATA3871" tabindex="7370" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW119DATA3870" id="OLDCB780ROW119DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW119DATE387017" name="CB780ROW119DATE387017" tabindex="7380" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7380" onclick="cal.select(window.easyform.CB780ROW119DATE387017,'CB780ROW119DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW119DATE387017.value); return false;" name="CB780ROW119DATE387017X" id="CB780ROW119DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW119DATE387017I" id="CB780ROW119DATE387017I"></a><span id="DIVCB780ROW119TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW119TIME387017" name="CB780ROW119TIME387017" tabindex="7380" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW119AMPM387017" name="CB780ROW119AMPM387017" class="form-control" tabindex="7380" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW120" id="LINKCB780ROW120" value="1255">
          <input type="hidden" name="CHILDCB780ROW120" id="CHILDCB780ROW120" value="241849">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW120DATA22466" id="OLDCB780ROW120DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW120DATA22466" name="SPAN780ROW120DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW120DATA22466" name="CB780ROW120DATA22466" tabindex="7390" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW120DATA22466" name="CB780ROW120DATA22466" tabindex="7390" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW120DATA22466" name="CB780ROW120DATA22466" tabindex="7390" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW120DATA3869" id="OLDCB780ROW120DATA3869" value="Marquez, Owen">
            Marquez, Owen
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW120DATA28817" id="OLDCB780ROW120DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW120DATA29712" id="OLDCB780ROW120DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW120DATA29712" name="CB780ROW120DATA29712" tabindex="7420" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW120DATA3871" id="OLDCB780ROW120DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW120DATA3871" name="CB780ROW120DATA3871" tabindex="7430" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW120DATA3870" id="OLDCB780ROW120DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW120DATE387017" name="CB780ROW120DATE387017" tabindex="7440" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7440" onclick="cal.select(window.easyform.CB780ROW120DATE387017,'CB780ROW120DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW120DATE387017.value); return false;" name="CB780ROW120DATE387017X" id="CB780ROW120DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW120DATE387017I" id="CB780ROW120DATE387017I"></a><span id="DIVCB780ROW120TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW120TIME387017" name="CB780ROW120TIME387017" tabindex="7440" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW120AMPM387017" name="CB780ROW120AMPM387017" class="form-control" tabindex="7440" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW121" id="LINKCB780ROW121" value="856">
          <input type="hidden" name="CHILDCB780ROW121" id="CHILDCB780ROW121" value="241774">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW121DATA22466" id="OLDCB780ROW121DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW121DATA22466" name="SPAN780ROW121DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW121DATA22466" name="CB780ROW121DATA22466" tabindex="7450" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW121DATA22466" name="CB780ROW121DATA22466" tabindex="7450" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW121DATA22466" name="CB780ROW121DATA22466" tabindex="7450" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW121DATA3869" id="OLDCB780ROW121DATA3869" value="Marshall, Angie">
            Marshall, Angie
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW121DATA28817" id="OLDCB780ROW121DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW121DATA29712" id="OLDCB780ROW121DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW121DATA29712" name="CB780ROW121DATA29712" tabindex="7480" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW121DATA3871" id="OLDCB780ROW121DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW121DATA3871" name="CB780ROW121DATA3871" tabindex="7490" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW121DATA3870" id="OLDCB780ROW121DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW121DATE387017" name="CB780ROW121DATE387017" tabindex="7500" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7500" onclick="cal.select(window.easyform.CB780ROW121DATE387017,'CB780ROW121DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW121DATE387017.value); return false;" name="CB780ROW121DATE387017X" id="CB780ROW121DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW121DATE387017I" id="CB780ROW121DATE387017I"></a><span id="DIVCB780ROW121TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW121TIME387017" name="CB780ROW121TIME387017" tabindex="7500" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW121AMPM387017" name="CB780ROW121AMPM387017" class="form-control" tabindex="7500" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW122" id="LINKCB780ROW122" value="866">
          <input type="hidden" name="CHILDCB780ROW122" id="CHILDCB780ROW122" value="241878">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW122DATA22466" id="OLDCB780ROW122DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW122DATA22466" name="SPAN780ROW122DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW122DATA22466" name="CB780ROW122DATA22466" tabindex="7510" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW122DATA22466" name="CB780ROW122DATA22466" tabindex="7510" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW122DATA22466" name="CB780ROW122DATA22466" tabindex="7510" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW122DATA3869" id="OLDCB780ROW122DATA3869" value="Marshall, Mark">
            Marshall, Mark
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW122DATA28817" id="OLDCB780ROW122DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW122DATA29712" id="OLDCB780ROW122DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW122DATA29712" name="CB780ROW122DATA29712" tabindex="7540" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW122DATA3871" id="OLDCB780ROW122DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW122DATA3871" name="CB780ROW122DATA3871" tabindex="7550" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW122DATA3870" id="OLDCB780ROW122DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW122DATE387017" name="CB780ROW122DATE387017" tabindex="7560" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7560" onclick="cal.select(window.easyform.CB780ROW122DATE387017,'CB780ROW122DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW122DATE387017.value); return false;" name="CB780ROW122DATE387017X" id="CB780ROW122DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW122DATE387017I" id="CB780ROW122DATE387017I"></a><span id="DIVCB780ROW122TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW122TIME387017" name="CB780ROW122TIME387017" tabindex="7560" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW122AMPM387017" name="CB780ROW122AMPM387017" class="form-control" tabindex="7560" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW123" id="LINKCB780ROW123" value="1158">
          <input type="hidden" name="CHILDCB780ROW123" id="CHILDCB780ROW123" value="241874">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW123DATA22466" id="OLDCB780ROW123DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW123DATA22466" name="SPAN780ROW123DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW123DATA22466" name="CB780ROW123DATA22466" tabindex="7570" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW123DATA22466" name="CB780ROW123DATA22466" tabindex="7570" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW123DATA22466" name="CB780ROW123DATA22466" tabindex="7570" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW123DATA3869" id="OLDCB780ROW123DATA3869" value="McFarland, Beckett">
            McFarland, Beckett
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW123DATA28817" id="OLDCB780ROW123DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW123DATA29712" id="OLDCB780ROW123DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW123DATA29712" name="CB780ROW123DATA29712" tabindex="7600" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW123DATA3871" id="OLDCB780ROW123DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW123DATA3871" name="CB780ROW123DATA3871" tabindex="7610" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW123DATA3870" id="OLDCB780ROW123DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW123DATE387017" name="CB780ROW123DATE387017" tabindex="7620" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7620" onclick="cal.select(window.easyform.CB780ROW123DATE387017,'CB780ROW123DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW123DATE387017.value); return false;" name="CB780ROW123DATE387017X" id="CB780ROW123DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW123DATE387017I" id="CB780ROW123DATE387017I"></a><span id="DIVCB780ROW123TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW123TIME387017" name="CB780ROW123TIME387017" tabindex="7620" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW123AMPM387017" name="CB780ROW123AMPM387017" class="form-control" tabindex="7620" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW124" id="LINKCB780ROW124" value="923">
          <input type="hidden" name="CHILDCB780ROW124" id="CHILDCB780ROW124" value="241837">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW124DATA22466" id="OLDCB780ROW124DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW124DATA22466" name="SPAN780ROW124DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW124DATA22466" name="CB780ROW124DATA22466" tabindex="7630" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW124DATA22466" name="CB780ROW124DATA22466" tabindex="7630" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW124DATA22466" name="CB780ROW124DATA22466" tabindex="7630" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW124DATA3869" id="OLDCB780ROW124DATA3869" value="McFarland, Evan">
            McFarland, Evan
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW124DATA28817" id="OLDCB780ROW124DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW124DATA29712" id="OLDCB780ROW124DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW124DATA29712" name="CB780ROW124DATA29712" tabindex="7660" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW124DATA3871" id="OLDCB780ROW124DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW124DATA3871" name="CB780ROW124DATA3871" tabindex="7670" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW124DATA3870" id="OLDCB780ROW124DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW124DATE387017" name="CB780ROW124DATE387017" tabindex="7680" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7680" onclick="cal.select(window.easyform.CB780ROW124DATE387017,'CB780ROW124DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW124DATE387017.value); return false;" name="CB780ROW124DATE387017X" id="CB780ROW124DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW124DATE387017I" id="CB780ROW124DATE387017I"></a><span id="DIVCB780ROW124TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW124TIME387017" name="CB780ROW124TIME387017" tabindex="7680" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW124AMPM387017" name="CB780ROW124AMPM387017" class="form-control" tabindex="7680" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW125" id="LINKCB780ROW125" value="1124">
          <input type="hidden" name="CHILDCB780ROW125" id="CHILDCB780ROW125" value="241894">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW125DATA22466" id="OLDCB780ROW125DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW125DATA22466" name="SPAN780ROW125DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW125DATA22466" name="CB780ROW125DATA22466" tabindex="7690" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW125DATA22466" name="CB780ROW125DATA22466" tabindex="7690" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW125DATA22466" name="CB780ROW125DATA22466" tabindex="7690" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW125DATA3869" id="OLDCB780ROW125DATA3869" value="McFarland, Ian">
            McFarland, Ian
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW125DATA28817" id="OLDCB780ROW125DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW125DATA29712" id="OLDCB780ROW125DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW125DATA29712" name="CB780ROW125DATA29712" tabindex="7720" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW125DATA3871" id="OLDCB780ROW125DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW125DATA3871" name="CB780ROW125DATA3871" tabindex="7730" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW125DATA3870" id="OLDCB780ROW125DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW125DATE387017" name="CB780ROW125DATE387017" tabindex="7740" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7740" onclick="cal.select(window.easyform.CB780ROW125DATE387017,'CB780ROW125DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW125DATE387017.value); return false;" name="CB780ROW125DATE387017X" id="CB780ROW125DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW125DATE387017I" id="CB780ROW125DATE387017I"></a><span id="DIVCB780ROW125TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW125TIME387017" name="CB780ROW125TIME387017" tabindex="7740" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW125AMPM387017" name="CB780ROW125AMPM387017" class="form-control" tabindex="7740" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW126" id="LINKCB780ROW126" value="934">
          <input type="hidden" name="CHILDCB780ROW126" id="CHILDCB780ROW126" value="241808">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW126DATA22466" id="OLDCB780ROW126DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW126DATA22466" name="SPAN780ROW126DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW126DATA22466" name="CB780ROW126DATA22466" tabindex="7750" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW126DATA22466" name="CB780ROW126DATA22466" tabindex="7750" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW126DATA22466" name="CB780ROW126DATA22466" tabindex="7750" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW126DATA3869" id="OLDCB780ROW126DATA3869" value="McFarland, Kristin">
            McFarland, Kristin
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW126DATA28817" id="OLDCB780ROW126DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW126DATA29712" id="OLDCB780ROW126DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW126DATA29712" name="CB780ROW126DATA29712" tabindex="7780" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW126DATA3871" id="OLDCB780ROW126DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW126DATA3871" name="CB780ROW126DATA3871" tabindex="7790" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW126DATA3870" id="OLDCB780ROW126DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW126DATE387017" name="CB780ROW126DATE387017" tabindex="7800" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7800" onclick="cal.select(window.easyform.CB780ROW126DATE387017,'CB780ROW126DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW126DATE387017.value); return false;" name="CB780ROW126DATE387017X" id="CB780ROW126DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW126DATE387017I" id="CB780ROW126DATE387017I"></a><span id="DIVCB780ROW126TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW126TIME387017" name="CB780ROW126TIME387017" tabindex="7800" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW126AMPM387017" name="CB780ROW126AMPM387017" class="form-control" tabindex="7800" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW127" id="LINKCB780ROW127" value="1269">
          <input type="hidden" name="CHILDCB780ROW127" id="CHILDCB780ROW127" value="241814">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW127DATA22466" id="OLDCB780ROW127DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW127DATA22466" name="SPAN780ROW127DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW127DATA22466" name="CB780ROW127DATA22466" tabindex="7810" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW127DATA22466" name="CB780ROW127DATA22466" tabindex="7810" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW127DATA22466" name="CB780ROW127DATA22466" tabindex="7810" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW127DATA3869" id="OLDCB780ROW127DATA3869" value="McLeer, Douglas">
            McLeer, Douglas
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW127DATA28817" id="OLDCB780ROW127DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW127DATA29712" id="OLDCB780ROW127DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW127DATA29712" name="CB780ROW127DATA29712" tabindex="7840" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW127DATA3871" id="OLDCB780ROW127DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW127DATA3871" name="CB780ROW127DATA3871" tabindex="7850" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW127DATA3870" id="OLDCB780ROW127DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW127DATE387017" name="CB780ROW127DATE387017" tabindex="7860" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7860" onclick="cal.select(window.easyform.CB780ROW127DATE387017,'CB780ROW127DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW127DATE387017.value); return false;" name="CB780ROW127DATE387017X" id="CB780ROW127DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW127DATE387017I" id="CB780ROW127DATE387017I"></a><span id="DIVCB780ROW127TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW127TIME387017" name="CB780ROW127TIME387017" tabindex="7860" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW127AMPM387017" name="CB780ROW127AMPM387017" class="form-control" tabindex="7860" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW128" id="LINKCB780ROW128" value="1226">
          <input type="hidden" name="CHILDCB780ROW128" id="CHILDCB780ROW128" value="241831">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW128DATA22466" id="OLDCB780ROW128DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW128DATA22466" name="SPAN780ROW128DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW128DATA22466" name="CB780ROW128DATA22466" tabindex="7870" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW128DATA22466" name="CB780ROW128DATA22466" tabindex="7870" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW128DATA22466" name="CB780ROW128DATA22466" tabindex="7870" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW128DATA3869" id="OLDCB780ROW128DATA3869" value="McLeer, Krissy">
            McLeer, Krissy
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW128DATA28817" id="OLDCB780ROW128DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW128DATA29712" id="OLDCB780ROW128DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW128DATA29712" name="CB780ROW128DATA29712" tabindex="7900" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW128DATA3871" id="OLDCB780ROW128DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW128DATA3871" name="CB780ROW128DATA3871" tabindex="7910" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW128DATA3870" id="OLDCB780ROW128DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW128DATE387017" name="CB780ROW128DATE387017" tabindex="7920" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7920" onclick="cal.select(window.easyform.CB780ROW128DATE387017,'CB780ROW128DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW128DATE387017.value); return false;" name="CB780ROW128DATE387017X" id="CB780ROW128DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW128DATE387017I" id="CB780ROW128DATE387017I"></a><span id="DIVCB780ROW128TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW128TIME387017" name="CB780ROW128TIME387017" tabindex="7920" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW128AMPM387017" name="CB780ROW128AMPM387017" class="form-control" tabindex="7920" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW129" id="LINKCB780ROW129" value="1218">
          <input type="hidden" name="CHILDCB780ROW129" id="CHILDCB780ROW129" value="241872">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW129DATA22466" id="OLDCB780ROW129DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW129DATA22466" name="SPAN780ROW129DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW129DATA22466" name="CB780ROW129DATA22466" tabindex="7930" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW129DATA22466" name="CB780ROW129DATA22466" tabindex="7930" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW129DATA22466" name="CB780ROW129DATA22466" tabindex="7930" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW129DATA3869" id="OLDCB780ROW129DATA3869" value="McLeer, Levi">
            McLeer, Levi
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW129DATA28817" id="OLDCB780ROW129DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW129DATA29712" id="OLDCB780ROW129DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW129DATA29712" name="CB780ROW129DATA29712" tabindex="7960" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW129DATA3871" id="OLDCB780ROW129DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW129DATA3871" name="CB780ROW129DATA3871" tabindex="7970" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW129DATA3870" id="OLDCB780ROW129DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW129DATE387017" name="CB780ROW129DATE387017" tabindex="7980" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="7980" onclick="cal.select(window.easyform.CB780ROW129DATE387017,'CB780ROW129DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW129DATE387017.value); return false;" name="CB780ROW129DATE387017X" id="CB780ROW129DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW129DATE387017I" id="CB780ROW129DATE387017I"></a><span id="DIVCB780ROW129TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW129TIME387017" name="CB780ROW129TIME387017" tabindex="7980" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW129AMPM387017" name="CB780ROW129AMPM387017" class="form-control" tabindex="7980" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW130" id="LINKCB780ROW130" value="1219">
          <input type="hidden" name="CHILDCB780ROW130" id="CHILDCB780ROW130" value="241762">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW130DATA22466" id="OLDCB780ROW130DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW130DATA22466" name="SPAN780ROW130DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW130DATA22466" name="CB780ROW130DATA22466" tabindex="7990" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW130DATA22466" name="CB780ROW130DATA22466" tabindex="7990" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW130DATA22466" name="CB780ROW130DATA22466" tabindex="7990" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW130DATA3869" id="OLDCB780ROW130DATA3869" value="McLeer, Liam">
            McLeer, Liam
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW130DATA28817" id="OLDCB780ROW130DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW130DATA29712" id="OLDCB780ROW130DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW130DATA29712" name="CB780ROW130DATA29712" tabindex="8020" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW130DATA3871" id="OLDCB780ROW130DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW130DATA3871" name="CB780ROW130DATA3871" tabindex="8030" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW130DATA3870" id="OLDCB780ROW130DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW130DATE387017" name="CB780ROW130DATE387017" tabindex="8040" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8040" onclick="cal.select(window.easyform.CB780ROW130DATE387017,'CB780ROW130DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW130DATE387017.value); return false;" name="CB780ROW130DATE387017X" id="CB780ROW130DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW130DATE387017I" id="CB780ROW130DATE387017I"></a><span id="DIVCB780ROW130TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW130TIME387017" name="CB780ROW130TIME387017" tabindex="8040" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW130AMPM387017" name="CB780ROW130AMPM387017" class="form-control" tabindex="8040" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW131" id="LINKCB780ROW131" value="1256">
          <input type="hidden" name="CHILDCB780ROW131" id="CHILDCB780ROW131" value="241737">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW131DATA22466" id="OLDCB780ROW131DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW131DATA22466" name="SPAN780ROW131DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW131DATA22466" name="CB780ROW131DATA22466" tabindex="8050" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW131DATA22466" name="CB780ROW131DATA22466" tabindex="8050" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW131DATA22466" name="CB780ROW131DATA22466" tabindex="8050" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW131DATA3869" id="OLDCB780ROW131DATA3869" value="Medler, Bennett">
            Medler, Bennett
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW131DATA28817" id="OLDCB780ROW131DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW131DATA29712" id="OLDCB780ROW131DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW131DATA29712" name="CB780ROW131DATA29712" tabindex="8080" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW131DATA3871" id="OLDCB780ROW131DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW131DATA3871" name="CB780ROW131DATA3871" tabindex="8090" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW131DATA3870" id="OLDCB780ROW131DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW131DATE387017" name="CB780ROW131DATE387017" tabindex="8100" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8100" onclick="cal.select(window.easyform.CB780ROW131DATE387017,'CB780ROW131DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW131DATE387017.value); return false;" name="CB780ROW131DATE387017X" id="CB780ROW131DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW131DATE387017I" id="CB780ROW131DATE387017I"></a><span id="DIVCB780ROW131TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW131TIME387017" name="CB780ROW131TIME387017" tabindex="8100" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW131AMPM387017" name="CB780ROW131AMPM387017" class="form-control" tabindex="8100" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW132" id="LINKCB780ROW132" value="1620">
          <input type="hidden" name="CHILDCB780ROW132" id="CHILDCB780ROW132" value="248242">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW132DATA22466" id="OLDCB780ROW132DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW132DATA22466" name="SPAN780ROW132DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW132DATA22466" name="CB780ROW132DATA22466" tabindex="8110" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW132DATA22466" name="CB780ROW132DATA22466" tabindex="8110" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW132DATA22466" name="CB780ROW132DATA22466" tabindex="8110" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW132DATA3869" id="OLDCB780ROW132DATA3869" value="Modglin, Abel">
            Modglin, Abel
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW132DATA28817" id="OLDCB780ROW132DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW132DATA29712" id="OLDCB780ROW132DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW132DATA29712" name="CB780ROW132DATA29712" tabindex="8140" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW132DATA3871" id="OLDCB780ROW132DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW132DATA3871" name="CB780ROW132DATA3871" tabindex="8150" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW132DATA3870" id="OLDCB780ROW132DATA3870" value="08/23/2026 11:52 PM">
            <input type="text" class="form-control" id="CB780ROW132DATE387017" name="CB780ROW132DATE387017" tabindex="8160" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8160" onclick="cal.select(window.easyform.CB780ROW132DATE387017,'CB780ROW132DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW132DATE387017.value); return false;" name="CB780ROW132DATE387017X" id="CB780ROW132DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW132DATE387017I" id="CB780ROW132DATE387017I"></a><span id="DIVCB780ROW132TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW132TIME387017" name="CB780ROW132TIME387017" tabindex="8160" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:52"><select id="CB780ROW132AMPM387017" name="CB780ROW132AMPM387017" class="form-control" tabindex="8160" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW133" id="LINKCB780ROW133" value="1622">
          <input type="hidden" name="CHILDCB780ROW133" id="CHILDCB780ROW133" value="249671">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW133DATA22466" id="OLDCB780ROW133DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW133DATA22466" name="SPAN780ROW133DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW133DATA22466" name="CB780ROW133DATA22466" tabindex="8170" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW133DATA22466" name="CB780ROW133DATA22466" tabindex="8170" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW133DATA22466" name="CB780ROW133DATA22466" tabindex="8170" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW133DATA3869" id="OLDCB780ROW133DATA3869" value="Modglin, Kirk">
            Modglin, Kirk
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW133DATA28817" id="OLDCB780ROW133DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW133DATA29712" id="OLDCB780ROW133DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW133DATA29712" name="CB780ROW133DATA29712" tabindex="8200" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW133DATA3871" id="OLDCB780ROW133DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW133DATA3871" name="CB780ROW133DATA3871" tabindex="8210" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW133DATA3870" id="OLDCB780ROW133DATA3870" value="08/23/2026 11:54 PM">
            <input type="text" class="form-control" id="CB780ROW133DATE387017" name="CB780ROW133DATE387017" tabindex="8220" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8220" onclick="cal.select(window.easyform.CB780ROW133DATE387017,'CB780ROW133DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW133DATE387017.value); return false;" name="CB780ROW133DATE387017X" id="CB780ROW133DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW133DATE387017I" id="CB780ROW133DATE387017I"></a><span id="DIVCB780ROW133TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW133TIME387017" name="CB780ROW133TIME387017" tabindex="8220" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="11:54"><select id="CB780ROW133AMPM387017" name="CB780ROW133AMPM387017" class="form-control" tabindex="8220" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW134" id="LINKCB780ROW134" value="1276">
          <input type="hidden" name="CHILDCB780ROW134" id="CHILDCB780ROW134" value="241728">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW134DATA22466" id="OLDCB780ROW134DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW134DATA22466" name="SPAN780ROW134DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW134DATA22466" name="CB780ROW134DATA22466" tabindex="8230" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW134DATA22466" name="CB780ROW134DATA22466" tabindex="8230" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW134DATA22466" name="CB780ROW134DATA22466" tabindex="8230" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW134DATA3869" id="OLDCB780ROW134DATA3869" value="Morris, Jack">
            Morris, Jack
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW134DATA28817" id="OLDCB780ROW134DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW134DATA29712" id="OLDCB780ROW134DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW134DATA29712" name="CB780ROW134DATA29712" tabindex="8260" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW134DATA3871" id="OLDCB780ROW134DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW134DATA3871" name="CB780ROW134DATA3871" tabindex="8270" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW134DATA3870" id="OLDCB780ROW134DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW134DATE387017" name="CB780ROW134DATE387017" tabindex="8280" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8280" onclick="cal.select(window.easyform.CB780ROW134DATE387017,'CB780ROW134DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW134DATE387017.value); return false;" name="CB780ROW134DATE387017X" id="CB780ROW134DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW134DATE387017I" id="CB780ROW134DATE387017I"></a><span id="DIVCB780ROW134TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW134TIME387017" name="CB780ROW134TIME387017" tabindex="8280" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW134AMPM387017" name="CB780ROW134AMPM387017" class="form-control" tabindex="8280" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW135" id="LINKCB780ROW135" value="1282">
          <input type="hidden" name="CHILDCB780ROW135" id="CHILDCB780ROW135" value="241754">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW135DATA22466" id="OLDCB780ROW135DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW135DATA22466" name="SPAN780ROW135DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW135DATA22466" name="CB780ROW135DATA22466" tabindex="8290" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW135DATA22466" name="CB780ROW135DATA22466" tabindex="8290" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW135DATA22466" name="CB780ROW135DATA22466" tabindex="8290" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW135DATA3869" id="OLDCB780ROW135DATA3869" value="Morris, Lacey">
            Morris, Lacey
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW135DATA28817" id="OLDCB780ROW135DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW135DATA29712" id="OLDCB780ROW135DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW135DATA29712" name="CB780ROW135DATA29712" tabindex="8320" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW135DATA3871" id="OLDCB780ROW135DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW135DATA3871" name="CB780ROW135DATA3871" tabindex="8330" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW135DATA3870" id="OLDCB780ROW135DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW135DATE387017" name="CB780ROW135DATE387017" tabindex="8340" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8340" onclick="cal.select(window.easyform.CB780ROW135DATE387017,'CB780ROW135DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW135DATE387017.value); return false;" name="CB780ROW135DATE387017X" id="CB780ROW135DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW135DATE387017I" id="CB780ROW135DATE387017I"></a><span id="DIVCB780ROW135TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW135TIME387017" name="CB780ROW135TIME387017" tabindex="8340" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW135AMPM387017" name="CB780ROW135AMPM387017" class="form-control" tabindex="8340" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW136" id="LINKCB780ROW136" value="1002">
          <input type="hidden" name="CHILDCB780ROW136" id="CHILDCB780ROW136" value="241771">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW136DATA22466" id="OLDCB780ROW136DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW136DATA22466" name="SPAN780ROW136DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW136DATA22466" name="CB780ROW136DATA22466" tabindex="8350" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW136DATA22466" name="CB780ROW136DATA22466" tabindex="8350" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW136DATA22466" name="CB780ROW136DATA22466" tabindex="8350" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW136DATA3869" id="OLDCB780ROW136DATA3869" value="Mysyk, Alexander">
            Mysyk, Alexander
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW136DATA28817" id="OLDCB780ROW136DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW136DATA29712" id="OLDCB780ROW136DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW136DATA29712" name="CB780ROW136DATA29712" tabindex="8380" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW136DATA3871" id="OLDCB780ROW136DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW136DATA3871" name="CB780ROW136DATA3871" tabindex="8390" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW136DATA3870" id="OLDCB780ROW136DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW136DATE387017" name="CB780ROW136DATE387017" tabindex="8400" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8400" onclick="cal.select(window.easyform.CB780ROW136DATE387017,'CB780ROW136DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW136DATE387017.value); return false;" name="CB780ROW136DATE387017X" id="CB780ROW136DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW136DATE387017I" id="CB780ROW136DATE387017I"></a><span id="DIVCB780ROW136TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW136TIME387017" name="CB780ROW136TIME387017" tabindex="8400" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW136AMPM387017" name="CB780ROW136AMPM387017" class="form-control" tabindex="8400" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW137" id="LINKCB780ROW137" value="1288">
          <input type="hidden" name="CHILDCB780ROW137" id="CHILDCB780ROW137" value="241773">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW137DATA22466" id="OLDCB780ROW137DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW137DATA22466" name="SPAN780ROW137DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW137DATA22466" name="CB780ROW137DATA22466" tabindex="8410" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW137DATA22466" name="CB780ROW137DATA22466" tabindex="8410" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW137DATA22466" name="CB780ROW137DATA22466" tabindex="8410" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW137DATA3869" id="OLDCB780ROW137DATA3869" value="Mysyk, Andriy">
            Mysyk, Andriy
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW137DATA28817" id="OLDCB780ROW137DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW137DATA29712" id="OLDCB780ROW137DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW137DATA29712" name="CB780ROW137DATA29712" tabindex="8440" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW137DATA3871" id="OLDCB780ROW137DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW137DATA3871" name="CB780ROW137DATA3871" tabindex="8450" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW137DATA3870" id="OLDCB780ROW137DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW137DATE387017" name="CB780ROW137DATE387017" tabindex="8460" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8460" onclick="cal.select(window.easyform.CB780ROW137DATE387017,'CB780ROW137DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW137DATE387017.value); return false;" name="CB780ROW137DATE387017X" id="CB780ROW137DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW137DATE387017I" id="CB780ROW137DATE387017I"></a><span id="DIVCB780ROW137TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW137TIME387017" name="CB780ROW137TIME387017" tabindex="8460" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW137AMPM387017" name="CB780ROW137AMPM387017" class="form-control" tabindex="8460" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW138" id="LINKCB780ROW138" value="1191">
          <input type="hidden" name="CHILDCB780ROW138" id="CHILDCB780ROW138" value="241775">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW138DATA22466" id="OLDCB780ROW138DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW138DATA22466" name="SPAN780ROW138DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW138DATA22466" name="CB780ROW138DATA22466" tabindex="8470" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW138DATA22466" name="CB780ROW138DATA22466" tabindex="8470" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW138DATA22466" name="CB780ROW138DATA22466" tabindex="8470" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW138DATA3869" id="OLDCB780ROW138DATA3869" value="Nair, Ananya">
            Nair, Ananya
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW138DATA28817" id="OLDCB780ROW138DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW138DATA29712" id="OLDCB780ROW138DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW138DATA29712" name="CB780ROW138DATA29712" tabindex="8500" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW138DATA3871" id="OLDCB780ROW138DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW138DATA3871" name="CB780ROW138DATA3871" tabindex="8510" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW138DATA3870" id="OLDCB780ROW138DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW138DATE387017" name="CB780ROW138DATE387017" tabindex="8520" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8520" onclick="cal.select(window.easyform.CB780ROW138DATE387017,'CB780ROW138DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW138DATE387017.value); return false;" name="CB780ROW138DATE387017X" id="CB780ROW138DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW138DATE387017I" id="CB780ROW138DATE387017I"></a><span id="DIVCB780ROW138TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW138TIME387017" name="CB780ROW138TIME387017" tabindex="8520" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW138AMPM387017" name="CB780ROW138AMPM387017" class="form-control" tabindex="8520" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW139" id="LINKCB780ROW139" value="1206">
          <input type="hidden" name="CHILDCB780ROW139" id="CHILDCB780ROW139" value="241819">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW139DATA22466" id="OLDCB780ROW139DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW139DATA22466" name="SPAN780ROW139DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW139DATA22466" name="CB780ROW139DATA22466" tabindex="8530" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW139DATA22466" name="CB780ROW139DATA22466" tabindex="8530" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW139DATA22466" name="CB780ROW139DATA22466" tabindex="8530" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW139DATA3869" id="OLDCB780ROW139DATA3869" value="Nair, Jithun">
            Nair, Jithun
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW139DATA28817" id="OLDCB780ROW139DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW139DATA29712" id="OLDCB780ROW139DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW139DATA29712" name="CB780ROW139DATA29712" tabindex="8560" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW139DATA3871" id="OLDCB780ROW139DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW139DATA3871" name="CB780ROW139DATA3871" tabindex="8570" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW139DATA3870" id="OLDCB780ROW139DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW139DATE387017" name="CB780ROW139DATE387017" tabindex="8580" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8580" onclick="cal.select(window.easyform.CB780ROW139DATE387017,'CB780ROW139DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW139DATE387017.value); return false;" name="CB780ROW139DATE387017X" id="CB780ROW139DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW139DATE387017I" id="CB780ROW139DATE387017I"></a><span id="DIVCB780ROW139TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW139TIME387017" name="CB780ROW139TIME387017" tabindex="8580" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW139AMPM387017" name="CB780ROW139AMPM387017" class="form-control" tabindex="8580" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW140" id="LINKCB780ROW140" value="1533">
          <input type="hidden" name="CHILDCB780ROW140" id="CHILDCB780ROW140" value="241866">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW140DATA22466" id="OLDCB780ROW140DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW140DATA22466" name="SPAN780ROW140DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW140DATA22466" name="CB780ROW140DATA22466" tabindex="8590" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW140DATA22466" name="CB780ROW140DATA22466" tabindex="8590" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW140DATA22466" name="CB780ROW140DATA22466" tabindex="8590" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW140DATA3869" id="OLDCB780ROW140DATA3869" value="Nallathambi, Ravetha">
            Nallathambi, Ravetha
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW140DATA28817" id="OLDCB780ROW140DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW140DATA29712" id="OLDCB780ROW140DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW140DATA29712" name="CB780ROW140DATA29712" tabindex="8620" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW140DATA3871" id="OLDCB780ROW140DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW140DATA3871" name="CB780ROW140DATA3871" tabindex="8630" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW140DATA3870" id="OLDCB780ROW140DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW140DATE387017" name="CB780ROW140DATE387017" tabindex="8640" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8640" onclick="cal.select(window.easyform.CB780ROW140DATE387017,'CB780ROW140DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW140DATE387017.value); return false;" name="CB780ROW140DATE387017X" id="CB780ROW140DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW140DATE387017I" id="CB780ROW140DATE387017I"></a><span id="DIVCB780ROW140TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW140TIME387017" name="CB780ROW140TIME387017" tabindex="8640" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW140AMPM387017" name="CB780ROW140AMPM387017" class="form-control" tabindex="8640" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW141" id="LINKCB780ROW141" value="1172">
          <input type="hidden" name="CHILDCB780ROW141" id="CHILDCB780ROW141" value="241847">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW141DATA22466" id="OLDCB780ROW141DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW141DATA22466" name="SPAN780ROW141DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW141DATA22466" name="CB780ROW141DATA22466" tabindex="8650" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW141DATA22466" name="CB780ROW141DATA22466" tabindex="8650" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW141DATA22466" name="CB780ROW141DATA22466" tabindex="8650" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW141DATA3869" id="OLDCB780ROW141DATA3869" value="North, Allison">
            North, Allison
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW141DATA28817" id="OLDCB780ROW141DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW141DATA29712" id="OLDCB780ROW141DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW141DATA29712" name="CB780ROW141DATA29712" tabindex="8680" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW141DATA3871" id="OLDCB780ROW141DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW141DATA3871" name="CB780ROW141DATA3871" tabindex="8690" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW141DATA3870" id="OLDCB780ROW141DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW141DATE387017" name="CB780ROW141DATE387017" tabindex="8700" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8700" onclick="cal.select(window.easyform.CB780ROW141DATE387017,'CB780ROW141DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW141DATE387017.value); return false;" name="CB780ROW141DATE387017X" id="CB780ROW141DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW141DATE387017I" id="CB780ROW141DATE387017I"></a><span id="DIVCB780ROW141TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW141TIME387017" name="CB780ROW141TIME387017" tabindex="8700" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW141AMPM387017" name="CB780ROW141AMPM387017" class="form-control" tabindex="8700" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW142" id="LINKCB780ROW142" value="1159">
          <input type="hidden" name="CHILDCB780ROW142" id="CHILDCB780ROW142" value="241763">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW142DATA22466" id="OLDCB780ROW142DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW142DATA22466" name="SPAN780ROW142DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW142DATA22466" name="CB780ROW142DATA22466" tabindex="8710" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW142DATA22466" name="CB780ROW142DATA22466" tabindex="8710" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW142DATA22466" name="CB780ROW142DATA22466" tabindex="8710" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW142DATA3869" id="OLDCB780ROW142DATA3869" value="North, Arlo">
            North, Arlo
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW142DATA28817" id="OLDCB780ROW142DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW142DATA29712" id="OLDCB780ROW142DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW142DATA29712" name="CB780ROW142DATA29712" tabindex="8740" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW142DATA3871" id="OLDCB780ROW142DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW142DATA3871" name="CB780ROW142DATA3871" tabindex="8750" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW142DATA3870" id="OLDCB780ROW142DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW142DATE387017" name="CB780ROW142DATE387017" tabindex="8760" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8760" onclick="cal.select(window.easyform.CB780ROW142DATE387017,'CB780ROW142DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW142DATE387017.value); return false;" name="CB780ROW142DATE387017X" id="CB780ROW142DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW142DATE387017I" id="CB780ROW142DATE387017I"></a><span id="DIVCB780ROW142TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW142TIME387017" name="CB780ROW142TIME387017" tabindex="8760" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW142AMPM387017" name="CB780ROW142AMPM387017" class="form-control" tabindex="8760" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW143" id="LINKCB780ROW143" value="1160">
          <input type="hidden" name="CHILDCB780ROW143" id="CHILDCB780ROW143" value="241810">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW143DATA22466" id="OLDCB780ROW143DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW143DATA22466" name="SPAN780ROW143DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW143DATA22466" name="CB780ROW143DATA22466" tabindex="8770" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW143DATA22466" name="CB780ROW143DATA22466" tabindex="8770" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW143DATA22466" name="CB780ROW143DATA22466" tabindex="8770" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW143DATA3869" id="OLDCB780ROW143DATA3869" value="North, Davis">
            North, Davis
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW143DATA28817" id="OLDCB780ROW143DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW143DATA29712" id="OLDCB780ROW143DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW143DATA29712" name="CB780ROW143DATA29712" tabindex="8800" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW143DATA3871" id="OLDCB780ROW143DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW143DATA3871" name="CB780ROW143DATA3871" tabindex="8810" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW143DATA3870" id="OLDCB780ROW143DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW143DATE387017" name="CB780ROW143DATE387017" tabindex="8820" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8820" onclick="cal.select(window.easyform.CB780ROW143DATE387017,'CB780ROW143DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW143DATE387017.value); return false;" name="CB780ROW143DATE387017X" id="CB780ROW143DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW143DATE387017I" id="CB780ROW143DATE387017I"></a><span id="DIVCB780ROW143TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW143TIME387017" name="CB780ROW143TIME387017" tabindex="8820" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW143AMPM387017" name="CB780ROW143AMPM387017" class="form-control" tabindex="8820" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW144" id="LINKCB780ROW144" value="599">
          <input type="hidden" name="CHILDCB780ROW144" id="CHILDCB780ROW144" value="241830">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW144DATA22466" id="OLDCB780ROW144DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW144DATA22466" name="SPAN780ROW144DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW144DATA22466" name="CB780ROW144DATA22466" tabindex="8830" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW144DATA22466" name="CB780ROW144DATA22466" tabindex="8830" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW144DATA22466" name="CB780ROW144DATA22466" tabindex="8830" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW144DATA3869" id="OLDCB780ROW144DATA3869" value="Omran, Ahmed">
            Omran, Ahmed
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW144DATA28817" id="OLDCB780ROW144DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW144DATA29712" id="OLDCB780ROW144DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW144DATA29712" name="CB780ROW144DATA29712" tabindex="8860" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW144DATA3871" id="OLDCB780ROW144DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW144DATA3871" name="CB780ROW144DATA3871" tabindex="8870" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW144DATA3870" id="OLDCB780ROW144DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW144DATE387017" name="CB780ROW144DATE387017" tabindex="8880" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8880" onclick="cal.select(window.easyform.CB780ROW144DATE387017,'CB780ROW144DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW144DATE387017.value); return false;" name="CB780ROW144DATE387017X" id="CB780ROW144DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW144DATE387017I" id="CB780ROW144DATE387017I"></a><span id="DIVCB780ROW144TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW144TIME387017" name="CB780ROW144TIME387017" tabindex="8880" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW144AMPM387017" name="CB780ROW144AMPM387017" class="form-control" tabindex="8880" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW145" id="LINKCB780ROW145" value="643">
          <input type="hidden" name="CHILDCB780ROW145" id="CHILDCB780ROW145" value="241897">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW145DATA22466" id="OLDCB780ROW145DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW145DATA22466" name="SPAN780ROW145DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW145DATA22466" name="CB780ROW145DATA22466" tabindex="8890" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW145DATA22466" name="CB780ROW145DATA22466" tabindex="8890" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW145DATA22466" name="CB780ROW145DATA22466" tabindex="8890" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW145DATA3869" id="OLDCB780ROW145DATA3869" value="Omran, Haroun">
            Omran, Haroun
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW145DATA28817" id="OLDCB780ROW145DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW145DATA29712" id="OLDCB780ROW145DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW145DATA29712" name="CB780ROW145DATA29712" tabindex="8920" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW145DATA3871" id="OLDCB780ROW145DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW145DATA3871" name="CB780ROW145DATA3871" tabindex="8930" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW145DATA3870" id="OLDCB780ROW145DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW145DATE387017" name="CB780ROW145DATE387017" tabindex="8940" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="8940" onclick="cal.select(window.easyform.CB780ROW145DATE387017,'CB780ROW145DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW145DATE387017.value); return false;" name="CB780ROW145DATE387017X" id="CB780ROW145DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW145DATE387017I" id="CB780ROW145DATE387017I"></a><span id="DIVCB780ROW145TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW145TIME387017" name="CB780ROW145TIME387017" tabindex="8940" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW145AMPM387017" name="CB780ROW145AMPM387017" class="form-control" tabindex="8940" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW146" id="LINKCB780ROW146" value="1079">
          <input type="hidden" name="CHILDCB780ROW146" id="CHILDCB780ROW146" value="241758">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW146DATA22466" id="OLDCB780ROW146DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW146DATA22466" name="SPAN780ROW146DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW146DATA22466" name="CB780ROW146DATA22466" tabindex="8950" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW146DATA22466" name="CB780ROW146DATA22466" tabindex="8950" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW146DATA22466" name="CB780ROW146DATA22466" tabindex="8950" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW146DATA3869" id="OLDCB780ROW146DATA3869" value="Patel, Amy">
            Patel, Amy
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW146DATA28817" id="OLDCB780ROW146DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW146DATA29712" id="OLDCB780ROW146DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW146DATA29712" name="CB780ROW146DATA29712" tabindex="8980" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW146DATA3871" id="OLDCB780ROW146DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW146DATA3871" name="CB780ROW146DATA3871" tabindex="8990" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW146DATA3870" id="OLDCB780ROW146DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW146DATE387017" name="CB780ROW146DATE387017" tabindex="9000" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9000" onclick="cal.select(window.easyform.CB780ROW146DATE387017,'CB780ROW146DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW146DATE387017.value); return false;" name="CB780ROW146DATE387017X" id="CB780ROW146DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW146DATE387017I" id="CB780ROW146DATE387017I"></a><span id="DIVCB780ROW146TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW146TIME387017" name="CB780ROW146TIME387017" tabindex="9000" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW146AMPM387017" name="CB780ROW146AMPM387017" class="form-control" tabindex="9000" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW147" id="LINKCB780ROW147" value="968">
          <input type="hidden" name="CHILDCB780ROW147" id="CHILDCB780ROW147" value="241785">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW147DATA22466" id="OLDCB780ROW147DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW147DATA22466" name="SPAN780ROW147DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW147DATA22466" name="CB780ROW147DATA22466" tabindex="9010" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW147DATA22466" name="CB780ROW147DATA22466" tabindex="9010" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW147DATA22466" name="CB780ROW147DATA22466" tabindex="9010" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW147DATA3869" id="OLDCB780ROW147DATA3869" value="Purohit, Anay">
            Purohit, Anay
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW147DATA28817" id="OLDCB780ROW147DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW147DATA29712" id="OLDCB780ROW147DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW147DATA29712" name="CB780ROW147DATA29712" tabindex="9040" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW147DATA3871" id="OLDCB780ROW147DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW147DATA3871" name="CB780ROW147DATA3871" tabindex="9050" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW147DATA3870" id="OLDCB780ROW147DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW147DATE387017" name="CB780ROW147DATE387017" tabindex="9060" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9060" onclick="cal.select(window.easyform.CB780ROW147DATE387017,'CB780ROW147DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW147DATE387017.value); return false;" name="CB780ROW147DATE387017X" id="CB780ROW147DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW147DATE387017I" id="CB780ROW147DATE387017I"></a><span id="DIVCB780ROW147TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW147TIME387017" name="CB780ROW147TIME387017" tabindex="9060" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW147AMPM387017" name="CB780ROW147AMPM387017" class="form-control" tabindex="9060" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW148" id="LINKCB780ROW148" value="980">
          <input type="hidden" name="CHILDCB780ROW148" id="CHILDCB780ROW148" value="241841">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW148DATA22466" id="OLDCB780ROW148DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW148DATA22466" name="SPAN780ROW148DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW148DATA22466" name="CB780ROW148DATA22466" tabindex="9070" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW148DATA22466" name="CB780ROW148DATA22466" tabindex="9070" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW148DATA22466" name="CB780ROW148DATA22466" tabindex="9070" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW148DATA3869" id="OLDCB780ROW148DATA3869" value="Purohit, Vijendra">
            Purohit, Vijendra
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW148DATA28817" id="OLDCB780ROW148DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW148DATA29712" id="OLDCB780ROW148DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW148DATA29712" name="CB780ROW148DATA29712" tabindex="9100" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW148DATA3871" id="OLDCB780ROW148DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW148DATA3871" name="CB780ROW148DATA3871" tabindex="9110" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW148DATA3870" id="OLDCB780ROW148DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW148DATE387017" name="CB780ROW148DATE387017" tabindex="9120" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9120" onclick="cal.select(window.easyform.CB780ROW148DATE387017,'CB780ROW148DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW148DATE387017.value); return false;" name="CB780ROW148DATE387017X" id="CB780ROW148DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW148DATE387017I" id="CB780ROW148DATE387017I"></a><span id="DIVCB780ROW148TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW148TIME387017" name="CB780ROW148TIME387017" tabindex="9120" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW148AMPM387017" name="CB780ROW148AMPM387017" class="form-control" tabindex="9120" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW149" id="LINKCB780ROW149" value="1207">
          <input type="hidden" name="CHILDCB780ROW149" id="CHILDCB780ROW149" value="241898">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW149DATA22466" id="OLDCB780ROW149DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW149DATA22466" name="SPAN780ROW149DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW149DATA22466" name="CB780ROW149DATA22466" tabindex="9130" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW149DATA22466" name="CB780ROW149DATA22466" tabindex="9130" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW149DATA22466" name="CB780ROW149DATA22466" tabindex="9130" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW149DATA3869" id="OLDCB780ROW149DATA3869" value="Rios, Amanda">
            Rios, Amanda
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW149DATA28817" id="OLDCB780ROW149DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW149DATA29712" id="OLDCB780ROW149DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW149DATA29712" name="CB780ROW149DATA29712" tabindex="9160" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW149DATA3871" id="OLDCB780ROW149DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW149DATA3871" name="CB780ROW149DATA3871" tabindex="9170" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW149DATA3870" id="OLDCB780ROW149DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW149DATE387017" name="CB780ROW149DATE387017" tabindex="9180" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9180" onclick="cal.select(window.easyform.CB780ROW149DATE387017,'CB780ROW149DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW149DATE387017.value); return false;" name="CB780ROW149DATE387017X" id="CB780ROW149DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW149DATE387017I" id="CB780ROW149DATE387017I"></a><span id="DIVCB780ROW149TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW149TIME387017" name="CB780ROW149TIME387017" tabindex="9180" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW149AMPM387017" name="CB780ROW149AMPM387017" class="form-control" tabindex="9180" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW150" id="LINKCB780ROW150" value="1243">
          <input type="hidden" name="CHILDCB780ROW150" id="CHILDCB780ROW150" value="241816">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW150DATA22466" id="OLDCB780ROW150DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW150DATA22466" name="SPAN780ROW150DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW150DATA22466" name="CB780ROW150DATA22466" tabindex="9190" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW150DATA22466" name="CB780ROW150DATA22466" tabindex="9190" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW150DATA22466" name="CB780ROW150DATA22466" tabindex="9190" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW150DATA3869" id="OLDCB780ROW150DATA3869" value="Rios, Luciana">
            Rios, Luciana
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW150DATA28817" id="OLDCB780ROW150DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW150DATA29712" id="OLDCB780ROW150DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW150DATA29712" name="CB780ROW150DATA29712" tabindex="9220" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW150DATA3871" id="OLDCB780ROW150DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW150DATA3871" name="CB780ROW150DATA3871" tabindex="9230" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW150DATA3870" id="OLDCB780ROW150DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW150DATE387017" name="CB780ROW150DATE387017" tabindex="9240" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9240" onclick="cal.select(window.easyform.CB780ROW150DATE387017,'CB780ROW150DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW150DATE387017.value); return false;" name="CB780ROW150DATE387017X" id="CB780ROW150DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW150DATE387017I" id="CB780ROW150DATE387017I"></a><span id="DIVCB780ROW150TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW150TIME387017" name="CB780ROW150TIME387017" tabindex="9240" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW150AMPM387017" name="CB780ROW150AMPM387017" class="form-control" tabindex="9240" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW151" id="LINKCB780ROW151" value="745">
          <input type="hidden" name="CHILDCB780ROW151" id="CHILDCB780ROW151" value="241834">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW151DATA22466" id="OLDCB780ROW151DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW151DATA22466" name="SPAN780ROW151DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW151DATA22466" name="CB780ROW151DATA22466" tabindex="9250" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW151DATA22466" name="CB780ROW151DATA22466" tabindex="9250" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW151DATA22466" name="CB780ROW151DATA22466" tabindex="9250" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW151DATA3869" id="OLDCB780ROW151DATA3869" value="Robinson, Nick">
            Robinson, Nick
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW151DATA28817" id="OLDCB780ROW151DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW151DATA29712" id="OLDCB780ROW151DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW151DATA29712" name="CB780ROW151DATA29712" tabindex="9280" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW151DATA3871" id="OLDCB780ROW151DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW151DATA3871" name="CB780ROW151DATA3871" tabindex="9290" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW151DATA3870" id="OLDCB780ROW151DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW151DATE387017" name="CB780ROW151DATE387017" tabindex="9300" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9300" onclick="cal.select(window.easyform.CB780ROW151DATE387017,'CB780ROW151DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW151DATE387017.value); return false;" name="CB780ROW151DATE387017X" id="CB780ROW151DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW151DATE387017I" id="CB780ROW151DATE387017I"></a><span id="DIVCB780ROW151TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW151TIME387017" name="CB780ROW151TIME387017" tabindex="9300" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW151AMPM387017" name="CB780ROW151AMPM387017" class="form-control" tabindex="9300" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW152" id="LINKCB780ROW152" value="737">
          <input type="hidden" name="CHILDCB780ROW152" id="CHILDCB780ROW152" value="241868">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW152DATA22466" id="OLDCB780ROW152DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW152DATA22466" name="SPAN780ROW152DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW152DATA22466" name="CB780ROW152DATA22466" tabindex="9310" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW152DATA22466" name="CB780ROW152DATA22466" tabindex="9310" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW152DATA22466" name="CB780ROW152DATA22466" tabindex="9310" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW152DATA3869" id="OLDCB780ROW152DATA3869" value="Robinson, Rohan">
            Robinson, Rohan
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW152DATA28817" id="OLDCB780ROW152DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW152DATA29712" id="OLDCB780ROW152DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW152DATA29712" name="CB780ROW152DATA29712" tabindex="9340" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW152DATA3871" id="OLDCB780ROW152DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW152DATA3871" name="CB780ROW152DATA3871" tabindex="9350" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW152DATA3870" id="OLDCB780ROW152DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW152DATE387017" name="CB780ROW152DATE387017" tabindex="9360" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9360" onclick="cal.select(window.easyform.CB780ROW152DATE387017,'CB780ROW152DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW152DATE387017.value); return false;" name="CB780ROW152DATE387017X" id="CB780ROW152DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW152DATE387017I" id="CB780ROW152DATE387017I"></a><span id="DIVCB780ROW152TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW152TIME387017" name="CB780ROW152TIME387017" tabindex="9360" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW152AMPM387017" name="CB780ROW152AMPM387017" class="form-control" tabindex="9360" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW153" id="LINKCB780ROW153" value="622">
          <input type="hidden" name="CHILDCB780ROW153" id="CHILDCB780ROW153" value="241812">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW153DATA22466" id="OLDCB780ROW153DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW153DATA22466" name="SPAN780ROW153DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW153DATA22466" name="CB780ROW153DATA22466" tabindex="9370" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW153DATA22466" name="CB780ROW153DATA22466" tabindex="9370" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW153DATA22466" name="CB780ROW153DATA22466" tabindex="9370" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW153DATA3869" id="OLDCB780ROW153DATA3869" value="Shuman, Frank">
            Shuman, Frank
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW153DATA28817" id="OLDCB780ROW153DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW153DATA29712" id="OLDCB780ROW153DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW153DATA29712" name="CB780ROW153DATA29712" tabindex="9400" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW153DATA3871" id="OLDCB780ROW153DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW153DATA3871" name="CB780ROW153DATA3871" tabindex="9410" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW153DATA3870" id="OLDCB780ROW153DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW153DATE387017" name="CB780ROW153DATE387017" tabindex="9420" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9420" onclick="cal.select(window.easyform.CB780ROW153DATE387017,'CB780ROW153DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW153DATE387017.value); return false;" name="CB780ROW153DATE387017X" id="CB780ROW153DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW153DATE387017I" id="CB780ROW153DATE387017I"></a><span id="DIVCB780ROW153TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW153TIME387017" name="CB780ROW153TIME387017" tabindex="9420" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW153AMPM387017" name="CB780ROW153AMPM387017" class="form-control" tabindex="9420" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW154" id="LINKCB780ROW154" value="853">
          <input type="hidden" name="CHILDCB780ROW154" id="CHILDCB780ROW154" value="241776">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW154DATA22466" id="OLDCB780ROW154DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW154DATA22466" name="SPAN780ROW154DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW154DATA22466" name="CB780ROW154DATA22466" tabindex="9430" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW154DATA22466" name="CB780ROW154DATA22466" tabindex="9430" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW154DATA22466" name="CB780ROW154DATA22466" tabindex="9430" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW154DATA3869" id="OLDCB780ROW154DATA3869" value="Shuman, Luca">
            Shuman, Luca
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW154DATA28817" id="OLDCB780ROW154DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW154DATA29712" id="OLDCB780ROW154DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW154DATA29712" name="CB780ROW154DATA29712" tabindex="9460" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW154DATA3871" id="OLDCB780ROW154DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW154DATA3871" name="CB780ROW154DATA3871" tabindex="9470" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW154DATA3870" id="OLDCB780ROW154DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW154DATE387017" name="CB780ROW154DATE387017" tabindex="9480" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9480" onclick="cal.select(window.easyform.CB780ROW154DATE387017,'CB780ROW154DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW154DATE387017.value); return false;" name="CB780ROW154DATE387017X" id="CB780ROW154DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW154DATE387017I" id="CB780ROW154DATE387017I"></a><span id="DIVCB780ROW154TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW154TIME387017" name="CB780ROW154TIME387017" tabindex="9480" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW154AMPM387017" name="CB780ROW154AMPM387017" class="form-control" tabindex="9480" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW155" id="LINKCB780ROW155" value="649">
          <input type="hidden" name="CHILDCB780ROW155" id="CHILDCB780ROW155" value="241730">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW155DATA22466" id="OLDCB780ROW155DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW155DATA22466" name="SPAN780ROW155DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW155DATA22466" name="CB780ROW155DATA22466" tabindex="9490" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW155DATA22466" name="CB780ROW155DATA22466" tabindex="9490" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW155DATA22466" name="CB780ROW155DATA22466" tabindex="9490" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW155DATA3869" id="OLDCB780ROW155DATA3869" value="Shuman, Natalie">
            Shuman, Natalie
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW155DATA28817" id="OLDCB780ROW155DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW155DATA29712" id="OLDCB780ROW155DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW155DATA29712" name="CB780ROW155DATA29712" tabindex="9520" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW155DATA3871" id="OLDCB780ROW155DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW155DATA3871" name="CB780ROW155DATA3871" tabindex="9530" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW155DATA3870" id="OLDCB780ROW155DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW155DATE387017" name="CB780ROW155DATE387017" tabindex="9540" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9540" onclick="cal.select(window.easyform.CB780ROW155DATE387017,'CB780ROW155DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW155DATE387017.value); return false;" name="CB780ROW155DATE387017X" id="CB780ROW155DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW155DATE387017I" id="CB780ROW155DATE387017I"></a><span id="DIVCB780ROW155TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW155TIME387017" name="CB780ROW155TIME387017" tabindex="9540" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW155AMPM387017" name="CB780ROW155AMPM387017" class="form-control" tabindex="9540" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW156" id="LINKCB780ROW156" value="1208">
          <input type="hidden" name="CHILDCB780ROW156" id="CHILDCB780ROW156" value="241783">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW156DATA22466" id="OLDCB780ROW156DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW156DATA22466" name="SPAN780ROW156DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW156DATA22466" name="CB780ROW156DATA22466" tabindex="9550" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW156DATA22466" name="CB780ROW156DATA22466" tabindex="9550" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW156DATA22466" name="CB780ROW156DATA22466" tabindex="9550" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW156DATA3869" id="OLDCB780ROW156DATA3869" value="Staffield, Brittany">
            Staffield, Brittany
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW156DATA28817" id="OLDCB780ROW156DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW156DATA29712" id="OLDCB780ROW156DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW156DATA29712" name="CB780ROW156DATA29712" tabindex="9580" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW156DATA3871" id="OLDCB780ROW156DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW156DATA3871" name="CB780ROW156DATA3871" tabindex="9590" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW156DATA3870" id="OLDCB780ROW156DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW156DATE387017" name="CB780ROW156DATE387017" tabindex="9600" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9600" onclick="cal.select(window.easyform.CB780ROW156DATE387017,'CB780ROW156DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW156DATE387017.value); return false;" name="CB780ROW156DATE387017X" id="CB780ROW156DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW156DATE387017I" id="CB780ROW156DATE387017I"></a><span id="DIVCB780ROW156TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW156TIME387017" name="CB780ROW156TIME387017" tabindex="9600" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW156AMPM387017" name="CB780ROW156AMPM387017" class="form-control" tabindex="9600" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW157" id="LINKCB780ROW157" value="638">
          <input type="hidden" name="CHILDCB780ROW157" id="CHILDCB780ROW157" value="241748">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW157DATA22466" id="OLDCB780ROW157DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW157DATA22466" name="SPAN780ROW157DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW157DATA22466" name="CB780ROW157DATA22466" tabindex="9610" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW157DATA22466" name="CB780ROW157DATA22466" tabindex="9610" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW157DATA22466" name="CB780ROW157DATA22466" tabindex="9610" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW157DATA3869" id="OLDCB780ROW157DATA3869" value="Stappenbeck, Charlotte">
            Stappenbeck, Charlotte
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW157DATA28817" id="OLDCB780ROW157DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW157DATA29712" id="OLDCB780ROW157DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW157DATA29712" name="CB780ROW157DATA29712" tabindex="9640" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW157DATA3871" id="OLDCB780ROW157DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW157DATA3871" name="CB780ROW157DATA3871" tabindex="9650" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW157DATA3870" id="OLDCB780ROW157DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW157DATE387017" name="CB780ROW157DATE387017" tabindex="9660" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9660" onclick="cal.select(window.easyform.CB780ROW157DATE387017,'CB780ROW157DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW157DATE387017.value); return false;" name="CB780ROW157DATE387017X" id="CB780ROW157DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW157DATE387017I" id="CB780ROW157DATE387017I"></a><span id="DIVCB780ROW157TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW157TIME387017" name="CB780ROW157TIME387017" tabindex="9660" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW157AMPM387017" name="CB780ROW157AMPM387017" class="form-control" tabindex="9660" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW158" id="LINKCB780ROW158" value="616">
          <input type="hidden" name="CHILDCB780ROW158" id="CHILDCB780ROW158" value="241794">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW158DATA22466" id="OLDCB780ROW158DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW158DATA22466" name="SPAN780ROW158DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW158DATA22466" name="CB780ROW158DATA22466" tabindex="9670" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW158DATA22466" name="CB780ROW158DATA22466" tabindex="9670" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW158DATA22466" name="CB780ROW158DATA22466" tabindex="9670" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW158DATA3869" id="OLDCB780ROW158DATA3869" value="Stappenbeck, Steve">
            Stappenbeck, Steve
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW158DATA28817" id="OLDCB780ROW158DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW158DATA29712" id="OLDCB780ROW158DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW158DATA29712" name="CB780ROW158DATA29712" tabindex="9700" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW158DATA3871" id="OLDCB780ROW158DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW158DATA3871" name="CB780ROW158DATA3871" tabindex="9710" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW158DATA3870" id="OLDCB780ROW158DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW158DATE387017" name="CB780ROW158DATE387017" tabindex="9720" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9720" onclick="cal.select(window.easyform.CB780ROW158DATE387017,'CB780ROW158DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW158DATE387017.value); return false;" name="CB780ROW158DATE387017X" id="CB780ROW158DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW158DATE387017I" id="CB780ROW158DATE387017I"></a><span id="DIVCB780ROW158TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW158TIME387017" name="CB780ROW158TIME387017" tabindex="9720" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW158AMPM387017" name="CB780ROW158AMPM387017" class="form-control" tabindex="9720" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW159" id="LINKCB780ROW159" value="1263">
          <input type="hidden" name="CHILDCB780ROW159" id="CHILDCB780ROW159" value="241824">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW159DATA22466" id="OLDCB780ROW159DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW159DATA22466" name="SPAN780ROW159DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW159DATA22466" name="CB780ROW159DATA22466" tabindex="9730" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW159DATA22466" name="CB780ROW159DATA22466" tabindex="9730" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW159DATA22466" name="CB780ROW159DATA22466" tabindex="9730" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW159DATA3869" id="OLDCB780ROW159DATA3869" value="Stubblefield, Joel">
            Stubblefield, Joel
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW159DATA28817" id="OLDCB780ROW159DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW159DATA29712" id="OLDCB780ROW159DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW159DATA29712" name="CB780ROW159DATA29712" tabindex="9760" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW159DATA3871" id="OLDCB780ROW159DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW159DATA3871" name="CB780ROW159DATA3871" tabindex="9770" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW159DATA3870" id="OLDCB780ROW159DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW159DATE387017" name="CB780ROW159DATE387017" tabindex="9780" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9780" onclick="cal.select(window.easyform.CB780ROW159DATE387017,'CB780ROW159DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW159DATE387017.value); return false;" name="CB780ROW159DATE387017X" id="CB780ROW159DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW159DATE387017I" id="CB780ROW159DATE387017I"></a><span id="DIVCB780ROW159TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW159TIME387017" name="CB780ROW159TIME387017" tabindex="9780" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW159AMPM387017" name="CB780ROW159AMPM387017" class="form-control" tabindex="9780" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW160" id="LINKCB780ROW160" value="1262">
          <input type="hidden" name="CHILDCB780ROW160" id="CHILDCB780ROW160" value="241746">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW160DATA22466" id="OLDCB780ROW160DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW160DATA22466" name="SPAN780ROW160DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW160DATA22466" name="CB780ROW160DATA22466" tabindex="9790" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW160DATA22466" name="CB780ROW160DATA22466" tabindex="9790" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW160DATA22466" name="CB780ROW160DATA22466" tabindex="9790" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW160DATA3869" id="OLDCB780ROW160DATA3869" value="Stubblefield, Will">
            Stubblefield, Will
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW160DATA28817" id="OLDCB780ROW160DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW160DATA29712" id="OLDCB780ROW160DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW160DATA29712" name="CB780ROW160DATA29712" tabindex="9820" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW160DATA3871" id="OLDCB780ROW160DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW160DATA3871" name="CB780ROW160DATA3871" tabindex="9830" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW160DATA3870" id="OLDCB780ROW160DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW160DATE387017" name="CB780ROW160DATE387017" tabindex="9840" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9840" onclick="cal.select(window.easyform.CB780ROW160DATE387017,'CB780ROW160DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW160DATE387017.value); return false;" name="CB780ROW160DATE387017X" id="CB780ROW160DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW160DATE387017I" id="CB780ROW160DATE387017I"></a><span id="DIVCB780ROW160TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW160TIME387017" name="CB780ROW160TIME387017" tabindex="9840" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW160AMPM387017" name="CB780ROW160AMPM387017" class="form-control" tabindex="9840" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW161" id="LINKCB780ROW161" value="1077">
          <input type="hidden" name="CHILDCB780ROW161" id="CHILDCB780ROW161" value="241807">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW161DATA22466" id="OLDCB780ROW161DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW161DATA22466" name="SPAN780ROW161DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW161DATA22466" name="CB780ROW161DATA22466" tabindex="9850" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW161DATA22466" name="CB780ROW161DATA22466" tabindex="9850" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW161DATA22466" name="CB780ROW161DATA22466" tabindex="9850" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW161DATA3869" id="OLDCB780ROW161DATA3869" value="Sujan, Mav">
            Sujan, Mav
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW161DATA28817" id="OLDCB780ROW161DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW161DATA29712" id="OLDCB780ROW161DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW161DATA29712" name="CB780ROW161DATA29712" tabindex="9880" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW161DATA3871" id="OLDCB780ROW161DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW161DATA3871" name="CB780ROW161DATA3871" tabindex="9890" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW161DATA3870" id="OLDCB780ROW161DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW161DATE387017" name="CB780ROW161DATE387017" tabindex="9900" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9900" onclick="cal.select(window.easyform.CB780ROW161DATE387017,'CB780ROW161DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW161DATE387017.value); return false;" name="CB780ROW161DATE387017X" id="CB780ROW161DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW161DATE387017I" id="CB780ROW161DATE387017I"></a><span id="DIVCB780ROW161TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW161TIME387017" name="CB780ROW161TIME387017" tabindex="9900" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW161AMPM387017" name="CB780ROW161AMPM387017" class="form-control" tabindex="9900" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW162" id="LINKCB780ROW162" value="1066">
          <input type="hidden" name="CHILDCB780ROW162" id="CHILDCB780ROW162" value="241840">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW162DATA22466" id="OLDCB780ROW162DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW162DATA22466" name="SPAN780ROW162DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW162DATA22466" name="CB780ROW162DATA22466" tabindex="9910" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW162DATA22466" name="CB780ROW162DATA22466" tabindex="9910" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW162DATA22466" name="CB780ROW162DATA22466" tabindex="9910" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW162DATA3869" id="OLDCB780ROW162DATA3869" value="Susannah Benton, Susannah">
            Susannah Benton, Susannah
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW162DATA28817" id="OLDCB780ROW162DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW162DATA29712" id="OLDCB780ROW162DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW162DATA29712" name="CB780ROW162DATA29712" tabindex="9940" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW162DATA3871" id="OLDCB780ROW162DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW162DATA3871" name="CB780ROW162DATA3871" tabindex="9950" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW162DATA3870" id="OLDCB780ROW162DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW162DATE387017" name="CB780ROW162DATE387017" tabindex="9960" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="9960" onclick="cal.select(window.easyform.CB780ROW162DATE387017,'CB780ROW162DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW162DATE387017.value); return false;" name="CB780ROW162DATE387017X" id="CB780ROW162DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW162DATE387017I" id="CB780ROW162DATE387017I"></a><span id="DIVCB780ROW162TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW162TIME387017" name="CB780ROW162TIME387017" tabindex="9960" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW162AMPM387017" name="CB780ROW162AMPM387017" class="form-control" tabindex="9960" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW163" id="LINKCB780ROW163" value="854">
          <input type="hidden" name="CHILDCB780ROW163" id="CHILDCB780ROW163" value="241856">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW163DATA22466" id="OLDCB780ROW163DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW163DATA22466" name="SPAN780ROW163DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW163DATA22466" name="CB780ROW163DATA22466" tabindex="9970" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW163DATA22466" name="CB780ROW163DATA22466" tabindex="9970" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW163DATA22466" name="CB780ROW163DATA22466" tabindex="9970" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW163DATA3869" id="OLDCB780ROW163DATA3869" value="Valencia Marshall, Angel">
            Valencia Marshall, Angel
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW163DATA28817" id="OLDCB780ROW163DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW163DATA29712" id="OLDCB780ROW163DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW163DATA29712" name="CB780ROW163DATA29712" tabindex="10000" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW163DATA3871" id="OLDCB780ROW163DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW163DATA3871" name="CB780ROW163DATA3871" tabindex="10010" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW163DATA3870" id="OLDCB780ROW163DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW163DATE387017" name="CB780ROW163DATE387017" tabindex="10020" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10020" onclick="cal.select(window.easyform.CB780ROW163DATE387017,'CB780ROW163DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW163DATE387017.value); return false;" name="CB780ROW163DATE387017X" id="CB780ROW163DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW163DATE387017I" id="CB780ROW163DATE387017I"></a><span id="DIVCB780ROW163TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW163TIME387017" name="CB780ROW163TIME387017" tabindex="10020" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW163AMPM387017" name="CB780ROW163AMPM387017" class="form-control" tabindex="10020" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW164" id="LINKCB780ROW164" value="1227">
          <input type="hidden" name="CHILDCB780ROW164" id="CHILDCB780ROW164" value="241880">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW164DATA22466" id="OLDCB780ROW164DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW164DATA22466" name="SPAN780ROW164DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW164DATA22466" name="CB780ROW164DATA22466" tabindex="10030" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW164DATA22466" name="CB780ROW164DATA22466" tabindex="10030" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW164DATA22466" name="CB780ROW164DATA22466" tabindex="10030" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW164DATA3869" id="OLDCB780ROW164DATA3869" value="Westphal, Jenny">
            Westphal, Jenny
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW164DATA28817" id="OLDCB780ROW164DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW164DATA29712" id="OLDCB780ROW164DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW164DATA29712" name="CB780ROW164DATA29712" tabindex="10060" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW164DATA3871" id="OLDCB780ROW164DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW164DATA3871" name="CB780ROW164DATA3871" tabindex="10070" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW164DATA3870" id="OLDCB780ROW164DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW164DATE387017" name="CB780ROW164DATE387017" tabindex="10080" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10080" onclick="cal.select(window.easyform.CB780ROW164DATE387017,'CB780ROW164DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW164DATE387017.value); return false;" name="CB780ROW164DATE387017X" id="CB780ROW164DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW164DATE387017I" id="CB780ROW164DATE387017I"></a><span id="DIVCB780ROW164TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW164TIME387017" name="CB780ROW164TIME387017" tabindex="10080" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW164AMPM387017" name="CB780ROW164AMPM387017" class="form-control" tabindex="10080" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW165" id="LINKCB780ROW165" value="1220">
          <input type="hidden" name="CHILDCB780ROW165" id="CHILDCB780ROW165" value="241789">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW165DATA22466" id="OLDCB780ROW165DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW165DATA22466" name="SPAN780ROW165DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW165DATA22466" name="CB780ROW165DATA22466" tabindex="10090" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW165DATA22466" name="CB780ROW165DATA22466" tabindex="10090" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW165DATA22466" name="CB780ROW165DATA22466" tabindex="10090" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW165DATA3869" id="OLDCB780ROW165DATA3869" value="Westphal, Milo">
            Westphal, Milo
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW165DATA28817" id="OLDCB780ROW165DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW165DATA29712" id="OLDCB780ROW165DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW165DATA29712" name="CB780ROW165DATA29712" tabindex="10120" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW165DATA3871" id="OLDCB780ROW165DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW165DATA3871" name="CB780ROW165DATA3871" tabindex="10130" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW165DATA3870" id="OLDCB780ROW165DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW165DATE387017" name="CB780ROW165DATE387017" tabindex="10140" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10140" onclick="cal.select(window.easyform.CB780ROW165DATE387017,'CB780ROW165DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW165DATE387017.value); return false;" name="CB780ROW165DATE387017X" id="CB780ROW165DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW165DATE387017I" id="CB780ROW165DATE387017I"></a><span id="DIVCB780ROW165TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW165TIME387017" name="CB780ROW165TIME387017" tabindex="10140" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW165AMPM387017" name="CB780ROW165AMPM387017" class="form-control" tabindex="10140" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW166" id="LINKCB780ROW166" value="1221">
          <input type="hidden" name="CHILDCB780ROW166" id="CHILDCB780ROW166" value="241863">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW166DATA22466" id="OLDCB780ROW166DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW166DATA22466" name="SPAN780ROW166DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW166DATA22466" name="CB780ROW166DATA22466" tabindex="10150" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW166DATA22466" name="CB780ROW166DATA22466" tabindex="10150" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW166DATA22466" name="CB780ROW166DATA22466" tabindex="10150" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW166DATA3869" id="OLDCB780ROW166DATA3869" value="Westphal, Oliver">
            Westphal, Oliver
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW166DATA28817" id="OLDCB780ROW166DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW166DATA29712" id="OLDCB780ROW166DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW166DATA29712" name="CB780ROW166DATA29712" tabindex="10180" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW166DATA3871" id="OLDCB780ROW166DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW166DATA3871" name="CB780ROW166DATA3871" tabindex="10190" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW166DATA3870" id="OLDCB780ROW166DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW166DATE387017" name="CB780ROW166DATE387017" tabindex="10200" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10200" onclick="cal.select(window.easyform.CB780ROW166DATE387017,'CB780ROW166DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW166DATE387017.value); return false;" name="CB780ROW166DATE387017X" id="CB780ROW166DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW166DATE387017I" id="CB780ROW166DATE387017I"></a><span id="DIVCB780ROW166TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW166TIME387017" name="CB780ROW166TIME387017" tabindex="10200" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW166AMPM387017" name="CB780ROW166AMPM387017" class="form-control" tabindex="10200" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW167" id="LINKCB780ROW167" value="1209">
          <input type="hidden" name="CHILDCB780ROW167" id="CHILDCB780ROW167" value="241839">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW167DATA22466" id="OLDCB780ROW167DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW167DATA22466" name="SPAN780ROW167DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW167DATA22466" name="CB780ROW167DATA22466" tabindex="10210" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW167DATA22466" name="CB780ROW167DATA22466" tabindex="10210" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW167DATA22466" name="CB780ROW167DATA22466" tabindex="10210" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW167DATA3869" id="OLDCB780ROW167DATA3869" value="Whittington, Aric">
            Whittington, Aric
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW167DATA28817" id="OLDCB780ROW167DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW167DATA29712" id="OLDCB780ROW167DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW167DATA29712" name="CB780ROW167DATA29712" tabindex="10240" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW167DATA3871" id="OLDCB780ROW167DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW167DATA3871" name="CB780ROW167DATA3871" tabindex="10250" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW167DATA3870" id="OLDCB780ROW167DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW167DATE387017" name="CB780ROW167DATE387017" tabindex="10260" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10260" onclick="cal.select(window.easyform.CB780ROW167DATE387017,'CB780ROW167DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW167DATE387017.value); return false;" name="CB780ROW167DATE387017X" id="CB780ROW167DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW167DATE387017I" id="CB780ROW167DATE387017I"></a><span id="DIVCB780ROW167TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW167TIME387017" name="CB780ROW167TIME387017" tabindex="10260" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW167AMPM387017" name="CB780ROW167AMPM387017" class="form-control" tabindex="10260" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW168" id="LINKCB780ROW168" value="1193">
          <input type="hidden" name="CHILDCB780ROW168" id="CHILDCB780ROW168" value="241741">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW168DATA22466" id="OLDCB780ROW168DATA22466" value="?">
            <span class="text-left" id="SPAN780ROW168DATA22466" name="SPAN780ROW168DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW168DATA22466" name="CB780ROW168DATA22466" tabindex="10270" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW168DATA22466" name="CB780ROW168DATA22466" tabindex="10270" onclick="easyFieldExit(this)" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW168DATA22466" name="CB780ROW168DATA22466" tabindex="10270" onclick="easyFieldExit(this)" checked="" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW168DATA3869" id="OLDCB780ROW168DATA3869" value="Whittington, Rowan">
            Whittington, Rowan
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW168DATA28817" id="OLDCB780ROW168DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW168DATA29712" id="OLDCB780ROW168DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW168DATA29712" name="CB780ROW168DATA29712" tabindex="10300" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW168DATA3871" id="OLDCB780ROW168DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW168DATA3871" name="CB780ROW168DATA3871" tabindex="10310" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW168DATA3870" id="OLDCB780ROW168DATA3870" value="08/11/2026 6:08 PM">
            <input type="text" class="form-control" id="CB780ROW168DATE387017" name="CB780ROW168DATE387017" tabindex="10320" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/11/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10320" onclick="cal.select(window.easyform.CB780ROW168DATE387017,'CB780ROW168DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW168DATE387017.value); return false;" name="CB780ROW168DATE387017X" id="CB780ROW168DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW168DATE387017I" id="CB780ROW168DATE387017I"></a><span id="DIVCB780ROW168TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW168TIME387017" name="CB780ROW168TIME387017" tabindex="10320" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="6:08"><select id="CB780ROW168AMPM387017" name="CB780ROW168AMPM387017" class="form-control" tabindex="10320" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW169" id="LINKCB780ROW169" value="1065">
          <input type="hidden" name="CHILDCB780ROW169" id="CHILDCB780ROW169" value="241784">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW169DATA22466" id="OLDCB780ROW169DATA22466" value="N">
            <span class="text-left" id="SPAN780ROW169DATA22466" name="SPAN780ROW169DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW169DATA22466" name="CB780ROW169DATA22466" tabindex="10330" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW169DATA22466" name="CB780ROW169DATA22466" tabindex="10330" onclick="easyFieldExit(this)" checked="" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW169DATA22466" name="CB780ROW169DATA22466" tabindex="10330" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW169DATA3869" id="OLDCB780ROW169DATA3869" value="Chidester, Amy">
            Chidester, Amy
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW169DATA28817" id="OLDCB780ROW169DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW169DATA29712" id="OLDCB780ROW169DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW169DATA29712" name="CB780ROW169DATA29712" tabindex="10360" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW169DATA3871" id="OLDCB780ROW169DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW169DATA3871" name="CB780ROW169DATA3871" tabindex="10370" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW169DATA3870" id="OLDCB780ROW169DATA3870" value="08/23/2026 10:38 PM">
            <input type="text" class="form-control" id="CB780ROW169DATE387017" name="CB780ROW169DATE387017" tabindex="10380" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10380" onclick="cal.select(window.easyform.CB780ROW169DATE387017,'CB780ROW169DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW169DATE387017.value); return false;" name="CB780ROW169DATE387017X" id="CB780ROW169DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW169DATE387017I" id="CB780ROW169DATE387017I"></a><span id="DIVCB780ROW169TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW169TIME387017" name="CB780ROW169TIME387017" tabindex="10380" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="10:38"><select id="CB780ROW169AMPM387017" name="CB780ROW169AMPM387017" class="form-control" tabindex="10380" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW170" id="LINKCB780ROW170" value="1203">
          <input type="hidden" name="CHILDCB780ROW170" id="CHILDCB780ROW170" value="241827">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW170DATA22466" id="OLDCB780ROW170DATA22466" value="N">
            <span class="text-left" id="SPAN780ROW170DATA22466" name="SPAN780ROW170DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW170DATA22466" name="CB780ROW170DATA22466" tabindex="10390" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW170DATA22466" name="CB780ROW170DATA22466" tabindex="10390" onclick="easyFieldExit(this)" checked="" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW170DATA22466" name="CB780ROW170DATA22466" tabindex="10390" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW170DATA3869" id="OLDCB780ROW170DATA3869" value="D'Vincent, Lilli">
            D'Vincent, Lilli
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW170DATA28817" id="OLDCB780ROW170DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW170DATA29712" id="OLDCB780ROW170DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW170DATA29712" name="CB780ROW170DATA29712" tabindex="10420" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW170DATA3871" id="OLDCB780ROW170DATA3871" value="We’re sad to miss this but will be out of town!">
            <input type="text" class="form-control" id="CB780ROW170DATA3871" name="CB780ROW170DATA3871" tabindex="10430" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="We’re sad to miss this but will be out of town!" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW170DATA3870" id="OLDCB780ROW170DATA3870" value="08/23/2026 8:53 AM">
            <input type="text" class="form-control" id="CB780ROW170DATE387017" name="CB780ROW170DATE387017" tabindex="10440" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10440" onclick="cal.select(window.easyform.CB780ROW170DATE387017,'CB780ROW170DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW170DATE387017.value); return false;" name="CB780ROW170DATE387017X" id="CB780ROW170DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW170DATE387017I" id="CB780ROW170DATE387017I"></a><span id="DIVCB780ROW170TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW170TIME387017" name="CB780ROW170TIME387017" tabindex="10440" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="8:53"><select id="CB780ROW170AMPM387017" name="CB780ROW170AMPM387017" class="form-control" tabindex="10440" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW171" id="LINKCB780ROW171" value="1185">
          <input type="hidden" name="CHILDCB780ROW171" id="CHILDCB780ROW171" value="241780">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW171DATA22466" id="OLDCB780ROW171DATA22466" value="N">
            <span class="text-left" id="SPAN780ROW171DATA22466" name="SPAN780ROW171DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW171DATA22466" name="CB780ROW171DATA22466" tabindex="10450" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW171DATA22466" name="CB780ROW171DATA22466" tabindex="10450" onclick="easyFieldExit(this)" checked="" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW171DATA22466" name="CB780ROW171DATA22466" tabindex="10450" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW171DATA3869" id="OLDCB780ROW171DATA3869" value="D'Vincent, Mason">
            D'Vincent, Mason
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW171DATA28817" id="OLDCB780ROW171DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW171DATA29712" id="OLDCB780ROW171DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW171DATA29712" name="CB780ROW171DATA29712" tabindex="10480" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW171DATA3871" id="OLDCB780ROW171DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW171DATA3871" name="CB780ROW171DATA3871" tabindex="10490" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW171DATA3870" id="OLDCB780ROW171DATA3870" value="08/23/2026 8:53 AM">
            <input type="text" class="form-control" id="CB780ROW171DATE387017" name="CB780ROW171DATE387017" tabindex="10500" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10500" onclick="cal.select(window.easyform.CB780ROW171DATE387017,'CB780ROW171DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW171DATE387017.value); return false;" name="CB780ROW171DATE387017X" id="CB780ROW171DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW171DATE387017I" id="CB780ROW171DATE387017I"></a><span id="DIVCB780ROW171TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW171TIME387017" name="CB780ROW171TIME387017" tabindex="10500" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="8:53"><select id="CB780ROW171AMPM387017" name="CB780ROW171AMPM387017" class="form-control" tabindex="10500" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW172" id="LINKCB780ROW172" value="924">
          <input type="hidden" name="CHILDCB780ROW172" id="CHILDCB780ROW172" value="241734">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW172DATA22466" id="OLDCB780ROW172DATA22466" value="N">
            <span class="text-left" id="SPAN780ROW172DATA22466" name="SPAN780ROW172DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW172DATA22466" name="CB780ROW172DATA22466" tabindex="10510" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW172DATA22466" name="CB780ROW172DATA22466" tabindex="10510" onclick="easyFieldExit(this)" checked="" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW172DATA22466" name="CB780ROW172DATA22466" tabindex="10510" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW172DATA3869" id="OLDCB780ROW172DATA3869" value="Saldanha, Claire">
            Saldanha, Claire
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW172DATA28817" id="OLDCB780ROW172DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW172DATA29712" id="OLDCB780ROW172DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW172DATA29712" name="CB780ROW172DATA29712" tabindex="10540" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW172DATA3871" id="OLDCB780ROW172DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW172DATA3871" name="CB780ROW172DATA3871" tabindex="10550" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW172DATA3870" id="OLDCB780ROW172DATA3870" value="08/23/2026 2:56 PM">
            <input type="text" class="form-control" id="CB780ROW172DATE387017" name="CB780ROW172DATE387017" tabindex="10560" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10560" onclick="cal.select(window.easyform.CB780ROW172DATE387017,'CB780ROW172DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW172DATE387017.value); return false;" name="CB780ROW172DATE387017X" id="CB780ROW172DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW172DATE387017I" id="CB780ROW172DATE387017I"></a><span id="DIVCB780ROW172TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW172TIME387017" name="CB780ROW172TIME387017" tabindex="10560" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="2:56"><select id="CB780ROW172AMPM387017" name="CB780ROW172AMPM387017" class="form-control" tabindex="10560" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW173" id="LINKCB780ROW173" value="1161">
          <input type="hidden" name="CHILDCB780ROW173" id="CHILDCB780ROW173" value="241888">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW173DATA22466" id="OLDCB780ROW173DATA22466" value="N">
            <span class="text-left" id="SPAN780ROW173DATA22466" name="SPAN780ROW173DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW173DATA22466" name="CB780ROW173DATA22466" tabindex="10570" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW173DATA22466" name="CB780ROW173DATA22466" tabindex="10570" onclick="easyFieldExit(this)" checked="" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW173DATA22466" name="CB780ROW173DATA22466" tabindex="10570" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW173DATA3869" id="OLDCB780ROW173DATA3869" value="Saldanha, Eva">
            Saldanha, Eva
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW173DATA28817" id="OLDCB780ROW173DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW173DATA29712" id="OLDCB780ROW173DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW173DATA29712" name="CB780ROW173DATA29712" tabindex="10600" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW173DATA3871" id="OLDCB780ROW173DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW173DATA3871" name="CB780ROW173DATA3871" tabindex="10610" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW173DATA3870" id="OLDCB780ROW173DATA3870" value="08/23/2026 2:56 PM">
            <input type="text" class="form-control" id="CB780ROW173DATE387017" name="CB780ROW173DATE387017" tabindex="10620" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10620" onclick="cal.select(window.easyform.CB780ROW173DATE387017,'CB780ROW173DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW173DATE387017.value); return false;" name="CB780ROW173DATE387017X" id="CB780ROW173DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW173DATE387017I" id="CB780ROW173DATE387017I"></a><span id="DIVCB780ROW173TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW173TIME387017" name="CB780ROW173TIME387017" tabindex="10620" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="2:56"><select id="CB780ROW173AMPM387017" name="CB780ROW173AMPM387017" class="form-control" tabindex="10620" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW174" id="LINKCB780ROW174" value="935">
          <input type="hidden" name="CHILDCB780ROW174" id="CHILDCB780ROW174" value="241884">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW174DATA22466" id="OLDCB780ROW174DATA22466" value="N">
            <span class="text-left" id="SPAN780ROW174DATA22466" name="SPAN780ROW174DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW174DATA22466" name="CB780ROW174DATA22466" tabindex="10630" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW174DATA22466" name="CB780ROW174DATA22466" tabindex="10630" onclick="easyFieldExit(this)" checked="" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW174DATA22466" name="CB780ROW174DATA22466" tabindex="10630" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW174DATA3869" id="OLDCB780ROW174DATA3869" value="Saldanha, Mithila">
            Saldanha, Mithila
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW174DATA28817" id="OLDCB780ROW174DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW174DATA29712" id="OLDCB780ROW174DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW174DATA29712" name="CB780ROW174DATA29712" tabindex="10660" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW174DATA3871" id="OLDCB780ROW174DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW174DATA3871" name="CB780ROW174DATA3871" tabindex="10670" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW174DATA3870" id="OLDCB780ROW174DATA3870" value="08/23/2026 2:56 PM">
            <input type="text" class="form-control" id="CB780ROW174DATE387017" name="CB780ROW174DATE387017" tabindex="10680" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/23/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10680" onclick="cal.select(window.easyform.CB780ROW174DATE387017,'CB780ROW174DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW174DATE387017.value); return false;" name="CB780ROW174DATE387017X" id="CB780ROW174DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW174DATE387017I" id="CB780ROW174DATE387017I"></a><span id="DIVCB780ROW174TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW174TIME387017" name="CB780ROW174TIME387017" tabindex="10680" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="2:56"><select id="CB780ROW174AMPM387017" name="CB780ROW174AMPM387017" class="form-control" tabindex="10680" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW175" id="LINKCB780ROW175" value="995">
          <input type="hidden" name="CHILDCB780ROW175" id="CHILDCB780ROW175" value="241885">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW175DATA22466" id="OLDCB780ROW175DATA22466" value="N">
            <span class="text-left" id="SPAN780ROW175DATA22466" name="SPAN780ROW175DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW175DATA22466" name="CB780ROW175DATA22466" tabindex="10690" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW175DATA22466" name="CB780ROW175DATA22466" tabindex="10690" onclick="easyFieldExit(this)" checked="" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW175DATA22466" name="CB780ROW175DATA22466" tabindex="10690" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW175DATA3869" id="OLDCB780ROW175DATA3869" value="Swantner, Albert">
            Swantner, Albert
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW175DATA28817" id="OLDCB780ROW175DATA28817" value="Adult">
            Adult
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW175DATA29712" id="OLDCB780ROW175DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW175DATA29712" name="CB780ROW175DATA29712" tabindex="10720" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW175DATA3871" id="OLDCB780ROW175DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW175DATA3871" name="CB780ROW175DATA3871" tabindex="10730" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW175DATA3870" id="OLDCB780ROW175DATA3870" value="08/25/2026 3:44 PM">
            <input type="text" class="form-control" id="CB780ROW175DATE387017" name="CB780ROW175DATE387017" tabindex="10740" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10740" onclick="cal.select(window.easyform.CB780ROW175DATE387017,'CB780ROW175DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW175DATE387017.value); return false;" name="CB780ROW175DATE387017X" id="CB780ROW175DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW175DATE387017I" id="CB780ROW175DATE387017I"></a><span id="DIVCB780ROW175TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW175TIME387017" name="CB780ROW175TIME387017" tabindex="10740" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="3:44"><select id="CB780ROW175AMPM387017" name="CB780ROW175AMPM387017" class="form-control" tabindex="10740" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB780ROW176" id="LINKCB780ROW176" value="991">
          <input type="hidden" name="CHILDCB780ROW176" id="CHILDCB780ROW176" value="241792">
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW176DATA22466" id="OLDCB780ROW176DATA22466" value="N">
            <span class="text-left" id="SPAN780ROW176DATA22466" name="SPAN780ROW176DATA22466">
            <span style="white-space: nowrap;"><input type="radio" id="CB780ROW176DATA22466" name="CB780ROW176DATA22466" tabindex="10750" onclick="easyFieldExit(this)" value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW176DATA22466" name="CB780ROW176DATA22466" tabindex="10750" onclick="easyFieldExit(this)" checked="" value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="CB780ROW176DATA22466" name="CB780ROW176DATA22466" tabindex="10750" onclick="easyFieldExit(this)" value="?">Unknown</span>
            </span>
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW176DATA3869" id="OLDCB780ROW176DATA3869" value="Swantner, Everett">
            Swantner, Everett
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW176DATA28817" id="OLDCB780ROW176DATA28817" value="Scout">
            Scout
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW176DATA29712" id="OLDCB780ROW176DATA29712" value="">
            <input type="text" class="form-control" id="CB780ROW176DATA29712" name="CB780ROW176DATA29712" tabindex="10780" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW176DATA3871" id="OLDCB780ROW176DATA3871" value="">
            <input type="text" class="form-control" id="CB780ROW176DATA3871" name="CB780ROW176DATA3871" tabindex="10790" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB780ROW176DATA3870" id="OLDCB780ROW176DATA3870" value="08/25/2026 3:44 PM">
            <input type="text" class="form-control" id="CB780ROW176DATE387017" name="CB780ROW176DATE387017" tabindex="10800" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/25/2026" title="The date and time this participant signed up for this event">&nbsp;<a href="#" tabindex="10800" onclick="cal.select(window.easyform.CB780ROW176DATE387017,'CB780ROW176DATE387017X','MM/dd/yyyy', window.easyform.CB780ROW176DATE387017.value); return false;" name="CB780ROW176DATE387017X" id="CB780ROW176DATE387017X"><img src="/assets/images/calendar.gif" name="CB780ROW176DATE387017I" id="CB780ROW176DATE387017I"></a><span id="DIVCB780ROW176TIME387017" class="entrypostscript"> at <input type="text" class="form-control" id="CB780ROW176TIME387017" name="CB780ROW176TIME387017" tabindex="10800" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time this participant signed up for this event" value="3:44"><select id="CB780ROW176AMPM387017" name="CB780ROW176AMPM387017" class="form-control" tabindex="10800" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
          </td>
        </tr>
        </tbody>
      </table>


</div>
</div>
</div>
<div class="new-row" id="fs23246">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY6087411">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY6087411" style="visibility: hidden">
            *
            </span>
            Attendance Finalized?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY6087411" id="RVALENTRY6087411" value="N">
            <input type="hidden" name="OLD6087411" id="OLD6087411" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="10810" value="Y" id="ENTRY6087411" name="ENTRY6087411" size="1" title="Check this box to indicate that attendance has been finalized for this event">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY608751">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY608751" style="visibility: hidden">
            *
            </span>
            Attendance Taken By
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY608751" id="RVALENTRY608751" value="N">
            <input type="hidden" name="OLD608751" id="OLD608751" value="">
            <input type="text" class="form-control" id="ENTRY608751" name="ENTRY608751" tabindex="10820" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Name of the person who took attendance">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs787">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="10830" id="BUTTON27" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="10840" id="BUTTON28" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="10850" id="BUTTON29" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="10860" id="BUTTON30" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON30">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs5912">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 500px; min-width: 200px;">
      <p>
      NOTE: Click the <b>Save</b> button to save any changes to this list before using the  buttons below to send an e-mail to participants or to undecideds.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs5913">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="10870" id="BUTTON32" type="button" name="preselect" title="E-Mail Participants" value="E-Mail Participants" onclick="LinkTo('/events/event.php?;Form_ID=397&amp;PreselectID=581&amp;FK=581&amp;Stack=4','');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="10880" id="BUTTON33" type="button" name="preselect" title="Invite Undecideds" value="Invite Undecideds" onclick="LinkTo('/events/event.php?;Form_ID=1208&amp;PreselectID=581&amp;FK=581&amp;Stack=4','');">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON8">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>