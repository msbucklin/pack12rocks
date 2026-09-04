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
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/ox8dsmiqR62P1bqhciWOn7Fg/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-HEUFCmJokjB+CHBYlkcDt4puBwinjtTwjglts96+ZyVMTHTkeKul3/+rAljME2Le"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
<body onunload="CloseErrorBox()" onload="easySetFocus();GetDeviceWidth();" style="margin-right: 16px;" class="">
<form enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/formCustomEdit.aspx" target="_self" method="post" name="easyform" id="easyform">
<script language="JavaScript" type="text/javascript">
  <!--
  function submitForm() {
  	//change the following line to true to submit form
  	return true;
  }
  //-->
</script>
<input type="hidden" name="menuopenflag" id="menuopenflag" value="N">
<input type="hidden" name="Selected_Action" id="Selected_Action" value="NewSection">
<input type="hidden" name="Hover_Action" id="Hover_Action" value="">
<input type="hidden" name="Selected_Button_ID" id="Selected_Button_ID" value="">
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="6495">
<input type="hidden" name="Form_ID" id="Form_ID" value="2824">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/formCustomEdit.aspx">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a>
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
<div id="mainmenu" class="navmenu">
  <ul class="list-group">
  <li class="list-group-item"><a href="javascript:toggleLower('m2');">Home <span id="m2-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m2" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6495&amp;Stack=0&amp;Custom_Form_ID=1','');">Home</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6496&amp;Stack=0&amp;Custom_Form_ID=2','');">About Us</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6775&amp;Stack=0&amp;Custom_Form_ID=7','');">Uniform</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6578&amp;Stack=0&amp;Custom_Form_ID=4','');">Camping</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6776&amp;Stack=0&amp;Custom_Form_ID=8','');">Fundraising</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=7593&amp;Stack=0&amp;Custom_Form_ID=12','');">Renewing Your Membership</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=7069&amp;Stack=0&amp;Custom_Form_ID=11','');">How to Make Payments</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6579&amp;Stack=0&amp;Custom_Form_ID=5','');">Volunteering</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=8610&amp;Stack=0&amp;Custom_Form_ID=14','');">Organization Chart</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=6764&amp;Stack=0&amp;Custom_Form_ID=6','');">Den Leader Resources</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=291&amp;Stack=1','');">Add &amp; Update Announcements</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=1529&amp;Stack=0','');">Manage Custom Pages</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=3389&amp;Stack=0','');">View Contacts</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m3');">My Stuff <span id="m3-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m3" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=304&amp;Stack=1','');">Change My Password</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=307&amp;Stack=1','');">On-Line Payments</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=308&amp;Stack=1','');">My Family</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=309&amp;Stack=1','');">Sign-Up For Upcoming Events</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1779&amp;Stack=0','');">Sign-Up For Upcoming Shifts</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=310&amp;Stack=1','');">Subscribe to Calendar</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=313&amp;Stack=1','');">My Training History</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m4');">Communication <span id="m4-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m4" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=2959&amp;Stack=0','');">Quick Text Message</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=333&amp;Stack=1','');">Send E-Mail</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=334&amp;Stack=1','');">Send E-Mail To E-Mail Group</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=335&amp;Stack=1','');">My Inbox</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=336&amp;Stack=1','');">My Outbox</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=337&amp;Stack=0','');">My E-Mail Delivery Status</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=338&amp;Stack=1','');">View All E-Mail</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=339&amp;Stack=0','');">Blocked E-Mail Addresses</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=342&amp;Stack=1','');">Set Up Automated Newsletter</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m5');">Events <span id="m5-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m5" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5787&amp;Stack=0','');">Events Hub</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=319&amp;Stack=1','');">Add &amp; Update Events</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=321&amp;Stack=1','');">Event Documents</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m6');">Event Reports <span id="m6-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m6" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:toggleLower('m7');">Upcoming Events Summary <span id="m7-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m7" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=2877&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=2877&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m8');">Attendance By Event <span id="m8-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m8" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=411&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=411&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=324&amp;Stack=1','');">Event Locations</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormRunProcedure.aspx?Menu_Item_ID=5430&amp;Stack=1','');">Merge Duplicate Locations</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormRunProcedure.aspx?Menu_Item_ID=325&amp;Stack=1','');">Copy An Event</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1818&amp;Stack=0','');">Copy Monthly Event</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m9');">Membership <span id="m9-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m9" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=2538&amp;Stack=0','');">Quick Dial</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=292&amp;Stack=1','');">Active Members</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=293&amp;Stack=1','');">Inactive Members</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=2711&amp;Stack=0','');">Transfer Scouts</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormRunProcedure.aspx?Menu_Item_ID=5838&amp;Stack=0','');">Merge Duplicate Members</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m10');">Membership Reports <span id="m10-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m10" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:toggleLower('m11');">Membership Directory <span id="m11-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m11" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=369&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=369&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m12');">Leader Directory <span id="m12-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m12" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=370&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=370&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m13');">Contact List <span id="m13-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m13" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=372&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=372&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m14');">Emergency Contact List <span id="m14-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m14" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=373&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=373&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m15');">Den List By Member Name <span id="m15-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m15" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=374&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=374&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m16');">Den List By Den <span id="m16-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m16" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=375&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=375&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m17');">Den List With Parent Info <span id="m17-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m17" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=5729&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=5729&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m18');">Members With Allergies Or Dietary Restrictions <span id="m18-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m18" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=8288&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=8288&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m19');">Medical Form Effective Dates <span id="m19-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m19" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=376&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=376&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m20');">Family Cross Reference <span id="m20-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m20" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=377&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=377&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m21');">Expired Training By Course <span id="m21-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m21" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=379&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=379&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m22');">Expired Training By Person <span id="m22-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m22" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=380&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=380&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m23');">Required Training By Course <span id="m23-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m23" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=381&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=381&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m24');">Required Training By Person <span id="m24-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m24" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=382&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=382&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m25');">Leaders Who Need YPT <span id="m25-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m25" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6149&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6149&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m26');">Upcoming BSA Registration Renewals <span id="m26-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m26" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6891&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6891&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m27');">BSA Registration <span id="m27-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m27" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6892&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6892&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=296&amp;Stack=0','');">Dynamic Subgroups</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=299&amp;Stack=1','');">Leadership</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=300&amp;Stack=1','');">Training</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadTrainingUniversal.aspx?Menu_Item_ID=5110&amp;Stack=0','');">Upload Training From My.Scouting.Org</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormRunProcedure.aspx?Menu_Item_ID=301&amp;Stack=1','');">Advance Grade</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m28');">Upload Members <span id="m28-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m28" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadScoutbookPlusRoster.aspx?Menu_Item_ID=8144&amp;Stack=0','');">Upload ScoutbookPlus Roster Report</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadScoutScoutBook.aspx?Menu_Item_ID=1902&amp;Stack=0','');">Upload Scouts From ScoutBook</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadAdultsScoutBook.aspx?Menu_Item_ID=1903&amp;Stack=0','');">Upload Adults From ScoutBook</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadMyScoutingRoster.aspx?Menu_Item_ID=6898&amp;Stack=0','');">Upload Roster From My.Scouting</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:toggleLower('m29');">Update All . . . <span id="m29-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m29" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=6874&amp;Stack=0','');">BSA Registration</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=7171&amp;Stack=0','');">Medical Form Date</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=8292&amp;Stack=1','');">Allergies and Dietary Restrictions</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=303&amp;Stack=1&amp;ReportFormat=XLS','');">Export Roster to Excel</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m30');">Cub Scouts <span id="m30-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m30" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=417&amp;Stack=0','');">Update Cub Scout Age Levels</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=418&amp;Stack=0','');">Adventures &amp; Badges</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=419&amp;Stack=1','');">Special Awards</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=4635&amp;Stack=0','');">Scouting History</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=421&amp;Stack=1','');">Pending Awards</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m31');">Pending Awards Report <span id="m31-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m31" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=2916&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=2916&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:toggleLower('m32');">Pending Award Counts <span id="m32-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m32" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=422&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=422&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=5325&amp;Stack=0','');">Uncompleted Requirements Report</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormRunProcedure.aspx?Menu_Item_ID=420&amp;Stack=1','');">Set Award Date</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=4594&amp;Stack=0','');">Export to Scoutbook Plus</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadScoutBookAdvancement.aspx?Menu_Item_ID=1908&amp;Stack=0','');">Upload ScoutBook Plus Advancement</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m33');">Resources <span id="m33-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m33" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('bsaShowTroopForms.aspx?Menu_Item_ID=390&amp;Stack=1','');">Forms &amp; Documents</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=391&amp;Stack=1','');">Web Links</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=392&amp;Stack=1','');">Add &amp; Update Forms</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=393&amp;Stack=1','');">Add &amp; Update Form Categories</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=394&amp;Stack=1','');">Add &amp; Update Web Links</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m34');">Money <span id="m34-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m34" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5781&amp;Stack=0','');">Financial Hub</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=352&amp;Stack=1','');">Individual Transactions</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=353&amp;Stack=1','');">Group Transactions</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('PaymentCollector.aspx?Menu_Item_ID=4995&amp;Stack=0','PaymentCollector');">Payment Collector</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=2600&amp;Stack=0','');">Expense Reimbursement Requests</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m35');">Financial Reports <span id="m35-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m35" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:toggleLower('m36');">Report Account Balances <span id="m36-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m36" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=383&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=383&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=384&amp;Stack=1','');">Report Financial History</a></li>
      <li class="list-group-item"><a href="javascript:toggleLower('m37');">Fund Balances Report <span id="m37-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m37" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=385&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=385&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m38');">Fund Balances By Fiscal Year <span id="m38-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m38" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=1207&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=1207&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1943&amp;Stack=0','');">Fund Balances on Effective Date</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=356&amp;Stack=1','');">Email Account Balances</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=357&amp;Stack=1','');">Group Account Balances</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=358&amp;Stack=1','');">Member Account Balances</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=359&amp;Stack=1','');">Event Balances</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=360&amp;Stack=1','');">Statement Reconciliation</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=361&amp;Stack=1','');">On-Line Payment History</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=7635&amp;Stack=0','');">Fiscal Years &amp; Budgets</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadAccounts.aspx?Menu_Item_ID=362&amp;Stack=1','');">Upload Account Balances From Spreadsheet</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=363&amp;Stack=1&amp;ReportFormat=XLS','');">Export All Transactions to Excel</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m39');">Site Configuration <span id="m39-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m39" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1453&amp;Stack=0','');">E-Mail Settings</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=395&amp;Stack=1','');">Membership Type</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=396&amp;Stack=1','');">Relationship Types</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=3309&amp;Stack=0','');">Dress Codes</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=4656&amp;Stack=0','');">Skills and Interests</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=397&amp;Stack=1','');">Leadership Positions</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=398&amp;Stack=1','');">Training Courses</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=399&amp;Stack=1','');">Awards</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=400&amp;Stack=1','');">Event Types</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=401&amp;Stack=1','');">Activity Types</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=404&amp;Stack=1','');">Transaction Types</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=405&amp;Stack=1','');">Funds</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=406&amp;Stack=1','');">Fund Categories</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=7632&amp;Stack=0','');">Budget Template</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=407&amp;Stack=1','');">PayPal Configuration</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=4888&amp;Stack=0','');">Square Configuration</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=4994&amp;Stack=0','');">Payment Collector</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=2601&amp;Stack=0','');">Expense Reimbursements</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m40');">Security Configuration <span id="m40-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m40" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1211&amp;Stack=0','');">Disable Menu Items</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1212&amp;Stack=0','');">Override Default Public Access Settings</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1660&amp;Stack=0','');">Configure Quick Menus</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=386&amp;Stack=1','');">Configure User Roles</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=387&amp;Stack=1','');">Assign Tasks To Roles</a></li>
      <li class="list-group-item"><a href="javascript:toggleLower('m41');">Role Task Report <span id="m41-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m41" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=388&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=388&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m42');">Task Role Report <span id="m42-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m42" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=389&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=389&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=3390&amp;Stack=0','');">Contact Us Reasons</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m43');">Administration <span id="m43-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m43" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=344&amp;Stack=1','');">User Roles</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=345&amp;Stack=0','');">Send User IDs &amp; Passwords</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=7230&amp;Stack=0','');">Automatically Send New User IDs</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=346&amp;Stack=1','');">Display User Permissions</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m44');">User Permissions Report <span id="m44-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m44" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=347&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=347&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:toggleLower('m45');">Menu Security Report <span id="m45-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m45" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=348&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=348&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:toggleLower('m46');">User Activity Report <span id="m46-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m46" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=2812&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=2812&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:LinkTo('BackupUserDatabase.aspx?Menu_Item_ID=349&amp;Stack=1','');">Database Backup</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('PayPalRenewalFee.aspx?Menu_Item_ID=350&amp;Stack=1','');">Renew Subscription</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a></li>
    </ul>
  </div>
  </ul>
