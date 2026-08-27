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
<script src="ckeditor/ckeditor.js?v=2"></script><style>.cke{visibility:hidden;}</style>
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
    if (onLoad||thisfield.name=='ENTRY24682')
{
    var selectedvalue = easyGetFieldValue('ENTRY24682');
    GetEventTypeFlags(selectedvalue);
}


		if (onLoad||thisfield.name=='ENTRY2472144')
		{
		  var startID = '2472143';
		  var endID =   '247317';
		  var startTimeSpan = document.getElementById('DIVTIME'+startID);

		  var startTime = document.getElementById('TIME'+startID);
		  var startAmPm = document.getElementById('AMPM'+startID);

		  var endTimeSpan = document.getElementById('DIVTIME'+endID);
		  var endTime = document.getElementById('TIME'+endID);
		  var endAmPm = document.getElementById('AMPM'+endID);

		  var allDay = easyGetFieldValue('ENTRY2472144');
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

      if (thisfield.name=='DATE2472143')
		{
		  var endDateObj = document.getElementById('DATE247317');
		  var endDate = endDateObj.value;
		  if (endDate == '')
		  {
			endDateObj.value = easyGetFieldValue('DATE2472143');
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
		easySetFieldValue('ENTRY911536','0');
	  }

	  if (FlagValues.substr(3,1)=='N')
	  {
		easySetFieldValue('ENTRY302272','0.00');
	  }
	  if (FlagValues.substr(9,1)=='N')
	  {
		easySetFieldValue('ENTRY2528016','');
	  }

	  easyEnableField('ENTRY911536',(FlagValues.substr(0,1)=='Y'),true);

	  easyEnableField('ENTRY302272',(FlagValues.substr(3,1)=='Y'),true);

	  easyEnableField('ENTRY247111',(FlagValues.substr(4,1)=='Y'),true);

	  easyEnableField('ENTRY2528016',(FlagValues.substr(9,1)=='Y'),true);

          easySetRequired('ENTRY24702',(FlagValues.substr(15,1)=='Y'));

	  easyEnableField('ENTRY24702',(FlagValues.substr(15,1)=='Y'),true);

	  easyEnableField('ENTRY382132',(FlagValues.substr(16,1)=='Y'),true);

	  easyEnableField('ENTRY486102',(FlagValues.substr(18,1)=='Y'),true);
	  easyEnableField('ENTRY486112',(FlagValues.substr(18,1)=='Y'),true);

	  easyEnableField('ENTRY501792',(FlagValues.substr(19,1)=='Y'),true);
	  easyEnableField('ENTRY541543',(FlagValues.substr(20,1)=='Y'),true);

	  easyEnableField('ENTRY5470336',(FlagValues.substr(21,1)=='Y'),true);

	  easyEnableField('ENTRY6086636',(FlagValues.substr(22,1)=='Y'),true);
	  easyEnableField('ENTRY6086736',(FlagValues.substr(22,1)=='Y'),true);
	  easyEnableField('ENTRY6086836',(FlagValues.substr(22,1)=='Y'),true);

}
    //-->
  </script>
  <script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/config.js?v=2&amp;t=G87E"></script><link rel="stylesheet" type="text/css" href="https://www.troopwebhostcs.org/ckeditor/skins/moono/editor.css?t=G87E"><script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/lang/en.js?t=G87E"></script><script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/styles.js?t=G87E"></script><script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/plugins/doksoft_backup/plugin.js?t=G87E"></script><script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/plugins/doksoft_backup/lang/en.js?t=G87E"></script></head>
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
  <input type="hidden" name="Form_ID" id="Form_ID" value="167">
  <input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
  <input type="hidden" name="Pass" id="Pass" value="1">
  <input type="hidden" name="Stack" id="Stack" value="3">
  <input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
  <input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
  <input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
  <input type="hidden" name="Report_Format" id="Report_Format" value="">
  <input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org//events/event.php?;Form_ID=167&amp;ID=581&amp;Stack=3">
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
          The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org//events/event.php?;Form_ID=167&amp;ID=581&amp;Stack=3&amp;Application_ID=2840
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
  Event Details
  </p>
  <input type="hidden" name="FK" id="FK" value="0">
  <input type="hidden" name="ID" id="ID" value="581">
  <div class="new-row" id="fs18428">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY5242269">
            <td class="text-center" "="" colspan="1">
              <input type="hidden" name="RVALENTRY5242269" id="RVALENTRY5242269" value="">
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
  <div class="new-row" id="fs775">
    <div class="container-fluid container-flex">
      <ul class="nav nav-tabs">
      <li class="active">
      <a href="#">
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
      <li>
      <a href="#" onclick="LinkTo('event-edit-sign-up-list.php','')" id="savelink267" name="savelink267">
      Sign-up List
      </a>
      </li>
      </ul>
    </div>
  </div>
  <div class="new-row" id="fs422">
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
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON12" type="button" name="save continue" title="Print Participant List" value="Print Participant List" onclick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&amp;Form_ID=326&amp;FK=581&amp;ID=581&amp;Stack=3','FormReportMultiSectionaspxWindow');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON14" type="button" name="save continue" title="Tour Permit Worksheet" value="Tour Permit Worksheet" onclick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&amp;Form_ID=608&amp;FK=581&amp;ID=581&amp;Stack=3','FormReportMultiSectionaspxWindow');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs421">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY24682">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY24682" style="visibility: visible">
              *
              </span>
              Event Type
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY24682" id="RVALENTRY24682" value="Y">
              <input type="hidden" name="OLD24682" id="OLD24682" value="2">
              <select id="ENTRY24682" name="ENTRY24682" class="form-control" onblur="TestRegExp(this,'','')" tabindex="180" title="The type of this event" size="1">
                <option value="15">Committee Meeting</option>
                <option value="1">Pack Meeting</option>
                <option value="12">Den Meeting</option>
                <option value="8">Campout</option>
                <option value="4">Banquet</option>
                <option value="3">Fund Raiser</option>
                <option value="5">Community Service</option>
                <option value="13">Recruitment</option>
                <option value="6">Training</option>
                <option selected="" value="2">Special Event</option>
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
          <tr id="DIVENTRY24691">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY24691" style="visibility: hidden">
              *
              </span>
              Event Name
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY24691" id="RVALENTRY24691" value="N">
              <input type="hidden" name="OLD24691" id="OLD24691" value="Welcome Back, Pack Picnic">
              <input type="text" class="form-control" id="ENTRY24691" name="ENTRY24691" tabindex="190" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="Welcome Back, Pack Picnic" title="The name of this event">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY24702" style="visibility: visible; display: table-row;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY24702" style="visibility: visible">
              *
              </span>
              Location
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY24702" id="RVALENTRY24702" value="Y">
              <input type="hidden" name="OLD24702" id="OLD24702" value="7">
              <select id="ENTRY24702" name="ENTRY24702" class="form-control" onblur="TestRegExp(this,'','')" tabindex="200" title="Where this event will occur" size="1">
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
                <option selected="" value="7">VFW Post 4443</option>
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
          <tr id="DIVENTRY24742">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY24742" style="visibility: hidden">
              *
              </span>
              Departing From / Returning To
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY24742" id="RVALENTRY24742" value="N">
              <input type="hidden" name="OLD24742" id="OLD24742" value="0">
              <select id="ENTRY24742" name="ENTRY24742" class="form-control" onblur="TestRegExp(this,'','')" tabindex="210" title="The location at which the group will meet to travel to the event." size="1">
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
              <span class="RequiredIndicator" id="RDIVENTRY2472143" style="visibility: visible">
              *
              </span>
              Scheduled Start
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY2472143" id="RVALENTRY2472143" value="Y">
              <span id="DIVENTRY2472143">
              <input type="hidden" name="OLD2472143" id="OLD2472143" value="08/29/2026 10:00 AM">
              <input type="text" class="form-control" id="DATE2472143" name="DATE2472143" tabindex="221" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date and time')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date and time')" maxlength="22" value="08/29/2026" title="">&nbsp;<a href="#" tabindex="221" onclick="cal.select(window.easyform.DATE2472143,'DATE2472143X','MM/dd/yyyy', window.easyform.DATE2472143.value); return false;" name="DATE2472143X" id="DATE2472143X"><img src="/assets/images/calendar.gif" name="DATE2472143I" id="DATE2472143I"></a><span id="DIVTIME2472143" class="entrypostscript" style="display: inline;"> at <input type="text" class="form-control" id="TIME2472143" name="TIME2472143" tabindex="221" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date and time')" maxlength="5" title="" value="10:00"><select id="AMPM2472143" name="AMPM2472143" class="form-control" tabindex="221" size="1"><option selected="" value="AM">AM</option><option value="PM">PM</option></select></span>
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY2472144" id="RVALENTRY2472144" value="Y">
              <span id="DIVENTRY2472144">
              <input type="hidden" name="OLD2472144" id="OLD2472144" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="222" value="Y" id="ENTRY2472144" name="ENTRY2472144" size="1" title="">
              <span class="entrypostscript">
              All Day Event
              </span>
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY247317">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY247317" style="visibility: visible">
              *
              </span>
              Scheduled End
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY247317" id="RVALENTRY247317" value="Y">
              <input type="hidden" name="OLD247317" id="OLD247317" value="08/29/2026 2:00 PM">
              <input type="text" class="form-control" id="DATE247317" name="DATE247317" tabindex="230" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date followed by a valid time of day.')" maxlength="22" value="08/29/2026" title="The date and time at which this event is scheduled to end.">&nbsp;<a href="#" tabindex="230" onclick="cal.select(window.easyform.DATE247317,'DATE247317X','MM/dd/yyyy', window.easyform.DATE247317.value); return false;" name="DATE247317X" id="DATE247317X"><img src="/assets/images/calendar.gif" name="DATE247317I" id="DATE247317I"></a><span id="DIVTIME247317" class="entrypostscript" style="display: inline;"> at <input type="text" class="form-control" id="TIME247317" name="TIME247317" tabindex="230" size="5" onkeyup="easyTimeKeyStroke(this);" onblur="easyTimeExit(this,'Please enter a valid date followed by a valid time of day.')" maxlength="5" title="The date and time at which this event is scheduled to end." value="2:00"><select id="AMPM247317" name="AMPM247317" class="form-control" tabindex="230" size="1"><option value="AM">AM</option><option selected="" value="PM">PM</option></select></span>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY501792" style="visibility: visible; display: table-row;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY501792" style="visibility: hidden">
              *
              </span>
              Dress Code
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY501792" id="RVALENTRY501792" value="N">
              <input type="hidden" name="OLD501792" id="OLD501792" value="2">
              <select id="ENTRY501792" name="ENTRY501792" class="form-control" onblur="TestRegExp(this,'','')" tabindex="240" title="The dress code that is required for this event" size="1">
                <option value="0"> </option>
                <option value="1">Class A Uniform</option>
                <option selected="" value="2">Class B T-Shirt</option>
              </select>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY2528016" style="visibility: visible; display: table-row;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY2528016" style="visibility: hidden">
              *
              </span>
              Sign-Up Deadline
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY2528016" id="RVALENTRY2528016" value="N">
              <input type="hidden" name="OLD2528016" id="OLD2528016" value="08/29/2026">
              <input type="text" class="form-control" id="ENTRY2528016" name="ENTRY2528016" tabindex="250" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/29/2026" title="Members will not be allowed to sign up for an event past this date.">&nbsp;<a href="#" tabindex="250" onclick="cal.select(window.easyform.ENTRY2528016,'ENTRY2528016X','MM/dd/yyyy', window.easyform.ENTRY2528016.value); return false;" name="ENTRY2528016X" id="ENTRY2528016X"><img src="/assets/images/calendar.gif" name="ENTRY2528016I" id="ENTRY2528016I"></a>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY911536" style="visibility: visible; display: table-row;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY911536" style="visibility: hidden">
              *
              </span>
              Estimated Cost
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY911536" id="RVALENTRY911536" value="N">
              <input type="hidden" name="OLD911536" id="OLD911536" value="0.00">
              <input type="text" class="form-control" id="ENTRY911536" name="ENTRY911536" tabindex="260" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="0.00" title="The estimated cost per person for attending this event.">
              <span class="entrypostscript">
              per person
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5470336" style="visibility: visible; display: table-row;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5470336" style="visibility: hidden">
              *
              </span>
              Minimum Balance Required To Sign Up
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5470336" id="RVALENTRY5470336" value="N">
              <input type="hidden" name="OLD5470336" id="OLD5470336" value="">
              <input type="text" class="form-control" id="ENTRY5470336" name="ENTRY5470336" tabindex="270" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The minimum balance a member must have in their account to be allowed to sign up for this event">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY6086636" style="visibility: collapse; display: none;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY6086636" style="visibility: hidden">
              *
              </span>
              Automatically Charge Scouts
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY6086636" id="RVALENTRY6086636" value="N">
              <input type="hidden" name="OLD6086636" id="OLD6086636" value="">
              <input type="text" class="form-control" id="ENTRY6086636" name="ENTRY6086636" tabindex="280" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The amount to automatically charge scouts when they sign up for an event" disabled="">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY6086736" style="visibility: collapse; display: none;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY6086736" style="visibility: hidden">
              *
              </span>
              Automatically Charge Adults
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY6086736" id="RVALENTRY6086736" value="N">
              <input type="hidden" name="OLD6086736" id="OLD6086736" value="">
              <input type="text" class="form-control" id="ENTRY6086736" name="ENTRY6086736" tabindex="290" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The amount to automatically charge adults who sign up for this event" disabled="">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY6086836" style="visibility: collapse; display: none;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY6086836" style="visibility: hidden">
              *
              </span>
              Automatically Charge For Each Guest
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY6086836" id="RVALENTRY6086836" value="N">
              <input type="hidden" name="OLD6086836" id="OLD6086836" value="">
              <input type="text" class="form-control" id="ENTRY6086836" name="ENTRY6086836" tabindex="300" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="The amount to automatically charge a participant for each guest they are bringing" disabled="">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY302272" style="visibility: collapse; display: none;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY302272" style="visibility: hidden">
              *
              </span>
              Community Service Hours
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY302272" id="RVALENTRY302272" value="N">
              <input type="hidden" name="OLD302272" id="OLD302272" value="0.00">
              <input type="text" class="form-control" id="ENTRY302272" name="ENTRY302272" tabindex="310" size="9" onblur="TestRegExp(this,/^(?:[-]?)*(?:[\d]{0,9}?)*(?:[.]?)*(?:[\d]{0,2})?$/,'This field must contain a number with no more than two digits after the decimal point.')" maxlength="9" value="0.00" title="The number of hours that participants can count toward their community service requirements." disabled="">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY541543" style="visibility: collapse; display: none;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY541543" style="visibility: hidden">
              *
              </span>
              Virtual Meeting URL
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY541543" id="RVALENTRY541543" value="N">
              <input type="hidden" name="OLD541543" id="OLD541543" value="">
              <input type="text" class="form-control" id="ENTRY541543" name="ENTRY541543" tabindex="320" size="50" onblur="TestRegExp(this,/(http|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?/,'Please enter the full URL beginning with http:// or https://')" maxlength="255" value="" title="The URL to join a video conference or conference call for this meeting" disabled="">
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
          <tr id="DIVENTRY382132" style="visibility: visible; display: table-row;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY382132" style="visibility: hidden">
              *
              </span>
              Limit Participation To
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY382132" id="RVALENTRY382132" value="N">
              <input type="hidden" name="OLD382132" id="OLD382132" value="0">
              <select id="ENTRY382132" name="ENTRY382132" class="form-control" onblur="TestRegExp(this,'','')" tabindex="330" title="Restrict this event to the members of the selected dynamic subgroup" size="1">
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
          <tr id="DIVENTRY486102" style="visibility: visible; display: table-row;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY486102" style="visibility: hidden">
              *
              </span>
              Leaders
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY486102" id="RVALENTRY486102" value="N">
              <input type="hidden" name="OLD486102" id="OLD486102" value="0">
              <select id="ENTRY486102" name="ENTRY486102" class="form-control" onblur="TestRegExp(this,'','')" tabindex="340" title="The leader for this event" size="1">
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
          <tr id="DIVENTRY486112" style="visibility: visible; display: table-row;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY486112" style="visibility: hidden">
              *
              </span>

              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY486112" id="RVALENTRY486112" value="N">
              <input type="hidden" name="OLD486112" id="OLD486112" value="0">
              <select id="ENTRY486112" name="ENTRY486112" class="form-control" onblur="TestRegExp(this,'','')" tabindex="350" title="A second leader for this event" size="1">
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
          <tr id="DIVENTRY247111" style="visibility: collapse; display: none;">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY247111" style="visibility: hidden">
              *
              </span>
              Tour Permit Submitted?
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY247111" id="RVALENTRY247111" value="N">
              <input type="hidden" name="OLD247111" id="OLD247111" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="360" value="Y" id="ENTRY247111" name="ENTRY247111" size="1" title="Has a tour permit been submitted for this event?" disabled="">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5814217">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5814217" style="visibility: hidden">
              *
              </span>
              Reminder Sent
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5814217" id="RVALENTRY5814217" value="">
              <input type="hidden" name="OLD5814217" id="OLD5814217" value="">
              <input type="hidden" name="ENTRY5814217" id="ENTRY5814217" value="">
              <span class="text-left">

              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs435">
    <div class="container-fluid container-flex">
      <div class="center-block " style="max-width: 800px; min-width: 200px;">
        <p>
        &nbsp;
        </p>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs13533">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY2475127">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY2475127" style="visibility: hidden">
              *
              </span>
              Planned Activities
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY2475127" id="RVALENTRY2475127" value="N">
              <input type="hidden" name="OLD2475127" id="OLD2475127" value="&lt;p data-pm-slice=&quot;1 3 []&quot;&gt;Pack &quot;Welcome Back!&quot; Picnic &amp; Games&lt;/p&gt;

