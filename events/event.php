<!DOCTYPE HTML>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="content-language" content="en-us">
<title>Pack 12 Austin</title>
<link rel="shortcut icon" href="favicon.ico" />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
<script src="ckeditor/ckeditor.js?v=2"></script>
  <SCRIPT LANGUAGE="JavaScript">
    var cal = new CalendarPopup();
  </SCRIPT>
  <SCRIPT LANGUAGE="JavaScript1.1">
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
  <body onunload="CloseErrorBox()"  onload="easyFieldExit(this); ValidateGrid();easySetFocus();GetDeviceWidth();" >
  <form  enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/FormDetail.aspx" target="_self" method="post" name="easyform" id="easyform">
  <script language="JavaScript" type="text/javascript">
    <!--
    function submitForm() {
    	//change the following line to true to submit form
    	return true;
    }
    //-->
  </script>
  <input type=hidden name="menuopenflag" id="menuopenflag" value="N">
  <input type=hidden name="Selected_Action" id="Selected_Action" value="">
  <input type=hidden name="Hover_Action" id="Hover_Action" value="">
  <input type=hidden name="Selected_Button_ID" id="Selected_Button_ID" value="">
  <input type=hidden name="Menu_Item_ID" id="Menu_Item_ID" value="318">
  <input type=hidden name="Form_ID" id="Form_ID" value="259">
  <input type=hidden name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
  <input type=hidden name="Pass" id="Pass" value="1">
  <input type=hidden name="Stack" id="Stack" value="2">
  <input type=hidden name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
  <input type=hidden name="NewRowsPerPage" id="NewRowsPerPage" value="">
  <input type=hidden name="ChildRowID" id="ChildRowID" value="0">
  <input type=hidden name="Report_Format" id="Report_Format" value="">
  <input type=hidden name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&Form_ID=259&Stack=2&ID=549">
  <a href="javascript:togglemenu();">
  <div class="navicon" style="width:64px;">
    <table>
      <tr>
        <td>
          <span class="fa fa-bars" id="main-menu-icon" name="main-menu-icon"></span><span style="font-size:13px;font-family:arial,helvetica,sans-serif;vertical-align:middle;">&nbsp; menu</span>
        </td>
      </tr>
    </table>
  </div>
  </a>
  <table class="navtable">
    <tr class="navrow">
      <td style="width:76px;">
      </td>
      <td style="padding:4px;">
        <a href="#" class="navlink nav-home-link" onClick="LinkTo('/home/home.php','_top')">Pack 12 Austin</a>
      </td>
      <td class="quickmenu1">
        <table>
          <tr>
            <td class="navlink">
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&Stack=2','');">Calendar</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&Stack=2','');">Users & Passwords</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&Stack=0','');">TroopWebHost Administrative Contacts</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5787&Stack=0','');">Events Hub</a>
            </td>
          </tr>
        </table>
      </td>
      <td class="pull-right">
        <table>
          <tr>
            <td class="navlink"><a href="javascript:logoff();"><span class="glyphicon glyphicon-user"></span> Log Off</a>
            </td>
            <td class="navlink"><a href="javascript:togglehelp();" style="font-size:1.5em;" id="help-menu-icon" name="help-menu-icon">?</a>
            </td>
            <td class="navlink"><a href="javascript:toggletools();"><span class="glyphicon glyphicon-cog" id="tools-menu-icon" name="tools-menu-icon"></span></a>
            </td>
          </tr>
        </table>
      </td>
      <td style="width:12px;">
      </td>
    </tr>
    <tr class="navrow quickmenu2">
      <td colspan=5 align=center>
        <table>
          <tr>
            <td class="navlink">
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&Stack=2','');">Calendar</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&Stack=2','');">Users & Passwords</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&Stack=0','');">TroopWebHost Administrative Contacts</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5787&Stack=0','');">Events Hub</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <?php require dirname(__DIR__) . '/includes/menu.php'; ?>
  <div class="modal fade" id="ModalPageFormat" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a style="float:right;margin-right:30px;" href="help.aspx?ID=235" target="_blank">
          <span class="glyphicon glyphicon-question-sign help-icon"></span>
          </a>
          Format this site for...
          <br><br>
          <div class="form-group">
            <input type=radio  name="Page_Layout" id="Page_Layout_1" value="1" tabindex=1 value="on"  checked> &nbsp;
            Laptop / Desktop Computer
          </div>
          <div class="form-group">
            <input type=radio  name="Page_Layout" id="Page_Layout_2" value="2" tabindex=2 value="on" > &nbsp;
            Smart Phone / Mobile Device
          </div>
        </div>
        <div class="modal-footer">
          <input class="btn btn-success" style="float: left;" tabindex=3 type=button value="OK" name="Page_Layout_Button" id="Page_Layout_Button" onClick="LinkTo('format','');" >
          <button type="button" class="btn btn-danger" style="float: right;" tabindex=4 data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <div id="toolsmenu" class="navtools">
    <ul class="list-group">
    <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalPageFormat">Format</a></li>
    <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalReportingOptions">Reporting Options</a></li>
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&Stack=0&Menu_Item_ID=318">Change My Password</a></li>
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&Stack=0&Menu_Item_ID=318">Configure My Quick Menu</a></li>
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&Stack=0&Menu_Item_ID=318">Bookmark This Site</a></li>
    </ul>
  </div>
  <div id="helpmenu" class="navtools">
    <ul class="list-group">
    <li class="list-group-item"><a href="Help.aspx?ID=87" target="_blank">User Guide</a></li>
    <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
    <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&Stack=0&Menu_Item_ID=318">TroopWebHost User Forum</a></li>
    <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&Stack=0&Menu_Item_ID=318">Enhancement Requests</a></li>
    <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&Stack=0&Menu_Item_ID=318">My Support Tickets</a></li>
    <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&Stack=0&Menu_Item_ID=318">My Unit's Support Tickets</a></li>
    <li class="list-group-item"><a href="https://www.TroopWebHost.com/newsletter.htm" target="_blank">TroopWebHost Newsletter</a></li>
    <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalAboutSite">About This Site</a></li>
    </ul>
  </div>
  <div class="modal fade" id="ModalAboutSite" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="https://www.TroopWebHost.com/images/Compass50.png" height="50" width="50" style="float: left; margin-top: 10px; margin-bottom: 20px; margin-left: 0px; margin-right: 15px;">
          This site is provided by <a href="http://www.TroopWebHostCS.com" target="_blank">TroopWebHostCS</a>
          <br><br>
          Copyright&nbsp; 2026 &nbsp;Web Host Services LLC
          <br><br>
          The current user is:&nbsp; &nbsp; mbucklin2
          <br><br>
          The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&Form_ID=259&Stack=2&ID=549&Application_ID=2840
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ModalReportingOptions" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="form-group">
            <input type=radio  name="Report_option" id="Report_option_1" value="1" tabindex=1 value="on" > &nbsp;
            Open reports as PDF only
          </div>
          <div class="form-group">
            <input type=radio  name="Report_option" id="Report_option_2" value="2" tabindex=2 value="on"  checked> &nbsp;
            Choose to open reports either as PDF or Excel
          </div>
        </div>
        <div class="modal-footer">
          <input class="btn btn-success" style="float: left;" tabindex=3 type=button value="OK" name="Report_option_Button" id="Report_option_Button" onClick="LinkTo('reportoption','');" >
          <button type="button" class="btn btn-danger" style="float: right;" tabindex=4 data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ModalReport" role="dialog">
    <div class="modal-dialog modal-sm">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="text-center" id="ModalReportPop" name="ModalReportPop">
          </div>
        </div>
      </div>
    </div>
  </div>
  <p class="page-title">
  Calendar
  </p>
  <input type=hidden name="FK" id="FK" value="0">
  <input type=hidden name="ID" id="ID" value="549">
  <div class="new-row" id="fs737">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input  class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=110 id="BUTTON0"  type="button" name="save continue" title="Print Participant List" value="Print Participant List" onClick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&Form_ID=326&FK=549&ID=549&Stack=2','FormReportMultiSectionaspxWindow');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=120 id="BUTTON1"  type="button" name="save continue" title="Black Pug CSV" value="Black Pug CSV" onClick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=130 id="BUTTON3"  type="button" name="preselect" title="E-Mail Participants" value="E-Mail Participants" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=397&PreselectID=549&FK=549&Stack=3','');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=140 id="BUTTON4"  type="button" name="preselect" title="Invite Undecideds" value="Invite Undecideds" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=1208&PreselectID=549&FK=549&Stack=3','');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=150 id="BUTTON5"  type="button" name="update" title="Update This Event" value="Update This Event" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=167&ID=549&Stack=3','');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=160 id="BUTTON6"  type="button" name="delete" title="Delete This Event" value="Delete This Event" onClick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=170 id="BUTTON7"  type="button" name="cancel" title="Exit" value="Exit" onclick="LinkTo('/home/home.php','_top');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs726">
    <div class="container-fluid container-flex">
      <div class="center-block " >
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
              Campout
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
              Fall Campout
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
              <a href="#" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=180&ID=93&Stack=3','');">
              Lake Somerville State Park
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
          </tbody>
        </table>
      </div>
      <div class="center-block " >
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
              11/13/26 6:00 PM
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
              11/15/26 9:00 AM
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
          <tr id="DIVENTRY6110936">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY6110936" style="visibility: hidden">
              *
              </span>
              Automatically Charge Scouts
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY6110936" id="RVALENTRY6110936" value="">
              <span class="text-left">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY6111036">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY6111036" style="visibility: hidden">
              *
              </span>
              Automatically Charge Adults
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY6111036" id="RVALENTRY6111036" value="">
              <span class="text-left">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY6111136">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY6111136" style="visibility: hidden">
              *
              </span>
              Automatically Charge For Each Guest
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY6111136" id="RVALENTRY6111136" value="">
              <span class="text-left">

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
              <p data-pm-slice="1 1 []">Pack 12 is heading to <strong>Lake Somerville State Park</strong> for our Fall Campout! Located about <strong>100 miles east of Austin</strong>, Lake Somerville is an easy weekend getaway for camping, outdoor adventures, games, Scouting activities, and time together around the campfire.</p>

