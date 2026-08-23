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
  if (onLoad||thisfield.name=='ENTRY435222')
{
    var selectedvalue = easyGetFieldValue('ENTRY435222');
    if (selectedvalue == '0')
    {
        ClearRadioButtons();
    }
    else
    {
        try
        {
        GetEventDatePatterns(selectedvalue);
        }
        catch(err)
        {
        }
    }
}




    }
  function ClearRadioButtons()
{
  var RadioID = 'ENTRY43524126';
  var SpanID = RadioID.replace("ENTRY","SPAN");
  var SpanObj = document.getElementById(SpanID);
  SpanObj.innerHTML = '<input type=radio id="' + RadioID + '" name="' + RadioID + '" tabindex=300 onclick="easyFieldExit(this)"  value="XXX">Please select an event to see the available choices';
}

function GetEventDatePatterns(EventID)
{
  var pl = new SOAPClientParameters();
  pl.add("Event_ID",EventID);
  pl.add("User_Database_ID",2840);

  SOAPClient.invoke("EasyWebService.asmx","GetEventDatePatterns",pl,true,ReturnEventDatePatterns);
  return;
}

function ReturnEventDatePatterns(val)
{

  var RadioID = 'ENTRY43524126';
  var SpanID = RadioID.replace("ENTRY","SPAN");
  var SpanObj = document.getElementById(SpanID);

  var RadioHTML = '';


    for (i = 0; i < val.length; i++) {
      if (RadioHTML != '')
      {
        RadioHTML = RadioHTML + '<BR>'
      }
      RadioHTML = RadioHTML + '<input type=radio id="' + RadioID + '" name="' + RadioID + '" tabindex=300 onclick="easyFieldExit(this)"  value="' + val[i].OptionValue +'">' + val[i].OptionName;

    }

  SpanObj.innerHTML = RadioHTML;

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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="1818">
<input type="hidden" name="Form_ID" id="Form_ID" value="3105">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=1818&amp;Stack=0">
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=1','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=1818">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=1818">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=1818">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=303" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=1818">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=1818">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=1818">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=1818">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=1818&amp;Stack=0&amp;Application_ID=2840
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
Copy Monthly Event
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs13359">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr>
          <td class="bodysubheading text-center" colspan="2">
            Copy Monthly Event
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            Begin by selecting the event you wish to copy.  This should be the event of this type that is farthest in the future on your current calendar.
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY435222">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY435222" style="visibility: visible">
            *
            </span>
            Copy This Event
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY435222" id="RVALENTRY435222" value="Y">
            <input type="hidden" name="OLD435222" id="OLD435222" value="0">
            <select id="ENTRY435222" name="ENTRY435222" class="form-control" onblur="TestRegExp(this,'','')" tabindex="110" title="The event to be copied forward in time" size="1" style="background-color: rgb(255, 170, 170);">
              <option selected="" value="0"> </option>
              <option value="541">Graduation (05/22/27)</option>
              <option value="540">Rocket Derby (05/08/27)</option>
              <option value="563">District Roundtable (05/06/27)</option>
              <option value="530">Pack Meeting (Rocket Building!) (05/04/27)</option>
              <option value="539">Pack Meeting Setup (Webelos) (05/04/27)</option>
              <option value="521">Den Leader &amp; Committee Meeting (05/02/27)</option>
              <option value="542">Spring Campout (04/16/27)</option>
              <option value="578">Den Meeting (04/11/27)</option>
              <option value="529">Pack Meeting (04/06/27)</option>
              <option value="538">Pack Meeting Setup (Wolves) (04/06/27)</option>
              <option value="520">Den Leader &amp; Committee Meeting (04/04/27)</option>
              <option value="562">District Roundtable (04/01/27)</option>
              <option value="577">Webelos Den Meeting (03/14/27)</option>
              <option value="528">Pack Meeting (03/09/27)</option>
              <option value="537">Pack Meeting Setup (Bears) (03/09/27)</option>
              <option value="519">Den Leader &amp; Committee Meeting (03/07/27)</option>
              <option value="543">Cubmaster Campout &amp; Crossover (03/05/27)</option>
              <option value="561">District Roundtable (03/04/27)</option>
              <option value="544">Pinewood Derby (02/20/27)</option>
              <option value="546">Pinewood Derby Inspections (Option 2) (02/18/27)</option>
              <option value="545">Pinewood Derby Inspections (Option 1) (02/16/27)</option>
              <option value="527">Pack Meeting (02/09/27)</option>
              <option value="536">Pack Meeting Setup (Webelos) (02/09/27)</option>
              <option value="518">Den Leader &amp; Committee Meeting (02/07/27)</option>
              <option value="576">Webelos Den Meeting (02/07/27)</option>
              <option value="560">District Roundtable (02/04/27)</option>
              <option value="547">Winter Overnight (01/23/27)</option>
              <option value="553">Cub Winter Festival (Council Event) (01/16/27)</option>
              <option value="548">USS Lexington (Overnight) (01/16/27)</option>
              <option value="526">Pack Meeting (01/12/27)</option>
              <option value="535">Pack Meeting Setup (AOLs) (01/12/27)</option>
              <option value="517">Den Leader &amp; Committee Meeting (01/10/27)</option>
              <option value="559">District Roundtable (01/07/27)</option>
              <option value="574">Webelos Den Meeting (12/13/26)</option>
              <option value="525">Pack Meeting (12/08/26)</option>
              <option value="534">Pack Meeting Setup (Wolves) (12/08/26)</option>
              <option value="516">Den Leader &amp; Committee Meeting (12/06/26)</option>
              <option value="558">District Roundtable (12/03/26)</option>
              <option value="549">Fall Campout (11/13/26)</option>
              <option value="524">Pack Meeting (11/10/26)</option>
              <option value="533">Pack Meeting Setup (Bears) (11/10/26)</option>
              <option value="573">Webelos Den Meeting (11/08/26)</option>
              <option value="550">Into the Woods Cub Scout Adventure Weekend (Council Event) (11/06/26)</option>
              <option value="557">District Roundtable (11/05/26)</option>
              <option value="515">Den Leader &amp; Committee Meeting (11/01/26)</option>
              <option value="572">Webelos Den Meeting (10/18/26)</option>
              <option value="523">Pack Meeting (10/13/26)</option>
              <option value="532">Pack Meeting Setup (Webelos) (10/13/26)</option>
              <option value="514">Den Leader &amp; Committee Meeting (10/04/26)</option>
              <option value="582">Scouting 101 &amp; Cub Mobile (Troop Hosted Event) (10/03/26)</option>
              <option value="556">District Roundtable (10/01/26)</option>
              <option value="552">Cub Kite and Rocket Festival (Council Event) (09/26/26)</option>
              <option value="566">Cub World (09/25/26)</option>
              <option value="571">Webelos Den Meeting (09/20/26)</option>
              <option value="551">STEM Adventure Weekend (Council Event) (09/18/26)</option>
              <option value="513">Den Leader &amp; Committee Meeting (09/13/26)</option>
              <option value="522">Pack Meeting (Open House &amp; Parent Orientation) (09/08/26)</option>
              <option value="531">Pack Meeting Setup (AOLs) (09/08/26)</option>
              <option value="555">District Roundtable (09/03/26)</option>
              <option value="581">Welcome Back, Pack Picnic (08/29/26)</option>
              <option value="579">Join Scouting Night (08/25/26)</option>
              <option value="580">Webelos and AOL Swim Adventure (08/22/26)</option>
              <option value="512">Den Leader &amp; Committee Meeting (08/09/26)</option>
              <option value="554">District Roundtable (08/06/26)</option>
              <option value="569">Arrows Swim Test (07/26/26)</option>
              <option value="567">Natural Bridge Caverns (07/18/26)</option>
              <option value="568">Arrows Swim Test (07/10/26)</option>
              <option value="511">Circle C 4th of July Parade (07/04/26)</option>
              <option value="565">District Roundtable (07/02/26)</option>
              <option value="506">Cidercade Hangout (06/20/26)</option>
              <option value="564">District Roundtable (06/04/26)</option>
              <option value="500">Raingutter Regatta (05/30/26)</option>
              <option value="507">Ceremony of Colors at Baldwin Elementary Graduation (05/28/26)</option>
              <option value="383">Pack 12 Graduation (05/16/26)</option>
              <option value="382">Pack Meeting (05/12/26)</option>
              <option value="381">Requirement Deadline for Graduation (05/10/26)</option>
              <option value="380">Rocket Derby (05/09/26)</option>
              <option value="448">Thunderbird District Roundtable (05/07/26)</option>
              <option value="509">Rocket Derby Inspections and Build (Session 2) (05/07/26)</option>
              <option value="508">Rocket Derby Inspections and Build (Session 1) (05/06/26)</option>
              <option value="379">Den Leader &amp; Committee Meeting (05/03/26)</option>
              <option value="428">Lion Den #6 &amp; Den #7 Meeting (05/03/26)</option>
              <option value="505">Webelos hike (05/02/26)</option>
              <option value="401">Bears Den Meeting (04/26/26)</option>
              <option value="433">Tigers Den #9 &amp; #11 Meeting (04/26/26)</option>
              <option value="497">Den 10 Meeting (04/26/26)</option>
              <option value="504">Optional - Service Event (04/25/26)</option>
              <option value="502">Spring Campout - Alternative Event - Please RSVP (04/18/26)</option>
              <option value="503">Messengers Of Peace Service Project (04/18/26)</option>
              <option value="378">RESCHEDULED TO FALL -- Spring Campout (04/17/26)</option>
              <option value="377">Pack Meeting (04/14/26)</option>
              <option value="376">Den Leader &amp; Committee Meeting (04/12/26)</option>
              <option value="498">Clayton Carnival Recruitment Booth (04/11/26)</option>
              <option value="447">Thunderbird District Roundtable (04/02/26)</option>
              <option value="400">Bears Den Meeting (03/29/26)</option>
              <option value="432">Tigers Den #9 &amp; #11 Meeting (03/29/26)</option>
              <option value="427">Lion Den #6 Meeting (03/29/26)</option>
              <option value="495">Den 10 Meeting (03/29/26)</option>
              <option value="375">Pack Meeting (03/24/26)</option>
              <option value="494">Webelos hike (03/22/26)</option>
              <option value="493">Lions Den #7 Meeting (03/15/26)</option>
              <option value="374">Den Leader &amp; Committee Meeting (03/08/26)</option>
              <option value="492">Den 10 Meeting (03/08/26)</option>
              <option value="373">AOL Crossover Ceremony (03/07/26)</option>
              <option value="372">CANCELLED - Cubmaster Campout (03/06/26)</option>
              <option value="446">Thunderbird District Roundtable (03/05/26)</option>
              <option value="431">Tigers Den #9 &amp; #11 Meeting (02/22/26)</option>
              <option value="454">Den 12 (Bears) Meeting (02/22/26)</option>
              <option value="399">Den 2 (Bears) Meeting (02/22/26)</option>
              <option value="438">Den 1 Meeting (02/21/26)</option>
              <option value="489">Mighty Ducks - Bonus Cycling Event (02/21/26)</option>
              <option value="426">Lion Den #6 &amp; # 7 Meeting (02/15/26)</option>
              <option value="487">Den 10 Meeting (02/15/26)</option>
              <option value="490">Mighty Ducks - Make-up Requirements Meeting (02/08/26)</option>
              <option value="371">Pinewood Derby (02/07/26)</option>
              <option value="486">Weigh-in day for Pinewood Derby (02/05/26)</option>
              <option value="485">Weigh-in day for Pinewood Derby (02/04/26)</option>
              <option value="369">Winter Overnight at San Antonio Zoo (01/31/26)</option>
              <option value="488">Block Cutting for Pinewood Derby (01/22/26)</option>
              <option value="416">Den5 Den Meeting (01/21/26)</option>
              <option value="484">Block Cutting for Pinewood Derby (01/19/26)</option>
              <option value="453">Den 12 (Bears) Meeting (01/18/26)</option>
              <option value="483">Block Cutting for Pinewood Derby (01/18/26)</option>
              <option value="482">Block Cutting for Pinewood Derby (01/17/26)</option>
              <option value="368">Pack Meeting (01/13/26)</option>
              <option value="367">Den Leader &amp; Committee Meeting (01/11/26)</option>
              <option value="398">Den 2 (Bears) Meeting (01/11/26)</option>
              <option value="430">Tigers Den #9 &amp; #11 Meeting (01/11/26)</option>
              <option value="437">Den 1 Meeting (01/10/26)</option>
              <option value="478">BALOO Training (01/09/26)</option>
              <option value="481">Meet an elected official (01/06/26)</option>
              <option value="479">Lion's Den #6 &amp; #7 Card Delivery/Resident Holiday Party (12/23/25)</option>
              <option value="452">Den 12 (Bears) Meeting (12/14/25)</option>
              <option value="397">Den 2 (Bears) Meeting (12/14/25)</option>
              <option value="423">Lions Den #6 &amp; #7 Holiday Card Making Workshop (12/14/25)</option>
              <option value="408">Den 3 - December Den Meeting (12/14/25)</option>
              <option value="480">Webolos Den Meeting (12/14/25)</option>
              <option value="476">Den 10 Meeting (12/14/25)</option>
              <option value="429">Tigers Den #9 &amp; #11 @ Radha Rani Hindu Temple (12/13/25)</option>
              <option value="366">Pack Meeting (12/09/25)</option>
              <option value="477">Troop 448 Meeting with AOL Activities (12/08/25)</option>
              <option value="475">Troop 448 troop meeting (12/08/25)</option>
              <option value="365">Den Leader &amp; Committee Meeting (12/07/25)</option>
              <option value="409">Troop 19 Campout - Pedernales Falls (12/06/25)</option>
              <option value="471">Troop 4443 - Edwards Aquifer Education Center (12/06/25)</option>
              <option value="443">Thunderbird District Roundtable (12/04/25)</option>
              <option value="473">Den 1 Meeting (11/30/25)</option>
              <option value="414">Den5 Den Meeting (11/19/25)</option>
              <option value="451">Den 12 (Bears) Meeting (11/16/25)</option>
              <option value="407">Den 3 - November Den Meeting - Group Bike Ride (11/16/25)</option>
              <option value="465">Touch An Ambulance Event/First Aide with Ally Medical (11/16/25)</option>
              <option value="462">Lion's Service Project Art on Display @ Austin Studio Tour (11/15/25)</option>
              <option value="363">Pack Meeting (11/11/25)</option>
              <option value="472">Veterans Day Flag Ceremony at Clayton Elementary (11/11/25)</option>
              <option value="469">Veterans Day Flag Ceremony at Baldwin Elementary (11/11/25)</option>
              <option value="468">(AT FALL CAMPOUT) Lions: Backyard Bass Fishing &amp; Angler Ed with Tx Wildlife (11/08/25)</option>
              <option value="466">(AT FALL CAMPOUT)Lions:  Skins &amp; Skulls program with Texas Wildlife (11/08/25)</option>
              <option value="467">(AT FALL CAMPOUT) Tigers: Skins &amp; Skulls program with Texas Wildlife (11/08/25)</option>
              <option value="364">Fall Campout (11/07/25)</option>
              <option value="442">Thunderbird District Roundtable (11/06/25)</option>
              <option value="362">Den Leader &amp; Committee Meeting (11/02/25)</option>
              <option value="470">Troop 4443 Halloween Party (11/02/25)</option>
              <option value="460">Tigers Den #9 &amp; #11 Meeting/Fire Station Tour (11/02/25)</option>
              <option value="422">Lions Den #6, #7, Fire Station Tour/Den Meeting (11/02/25)</option>
              <option value="464">Den 10 Meeting (11/02/25)</option>
              <option value="435">Den 1 Meeting (11/01/25)</option>
              <option value="406">Den 3 - October Den Meeting (Time changed to 1:30PM) (10/26/25)</option>
              <option value="411">Troop 19 Halloween Party (10/26/25)</option>
              <option value="458">Baldwin Campus Cleanup Service Project (10/26/25)</option>
              <option value="384">Scouting 101 (formerly Webelos Woods) (10/25/25)</option>
              <option value="413">Den5 Den Meeting (10/22/25)</option>
              <option value="461">Lions Den #6 &amp; #7 Service Project ART DUE 10/20-10/22 (10/20/25)</option>
              <option value="410">Troop 4443 Ice Cream Social (10/19/25)</option>
              <option value="463">Wolfs Den Meeting #10 Fishing (10/19/25)</option>
              <option value="361">Pack Meeting (10/14/25)</option>
              <option value="450">Den 12 Bears Meeting (10/12/25)</option>
              <option value="395">Den 2 Bears Meeting (10/12/25)</option>
              <option value="449">Den 8 Webelos meeting (10/12/25)</option>
              <option value="459">Lion's Den #6 &amp; #7 Art Supply Pickup (10/12/25)</option>
              <option value="360">Den Leader &amp; Committee Meeting (10/05/25)</option>
              <option value="434">Den 1 Meeting (10/05/25)</option>
              <option value="421">Tigers Den #9 Meeting (10/05/25)</option>
              <option value="420">Lion Den #6 &amp; #7 Meeting (10/05/25)</option>
              <option value="441">Thunderbird District Roundtable (10/02/25)</option>
              <option value="359">Registration Dues Deadline (09/30/25)</option>
              <option value="394">Den 2 Meeting (09/21/25)</option>
              <option value="412">Den5 Den Meeting (09/17/25)</option>
              <option value="405">Den 3 - September Den Meeting (09/14/25)</option>
              <option value="358">New Scout Family Meeting (09/14/25)</option>
              <option value="404">Den 1 Meeting (09/14/25)</option>
              <option value="393">Den 10 Meeting (09/14/25)</option>
              <option value="357">Pack Meeting / Open House (09/09/25)</option>
              <option value="355">Den Leader &amp; Committee Meeting (09/07/25)</option>
              <option value="403">Webolos Den 8 Meeting (09/07/25)</option>
              <option value="354">Fall Recruitment - Clayton (09/04/25)</option>
              <option value="353">Fall Recruitment - Baldwin (09/02/25)</option>
              <option value="352">Cubmobile Derby (08/16/25)</option>
              <option value="392">Baldwin Meet the Teacher Night (08/15/25)</option>
              <option value="390">Clayton Meet the Teacher Night (08/14/25)</option>
              <option value="356">Den Leader &amp; Committee Meeting (08/10/25)</option>
              <option value="388">Popcorn Unit Booth Selections (07/24/25)</option>
              <option value="387">Popcorn Unit Booth Selections (07/23/25)</option>
              <option value="386">Popcorn Unit Booth Selections Begin (07/22/25)</option>
              <option value="351">Innerspace Caverns (07/19/25)</option>
              <option value="350">Independence Day Parade (CANCELLED) (07/04/25)</option>
              <option value="349">Raingutter Regatta (06/07/25)</option>
              <option value="346">Ceremony of Colors at Baldwin Elementary Graduation (05/29/25)</option>
              <option value="257">Pack 12 Graduation (05/17/25)</option>
              <option value="233">Pack Meeting (05/13/25)</option>
              <option value="342">Advancement Cut Off for Graduation (05/11/25)</option>
              <option value="256">Rocket Derby (05/10/25)</option>
              <option value="348">Rocket Derby Inspections, Day 2 (05/08/25)</option>
              <option value="347">Rocket Derby Inspections, Day 1 (05/07/25)</option>
              <option value="345">Meeting the Sheriff (05/06/25)</option>
              <option value="249">Committee &amp; Leader Meeting (05/04/25)</option>
              <option value="298">Wolves Den 2 Meeting (04/27/25)</option>
              <option value="320">Lions Den 9 Meeting (04/27/25)</option>
              <option value="333">Den 3 Meeting (04/27/25)</option>
              <option value="313">Tigers Den 10 Meeting (04/27/25)</option>
              <option value="281">Den 1 Meeting (04/22/25)</option>
              <option value="254">Spring Campout (04/11/25)</option>
              <option value="232">Pack Meeting (04/08/25)</option>
              <option value="248">Committee &amp; Leader Meeting (04/06/25)</option>
              <option value="340">Clean-up at Clayton and Community Center (04/06/25)</option>
              <option value="341">Clayton's Spring Carnival Recruitment Booth (04/05/25)</option>
              <option value="344">Den Meeting (03/30/25)</option>
              <option value="297">Wolves Den 2 Meeting (03/30/25)</option>
              <option value="332">Den 3 Meeting (03/30/25)</option>
              <option value="319">Lions Den 9 Meeting (03/30/25)</option>
              <option value="307">Tigers Den 10 Meeting - Rolling Tigers (03/30/25)</option>
              <option value="280">Den 1 Meeting (03/25/25)</option>
              <option value="231">Pack Meeting (03/11/25)</option>
              <option value="247">Committee &amp; Leader Meeting (03/09/25)</option>
              <option value="338">Den 8 meeting (03/09/25)</option>
              <option value="343">Baldwin Campus Beautification Day (03/08/25)</option>
              <option value="296">Wolves Den 2 Meeting (03/02/25)</option>
              <option value="306">Tigers Den 10 Meeting - Tiger Tag (03/02/25)</option>
              <option value="339">Cubmaster Campout (03/01/25)</option>
              <option value="337">Crossover Ceremony (02/22/25)</option>
              <option value="253">Crossover Campout (NOW CEREMONY ONLY) (02/22/25)</option>
              <option value="311">Wolves Den 2 Meeting (02/16/25)</option>
              <option value="321">Lions Den 9 Meeting (02/16/25)</option>
              <option value="331">Den 3 Meeting (02/16/25)</option>
              <option value="252">Pinewood Derby (02/08/25)</option>
              <option value="335">Pinewood Derby Weigh-In (02/05/25)</option>
              <option value="334">Pinewood Derby Weigh-In (02/04/25)</option>
              <option value="246">VIRTUAL - Committee &amp; Leader Meeting (02/02/25)</option>
              <option value="255">Sea World Winter Overnight (01/25/25)</option>
              <option value="295">Wolves Den 2 Meeting (01/19/25)</option>
              <option value="317">Lions Den 9 Meeting (01/19/25)</option>
              <option value="304">Tigers Den 10 Meeting (01/19/25)</option>
              <option value="336">Den 8 Pinewood Derby workshop (01/18/25)</option>
              <option value="264">AOL Den 22 Meeting - First Aid (01/17/25)</option>
              <option value="230">Pack Meeting (01/14/25)</option>
              <option value="245">VIRTUAL - Committee &amp; Leader Meeting (01/12/25)</option>
              <option value="289">Overnight at the USS Lexington (01/11/25)</option>
              <option value="330">Den 3 Meeting (01/05/25)</option>
              <option value="277">Den 1 Meeting (12/17/24)</option>
              <option value="309">Wolves Den 2 Meeting (12/15/24)</option>
              <option value="316">Lions Den 9 Meeting (12/15/24)</option>
              <option value="303">Tigers Den 10 Meeting (12/15/24)</option>
              <option value="329">Den 3 Meeting (12/15/24)</option>
              <option value="263">AOL Den 22 Community Service- Tree Planting (12/14/24)</option>
              <option value="229">Pack Meeting (12/10/24)</option>
              <option value="244">Committee &amp; Leader Meeting (12/01/24)</option>
              <option value="265">AOL Den 22 Meeting - PERSONAL FITNESS (11/22/24)</option>
              <option value="276">Den 1 Meeting (11/19/24)</option>
              <option value="327">Visit with Girls Troop 4443 (11/17/24)</option>
              <option value="294">Wolves Den 2 Meeting (11/17/24)</option>
              <option value="315">Lions Den 9 Meeting (11/17/24)</option>
              <option value="325">Den 3 Mtg (11/17/24)</option>
              <option value="312">Tigers Den 10 Meeting (11/17/24)</option>
              <option value="326">Den 8 meeting (11/17/24)</option>
              <option value="228">Pack Meeting (11/12/24)</option>
              <option value="324">Baldwin Veteran's Day Celebration - Flag Ceremony (11/11/24)</option>
              <option value="243">Committee &amp; Leader Meeting (11/10/24)</option>
              <option value="283">Den 22 AOL campout Pedernales Falls (11/08/24)</option>
              <option value="323">Clayton Veterans Day Assembly - Flag Ceremony (11/08/24)</option>
              <option value="234">Fall Campout - Goliad State Park (11/01/24)</option>
              <option value="314">Lions Den 9 Meeting (10/27/24)</option>
              <option value="273">Den 3 Meeting (10/27/24)</option>
              <option value="322">Den 5 Meeting (10/27/24)</option>
              <option value="301">Tigers Den 10 Meeting (10/27/24)</option>
              <option value="286">(GIRLS) - Troop 19 Halloween Costume Party (10/27/24)</option>
              <option value="287">(BOYS) - Troop 61 Open House (10/27/24)</option>
              <option value="299">Service Project - Baldwin Campus Cleanup &amp; Planter Construction (10/27/24)</option>
              <option value="300">Den Leader Training (10/23/24)</option>
              <option value="291">Den 5 Webelos (10/23/24)</option>
              <option value="275">Den 1 Meeting (10/22/24)</option>
              <option value="293">Den 2 Meeting (10/20/24)</option>
              <option value="292">Den 8 meeting (10/20/24)</option>
              <option value="284">(BOYS AOL) Troop 448 - Astronomy Overnight Campout (10/19/24)</option>
              <option value="285">(BOYS AOL) Troop 555 - Grelle Campout (10/19/24)</option>
              <option value="266">(BOYS AOL) Troop 505 - Invitational Capture the Flag Campout (10/18/24)</option>
              <option value="227">Pack Meeting (10/15/24)</option>
              <option value="267">Thunderbird District Scouting 101 | Webelos Woods (10/12/24)</option>
              <option value="274">BALOO Adult Leader Training (10/11/24)</option>
              <option value="262">AOL Den 22 Meeting - OUTDOOR ADVENTURER (10/11/24)</option>
              <option value="288">(GIRLS AOL) - Troop 4443 Krause Springs Campout (10/11/24)</option>
              <option value="242">Committee &amp; Leader Meeting (10/06/24)</option>
              <option value="282">Roundtable (10/03/24)</option>
              <option value="268">Troop 505 Open House (09/28/24)</option>
              <option value="270">Den 4 Meeting (09/24/24)</option>
              <option value="272">Den 3 Meeting (09/22/24)</option>
              <option value="269">Den 1 Meeting (09/17/24)</option>
              <option value="250">Family Pack Orientation (09/15/24)</option>
              <option value="259">Den 8 meeting (09/15/24)</option>
              <option value="260">AOL Den 22 Meeting - BOBCAT (09/13/24)</option>
              <option value="226">Pack Meeting / Open House (09/10/24)</option>
              <option value="241">Parent &amp; Volunteer Meeting (09/08/24)</option>
              <option value="225">Fall Recruitment - Circle C (09/01/24)</option>
              <option value="237">Baldwin Back to School Night K-2nd (08/29/24)</option>
              <option value="258">Aquanauts (08/24/24)</option>
              <option value="224">Fall Recruitment - Circle C (08/24/24)</option>
              <option value="222">Cubmobile Derby (08/18/24)</option>
              <option value="236">Baldwin Meet the Teacher Night (08/16/24)</option>
              <option value="235">Clayton Meet the Teacher Night (08/15/24)</option>
              <option value="221">Parent &amp; Volunteer Meeting (08/11/24)</option>
              <option value="220">Summer Activity - Rock Climbing (07/20/24)</option>
              <option value="219">Independence Day Parade (07/04/24)</option>
              <option value="218">Raingutter Regatta (06/08/24)</option>
              <option value="223">Baldwin Ceremony of Colors (05/23/24)</option>
              <option value="124">Pack 12 Graduation (05/19/24)</option>
              <option value="217">Pack Meeting (05/14/24)</option>
              <option value="214">RESCHEDULED - Cleanup @ Clayton Elementary (05/11/24)</option>
              <option value="118">Committee / Den Leader Meeting (05/05/24)</option>
              <option value="125">NEW TIME - Rocket Derby (05/04/24)</option>
              <option value="216">Rocket Derby - Inspections (05/03/24)</option>
              <option value="113">Den 6 Meeting (05/01/24)</option>
              <option value="138">Den 2 meeting (05/01/24)</option>
              <option value="215">Rank Requirement Deadline for Graduation (05/01/24)</option>
              <option value="206">Den 3 Meeting (04/28/24)</option>
              <option value="308">Den Meeting (04/27/24)</option>
              <option value="213">Pack 12 Recruitment @ Clayto's Playground (04/27/24)</option>
              <option value="195">Webelos Den 23 Meeting (04/24/24)</option>
              <option value="159">Webelos Den 22 Meeting (04/24/24)</option>
              <option value="126">Spring Campout (04/19/24)</option>
              <option value="112">Den 6 Meeting (04/17/24)</option>
              <option value="104">Den 5 Meeting (04/17/24)</option>
              <option value="145">Den 1 Meeting (04/14/24)</option>
              <option value="212">Den 8 meeting (04/14/24)</option>
              <option value="203">Webelos den 22/23  hike 3 mi (04/10/24)</option>
              <option value="123">Pack Meeting (04/09/24)</option>
              <option value="117">Committee / Den Leader Meeting (04/07/24)</option>
              <option value="207">Den 3 Cleanup Project*** note the new time (04/07/24)</option>
              <option value="209">Eclipse Extravaganza (04/06/24)</option>
              <option value="137">Den 2 meeting (04/03/24)</option>
              <option value="208">BSA Distinguished Citizen Award (03/28/24)</option>
              <option value="205">Den 3 Meeting (03/24/24)</option>
              <option value="210">Austin Fire Station 27 - Den 4 Lions (03/24/24)</option>
              <option value="211">Den 7 Meeting - Running with the Pack (03/24/24)</option>
              <option value="136">Den 2 - make up day (03/23/24)</option>
              <option value="111">Den 6 Meeting (03/20/24)</option>
              <option value="103">Den 5 Meeting (03/20/24)</option>
              <option value="194">Webelos Den 23 Meeting (03/20/24)</option>
              <option value="158">Webelos Den 22 Meeting (03/20/24)</option>
              <option value="144">Den 1 Meeting (03/17/24)</option>
              <option value="135">Den 2 meeting (03/06/24)</option>
              <option value="122">Pack Meeting (03/05/24)</option>
              <option value="116">Committee / Den Leader Meeting (03/03/24)</option>
              <option value="204">Den 8 meeting (03/03/24)</option>
              <option value="193">Webelos Den 23 Meeting (02/28/24)</option>
              <option value="157">Webelos Den 22 Meeting (02/28/24)</option>
              <option value="198">Den 3 Meeting (02/25/24)</option>
              <option value="120">Crossover (02/24/24)</option>
              <option value="102">Den 5 Meeting (02/21/24)</option>
              <option value="202">Webelos Den 22/23 Meeting (02/21/24)</option>
              <option value="199">BEAR DENS - Fire Station Visit by Den 3 (02/18/24)</option>
              <option value="318">Lions Den 9 Meeting (02/16/24)</option>
              <option value="200">Engineering (02/15/24)</option>
              <option value="197">Den 8 meeting (02/11/24)</option>
              <option value="188">Den 7 Meeting (with Den 8!) (rescheduled) (02/11/24)</option>
              <option value="134">Den 2 meeting (02/07/24)</option>
              <option value="192">Webelos Den 23 Meeting (02/07/24)</option>
              <option value="201">Webelos Den 22 Meeting (02/07/24)</option>
              <option value="115">Committee / Den Leader Meeting (02/04/24)</option>
              <option value="119">Pinewood Derby (02/03/24)</option>
              <option value="186">PWD Weigh-in (01/31/24)</option>
              <option value="185">PWD Weigh-in (01/30/24)</option>
              <option value="96">Winter Overnight: NASA Space Center Houston (01/27/24)</option>
              <option value="80">Den 21 Meeting (01/25/24)</option>
              <option value="109">Den 6 Meeting (01/24/24)</option>
              <option value="155">Webelos Den 22 Meeting (01/24/24)</option>
              <option value="191">Webelos Den 23 Meeting (01/24/24)</option>
              <option value="183">Den 3 meeting (01/21/24)</option>
              <option value="189">Den 19 Meeting (01/21/24)</option>
              <option value="187">Den 8 meeting (01/21/24)</option>
              <option value="184">University of Scouting (01/20/24)</option>
              <option value="190">PWD Block Cutting (01/19/24)</option>
              <option value="176">PWD Block-cutting (01/17/24)</option>
              <option value="101">Den 5 Meeting (01/17/24)</option>
              <option value="142">Den 1 Meeting (01/14/24)</option>
              <option value="66">Webelos 1/2-Day Adventure (01/13/24)</option>
              <option value="79">Den 21 Meeting (01/11/24)</option>
              <option value="133">Den 2 meeting (01/10/24)</option>
              <option value="121">Pack Meeting (01/09/24)</option>
              <option value="114">Committee / Den Leader Meeting (01/07/24)</option>
              <option value="180">Archery Rangemaster Training (01/06/24)</option>
              <option value="179">BB Gun Rangemaster Training (01/06/24)</option>
              <option value="178">Den 4 Lions  - Den Meeting (12/20/23)</option>
              <option value="100">Den 5 Meeting (12/20/23)</option>
              <option value="154">Webelos Den 22 Meeting (12/20/23)</option>
              <option value="174">Webelos Den 23 Meeting (12/20/23)</option>
              <option value="177">Den 7 Wolves  - Den Meeting (12/18/23)</option>
              <option value="141">Den 1 Meeting (12/17/23)</option>
              <option value="182">Den 3  Optional Makeup Meeting (12/17/23)</option>
              <option value="181">Holiday Service Project (12/16/23)</option>
              <option value="78">Den 21 Meeting (12/14/23)</option>
              <option value="42">Pack Meeting (12/12/23)</option>
              <option value="62">Cubmaster Campout (12/08/23)</option>
              <option value="108">Den 6 Meeting (12/06/23)</option>
              <option value="132">Den 2 meeting (holiday dinner at my house) (12/06/23)</option>
              <option value="70">Committee / Den Leader Meeting (12/03/23)</option>
              <option value="77">Den 21 Meeting (11/30/23)</option>
              <option value="153">Webelos Den 22 Meeting (11/29/23)</option>
              <option value="173">Webelos Den 23 Meeting (11/29/23)</option>
              <option value="175">Den 8 meeting (11/26/23)</option>
              <option value="170">Den 3 Meeting (11/19/23)</option>
              <option value="99">Den 5 Meeting (11/15/23)</option>
              <option value="41">Pack Meeting (11/14/23)</option>
              <option value="140">CANCELLED - Den 1 Meeting (11/12/23)</option>
              <option value="131">Den 2 activity (e.g. hike) (11/11/23)</option>
              <option value="165">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="166">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="167">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="168">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="169">Clayton Elementary Veterans Day Celebration - Flag Ceremony (11/10/23)</option>
              <option value="76">Den 21 Meeting (11/09/23)</option>
              <option value="171">Veteran's Day Flag Ceremony (11/09/23)</option>
              <option value="107">Den 6 Meeting (11/08/23)</option>
              <option value="152">Webelos Den 22 Meeting (11/08/23)</option>
              <option value="172">Webelos Den 23 Meeting (11/08/23)</option>
              <option value="94">Den 19 Meeting (11/05/23)</option>
              <option value="69">Committee / Den Leader Meeting (11/05/23)</option>
              <option value="163">Baldwin Cleanup (11/05/23)</option>
              <option value="130">Den 2 meeting (11/01/23)</option>
              <option value="60">Fall Campout (10/27/23)</option>
              <option value="75">Den 21 Meeting (10/26/23)</option>
              <option value="93">Den 19 Meeting (10/22/23)</option>
              <option value="128">Den 3 Meeting (10/22/23)</option>
              <option value="164">Den 3 Meeting (10/22/23)</option>
              <option value="147">Den 8 meeting (10/22/23)</option>
              <option value="61">Webelos Woods (10/21/23)</option>
              <option value="81">Jamboree On The Air (10/20/23)</option>
              <option value="106">Den 6 Meeting (10/18/23)</option>
              <option value="150">Den 4 Lions Meeting (10/18/23)</option>
              <option value="98">Den 5 Meeting (10/18/23)</option>
              <option value="151">Webelos Den 22 Meeting (10/18/23)</option>
              <option value="149">Den 7 Wolves Meeting (10/16/23)</option>
              <option value="139">Den 1 Meeting (10/15/23)</option>
              <option value="74">Den 21 Meeting (10/12/23)</option>
              <option value="40">Pack Meeting (10/10/23)</option>
              <option value="92">Den 19 Meeting - Building a Better World (10/08/23)</option>
              <option value="162">Building a Better World (10/08/23)</option>
              <option value="86">Round Table (10/05/23)</option>
              <option value="129">Den 2 meeting (10/04/23)</option>
              <option value="148">Webelos Den 22 Meeting (10/04/23)</option>
              <option value="59">Committee / Den Leader Meeting (10/01/23)</option>
              <option value="127">Troop 3337 Open House (10/01/23)</option>
              <option value="73">Den 21 Meeting (09/28/23)</option>
              <option value="89">Webelos Adventure: First Responder - Troop 448 (09/25/23)</option>
              <option value="91">Den 19 Meeting (09/24/23)</option>
              <option value="57">Den Leader Training (09/24/23)</option>
              <option value="83">Den Meeting (Den 3) (09/24/23)</option>
              <option value="56">FIRST Lion / Tiger Den Meeting (09/23/23)</option>
              <option value="105">Den 6 Meeting (09/20/23)</option>
              <option value="97">Den 5 Meeting (09/20/23)</option>
              <option value="84">Den 1 Meeting (09/17/23)</option>
              <option value="55">New Scout Ceremony (09/16/23)</option>
              <option value="90">AOL Scouting Adventure - Troop 505 Open House (09/16/23)</option>
              <option value="72">Den 21 Meeting (09/14/23)</option>
              <option value="87">Webelos Den 22 Meeting - First meeting (09/13/23)</option>
              <option value="95">Webelos Den 23 Meeting - First meeting (09/13/23)</option>
              <option value="39">Pack Meeting / Open House (09/12/23)</option>
              <option value="58">Committee / Den Leader Meeting (09/10/23)</option>
              <option value="85">Round Table (09/07/23)</option>
              <option value="38">Fall Recruitment - Circle C (08/31/23)</option>
              <option value="37">Fall Recruitment - Baldwin Elementary (08/29/23)</option>
              <option value="36">NEW DATE: Cubmobile Derby (08/26/23)</option>
              <option value="67">Fall Recruitment - Baldwin BTS Night (K-2nd) (08/24/23)</option>
              <option value="63">NEW DATE: Committee / Den Leader Meeting (08/20/23)</option>
              <option value="64">Aquanaut Adventure (08/19/23)</option>
              <option value="47">Den 21 Meeting (08/17/23)</option>
              <option value="53">Fall Recruitment - Clayton Meet the Teacher Night (08/10/23)</option>
              <option value="46">Den 21 Meeting (07/27/23)</option>
              <option value="35">Bowling with the Pack (07/15/23)</option>
              <option value="50">Flag Retirement Ceremony (07/04/23)</option>
              <option value="24">Circle C 4th of July Parade (07/01/23)</option>
              <option value="23">Raingutter Regatta (06/17/23)</option>
              <option value="43">Den 21 Meeting (06/15/23)</option>
              <option value="33">Baldwin End of Year 5th Grade Ceremony - Flag Detail (05/25/23)</option>
              <option value="34">Spring Recruitment (05/24/23)</option>
              <option value="19">Rocket Derby (05/21/23)</option>
              <option value="20">Pack 12 Graduation (05/09/23)</option>
              <option value="21">Committee / Leader Meeting (05/07/23)</option>
              <option value="31">Den 21 Meeting (05/06/23)</option>
              <option value="26">Requirement Deadline for Graduation (05/02/23)</option>
              <option value="32">Make-up Den Meeting and Bobcat Clinic (04/29/23)</option>
              <option value="22">STILL ON: Clayton Cleanup (04/29/23)</option>
              <option value="25">CANCELLED: Recruitment Table @ Clayton Carnival (04/28/23)</option>
              <option value="17">Spring Campout (04/21/23)</option>
              <option value="29">Den 21 Meeting (04/20/23)</option>
              <option value="18">Den 1 Meeting (04/18/23)</option>
              <option value="27">Den 19 Make-up Session (04/16/23)</option>
              <option value="28">Den 3 Make-up Session (04/16/23)</option>
              <option value="30">Rocket Derby Workshop (04/15/23)</option>
              <option value="1">April Pack Meeting (04/11/23)</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <br>Then select how you want the future event dates to be calculated, from the choices shown below.
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY43524126">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY43524126" style="visibility: visible">
            *
            </span>
            Day of Month to Copy To
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY43524126" id="RVALENTRY43524126" value="Y">
            <input type="hidden" name="OLD43524126" id="OLD43524126" value="">
            <span class="text-left" id="SPAN43524126" name="SPAN43524126"><input type="radio" id="ENTRY43524126" name="ENTRY43524126" tabindex="300" onclick="easyFieldExit(this)" value="XXX">Please select an event to see the available choices</span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <br>Then select the number of months between copies and the number of copies to be created.
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY435255">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY435255" style="visibility: visible">
            *
            </span>
            Number of Months Between Copies
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY435255" id="RVALENTRY435255" value="Y">
            <input type="hidden" name="OLD435255" id="OLD435255" value="1">
            <input type="text" class="form-control" id="ENTRY435255" name="ENTRY435255" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The number of months between each copy.  If this event occurs every month, enter 1.  If this event occurs every other month, enter 2.  If this event occurs quarterly, enter 3.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY435235">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY435235" style="visibility: visible">
            *
            </span>
            Number of Copies to Create
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY435235" id="RVALENTRY435235" value="Y">
            <input type="hidden" name="OLD435235" id="OLD435235" value="6">
            <input type="text" class="form-control" id="ENTRY435235" name="ENTRY435235" tabindex="140" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="6" title="The number of copies of this event to be created forward in time">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs13360">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON8" type="button" name="save" title="Continue" value="Continue" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="160" id="BUTTON9" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON9">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY435222">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>