</div>
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
  <li class="list-group-item"><a href="formCustom.aspx?Menu_Item_ID=6495&amp;Custom_Form_ID=1">Exit Page Edit</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalPageFormat">Format</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalReportingOptions">Reporting Options</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=6495">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=6495">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=6495">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?DB=2" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=6495">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=6495">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=6495">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=6495">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/formCustomEdit.aspx&amp;Application_ID=2840
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
<div class="modal fade" id="ModalSectionSettings" role="dialog" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 id="SectionSettingsHeading">New Section</h3>
        <input type="hidden" id="SelectedSectionID" name="SelectedSectionID" value="NewSectionBeforeZ98">
        <table class="no-border center-block">
          <tbody>
          <tr id="SectionTypeRow" name="SectionTypeRow" style="display: table-row;">
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Section Type
              </label>
            </td>
            <td class="text-left">
              <input type="radio" name="SectionType" id="SectionType" value="C" tabindex="1" onchange="SectionTypeChanged(this)">
              My Content
              &nbsp;
              &nbsp;
              <input type="radio" name="SectionType" id="SectionType" value="W" tabindex="1" onchange="SectionTypeChanged(this)">
              Widget
            </td>
          </tr>
          <tr id="WidgetTypeRow" name="WidgetTypeRow" style="display: table-row;">
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Widget Type
              </label>
            </td>
            <td class="text-left">
              <select id="WidgetType" name="WidgetType" tabindex="2" onchange="WidgetTypeChanged(this)" class="form-control">
                <option value="75">My Family's Scouting America Registration End Date</option>
                <option value="1">Photo Gallery Preview</option>
                <option value="2">Announcements &amp; Upcoming Events</option>
                <option value="3">Announcements</option>
                <option value="55">Announcement Titles Only</option>
                <option value="4">Upcoming Events</option>
                <option value="10">Upcoming Events including subgroup limited events on public site</option>
                <option value="7">Recent Events</option>
                <option value="8">Our Adult Leaders</option>
                <option value="9">Our Adult Leaders - By Position</option>
                <option value="6">Surveys</option>
                <option value="57">Data Window - My Stuff - Upcoming Events</option>
                <option value="66">Data Window - My Stuff - My Awards</option>
                <option value="71">Data Window - My Stuff - Group Forum</option>
                <option value="58">Data WIndow - My Stuff - My Family Library Materials</option>
                <option value="59">Data WIndow - My Stuff - My Family Equipment</option>
                <option value="60">Data Window - My Stuff (Adult) - My Family Account Balances</option>
                <option value="61">Data Window - My Stuff (Adult) - My Family Fundraiser Orders</option>
                <option value="62">Data Window - My Stuff (Adult) - My Family's Contact Info</option>
                <option value="63">Data Window - My Stuff (Adult) - My Scouts Progress</option>
                <option value="64">Data Window - My Stuff (Adult) - Required Training</option>
                <option value="65">Data Window - My Stuff (Adult) - My Skills and Interests</option>
                <option value="68">Data Window - My Stuff (Scout) - My Account</option>
                <option value="70">Data Window - My Stuff (Scout) - My Fundraiser Orders</option>
                <option value="69">Data Window - My Stuff (Scout) - My Progress</option>
                <option value="39">Data Window - Membership - Active Scouts</option>
                <option value="40">Data Window - Membership - Active Adults</option>
                <option value="41">Data Window - Membership - Inactive Members</option>
                <option value="42">Data Window - Membership - Adult Leadership</option>
                <option value="43">Data Window - Membership - Recent Adult Training</option>
                <option value="44">Data Window - Membership - Adult Leaders Needing YPT</option>
                <option value="45">Data Window - Membership - Required Training</option>
                <option value="46">Data Window - Membership - Dynamic Subgroups</option>
                <option value="74">Data Window - Membership - Committees</option>
                <option value="47">Data Window - Membership - Skills and Interests</option>
                <option value="29">Data Window - Events - Upcoming Events</option>
                <option value="30">Data Window - Events - Upcoming Shifts</option>
                <option value="31">Data Window - Events - Past Events</option>
                <option value="32">Data Window - Events - Past Shifts</option>
                <option value="33">Data Window - Events - Attendance Not Finalized</option>
                <option value="34">Data Window - Events - Event Locations</option>
                <option value="14">Data Window - Money - Individual Transactions</option>
                <option value="15">Data Window - Money - Group Transactions</option>
                <option value="27">Data Window - Money - All Member Balances</option>
                <option value="28">Data Window - Money - Active Member Balances</option>
                <option value="26">Data Window - Money - All Scout Balances</option>
                <option value="18">Data Window - Money - All Adult Balances</option>
                <option value="19">Data Window - Money - Active Adult Balances</option>
                <option value="20">Data Window - Money - Group Accounts</option>
                <option value="21">Data Window - Money - Fund Balances</option>
                <option value="16">Data Window - Money - Event Balances</option>
                <option value="22">Data Window - Money - Pending Reimbursement Requests</option>
                <option value="23">Data Window - Money - Bank Statements</option>
                <option value="5">Contact Us Form</option>
                <option value="56">Menu - My Stuff - Top Menu</option>
                <option value="67">Menu - My Stuff - Other</option>
                <option value="48">Menu - Membership - Membership Functions</option>
                <option value="49">Menu - Membership - Upload Membership Information</option>
                <option value="51">Menu - Membership - Directories</option>
                <option value="53">Menu - Membership - Training Reports</option>
                <option value="54">Menu - Membership - Set Up</option>
                <option value="35">Menu - Events - View Calendar</option>
                <option value="36">Menu - Events - Event Functions</option>
                <option value="37">Menu - Events - Reports</option>
                <option value="38">Menu - Events - Set Up</option>
                <option value="24">Menu - Financial Functions</option>
                <option value="17">Menu - Financial Reports</option>
                <option value="25">Menu - Financial Set-up</option>
              </select>
            </td>
          </tr>
          <tr id="WidgetMaxRows" name="WidgetMaxRows" style="display: none;">
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Maximum Rows
              </label>
            </td>
            <td class="text-left">
              <input type="text" name="WidgetMaximumRows" id="WidgetMaximumRows" value="10" maxlength="3" width="3" tabindex="3" class="form-control" style="width:40px;" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only accepts numbers')">
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Maximum Width
              </label>
            </td>
            <td class="text-left">
              <select id="MaximumWidth" name="MaximumWidth" tabindex="4" class="form-control">
                <option value="160">160</option>
                <option value="180">180</option>
                <option value="200">200</option>
                <option value="240">240</option>
                <option value="280">280</option>
                <option value="320">320</option>
                <option value="360">360</option>
                <option value="400">400</option>
                <option value="480">480</option>
                <option value="560">560</option>
                <option value="640">640</option>
                <option value="720">720</option>
                <option value="800">800</option>
                <option value="960">960</option>
                <option value="1080">1080</option>
                <option value="1200">1200</option>
                <option value="1360">1360</option>
                <option value="1600">1600</option>
                <option value="1920">1920</option>
              </select>
              pixels
            </td>
          </tr>
          <tr id="WidgetHeightRow" name="WidgetHeightRow" style="display: none;">
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Data Window Height
              </label>
            </td>
            <td class="text-left">
              <select id="MaximumHeight" name="MaximumHeight" tabindex="5" class="form-control">
                <option value="200">200</option>
                <option value="250">250</option>
                <option value="300">300</option>
                <option value="350">350</option>
                <option value="400">400</option>
                <option value="450">450</option>
                <option value="500">500</option>
                <option value="600">600</option>
                <option value="700">700</option>
                <option value="800">800</option>
                <option value="900">900</option>
                <option value="1000">1000</option>
              </select>
              pixels
            </td>
          </tr>
          <tr id="PublicAccessRow" name="PublicAccessRow" style="display: none;">
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Public Access
              </label>
            </td>
            <td class="text-left">
              <input type="radio" name="PublicAccess" id="PublicAccess" value="Y" tabindex="6">
              Yes
              &nbsp;
              &nbsp;
              <input type="radio" name="PublicAccess" id="PublicAccess" value="N" tabindex="6">
              No
              &nbsp;
              &nbsp;
              <input type="radio" name="PublicAccess" id="PublicAccess" value="P" tabindex="6">
              Public Only
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Background Color
              </label>
            </td>
            <td class="text-left">
              <select id="BackgroundColorSelect" name="BackgroundColorSelect" onchange="SectionColorChanged(this)" tabindex="7" class="form-control">
                <option value="none">--transparent--</option>
                <option value="FFDDDD" style="background-color: #FDD;">Red</option>
                <option value="FFFFDD" style="background-color: #FFD;">Yellow</option>
                <option value="DDFFDD" style="background-color: #DFD;">Green</option>
                <option value="DDFFFF" style="background-color: #DFF;">Blue Green</option>
                <option value="DDDDFF" style="background-color: #DDF;">Blue</option>
                <option value="FFDDFF" style="background-color: #FDF;">Purple</option>
                <option value="FFFFFF" style="background-color: #FFF;">White</option>
                <option value="other" style="background-color: #FFF;">Other...</option>
              </select>
              &nbsp;
              <input type="color" id="BackgroundColorText" name="BackgroundColorText" style="display: none;" value="#FFFFFF" tabindex="8">
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Border
              </label>
            </td>
            <td class="text-left">
              <input type="radio" name="BorderFlag" id="BorderFlag" value="Y" tabindex="9"> &nbsp;
              Yes
              &nbsp;
              &nbsp;
              <input type="radio" name="BorderFlag" id="BorderFlag" value="N" tabindex="9"> &nbsp;
              No
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Shadow
              </label>
            </td>
            <td class="text-left">
              <input type="radio" name="Shadow" id="Shadow" value="Y" tabindex="10"> &nbsp;
              Yes
              &nbsp;
              &nbsp;
              <input type="radio" name="Shadow" id="Shadow" value="N" tabindex="10"> &nbsp;
              No
            </td>
          </tr>
          <tr id="MenuStyleRow" name="MenuStyleRow" style="display: table-row;">
            <td class="text-right">
              <span class="RequiredIndicator">*</span>
              <label class="control-label">
              Menu Style
              </label>
            </td>
            <td class="text-left">
              <input type="radio" name="MenuStyle" id="MenuStyle" value="Regular" tabindex="11"> &nbsp;
              Regular
              &nbsp;
              &nbsp;
              <input type="radio" name="MenuStyle" id="MenuStyle" value="Heading" tabindex="11"> &nbsp;
              Heading
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <input class="btn btn-success" style="float: left;" tabindex="10" type="button" value="OK" name="SectionSettings_Button" id="SectionSettings_Button" onclick="SubmitSettingsForm();">
        <button type="button" class="btn btn-danger" style="float: right;" tabindex="11" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<script language="JavaScript">
  <!--
  function SubmitSettingsForm()
  {
    var MaxRows = document.getElementById("WidgetMaximumRows");
    if (TestRegExp(MaxRows,/^[+]?\d\d*$/,'This field only accepts numbers')==true)
    {
      easyform.submit();
    }
    else
    {
      window.alert('Please enter a valid number for Maximum Rows');
    }
  }

  function SectionColorChanged(obj)
  {
    var newValue = obj.value;
    var ColorPicker = document.getElementById("BackgroundColorText");
    if (newValue=="other")
    {
      ColorPicker.style.display="inline-block";
    }
    else
    {
      ColorPicker.style.display="none";
    }
  }
  function SectionTypeChanged(obj)
  {
    var newValue = obj.value;
    if (newValue=="W")
    {
      document.getElementById("WidgetTypeRow").style.display="table-row";
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      document.getElementById("MenuStyleRow").style.display="table-row";
   	 var WidgetType = document.getElementById("WidgetType");
  	 WidgetTypeChanged(WidgetType);
    }
    else
    {
      document.getElementById("WidgetTypeRow").style.display="none";
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
      easySetFieldValue("MaximumWidth", "640");
    }
  }

  function WidgetTypeChanged(obj)
  {
    var widgetID = obj.value;
    switch(widgetID)
    {
      case '75':
        easySetFieldValue("MaximumWidth", 960);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '1':
        easySetFieldValue("MaximumWidth", 200);
        easySetFieldValue("WidgetMaximumRows", 6);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '2':
        easySetFieldValue("MaximumWidth", 240);
        easySetFieldValue("WidgetMaximumRows", 12);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '3':
        easySetFieldValue("MaximumWidth", 640);
        easySetFieldValue("WidgetMaximumRows", 12);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '55':
        easySetFieldValue("MaximumWidth", 240);
        easySetFieldValue("WidgetMaximumRows", 20);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '4':
        easySetFieldValue("MaximumWidth", 240);
        easySetFieldValue("WidgetMaximumRows", 12);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '10':
        easySetFieldValue("MaximumWidth", 240);
        easySetFieldValue("WidgetMaximumRows", 12);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '7':
        easySetFieldValue("MaximumWidth", 320);
        easySetFieldValue("WidgetMaximumRows", 10);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '8':
        easySetFieldValue("MaximumWidth", 800);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '9':
        easySetFieldValue("MaximumWidth", 800);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '6':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 8);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "Y");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '57':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 20);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '66':
        easySetFieldValue("MaximumWidth", 360);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '71':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 20);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '58':
        easySetFieldValue("MaximumWidth", 640);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '59':
        easySetFieldValue("MaximumWidth", 640);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '60':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 20);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '61':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '62':
        easySetFieldValue("MaximumWidth", 640);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '63':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '64':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '65':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '68':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 10);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '70':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '69':
        easySetFieldValue("MaximumWidth", 360);
        easySetFieldValue("WidgetMaximumRows", 99);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '39':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 999);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '40':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 999);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '41':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 999);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '42':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '43':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '44':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '45':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '46':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '74':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 20);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '47':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '29':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '30':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '31':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '32':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '33':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '34':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '14':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '15':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '27':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 999);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '28':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 999);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '26':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 999);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '18':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 999);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '19':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 999);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '20':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '21':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '16':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '22':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '23':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 100);
        easySetFieldValue("MaximumHeight", 250);
      document.getElementById("WidgetMaxRows").style.display="table-row";
      document.getElementById("WidgetHeightRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '5':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("PublicAccessRow").style.display="table-row";
      easySetFieldValue("PublicAccess", "P");
      document.getElementById("MenuStyleRow").style.display="none";
        break;
      case '56':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '67':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '48':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '49':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '51':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '53':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '54':
        easySetFieldValue("MaximumWidth", 0);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '35':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '36':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '37':
        easySetFieldValue("MaximumWidth", 560);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '38':
        easySetFieldValue("MaximumWidth", 480);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '24':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '17':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
      case '25':
        easySetFieldValue("MaximumWidth", 400);
        easySetFieldValue("WidgetMaximumRows", 0);
        easySetFieldValue("MaximumHeight", );
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      easySetFieldValue("PublicAccess", "N");
      document.getElementById("PublicAccessRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="table-row";
        break;
    }
  }
  function easySectionSettings(SectionID,SectionType,MaximumWidth,PublicAccess,BackgroundColorSelect,BackgroundColorText,BorderFlag,Shadow,WidgetType,WidgetMaximumRows,MaximumHeight,MenuStyle,WidgetCategory)
  {
    var HeadingH3 = document.getElementById("SectionSettingsHeading");
    HeadingH3.innerHTML = "Section Settings";
    document.getElementById("SelectedSectionID").value = SectionID;
    easySetFieldValue("SectionType", SectionType);
    easySetFieldValue("MaximumWidth", MaximumWidth);
    easySetFieldValue("PublicAccess", PublicAccess);
    easySetFieldValue("BackgroundColorSelect", BackgroundColorSelect);
    easySetFieldValue("BackgroundColorText",BackgroundColorText);
    easySetFieldValue("BorderFlag", BorderFlag);
    easySetFieldValue("Shadow", Shadow);
    easySetFieldValue("WidgetType", WidgetType);
    easySetFieldValue("WidgetMaximumRows", WidgetMaximumRows);
    easySetFieldValue("MaximumHeight", MaximumHeight);
    easySetFieldValue("MenuStyle", MenuStyle);
    easyform.Selected_Action.value="UpdateSectionSettings";
    var ColorField = document.getElementById("BackgroundColorSelect");
    SectionColorChanged(ColorField);
    if (SectionType=="W")
    {
      document.getElementById("WidgetTypeRow").style.display="table-row";
      if (WidgetCategory=='Data Window')
      {
         document.getElementById("WidgetHeightRow").style.display="table-row";
      }
      else
      {
         document.getElementById("WidgetHeightRow").style.display="none";
      }
      if (WidgetCategory=='Menu')
      {
         document.getElementById("MenuStyleRow").style.display="table-row";
      }
      else
      {
         document.getElementById("MenuStyleRow").style.display="none";
      }
      if (WidgetCategory=='Contact Form' || WidgetCategory=='Menu')
      {
         document.getElementById("WidgetMaxRows").style.display="none";
      }
      else
      {
         document.getElementById("WidgetMaxRows").style.display="table-row";
      }
      if (WidgetCategory=='Grid' || WidgetCategory=='Contact Form')
      {
         document.getElementById("PublicAccessRow").style.display="table-row";
      }
      else
      {
         document.getElementById("PublicAccessRow").style.display="none";
      }
    }
    else
    {
      document.getElementById("WidgetTypeRow").style.display="none";
      document.getElementById("WidgetMaxRows").style.display="none";
      document.getElementById("WidgetHeightRow").style.display="none";
      document.getElementById("MenuStyleRow").style.display="none";
    }
  	  var SectionTypeRow = document.getElementById("SectionTypeRow");
  	  SectionTypeRow.style.display = "none";
  	  $("#ModalSectionSettings").modal({
  	    backdrop: 'static',
  	    keyboard: false
  	  });
  	}

  function easyDeleteSection(SectionID)
  {
    var r = confirm("Press OK to delete this section");
    if (r == true)
    {
      document.getElementById("SelectedSectionID").value = SectionID;
      easyform.Selected_Action.value="DeleteSection";
    	 easyform.submit();
    }
  }
  function easyMoveSection(SectionID,Direction)
  {
      document.getElementById("SelectedSectionID").value = SectionID;
      easyform.Selected_Action.value='MoveSection' + Direction;
    	 easyform.submit();
  }
  function easyEditSectionContent(SectionID)
  {
      document.getElementById("SelectedSectionID").value = SectionID;
      easyform.Selected_Action.value="EditSectionContent";
    	 easyform.submit();
  }
  function easyEditSectionSource(SectionID)
  {
      document.getElementById("SelectedSectionID").value = SectionID;
      easyform.Selected_Action.value="EditSectionSource";
    	 easyform.submit();
  }
  function easyAddSection(SectionID)
  {
    var HeadingH3 = document.getElementById("SectionSettingsHeading");
    HeadingH3.innerHTML = "New Section";
    easyform.Selected_Action.value="NewSection";
    document.getElementById("SelectedSectionID").value = SectionID;
    easySetFieldValue("SectionType", "C");
    easySetFieldValue("MaximumWidth", "640");
    easySetFieldValue("PublicAccess", "Y");
    easySetFieldValue("BackgroundColorSelect", "none");
    easySetFieldValue("BackgroundColorText","#FFFFFF");
    var ColorPicker = document.getElementById("BackgroundColorText");
    ColorPicker.style.display="none";
    easySetFieldValue("BorderFlag", "N");
    easySetFieldValue("Shadow", "N");
    easySetFieldValue("MaximumHeight", "400");
    easySetFieldValue("MenuStyle", "Regular");
    document.getElementById("SectionTypeRow").style.display="table-row";
    easySetFieldValue("WidgetType", "75");
    easySetFieldValue("WidgetMaximumRows", "0")
    document.getElementById("WidgetTypeRow").style.display="none";
    document.getElementById("WidgetMaxRows").style.display="none";
    document.getElementById("MenuStyleRow").style.display="none";
    $("#ModalSectionSettings").modal({
      backdrop: 'static',
  	 keyboard: false
    });
  }
  //-->