&lt;p&gt;&lt;strong&gt;Date:&lt;/strong&gt; Saturday, August 29, 2026&lt;br /&gt;
&lt;strong&gt;Time:&lt;/strong&gt; 10:00 AM – 2:00 PM &lt;em&gt;(Setup Crew: 9:00-10:00am, Cleanup: 1:00-2:00pm)&lt;/em&gt;&lt;br /&gt;
&lt;strong&gt;Location:&lt;/strong&gt;&nbsp;VFW Post 4443&lt;/p&gt;

&lt;p&gt;&lt;strong&gt;About the Event:&lt;/strong&gt;&lt;br /&gt;
We’re kicking off the new Scouting year with a &lt;strong&gt;&quot;Welcome Back!&quot; Pack Picnic&lt;/strong&gt; on Saturday, August 29th!&lt;/p&gt;

&lt;hr /&gt;
&lt;p&gt;Schedule&lt;/p&gt;

&lt;ul&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;9:00 AM – 10:00 AM:&lt;/strong&gt; Setup (Volunteers welcome!)&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;10:00 AM – 12:00 PM:&lt;/strong&gt;&lt;/p&gt;

	&lt;ul&gt;
		&lt;li&gt;
		&lt;p&gt;&lt;strong&gt;Scouts:&lt;/strong&gt; Small-group &quot;Get to Know You&quot; games &amp; active fun - water activities included!&nbsp;&lt;/p&gt;
		&lt;/li&gt;
		&lt;li&gt;
		&lt;p&gt;&lt;strong&gt;Parents:&lt;/strong&gt; Catching up, year-ahead Q&amp;A, photo directory sign-ups &amp; health form turn-in&lt;/p&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;12:00 PM – 1:00 PM:&lt;/strong&gt; Potluck Lunch&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;1:00 PM – 2:00 PM:&lt;/strong&gt; Clean up&lt;/p&gt;
	&lt;/li&gt;
