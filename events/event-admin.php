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
  <input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="318">
  <input type="hidden" name="Form_ID" id="Form_ID" value="259">
  <input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
  <input type="hidden" name="Pass" id="Pass" value="1">
  <input type="hidden" name="Stack" id="Stack" value="2">
  <input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
  <input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
  <input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
  <input type="hidden" name="Report_Format" id="Report_Format" value="">
  <input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org//events/event.php?;Form_ID=259&amp;Stack=2&amp;ID=581">
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
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5787&amp;Stack=0','');">Events Hub</a>
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
              <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5787&amp;Stack=0','');">Events Hub</a>
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
    <li class="list-group-item"><a href="Help.aspx?ID=87" target="_blank">User Guide</a></li>
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
          The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org//events/event.php?;Form_ID=259&amp;Stack=2&amp;ID=581&amp;Application_ID=2840
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
  Calendar
  </p>
  <input type="hidden" name="FK" id="FK" value="0">
  <input type="hidden" name="ID" id="ID" value="581">
  <div class="new-row" id="fs737">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="save continue" title="Print Participant List" value="Print Participant List" onclick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&amp;Form_ID=326&amp;FK=581&amp;ID=581&amp;Stack=2','FormReportMultiSectionaspxWindow');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="save continue" title="Black Pug CSV" value="Black Pug CSV" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON3" type="button" name="preselect" title="E-Mail Participants" value="E-Mail Participants" onclick="LinkTo('/events/event.php?;Form_ID=397&amp;PreselectID=581&amp;FK=581&amp;Stack=3','');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON4" type="button" name="preselect" title="Invite Undecideds" value="Invite Undecideds" onclick="LinkTo('/events/event.php?;Form_ID=1208&amp;PreselectID=581&amp;FK=581&amp;Stack=3','');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON5" type="button" name="update" title="Update This Event" value="Update This Event" onclick="LinkTo('event-edit-details.php','');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON6" type="button" name="delete" title="Delete This Event" value="Delete This Event" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON7" type="button" name="cancel" title="Exit" value="Exit" onclick="buttonlink(this,'N');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs726">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY37002">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY37002" style="visibility: hidden">
              *
              </span>
              Event Type
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY37002" id="RVALENTRY37002" value="Y">
              <span class="text-left">
              Special Event
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY37011">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY37011" style="visibility: hidden">
              *
              </span>
              Event Name
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY37011" id="RVALENTRY37011" value="N">
              <span class="text-left">
              Welcome Back, Pack Picnic
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY37022">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY37022" style="visibility: hidden">
              *
              </span>
              Location
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY37022" id="RVALENTRY37022" value="">
              <span class="text-left">
              <a href="#" onclick="LinkTo('/events/event.php?;Form_ID=180&amp;ID=7&amp;Stack=3','');">
              VFW Post 4443
              </a>
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY37042">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY37042" style="visibility: hidden">
              *
              </span>
              Departing From / Returning To
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY37042" id="RVALENTRY37042" value="">
              <span class="text-left">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY440312">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY440312" style="visibility: hidden">
              *
              </span>
              Limit Participation To
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY440312" id="RVALENTRY440312" value="N">
              <span class="text-left">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY4860469">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY4860469" style="visibility: hidden">
              *
              </span>
              Event Leaders
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY4860469" id="RVALENTRY4860469" value="">
              <span class="text-left">

              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY371069">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY371069" style="visibility: hidden">
              *
              </span>
              Scheduled Start
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY371069" id="RVALENTRY371069" value="Y">
              <span class="text-left">
              08/29/26 10:00 AM
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY371169">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY371169" style="visibility: hidden">
              *
              </span>
              Scheduled End
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY371169" id="RVALENTRY371169" value="Y">
              <span class="text-left">
              08/29/26 2:00 PM
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5018369">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5018369" style="visibility: hidden">
              *
              </span>
              Dress Code
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5018369" id="RVALENTRY5018369" value="Y">
              <span class="text-left">
              <b>Class B T-Shirt.</b> &nbsp; <p>Yellow Pack 12 t-shirt</p>
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY911836">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY911836" style="visibility: hidden">
              *
              </span>
              Estimated Cost
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY911836" id="RVALENTRY911836" value="N">
              <span class="text-left">
              0.00
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5471369">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5471369" style="visibility: hidden">
              *
              </span>
              Minimum Balance Required For Signup
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5471369" id="RVALENTRY5471369" value="N">
              <span class="text-left">
              0.00
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY3712127">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY3712127" style="visibility: hidden">
              *
              </span>
              Planned Activities
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY3712127" id="RVALENTRY3712127" value="N">
              <span class="text-left">
              <p data-pm-slice="1 3 []">Pack "Welcome Back!" Picnic &amp; Games</p>