</script>
<div class="banner-div">
  <img class="img-responsive center-block" src="https://ogo.blob.core.windows.net/cspack12austin/CubScoutHeader_20234415342260503907.JPG">
</div>
<p class="page-title">
Home
</p>
<input type="hidden" name="Custom_Form_ID" id="Custom_Form_ID" value="1">
<div class="new-row text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
  <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewRowAfterZ0');">&nbsp;+&nbsp;</a>
</div>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
      <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionBeforeZ98');">&nbsp;+&nbsp;</a>
    </div>
    <div class="center-block  with-border" style="margin-bottom: 20px; max-width: 1920px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <div style="display: block; width: 100%;">
          <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;" ;="">
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section up" onclick="easyMoveSection('98','Up');">&nbsp; ↑ &nbsp;</a>
            </div>
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section down" onclick="easyMoveSection('98','Down');">&nbsp; ↓ &nbsp;</a>
              <a href="#" class="custom-edit-add-section" title="Move this section to the right" onclick="easyMoveSection('98','Right');">→&nbsp;</a>
            </div>
          </div>
        </div>
        <div style="display: block; width: 100%;">
          <div style="display: flex; width: 100%; flex-direction: row; justify-content: center;">
            <a href="#" class="custom-edit-button" title="Edit this section" onclick="easyEditSectionContent('98');">Edit</a>
            <a href="#" class="custom-edit-button" title="Update the settings for this section" onclick="easySectionSettings('98','C','1920','Y','none','#FFFFFF','N','N','','0','0','','Grid');">Settings</a>
            <a href="#" class="custom-edit-button" title="Edit the HTML source code for this section" onclick="easyEditSectionSource('98');">Source</a>
            <a href="#" class="custom-edit-button" title="Delete this section" onclick="easyDeleteSection('98');">Delete</a>
          </div>
        </div>

      </div>
    </div>
    <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
      <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionAfterZ98');">&nbsp;+&nbsp;</a>
    </div>
    <div class="center-block widget75 with-border" style="margin-bottom: 20px; max-width: 1920px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <div style="display: block; width: 100%;">
          <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;" ;="">
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section to the left" onclick="easyMoveSection('96','Left');">&nbsp;←</a>
              <a href="#" class="custom-edit-add-section" title="Move this section up" onclick="easyMoveSection('96','Up');">&nbsp; ↑ &nbsp;</a>
            </div>
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section down" onclick="easyMoveSection('96','Down');">&nbsp; ↓ &nbsp;</a>
            </div>
          </div>
        </div>
        <div style="display: block; width: 100%;">
          <div style="display: flex; width: 100%; flex-direction: row; justify-content: center;">
            <a href="#" class="custom-edit-button" title="Update the settings for this section" onclick="easySectionSettings('96','W','1920','Y','none','#FFFFFF','N','N','75','0','400','Regular','Grid');">Settings</a>
            <a href="#" class="custom-edit-button" title="Delete this section" onclick="easyDeleteSection('96');">Delete</a>
          </div>
        </div>
        <h3 style="margin-top: 4px; padding-top: 0;">Annual BSA Registration Renewal Due</h3>
        <div class="center-block">
          <table class="table-condensed">
            <tbody>
            <tr>
              <td class="text-left">
                <span style="font-size: 1.4em;">Bucklin, Emmett</span>
              </td>
              <td class="text-center">
                <span style="font-size: 1.4em;">09/30/26</span>
              </td>
            </tr>
            <tr>
              <td class="text-left">
                <span style="font-size: 1.4em;">Bucklin, Mary</span>
              </td>
              <td class="text-center">
                <span style="font-size: 1.4em;">03/31/27</span>
              </td>
            </tr>
            <tr>
              <td class="text-left">
                <span style="font-size: 1.4em;">Bucklin, Michael</span>
              </td>
              <td class="text-center">
                <span style="font-size: 1.4em;">10/31/26</span>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
      <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionAfterZ96');">&nbsp;+&nbsp;</a>
    </div>
  </div>