&lt;/ul&gt;

&lt;hr /&gt;
&lt;p&gt;Food &amp; Potluck&lt;/p&gt;

&lt;ul&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;Pack Provides:&lt;/strong&gt; Hamburgers, hot dogs, and veggie burgers.&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;Families Bring:&lt;/strong&gt; A side dish or dessert to share&nbsp;&lt;a href=&quot;https://signupgenius.com/go/10C0D45ABAC2BA2FBCE9-65322228-welcome&quot; target=&quot;_blank&quot;&gt;https://signupgenius.com/go/10C0D45ABAC2BA2FBCE9-65322228-welcome&lt;/a&gt;&lt;/p&gt;
	&lt;/li&gt;
&lt;/ul&gt;

&lt;hr /&gt;
&lt;p&gt;Bring a Friend &amp; Earn a Patch!&lt;/p&gt;

&lt;p&gt;Prospective families and friends are warmly invited — good people know good people! &lt;strong&gt;If your Scout invites a friend who joins the Pack, your Scout earns their official Recruiter Patch!&lt;/strong&gt;&lt;/p&gt;

&lt;hr /&gt;
&lt;p&gt;What to Bring&lt;/p&gt;

&lt;ul&gt;
	&lt;li&gt;
	&lt;p&gt;Reusable water bottles, sunscreen&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;Potluck side dish/dessert&nbsp;&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;Completed health forms (or grab a blank copy at the info table)&lt;/p&gt;
	&lt;/li&gt;