<p><strong>Date:</strong> Saturday, August 29, 2026<br>
<strong>Time:</strong> 10:00 AM – 2:00 PM <em>(Setup Crew: 9:00-10:00am, Cleanup: 1:00-2:00pm)</em><br>
<strong>Location:</strong>&nbsp;VFW Post 4443</p>

<p><strong>About the Event:</strong><br>
We’re kicking off the new Scouting year with a <strong>"Welcome Back!" Pack Picnic</strong> on Saturday, August 29th!</p>

<hr>
<p>Schedule</p>

<ul>
	<li>
	<p><strong>9:00 AM – 10:00 AM:</strong> Setup (Volunteers welcome!)</p>
	</li>
	<li>
	<p><strong>10:00 AM – 12:00 PM:</strong></p>

	<ul>
		<li>
		<p><strong>Scouts:</strong> Small-group "Get to Know You" games &amp; active fun - water activities included!&nbsp;</p>
		</li>
		<li>
		<p><strong>Parents:</strong> Catching up, year-ahead Q&amp;A, photo directory sign-ups &amp; health form turn-in</p>
		</li>
	</ul>
	</li>
	<li>
	<p><strong>12:00 PM – 1:00 PM:</strong> Potluck Lunch</p>
	</li>
	<li>
	<p><strong>1:00 PM – 2:00 PM:</strong> Clean up</p>
	</li>
</ul>

<hr>
<p>Food &amp; Potluck</p>

<ul>
	<li>
	<p><strong>Pack Provides:</strong> Hamburgers, hot dogs, and veggie burgers.</p>
	</li>
	<li>
	<p><strong>Families Bring:</strong> A side dish or dessert to share&nbsp;<a href="https://signupgenius.com/go/10C0D45ABAC2BA2FBCE9-65322228-welcome" target="_blank">https://signupgenius.com/go/10C0D45ABAC2BA2FBCE9-65322228-welcome</a></p>
	</li>
</ul>

<hr>
<p>Bring a Friend &amp; Earn a Patch!</p>

<p>Prospective families and friends are warmly invited — good people know good people! <strong>If your Scout invites a friend who joins the Pack, your Scout earns their official Recruiter Patch!</strong></p>

<hr>
<p>What to Bring</p>

<ul>
	<li>
	<p>Reusable water bottles, sunscreen</p>
	</li>
	<li>
	<p>Potluck side dish/dessert&nbsp;</p>
	</li>
	<li>
	<p>Completed health forms (or grab a blank copy at the info table)</p>
	</li>