</div>
<div class="new-row text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
  <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewRowAfterZ96');">&nbsp;+&nbsp;</a>
</div>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
      <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionBeforeZ83');">&nbsp;+&nbsp;</a>
    </div>
    <div class="center-block  with-border" style="margin-bottom: 20px; max-width: 640px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <div style="display: block; width: 100%;">
          <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;" ;="">
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section up" onclick="easyMoveSection('83','Up');">&nbsp; ↑ &nbsp;</a>
            </div>
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section down" onclick="easyMoveSection('83','Down');">&nbsp; ↓ &nbsp;</a>
            </div>
          </div>
        </div>
        <div style="display: block; width: 100%;">
          <div style="display: flex; width: 100%; flex-direction: row; justify-content: center;">
            <a href="#" class="custom-edit-button" title="Edit this section" onclick="easyEditSectionContent('83');">Edit</a>
            <a href="#" class="custom-edit-button" title="Update the settings for this section" onclick="easySectionSettings('83','C','640','Y','none','#FFFFFF','N','N','','0','0','','Grid');">Settings</a>
            <a href="#" class="custom-edit-button" title="Edit the HTML source code for this section" onclick="easyEditSectionSource('83');">Source</a>
            <a href="#" class="custom-edit-button" title="Delete this section" onclick="easyDeleteSection('83');">Delete</a>
          </div>
        </div>

      </div>
    </div>
    <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
      <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionAfterZ83');">&nbsp;+&nbsp;</a>
    </div>
  </div>
