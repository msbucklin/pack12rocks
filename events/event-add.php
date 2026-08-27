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
<script type="text/javascript" src="sortableV2.js">
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
  if (onLoad||thisfield.name=='ENTRY24112')
{
    var selectedvalue = easyGetFieldValue('ENTRY24112');
    GetEventTypeFlags(selectedvalue);
}


		if (onLoad||thisfield.name=='ENTRY2416144')
		{
		  var startID = '2416143';
		  var endID =   '241717';
		  var startTimeSpan = document.getElementById('DIVTIME'+startID);

		  var startTime = document.getElementById('TIME'+startID);
		  var startAmPm = document.getElementById('AMPM'+startID);

		  var endTimeSpan = document.getElementById('DIVTIME'+endID);
		  var endTime = document.getElementById('TIME'+endID);
		  var endAmPm = document.getElementById('AMPM'+endID);

		  var allDay = easyGetFieldValue('ENTRY2416144');
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

      if (thisfield.name=='DATE2416143')
		{
		  var endDateObj = document.getElementById('DATE241717');
		  var endDate = endDateObj.value;
		  if (endDate == '')
		  {
			endDateObj.value = easyGetFieldValue('DATE2416143');
		  }
		}


if (onLoad)
{
    easyEnableField('ENTRY602851',false,true);
}


if (thisfield.name=='ENTRY24132')
{
    var locationIndex = easyGetFieldValue('ENTRY24132');
    easyEnableField('ENTRY602851',(locationIndex == "0"),true);
    easySetRequired('ENTRY602851',(locationIndex == "0"));
    if (locationIndex == "0") {
        document.getElementById('ENTRY602851').focus();
    }
}

if (thisfield.name=='ENTRY602851')
{
    var selectedvalue = easyGetFieldValue('ENTRY602851');
    easySetRequired('ENTRY24132',(selectedvalue == ''));
    if (selectedvalue != '') {
        document.getElementById('ENTRY24132').style.backgroundColor='#FFF';
    }
}

    }
  function GetEventTypeFlags(EventTypeID)
{
  var pl = new SOAPClientParameters();
  pl.add("Event_Type_ID",EventTypeID);
  pl.add("User_Database_ID",2840);

  SOAPClient.invoke("EasyWebService.asmx","GetEventTypeFlags",pl,true,ReturnEventTypeFlags);
  return;
}

