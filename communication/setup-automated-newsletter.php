<html lang="en"><head><meta http-equiv="origin-trial" content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
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
  if (onLoad||thisfield.name=='ENTRY4603711')
{
  var Newsletter_Flag = easyGetFieldValue('ENTRY4603711');
  if (Newsletter_Flag=='Y')
  {
    easySetRequired('ENTRY4603896',true);
    easySetRequired('ENTRY4603986',true);
    easySetRequired('ENTRY4604095',true);
    easySetRequired('ENTRY4604116',true);
    easySetRequired('ENTRY4604397',true);
    easySetRequired('ENTRY4604535',true);
    easySetRequired('ENTRY46042133',true);
    easySetRequired('ENTRY46101132',true);
  }
  else
  {
    easySetRequired('ENTRY4603896',false);
    easySetRequired('ENTRY4603986',false);
    easySetRequired('ENTRY4604095',false);
    easySetRequired('ENTRY4604116',false);
    easySetRequired('ENTRY4604397',false);
    easySetRequired('ENTRY4604535',false);
    easySetRequired('ENTRY46042133',false);
    easySetRequired('ENTRY46101132',false);
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="342">
<input type="hidden" name="Form_ID" id="Form_ID" value="3570">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=342&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=342">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=342">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=342">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=174" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=342">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=342">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=342">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=342">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=342&amp;Stack=1&amp;Application_ID=2840
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
Set Up Automated Newsletter
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="1">
<div class="new-row" id="fs14800">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 800px; min-width: 200px;">
      <h2>
      Automated Electronic Newsletter
      </h2>
    </div>
  </div>
</div>
<div class="new-row" id="fs14801">
  <div class="container-fluid container-flex">
    <ul class="nav nav-tabs">
    <li class="active">
    <a href="#">
    Settings
    </a>
    </li>
    <li>
    <a href="#" onclick="buttonlink(this)" id="savelink3573" name="savelink3573">
    Sections
    </a>
    </li>
    <li>
    <a href="#" onclick="buttonlink(this)" id="savelink3571" name="savelink3571">
    Test
    </a>
    </li>
    </ul>
  </div>
</div>
<div class="new-row" id="fs14784">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 800px; min-width: 200px;">
      <h3>
      Newsletter Settings
      </h3>
      <p>
      Use this page to set up an e-mail newsletter that will be automatically generated and sent to all active members of your group on a regular basis.
      </p>
      <p>
      The newsletter will contain all of the sections selected on the <b><i>Sections</i></b> tab of this page, most of which will be personalized to each recipient.
      </p>
      <p>
      You can send yourself a sample of the newsletter using the <b><i>Test</i></b> tab on this page.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs14782">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY4603711">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4603711" style="visibility: visible">
            *
            </span>
            Automatically Send Newsletter To All Members?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4603711" id="RVALENTRY4603711" value="Y">
            <input type="hidden" name="OLD4603711" id="OLD4603711" value="Y">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="110" checked="" value="Y" id="ENTRY4603711" name="ENTRY4603711" size="1" title="Automatically send a system generated newsletter to all members of the group on a regular basis">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4603896">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4603896" style="visibility: visible;">
            *
            </span>
            Newsletter Frequency
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4603896" id="RVALENTRY4603896" value="Y">
            <input type="hidden" name="OLD4603896" id="OLD4603896" value="Weekly">
            <select id="ENTRY4603896" name="ENTRY4603896" class="form-control" onblur="TestRegExp(this,'','')" tabindex="120" title="How often the newsletter will be automatically generated and sent to the group" size="1">
              <option value=""> </option>
              <option selected="" value="Weekly">Weekly</option>
              <option value="Once Every 2 Weeks">Once Every 2 Weeks</option>
              <option value="Once Every 4 Weeks">Once Every 4 Weeks</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4603986">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4603986" style="visibility: visible;">
            *
            </span>
            Newsletter Day of Week
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4603986" id="RVALENTRY4603986" value="Y">
            <input type="hidden" name="OLD4603986" id="OLD4603986" value="1">
            <span class="text-left" id="SPAN4603986" name="SPAN4603986">
            <span style="white-space: nowrap;"><input type="radio" id="ENTRY4603986" name="ENTRY4603986" tabindex="130" onclick="easyFieldExit(this)" checked="" value="1">Sunday</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY4603986" name="ENTRY4603986" tabindex="130" onclick="easyFieldExit(this)" value="2">Monday</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY4603986" name="ENTRY4603986" tabindex="130" onclick="easyFieldExit(this)" value="3">Tuesday</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY4603986" name="ENTRY4603986" tabindex="130" onclick="easyFieldExit(this)" value="4">Wednesday</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY4603986" name="ENTRY4603986" tabindex="130" onclick="easyFieldExit(this)" value="5">Thursday</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY4603986" name="ENTRY4603986" tabindex="130" onclick="easyFieldExit(this)" value="6">Friday</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY4603986" name="ENTRY4603986" tabindex="130" onclick="easyFieldExit(this)" value="7">Saturday</span>
            </span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4604095">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4604095" style="visibility: visible;">
            *
            </span>
            Newsletter Time of Day
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4604095" id="RVALENTRY4604095" value="Y">
            <input type="hidden" name="OLD4604095" id="OLD4604095" value="6:00 AM">
            <select id="ENTRY4604095" name="ENTRY4604095" class="form-control" onblur="TestRegExp(this,'','')" tabindex="140" title="The approximate time at which the newsletter should be generated and sent.  The actual time could be later in the day but never earlier." size="1">
              <option value=""> </option>
              <option value="12:00 AM">12:00 AM</option>
              <option value="1:00 AM">1:00 AM</option>
              <option value="2:00 AM">2:00 AM</option>
              <option value="3:00 AM">3:00 AM</option>
              <option value="4:00 AM">4:00 AM</option>
              <option value="5:00 AM">5:00 AM</option>
              <option selected="" value="6:00 AM">6:00 AM</option>
              <option value="7:00 AM">7:00 AM</option>
              <option value="8:00 AM">8:00 AM</option>
              <option value="9:00 AM">9:00 AM</option>
              <option value="10:00 AM">10:00 AM</option>
              <option value="11:00 AM">11:00 AM</option>
              <option value="12:00 PM">Noon</option>
              <option value="1:00 PM">1:00 PM</option>
              <option value="2:00 PM">2:00 PM</option>
              <option value="3:00 PM">3:00 PM</option>
              <option value="4:00 PM">4:00 PM</option>
              <option value="5:00 PM">5:00 PM</option>
              <option value="6:00 PM">6:00 PM</option>
              <option value="7:00 PM">7:00 PM</option>
              <option value="8:00 PM">8:00 PM</option>
              <option value="9:00 PM">9:00 PM</option>
              <option value="10:00 PM">10:00 PM</option>
              <option value="11:00 PM">11:00 PM</option>
            </select>
            <span class="entrypostscript">
            Eastern Time Zone
            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <br><b>Newsletters do not always go out at the exact time scheduled. </b> <br>On busy days - especially Sunday - they may  be queued for several hours before going out. Sending out a test newsletter will only delay the process.
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <b>Newsletters will not go out on Monday or Tuesday between 6:00 PM and 11:00 PM eastern time.</b> <br> Newsletters scheduled during that period will begin processing at 11:00 PM that evening.
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY4604116">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4604116" style="visibility: visible;">
            *
            </span>
            Newsletter Start Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4604116" id="RVALENTRY4604116" value="Y">
            <input type="hidden" name="OLD4604116" id="OLD4604116" value="04/09/2023">
            <input type="text" class="form-control" id="ENTRY4604116" name="ENTRY4604116" tabindex="150" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="04/09/2023" title="The first date on which the newsletter should be generated.">&nbsp;<a href="#" tabindex="150" onclick="cal.select(window.easyform.ENTRY4604116,'ENTRY4604116X','MM/dd/yyyy', window.easyform.ENTRY4604116.value); return false;" name="ENTRY4604116X" id="ENTRY4604116X"><img src="images/calendar.gif" name="ENTRY4604116I" id="ENTRY4604116I"></a>
            <span class="entrypostscript">
            The next newsletter will be sent on this exact date
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY6334711">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY6334711" style="visibility: hidden">
            *
            </span>
            Omit the home page banner image from the heading?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY6334711" id="RVALENTRY6334711" value="N">
            <input type="hidden" name="OLD6334711" id="OLD6334711" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="160" value="Y" id="ENTRY6334711" name="ENTRY6334711" size="1" title="Do not include the home banner image at the top of every newsletter">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY46042133">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY46042133" style="visibility: visible">
            *
            </span>
            Sort Announcements By
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY46042133" id="RVALENTRY46042133" value="Y">
            <input type="hidden" name="OLD46042133" id="OLD46042133" value="asc">
            <span class="text-left" id="SPAN46042133" name="SPAN46042133">
            <span style="white-space: nowrap;"><input type="radio" id="ENTRY46042133" name="ENTRY46042133" tabindex="170" onclick="easyFieldExit(this)" checked="" value="asc">Oldest First</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY46042133" name="ENTRY46042133" tabindex="170" onclick="easyFieldExit(this)" value="desc">Newest First</span>
            </span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4604397">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4604397" style="visibility: visible;">
            *
            </span>
            Include upcoming events this far into the future
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4604397" id="RVALENTRY4604397" value="Y">
            <input type="hidden" name="OLD4604397" id="OLD4604397" value="4">
            <select id="ENTRY4604397" name="ENTRY4604397" class="form-control" onblur="TestRegExp(this,'','')" tabindex="180" title="The number of weeks into the future for which the newsletter should show scheduled events" size="1">
              <option value=""> </option>
              <option value="1">1 week</option>
              <option value="2">2 weeks</option>
              <option value="3">3 weeks</option>
              <option selected="" value="4">4 weeks</option>
              <option value="5">5 weeks</option>
              <option value="6">6 weeks</option>
              <option value="7">7 weeks</option>
              <option value="8">8 weeks</option>
              <option value="9">9 weeks</option>
              <option value="10">10 weeks</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY6334811">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY6334811" style="visibility: visible">
            *
            </span>
            Omit the planned activities text from Upcoming Events
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY6334811" id="RVALENTRY6334811" value="Y">
            <input type="hidden" name="OLD6334811" id="OLD6334811" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="190" value="Y" id="ENTRY6334811" name="ENTRY6334811" size="1" title="Do not include the detailed description of each event when listing upcoming events">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY46101132">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY46101132" style="visibility: visible">
            *
            </span>
            Include past transactions going back
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY46101132" id="RVALENTRY46101132" value="Y">
            <input type="hidden" name="OLD46101132" id="OLD46101132" value="6">
            <select id="ENTRY46101132" name="ENTRY46101132" class="form-control" onblur="TestRegExp(this,'','')" tabindex="200" title="The number off weeks in the past to include past transactions" size="1">
              <option value="4">4 weeks</option>
              <option selected="" value="6">6 weeks</option>
              <option value="8">8 weeks</option>
              <option value="12">12 weeks</option>
              <option value="16">16 weeks</option>
              <option value="20">20 weeks</option>
              <option value="24">24 weeks</option>
              <option value="26">26 weeks</option>
              <option value="52">52 weeks</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4604535">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4604535" style="visibility: visible;">
            *
            </span>
            Newsletter Reply To Email Address
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4604535" id="RVALENTRY4604535" value="Y">
            <input type="hidden" name="OLD4604535" id="OLD4604535" value="cspack12rocks@gmail.com">
            <input type="text" class="form-control" id="ENTRY4604535" name="ENTRY4604535" tabindex="210" size="50" onblur="TestRegExp(this,/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_\-\+])*@([-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,'Please enter a valid e-mail address.  Here is an example of a valid e-mail address:  jsmith@earthlink.net')" maxlength="255" value="cspack12rocks@gmail.com" title="This email account will receive the message when a member replies to the automated newsletter.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4604417">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4604417" style="visibility: hidden">
            *
            </span>
            Newsletter Last Sent
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4604417" id="RVALENTRY4604417" value="">
            <input type="hidden" name="OLD4604417" id="OLD4604417" value="08/23/2026 6:05 AM">
            <input type="hidden" name="ENTRY4604417" id="ENTRY4604417" value="08/23/2026 6:05 AM">
            <span class="text-left">
            08/23/2026 6:05 AM
            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs14783">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON22" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="240" id="BUTTON23" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON23">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY4603711">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>