&lt;/ul&gt;">
              <input type="hidden" id="HTMLEditKeyENTRY2475127" value="HTMLEditENTRY2475127">
              <textarea id="ENTRY2475127" name="ENTRY2475127" style="visibility: hidden; display: none;">&lt;p data-pm-slice="1 3 []"&gt;Pack "Welcome Back!" Picnic &amp; Games&lt;/p&gt;

&lt;p&gt;&lt;strong&gt;Date:&lt;/strong&gt; Saturday, August 29, 2026&lt;br /&gt;
&lt;strong&gt;Time:&lt;/strong&gt; 10:00 AM – 2:00 PM &lt;em&gt;(Setup Crew: 9:00-10:00am, Cleanup: 1:00-2:00pm)&lt;/em&gt;&lt;br /&gt;
&lt;strong&gt;Location:&lt;/strong&gt;&nbsp;VFW Post 4443&lt;/p&gt;

&lt;p&gt;&lt;strong&gt;About the Event:&lt;/strong&gt;&lt;br /&gt;
We’re kicking off the new Scouting year with a &lt;strong&gt;"Welcome Back!" Pack Picnic&lt;/strong&gt; on Saturday, August 29th!&lt;/p&gt;

&lt;hr /&gt;
&lt;p&gt;Schedule&lt;/p&gt;

&lt;ul&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;9:00 AM – 10:00 AM:&lt;/strong&gt; Setup (Volunteers welcome!)&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;10:00 AM – 12:00 PM:&lt;/strong&gt;&lt;/p&gt;

	&lt;ul&gt;
		&lt;li&gt;
		&lt;p&gt;&lt;strong&gt;Scouts:&lt;/strong&gt; Small-group "Get to Know You" games &amp; active fun - water activities included!&nbsp;&lt;/p&gt;
		&lt;/li&gt;
		&lt;li&gt;
		&lt;p&gt;&lt;strong&gt;Parents:&lt;/strong&gt; Catching up, year-ahead Q&amp;A, photo directory sign-ups &amp; health form turn-in&lt;/p&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;12:00 PM – 1:00 PM:&lt;/strong&gt; Potluck Lunch&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;1:00 PM – 2:00 PM:&lt;/strong&gt; Clean up&lt;/p&gt;
	&lt;/li&gt;
&lt;/ul&gt;

&lt;hr /&gt;
&lt;p&gt;Food &amp; Potluck&lt;/p&gt;