</ul>
              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs6333">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON29" type="button" name="save continue" title="Send Me An Invitation" value="Send Me An Invitation" onclick="buttonlink(this,'N');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs5743">
    <div class="container-fluid container-flex">
      <div class="center-block " style="max-width: 800px; min-width: 200px;">
        <h2>
        Sign Up For This Event
        </h2>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs6631">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY2528216">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY2528216" style="visibility: hidden">
              *
              </span>
              Sign-Up Deadline
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY2528216" id="RVALENTRY2528216" value="N">
              <span class="text-left">
              08/29/2026
              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs5742">
    <div class="container-fluid container-flex">
      <div class="center-block table-responsive">
        <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid5742">
          <thead>
          <tr>
            <input type="hidden" name="ROWCOUNTCB5742" id="ROWCOUNTCB5742" value="1">
            <th>
            Participant
            </th>
            <th>
            Participation
            </th>
            <th>
            Explanation
            </th>
            <th>
            Additional Guests
            </th>
            <th>
            Comment
            </th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <input type="hidden" name="CHILDCB5742ROW0" id="CHILDCB5742ROW0" value="243748">
            <td class="text-center " id="TD5742ROW0DATA21830">
              Bucklin, Michael2
            </td>
            <td>&nbsp;</td>
            <td class="text-center " id="TD5742ROW0DATA54694">
              Insufficient funds available for this event
            </td>
            <td class="text-center " id="TD5742ROW0DATA29714">
              <input type="hidden" name="OLDCB5742ROW0DATA29714" id="OLDCB5742ROW0DATA29714" value="">
              <input type="text" class="form-control" id="CB5742ROW0DATA29714" name="CB5742ROW0DATA29714" tabindex="310" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of guests this person will bring (does not include the person who signed up)" style="background-color: rgb(255, 255, 255);">
            </td>
            <td class="text-center " id="TD5742ROW0DATA21832">
              <input type="hidden" name="OLDCB5742ROW0DATA21832" id="OLDCB5742ROW0DATA21832" value="">
              <input type="text" class="form-control" id="CB5742ROW0DATA21832" name="CB5742ROW0DATA21832" tabindex="310" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="This is a comment about this person's participation in this event.">
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs5744">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON39" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON40" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON41" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs731">
    <div class="container-fluid container-flex">
      <div class="center-block " style="max-width: 800px; min-width: 200px;">
        <h2>
        <br>Planning To Attend
        </h2>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs730">
    <div class="container-fluid container-flex">
      <div class="center-block table-responsive">
        <table>
          <tbody><tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage" onchange="SetRowsPerPage(this);">