<p>The Fall Campout is one of our first big Pack adventures of the Scouting year and a great opportunity for Scouts and families to get to know their dens and the rest of Pack 12. Throughout Saturday, Scouts can look forward to <strong>den activities and outdoor activity rotations</strong>, along with time to explore the park and enjoy being outside.</p>

<p>Saturday evening, we'll gather as a Pack for one of our favorite camping traditions: the <strong>Pack 12 campfire program</strong>, with songs, skits, cheers, and plenty of Scouting fun.</p>

<p>Families camp together in our <strong>reserved Pack 12 campsites</strong>, with dens generally camping near one another. Come for the full weekend or join us for the main program on Saturday. New to camping? No problem! Pack campouts are a great way to get started, and our experienced Pack 12 families and leaders are happy to help.</p>

<p><strong>More details, including the weekend schedule, campsite assignments, den activities, meal planning, and what to bring, will be shared as we get closer to the campout.</strong></p>

<p> </p>

<p><img alt="Lake Somerville State Park: Birch Creek Unit - The Portal to Texas History" jsaction="" jsname="kn3ccd" src="https://texashistory.unt.edu/ark:/67531/metapth624451/m1/1/high_res/" /></p>
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
          <input  class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=310 id="BUTTON29"  type="button" name="save continue" title="Send Me An Invitation" value="Send Me An Invitation" onClick="buttonlink(this,'N');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs5743">
    <div class="container-fluid container-flex">
      <div class="center-block "  style="max-width: 800px; min-width: 200px;" >
        <h2>
        Sign Up For This Event
        </h2>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs6631">
    <div class="container-fluid container-flex">
      <div class="center-block " >
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
      <div class="center-block table-responsive" >
        <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid5742">
          <thead>
          <tr>
            <input type=hidden name="ROWCOUNTCB5742" id="ROWCOUNTCB5742" value="1">
            <th>
            Participant
            </th>
            <th>
            Participation
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
            <input type=hidden name="CHILDCB5742ROW0" id="CHILDCB5742ROW0" value="243513">
            <td class="text-center " id="TD5742ROW0DATA21830">
              Bucklin, Michael2
            </td>
            <td class="text-center " id="TD5742ROW0DATA22464">
              <input type=hidden name="OLDCB5742ROW0DATA22464" id="OLDCB5742ROW0DATA22464" value="?">
              <span class="text-left" id="SPAN5742ROW0DATA22464" name="SPAN5742ROW0DATA22464">
              <span style="white-space: nowrap;"><input type=radio id="CB5742ROW0DATA22464" name="CB5742ROW0DATA22464" tabindex=320 onclick="easyFieldExit(this)"  value="Y">Yes</span> &nbsp; <span style="white-space: nowrap;"><input type=radio id="CB5742ROW0DATA22464" name="CB5742ROW0DATA22464" tabindex=320 onclick="easyFieldExit(this)"  value="N">No</span> &nbsp; <span style="white-space: nowrap;"><input type=radio id="CB5742ROW0DATA22464" name="CB5742ROW0DATA22464" tabindex=320 onclick="easyFieldExit(this)"  checked  value="?">Unknown</span>
              </span>
            </td>
            <td class="text-center " id="TD5742ROW0DATA29714">
              <input type=hidden name="OLDCB5742ROW0DATA29714" id="OLDCB5742ROW0DATA29714" value="">
              <input type="text" class="form-control" id="CB5742ROW0DATA29714" name="CB5742ROW0DATA29714" tabindex=320 size=7 OnBlur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')"  maxlength=7 value="" title="The number of guests this person will bring (does not include the person who signed up)">
            </td>
            <td class="text-center " id="TD5742ROW0DATA21832">
              <input type=hidden name="OLDCB5742ROW0DATA21832" id="OLDCB5742ROW0DATA21832" value="">
              <input type="text" class="form-control" id="CB5742ROW0DATA21832" name="CB5742ROW0DATA21832" tabindex=320 size=50 OnBlur="TestRegExp(this,'','')"  maxlength=100 value="" title="This is a comment about this person's participation in this event.">
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
          <input  class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=330 id="BUTTON39"  type="button" name="save" title="Save the information that you entered on this page" value="Save" onClick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=340 id="BUTTON40"  type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save & Exit" onclick="LinkTo('/home/home.php','_top');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=350 id="BUTTON41"  type="button" name="cancel" title="Exit without saving this information" value="Cancel" onClick="buttonlink(this,'N');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs23242">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=360 id="BUTTON42"  type="button" name="add" title="Make A Payment" value="Make A Payment" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=6244&FK=549&ID=0&Stack=3','');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs731">
    <div class="container-fluid container-flex">
      <div class="center-block "  style="max-width: 800px; min-width: 200px;" >
        <h2>
        <br>Planning To Attend
        </h2>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs730">
    <div class="container-fluid container-flex">
      <div class="center-block table-responsive" >
        <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid730">
          <thead>
          <tr>
            <input type=hidden name="ROWCOUNTCB730" id="ROWCOUNTCB730" value="3">
            <th>
            Participant
            </th>
            <th>
            Type
            </th>
            <th>
            Level
            </th>
            <th>
            Additional Guests
            </th>
            <th>
            Comment
            </th>
            <th>
            Signed Up
            </th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="text-center " id="TD730ROW0DATA3719">
              Bucklin, Emmett
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
              06/13/2026 10:27 AM
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD730ROW1DATA3719">
              Bucklin, Mary
            </td>
            <td class="text-center " id="TD730ROW1DATA43557">
              Adult
            </td>
            <td class="text-center " id="TD730ROW1DATA53384">
              &nbsp;
            </td>
            <td class="text-center " id="TD730ROW1DATA29716">
              &nbsp;
            </td>
            <td class="text-center " id="TD730ROW1DATA3721">
              &nbsp;
            </td>
            <td class="text-center " id="TD730ROW1DATA3720">
              06/13/2026 10:27 AM
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD730ROW2DATA3719">
              Bucklin, Michael
            </td>
            <td class="text-center " id="TD730ROW2DATA43557">
              Adult
            </td>
            <td class="text-center " id="TD730ROW2DATA53384">
              &nbsp;
            </td>
            <td class="text-center " id="TD730ROW2DATA29716">
              &nbsp;
            </td>
            <td class="text-center " id="TD730ROW2DATA3721">
              &nbsp;
            </td>
            <td class="text-center " id="TD730ROW2DATA3720">
              06/13/2026 10:27 AM
            </td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
            <td colspan=8 class="text-center">
              <input type=button value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&Form_ID=259&ID=549&Stack=2&SectionID=730&ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type=button value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&Form_ID=259&ID=549&Stack=2&SectionID=730&ReportFormat=XLS','_blank');">
            </td>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs19260">
    <div class="container-fluid container-flex">
      <div class="center-block " >
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
              3
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
              0
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
              3
              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="center-block " >
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
              0
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
              180
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
      <div class="center-block "  style="max-width: 800px; min-width: 200px;" >
        <h2>
        Transactions For This Event
        </h2>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs9818">
    <div class="container-fluid container-flex">
      <div class="center-block table-responsive" >
        <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid9818">
          <thead>
          <tr>
            <input type=hidden name="ROWCOUNTCB9818" id="ROWCOUNTCB9818" value="0">
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
            <td colspan=6 class="text-center">
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
      <div class="center-block " >
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
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=430 id="BUTTON94"  type="button" name="preselect" title="Add Group Transaction to Charge Participants" value="Add Group Transaction to Charge Participants" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=2101&PreselectID=549&FK=549&Stack=3','');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=440 id="BUTTON95"  type="button" name="preselect" title="Add Group Transaction to Credit Participants" value="Add Group Transaction to Credit Participants" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=7073&PreselectID=549&FK=549&Stack=3','');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs22661">
    <div class="container-fluid container-flex">
      <div class="center-block table-responsive" >
        <h3>
        Responded NO
        </h3>
        <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid22661">
          <thead>
          <tr>
            <input type=hidden name="ROWCOUNTCB22661" id="ROWCOUNTCB22661" value="0">
            <th>
            Participant
            </th>
            <th>
            Type
            </th>
            <th>
            Comment
            </th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td colspan=3 class="text-center">
              no data is currently available to display
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="center-block table-responsive" >
        <h3>
        Undecided
        </h3>
        <table>
          <tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage"  onchange="SetRowsPerPage(this);">
