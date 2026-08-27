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
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap_override_v11.css">
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap_override_colors_Cub_Scouts.css">
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/XOqlk8PL_yVx6IdpLbpXdiLy/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-5gTdLl6IS0Y6zKiLKimmhaY3IOLosQFpvj9Tvt9s2RAiKLtLUEWOP5N8mtHLNUzF"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
<form enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/formCustom.aspx" target="_self" method="post" name="easyform" id="easyform">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="5787">
<input type="hidden" name="Form_ID" id="Form_ID" value="6149">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/formCustom.aspx?Menu_Item_ID=5787&amp;Stack=0">
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
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=1','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=305&amp;Stack=1','');">My Contact Information</a>
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
  <li class="list-group-item"><a href="#" onclick="easyEditHTMLPage();">Edit This Page</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalPageFormat">Format</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalReportingOptions">Reporting Options</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=5787">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=5787">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=5787">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=365" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=5787">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=5787">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=5787">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=5787">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/formCustom.aspx?Menu_Item_ID=5787&amp;Stack=0&amp;Application_ID=2840
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
Events Hub
</p>
<input type="hidden" name="Custom_Form_ID" id="Custom_Form_ID" value="0">
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block widget35" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=271&amp;Stack=2">View Calendar</a><sup><a class="widget-help-link" href="Help.aspx?ID=87" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
      </div>
    </div>
  </div>