<option value="20" selected="">20</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('730,2');">2</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('730,3');">3</a></li><li><a href="javascript:GoToSectionPageNumber('730,2');"><img src="pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
          <tr>
            <td>
              <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid730">
                <thead>
                <tr>
                  <input type="hidden" name="ROWCOUNTCB730" id="ROWCOUNTCB730" value="20">
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">PARTICIPANT<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">TYPE<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">LEVEL<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">ADDITIONAL GUESTS<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">COMMENT<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">SIGNED UP<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="text-center " id="TD730ROW0DATA3719">
                    Almaraz, Alexander
                  </td>
                  <td class="text-center " id="TD730ROW0DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW0DATA53384">
                    Webelos (2)
                  </td>
                  <td class="text-center " id="TD730ROW0DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW0DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW0DATA3720">
                    08/19/2026 9:38 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW1DATA3719">
                    Almaraz, Eric
                  </td>
                  <td class="text-center " id="TD730ROW1DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW1DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW1DATA29716">
                    1
                  </td>
                  <td class="text-center " id="TD730ROW1DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW1DATA3720">
                    08/19/2026 9:38 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW2DATA3719">
                    Alvarez, Jorge
                  </td>
                  <td class="text-center " id="TD730ROW2DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW2DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW2DATA29716">
                    1
                  </td>
                  <td class="text-center " id="TD730ROW2DATA3721">
                    Paolo
                  </td>
                  <td class="text-center " id="TD730ROW2DATA3720">
                    08/22/2026 10:05 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW3DATA3719">
                    Alvarez, Kristy
                  </td>
                  <td class="text-center " id="TD730ROW3DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW3DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW3DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW3DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW3DATA3720">
                    08/22/2026 10:05 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW4DATA3719">
                    Alvarez, Layla
                  </td>
                  <td class="text-center " id="TD730ROW4DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW4DATA53384">
                    Tiger (6)
                  </td>
                  <td class="text-center " id="TD730ROW4DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW4DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW4DATA3720">
                    08/22/2026 10:05 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW5DATA3719">
                    Alvarez, Mateo
                  </td>
                  <td class="text-center " id="TD730ROW5DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW5DATA53384">
                    Webelos (2)
                  </td>
                  <td class="text-center " id="TD730ROW5DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW5DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW5DATA3720">
                    08/22/2026 10:05 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW6DATA3719">
                    Bucklin, Emmett
                  </td>
                  <td class="text-center " id="TD730ROW6DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW6DATA53384">
                    Webelos (2)
                  </td>
                  <td class="text-center " id="TD730ROW6DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW6DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW6DATA3720">
                    08/11/2026 11:34 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW7DATA3719">
                    Bucklin, Mary
                  </td>
                  <td class="text-center " id="TD730ROW7DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW7DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW7DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW7DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW7DATA3720">
                    08/11/2026 11:34 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW8DATA3719">
                    Bucklin, Michael
                  </td>
                  <td class="text-center " id="TD730ROW8DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW8DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW8DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW8DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW8DATA3720">
                    08/11/2026 11:34 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW9DATA3719">
                    Chidester, Ella
                  </td>
                  <td class="text-center " id="TD730ROW9DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW9DATA53384">
                    Tiger (6)
                  </td>
                  <td class="text-center " id="TD730ROW9DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW9DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW9DATA3720">
                    08/23/2026 10:38 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW10DATA3719">
                    Chidester, Russ
                  </td>
                  <td class="text-center " id="TD730ROW10DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW10DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW10DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW10DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW10DATA3720">
                    08/23/2026 10:38 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW11DATA3719">
                    Chidester, Taylor
                  </td>
                  <td class="text-center " id="TD730ROW11DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW11DATA53384">
                    Wolf (9)
                  </td>
                  <td class="text-center " id="TD730ROW11DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW11DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW11DATA3720">
                    08/23/2026 10:38 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW12DATA3719">
                    Espejel, Moshe
                  </td>
                  <td class="text-center " id="TD730ROW12DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW12DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW12DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW12DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW12DATA3720">
                    08/23/2026 11:34 AM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW13DATA3719">
                    Goodine, David
                  </td>
                  <td class="text-center " id="TD730ROW13DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW13DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW13DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW13DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW13DATA3720">
                    08/24/2026 9:59 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW14DATA3719">
                    Goodine, Jack
                  </td>
                  <td class="text-center " id="TD730ROW14DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW14DATA53384">
                    AOL (8)
                  </td>
                  <td class="text-center " id="TD730ROW14DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW14DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW14DATA3720">
                    08/24/2026 9:59 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW15DATA3719">
                    Hallar, Henry
                  </td>
                  <td class="text-center " id="TD730ROW15DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW15DATA53384">
                    Bear (10)
                  </td>
                  <td class="text-center " id="TD730ROW15DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW15DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW15DATA3720">
                    08/21/2026 10:28 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW16DATA3719">
                    Hallar, Ingrid
                  </td>
                  <td class="text-center " id="TD730ROW16DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW16DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW16DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW16DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW16DATA3720">
                    08/21/2026 10:28 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW17DATA3719">
                    Hickman, Trey
                  </td>
                  <td class="text-center " id="TD730ROW17DATA43557">
                    Adult
                  </td>
                  <td class="text-center " id="TD730ROW17DATA53384">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW17DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW17DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW17DATA3720">
                    08/17/2026 2:59 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW18DATA3719">
                    Hickman, Maya
                  </td>
                  <td class="text-center " id="TD730ROW18DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW18DATA53384">
                    Tiger (6)
                  </td>
                  <td class="text-center " id="TD730ROW18DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW18DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW18DATA3720">
                    08/17/2026 2:59 PM
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD730ROW19DATA3719">
                    Keenan, Lilly
                  </td>
                  <td class="text-center " id="TD730ROW19DATA43557">
                    Scout
                  </td>
                  <td class="text-center " id="TD730ROW19DATA53384">
                    Webelos (2)
                  </td>
                  <td class="text-center " id="TD730ROW19DATA29716">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW19DATA3721">
                    &nbsp;
                  </td>
                  <td class="text-center " id="TD730ROW19DATA3720">
                    08/23/2026 12:19 PM
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <td colspan="8" class="text-center">
                    <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;ID=581&amp;Stack=2&amp;SectionID=730&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;ID=581&amp;Stack=2&amp;SectionID=730&amp;ReportFormat=XLS','_blank');">
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
<option value="20" selected="">20</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('730,2');">2</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('730,3');">3</a></li><li><a href="javascript:GoToSectionPageNumber('730,2');"><img src="pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        </tbody></table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs19260">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY5389169">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5389169" style="visibility: hidden">
              *
              </span>
              Total Members
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5389169" id="RVALENTRY5389169" value="N">
              <span class="text-left">
              41
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5389269">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5389269" style="visibility: hidden">
              *
              </span>
              Total Guests
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5389269" id="RVALENTRY5389269" value="N">
              <span class="text-left">
              12
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5389369">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5389369" style="visibility: hidden">
              *
              </span>
              Total Participants
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5389369" id="RVALENTRY5389369" value="N">
              <span class="text-left">
              53
              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY5402869">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5402869" style="visibility: hidden">
              *
              </span>
              Total Responding No
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5402869" id="RVALENTRY5402869" value="N">
              <span class="text-left">
              8
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5402969">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5402969" style="visibility: hidden">
              *
              </span>
              Total Undecided
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5402969" id="RVALENTRY5402969" value="N">
              <span class="text-left">
              128
              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs9817">
    <div class="container-fluid container-flex">
      <div class="center-block " style="max-width: 800px; min-width: 200px;">
        <h2>
        Transactions For This Event
        </h2>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs9818">
    <div class="container-fluid container-flex">
      <div class="center-block table-responsive">
        <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid9818">
          <thead>
          <tr>
            <input type="hidden" name="ROWCOUNTCB9818" id="ROWCOUNTCB9818" value="0">
            <th>
            Date
            </th>
            <th>
            Transaction Type
            </th>
            <th>
            Description
            </th>
            <th>
            Credit Person
            </th>
            <th>
            Debit Person
            </th>
            <th>
            Amount
            </th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td colspan="6" class="text-center">
              no data is currently available to display
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs21201">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY5753369">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5753369" style="visibility: hidden">
              *
              </span>
              Balance
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5753369" id="RVALENTRY5753369" value="Y">
              <span class="text-left">
              0.00
              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs9819">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON94" type="button" name="preselect" title="Add Group Transaction to Charge Participants" value="Add Group Transaction to Charge Participants" onclick="LinkTo('/events/event.php?;Form_ID=2101&amp;PreselectID=581&amp;FK=581&amp;Stack=3','');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON95" type="button" name="preselect" title="Add Group Transaction to Credit Participants" value="Add Group Transaction to Credit Participants" onclick="LinkTo('/events/event.php?;Form_ID=7073&amp;PreselectID=581&amp;FK=581&amp;Stack=3','');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs22661">
    <div class="container-fluid container-flex">
      <div class="center-block table-responsive">
        <h3>
        Responded NO
        </h3>
        <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid22661">
          <thead>
          <tr>
            <input type="hidden" name="ROWCOUNTCB22661" id="ROWCOUNTCB22661" value="8">
            <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">PARTICIPANT<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
            <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">TYPE<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
            <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">COMMENT<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="text-center " id="TD22661ROW0DATA59906">
              Chidester, Amy
            </td>
            <td class="text-center " id="TD22661ROW0DATA59907">
              Adult
            </td>
            <td class="text-center " id="TD22661ROW0DATA60055">
              &nbsp;
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD22661ROW1DATA59906">
              D'Vincent, Lilli
            </td>
            <td class="text-center " id="TD22661ROW1DATA59907">
              Adult
            </td>
            <td class="text-center " id="TD22661ROW1DATA60055">
              We’re sad to miss this but will be out of town!
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD22661ROW2DATA59906">
              D'Vincent, Mason
            </td>
            <td class="text-center " id="TD22661ROW2DATA59907">
              Scout
            </td>
            <td class="text-center " id="TD22661ROW2DATA60055">
              &nbsp;
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD22661ROW3DATA59906">
              Saldanha, Claire
            </td>
            <td class="text-center " id="TD22661ROW3DATA59907">
              Scout
            </td>
            <td class="text-center " id="TD22661ROW3DATA60055">
              &nbsp;
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD22661ROW4DATA59906">
              Saldanha, Eva
            </td>
            <td class="text-center " id="TD22661ROW4DATA59907">
              Scout
            </td>
            <td class="text-center " id="TD22661ROW4DATA60055">
              &nbsp;
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD22661ROW5DATA59906">
              Saldanha, Mithila
            </td>
            <td class="text-center " id="TD22661ROW5DATA59907">
              Adult
            </td>
            <td class="text-center " id="TD22661ROW5DATA60055">
              &nbsp;
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD22661ROW6DATA59906">
              Swantner, Albert
            </td>
            <td class="text-center " id="TD22661ROW6DATA59907">
              Adult
            </td>
            <td class="text-center " id="TD22661ROW6DATA60055">
              &nbsp;
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD22661ROW7DATA59906">
              Swantner, Everett
            </td>
            <td class="text-center " id="TD22661ROW7DATA59907">
              Scout
            </td>
            <td class="text-center " id="TD22661ROW7DATA60055">
              &nbsp;
            </td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
            <td colspan="3" class="text-center">
              <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;ID=581&amp;Stack=2&amp;SectionID=22661&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;ID=581&amp;Stack=2&amp;SectionID=22661&amp;ReportFormat=XLS','_blank');">
            </td>
          </tr>
          </tfoot>
        </table>
      </div>
      <div class="center-block table-responsive">
        <h3>
        Undecided
        </h3>
        <table>
          <tbody><tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage" onchange="SetRowsPerPage(this);">
