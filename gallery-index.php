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
<body onunload="CloseErrorBox()" onload="easySetFocus();GetDeviceWidth();">
<form enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/FormList.aspx" target="_self" method="post" name="easyform" id="easyform">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="326">
<input type="hidden" name="Form_ID" id="Form_ID" value="184">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=326&amp;Form_ID=184&amp;ID=0&amp;FK=0&amp;Stack=1&amp;Custom_Form_ID=0">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=326&amp;Stack=1','');">View Photos</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=326&amp;Stack=1','');">View Photos</a>
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
  <li class="list-group-item"><a href="javascript:toggleLower('m9');">Photo Gallery <span id="m9-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m9" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=326&amp;Stack=1','');">View Photos</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=328&amp;Stack=1','');">Upload Photos</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=330&amp;Stack=1','');">View &amp; Update All Photos</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=5076&amp;Stack=0','');">Download Photos</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m10');">Membership <span id="m10-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m10" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=2538&amp;Stack=0','');">Quick Dial</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=292&amp;Stack=1','');">Active Members</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=293&amp;Stack=1','');">Inactive Members</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=2711&amp;Stack=0','');">Transfer Scouts</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormRunProcedure.aspx?Menu_Item_ID=5838&amp;Stack=0','');">Merge Duplicate Members</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m11');">Membership Reports <span id="m11-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m11" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:toggleLower('m12');">Membership Directory <span id="m12-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m12" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=369&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=369&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m13');">Leader Directory <span id="m13-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m13" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=370&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=370&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m14');">Contact List <span id="m14-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m14" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=372&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=372&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m15');">Emergency Contact List <span id="m15-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m15" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=373&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=373&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m16');">Den List By Member Name <span id="m16-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m16" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=374&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=374&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m17');">Den List By Den <span id="m17-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m17" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=375&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=375&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m18');">Den List With Parent Info <span id="m18-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m18" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=5729&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=5729&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m19');">Members With Allergies Or Dietary Restrictions <span id="m19-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m19" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=8288&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=8288&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m20');">Medical Form Effective Dates <span id="m20-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m20" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=376&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=376&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m21');">Family Cross Reference <span id="m21-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m21" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=377&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=377&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m22');">Expired Training By Course <span id="m22-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m22" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=379&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=379&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m23');">Expired Training By Person <span id="m23-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m23" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=380&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=380&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m24');">Required Training By Course <span id="m24-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m24" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=381&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=381&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m25');">Required Training By Person <span id="m25-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m25" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=382&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=382&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m26');">Leaders Who Need YPT <span id="m26-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m26" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6149&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6149&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m27');">Upcoming BSA Registration Renewals <span id="m27-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m27" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6891&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=6891&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m28');">BSA Registration <span id="m28-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m28" class="navmenulower3">
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
    <li class="list-group-item"><a href="javascript:toggleLower('m29');">Upload Members <span id="m29-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m29" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadScoutbookPlusRoster.aspx?Menu_Item_ID=8144&amp;Stack=0','');">Upload ScoutbookPlus Roster Report</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadScoutScoutBook.aspx?Menu_Item_ID=1902&amp;Stack=0','');">Upload Scouts From ScoutBook</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadAdultsScoutBook.aspx?Menu_Item_ID=1903&amp;Stack=0','');">Upload Adults From ScoutBook</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('bsaUploadMyScoutingRoster.aspx?Menu_Item_ID=6898&amp;Stack=0','');">Upload Roster From My.Scouting</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:toggleLower('m30');">Update All . . . <span id="m30-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m30" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=6874&amp;Stack=0','');">BSA Registration</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=7171&amp;Stack=0','');">Medical Form Date</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=8292&amp;Stack=1','');">Allergies and Dietary Restrictions</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=303&amp;Stack=1&amp;ReportFormat=XLS','');">Export Roster to Excel</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m31');">Cub Scouts <span id="m31-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m31" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=417&amp;Stack=0','');">Update Cub Scout Age Levels</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=418&amp;Stack=0','');">Adventures &amp; Badges</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=419&amp;Stack=1','');">Special Awards</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=4635&amp;Stack=0','');">Scouting History</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=421&amp;Stack=1','');">Pending Awards</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m32');">Pending Awards Report <span id="m32-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m32" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=2916&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=2916&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:toggleLower('m33');">Pending Award Counts <span id="m33-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m33" class="navmenulower2">
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
  <li class="list-group-item"><a href="javascript:toggleLower('m34');">Resources <span id="m34-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m34" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('bsaShowTroopForms.aspx?Menu_Item_ID=390&amp;Stack=1','');">Forms &amp; Documents</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=391&amp;Stack=1','');">Web Links</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=392&amp;Stack=1','');">Add &amp; Update Forms</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=393&amp;Stack=1','');">Add &amp; Update Form Categories</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=394&amp;Stack=1','');">Add &amp; Update Web Links</a></li>
    </ul>
  </div>
  <li class="list-group-item"><a href="javascript:toggleLower('m35');">Money <span id="m35-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m35" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5781&amp;Stack=0','');">Financial Hub</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=352&amp;Stack=1','');">Individual Transactions</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=353&amp;Stack=1','');">Group Transactions</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('PaymentCollector.aspx?Menu_Item_ID=4995&amp;Stack=0','PaymentCollector');">Payment Collector</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=2600&amp;Stack=0','');">Expense Reimbursement Requests</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m36');">Financial Reports <span id="m36-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m36" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:toggleLower('m37');">Report Account Balances <span id="m37-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m37" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=383&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=383&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=384&amp;Stack=1','');">Report Financial History</a></li>
      <li class="list-group-item"><a href="javascript:toggleLower('m38');">Fund Balances Report <span id="m38-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m38" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=385&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=385&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m39');">Fund Balances By Fiscal Year <span id="m39-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m39" class="navmenulower3">
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
  <li class="list-group-item"><a href="javascript:toggleLower('m40');">Site Configuration <span id="m40-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m40" class="navmenulower">
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
    <li class="list-group-item"><a href="javascript:toggleLower('m41');">Security Configuration <span id="m41-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m41" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1211&amp;Stack=0','');">Disable Menu Items</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1212&amp;Stack=0','');">Override Default Public Access Settings</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=1660&amp;Stack=0','');">Configure Quick Menus</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=386&amp;Stack=1','');">Configure User Roles</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=387&amp;Stack=1','');">Assign Tasks To Roles</a></li>
      <li class="list-group-item"><a href="javascript:toggleLower('m42');">Role Task Report <span id="m42-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m42" class="navmenulower3">
        <ul class="list-group">
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=388&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
        <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=388&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
        </ul>
      </div>
      <li class="list-group-item"><a href="javascript:toggleLower('m43');">Task Role Report <span id="m43-icon" class="fa fa-caret-right pull-right"></span></a></li>
      <div id="m43" class="navmenulower3">
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
  <li class="list-group-item"><a href="javascript:toggleLower('m44');">Administration <span id="m44-icon" class="fa fa-caret-right pull-right"></span></a></li>
  <div id="m44" class="navmenulower">
    <ul class="list-group">
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=344&amp;Stack=1','');">User Roles</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=345&amp;Stack=0','');">Send User IDs &amp; Passwords</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=7230&amp;Stack=0','');">Automatically Send New User IDs</a></li>
    <li class="list-group-item"><a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=346&amp;Stack=1','');">Display User Permissions</a></li>
    <li class="list-group-item"><a href="javascript:toggleLower('m45');">User Permissions Report <span id="m45-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m45" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=347&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=347&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:toggleLower('m46');">Menu Security Report <span id="m46-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m46" class="navmenulower2">
      <ul class="list-group">
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=348&amp;Stack=1&amp;ReportFormat=PDF','');">Print (Export to PDF)</a></li>
      <li class="list-group-item"><a href="javascript:LinkTo('FormReport.aspx?Menu_Item_ID=348&amp;Stack=1&amp;ReportFormat=XLS','');">Open in Excel</a></li>
      </ul>
    </div>
    <li class="list-group-item"><a href="javascript:toggleLower('m47');">User Activity Report <span id="m47-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="m47" class="navmenulower2">
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
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalPageFormat">Format</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalReportingOptions">Reporting Options</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=326">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=326">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=326">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=29" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=326">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=326">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=326">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=326">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=326&amp;Form_ID=184&amp;ID=0&amp;FK=0&amp;Stack=1&amp;Custom_Form_ID=0&amp;Application_ID=2840
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
View Photos
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7052">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP270502" id="OP270502" value="">
    <input type="hidden" name="OP270511" id="OP270511" value="">
    <input type="hidden" name="OP270522" id="OP270522" value="">
    <input type="hidden" name="OP270532" id="OP270532" value="">
    <input type="hidden" name="OP27054143" id="OP27054143" value="">
    <input type="hidden" name="OP27054144" id="OP27054144" value="">
    <input type="hidden" name="OP2705517" id="OP2705517" value="">
    <input type="hidden" name="OP2705616" id="OP2705616" value="">
    <input type="hidden" name="OP2705711" id="OP2705711" value="">
    <input type="hidden" name="OP2705836" id="OP2705836" value="">
    <input type="hidden" name="OP2706072" id="OP2706072" value="">
    <input type="hidden" name="OP2706169" id="OP2706169" value="">
    <input type="hidden" name="OP2706269" id="OP2706269" value="">
  </div>
</div>
<div class="new-row" id="fs7053">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON13" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON14" type="button" name="save continue" title="Show All Photos" value="Show All Photos" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=326&amp;Form_ID=5792&amp;FK=0&amp;Stack=2','');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs757">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 800px; min-width: 200px;">
      <p>
      <b>Click on any of these recent events to see what happened!</b>
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs477">
  <div class="container-fluid container-flex">
    <div class="center-block table-responsive">
      <table class="table-condensed">
        <tbody>
        <tr>
          <td class="text-center " id="TD477ROW0DATA4808">
            <a href="#" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=326&amp;Form_ID=182&amp;ID=567&amp;Stack=2','');">
            <img src="https://ogo.blob.core.windows.net/cspack12austin/Thumbnails/group_20260830213722566414.jpeg" alt="Natural Bridge Caverns (07/18/26)" border="1"><br><span class="bodytext">Natural Bridge Caverns (07/18/26)</span>
            </a>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON13">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>