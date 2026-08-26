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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="395">
<input type="hidden" name="Form_ID" id="Form_ID" value="1475">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="2">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org//site-configuration/membership-type-add.php?Form_ID=1475&amp;FK=0&amp;ID=0&amp;Stack=2">
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=2','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=2','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=395">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=395">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=395">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=212" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=395">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=395">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=395">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=395">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org//site-configuration/membership-type-add.php?Form_ID=1475&amp;FK=0&amp;ID=0&amp;Stack=2&amp;Application_ID=2840
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
Membership Type
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7328">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY288201">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY288201" style="visibility: visible">
            *
            </span>
            Membership Type
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY288201" id="RVALENTRY288201" value="Y">
            <input type="hidden" name="OLD288201" id="OLD288201" value="">
            <input type="text" class="form-control" id="ENTRY288201" name="ENTRY288201" tabindex="110" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="A type or class of membership available within this group" style="background-color: rgb(255, 170, 170);">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY288211">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY288211" style="visibility: visible">
            *
            </span>
            Description
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY288211" id="RVALENTRY288211" value="Y">
            <input type="hidden" name="OLD288211" id="OLD288211" value="">
            <input type="text" class="form-control" id="ENTRY288211" name="ENTRY288211" tabindex="120" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="A description of this user type">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY288222">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY288222" style="visibility: visible">
            *
            </span>
            Default Role
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY288222" id="RVALENTRY288222" value="Y">
            <input type="hidden" name="OLD288222" id="OLD288222" value="0">
            <select id="ENTRY288222" name="ENTRY288222" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The role that will be assigned when the system automatically creates a user ID for this category of member." size="1">
              <option selected="" value="0"> </option>
              <option value="53711">Adult</option>
              <option value="53712">Cub Scout Advancement</option>
              <option value="53702">Event Planner</option>
              <option value="53709">Financial Review</option>
              <option value="53703">Forum Moderator</option>
              <option value="53713">Fundraising</option>
              <option value="53708">Group Equipment</option>
              <option value="53710">Guest</option>
              <option value="53706">Leader</option>
              <option value="53707">Librarian</option>
              <option value="53705">Membership</option>
              <option value="53700">Scout</option>
              <option value="53704">Site Administrator</option>
              <option value="53701">Treasurer</option>
              <option value="53699">Web Page Editor</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2888411">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2888411" style="visibility: visible">
            *
            </span>
            Collect Photo?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2888411" id="RVALENTRY2888411" value="Y">
            <input type="hidden" name="OLD2888411" id="OLD2888411" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="140" value="Y" id="ENTRY2888411" name="ENTRY2888411" size="1" title="Indicates whether the system will allow this type of member to upload a photo of himself/herself">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2882711">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2882711" style="visibility: visible">
            *
            </span>
            Collect Date of Birth?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2882711" id="RVALENTRY2882711" value="Y">
            <input type="hidden" name="OLD2882711" id="OLD2882711" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="150" value="Y" id="ENTRY2882711" name="ENTRY2882711" size="1" title="Indicates where the system will collect date of birth for this type of member">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2882811">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2882811" style="visibility: visible">
            *
            </span>
            Collect Spouse Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2882811" id="RVALENTRY2882811" value="Y">
            <input type="hidden" name="OLD2882811" id="OLD2882811" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="160" value="Y" id="ENTRY2882811" name="ENTRY2882811" size="1" title="Indicates whether the system will collect the spouse name for this type of member">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2887611">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2887611" style="visibility: visible">
            *
            </span>
            Collect Medical/Insurance Information?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2887611" id="RVALENTRY2887611" value="Y">
            <input type="hidden" name="OLD2887611" id="OLD2887611" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="170" value="Y" id="ENTRY2887611" name="ENTRY2887611" size="1" title="Indicates whether the system should collect medical and insurance information on this type of member">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2883011">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2883011" style="visibility: visible">
            *
            </span>
            Emergency Contacts
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2883011" id="RVALENTRY2883011" value="Y">
            <input type="hidden" name="OLD2883011" id="OLD2883011" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="180" value="Y" id="ENTRY2883011" name="ENTRY2883011" size="1" title="Indicates whether the system will collect information on emergency contacts for this type of member.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2882411">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2882411" style="visibility: visible">
            *
            </span>
            Collect Employment Information?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2882411" id="RVALENTRY2882411" value="Y">
            <input type="hidden" name="OLD2882411" id="OLD2882411" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="190" value="Y" id="ENTRY2882411" name="ENTRY2882411" size="1" title="Indicates whether the system should collect employment information on this type of member, such as occupation, place of work, business phone number, etc.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2882511">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2882511" style="visibility: visible">
            *
            </span>
            Collect Vehicle Information?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2882511" id="RVALENTRY2882511" value="Y">
            <input type="hidden" name="OLD2882511" id="OLD2882511" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="200" value="Y" id="ENTRY2882511" name="ENTRY2882511" size="1" title="Indicates whether the system will collect vehicle information about this type of member, such as license, make/model, insurance, etc.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2882611">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2882611" style="visibility: visible">
            *
            </span>
            Boat Photo and Description?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2882611" id="RVALENTRY2882611" value="Y">
            <input type="hidden" name="OLD2882611" id="OLD2882611" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="210" value="Y" id="ENTRY2882611" name="ENTRY2882611" size="1" title="Indicates whether the system will allow this type of member to post a photo of of their vessel and a description">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2882311">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2882311" style="visibility: visible">
            *
            </span>
            Collect Youth Information (like school, grade, etc.)?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2882311" id="RVALENTRY2882311" value="Y">
            <input type="hidden" name="OLD2882311" id="OLD2882311" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="220" value="Y" id="ENTRY2882311" name="ENTRY2882311" size="1" title="Indicates whether the system should collect youth information for this type of member, such as school attended, grade, etc.">
            <span class="entrypostscript">
            Do NOT select for any adult membership types
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2882911">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2882911" style="visibility: visible">
            *
            </span>
            Collect Swimming Level/Test?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2882911" id="RVALENTRY2882911" value="Y">
            <input type="hidden" name="OLD2882911" id="OLD2882911" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="230" value="Y" id="ENTRY2882911" name="ENTRY2882911" size="1" title="Indicates whether the system will collect swimming proficiency and test date for this type of member">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY3363211">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY3363211" style="visibility: visible">
            *
            </span>
            Scouting Age Level
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY3363211" id="RVALENTRY3363211" value="Y">
            <input type="hidden" name="OLD3363211" id="OLD3363211" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="240" value="Y" id="ENTRY3363211" name="ENTRY3363211" size="1" title="Enables the Scouting Level field to specify the age group into which a given scout falls">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY3455811">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY3455811" style="visibility: visible">
            *
            </span>
            Den Number?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY3455811" id="RVALENTRY3455811" value="Y">
            <input type="hidden" name="OLD3455811" id="OLD3455811" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="250" value="Y" id="ENTRY3455811" name="ENTRY3455811" size="1" title="Indicates whether the system should prompt for a den number for this category of individual">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4655811">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4655811" style="visibility: visible">
            *
            </span>
            Last Affirmation Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4655811" id="RVALENTRY4655811" value="Y">
            <input type="hidden" name="OLD4655811" id="OLD4655811" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="260" value="Y" id="ENTRY4655811" name="ENTRY4655811" size="1" title="Display a field where user can enter the last date a member submitted documents required by the group">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4655911">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4655911" style="visibility: visible">
            *
            </span>
            Shirt Size
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4655911" id="RVALENTRY4655911" value="Y">
            <input type="hidden" name="OLD4655911" id="OLD4655911" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="270" value="Y" id="ENTRY4655911" name="ENTRY4655911" size="1" title="Display field for member's shirt size">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs7329">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON17" type="button" name="save add again" title="Save this information as a new row in  the database and prepare to add another row" value="Save &amp; Add Another" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON18" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON19" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="310" id="BUTTON20" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON20">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY288201">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>