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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="400">
<input type="hidden" name="Form_ID" id="Form_ID" value="1438">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=400&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=400">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=400">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=400">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=197" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=400">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=400">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=400">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=400">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=400&amp;Stack=1&amp;Application_ID=2840
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
Event Types
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7190">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=0&amp;Stack=2','');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs7189">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP282421" id="OP282421" value="">
    <input type="hidden" name="OP282565" id="OP282565" value="">
    <input type="hidden" name="OP60264152" id="OP60264152" value="">
    <input type="hidden" name="OP2994611" id="OP2994611" value="">
    <input type="hidden" name="OP2994711" id="OP2994711" value="">
    <input type="hidden" name="OP2994811" id="OP2994811" value="">
    <input type="hidden" name="OP2994911" id="OP2994911" value="">
    <input type="hidden" name="OP5415711" id="OP5415711" value="">
    <input type="hidden" name="OP5018711" id="OP5018711" value="">
    <input type="hidden" name="OP3821611" id="OP3821611" value="">
    <input type="hidden" name="OP4308311" id="OP4308311" value="">
    <input type="hidden" name="OP2825111" id="OP2825111" value="">
    <input type="hidden" name="OP2825211" id="OP2825211" value="">
    <input type="hidden" name="OP5645011" id="OP5645011" value="">
    <input type="hidden" name="OP5469911" id="OP5469911" value="">
    <input type="hidden" name="OP5470036" id="OP5470036" value="">
    <input type="hidden" name="OP2824311" id="OP2824311" value="">
    <input type="hidden" name="OP2825511" id="OP2825511" value="">
    <input type="hidden" name="OP2825311" id="OP2825311" value="">
    <input type="hidden" name="OP2825411" id="OP2825411" value="">
    <input type="hidden" name="OP2952011" id="OP2952011" value="">
    <input type="hidden" name="OP2824611" id="OP2824611" value="">
    <input type="hidden" name="OP2831311" id="OP2831311" value="">
    <input type="hidden" name="OP2831411" id="OP2831411" value="">
    <input type="hidden" name="OP5313711" id="OP5313711" value="">
    <input type="hidden" name="OP2828011" id="OP2828011" value="">
    <input type="hidden" name="OP62958156" id="OP62958156" value="">
    <input type="hidden" name="OP5713511" id="OP5713511" value="">
    <input type="hidden" name="OP57136100" id="OP57136100" value="">
    <input type="hidden" name="OP5713711" id="OP5713711" value="">
    <input type="hidden" name="OP57138131" id="OP57138131" value="">
    <input type="hidden" name="OP571392" id="OP571392" value="">
    <input type="hidden" name="OP5672811" id="OP5672811" value="">
    <input type="hidden" name="OP567292" id="OP567292" value="">
    <input type="hidden" name="OP568125" id="OP568125" value="">
    <input type="hidden" name="OP2828111" id="OP2828111" value="">
  </div>