</div>
<div class="new-row text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
  <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewRowAfterZ83');">&nbsp;+&nbsp;</a>
</div>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
      <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionBeforeZ2');">&nbsp;+&nbsp;</a>
    </div>
    <div class="center-block  with-border" style="margin-bottom: 20px; max-width: 640px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <div style="display: block; width: 100%;">
          <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;" ;="">
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section up" onclick="easyMoveSection('2','Up');">&nbsp; ↑ &nbsp;</a>
            </div>
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section down" onclick="easyMoveSection('2','Down');">&nbsp; ↓ &nbsp;</a>
              <a href="#" class="custom-edit-add-section" title="Move this section to the right" onclick="easyMoveSection('2','Right');">→&nbsp;</a>
            </div>
          </div>
        </div>
        <div style="display: block; width: 100%;">
          <div style="display: flex; width: 100%; flex-direction: row; justify-content: center;">
            <a href="#" class="custom-edit-button" title="Edit this section" onclick="easyEditSectionContent('2');">Edit</a>
            <a href="#" class="custom-edit-button" title="Update the settings for this section" onclick="easySectionSettings('2','C','640','P','none','#FFFFFF','N','N','','0','0','','Grid');">Settings</a>
            <a href="#" class="custom-edit-button" title="Edit the HTML source code for this section" onclick="easyEditSectionSource('2');">Source</a>
            <a href="#" class="custom-edit-button" title="Delete this section" onclick="easyDeleteSection('2');">Delete</a>
          </div>
        </div>
        <h2><span style="font-size:16px;"><strong>Adventure. Learning. Service. Fun...Are you ready?</strong></span></h2>

