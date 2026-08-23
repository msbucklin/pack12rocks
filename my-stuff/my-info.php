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
<link rel="stylesheet" type="text/css" href="/css/bootstrap_override_v11.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap_override_colors_Cub_Scouts.css">
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<meta http-equiv="EXPIRES" content="0">
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/xg_pWYS8-HRESiV6Rdg4aY_R/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-qWH0xCejb2gc1yqo8ob4TQrvIcQ9XjhOfGKbhFr/+LvFrJdTE3bA+FQP/FLAiQhz"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
  function RotateImage(ImageID, TableName, ColumnName, ImageRowID, RotateDirection) {
  var pl = new SOAPClientParameters();
  pl.add("ImageID", ImageID);
  pl.add("TableName", TableName);
  pl.add("ColumnName", ColumnName);
  pl.add("ImageRowID", ImageRowID);
  pl.add("RotateDirection", RotateDirection);
  pl.add("UserID",  209210);
  pl.add("ApplicationID", 2840);
  pl.add("ImageKey", 7012470);
  SOAPClient.invoke("EasyWebService.asmx", "RotateImage", pl, true, RotateImageReturn);
  return;
  }
  function RotateImageReturn(val)
  {
  if (val.ErrorMsg && val.ErrorMsg.length > 0)
  {
  window.alert(val.ErrorMsg);
  }
  else
  {
  var ImageID = val.ImageID;
  var ImageObj = document.getElementById(ImageID);
  var ImageURL = ImageObj.src;
  var currentdate = new Date();
  var Time = 'parm=' + currentdate.getDay() + currentdate.getHours() + currentdate.getMinutes() + currentdate.getSeconds() + currentdate.getMilliseconds();
  var UrlParmIndex = ImageURL.indexOf("?");
  if (UrlParmIndex>-1)
  {
  ImageURL = ImageURL.substring(0,UrlParmIndex+1) + Time;
  }
  else
  {
  ImageURL = ImageURL + "?" + Time;
  }
  ImageObj.src = ImageURL;
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
  if (thisfield.name=='ENTRY2900652'||thisfield.name=='ENTRY489202')
{
  var CellPhone = easyGetFieldValue('ENTRY2900652');
  var CarrierID = easyGetFieldValue('ENTRY489202');
  if (CellPhone != '' && CarrierID != '' && CarrierID != '0')
  {
    GetSMSAddress(CellPhone,CarrierID);
  }
}



if (thisfield.name=='ENTRY4979611')
{
  var Flag = easyGetFieldValue('ENTRY4979611');
  if (Flag=='Y')
  {
     easySetFieldValue('ENTRY4979511','N');
  }
}


if (thisfield.name=='ENTRY4979511')
{
  var Flag = easyGetFieldValue('ENTRY4979511');
  if (Flag=='Y')
  {
     easySetFieldValue('ENTRY4979611','N');
  }
}


if (thisfield.name=='ENTRY4979811')
{
  var Flag = easyGetFieldValue('ENTRY4979811');
  if (Flag=='Y')
  {
     easySetFieldValue('ENTRY4979711','N');
  }
}


if (thisfield.name=='ENTRY4979711')
{
  var Flag = easyGetFieldValue('ENTRY4979711');
  if (Flag=='Y')
  {
     easySetFieldValue('ENTRY4979811','N');
  }
}

    }
  function GetSMSAddress(CellPhone, CarrierID)
{
  var pl = new SOAPClientParameters();
  pl.add("Phone_Number", CellPhone);
  pl.add("Cell_Phone_Carrier_ID", CarrierID);

  SOAPClient.invoke("EasyWebService.asmx","GetSMSAddress",pl,true,ReturnSMSAddress);
  return;
}

function ReturnSMSAddress(retObj)
{
  //  if there is an error, display it and exit
  if (retObj.ErrorMsg && retObj.ErrorMessage.length > 0)
  {
    window.alert(retObj.ErrorMessage.text);
    return true;
  }

  var SMSAddress = retObj.SMS_Address;
  if (SMSAddress != '')
  {
    easySetFieldValue('ENTRY2902335',SMSAddress);
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="305">
<input type="hidden" name="Form_ID" id="Form_ID" value="1486">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1">
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
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('bsaUploadScoutScoutBook.aspx?Menu_Item_ID=1902&amp;Stack=0','');">Upload Scouts From ScoutBook</a>
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
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('bsaUploadScoutScoutBook.aspx?Menu_Item_ID=1902&amp;Stack=0','');">Upload Scouts From ScoutBook</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=305">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=305">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=305">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=36" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=305">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=305">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=305">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=305">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1&amp;Application_ID=2840
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
My Contact Information
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="977">
<div class="new-row" id="fs16108">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON1" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="120" id="BUTTON2" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON2">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs7356">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2899825" style="visibility: hidden">
            *
            </span>
            Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2899825" id="RVALENTRY2899825" value="">
            <span id="DIVENTRY2899825">
            <input type="hidden" name="OLD2899825" id="OLD2899825" value="Michael">
            <input type="hidden" name="ENTRY2899825" id="ENTRY2899825" value="Michael">
            <span class="text-left">
            Michael
            </span>
            </span>
            <input type="hidden" name="RVALENTRY2899827" id="RVALENTRY2899827" value="">
            <span id="DIVENTRY2899827">
            <input type="hidden" name="OLD2899827" id="OLD2899827" value="">
            <input type="hidden" name="ENTRY2899827" id="ENTRY2899827" value="">
            <span class="text-left">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2899828" id="RVALENTRY2899828" value="">
            <span id="DIVENTRY2899828">
            <input type="hidden" name="OLD2899828" id="OLD2899828" value="Bucklin">
            <input type="hidden" name="ENTRY2899828" id="ENTRY2899828" value="Bucklin">
            <span class="text-left">
            Bucklin
            </span>
            </span>
            <input type="hidden" name="RVALENTRY2899851" id="RVALENTRY2899851" value="">
            <span id="DIVENTRY2899851">
            <input type="hidden" name="OLD2899851" id="OLD2899851" value="">
            <input type="hidden" name="ENTRY2899851" id="ENTRY2899851" value="">
            <span class="text-left">

            </span>
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290122">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290122" style="visibility: hidden">
            *
            </span>
            Membership Type
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290122" id="RVALENTRY290122" value="">
            <input type="hidden" name="OLD290122" id="OLD290122" value="2">
            <input type="hidden" name="ENTRY290122" id="ENTRY290122" value="2">
            <span class="text-left">
            Adult
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290201">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290201" style="visibility: hidden">
            *
            </span>
            Preferred Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290201" id="RVALENTRY290201" value="N">
            <input type="hidden" name="OLD290201" id="OLD290201" value="">
            <input type="text" class="form-control" id="ENTRY290201" name="ENTRY290201" tabindex="150" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The name this person would prefer to use instead of their legal first name.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2901462" style="visibility: hidden">
            *
            </span>
            Photograph
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2901462" id="RVALENTRY2901462" value="N">
            <span id="DIVENTRY2901462">
            <input type="hidden" name="OLD2901462" id="OLD2901462" value="">
            <span id="DIVPHOTO2901462"></span><input type="file" tabindex="161" id="ENTRY2901462" name="ENTRY2901462" class="form-control" onchange="ShowUploadPhoto(this);" title=""><input type="hidden" id="DELETEFILE2901462" name="DELETEFILE2901462" value="Save">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2901465" id="RVALENTRY2901465" value="N">
            <span id="DIVENTRY2901465">
            <input type="hidden" name="OLD2901465" id="OLD2901465" value="">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2901466" id="RVALENTRY2901466" value="N">
            <span id="DIVENTRY2901466">
            <input type="hidden" name="OLD2901466" id="OLD2901466" value="">
            <span class="entrypostscript">

            </span>
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2901369">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2901369" style="visibility: hidden">
            *
            </span>
            Current Leadership Position
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2901369" id="RVALENTRY2901369" value="">
            <input type="hidden" name="OLD2901369" id="OLD2901369" value="Asst. Den Leader, Key 3 Delegate, Committee Chairman">
            <input type="hidden" name="ENTRY2901369" id="ENTRY2901369" value="Asst. Den Leader, Key 3 Delegate, Committee Chairman">
            <span class="text-left">
            Asst. Den Leader, Key 3 Delegate, Committee Chairman
            </span>
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900029" style="visibility: hidden">
            *
            </span>
            Address
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2900029" id="RVALENTRY2900029" value="N">
            <span id="DIVENTRY2900029">
            <input type="hidden" name="OLD2900029" id="OLD2900029" value="6708 Edwardson Cv">
            <input type="text" class="form-control" id="ENTRY2900029" name="ENTRY2900029" tabindex="181" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="6708 Edwardson Cv" title="Street address or P.O. Box">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2900030" id="RVALENTRY2900030" value="N">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900030" style="visibility: hidden">
            *
            </span>

            </label>
          </td>
          <td class="text-left">
            <span id="DIVENTRY2900030">
            <input type="hidden" name="OLD2900030" id="OLD2900030" value="">
            <input type="text" class="form-control" id="ENTRY2900030" name="ENTRY2900030" tabindex="182" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Continuation of address information">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2900031" id="RVALENTRY2900031" value="N">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900031" style="visibility: hidden">
            *
            </span>
            City
            </label>
          </td>
          <td class="text-left">
            <span id="DIVENTRY2900031">
            <input type="hidden" name="OLD2900031" id="OLD2900031" value="Austin">
            <input type="text" class="form-control" id="ENTRY2900031" name="ENTRY2900031" tabindex="183" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="Austin" title="City">
            <span class="entrypostscript">
            ,
            </span>
            </span>
            <input type="hidden" name="RVALENTRY2900032" id="RVALENTRY2900032" value="N">
            <span id="DIVENTRY2900032">
            <input type="hidden" name="OLD2900032" id="OLD2900032" value="TX">
            <select id="ENTRY2900032" name="ENTRY2900032" class="form-control" onblur="TestRegExp(this,'','')" tabindex="184" title="State" size="1">
              <option value=""> </option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="BC">British Columbia</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MB">Manitoba</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="PR">Puerto Rico</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option selected="" value="TX">Texas</option>
              <option value="UA">United Arab Emirates</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2900033" id="RVALENTRY2900033" value="N">
            <span id="DIVENTRY2900033">
            <input type="hidden" name="OLD2900033" id="OLD2900033" value="78749">
            <input type="text" class="form-control" id="ENTRY2900033" name="ENTRY2900033" tabindex="185" size="10" onblur="TestRegExp(this,'','')" maxlength="10" value="78749" title="Zip code (postal code)">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2900034" id="RVALENTRY2900034" value="N">
            <span id="DIVENTRY2900034">
            <input type="hidden" name="OLD2900034" id="OLD2900034" value="">
            <select id="ENTRY2900034" name="ENTRY2900034" class="form-control" onblur="TestRegExp(this,'','')" tabindex="186" title="Country" size="1">
              <option selected="" value=""> </option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="Mexico">Mexico</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="USA">USA</option>
            </select>
            <span class="entrypostscript">

            </span>
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2900252">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900252" style="visibility: hidden">
            *
            </span>
            Home Phone
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2900252" id="RVALENTRY2900252" value="N">
            <input type="hidden" name="OLD2900252" id="OLD2900252" value="(512) 750-7046">
            <input type="text" class="form-control" id="ENTRY2900252" name="ENTRY2900252" tabindex="190" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="(512) 750-7046" title="The home telephone number for this person.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2900652">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900652" style="visibility: hidden">
            *
            </span>
            Cell Phone
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2900652" id="RVALENTRY2900652" value="N">
            <input type="hidden" name="OLD2900652" id="OLD2900652" value="">
            <input type="text" class="form-control" id="ENTRY2900652" name="ENTRY2900652" tabindex="200" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="Cell Phone">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY489202">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY489202" style="visibility: hidden">
            *
            </span>
            Cell Phone Carrier
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY489202" id="RVALENTRY489202" value="N">
            <input type="hidden" name="OLD489202" id="OLD489202" value="0">
            <select id="ENTRY489202" name="ENTRY489202" class="form-control" onblur="TestRegExp(this,'','')" tabindex="210" title="The company that services the cell phone number for this person" size="1">
              <option selected="" value="0"> </option>
              <option value="1">3 River Wireless</option>
              <option value="2">ACS Wireless</option>
              <option value="3">Alltel</option>
              <option value="4">AT&amp;T</option>
              <option value="5">Bell Canada</option>
              <option value="7">Bell Mobility (Canada)</option>
              <option value="9">Blue Sky Frog</option>
              <option value="10">Bluegrass Cellular</option>
              <option value="11">Boost Mobile</option>
              <option value="12">BPL Mobile</option>
              <option value="13">Carolina West Wireless</option>
              <option value="79">Cellcom</option>
              <option value="14">Cellular One</option>
              <option value="15">Cellular South</option>
              <option value="16">Centennial Wireless</option>
              <option value="17">CenturyTel</option>
              <option value="18">Cingular (Now AT&amp;T)</option>
              <option value="19">Clearnet</option>
              <option value="20">Comcast</option>
              <option value="74">Consumer Cellular (AT&amp;T)</option>
              <option value="75">Consumer Cellular (Platinum)</option>
              <option value="21">Corr Wireless Communications</option>
              <option value="73">Cricket</option>
              <option value="22">Dobson</option>
              <option value="23">Edge Wireless</option>
              <option value="24">Fido</option>
              <option value="25">Golden Telecom</option>
              <option value="82">Good2Go Mobile</option>
              <option value="72">Google Project Fi</option>
              <option value="26">Helio</option>
              <option value="27">Houston Cellular</option>
              <option value="28">Idea Cellular</option>
              <option value="29">Illinois Valley Cellular</option>
              <option value="30">Inland Cellular Telephone</option>
              <option value="31">MCI</option>
              <option value="34">Metro PCS</option>
              <option value="35">Microcell</option>
              <option value="36">Midwest Wireless</option>
              <option value="77">Mint Mobile</option>
              <option value="37">Mobilcomm</option>
              <option value="38">MTS</option>
              <option value="39">Nextel</option>
              <option value="40">OnlineBeep</option>
              <option value="41">PCS One</option>
              <option value="42">President's Choice</option>
              <option value="43">Public Service Cellular</option>
              <option value="80">Pure TalkUSA</option>
              <option value="44">Qwest</option>
              <option value="84">Red Pocket</option>
              <option value="76">Republic Wireless</option>
              <option value="45">Rogers AT&amp;T Wireless</option>
              <option value="46">Rogers Canada</option>
              <option value="83">Simple Mobile</option>
              <option value="57">Solo Mobile</option>
              <option value="47">Southwestern Bell</option>
              <option value="81">Spectrum Mobile</option>
              <option value="48">Sprint</option>
              <option value="49">Sumcom</option>
              <option value="50">Surewest Communications</option>
              <option value="52">Telus</option>
              <option value="85">Ting</option>
              <option value="51">T-Mobile</option>
              <option value="53">Tracfone</option>
              <option value="54">Triton</option>
              <option value="55">Unicel</option>
              <option value="56">US Cellular</option>
              <option value="66">US West</option>
              <option value="67">Verizon</option>
              <option value="68">Virgin Mobile</option>
              <option value="69">Virgin Mobile Canada</option>
              <option value="70">West Central Wireless</option>
              <option value="71">Western Wireless</option>
              <option value="78">Xfinity Mobile</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2902335">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2902335" style="visibility: hidden">
            *
            </span>
            SMS Text Mail Address
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2902335" id="RVALENTRY2902335" value="N">
            <input type="hidden" name="OLD2902335" id="OLD2902335" value="">
            <input type="text" class="form-control" id="ENTRY2902335" name="ENTRY2902335" tabindex="220" size="50" onblur="TestRegExp(this,/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_\-\+])*@([-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,'Please enter a valid e-mail address.  Here is an example of a valid e-mail address:  jsmith@earthlink.net')" maxlength="255" value="" title="This is usually your 10-digit cell phone number followed by your carrier's URL.  For example, 2395551212@txt.att.net.  A truncated version of group email messages will be sent to this address.">
            <span class="entrypostscript">
            <a href="https://en.wikipedia.org/wiki/SMS_gateway" target="_blank">What's an SMS address?</a>
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2900735">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900735" style="visibility: hidden">
            *
            </span>
            Email Address
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2900735" id="RVALENTRY2900735" value="N">
            <input type="hidden" name="OLD2900735" id="OLD2900735" value="msbucklin@icloud.com">
            <input type="text" class="form-control" id="ENTRY2900735" name="ENTRY2900735" tabindex="230" size="50" onblur="TestRegExp(this,/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_\-\+])*@([-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,'Please enter a valid e-mail address.  Here is an example of a valid e-mail address:  jsmith@earthlink.net')" maxlength="255" value="msbucklin@icloud.com" title="The e-mail address to which all messages should be sent for this person.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2902235">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2902235" style="visibility: hidden">
            *
            </span>
            Email Address #2
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2902235" id="RVALENTRY2902235" value="N">
            <input type="hidden" name="OLD2902235" id="OLD2902235" value="">
            <input type="text" class="form-control" id="ENTRY2902235" name="ENTRY2902235" tabindex="240" size="50" onblur="TestRegExp(this,/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_\-\+])*@([-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,'Please enter a valid e-mail address.  Here is an example of a valid e-mail address:  jsmith@earthlink.net')" maxlength="255" value="" title="A secondary e-mail address">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2903911">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2903911" style="visibility: hidden">
            *
            </span>
            Don't Send Me The Electronic Newsletter
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2903911" id="RVALENTRY2903911" value="N">
            <input type="hidden" name="OLD2903911" id="OLD2903911" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="250" value="Y" id="ENTRY2903911" name="ENTRY2903911" size="1" title="Checking this box will prevent the system from sending you an e-mail with the automatically generated newsletter">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4512611">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4512611" style="visibility: hidden">
            *
            </span>
            Don't Send Me Event Reminders
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4512611" id="RVALENTRY4512611" value="N">
            <input type="hidden" name="OLD4512611" id="OLD4512611" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="260" value="Y" id="ENTRY4512611" name="ENTRY4512611" size="1" title="Check this box to prevent the system from sending you messages reminding you of upcoming events">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4701511">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4701511" style="visibility: visible">
            *
            </span>
            Don't Send Me Reimbursement Request Notifications
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4701511" id="RVALENTRY4701511" value="Y">
            <input type="hidden" name="OLD4701511" id="OLD4701511" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="270" value="Y" id="ENTRY4701511" name="ENTRY4701511" size="1" title="If you are the treasurer, use this option to stop the system from sending you email notifications of new requests for expense reimbursement">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY5673211">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY5673211" style="visibility: hidden">
            *
            </span>
            Don't Email Me When Event Signups Change
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY5673211" id="RVALENTRY5673211" value="N">
            <input type="hidden" name="OLD5673211" id="OLD5673211" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="280" value="Y" id="ENTRY5673211" name="ENTRY5673211" size="1" title="Check this box to opt out of receiving email notifications when the signup status changes for members on an upcoming event">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2901058">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2901058" style="visibility: hidden">
            *
            </span>
            Registered Gender
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2901058" id="RVALENTRY2901058" value="N">
            <input type="hidden" name="OLD2901058" id="OLD2901058" value="">
            <span class="text-left" id="SPAN2901058" name="SPAN2901058">
            <span style="white-space: nowrap;"><input type="radio" id="ENTRY2901058" name="ENTRY2901058" tabindex="290" onclick="easyFieldExit(this)" value="M">Male</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY2901058" name="ENTRY2901058" tabindex="290" onclick="easyFieldExit(this)" value="F">Female</span>
            </span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2899916">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2899916" style="visibility: hidden">
            *
            </span>
            Date of Birth
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2899916" id="RVALENTRY2899916" value="N">
            <input type="hidden" name="OLD2899916" id="OLD2899916" value="">
            <input type="text" class="form-control" id="ENTRY2899916" name="ENTRY2899916" tabindex="300" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This person's date of birth">&nbsp;<a href="#" tabindex="300" onclick="cal.select(window.easyform.ENTRY2899916,'ENTRY2899916X','MM/dd/yyyy', window.easyform.ENTRY2899916.value); return false;" name="ENTRY2899916X" id="ENTRY2899916X"><img src="images/calendar.gif" name="ENTRY2899916I" id="ENTRY2899916I"></a>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY465982">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY465982" style="visibility: hidden">
            *
            </span>
            Shirt Size
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY465982" id="RVALENTRY465982" value="N">
            <input type="hidden" name="OLD465982" id="OLD465982" value="0">
            <select id="ENTRY465982" name="ENTRY465982" class="form-control" onblur="TestRegExp(this,'','')" tabindex="310" title="This person's shirt size" size="1">
              <option selected="" value="0"> </option>
              <option value="4">Youth Small</option>
              <option value="5">Youth Medium</option>
              <option value="6">Youth Large</option>
              <option value="1">Adult Small</option>
              <option value="2">Adult Medium</option>
              <option value="3">Adult Large</option>
              <option value="7">Adult X-Large</option>
              <option value="8">Adult 2XL</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2902425" style="visibility: hidden">
            *
            </span>
            Spouse
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2902425" id="RVALENTRY2902425" value="N">
            <span id="DIVENTRY2902425">
            <input type="hidden" name="OLD2902425" id="OLD2902425" value="">
            <input type="text" class="form-control" id="ENTRY2902425" name="ENTRY2902425" tabindex="321" size="24" onblur="TestRegExp(this,'','')" maxlength="24" value="" title="First Name">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2902427" id="RVALENTRY2902427" value="N">
            <span id="DIVENTRY2902427">
            <input type="hidden" name="OLD2902427" id="OLD2902427" value="">
            <input type="text" class="form-control" id="ENTRY2902427" name="ENTRY2902427" tabindex="322" size="24" onblur="TestRegExp(this,'','')" maxlength="24" value="" title="Middle name">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2902428" id="RVALENTRY2902428" value="N">
            <span id="DIVENTRY2902428">
            <input type="hidden" name="OLD2902428" id="OLD2902428" value="">
            <input type="text" class="form-control" id="ENTRY2902428" name="ENTRY2902428" tabindex="323" size="30" onblur="TestRegExp(this,'','')" maxlength="30" value="" title="Last name">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2902451" id="RVALENTRY2902451" value="N">
            <span id="DIVENTRY2902451">
            <input type="hidden" name="OLD2902451" id="OLD2902451" value="">
            <select id="ENTRY2902451" name="ENTRY2902451" class="form-control" onblur="TestRegExp(this,'','')" tabindex="324" title="" size="1">
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
        <tr id="DIVENTRY290031">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290031" style="visibility: hidden">
            *
            </span>
            Occupation
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290031" id="RVALENTRY290031" value="N">
            <input type="hidden" name="OLD290031" id="OLD290031" value="">
            <input type="text" class="form-control" id="ENTRY290031" name="ENTRY290031" tabindex="330" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Occupation of this member">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290041">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290041" style="visibility: hidden">
            *
            </span>
            Employer
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290041" id="RVALENTRY290041" value="N">
            <input type="hidden" name="OLD290041" id="OLD290041" value="">
            <input type="text" class="form-control" id="ENTRY290041" name="ENTRY290041" tabindex="340" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Employer">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2901129" style="visibility: hidden">
            *
            </span>
            Business Address
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2901129" id="RVALENTRY2901129" value="N">
            <span id="DIVENTRY2901129">
            <input type="hidden" name="OLD2901129" id="OLD2901129" value="">
            <input type="text" class="form-control" id="ENTRY2901129" name="ENTRY2901129" tabindex="351" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Street address or P.O. Box">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2901130" id="RVALENTRY2901130" value="N">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2901130" style="visibility: hidden">
            *
            </span>

            </label>
          </td>
          <td class="text-left">
            <span id="DIVENTRY2901130">
            <input type="hidden" name="OLD2901130" id="OLD2901130" value="">
            <input type="text" class="form-control" id="ENTRY2901130" name="ENTRY2901130" tabindex="352" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Continuation of address information">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2901131" id="RVALENTRY2901131" value="N">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2901131" style="visibility: hidden">
            *
            </span>
            City
            </label>
          </td>
          <td class="text-left">
            <span id="DIVENTRY2901131">
            <input type="hidden" name="OLD2901131" id="OLD2901131" value="">
            <input type="text" class="form-control" id="ENTRY2901131" name="ENTRY2901131" tabindex="353" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="City">
            <span class="entrypostscript">
            ,
            </span>
            </span>
            <input type="hidden" name="RVALENTRY2901132" id="RVALENTRY2901132" value="N">
            <span id="DIVENTRY2901132">
            <input type="hidden" name="OLD2901132" id="OLD2901132" value="">
            <select id="ENTRY2901132" name="ENTRY2901132" class="form-control" onblur="TestRegExp(this,'','')" tabindex="354" title="State" size="1">
              <option selected="" value=""> </option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="BC">British Columbia</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MB">Manitoba</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="PR">Puerto Rico</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UA">United Arab Emirates</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2901133" id="RVALENTRY2901133" value="N">
            <span id="DIVENTRY2901133">
            <input type="hidden" name="OLD2901133" id="OLD2901133" value="">
            <input type="text" class="form-control" id="ENTRY2901133" name="ENTRY2901133" tabindex="355" size="10" onblur="TestRegExp(this,'','')" maxlength="10" value="" title="Zip code (postal code)">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2901134" id="RVALENTRY2901134" value="N">
            <span id="DIVENTRY2901134">
            <input type="hidden" name="OLD2901134" id="OLD2901134" value="">
            <select id="ENTRY2901134" name="ENTRY2901134" class="form-control" onblur="TestRegExp(this,'','')" tabindex="356" title="Country" size="1">
              <option selected="" value=""> </option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="Mexico">Mexico</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="USA">USA</option>
            </select>
            <span class="entrypostscript">

            </span>
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2900552">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900552" style="visibility: hidden">
            *
            </span>
            Business Phone
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2900552" id="RVALENTRY2900552" value="N">
            <input type="hidden" name="OLD2900552" id="OLD2900552" value="">
            <input type="text" class="form-control" id="ENTRY2900552" name="ENTRY2900552" tabindex="360" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="Business phone">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2902190">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2902190" style="visibility: hidden">
            *
            </span>
            Membership ID
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2902190" id="RVALENTRY2902190" value="">
            <input type="hidden" name="OLD2902190" id="OLD2902190" value="14309741">
            <input type="hidden" name="ENTRY2902190" id="ENTRY2902190" value="14309741">
            <span class="text-left">
            14309741
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY6012416">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY6012416" style="visibility: hidden">
            *
            </span>
            BSA Registration Expires On
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY6012416" id="RVALENTRY6012416" value="">
            <input type="hidden" name="OLD6012416" id="OLD6012416" value="10/31/2026">
            <input type="hidden" name="ENTRY6012416" id="ENTRY6012416" value="10/31/2026">
            <span class="text-left">
            10/31/2026
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2900116">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900116" style="visibility: hidden">
            *
            </span>
            Membership Start Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2900116" id="RVALENTRY2900116" value="">
            <input type="hidden" name="OLD2900116" id="OLD2900116" value="">
            <input type="hidden" name="ENTRY2900116" id="ENTRY2900116" value="">
            <span class="text-left">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2900816">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900816" style="visibility: hidden">
            *
            </span>
            Membership Termination Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2900816" id="RVALENTRY2900816" value="">
            <input type="hidden" name="OLD2900816" id="OLD2900816" value="">
            <input type="hidden" name="ENTRY2900816" id="ENTRY2900816" value="">
            <span class="text-left">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2904210">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2904210" style="visibility: hidden">
            *
            </span>
            Prior Experience
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2904210" id="RVALENTRY2904210" value="N">
            <input type="hidden" name="OLD2904210" id="OLD2904210" value="">
            <textarea class="form-control" cols="50" rows="5" tabindex="410" onblur="TestRegExp(this,'','')" id="ENTRY2904210" name="ENTRY2904210" wrap="virtual" title="Prior experience relevant to this group"></textarea>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2901510">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2901510" style="visibility: hidden">
            *
            </span>
            About Me
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2901510" id="RVALENTRY2901510" value="N">
            <input type="hidden" name="OLD2901510" id="OLD2901510" value="">
            <textarea class="form-control" cols="50" rows="5" tabindex="420" onblur="TestRegExp(this,'','')" id="ENTRY2901510" name="ENTRY2901510" wrap="virtual" title="A brief biography of this person that is suitable for display on the public web site.  This will be displayed on the leadership page of the public web site."></textarea>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY3825111">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY3825111" style="visibility: hidden">
            *
            </span>
            Don't include on public leaders page
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY3825111" id="RVALENTRY3825111" value="N">
            <input type="hidden" name="OLD3825111" id="OLD3825111" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="430" value="Y" id="ENTRY3825111" name="ENTRY3825111" size="1" title="Don't include this member on the public page that shows the leaders of this group">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2902616">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2902616" style="visibility: hidden">
            *
            </span>
            Medical Form Effective Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2902616" id="RVALENTRY2902616" value="N">
            <input type="hidden" name="OLD2902616" id="OLD2902616" value="">
            <input type="text" class="form-control" id="ENTRY2902616" name="ENTRY2902616" tabindex="440" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="The effective date of this person's medical form">&nbsp;<a href="#" tabindex="440" onclick="cal.select(window.easyform.ENTRY2902616,'ENTRY2902616X','MM/dd/yyyy', window.easyform.ENTRY2902616.value); return false;" name="ENTRY2902616X" id="ENTRY2902616X"><img src="images/calendar.gif" name="ENTRY2902616I" id="ENTRY2902616I"></a>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290271">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290271" style="visibility: hidden">
            *
            </span>
            Health Insurance
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290271" id="RVALENTRY290271" value="N">
            <input type="hidden" name="OLD290271" id="OLD290271" value="">
            <input type="text" class="form-control" id="ENTRY290271" name="ENTRY290271" tabindex="450" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The health insurance company and policy for this individual">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY29028149">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY29028149" style="visibility: hidden">
            *
            </span>
            Allergies
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY29028149" id="RVALENTRY29028149" value="N">
            <input type="hidden" name="OLD29028149" id="OLD29028149" value="">
            <input type="text" class="form-control" id="ENTRY29028149" name="ENTRY29028149" tabindex="460" size="50" onblur="TestRegExp(this,'','')" maxlength="256" value="" title="Allergies">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY54542149">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY54542149" style="visibility: hidden">
            *
            </span>
            Dietary Restrictions
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY54542149" id="RVALENTRY54542149" value="N">
            <input type="hidden" name="OLD54542149" id="OLD54542149" value="">
            <input type="text" class="form-control" id="ENTRY54542149" name="ENTRY54542149" tabindex="470" size="50" onblur="TestRegExp(this,'','')" maxlength="256" value="" title="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2900955" style="visibility: hidden">
            *
            </span>
            Driver's License
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2900955" id="RVALENTRY2900955" value="N">
            <span id="DIVENTRY2900955">
            <input type="hidden" name="OLD2900955" id="OLD2900955" value="">
            <input type="text" class="form-control" id="ENTRY2900955" name="ENTRY2900955" tabindex="481" size="30" onblur="TestRegExp(this,'','')" maxlength="30" value="" title="The drivers license number for this driver">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2900956" id="RVALENTRY2900956" value="N">
            <span id="DIVENTRY2900956">
            <input type="hidden" name="OLD2900956" id="OLD2900956" value="">
            <select id="ENTRY2900956" name="ENTRY2900956" class="form-control" onblur="TestRegExp(this,'','')" tabindex="482" title="The state in which this license was issued." size="1">
              <option selected="" value=""> </option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="BC">British Columbia</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MB">Manitoba</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="PR">Puerto Rico</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UA">United Arab Emirates</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY2900957" id="RVALENTRY2900957" value="N">
            <span id="DIVENTRY2900957">
            <input type="hidden" name="OLD2900957" id="OLD2900957" value="">
            <input type="text" class="form-control" id="ENTRY2900957" name="ENTRY2900957" tabindex="483" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date')" maxlength="10" value="" title="The expiration date for this license">&nbsp;<a href="#" tabindex="483" onclick="cal.select(window.easyform.ENTRY2900957,'ENTRY2900957X','MM/dd/yyyy', window.easyform.ENTRY2900957.value); return false;" name="ENTRY2900957X" id="ENTRY2900957X"><img src="images/calendar.gif" name="ENTRY2900957I" id="ENTRY2900957I"></a>
            <span class="entrypostscript">

            </span>
            </span>
          </td>
        </tr>
        <tr>
          <td class="bodyheading text-center" colspan="2">
            Vehicle
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY290161">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290161" style="visibility: hidden">
            *
            </span>
            Vehicle Make &amp; Model
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290161" id="RVALENTRY290161" value="N">
            <input type="hidden" name="OLD290161" id="OLD290161" value="">
            <input type="text" class="form-control" id="ENTRY290161" name="ENTRY290161" tabindex="490" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The make and model of the vehicle you would most likely use to transport members to an event.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290321">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290321" style="visibility: hidden">
            *
            </span>
            License Plate
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290321" id="RVALENTRY290321" value="N">
            <input type="hidden" name="OLD290321" id="OLD290321" value="">
            <input type="text" class="form-control" id="ENTRY290321" name="ENTRY290321" tabindex="500" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The license plate for this vehicle">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290171">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290171" style="visibility: hidden">
            *
            </span>
            Liability Insurance Per Person
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290171" id="RVALENTRY290171" value="N">
            <input type="hidden" name="OLD290171" id="OLD290171" value="">
            <input type="text" class="form-control" id="ENTRY290171" name="ENTRY290171" tabindex="510" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The dollar amount of public liability insurance per person currently in force on the vehcile that you would use to transport members to an event.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290181">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290181" style="visibility: hidden">
            *
            </span>
            Liability Insurance Per Accident
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290181" id="RVALENTRY290181" value="N">
            <input type="hidden" name="OLD290181" id="OLD290181" value="">
            <input type="text" class="form-control" id="ENTRY290181" name="ENTRY290181" tabindex="520" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The dollar amount of public liability insurance per accident currently in force on the vehcile that you would use to transport members to an event.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290191">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290191" style="visibility: hidden">
            *
            </span>
            Vehicle Property Damage Insurance
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290191" id="RVALENTRY290191" value="N">
            <input type="hidden" name="OLD290191" id="OLD290191" value="">
            <input type="text" class="form-control" id="ENTRY290191" name="ENTRY290191" tabindex="530" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The dollar amount of public liability insurance for property damage currently in force on the vehcile that you would use to transport members to an event.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290315">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290315" style="visibility: hidden">
            *
            </span>
            Seat Belts
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290315" id="RVALENTRY290315" value="N">
            <input type="hidden" name="OLD290315" id="OLD290315" value="">
            <input type="text" class="form-control" id="ENTRY290315" name="ENTRY290315" tabindex="540" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The number of seat belts in this vehicle">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2903311">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2903311" style="visibility: hidden">
            *
            </span>
            Trailer Hitch?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2903311" id="RVALENTRY2903311" value="N">
            <input type="hidden" name="OLD2903311" id="OLD2903311" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="550" value="Y" id="ENTRY2903311" name="ENTRY2903311" size="1" title="Indicates whether this vehicle has a trailer hitch">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="bodyheading text-center" colspan="2">
            Emergency Contacts
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY290351">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290351" style="visibility: hidden">
            *
            </span>
            Emergency Contact 1 Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290351" id="RVALENTRY290351" value="N">
            <input type="hidden" name="OLD290351" id="OLD290351" value="">
            <input type="text" class="form-control" id="ENTRY290351" name="ENTRY290351" tabindex="560" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The name of an emergency contact for this individual">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2903692">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2903692" style="visibility: hidden">
            *
            </span>
            Emergency Contact 1 Phone
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2903692" id="RVALENTRY2903692" value="N">
            <input type="hidden" name="OLD2903692" id="OLD2903692" value="">
            <input type="text" class="form-control" id="ENTRY2903692" name="ENTRY2903692" tabindex="570" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="The telephone number for this emergency contact">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY290371">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY290371" style="visibility: hidden">
            *
            </span>
            Emergency Contact 2 Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY290371" id="RVALENTRY290371" value="N">
            <input type="hidden" name="OLD290371" id="OLD290371" value="">
            <input type="text" class="form-control" id="ENTRY290371" name="ENTRY290371" tabindex="580" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The name of a second emergency contact for this individual">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2903892">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2903892" style="visibility: hidden">
            *
            </span>
            Emergency Contact 2 Phone
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2903892" id="RVALENTRY2903892" value="N">
            <input type="hidden" name="OLD2903892" id="OLD2903892" value="">
            <input type="text" class="form-control" id="ENTRY2903892" name="ENTRY2903892" tabindex="590" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="The telephone number for a second emergency contact for this individual">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="bodyheading text-center" colspan="2">
            <br><br>Web Host Services Administrative Contact
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <b>Control whether the company that provides this website, Web Host Services, may send you an e-mail announcing their monthly newsletter and/or reminding you when our subscription is up for renewal.</b>
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY4979611">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4979611" style="visibility: hidden">
            *
            </span>
            Don't send me the monthly Web Host Services newsletter
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4979611" id="RVALENTRY4979611" value="N">
            <input type="hidden" name="OLD4979611" id="OLD4979611" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="600" value="Y" id="ENTRY4979611" name="ENTRY4979611" size="1" title="Check this box to opt out of receiving the monthly newsletter email notification from our website hosting company, Web Host Services.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4979811">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4979811" style="visibility: hidden">
            *
            </span>
            Don't notify me when website subscription is up for renewal
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4979811" id="RVALENTRY4979811" value="N">
            <input type="hidden" name="OLD4979811" id="OLD4979811" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="610" value="Y" id="ENTRY4979811" name="ENTRY4979811" size="1" title="Check this box if you do not want to receive email reminders from our hosting service when our website subscription is up for renewal">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs7357">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON84" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="630" id="BUTTON85" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON85">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs7358">
  <div class="container-fluid container-flex">
    <div class="center-block table-responsive">
      <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid7358">
        <thead>
        <tr>
          <input type="hidden" name="ROWCOUNTCB7358" id="ROWCOUNTCB7358" value="2">
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Relative<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Relationship<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="text-center " id="TD7358ROW0DATA29050">
            Emmett  Bucklin
          </td>
          <td class="text-center " id="TD7358ROW0DATA29051">
            Child
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7358ROW1DATA29050">
            Mary  Bucklin
          </td>
          <td class="text-center " id="TD7358ROW1DATA29051">
            Spouse
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td colspan="2" class="text-center">
            <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=305&amp;Form_ID=1486&amp;ID=977&amp;Stack=1&amp;SectionID=7358&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=305&amp;Form_ID=1486&amp;ID=977&amp;Stack=1&amp;SectionID=7358&amp;ReportFormat=XLS','_blank');">
          </td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON1">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>