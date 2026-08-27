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
<link rel="stylesheet" type="text/css" href="https://ogo.blob.core.windows.net/cspack12austin/bootstrap_override_pack12_v23_202682781617853727410.css">
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/GY0lZUzQQgeA0wDxVI-SQEZw/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-NChJ2cXgODPp5agrUf6ahapDln/pkXyyqTB9Bce/aSQACS3OlLS1j3sKya1lVM+n"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script language="JavaScript" src="/asset/js/soapclient.js">
</script>
<script type="text/javascript" src="/asset/js/sortableV2.js">
</script>
<script language="JavaScript" src="/asset/js/CalendarPopup.js">
</script>
<script language="JavaScript" src="/asset/js/easyJSfunctionsV15.js">
</script>
<script language="JavaScript" src="/asset/js/GetDeviceWidth.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFboSzdzeeYXFUboKIdN5zm4ypKx-c6bU&amp;sensor=false" type="text/javascript"></script>
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
  if (onLoad||thisfield.name=='ENTRY1086767')
{
  LoadGoogleMap('ENTRY1086767');
}

    }
  //-->
</script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/66/2d/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/66/2d/util.js"></script></head>
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="318">
<input type="hidden" name="Form_ID" id="Form_ID" value="673">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="2">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=673&amp;FK=0&amp;ID=0&amp;Stack=2">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=2','');">My Contact Information</a>
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=2','');">My Contact Information</a>
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
  <li class="list-group-item"><a href="Help.aspx?ID=88" target="_blank">User Guide</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=673&amp;FK=0&amp;ID=0&amp;Stack=2&amp;Application_ID=2840
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
Add Event At New Location
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs2774">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr>
          <td class="text-center" colspan="2">
            <b>Do not use this form if you have already entered this location.</b>
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            This form allows you to create a new location.  When you press "Continue" you will then be able to create an event at that location.
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY108651">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY108651" style="visibility: visible">
            *
            </span>
            Location Name
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY108651" id="RVALENTRY108651" value="Y">
            <input type="hidden" name="OLD108651" id="OLD108651" value="">
            <input type="text" class="form-control" id="ENTRY108651" name="ENTRY108651" tabindex="110" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The name of this location" style="background-color: rgb(255, 170, 170);">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY1086810">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY1086810" style="visibility: visible">
            *
            </span>
            Description
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY1086810" id="RVALENTRY1086810" value="Y">
            <input type="hidden" name="OLD1086810" id="OLD1086810" value="">
            <textarea class="form-control" cols="50" rows="5" tabindex="120" onblur="TestRegExp(this,'','')" id="ENTRY1086810" name="ENTRY1086810" wrap="virtual" title="A description of this location"></textarea>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY257993">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY257993" style="visibility: hidden">
            *
            </span>
            Web Site
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY257993" id="RVALENTRY257993" value="N">
            <input type="hidden" name="OLD257993" id="OLD257993" value="">
            <input type="text" class="form-control" id="ENTRY257993" name="ENTRY257993" tabindex="130" size="50" onblur="TestRegExp(this,/(http|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?/,'Please enter the full URL beginning with http:// or https://')" maxlength="255" value="" title="Link to the web site for this location">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY1087352">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY1087352" style="visibility: hidden">
            *
            </span>
            Telephone Number
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY1087352" id="RVALENTRY1087352" value="N">
            <input type="hidden" name="OLD1087352" id="OLD1087352" value="">
            <input type="text" class="form-control" id="ENTRY1087352" name="ENTRY1087352" tabindex="140" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="The primary telephone number at this location">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY1086629" style="visibility: hidden">
            *
            </span>
            Address
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY1086629" id="RVALENTRY1086629" value="N">
            <span id="DIVENTRY1086629">
            <input type="hidden" name="OLD1086629" id="OLD1086629" value="">
            <input type="text" class="form-control" id="ENTRY1086629" name="ENTRY1086629" tabindex="151" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Street address or P.O. Box">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY1086630" id="RVALENTRY1086630" value="N">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY1086630" style="visibility: hidden">
            *
            </span>

            </label>
          </td>
          <td class="text-left">
            <span id="DIVENTRY1086630">
            <input type="hidden" name="OLD1086630" id="OLD1086630" value="">
            <input type="text" class="form-control" id="ENTRY1086630" name="ENTRY1086630" tabindex="152" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Continuation of address information">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY1086631" id="RVALENTRY1086631" value="N">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY1086631" style="visibility: hidden">
            *
            </span>
            City
            </label>
          </td>
          <td class="text-left">
            <span id="DIVENTRY1086631">
            <input type="hidden" name="OLD1086631" id="OLD1086631" value="">
            <input type="text" class="form-control" id="ENTRY1086631" name="ENTRY1086631" tabindex="153" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="City">
            <span class="entrypostscript">
            ,
            </span>
            </span>
            <input type="hidden" name="RVALENTRY1086632" id="RVALENTRY1086632" value="N">
            <span id="DIVENTRY1086632">
            <input type="hidden" name="OLD1086632" id="OLD1086632" value="">
            <select id="ENTRY1086632" name="ENTRY1086632" class="form-control" onblur="TestRegExp(this,'','')" tabindex="154" title="State" size="1">
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
            <input type="hidden" name="RVALENTRY1086633" id="RVALENTRY1086633" value="N">
            <span id="DIVENTRY1086633">
            <input type="hidden" name="OLD1086633" id="OLD1086633" value="">
            <input type="text" class="form-control" id="ENTRY1086633" name="ENTRY1086633" tabindex="155" size="10" onblur="TestRegExp(this,'','')" maxlength="10" value="" title="Zip code (postal code)">
            <span class="entrypostscript">

            </span>
            </span>
            <input type="hidden" name="RVALENTRY1086634" id="RVALENTRY1086634" value="N">
            <span id="DIVENTRY1086634">
            <input type="hidden" name="OLD1086634" id="OLD1086634" value="">
            <select id="ENTRY1086634" name="ENTRY1086634" class="form-control" onblur="TestRegExp(this,'','')" tabindex="156" title="Country" size="1">
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
        <tr>
          <td class="center-block" colspan="2">
            <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON12" type="button" name="javascript10872" title="Find Map Location" value="Find Map Location" onclick="GetGoogleGeoCode(easyGetFieldValue('ENTRY1086629')+' '+easyGetFieldValue('ENTRY1086630')+' '+easyGetFieldValue('ENTRY1086631')+' '+easyGetFieldValue('ENTRY1086632'),'ENTRY1086767');">
          </td>
        </tr>
        <tr id="DIVENTRY108715">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY108715" style="visibility: hidden">
            *
            </span>
            Distance
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY108715" id="RVALENTRY108715" value="N">
            <input type="hidden" name="OLD108715" id="OLD108715" value="">
            <input type="text" class="form-control" id="ENTRY108715" name="ENTRY108715" tabindex="170" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The distance to this location for use in computing mileage reimbursement.">
            <span class="entrypostscript">
            miles
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY1087010">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY1087010" style="visibility: hidden">
            *
            </span>
            Directions
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY1087010" id="RVALENTRY1087010" value="N">
            <input type="hidden" name="OLD1087010" id="OLD1087010" value="">
            <textarea class="form-control" cols="50" rows="5" tabindex="180" onblur="TestRegExp(this,'','')" id="ENTRY1087010" name="ENTRY1087010" wrap="virtual" title="Instructions on how to get to this location"></textarea>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY1086767">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY1086767" style="visibility: hidden">
            *
            </span>
            Map
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY1086767" id="RVALENTRY1086767" value="N">
            <input type="hidden" name="OLD1086767" id="OLD1086767" value="">
            <div id="DIVMAP1086767"></div><input type="text" class="form-control" id="ENTRY1086767" name="ENTRY1086767" tabindex="190" size="24" onchange="easyFieldExit(this);" onblur="TestRegExp(this,/[-+]?\b[0-9]*\.?[0-9]+\b, *[-+]?\b[0-9]*\.?[0-9]+\b/,'This field requires valid latitude and longitude cooardinates separated by a comma.  Example:  37.4419, -122.1419')" maxlength="255" value="" title="The latitude and longitude coordinates for this location.  Example:  37.4333, -122.4532">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY1086961" style="visibility: hidden">
              *
              </span>
              Photograph
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY1086961" id="RVALENTRY1086961" value="N">
              <span id="DIVENTRY1086961">
              <input type="hidden" name="OLD1086961" id="OLD1086961" value="">
              <span id="DIVPHOTO1086961"></span><input type="file" tabindex="201" id="ENTRY1086961" name="ENTRY1086961" class="form-control" onchange="ShowUploadPhoto(this);" title=""><input type="hidden" id="DELETEFILE1086961" name="DELETEFILE1086961" value="Save">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY1086964" id="RVALENTRY1086964" value="N">
              <span id="DIVENTRY1086964">
              <input type="hidden" name="OLD1086964" id="OLD1086964" value="">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY1086963" id="RVALENTRY1086963" value="N">
              <span id="DIVENTRY1086963">
              <input type="hidden" name="OLD1086963" id="OLD1086963" value="">
              <span class="entrypostscript">

              </span>
              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs2775">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON19" type="button" name="save add child" title="Continue" value="Continue" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON20" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="230" id="BUTTON21" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON21">
          </span>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY108651">
  </form>
  <div style="height: 100px;">&nbsp;</div>


<div id="1p-menu-live-region" role="status" aria-live="polite" aria-atomic="true" aria-relevant="all" style="clip: rect(0px, 0px, 0px, 0px); clip-path: inset(50%); height: 1px; overflow: hidden; position: fixed; top: 0px; left: 0px; white-space: nowrap; width: 1px; overflow-wrap: normal;">1Password menu is available. Press down arrow to select.</div></body></html>