function ReturnEventTypeFlags(retObj)
{


	 //  if there is an error, display it and exit
	 if (retObj.ErrorMsg && retObj.ErrorMessage.length > 0)
	  {
		window.alert(retObj.ErrorMessage.text);
		return true;
	  }

	  var FlagValues = retObj.EventTypeFlags;


	  if (FlagValues.substr(0,1)=='N')
	  {
		easySetFieldValue('ENTRY911436','0');
	  }

	  if (FlagValues.substr(3,1)=='N')
	  {
		easySetFieldValue('ENTRY302172','0.00');
	  }
	  if (FlagValues.substr(9,1)=='N')
	  {
		easySetFieldValue('ENTRY2527816','');
	  }

	  easyEnableField('ENTRY911436',(FlagValues.substr(0,1)=='Y'),true);

	  easyEnableField('ENTRY302172',(FlagValues.substr(3,1)=='Y'),true);

	  easyEnableField('ENTRY241411',(FlagValues.substr(4,1)=='Y'),true);

	  easyEnableField('ENTRY2527816',(FlagValues.substr(9,1)=='Y'),true);

          easySetRequired('ENTRY24132',(FlagValues.substr(15,1)=='Y'));

	  easyEnableField('ENTRY24132',(FlagValues.substr(15,1)=='Y'),true);

	  easyEnableField('ENTRY382112',(FlagValues.substr(16,1)=='Y'),true);

	  easyEnableField('ENTRY24542',(FlagValues.substr(18,1)=='Y'),true);
	  easyEnableField('ENTRY485992',(FlagValues.substr(18,1)=='Y'),true);

	  easyEnableField('ENTRY501772',(FlagValues.substr(19,1)=='Y'),true);
	  easyEnableField('ENTRY541593',(FlagValues.substr(20,1)=='Y'),true);

	  easyEnableField('ENTRY5475636',(FlagValues.substr(21,1)=='Y'),true);

	  easyEnableField('ENTRY6086336',(FlagValues.substr(22,1)=='Y'),true);
	  easyEnableField('ENTRY6086436',(FlagValues.substr(22,1)=='Y'),true);
	  easyEnableField('ENTRY6086536',(FlagValues.substr(22,1)=='Y'),true);

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
<input type="hidden" name="Form_ID" id="Form_ID" value="161">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="2">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=161&amp;FK=0&amp;ID=0&amp;Stack=2">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=2','');">My Contact Information</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=2','');">My Contact Information</a>
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
        The current user is:&nbsp; &nbsp; mbucklin2
        <br><br>
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=161&amp;FK=0&amp;ID=0&amp;Stack=2&amp;Application_ID=2840
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
Add Event
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs406">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY24112">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY24112" style="visibility: visible">
            *
            </span>
            Event Type
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY24112" id="RVALENTRY24112" value="Y">
            <input type="hidden" name="OLD24112" id="OLD24112" value="0">
            <select id="ENTRY24112" name="ENTRY24112" class="form-control" onblur="TestRegExp(this,'','')" tabindex="110" title="The type of this event" size="1" style="background-color: rgb(255, 170, 170);">
              <option selected="" value="0"> </option>
              <option value="15">Committee Meeting</option>
              <option value="1">Pack Meeting</option>
              <option value="12">Den Meeting</option>
              <option value="8">Campout</option>
              <option value="4">Banquet</option>
              <option value="3">Fund Raiser</option>
              <option value="5">Community Service</option>
              <option value="13">Recruitment</option>
              <option value="6">Training</option>
              <option value="2">Special Event</option>
              <option value="9">Holiday</option>
              <option value="10">Council Event</option>
              <option value="14">District Event</option>
              <option value="11">Notification</option>
              <option value="7">Other</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY24121">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY24121" style="visibility: hidden">
            *
            </span>
            Event Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY24121" id="RVALENTRY24121" value="N">
            <input type="hidden" name="OLD24121" id="OLD24121" value="">
            <input type="text" class="form-control" id="ENTRY24121" name="ENTRY24121" tabindex="120" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The name of this event">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY24132" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY24132" style="visibility: hidden;">
            *
            </span>
            Location
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY24132" id="RVALENTRY24132" value="N">
            <input type="hidden" name="OLD24132" id="OLD24132" value="0">
            <select id="ENTRY24132" name="ENTRY24132" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="Where this event will occur" size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="89">3755 S Capital of Texas Hwy</option>
              <option value="63">5101 Wasson Road, Austin, TX 78745</option>
              <option value="68">7224 Mitra Dr</option>
              <option value="12">Abiding Love Lutheran Church</option>
              <option value="83">Alvarez House</option>
              <option value="82">ATX Bikes</option>
              <option value="42">Austin Community College - Eastview Campus</option>
              <option value="50">Austin Fire Station 27</option>
              <option value="78">Austin Lighthouse School for the Blind</option>
              <option value="57">Austin Ridge Bible Church Southwest</option>
              <option value="10">Baldwin Elementary</option>
              <option value="1">Baldwin Elementary - Cafeteria</option>
              <option value="41">Bastrop State Park</option>
              <option value="27">Bethany Lutheran Church</option>
              <option value="79">Bradfield Village Park</option>
              <option value="81">Bucklin House</option>
              <option value="21">Camp Green Dixon</option>
              <option value="39">Camp Tom Wooten - Cub World</option>
              <option value="71">Cidercade</option>
              <option value="4">Circle C Community Center</option>
              <option value="76">Circle C Fire Station #43</option>
              <option value="11">Circle C Ranch Metropolitan Park</option>
              <option value="8">Circle C Swim Center</option>
              <option value="9">Clayton Elementary</option>
              <option value="2">Clayton Elementary - Cafeteria</option>
              <option value="13">Clayton Elementary Playground</option>
              <option value="52">Crux Climbing Center</option>
              <option value="77">Den Leader Home</option>
              <option value="75">Den Leader Home</option>
              <option value="37">Dick Nichols Park</option>
              <option value="60">Emma Long Municipal Park</option>
              <option value="45">Fire Station 43</option>
              <option value="5">Founders Memorial Park</option>
              <option value="70">Frank Fickett Scout Center</option>
              <option value="86">Garner State Park</option>
              <option value="40">Gaston Place</option>
              <option value="53">Goliad State Park &amp; Historic Site</option>
              <option value="48">Google Meet</option>
              <option value="56">Grelle Recreation Area</option>
              <option value="49">Hilton Austin</option>
              <option value="72">Inks Lake State Park</option>
              <option value="69">Innerspace Cavern</option>
              <option value="65">Jason Mallios' house</option>
              <option value="43">Jorge's Workshop</option>
              <option value="87">Keenan House</option>
              <option value="58">Krause Springs</option>
              <option value="93">Lake Somerville State Park</option>
              <option value="95">Lone Star Flight Museum</option>
              <option value="92">Lost Pines Scout Reservation</option>
              <option value="51">Mary Moore Searight Metro Park</option>
              <option value="19">McGimsey Scout Park</option>
              <option value="94">Meridian Neighborhood Pavilion and Pool</option>
              <option value="73">Meridian Park Pavilion</option>
              <option value="20">Muleshoe Bend Recreation Area</option>
              <option value="91">Natural Bridge Caverns</option>
              <option value="15">Oak Hill HEB</option>
              <option value="17">Oak Hill United Methodist Church</option>
              <option value="90">Onion Creek Park</option>
              <option value="84">Palm Valley Lutheran Church</option>
              <option value="3">Pedernales Falls State Park</option>
              <option value="38">Robert's Workshop</option>
              <option value="80">San Antonio Zoo</option>
              <option value="55">Sea World San Antonio</option>
              <option value="47">Slaughter Creek Trail</option>
              <option value="24">Smilin V Scout Ranch</option>
              <option value="32">Space Center Houston</option>
              <option value="30">St. Catherine of Siena Catholic Church</option>
              <option value="85">Stonebridge Nursing and Rehab Center</option>
              <option value="67">Swantner's House</option>
              <option value="34">TBD</option>
              <option value="36">Texas Capitol</option>
              <option value="18">The Alamo</option>
              <option value="64">The Texas Military Forces Museum</option>
              <option value="74">Travis County Community Center</option>
              <option value="59">USS Lexington</option>
              <option value="35">VFW Post 3377</option>
              <option value="7">VFW Post 4443</option>
              <option value="62">Violet Crown Trail</option>
              <option value="26">Ward North American</option>
              <option value="22">Western Oaks Park Pool</option>
              <option value="16">Westgate Lanes</option>
              <option value="23">Whittmeyer Ranch</option>
              <option value="88">Zilker Park</option>
              <option value="61">Zoom</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY602851" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY602851" style="visibility: hidden">
            *
            </span>
            New Location Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY602851" id="RVALENTRY602851" value="N">
            <input type="hidden" name="OLD602851" id="OLD602851" value="">
            <input type="text" class="form-control" id="ENTRY602851" name="ENTRY602851" tabindex="140" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="You can add a new location by entering its name here.  You can update the details for this location after you finish adding this event." disabled="">
            <span class="entrypostscript">
            This will add a new location if one is not selected from the drop down list
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY24182">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY24182" style="visibility: hidden">
            *
            </span>
            Departing From / Returning To
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY24182" id="RVALENTRY24182" value="N">
            <input type="hidden" name="OLD24182" id="OLD24182" value="0">
            <select id="ENTRY24182" name="ENTRY24182" class="form-control" onblur="TestRegExp(this,'','')" tabindex="150" title="The location at which the group will meet to travel to the event." size="1">
              <option selected="" value="0"> </option>
              <option value="89">3755 S Capital of Texas Hwy</option>
              <option value="63">5101 Wasson Road, Austin, TX 78745</option>
              <option value="68">7224 Mitra Dr</option>
              <option value="12">Abiding Love Lutheran Church</option>
              <option value="83">Alvarez House</option>
              <option value="82">ATX Bikes</option>
              <option value="42">Austin Community College - Eastview Campus</option>
              <option value="50">Austin Fire Station 27</option>
              <option value="78">Austin Lighthouse School for the Blind</option>
              <option value="57">Austin Ridge Bible Church Southwest</option>
              <option value="10">Baldwin Elementary</option>
              <option value="1">Baldwin Elementary - Cafeteria</option>
              <option value="41">Bastrop State Park</option>
              <option value="27">Bethany Lutheran Church</option>
              <option value="79">Bradfield Village Park</option>
              <option value="81">Bucklin House</option>
              <option value="21">Camp Green Dixon</option>
              <option value="39">Camp Tom Wooten - Cub World</option>
              <option value="71">Cidercade</option>
              <option value="4">Circle C Community Center</option>
              <option value="76">Circle C Fire Station #43</option>
              <option value="11">Circle C Ranch Metropolitan Park</option>
              <option value="8">Circle C Swim Center</option>
              <option value="9">Clayton Elementary</option>
              <option value="2">Clayton Elementary - Cafeteria</option>
              <option value="13">Clayton Elementary Playground</option>
              <option value="52">Crux Climbing Center</option>
              <option value="77">Den Leader Home</option>
              <option value="75">Den Leader Home</option>
              <option value="37">Dick Nichols Park</option>
              <option value="60">Emma Long Municipal Park</option>
              <option value="45">Fire Station 43</option>
              <option value="5">Founders Memorial Park</option>
              <option value="70">Frank Fickett Scout Center</option>
              <option value="86">Garner State Park</option>
              <option value="40">Gaston Place</option>
              <option value="53">Goliad State Park &amp; Historic Site</option>
              <option value="48">Google Meet</option>
              <option value="56">Grelle Recreation Area</option>
              <option value="49">Hilton Austin</option>
              <option value="72">Inks Lake State Park</option>
              <option value="69">Innerspace Cavern</option>
              <option value="65">Jason Mallios' house</option>
              <option value="43">Jorge's Workshop</option>
              <option value="87">Keenan House</option>
              <option value="58">Krause Springs</option>
              <option value="93">Lake Somerville State Park</option>
              <option value="95">Lone Star Flight Museum</option>
              <option value="92">Lost Pines Scout Reservation</option>
              <option value="51">Mary Moore Searight Metro Park</option>
              <option value="19">McGimsey Scout Park</option>
              <option value="94">Meridian Neighborhood Pavilion and Pool</option>
              <option value="73">Meridian Park Pavilion</option>
              <option value="20">Muleshoe Bend Recreation Area</option>
              <option value="91">Natural Bridge Caverns</option>
              <option value="15">Oak Hill HEB</option>
              <option value="17">Oak Hill United Methodist Church</option>
              <option value="90">Onion Creek Park</option>
              <option value="84">Palm Valley Lutheran Church</option>
              <option value="3">Pedernales Falls State Park</option>
              <option value="38">Robert's Workshop</option>
              <option value="80">San Antonio Zoo</option>
              <option value="55">Sea World San Antonio</option>
              <option value="47">Slaughter Creek Trail</option>
              <option value="24">Smilin V Scout Ranch</option>
              <option value="32">Space Center Houston</option>
              <option value="30">St. Catherine of Siena Catholic Church</option>
              <option value="85">Stonebridge Nursing and Rehab Center</option>
              <option value="67">Swantner's House</option>
              <option value="34">TBD</option>
              <option value="36">Texas Capitol</option>
              <option value="18">The Alamo</option>
              <option value="64">The Texas Military Forces Museum</option>
              <option value="74">Travis County Community Center</option>
              <option value="59">USS Lexington</option>
              <option value="35">VFW Post 3377</option>
              <option value="7">VFW Post 4443</option>
              <option value="62">Violet Crown Trail</option>
              <option value="26">Ward North American</option>
              <option value="22">Western Oaks Park Pool</option>
              <option value="16">Westgate Lanes</option>
              <option value="23">Whittmeyer Ranch</option>
              <option value="88">Zilker Park</option>
              <option value="61">Zoom</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2416143" style="visibility: visible">
            *
            </span>
            Scheduled Start
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2416143" id="RVALENTRY2416143" value="Y">
            <span id="DIVENTRY2416143">
            <input type="hidden" name="OLD2416143" id="OLD2416143" value="">
            <input type="text" class="form-control" id="DATE2416143" name="DATE2416143" tabindex="161" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date and time')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date and time')" maxlength="22" value="" title="">&nbsp;<a href="#" tabindex="161" onclick="cal.select(window.easyform.DATE2416143,'DATE2416143X','MM/dd/yyyy', window.easyform.DATE2416143.value); return false;" name="DATE2416143X" id="DATE2416143X"><img src="/assets/images/calendar.gif" name="DATE2416143I" id="DATE2416143I"></a><span id="DIVTIME2416143" class="entrypostscript" style="display: inline;"> at <input type="text" class="form-control" id="TIME2416143" name="TIME2416143" tabindex="161" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date and time')" maxlength="5" title=""><select id="AMPM2416143" name="AMPM2416143" class="form-control" tabindex="161" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2416144" id="RVALENTRY2416144" value="Y">
            <span id="DIVENTRY2416144">
            <input type="hidden" name="OLD2416144" id="OLD2416144" value="">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="162" value="Y" id="ENTRY2416144" name="ENTRY2416144" size="1" title="">
            <span class="entrypostscript">
            All Day Event
            </span>
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY241717">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY241717" style="visibility: visible">
            *
            </span>
            Scheduled End
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY241717" id="RVALENTRY241717" value="Y">
            <input type="hidden" name="OLD241717" id="OLD241717" value="">
            <input type="text" class="form-control" id="DATE241717" name="DATE241717" tabindex="170" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="" title="The date and time at which this event is scheduled to end.">&nbsp;<a href="#" tabindex="170" onclick="cal.select(window.easyform.DATE241717,'DATE241717X','MM/dd/yyyy', window.easyform.DATE241717.value); return false;" name="DATE241717X" id="DATE241717X"><img src="/assets/images/calendar.gif" name="DATE241717I" id="DATE241717I"></a><span id="DIVTIME241717" class="entrypostscript" style="display: inline;"> at <input type="text" class="form-control" id="TIME241717" name="TIME241717" tabindex="170" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time at which this event is scheduled to end."><select id="AMPM241717" name="AMPM241717" class="form-control" tabindex="170" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY501772" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY501772" style="visibility: hidden">
            *
            </span>
            Dress Code
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY501772" id="RVALENTRY501772" value="N">
            <input type="hidden" name="OLD501772" id="OLD501772" value="0">
            <select id="ENTRY501772" name="ENTRY501772" class="form-control" onblur="TestRegExp(this,'','')" tabindex="180" title="The dress code that is required for this event" size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="1">Class A Uniform</option>
              <option value="2">Class B T-Shirt</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2527816" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2527816" style="visibility: hidden">
            *
            </span>
            Sign-Up Deadline
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2527816" id="RVALENTRY2527816" value="N">
            <input type="hidden" name="OLD2527816" id="OLD2527816" value="">
            <input type="text" class="form-control" id="ENTRY2527816" name="ENTRY2527816" tabindex="190" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Members will not be allowed to sign up for an event past this date." disabled="">&nbsp;<a href="#" tabindex="190" onclick="cal.select(window.easyform.ENTRY2527816,'ENTRY2527816X','MM/dd/yyyy', window.easyform.ENTRY2527816.value); return false;" name="ENTRY2527816X" id="ENTRY2527816X"><img src="/assets/images/calendar.gif" name="ENTRY2527816I" id="ENTRY2527816I"></a>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY911436" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY911436" style="visibility: hidden">
            *
            </span>
            Estimated Cost
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY911436" id="RVALENTRY911436" value="N">
            <input type="hidden" name="OLD911436" id="OLD911436" value="">
            <input type="text" class="form-control" id="ENTRY911436" name="ENTRY911436" tabindex="200" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The estimated cost per person for attending this event." disabled="">
            <span class="entrypostscript">
            per person
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY5475636" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY5475636" style="visibility: hidden">
            *
            </span>
            Minimum Balance Required To Sign Up
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY5475636" id="RVALENTRY5475636" value="N">
            <input type="hidden" name="OLD5475636" id="OLD5475636" value="">
            <input type="text" class="form-control" id="ENTRY5475636" name="ENTRY5475636" tabindex="210" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The minimum balance a member must have in their account to be allowed to sign up for this event" disabled="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY6086336" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY6086336" style="visibility: hidden">
            *
            </span>
            Automatically Charge Scouts
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY6086336" id="RVALENTRY6086336" value="N">
            <input type="hidden" name="OLD6086336" id="OLD6086336" value="">
            <input type="text" class="form-control" id="ENTRY6086336" name="ENTRY6086336" tabindex="220" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The amount to automatically charge scouts when they sign up for an event" disabled="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY6086436" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY6086436" style="visibility: hidden">
            *
            </span>
            Automatically Charge Adults
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY6086436" id="RVALENTRY6086436" value="N">
            <input type="hidden" name="OLD6086436" id="OLD6086436" value="">
            <input type="text" class="form-control" id="ENTRY6086436" name="ENTRY6086436" tabindex="230" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The amount to automatically charge adults who sign up for this event" disabled="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY6086536" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY6086536" style="visibility: hidden">
            *
            </span>
            Automatically Charge For Each Guest
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY6086536" id="RVALENTRY6086536" value="N">
            <input type="hidden" name="OLD6086536" id="OLD6086536" value="">
            <input type="text" class="form-control" id="ENTRY6086536" name="ENTRY6086536" tabindex="240" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The amount to automatically charge a participant for each guest they are bringing" disabled="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY302172" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY302172" style="visibility: hidden">
            *
            </span>
            Community Service Hours
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY302172" id="RVALENTRY302172" value="N">
            <input type="hidden" name="OLD302172" id="OLD302172" value="">
            <input type="text" class="form-control" id="ENTRY302172" name="ENTRY302172" tabindex="250" size="9" onblur="TestRegExp(this,/^(?:[-]?)*(?:[\d]{0,9}?)*(?:[.]?)*(?:[\d]{0,2})?$/,'This field must contain a number with no more than two digits after the decimal point.')" maxlength="9" value="" title="The number of hours that participants can count toward their community service requirements." disabled="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY541593" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY541593" style="visibility: hidden">
            *
            </span>
            Virtual Meeting URL
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY541593" id="RVALENTRY541593" value="N">
            <input type="hidden" name="OLD541593" id="OLD541593" value="">
            <input type="text" class="form-control" id="ENTRY541593" name="ENTRY541593" tabindex="260" size="50" onblur="TestRegExp(this,/(http|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?/,'Please enter the full URL beginning with http:// or https://')" maxlength="255" value="" title="The URL to join a video conference or conference call for this meeting" disabled="">
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
        <tr id="DIVENTRY382112" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY382112" style="visibility: hidden">
            *
            </span>
            Limit Participation To
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY382112" id="RVALENTRY382112" value="N">
            <input type="hidden" name="OLD382112" id="OLD382112" value="0">
            <select id="ENTRY382112" name="ENTRY382112" class="form-control" onblur="TestRegExp(this,'','')" tabindex="270" title="Restrict this event to the members of the selected dynamic subgroup" size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="20">Announce</option>
              <option value="6">AOL</option>
              <option value="3">Bear</option>
              <option value="40">Committee Chair</option>
              <option value="39">Cubmaster</option>
              <option value="9">Den 1</option>
              <option value="27">Den 10</option>
              <option value="28">Den 11</option>
              <option value="29">Den 12</option>
              <option value="30">Den 13</option>
              <option value="31">Den 14</option>
              <option value="32">Den 15</option>
              <option value="33">Den 16</option>
              <option value="34">Den 17</option>
              <option value="35">Den 18</option>
              <option value="15">Den 19</option>
              <option value="10">Den 2</option>
              <option value="16">Den 20</option>
              <option value="17">Den 21</option>
              <option value="18">Den 22</option>
              <option value="19">Den 23</option>
              <option value="36">Den 24</option>
              <option value="37">Den 25</option>
              <option value="11">Den 3</option>
              <option value="25">Den 4</option>
              <option value="12">Den 5</option>
              <option value="22">Den 6</option>
              <option value="13">Den 7</option>
              <option value="14">Den 8</option>
              <option value="26">Den 9</option>
              <option value="43">Den Leaders</option>
              <option value="8">Key 3</option>
              <option value="7">Leaders + Committee</option>
              <option value="5">Lion</option>
              <option value="44">Lions + Tigers</option>
              <option value="21">Membership</option>
              <option value="41">Popcorn Kernel</option>
              <option value="1">Tiger</option>
              <option value="24">Treasurer</option>
              <option value="4">Webelos</option>
              <option value="23">Webelos + AOL</option>
              <option value="2">Wolf</option>
              <option value="42">Wreath Wrangler</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY24542" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY24542" style="visibility: hidden">
            *
            </span>
            Leaders
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY24542" id="RVALENTRY24542" value="N">
            <input type="hidden" name="OLD24542" id="OLD24542" value="0">
            <select id="ENTRY24542" name="ENTRY24542" class="form-control" onblur="TestRegExp(this,'','')" tabindex="280" title="The leader for this event" size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="1018">Aarons, Andrew</option>
              <option value="1027">Aarons, Ashley</option>
              <option value="1086">Aarons, Stephen</option>
              <option value="910">Abbott, Albert</option>
              <option value="914">Abbott, William</option>
              <option value="1063">Almaraz, Alexander</option>
              <option value="1064">Almaraz, Eric</option>
              <option value="668">Alvarez, Jorge</option>
              <option value="714">Alvarez, Kristy</option>
              <option value="1239">Alvarez, Layla</option>
              <option value="664">Alvarez, Mateo</option>
              <option value="1245">Applegate, Chris</option>
              <option value="1240">Applegate, Sebastian</option>
              <option value="1202">Babb, Chris</option>
              <option value="1184">Babb, Tyson</option>
              <option value="488">Bayes, Dylan</option>
              <option value="578">Bayes, Phillip</option>
              <option value="1621">Benson, Lawrence</option>
              <option value="1617">Benson, Nicolas</option>
              <option value="1154">Blair, Frankie</option>
              <option value="1155">Blair, Joe</option>
              <option value="1156">Bruyn, Emerson</option>
              <option value="1169">Bruyn, Meaghan</option>
              <option value="964">Bucklin, Emmett</option>
              <option value="976">Bucklin, Mary</option>
              <option value="977">Bucklin, Michael</option>
              <option value="1610">Bucklin, Michael2</option>
              <option value="1611">Bucklin, Michael3</option>
              <option value="785">Bush, Greg</option>
              <option value="762">Bush, Kai</option>
              <option value="908">Byrd, Amanda</option>
              <option value="1618">Byrd, Barrett</option>
              <option value="763">Byrd, Benjamin</option>
              <option value="786">Byrd, Ryan</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="1143">Chidester, Ella</option>
              <option value="986">Chidester, Russ</option>
              <option value="983">Chidester, Taylor</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="984">De Los Santos Garza, Andrea</option>
              <option value="965">De Los Santos Garza, Leo  Jr.</option>
              <option value="978">De Los Santos Tamez, Diego</option>
              <option value="1135">DeMartini, Emilia</option>
              <option value="1139">DeMartini, Trevor</option>
              <option value="1136">DeMartini, Vincent</option>
              <option value="1241">Dennis, Khoi</option>
              <option value="1246">Dennis, Michael</option>
              <option value="614">Desouky, Noura</option>
              <option value="1268">Diaz, Adam</option>
              <option value="1266">Diaz, Winslow</option>
              <option value="562">Dranguet, Benjamin</option>
              <option value="1281">Duryee, David</option>
              <option value="1203">D'Vincent, Lilli</option>
              <option value="1185">D'Vincent, Mason</option>
              <option value="654">Elrakabawy, Erin</option>
              <option value="1539">Espejel, Dean</option>
              <option value="1609">Espejel, Moshe</option>
              <option value="888">Gaete, Holly</option>
              <option value="886">Gaete, Lincoln</option>
              <option value="893">Galdo, Anne</option>
              <option value="1088">Galdo, Henry</option>
              <option value="1114">Gibson, Charleston</option>
              <option value="1123">Gibson, Steven</option>
              <option value="832">Goodine, David</option>
              <option value="811">Goodine, Jack</option>
              <option value="1187">Gurrola, Benjamin</option>
              <option value="1204">Gurrola, Jacqueline</option>
              <option value="1232">Gurrola, Matthew</option>
              <option value="1157">Hallar, Henry</option>
              <option value="1170">Hallar, Ingrid</option>
              <option value="1171">Hanss Blair, Rachel</option>
              <option value="944">Harrison, Abi</option>
              <option value="940">Harrison, James</option>
              <option value="1084">Hayes, David</option>
              <option value="1188">Hickman, Maya</option>
              <option value="833">Hickman, Trey</option>
              <option value="1285">Hoy, Ashton</option>
              <option value="1287">Hoy, Nicole</option>
              <option value="1216">Hume, Beatrix</option>
              <option value="1225">Hume, John</option>
              <option value="1205">Idell, Claire</option>
              <option value="1189">Idell, Gabe</option>
              <option value="1292">Ingram, Alistair</option>
              <option value="1534">Ingrams, Julie and Robert</option>
              <option value="1293">Kathuria, Kabir</option>
              <option value="883">Keenan, Danielle</option>
              <option value="880">Keenan, Lilly</option>
              <option value="882">Keenan, Peter</option>
              <option value="1190">kommineni, anish</option>
              <option value="517">kommineni, Avighna</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
              <option value="1623">Koran, Katie and Kenny</option>
              <option value="1619">Koran, Teddy</option>
              <option value="933">Lorenzini, Mitch</option>
              <option value="1217">Lorenzini, Paige</option>
              <option value="922">Lorenzini, Pepper</option>
              <option value="1032">Lynch, Dixon</option>
              <option value="1034">Lynch, Scott</option>
              <option value="688">Mallios, Jason</option>
              <option value="693">Mallios, Jim</option>
              <option value="493">Mallios, Nicholas</option>
              <option value="556">Mallios, Tracy</option>
              <option value="1260">Marquez, David</option>
              <option value="1255">Marquez, Owen</option>
              <option value="856">Marshall, Angie</option>
              <option value="866">Marshall, Mark</option>
              <option value="1158">McFarland, Beckett</option>
              <option value="923">McFarland, Evan</option>
              <option value="1124">McFarland, Ian</option>
              <option value="934">McFarland, Kristin</option>
              <option value="1269">McLeer, Douglas</option>
              <option value="1226">McLeer, Krissy</option>
              <option value="1218">McLeer, Levi</option>
              <option value="1219">McLeer, Liam</option>
              <option value="1256">Medler, Bennett</option>
              <option value="1620">Modglin, Abel</option>
              <option value="1622">Modglin, Kirk</option>
              <option value="1276">Morris, Jack</option>
              <option value="1282">Morris, Lacey</option>
              <option value="1002">Mysyk, Alexander</option>
              <option value="1288">Mysyk, Andriy</option>
              <option value="1191">Nair, Ananya</option>
              <option value="1206">Nair, Jithun</option>
              <option value="1294">Nallathambi, Kalki</option>
              <option value="1533">Nallathambi, Ravetha</option>
              <option value="789">Nguyen, Phuong</option>
              <option value="1277">Niphadkar, Sahana</option>
              <option value="1283">Niphadkar, Shraddha</option>
              <option value="1172">North, Allison</option>
              <option value="1159">North, Arlo</option>
              <option value="1160">North, Davis</option>
              <option value="599">Omran, Ahmed</option>
              <option value="643">Omran, Haroun</option>
              <option value="1079">Patel, Amy</option>
              <option value="1173">Patel, Sujan</option>
              <option value="765">Phan, Erik</option>
              <option value="1247">Porter, Koley</option>
              <option value="1242">Porter, Thora</option>
              <option value="968">Purohit, Anay</option>
              <option value="980">Purohit, Vijendra</option>
              <option value="1207">Rios, Amanda</option>
              <option value="1243">Rios, Luciana</option>
              <option value="745">Robinson, Nick</option>
              <option value="737">Robinson, Rohan</option>
              <option value="924">Saldanha, Claire</option>
              <option value="1161">Saldanha, Eva</option>
              <option value="935">Saldanha, Mithila</option>
              <option value="622">Shuman, Frank</option>
              <option value="853">Shuman, Luca</option>
              <option value="649">Shuman, Natalie</option>
              <option value="899">Slonsky, Henry</option>
              <option value="583">Slonsky, Kyle</option>
              <option value="591">Slonsky, Yasemin</option>
              <option value="1208">Staffield, Brittany</option>
              <option value="638">Stappenbeck, Charlotte</option>
              <option value="616">Stappenbeck, Steve</option>
              <option value="1263">Stubblefield, Joel</option>
              <option value="1262">Stubblefield, Will</option>
              <option value="1162">Sujan, Jaxson</option>
              <option value="1163">Sujan, Kira</option>
              <option value="1077">Sujan, Mav</option>
              <option value="1066">Susannah Benton, Susannah</option>
              <option value="995">Swantner, Albert</option>
              <option value="991">Swantner, Everett</option>
              <option value="992">Swenson, Jack</option>
              <option value="996">Swenson, Lindsey</option>
              <option value="1089">Swenson, Matt</option>
              <option value="1081">Tabie, Logan</option>
              <option value="1085">Tabie, Mike</option>
              <option value="854">Valencia Marshall, Angel</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1220">Westphal, Milo</option>
              <option value="1221">Westphal, Oliver</option>
              <option value="1209">Whittington, Aric</option>
              <option value="1193">Whittington, Rowan</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485992" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485992" style="visibility: hidden">
            *
            </span>

            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485992" id="RVALENTRY485992" value="N">
            <input type="hidden" name="OLD485992" id="OLD485992" value="0">
            <select id="ENTRY485992" name="ENTRY485992" class="form-control" onblur="TestRegExp(this,'','')" tabindex="290" title="A second leader for this event" size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="1018">Aarons, Andrew</option>
              <option value="1027">Aarons, Ashley</option>
              <option value="1086">Aarons, Stephen</option>
              <option value="910">Abbott, Albert</option>
              <option value="914">Abbott, William</option>
              <option value="1063">Almaraz, Alexander</option>
              <option value="1064">Almaraz, Eric</option>
              <option value="668">Alvarez, Jorge</option>
              <option value="714">Alvarez, Kristy</option>
              <option value="1239">Alvarez, Layla</option>
              <option value="664">Alvarez, Mateo</option>
              <option value="1245">Applegate, Chris</option>
              <option value="1240">Applegate, Sebastian</option>
              <option value="1202">Babb, Chris</option>
              <option value="1184">Babb, Tyson</option>
              <option value="488">Bayes, Dylan</option>
              <option value="578">Bayes, Phillip</option>
              <option value="1621">Benson, Lawrence</option>
              <option value="1617">Benson, Nicolas</option>
              <option value="1154">Blair, Frankie</option>
              <option value="1155">Blair, Joe</option>
              <option value="1156">Bruyn, Emerson</option>
              <option value="1169">Bruyn, Meaghan</option>
              <option value="964">Bucklin, Emmett</option>
              <option value="976">Bucklin, Mary</option>
              <option value="977">Bucklin, Michael</option>
              <option value="1610">Bucklin, Michael2</option>
              <option value="1611">Bucklin, Michael3</option>
              <option value="785">Bush, Greg</option>
              <option value="762">Bush, Kai</option>
              <option value="908">Byrd, Amanda</option>
              <option value="1618">Byrd, Barrett</option>
              <option value="763">Byrd, Benjamin</option>
              <option value="786">Byrd, Ryan</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="1143">Chidester, Ella</option>
              <option value="986">Chidester, Russ</option>
              <option value="983">Chidester, Taylor</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="984">De Los Santos Garza, Andrea</option>
              <option value="965">De Los Santos Garza, Leo  Jr.</option>
              <option value="978">De Los Santos Tamez, Diego</option>
              <option value="1135">DeMartini, Emilia</option>
              <option value="1139">DeMartini, Trevor</option>
              <option value="1136">DeMartini, Vincent</option>
              <option value="1241">Dennis, Khoi</option>
              <option value="1246">Dennis, Michael</option>
              <option value="614">Desouky, Noura</option>
              <option value="1268">Diaz, Adam</option>
              <option value="1266">Diaz, Winslow</option>
              <option value="562">Dranguet, Benjamin</option>
              <option value="1281">Duryee, David</option>
              <option value="1203">D'Vincent, Lilli</option>
              <option value="1185">D'Vincent, Mason</option>
              <option value="654">Elrakabawy, Erin</option>
              <option value="1539">Espejel, Dean</option>
              <option value="1609">Espejel, Moshe</option>
              <option value="888">Gaete, Holly</option>
              <option value="886">Gaete, Lincoln</option>
              <option value="893">Galdo, Anne</option>
              <option value="1088">Galdo, Henry</option>
              <option value="1114">Gibson, Charleston</option>
              <option value="1123">Gibson, Steven</option>
              <option value="832">Goodine, David</option>
              <option value="811">Goodine, Jack</option>
              <option value="1187">Gurrola, Benjamin</option>
              <option value="1204">Gurrola, Jacqueline</option>
              <option value="1232">Gurrola, Matthew</option>
              <option value="1157">Hallar, Henry</option>
              <option value="1170">Hallar, Ingrid</option>
              <option value="1171">Hanss Blair, Rachel</option>
              <option value="944">Harrison, Abi</option>
              <option value="940">Harrison, James</option>
              <option value="1084">Hayes, David</option>
              <option value="1188">Hickman, Maya</option>
              <option value="833">Hickman, Trey</option>
              <option value="1285">Hoy, Ashton</option>
              <option value="1287">Hoy, Nicole</option>
              <option value="1216">Hume, Beatrix</option>
              <option value="1225">Hume, John</option>
              <option value="1205">Idell, Claire</option>
              <option value="1189">Idell, Gabe</option>
              <option value="1292">Ingram, Alistair</option>
              <option value="1534">Ingrams, Julie and Robert</option>
              <option value="1293">Kathuria, Kabir</option>
              <option value="883">Keenan, Danielle</option>
              <option value="880">Keenan, Lilly</option>
              <option value="882">Keenan, Peter</option>
              <option value="1190">kommineni, anish</option>
              <option value="517">kommineni, Avighna</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
              <option value="1623">Koran, Katie and Kenny</option>
              <option value="1619">Koran, Teddy</option>
              <option value="933">Lorenzini, Mitch</option>
              <option value="1217">Lorenzini, Paige</option>
              <option value="922">Lorenzini, Pepper</option>
              <option value="1032">Lynch, Dixon</option>
              <option value="1034">Lynch, Scott</option>
              <option value="688">Mallios, Jason</option>
              <option value="693">Mallios, Jim</option>
              <option value="493">Mallios, Nicholas</option>
              <option value="556">Mallios, Tracy</option>
              <option value="1260">Marquez, David</option>
              <option value="1255">Marquez, Owen</option>
              <option value="856">Marshall, Angie</option>
              <option value="866">Marshall, Mark</option>
              <option value="1158">McFarland, Beckett</option>
              <option value="923">McFarland, Evan</option>
              <option value="1124">McFarland, Ian</option>
              <option value="934">McFarland, Kristin</option>
              <option value="1269">McLeer, Douglas</option>
              <option value="1226">McLeer, Krissy</option>
              <option value="1218">McLeer, Levi</option>
              <option value="1219">McLeer, Liam</option>
              <option value="1256">Medler, Bennett</option>
              <option value="1620">Modglin, Abel</option>
              <option value="1622">Modglin, Kirk</option>
              <option value="1276">Morris, Jack</option>
              <option value="1282">Morris, Lacey</option>
              <option value="1002">Mysyk, Alexander</option>
              <option value="1288">Mysyk, Andriy</option>
              <option value="1191">Nair, Ananya</option>
              <option value="1206">Nair, Jithun</option>
              <option value="1294">Nallathambi, Kalki</option>
              <option value="1533">Nallathambi, Ravetha</option>
              <option value="789">Nguyen, Phuong</option>
              <option value="1277">Niphadkar, Sahana</option>
              <option value="1283">Niphadkar, Shraddha</option>
              <option value="1172">North, Allison</option>
              <option value="1159">North, Arlo</option>
              <option value="1160">North, Davis</option>
              <option value="599">Omran, Ahmed</option>
              <option value="643">Omran, Haroun</option>
              <option value="1079">Patel, Amy</option>
              <option value="1173">Patel, Sujan</option>
              <option value="765">Phan, Erik</option>
              <option value="1247">Porter, Koley</option>
              <option value="1242">Porter, Thora</option>
              <option value="968">Purohit, Anay</option>
              <option value="980">Purohit, Vijendra</option>
              <option value="1207">Rios, Amanda</option>
              <option value="1243">Rios, Luciana</option>
              <option value="745">Robinson, Nick</option>
              <option value="737">Robinson, Rohan</option>
              <option value="924">Saldanha, Claire</option>
              <option value="1161">Saldanha, Eva</option>
              <option value="935">Saldanha, Mithila</option>
              <option value="622">Shuman, Frank</option>
              <option value="853">Shuman, Luca</option>
              <option value="649">Shuman, Natalie</option>
              <option value="899">Slonsky, Henry</option>
              <option value="583">Slonsky, Kyle</option>
              <option value="591">Slonsky, Yasemin</option>
              <option value="1208">Staffield, Brittany</option>
              <option value="638">Stappenbeck, Charlotte</option>
              <option value="616">Stappenbeck, Steve</option>
              <option value="1263">Stubblefield, Joel</option>
              <option value="1262">Stubblefield, Will</option>
              <option value="1162">Sujan, Jaxson</option>
              <option value="1163">Sujan, Kira</option>
              <option value="1077">Sujan, Mav</option>
              <option value="1066">Susannah Benton, Susannah</option>
              <option value="995">Swantner, Albert</option>
              <option value="991">Swantner, Everett</option>
              <option value="992">Swenson, Jack</option>
              <option value="996">Swenson, Lindsey</option>
              <option value="1089">Swenson, Matt</option>
              <option value="1081">Tabie, Logan</option>
              <option value="1085">Tabie, Mike</option>
              <option value="854">Valencia Marshall, Angel</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1220">Westphal, Milo</option>
              <option value="1221">Westphal, Oliver</option>
              <option value="1209">Whittington, Aric</option>
              <option value="1193">Whittington, Rowan</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY241411" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY241411" style="visibility: hidden">
            *
            </span>
            Tour Permit Submitted?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY241411" id="RVALENTRY241411" value="N">
            <input type="hidden" name="OLD241411" id="OLD241411" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="300" value="Y" id="ENTRY241411" name="ENTRY241411" size="1" title="Has a tour permit been submitted for this event?" disabled="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs407">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON21" type="button" name="save continue" title="Save this information and go to the next page" value="Continue" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON22" type="button" name="save add again" title="Save this information as a new row in  the database and prepare to add another row" value="Save &amp; Add Another" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON23" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON24" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="350" id="BUTTON25" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON25">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY24112">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>