<p>Pack 12 is a Cub Scout pack serving both boys and girls in Kindergarten through 5th grade in Southwest Austin’s Circle C Community. We meet throughout the year at both Clayton and Baldwin Elementary Schools and welcome families from any school or neighborhood.</p>

<p>Through camping, outdoor adventures, community service, derbies, and hands-on activities, Scouts build confidence, character, outdoor skills, and a spirit of service while making friends and having fun along the way.</p>

<p><span style="font-size:16px;"><strong><span style="background-color:#ffff00;">Pack 12 is currently registering both boys and girls from Kindergarten through 5th grade to become Cub Scouts for the&nbsp;2026-27&nbsp;school year!</span></strong></span></p>

<p><u><strong><span style="font-size:18px;"><a href="https://my.scouting.org/VES/OnlineReg/1.0.0/?tu=UF-MB-564paa0012" target="_blank">Apply Online Today</a></span></strong></u></p>

<h2>&nbsp;</h2>

<h2>What is Cub Scouts?&nbsp;</h2>

<div class="youtube-embed-wrapper" style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden;">
<div class="youtube-embed-wrapper" style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden;">
<h2>Come See Why Pack 12 Rocks!</h2>

<p>&nbsp;</p>

<h2>Ready to Join Pack 12<strong>Complete the <a href="https://my.scouting.org/VES/OnlineReg/1.0.0/?tu=UF-MB-564paa0012" target="_blank">online application</a> to join Pack 12.&nbsp;</strong></h2>

<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/De1JbT6Vglg?rel=0" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" width="640"></iframe></p>
</div>

<p>&nbsp;</p>

<h2><strong>&nbsp;</strong></h2>
</div>

<h2>&nbsp;</h2>

<h2><b>Come See Why Pack 12 Rocks!</b></h2>

<p>&nbsp;</p>

<p>Pack 12 provides opportunities for youth development through outdoor activities, community service, family-centered events, and physical fitness. We maintain a fun and safe environment that teaches youth the values and skills they need to grow into tomorrow’s leaders.</p>

<p>We know that parents have many choices for after-school activities and we believe that Scouting offers one of the most exciting and rewarding programs available to your family. <a href="http://my.scouting.org/VES/OnlineReg/1.0.0/?tu=UF-MB-564paa0012" target="_blank">Join us</a> and see why we say that PACK 12 ROCKS!</p>

<p>Cub Scouts participate in both <b>Den meetings</b> (small groups of Scout families&nbsp;in the same grade) and <b>Pack activities</b> (events involving all Scouts families). Throughout the year, Pack 12 also hosts a variety of adventures and events, including:</p>

<ul>
	<li>Fall and Spring Campouts</li>
	<li>Winter Overnight / Lock-In</li>
	<li>Pinewood Derby</li>
	<li>Rocket Derby</li>
	<li>Cub-mobile Derby</li>
	<li>Rain-gutter Regatta</li>
	<li>Service Projects</li>
	<li>Blue &amp; Gold Banquet</li>
	<li>Graduation Ceremony</li>
	<li>Summer Activities&nbsp;</li>
