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
<link rel="stylesheet" type="text/css" href="/css/bootstrap_override_v11.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap_override_colors_Cub_Scouts.css">
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/xg_pWYS8-HRESiV6Rdg4aY_R/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-qWH0xCejb2gc1yqo8ob4TQrvIcQ9XjhOfGKbhFr/+LvFrJdTE3bA+FQP/FLAiQhz"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
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


 if (onLoad||thisfield.name=='ENTRY4148911')
{
  var Flag = easyGetFieldValue('ENTRY4148911');
  easyEnableField('ENTRY597221',(Flag=='Y'),true);
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="1453">
<input type="hidden" name="Form_ID" id="Form_ID" value="2779">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=1453&amp;Stack=0">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=1453">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=1453">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=1453">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=291" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=1453">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=1453">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=1453">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=1453">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=1453&amp;Stack=0&amp;Application_ID=2840
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
Set e-mail parameters
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="1">
<div class="new-row" id="fs12263">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr>
          <td class="bodysubheading text-center" colspan="2">
            These settings affect all e-mail messages sent from this site
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY44130129">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44130129" style="visibility: hidden">
            *
            </span>
            List Recipients In Email Message?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44130129" id="RVALENTRY44130129" value="N">
            <input type="hidden" name="OLD44130129" id="OLD44130129" value="name">
            <span class="text-left" id="SPAN44130129" name="SPAN44130129">
            <input type="radio" id="ENTRY44130129" name="ENTRY44130129" tabindex="110" onclick="easyFieldExit(this)" value="none">Do not show other recipients<br><input type="radio" id="ENTRY44130129" name="ENTRY44130129" tabindex="110" onclick="easyFieldExit(this)" checked="" value="name">List all recipient names<br><input type="radio" id="ENTRY44130129" name="ENTRY44130129" tabindex="110" onclick="easyFieldExit(this)" value="email">List all recipient email addresses
            </span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            &nbsp;
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY4148811">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4148811" style="visibility: visible">
            *
            </span>
            Include REPLY ALL link on all e-mails?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4148811" id="RVALENTRY4148811" value="Y">
            <input type="hidden" name="OLD4148811" id="OLD4148811" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="120" value="Y" id="ENTRY4148811" name="ENTRY4148811" size="1" title="Should the system automatically include a REPLY ALL link in all e-mails?">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4148911">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4148911" style="visibility: visible">
            *
            </span>
            Email FROM to include the group name?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4148911" id="RVALENTRY4148911" value="Y">
            <input type="hidden" name="OLD4148911" id="OLD4148911" value="Y">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" checked="" value="Y" id="ENTRY4148911" name="ENTRY4148911" size="1" title="Should the e-mail FROM name be prefixed with the group name on all e-mails sent from this site?">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY597221" style="visibility: visible; display: table-row;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY597221" style="visibility: hidden">
            *
            </span>
            Group Name for FROM Name in Email
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY597221" id="RVALENTRY597221" value="N">
            <input type="hidden" name="OLD597221" id="OLD597221" value="">
            <input type="text" class="form-control" id="ENTRY597221" name="ENTRY597221" tabindex="140" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The group name to be added to the sender's FROM name when sending an email from this site">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">

            <br><br>
          </td>
        </tr>
        <tr>
          <td class="bodysubheading text-center" colspan="2">
            These settings apply to all messages sent from this site <u>and</u>&nbsp; through the e-mail relay
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY441272">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY441272" style="visibility: hidden">
            *
            </span>
            Send Copy of All Emails To
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY441272" id="RVALENTRY441272" value="N">
            <input type="hidden" name="OLD441272" id="OLD441272" value="0">
            <select id="ENTRY441272" name="ENTRY441272" class="form-control" onblur="TestRegExp(this,'','')" tabindex="150" title="Select a leader to receive a copy of all email messages sent from the site" size="1">
              <option selected="" value="0"> </option>
              <option value="1027">Aarons, Ashley</option>
              <option value="1086">Aarons, Stephen</option>
              <option value="914">Abbott, William</option>
              <option value="1064">Almaraz, Eric</option>
              <option value="668">Alvarez, Jorge</option>
              <option value="714">Alvarez, Kristy</option>
              <option value="1245">Applegate, Chris</option>
              <option value="1202">Babb, Chris</option>
              <option value="578">Bayes, Phillip</option>
              <option value="1621">Benson, Lawrence</option>
              <option value="1169">Bruyn, Meaghan</option>
              <option value="976">Bucklin, Mary</option>
              <option value="977">Bucklin, Michael</option>
              <option value="1610">Bucklin, Michael2</option>
              <option value="1611">Bucklin, Michael3</option>
              <option value="785">Bush, Greg</option>
              <option value="908">Byrd, Amanda</option>
              <option value="786">Byrd, Ryan</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="986">Chidester, Russ</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="978">De Los Santos Tamez, Diego</option>
              <option value="1139">DeMartini, Trevor</option>
              <option value="1246">Dennis, Michael</option>
              <option value="614">Desouky, Noura</option>
              <option value="1268">Diaz, Adam</option>
              <option value="562">Dranguet, Benjamin</option>
              <option value="1281">Duryee, David</option>
              <option value="1203">D'Vincent, Lilli</option>
              <option value="654">Elrakabawy, Erin</option>
              <option value="1609">Espejel, Moshe</option>
              <option value="888">Gaete, Holly</option>
              <option value="893">Galdo, Anne</option>
              <option value="1123">Gibson, Steven</option>
              <option value="832">Goodine, David</option>
              <option value="1204">Gurrola, Jacqueline</option>
              <option value="1232">Gurrola, Matthew</option>
              <option value="1170">Hallar, Ingrid</option>
              <option value="1171">Hanss Blair, Rachel</option>
              <option value="944">Harrison, Abi</option>
              <option value="1084">Hayes, David</option>
              <option value="833">Hickman, Trey</option>
              <option value="1287">Hoy, Nicole</option>
              <option value="1225">Hume, John</option>
              <option value="1205">Idell, Claire</option>
              <option value="1534">Ingrams, Julie and Robert</option>
              <option value="883">Keenan, Danielle</option>
              <option value="882">Keenan, Peter</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
              <option value="1623">Koran, Katie and Kenny</option>
              <option value="933">Lorenzini, Mitch</option>
              <option value="1034">Lynch, Scott</option>
              <option value="688">Mallios, Jason</option>
              <option value="693">Mallios, Jim</option>
              <option value="556">Mallios, Tracy</option>
              <option value="1260">Marquez, David</option>
              <option value="856">Marshall, Angie</option>
              <option value="866">Marshall, Mark</option>
              <option value="1124">McFarland, Ian</option>
              <option value="934">McFarland, Kristin</option>
              <option value="1269">McLeer, Douglas</option>
              <option value="1226">McLeer, Krissy</option>
              <option value="1622">Modglin, Kirk</option>
              <option value="1282">Morris, Lacey</option>
              <option value="1288">Mysyk, Andriy</option>
              <option value="1206">Nair, Jithun</option>
              <option value="1533">Nallathambi, Ravetha</option>
              <option value="789">Nguyen, Phuong</option>
              <option value="1283">Niphadkar, Shraddha</option>
              <option value="1172">North, Allison</option>
              <option value="599">Omran, Ahmed</option>
              <option value="1079">Patel, Amy</option>
              <option value="1173">Patel, Sujan</option>
              <option value="1247">Porter, Koley</option>
              <option value="980">Purohit, Vijendra</option>
              <option value="1207">Rios, Amanda</option>
              <option value="745">Robinson, Nick</option>
              <option value="935">Saldanha, Mithila</option>
              <option value="622">Shuman, Frank</option>
              <option value="649">Shuman, Natalie</option>
              <option value="899">Slonsky, Henry</option>
              <option value="591">Slonsky, Yasemin</option>
              <option value="1208">Staffield, Brittany</option>
              <option value="616">Stappenbeck, Steve</option>
              <option value="1263">Stubblefield, Joel</option>
              <option value="1066">Susannah Benton, Susannah</option>
              <option value="995">Swantner, Albert</option>
              <option value="996">Swenson, Lindsey</option>
              <option value="1089">Swenson, Matt</option>
              <option value="1085">Tabie, Mike</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1209">Whittington, Aric</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY441282">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY441282" style="visibility: hidden">
            *
            </span>

            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY441282" id="RVALENTRY441282" value="N">
            <input type="hidden" name="OLD441282" id="OLD441282" value="0">
            <select id="ENTRY441282" name="ENTRY441282" class="form-control" onblur="TestRegExp(this,'','')" tabindex="160" title="Select a second leader to receive a copy of all email messages sent from the site" size="1">
              <option selected="" value="0"> </option>
              <option value="1027">Aarons, Ashley</option>
              <option value="1086">Aarons, Stephen</option>
              <option value="914">Abbott, William</option>
              <option value="1064">Almaraz, Eric</option>
              <option value="668">Alvarez, Jorge</option>
              <option value="714">Alvarez, Kristy</option>
              <option value="1245">Applegate, Chris</option>
              <option value="1202">Babb, Chris</option>
              <option value="578">Bayes, Phillip</option>
              <option value="1621">Benson, Lawrence</option>
              <option value="1169">Bruyn, Meaghan</option>
              <option value="976">Bucklin, Mary</option>
              <option value="977">Bucklin, Michael</option>
              <option value="1610">Bucklin, Michael2</option>
              <option value="1611">Bucklin, Michael3</option>
              <option value="785">Bush, Greg</option>
              <option value="908">Byrd, Amanda</option>
              <option value="786">Byrd, Ryan</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="986">Chidester, Russ</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="978">De Los Santos Tamez, Diego</option>
              <option value="1139">DeMartini, Trevor</option>
              <option value="1246">Dennis, Michael</option>
              <option value="614">Desouky, Noura</option>
              <option value="1268">Diaz, Adam</option>
              <option value="562">Dranguet, Benjamin</option>
              <option value="1281">Duryee, David</option>
              <option value="1203">D'Vincent, Lilli</option>
              <option value="654">Elrakabawy, Erin</option>
              <option value="1609">Espejel, Moshe</option>
              <option value="888">Gaete, Holly</option>
              <option value="893">Galdo, Anne</option>
              <option value="1123">Gibson, Steven</option>
              <option value="832">Goodine, David</option>
              <option value="1204">Gurrola, Jacqueline</option>
              <option value="1232">Gurrola, Matthew</option>
              <option value="1170">Hallar, Ingrid</option>
              <option value="1171">Hanss Blair, Rachel</option>
              <option value="944">Harrison, Abi</option>
              <option value="1084">Hayes, David</option>
              <option value="833">Hickman, Trey</option>
              <option value="1287">Hoy, Nicole</option>
              <option value="1225">Hume, John</option>
              <option value="1205">Idell, Claire</option>
              <option value="1534">Ingrams, Julie and Robert</option>
              <option value="883">Keenan, Danielle</option>
              <option value="882">Keenan, Peter</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
              <option value="1623">Koran, Katie and Kenny</option>
              <option value="933">Lorenzini, Mitch</option>
              <option value="1034">Lynch, Scott</option>
              <option value="688">Mallios, Jason</option>
              <option value="693">Mallios, Jim</option>
              <option value="556">Mallios, Tracy</option>
              <option value="1260">Marquez, David</option>
              <option value="856">Marshall, Angie</option>
              <option value="866">Marshall, Mark</option>
              <option value="1124">McFarland, Ian</option>
              <option value="934">McFarland, Kristin</option>
              <option value="1269">McLeer, Douglas</option>
              <option value="1226">McLeer, Krissy</option>
              <option value="1622">Modglin, Kirk</option>
              <option value="1282">Morris, Lacey</option>
              <option value="1288">Mysyk, Andriy</option>
              <option value="1206">Nair, Jithun</option>
              <option value="1533">Nallathambi, Ravetha</option>
              <option value="789">Nguyen, Phuong</option>
              <option value="1283">Niphadkar, Shraddha</option>
              <option value="1172">North, Allison</option>
              <option value="599">Omran, Ahmed</option>
              <option value="1079">Patel, Amy</option>
              <option value="1173">Patel, Sujan</option>
              <option value="1247">Porter, Koley</option>
              <option value="980">Purohit, Vijendra</option>
              <option value="1207">Rios, Amanda</option>
              <option value="745">Robinson, Nick</option>
              <option value="935">Saldanha, Mithila</option>
              <option value="622">Shuman, Frank</option>
              <option value="649">Shuman, Natalie</option>
              <option value="899">Slonsky, Henry</option>
              <option value="591">Slonsky, Yasemin</option>
              <option value="1208">Staffield, Brittany</option>
              <option value="616">Stappenbeck, Steve</option>
              <option value="1263">Stubblefield, Joel</option>
              <option value="1066">Susannah Benton, Susannah</option>
              <option value="995">Swantner, Albert</option>
              <option value="996">Swenson, Lindsey</option>
              <option value="1089">Swenson, Matt</option>
              <option value="1085">Tabie, Mike</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1209">Whittington, Aric</option>
            </select>
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
        <tr>
          <td class="bodysubheading text-center" colspan="2">
            E-Mail Relay
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <b>The following parameters control the ability to send messages to members of this group from an external email client.</b>
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <b>This can only be used to send messages from email addresses that are registered with the group.</b>
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY4524511">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4524511" style="visibility: hidden">
            *
            </span>
            Email Relay Enabled To Send To All Active Members?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4524511" id="RVALENTRY4524511" value="N">
            <input type="hidden" name="OLD4524511" id="OLD4524511" value="Y">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="170" checked="" value="Y" id="ENTRY4524511" name="ENTRY4524511" size="1" title="Should the system allow external users to send e-mail messages to all active members of this group?">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4524669">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4524669" style="visibility: hidden">
            *
            </span>
            Email Relay Address To Send To All Active Members
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4524669" id="RVALENTRY4524669" value="">
            <input type="hidden" name="OLD4524669" id="OLD4524669" value="&lt;b&gt;Pack12Austin@twhcs.email&lt;/b&gt;">
            <input type="hidden" name="ENTRY4524669" id="ENTRY4524669" value="&lt;b&gt;Pack12Austin@twhcs.email&lt;/b&gt;">
            <span class="text-left">
            <b>Pack12Austin@twhcs.email</b>
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY45247100">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY45247100" style="visibility: hidden">
            *
            </span>
            For This Relay Address, Send Messages To
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY45247100" id="RVALENTRY45247100" value="N">
            <input type="hidden" name="OLD45247100" id="OLD45247100" value="email">
            <span class="text-left" id="SPAN45247100" name="SPAN45247100">
            <span style="white-space: nowrap;"><input type="radio" id="ENTRY45247100" name="ENTRY45247100" tabindex="190" onclick="easyFieldExit(this)" value="both">Email and SMS</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY45247100" name="ENTRY45247100" tabindex="190" onclick="easyFieldExit(this)" checked="" value="email">Email Only</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY45247100" name="ENTRY45247100" tabindex="190" onclick="easyFieldExit(this)" value="sms">SMS Only</span>
            </span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            &nbsp;
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY4524911">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4524911" style="visibility: hidden">
            *
            </span>
            Allow Reply All To All Relayed Email?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4524911" id="RVALENTRY4524911" value="N">
            <input type="hidden" name="OLD4524911" id="OLD4524911" value="Y">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="200" checked="" value="Y" id="ENTRY4524911" name="ENTRY4524911" size="1" title="Should the recipient of a relayed email message be able to REPLY ALL">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            &nbsp;
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY45251128">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY45251128" style="visibility: hidden">
            *
            </span>
            List Recipients On All Relayed Email?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY45251128" id="RVALENTRY45251128" value="N">
            <input type="hidden" name="OLD45251128" id="OLD45251128" value="name">
            <span class="text-left" id="SPAN45251128" name="SPAN45251128">
            <input type="radio" id="ENTRY45251128" name="ENTRY45251128" tabindex="210" onclick="easyFieldExit(this)" value="none">Do not show other recipients<br><input type="radio" id="ENTRY45251128" name="ENTRY45251128" tabindex="210" onclick="easyFieldExit(this)" value="relay">List relay address(es)<br><input type="radio" id="ENTRY45251128" name="ENTRY45251128" tabindex="210" onclick="easyFieldExit(this)" checked="" value="name">List all recipient names<br><input type="radio" id="ENTRY45251128" name="ENTRY45251128" tabindex="210" onclick="easyFieldExit(this)" value="email">List all recipient email addresses
            </span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs12264">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON20" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="230" id="BUTTON21" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON21">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY44130129">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>