<option value="20" selected="">20</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,2');">2</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,3');">3</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,4');">4</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,5');">5</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,6');">6</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,7');">7</a></li><li><a href="javascript:GoToSectionPageNumber('22662,2');"><img src="pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
          <tr>
            <td>
              <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid22662">
                <thead>
                <tr>
                  <input type="hidden" name="ROWCOUNTCB22662" id="ROWCOUNTCB22662" value="20">
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">
                  Participant
                  <span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">
                  Type
                  <span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">
                  Comment
                  <span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="text-center " id="TD22662ROW0DATA59908">
                    Aarons, Andrew
                  </td>
                  <td class="text-center " id="TD22662ROW0DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW0DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW1DATA59908">
                    Aarons, Ashley
                  </td>
                  <td class="text-center " id="TD22662ROW1DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW1DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW2DATA59908">
                    Aarons, Stephen
                  </td>
                  <td class="text-center " id="TD22662ROW2DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW2DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW3DATA59908">
                    Abbott, Albert
                  </td>
                  <td class="text-center " id="TD22662ROW3DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW3DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW4DATA59908">
                    Abbott, William
                  </td>
                  <td class="text-center " id="TD22662ROW4DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW4DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW5DATA59908">
                    Applegate, Chris
                  </td>
                  <td class="text-center " id="TD22662ROW5DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW5DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW6DATA59908">
                    Applegate, Sebastian
                  </td>
                  <td class="text-center " id="TD22662ROW6DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW6DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW7DATA59908">
                    Babb, Chris
                  </td>
                  <td class="text-center " id="TD22662ROW7DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW7DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW8DATA59908">
                    Babb, Tyson
                  </td>
                  <td class="text-center " id="TD22662ROW8DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW8DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW9DATA59908">
                    Bayes, Dylan
                  </td>
                  <td class="text-center " id="TD22662ROW9DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW9DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW10DATA59908">
                    Bayes, Phillip
                  </td>
                  <td class="text-center " id="TD22662ROW10DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW10DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW11DATA59908">
                    Benson, Lawrence
                  </td>
                  <td class="text-center " id="TD22662ROW11DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW11DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW12DATA59908">
                    Benson, Nicolas
                  </td>
                  <td class="text-center " id="TD22662ROW12DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW12DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW13DATA59908">
                    Blair, Frankie
                  </td>
                  <td class="text-center " id="TD22662ROW13DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW13DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW14DATA59908">
                    Blair, Joe
                  </td>
                  <td class="text-center " id="TD22662ROW14DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW14DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW15DATA59908">
                    Bruyn, Emerson
                  </td>
                  <td class="text-center " id="TD22662ROW15DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW15DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW16DATA59908">
                    Bruyn, Meaghan
                  </td>
                  <td class="text-center " id="TD22662ROW16DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW16DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW17DATA59908">
                    Bucklin, Michael2
                  </td>
                  <td class="text-center " id="TD22662ROW17DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW17DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW18DATA59908">
                    Bucklin, Michael3
                  </td>
                  <td class="text-center " id="TD22662ROW18DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW18DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW19DATA59908">
                    Bush, Greg
                  </td>
                  <td class="text-center " id="TD22662ROW19DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW19DATA60056">
                    &nbsp;
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <td colspan="3" class="text-center">
                    <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;ID=581&amp;Stack=2&amp;SectionID=22662&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;ID=581&amp;Stack=2&amp;SectionID=22662&amp;ReportFormat=XLS','_blank');">
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
<option value="20" selected="">20</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,2');">2</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,3');">3</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,4');">4</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,5');">5</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,6');">6</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,7');">7</a></li><li><a href="javascript:GoToSectionPageNumber('22662,2');"><img src="pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        </tbody></table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs19345">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY5404469">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5404469" style="visibility: hidden">
              *
              </span>
              URL For This Event
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5404469" id="RVALENTRY5404469" value="">
              <span class="display-only-data">
              https://www.TroopWebHostCS.org//events/event.php?;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=581
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
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON0" type="button" name="save continue" title="Print Participant List" value="Print Participant List" onclick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&amp;Form_ID=326&amp;FK=581&amp;ID=581&amp;Stack=2','FormReportMultiSectionaspxWindow');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON1" type="button" name="save continue" title="Black Pug CSV" value="Black Pug CSV" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON3" type="button" name="preselect" title="E-Mail Participants" value="E-Mail Participants" onclick="LinkTo('/events/event.php?;Form_ID=397&amp;PreselectID=581&amp;FK=581&amp;Stack=3','');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON4" type="button" name="preselect" title="Invite Undecideds" value="Invite Undecideds" onclick="LinkTo('/events/event.php?;Form_ID=1208&amp;PreselectID=581&amp;FK=581&amp;Stack=3','');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON5" type="button" name="update" title="Update This Event" value="Update This Event" onclick="LinkTo('/events/event.php?;Form_ID=167&amp;ID=581&amp;Stack=3','');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON6" type="button" name="delete" title="Delete This Event" value="Delete This Event" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON7" type="button" name="cancel" title="Exit" value="Exit" onclick="buttonlink(this,'N');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON0">
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
    if (tempname.match(/^CB5742ROW[0-9]+DATA29714/)) {TestRegExp(tempobj,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.'); }
        }
        catch(err)
        {
        }
      }
    }
  </script>
  <div style="height: 100px;">&nbsp;</div>


</body></html>