</ul>

<p>&nbsp;</p>

<p><u><strong><span style="font-size:18px;"><a href="https://my.scouting.org/VES/OnlineReg/1.0.0/?tu=UF-MB-564paa0012" target="_blank">Apply Online Today</a></span></strong></u></p>
      </div>
    </div>
    <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
      <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionAfterZ2');">&nbsp;+&nbsp;</a>
    </div>
    <div class="center-block widget5 with-border" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <div style="display: block; width: 100%;">
          <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;" ;="">
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section to the left" onclick="easyMoveSection('63','Left');">&nbsp;←</a>
              <a href="#" class="custom-edit-add-section" title="Move this section up" onclick="easyMoveSection('63','Up');">&nbsp; ↑ &nbsp;</a>
            </div>
            <div style="display: inline-block; padding: 0; margin: 0;">
              <a href="#" class="custom-edit-add-section" title="Move this section down" onclick="easyMoveSection('63','Down');">&nbsp; ↓ &nbsp;</a>
            </div>
          </div>
        </div>
        <div style="display: block; width: 100%;">
          <div style="display: flex; width: 100%; flex-direction: row; justify-content: center;">
            <a href="#" class="custom-edit-button" title="Update the settings for this section" onclick="easySectionSettings('63','W','480','P','none','#FFFFFF','N','N','5','0','400','Regular','Contact Form');">Settings</a>
            <a href="#" class="custom-edit-button" title="Delete this section" onclick="easyDeleteSection('63');">Delete</a>
          </div>
        </div>
        <h3 style="margin-top: 4px; padding-top: 0px;">Contact Us</h3>
        <table class="no-border">
          <tbody>
          <tr>
            <td class="text-left">
              <label class="mobile-control-label">
              <span class="RequiredIndicator">
              *
              </span>
              Your Name
              </label>
            </td>
          </tr>
          <tr>
            <td class="text-left" style="padding-left:20px;">
              <input type="text" class="form-control" id="Contact_Name" name="Contact_Name" tabindex="100" style="width: 95%;" maxlength="100" value="" title="Please enter your full name here">
            </td>
          </tr>
          <tr>
            <td class="text-left">
              <label class="mobile-control-label">
              <span class="RequiredIndicator">
              *
              </span>
              Your Reason For Contacting Us
              </label>
            </td>
          </tr>
          <tr>
            <td class="text-left" style="padding-left:20px;">
              <input type="radio" id="Contact_Reason_ID" name="Contact_Reason_ID" tabindex="200" value="1" checked="">Interested in Joining
              <br>
              <input type="radio" id="Contact_Reason_ID" name="Contact_Reason_ID" tabindex="200" value="2">Scouting Question
              <br>
              <input type="radio" id="Contact_Reason_ID" name="Contact_Reason_ID" tabindex="200" value="4">General Inquiry
              <br>
              <input type="radio" id="Contact_Reason_ID" name="Contact_Reason_ID" tabindex="200" value="3">Other
            </td>
          </tr>
          <tr>
            <td class="text-left">
              <label class="mobile-control-label">
              <span class="RequiredIndicator">
              *
              </span>
              Your Email Address
              </label>
            </td>
          </tr>
          <tr>
            <td class="text-left" style="padding-left:20px;">
              <input type="text" class="form-control" id="Email_Address" name="Email_Address" tabindex="300" style="width: 95%;" maxlength="255" value="" title="Please enter your email address here">
            </td>
          </tr>
          <tr>
            <td class="text-left">
              <label class="mobile-control-label">
              Your Telephone Number (optional)
              </label>
            </td>
          </tr>
          <tr>
            <td class="text-left" style="padding-left:20px;">
              <input type="text" class="form-control" id="Phone_Number" name="Phone_Number" tabindex="400" style="width: 95%;" maxlength="50" value="" title="Please enter your telephone number here">
            </td>
          </tr>
          <tr>
            <td class="text-left">
              <label class="mobile-control-label">
              Comment
              </label>
            </td>
          </tr>
          <tr>
            <td class="text-left" style="padding-left:20px;">
              <textarea class="form-control" style="width: 95%;" rows="5" tabindex="500" id="Comment" name="Comment" wrap="virtual" title="Please provide additional information that applies to the reason you selected"></textarea>
            </td>
          </tr>
          <tr id="recaptchaDiv" style="visibility: collapse">
            <td align="center">
              <b>Click in the box to submit the form</b><br>
              <div id="reCaptchaButton"></div>
              </td>
            </tr>
            </tbody>
          </table>
          <p align="center">
          <button type="button" class="btn btn-sm btn-success" disabled="">Submit</button>
          </p>
        </div>
      </div>
      <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
        <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionAfterZ63');">&nbsp;+&nbsp;</a>
      </div>
    </div>
  </div>
  <div class="new-row text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
    <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewRowAfterZ63');">&nbsp;+&nbsp;</a>
  </div>
  <div class="new-row">
    <div class="container-fluid container-flex">
      <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
        <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionBeforeZ92');">&nbsp;+&nbsp;</a>
      </div>
      <div class="center-block widget60 with-border" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
        <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
          <div style="display: block; width: 100%;">
            <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;" ;="">
              <div style="display: inline-block; padding: 0; margin: 0;">
                <a href="#" class="custom-edit-add-section" title="Move this section up" onclick="easyMoveSection('92','Up');">&nbsp; ↑ &nbsp;</a>
              </div>
              <div style="display: inline-block; padding: 0; margin: 0;">
                <a href="#" class="custom-edit-add-section" title="Move this section down" onclick="easyMoveSection('92','Down');">&nbsp; ↓ &nbsp;</a>
                <a href="#" class="custom-edit-add-section" title="Move this section to the right" onclick="easyMoveSection('92','Right');">→&nbsp;</a>
              </div>
            </div>
          </div>
          <div style="display: block; width: 100%;">
            <div style="display: flex; width: 100%; flex-direction: row; justify-content: center;">
              <a href="#" class="custom-edit-button" title="Update the settings for this section" onclick="easySectionSettings('92','W','400','N','none','#FFFFFF','N','N','60','20','250','Regular','Data Window');">Settings</a>
              <a href="#" class="custom-edit-button" title="Delete this section" onclick="easyDeleteSection('92');">Delete</a>
            </div>
          </div>
          <h3 style="margin-top: 4px; padding-top: 0;">Account Balances<sup><a class="widget-help-link" href="Help.aspx?ID=38" target="twhUserGuide">?&nbsp;</a></sup></h3>
          <div class="scrollingdiv" style="height: 250px;">
            <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
              <thead class="thead-sticky">
              <tr>
                <th>
                Name
                </th>
                <th>
                Balance
                </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-left">
                  Emmett Bucklin
                </td>
                <td class="text-right">
                  -10.00
                </td>
              </tr>
              <tr>
                <td class="text-left">
                  Mary Bucklin
                </td>
                <td class="text-right">
                  -10.00
                </td>
              </tr>
              <tr>
                <td class="text-left">
                  Michael Bucklin
                </td>
                <td class="text-right">
                  -10.00
                </td>
              </tr>
              </tbody>
            </table>
          </div>
          <p align="center">Transfer Between Accounts</p>
        </div>
      </div>
      <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
        <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionAfterZ92');">&nbsp;+&nbsp;</a>
      </div>
      <div class="center-block widget3 with-border" style="margin-bottom: 20px; max-width: 640px; min-width: 200px; ">
        <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
          <div style="display: block; width: 100%;">
            <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;" ;="">
              <div style="display: inline-block; padding: 0; margin: 0;">
                <a href="#" class="custom-edit-add-section" title="Move this section to the left" onclick="easyMoveSection('3','Left');">&nbsp;←</a>
                <a href="#" class="custom-edit-add-section" title="Move this section up" onclick="easyMoveSection('3','Up');">&nbsp; ↑ &nbsp;</a>
              </div>
              <div style="display: inline-block; padding: 0; margin: 0;">
                <a href="#" class="custom-edit-add-section" title="Move this section down" onclick="easyMoveSection('3','Down');">&nbsp; ↓ &nbsp;</a>
                <a href="#" class="custom-edit-add-section" title="Move this section to the right" onclick="easyMoveSection('3','Right');">→&nbsp;</a>
              </div>
            </div>
          </div>
          <div style="display: block; width: 100%;">
            <div style="display: flex; width: 100%; flex-direction: row; justify-content: center;">
              <a href="#" class="custom-edit-button" title="Update the settings for this section" onclick="easySectionSettings('3','W','640','N','none','#FFFFFF','N','N','3','12','200','Regular','Grid');">Settings</a>
              <a href="#" class="custom-edit-button" title="Delete this section" onclick="easyDeleteSection('3');">Delete</a>
            </div>
          </div>
          <div class="center-block">
            <table class="table-condensed">
              <tbody>
              <tr>
                <td class="text-center">
                  <h2>Pack Dues</h2><div class="text-left"><p data-pm-slice="1 1 []">This year, Pack 12 dues are $200 per Scout.</p>

