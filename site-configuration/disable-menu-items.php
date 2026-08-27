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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="1211">
<input type="hidden" name="Form_ID" id="Form_ID" value="2533">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=1211&amp;Stack=0">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=3201&amp;Stack=0','');">TroopWebHost Administrative Contacts</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=1211">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=1211">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=1211">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=288" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=1211">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=1211">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=1211">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=1211">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=1211&amp;Stack=0&amp;Application_ID=2840
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
Disable Menu Items
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="2840">
<div class="new-row" id="fs11323">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY395901">
          <td class="text-center" "="" colspan="1">
            <input type="hidden" name="RVALENTRY395901" id="RVALENTRY395901" value="">
            <span class="bodysubheading">
            Pack 12 Austin
            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="1">
            Put a checkmark next to each menu item you wish to disable.
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="1">
            The marked items will no longer appear on ANY user's menu, including your own.
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="1">
            Click the <b>Save</b> button to save your selections.
            <br><br>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs11325">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON4" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="130" id="BUTTON5" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON5">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs11324">
  <div class="container-fluid container-flex">
    <div class="center-block " id="DIVCB11324">
      <table class="table table-striped table-bordered table-condensed table-responsive table-curved sortable" id="sortablegrid6">
        <thead>
        <tr>
          <th class="unsortable" id="TH11324" name="TH11324"><input type="checkbox" class="form-control" id="CB11324" name="CB11324" onclick="ClickCheckboxAll(this);"></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Menu Path<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
        </tr>
        </thead>
        <tbody>
        <input type="hidden" name="ROWCOUNTCB11324" id="ROWCOUNTCB11324" value="234">
        <tr>
          <input type="hidden" name="LINKCB11324ROW0" id="LINKCB11324ROW0" value="6496">
          <input type="hidden" name="CHILDCB11324ROW0" id="CHILDCB11324ROW0" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="140" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW0" name="CB11324ROW0" size="1">
            <input type="hidden" name="OLDCB11324ROW0" id="OLDCB11324ROW0" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW0DATA39595" id="OLDCB11324ROW0DATA39595" value="Home--&gt;About Us">
            Home--&gt;About Us
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW1" id="LINKCB11324ROW1" value="6775">
          <input type="hidden" name="CHILDCB11324ROW1" id="CHILDCB11324ROW1" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="160" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW1" name="CB11324ROW1" size="1">
            <input type="hidden" name="OLDCB11324ROW1" id="OLDCB11324ROW1" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW1DATA39595" id="OLDCB11324ROW1DATA39595" value="Home--&gt;Uniform">
            Home--&gt;Uniform
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW2" id="LINKCB11324ROW2" value="6578">
          <input type="hidden" name="CHILDCB11324ROW2" id="CHILDCB11324ROW2" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="180" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW2" name="CB11324ROW2" size="1">
            <input type="hidden" name="OLDCB11324ROW2" id="OLDCB11324ROW2" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW2DATA39595" id="OLDCB11324ROW2DATA39595" value="Home--&gt;Camping">
            Home--&gt;Camping
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW3" id="LINKCB11324ROW3" value="6776">
          <input type="hidden" name="CHILDCB11324ROW3" id="CHILDCB11324ROW3" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="200" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW3" name="CB11324ROW3" size="1">
            <input type="hidden" name="OLDCB11324ROW3" id="OLDCB11324ROW3" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW3DATA39595" id="OLDCB11324ROW3DATA39595" value="Home--&gt;Fundraising">
            Home--&gt;Fundraising
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW4" id="LINKCB11324ROW4" value="7593">
          <input type="hidden" name="CHILDCB11324ROW4" id="CHILDCB11324ROW4" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="220" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW4" name="CB11324ROW4" size="1">
            <input type="hidden" name="OLDCB11324ROW4" id="OLDCB11324ROW4" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW4DATA39595" id="OLDCB11324ROW4DATA39595" value="Home--&gt;Renewing Your Membership">
            Home--&gt;Renewing Your Membership
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW5" id="LINKCB11324ROW5" value="7069">
          <input type="hidden" name="CHILDCB11324ROW5" id="CHILDCB11324ROW5" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="240" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW5" name="CB11324ROW5" size="1">
            <input type="hidden" name="OLDCB11324ROW5" id="OLDCB11324ROW5" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW5DATA39595" id="OLDCB11324ROW5DATA39595" value="Home--&gt;How to Make Payments">
            Home--&gt;How to Make Payments
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW6" id="LINKCB11324ROW6" value="6579">
          <input type="hidden" name="CHILDCB11324ROW6" id="CHILDCB11324ROW6" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="260" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW6" name="CB11324ROW6" size="1">
            <input type="hidden" name="OLDCB11324ROW6" id="OLDCB11324ROW6" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW6DATA39595" id="OLDCB11324ROW6DATA39595" value="Home--&gt;Volunteering">
            Home--&gt;Volunteering
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW7" id="LINKCB11324ROW7" value="8610">
          <input type="hidden" name="CHILDCB11324ROW7" id="CHILDCB11324ROW7" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="280" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW7" name="CB11324ROW7" size="1">
            <input type="hidden" name="OLDCB11324ROW7" id="OLDCB11324ROW7" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW7DATA39595" id="OLDCB11324ROW7DATA39595" value="Home--&gt;Organization Chart">
            Home--&gt;Organization Chart
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW8" id="LINKCB11324ROW8" value="6764">
          <input type="hidden" name="CHILDCB11324ROW8" id="CHILDCB11324ROW8" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="300" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW8" name="CB11324ROW8" size="1">
            <input type="hidden" name="OLDCB11324ROW8" id="OLDCB11324ROW8" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW8DATA39595" id="OLDCB11324ROW8DATA39595" value="Home--&gt;Den Leader Resources">
            Home--&gt;Den Leader Resources
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW9" id="LINKCB11324ROW9" value="290">
          <input type="hidden" name="CHILDCB11324ROW9" id="CHILDCB11324ROW9" value="3220">
          <td>
            <input type="checkbox" class="form-control" tabindex="320" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW9" name="CB11324ROW9" size="1">
            <input type="hidden" name="OLDCB11324ROW9" id="OLDCB11324ROW9" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW9DATA39595" id="OLDCB11324ROW9DATA39595" value="Home--&gt;Our Leaders">
            Home--&gt;Our Leaders
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW10" id="LINKCB11324ROW10" value="291">
          <input type="hidden" name="CHILDCB11324ROW10" id="CHILDCB11324ROW10" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="340" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW10" name="CB11324ROW10" size="1">
            <input type="hidden" name="OLDCB11324ROW10" id="OLDCB11324ROW10" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW10DATA39595" id="OLDCB11324ROW10DATA39595" value="Home--&gt;Add &amp; Update Announcements">
            Home--&gt;Add &amp; Update Announcements
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW11" id="LINKCB11324ROW11" value="3451">
          <input type="hidden" name="CHILDCB11324ROW11" id="CHILDCB11324ROW11" value="3221">
          <td>
            <input type="checkbox" class="form-control" tabindex="360" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW11" name="CB11324ROW11" size="1">
            <input type="hidden" name="OLDCB11324ROW11" id="OLDCB11324ROW11" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW11DATA39595" id="OLDCB11324ROW11DATA39595" value="Home--&gt;Maintain Surveys">
            Home--&gt;Maintain Surveys
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW12" id="LINKCB11324ROW12" value="1529">
          <input type="hidden" name="CHILDCB11324ROW12" id="CHILDCB11324ROW12" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="380" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW12" name="CB11324ROW12" size="1">
            <input type="hidden" name="OLDCB11324ROW12" id="OLDCB11324ROW12" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW12DATA39595" id="OLDCB11324ROW12DATA39595" value="Home--&gt;Manage Custom Pages">
            Home--&gt;Manage Custom Pages
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW13" id="LINKCB11324ROW13" value="3389">
          <input type="hidden" name="CHILDCB11324ROW13" id="CHILDCB11324ROW13" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="400" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW13" name="CB11324ROW13" size="1">
            <input type="hidden" name="OLDCB11324ROW13" id="OLDCB11324ROW13" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW13DATA39595" id="OLDCB11324ROW13DATA39595" value="Home--&gt;View Contacts">
            Home--&gt;View Contacts
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW14" id="LINKCB11324ROW14" value="6287">
          <input type="hidden" name="CHILDCB11324ROW14" id="CHILDCB11324ROW14" value="4579">
          <td>
            <input type="checkbox" class="form-control" tabindex="420" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW14" name="CB11324ROW14" size="1">
            <input type="hidden" name="OLDCB11324ROW14" id="OLDCB11324ROW14" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW14DATA39595" id="OLDCB11324ROW14DATA39595" value="My Stuff--&gt;My Stuff Hub (Adult)">
            My Stuff--&gt;My Stuff Hub (Adult)
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW15" id="LINKCB11324ROW15" value="6286">
          <input type="hidden" name="CHILDCB11324ROW15" id="CHILDCB11324ROW15" value="4580">
          <td>
            <input type="checkbox" class="form-control" tabindex="440" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW15" name="CB11324ROW15" size="1">
            <input type="hidden" name="OLDCB11324ROW15" id="OLDCB11324ROW15" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW15DATA39595" id="OLDCB11324ROW15DATA39595" value="My Stuff--&gt;My Stuff Hub (Scout)">
            My Stuff--&gt;My Stuff Hub (Scout)
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW16" id="LINKCB11324ROW16" value="304">
          <input type="hidden" name="CHILDCB11324ROW16" id="CHILDCB11324ROW16" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="460" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW16" name="CB11324ROW16" size="1">
            <input type="hidden" name="OLDCB11324ROW16" id="OLDCB11324ROW16" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW16DATA39595" id="OLDCB11324ROW16DATA39595" value="My Stuff--&gt;Change My Password">
            My Stuff--&gt;Change My Password
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW17" id="LINKCB11324ROW17" value="305">
          <input type="hidden" name="CHILDCB11324ROW17" id="CHILDCB11324ROW17" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="480" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW17" name="CB11324ROW17" size="1">
            <input type="hidden" name="OLDCB11324ROW17" id="OLDCB11324ROW17" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW17DATA39595" id="OLDCB11324ROW17DATA39595" value="My Stuff--&gt;My Contact Information">
            My Stuff--&gt;My Contact Information
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW18" id="LINKCB11324ROW18" value="4654">
          <input type="hidden" name="CHILDCB11324ROW18" id="CHILDCB11324ROW18" value="4554">
          <td>
            <input type="checkbox" class="form-control" tabindex="500" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW18" name="CB11324ROW18" size="1">
            <input type="hidden" name="OLDCB11324ROW18" id="OLDCB11324ROW18" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW18DATA39595" id="OLDCB11324ROW18DATA39595" value="My Stuff--&gt;My Skills and Interests">
            My Stuff--&gt;My Skills and Interests
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW19" id="LINKCB11324ROW19" value="306">
          <input type="hidden" name="CHILDCB11324ROW19" id="CHILDCB11324ROW19" value="4564">
          <td>
            <input type="checkbox" class="form-control" tabindex="520" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW19" name="CB11324ROW19" size="1">
            <input type="hidden" name="OLDCB11324ROW19" id="OLDCB11324ROW19" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW19DATA39595" id="OLDCB11324ROW19DATA39595" value="My Stuff--&gt;My Account">
            My Stuff--&gt;My Account
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW20" id="LINKCB11324ROW20" value="307">
          <input type="hidden" name="CHILDCB11324ROW20" id="CHILDCB11324ROW20" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="540" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW20" name="CB11324ROW20" size="1">
            <input type="hidden" name="OLDCB11324ROW20" id="OLDCB11324ROW20" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW20DATA39595" id="OLDCB11324ROW20DATA39595" value="My Stuff--&gt;On-Line Payments">
            My Stuff--&gt;On-Line Payments
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW21" id="LINKCB11324ROW21" value="2599">
          <input type="hidden" name="CHILDCB11324ROW21" id="CHILDCB11324ROW21" value="5493">
          <td>
            <input type="checkbox" class="form-control" tabindex="560" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW21" name="CB11324ROW21" size="1">
            <input type="hidden" name="OLDCB11324ROW21" id="OLDCB11324ROW21" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW21DATA39595" id="OLDCB11324ROW21DATA39595" value="My Stuff--&gt;Request Expense Reimbursement">
            My Stuff--&gt;Request Expense Reimbursement
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW22" id="LINKCB11324ROW22" value="308">
          <input type="hidden" name="CHILDCB11324ROW22" id="CHILDCB11324ROW22" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="580" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW22" name="CB11324ROW22" size="1">
            <input type="hidden" name="OLDCB11324ROW22" id="OLDCB11324ROW22" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW22DATA39595" id="OLDCB11324ROW22DATA39595" value="My Stuff--&gt;My Family">
            My Stuff--&gt;My Family
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW23" id="LINKCB11324ROW23" value="309">
          <input type="hidden" name="CHILDCB11324ROW23" id="CHILDCB11324ROW23" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="600" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW23" name="CB11324ROW23" size="1">
            <input type="hidden" name="OLDCB11324ROW23" id="OLDCB11324ROW23" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW23DATA39595" id="OLDCB11324ROW23DATA39595" value="My Stuff--&gt;Sign-Up For Upcoming Events">
            My Stuff--&gt;Sign-Up For Upcoming Events
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW24" id="LINKCB11324ROW24" value="1779">
          <input type="hidden" name="CHILDCB11324ROW24" id="CHILDCB11324ROW24" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="620" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW24" name="CB11324ROW24" size="1">
            <input type="hidden" name="OLDCB11324ROW24" id="OLDCB11324ROW24" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW24DATA39595" id="OLDCB11324ROW24DATA39595" value="My Stuff--&gt;Sign-Up For Upcoming Shifts">
            My Stuff--&gt;Sign-Up For Upcoming Shifts
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW25" id="LINKCB11324ROW25" value="310">
          <input type="hidden" name="CHILDCB11324ROW25" id="CHILDCB11324ROW25" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="640" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW25" name="CB11324ROW25" size="1">
            <input type="hidden" name="OLDCB11324ROW25" id="OLDCB11324ROW25" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW25DATA39595" id="OLDCB11324ROW25DATA39595" value="My Stuff--&gt;Subscribe to Calendar">
            My Stuff--&gt;Subscribe to Calendar
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW26" id="LINKCB11324ROW26" value="3450">
          <input type="hidden" name="CHILDCB11324ROW26" id="CHILDCB11324ROW26" value="3698">
          <td>
            <input type="checkbox" class="form-control" tabindex="660" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW26" name="CB11324ROW26" size="1">
            <input type="hidden" name="OLDCB11324ROW26" id="OLDCB11324ROW26" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW26DATA39595" id="OLDCB11324ROW26DATA39595" value="My Stuff--&gt;Surveys">
            My Stuff--&gt;Surveys
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW27" id="LINKCB11324ROW27" value="311">
          <input type="hidden" name="CHILDCB11324ROW27" id="CHILDCB11324ROW27" value="3514">
          <td>
            <input type="checkbox" class="form-control" tabindex="680" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW27" name="CB11324ROW27" size="1">
            <input type="hidden" name="OLDCB11324ROW27" id="OLDCB11324ROW27" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW27DATA39595" id="OLDCB11324ROW27DATA39595" value="My Stuff--&gt;My Library Materials">
            My Stuff--&gt;My Library Materials
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW28" id="LINKCB11324ROW28" value="312">
          <input type="hidden" name="CHILDCB11324ROW28" id="CHILDCB11324ROW28" value="3515">
          <td>
            <input type="checkbox" class="form-control" tabindex="700" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW28" name="CB11324ROW28" size="1">
            <input type="hidden" name="OLDCB11324ROW28" id="OLDCB11324ROW28" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW28DATA39595" id="OLDCB11324ROW28DATA39595" value="My Stuff--&gt;My Equipment">
            My Stuff--&gt;My Equipment
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW29" id="LINKCB11324ROW29" value="313">
          <input type="hidden" name="CHILDCB11324ROW29" id="CHILDCB11324ROW29" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="720" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW29" name="CB11324ROW29" size="1">
            <input type="hidden" name="OLDCB11324ROW29" id="OLDCB11324ROW29" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW29DATA39595" id="OLDCB11324ROW29DATA39595" value="My Stuff--&gt;My Training History">
            My Stuff--&gt;My Training History
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW30" id="LINKCB11324ROW30" value="314">
          <input type="hidden" name="CHILDCB11324ROW30" id="CHILDCB11324ROW30" value="4566">
          <td>
            <input type="checkbox" class="form-control" tabindex="740" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW30" name="CB11324ROW30" size="1">
            <input type="hidden" name="OLDCB11324ROW30" id="OLDCB11324ROW30" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW30DATA39595" id="OLDCB11324ROW30DATA39595" value="My Stuff--&gt;My Adventures &amp; Badges">
            My Stuff--&gt;My Adventures &amp; Badges
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW31" id="LINKCB11324ROW31" value="315">
          <input type="hidden" name="CHILDCB11324ROW31" id="CHILDCB11324ROW31" value="4567">
          <td>
            <input type="checkbox" class="form-control" tabindex="760" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW31" name="CB11324ROW31" size="1">
            <input type="hidden" name="OLDCB11324ROW31" id="OLDCB11324ROW31" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW31DATA39595" id="OLDCB11324ROW31DATA39595" value="My Stuff--&gt;My Awards">
            My Stuff--&gt;My Awards
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW32" id="LINKCB11324ROW32" value="316">
          <input type="hidden" name="CHILDCB11324ROW32" id="CHILDCB11324ROW32" value="3699">
          <td>
            <input type="checkbox" class="form-control" tabindex="780" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW32" name="CB11324ROW32" size="1">
            <input type="hidden" name="OLDCB11324ROW32" id="OLDCB11324ROW32" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW32DATA39595" id="OLDCB11324ROW32DATA39595" value="My Stuff--&gt;My Fundraiser Orders">
            My Stuff--&gt;My Fundraiser Orders
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW33" id="LINKCB11324ROW33" value="317">
          <input type="hidden" name="CHILDCB11324ROW33" id="CHILDCB11324ROW33" value="3700">
          <td>
            <input type="checkbox" class="form-control" tabindex="800" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW33" name="CB11324ROW33" size="1">
            <input type="hidden" name="OLDCB11324ROW33" id="OLDCB11324ROW33" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW33DATA39595" id="OLDCB11324ROW33DATA39595" value="My Stuff--&gt;My Fundraiser URL &amp; Prize">
            My Stuff--&gt;My Fundraiser URL &amp; Prize
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW34" id="LINKCB11324ROW34" value="331">
          <input type="hidden" name="CHILDCB11324ROW34" id="CHILDCB11324ROW34" value="4568">
          <td>
            <input type="checkbox" class="form-control" tabindex="820" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW34" name="CB11324ROW34" size="1">
            <input type="hidden" name="OLDCB11324ROW34" id="OLDCB11324ROW34" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW34DATA39595" id="OLDCB11324ROW34DATA39595" value="Communication--&gt;Newsletters">
            Communication--&gt;Newsletters
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW35" id="LINKCB11324ROW35" value="332">
          <input type="hidden" name="CHILDCB11324ROW35" id="CHILDCB11324ROW35" value="4569">
          <td>
            <input type="checkbox" class="form-control" tabindex="840" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW35" name="CB11324ROW35" size="1">
            <input type="hidden" name="OLDCB11324ROW35" id="OLDCB11324ROW35" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW35DATA39595" id="OLDCB11324ROW35DATA39595" value="Communication--&gt;Publish Newsletters">
            Communication--&gt;Publish Newsletters
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW36" id="LINKCB11324ROW36" value="2959">
          <input type="hidden" name="CHILDCB11324ROW36" id="CHILDCB11324ROW36" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="860" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW36" name="CB11324ROW36" size="1">
            <input type="hidden" name="OLDCB11324ROW36" id="OLDCB11324ROW36" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW36DATA39595" id="OLDCB11324ROW36DATA39595" value="Communication--&gt;Quick Text Message">
            Communication--&gt;Quick Text Message
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW37" id="LINKCB11324ROW37" value="333">
          <input type="hidden" name="CHILDCB11324ROW37" id="CHILDCB11324ROW37" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="880" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW37" name="CB11324ROW37" size="1">
            <input type="hidden" name="OLDCB11324ROW37" id="OLDCB11324ROW37" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW37DATA39595" id="OLDCB11324ROW37DATA39595" value="Communication--&gt;Send E-Mail">
            Communication--&gt;Send E-Mail
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW38" id="LINKCB11324ROW38" value="334">
          <input type="hidden" name="CHILDCB11324ROW38" id="CHILDCB11324ROW38" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="900" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW38" name="CB11324ROW38" size="1">
            <input type="hidden" name="OLDCB11324ROW38" id="OLDCB11324ROW38" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW38DATA39595" id="OLDCB11324ROW38DATA39595" value="Communication--&gt;Send E-Mail To E-Mail Group">
            Communication--&gt;Send E-Mail To E-Mail Group
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW39" id="LINKCB11324ROW39" value="335">
          <input type="hidden" name="CHILDCB11324ROW39" id="CHILDCB11324ROW39" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="920" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW39" name="CB11324ROW39" size="1">
            <input type="hidden" name="OLDCB11324ROW39" id="OLDCB11324ROW39" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW39DATA39595" id="OLDCB11324ROW39DATA39595" value="Communication--&gt;My Inbox">
            Communication--&gt;My Inbox
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW40" id="LINKCB11324ROW40" value="336">
          <input type="hidden" name="CHILDCB11324ROW40" id="CHILDCB11324ROW40" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="940" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW40" name="CB11324ROW40" size="1">
            <input type="hidden" name="OLDCB11324ROW40" id="OLDCB11324ROW40" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW40DATA39595" id="OLDCB11324ROW40DATA39595" value="Communication--&gt;My Outbox">
            Communication--&gt;My Outbox
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW41" id="LINKCB11324ROW41" value="337">
          <input type="hidden" name="CHILDCB11324ROW41" id="CHILDCB11324ROW41" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="960" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW41" name="CB11324ROW41" size="1">
            <input type="hidden" name="OLDCB11324ROW41" id="OLDCB11324ROW41" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW41DATA39595" id="OLDCB11324ROW41DATA39595" value="Communication--&gt;My E-Mail Delivery Status">
            Communication--&gt;My E-Mail Delivery Status
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW42" id="LINKCB11324ROW42" value="338">
          <input type="hidden" name="CHILDCB11324ROW42" id="CHILDCB11324ROW42" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="980" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW42" name="CB11324ROW42" size="1">
            <input type="hidden" name="OLDCB11324ROW42" id="OLDCB11324ROW42" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW42DATA39595" id="OLDCB11324ROW42DATA39595" value="Communication--&gt;View All E-Mail">
            Communication--&gt;View All E-Mail
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW43" id="LINKCB11324ROW43" value="339">
          <input type="hidden" name="CHILDCB11324ROW43" id="CHILDCB11324ROW43" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1000" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW43" name="CB11324ROW43" size="1">
            <input type="hidden" name="OLDCB11324ROW43" id="OLDCB11324ROW43" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW43DATA39595" id="OLDCB11324ROW43DATA39595" value="Communication--&gt;Blocked E-Mail Addresses">
            Communication--&gt;Blocked E-Mail Addresses
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW44" id="LINKCB11324ROW44" value="340">
          <input type="hidden" name="CHILDCB11324ROW44" id="CHILDCB11324ROW44" value="3701">
          <td>
            <input type="checkbox" class="form-control" tabindex="1020" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW44" name="CB11324ROW44" size="1">
            <input type="hidden" name="OLDCB11324ROW44" id="OLDCB11324ROW44" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW44DATA39595" id="OLDCB11324ROW44DATA39595" value="Communication--&gt;Group Forum">
            Communication--&gt;Group Forum
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW45" id="LINKCB11324ROW45" value="341">
          <input type="hidden" name="CHILDCB11324ROW45" id="CHILDCB11324ROW45" value="3702">
          <td>
            <input type="checkbox" class="form-control" tabindex="1040" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW45" name="CB11324ROW45" size="1">
            <input type="hidden" name="OLDCB11324ROW45" id="OLDCB11324ROW45" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW45DATA39595" id="OLDCB11324ROW45DATA39595" value="Communication--&gt;My Forum Postings">
            Communication--&gt;My Forum Postings
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW46" id="LINKCB11324ROW46" value="342">
          <input type="hidden" name="CHILDCB11324ROW46" id="CHILDCB11324ROW46" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1060" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW46" name="CB11324ROW46" size="1">
            <input type="hidden" name="OLDCB11324ROW46" id="OLDCB11324ROW46" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW46DATA39595" id="OLDCB11324ROW46DATA39595" value="Communication--&gt;Set Up Automated Newsletter">
            Communication--&gt;Set Up Automated Newsletter
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW47" id="LINKCB11324ROW47" value="5787">
          <input type="hidden" name="CHILDCB11324ROW47" id="CHILDCB11324ROW47" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1080" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW47" name="CB11324ROW47" size="1">
            <input type="hidden" name="OLDCB11324ROW47" id="OLDCB11324ROW47" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW47DATA39595" id="OLDCB11324ROW47DATA39595" value="Events--&gt;Events Hub">
            Events--&gt;Events Hub
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW48" id="LINKCB11324ROW48" value="318">
          <input type="hidden" name="CHILDCB11324ROW48" id="CHILDCB11324ROW48" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1100" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW48" name="CB11324ROW48" size="1">
            <input type="hidden" name="OLDCB11324ROW48" id="OLDCB11324ROW48" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW48DATA39595" id="OLDCB11324ROW48DATA39595" value="Events--&gt;Calendar">
            Events--&gt;Calendar
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW49" id="LINKCB11324ROW49" value="319">
          <input type="hidden" name="CHILDCB11324ROW49" id="CHILDCB11324ROW49" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1120" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW49" name="CB11324ROW49" size="1">
            <input type="hidden" name="OLDCB11324ROW49" id="OLDCB11324ROW49" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW49DATA39595" id="OLDCB11324ROW49DATA39595" value="Events--&gt;Add &amp; Update Events">
            Events--&gt;Add &amp; Update Events
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW50" id="LINKCB11324ROW50" value="320">
          <input type="hidden" name="CHILDCB11324ROW50" id="CHILDCB11324ROW50" value="4570">
          <td>
            <input type="checkbox" class="form-control" tabindex="1140" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW50" name="CB11324ROW50" size="1">
            <input type="hidden" name="OLDCB11324ROW50" id="OLDCB11324ROW50" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW50DATA39595" id="OLDCB11324ROW50DATA39595" value="Events--&gt;Take Attendance For Events">
            Events--&gt;Take Attendance For Events
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW51" id="LINKCB11324ROW51" value="1773">
          <input type="hidden" name="CHILDCB11324ROW51" id="CHILDCB11324ROW51" value="4571">
          <td>
            <input type="checkbox" class="form-control" tabindex="1160" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW51" name="CB11324ROW51" size="1">
            <input type="hidden" name="OLDCB11324ROW51" id="OLDCB11324ROW51" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW51DATA39595" id="OLDCB11324ROW51DATA39595" value="Events--&gt;Take Attendance For Shifts">
            Events--&gt;Take Attendance For Shifts
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW52" id="LINKCB11324ROW52" value="321">
          <input type="hidden" name="CHILDCB11324ROW52" id="CHILDCB11324ROW52" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1180" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW52" name="CB11324ROW52" size="1">
            <input type="hidden" name="OLDCB11324ROW52" id="OLDCB11324ROW52" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW52DATA39595" id="OLDCB11324ROW52DATA39595" value="Events--&gt;Event Documents">
            Events--&gt;Event Documents
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW53" id="LINKCB11324ROW53" value="324">
          <input type="hidden" name="CHILDCB11324ROW53" id="CHILDCB11324ROW53" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1200" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW53" name="CB11324ROW53" size="1">
            <input type="hidden" name="OLDCB11324ROW53" id="OLDCB11324ROW53" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW53DATA39595" id="OLDCB11324ROW53DATA39595" value="Events--&gt;Event Locations">
            Events--&gt;Event Locations
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW54" id="LINKCB11324ROW54" value="5430">
          <input type="hidden" name="CHILDCB11324ROW54" id="CHILDCB11324ROW54" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1220" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW54" name="CB11324ROW54" size="1">
            <input type="hidden" name="OLDCB11324ROW54" id="OLDCB11324ROW54" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW54DATA39595" id="OLDCB11324ROW54DATA39595" value="Events--&gt;Merge Duplicate Locations">
            Events--&gt;Merge Duplicate Locations
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW55" id="LINKCB11324ROW55" value="325">
          <input type="hidden" name="CHILDCB11324ROW55" id="CHILDCB11324ROW55" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1240" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW55" name="CB11324ROW55" size="1">
            <input type="hidden" name="OLDCB11324ROW55" id="OLDCB11324ROW55" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW55DATA39595" id="OLDCB11324ROW55DATA39595" value="Events--&gt;Copy An Event">
            Events--&gt;Copy An Event
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW56" id="LINKCB11324ROW56" value="1818">
          <input type="hidden" name="CHILDCB11324ROW56" id="CHILDCB11324ROW56" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1260" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW56" name="CB11324ROW56" size="1">
            <input type="hidden" name="OLDCB11324ROW56" id="OLDCB11324ROW56" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW56DATA39595" id="OLDCB11324ROW56DATA39595" value="Events--&gt;Copy Monthly Event">
            Events--&gt;Copy Monthly Event
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW57" id="LINKCB11324ROW57" value="5582">
          <input type="hidden" name="CHILDCB11324ROW57" id="CHILDCB11324ROW57" value="4572">
          <td>
            <input type="checkbox" class="form-control" tabindex="1280" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW57" name="CB11324ROW57" size="1">
            <input type="hidden" name="OLDCB11324ROW57" id="OLDCB11324ROW57" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW57DATA39595" id="OLDCB11324ROW57DATA39595" value="Events--&gt;National Holidays">
            Events--&gt;National Holidays
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW58" id="LINKCB11324ROW58" value="2762">
          <input type="hidden" name="CHILDCB11324ROW58" id="CHILDCB11324ROW58" value="4573">
          <td>
            <input type="checkbox" class="form-control" tabindex="1300" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW58" name="CB11324ROW58" size="1">
            <input type="hidden" name="OLDCB11324ROW58" id="OLDCB11324ROW58" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW58DATA39595" id="OLDCB11324ROW58DATA39595" value="Events--&gt;Export Events To Excel">
            Events--&gt;Export Events To Excel
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW59" id="LINKCB11324ROW59" value="2806">
          <input type="hidden" name="CHILDCB11324ROW59" id="CHILDCB11324ROW59" value="4574">
          <td>
            <input type="checkbox" class="form-control" tabindex="1320" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW59" name="CB11324ROW59" size="1">
            <input type="hidden" name="OLDCB11324ROW59" id="OLDCB11324ROW59" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW59DATA39595" id="OLDCB11324ROW59DATA39595" value="Events--&gt;Export Event Participation To Excel">
            Events--&gt;Export Event Participation To Excel
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW60" id="LINKCB11324ROW60" value="326">
          <input type="hidden" name="CHILDCB11324ROW60" id="CHILDCB11324ROW60" value="4547">
          <td>
            <input type="checkbox" class="form-control" tabindex="1340" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW60" name="CB11324ROW60" size="1">
            <input type="hidden" name="OLDCB11324ROW60" id="OLDCB11324ROW60" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW60DATA39595" id="OLDCB11324ROW60DATA39595" value="Photo Gallery--&gt;View Photos">
            Photo Gallery--&gt;View Photos
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW61" id="LINKCB11324ROW61" value="327">
          <input type="hidden" name="CHILDCB11324ROW61" id="CHILDCB11324ROW61" value="4548">
          <td>
            <input type="checkbox" class="form-control" tabindex="1360" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW61" name="CB11324ROW61" size="1">
            <input type="hidden" name="OLDCB11324ROW61" id="OLDCB11324ROW61" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW61DATA39595" id="OLDCB11324ROW61DATA39595" value="Photo Gallery--&gt;View Videos">
            Photo Gallery--&gt;View Videos
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW62" id="LINKCB11324ROW62" value="328">
          <input type="hidden" name="CHILDCB11324ROW62" id="CHILDCB11324ROW62" value="4549">
          <td>
            <input type="checkbox" class="form-control" tabindex="1380" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW62" name="CB11324ROW62" size="1">
            <input type="hidden" name="OLDCB11324ROW62" id="OLDCB11324ROW62" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW62DATA39595" id="OLDCB11324ROW62DATA39595" value="Photo Gallery--&gt;Upload Photos">
            Photo Gallery--&gt;Upload Photos
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW63" id="LINKCB11324ROW63" value="329">
          <input type="hidden" name="CHILDCB11324ROW63" id="CHILDCB11324ROW63" value="4550">
          <td>
            <input type="checkbox" class="form-control" tabindex="1400" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW63" name="CB11324ROW63" size="1">
            <input type="hidden" name="OLDCB11324ROW63" id="OLDCB11324ROW63" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW63DATA39595" id="OLDCB11324ROW63DATA39595" value="Photo Gallery--&gt;Create Video Links">
            Photo Gallery--&gt;Create Video Links
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW64" id="LINKCB11324ROW64" value="330">
          <input type="hidden" name="CHILDCB11324ROW64" id="CHILDCB11324ROW64" value="4551">
          <td>
            <input type="checkbox" class="form-control" tabindex="1420" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW64" name="CB11324ROW64" size="1">
            <input type="hidden" name="OLDCB11324ROW64" id="OLDCB11324ROW64" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW64DATA39595" id="OLDCB11324ROW64DATA39595" value="Photo Gallery--&gt;View &amp; Update All Photos">
            Photo Gallery--&gt;View &amp; Update All Photos
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW65" id="LINKCB11324ROW65" value="3432">
          <input type="hidden" name="CHILDCB11324ROW65" id="CHILDCB11324ROW65" value="4552">
          <td>
            <input type="checkbox" class="form-control" tabindex="1440" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW65" name="CB11324ROW65" size="1">
            <input type="hidden" name="OLDCB11324ROW65" id="OLDCB11324ROW65" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW65DATA39595" id="OLDCB11324ROW65DATA39595" value="Photo Gallery--&gt;Delete Multiple Photos">
            Photo Gallery--&gt;Delete Multiple Photos
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW66" id="LINKCB11324ROW66" value="5076">
          <input type="hidden" name="CHILDCB11324ROW66" id="CHILDCB11324ROW66" value="4553">
          <td>
            <input type="checkbox" class="form-control" tabindex="1460" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW66" name="CB11324ROW66" size="1">
            <input type="hidden" name="OLDCB11324ROW66" id="OLDCB11324ROW66" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW66DATA39595" id="OLDCB11324ROW66DATA39595" value="Photo Gallery--&gt;Download Photos">
            Photo Gallery--&gt;Download Photos
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW67" id="LINKCB11324ROW67" value="5788">
          <input type="hidden" name="CHILDCB11324ROW67" id="CHILDCB11324ROW67" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1480" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW67" name="CB11324ROW67" size="1">
            <input type="hidden" name="OLDCB11324ROW67" id="OLDCB11324ROW67" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW67DATA39595" id="OLDCB11324ROW67DATA39595" value="Membership--&gt;Membership Hub">
            Membership--&gt;Membership Hub
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW68" id="LINKCB11324ROW68" value="2538">
          <input type="hidden" name="CHILDCB11324ROW68" id="CHILDCB11324ROW68" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1500" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW68" name="CB11324ROW68" size="1">
            <input type="hidden" name="OLDCB11324ROW68" id="OLDCB11324ROW68" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW68DATA39595" id="OLDCB11324ROW68DATA39595" value="Membership--&gt;Quick Dial">
            Membership--&gt;Quick Dial
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW69" id="LINKCB11324ROW69" value="292">
          <input type="hidden" name="CHILDCB11324ROW69" id="CHILDCB11324ROW69" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1520" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW69" name="CB11324ROW69" size="1">
            <input type="hidden" name="OLDCB11324ROW69" id="OLDCB11324ROW69" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW69DATA39595" id="OLDCB11324ROW69DATA39595" value="Membership--&gt;Active Members">
            Membership--&gt;Active Members
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW70" id="LINKCB11324ROW70" value="293">
          <input type="hidden" name="CHILDCB11324ROW70" id="CHILDCB11324ROW70" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1540" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW70" name="CB11324ROW70" size="1">
            <input type="hidden" name="OLDCB11324ROW70" id="OLDCB11324ROW70" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW70DATA39595" id="OLDCB11324ROW70DATA39595" value="Membership--&gt;Inactive Members">
            Membership--&gt;Inactive Members
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW71" id="LINKCB11324ROW71" value="2711">
          <input type="hidden" name="CHILDCB11324ROW71" id="CHILDCB11324ROW71" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1560" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW71" name="CB11324ROW71" size="1">
            <input type="hidden" name="OLDCB11324ROW71" id="OLDCB11324ROW71" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW71DATA39595" id="OLDCB11324ROW71DATA39595" value="Membership--&gt;Transfer Scouts">
            Membership--&gt;Transfer Scouts
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW72" id="LINKCB11324ROW72" value="5838">
          <input type="hidden" name="CHILDCB11324ROW72" id="CHILDCB11324ROW72" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1580" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW72" name="CB11324ROW72" size="1">
            <input type="hidden" name="OLDCB11324ROW72" id="OLDCB11324ROW72" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW72DATA39595" id="OLDCB11324ROW72DATA39595" value="Membership--&gt;Merge Duplicate Members">
            Membership--&gt;Merge Duplicate Members
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW73" id="LINKCB11324ROW73" value="296">
          <input type="hidden" name="CHILDCB11324ROW73" id="CHILDCB11324ROW73" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1600" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW73" name="CB11324ROW73" size="1">
            <input type="hidden" name="OLDCB11324ROW73" id="OLDCB11324ROW73" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW73DATA39595" id="OLDCB11324ROW73DATA39595" value="Membership--&gt;Dynamic Subgroups">
            Membership--&gt;Dynamic Subgroups
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW74" id="LINKCB11324ROW74" value="297">
          <input type="hidden" name="CHILDCB11324ROW74" id="CHILDCB11324ROW74" value="4575">
          <td>
            <input type="checkbox" class="form-control" tabindex="1620" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW74" name="CB11324ROW74" size="1">
            <input type="hidden" name="OLDCB11324ROW74" id="OLDCB11324ROW74" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW74DATA39595" id="OLDCB11324ROW74DATA39595" value="Membership--&gt;Committees">
            Membership--&gt;Committees
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW75" id="LINKCB11324ROW75" value="4655">
          <input type="hidden" name="CHILDCB11324ROW75" id="CHILDCB11324ROW75" value="4555">
          <td>
            <input type="checkbox" class="form-control" tabindex="1640" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW75" name="CB11324ROW75" size="1">
            <input type="hidden" name="OLDCB11324ROW75" id="OLDCB11324ROW75" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW75DATA39595" id="OLDCB11324ROW75DATA39595" value="Membership--&gt;Skills and Interests">
            Membership--&gt;Skills and Interests
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW76" id="LINKCB11324ROW76" value="299">
          <input type="hidden" name="CHILDCB11324ROW76" id="CHILDCB11324ROW76" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1660" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW76" name="CB11324ROW76" size="1">
            <input type="hidden" name="OLDCB11324ROW76" id="OLDCB11324ROW76" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW76DATA39595" id="OLDCB11324ROW76DATA39595" value="Membership--&gt;Leadership">
            Membership--&gt;Leadership
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW77" id="LINKCB11324ROW77" value="300">
          <input type="hidden" name="CHILDCB11324ROW77" id="CHILDCB11324ROW77" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1680" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW77" name="CB11324ROW77" size="1">
            <input type="hidden" name="OLDCB11324ROW77" id="OLDCB11324ROW77" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW77DATA39595" id="OLDCB11324ROW77DATA39595" value="Membership--&gt;Training">
            Membership--&gt;Training
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW78" id="LINKCB11324ROW78" value="5110">
          <input type="hidden" name="CHILDCB11324ROW78" id="CHILDCB11324ROW78" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1700" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW78" name="CB11324ROW78" size="1">
            <input type="hidden" name="OLDCB11324ROW78" id="OLDCB11324ROW78" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW78DATA39595" id="OLDCB11324ROW78DATA39595" value="Membership--&gt;Upload Training From My.Scouting.Org">
            Membership--&gt;Upload Training From My.Scouting.Org
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW79" id="LINKCB11324ROW79" value="301">
          <input type="hidden" name="CHILDCB11324ROW79" id="CHILDCB11324ROW79" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1720" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW79" name="CB11324ROW79" size="1">
            <input type="hidden" name="OLDCB11324ROW79" id="OLDCB11324ROW79" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW79DATA39595" id="OLDCB11324ROW79DATA39595" value="Membership--&gt;Advance Grade">
            Membership--&gt;Advance Grade
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW80" id="LINKCB11324ROW80" value="303">
          <input type="hidden" name="CHILDCB11324ROW80" id="CHILDCB11324ROW80" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1740" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW80" name="CB11324ROW80" size="1">
            <input type="hidden" name="OLDCB11324ROW80" id="OLDCB11324ROW80" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW80DATA39595" id="OLDCB11324ROW80DATA39595" value="Membership--&gt;Export Roster to Excel">
            Membership--&gt;Export Roster to Excel
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW81" id="LINKCB11324ROW81" value="417">
          <input type="hidden" name="CHILDCB11324ROW81" id="CHILDCB11324ROW81" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1760" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW81" name="CB11324ROW81" size="1">
            <input type="hidden" name="OLDCB11324ROW81" id="OLDCB11324ROW81" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW81DATA39595" id="OLDCB11324ROW81DATA39595" value="Cub Scouts--&gt;Update Cub Scout Age Levels">
            Cub Scouts--&gt;Update Cub Scout Age Levels
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW82" id="LINKCB11324ROW82" value="418">
          <input type="hidden" name="CHILDCB11324ROW82" id="CHILDCB11324ROW82" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1780" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW82" name="CB11324ROW82" size="1">
            <input type="hidden" name="OLDCB11324ROW82" id="OLDCB11324ROW82" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW82DATA39595" id="OLDCB11324ROW82DATA39595" value="Cub Scouts--&gt;Adventures &amp; Badges">
            Cub Scouts--&gt;Adventures &amp; Badges
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW83" id="LINKCB11324ROW83" value="419">
          <input type="hidden" name="CHILDCB11324ROW83" id="CHILDCB11324ROW83" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1800" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW83" name="CB11324ROW83" size="1">
            <input type="hidden" name="OLDCB11324ROW83" id="OLDCB11324ROW83" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW83DATA39595" id="OLDCB11324ROW83DATA39595" value="Cub Scouts--&gt;Special Awards">
            Cub Scouts--&gt;Special Awards
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW84" id="LINKCB11324ROW84" value="4635">
          <input type="hidden" name="CHILDCB11324ROW84" id="CHILDCB11324ROW84" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1820" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW84" name="CB11324ROW84" size="1">
            <input type="hidden" name="OLDCB11324ROW84" id="OLDCB11324ROW84" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW84DATA39595" id="OLDCB11324ROW84DATA39595" value="Cub Scouts--&gt;Scouting History">
            Cub Scouts--&gt;Scouting History
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW85" id="LINKCB11324ROW85" value="421">
          <input type="hidden" name="CHILDCB11324ROW85" id="CHILDCB11324ROW85" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1840" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW85" name="CB11324ROW85" size="1">
            <input type="hidden" name="OLDCB11324ROW85" id="OLDCB11324ROW85" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW85DATA39595" id="OLDCB11324ROW85DATA39595" value="Cub Scouts--&gt;Pending Awards">
            Cub Scouts--&gt;Pending Awards
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW86" id="LINKCB11324ROW86" value="2916">
          <input type="hidden" name="CHILDCB11324ROW86" id="CHILDCB11324ROW86" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1860" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW86" name="CB11324ROW86" size="1">
            <input type="hidden" name="OLDCB11324ROW86" id="OLDCB11324ROW86" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW86DATA39595" id="OLDCB11324ROW86DATA39595" value="Cub Scouts--&gt;Pending Awards Report">
            Cub Scouts--&gt;Pending Awards Report
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW87" id="LINKCB11324ROW87" value="422">
          <input type="hidden" name="CHILDCB11324ROW87" id="CHILDCB11324ROW87" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1880" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW87" name="CB11324ROW87" size="1">
            <input type="hidden" name="OLDCB11324ROW87" id="OLDCB11324ROW87" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW87DATA39595" id="OLDCB11324ROW87DATA39595" value="Cub Scouts--&gt;Pending Award Counts">
            Cub Scouts--&gt;Pending Award Counts
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW88" id="LINKCB11324ROW88" value="5325">
          <input type="hidden" name="CHILDCB11324ROW88" id="CHILDCB11324ROW88" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1900" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW88" name="CB11324ROW88" size="1">
            <input type="hidden" name="OLDCB11324ROW88" id="OLDCB11324ROW88" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW88DATA39595" id="OLDCB11324ROW88DATA39595" value="Cub Scouts--&gt;Uncompleted Requirements Report">
            Cub Scouts--&gt;Uncompleted Requirements Report
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW89" id="LINKCB11324ROW89" value="420">
          <input type="hidden" name="CHILDCB11324ROW89" id="CHILDCB11324ROW89" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1920" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW89" name="CB11324ROW89" size="1">
            <input type="hidden" name="OLDCB11324ROW89" id="OLDCB11324ROW89" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW89DATA39595" id="OLDCB11324ROW89DATA39595" value="Cub Scouts--&gt;Set Award Date">
            Cub Scouts--&gt;Set Award Date
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW90" id="LINKCB11324ROW90" value="4594">
          <input type="hidden" name="CHILDCB11324ROW90" id="CHILDCB11324ROW90" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="1940" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW90" name="CB11324ROW90" size="1">
            <input type="hidden" name="OLDCB11324ROW90" id="OLDCB11324ROW90" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW90DATA39595" id="OLDCB11324ROW90DATA39595" value="Cub Scouts--&gt;Export to Scoutbook Plus">
            Cub Scouts--&gt;Export to Scoutbook Plus
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW91" id="LINKCB11324ROW91" value="1332">
          <input type="hidden" name="CHILDCB11324ROW91" id="CHILDCB11324ROW91" value="3724">
          <td>
            <input type="checkbox" class="form-control" tabindex="1960" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW91" name="CB11324ROW91" size="1">
            <input type="hidden" name="OLDCB11324ROW91" id="OLDCB11324ROW91" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW91DATA39595" id="OLDCB11324ROW91DATA39595" value="Cub Scouts--&gt;Export Cub Scout Achievements to ScoutNet">
            Cub Scouts--&gt;Export Cub Scout Achievements to ScoutNet
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW92" id="LINKCB11324ROW92" value="2903">
          <input type="hidden" name="CHILDCB11324ROW92" id="CHILDCB11324ROW92" value="3725">
          <td>
            <input type="checkbox" class="form-control" tabindex="1980" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW92" name="CB11324ROW92" size="1">
            <input type="hidden" name="OLDCB11324ROW92" id="OLDCB11324ROW92" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW92DATA39595" id="OLDCB11324ROW92DATA39595" value="Cub Scouts--&gt;Export Cub Scout Achievements To Excel">
            Cub Scouts--&gt;Export Cub Scout Achievements To Excel
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW93" id="LINKCB11324ROW93" value="6119">
          <input type="hidden" name="CHILDCB11324ROW93" id="CHILDCB11324ROW93" value="3726">
          <td>
            <input type="checkbox" class="form-control" tabindex="2000" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW93" name="CB11324ROW93" size="1">
            <input type="hidden" name="OLDCB11324ROW93" id="OLDCB11324ROW93" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW93DATA39595" id="OLDCB11324ROW93DATA39595" value="Cub Scouts--&gt;Export Cub Scout Achievements To TroopAwards">
            Cub Scouts--&gt;Export Cub Scout Achievements To TroopAwards
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW94" id="LINKCB11324ROW94" value="1908">
          <input type="hidden" name="CHILDCB11324ROW94" id="CHILDCB11324ROW94" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2020" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW94" name="CB11324ROW94" size="1">
            <input type="hidden" name="OLDCB11324ROW94" id="OLDCB11324ROW94" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW94DATA39595" id="OLDCB11324ROW94DATA39595" value="Cub Scouts--&gt;Upload ScoutBook Plus Advancement">
            Cub Scouts--&gt;Upload ScoutBook Plus Advancement
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW95" id="LINKCB11324ROW95" value="1968">
          <input type="hidden" name="CHILDCB11324ROW95" id="CHILDCB11324ROW95" value="3727">
          <td>
            <input type="checkbox" class="form-control" tabindex="2040" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW95" name="CB11324ROW95" size="1">
            <input type="hidden" name="OLDCB11324ROW95" id="OLDCB11324ROW95" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW95DATA39595" id="OLDCB11324ROW95DATA39595" value="Cub Scouts--&gt;Upload ScoutNet Advancement">
            Cub Scouts--&gt;Upload ScoutNet Advancement
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW96" id="LINKCB11324ROW96" value="6681">
          <input type="hidden" name="CHILDCB11324ROW96" id="CHILDCB11324ROW96" value="3728">
          <td>
            <input type="checkbox" class="form-control" tabindex="2060" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW96" name="CB11324ROW96" size="1">
            <input type="hidden" name="OLDCB11324ROW96" id="OLDCB11324ROW96" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW96DATA39595" id="OLDCB11324ROW96DATA39595" value="Cub Scouts--&gt;Upload TroopTrack Achievements">
            Cub Scouts--&gt;Upload TroopTrack Achievements
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW97" id="LINKCB11324ROW97" value="390">
          <input type="hidden" name="CHILDCB11324ROW97" id="CHILDCB11324ROW97" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2080" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW97" name="CB11324ROW97" size="1">
            <input type="hidden" name="OLDCB11324ROW97" id="OLDCB11324ROW97" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW97DATA39595" id="OLDCB11324ROW97DATA39595" value="Resources--&gt;Forms &amp; Documents">
            Resources--&gt;Forms &amp; Documents
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW98" id="LINKCB11324ROW98" value="391">
          <input type="hidden" name="CHILDCB11324ROW98" id="CHILDCB11324ROW98" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2100" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW98" name="CB11324ROW98" size="1">
            <input type="hidden" name="OLDCB11324ROW98" id="OLDCB11324ROW98" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW98DATA39595" id="OLDCB11324ROW98DATA39595" value="Resources--&gt;Web Links">
            Resources--&gt;Web Links
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW99" id="LINKCB11324ROW99" value="392">
          <input type="hidden" name="CHILDCB11324ROW99" id="CHILDCB11324ROW99" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2120" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW99" name="CB11324ROW99" size="1">
            <input type="hidden" name="OLDCB11324ROW99" id="OLDCB11324ROW99" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW99DATA39595" id="OLDCB11324ROW99DATA39595" value="Resources--&gt;Add &amp; Update Forms">
            Resources--&gt;Add &amp; Update Forms
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW100" id="LINKCB11324ROW100" value="393">
          <input type="hidden" name="CHILDCB11324ROW100" id="CHILDCB11324ROW100" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2140" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW100" name="CB11324ROW100" size="1">
            <input type="hidden" name="OLDCB11324ROW100" id="OLDCB11324ROW100" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW100DATA39595" id="OLDCB11324ROW100DATA39595" value="Resources--&gt;Add &amp; Update Form Categories">
            Resources--&gt;Add &amp; Update Form Categories
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW101" id="LINKCB11324ROW101" value="394">
          <input type="hidden" name="CHILDCB11324ROW101" id="CHILDCB11324ROW101" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2160" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW101" name="CB11324ROW101" size="1">
            <input type="hidden" name="OLDCB11324ROW101" id="OLDCB11324ROW101" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW101DATA39595" id="OLDCB11324ROW101DATA39595" value="Resources--&gt;Add &amp; Update Web Links">
            Resources--&gt;Add &amp; Update Web Links
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW102" id="LINKCB11324ROW102" value="364">
          <input type="hidden" name="CHILDCB11324ROW102" id="CHILDCB11324ROW102" value="3703">
          <td>
            <input type="checkbox" class="form-control" tabindex="2180" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW102" name="CB11324ROW102" size="1">
            <input type="hidden" name="OLDCB11324ROW102" id="OLDCB11324ROW102" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW102DATA39595" id="OLDCB11324ROW102DATA39595" value="Inventory--&gt;Library Check-in / Check-out">
            Inventory--&gt;Library Check-in / Check-out
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW103" id="LINKCB11324ROW103" value="365">
          <input type="hidden" name="CHILDCB11324ROW103" id="CHILDCB11324ROW103" value="3704">
          <td>
            <input type="checkbox" class="form-control" tabindex="2200" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW103" name="CB11324ROW103" size="1">
            <input type="hidden" name="OLDCB11324ROW103" id="OLDCB11324ROW103" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW103DATA39595" id="OLDCB11324ROW103DATA39595" value="Inventory--&gt;Equipment Check-in / Check-out">
            Inventory--&gt;Equipment Check-in / Check-out
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW104" id="LINKCB11324ROW104" value="366">
          <input type="hidden" name="CHILDCB11324ROW104" id="CHILDCB11324ROW104" value="3705">
          <td>
            <input type="checkbox" class="form-control" tabindex="2220" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW104" name="CB11324ROW104" size="1">
            <input type="hidden" name="OLDCB11324ROW104" id="OLDCB11324ROW104" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW104DATA39595" id="OLDCB11324ROW104DATA39595" value="Inventory--&gt;Quick Library Check-In">
            Inventory--&gt;Quick Library Check-In
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW105" id="LINKCB11324ROW105" value="367">
          <input type="hidden" name="CHILDCB11324ROW105" id="CHILDCB11324ROW105" value="3706">
          <td>
            <input type="checkbox" class="form-control" tabindex="2240" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW105" name="CB11324ROW105" size="1">
            <input type="hidden" name="OLDCB11324ROW105" id="OLDCB11324ROW105" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW105DATA39595" id="OLDCB11324ROW105DATA39595" value="Inventory--&gt;Quick Equipment Check-In">
            Inventory--&gt;Quick Equipment Check-In
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW106" id="LINKCB11324ROW106" value="368">
          <input type="hidden" name="CHILDCB11324ROW106" id="CHILDCB11324ROW106" value="3707">
          <td>
            <input type="checkbox" class="form-control" tabindex="2260" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW106" name="CB11324ROW106" size="1">
            <input type="hidden" name="OLDCB11324ROW106" id="OLDCB11324ROW106" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW106DATA39595" id="OLDCB11324ROW106DATA39595" value="Inventory--&gt;Add &amp; Update Inventory">
            Inventory--&gt;Add &amp; Update Inventory
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW107" id="LINKCB11324ROW107" value="2674">
          <input type="hidden" name="CHILDCB11324ROW107" id="CHILDCB11324ROW107" value="3708">
          <td>
            <input type="checkbox" class="form-control" tabindex="2280" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW107" name="CB11324ROW107" size="1">
            <input type="hidden" name="OLDCB11324ROW107" id="OLDCB11324ROW107" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW107DATA39595" id="OLDCB11324ROW107DATA39595" value="Inventory--&gt;Inventory Report - All Items">
            Inventory--&gt;Inventory Report - All Items
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW108" id="LINKCB11324ROW108" value="2675">
          <input type="hidden" name="CHILDCB11324ROW108" id="CHILDCB11324ROW108" value="3709">
          <td>
            <input type="checkbox" class="form-control" tabindex="2300" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW108" name="CB11324ROW108" size="1">
            <input type="hidden" name="OLDCB11324ROW108" id="OLDCB11324ROW108" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW108DATA39595" id="OLDCB11324ROW108DATA39595" value="Inventory--&gt;Inventory Report - Checked Out Items">
            Inventory--&gt;Inventory Report - Checked Out Items
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW109" id="LINKCB11324ROW109" value="423">
          <input type="hidden" name="CHILDCB11324ROW109" id="CHILDCB11324ROW109" value="3710">
          <td>
            <input type="checkbox" class="form-control" tabindex="2320" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW109" name="CB11324ROW109" size="1">
            <input type="hidden" name="OLDCB11324ROW109" id="OLDCB11324ROW109" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW109DATA39595" id="OLDCB11324ROW109DATA39595" value="Fundraising--&gt;Fundraising Drives">
            Fundraising--&gt;Fundraising Drives
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW110" id="LINKCB11324ROW110" value="3446">
          <input type="hidden" name="CHILDCB11324ROW110" id="CHILDCB11324ROW110" value="3711">
          <td>
            <input type="checkbox" class="form-control" tabindex="2340" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW110" name="CB11324ROW110" size="1">
            <input type="hidden" name="OLDCB11324ROW110" id="OLDCB11324ROW110" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW110DATA39595" id="OLDCB11324ROW110DATA39595" value="Fundraising--&gt;Copy A Fundraiser">
            Fundraising--&gt;Copy A Fundraiser
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW111" id="LINKCB11324ROW111" value="425">
          <input type="hidden" name="CHILDCB11324ROW111" id="CHILDCB11324ROW111" value="3712">
          <td>
            <input type="checkbox" class="form-control" tabindex="2360" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW111" name="CB11324ROW111" size="1">
            <input type="hidden" name="OLDCB11324ROW111" id="OLDCB11324ROW111" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW111DATA39595" id="OLDCB11324ROW111DATA39595" value="Fundraising--&gt;Merchandise Items">
            Fundraising--&gt;Merchandise Items
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW112" id="LINKCB11324ROW112" value="426">
          <input type="hidden" name="CHILDCB11324ROW112" id="CHILDCB11324ROW112" value="3713">
          <td>
            <input type="checkbox" class="form-control" tabindex="2380" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW112" name="CB11324ROW112" size="1">
            <input type="hidden" name="OLDCB11324ROW112" id="OLDCB11324ROW112" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW112DATA39595" id="OLDCB11324ROW112DATA39595" value="Fundraising--&gt;Prizes">
            Fundraising--&gt;Prizes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW113" id="LINKCB11324ROW113" value="427">
          <input type="hidden" name="CHILDCB11324ROW113" id="CHILDCB11324ROW113" value="3714">
          <td>
            <input type="checkbox" class="form-control" tabindex="2400" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW113" name="CB11324ROW113" size="1">
            <input type="hidden" name="OLDCB11324ROW113" id="OLDCB11324ROW113" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW113DATA39595" id="OLDCB11324ROW113DATA39595" value="Fundraising--&gt;Merchandise Booths">
            Fundraising--&gt;Merchandise Booths
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW114" id="LINKCB11324ROW114" value="428">
          <input type="hidden" name="CHILDCB11324ROW114" id="CHILDCB11324ROW114" value="3715">
          <td>
            <input type="checkbox" class="form-control" tabindex="2420" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW114" name="CB11324ROW114" size="1">
            <input type="hidden" name="OLDCB11324ROW114" id="OLDCB11324ROW114" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW114DATA39595" id="OLDCB11324ROW114DATA39595" value="Fundraising--&gt;Booth Sales">
            Fundraising--&gt;Booth Sales
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW115" id="LINKCB11324ROW115" value="429">
          <input type="hidden" name="CHILDCB11324ROW115" id="CHILDCB11324ROW115" value="3716">
          <td>
            <input type="checkbox" class="form-control" tabindex="2440" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW115" name="CB11324ROW115" size="1">
            <input type="hidden" name="OLDCB11324ROW115" id="OLDCB11324ROW115" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW115DATA39595" id="OLDCB11324ROW115DATA39595" value="Fundraising--&gt;Orders">
            Fundraising--&gt;Orders
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW116" id="LINKCB11324ROW116" value="2388">
          <input type="hidden" name="CHILDCB11324ROW116" id="CHILDCB11324ROW116" value="3717">
          <td>
            <input type="checkbox" class="form-control" tabindex="2460" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW116" name="CB11324ROW116" size="1">
            <input type="hidden" name="OLDCB11324ROW116" id="OLDCB11324ROW116" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW116DATA39595" id="OLDCB11324ROW116DATA39595" value="Fundraising--&gt;Incomplete Internet Orders">
            Fundraising--&gt;Incomplete Internet Orders
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW117" id="LINKCB11324ROW117" value="3229">
          <input type="hidden" name="CHILDCB11324ROW117" id="CHILDCB11324ROW117" value="3718">
          <td>
            <input type="checkbox" class="form-control" tabindex="2480" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW117" name="CB11324ROW117" size="1">
            <input type="hidden" name="OLDCB11324ROW117" id="OLDCB11324ROW117" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW117DATA39595" id="OLDCB11324ROW117DATA39595" value="Fundraising--&gt;Incomplete Booth Orders">
            Fundraising--&gt;Incomplete Booth Orders
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW118" id="LINKCB11324ROW118" value="430">
          <input type="hidden" name="CHILDCB11324ROW118" id="CHILDCB11324ROW118" value="3719">
          <td>
            <input type="checkbox" class="form-control" tabindex="2500" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW118" name="CB11324ROW118" size="1">
            <input type="hidden" name="OLDCB11324ROW118" id="OLDCB11324ROW118" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW118DATA39595" id="OLDCB11324ROW118DATA39595" value="Fundraising--&gt;Post Payments To Multiple Orders">
            Fundraising--&gt;Post Payments To Multiple Orders
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW119" id="LINKCB11324ROW119" value="431">
          <input type="hidden" name="CHILDCB11324ROW119" id="CHILDCB11324ROW119" value="3720">
          <td>
            <input type="checkbox" class="form-control" tabindex="2520" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW119" name="CB11324ROW119" size="1">
            <input type="hidden" name="OLDCB11324ROW119" id="OLDCB11324ROW119" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW119DATA39595" id="OLDCB11324ROW119DATA39595" value="Fundraising--&gt;Post Payments To Individual Orders">
            Fundraising--&gt;Post Payments To Individual Orders
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW120" id="LINKCB11324ROW120" value="432">
          <input type="hidden" name="CHILDCB11324ROW120" id="CHILDCB11324ROW120" value="3721">
          <td>
            <input type="checkbox" class="form-control" tabindex="2540" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW120" name="CB11324ROW120" size="1">
            <input type="hidden" name="OLDCB11324ROW120" id="OLDCB11324ROW120" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW120DATA39595" id="OLDCB11324ROW120DATA39595" value="Fundraising--&gt;Set Quantity Delivered">
            Fundraising--&gt;Set Quantity Delivered
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW121" id="LINKCB11324ROW121" value="433">
          <input type="hidden" name="CHILDCB11324ROW121" id="CHILDCB11324ROW121" value="3722">
          <td>
            <input type="checkbox" class="form-control" tabindex="2560" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW121" name="CB11324ROW121" size="1">
            <input type="hidden" name="OLDCB11324ROW121" id="OLDCB11324ROW121" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW121DATA39595" id="OLDCB11324ROW121DATA39595" value="Fundraising--&gt;Inventory Adjustments">
            Fundraising--&gt;Inventory Adjustments
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW122" id="LINKCB11324ROW122" value="434">
          <input type="hidden" name="CHILDCB11324ROW122" id="CHILDCB11324ROW122" value="3723">
          <td>
            <input type="checkbox" class="form-control" tabindex="2580" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW122" name="CB11324ROW122" size="1">
            <input type="hidden" name="OLDCB11324ROW122" id="OLDCB11324ROW122" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW122DATA39595" id="OLDCB11324ROW122DATA39595" value="Fundraising--&gt;Export Orders To Excel">
            Fundraising--&gt;Export Orders To Excel
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW123" id="LINKCB11324ROW123" value="5781">
          <input type="hidden" name="CHILDCB11324ROW123" id="CHILDCB11324ROW123" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2600" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW123" name="CB11324ROW123" size="1">
            <input type="hidden" name="OLDCB11324ROW123" id="OLDCB11324ROW123" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW123DATA39595" id="OLDCB11324ROW123DATA39595" value="Money--&gt;Financial Hub">
            Money--&gt;Financial Hub
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW124" id="LINKCB11324ROW124" value="352">
          <input type="hidden" name="CHILDCB11324ROW124" id="CHILDCB11324ROW124" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2620" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW124" name="CB11324ROW124" size="1">
            <input type="hidden" name="OLDCB11324ROW124" id="OLDCB11324ROW124" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW124DATA39595" id="OLDCB11324ROW124DATA39595" value="Money--&gt;Individual Transactions">
            Money--&gt;Individual Transactions
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW125" id="LINKCB11324ROW125" value="353">
          <input type="hidden" name="CHILDCB11324ROW125" id="CHILDCB11324ROW125" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2640" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW125" name="CB11324ROW125" size="1">
            <input type="hidden" name="OLDCB11324ROW125" id="OLDCB11324ROW125" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW125DATA39595" id="OLDCB11324ROW125DATA39595" value="Money--&gt;Group Transactions">
            Money--&gt;Group Transactions
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW126" id="LINKCB11324ROW126" value="4995">
          <input type="hidden" name="CHILDCB11324ROW126" id="CHILDCB11324ROW126" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2660" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW126" name="CB11324ROW126" size="1">
            <input type="hidden" name="OLDCB11324ROW126" id="OLDCB11324ROW126" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW126DATA39595" id="OLDCB11324ROW126DATA39595" value="Money--&gt;Payment Collector">
            Money--&gt;Payment Collector
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW127" id="LINKCB11324ROW127" value="2600">
          <input type="hidden" name="CHILDCB11324ROW127" id="CHILDCB11324ROW127" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2680" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW127" name="CB11324ROW127" size="1">
            <input type="hidden" name="OLDCB11324ROW127" id="OLDCB11324ROW127" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW127DATA39595" id="OLDCB11324ROW127DATA39595" value="Money--&gt;Expense Reimbursement Requests">
            Money--&gt;Expense Reimbursement Requests
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW128" id="LINKCB11324ROW128" value="356">
          <input type="hidden" name="CHILDCB11324ROW128" id="CHILDCB11324ROW128" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2700" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW128" name="CB11324ROW128" size="1">
            <input type="hidden" name="OLDCB11324ROW128" id="OLDCB11324ROW128" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW128DATA39595" id="OLDCB11324ROW128DATA39595" value="Money--&gt;Email Account Balances">
            Money--&gt;Email Account Balances
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW129" id="LINKCB11324ROW129" value="357">
          <input type="hidden" name="CHILDCB11324ROW129" id="CHILDCB11324ROW129" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2720" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW129" name="CB11324ROW129" size="1">
            <input type="hidden" name="OLDCB11324ROW129" id="OLDCB11324ROW129" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW129DATA39595" id="OLDCB11324ROW129DATA39595" value="Money--&gt;Group Account Balances">
            Money--&gt;Group Account Balances
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW130" id="LINKCB11324ROW130" value="358">
          <input type="hidden" name="CHILDCB11324ROW130" id="CHILDCB11324ROW130" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2740" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW130" name="CB11324ROW130" size="1">
            <input type="hidden" name="OLDCB11324ROW130" id="OLDCB11324ROW130" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW130DATA39595" id="OLDCB11324ROW130DATA39595" value="Money--&gt;Member Account Balances">
            Money--&gt;Member Account Balances
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW131" id="LINKCB11324ROW131" value="359">
          <input type="hidden" name="CHILDCB11324ROW131" id="CHILDCB11324ROW131" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2760" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW131" name="CB11324ROW131" size="1">
            <input type="hidden" name="OLDCB11324ROW131" id="OLDCB11324ROW131" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW131DATA39595" id="OLDCB11324ROW131DATA39595" value="Money--&gt;Event Balances">
            Money--&gt;Event Balances
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW132" id="LINKCB11324ROW132" value="360">
          <input type="hidden" name="CHILDCB11324ROW132" id="CHILDCB11324ROW132" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2780" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW132" name="CB11324ROW132" size="1">
            <input type="hidden" name="OLDCB11324ROW132" id="OLDCB11324ROW132" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW132DATA39595" id="OLDCB11324ROW132DATA39595" value="Money--&gt;Statement Reconciliation">
            Money--&gt;Statement Reconciliation
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW133" id="LINKCB11324ROW133" value="361">
          <input type="hidden" name="CHILDCB11324ROW133" id="CHILDCB11324ROW133" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2800" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW133" name="CB11324ROW133" size="1">
            <input type="hidden" name="OLDCB11324ROW133" id="OLDCB11324ROW133" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW133DATA39595" id="OLDCB11324ROW133DATA39595" value="Money--&gt;On-Line Payment History">
            Money--&gt;On-Line Payment History
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW134" id="LINKCB11324ROW134" value="7635">
          <input type="hidden" name="CHILDCB11324ROW134" id="CHILDCB11324ROW134" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2820" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW134" name="CB11324ROW134" size="1">
            <input type="hidden" name="OLDCB11324ROW134" id="OLDCB11324ROW134" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW134DATA39595" id="OLDCB11324ROW134DATA39595" value="Money--&gt;Fiscal Years &amp; Budgets">
            Money--&gt;Fiscal Years &amp; Budgets
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW135" id="LINKCB11324ROW135" value="362">
          <input type="hidden" name="CHILDCB11324ROW135" id="CHILDCB11324ROW135" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2840" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW135" name="CB11324ROW135" size="1">
            <input type="hidden" name="OLDCB11324ROW135" id="OLDCB11324ROW135" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW135DATA39595" id="OLDCB11324ROW135DATA39595" value="Money--&gt;Upload Account Balances From Spreadsheet">
            Money--&gt;Upload Account Balances From Spreadsheet
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW136" id="LINKCB11324ROW136" value="363">
          <input type="hidden" name="CHILDCB11324ROW136" id="CHILDCB11324ROW136" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2860" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW136" name="CB11324ROW136" size="1">
            <input type="hidden" name="OLDCB11324ROW136" id="OLDCB11324ROW136" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW136DATA39595" id="OLDCB11324ROW136DATA39595" value="Money--&gt;Export All Transactions to Excel">
            Money--&gt;Export All Transactions to Excel
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW137" id="LINKCB11324ROW137" value="1453">
          <input type="hidden" name="CHILDCB11324ROW137" id="CHILDCB11324ROW137" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2880" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW137" name="CB11324ROW137" size="1">
            <input type="hidden" name="OLDCB11324ROW137" id="OLDCB11324ROW137" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW137DATA39595" id="OLDCB11324ROW137DATA39595" value="Site Configuration--&gt;E-Mail Settings">
            Site Configuration--&gt;E-Mail Settings
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW138" id="LINKCB11324ROW138" value="395">
          <input type="hidden" name="CHILDCB11324ROW138" id="CHILDCB11324ROW138" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2900" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW138" name="CB11324ROW138" size="1">
            <input type="hidden" name="OLDCB11324ROW138" id="OLDCB11324ROW138" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW138DATA39595" id="OLDCB11324ROW138DATA39595" value="Site Configuration--&gt;Membership Type">
            Site Configuration--&gt;Membership Type
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW139" id="LINKCB11324ROW139" value="396">
          <input type="hidden" name="CHILDCB11324ROW139" id="CHILDCB11324ROW139" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2920" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW139" name="CB11324ROW139" size="1">
            <input type="hidden" name="OLDCB11324ROW139" id="OLDCB11324ROW139" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW139DATA39595" id="OLDCB11324ROW139DATA39595" value="Site Configuration--&gt;Relationship Types">
            Site Configuration--&gt;Relationship Types
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW140" id="LINKCB11324ROW140" value="2496">
          <input type="hidden" name="CHILDCB11324ROW140" id="CHILDCB11324ROW140" value="4556">
          <td>
            <input type="checkbox" class="form-control" tabindex="2940" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW140" name="CB11324ROW140" size="1">
            <input type="hidden" name="OLDCB11324ROW140" id="OLDCB11324ROW140" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW140DATA39595" id="OLDCB11324ROW140DATA39595" value="Site Configuration--&gt;Shirt Sizes">
            Site Configuration--&gt;Shirt Sizes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW141" id="LINKCB11324ROW141" value="3309">
          <input type="hidden" name="CHILDCB11324ROW141" id="CHILDCB11324ROW141" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2960" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW141" name="CB11324ROW141" size="1">
            <input type="hidden" name="OLDCB11324ROW141" id="OLDCB11324ROW141" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW141DATA39595" id="OLDCB11324ROW141DATA39595" value="Site Configuration--&gt;Dress Codes">
            Site Configuration--&gt;Dress Codes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW142" id="LINKCB11324ROW142" value="4656">
          <input type="hidden" name="CHILDCB11324ROW142" id="CHILDCB11324ROW142" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="2980" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW142" name="CB11324ROW142" size="1">
            <input type="hidden" name="OLDCB11324ROW142" id="OLDCB11324ROW142" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW142DATA39595" id="OLDCB11324ROW142DATA39595" value="Site Configuration--&gt;Skills and Interests">
            Site Configuration--&gt;Skills and Interests
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW143" id="LINKCB11324ROW143" value="397">
          <input type="hidden" name="CHILDCB11324ROW143" id="CHILDCB11324ROW143" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3000" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW143" name="CB11324ROW143" size="1">
            <input type="hidden" name="OLDCB11324ROW143" id="OLDCB11324ROW143" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW143DATA39595" id="OLDCB11324ROW143DATA39595" value="Site Configuration--&gt;Leadership Positions">
            Site Configuration--&gt;Leadership Positions
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW144" id="LINKCB11324ROW144" value="398">
          <input type="hidden" name="CHILDCB11324ROW144" id="CHILDCB11324ROW144" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3020" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW144" name="CB11324ROW144" size="1">
            <input type="hidden" name="OLDCB11324ROW144" id="OLDCB11324ROW144" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW144DATA39595" id="OLDCB11324ROW144DATA39595" value="Site Configuration--&gt;Training Courses">
            Site Configuration--&gt;Training Courses
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW145" id="LINKCB11324ROW145" value="399">
          <input type="hidden" name="CHILDCB11324ROW145" id="CHILDCB11324ROW145" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3040" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW145" name="CB11324ROW145" size="1">
            <input type="hidden" name="OLDCB11324ROW145" id="OLDCB11324ROW145" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW145DATA39595" id="OLDCB11324ROW145DATA39595" value="Site Configuration--&gt;Awards">
            Site Configuration--&gt;Awards
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW146" id="LINKCB11324ROW146" value="400">
          <input type="hidden" name="CHILDCB11324ROW146" id="CHILDCB11324ROW146" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3060" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW146" name="CB11324ROW146" size="1">
            <input type="hidden" name="OLDCB11324ROW146" id="OLDCB11324ROW146" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW146DATA39595" id="OLDCB11324ROW146DATA39595" value="Site Configuration--&gt;Event Types">
            Site Configuration--&gt;Event Types
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW147" id="LINKCB11324ROW147" value="401">
          <input type="hidden" name="CHILDCB11324ROW147" id="CHILDCB11324ROW147" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3080" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW147" name="CB11324ROW147" size="1">
            <input type="hidden" name="OLDCB11324ROW147" id="OLDCB11324ROW147" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW147DATA39595" id="OLDCB11324ROW147DATA39595" value="Site Configuration--&gt;Activity Types">
            Site Configuration--&gt;Activity Types
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW148" id="LINKCB11324ROW148" value="5693">
          <input type="hidden" name="CHILDCB11324ROW148" id="CHILDCB11324ROW148" value="3743">
          <td>
            <input type="checkbox" class="form-control" tabindex="3100" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW148" name="CB11324ROW148" size="1">
            <input type="hidden" name="OLDCB11324ROW148" id="OLDCB11324ROW148" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW148DATA39595" id="OLDCB11324ROW148DATA39595" value="Site Configuration--&gt;Inventory Categories">
            Site Configuration--&gt;Inventory Categories
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW149" id="LINKCB11324ROW149" value="5694">
          <input type="hidden" name="CHILDCB11324ROW149" id="CHILDCB11324ROW149" value="3744">
          <td>
            <input type="checkbox" class="form-control" tabindex="3120" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW149" name="CB11324ROW149" size="1">
            <input type="hidden" name="OLDCB11324ROW149" id="OLDCB11324ROW149" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW149DATA39595" id="OLDCB11324ROW149DATA39595" value="Site Configuration--&gt;Inventory Locations">
            Site Configuration--&gt;Inventory Locations
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW150" id="LINKCB11324ROW150" value="402">
          <input type="hidden" name="CHILDCB11324ROW150" id="CHILDCB11324ROW150" value="3745">
          <td>
            <input type="checkbox" class="form-control" tabindex="3140" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW150" name="CB11324ROW150" size="1">
            <input type="hidden" name="OLDCB11324ROW150" id="OLDCB11324ROW150" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW150DATA39595" id="OLDCB11324ROW150DATA39595" value="Site Configuration--&gt;Fundraiser Global Settings">
            Site Configuration--&gt;Fundraiser Global Settings
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW151" id="LINKCB11324ROW151" value="403">
          <input type="hidden" name="CHILDCB11324ROW151" id="CHILDCB11324ROW151" value="3746">
          <td>
            <input type="checkbox" class="form-control" tabindex="3160" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW151" name="CB11324ROW151" size="1">
            <input type="hidden" name="OLDCB11324ROW151" id="OLDCB11324ROW151" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW151DATA39595" id="OLDCB11324ROW151DATA39595" value="Site Configuration--&gt;Fundraiser Inventory Transaction Types">
            Site Configuration--&gt;Fundraiser Inventory Transaction Types
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW152" id="LINKCB11324ROW152" value="404">
          <input type="hidden" name="CHILDCB11324ROW152" id="CHILDCB11324ROW152" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3180" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW152" name="CB11324ROW152" size="1">
            <input type="hidden" name="OLDCB11324ROW152" id="OLDCB11324ROW152" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW152DATA39595" id="OLDCB11324ROW152DATA39595" value="Site Configuration--&gt;Transaction Types">
            Site Configuration--&gt;Transaction Types
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW153" id="LINKCB11324ROW153" value="405">
          <input type="hidden" name="CHILDCB11324ROW153" id="CHILDCB11324ROW153" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3200" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW153" name="CB11324ROW153" size="1">
            <input type="hidden" name="OLDCB11324ROW153" id="OLDCB11324ROW153" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW153DATA39595" id="OLDCB11324ROW153DATA39595" value="Site Configuration--&gt;Funds">
            Site Configuration--&gt;Funds
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW154" id="LINKCB11324ROW154" value="406">
          <input type="hidden" name="CHILDCB11324ROW154" id="CHILDCB11324ROW154" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3220" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW154" name="CB11324ROW154" size="1">
            <input type="hidden" name="OLDCB11324ROW154" id="OLDCB11324ROW154" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW154DATA39595" id="OLDCB11324ROW154DATA39595" value="Site Configuration--&gt;Fund Categories">
            Site Configuration--&gt;Fund Categories
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW155" id="LINKCB11324ROW155" value="7632">
          <input type="hidden" name="CHILDCB11324ROW155" id="CHILDCB11324ROW155" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3240" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW155" name="CB11324ROW155" size="1">
            <input type="hidden" name="OLDCB11324ROW155" id="OLDCB11324ROW155" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW155DATA39595" id="OLDCB11324ROW155DATA39595" value="Site Configuration--&gt;Budget Template">
            Site Configuration--&gt;Budget Template
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW156" id="LINKCB11324ROW156" value="407">
          <input type="hidden" name="CHILDCB11324ROW156" id="CHILDCB11324ROW156" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3260" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW156" name="CB11324ROW156" size="1">
            <input type="hidden" name="OLDCB11324ROW156" id="OLDCB11324ROW156" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW156DATA39595" id="OLDCB11324ROW156DATA39595" value="Site Configuration--&gt;PayPal Configuration">
            Site Configuration--&gt;PayPal Configuration
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW157" id="LINKCB11324ROW157" value="4888">
          <input type="hidden" name="CHILDCB11324ROW157" id="CHILDCB11324ROW157" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3280" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW157" name="CB11324ROW157" size="1">
            <input type="hidden" name="OLDCB11324ROW157" id="OLDCB11324ROW157" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW157DATA39595" id="OLDCB11324ROW157DATA39595" value="Site Configuration--&gt;Square Configuration">
            Site Configuration--&gt;Square Configuration
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW158" id="LINKCB11324ROW158" value="4994">
          <input type="hidden" name="CHILDCB11324ROW158" id="CHILDCB11324ROW158" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3300" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW158" name="CB11324ROW158" size="1">
            <input type="hidden" name="OLDCB11324ROW158" id="OLDCB11324ROW158" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW158DATA39595" id="OLDCB11324ROW158DATA39595" value="Site Configuration--&gt;Payment Collector">
            Site Configuration--&gt;Payment Collector
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW159" id="LINKCB11324ROW159" value="2601">
          <input type="hidden" name="CHILDCB11324ROW159" id="CHILDCB11324ROW159" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3320" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW159" name="CB11324ROW159" size="1">
            <input type="hidden" name="OLDCB11324ROW159" id="OLDCB11324ROW159" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW159DATA39595" id="OLDCB11324ROW159DATA39595" value="Site Configuration--&gt;Expense Reimbursements">
            Site Configuration--&gt;Expense Reimbursements
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW160" id="LINKCB11324ROW160" value="3390">
          <input type="hidden" name="CHILDCB11324ROW160" id="CHILDCB11324ROW160" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3340" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW160" name="CB11324ROW160" size="1">
            <input type="hidden" name="OLDCB11324ROW160" id="OLDCB11324ROW160" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW160DATA39595" id="OLDCB11324ROW160DATA39595" value="Site Configuration--&gt;Contact Us Reasons">
            Site Configuration--&gt;Contact Us Reasons
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW161" id="LINKCB11324ROW161" value="409">
          <input type="hidden" name="CHILDCB11324ROW161" id="CHILDCB11324ROW161" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3360" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW161" name="CB11324ROW161" size="1">
            <input type="hidden" name="OLDCB11324ROW161" id="OLDCB11324ROW161" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW161DATA39595" id="OLDCB11324ROW161DATA39595" value="Site Configuration--&gt;Site Appearance">
            Site Configuration--&gt;Site Appearance
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW162" id="LINKCB11324ROW162" value="343">
          <input type="hidden" name="CHILDCB11324ROW162" id="CHILDCB11324ROW162" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3380" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW162" name="CB11324ROW162" size="1">
            <input type="hidden" name="OLDCB11324ROW162" id="OLDCB11324ROW162" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW162DATA39595" id="OLDCB11324ROW162DATA39595" value="Administration--&gt;Users &amp; Passwords">
            Administration--&gt;Users &amp; Passwords
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW163" id="LINKCB11324ROW163" value="344">
          <input type="hidden" name="CHILDCB11324ROW163" id="CHILDCB11324ROW163" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3400" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW163" name="CB11324ROW163" size="1">
            <input type="hidden" name="OLDCB11324ROW163" id="OLDCB11324ROW163" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW163DATA39595" id="OLDCB11324ROW163DATA39595" value="Administration--&gt;User Roles">
            Administration--&gt;User Roles
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW164" id="LINKCB11324ROW164" value="345">
          <input type="hidden" name="CHILDCB11324ROW164" id="CHILDCB11324ROW164" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3420" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW164" name="CB11324ROW164" size="1">
            <input type="hidden" name="OLDCB11324ROW164" id="OLDCB11324ROW164" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW164DATA39595" id="OLDCB11324ROW164DATA39595" value="Administration--&gt;Send User IDs &amp; Passwords">
            Administration--&gt;Send User IDs &amp; Passwords
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW165" id="LINKCB11324ROW165" value="7230">
          <input type="hidden" name="CHILDCB11324ROW165" id="CHILDCB11324ROW165" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3440" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW165" name="CB11324ROW165" size="1">
            <input type="hidden" name="OLDCB11324ROW165" id="OLDCB11324ROW165" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW165DATA39595" id="OLDCB11324ROW165DATA39595" value="Administration--&gt;Automatically Send New User IDs">
            Administration--&gt;Automatically Send New User IDs
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW166" id="LINKCB11324ROW166" value="346">
          <input type="hidden" name="CHILDCB11324ROW166" id="CHILDCB11324ROW166" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3460" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW166" name="CB11324ROW166" size="1">
            <input type="hidden" name="OLDCB11324ROW166" id="OLDCB11324ROW166" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW166DATA39595" id="OLDCB11324ROW166DATA39595" value="Administration--&gt;Display User Permissions">
            Administration--&gt;Display User Permissions
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW167" id="LINKCB11324ROW167" value="347">
          <input type="hidden" name="CHILDCB11324ROW167" id="CHILDCB11324ROW167" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3480" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW167" name="CB11324ROW167" size="1">
            <input type="hidden" name="OLDCB11324ROW167" id="OLDCB11324ROW167" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW167DATA39595" id="OLDCB11324ROW167DATA39595" value="Administration--&gt;User Permissions Report">
            Administration--&gt;User Permissions Report
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW168" id="LINKCB11324ROW168" value="348">
          <input type="hidden" name="CHILDCB11324ROW168" id="CHILDCB11324ROW168" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3500" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW168" name="CB11324ROW168" size="1">
            <input type="hidden" name="OLDCB11324ROW168" id="OLDCB11324ROW168" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW168DATA39595" id="OLDCB11324ROW168DATA39595" value="Administration--&gt;Menu Security Report">
            Administration--&gt;Menu Security Report
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW169" id="LINKCB11324ROW169" value="2812">
          <input type="hidden" name="CHILDCB11324ROW169" id="CHILDCB11324ROW169" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3520" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW169" name="CB11324ROW169" size="1">
            <input type="hidden" name="OLDCB11324ROW169" id="OLDCB11324ROW169" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW169DATA39595" id="OLDCB11324ROW169DATA39595" value="Administration--&gt;User Activity Report">
            Administration--&gt;User Activity Report
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW170" id="LINKCB11324ROW170" value="349">
          <input type="hidden" name="CHILDCB11324ROW170" id="CHILDCB11324ROW170" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3540" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW170" name="CB11324ROW170" size="1">
            <input type="hidden" name="OLDCB11324ROW170" id="OLDCB11324ROW170" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW170DATA39595" id="OLDCB11324ROW170DATA39595" value="Administration--&gt;Database Backup">
            Administration--&gt;Database Backup
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW171" id="LINKCB11324ROW171" value="350">
          <input type="hidden" name="CHILDCB11324ROW171" id="CHILDCB11324ROW171" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3560" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW171" name="CB11324ROW171" size="1">
            <input type="hidden" name="OLDCB11324ROW171" id="OLDCB11324ROW171" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW171DATA39595" id="OLDCB11324ROW171DATA39595" value="Administration--&gt;Renew Subscription">
            Administration--&gt;Renew Subscription
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW172" id="LINKCB11324ROW172" value="3201">
          <input type="hidden" name="CHILDCB11324ROW172" id="CHILDCB11324ROW172" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3580" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW172" name="CB11324ROW172" size="1">
            <input type="hidden" name="OLDCB11324ROW172" id="OLDCB11324ROW172" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW172DATA39595" id="OLDCB11324ROW172DATA39595" value="Administration--&gt;TroopWebHost Administrative Contacts">
            Administration--&gt;TroopWebHost Administrative Contacts
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW173" id="LINKCB11324ROW173" value="2877">
          <input type="hidden" name="CHILDCB11324ROW173" id="CHILDCB11324ROW173" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3600" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW173" name="CB11324ROW173" size="1">
            <input type="hidden" name="OLDCB11324ROW173" id="OLDCB11324ROW173" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW173DATA39595" id="OLDCB11324ROW173DATA39595" value="Events--&gt;Event Reports--&gt;Upcoming Events Summary">
            Events--&gt;Event Reports--&gt;Upcoming Events Summary
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW174" id="LINKCB11324ROW174" value="411">
          <input type="hidden" name="CHILDCB11324ROW174" id="CHILDCB11324ROW174" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3620" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW174" name="CB11324ROW174" size="1">
            <input type="hidden" name="OLDCB11324ROW174" id="OLDCB11324ROW174" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW174DATA39595" id="OLDCB11324ROW174DATA39595" value="Events--&gt;Event Reports--&gt;Attendance By Event">
            Events--&gt;Event Reports--&gt;Attendance By Event
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW175" id="LINKCB11324ROW175" value="412">
          <input type="hidden" name="CHILDCB11324ROW175" id="CHILDCB11324ROW175" value="5976">
          <td>
            <input type="checkbox" class="form-control" tabindex="3640" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW175" name="CB11324ROW175" size="1">
            <input type="hidden" name="OLDCB11324ROW175" id="OLDCB11324ROW175" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW175DATA39595" id="OLDCB11324ROW175DATA39595" value="Events--&gt;Event Reports--&gt;Attendance By Event Type">
            Events--&gt;Event Reports--&gt;Attendance By Event Type
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW176" id="LINKCB11324ROW176" value="2650">
          <input type="hidden" name="CHILDCB11324ROW176" id="CHILDCB11324ROW176" value="5977">
          <td>
            <input type="checkbox" class="form-control" tabindex="3660" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW176" name="CB11324ROW176" size="1">
            <input type="hidden" name="OLDCB11324ROW176" id="OLDCB11324ROW176" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW176DATA39595" id="OLDCB11324ROW176DATA39595" value="Events--&gt;Event Reports--&gt;Community Service Reports">
            Events--&gt;Event Reports--&gt;Community Service Reports
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW177" id="LINKCB11324ROW177" value="7161">
          <input type="hidden" name="CHILDCB11324ROW177" id="CHILDCB11324ROW177" value="5978">
          <td>
            <input type="checkbox" class="form-control" tabindex="3680" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW177" name="CB11324ROW177" size="1">
            <input type="hidden" name="OLDCB11324ROW177" id="OLDCB11324ROW177" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW177DATA39595" id="OLDCB11324ROW177DATA39595" value="Events--&gt;Upload Events--&gt;Upload Scoutbook Events">
            Events--&gt;Upload Events--&gt;Upload Scoutbook Events
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW178" id="LINKCB11324ROW178" value="6587">
          <input type="hidden" name="CHILDCB11324ROW178" id="CHILDCB11324ROW178" value="4557">
          <td>
            <input type="checkbox" class="form-control" tabindex="3700" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW178" name="CB11324ROW178" size="1">
            <input type="hidden" name="OLDCB11324ROW178" id="OLDCB11324ROW178" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW178DATA39595" id="OLDCB11324ROW178DATA39595" value="Events--&gt;Upload Events--&gt;Upload SOAR Events">
            Events--&gt;Upload Events--&gt;Upload SOAR Events
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW179" id="LINKCB11324ROW179" value="6588">
          <input type="hidden" name="CHILDCB11324ROW179" id="CHILDCB11324ROW179" value="4558">
          <td>
            <input type="checkbox" class="form-control" tabindex="3720" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW179" name="CB11324ROW179" size="1">
            <input type="hidden" name="OLDCB11324ROW179" id="OLDCB11324ROW179" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW179DATA39595" id="OLDCB11324ROW179DATA39595" value="Events--&gt;Upload Events--&gt;Upload SOAR Event Registration">
            Events--&gt;Upload Events--&gt;Upload SOAR Event Registration
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW180" id="LINKCB11324ROW180" value="369">
          <input type="hidden" name="CHILDCB11324ROW180" id="CHILDCB11324ROW180" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3740" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW180" name="CB11324ROW180" size="1">
            <input type="hidden" name="OLDCB11324ROW180" id="OLDCB11324ROW180" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW180DATA39595" id="OLDCB11324ROW180DATA39595" value="Membership--&gt;Membership Reports--&gt;Membership Directory">
            Membership--&gt;Membership Reports--&gt;Membership Directory
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW181" id="LINKCB11324ROW181" value="370">
          <input type="hidden" name="CHILDCB11324ROW181" id="CHILDCB11324ROW181" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3760" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW181" name="CB11324ROW181" size="1">
            <input type="hidden" name="OLDCB11324ROW181" id="OLDCB11324ROW181" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW181DATA39595" id="OLDCB11324ROW181DATA39595" value="Membership--&gt;Membership Reports--&gt;Leader Directory">
            Membership--&gt;Membership Reports--&gt;Leader Directory
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW182" id="LINKCB11324ROW182" value="371">
          <input type="hidden" name="CHILDCB11324ROW182" id="CHILDCB11324ROW182" value="4576">
          <td>
            <input type="checkbox" class="form-control" tabindex="3780" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW182" name="CB11324ROW182" size="1">
            <input type="hidden" name="OLDCB11324ROW182" id="OLDCB11324ROW182" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW182DATA39595" id="OLDCB11324ROW182DATA39595" value="Membership--&gt;Membership Reports--&gt;Committee Directory">
            Membership--&gt;Membership Reports--&gt;Committee Directory
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW183" id="LINKCB11324ROW183" value="372">
          <input type="hidden" name="CHILDCB11324ROW183" id="CHILDCB11324ROW183" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3800" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW183" name="CB11324ROW183" size="1">
            <input type="hidden" name="OLDCB11324ROW183" id="OLDCB11324ROW183" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW183DATA39595" id="OLDCB11324ROW183DATA39595" value="Membership--&gt;Membership Reports--&gt;Contact List">
            Membership--&gt;Membership Reports--&gt;Contact List
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW184" id="LINKCB11324ROW184" value="373">
          <input type="hidden" name="CHILDCB11324ROW184" id="CHILDCB11324ROW184" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3820" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW184" name="CB11324ROW184" size="1">
            <input type="hidden" name="OLDCB11324ROW184" id="OLDCB11324ROW184" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW184DATA39595" id="OLDCB11324ROW184DATA39595" value="Membership--&gt;Membership Reports--&gt;Emergency Contact List">
            Membership--&gt;Membership Reports--&gt;Emergency Contact List
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW185" id="LINKCB11324ROW185" value="374">
          <input type="hidden" name="CHILDCB11324ROW185" id="CHILDCB11324ROW185" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3840" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW185" name="CB11324ROW185" size="1">
            <input type="hidden" name="OLDCB11324ROW185" id="OLDCB11324ROW185" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW185DATA39595" id="OLDCB11324ROW185DATA39595" value="Membership--&gt;Membership Reports--&gt;Den List By Member Name">
            Membership--&gt;Membership Reports--&gt;Den List By Member Name
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW186" id="LINKCB11324ROW186" value="375">
          <input type="hidden" name="CHILDCB11324ROW186" id="CHILDCB11324ROW186" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3860" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW186" name="CB11324ROW186" size="1">
            <input type="hidden" name="OLDCB11324ROW186" id="OLDCB11324ROW186" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW186DATA39595" id="OLDCB11324ROW186DATA39595" value="Membership--&gt;Membership Reports--&gt;Den List By Den">
            Membership--&gt;Membership Reports--&gt;Den List By Den
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW187" id="LINKCB11324ROW187" value="5729">
          <input type="hidden" name="CHILDCB11324ROW187" id="CHILDCB11324ROW187" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3880" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW187" name="CB11324ROW187" size="1">
            <input type="hidden" name="OLDCB11324ROW187" id="OLDCB11324ROW187" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW187DATA39595" id="OLDCB11324ROW187DATA39595" value="Membership--&gt;Membership Reports--&gt;Den List With Parent Info">
            Membership--&gt;Membership Reports--&gt;Den List With Parent Info
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW188" id="LINKCB11324ROW188" value="8288">
          <input type="hidden" name="CHILDCB11324ROW188" id="CHILDCB11324ROW188" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3900" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW188" name="CB11324ROW188" size="1">
            <input type="hidden" name="OLDCB11324ROW188" id="OLDCB11324ROW188" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW188DATA39595" id="OLDCB11324ROW188DATA39595" value="Membership--&gt;Membership Reports--&gt;Members With Allergies Or Dietary Restrictions">
            Membership--&gt;Membership Reports--&gt;Members With Allergies Or Dietary Restrictions
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW189" id="LINKCB11324ROW189" value="376">
          <input type="hidden" name="CHILDCB11324ROW189" id="CHILDCB11324ROW189" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3920" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW189" name="CB11324ROW189" size="1">
            <input type="hidden" name="OLDCB11324ROW189" id="OLDCB11324ROW189" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW189DATA39595" id="OLDCB11324ROW189DATA39595" value="Membership--&gt;Membership Reports--&gt;Medical Form Effective Dates">
            Membership--&gt;Membership Reports--&gt;Medical Form Effective Dates
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW190" id="LINKCB11324ROW190" value="377">
          <input type="hidden" name="CHILDCB11324ROW190" id="CHILDCB11324ROW190" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="3940" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW190" name="CB11324ROW190" size="1">
            <input type="hidden" name="OLDCB11324ROW190" id="OLDCB11324ROW190" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW190DATA39595" id="OLDCB11324ROW190DATA39595" value="Membership--&gt;Membership Reports--&gt;Family Cross Reference">
            Membership--&gt;Membership Reports--&gt;Family Cross Reference
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW191" id="LINKCB11324ROW191" value="378">
          <input type="hidden" name="CHILDCB11324ROW191" id="CHILDCB11324ROW191" value="4559">
          <td>
            <input type="checkbox" class="form-control" tabindex="3960" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW191" name="CB11324ROW191" size="1">
            <input type="hidden" name="OLDCB11324ROW191" id="OLDCB11324ROW191" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW191DATA39595" id="OLDCB11324ROW191DATA39595" value="Membership--&gt;Membership Reports--&gt;Birthday List">
            Membership--&gt;Membership Reports--&gt;Birthday List
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW192" id="LINKCB11324ROW192" value="2554">
          <input type="hidden" name="CHILDCB11324ROW192" id="CHILDCB11324ROW192" value="4560">
          <td>
            <input type="checkbox" class="form-control" tabindex="3980" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW192" name="CB11324ROW192" size="1">
            <input type="hidden" name="OLDCB11324ROW192" id="OLDCB11324ROW192" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW192DATA39595" id="OLDCB11324ROW192DATA39595" value="Membership--&gt;Membership Reports--&gt;Shirt Sizes">
            Membership--&gt;Membership Reports--&gt;Shirt Sizes
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW193" id="LINKCB11324ROW193" value="379">
          <input type="hidden" name="CHILDCB11324ROW193" id="CHILDCB11324ROW193" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4000" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW193" name="CB11324ROW193" size="1">
            <input type="hidden" name="OLDCB11324ROW193" id="OLDCB11324ROW193" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW193DATA39595" id="OLDCB11324ROW193DATA39595" value="Membership--&gt;Membership Reports--&gt;Expired Training By Course">
            Membership--&gt;Membership Reports--&gt;Expired Training By Course
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW194" id="LINKCB11324ROW194" value="380">
          <input type="hidden" name="CHILDCB11324ROW194" id="CHILDCB11324ROW194" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4020" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW194" name="CB11324ROW194" size="1">
            <input type="hidden" name="OLDCB11324ROW194" id="OLDCB11324ROW194" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW194DATA39595" id="OLDCB11324ROW194DATA39595" value="Membership--&gt;Membership Reports--&gt;Expired Training By Person">
            Membership--&gt;Membership Reports--&gt;Expired Training By Person
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW195" id="LINKCB11324ROW195" value="381">
          <input type="hidden" name="CHILDCB11324ROW195" id="CHILDCB11324ROW195" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4040" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW195" name="CB11324ROW195" size="1">
            <input type="hidden" name="OLDCB11324ROW195" id="OLDCB11324ROW195" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW195DATA39595" id="OLDCB11324ROW195DATA39595" value="Membership--&gt;Membership Reports--&gt;Required Training By Course">
            Membership--&gt;Membership Reports--&gt;Required Training By Course
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW196" id="LINKCB11324ROW196" value="382">
          <input type="hidden" name="CHILDCB11324ROW196" id="CHILDCB11324ROW196" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4060" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW196" name="CB11324ROW196" size="1">
            <input type="hidden" name="OLDCB11324ROW196" id="OLDCB11324ROW196" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW196DATA39595" id="OLDCB11324ROW196DATA39595" value="Membership--&gt;Membership Reports--&gt;Required Training By Person">
            Membership--&gt;Membership Reports--&gt;Required Training By Person
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW197" id="LINKCB11324ROW197" value="6149">
          <input type="hidden" name="CHILDCB11324ROW197" id="CHILDCB11324ROW197" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4080" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW197" name="CB11324ROW197" size="1">
            <input type="hidden" name="OLDCB11324ROW197" id="OLDCB11324ROW197" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW197DATA39595" id="OLDCB11324ROW197DATA39595" value="Membership--&gt;Membership Reports--&gt;Leaders Who Need YPT">
            Membership--&gt;Membership Reports--&gt;Leaders Who Need YPT
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW198" id="LINKCB11324ROW198" value="6891">
          <input type="hidden" name="CHILDCB11324ROW198" id="CHILDCB11324ROW198" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4100" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW198" name="CB11324ROW198" size="1">
            <input type="hidden" name="OLDCB11324ROW198" id="OLDCB11324ROW198" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW198DATA39595" id="OLDCB11324ROW198DATA39595" value="Membership--&gt;Membership Reports--&gt;Upcoming BSA Registration Renewals">
            Membership--&gt;Membership Reports--&gt;Upcoming BSA Registration Renewals
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW199" id="LINKCB11324ROW199" value="6892">
          <input type="hidden" name="CHILDCB11324ROW199" id="CHILDCB11324ROW199" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4120" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW199" name="CB11324ROW199" size="1">
            <input type="hidden" name="OLDCB11324ROW199" id="OLDCB11324ROW199" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW199DATA39595" id="OLDCB11324ROW199DATA39595" value="Membership--&gt;Membership Reports--&gt;BSA Registration">
            Membership--&gt;Membership Reports--&gt;BSA Registration
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW200" id="LINKCB11324ROW200" value="8144">
          <input type="hidden" name="CHILDCB11324ROW200" id="CHILDCB11324ROW200" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4140" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW200" name="CB11324ROW200" size="1">
            <input type="hidden" name="OLDCB11324ROW200" id="OLDCB11324ROW200" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW200DATA39595" id="OLDCB11324ROW200DATA39595" value="Membership--&gt;Upload Members--&gt;Upload ScoutbookPlus Roster Report">
            Membership--&gt;Upload Members--&gt;Upload ScoutbookPlus Roster Report
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW201" id="LINKCB11324ROW201" value="1902">
          <input type="hidden" name="CHILDCB11324ROW201" id="CHILDCB11324ROW201" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4160" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW201" name="CB11324ROW201" size="1">
            <input type="hidden" name="OLDCB11324ROW201" id="OLDCB11324ROW201" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW201DATA39595" id="OLDCB11324ROW201DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Scouts From ScoutBook">
            Membership--&gt;Upload Members--&gt;Upload Scouts From ScoutBook
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW202" id="LINKCB11324ROW202" value="1903">
          <input type="hidden" name="CHILDCB11324ROW202" id="CHILDCB11324ROW202" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4180" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW202" name="CB11324ROW202" size="1">
            <input type="hidden" name="OLDCB11324ROW202" id="OLDCB11324ROW202" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW202DATA39595" id="OLDCB11324ROW202DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Adults From ScoutBook">
            Membership--&gt;Upload Members--&gt;Upload Adults From ScoutBook
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW203" id="LINKCB11324ROW203" value="6898">
          <input type="hidden" name="CHILDCB11324ROW203" id="CHILDCB11324ROW203" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4200" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW203" name="CB11324ROW203" size="1">
            <input type="hidden" name="OLDCB11324ROW203" id="OLDCB11324ROW203" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW203DATA39595" id="OLDCB11324ROW203DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Roster From My.Scouting">
            Membership--&gt;Upload Members--&gt;Upload Roster From My.Scouting
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW204" id="LINKCB11324ROW204" value="6284">
          <input type="hidden" name="CHILDCB11324ROW204" id="CHILDCB11324ROW204" value="3729">
          <td>
            <input type="checkbox" class="form-control" tabindex="4220" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW204" name="CB11324ROW204" size="1">
            <input type="hidden" name="OLDCB11324ROW204" id="OLDCB11324ROW204" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW204DATA39595" id="OLDCB11324ROW204DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Users From TroopTrack">
            Membership--&gt;Upload Members--&gt;Upload Users From TroopTrack
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW205" id="LINKCB11324ROW205" value="6285">
          <input type="hidden" name="CHILDCB11324ROW205" id="CHILDCB11324ROW205" value="3730">
          <td>
            <input type="checkbox" class="form-control" tabindex="4240" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW205" name="CB11324ROW205" size="1">
            <input type="hidden" name="OLDCB11324ROW205" id="OLDCB11324ROW205" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW205DATA39595" id="OLDCB11324ROW205DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Member Details From TroopTrack">
            Membership--&gt;Upload Members--&gt;Upload Member Details From TroopTrack
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW206" id="LINKCB11324ROW206" value="6394">
          <input type="hidden" name="CHILDCB11324ROW206" id="CHILDCB11324ROW206" value="3731">
          <td>
            <input type="checkbox" class="form-control" tabindex="4260" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW206" name="CB11324ROW206" size="1">
            <input type="hidden" name="OLDCB11324ROW206" id="OLDCB11324ROW206" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW206DATA39595" id="OLDCB11324ROW206DATA39595" value="Membership--&gt;Upload Members--&gt;Upload SOAR Members">
            Membership--&gt;Upload Members--&gt;Upload SOAR Members
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW207" id="LINKCB11324ROW207" value="6452">
          <input type="hidden" name="CHILDCB11324ROW207" id="CHILDCB11324ROW207" value="3732">
          <td>
            <input type="checkbox" class="form-control" tabindex="4280" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW207" name="CB11324ROW207" size="1">
            <input type="hidden" name="OLDCB11324ROW207" id="OLDCB11324ROW207" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW207DATA39595" id="OLDCB11324ROW207DATA39595" value="Membership--&gt;Upload Members--&gt;Upload SOAR Family">
            Membership--&gt;Upload Members--&gt;Upload SOAR Family
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW208" id="LINKCB11324ROW208" value="2956">
          <input type="hidden" name="CHILDCB11324ROW208" id="CHILDCB11324ROW208" value="3733">
          <td>
            <input type="checkbox" class="form-control" tabindex="4300" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW208" name="CB11324ROW208" size="1">
            <input type="hidden" name="OLDCB11324ROW208" id="OLDCB11324ROW208" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW208DATA39595" id="OLDCB11324ROW208DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Members From Packmaster Web 2.0">
            Membership--&gt;Upload Members--&gt;Upload Members From Packmaster Web 2.0
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW209" id="LINKCB11324ROW209" value="413">
          <input type="hidden" name="CHILDCB11324ROW209" id="CHILDCB11324ROW209" value="3734">
          <td>
            <input type="checkbox" class="form-control" tabindex="4320" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW209" name="CB11324ROW209" size="1">
            <input type="hidden" name="OLDCB11324ROW209" id="OLDCB11324ROW209" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW209DATA39595" id="OLDCB11324ROW209DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Scouts From TroopMaster">
            Membership--&gt;Upload Members--&gt;Upload Scouts From TroopMaster
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW210" id="LINKCB11324ROW210" value="2003">
          <input type="hidden" name="CHILDCB11324ROW210" id="CHILDCB11324ROW210" value="3735">
          <td>
            <input type="checkbox" class="form-control" tabindex="4340" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW210" name="CB11324ROW210" size="1">
            <input type="hidden" name="OLDCB11324ROW210" id="OLDCB11324ROW210" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW210DATA39595" id="OLDCB11324ROW210DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Adults From TroopMaster">
            Membership--&gt;Upload Members--&gt;Upload Adults From TroopMaster
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW211" id="LINKCB11324ROW211" value="414">
          <input type="hidden" name="CHILDCB11324ROW211" id="CHILDCB11324ROW211" value="3736">
          <td>
            <input type="checkbox" class="form-control" tabindex="4360" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW211" name="CB11324ROW211" size="1">
            <input type="hidden" name="OLDCB11324ROW211" id="OLDCB11324ROW211" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW211DATA39595" id="OLDCB11324ROW211DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Members From ScoutNet">
            Membership--&gt;Upload Members--&gt;Upload Members From ScoutNet
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW212" id="LINKCB11324ROW212" value="415">
          <input type="hidden" name="CHILDCB11324ROW212" id="CHILDCB11324ROW212" value="3737">
          <td>
            <input type="checkbox" class="form-control" tabindex="4380" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW212" name="CB11324ROW212" size="1">
            <input type="hidden" name="OLDCB11324ROW212" id="OLDCB11324ROW212" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW212DATA39595" id="OLDCB11324ROW212DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Scouts From ScoutTrack">
            Membership--&gt;Upload Members--&gt;Upload Scouts From ScoutTrack
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW213" id="LINKCB11324ROW213" value="416">
          <input type="hidden" name="CHILDCB11324ROW213" id="CHILDCB11324ROW213" value="3738">
          <td>
            <input type="checkbox" class="form-control" tabindex="4400" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW213" name="CB11324ROW213" size="1">
            <input type="hidden" name="OLDCB11324ROW213" id="OLDCB11324ROW213" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW213DATA39595" id="OLDCB11324ROW213DATA39595" value="Membership--&gt;Upload Members--&gt;Upload Adults From ScoutTrack">
            Membership--&gt;Upload Members--&gt;Upload Adults From ScoutTrack
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW214" id="LINKCB11324ROW214" value="6874">
          <input type="hidden" name="CHILDCB11324ROW214" id="CHILDCB11324ROW214" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4420" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW214" name="CB11324ROW214" size="1">
            <input type="hidden" name="OLDCB11324ROW214" id="OLDCB11324ROW214" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW214DATA39595" id="OLDCB11324ROW214DATA39595" value="Membership--&gt;Update All . . .--&gt;BSA Registration">
            Membership--&gt;Update All . . .--&gt;BSA Registration
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW215" id="LINKCB11324ROW215" value="7171">
          <input type="hidden" name="CHILDCB11324ROW215" id="CHILDCB11324ROW215" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4440" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW215" name="CB11324ROW215" size="1">
            <input type="hidden" name="OLDCB11324ROW215" id="OLDCB11324ROW215" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW215DATA39595" id="OLDCB11324ROW215DATA39595" value="Membership--&gt;Update All . . .--&gt;Medical Form Date">
            Membership--&gt;Update All . . .--&gt;Medical Form Date
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW216" id="LINKCB11324ROW216" value="8292">
          <input type="hidden" name="CHILDCB11324ROW216" id="CHILDCB11324ROW216" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4460" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW216" name="CB11324ROW216" size="1">
            <input type="hidden" name="OLDCB11324ROW216" id="OLDCB11324ROW216" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW216DATA39595" id="OLDCB11324ROW216DATA39595" value="Membership--&gt;Update All . . .--&gt;Allergies and Dietary Restrictions">
            Membership--&gt;Update All . . .--&gt;Allergies and Dietary Restrictions
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW217" id="LINKCB11324ROW217" value="7172">
          <input type="hidden" name="CHILDCB11324ROW217" id="CHILDCB11324ROW217" value="4577">
          <td>
            <input type="checkbox" class="form-control" tabindex="4480" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW217" name="CB11324ROW217" size="1">
            <input type="hidden" name="OLDCB11324ROW217" id="OLDCB11324ROW217" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW217DATA39595" id="OLDCB11324ROW217DATA39595" value="Membership--&gt;Update All . . .--&gt;Swim Test Results">
            Membership--&gt;Update All . . .--&gt;Swim Test Results
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW218" id="LINKCB11324ROW218" value="7173">
          <input type="hidden" name="CHILDCB11324ROW218" id="CHILDCB11324ROW218" value="4578">
          <td>
            <input type="checkbox" class="form-control" tabindex="4500" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW218" name="CB11324ROW218" size="1">
            <input type="hidden" name="OLDCB11324ROW218" id="OLDCB11324ROW218" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW218DATA39595" id="OLDCB11324ROW218DATA39595" value="Membership--&gt;Update All . . .--&gt;Shirt Size">
            Membership--&gt;Update All . . .--&gt;Shirt Size
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW219" id="LINKCB11324ROW219" value="435">
          <input type="hidden" name="CHILDCB11324ROW219" id="CHILDCB11324ROW219" value="3739">
          <td>
            <input type="checkbox" class="form-control" tabindex="4520" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW219" name="CB11324ROW219" size="1">
            <input type="hidden" name="OLDCB11324ROW219" id="OLDCB11324ROW219" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW219DATA39595" id="OLDCB11324ROW219DATA39595" value="Fundraising--&gt;Fundraising Reports--&gt;Top Sellers">
            Fundraising--&gt;Fundraising Reports--&gt;Top Sellers
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW220" id="LINKCB11324ROW220" value="436">
          <input type="hidden" name="CHILDCB11324ROW220" id="CHILDCB11324ROW220" value="3740">
          <td>
            <input type="checkbox" class="form-control" tabindex="4540" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW220" name="CB11324ROW220" size="1">
            <input type="hidden" name="OLDCB11324ROW220" id="OLDCB11324ROW220" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW220DATA39595" id="OLDCB11324ROW220DATA39595" value="Fundraising--&gt;Fundraising Reports--&gt;Consolidated Orders">
            Fundraising--&gt;Fundraising Reports--&gt;Consolidated Orders
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW221" id="LINKCB11324ROW221" value="437">
          <input type="hidden" name="CHILDCB11324ROW221" id="CHILDCB11324ROW221" value="3741">
          <td>
            <input type="checkbox" class="form-control" tabindex="4560" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW221" name="CB11324ROW221" size="1">
            <input type="hidden" name="OLDCB11324ROW221" id="OLDCB11324ROW221" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW221DATA39595" id="OLDCB11324ROW221DATA39595" value="Fundraising--&gt;Fundraising Reports--&gt;Order Item Detail">
            Fundraising--&gt;Fundraising Reports--&gt;Order Item Detail
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW222" id="LINKCB11324ROW222" value="438">
          <input type="hidden" name="CHILDCB11324ROW222" id="CHILDCB11324ROW222" value="3742">
          <td>
            <input type="checkbox" class="form-control" tabindex="4580" checked="" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW222" name="CB11324ROW222" size="1">
            <input type="hidden" name="OLDCB11324ROW222" id="OLDCB11324ROW222" value="Y">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW222DATA39595" id="OLDCB11324ROW222DATA39595" value="Fundraising--&gt;Fundraising Reports--&gt;Merchandise Inventory">
            Fundraising--&gt;Fundraising Reports--&gt;Merchandise Inventory
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW223" id="LINKCB11324ROW223" value="383">
          <input type="hidden" name="CHILDCB11324ROW223" id="CHILDCB11324ROW223" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4600" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW223" name="CB11324ROW223" size="1">
            <input type="hidden" name="OLDCB11324ROW223" id="OLDCB11324ROW223" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW223DATA39595" id="OLDCB11324ROW223DATA39595" value="Money--&gt;Financial Reports--&gt;Report Account Balances">
            Money--&gt;Financial Reports--&gt;Report Account Balances
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW224" id="LINKCB11324ROW224" value="384">
          <input type="hidden" name="CHILDCB11324ROW224" id="CHILDCB11324ROW224" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4620" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW224" name="CB11324ROW224" size="1">
            <input type="hidden" name="OLDCB11324ROW224" id="OLDCB11324ROW224" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW224DATA39595" id="OLDCB11324ROW224DATA39595" value="Money--&gt;Financial Reports--&gt;Report Financial History">
            Money--&gt;Financial Reports--&gt;Report Financial History
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW225" id="LINKCB11324ROW225" value="385">
          <input type="hidden" name="CHILDCB11324ROW225" id="CHILDCB11324ROW225" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4640" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW225" name="CB11324ROW225" size="1">
            <input type="hidden" name="OLDCB11324ROW225" id="OLDCB11324ROW225" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW225DATA39595" id="OLDCB11324ROW225DATA39595" value="Money--&gt;Financial Reports--&gt;Fund Balances Report">
            Money--&gt;Financial Reports--&gt;Fund Balances Report
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW226" id="LINKCB11324ROW226" value="1207">
          <input type="hidden" name="CHILDCB11324ROW226" id="CHILDCB11324ROW226" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4660" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW226" name="CB11324ROW226" size="1">
            <input type="hidden" name="OLDCB11324ROW226" id="OLDCB11324ROW226" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW226DATA39595" id="OLDCB11324ROW226DATA39595" value="Money--&gt;Financial Reports--&gt;Fund Balances By Fiscal Year">
            Money--&gt;Financial Reports--&gt;Fund Balances By Fiscal Year
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW227" id="LINKCB11324ROW227" value="1943">
          <input type="hidden" name="CHILDCB11324ROW227" id="CHILDCB11324ROW227" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4680" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW227" name="CB11324ROW227" size="1">
            <input type="hidden" name="OLDCB11324ROW227" id="OLDCB11324ROW227" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW227DATA39595" id="OLDCB11324ROW227DATA39595" value="Money--&gt;Financial Reports--&gt;Fund Balances on Effective Date">
            Money--&gt;Financial Reports--&gt;Fund Balances on Effective Date
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW228" id="LINKCB11324ROW228" value="1212">
          <input type="hidden" name="CHILDCB11324ROW228" id="CHILDCB11324ROW228" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4700" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW228" name="CB11324ROW228" size="1">
            <input type="hidden" name="OLDCB11324ROW228" id="OLDCB11324ROW228" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW228DATA39595" id="OLDCB11324ROW228DATA39595" value="Site Configuration--&gt;Security Configuration--&gt;Override Default Public Access Settings">
            Site Configuration--&gt;Security Configuration--&gt;Override Default Public Access Settings
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW229" id="LINKCB11324ROW229" value="1660">
          <input type="hidden" name="CHILDCB11324ROW229" id="CHILDCB11324ROW229" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4720" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW229" name="CB11324ROW229" size="1">
            <input type="hidden" name="OLDCB11324ROW229" id="OLDCB11324ROW229" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW229DATA39595" id="OLDCB11324ROW229DATA39595" value="Site Configuration--&gt;Security Configuration--&gt;Configure Quick Menus">
            Site Configuration--&gt;Security Configuration--&gt;Configure Quick Menus
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW230" id="LINKCB11324ROW230" value="386">
          <input type="hidden" name="CHILDCB11324ROW230" id="CHILDCB11324ROW230" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4740" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW230" name="CB11324ROW230" size="1">
            <input type="hidden" name="OLDCB11324ROW230" id="OLDCB11324ROW230" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW230DATA39595" id="OLDCB11324ROW230DATA39595" value="Site Configuration--&gt;Security Configuration--&gt;Configure User Roles">
            Site Configuration--&gt;Security Configuration--&gt;Configure User Roles
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW231" id="LINKCB11324ROW231" value="387">
          <input type="hidden" name="CHILDCB11324ROW231" id="CHILDCB11324ROW231" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4760" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW231" name="CB11324ROW231" size="1">
            <input type="hidden" name="OLDCB11324ROW231" id="OLDCB11324ROW231" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW231DATA39595" id="OLDCB11324ROW231DATA39595" value="Site Configuration--&gt;Security Configuration--&gt;Assign Tasks To Roles">
            Site Configuration--&gt;Security Configuration--&gt;Assign Tasks To Roles
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW232" id="LINKCB11324ROW232" value="388">
          <input type="hidden" name="CHILDCB11324ROW232" id="CHILDCB11324ROW232" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4780" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW232" name="CB11324ROW232" size="1">
            <input type="hidden" name="OLDCB11324ROW232" id="OLDCB11324ROW232" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW232DATA39595" id="OLDCB11324ROW232DATA39595" value="Site Configuration--&gt;Security Configuration--&gt;Role Task Report">
            Site Configuration--&gt;Security Configuration--&gt;Role Task Report
          </td>
        </tr>
        <tr>
          <input type="hidden" name="LINKCB11324ROW233" id="LINKCB11324ROW233" value="389">
          <input type="hidden" name="CHILDCB11324ROW233" id="CHILDCB11324ROW233" value="0">
          <td>
            <input type="checkbox" class="form-control" tabindex="4800" onclick="ClickCheckbox(this);" value="Y" id="CB11324ROW233" name="CB11324ROW233" size="1">
            <input type="hidden" name="OLDCB11324ROW233" id="OLDCB11324ROW233" value="N">
          </td>
          <td class="text-center">
            <input type="hidden" name="OLDCB11324ROW233DATA39595" id="OLDCB11324ROW233DATA39595" value="Site Configuration--&gt;Security Configuration--&gt;Task Role Report">
            Site Configuration--&gt;Security Configuration--&gt;Task Role Report
          </td>
        </tr>
        </tbody>
      </table>


</div>
</div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON4">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>