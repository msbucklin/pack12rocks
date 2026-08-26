<html lang="en"><head>
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="343">
<input type="hidden" name="Form_ID" id="Form_ID" value="257">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="2">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=343&amp;Form_ID=257&amp;FK=0&amp;ID=211690&amp;Stack=2">
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=2','');">My Contact Information</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6496&amp;Stack=0&amp;Custom_Form_ID=2','');">About Us</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6775&amp;Stack=0&amp;Custom_Form_ID=7','');">Uniform</a>
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=2','');">My Contact Information</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6496&amp;Stack=0&amp;Custom_Form_ID=2','');">About Us</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6775&amp;Stack=0&amp;Custom_Form_ID=7','');">Uniform</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=343">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=343">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=343">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=16" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=343">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=343">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=343">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=343">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=343&amp;Form_ID=257&amp;FK=0&amp;ID=211690&amp;Stack=2&amp;Application_ID=2840
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
Users &amp; Passwords
</p>
<input type="hidden" name="FK" id="FK" value="2913">
<input type="hidden" name="ID" id="ID" value="211690">
<div class="new-row" id="fs720">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY3681104">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY3681104" style="visibility: visible">
            *
            </span>
            User Login
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY3681104" id="RVALENTRY3681104" value="Y">
            <input type="hidden" name="OLD3681104" id="OLD3681104" value="AAarons">
            <input type="text" class="form-control" id="ENTRY3681104" name="ENTRY3681104" tabindex="110" size="50" onblur="TestRegExp(this,'','')" maxlength="255" value="AAarons" title="The user ID that this person uses to log in to this application" style="background-color: rgb(255, 255, 255);">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY3682130">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY3682130" style="visibility: hidden">
            *
            </span>
            New Password
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY3682130" id="RVALENTRY3682130" value="N">
            <input type="hidden" name="OLD3682130" id="OLD3682130" value="">
            <input type="password" autocomplete="off" class="form-control" id="ENTRY3682130" name="ENTRY3682130" tabindex="120" size="50" onblur="TestRegExp(this,/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$!%^&amp;_+=0123456789])(?!.*[^a-zA-Z0-9@#$!%^&amp;_+=]).*$/,'A password must be at least 8 characters long and contain at least one uppercase letter, at least one lowercase letter, and at least one numeric character or a special character from the following group: @#$1%^&amp;_+=')" maxlength="100" value="" title="Enter a value to replace the existing password.">
            <span class="entrypostscript">
            Leave this field blank to keep the existing password.
            </span>
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2850425" style="visibility: hidden">
            *
            </span>
            User Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2850425" id="RVALENTRY2850425" value="N">
            <span id="DIVENTRY2850425">
            <input type="hidden" name="OLD2850425" id="OLD2850425" value="Andrew">
            <input type="text" class="form-control" id="ENTRY2850425" name="ENTRY2850425" tabindex="131" size="24" onblur="TestRegExp(this,'','')" maxlength="24" value="Andrew" title="First Name">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2850427" id="RVALENTRY2850427" value="N">
            <span id="DIVENTRY2850427">
            <input type="hidden" name="OLD2850427" id="OLD2850427" value="">
            <input type="text" class="form-control" id="ENTRY2850427" name="ENTRY2850427" tabindex="132" size="24" onblur="TestRegExp(this,'','')" maxlength="24" value="" title="Middle name">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2850428" id="RVALENTRY2850428" value="N">
            <span id="DIVENTRY2850428">
            <input type="hidden" name="OLD2850428" id="OLD2850428" value="Aarons">
            <input type="text" class="form-control" id="ENTRY2850428" name="ENTRY2850428" tabindex="133" size="30" onblur="TestRegExp(this,'','')" maxlength="30" value="Aarons" title="Last name">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2850451" id="RVALENTRY2850451" value="N">
            <span id="DIVENTRY2850451">
            <input type="hidden" name="OLD2850451" id="OLD2850451" value="">
            <select id="ENTRY2850451" name="ENTRY2850451" class="form-control" onblur="TestRegExp(this,'','')" tabindex="134" title="" size="1">
              <option selected="" value=""> </option>
              <option value="Sr.">Sr.</option>
              <option value="Jr.">Jr.</option>
              <option value="III">III</option>
              <option value="IV">IV</option>
            </select>
            <span class="entrypostscript">

            </span>
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY36832">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY36832" style="visibility: hidden">
            *
            </span>
            Default Language
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY36832" id="RVALENTRY36832" value="N">
            <input type="hidden" name="OLD36832" id="OLD36832" value="1">
            <select id="ENTRY36832" name="ENTRY36832" class="form-control" onblur="TestRegExp(this,'','')" tabindex="140" title="Default language for this user" size="1">
              <option value="0"> </option>
              <option value="4">Deutsch</option>
              <option selected="" value="1">English</option>
              <option value="2">Espanol</option>
              <option value="3">Français</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY36842">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY36842" style="visibility: visible">
            *
            </span>
            Membership Record
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY36842" id="RVALENTRY36842" value="Y">
            <input type="hidden" name="OLD36842" id="OLD36842" value="1018">
            <select id="ENTRY36842" name="ENTRY36842" class="form-control" onblur="TestRegExp(this,'','')" tabindex="150" title="The membership record for this user" size="1">
              <option selected="" value="1018">Aarons, Andrew</option>
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
              <option value="763">Byrd, Benjamin</option>
              <option value="786">Byrd, Ryan</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="1143">Chidester, Ella</option>
              <option value="986">Chidester, Russ</option>
              <option value="983">Chidester, Taylor</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="984">de los Santos Garza, Andrea</option>
              <option value="965">de los Santos Garza, Leo  Jr.</option>
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
              <option value="564">Files, Michael</option>
              <option value="1122">Files, Michael</option>
              <option value="633">Files, Mikaela</option>
              <option value="651">Files, Sofia</option>
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
              <option value="833">Hickman, Trey</option>
              <option value="1188">Hickman, Maya</option>
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
              <option value="933">Lorenzini, Mitch</option>
              <option value="1217">Lorenzini, Paige</option>
              <option value="922">Lorenzini, Pepper</option>
              <option value="1032">Lynch, Dixon</option>
              <option value="1034">Lynch, Scott</option>
              <option value="693">Mallios, Jim</option>
              <option value="688">Mallios, Jason</option>
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
              <option value="1532">revspsg@gmail.com, Revathi N</option>
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
              <option value="1264">Vital, Jessie</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1220">Westphal, Milo</option>
              <option value="1221">Westphal, oliver</option>
              <option value="1209">Whittington, Aric</option>
              <option value="1193">Whittington, Rowan</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY6144617">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY6144617" style="visibility: hidden">
            *
            </span>
            Sent New Password
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY6144617" id="RVALENTRY6144617" value="">
            <input type="hidden" name="OLD6144617" id="OLD6144617" value="">
            <input type="hidden" name="ENTRY6144617" id="ENTRY6144617" value="">
            <span class="text-left">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs721">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON10" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="LinkTo('/home/home.php','_top');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON11" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="190" id="BUTTON12" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON12">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs1264">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 500px; min-width: 200px;">
      <p>
      Most users should be assigned at least one role from the list below.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs722">
  <div class="container-fluid container-flex">
    <div class="center-block " id="DIVCB722">
      <table class="table table-striped table-bordered table-condensed table-responsive table-curved sortable" id="sortablegrid14">
        <thead>
        <tr>
          <th class="unsortable" id="TH722" name="TH722"><input type="checkbox" class="form-control" id="CB722" name="CB722" onclick="ClickCheckboxAll(this);"></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Role<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
        </tr>
        </thead>
        <tbody>
        <input type="hidden" name="ROWCOUNTCB722" id="ROWCOUNTCB722" value="15">
        <tr>
          <input type="hidden" name="LINKCB722ROW0" id="LINKCB722ROW0" value="53711">
          <input type="hidden" name="CHILDCB722ROW0" id="CHILDCB722ROW0" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="200" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW0" name="CB722ROW0" size="1">
            <input type="hidden" name="OLDCB722ROW0" id="OLDCB722ROW0" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW0DATA3689" id="OLDCB722ROW0DATA3689" value="Adult">
            Adult
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW1" id="LINKCB722ROW1" value="53712">
          <input type="hidden" name="CHILDCB722ROW1" id="CHILDCB722ROW1" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="220" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW1" name="CB722ROW1" size="1">
            <input type="hidden" name="OLDCB722ROW1" id="OLDCB722ROW1" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW1DATA3689" id="OLDCB722ROW1DATA3689" value="Cub Scout Advancement">
            Cub Scout Advancement
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW2" id="LINKCB722ROW2" value="53702">
          <input type="hidden" name="CHILDCB722ROW2" id="CHILDCB722ROW2" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="240" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW2" name="CB722ROW2" size="1">
            <input type="hidden" name="OLDCB722ROW2" id="OLDCB722ROW2" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW2DATA3689" id="OLDCB722ROW2DATA3689" value="Event Planner">
            Event Planner
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW3" id="LINKCB722ROW3" value="53709">
          <input type="hidden" name="CHILDCB722ROW3" id="CHILDCB722ROW3" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="260" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW3" name="CB722ROW3" size="1">
            <input type="hidden" name="OLDCB722ROW3" id="OLDCB722ROW3" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW3DATA3689" id="OLDCB722ROW3DATA3689" value="Financial Review">
            Financial Review
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW4" id="LINKCB722ROW4" value="53703">
          <input type="hidden" name="CHILDCB722ROW4" id="CHILDCB722ROW4" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="280" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW4" name="CB722ROW4" size="1">
            <input type="hidden" name="OLDCB722ROW4" id="OLDCB722ROW4" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW4DATA3689" id="OLDCB722ROW4DATA3689" value="Forum Moderator">
            Forum Moderator
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW5" id="LINKCB722ROW5" value="53713">
          <input type="hidden" name="CHILDCB722ROW5" id="CHILDCB722ROW5" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="300" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW5" name="CB722ROW5" size="1">
            <input type="hidden" name="OLDCB722ROW5" id="OLDCB722ROW5" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW5DATA3689" id="OLDCB722ROW5DATA3689" value="Fundraising">
            Fundraising
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW6" id="LINKCB722ROW6" value="53708">
          <input type="hidden" name="CHILDCB722ROW6" id="CHILDCB722ROW6" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="320" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW6" name="CB722ROW6" size="1">
            <input type="hidden" name="OLDCB722ROW6" id="OLDCB722ROW6" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW6DATA3689" id="OLDCB722ROW6DATA3689" value="Group Equipment">
            Group Equipment
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW7" id="LINKCB722ROW7" value="53710">
          <input type="hidden" name="CHILDCB722ROW7" id="CHILDCB722ROW7" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="340" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW7" name="CB722ROW7" size="1">
            <input type="hidden" name="OLDCB722ROW7" id="OLDCB722ROW7" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW7DATA3689" id="OLDCB722ROW7DATA3689" value="Guest">
            Guest
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW8" id="LINKCB722ROW8" value="53706">
          <input type="hidden" name="CHILDCB722ROW8" id="CHILDCB722ROW8" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="360" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW8" name="CB722ROW8" size="1">
            <input type="hidden" name="OLDCB722ROW8" id="OLDCB722ROW8" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW8DATA3689" id="OLDCB722ROW8DATA3689" value="Leader">
            Leader
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW9" id="LINKCB722ROW9" value="53707">
          <input type="hidden" name="CHILDCB722ROW9" id="CHILDCB722ROW9" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="380" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW9" name="CB722ROW9" size="1">
            <input type="hidden" name="OLDCB722ROW9" id="OLDCB722ROW9" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW9DATA3689" id="OLDCB722ROW9DATA3689" value="Librarian">
            Librarian
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW10" id="LINKCB722ROW10" value="53705">
          <input type="hidden" name="CHILDCB722ROW10" id="CHILDCB722ROW10" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="400" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW10" name="CB722ROW10" size="1">
            <input type="hidden" name="OLDCB722ROW10" id="OLDCB722ROW10" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW10DATA3689" id="OLDCB722ROW10DATA3689" value="Membership">
            Membership
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW11" id="LINKCB722ROW11" value="53700">
          <input type="hidden" name="CHILDCB722ROW11" id="CHILDCB722ROW11" value="314074">
          <td>
            <input type="checkbox" class="form-control" tabindex="420" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW11" name="CB722ROW11" size="1">
            <input type="hidden" name="OLDCB722ROW11" id="OLDCB722ROW11" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW11DATA3689" id="OLDCB722ROW11DATA3689" value="Scout">
            Scout
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW12" id="LINKCB722ROW12" value="53704">
          <input type="hidden" name="CHILDCB722ROW12" id="CHILDCB722ROW12" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="440" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW12" name="CB722ROW12" size="1">
            <input type="hidden" name="OLDCB722ROW12" id="OLDCB722ROW12" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW12DATA3689" id="OLDCB722ROW12DATA3689" value="Site Administrator">
            Site Administrator
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW13" id="LINKCB722ROW13" value="53701">
          <input type="hidden" name="CHILDCB722ROW13" id="CHILDCB722ROW13" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="460" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW13" name="CB722ROW13" size="1">
            <input type="hidden" name="OLDCB722ROW13" id="OLDCB722ROW13" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW13DATA3689" id="OLDCB722ROW13DATA3689" value="Treasurer">
            Treasurer
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB722ROW14" id="LINKCB722ROW14" value="53699">
          <input type="hidden" name="CHILDCB722ROW14" id="CHILDCB722ROW14" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="480" onclick="ClickCheckbox(this);" value="Y" id="CB722ROW14" name="CB722ROW14" size="1">
            <input type="hidden" name="OLDCB722ROW14" id="OLDCB722ROW14" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB722ROW14DATA3689" id="OLDCB722ROW14DATA3689" value="Web Page Editor">
            Web Page Editor
          </td>
        </tr>
        </tbody>
      </table>


</div>
</div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY3681104">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>