&lt;ul&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;Pack Provides:&lt;/strong&gt; Hamburgers, hot dogs, and veggie burgers.&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;&lt;strong&gt;Families Bring:&lt;/strong&gt; A side dish or dessert to share&nbsp;&lt;a href="https://signupgenius.com/go/10C0D45ABAC2BA2FBCE9-65322228-welcome" target="_blank"&gt;https://signupgenius.com/go/10C0D45ABAC2BA2FBCE9-65322228-welcome&lt;/a&gt;&lt;/p&gt;
	&lt;/li&gt;
&lt;/ul&gt;

&lt;hr /&gt;
&lt;p&gt;Bring a Friend &amp; Earn a Patch!&lt;/p&gt;

&lt;p&gt;Prospective families and friends are warmly invited — good people know good people! &lt;strong&gt;If your Scout invites a friend who joins the Pack, your Scout earns their official Recruiter Patch!&lt;/strong&gt;&lt;/p&gt;

&lt;hr /&gt;
&lt;p&gt;What to Bring&lt;/p&gt;

&lt;ul&gt;
	&lt;li&gt;
	&lt;p&gt;Reusable water bottles, sunscreen&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;Potluck side dish/dessert&nbsp;&lt;/p&gt;
	&lt;/li&gt;
	&lt;li&gt;
	&lt;p&gt;Completed health forms (or grab a blank copy at the info table)&lt;/p&gt;
	&lt;/li&gt;