<option value="20" >20</option>
<option value = "50" >50</option>
<option value = "100"  selected >100</option>
<option value = "200" >200</option>
<option value = "400" >400</option>
<option value = "ALL" >ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('22662,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
          <tr>
            <td>
              <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid22662">
                <thead>
                <tr>
                  <input type=hidden name="ROWCOUNTCB22662" id="ROWCOUNTCB22662" value="100">
                  <th>
                  Participant
                  </th>
                  <th>
                  Type
                  </th>
                  <th>
                  Comment
                  </th>
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
                    Almaraz, Alexander
                  </td>
                  <td class="text-center " id="TD22662ROW5DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW5DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW6DATA59908">
                    Almaraz, Eric
                  </td>
                  <td class="text-center " id="TD22662ROW6DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW6DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW7DATA59908">
                    Alvarez, Jorge
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
                    Alvarez, Kristy
                  </td>
                  <td class="text-center " id="TD22662ROW8DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW8DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW9DATA59908">
                    Alvarez, Layla
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
                    Alvarez, Mateo
                  </td>
                  <td class="text-center " id="TD22662ROW10DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW10DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW11DATA59908">
                    Applegate, Chris
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
                    Applegate, Sebastian
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
                    Babb, Chris
                  </td>
                  <td class="text-center " id="TD22662ROW13DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW13DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW14DATA59908">
                    Babb, Tyson
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
                    Bayes, Dylan
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
                    Bayes, Phillip
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
                    Benson, Lawrence
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
                    Benson, Nicolas
                  </td>
                  <td class="text-center " id="TD22662ROW18DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW18DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW19DATA59908">
                    Blair, Frankie
                  </td>
                  <td class="text-center " id="TD22662ROW19DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW19DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW20DATA59908">
                    Blair, Joe
                  </td>
                  <td class="text-center " id="TD22662ROW20DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW20DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW21DATA59908">
                    Bruyn, Emerson
                  </td>
                  <td class="text-center " id="TD22662ROW21DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW21DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW22DATA59908">
                    Bruyn, Meaghan
                  </td>
                  <td class="text-center " id="TD22662ROW22DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW22DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW23DATA59908">
                    Bucklin, Michael2
                  </td>
                  <td class="text-center " id="TD22662ROW23DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW23DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW24DATA59908">
                    Bucklin, Michael3
                  </td>
                  <td class="text-center " id="TD22662ROW24DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW24DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW25DATA59908">
                    Bush, Greg
                  </td>
                  <td class="text-center " id="TD22662ROW25DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW25DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW26DATA59908">
                    Bush, Kai
                  </td>
                  <td class="text-center " id="TD22662ROW26DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW26DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW27DATA59908">
                    Byrd, Amanda
                  </td>
                  <td class="text-center " id="TD22662ROW27DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW27DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW28DATA59908">
                    Byrd, Barrett
                  </td>
                  <td class="text-center " id="TD22662ROW28DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW28DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW29DATA59908">
                    Byrd, Benjamin
                  </td>
                  <td class="text-center " id="TD22662ROW29DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW29DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW30DATA59908">
                    Byrd, Ryan
                  </td>
                  <td class="text-center " id="TD22662ROW30DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW30DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW31DATA59908">
                    Chakarvarty, Mridul
                  </td>
                  <td class="text-center " id="TD22662ROW31DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW31DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW32DATA59908">
                    Chidester, Amy
                  </td>
                  <td class="text-center " id="TD22662ROW32DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW32DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW33DATA59908">
                    Chidester, Ella
                  </td>
                  <td class="text-center " id="TD22662ROW33DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW33DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW34DATA59908">
                    Chidester, Russ
                  </td>
                  <td class="text-center " id="TD22662ROW34DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW34DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW35DATA59908">
                    Chidester, Taylor
                  </td>
                  <td class="text-center " id="TD22662ROW35DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW35DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW36DATA59908">
                    Corkill, Cynthia
                  </td>
                  <td class="text-center " id="TD22662ROW36DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW36DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW37DATA59908">
                    Daru, Bhargav
                  </td>
                  <td class="text-center " id="TD22662ROW37DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW37DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW38DATA59908">
                    de los Santos Garza, Andrea
                  </td>
                  <td class="text-center " id="TD22662ROW38DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW38DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW39DATA59908">
                    de los Santos Garza, Leo  Jr.
                  </td>
                  <td class="text-center " id="TD22662ROW39DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW39DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW40DATA59908">
                    De Los Santos Tamez, Diego
                  </td>
                  <td class="text-center " id="TD22662ROW40DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW40DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW41DATA59908">
                    DeMartini, Emilia
                  </td>
                  <td class="text-center " id="TD22662ROW41DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW41DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW42DATA59908">
                    DeMartini, Trevor
                  </td>
                  <td class="text-center " id="TD22662ROW42DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW42DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW43DATA59908">
                    DeMartini, Vincent
                  </td>
                  <td class="text-center " id="TD22662ROW43DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW43DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW44DATA59908">
                    Dennis, Khoi
                  </td>
                  <td class="text-center " id="TD22662ROW44DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW44DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW45DATA59908">
                    Dennis, Michael
                  </td>
                  <td class="text-center " id="TD22662ROW45DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW45DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW46DATA59908">
                    Desouky, Noura
                  </td>
                  <td class="text-center " id="TD22662ROW46DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW46DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW47DATA59908">
                    Diaz, Adam
                  </td>
                  <td class="text-center " id="TD22662ROW47DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW47DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW48DATA59908">
                    Diaz, Winslow
                  </td>
                  <td class="text-center " id="TD22662ROW48DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW48DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW49DATA59908">
                    Dranguet, Benjamin
                  </td>
                  <td class="text-center " id="TD22662ROW49DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW49DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW50DATA59908">
                    Duryee, David
                  </td>
                  <td class="text-center " id="TD22662ROW50DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW50DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW51DATA59908">
                    D'Vincent, Lilli
                  </td>
                  <td class="text-center " id="TD22662ROW51DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW51DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW52DATA59908">
                    D'Vincent, Mason
                  </td>
                  <td class="text-center " id="TD22662ROW52DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW52DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW53DATA59908">
                    Elrakabawy, Erin
                  </td>
                  <td class="text-center " id="TD22662ROW53DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW53DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW54DATA59908">
                    Espejel, Dean
                  </td>
                  <td class="text-center " id="TD22662ROW54DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW54DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW55DATA59908">
                    Espejel, Moshe
                  </td>
                  <td class="text-center " id="TD22662ROW55DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW55DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW56DATA59908">
                    Files, Michael
                  </td>
                  <td class="text-center " id="TD22662ROW56DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW56DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW57DATA59908">
                    Files, Michael
                  </td>
                  <td class="text-center " id="TD22662ROW57DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW57DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW58DATA59908">
                    Files, Mikaela
                  </td>
                  <td class="text-center " id="TD22662ROW58DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW58DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW59DATA59908">
                    Files, Sofia
                  </td>
                  <td class="text-center " id="TD22662ROW59DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW59DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW60DATA59908">
                    Gaete, Holly
                  </td>
                  <td class="text-center " id="TD22662ROW60DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW60DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW61DATA59908">
                    Gaete, Lincoln
                  </td>
                  <td class="text-center " id="TD22662ROW61DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW61DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW62DATA59908">
                    Galdo, Anne
                  </td>
                  <td class="text-center " id="TD22662ROW62DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW62DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW63DATA59908">
                    Galdo, Henry
                  </td>
                  <td class="text-center " id="TD22662ROW63DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW63DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW64DATA59908">
                    Gibson, Charleston
                  </td>
                  <td class="text-center " id="TD22662ROW64DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW64DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW65DATA59908">
                    Gibson, Steven
                  </td>
                  <td class="text-center " id="TD22662ROW65DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW65DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW66DATA59908">
                    Goodine, David
                  </td>
                  <td class="text-center " id="TD22662ROW66DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW66DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW67DATA59908">
                    Goodine, Jack
                  </td>
                  <td class="text-center " id="TD22662ROW67DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW67DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW68DATA59908">
                    Gurrola, Benjamin
                  </td>
                  <td class="text-center " id="TD22662ROW68DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW68DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW69DATA59908">
                    Gurrola, Jacqueline
                  </td>
                  <td class="text-center " id="TD22662ROW69DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW69DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW70DATA59908">
                    Gurrola, Matthew
                  </td>
                  <td class="text-center " id="TD22662ROW70DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW70DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW71DATA59908">
                    Hallar, Henry
                  </td>
                  <td class="text-center " id="TD22662ROW71DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW71DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW72DATA59908">
                    Hallar, Ingrid
                  </td>
                  <td class="text-center " id="TD22662ROW72DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW72DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW73DATA59908">
                    Hanss Blair, Rachel
                  </td>
                  <td class="text-center " id="TD22662ROW73DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW73DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW74DATA59908">
                    Harrison, Abi
                  </td>
                  <td class="text-center " id="TD22662ROW74DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW74DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW75DATA59908">
                    Harrison, James
                  </td>
                  <td class="text-center " id="TD22662ROW75DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW75DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW76DATA59908">
                    Hayes, David
                  </td>
                  <td class="text-center " id="TD22662ROW76DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW76DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW77DATA59908">
                    Hickman, Trey
                  </td>
                  <td class="text-center " id="TD22662ROW77DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW77DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW78DATA59908">
                    Hickman, Maya
                  </td>
                  <td class="text-center " id="TD22662ROW78DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW78DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW79DATA59908">
                    Hoy, Ashton
                  </td>
                  <td class="text-center " id="TD22662ROW79DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW79DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW80DATA59908">
                    Hoy, Nicole
                  </td>
                  <td class="text-center " id="TD22662ROW80DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW80DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW81DATA59908">
                    Hume, Beatrix
                  </td>
                  <td class="text-center " id="TD22662ROW81DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW81DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW82DATA59908">
                    Hume, John
                  </td>
                  <td class="text-center " id="TD22662ROW82DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW82DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW83DATA59908">
                    Idell, Claire
                  </td>
                  <td class="text-center " id="TD22662ROW83DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW83DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW84DATA59908">
                    Idell, Gabe
                  </td>
                  <td class="text-center " id="TD22662ROW84DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW84DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW85DATA59908">
                    Ingram, Alistair
                  </td>
                  <td class="text-center " id="TD22662ROW85DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW85DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW86DATA59908">
                    Ingrams, Julie and Robert
                  </td>
                  <td class="text-center " id="TD22662ROW86DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW86DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW87DATA59908">
                    Kathuria, Kabir
                  </td>
                  <td class="text-center " id="TD22662ROW87DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW87DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW88DATA59908">
                    Keenan, Danielle
                  </td>
                  <td class="text-center " id="TD22662ROW88DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW88DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW89DATA59908">
                    Keenan, Lilly
                  </td>
                  <td class="text-center " id="TD22662ROW89DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW89DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW90DATA59908">
                    Keenan, Peter
                  </td>
                  <td class="text-center " id="TD22662ROW90DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW90DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW91DATA59908">
                    kommineni, anish
                  </td>
                  <td class="text-center " id="TD22662ROW91DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW91DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW92DATA59908">
                    kommineni, Avighna
                  </td>
                  <td class="text-center " id="TD22662ROW92DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW92DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW93DATA59908">
                    Kommineni, Vijaya Bhaskar
                  </td>
                  <td class="text-center " id="TD22662ROW93DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW93DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW94DATA59908">
                    Koran, Katie and Kenny
                  </td>
                  <td class="text-center " id="TD22662ROW94DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW94DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW95DATA59908">
                    Koran, Teddy
                  </td>
                  <td class="text-center " id="TD22662ROW95DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW95DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW96DATA59908">
                    Lorenzini, Mitch
                  </td>
                  <td class="text-center " id="TD22662ROW96DATA59909">
                    Adult
                  </td>
                  <td class="text-center " id="TD22662ROW96DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW97DATA59908">
                    Lorenzini, Paige
                  </td>
                  <td class="text-center " id="TD22662ROW97DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW97DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW98DATA59908">
                    Lorenzini, Pepper
                  </td>
                  <td class="text-center " id="TD22662ROW98DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW98DATA60056">
                    &nbsp;
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD22662ROW99DATA59908">
                    Lynch, Dixon
                  </td>
                  <td class="text-center " id="TD22662ROW99DATA59909">
                    Scout
                  </td>
                  <td class="text-center " id="TD22662ROW99DATA60056">
                    &nbsp;
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <td colspan=3 class="text-center">
                    <input type=button value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&Form_ID=259&ID=549&Stack=2&SectionID=22662&ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type=button value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=318&Form_ID=259&ID=549&Stack=2&SectionID=22662&ReportFormat=XLS','_blank');">
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
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage"  onchange="SetRowsPerPage(this);">
<option value="20" >20</option>
<option value = "50" >50</option>
<option value = "100"  selected >100</option>
<option value = "200" >200</option>
<option value = "400" >400</option>
<option value = "ALL" >ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22662,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('22662,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs19345">
    <div class="container-fluid container-flex">
      <div class="center-block " >
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
              https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&Form_ID=2486&Stack=0&Application_ID=2840&ID=549
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
          <input  class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=460 id="BUTTON0"  type="button" name="save continue" title="Print Participant List" value="Print Participant List" onClick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=318&Form_ID=326&FK=549&ID=549&Stack=2','FormReportMultiSectionaspxWindow');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=470 id="BUTTON1"  type="button" name="save continue" title="Black Pug CSV" value="Black Pug CSV" onClick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=480 id="BUTTON3"  type="button" name="preselect" title="E-Mail Participants" value="E-Mail Participants" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=397&PreselectID=549&FK=549&Stack=3','');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=490 id="BUTTON4"  type="button" name="preselect" title="Invite Undecideds" value="Invite Undecideds" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=1208&PreselectID=549&FK=549&Stack=3','');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=500 id="BUTTON5"  type="button" name="update" title="Update This Event" value="Update This Event" onClick="LinkTo('FormDetail.aspx?Menu_Item_ID=318&Form_ID=167&ID=549&Stack=3','');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=510 id="BUTTON6"  type="button" name="delete" title="Delete This Event" value="Delete This Event" onClick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input  class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()"  tabindex=520 id="BUTTON7"  type="button" name="cancel" title="Exit" value="Exit" onclick="LinkTo('/home/home.php','_top');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <input type=hidden name="FirstControl" id="FirstControl" value="BUTTON0">
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
  </body>
  </html>