<ul>
	<li>$100 is paid directly by each family.</li>
	<li>The remaining $100 is covered through participation in Pack fundraising opportunities.</li>
	<li>Families who prefer not to fundraise may choose a $100 fundraising opt-out.</li>
</ul>

<p>Pack dues help cover things like awards and advancements, Pack activities and events, supplies, and other costs of providing our Scouting program. We’re happy to provide more details about how dues are used if you have questions.</p>

<p><strong><span style="background-color:#ffff00;">Pack dues will be invoiced to your Pack 12 profile on September 1 and are due by September 30.</span></strong></p>

<ul>
	<li>Multiple fundraising opportunities will be offered throughout the year.</li>
	<li>We never want cost to stand in the way of a child participating in Scouting. Need-based scholarships are available—please reach out privately to a Pack leader to learn more.</li>
</ul></div>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <h2>2026 T-Shirt &amp; Stickers Preorders Are Open!</h2><div class="text-left"><p data-pm-slice="1 1 []">Get your Pack 12 shirt or a Pack 12 sticker for 2026! <strong>Scouts who are new to Pack 12 this year will receive a free T-shirt.</strong>&nbsp; All other Scouts, parents, siblings, and family members can purchase shirts through the preorder.<br>
<br>
<img alt="" height="368" src="https://ogo.blob.core.windows.net/cspack12austin/PK12-ClassB-Shirt-Front-Back_20260829155415556277.jpeg" width="640"></p>

<p>Proceeds from shirt sales help offset Pack 12 costs and support our activities throughout the year.</p>

<p><strong>Orders close September 9!</strong> After orders close, the cost of your shirts will be billed directly to your <strong>Pack 12 profile</strong>.</p>

<p><a href="https://forms.gle/gEqTALpZ2bgPpKUr9"><strong>Preorder your 2026 Pack 12 shirt here!</strong></a></p>

<p>&nbsp;</p></div>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
        <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionAfterZ3');">&nbsp;+&nbsp;</a>
      </div>
      <div class="center-block widget4 with-border" style="margin-bottom: 20px; max-width: 320px; min-width: 200px; background-color:#f0f0f0;padding: 8px;">
        <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
          <div style="display: block; width: 100%;">
            <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;" ;="">
              <div style="display: inline-block; padding: 0; margin: 0;">
                <a href="#" class="custom-edit-add-section" title="Move this section to the left" onclick="easyMoveSection('94','Left');">&nbsp;←</a>
                <a href="#" class="custom-edit-add-section" title="Move this section up" onclick="easyMoveSection('94','Up');">&nbsp; ↑ &nbsp;</a>
              </div>
              <div style="display: inline-block; padding: 0; margin: 0;">
                <a href="#" class="custom-edit-add-section" title="Move this section down" onclick="easyMoveSection('94','Down');">&nbsp; ↓ &nbsp;</a>
              </div>
            </div>
          </div>
          <div style="display: block; width: 100%;">
            <div style="display: flex; width: 100%; flex-direction: row; justify-content: center;">
              <a href="#" class="custom-edit-button" title="Update the settings for this section" onclick="easySectionSettings('94','W','320','N','other','f0f0f0','N','N','4','12','400','Regular','Grid');">Settings</a>
              <a href="#" class="custom-edit-button" title="Delete this section" onclick="easyDeleteSection('94');">Delete</a>
            </div>
          </div>
          <h3 style="margin-top: 4px; padding-top: 0;">Upcoming Events</h3>
          <div class="center-block">
            <table class="table-condensed">
              <tbody>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=555">District Roundtable</a></b><br>(Sep  3 2026  7:00PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=522">Pack Meeting (Open House &amp; Parent Orientation)</a></b><br>(Sep  8 2026  6:30PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=513">Den Leader &amp; Committee Meeting</a></b><br>(Sep 13 2026  5:30PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=571">Webelos Den Meeting</a></b><br>(Sep 20 2026  4:30PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=566">Arrows, BBs &amp; Campfires</a></b><br>(Sep 25 2026  6:00PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=552">Cub Kite and Rocket Festival (Council Event)</a></b><br>(Sep 26 2026  8:30AM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=556">District Roundtable</a></b><br>(Oct  1 2026  7:00PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=582">Scouting 101 &amp; Cub Mobile (Troop Hosted Event)</a></b><br>(Oct 03, 2026)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=514">Den Leader &amp; Committee Meeting</a></b><br>(Oct  4 2026  5:30PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=532">Pack Meeting Setup (Webelos)</a></b><br>(Oct 13 2026  6:10PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=523">Pack Meeting</a></b><br>(Oct 13 2026  6:30PM)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <p align="center"><b><a href="FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=572">Webelos Den Meeting</a></b><br>(Oct 18 2026  4:00PM)</p>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
        <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewSectionAfterZ94');">&nbsp;+&nbsp;</a>
      </div>
    </div>
  </div>
  <div class="new-row text-center with-border" style="padding:0; margin: 0px 0px 20px 0px;border-style:dotted;">
    <a href="#" class="custom-edit-add-section" title="Add a new section here" onclick="easyAddSection('NewRowAfterZ94');">&nbsp;+&nbsp;</a>
  </div>
  <input type="hidden" name="FirstControl" id="FirstControl" value="">
  </form>
  <div style="height: 100px;">&nbsp;</div>


</body></html>