&lt;/ul&gt;</textarea><div id="cke_ENTRY2475127" class="cke_1 cke cke_reset cke_chrome cke_editor_ENTRY2475127 cke_ltr cke_browser_webkit cke_hidpi" dir="ltr" lang="en" role="application" aria-labelledby="cke_ENTRY2475127_arialbl"><span id="cke_ENTRY2475127_arialbl" class="cke_voice_label">Rich Text Editor, ENTRY2475127</span><div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;"><span id="cke_9" class="cke_voice_label">Editor toolbars</span><span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_9" onmousedown="return false;"><span id="cke_13" class="cke_toolbar" aria-labelledby="cke_13_label" role="toolbar"><span id="cke_13_label" class="cke_voice_label">Basic Styles</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_14" class="cke_button cke_button__bold cke_button_off" href="javascript:void('Bold')" title="Bold" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -24px;background-size:16px;">&nbsp;</span><span id="cke_14_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Bold</span></a><a id="cke_15" class="cke_button cke_button__italic cke_button_off" href="javascript:void('Italic')" title="Italic" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_15_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(5,event);" onfocus="return CKEDITOR.tools.callFunction(6,event);" onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -48px;background-size:16px;">&nbsp;</span><span id="cke_15_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Italic</span></a><a id="cke_16" class="cke_button cke_button__underline cke_button_off" href="javascript:void('Underline')" title="Underline" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_16_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(8,event);" onfocus="return CKEDITOR.tools.callFunction(9,event);" onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span class="cke_button_icon cke_button__underline_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -144px;background-size:16px;">&nbsp;</span><span id="cke_16_label" class="cke_button_label cke_button__underline_label" aria-hidden="false">Underline</span></a><a id="cke_17" class="cke_button cke_button__strike cke_button_off" href="javascript:void('Strikethrough')" title="Strikethrough" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(11,event);" onfocus="return CKEDITOR.tools.callFunction(12,event);" onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span class="cke_button_icon cke_button__strike_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -72px;background-size:16px;">&nbsp;</span><span id="cke_17_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">Strikethrough</span></a><a id="cke_18" class="cke_button cke_button__subscript cke_button_off" href="javascript:void('Subscript')" title="Subscript" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span class="cke_button_icon cke_button__subscript_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -96px;background-size:16px;">&nbsp;</span><span id="cke_18_label" class="cke_button_label cke_button__subscript_label" aria-hidden="false">Subscript</span></a><a id="cke_19" class="cke_button cke_button__superscript cke_button_off" href="javascript:void('Superscript')" title="Superscript" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_19_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(17,event);" onfocus="return CKEDITOR.tools.callFunction(18,event);" onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span class="cke_button_icon cke_button__superscript_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -120px;background-size:16px;">&nbsp;</span><span id="cke_19_label" class="cke_button_label cke_button__superscript_label" aria-hidden="false">Superscript</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_20" class="cke_button cke_button__removeformat cke_button_off" href="javascript:void('Remove Format')" title="Remove Format" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_20_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(20,event);" onfocus="return CKEDITOR.tools.callFunction(21,event);" onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span class="cke_button_icon cke_button__removeformat_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -792px;background-size:16px;">&nbsp;</span><span id="cke_20_label" class="cke_button_label cke_button__removeformat_label" aria-hidden="false">Remove Format</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_21" class="cke_toolbar" aria-labelledby="cke_21_label" role="toolbar"><span id="cke_21_label" class="cke_voice_label">Paragraph</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_22" class="cke_button cke_button__numberedlist cke_button_off" href="javascript:void('Insert/Remove Numbered List')" title="Insert/Remove Numbered List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_22_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(23,event);" onfocus="return CKEDITOR.tools.callFunction(24,event);" onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -648px;background-size:16px;">&nbsp;</span><span id="cke_22_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Insert/Remove Numbered List</span></a><a id="cke_23" class="cke_button cke_button__bulletedlist cke_button_off" href="javascript:void('Insert/Remove Bulleted List')" title="Insert/Remove Bulleted List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_23_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(26,event);" onfocus="return CKEDITOR.tools.callFunction(27,event);" onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -600px;background-size:16px;">&nbsp;</span><span id="cke_23_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Insert/Remove Bulleted List</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_24" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('Decrease Indent')" title="Decrease Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_24_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(29,event);" onfocus="return CKEDITOR.tools.callFunction(30,event);" onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span class="cke_button_icon cke_button__outdent_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -456px;background-size:16px;">&nbsp;</span><span id="cke_24_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">Decrease Indent</span></a><a id="cke_25" class="cke_button cke_button__indent cke_button_off" href="javascript:void('Increase Indent')" title="Increase Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(32,event);" onfocus="return CKEDITOR.tools.callFunction(33,event);" onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span class="cke_button_icon cke_button__indent_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -408px;background-size:16px;">&nbsp;</span><span id="cke_25_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">Increase Indent</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_26" class="cke_button cke_button__justifyleft cke_button_off" href="javascript:void('Align Left')" title="Align Left" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_26_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(35,event);" onfocus="return CKEDITOR.tools.callFunction(36,event);" onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span class="cke_button_icon cke_button__justifyleft_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1152px;background-size:16px;">&nbsp;</span><span id="cke_26_label" class="cke_button_label cke_button__justifyleft_label" aria-hidden="false">Align Left</span></a><a id="cke_27" class="cke_button cke_button__justifycenter cke_button_off" href="javascript:void('Center')" title="Center" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_27_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(38,event);" onfocus="return CKEDITOR.tools.callFunction(39,event);" onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span class="cke_button_icon cke_button__justifycenter_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1128px;background-size:16px;">&nbsp;</span><span id="cke_27_label" class="cke_button_label cke_button__justifycenter_label" aria-hidden="false">Center</span></a><a id="cke_28" class="cke_button cke_button__justifyright cke_button_off" href="javascript:void('Align Right')" title="Align Right" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_28_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(41,event);" onfocus="return CKEDITOR.tools.callFunction(42,event);" onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span class="cke_button_icon cke_button__justifyright_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1176px;background-size:16px;">&nbsp;</span><span id="cke_28_label" class="cke_button_label cke_button__justifyright_label" aria-hidden="false">Align Right</span></a><a id="cke_29" class="cke_button cke_button__justifyblock cke_button_off" href="javascript:void('Justify')" title="Justify" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_29_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(44,event);" onfocus="return CKEDITOR.tools.callFunction(45,event);" onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span class="cke_button_icon cke_button__justifyblock_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1104px;background-size:16px;">&nbsp;</span><span id="cke_29_label" class="cke_button_label cke_button__justifyblock_label" aria-hidden="false">Justify</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_30" class="cke_toolbar" aria-labelledby="cke_30_label" role="toolbar"><span id="cke_30_label" class="cke_voice_label">Styles</span><span class="cke_toolbar_start"></span><span id="cke_10" class="cke_combo cke_combo__format cke_combo_off" role="presentation"><span id="cke_10_label" class="cke_combo_label">Format</span><a class="cke_combo_button" title="Paragraph Format" tabindex="-1" href="javascript:void('Paragraph Format')" hidefocus="true" role="button" aria-labelledby="cke_10_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(48,event,this);" onfocus="return CKEDITOR.tools.callFunction(49,event);" onclick="CKEDITOR.tools.callFunction(47,this);return false;"><span id="cke_10_text" class="cke_combo_text cke_combo_inlinelabel">Format</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_11" class="cke_combo cke_combo__font cke_combo_off" role="presentation"><span id="cke_11_label" class="cke_combo_label">Font</span><a class="cke_combo_button" title="Font Name" tabindex="-1" href="javascript:void('Font Name')" hidefocus="true" role="button" aria-labelledby="cke_11_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(51,event,this);" onfocus="return CKEDITOR.tools.callFunction(52,event);" onclick="CKEDITOR.tools.callFunction(50,this);return false;"><span id="cke_11_text" class="cke_combo_text cke_combo_inlinelabel">Font</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_12" class="cke_combo cke_combo__fontsize cke_combo_off" role="presentation"><span id="cke_12_label" class="cke_combo_label">Size</span><a class="cke_combo_button" title="Font Size" tabindex="-1" href="javascript:void('Font Size')" hidefocus="true" role="button" aria-labelledby="cke_12_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(54,event,this);" onfocus="return CKEDITOR.tools.callFunction(55,event);" onclick="CKEDITOR.tools.callFunction(53,this);return false;"><span id="cke_12_text" class="cke_combo_text cke_combo_inlinelabel">Size</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_31" class="cke_toolbar" aria-labelledby="cke_31_label" role="toolbar"><span id="cke_31_label" class="cke_voice_label">Colors</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_32" class="cke_button cke_button__textcolor cke_button_off" href="javascript:void('Text Color')" title="Text Color" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_32_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(56,event);" onfocus="return CKEDITOR.tools.callFunction(57,event);" onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span class="cke_button_icon cke_button__textcolor_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1080px;background-size:16px;">&nbsp;</span><span id="cke_32_label" class="cke_button_label cke_button__textcolor_label" aria-hidden="false">Text Color</span><span class="cke_button_arrow"></span></a><a id="cke_33" class="cke_button cke_button__bgcolor cke_button_off" href="javascript:void('Background Color')" title="Background Color" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_33_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(59,event);" onfocus="return CKEDITOR.tools.callFunction(60,event);" onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span class="cke_button_icon cke_button__bgcolor_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1056px;background-size:16px;">&nbsp;</span><span id="cke_33_label" class="cke_button_label cke_button__bgcolor_label" aria-hidden="false">Background Color</span><span class="cke_button_arrow"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_34" class="cke_toolbar" aria-labelledby="cke_34_label" role="toolbar"><span id="cke_34_label" class="cke_voice_label">Clipboard/Undo</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_35" class="cke_button cke_button__cut cke_button_disabled " href="javascript:void('Cut')" title="Cut" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_35_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(62,event);" onfocus="return CKEDITOR.tools.callFunction(63,event);" onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span class="cke_button_icon cke_button__cut_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -264px;background-size:16px;">&nbsp;</span><span id="cke_35_label" class="cke_button_label cke_button__cut_label" aria-hidden="false">Cut</span></a><a id="cke_36" class="cke_button cke_button__copy cke_button_disabled " href="javascript:void('Copy')" title="Copy" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_36_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(65,event);" onfocus="return CKEDITOR.tools.callFunction(66,event);" onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span class="cke_button_icon cke_button__copy_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -216px;background-size:16px;">&nbsp;</span><span id="cke_36_label" class="cke_button_label cke_button__copy_label" aria-hidden="false">Copy</span></a><a id="cke_37" class="cke_button cke_button__paste cke_button_off" href="javascript:void('Paste')" title="Paste" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_37_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(68,event);" onfocus="return CKEDITOR.tools.callFunction(69,event);" onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span class="cke_button_icon cke_button__paste_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -312px;background-size:16px;">&nbsp;</span><span id="cke_37_label" class="cke_button_label cke_button__paste_label" aria-hidden="false">Paste</span></a><a id="cke_38" class="cke_button cke_button__pastetext cke_button_off" href="javascript:void('Paste as plain text')" title="Paste as plain text" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_38_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(71,event);" onfocus="return CKEDITOR.tools.callFunction(72,event);" onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span class="cke_button_icon cke_button__pastetext_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -720px;background-size:16px;">&nbsp;</span><span id="cke_38_label" class="cke_button_label cke_button__pastetext_label" aria-hidden="false">Paste as plain text</span></a><a id="cke_39" class="cke_button cke_button__pastefromword cke_button_off" href="javascript:void('Paste from Word')" title="Paste from Word" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_39_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(74,event);" onfocus="return CKEDITOR.tools.callFunction(75,event);" onclick="CKEDITOR.tools.callFunction(76,this);return false;"><span class="cke_button_icon cke_button__pastefromword_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -768px;background-size:16px;">&nbsp;</span><span id="cke_39_label" class="cke_button_label cke_button__pastefromword_label" aria-hidden="false">Paste from Word</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_40" class="cke_button cke_button__undo cke_button_disabled " href="javascript:void('Undo')" title="Undo" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_40_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(77,event);" onfocus="return CKEDITOR.tools.callFunction(78,event);" onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span class="cke_button_icon cke_button__undo_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1008px;background-size:16px;">&nbsp;</span><span id="cke_40_label" class="cke_button_label cke_button__undo_label" aria-hidden="false">Undo</span></a><a id="cke_41" class="cke_button cke_button__redo cke_button_disabled " href="javascript:void('Redo')" title="Redo" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_41_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(80,event);" onfocus="return CKEDITOR.tools.callFunction(81,event);" onclick="CKEDITOR.tools.callFunction(82,this);return false;"><span class="cke_button_icon cke_button__redo_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -960px;background-size:16px;">&nbsp;</span><span id="cke_41_label" class="cke_button_label cke_button__redo_label" aria-hidden="false">Redo</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_42" class="cke_toolbar" aria-labelledby="cke_42_label" role="toolbar"><span id="cke_42_label" class="cke_voice_label">Links</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_43" class="cke_button cke_button__link cke_button_off" href="javascript:void('Link')" title="Link" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_43_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(83,event);" onfocus="return CKEDITOR.tools.callFunction(84,event);" onclick="CKEDITOR.tools.callFunction(85,this);return false;"><span class="cke_button_icon cke_button__link_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -528px;background-size:16px;">&nbsp;</span><span id="cke_43_label" class="cke_button_label cke_button__link_label" aria-hidden="false">Link</span></a><a id="cke_44" class="cke_button cke_button__unlink cke_button_disabled " href="javascript:void('Unlink')" title="Unlink" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_44_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(86,event);" onfocus="return CKEDITOR.tools.callFunction(87,event);" onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span class="cke_button_icon cke_button__unlink_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -552px;background-size:16px;">&nbsp;</span><span id="cke_44_label" class="cke_button_label cke_button__unlink_label" aria-hidden="false">Unlink</span></a><a id="cke_45" class="cke_button cke_button__anchor cke_button_off" href="javascript:void('Anchor')" title="Anchor" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_45_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(89,event);" onfocus="return CKEDITOR.tools.callFunction(90,event);" onclick="CKEDITOR.tools.callFunction(91,this);return false;"><span class="cke_button_icon cke_button__anchor_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -504px;background-size:16px;">&nbsp;</span><span id="cke_45_label" class="cke_button_label cke_button__anchor_label" aria-hidden="false">Anchor</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_46" class="cke_toolbar" aria-labelledby="cke_46_label" role="toolbar"><span id="cke_46_label" class="cke_voice_label">Insert</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_47" class="cke_button cke_button__image cke_button_off" href="javascript:void('Image')" title="Image" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_47_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(92,event);" onfocus="return CKEDITOR.tools.callFunction(93,event);" onclick="CKEDITOR.tools.callFunction(94,this);return false;"><span class="cke_button_icon cke_button__image_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -360px;background-size:16px;">&nbsp;</span><span id="cke_47_label" class="cke_button_label cke_button__image_label" aria-hidden="false">Image</span></a><a id="cke_48" class="cke_button cke_button__table cke_button_off" href="javascript:void('Table')" title="Table" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_48_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(95,event);" onfocus="return CKEDITOR.tools.callFunction(96,event);" onclick="CKEDITOR.tools.callFunction(97,this);return false;"><span class="cke_button_icon cke_button__table_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -912px;background-size:16px;">&nbsp;</span><span id="cke_48_label" class="cke_button_label cke_button__table_label" aria-hidden="false">Table</span></a><a id="cke_49" class="cke_button cke_button__horizontalrule cke_button_off" href="javascript:void('Insert Horizontal Line')" title="Insert Horizontal Line" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_49_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(98,event);" onfocus="return CKEDITOR.tools.callFunction(99,event);" onclick="CKEDITOR.tools.callFunction(100,this);return false;"><span class="cke_button_icon cke_button__horizontalrule_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -336px;background-size:16px;">&nbsp;</span><span id="cke_49_label" class="cke_button_label cke_button__horizontalrule_label" aria-hidden="false">Insert Horizontal Line</span></a><a id="cke_50" class="cke_button cke_button__specialchar cke_button_off" href="javascript:void('Insert Special Character')" title="Insert Special Character" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_50_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(101,event);" onfocus="return CKEDITOR.tools.callFunction(102,event);" onclick="CKEDITOR.tools.callFunction(103,this);return false;"><span class="cke_button_icon cke_button__specialchar_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -864px;background-size:16px;">&nbsp;</span><span id="cke_50_label" class="cke_button_label cke_button__specialchar_label" aria-hidden="false">Insert Special Character</span></a><a id="cke_51" class="cke_button cke_button__youtube cke_button_off" href="javascript:void('Embed YouTube Video')" title="Embed YouTube Video" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_51_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(104,event);" onfocus="return CKEDITOR.tools.callFunction(105,event);" onclick="CKEDITOR.tools.callFunction(106,this);return false;"><span class="cke_button_icon cke_button__youtube_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/youtube/images/icon.png?t=G87E');background-position:0 undefinedpx;background-size:16px;">&nbsp;</span><span id="cke_51_label" class="cke_button_label cke_button__youtube_label" aria-hidden="false">Embed YouTube Video</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_52" class="cke_toolbar" aria-labelledby="cke_52_label" role="toolbar"><span id="cke_52_label" class="cke_voice_label">Tools</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_53" class="cke_button cke_button__maximize cke_button_off" href="javascript:void('Maximize')" title="Maximize" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_53_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(107,event);" onfocus="return CKEDITOR.tools.callFunction(108,event);" onclick="CKEDITOR.tools.callFunction(109,this);return false;"><span class="cke_button_icon cke_button__maximize_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -672px;background-size:16px;">&nbsp;</span><span id="cke_53_label" class="cke_button_label cke_button__maximize_label" aria-hidden="false">Maximize</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_54" class="cke_toolbar" aria-labelledby="cke_54_label" role="toolbar"><span id="cke_54_label" class="cke_voice_label">Document</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_55" class="cke_button cke_button__source cke_button_off" href="javascript:void('Source')" title="Source" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_55_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(110,event);" onfocus="return CKEDITOR.tools.callFunction(111,event);" onclick="CKEDITOR.tools.callFunction(112,this);return false;"><span class="cke_button_icon cke_button__source_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -840px;background-size:16px;">&nbsp;</span><span id="cke_55_label" class="cke_button_label cke_button__source_label" aria-hidden="false">Source</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_56" class="cke_toolbar" aria-labelledby="cke_56_label" role="toolbar"><span id="cke_56_label" class="cke_voice_label">others</span><span class="cke_toolbar_start"></span><span class="cke_toolbar_end"></span></span><span id="cke_59" class="cke_toolbar" aria-labelledby="cke_59_label" role="toolbar"><span id="cke_59_label" class="cke_voice_label">about</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_60" class="cke_button cke_button__about cke_button_off" href="javascript:void('About CKEditor')" title="About CKEditor" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_60_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(119,event);" onfocus="return CKEDITOR.tools.callFunction(120,event);" onclick="CKEDITOR.tools.callFunction(121,this);return false;"><span class="cke_button_icon cke_button__about_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_60_label" class="cke_button_label cke_button__about_label" aria-hidden="false">About CKEditor</span></a></span><span class="cke_toolbar_end"></span></span></span></span><div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 200px;"><span id="cke_65" class="cke_voice_label">Press ALT 0 for help</span><iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" title="Rich Text Editor, ENTRY2475127" aria-describedby="cke_65" tabindex="0" allowtransparency="true" style="width: 100%; height: 100%;"></iframe></div><span id="cke_1_bottom" class="cke_bottom cke_reset_all" role="presentation" style="user-select: none;"><span id="cke_1_resizer" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" title="Resize" onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span id="cke_1_path_label" class="cke_voice_label">Elements path</span><span id="cke_1_path" class="cke_path" role="group" aria-labelledby="cke_1_path_label"><span class="cke_path_empty">&nbsp;</span></span><span class="cke_toolgroup" style="float: right; margin: -3px 10px 0px 0px;"><a id="cke_58" class="cke_button cke_button__doksoft_backup_save cke_button_off" href="javascript:void('Perform backup now')" title="Perform backup now" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_58_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(116,event);" onfocus="return CKEDITOR.tools.callFunction(117,event);" onclick="CKEDITOR.tools.callFunction(118,this);return false;"><span class="cke_button_icon cke_button__doksoft_backup_save_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/doksoft_backup/icons/doksoft_backup_save.png?t=G87E');background-position:0 undefinedpx;background-size:16px;">&nbsp;</span><span id="cke_58_label" class="cke_button_label cke_button__doksoft_backup_save_label" aria-hidden="false">{label}</span></a><a id="cke_57" class="cke_button cke_button__doksoft_backup_load cke_button_off" href="javascript:void('Restore backup...')" title="Restore backup..." tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_57_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(113,event);" onfocus="return CKEDITOR.tools.callFunction(114,event);" onclick="CKEDITOR.tools.callFunction(115,this);return false;"><span class="cke_button_icon cke_button__doksoft_backup_load_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/doksoft_backup/icons/doksoft_backup_load.png?t=G87E');background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_57_label" class="cke_button_label cke_button__doksoft_backup_load_label" aria-hidden="false" style="display: inline-block !important">Restore</span></a></span></span></div></div>
              <script>
                CKEDITOR.replace( 'ENTRY2475127', {
                 extraPlugins: 'doksoft_backup,uploadimage',
                    toolbar_name: 'doksoft_backup_save,doksoft_backup_load',
                    imageUploadUrl: 'UploadImage.aspx?max=1200'
                });
                  CKEDITOR.disableAutoInline = true;
                  CKEDITOR.config.removePlugins = 'scayt,wsc,contextmenu';
              </script>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs20105">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY5553417">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5553417" style="visibility: hidden">
              *
              </span>
              This Event Was Added On
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5553417" id="RVALENTRY5553417" value="N">
              <span class="text-left">
              08/11/2026 5:08 PM
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5553569">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5553569" style="visibility: hidden">
              *
              </span>
              Added By
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5553569" id="RVALENTRY5553569" value="N">
              <span class="text-left">
              Jorge Alvarez
              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON8" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON9" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON10" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="440" id="BUTTON11" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON11">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON12" type="button" name="save continue" title="Print Participant List" value="Print Participant List" onclick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&amp;Form_ID=326&amp;FK=581&amp;ID=581&amp;Stack=3','FormReportMultiSectionaspxWindow');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON14" type="button" name="save continue" title="Tour Permit Worksheet" value="Tour Permit Worksheet" onclick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&amp;Form_ID=608&amp;FK=581&amp;ID=581&amp;Stack=3','FormReportMultiSectionaspxWindow');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON8">
  </form>
  <div style="height: 100px;">&nbsp;</div>


</body></html>