</div>
<div class="new-row" id="fs7191">
  <div class="container-fluid container-flex">
    <div class="center-block table-responsive">
      <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid7191">
        <thead>
        <tr>
          <input type="hidden" name="ROWCOUNTCB7191" id="ROWCOUNTCB7191" value="15">
          <th class="unsortable">
          &nbsp;
          </th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Event Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Seq<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Calendar<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Home Page<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">iCalendar Subscription<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Location Required<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">Virtual Meeting<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 8);return false;">Subgroup<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 9);return false;">Shifts<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 10);return false;">Sign Up<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 11);return false;">Sign-Up Deadline<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 12);return false;">Take Attendance<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 13);return false;">Require Min Balance?<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 14);return false;">Min Balance Required<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 15);return false;">Est Cost<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 16);return false;">Newsletter<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 17);return false;">Members Count<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 18);return false;">Guests<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 19);return false;">Boating<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 20);return false;">Service<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 21);return false;">Driver<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 22);return false;">Comment<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 23);return false;">Camping<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 24);return false;">Mon Trans<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 25);return false;">Signup Change Leaders<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 26);return false;">Signup Change Group<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 27);return false;">Disabled<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th class="unsortable">
          &nbsp;
          </th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="text-center " id="TD7191ROW0DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=15&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW0DATA28261">
            Committee Meeting
          </td>
          <td class="text-center " id="TD7191ROW0DATA28275">
            0
          </td>
          <td class="text-center " id="TD7191ROW0DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW0DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW0DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW0DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW0DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW0DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28270">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28271">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA56451">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW0DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW0DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW0DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28282">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW0DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW0DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=15&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW1DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=1&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW1DATA28261">
            Pack Meeting
          </td>
          <td class="text-center " id="TD7191ROW1DATA28275">
            10
          </td>
          <td class="text-center " id="TD7191ROW1DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW1DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW1DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW1DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW1DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA38217">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28270">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28271">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA56451">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW1DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW1DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW1DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28282">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW1DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW1DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=1&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW2DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=12&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW2DATA28261">
            Den Meeting
          </td>
          <td class="text-center " id="TD7191ROW2DATA28275">
            11
          </td>
          <td class="text-center " id="TD7191ROW2DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW2DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW2DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW2DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW2DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW2DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28270">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28271">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA56451">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW2DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW2DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW2DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28282">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW2DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW2DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=12&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW3DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=8&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW3DATA28261">
            Campout
          </td>
          <td class="text-center " id="TD7191ROW3DATA28275">
            20
          </td>
          <td class="text-center " id="TD7191ROW3DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW3DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW3DATA28270">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA28271">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA56451">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA54701">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA54702">
            0.00
          </td>
          <td class="text-center " id="TD7191ROW3DATA28262">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW3DATA28273">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW3DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW3DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW3DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA53138">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA28282">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW3DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW3DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW3DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW3DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=8&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW4DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=4&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW4DATA28261">
            Banquet
          </td>
          <td class="text-center " id="TD7191ROW4DATA28275">
            30
          </td>
          <td class="text-center " id="TD7191ROW4DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA28270">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA28271">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA56451">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW4DATA28262">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA28273">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA28282">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW4DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW4DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW4DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=4&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW5DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=3&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW5DATA28261">
            Fund Raiser
          </td>
          <td class="text-center " id="TD7191ROW5DATA28275">
            40
          </td>
          <td class="text-center " id="TD7191ROW5DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA28270">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA28271">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA56451">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW5DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA28282">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW5DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW5DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW5DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=3&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW6DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=5&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW6DATA28261">
            Community Service
          </td>
          <td class="text-center " id="TD7191ROW6DATA28275">
            50
          </td>
          <td class="text-center " id="TD7191ROW6DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA28270">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA28271">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA56451">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW6DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA28265">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA28282">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW6DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW6DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW6DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=5&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW7DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=13&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW7DATA28261">
            Recruitment
          </td>
          <td class="text-center " id="TD7191ROW7DATA28275">
            50
          </td>
          <td class="text-center " id="TD7191ROW7DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA38217">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA43084">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA28270">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA28271">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA56451">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW7DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW7DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA28282">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW7DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW7DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=13&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW8DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=6&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW8DATA28261">
            Training
          </td>
          <td class="text-center " id="TD7191ROW8DATA28275">
            60
          </td>
          <td class="text-center " id="TD7191ROW8DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA28270">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA28271">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA56451">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW8DATA28262">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA28282">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW8DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW8DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW8DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=6&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW9DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=2&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW9DATA28261">
            Special Event
          </td>
          <td class="text-center " id="TD7191ROW9DATA28275">
            70
          </td>
          <td class="text-center " id="TD7191ROW9DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA28270">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA28271">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA56451">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA54701">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA54702">
            0.00
          </td>
          <td class="text-center " id="TD7191ROW9DATA28262">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA28273">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA28282">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW9DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW9DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW9DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=2&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW10DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=9&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW10DATA28261">
            Holiday
          </td>
          <td class="text-center " id="TD7191ROW10DATA28275">
            80
          </td>
          <td class="text-center " id="TD7191ROW10DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW10DATA29951">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA29952">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA29953">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA38217">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28270">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28271">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA56451">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW10DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28274">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28316">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28282">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW10DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW10DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=9&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW11DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=10&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW11DATA28261">
            Council Event
          </td>
          <td class="text-center " id="TD7191ROW11DATA28275">
            85
          </td>
          <td class="text-center " id="TD7191ROW11DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW11DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW11DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW11DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW11DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW11DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28270">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28271">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA56451">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW11DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW11DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW11DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28282">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW11DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW11DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=10&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW12DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=14&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW12DATA28261">
            District Event
          </td>
          <td class="text-center " id="TD7191ROW12DATA28275">
            86
          </td>
          <td class="text-center " id="TD7191ROW12DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW12DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW12DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW12DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW12DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW12DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA28270">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA28271">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA56451">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW12DATA28262">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW12DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW12DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW12DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA28282">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW12DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW12DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=14&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW13DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=11&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW13DATA28261">
            Notification
          </td>
          <td class="text-center " id="TD7191ROW13DATA28275">
            100
          </td>
          <td class="text-center " id="TD7191ROW13DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW13DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW13DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW13DATA29953">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW13DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28270">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28271">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA56451">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW13DATA28262">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW13DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW13DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28282">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW13DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW13DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=11&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD7191ROW14DATA28259">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON39" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=7&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD7191ROW14DATA28261">
            Other
          </td>
          <td class="text-center " id="TD7191ROW14DATA28275">
            110
          </td>
          <td class="text-center " id="TD7191ROW14DATA29950">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA29951">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA29952">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA29953">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA54158">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA38217">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA43084">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA28270">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA28271">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA56451">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA54701">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA54702">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW14DATA28262">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA28274">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA28272">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA28273">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA29521">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA28265">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA28315">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA28316">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA53138">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA28282">
            Yes
          </td>
          <td class="text-center " id="TD7191ROW14DATA56730">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA56731">
            &nbsp;
          </td>
          <td class="text-center " id="TD7191ROW14DATA28283">
            No
          </td>
          <td class="text-center " id="TD7191ROW14DATA28260">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON67" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=400&amp;Form_ID=1437&amp;FK=0&amp;ID=7&amp;Stack=2','');">
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td colspan="29" class="text-center">
            <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=400&amp;Form_ID=1438&amp;Stack=1&amp;SectionID=7191&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=400&amp;Form_ID=1438&amp;Stack=1&amp;SectionID=7191&amp;ReportFormat=XLS','_blank');">
          </td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=400&amp;Form_ID=1436&amp;FK=0&amp;ID=0&amp;Stack=2','');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON0">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>