</div>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block widget33" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=376&amp;Stack=2">Attendance Not Finalized</a><sup><a class="widget-help-link" href="Help.aspx?ID=92" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Date
              </th>
              <th>
              Event
              </th>
              <th>
              Scouts
              </th>
              <th>
              Adults
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=580&amp;FK=580&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/22/2026
              </td>
              <td class="text-left">
                Webelos and AOL Swim Adventure
              </td>
              <td class="text-right">
                9
              </td>
              <td class="text-right">
                11
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=554&amp;FK=554&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/06/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=567&amp;FK=567&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/18/2026
              </td>
              <td class="text-left">
                Natural Bridge Caverns
              </td>
              <td class="text-right">
                17
              </td>
              <td class="text-right">
                16
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=511&amp;FK=511&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/04/2026
              </td>
              <td class="text-left">
                Circle C 4th of July Parade
              </td>
              <td class="text-right">
                7
              </td>
              <td class="text-right">
                7
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=565&amp;FK=565&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/02/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=506&amp;FK=506&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                06/20/2026
              </td>
              <td class="text-left">
                Cidercade Hangout
              </td>
              <td class="text-right">
                11
              </td>
              <td class="text-right">
                9
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=564&amp;FK=564&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                06/04/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=500&amp;FK=500&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/30/2026
              </td>
              <td class="text-left">
                Raingutter Regatta
              </td>
              <td class="text-right">
                17
              </td>
              <td class="text-right">
                14
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=507&amp;FK=507&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/28/2026
              </td>
              <td class="text-left">
                Ceremony of Colors at Baldwin Elementary Graduation
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=383&amp;FK=383&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/16/2026
              </td>
              <td class="text-left">
                Pack 12 Graduation
              </td>
              <td class="text-right">
                28
              </td>
              <td class="text-right">
                24
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=380&amp;FK=380&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/09/2026
              </td>
              <td class="text-left">
                Rocket Derby
              </td>
              <td class="text-right">
                22
              </td>
              <td class="text-right">
                21
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=509&amp;FK=509&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/07/2026
              </td>
              <td class="text-left">
                Rocket Derby Inspections and Build (Session 2)
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=508&amp;FK=508&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/06/2026
              </td>
              <td class="text-left">
                Rocket Derby Inspections and Build (Session 1)
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=502&amp;FK=502&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/18/2026
              </td>
              <td class="text-left">
                Spring Campout - Alternative Event - Please RSVP
              </td>
              <td class="text-right">
                37
              </td>
              <td class="text-right">
                33
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=503&amp;FK=503&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/18/2026
              </td>
              <td class="text-left">
                Messengers Of Peace Service Project
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=378&amp;FK=378&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/17/2026
              </td>
              <td class="text-left">
                RESCHEDULED TO FALL -- Spring Campout
              </td>
              <td class="text-right">
                50
              </td>
              <td class="text-right">
                45
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=373&amp;FK=373&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/07/2026
              </td>
              <td class="text-left">
                AOL Crossover Ceremony
              </td>
              <td class="text-right">
                8
              </td>
              <td class="text-right">
                14
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=372&amp;FK=372&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/06/2026
              </td>
              <td class="text-left">
                CANCELLED - Cubmaster Campout
              </td>
              <td class="text-right">
                19
              </td>
              <td class="text-right">
                19
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=371&amp;FK=371&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/07/2026
              </td>
              <td class="text-left">
                Pinewood Derby
              </td>
              <td class="text-right">
                20
              </td>
              <td class="text-right">
                18
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=486&amp;FK=486&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/05/2026
              </td>
              <td class="text-left">
                Weigh-in day for Pinewood Derby
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=485&amp;FK=485&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/04/2026
              </td>
              <td class="text-left">
                Weigh-in day for Pinewood Derby
              </td>
              <td class="text-right">
                4
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=369&amp;FK=369&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/31/2026
              </td>
              <td class="text-left">
                Winter Overnight at San Antonio Zoo
              </td>
              <td class="text-right">
                62
              </td>
              <td class="text-right">
                54
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=488&amp;FK=488&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/22/2026
              </td>
              <td class="text-left">
                Block Cutting for Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=484&amp;FK=484&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/19/2026
              </td>
              <td class="text-left">
                Block Cutting for Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=483&amp;FK=483&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/18/2026
              </td>
              <td class="text-left">
                Block Cutting for Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=482&amp;FK=482&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/17/2026
              </td>
              <td class="text-left">
                Block Cutting for Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=478&amp;FK=478&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/09/2026
              </td>
              <td class="text-left">
                BALOO Training
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=477&amp;FK=477&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/08/2025
              </td>
              <td class="text-left">
                Troop 448 Meeting with AOL Activities
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                6
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=475&amp;FK=475&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/08/2025
              </td>
              <td class="text-left">
                Troop 448 troop meeting
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=409&amp;FK=409&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/06/2025
              </td>
              <td class="text-left">
                Troop 19 Campout - Pedernales Falls
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=465&amp;FK=465&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/16/2025
              </td>
              <td class="text-left">
                Touch An Ambulance Event/First Aide with Ally Medical
              </td>
              <td class="text-right">
                14
              </td>
              <td class="text-right">
                8
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=462&amp;FK=462&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/15/2025
              </td>
              <td class="text-left">
                Lion's Service Project Art on Display @ Austin Studio Tour
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=472&amp;FK=472&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/11/2025
              </td>
              <td class="text-left">
                Veterans Day Flag Ceremony at Clayton Elementary
              </td>
              <td class="text-right">
                7
              </td>
              <td class="text-right">
                5
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=469&amp;FK=469&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/11/2025
              </td>
              <td class="text-left">
                Veterans Day Flag Ceremony at Baldwin Elementary
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                5
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=364&amp;FK=364&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/07/2025
              </td>
              <td class="text-left">
                Fall Campout
              </td>
              <td class="text-right">
                87
              </td>
              <td class="text-right">
                77
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=458&amp;FK=458&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/26/2025
              </td>
              <td class="text-left">
                Baldwin Campus Cleanup Service Project
              </td>
              <td class="text-right">
                26
              </td>
              <td class="text-right">
                21
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=384&amp;FK=384&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/25/2025
              </td>
              <td class="text-left">
                Scouting 101 (formerly Webelos Woods)
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                6
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=459&amp;FK=459&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/12/2025
              </td>
              <td class="text-left">
                Lion's Den #6 &amp; #7 Art Supply Pickup
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=358&amp;FK=358&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/14/2025
              </td>
              <td class="text-left">
                New Scout Family Meeting
              </td>
              <td class="text-right">
                4
              </td>
              <td class="text-right">
                5
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=354&amp;FK=354&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/04/2025
              </td>
              <td class="text-left">
                Fall Recruitment - Clayton
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                3
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=353&amp;FK=353&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/02/2025
              </td>
              <td class="text-left">
                Fall Recruitment - Baldwin
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                9
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=352&amp;FK=352&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/16/2025
              </td>
              <td class="text-left">
                Cubmobile Derby
              </td>
              <td class="text-right">
                19
              </td>
              <td class="text-right">
                21
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=392&amp;FK=392&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/15/2025
              </td>
              <td class="text-left">
                Baldwin Meet the Teacher Night
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                4
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=390&amp;FK=390&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/14/2025
              </td>
              <td class="text-left">
                Clayton Meet the Teacher Night
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=351&amp;FK=351&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/19/2025
              </td>
              <td class="text-left">
                Innerspace Caverns
              </td>
              <td class="text-right">
                16
              </td>
              <td class="text-right">
                17
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=350&amp;FK=350&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/04/2025
              </td>
              <td class="text-left">
                Independence Day Parade (CANCELLED)
              </td>
              <td class="text-right">
                14
              </td>
              <td class="text-right">
                13
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=349&amp;FK=349&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                06/07/2025
              </td>
              <td class="text-left">
                Raingutter Regatta
              </td>
              <td class="text-right">
                19
              </td>
              <td class="text-right">
                21
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=346&amp;FK=346&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/29/2025
              </td>
              <td class="text-left">
                Ceremony of Colors at Baldwin Elementary Graduation
              </td>
              <td class="text-right">
                7
              </td>
              <td class="text-right">
                3
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=257&amp;FK=257&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/17/2025
              </td>
              <td class="text-left">
                Pack 12 Graduation
              </td>
              <td class="text-right">
                17
              </td>
              <td class="text-right">
                15
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=256&amp;FK=256&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/10/2025
              </td>
              <td class="text-left">
                Rocket Derby
              </td>
              <td class="text-right">
                34
              </td>
              <td class="text-right">
                36
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=348&amp;FK=348&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/08/2025
              </td>
              <td class="text-left">
                Rocket Derby Inspections, Day 2
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=347&amp;FK=347&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/07/2025
              </td>
              <td class="text-left">
                Rocket Derby Inspections, Day 1
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=254&amp;FK=254&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/11/2025
              </td>
              <td class="text-left">
                Spring Campout
              </td>
              <td class="text-right">
                43
              </td>
              <td class="text-right">
                47
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=340&amp;FK=340&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/06/2025
              </td>
              <td class="text-left">
                Clean-up at Clayton and Community Center
              </td>
              <td class="text-right">
                17
              </td>
              <td class="text-right">
                16
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=343&amp;FK=343&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/08/2025
              </td>
              <td class="text-left">
                Baldwin Campus Beautification Day
              </td>
              <td class="text-right">
                4
              </td>
              <td class="text-right">
                4
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=339&amp;FK=339&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/01/2025
              </td>
              <td class="text-left">
                Cubmaster Campout
              </td>
              <td class="text-right">
                4
              </td>
              <td class="text-right">
                4
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=337&amp;FK=337&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/22/2025
              </td>
              <td class="text-left">
                Crossover Ceremony
              </td>
              <td class="text-right">
                10
              </td>
              <td class="text-right">
                11
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=253&amp;FK=253&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/22/2025
              </td>
              <td class="text-left">
                Crossover Campout (NOW CEREMONY ONLY)
              </td>
              <td class="text-right">
                11
              </td>
              <td class="text-right">
                14
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=252&amp;FK=252&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/08/2025
              </td>
              <td class="text-left">
                Pinewood Derby
              </td>
              <td class="text-right">
                8
              </td>
              <td class="text-right">
                10
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=335&amp;FK=335&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/05/2025
              </td>
              <td class="text-left">
                Pinewood Derby Weigh-In
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                3
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=334&amp;FK=334&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/04/2025
              </td>
              <td class="text-left">
                Pinewood Derby Weigh-In
              </td>
              <td class="text-right">
                4
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=255&amp;FK=255&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/25/2025
              </td>
              <td class="text-left">
                Sea World Winter Overnight
              </td>
              <td class="text-right">
                68
              </td>
              <td class="text-right">
                66
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=289&amp;FK=289&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/2025
              </td>
              <td class="text-left">
                Overnight at the USS Lexington
              </td>
              <td class="text-right">
                24
              </td>
              <td class="text-right">
                26
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=324&amp;FK=324&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/11/2024
              </td>
              <td class="text-left">
                Baldwin Veteran's Day Celebration - Flag Ceremony
              </td>
              <td class="text-right">
                4
              </td>
              <td class="text-right">
                3
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=283&amp;FK=283&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/08/2024
              </td>
              <td class="text-left">
                Den 22 AOL campout Pedernales Falls
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                6
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=323&amp;FK=323&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/08/2024
              </td>
              <td class="text-left">
                Clayton Veterans Day Assembly - Flag Ceremony
              </td>
              <td class="text-right">
                8
              </td>
              <td class="text-right">
                4
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=234&amp;FK=234&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/01/2024
              </td>
              <td class="text-left">
                Fall Campout - Goliad State Park
              </td>
              <td class="text-right">
                47
              </td>
              <td class="text-right">
                48
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=287&amp;FK=287&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/27/2024
              </td>
              <td class="text-left">
                (BOYS) - Troop 61 Open House
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=286&amp;FK=286&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/27/2024
              </td>
              <td class="text-left">
                (GIRLS) - Troop 19 Halloween Costume Party
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=299&amp;FK=299&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/27/2024
              </td>
              <td class="text-left">
                Service Project - Baldwin Campus Cleanup &amp; Planter Construction
              </td>
              <td class="text-right">
                16
              </td>
              <td class="text-right">
                16
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=300&amp;FK=300&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/23/2024
              </td>
              <td class="text-left">
                Den Leader Training
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                5
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=284&amp;FK=284&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/19/2024
              </td>
              <td class="text-left">
                (BOYS AOL) Troop 448 - Astronomy Overnight Campout
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=285&amp;FK=285&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/19/2024
              </td>
              <td class="text-left">
                (BOYS AOL) Troop 555 - Grelle Campout
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=266&amp;FK=266&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/18/2024
              </td>
              <td class="text-left">
                (BOYS AOL) Troop 505 - Invitational Capture the Flag Campout
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=274&amp;FK=274&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/11/2024
              </td>
              <td class="text-left">
                BALOO Adult Leader Training
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=288&amp;FK=288&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/11/2024
              </td>
              <td class="text-left">
                (GIRLS AOL) - Troop 4443 Krause Springs Campout
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=268&amp;FK=268&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/28/2024
              </td>
              <td class="text-left">
                Troop 505 Open House
              </td>
              <td class="text-right">
                7
              </td>
              <td class="text-right">
                6
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=250&amp;FK=250&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/15/2024
              </td>
              <td class="text-left">
                Family Pack Orientation
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=241&amp;FK=241&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/08/2024
              </td>
              <td class="text-left">
                Parent &amp; Volunteer Meeting
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=225&amp;FK=225&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/01/2024
              </td>
              <td class="text-left">
                Fall Recruitment - Circle C
              </td>
              <td class="text-right">
                11
              </td>
              <td class="text-right">
                10
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=237&amp;FK=237&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/29/2024
              </td>
              <td class="text-left">
                Baldwin Back to School Night K-2nd
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=224&amp;FK=224&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/24/2024
              </td>
              <td class="text-left">
                Fall Recruitment - Circle C
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                7
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=258&amp;FK=258&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/24/2024
              </td>
              <td class="text-left">
                Aquanauts
              </td>
              <td class="text-right">
                5
              </td>
              <td class="text-right">
                5
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=222&amp;FK=222&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/18/2024
              </td>
              <td class="text-left">
                Cubmobile Derby
              </td>
              <td class="text-right">
                19
              </td>
              <td class="text-right">
                21
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=236&amp;FK=236&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/16/2024
              </td>
              <td class="text-left">
                Baldwin Meet the Teacher Night
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=235&amp;FK=235&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/15/2024
              </td>
              <td class="text-left">
                Clayton Meet the Teacher Night
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=221&amp;FK=221&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/11/2024
              </td>
              <td class="text-left">
                Parent &amp; Volunteer Meeting
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=220&amp;FK=220&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/20/2024
              </td>
              <td class="text-left">
                Summer Activity - Rock Climbing
              </td>
              <td class="text-right">
                15
              </td>
              <td class="text-right">
                14
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=219&amp;FK=219&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/04/2024
              </td>
              <td class="text-left">
                Independence Day Parade
              </td>
              <td class="text-right">
                12
              </td>
              <td class="text-right">
                8
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=218&amp;FK=218&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                06/08/2024
              </td>
              <td class="text-left">
                Raingutter Regatta
              </td>
              <td class="text-right">
                14
              </td>
              <td class="text-right">
                15
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=223&amp;FK=223&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/23/2024
              </td>
              <td class="text-left">
                Baldwin Ceremony of Colors
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=214&amp;FK=214&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/11/2024
              </td>
              <td class="text-left">
                RESCHEDULED - Cleanup @ Clayton Elementary
              </td>
              <td class="text-right">
                8
              </td>
              <td class="text-right">
                8
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=125&amp;FK=125&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/04/2024
              </td>
              <td class="text-left">
                NEW TIME - Rocket Derby
              </td>
              <td class="text-right">
                16
              </td>
              <td class="text-right">
                15
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=213&amp;FK=213&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/27/2024
              </td>
              <td class="text-left">
                Pack 12 Recruitment @ Clayto's Playground
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=126&amp;FK=126&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/19/2024
              </td>
              <td class="text-left">
                Spring Campout
              </td>
              <td class="text-right">
                39
              </td>
              <td class="text-right">
                41
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=209&amp;FK=209&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/06/2024
              </td>
              <td class="text-left">
                Eclipse Extravaganza
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=208&amp;FK=208&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/28/2024
              </td>
              <td class="text-left">
                BSA Distinguished Citizen Award
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=120&amp;FK=120&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/24/2024
              </td>
              <td class="text-left">
                Crossover
              </td>
              <td class="text-right">
                15
              </td>
              <td class="text-right">
                16
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=199&amp;FK=199&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/18/2024
              </td>
              <td class="text-left">
                BEAR DENS - Fire Station Visit by Den 3
              </td>
              <td class="text-right">
                9
              </td>
              <td class="text-right">
                9
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=119&amp;FK=119&amp;Form_ID=375&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/03/2024
              </td>
              <td class="text-left">
                Pinewood Derby
              </td>
              <td class="text-right">
                32
              </td>
              <td class="text-right">
                29
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="center-block widget29" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=163&amp;Stack=2">Upcoming Events</a><sup><a class="widget-help-link" href="Help.aspx?ID=89" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Date
              </th>
              <th>
              Event
              </th>
              <th>
              Scouts
              </th>
              <th>
              Adults
              </th>
              <th>
              Guests
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=579&amp;FK=579&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/25/2026
              </td>
              <td class="text-left">
                Join Scouting Night
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=581&amp;FK=581&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/29/2026
              </td>
              <td class="text-left">
                Welcome Back, Pack Picnic
              </td>
              <td class="text-right">
                5
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=555&amp;FK=555&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/03/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=531&amp;FK=531&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/08/2026
              </td>
              <td class="text-left">
                Pack Meeting Setup (AOLs)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=522&amp;FK=522&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/08/2026
              </td>
              <td class="text-left">
                Pack Meeting (Open House &amp; Parent Orientation)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=513&amp;FK=513&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/13/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=551&amp;FK=551&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/18/2026
              </td>
              <td class="text-left">
                STEM Adventure Weekend (Council Event)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=571&amp;FK=571&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/20/2026
              </td>
              <td class="text-left">
                Webelos Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=566&amp;FK=566&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/25/2026
              </td>
              <td class="text-left">
                Cub World
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=552&amp;FK=552&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/26/2026
              </td>
              <td class="text-left">
                Cub Kite and Rocket Festival (Council Event)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=556&amp;FK=556&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/01/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=582&amp;FK=582&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/03/2026
              </td>
              <td class="text-left">
                Scouting 101 &amp; Cub Mobile (Troop Hosted Event)
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=514&amp;FK=514&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/04/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=532&amp;FK=532&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/13/2026
              </td>
              <td class="text-left">
                Pack Meeting Setup (Webelos)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=523&amp;FK=523&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/13/2026
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=572&amp;FK=572&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/18/2026
              </td>
              <td class="text-left">
                Webelos Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=515&amp;FK=515&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/01/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=557&amp;FK=557&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/05/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=550&amp;FK=550&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/06/2026
              </td>
              <td class="text-left">
                Into the Woods Cub Scout Adventure Weekend (Council Event)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=573&amp;FK=573&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/08/2026
              </td>
              <td class="text-left">
                Webelos Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=533&amp;FK=533&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/10/2026
              </td>
              <td class="text-left">
                Pack Meeting Setup (Bears)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=524&amp;FK=524&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/10/2026
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=549&amp;FK=549&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/13/2026
              </td>
              <td class="text-left">
                Fall Campout
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=558&amp;FK=558&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/03/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=516&amp;FK=516&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/06/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=534&amp;FK=534&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/08/2026
              </td>
              <td class="text-left">
                Pack Meeting Setup (Wolves)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=525&amp;FK=525&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/08/2026
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=574&amp;FK=574&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/13/2026
              </td>
              <td class="text-left">
                Webelos Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=559&amp;FK=559&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/07/2027
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=517&amp;FK=517&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/10/2027
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=535&amp;FK=535&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/12/2027
              </td>
              <td class="text-left">
                Pack Meeting Setup (AOLs)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=526&amp;FK=526&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/12/2027
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=548&amp;FK=548&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/16/2027
              </td>
              <td class="text-left">
                USS Lexington (Overnight)
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=553&amp;FK=553&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/16/2027
              </td>
              <td class="text-left">
                Cub Winter Festival (Council Event)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=547&amp;FK=547&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/23/2027
              </td>
              <td class="text-left">
                Winter Overnight
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=560&amp;FK=560&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/04/2027
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=576&amp;FK=576&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/07/2027
              </td>
              <td class="text-left">
                Webelos Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=518&amp;FK=518&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/07/2027
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=536&amp;FK=536&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/09/2027
              </td>
              <td class="text-left">
                Pack Meeting Setup (Webelos)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=527&amp;FK=527&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/09/2027
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=545&amp;FK=545&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/16/2027
              </td>
              <td class="text-left">
                Pinewood Derby Inspections (Option 1)
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=546&amp;FK=546&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/18/2027
              </td>
              <td class="text-left">
                Pinewood Derby Inspections (Option 2)
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=544&amp;FK=544&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/20/2027
              </td>
              <td class="text-left">
                Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=561&amp;FK=561&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/04/2027
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=543&amp;FK=543&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/05/2027
              </td>
              <td class="text-left">
                Cubmaster Campout &amp; Crossover
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=519&amp;FK=519&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/07/2027
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=537&amp;FK=537&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/09/2027
              </td>
              <td class="text-left">
                Pack Meeting Setup (Bears)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=528&amp;FK=528&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/09/2027
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=577&amp;FK=577&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/14/2027
              </td>
              <td class="text-left">
                Webelos Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=562&amp;FK=562&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/01/2027
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=520&amp;FK=520&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/04/2027
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=538&amp;FK=538&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/06/2027
              </td>
              <td class="text-left">
                Pack Meeting Setup (Wolves)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=529&amp;FK=529&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/06/2027
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=578&amp;FK=578&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/11/2027
              </td>
              <td class="text-left">
                Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=542&amp;FK=542&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/16/2027
              </td>
              <td class="text-left">
                Spring Campout
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=521&amp;FK=521&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/02/2027
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=539&amp;FK=539&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/04/2027
              </td>
              <td class="text-left">
                Pack Meeting Setup (Webelos)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=530&amp;FK=530&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/04/2027
              </td>
              <td class="text-left">
                Pack Meeting (Rocket Building!)
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=563&amp;FK=563&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/06/2027
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=540&amp;FK=540&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/08/2027
              </td>
              <td class="text-left">
                Rocket Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=541&amp;FK=541&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/22/2027
              </td>
              <td class="text-left">
                Graduation
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="/events/event-edit-details.php?Form_ID=161&amp;Stack=2">Add an Event</a></p>
      </div>
    </div>
    <div class="center-block widget30" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=163&amp;Stack=2">Upcoming Shifts</a><sup><a class="widget-help-link" href="Help.aspx?ID=89" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              Shift Start
              </th>
              <th>
              Description
              </th>
              <th>
              Scouts
              </th>
              <th>
              Adults
              </th>
            </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="center-block widget31" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=4122&amp;Stack=2">Past Events</a><sup><a class="widget-help-link" href="Help.aspx?ID=89" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Date
              </th>
              <th>
              Event
              </th>
              <th>
              Scouts
              </th>
              <th>
              Adults
              </th>
              <th>
              Guests
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=580&amp;FK=580&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/22/2026
              </td>
              <td class="text-left">
                Webelos and AOL Swim Adventure
              </td>
              <td class="text-right">
                9
              </td>
              <td class="text-right">
                11
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=512&amp;FK=512&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/09/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=554&amp;FK=554&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/06/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=569&amp;FK=569&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/26/2026
              </td>
              <td class="text-left">
                Arrows Swim Test
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=567&amp;FK=567&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/18/2026
              </td>
              <td class="text-left">
                Natural Bridge Caverns
              </td>
              <td class="text-right">
                17
              </td>
              <td class="text-right">
                16
              </td>
              <td class="text-right">
                17
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=568&amp;FK=568&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/10/2026
              </td>
              <td class="text-left">
                Arrows Swim Test
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=511&amp;FK=511&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/04/2026
              </td>
              <td class="text-left">
                Circle C 4th of July Parade
              </td>
              <td class="text-right">
                7
              </td>
              <td class="text-right">
                7
              </td>
              <td class="text-right">
                7
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=565&amp;FK=565&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/02/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=506&amp;FK=506&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                06/20/2026
              </td>
              <td class="text-left">
                Cidercade Hangout
              </td>
              <td class="text-right">
                11
              </td>
              <td class="text-right">
                9
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=564&amp;FK=564&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                06/04/2026
              </td>
              <td class="text-left">
                District Roundtable
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=500&amp;FK=500&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/30/2026
              </td>
              <td class="text-left">
                Raingutter Regatta
              </td>
              <td class="text-right">
                17
              </td>
              <td class="text-right">
                14
              </td>
              <td class="text-right">
                12
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=507&amp;FK=507&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/28/2026
              </td>
              <td class="text-left">
                Ceremony of Colors at Baldwin Elementary Graduation
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=383&amp;FK=383&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/16/2026
              </td>
              <td class="text-left">
                Pack 12 Graduation
              </td>
              <td class="text-right">
                28
              </td>
              <td class="text-right">
                24
              </td>
              <td class="text-right">
                25
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=382&amp;FK=382&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/12/2026
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=381&amp;FK=381&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/10/2026
              </td>
              <td class="text-left">
                Requirement Deadline for Graduation
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=380&amp;FK=380&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/09/2026
              </td>
              <td class="text-left">
                Rocket Derby
              </td>
              <td class="text-right">
                22
              </td>
              <td class="text-right">
                21
              </td>
              <td class="text-right">
                8
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=448&amp;FK=448&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/07/2026
              </td>
              <td class="text-left">
                Thunderbird District Roundtable
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=509&amp;FK=509&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/07/2026
              </td>
              <td class="text-left">
                Rocket Derby Inspections and Build (Session 2)
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=508&amp;FK=508&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/06/2026
              </td>
              <td class="text-left">
                Rocket Derby Inspections and Build (Session 1)
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=379&amp;FK=379&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/03/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=428&amp;FK=428&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/03/2026
              </td>
              <td class="text-left">
                Lion Den #6 &amp; Den #7 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=505&amp;FK=505&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/02/2026
              </td>
              <td class="text-left">
                Webelos hike
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=401&amp;FK=401&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/26/2026
              </td>
              <td class="text-left">
                Bears Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=433&amp;FK=433&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/26/2026
              </td>
              <td class="text-left">
                Tigers Den #9 &amp; #11 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=497&amp;FK=497&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/26/2026
              </td>
              <td class="text-left">
                Den 10 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=504&amp;FK=504&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/25/2026
              </td>
              <td class="text-left">
                Optional - Service Event
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=502&amp;FK=502&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/18/2026
              </td>
              <td class="text-left">
                Spring Campout - Alternative Event - Please RSVP
              </td>
              <td class="text-right">
                37
              </td>
              <td class="text-right">
                33
              </td>
              <td class="text-right">
                24
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=503&amp;FK=503&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/18/2026
              </td>
              <td class="text-left">
                Messengers Of Peace Service Project
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=378&amp;FK=378&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/17/2026
              </td>
              <td class="text-left">
                RESCHEDULED TO FALL -- Spring Campout
              </td>
              <td class="text-right">
                50
              </td>
              <td class="text-right">
                45
              </td>
              <td class="text-right">
                34
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=377&amp;FK=377&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/14/2026
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=376&amp;FK=376&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/12/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=498&amp;FK=498&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/11/2026
              </td>
              <td class="text-left">
                Clayton Carnival Recruitment Booth
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=447&amp;FK=447&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/02/2026
              </td>
              <td class="text-left">
                Thunderbird District Roundtable
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=400&amp;FK=400&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/29/2026
              </td>
              <td class="text-left">
                Bears Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=432&amp;FK=432&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/29/2026
              </td>
              <td class="text-left">
                Tigers Den #9 &amp; #11 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=427&amp;FK=427&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/29/2026
              </td>
              <td class="text-left">
                Lion Den #6 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=495&amp;FK=495&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/29/2026
              </td>
              <td class="text-left">
                Den 10 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=375&amp;FK=375&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/24/2026
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=494&amp;FK=494&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/22/2026
              </td>
              <td class="text-left">
                Webelos hike
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=493&amp;FK=493&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/15/2026
              </td>
              <td class="text-left">
                Lions Den #7 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=374&amp;FK=374&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/08/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=492&amp;FK=492&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/08/2026
              </td>
              <td class="text-left">
                Den 10 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=373&amp;FK=373&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/07/2026
              </td>
              <td class="text-left">
                AOL Crossover Ceremony
              </td>
              <td class="text-right">
                8
              </td>
              <td class="text-right">
                14
              </td>
              <td class="text-right">
                10
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=372&amp;FK=372&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/06/2026
              </td>
              <td class="text-left">
                CANCELLED - Cubmaster Campout
              </td>
              <td class="text-right">
                19
              </td>
              <td class="text-right">
                19
              </td>
              <td class="text-right">
                7
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=446&amp;FK=446&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/05/2026
              </td>
              <td class="text-left">
                Thunderbird District Roundtable
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=431&amp;FK=431&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/22/2026
              </td>
              <td class="text-left">
                Tigers Den #9 &amp; #11 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=454&amp;FK=454&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/22/2026
              </td>
              <td class="text-left">
                Den 12 (Bears) Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=399&amp;FK=399&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/22/2026
              </td>
              <td class="text-left">
                Den 2 (Bears) Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=438&amp;FK=438&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/21/2026
              </td>
              <td class="text-left">
                Den 1 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=489&amp;FK=489&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/21/2026
              </td>
              <td class="text-left">
                Mighty Ducks - Bonus Cycling Event
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=426&amp;FK=426&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/15/2026
              </td>
              <td class="text-left">
                Lion Den #6 &amp; # 7 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=487&amp;FK=487&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/15/2026
              </td>
              <td class="text-left">
                Den 10 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=490&amp;FK=490&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/08/2026
              </td>
              <td class="text-left">
                Mighty Ducks - Make-up Requirements Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=371&amp;FK=371&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/07/2026
              </td>
              <td class="text-left">
                Pinewood Derby
              </td>
              <td class="text-right">
                20
              </td>
              <td class="text-right">
                18
              </td>
              <td class="text-right">
                5
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=486&amp;FK=486&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/05/2026
              </td>
              <td class="text-left">
                Weigh-in day for Pinewood Derby
              </td>
              <td class="text-right">
                3
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=485&amp;FK=485&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/04/2026
              </td>
              <td class="text-left">
                Weigh-in day for Pinewood Derby
              </td>
              <td class="text-right">
                4
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=369&amp;FK=369&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/31/2026
              </td>
              <td class="text-left">
                Winter Overnight at San Antonio Zoo
              </td>
              <td class="text-right">
                62
              </td>
              <td class="text-right">
                54
              </td>
              <td class="text-right">
                19
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=488&amp;FK=488&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/22/2026
              </td>
              <td class="text-left">
                Block Cutting for Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=416&amp;FK=416&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/21/2026
              </td>
              <td class="text-left">
                Den5 Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=484&amp;FK=484&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/19/2026
              </td>
              <td class="text-left">
                Block Cutting for Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=453&amp;FK=453&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/18/2026
              </td>
              <td class="text-left">
                Den 12 (Bears) Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=483&amp;FK=483&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/18/2026
              </td>
              <td class="text-left">
                Block Cutting for Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=482&amp;FK=482&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/17/2026
              </td>
              <td class="text-left">
                Block Cutting for Pinewood Derby
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=368&amp;FK=368&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/2026
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=367&amp;FK=367&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/2026
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=398&amp;FK=398&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/2026
              </td>
              <td class="text-left">
                Den 2 (Bears) Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=430&amp;FK=430&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/2026
              </td>
              <td class="text-left">
                Tigers Den #9 &amp; #11 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=437&amp;FK=437&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/10/2026
              </td>
              <td class="text-left">
                Den 1 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=478&amp;FK=478&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/09/2026
              </td>
              <td class="text-left">
                BALOO Training
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=481&amp;FK=481&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/06/2026
              </td>
              <td class="text-left">
                Meet an elected official
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=479&amp;FK=479&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/23/2025
              </td>
              <td class="text-left">
                Lion's Den #6 &amp; #7 Card Delivery/Resident Holiday Party
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=452&amp;FK=452&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/14/2025
              </td>
              <td class="text-left">
                Den 12 (Bears) Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=397&amp;FK=397&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/14/2025
              </td>
              <td class="text-left">
                Den 2 (Bears) Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=423&amp;FK=423&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/14/2025
              </td>
              <td class="text-left">
                Lions Den #6 &amp; #7 Holiday Card Making Workshop
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=408&amp;FK=408&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/14/2025
              </td>
              <td class="text-left">
                Den 3 - December Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=480&amp;FK=480&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/14/2025
              </td>
              <td class="text-left">
                Webolos Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=476&amp;FK=476&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/14/2025
              </td>
              <td class="text-left">
                Den 10 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=429&amp;FK=429&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/13/2025
              </td>
              <td class="text-left">
                Tigers Den #9 &amp; #11 @ Radha Rani Hindu Temple
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=366&amp;FK=366&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/09/2025
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=477&amp;FK=477&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/08/2025
              </td>
              <td class="text-left">
                Troop 448 Meeting with AOL Activities
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=475&amp;FK=475&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/08/2025
              </td>
              <td class="text-left">
                Troop 448 troop meeting
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=365&amp;FK=365&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/07/2025
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=409&amp;FK=409&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/06/2025
              </td>
              <td class="text-left">
                Troop 19 Campout - Pedernales Falls
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=471&amp;FK=471&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/06/2025
              </td>
              <td class="text-left">
                Troop 4443 - Edwards Aquifer Education Center
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=443&amp;FK=443&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/04/2025
              </td>
              <td class="text-left">
                Thunderbird District Roundtable
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=473&amp;FK=473&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/30/2025
              </td>
              <td class="text-left">
                Den 1 Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=414&amp;FK=414&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/19/2025
              </td>
              <td class="text-left">
                Den5 Den Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=451&amp;FK=451&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/16/2025
              </td>
              <td class="text-left">
                Den 12 (Bears) Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=407&amp;FK=407&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/16/2025
              </td>
              <td class="text-left">
                Den 3 - November Den Meeting - Group Bike Ride
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=465&amp;FK=465&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/16/2025
              </td>
              <td class="text-left">
                Touch An Ambulance Event/First Aide with Ally Medical
              </td>
              <td class="text-right">
                14
              </td>
              <td class="text-right">
                8
              </td>
              <td class="text-right">
                3
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=462&amp;FK=462&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/15/2025
              </td>
              <td class="text-left">
                Lion's Service Project Art on Display @ Austin Studio Tour
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=363&amp;FK=363&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/11/2025
              </td>
              <td class="text-left">
                Pack Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=472&amp;FK=472&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/11/2025
              </td>
              <td class="text-left">
                Veterans Day Flag Ceremony at Clayton Elementary
              </td>
              <td class="text-right">
                7
              </td>
              <td class="text-right">
                5
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=469&amp;FK=469&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/11/2025
              </td>
              <td class="text-left">
                Veterans Day Flag Ceremony at Baldwin Elementary
              </td>
              <td class="text-right">
                6
              </td>
              <td class="text-right">
                5
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=468&amp;FK=468&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/08/2025
              </td>
              <td class="text-left">
                (AT FALL CAMPOUT) Lions: Backyard Bass Fishing &amp; Angler Ed with Tx Wildlife
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=466&amp;FK=466&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/08/2025
              </td>
              <td class="text-left">
                (AT FALL CAMPOUT)Lions:  Skins &amp; Skulls program with Texas Wildlife
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=467&amp;FK=467&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/08/2025
              </td>
              <td class="text-left">
                (AT FALL CAMPOUT) Tigers: Skins &amp; Skulls program with Texas Wildlife
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=364&amp;FK=364&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/07/2025
              </td>
              <td class="text-left">
                Fall Campout
              </td>
              <td class="text-right">
                87
              </td>
              <td class="text-right">
                77
              </td>
              <td class="text-right">
                52
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=442&amp;FK=442&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/06/2025
              </td>
              <td class="text-left">
                Thunderbird District Roundtable
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=362&amp;FK=362&amp;Form_ID=167&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/02/2025
              </td>
              <td class="text-left">
                Den Leader &amp; Committee Meeting
              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
              <td class="text-right">

              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="/events/event-edit-details.php?Form_ID=161&amp;Stack=2">Add an Event</a></p>
      </div>
    </div>
    <div class="center-block widget32" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=3063&amp;Stack=2">Past Shifts</a><sup><a class="widget-help-link" href="Help.aspx?ID=298" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Shift Start
              </th>
              <th>
              Description
              </th>
              <th>
              Scouts
              </th>
              <th>
              Adults
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=15&amp;FK=15&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/11/26  3:30:00 PM
              </td>
              <td class="text-left">
                Clayton Carnival Recruitment Booth
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=14&amp;FK=14&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/11/26  3:00:00 PM
              </td>
              <td class="text-left">
                Clayton Carnival Recruitment Booth
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=13&amp;FK=13&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/11/26  2:30:00 PM
              </td>
              <td class="text-left">
                Clayton Carnival Recruitment Booth
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=12&amp;FK=12&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/11/26  2:00:00 PM
              </td>
              <td class="text-left">
                Clayton Carnival Recruitment Booth
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=11&amp;FK=11&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/11/26  1:30:00 PM
              </td>
              <td class="text-left">
                Clayton Carnival Recruitment Booth
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=10&amp;FK=10&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/11/26  1:00:00 PM
              </td>
              <td class="text-left">
                Clayton Carnival Recruitment Booth
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=9&amp;FK=9&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/05/25  3:30:00 PM
              </td>
              <td class="text-left">
                Clayton's Spring Carnival Recruitment Booth
              </td>
              <td class="text-right">
                2
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=8&amp;FK=8&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/05/25  3:00:00 PM
              </td>
              <td class="text-left">
                Clayton's Spring Carnival Recruitment Booth
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=7&amp;FK=7&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/05/25  2:30:00 PM
              </td>
              <td class="text-left">
                Clayton's Spring Carnival Recruitment Booth
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=6&amp;FK=6&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/05/25  2:00:00 PM
              </td>
              <td class="text-left">
                Clayton's Spring Carnival Recruitment Booth
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=5&amp;FK=5&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/05/25  1:30:00 PM
              </td>
              <td class="text-left">
                Clayton's Spring Carnival Recruitment Booth
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=4&amp;FK=4&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/05/25  1:00:00 PM
              </td>
              <td class="text-left">
                Clayton's Spring Carnival Recruitment Booth
              </td>
              <td class="text-right">
                1
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=3&amp;FK=3&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/28/23  7:00:00 PM
              </td>
              <td class="text-left">
                CANCELLED: Recruitment Table @ Clayton Carnival
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=2&amp;FK=2&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/28/23  6:00:00 PM
              </td>
              <td class="text-left">
                CANCELLED: Recruitment Table @ Clayton Carnival
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=1&amp;FK=1&amp;Form_ID=3062&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                04/28/23  5:00:00 PM
              </td>
              <td class="text-left">
                CANCELLED: Recruitment Table @ Clayton Carnival
              </td>
              <td class="text-right">
                0
              </td>
              <td class="text-right">
                0
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center">Update Shift To Take Attendance</p>
      </div>
    </div>
    <div class="center-block widget34" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=147&amp;Stack=2">Event Locations</a><sup><a class="widget-help-link" href="Help.aspx?ID=88" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Location
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=89&amp;FK=89&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                3755 S Capital of Texas Hwy
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=63&amp;FK=63&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                5101 Wasson Road, Austin, TX 78745
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=68&amp;FK=68&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                7224 Mitra Dr
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=12&amp;FK=12&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Abiding Love Lutheran Church
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=83&amp;FK=83&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez House
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=82&amp;FK=82&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                ATX Bikes
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=42&amp;FK=42&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Austin Community College - Eastview Campus
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=50&amp;FK=50&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Austin Fire Station 27
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=78&amp;FK=78&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Austin Lighthouse School for the Blind
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=57&amp;FK=57&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Austin Ridge Bible Church Southwest
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=10&amp;FK=10&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Baldwin Elementary
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=1&amp;FK=1&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Baldwin Elementary - Cafeteria
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=41&amp;FK=41&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bastrop State Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=27&amp;FK=27&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bethany Lutheran Church
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=28&amp;FK=28&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bonnie's house
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=79&amp;FK=79&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bradfield Village Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=81&amp;FK=81&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin House
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=21&amp;FK=21&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Camp Green Dixon
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=39&amp;FK=39&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Camp Tom Wooten - Cub World
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=71&amp;FK=71&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Cidercade
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=4&amp;FK=4&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Circle C Community Center
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=76&amp;FK=76&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Circle C Fire Station #43
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=11&amp;FK=11&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Circle C Ranch Metropolitan Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=8&amp;FK=8&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Circle C Swim Center
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=9&amp;FK=9&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Clayton Elementary
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=2&amp;FK=2&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Clayton Elementary - Cafeteria
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=13&amp;FK=13&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Clayton Elementary Playground
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=52&amp;FK=52&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Crux Climbing Center
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=6&amp;FK=6&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Cubmaster Nate's Home
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=77&amp;FK=77&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader Home
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=75&amp;FK=75&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader Home
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=37&amp;FK=37&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Dick Nichols Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=60&amp;FK=60&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Emma Long Municipal Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=45&amp;FK=45&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Fire Station 43
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=5&amp;FK=5&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Founders Memorial Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=70&amp;FK=70&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Frank Fickett Scout Center
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=86&amp;FK=86&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Garner State Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=40&amp;FK=40&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gaston Place
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=53&amp;FK=53&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Goliad State Park &amp; Historic Site
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=48&amp;FK=48&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Google Meet
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=56&amp;FK=56&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Grelle Recreation Area
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=49&amp;FK=49&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hilton Austin
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=72&amp;FK=72&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Inks Lake State Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=69&amp;FK=69&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Innerspace Cavern
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=65&amp;FK=65&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Jason Mallios' house
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=14&amp;FK=14&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Jason's Workshop
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=43&amp;FK=43&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Jorge's Workshop
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=87&amp;FK=87&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Keenan House
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=58&amp;FK=58&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Krause Springs
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=93&amp;FK=93&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lake Somerville State Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=92&amp;FK=92&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lost Pines Scout Reservation
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=51&amp;FK=51&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mary Moore Searight Metro Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=19&amp;FK=19&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McGimsey Scout Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=94&amp;FK=94&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Meridian Neighborhood Pavilion and Pool
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=73&amp;FK=73&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Meridian Park Pavilion
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=33&amp;FK=33&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mia Lee Home
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=20&amp;FK=20&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Muleshoe Bend Recreation Area
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=91&amp;FK=91&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Natural Bridge Caverns
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=15&amp;FK=15&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Oak Hill HEB
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=17&amp;FK=17&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Oak Hill United Methodist Church
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=90&amp;FK=90&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Onion Creek Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=84&amp;FK=84&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Palm Valley Lutheran Church
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=3&amp;FK=3&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Pedernales Falls State Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=66&amp;FK=66&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Peter Keenan's House
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=38&amp;FK=38&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Robert's Workshop
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=80&amp;FK=80&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                San Antonio Zoo
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=55&amp;FK=55&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Sea World San Antonio
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=47&amp;FK=47&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Slaughter Creek Trail
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=24&amp;FK=24&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Smilin V Scout Ranch
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=32&amp;FK=32&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Space Center Houston
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=30&amp;FK=30&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                St. Catherine of Siena Catholic Church
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=85&amp;FK=85&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Stonebridge Nursing and Rehab Center
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=44&amp;FK=44&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Surinder's Garage
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=67&amp;FK=67&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swantner's House
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=34&amp;FK=34&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                TBD
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=36&amp;FK=36&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Texas Capitol
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=18&amp;FK=18&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                The Alamo
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=25&amp;FK=25&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                The Bennetts
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=64&amp;FK=64&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                The Texas Military Forces Museum
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=74&amp;FK=74&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Travis County Community Center
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=59&amp;FK=59&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                USS Lexington
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=35&amp;FK=35&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                VFW Post 3377
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=7&amp;FK=7&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                VFW Post 4443
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=62&amp;FK=62&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Violet Crown Trail
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=26&amp;FK=26&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Ward North American
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=22&amp;FK=22&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Western Oaks Park Pool
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=16&amp;FK=16&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westgate Lanes
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=23&amp;FK=23&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittmeyer Ranch
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=88&amp;FK=88&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Zilker Park
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="/events/event-edit-details.php?ID=61&amp;FK=61&amp;Form_ID=145&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Zoom
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="/events/event-edit-details.php?Form_ID=145&amp;Stack=2">Add a Location</a></p>
      </div>
    </div>
    <div class="center-block widget36" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Event Information</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="/events/event-edit-details.php?Form_ID=161&amp;Stack=2">Add Event</a><sup><a class="widget-help-link" href="Help.aspx?ID=89" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="/events/event-edit-details.php?Form_ID=673&amp;Stack=2">Add Event At New Location</a><sup><a class="widget-help-link" href="Help.aspx?ID=88" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=312&amp;Stack=2">Event Documents</a><sup><a class="widget-help-link" href="Help.aspx?ID=86" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=376&amp;Stack=2">Take Attendance For Event</a><sup><a class="widget-help-link" href="Help.aspx?ID=92" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=3063&amp;Stack=2">Take Attendance For Shifts</a><sup><a class="widget-help-link" href="Help.aspx?ID=298" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormRunProcedure.aspx?Menu_Item_ID=5787&amp;Form_ID=404&amp;Stack=2">Copy Weekly Event</a><sup><a class="widget-help-link" href="Help.aspx?ID=91" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="/events/event-edit-details.php?Form_ID=3105&amp;Stack=2">Copy Monthly Event</a><sup><a class="widget-help-link" href="Help.aspx?ID=303" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=6005&amp;Stack=2">National Holidays</a><sup><a class="widget-help-link" href="Help.aspx?ID=353" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormRunProcedure.aspx?Menu_Item_ID=5787&amp;Form_ID=5906&amp;Stack=2">Merge Duplicate Location</a><sup><a class="widget-help-link" href="Help.aspx?ID=352" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
      </div>
    </div>
    <div class="center-block widget37" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Reports</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5787&amp;Form_ID=3928&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Upcoming Events Summary</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5787&amp;Form_ID=1553&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Attendance Totals By Event</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="/events/event-edit-details.php?Form_ID=1555&amp;Stack=2">Attendance By Event Type</a><sup><a class="widget-help-link" href="Help.aspx?ID=225" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="/events/event-edit-details.php?Form_ID=3751&amp;Stack=2">Community Service Reports</a><sup><a class="widget-help-link" href="Help.aspx?ID=320" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5787&amp;Form_ID=3841&amp;Stack=2&amp;ReportFormat=XLS" target="_blank">Export Events To Excel</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5787&amp;Form_ID=3870&amp;Stack=2&amp;ReportFormat=XLS" target="_blank">Export Event Participation To Excel</a></div>
      </div>
    </div>
    <div class="center-block widget38" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Set Up</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=1438&amp;Stack=2">Event Types</a><sup><a class="widget-help-link" href="Help.aspx?ID=197" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5787&amp;Form_ID=166&amp;Stack=2">Activity Types</a><sup><a class="widget-help-link" href="Help.aspx?ID=90" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>