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
<body onunload="CloseErrorBox()" onload="ValidateGrid();easySetFocus();GetDeviceWidth();">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="6874">
<input type="hidden" name="Form_ID" id="Form_ID" value="6887">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=6874&amp;Stack=0">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=6874">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=6874">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=6874">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=384" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=6874">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=6874">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=6874">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=6874">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=6874&amp;Stack=0&amp;Application_ID=2840
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
BSA Registration
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs22768">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="LinkTo('/money/query.php','');">
        </span>
        <span style="display:inline;">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON2" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="130" id="BUTTON3" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON3">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs22767">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP600782" id="OP600782" value="">
    <input type="hidden" name="OP600792" id="OP600792" value="">
    <input type="hidden" name="OP600805" id="OP600805" value="">
    <input type="hidden" name="OP6008169" id="OP6008169" value="">
    <input type="hidden" name="OP6011990" id="OP6011990" value="">
    <input type="hidden" name="OP6012016" id="OP6012016" value="">
  </div>
</div>
<div class="new-row" id="fs22769">
  <div class="container-fluid container-flex">
    <div class="center-block table-responsive">
      <table>
        <tbody><tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage" onchange="SetRowsPerPage(this);">
<option value="20">20</option>
<option value="50">50</option>
<option value="100" selected="">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22769,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('22769,2');"><img src="pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        <tr>
          <td>
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid22769">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB22769" id="ROWCOUNTCB22769" value="100">
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Name<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Membership #<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">BSA Registration Ends<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Membership End<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Alumni<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW0" id="CHILDCB22769ROW0" value="1018">
                <td class="text-center " id="TD22769ROW0DATA60085">
                  Aarons, Andrew
                </td>
                <td class="text-center " id="TD22769ROW0DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW0DATA60087">
                  <input type="hidden" name="OLDCB22769ROW0DATA60087" id="OLDCB22769ROW0DATA60087" value="141145570">
                  <input type="text" class="form-control" id="CB22769ROW0DATA60087" name="CB22769ROW0DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141145570" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW0DATA60088">
                  <input type="hidden" name="OLDCB22769ROW0DATA60088" id="OLDCB22769ROW0DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW0DATA60088" name="CB22769ROW0DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW0DATA60088,'CB22769ROW0DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW0DATA60088.value); return false;" name="CB22769ROW0DATA60088X" id="CB22769ROW0DATA60088X"><img src="images/calendar.gif" name="CB22769ROW0DATA60088I" id="CB22769ROW0DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW0DATA61259">
                  <input type="hidden" name="OLDCB22769ROW0DATA61259" id="OLDCB22769ROW0DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW0DATA61259" name="CB22769ROW0DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW0DATA61259,'CB22769ROW0DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW0DATA61259.value); return false;" name="CB22769ROW0DATA61259X" id="CB22769ROW0DATA61259X"><img src="images/calendar.gif" name="CB22769ROW0DATA61259I" id="CB22769ROW0DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW0DATA63175">
                  <input type="hidden" name="OLDCB22769ROW0DATA63175" id="OLDCB22769ROW0DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW0DATA63175" name="CB22769ROW0DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW1" id="CHILDCB22769ROW1" value="1027">
                <td class="text-center " id="TD22769ROW1DATA60085">
                  Aarons, Ashley
                </td>
                <td class="text-center " id="TD22769ROW1DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW1DATA60087">
                  <input type="hidden" name="OLDCB22769ROW1DATA60087" id="OLDCB22769ROW1DATA60087" value="141145567">
                  <input type="text" class="form-control" id="CB22769ROW1DATA60087" name="CB22769ROW1DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141145567" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW1DATA60088">
                  <input type="hidden" name="OLDCB22769ROW1DATA60088" id="OLDCB22769ROW1DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW1DATA60088" name="CB22769ROW1DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW1DATA60088,'CB22769ROW1DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW1DATA60088.value); return false;" name="CB22769ROW1DATA60088X" id="CB22769ROW1DATA60088X"><img src="images/calendar.gif" name="CB22769ROW1DATA60088I" id="CB22769ROW1DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW1DATA61259">
                  <input type="hidden" name="OLDCB22769ROW1DATA61259" id="OLDCB22769ROW1DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW1DATA61259" name="CB22769ROW1DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW1DATA61259,'CB22769ROW1DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW1DATA61259.value); return false;" name="CB22769ROW1DATA61259X" id="CB22769ROW1DATA61259X"><img src="images/calendar.gif" name="CB22769ROW1DATA61259I" id="CB22769ROW1DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW1DATA63175">
                  <input type="hidden" name="OLDCB22769ROW1DATA63175" id="OLDCB22769ROW1DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW1DATA63175" name="CB22769ROW1DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW2" id="CHILDCB22769ROW2" value="1086">
                <td class="text-center " id="TD22769ROW2DATA60085">
                  Aarons, Stephen
                </td>
                <td class="text-center " id="TD22769ROW2DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW2DATA60087">
                  <input type="hidden" name="OLDCB22769ROW2DATA60087" id="OLDCB22769ROW2DATA60087" value="">
                  <input type="text" class="form-control" id="CB22769ROW2DATA60087" name="CB22769ROW2DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW2DATA60088">
                  <input type="hidden" name="OLDCB22769ROW2DATA60088" id="OLDCB22769ROW2DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW2DATA60088" name="CB22769ROW2DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW2DATA60088,'CB22769ROW2DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW2DATA60088.value); return false;" name="CB22769ROW2DATA60088X" id="CB22769ROW2DATA60088X"><img src="images/calendar.gif" name="CB22769ROW2DATA60088I" id="CB22769ROW2DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW2DATA61259">
                  <input type="hidden" name="OLDCB22769ROW2DATA61259" id="OLDCB22769ROW2DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW2DATA61259" name="CB22769ROW2DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW2DATA61259,'CB22769ROW2DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW2DATA61259.value); return false;" name="CB22769ROW2DATA61259X" id="CB22769ROW2DATA61259X"><img src="images/calendar.gif" name="CB22769ROW2DATA61259I" id="CB22769ROW2DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW2DATA63175">
                  <input type="hidden" name="OLDCB22769ROW2DATA63175" id="OLDCB22769ROW2DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW2DATA63175" name="CB22769ROW2DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW3" id="CHILDCB22769ROW3" value="910">
                <td class="text-center " id="TD22769ROW3DATA60085">
                  Abbott, Albert
                </td>
                <td class="text-center " id="TD22769ROW3DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW3DATA60087">
                  <input type="hidden" name="OLDCB22769ROW3DATA60087" id="OLDCB22769ROW3DATA60087" value="140478818">
                  <input type="text" class="form-control" id="CB22769ROW3DATA60087" name="CB22769ROW3DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140478818" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW3DATA60088">
                  <input type="hidden" name="OLDCB22769ROW3DATA60088" id="OLDCB22769ROW3DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW3DATA60088" name="CB22769ROW3DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW3DATA60088,'CB22769ROW3DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW3DATA60088.value); return false;" name="CB22769ROW3DATA60088X" id="CB22769ROW3DATA60088X"><img src="images/calendar.gif" name="CB22769ROW3DATA60088I" id="CB22769ROW3DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW3DATA61259">
                  <input type="hidden" name="OLDCB22769ROW3DATA61259" id="OLDCB22769ROW3DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW3DATA61259" name="CB22769ROW3DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW3DATA61259,'CB22769ROW3DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW3DATA61259.value); return false;" name="CB22769ROW3DATA61259X" id="CB22769ROW3DATA61259X"><img src="images/calendar.gif" name="CB22769ROW3DATA61259I" id="CB22769ROW3DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW3DATA63175">
                  <input type="hidden" name="OLDCB22769ROW3DATA63175" id="OLDCB22769ROW3DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW3DATA63175" name="CB22769ROW3DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW4" id="CHILDCB22769ROW4" value="914">
                <td class="text-center " id="TD22769ROW4DATA60085">
                  Abbott, William
                </td>
                <td class="text-center " id="TD22769ROW4DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW4DATA60087">
                  <input type="hidden" name="OLDCB22769ROW4DATA60087" id="OLDCB22769ROW4DATA60087" value="140478813">
                  <input type="text" class="form-control" id="CB22769ROW4DATA60087" name="CB22769ROW4DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140478813" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW4DATA60088">
                  <input type="hidden" name="OLDCB22769ROW4DATA60088" id="OLDCB22769ROW4DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW4DATA60088" name="CB22769ROW4DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW4DATA60088,'CB22769ROW4DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW4DATA60088.value); return false;" name="CB22769ROW4DATA60088X" id="CB22769ROW4DATA60088X"><img src="images/calendar.gif" name="CB22769ROW4DATA60088I" id="CB22769ROW4DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW4DATA61259">
                  <input type="hidden" name="OLDCB22769ROW4DATA61259" id="OLDCB22769ROW4DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW4DATA61259" name="CB22769ROW4DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW4DATA61259,'CB22769ROW4DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW4DATA61259.value); return false;" name="CB22769ROW4DATA61259X" id="CB22769ROW4DATA61259X"><img src="images/calendar.gif" name="CB22769ROW4DATA61259I" id="CB22769ROW4DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW4DATA63175">
                  <input type="hidden" name="OLDCB22769ROW4DATA63175" id="OLDCB22769ROW4DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW4DATA63175" name="CB22769ROW4DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW5" id="CHILDCB22769ROW5" value="1063">
                <td class="text-center " id="TD22769ROW5DATA60085">
                  Almaraz, Alexander
                </td>
                <td class="text-center " id="TD22769ROW5DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW5DATA60087">
                  <input type="hidden" name="OLDCB22769ROW5DATA60087" id="OLDCB22769ROW5DATA60087" value="141326187">
                  <input type="text" class="form-control" id="CB22769ROW5DATA60087" name="CB22769ROW5DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141326187" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW5DATA60088">
                  <input type="hidden" name="OLDCB22769ROW5DATA60088" id="OLDCB22769ROW5DATA60088" value="10/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW5DATA60088" name="CB22769ROW5DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="10/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW5DATA60088,'CB22769ROW5DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW5DATA60088.value); return false;" name="CB22769ROW5DATA60088X" id="CB22769ROW5DATA60088X"><img src="images/calendar.gif" name="CB22769ROW5DATA60088I" id="CB22769ROW5DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW5DATA61259">
                  <input type="hidden" name="OLDCB22769ROW5DATA61259" id="OLDCB22769ROW5DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW5DATA61259" name="CB22769ROW5DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW5DATA61259,'CB22769ROW5DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW5DATA61259.value); return false;" name="CB22769ROW5DATA61259X" id="CB22769ROW5DATA61259X"><img src="images/calendar.gif" name="CB22769ROW5DATA61259I" id="CB22769ROW5DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW5DATA63175">
                  <input type="hidden" name="OLDCB22769ROW5DATA63175" id="OLDCB22769ROW5DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW5DATA63175" name="CB22769ROW5DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW6" id="CHILDCB22769ROW6" value="1064">
                <td class="text-center " id="TD22769ROW6DATA60085">
                  Almaraz, Eric
                </td>
                <td class="text-center " id="TD22769ROW6DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW6DATA60087">
                  <input type="hidden" name="OLDCB22769ROW6DATA60087" id="OLDCB22769ROW6DATA60087" value="141303787">
                  <input type="text" class="form-control" id="CB22769ROW6DATA60087" name="CB22769ROW6DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141303787" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW6DATA60088">
                  <input type="hidden" name="OLDCB22769ROW6DATA60088" id="OLDCB22769ROW6DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW6DATA60088" name="CB22769ROW6DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW6DATA60088,'CB22769ROW6DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW6DATA60088.value); return false;" name="CB22769ROW6DATA60088X" id="CB22769ROW6DATA60088X"><img src="images/calendar.gif" name="CB22769ROW6DATA60088I" id="CB22769ROW6DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW6DATA61259">
                  <input type="hidden" name="OLDCB22769ROW6DATA61259" id="OLDCB22769ROW6DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW6DATA61259" name="CB22769ROW6DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW6DATA61259,'CB22769ROW6DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW6DATA61259.value); return false;" name="CB22769ROW6DATA61259X" id="CB22769ROW6DATA61259X"><img src="images/calendar.gif" name="CB22769ROW6DATA61259I" id="CB22769ROW6DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW6DATA63175">
                  <input type="hidden" name="OLDCB22769ROW6DATA63175" id="OLDCB22769ROW6DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW6DATA63175" name="CB22769ROW6DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW7" id="CHILDCB22769ROW7" value="668">
                <td class="text-center " id="TD22769ROW7DATA60085">
                  Alvarez, Jorge
                </td>
                <td class="text-center " id="TD22769ROW7DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW7DATA60087">
                  <input type="hidden" name="OLDCB22769ROW7DATA60087" id="OLDCB22769ROW7DATA60087" value="140218914">
                  <input type="text" class="form-control" id="CB22769ROW7DATA60087" name="CB22769ROW7DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140218914" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW7DATA60088">
                  <input type="hidden" name="OLDCB22769ROW7DATA60088" id="OLDCB22769ROW7DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW7DATA60088" name="CB22769ROW7DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW7DATA60088,'CB22769ROW7DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW7DATA60088.value); return false;" name="CB22769ROW7DATA60088X" id="CB22769ROW7DATA60088X"><img src="images/calendar.gif" name="CB22769ROW7DATA60088I" id="CB22769ROW7DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW7DATA61259">
                  <input type="hidden" name="OLDCB22769ROW7DATA61259" id="OLDCB22769ROW7DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW7DATA61259" name="CB22769ROW7DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW7DATA61259,'CB22769ROW7DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW7DATA61259.value); return false;" name="CB22769ROW7DATA61259X" id="CB22769ROW7DATA61259X"><img src="images/calendar.gif" name="CB22769ROW7DATA61259I" id="CB22769ROW7DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW7DATA63175">
                  <input type="hidden" name="OLDCB22769ROW7DATA63175" id="OLDCB22769ROW7DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW7DATA63175" name="CB22769ROW7DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW8" id="CHILDCB22769ROW8" value="714">
                <td class="text-center " id="TD22769ROW8DATA60085">
                  Alvarez, Kristy
                </td>
                <td class="text-center " id="TD22769ROW8DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW8DATA60087">
                  <input type="hidden" name="OLDCB22769ROW8DATA60087" id="OLDCB22769ROW8DATA60087" value="140235401">
                  <input type="text" class="form-control" id="CB22769ROW8DATA60087" name="CB22769ROW8DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140235401" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW8DATA60088">
                  <input type="hidden" name="OLDCB22769ROW8DATA60088" id="OLDCB22769ROW8DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW8DATA60088" name="CB22769ROW8DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW8DATA60088,'CB22769ROW8DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW8DATA60088.value); return false;" name="CB22769ROW8DATA60088X" id="CB22769ROW8DATA60088X"><img src="images/calendar.gif" name="CB22769ROW8DATA60088I" id="CB22769ROW8DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW8DATA61259">
                  <input type="hidden" name="OLDCB22769ROW8DATA61259" id="OLDCB22769ROW8DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW8DATA61259" name="CB22769ROW8DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW8DATA61259,'CB22769ROW8DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW8DATA61259.value); return false;" name="CB22769ROW8DATA61259X" id="CB22769ROW8DATA61259X"><img src="images/calendar.gif" name="CB22769ROW8DATA61259I" id="CB22769ROW8DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW8DATA63175">
                  <input type="hidden" name="OLDCB22769ROW8DATA63175" id="OLDCB22769ROW8DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW8DATA63175" name="CB22769ROW8DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW9" id="CHILDCB22769ROW9" value="1239">
                <td class="text-center " id="TD22769ROW9DATA60085">
                  Alvarez, Layla
                </td>
                <td class="text-center " id="TD22769ROW9DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW9DATA60087">
                  <input type="hidden" name="OLDCB22769ROW9DATA60087" id="OLDCB22769ROW9DATA60087" value="141823106">
                  <input type="text" class="form-control" id="CB22769ROW9DATA60087" name="CB22769ROW9DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141823106" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW9DATA60088">
                  <input type="hidden" name="OLDCB22769ROW9DATA60088" id="OLDCB22769ROW9DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW9DATA60088" name="CB22769ROW9DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW9DATA60088,'CB22769ROW9DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW9DATA60088.value); return false;" name="CB22769ROW9DATA60088X" id="CB22769ROW9DATA60088X"><img src="images/calendar.gif" name="CB22769ROW9DATA60088I" id="CB22769ROW9DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW9DATA61259">
                  <input type="hidden" name="OLDCB22769ROW9DATA61259" id="OLDCB22769ROW9DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW9DATA61259" name="CB22769ROW9DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW9DATA61259,'CB22769ROW9DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW9DATA61259.value); return false;" name="CB22769ROW9DATA61259X" id="CB22769ROW9DATA61259X"><img src="images/calendar.gif" name="CB22769ROW9DATA61259I" id="CB22769ROW9DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW9DATA63175">
                  <input type="hidden" name="OLDCB22769ROW9DATA63175" id="OLDCB22769ROW9DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW9DATA63175" name="CB22769ROW9DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW10" id="CHILDCB22769ROW10" value="664">
                <td class="text-center " id="TD22769ROW10DATA60085">
                  Alvarez, Mateo
                </td>
                <td class="text-center " id="TD22769ROW10DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW10DATA60087">
                  <input type="hidden" name="OLDCB22769ROW10DATA60087" id="OLDCB22769ROW10DATA60087" value="14416426">
                  <input type="text" class="form-control" id="CB22769ROW10DATA60087" name="CB22769ROW10DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14416426" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW10DATA60088">
                  <input type="hidden" name="OLDCB22769ROW10DATA60088" id="OLDCB22769ROW10DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW10DATA60088" name="CB22769ROW10DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW10DATA60088,'CB22769ROW10DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW10DATA60088.value); return false;" name="CB22769ROW10DATA60088X" id="CB22769ROW10DATA60088X"><img src="images/calendar.gif" name="CB22769ROW10DATA60088I" id="CB22769ROW10DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW10DATA61259">
                  <input type="hidden" name="OLDCB22769ROW10DATA61259" id="OLDCB22769ROW10DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW10DATA61259" name="CB22769ROW10DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW10DATA61259,'CB22769ROW10DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW10DATA61259.value); return false;" name="CB22769ROW10DATA61259X" id="CB22769ROW10DATA61259X"><img src="images/calendar.gif" name="CB22769ROW10DATA61259I" id="CB22769ROW10DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW10DATA63175">
                  <input type="hidden" name="OLDCB22769ROW10DATA63175" id="OLDCB22769ROW10DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW10DATA63175" name="CB22769ROW10DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW11" id="CHILDCB22769ROW11" value="1245">
                <td class="text-center " id="TD22769ROW11DATA60085">
                  Applegate, Chris
                </td>
                <td class="text-center " id="TD22769ROW11DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW11DATA60087">
                  <input type="hidden" name="OLDCB22769ROW11DATA60087" id="OLDCB22769ROW11DATA60087" value="14917334">
                  <input type="text" class="form-control" id="CB22769ROW11DATA60087" name="CB22769ROW11DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14917334" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW11DATA60088">
                  <input type="hidden" name="OLDCB22769ROW11DATA60088" id="OLDCB22769ROW11DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW11DATA60088" name="CB22769ROW11DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW11DATA60088,'CB22769ROW11DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW11DATA60088.value); return false;" name="CB22769ROW11DATA60088X" id="CB22769ROW11DATA60088X"><img src="images/calendar.gif" name="CB22769ROW11DATA60088I" id="CB22769ROW11DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW11DATA61259">
                  <input type="hidden" name="OLDCB22769ROW11DATA61259" id="OLDCB22769ROW11DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW11DATA61259" name="CB22769ROW11DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW11DATA61259,'CB22769ROW11DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW11DATA61259.value); return false;" name="CB22769ROW11DATA61259X" id="CB22769ROW11DATA61259X"><img src="images/calendar.gif" name="CB22769ROW11DATA61259I" id="CB22769ROW11DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW11DATA63175">
                  <input type="hidden" name="OLDCB22769ROW11DATA63175" id="OLDCB22769ROW11DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW11DATA63175" name="CB22769ROW11DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW12" id="CHILDCB22769ROW12" value="1240">
                <td class="text-center " id="TD22769ROW12DATA60085">
                  Applegate, Sebastian
                </td>
                <td class="text-center " id="TD22769ROW12DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW12DATA60087">
                  <input type="hidden" name="OLDCB22769ROW12DATA60087" id="OLDCB22769ROW12DATA60087" value="141860675">
                  <input type="text" class="form-control" id="CB22769ROW12DATA60087" name="CB22769ROW12DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141860675" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW12DATA60088">
                  <input type="hidden" name="OLDCB22769ROW12DATA60088" id="OLDCB22769ROW12DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW12DATA60088" name="CB22769ROW12DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW12DATA60088,'CB22769ROW12DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW12DATA60088.value); return false;" name="CB22769ROW12DATA60088X" id="CB22769ROW12DATA60088X"><img src="images/calendar.gif" name="CB22769ROW12DATA60088I" id="CB22769ROW12DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW12DATA61259">
                  <input type="hidden" name="OLDCB22769ROW12DATA61259" id="OLDCB22769ROW12DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW12DATA61259" name="CB22769ROW12DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW12DATA61259,'CB22769ROW12DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW12DATA61259.value); return false;" name="CB22769ROW12DATA61259X" id="CB22769ROW12DATA61259X"><img src="images/calendar.gif" name="CB22769ROW12DATA61259I" id="CB22769ROW12DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW12DATA63175">
                  <input type="hidden" name="OLDCB22769ROW12DATA63175" id="OLDCB22769ROW12DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW12DATA63175" name="CB22769ROW12DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW13" id="CHILDCB22769ROW13" value="1202">
                <td class="text-center " id="TD22769ROW13DATA60085">
                  Babb, Chris
                </td>
                <td class="text-center " id="TD22769ROW13DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW13DATA60087">
                  <input type="hidden" name="OLDCB22769ROW13DATA60087" id="OLDCB22769ROW13DATA60087" value="141761632">
                  <input type="text" class="form-control" id="CB22769ROW13DATA60087" name="CB22769ROW13DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141761632" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW13DATA60088">
                  <input type="hidden" name="OLDCB22769ROW13DATA60088" id="OLDCB22769ROW13DATA60088" value="11/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW13DATA60088" name="CB22769ROW13DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="11/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW13DATA60088,'CB22769ROW13DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW13DATA60088.value); return false;" name="CB22769ROW13DATA60088X" id="CB22769ROW13DATA60088X"><img src="images/calendar.gif" name="CB22769ROW13DATA60088I" id="CB22769ROW13DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW13DATA61259">
                  <input type="hidden" name="OLDCB22769ROW13DATA61259" id="OLDCB22769ROW13DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW13DATA61259" name="CB22769ROW13DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW13DATA61259,'CB22769ROW13DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW13DATA61259.value); return false;" name="CB22769ROW13DATA61259X" id="CB22769ROW13DATA61259X"><img src="images/calendar.gif" name="CB22769ROW13DATA61259I" id="CB22769ROW13DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW13DATA63175">
                  <input type="hidden" name="OLDCB22769ROW13DATA63175" id="OLDCB22769ROW13DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW13DATA63175" name="CB22769ROW13DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW14" id="CHILDCB22769ROW14" value="1184">
                <td class="text-center " id="TD22769ROW14DATA60085">
                  Babb, Tyson
                </td>
                <td class="text-center " id="TD22769ROW14DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW14DATA60087">
                  <input type="hidden" name="OLDCB22769ROW14DATA60087" id="OLDCB22769ROW14DATA60087" value="141761657">
                  <input type="text" class="form-control" id="CB22769ROW14DATA60087" name="CB22769ROW14DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141761657" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW14DATA60088">
                  <input type="hidden" name="OLDCB22769ROW14DATA60088" id="OLDCB22769ROW14DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW14DATA60088" name="CB22769ROW14DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW14DATA60088,'CB22769ROW14DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW14DATA60088.value); return false;" name="CB22769ROW14DATA60088X" id="CB22769ROW14DATA60088X"><img src="images/calendar.gif" name="CB22769ROW14DATA60088I" id="CB22769ROW14DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW14DATA61259">
                  <input type="hidden" name="OLDCB22769ROW14DATA61259" id="OLDCB22769ROW14DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW14DATA61259" name="CB22769ROW14DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW14DATA61259,'CB22769ROW14DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW14DATA61259.value); return false;" name="CB22769ROW14DATA61259X" id="CB22769ROW14DATA61259X"><img src="images/calendar.gif" name="CB22769ROW14DATA61259I" id="CB22769ROW14DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW14DATA63175">
                  <input type="hidden" name="OLDCB22769ROW14DATA63175" id="OLDCB22769ROW14DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW14DATA63175" name="CB22769ROW14DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW15" id="CHILDCB22769ROW15" value="488">
                <td class="text-center " id="TD22769ROW15DATA60085">
                  Bayes, Dylan
                </td>
                <td class="text-center " id="TD22769ROW15DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW15DATA60087">
                  <input type="hidden" name="OLDCB22769ROW15DATA60087" id="OLDCB22769ROW15DATA60087" value="13890034">
                  <input type="text" class="form-control" id="CB22769ROW15DATA60087" name="CB22769ROW15DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="13890034" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW15DATA60088">
                  <input type="hidden" name="OLDCB22769ROW15DATA60088" id="OLDCB22769ROW15DATA60088" value="12/31/2025">
                  <input type="text" class="form-control" id="CB22769ROW15DATA60088" name="CB22769ROW15DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2025" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW15DATA60088,'CB22769ROW15DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW15DATA60088.value); return false;" name="CB22769ROW15DATA60088X" id="CB22769ROW15DATA60088X"><img src="images/calendar.gif" name="CB22769ROW15DATA60088I" id="CB22769ROW15DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW15DATA61259">
                  <input type="hidden" name="OLDCB22769ROW15DATA61259" id="OLDCB22769ROW15DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW15DATA61259" name="CB22769ROW15DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW15DATA61259,'CB22769ROW15DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW15DATA61259.value); return false;" name="CB22769ROW15DATA61259X" id="CB22769ROW15DATA61259X"><img src="images/calendar.gif" name="CB22769ROW15DATA61259I" id="CB22769ROW15DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW15DATA63175">
                  <input type="hidden" name="OLDCB22769ROW15DATA63175" id="OLDCB22769ROW15DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW15DATA63175" name="CB22769ROW15DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW16" id="CHILDCB22769ROW16" value="578">
                <td class="text-center " id="TD22769ROW16DATA60085">
                  Bayes, Phillip
                </td>
                <td class="text-center " id="TD22769ROW16DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW16DATA60087">
                  <input type="hidden" name="OLDCB22769ROW16DATA60087" id="OLDCB22769ROW16DATA60087" value="13889997">
                  <input type="text" class="form-control" id="CB22769ROW16DATA60087" name="CB22769ROW16DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="13889997" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW16DATA60088">
                  <input type="hidden" name="OLDCB22769ROW16DATA60088" id="OLDCB22769ROW16DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW16DATA60088" name="CB22769ROW16DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW16DATA60088,'CB22769ROW16DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW16DATA60088.value); return false;" name="CB22769ROW16DATA60088X" id="CB22769ROW16DATA60088X"><img src="images/calendar.gif" name="CB22769ROW16DATA60088I" id="CB22769ROW16DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW16DATA61259">
                  <input type="hidden" name="OLDCB22769ROW16DATA61259" id="OLDCB22769ROW16DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW16DATA61259" name="CB22769ROW16DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW16DATA61259,'CB22769ROW16DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW16DATA61259.value); return false;" name="CB22769ROW16DATA61259X" id="CB22769ROW16DATA61259X"><img src="images/calendar.gif" name="CB22769ROW16DATA61259I" id="CB22769ROW16DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW16DATA63175">
                  <input type="hidden" name="OLDCB22769ROW16DATA63175" id="OLDCB22769ROW16DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW16DATA63175" name="CB22769ROW16DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW17" id="CHILDCB22769ROW17" value="1154">
                <td class="text-center " id="TD22769ROW17DATA60085">
                  Blair, Frankie
                </td>
                <td class="text-center " id="TD22769ROW17DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW17DATA60087">
                  <input type="hidden" name="OLDCB22769ROW17DATA60087" id="OLDCB22769ROW17DATA60087" value="141705347">
                  <input type="text" class="form-control" id="CB22769ROW17DATA60087" name="CB22769ROW17DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141705347" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW17DATA60088">
                  <input type="hidden" name="OLDCB22769ROW17DATA60088" id="OLDCB22769ROW17DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW17DATA60088" name="CB22769ROW17DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW17DATA60088,'CB22769ROW17DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW17DATA60088.value); return false;" name="CB22769ROW17DATA60088X" id="CB22769ROW17DATA60088X"><img src="images/calendar.gif" name="CB22769ROW17DATA60088I" id="CB22769ROW17DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW17DATA61259">
                  <input type="hidden" name="OLDCB22769ROW17DATA61259" id="OLDCB22769ROW17DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW17DATA61259" name="CB22769ROW17DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW17DATA61259,'CB22769ROW17DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW17DATA61259.value); return false;" name="CB22769ROW17DATA61259X" id="CB22769ROW17DATA61259X"><img src="images/calendar.gif" name="CB22769ROW17DATA61259I" id="CB22769ROW17DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW17DATA63175">
                  <input type="hidden" name="OLDCB22769ROW17DATA63175" id="OLDCB22769ROW17DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW17DATA63175" name="CB22769ROW17DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW18" id="CHILDCB22769ROW18" value="1155">
                <td class="text-center " id="TD22769ROW18DATA60085">
                  Blair, Joe
                </td>
                <td class="text-center " id="TD22769ROW18DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW18DATA60087">
                  <input type="hidden" name="OLDCB22769ROW18DATA60087" id="OLDCB22769ROW18DATA60087" value="141705328">
                  <input type="text" class="form-control" id="CB22769ROW18DATA60087" name="CB22769ROW18DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141705328" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW18DATA60088">
                  <input type="hidden" name="OLDCB22769ROW18DATA60088" id="OLDCB22769ROW18DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW18DATA60088" name="CB22769ROW18DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW18DATA60088,'CB22769ROW18DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW18DATA60088.value); return false;" name="CB22769ROW18DATA60088X" id="CB22769ROW18DATA60088X"><img src="images/calendar.gif" name="CB22769ROW18DATA60088I" id="CB22769ROW18DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW18DATA61259">
                  <input type="hidden" name="OLDCB22769ROW18DATA61259" id="OLDCB22769ROW18DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW18DATA61259" name="CB22769ROW18DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW18DATA61259,'CB22769ROW18DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW18DATA61259.value); return false;" name="CB22769ROW18DATA61259X" id="CB22769ROW18DATA61259X"><img src="images/calendar.gif" name="CB22769ROW18DATA61259I" id="CB22769ROW18DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW18DATA63175">
                  <input type="hidden" name="OLDCB22769ROW18DATA63175" id="OLDCB22769ROW18DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW18DATA63175" name="CB22769ROW18DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW19" id="CHILDCB22769ROW19" value="1156">
                <td class="text-center " id="TD22769ROW19DATA60085">
                  Bruyn, Emerson
                </td>
                <td class="text-center " id="TD22769ROW19DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW19DATA60087">
                  <input type="hidden" name="OLDCB22769ROW19DATA60087" id="OLDCB22769ROW19DATA60087" value="141695536">
                  <input type="text" class="form-control" id="CB22769ROW19DATA60087" name="CB22769ROW19DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141695536" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW19DATA60088">
                  <input type="hidden" name="OLDCB22769ROW19DATA60088" id="OLDCB22769ROW19DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW19DATA60088" name="CB22769ROW19DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW19DATA60088,'CB22769ROW19DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW19DATA60088.value); return false;" name="CB22769ROW19DATA60088X" id="CB22769ROW19DATA60088X"><img src="images/calendar.gif" name="CB22769ROW19DATA60088I" id="CB22769ROW19DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW19DATA61259">
                  <input type="hidden" name="OLDCB22769ROW19DATA61259" id="OLDCB22769ROW19DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW19DATA61259" name="CB22769ROW19DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW19DATA61259,'CB22769ROW19DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW19DATA61259.value); return false;" name="CB22769ROW19DATA61259X" id="CB22769ROW19DATA61259X"><img src="images/calendar.gif" name="CB22769ROW19DATA61259I" id="CB22769ROW19DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW19DATA63175">
                  <input type="hidden" name="OLDCB22769ROW19DATA63175" id="OLDCB22769ROW19DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW19DATA63175" name="CB22769ROW19DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW20" id="CHILDCB22769ROW20" value="1169">
                <td class="text-center " id="TD22769ROW20DATA60085">
                  Bruyn, Meaghan
                </td>
                <td class="text-center " id="TD22769ROW20DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW20DATA60087">
                  <input type="hidden" name="OLDCB22769ROW20DATA60087" id="OLDCB22769ROW20DATA60087" value="141695535">
                  <input type="text" class="form-control" id="CB22769ROW20DATA60087" name="CB22769ROW20DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141695535" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW20DATA60088">
                  <input type="hidden" name="OLDCB22769ROW20DATA60088" id="OLDCB22769ROW20DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW20DATA60088" name="CB22769ROW20DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW20DATA60088,'CB22769ROW20DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW20DATA60088.value); return false;" name="CB22769ROW20DATA60088X" id="CB22769ROW20DATA60088X"><img src="images/calendar.gif" name="CB22769ROW20DATA60088I" id="CB22769ROW20DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW20DATA61259">
                  <input type="hidden" name="OLDCB22769ROW20DATA61259" id="OLDCB22769ROW20DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW20DATA61259" name="CB22769ROW20DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW20DATA61259,'CB22769ROW20DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW20DATA61259.value); return false;" name="CB22769ROW20DATA61259X" id="CB22769ROW20DATA61259X"><img src="images/calendar.gif" name="CB22769ROW20DATA61259I" id="CB22769ROW20DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW20DATA63175">
                  <input type="hidden" name="OLDCB22769ROW20DATA63175" id="OLDCB22769ROW20DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW20DATA63175" name="CB22769ROW20DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW21" id="CHILDCB22769ROW21" value="964">
                <td class="text-center " id="TD22769ROW21DATA60085">
                  Bucklin, Emmett
                </td>
                <td class="text-center " id="TD22769ROW21DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW21DATA60087">
                  <input type="hidden" name="OLDCB22769ROW21DATA60087" id="OLDCB22769ROW21DATA60087" value="141089159">
                  <input type="text" class="form-control" id="CB22769ROW21DATA60087" name="CB22769ROW21DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141089159" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW21DATA60088">
                  <input type="hidden" name="OLDCB22769ROW21DATA60088" id="OLDCB22769ROW21DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW21DATA60088" name="CB22769ROW21DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW21DATA60088,'CB22769ROW21DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW21DATA60088.value); return false;" name="CB22769ROW21DATA60088X" id="CB22769ROW21DATA60088X"><img src="images/calendar.gif" name="CB22769ROW21DATA60088I" id="CB22769ROW21DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW21DATA61259">
                  <input type="hidden" name="OLDCB22769ROW21DATA61259" id="OLDCB22769ROW21DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW21DATA61259" name="CB22769ROW21DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW21DATA61259,'CB22769ROW21DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW21DATA61259.value); return false;" name="CB22769ROW21DATA61259X" id="CB22769ROW21DATA61259X"><img src="images/calendar.gif" name="CB22769ROW21DATA61259I" id="CB22769ROW21DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW21DATA63175">
                  <input type="hidden" name="OLDCB22769ROW21DATA63175" id="OLDCB22769ROW21DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW21DATA63175" name="CB22769ROW21DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW22" id="CHILDCB22769ROW22" value="976">
                <td class="text-center " id="TD22769ROW22DATA60085">
                  Bucklin, Mary
                </td>
                <td class="text-center " id="TD22769ROW22DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW22DATA60087">
                  <input type="hidden" name="OLDCB22769ROW22DATA60087" id="OLDCB22769ROW22DATA60087" value="141089154">
                  <input type="text" class="form-control" id="CB22769ROW22DATA60087" name="CB22769ROW22DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141089154" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW22DATA60088">
                  <input type="hidden" name="OLDCB22769ROW22DATA60088" id="OLDCB22769ROW22DATA60088" value="03/31/2027">
                  <input type="text" class="form-control" id="CB22769ROW22DATA60088" name="CB22769ROW22DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="03/31/2027" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW22DATA60088,'CB22769ROW22DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW22DATA60088.value); return false;" name="CB22769ROW22DATA60088X" id="CB22769ROW22DATA60088X"><img src="images/calendar.gif" name="CB22769ROW22DATA60088I" id="CB22769ROW22DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW22DATA61259">
                  <input type="hidden" name="OLDCB22769ROW22DATA61259" id="OLDCB22769ROW22DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW22DATA61259" name="CB22769ROW22DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW22DATA61259,'CB22769ROW22DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW22DATA61259.value); return false;" name="CB22769ROW22DATA61259X" id="CB22769ROW22DATA61259X"><img src="images/calendar.gif" name="CB22769ROW22DATA61259I" id="CB22769ROW22DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW22DATA63175">
                  <input type="hidden" name="OLDCB22769ROW22DATA63175" id="OLDCB22769ROW22DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW22DATA63175" name="CB22769ROW22DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW23" id="CHILDCB22769ROW23" value="977">
                <td class="text-center " id="TD22769ROW23DATA60085">
                  Bucklin, Michael
                </td>
                <td class="text-center " id="TD22769ROW23DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW23DATA60087">
                  <input type="hidden" name="OLDCB22769ROW23DATA60087" id="OLDCB22769ROW23DATA60087" value="14309741">
                  <input type="text" class="form-control" id="CB22769ROW23DATA60087" name="CB22769ROW23DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14309741" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW23DATA60088">
                  <input type="hidden" name="OLDCB22769ROW23DATA60088" id="OLDCB22769ROW23DATA60088" value="10/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW23DATA60088" name="CB22769ROW23DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="10/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW23DATA60088,'CB22769ROW23DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW23DATA60088.value); return false;" name="CB22769ROW23DATA60088X" id="CB22769ROW23DATA60088X"><img src="images/calendar.gif" name="CB22769ROW23DATA60088I" id="CB22769ROW23DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW23DATA61259">
                  <input type="hidden" name="OLDCB22769ROW23DATA61259" id="OLDCB22769ROW23DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW23DATA61259" name="CB22769ROW23DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW23DATA61259,'CB22769ROW23DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW23DATA61259.value); return false;" name="CB22769ROW23DATA61259X" id="CB22769ROW23DATA61259X"><img src="images/calendar.gif" name="CB22769ROW23DATA61259I" id="CB22769ROW23DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW23DATA63175">
                  <input type="hidden" name="OLDCB22769ROW23DATA63175" id="OLDCB22769ROW23DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW23DATA63175" name="CB22769ROW23DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW24" id="CHILDCB22769ROW24" value="1610">
                <td class="text-center " id="TD22769ROW24DATA60085">
                  Bucklin, Michael2
                </td>
                <td class="text-center " id="TD22769ROW24DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW24DATA60087">
                  <input type="hidden" name="OLDCB22769ROW24DATA60087" id="OLDCB22769ROW24DATA60087" value="">
                  <input type="text" class="form-control" id="CB22769ROW24DATA60087" name="CB22769ROW24DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW24DATA60088">
                  <input type="hidden" name="OLDCB22769ROW24DATA60088" id="OLDCB22769ROW24DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW24DATA60088" name="CB22769ROW24DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW24DATA60088,'CB22769ROW24DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW24DATA60088.value); return false;" name="CB22769ROW24DATA60088X" id="CB22769ROW24DATA60088X"><img src="images/calendar.gif" name="CB22769ROW24DATA60088I" id="CB22769ROW24DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW24DATA61259">
                  <input type="hidden" name="OLDCB22769ROW24DATA61259" id="OLDCB22769ROW24DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW24DATA61259" name="CB22769ROW24DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW24DATA61259,'CB22769ROW24DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW24DATA61259.value); return false;" name="CB22769ROW24DATA61259X" id="CB22769ROW24DATA61259X"><img src="images/calendar.gif" name="CB22769ROW24DATA61259I" id="CB22769ROW24DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW24DATA63175">
                  <input type="hidden" name="OLDCB22769ROW24DATA63175" id="OLDCB22769ROW24DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW24DATA63175" name="CB22769ROW24DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW25" id="CHILDCB22769ROW25" value="1611">
                <td class="text-center " id="TD22769ROW25DATA60085">
                  Bucklin, Michael3
                </td>
                <td class="text-center " id="TD22769ROW25DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW25DATA60087">
                  <input type="hidden" name="OLDCB22769ROW25DATA60087" id="OLDCB22769ROW25DATA60087" value="">
                  <input type="text" class="form-control" id="CB22769ROW25DATA60087" name="CB22769ROW25DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW25DATA60088">
                  <input type="hidden" name="OLDCB22769ROW25DATA60088" id="OLDCB22769ROW25DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW25DATA60088" name="CB22769ROW25DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW25DATA60088,'CB22769ROW25DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW25DATA60088.value); return false;" name="CB22769ROW25DATA60088X" id="CB22769ROW25DATA60088X"><img src="images/calendar.gif" name="CB22769ROW25DATA60088I" id="CB22769ROW25DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW25DATA61259">
                  <input type="hidden" name="OLDCB22769ROW25DATA61259" id="OLDCB22769ROW25DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW25DATA61259" name="CB22769ROW25DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW25DATA61259,'CB22769ROW25DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW25DATA61259.value); return false;" name="CB22769ROW25DATA61259X" id="CB22769ROW25DATA61259X"><img src="images/calendar.gif" name="CB22769ROW25DATA61259I" id="CB22769ROW25DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW25DATA63175">
                  <input type="hidden" name="OLDCB22769ROW25DATA63175" id="OLDCB22769ROW25DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW25DATA63175" name="CB22769ROW25DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW26" id="CHILDCB22769ROW26" value="785">
                <td class="text-center " id="TD22769ROW26DATA60085">
                  Bush, Greg
                </td>
                <td class="text-center " id="TD22769ROW26DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW26DATA60087">
                  <input type="hidden" name="OLDCB22769ROW26DATA60087" id="OLDCB22769ROW26DATA60087" value="140355030">
                  <input type="text" class="form-control" id="CB22769ROW26DATA60087" name="CB22769ROW26DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140355030" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW26DATA60088">
                  <input type="hidden" name="OLDCB22769ROW26DATA60088" id="OLDCB22769ROW26DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW26DATA60088" name="CB22769ROW26DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW26DATA60088,'CB22769ROW26DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW26DATA60088.value); return false;" name="CB22769ROW26DATA60088X" id="CB22769ROW26DATA60088X"><img src="images/calendar.gif" name="CB22769ROW26DATA60088I" id="CB22769ROW26DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW26DATA61259">
                  <input type="hidden" name="OLDCB22769ROW26DATA61259" id="OLDCB22769ROW26DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW26DATA61259" name="CB22769ROW26DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW26DATA61259,'CB22769ROW26DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW26DATA61259.value); return false;" name="CB22769ROW26DATA61259X" id="CB22769ROW26DATA61259X"><img src="images/calendar.gif" name="CB22769ROW26DATA61259I" id="CB22769ROW26DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW26DATA63175">
                  <input type="hidden" name="OLDCB22769ROW26DATA63175" id="OLDCB22769ROW26DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW26DATA63175" name="CB22769ROW26DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW27" id="CHILDCB22769ROW27" value="762">
                <td class="text-center " id="TD22769ROW27DATA60085">
                  Bush, Kai
                </td>
                <td class="text-center " id="TD22769ROW27DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW27DATA60087">
                  <input type="hidden" name="OLDCB22769ROW27DATA60087" id="OLDCB22769ROW27DATA60087" value="140355039">
                  <input type="text" class="form-control" id="CB22769ROW27DATA60087" name="CB22769ROW27DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140355039" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW27DATA60088">
                  <input type="hidden" name="OLDCB22769ROW27DATA60088" id="OLDCB22769ROW27DATA60088" value="01/31/2027">
                  <input type="text" class="form-control" id="CB22769ROW27DATA60088" name="CB22769ROW27DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="01/31/2027" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW27DATA60088,'CB22769ROW27DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW27DATA60088.value); return false;" name="CB22769ROW27DATA60088X" id="CB22769ROW27DATA60088X"><img src="images/calendar.gif" name="CB22769ROW27DATA60088I" id="CB22769ROW27DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW27DATA61259">
                  <input type="hidden" name="OLDCB22769ROW27DATA61259" id="OLDCB22769ROW27DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW27DATA61259" name="CB22769ROW27DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW27DATA61259,'CB22769ROW27DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW27DATA61259.value); return false;" name="CB22769ROW27DATA61259X" id="CB22769ROW27DATA61259X"><img src="images/calendar.gif" name="CB22769ROW27DATA61259I" id="CB22769ROW27DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW27DATA63175">
                  <input type="hidden" name="OLDCB22769ROW27DATA63175" id="OLDCB22769ROW27DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW27DATA63175" name="CB22769ROW27DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW28" id="CHILDCB22769ROW28" value="908">
                <td class="text-center " id="TD22769ROW28DATA60085">
                  Byrd, Amanda
                </td>
                <td class="text-center " id="TD22769ROW28DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW28DATA60087">
                  <input type="hidden" name="OLDCB22769ROW28DATA60087" id="OLDCB22769ROW28DATA60087" value="140622549">
                  <input type="text" class="form-control" id="CB22769ROW28DATA60087" name="CB22769ROW28DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140622549" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW28DATA60088">
                  <input type="hidden" name="OLDCB22769ROW28DATA60088" id="OLDCB22769ROW28DATA60088" value="05/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW28DATA60088" name="CB22769ROW28DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="05/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW28DATA60088,'CB22769ROW28DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW28DATA60088.value); return false;" name="CB22769ROW28DATA60088X" id="CB22769ROW28DATA60088X"><img src="images/calendar.gif" name="CB22769ROW28DATA60088I" id="CB22769ROW28DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW28DATA61259">
                  <input type="hidden" name="OLDCB22769ROW28DATA61259" id="OLDCB22769ROW28DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW28DATA61259" name="CB22769ROW28DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW28DATA61259,'CB22769ROW28DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW28DATA61259.value); return false;" name="CB22769ROW28DATA61259X" id="CB22769ROW28DATA61259X"><img src="images/calendar.gif" name="CB22769ROW28DATA61259I" id="CB22769ROW28DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW28DATA63175">
                  <input type="hidden" name="OLDCB22769ROW28DATA63175" id="OLDCB22769ROW28DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW28DATA63175" name="CB22769ROW28DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW29" id="CHILDCB22769ROW29" value="763">
                <td class="text-center " id="TD22769ROW29DATA60085">
                  Byrd, Benjamin
                </td>
                <td class="text-center " id="TD22769ROW29DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW29DATA60087">
                  <input type="hidden" name="OLDCB22769ROW29DATA60087" id="OLDCB22769ROW29DATA60087" value="140382790">
                  <input type="text" class="form-control" id="CB22769ROW29DATA60087" name="CB22769ROW29DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140382790" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW29DATA60088">
                  <input type="hidden" name="OLDCB22769ROW29DATA60088" id="OLDCB22769ROW29DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW29DATA60088" name="CB22769ROW29DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW29DATA60088,'CB22769ROW29DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW29DATA60088.value); return false;" name="CB22769ROW29DATA60088X" id="CB22769ROW29DATA60088X"><img src="images/calendar.gif" name="CB22769ROW29DATA60088I" id="CB22769ROW29DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW29DATA61259">
                  <input type="hidden" name="OLDCB22769ROW29DATA61259" id="OLDCB22769ROW29DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW29DATA61259" name="CB22769ROW29DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW29DATA61259,'CB22769ROW29DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW29DATA61259.value); return false;" name="CB22769ROW29DATA61259X" id="CB22769ROW29DATA61259X"><img src="images/calendar.gif" name="CB22769ROW29DATA61259I" id="CB22769ROW29DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW29DATA63175">
                  <input type="hidden" name="OLDCB22769ROW29DATA63175" id="OLDCB22769ROW29DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW29DATA63175" name="CB22769ROW29DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW30" id="CHILDCB22769ROW30" value="786">
                <td class="text-center " id="TD22769ROW30DATA60085">
                  Byrd, Ryan
                </td>
                <td class="text-center " id="TD22769ROW30DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW30DATA60087">
                  <input type="hidden" name="OLDCB22769ROW30DATA60087" id="OLDCB22769ROW30DATA60087" value="140382786">
                  <input type="text" class="form-control" id="CB22769ROW30DATA60087" name="CB22769ROW30DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140382786" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW30DATA60088">
                  <input type="hidden" name="OLDCB22769ROW30DATA60088" id="OLDCB22769ROW30DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW30DATA60088" name="CB22769ROW30DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW30DATA60088,'CB22769ROW30DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW30DATA60088.value); return false;" name="CB22769ROW30DATA60088X" id="CB22769ROW30DATA60088X"><img src="images/calendar.gif" name="CB22769ROW30DATA60088I" id="CB22769ROW30DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW30DATA61259">
                  <input type="hidden" name="OLDCB22769ROW30DATA61259" id="OLDCB22769ROW30DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW30DATA61259" name="CB22769ROW30DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW30DATA61259,'CB22769ROW30DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW30DATA61259.value); return false;" name="CB22769ROW30DATA61259X" id="CB22769ROW30DATA61259X"><img src="images/calendar.gif" name="CB22769ROW30DATA61259I" id="CB22769ROW30DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW30DATA63175">
                  <input type="hidden" name="OLDCB22769ROW30DATA63175" id="OLDCB22769ROW30DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW30DATA63175" name="CB22769ROW30DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW31" id="CHILDCB22769ROW31" value="1535">
                <td class="text-center " id="TD22769ROW31DATA60085">
                  Chakarvarty, Mridul
                </td>
                <td class="text-center " id="TD22769ROW31DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW31DATA60087">
                  <input type="hidden" name="OLDCB22769ROW31DATA60087" id="OLDCB22769ROW31DATA60087" value="">
                  <input type="text" class="form-control" id="CB22769ROW31DATA60087" name="CB22769ROW31DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW31DATA60088">
                  <input type="hidden" name="OLDCB22769ROW31DATA60088" id="OLDCB22769ROW31DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW31DATA60088" name="CB22769ROW31DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW31DATA60088,'CB22769ROW31DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW31DATA60088.value); return false;" name="CB22769ROW31DATA60088X" id="CB22769ROW31DATA60088X"><img src="images/calendar.gif" name="CB22769ROW31DATA60088I" id="CB22769ROW31DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW31DATA61259">
                  <input type="hidden" name="OLDCB22769ROW31DATA61259" id="OLDCB22769ROW31DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW31DATA61259" name="CB22769ROW31DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW31DATA61259,'CB22769ROW31DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW31DATA61259.value); return false;" name="CB22769ROW31DATA61259X" id="CB22769ROW31DATA61259X"><img src="images/calendar.gif" name="CB22769ROW31DATA61259I" id="CB22769ROW31DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW31DATA63175">
                  <input type="hidden" name="OLDCB22769ROW31DATA63175" id="OLDCB22769ROW31DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW31DATA63175" name="CB22769ROW31DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW32" id="CHILDCB22769ROW32" value="1065">
                <td class="text-center " id="TD22769ROW32DATA60085">
                  Chidester, Amy
                </td>
                <td class="text-center " id="TD22769ROW32DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW32DATA60087">
                  <input type="hidden" name="OLDCB22769ROW32DATA60087" id="OLDCB22769ROW32DATA60087" value="141090961">
                  <input type="text" class="form-control" id="CB22769ROW32DATA60087" name="CB22769ROW32DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141090961" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW32DATA60088">
                  <input type="hidden" name="OLDCB22769ROW32DATA60088" id="OLDCB22769ROW32DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW32DATA60088" name="CB22769ROW32DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW32DATA60088,'CB22769ROW32DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW32DATA60088.value); return false;" name="CB22769ROW32DATA60088X" id="CB22769ROW32DATA60088X"><img src="images/calendar.gif" name="CB22769ROW32DATA60088I" id="CB22769ROW32DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW32DATA61259">
                  <input type="hidden" name="OLDCB22769ROW32DATA61259" id="OLDCB22769ROW32DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW32DATA61259" name="CB22769ROW32DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW32DATA61259,'CB22769ROW32DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW32DATA61259.value); return false;" name="CB22769ROW32DATA61259X" id="CB22769ROW32DATA61259X"><img src="images/calendar.gif" name="CB22769ROW32DATA61259I" id="CB22769ROW32DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW32DATA63175">
                  <input type="hidden" name="OLDCB22769ROW32DATA63175" id="OLDCB22769ROW32DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW32DATA63175" name="CB22769ROW32DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW33" id="CHILDCB22769ROW33" value="1143">
                <td class="text-center " id="TD22769ROW33DATA60085">
                  Chidester, Ella
                </td>
                <td class="text-center " id="TD22769ROW33DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW33DATA60087">
                  <input type="hidden" name="OLDCB22769ROW33DATA60087" id="OLDCB22769ROW33DATA60087" value="141658434">
                  <input type="text" class="form-control" id="CB22769ROW33DATA60087" name="CB22769ROW33DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141658434" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW33DATA60088">
                  <input type="hidden" name="OLDCB22769ROW33DATA60088" id="OLDCB22769ROW33DATA60088" value="07/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW33DATA60088" name="CB22769ROW33DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="07/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW33DATA60088,'CB22769ROW33DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW33DATA60088.value); return false;" name="CB22769ROW33DATA60088X" id="CB22769ROW33DATA60088X"><img src="images/calendar.gif" name="CB22769ROW33DATA60088I" id="CB22769ROW33DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW33DATA61259">
                  <input type="hidden" name="OLDCB22769ROW33DATA61259" id="OLDCB22769ROW33DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW33DATA61259" name="CB22769ROW33DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW33DATA61259,'CB22769ROW33DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW33DATA61259.value); return false;" name="CB22769ROW33DATA61259X" id="CB22769ROW33DATA61259X"><img src="images/calendar.gif" name="CB22769ROW33DATA61259I" id="CB22769ROW33DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW33DATA63175">
                  <input type="hidden" name="OLDCB22769ROW33DATA63175" id="OLDCB22769ROW33DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW33DATA63175" name="CB22769ROW33DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW34" id="CHILDCB22769ROW34" value="986">
                <td class="text-center " id="TD22769ROW34DATA60085">
                  Chidester, Russ
                </td>
                <td class="text-center " id="TD22769ROW34DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW34DATA60087">
                  <input type="hidden" name="OLDCB22769ROW34DATA60087" id="OLDCB22769ROW34DATA60087" value="141089977">
                  <input type="text" class="form-control" id="CB22769ROW34DATA60087" name="CB22769ROW34DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141089977" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW34DATA60088">
                  <input type="hidden" name="OLDCB22769ROW34DATA60088" id="OLDCB22769ROW34DATA60088" value="05/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW34DATA60088" name="CB22769ROW34DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="05/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW34DATA60088,'CB22769ROW34DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW34DATA60088.value); return false;" name="CB22769ROW34DATA60088X" id="CB22769ROW34DATA60088X"><img src="images/calendar.gif" name="CB22769ROW34DATA60088I" id="CB22769ROW34DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW34DATA61259">
                  <input type="hidden" name="OLDCB22769ROW34DATA61259" id="OLDCB22769ROW34DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW34DATA61259" name="CB22769ROW34DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW34DATA61259,'CB22769ROW34DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW34DATA61259.value); return false;" name="CB22769ROW34DATA61259X" id="CB22769ROW34DATA61259X"><img src="images/calendar.gif" name="CB22769ROW34DATA61259I" id="CB22769ROW34DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW34DATA63175">
                  <input type="hidden" name="OLDCB22769ROW34DATA63175" id="OLDCB22769ROW34DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW34DATA63175" name="CB22769ROW34DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW35" id="CHILDCB22769ROW35" value="983">
                <td class="text-center " id="TD22769ROW35DATA60085">
                  Chidester, Taylor
                </td>
                <td class="text-center " id="TD22769ROW35DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW35DATA60087">
                  <input type="hidden" name="OLDCB22769ROW35DATA60087" id="OLDCB22769ROW35DATA60087" value="141089990">
                  <input type="text" class="form-control" id="CB22769ROW35DATA60087" name="CB22769ROW35DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141089990" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW35DATA60088">
                  <input type="hidden" name="OLDCB22769ROW35DATA60088" id="OLDCB22769ROW35DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW35DATA60088" name="CB22769ROW35DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW35DATA60088,'CB22769ROW35DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW35DATA60088.value); return false;" name="CB22769ROW35DATA60088X" id="CB22769ROW35DATA60088X"><img src="images/calendar.gif" name="CB22769ROW35DATA60088I" id="CB22769ROW35DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW35DATA61259">
                  <input type="hidden" name="OLDCB22769ROW35DATA61259" id="OLDCB22769ROW35DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW35DATA61259" name="CB22769ROW35DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW35DATA61259,'CB22769ROW35DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW35DATA61259.value); return false;" name="CB22769ROW35DATA61259X" id="CB22769ROW35DATA61259X"><img src="images/calendar.gif" name="CB22769ROW35DATA61259I" id="CB22769ROW35DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW35DATA63175">
                  <input type="hidden" name="OLDCB22769ROW35DATA63175" id="OLDCB22769ROW35DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW35DATA63175" name="CB22769ROW35DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW36" id="CHILDCB22769ROW36" value="630">
                <td class="text-center " id="TD22769ROW36DATA60085">
                  Corkill, Cynthia
                </td>
                <td class="text-center " id="TD22769ROW36DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW36DATA60087">
                  <input type="hidden" name="OLDCB22769ROW36DATA60087" id="OLDCB22769ROW36DATA60087" value="13871434">
                  <input type="text" class="form-control" id="CB22769ROW36DATA60087" name="CB22769ROW36DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="13871434" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW36DATA60088">
                  <input type="hidden" name="OLDCB22769ROW36DATA60088" id="OLDCB22769ROW36DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW36DATA60088" name="CB22769ROW36DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW36DATA60088,'CB22769ROW36DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW36DATA60088.value); return false;" name="CB22769ROW36DATA60088X" id="CB22769ROW36DATA60088X"><img src="images/calendar.gif" name="CB22769ROW36DATA60088I" id="CB22769ROW36DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW36DATA61259">
                  <input type="hidden" name="OLDCB22769ROW36DATA61259" id="OLDCB22769ROW36DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW36DATA61259" name="CB22769ROW36DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW36DATA61259,'CB22769ROW36DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW36DATA61259.value); return false;" name="CB22769ROW36DATA61259X" id="CB22769ROW36DATA61259X"><img src="images/calendar.gif" name="CB22769ROW36DATA61259I" id="CB22769ROW36DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW36DATA63175">
                  <input type="hidden" name="OLDCB22769ROW36DATA63175" id="OLDCB22769ROW36DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW36DATA63175" name="CB22769ROW36DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW37" id="CHILDCB22769ROW37" value="1259">
                <td class="text-center " id="TD22769ROW37DATA60085">
                  Daru, Bhargav
                </td>
                <td class="text-center " id="TD22769ROW37DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW37DATA60087">
                  <input type="hidden" name="OLDCB22769ROW37DATA60087" id="OLDCB22769ROW37DATA60087" value="141934635">
                  <input type="text" class="form-control" id="CB22769ROW37DATA60087" name="CB22769ROW37DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141934635" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW37DATA60088">
                  <input type="hidden" name="OLDCB22769ROW37DATA60088" id="OLDCB22769ROW37DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW37DATA60088" name="CB22769ROW37DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW37DATA60088,'CB22769ROW37DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW37DATA60088.value); return false;" name="CB22769ROW37DATA60088X" id="CB22769ROW37DATA60088X"><img src="images/calendar.gif" name="CB22769ROW37DATA60088I" id="CB22769ROW37DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW37DATA61259">
                  <input type="hidden" name="OLDCB22769ROW37DATA61259" id="OLDCB22769ROW37DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW37DATA61259" name="CB22769ROW37DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW37DATA61259,'CB22769ROW37DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW37DATA61259.value); return false;" name="CB22769ROW37DATA61259X" id="CB22769ROW37DATA61259X"><img src="images/calendar.gif" name="CB22769ROW37DATA61259I" id="CB22769ROW37DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW37DATA63175">
                  <input type="hidden" name="OLDCB22769ROW37DATA63175" id="OLDCB22769ROW37DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW37DATA63175" name="CB22769ROW37DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW38" id="CHILDCB22769ROW38" value="984">
                <td class="text-center " id="TD22769ROW38DATA60085">
                  de los Santos Garza, Andrea
                </td>
                <td class="text-center " id="TD22769ROW38DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW38DATA60087">
                  <input type="hidden" name="OLDCB22769ROW38DATA60087" id="OLDCB22769ROW38DATA60087" value="141090813">
                  <input type="text" class="form-control" id="CB22769ROW38DATA60087" name="CB22769ROW38DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141090813" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW38DATA60088">
                  <input type="hidden" name="OLDCB22769ROW38DATA60088" id="OLDCB22769ROW38DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW38DATA60088" name="CB22769ROW38DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW38DATA60088,'CB22769ROW38DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW38DATA60088.value); return false;" name="CB22769ROW38DATA60088X" id="CB22769ROW38DATA60088X"><img src="images/calendar.gif" name="CB22769ROW38DATA60088I" id="CB22769ROW38DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW38DATA61259">
                  <input type="hidden" name="OLDCB22769ROW38DATA61259" id="OLDCB22769ROW38DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW38DATA61259" name="CB22769ROW38DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW38DATA61259,'CB22769ROW38DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW38DATA61259.value); return false;" name="CB22769ROW38DATA61259X" id="CB22769ROW38DATA61259X"><img src="images/calendar.gif" name="CB22769ROW38DATA61259I" id="CB22769ROW38DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW38DATA63175">
                  <input type="hidden" name="OLDCB22769ROW38DATA63175" id="OLDCB22769ROW38DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW38DATA63175" name="CB22769ROW38DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW39" id="CHILDCB22769ROW39" value="965">
                <td class="text-center " id="TD22769ROW39DATA60085">
                  de los Santos Garza, Leo  Jr.
                </td>
                <td class="text-center " id="TD22769ROW39DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW39DATA60087">
                  <input type="hidden" name="OLDCB22769ROW39DATA60087" id="OLDCB22769ROW39DATA60087" value="141089461">
                  <input type="text" class="form-control" id="CB22769ROW39DATA60087" name="CB22769ROW39DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141089461" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW39DATA60088">
                  <input type="hidden" name="OLDCB22769ROW39DATA60088" id="OLDCB22769ROW39DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW39DATA60088" name="CB22769ROW39DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW39DATA60088,'CB22769ROW39DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW39DATA60088.value); return false;" name="CB22769ROW39DATA60088X" id="CB22769ROW39DATA60088X"><img src="images/calendar.gif" name="CB22769ROW39DATA60088I" id="CB22769ROW39DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW39DATA61259">
                  <input type="hidden" name="OLDCB22769ROW39DATA61259" id="OLDCB22769ROW39DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW39DATA61259" name="CB22769ROW39DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW39DATA61259,'CB22769ROW39DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW39DATA61259.value); return false;" name="CB22769ROW39DATA61259X" id="CB22769ROW39DATA61259X"><img src="images/calendar.gif" name="CB22769ROW39DATA61259I" id="CB22769ROW39DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW39DATA63175">
                  <input type="hidden" name="OLDCB22769ROW39DATA63175" id="OLDCB22769ROW39DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW39DATA63175" name="CB22769ROW39DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW40" id="CHILDCB22769ROW40" value="978">
                <td class="text-center " id="TD22769ROW40DATA60085">
                  De Los Santos Tamez, Diego
                </td>
                <td class="text-center " id="TD22769ROW40DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW40DATA60087">
                  <input type="hidden" name="OLDCB22769ROW40DATA60087" id="OLDCB22769ROW40DATA60087" value="141089458">
                  <input type="text" class="form-control" id="CB22769ROW40DATA60087" name="CB22769ROW40DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141089458" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW40DATA60088">
                  <input type="hidden" name="OLDCB22769ROW40DATA60088" id="OLDCB22769ROW40DATA60088" value="10/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW40DATA60088" name="CB22769ROW40DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="10/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW40DATA60088,'CB22769ROW40DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW40DATA60088.value); return false;" name="CB22769ROW40DATA60088X" id="CB22769ROW40DATA60088X"><img src="images/calendar.gif" name="CB22769ROW40DATA60088I" id="CB22769ROW40DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW40DATA61259">
                  <input type="hidden" name="OLDCB22769ROW40DATA61259" id="OLDCB22769ROW40DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW40DATA61259" name="CB22769ROW40DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW40DATA61259,'CB22769ROW40DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW40DATA61259.value); return false;" name="CB22769ROW40DATA61259X" id="CB22769ROW40DATA61259X"><img src="images/calendar.gif" name="CB22769ROW40DATA61259I" id="CB22769ROW40DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW40DATA63175">
                  <input type="hidden" name="OLDCB22769ROW40DATA63175" id="OLDCB22769ROW40DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW40DATA63175" name="CB22769ROW40DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW41" id="CHILDCB22769ROW41" value="1135">
                <td class="text-center " id="TD22769ROW41DATA60085">
                  DeMartini, Emilia
                </td>
                <td class="text-center " id="TD22769ROW41DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW41DATA60087">
                  <input type="hidden" name="OLDCB22769ROW41DATA60087" id="OLDCB22769ROW41DATA60087" value="141615743">
                  <input type="text" class="form-control" id="CB22769ROW41DATA60087" name="CB22769ROW41DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141615743" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW41DATA60088">
                  <input type="hidden" name="OLDCB22769ROW41DATA60088" id="OLDCB22769ROW41DATA60088" value="05/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW41DATA60088" name="CB22769ROW41DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="05/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW41DATA60088,'CB22769ROW41DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW41DATA60088.value); return false;" name="CB22769ROW41DATA60088X" id="CB22769ROW41DATA60088X"><img src="images/calendar.gif" name="CB22769ROW41DATA60088I" id="CB22769ROW41DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW41DATA61259">
                  <input type="hidden" name="OLDCB22769ROW41DATA61259" id="OLDCB22769ROW41DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW41DATA61259" name="CB22769ROW41DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW41DATA61259,'CB22769ROW41DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW41DATA61259.value); return false;" name="CB22769ROW41DATA61259X" id="CB22769ROW41DATA61259X"><img src="images/calendar.gif" name="CB22769ROW41DATA61259I" id="CB22769ROW41DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW41DATA63175">
                  <input type="hidden" name="OLDCB22769ROW41DATA63175" id="OLDCB22769ROW41DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW41DATA63175" name="CB22769ROW41DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW42" id="CHILDCB22769ROW42" value="1139">
                <td class="text-center " id="TD22769ROW42DATA60085">
                  DeMartini, Trevor
                </td>
                <td class="text-center " id="TD22769ROW42DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW42DATA60087">
                  <input type="hidden" name="OLDCB22769ROW42DATA60087" id="OLDCB22769ROW42DATA60087" value="6659945">
                  <input type="text" class="form-control" id="CB22769ROW42DATA60087" name="CB22769ROW42DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="6659945" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW42DATA60088">
                  <input type="hidden" name="OLDCB22769ROW42DATA60088" id="OLDCB22769ROW42DATA60088" value="01/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW42DATA60088" name="CB22769ROW42DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="01/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW42DATA60088,'CB22769ROW42DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW42DATA60088.value); return false;" name="CB22769ROW42DATA60088X" id="CB22769ROW42DATA60088X"><img src="images/calendar.gif" name="CB22769ROW42DATA60088I" id="CB22769ROW42DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW42DATA61259">
                  <input type="hidden" name="OLDCB22769ROW42DATA61259" id="OLDCB22769ROW42DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW42DATA61259" name="CB22769ROW42DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW42DATA61259,'CB22769ROW42DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW42DATA61259.value); return false;" name="CB22769ROW42DATA61259X" id="CB22769ROW42DATA61259X"><img src="images/calendar.gif" name="CB22769ROW42DATA61259I" id="CB22769ROW42DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW42DATA63175">
                  <input type="hidden" name="OLDCB22769ROW42DATA63175" id="OLDCB22769ROW42DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW42DATA63175" name="CB22769ROW42DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW43" id="CHILDCB22769ROW43" value="1136">
                <td class="text-center " id="TD22769ROW43DATA60085">
                  DeMartini, Vincent
                </td>
                <td class="text-center " id="TD22769ROW43DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW43DATA60087">
                  <input type="hidden" name="OLDCB22769ROW43DATA60087" id="OLDCB22769ROW43DATA60087" value="14649679">
                  <input type="text" class="form-control" id="CB22769ROW43DATA60087" name="CB22769ROW43DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14649679" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW43DATA60088">
                  <input type="hidden" name="OLDCB22769ROW43DATA60088" id="OLDCB22769ROW43DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW43DATA60088" name="CB22769ROW43DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW43DATA60088,'CB22769ROW43DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW43DATA60088.value); return false;" name="CB22769ROW43DATA60088X" id="CB22769ROW43DATA60088X"><img src="images/calendar.gif" name="CB22769ROW43DATA60088I" id="CB22769ROW43DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW43DATA61259">
                  <input type="hidden" name="OLDCB22769ROW43DATA61259" id="OLDCB22769ROW43DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW43DATA61259" name="CB22769ROW43DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW43DATA61259,'CB22769ROW43DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW43DATA61259.value); return false;" name="CB22769ROW43DATA61259X" id="CB22769ROW43DATA61259X"><img src="images/calendar.gif" name="CB22769ROW43DATA61259I" id="CB22769ROW43DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW43DATA63175">
                  <input type="hidden" name="OLDCB22769ROW43DATA63175" id="OLDCB22769ROW43DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW43DATA63175" name="CB22769ROW43DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW44" id="CHILDCB22769ROW44" value="1241">
                <td class="text-center " id="TD22769ROW44DATA60085">
                  Dennis, Khoi
                </td>
                <td class="text-center " id="TD22769ROW44DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW44DATA60087">
                  <input type="hidden" name="OLDCB22769ROW44DATA60087" id="OLDCB22769ROW44DATA60087" value="141834429">
                  <input type="text" class="form-control" id="CB22769ROW44DATA60087" name="CB22769ROW44DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141834429" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW44DATA60088">
                  <input type="hidden" name="OLDCB22769ROW44DATA60088" id="OLDCB22769ROW44DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW44DATA60088" name="CB22769ROW44DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW44DATA60088,'CB22769ROW44DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW44DATA60088.value); return false;" name="CB22769ROW44DATA60088X" id="CB22769ROW44DATA60088X"><img src="images/calendar.gif" name="CB22769ROW44DATA60088I" id="CB22769ROW44DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW44DATA61259">
                  <input type="hidden" name="OLDCB22769ROW44DATA61259" id="OLDCB22769ROW44DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW44DATA61259" name="CB22769ROW44DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW44DATA61259,'CB22769ROW44DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW44DATA61259.value); return false;" name="CB22769ROW44DATA61259X" id="CB22769ROW44DATA61259X"><img src="images/calendar.gif" name="CB22769ROW44DATA61259I" id="CB22769ROW44DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW44DATA63175">
                  <input type="hidden" name="OLDCB22769ROW44DATA63175" id="OLDCB22769ROW44DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW44DATA63175" name="CB22769ROW44DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW45" id="CHILDCB22769ROW45" value="1246">
                <td class="text-center " id="TD22769ROW45DATA60085">
                  Dennis, Michael
                </td>
                <td class="text-center " id="TD22769ROW45DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW45DATA60087">
                  <input type="hidden" name="OLDCB22769ROW45DATA60087" id="OLDCB22769ROW45DATA60087" value="141834428">
                  <input type="text" class="form-control" id="CB22769ROW45DATA60087" name="CB22769ROW45DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141834428" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW45DATA60088">
                  <input type="hidden" name="OLDCB22769ROW45DATA60088" id="OLDCB22769ROW45DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW45DATA60088" name="CB22769ROW45DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW45DATA60088,'CB22769ROW45DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW45DATA60088.value); return false;" name="CB22769ROW45DATA60088X" id="CB22769ROW45DATA60088X"><img src="images/calendar.gif" name="CB22769ROW45DATA60088I" id="CB22769ROW45DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW45DATA61259">
                  <input type="hidden" name="OLDCB22769ROW45DATA61259" id="OLDCB22769ROW45DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW45DATA61259" name="CB22769ROW45DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW45DATA61259,'CB22769ROW45DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW45DATA61259.value); return false;" name="CB22769ROW45DATA61259X" id="CB22769ROW45DATA61259X"><img src="images/calendar.gif" name="CB22769ROW45DATA61259I" id="CB22769ROW45DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW45DATA63175">
                  <input type="hidden" name="OLDCB22769ROW45DATA63175" id="OLDCB22769ROW45DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW45DATA63175" name="CB22769ROW45DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW46" id="CHILDCB22769ROW46" value="614">
                <td class="text-center " id="TD22769ROW46DATA60085">
                  Desouky, Noura
                </td>
                <td class="text-center " id="TD22769ROW46DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW46DATA60087">
                  <input type="hidden" name="OLDCB22769ROW46DATA60087" id="OLDCB22769ROW46DATA60087" value="14184841">
                  <input type="text" class="form-control" id="CB22769ROW46DATA60087" name="CB22769ROW46DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14184841" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW46DATA60088">
                  <input type="hidden" name="OLDCB22769ROW46DATA60088" id="OLDCB22769ROW46DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW46DATA60088" name="CB22769ROW46DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW46DATA60088,'CB22769ROW46DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW46DATA60088.value); return false;" name="CB22769ROW46DATA60088X" id="CB22769ROW46DATA60088X"><img src="images/calendar.gif" name="CB22769ROW46DATA60088I" id="CB22769ROW46DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW46DATA61259">
                  <input type="hidden" name="OLDCB22769ROW46DATA61259" id="OLDCB22769ROW46DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW46DATA61259" name="CB22769ROW46DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW46DATA61259,'CB22769ROW46DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW46DATA61259.value); return false;" name="CB22769ROW46DATA61259X" id="CB22769ROW46DATA61259X"><img src="images/calendar.gif" name="CB22769ROW46DATA61259I" id="CB22769ROW46DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW46DATA63175">
                  <input type="hidden" name="OLDCB22769ROW46DATA63175" id="OLDCB22769ROW46DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW46DATA63175" name="CB22769ROW46DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW47" id="CHILDCB22769ROW47" value="1268">
                <td class="text-center " id="TD22769ROW47DATA60085">
                  Diaz, Adam
                </td>
                <td class="text-center " id="TD22769ROW47DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW47DATA60087">
                  <input type="hidden" name="OLDCB22769ROW47DATA60087" id="OLDCB22769ROW47DATA60087" value="141964219">
                  <input type="text" class="form-control" id="CB22769ROW47DATA60087" name="CB22769ROW47DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141964219" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW47DATA60088">
                  <input type="hidden" name="OLDCB22769ROW47DATA60088" id="OLDCB22769ROW47DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW47DATA60088" name="CB22769ROW47DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW47DATA60088,'CB22769ROW47DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW47DATA60088.value); return false;" name="CB22769ROW47DATA60088X" id="CB22769ROW47DATA60088X"><img src="images/calendar.gif" name="CB22769ROW47DATA60088I" id="CB22769ROW47DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW47DATA61259">
                  <input type="hidden" name="OLDCB22769ROW47DATA61259" id="OLDCB22769ROW47DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW47DATA61259" name="CB22769ROW47DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW47DATA61259,'CB22769ROW47DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW47DATA61259.value); return false;" name="CB22769ROW47DATA61259X" id="CB22769ROW47DATA61259X"><img src="images/calendar.gif" name="CB22769ROW47DATA61259I" id="CB22769ROW47DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW47DATA63175">
                  <input type="hidden" name="OLDCB22769ROW47DATA63175" id="OLDCB22769ROW47DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW47DATA63175" name="CB22769ROW47DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW48" id="CHILDCB22769ROW48" value="1266">
                <td class="text-center " id="TD22769ROW48DATA60085">
                  Diaz, Winslow
                </td>
                <td class="text-center " id="TD22769ROW48DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW48DATA60087">
                  <input type="hidden" name="OLDCB22769ROW48DATA60087" id="OLDCB22769ROW48DATA60087" value="141964223">
                  <input type="text" class="form-control" id="CB22769ROW48DATA60087" name="CB22769ROW48DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141964223" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW48DATA60088">
                  <input type="hidden" name="OLDCB22769ROW48DATA60088" id="OLDCB22769ROW48DATA60088" value="10/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW48DATA60088" name="CB22769ROW48DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="10/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW48DATA60088,'CB22769ROW48DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW48DATA60088.value); return false;" name="CB22769ROW48DATA60088X" id="CB22769ROW48DATA60088X"><img src="images/calendar.gif" name="CB22769ROW48DATA60088I" id="CB22769ROW48DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW48DATA61259">
                  <input type="hidden" name="OLDCB22769ROW48DATA61259" id="OLDCB22769ROW48DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW48DATA61259" name="CB22769ROW48DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW48DATA61259,'CB22769ROW48DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW48DATA61259.value); return false;" name="CB22769ROW48DATA61259X" id="CB22769ROW48DATA61259X"><img src="images/calendar.gif" name="CB22769ROW48DATA61259I" id="CB22769ROW48DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW48DATA63175">
                  <input type="hidden" name="OLDCB22769ROW48DATA63175" id="OLDCB22769ROW48DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW48DATA63175" name="CB22769ROW48DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW49" id="CHILDCB22769ROW49" value="562">
                <td class="text-center " id="TD22769ROW49DATA60085">
                  Dranguet, Benjamin
                </td>
                <td class="text-center " id="TD22769ROW49DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW49DATA60087">
                  <input type="hidden" name="OLDCB22769ROW49DATA60087" id="OLDCB22769ROW49DATA60087" value="14140233">
                  <input type="text" class="form-control" id="CB22769ROW49DATA60087" name="CB22769ROW49DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14140233" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW49DATA60088">
                  <input type="hidden" name="OLDCB22769ROW49DATA60088" id="OLDCB22769ROW49DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW49DATA60088" name="CB22769ROW49DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW49DATA60088,'CB22769ROW49DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW49DATA60088.value); return false;" name="CB22769ROW49DATA60088X" id="CB22769ROW49DATA60088X"><img src="images/calendar.gif" name="CB22769ROW49DATA60088I" id="CB22769ROW49DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW49DATA61259">
                  <input type="hidden" name="OLDCB22769ROW49DATA61259" id="OLDCB22769ROW49DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW49DATA61259" name="CB22769ROW49DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW49DATA61259,'CB22769ROW49DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW49DATA61259.value); return false;" name="CB22769ROW49DATA61259X" id="CB22769ROW49DATA61259X"><img src="images/calendar.gif" name="CB22769ROW49DATA61259I" id="CB22769ROW49DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW49DATA63175">
                  <input type="hidden" name="OLDCB22769ROW49DATA63175" id="OLDCB22769ROW49DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW49DATA63175" name="CB22769ROW49DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW50" id="CHILDCB22769ROW50" value="1281">
                <td class="text-center " id="TD22769ROW50DATA60085">
                  Duryee, David
                </td>
                <td class="text-center " id="TD22769ROW50DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW50DATA60087">
                  <input type="hidden" name="OLDCB22769ROW50DATA60087" id="OLDCB22769ROW50DATA60087" value="142054483">
                  <input type="text" class="form-control" id="CB22769ROW50DATA60087" name="CB22769ROW50DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142054483" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW50DATA60088">
                  <input type="hidden" name="OLDCB22769ROW50DATA60088" id="OLDCB22769ROW50DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW50DATA60088" name="CB22769ROW50DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW50DATA60088,'CB22769ROW50DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW50DATA60088.value); return false;" name="CB22769ROW50DATA60088X" id="CB22769ROW50DATA60088X"><img src="images/calendar.gif" name="CB22769ROW50DATA60088I" id="CB22769ROW50DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW50DATA61259">
                  <input type="hidden" name="OLDCB22769ROW50DATA61259" id="OLDCB22769ROW50DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW50DATA61259" name="CB22769ROW50DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW50DATA61259,'CB22769ROW50DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW50DATA61259.value); return false;" name="CB22769ROW50DATA61259X" id="CB22769ROW50DATA61259X"><img src="images/calendar.gif" name="CB22769ROW50DATA61259I" id="CB22769ROW50DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW50DATA63175">
                  <input type="hidden" name="OLDCB22769ROW50DATA63175" id="OLDCB22769ROW50DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW50DATA63175" name="CB22769ROW50DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW51" id="CHILDCB22769ROW51" value="1203">
                <td class="text-center " id="TD22769ROW51DATA60085">
                  D'Vincent, Lilli
                </td>
                <td class="text-center " id="TD22769ROW51DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW51DATA60087">
                  <input type="hidden" name="OLDCB22769ROW51DATA60087" id="OLDCB22769ROW51DATA60087" value="141771225">
                  <input type="text" class="form-control" id="CB22769ROW51DATA60087" name="CB22769ROW51DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141771225" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW51DATA60088">
                  <input type="hidden" name="OLDCB22769ROW51DATA60088" id="OLDCB22769ROW51DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW51DATA60088" name="CB22769ROW51DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW51DATA60088,'CB22769ROW51DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW51DATA60088.value); return false;" name="CB22769ROW51DATA60088X" id="CB22769ROW51DATA60088X"><img src="images/calendar.gif" name="CB22769ROW51DATA60088I" id="CB22769ROW51DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW51DATA61259">
                  <input type="hidden" name="OLDCB22769ROW51DATA61259" id="OLDCB22769ROW51DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW51DATA61259" name="CB22769ROW51DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW51DATA61259,'CB22769ROW51DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW51DATA61259.value); return false;" name="CB22769ROW51DATA61259X" id="CB22769ROW51DATA61259X"><img src="images/calendar.gif" name="CB22769ROW51DATA61259I" id="CB22769ROW51DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW51DATA63175">
                  <input type="hidden" name="OLDCB22769ROW51DATA63175" id="OLDCB22769ROW51DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW51DATA63175" name="CB22769ROW51DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW52" id="CHILDCB22769ROW52" value="1185">
                <td class="text-center " id="TD22769ROW52DATA60085">
                  D'Vincent, Mason
                </td>
                <td class="text-center " id="TD22769ROW52DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW52DATA60087">
                  <input type="hidden" name="OLDCB22769ROW52DATA60087" id="OLDCB22769ROW52DATA60087" value="141771227">
                  <input type="text" class="form-control" id="CB22769ROW52DATA60087" name="CB22769ROW52DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141771227" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW52DATA60088">
                  <input type="hidden" name="OLDCB22769ROW52DATA60088" id="OLDCB22769ROW52DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW52DATA60088" name="CB22769ROW52DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW52DATA60088,'CB22769ROW52DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW52DATA60088.value); return false;" name="CB22769ROW52DATA60088X" id="CB22769ROW52DATA60088X"><img src="images/calendar.gif" name="CB22769ROW52DATA60088I" id="CB22769ROW52DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW52DATA61259">
                  <input type="hidden" name="OLDCB22769ROW52DATA61259" id="OLDCB22769ROW52DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW52DATA61259" name="CB22769ROW52DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW52DATA61259,'CB22769ROW52DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW52DATA61259.value); return false;" name="CB22769ROW52DATA61259X" id="CB22769ROW52DATA61259X"><img src="images/calendar.gif" name="CB22769ROW52DATA61259I" id="CB22769ROW52DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW52DATA63175">
                  <input type="hidden" name="OLDCB22769ROW52DATA63175" id="OLDCB22769ROW52DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW52DATA63175" name="CB22769ROW52DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW53" id="CHILDCB22769ROW53" value="654">
                <td class="text-center " id="TD22769ROW53DATA60085">
                  Elrakabawy, Erin
                </td>
                <td class="text-center " id="TD22769ROW53DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW53DATA60087">
                  <input type="hidden" name="OLDCB22769ROW53DATA60087" id="OLDCB22769ROW53DATA60087" value="14422509">
                  <input type="text" class="form-control" id="CB22769ROW53DATA60087" name="CB22769ROW53DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14422509" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW53DATA60088">
                  <input type="hidden" name="OLDCB22769ROW53DATA60088" id="OLDCB22769ROW53DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW53DATA60088" name="CB22769ROW53DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW53DATA60088,'CB22769ROW53DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW53DATA60088.value); return false;" name="CB22769ROW53DATA60088X" id="CB22769ROW53DATA60088X"><img src="images/calendar.gif" name="CB22769ROW53DATA60088I" id="CB22769ROW53DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW53DATA61259">
                  <input type="hidden" name="OLDCB22769ROW53DATA61259" id="OLDCB22769ROW53DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW53DATA61259" name="CB22769ROW53DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW53DATA61259,'CB22769ROW53DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW53DATA61259.value); return false;" name="CB22769ROW53DATA61259X" id="CB22769ROW53DATA61259X"><img src="images/calendar.gif" name="CB22769ROW53DATA61259I" id="CB22769ROW53DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW53DATA63175">
                  <input type="hidden" name="OLDCB22769ROW53DATA63175" id="OLDCB22769ROW53DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW53DATA63175" name="CB22769ROW53DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW54" id="CHILDCB22769ROW54" value="1539">
                <td class="text-center " id="TD22769ROW54DATA60085">
                  Espejel, Dean
                </td>
                <td class="text-center " id="TD22769ROW54DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW54DATA60087">
                  <input type="hidden" name="OLDCB22769ROW54DATA60087" id="OLDCB22769ROW54DATA60087" value="142346316">
                  <input type="text" class="form-control" id="CB22769ROW54DATA60087" name="CB22769ROW54DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142346316" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW54DATA60088">
                  <input type="hidden" name="OLDCB22769ROW54DATA60088" id="OLDCB22769ROW54DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW54DATA60088" name="CB22769ROW54DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW54DATA60088,'CB22769ROW54DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW54DATA60088.value); return false;" name="CB22769ROW54DATA60088X" id="CB22769ROW54DATA60088X"><img src="images/calendar.gif" name="CB22769ROW54DATA60088I" id="CB22769ROW54DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW54DATA61259">
                  <input type="hidden" name="OLDCB22769ROW54DATA61259" id="OLDCB22769ROW54DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW54DATA61259" name="CB22769ROW54DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW54DATA61259,'CB22769ROW54DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW54DATA61259.value); return false;" name="CB22769ROW54DATA61259X" id="CB22769ROW54DATA61259X"><img src="images/calendar.gif" name="CB22769ROW54DATA61259I" id="CB22769ROW54DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW54DATA63175">
                  <input type="hidden" name="OLDCB22769ROW54DATA63175" id="OLDCB22769ROW54DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW54DATA63175" name="CB22769ROW54DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW55" id="CHILDCB22769ROW55" value="1609">
                <td class="text-center " id="TD22769ROW55DATA60085">
                  Espejel, Moshe
                </td>
                <td class="text-center " id="TD22769ROW55DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW55DATA60087">
                  <input type="hidden" name="OLDCB22769ROW55DATA60087" id="OLDCB22769ROW55DATA60087" value="142346315">
                  <input type="text" class="form-control" id="CB22769ROW55DATA60087" name="CB22769ROW55DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142346315" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW55DATA60088">
                  <input type="hidden" name="OLDCB22769ROW55DATA60088" id="OLDCB22769ROW55DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW55DATA60088" name="CB22769ROW55DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW55DATA60088,'CB22769ROW55DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW55DATA60088.value); return false;" name="CB22769ROW55DATA60088X" id="CB22769ROW55DATA60088X"><img src="images/calendar.gif" name="CB22769ROW55DATA60088I" id="CB22769ROW55DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW55DATA61259">
                  <input type="hidden" name="OLDCB22769ROW55DATA61259" id="OLDCB22769ROW55DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW55DATA61259" name="CB22769ROW55DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW55DATA61259,'CB22769ROW55DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW55DATA61259.value); return false;" name="CB22769ROW55DATA61259X" id="CB22769ROW55DATA61259X"><img src="images/calendar.gif" name="CB22769ROW55DATA61259I" id="CB22769ROW55DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW55DATA63175">
                  <input type="hidden" name="OLDCB22769ROW55DATA63175" id="OLDCB22769ROW55DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW55DATA63175" name="CB22769ROW55DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW56" id="CHILDCB22769ROW56" value="564">
                <td class="text-center " id="TD22769ROW56DATA60085">
                  Files, Michael
                </td>
                <td class="text-center " id="TD22769ROW56DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW56DATA60087">
                  <input type="hidden" name="OLDCB22769ROW56DATA60087" id="OLDCB22769ROW56DATA60087" value="116409505">
                  <input type="text" class="form-control" id="CB22769ROW56DATA60087" name="CB22769ROW56DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="116409505" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW56DATA60088">
                  <input type="hidden" name="OLDCB22769ROW56DATA60088" id="OLDCB22769ROW56DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW56DATA60088" name="CB22769ROW56DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW56DATA60088,'CB22769ROW56DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW56DATA60088.value); return false;" name="CB22769ROW56DATA60088X" id="CB22769ROW56DATA60088X"><img src="images/calendar.gif" name="CB22769ROW56DATA60088I" id="CB22769ROW56DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW56DATA61259">
                  <input type="hidden" name="OLDCB22769ROW56DATA61259" id="OLDCB22769ROW56DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW56DATA61259" name="CB22769ROW56DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW56DATA61259,'CB22769ROW56DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW56DATA61259.value); return false;" name="CB22769ROW56DATA61259X" id="CB22769ROW56DATA61259X"><img src="images/calendar.gif" name="CB22769ROW56DATA61259I" id="CB22769ROW56DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW56DATA63175">
                  <input type="hidden" name="OLDCB22769ROW56DATA63175" id="OLDCB22769ROW56DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW56DATA63175" name="CB22769ROW56DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW57" id="CHILDCB22769ROW57" value="1122">
                <td class="text-center " id="TD22769ROW57DATA60085">
                  Files, Michael
                </td>
                <td class="text-center " id="TD22769ROW57DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW57DATA60087">
                  <input type="hidden" name="OLDCB22769ROW57DATA60087" id="OLDCB22769ROW57DATA60087" value="110314236">
                  <input type="text" class="form-control" id="CB22769ROW57DATA60087" name="CB22769ROW57DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="110314236" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW57DATA60088">
                  <input type="hidden" name="OLDCB22769ROW57DATA60088" id="OLDCB22769ROW57DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW57DATA60088" name="CB22769ROW57DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW57DATA60088,'CB22769ROW57DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW57DATA60088.value); return false;" name="CB22769ROW57DATA60088X" id="CB22769ROW57DATA60088X"><img src="images/calendar.gif" name="CB22769ROW57DATA60088I" id="CB22769ROW57DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW57DATA61259">
                  <input type="hidden" name="OLDCB22769ROW57DATA61259" id="OLDCB22769ROW57DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW57DATA61259" name="CB22769ROW57DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW57DATA61259,'CB22769ROW57DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW57DATA61259.value); return false;" name="CB22769ROW57DATA61259X" id="CB22769ROW57DATA61259X"><img src="images/calendar.gif" name="CB22769ROW57DATA61259I" id="CB22769ROW57DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW57DATA63175">
                  <input type="hidden" name="OLDCB22769ROW57DATA63175" id="OLDCB22769ROW57DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW57DATA63175" name="CB22769ROW57DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW58" id="CHILDCB22769ROW58" value="633">
                <td class="text-center " id="TD22769ROW58DATA60085">
                  Files, Mikaela
                </td>
                <td class="text-center " id="TD22769ROW58DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW58DATA60087">
                  <input type="hidden" name="OLDCB22769ROW58DATA60087" id="OLDCB22769ROW58DATA60087" value="14209061">
                  <input type="text" class="form-control" id="CB22769ROW58DATA60087" name="CB22769ROW58DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14209061" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW58DATA60088">
                  <input type="hidden" name="OLDCB22769ROW58DATA60088" id="OLDCB22769ROW58DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW58DATA60088" name="CB22769ROW58DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW58DATA60088,'CB22769ROW58DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW58DATA60088.value); return false;" name="CB22769ROW58DATA60088X" id="CB22769ROW58DATA60088X"><img src="images/calendar.gif" name="CB22769ROW58DATA60088I" id="CB22769ROW58DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW58DATA61259">
                  <input type="hidden" name="OLDCB22769ROW58DATA61259" id="OLDCB22769ROW58DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW58DATA61259" name="CB22769ROW58DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW58DATA61259,'CB22769ROW58DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW58DATA61259.value); return false;" name="CB22769ROW58DATA61259X" id="CB22769ROW58DATA61259X"><img src="images/calendar.gif" name="CB22769ROW58DATA61259I" id="CB22769ROW58DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW58DATA63175">
                  <input type="hidden" name="OLDCB22769ROW58DATA63175" id="OLDCB22769ROW58DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW58DATA63175" name="CB22769ROW58DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW59" id="CHILDCB22769ROW59" value="651">
                <td class="text-center " id="TD22769ROW59DATA60085">
                  Files, Sofia
                </td>
                <td class="text-center " id="TD22769ROW59DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW59DATA60087">
                  <input type="hidden" name="OLDCB22769ROW59DATA60087" id="OLDCB22769ROW59DATA60087" value="14209055">
                  <input type="text" class="form-control" id="CB22769ROW59DATA60087" name="CB22769ROW59DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14209055" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW59DATA60088">
                  <input type="hidden" name="OLDCB22769ROW59DATA60088" id="OLDCB22769ROW59DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW59DATA60088" name="CB22769ROW59DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW59DATA60088,'CB22769ROW59DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW59DATA60088.value); return false;" name="CB22769ROW59DATA60088X" id="CB22769ROW59DATA60088X"><img src="images/calendar.gif" name="CB22769ROW59DATA60088I" id="CB22769ROW59DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW59DATA61259">
                  <input type="hidden" name="OLDCB22769ROW59DATA61259" id="OLDCB22769ROW59DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW59DATA61259" name="CB22769ROW59DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW59DATA61259,'CB22769ROW59DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW59DATA61259.value); return false;" name="CB22769ROW59DATA61259X" id="CB22769ROW59DATA61259X"><img src="images/calendar.gif" name="CB22769ROW59DATA61259I" id="CB22769ROW59DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW59DATA63175">
                  <input type="hidden" name="OLDCB22769ROW59DATA63175" id="OLDCB22769ROW59DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW59DATA63175" name="CB22769ROW59DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW60" id="CHILDCB22769ROW60" value="888">
                <td class="text-center " id="TD22769ROW60DATA60085">
                  Gaete, Holly
                </td>
                <td class="text-center " id="TD22769ROW60DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW60DATA60087">
                  <input type="hidden" name="OLDCB22769ROW60DATA60087" id="OLDCB22769ROW60DATA60087" value="140695045">
                  <input type="text" class="form-control" id="CB22769ROW60DATA60087" name="CB22769ROW60DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140695045" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW60DATA60088">
                  <input type="hidden" name="OLDCB22769ROW60DATA60088" id="OLDCB22769ROW60DATA60088" value="10/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW60DATA60088" name="CB22769ROW60DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="10/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW60DATA60088,'CB22769ROW60DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW60DATA60088.value); return false;" name="CB22769ROW60DATA60088X" id="CB22769ROW60DATA60088X"><img src="images/calendar.gif" name="CB22769ROW60DATA60088I" id="CB22769ROW60DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW60DATA61259">
                  <input type="hidden" name="OLDCB22769ROW60DATA61259" id="OLDCB22769ROW60DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW60DATA61259" name="CB22769ROW60DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW60DATA61259,'CB22769ROW60DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW60DATA61259.value); return false;" name="CB22769ROW60DATA61259X" id="CB22769ROW60DATA61259X"><img src="images/calendar.gif" name="CB22769ROW60DATA61259I" id="CB22769ROW60DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW60DATA63175">
                  <input type="hidden" name="OLDCB22769ROW60DATA63175" id="OLDCB22769ROW60DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW60DATA63175" name="CB22769ROW60DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW61" id="CHILDCB22769ROW61" value="886">
                <td class="text-center " id="TD22769ROW61DATA60085">
                  Gaete, Lincoln
                </td>
                <td class="text-center " id="TD22769ROW61DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW61DATA60087">
                  <input type="hidden" name="OLDCB22769ROW61DATA60087" id="OLDCB22769ROW61DATA60087" value="140695049">
                  <input type="text" class="form-control" id="CB22769ROW61DATA60087" name="CB22769ROW61DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140695049" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW61DATA60088">
                  <input type="hidden" name="OLDCB22769ROW61DATA60088" id="OLDCB22769ROW61DATA60088" value="11/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW61DATA60088" name="CB22769ROW61DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="11/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW61DATA60088,'CB22769ROW61DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW61DATA60088.value); return false;" name="CB22769ROW61DATA60088X" id="CB22769ROW61DATA60088X"><img src="images/calendar.gif" name="CB22769ROW61DATA60088I" id="CB22769ROW61DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW61DATA61259">
                  <input type="hidden" name="OLDCB22769ROW61DATA61259" id="OLDCB22769ROW61DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW61DATA61259" name="CB22769ROW61DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW61DATA61259,'CB22769ROW61DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW61DATA61259.value); return false;" name="CB22769ROW61DATA61259X" id="CB22769ROW61DATA61259X"><img src="images/calendar.gif" name="CB22769ROW61DATA61259I" id="CB22769ROW61DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW61DATA63175">
                  <input type="hidden" name="OLDCB22769ROW61DATA63175" id="OLDCB22769ROW61DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW61DATA63175" name="CB22769ROW61DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW62" id="CHILDCB22769ROW62" value="893">
                <td class="text-center " id="TD22769ROW62DATA60085">
                  Galdo, Anne
                </td>
                <td class="text-center " id="TD22769ROW62DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW62DATA60087">
                  <input type="hidden" name="OLDCB22769ROW62DATA60087" id="OLDCB22769ROW62DATA60087" value="140809555">
                  <input type="text" class="form-control" id="CB22769ROW62DATA60087" name="CB22769ROW62DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140809555" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW62DATA60088">
                  <input type="hidden" name="OLDCB22769ROW62DATA60088" id="OLDCB22769ROW62DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW62DATA60088" name="CB22769ROW62DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW62DATA60088,'CB22769ROW62DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW62DATA60088.value); return false;" name="CB22769ROW62DATA60088X" id="CB22769ROW62DATA60088X"><img src="images/calendar.gif" name="CB22769ROW62DATA60088I" id="CB22769ROW62DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW62DATA61259">
                  <input type="hidden" name="OLDCB22769ROW62DATA61259" id="OLDCB22769ROW62DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW62DATA61259" name="CB22769ROW62DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW62DATA61259,'CB22769ROW62DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW62DATA61259.value); return false;" name="CB22769ROW62DATA61259X" id="CB22769ROW62DATA61259X"><img src="images/calendar.gif" name="CB22769ROW62DATA61259I" id="CB22769ROW62DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW62DATA63175">
                  <input type="hidden" name="OLDCB22769ROW62DATA63175" id="OLDCB22769ROW62DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW62DATA63175" name="CB22769ROW62DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW63" id="CHILDCB22769ROW63" value="1088">
                <td class="text-center " id="TD22769ROW63DATA60085">
                  Galdo, Henry
                </td>
                <td class="text-center " id="TD22769ROW63DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW63DATA60087">
                  <input type="hidden" name="OLDCB22769ROW63DATA60087" id="OLDCB22769ROW63DATA60087" value="141468690">
                  <input type="text" class="form-control" id="CB22769ROW63DATA60087" name="CB22769ROW63DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141468690" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW63DATA60088">
                  <input type="hidden" name="OLDCB22769ROW63DATA60088" id="OLDCB22769ROW63DATA60088" value="12/31/2025">
                  <input type="text" class="form-control" id="CB22769ROW63DATA60088" name="CB22769ROW63DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2025" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW63DATA60088,'CB22769ROW63DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW63DATA60088.value); return false;" name="CB22769ROW63DATA60088X" id="CB22769ROW63DATA60088X"><img src="images/calendar.gif" name="CB22769ROW63DATA60088I" id="CB22769ROW63DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW63DATA61259">
                  <input type="hidden" name="OLDCB22769ROW63DATA61259" id="OLDCB22769ROW63DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW63DATA61259" name="CB22769ROW63DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW63DATA61259,'CB22769ROW63DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW63DATA61259.value); return false;" name="CB22769ROW63DATA61259X" id="CB22769ROW63DATA61259X"><img src="images/calendar.gif" name="CB22769ROW63DATA61259I" id="CB22769ROW63DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW63DATA63175">
                  <input type="hidden" name="OLDCB22769ROW63DATA63175" id="OLDCB22769ROW63DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW63DATA63175" name="CB22769ROW63DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW64" id="CHILDCB22769ROW64" value="1114">
                <td class="text-center " id="TD22769ROW64DATA60085">
                  Gibson, Charleston
                </td>
                <td class="text-center " id="TD22769ROW64DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW64DATA60087">
                  <input type="hidden" name="OLDCB22769ROW64DATA60087" id="OLDCB22769ROW64DATA60087" value="141548946">
                  <input type="text" class="form-control" id="CB22769ROW64DATA60087" name="CB22769ROW64DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141548946" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW64DATA60088">
                  <input type="hidden" name="OLDCB22769ROW64DATA60088" id="OLDCB22769ROW64DATA60088" value="03/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW64DATA60088" name="CB22769ROW64DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="03/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW64DATA60088,'CB22769ROW64DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW64DATA60088.value); return false;" name="CB22769ROW64DATA60088X" id="CB22769ROW64DATA60088X"><img src="images/calendar.gif" name="CB22769ROW64DATA60088I" id="CB22769ROW64DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW64DATA61259">
                  <input type="hidden" name="OLDCB22769ROW64DATA61259" id="OLDCB22769ROW64DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW64DATA61259" name="CB22769ROW64DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW64DATA61259,'CB22769ROW64DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW64DATA61259.value); return false;" name="CB22769ROW64DATA61259X" id="CB22769ROW64DATA61259X"><img src="images/calendar.gif" name="CB22769ROW64DATA61259I" id="CB22769ROW64DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW64DATA63175">
                  <input type="hidden" name="OLDCB22769ROW64DATA63175" id="OLDCB22769ROW64DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW64DATA63175" name="CB22769ROW64DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW65" id="CHILDCB22769ROW65" value="1123">
                <td class="text-center " id="TD22769ROW65DATA60085">
                  Gibson, Steven
                </td>
                <td class="text-center " id="TD22769ROW65DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW65DATA60087">
                  <input type="hidden" name="OLDCB22769ROW65DATA60087" id="OLDCB22769ROW65DATA60087" value="141548945">
                  <input type="text" class="form-control" id="CB22769ROW65DATA60087" name="CB22769ROW65DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141548945" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW65DATA60088">
                  <input type="hidden" name="OLDCB22769ROW65DATA60088" id="OLDCB22769ROW65DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW65DATA60088" name="CB22769ROW65DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW65DATA60088,'CB22769ROW65DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW65DATA60088.value); return false;" name="CB22769ROW65DATA60088X" id="CB22769ROW65DATA60088X"><img src="images/calendar.gif" name="CB22769ROW65DATA60088I" id="CB22769ROW65DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW65DATA61259">
                  <input type="hidden" name="OLDCB22769ROW65DATA61259" id="OLDCB22769ROW65DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW65DATA61259" name="CB22769ROW65DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW65DATA61259,'CB22769ROW65DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW65DATA61259.value); return false;" name="CB22769ROW65DATA61259X" id="CB22769ROW65DATA61259X"><img src="images/calendar.gif" name="CB22769ROW65DATA61259I" id="CB22769ROW65DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW65DATA63175">
                  <input type="hidden" name="OLDCB22769ROW65DATA63175" id="OLDCB22769ROW65DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW65DATA63175" name="CB22769ROW65DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW66" id="CHILDCB22769ROW66" value="832">
                <td class="text-center " id="TD22769ROW66DATA60085">
                  Goodine, David
                </td>
                <td class="text-center " id="TD22769ROW66DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW66DATA60087">
                  <input type="hidden" name="OLDCB22769ROW66DATA60087" id="OLDCB22769ROW66DATA60087" value="140399050">
                  <input type="text" class="form-control" id="CB22769ROW66DATA60087" name="CB22769ROW66DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140399050" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW66DATA60088">
                  <input type="hidden" name="OLDCB22769ROW66DATA60088" id="OLDCB22769ROW66DATA60088" value="07/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW66DATA60088" name="CB22769ROW66DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="07/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW66DATA60088,'CB22769ROW66DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW66DATA60088.value); return false;" name="CB22769ROW66DATA60088X" id="CB22769ROW66DATA60088X"><img src="images/calendar.gif" name="CB22769ROW66DATA60088I" id="CB22769ROW66DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW66DATA61259">
                  <input type="hidden" name="OLDCB22769ROW66DATA61259" id="OLDCB22769ROW66DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW66DATA61259" name="CB22769ROW66DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW66DATA61259,'CB22769ROW66DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW66DATA61259.value); return false;" name="CB22769ROW66DATA61259X" id="CB22769ROW66DATA61259X"><img src="images/calendar.gif" name="CB22769ROW66DATA61259I" id="CB22769ROW66DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW66DATA63175">
                  <input type="hidden" name="OLDCB22769ROW66DATA63175" id="OLDCB22769ROW66DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW66DATA63175" name="CB22769ROW66DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW67" id="CHILDCB22769ROW67" value="811">
                <td class="text-center " id="TD22769ROW67DATA60085">
                  Goodine, Jack
                </td>
                <td class="text-center " id="TD22769ROW67DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW67DATA60087">
                  <input type="hidden" name="OLDCB22769ROW67DATA60087" id="OLDCB22769ROW67DATA60087" value="140399051">
                  <input type="text" class="form-control" id="CB22769ROW67DATA60087" name="CB22769ROW67DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140399051" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW67DATA60088">
                  <input type="hidden" name="OLDCB22769ROW67DATA60088" id="OLDCB22769ROW67DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW67DATA60088" name="CB22769ROW67DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW67DATA60088,'CB22769ROW67DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW67DATA60088.value); return false;" name="CB22769ROW67DATA60088X" id="CB22769ROW67DATA60088X"><img src="images/calendar.gif" name="CB22769ROW67DATA60088I" id="CB22769ROW67DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW67DATA61259">
                  <input type="hidden" name="OLDCB22769ROW67DATA61259" id="OLDCB22769ROW67DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW67DATA61259" name="CB22769ROW67DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW67DATA61259,'CB22769ROW67DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW67DATA61259.value); return false;" name="CB22769ROW67DATA61259X" id="CB22769ROW67DATA61259X"><img src="images/calendar.gif" name="CB22769ROW67DATA61259I" id="CB22769ROW67DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW67DATA63175">
                  <input type="hidden" name="OLDCB22769ROW67DATA63175" id="OLDCB22769ROW67DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW67DATA63175" name="CB22769ROW67DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW68" id="CHILDCB22769ROW68" value="1187">
                <td class="text-center " id="TD22769ROW68DATA60085">
                  Gurrola, Benjamin
                </td>
                <td class="text-center " id="TD22769ROW68DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW68DATA60087">
                  <input type="hidden" name="OLDCB22769ROW68DATA60087" id="OLDCB22769ROW68DATA60087" value="141774591">
                  <input type="text" class="form-control" id="CB22769ROW68DATA60087" name="CB22769ROW68DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141774591" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW68DATA60088">
                  <input type="hidden" name="OLDCB22769ROW68DATA60088" id="OLDCB22769ROW68DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW68DATA60088" name="CB22769ROW68DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW68DATA60088,'CB22769ROW68DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW68DATA60088.value); return false;" name="CB22769ROW68DATA60088X" id="CB22769ROW68DATA60088X"><img src="images/calendar.gif" name="CB22769ROW68DATA60088I" id="CB22769ROW68DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW68DATA61259">
                  <input type="hidden" name="OLDCB22769ROW68DATA61259" id="OLDCB22769ROW68DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW68DATA61259" name="CB22769ROW68DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW68DATA61259,'CB22769ROW68DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW68DATA61259.value); return false;" name="CB22769ROW68DATA61259X" id="CB22769ROW68DATA61259X"><img src="images/calendar.gif" name="CB22769ROW68DATA61259I" id="CB22769ROW68DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW68DATA63175">
                  <input type="hidden" name="OLDCB22769ROW68DATA63175" id="OLDCB22769ROW68DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW68DATA63175" name="CB22769ROW68DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW69" id="CHILDCB22769ROW69" value="1204">
                <td class="text-center " id="TD22769ROW69DATA60085">
                  Gurrola, Jacqueline
                </td>
                <td class="text-center " id="TD22769ROW69DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW69DATA60087">
                  <input type="hidden" name="OLDCB22769ROW69DATA60087" id="OLDCB22769ROW69DATA60087" value="141774589">
                  <input type="text" class="form-control" id="CB22769ROW69DATA60087" name="CB22769ROW69DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141774589" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW69DATA60088">
                  <input type="hidden" name="OLDCB22769ROW69DATA60088" id="OLDCB22769ROW69DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW69DATA60088" name="CB22769ROW69DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW69DATA60088,'CB22769ROW69DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW69DATA60088.value); return false;" name="CB22769ROW69DATA60088X" id="CB22769ROW69DATA60088X"><img src="images/calendar.gif" name="CB22769ROW69DATA60088I" id="CB22769ROW69DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW69DATA61259">
                  <input type="hidden" name="OLDCB22769ROW69DATA61259" id="OLDCB22769ROW69DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW69DATA61259" name="CB22769ROW69DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW69DATA61259,'CB22769ROW69DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW69DATA61259.value); return false;" name="CB22769ROW69DATA61259X" id="CB22769ROW69DATA61259X"><img src="images/calendar.gif" name="CB22769ROW69DATA61259I" id="CB22769ROW69DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW69DATA63175">
                  <input type="hidden" name="OLDCB22769ROW69DATA63175" id="OLDCB22769ROW69DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW69DATA63175" name="CB22769ROW69DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW70" id="CHILDCB22769ROW70" value="1232">
                <td class="text-center " id="TD22769ROW70DATA60085">
                  Gurrola, Matthew
                </td>
                <td class="text-center " id="TD22769ROW70DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW70DATA60087">
                  <input type="hidden" name="OLDCB22769ROW70DATA60087" id="OLDCB22769ROW70DATA60087" value="">
                  <input type="text" class="form-control" id="CB22769ROW70DATA60087" name="CB22769ROW70DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW70DATA60088">
                  <input type="hidden" name="OLDCB22769ROW70DATA60088" id="OLDCB22769ROW70DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW70DATA60088" name="CB22769ROW70DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW70DATA60088,'CB22769ROW70DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW70DATA60088.value); return false;" name="CB22769ROW70DATA60088X" id="CB22769ROW70DATA60088X"><img src="images/calendar.gif" name="CB22769ROW70DATA60088I" id="CB22769ROW70DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW70DATA61259">
                  <input type="hidden" name="OLDCB22769ROW70DATA61259" id="OLDCB22769ROW70DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW70DATA61259" name="CB22769ROW70DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW70DATA61259,'CB22769ROW70DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW70DATA61259.value); return false;" name="CB22769ROW70DATA61259X" id="CB22769ROW70DATA61259X"><img src="images/calendar.gif" name="CB22769ROW70DATA61259I" id="CB22769ROW70DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW70DATA63175">
                  <input type="hidden" name="OLDCB22769ROW70DATA63175" id="OLDCB22769ROW70DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW70DATA63175" name="CB22769ROW70DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW71" id="CHILDCB22769ROW71" value="1157">
                <td class="text-center " id="TD22769ROW71DATA60085">
                  Hallar, Henry
                </td>
                <td class="text-center " id="TD22769ROW71DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW71DATA60087">
                  <input type="hidden" name="OLDCB22769ROW71DATA60087" id="OLDCB22769ROW71DATA60087" value="141080318">
                  <input type="text" class="form-control" id="CB22769ROW71DATA60087" name="CB22769ROW71DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141080318" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW71DATA60088">
                  <input type="hidden" name="OLDCB22769ROW71DATA60088" id="OLDCB22769ROW71DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW71DATA60088" name="CB22769ROW71DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW71DATA60088,'CB22769ROW71DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW71DATA60088.value); return false;" name="CB22769ROW71DATA60088X" id="CB22769ROW71DATA60088X"><img src="images/calendar.gif" name="CB22769ROW71DATA60088I" id="CB22769ROW71DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW71DATA61259">
                  <input type="hidden" name="OLDCB22769ROW71DATA61259" id="OLDCB22769ROW71DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW71DATA61259" name="CB22769ROW71DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW71DATA61259,'CB22769ROW71DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW71DATA61259.value); return false;" name="CB22769ROW71DATA61259X" id="CB22769ROW71DATA61259X"><img src="images/calendar.gif" name="CB22769ROW71DATA61259I" id="CB22769ROW71DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW71DATA63175">
                  <input type="hidden" name="OLDCB22769ROW71DATA63175" id="OLDCB22769ROW71DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW71DATA63175" name="CB22769ROW71DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW72" id="CHILDCB22769ROW72" value="1170">
                <td class="text-center " id="TD22769ROW72DATA60085">
                  Hallar, Ingrid
                </td>
                <td class="text-center " id="TD22769ROW72DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW72DATA60087">
                  <input type="hidden" name="OLDCB22769ROW72DATA60087" id="OLDCB22769ROW72DATA60087" value="141080308">
                  <input type="text" class="form-control" id="CB22769ROW72DATA60087" name="CB22769ROW72DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141080308" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW72DATA60088">
                  <input type="hidden" name="OLDCB22769ROW72DATA60088" id="OLDCB22769ROW72DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW72DATA60088" name="CB22769ROW72DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW72DATA60088,'CB22769ROW72DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW72DATA60088.value); return false;" name="CB22769ROW72DATA60088X" id="CB22769ROW72DATA60088X"><img src="images/calendar.gif" name="CB22769ROW72DATA60088I" id="CB22769ROW72DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW72DATA61259">
                  <input type="hidden" name="OLDCB22769ROW72DATA61259" id="OLDCB22769ROW72DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW72DATA61259" name="CB22769ROW72DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW72DATA61259,'CB22769ROW72DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW72DATA61259.value); return false;" name="CB22769ROW72DATA61259X" id="CB22769ROW72DATA61259X"><img src="images/calendar.gif" name="CB22769ROW72DATA61259I" id="CB22769ROW72DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW72DATA63175">
                  <input type="hidden" name="OLDCB22769ROW72DATA63175" id="OLDCB22769ROW72DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW72DATA63175" name="CB22769ROW72DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW73" id="CHILDCB22769ROW73" value="1171">
                <td class="text-center " id="TD22769ROW73DATA60085">
                  Hanss Blair, Rachel
                </td>
                <td class="text-center " id="TD22769ROW73DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW73DATA60087">
                  <input type="hidden" name="OLDCB22769ROW73DATA60087" id="OLDCB22769ROW73DATA60087" value="141705269">
                  <input type="text" class="form-control" id="CB22769ROW73DATA60087" name="CB22769ROW73DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141705269" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW73DATA60088">
                  <input type="hidden" name="OLDCB22769ROW73DATA60088" id="OLDCB22769ROW73DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW73DATA60088" name="CB22769ROW73DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW73DATA60088,'CB22769ROW73DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW73DATA60088.value); return false;" name="CB22769ROW73DATA60088X" id="CB22769ROW73DATA60088X"><img src="images/calendar.gif" name="CB22769ROW73DATA60088I" id="CB22769ROW73DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW73DATA61259">
                  <input type="hidden" name="OLDCB22769ROW73DATA61259" id="OLDCB22769ROW73DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW73DATA61259" name="CB22769ROW73DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW73DATA61259,'CB22769ROW73DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW73DATA61259.value); return false;" name="CB22769ROW73DATA61259X" id="CB22769ROW73DATA61259X"><img src="images/calendar.gif" name="CB22769ROW73DATA61259I" id="CB22769ROW73DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW73DATA63175">
                  <input type="hidden" name="OLDCB22769ROW73DATA63175" id="OLDCB22769ROW73DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW73DATA63175" name="CB22769ROW73DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW74" id="CHILDCB22769ROW74" value="944">
                <td class="text-center " id="TD22769ROW74DATA60085">
                  Harrison, Abi
                </td>
                <td class="text-center " id="TD22769ROW74DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW74DATA60087">
                  <input type="hidden" name="OLDCB22769ROW74DATA60087" id="OLDCB22769ROW74DATA60087" value="141054734">
                  <input type="text" class="form-control" id="CB22769ROW74DATA60087" name="CB22769ROW74DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141054734" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW74DATA60088">
                  <input type="hidden" name="OLDCB22769ROW74DATA60088" id="OLDCB22769ROW74DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW74DATA60088" name="CB22769ROW74DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW74DATA60088,'CB22769ROW74DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW74DATA60088.value); return false;" name="CB22769ROW74DATA60088X" id="CB22769ROW74DATA60088X"><img src="images/calendar.gif" name="CB22769ROW74DATA60088I" id="CB22769ROW74DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW74DATA61259">
                  <input type="hidden" name="OLDCB22769ROW74DATA61259" id="OLDCB22769ROW74DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW74DATA61259" name="CB22769ROW74DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW74DATA61259,'CB22769ROW74DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW74DATA61259.value); return false;" name="CB22769ROW74DATA61259X" id="CB22769ROW74DATA61259X"><img src="images/calendar.gif" name="CB22769ROW74DATA61259I" id="CB22769ROW74DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW74DATA63175">
                  <input type="hidden" name="OLDCB22769ROW74DATA63175" id="OLDCB22769ROW74DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW74DATA63175" name="CB22769ROW74DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW75" id="CHILDCB22769ROW75" value="940">
                <td class="text-center " id="TD22769ROW75DATA60085">
                  Harrison, James
                </td>
                <td class="text-center " id="TD22769ROW75DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW75DATA60087">
                  <input type="hidden" name="OLDCB22769ROW75DATA60087" id="OLDCB22769ROW75DATA60087" value="141054746">
                  <input type="text" class="form-control" id="CB22769ROW75DATA60087" name="CB22769ROW75DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141054746" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW75DATA60088">
                  <input type="hidden" name="OLDCB22769ROW75DATA60088" id="OLDCB22769ROW75DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW75DATA60088" name="CB22769ROW75DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW75DATA60088,'CB22769ROW75DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW75DATA60088.value); return false;" name="CB22769ROW75DATA60088X" id="CB22769ROW75DATA60088X"><img src="images/calendar.gif" name="CB22769ROW75DATA60088I" id="CB22769ROW75DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW75DATA61259">
                  <input type="hidden" name="OLDCB22769ROW75DATA61259" id="OLDCB22769ROW75DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW75DATA61259" name="CB22769ROW75DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW75DATA61259,'CB22769ROW75DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW75DATA61259.value); return false;" name="CB22769ROW75DATA61259X" id="CB22769ROW75DATA61259X"><img src="images/calendar.gif" name="CB22769ROW75DATA61259I" id="CB22769ROW75DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW75DATA63175">
                  <input type="hidden" name="OLDCB22769ROW75DATA63175" id="OLDCB22769ROW75DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW75DATA63175" name="CB22769ROW75DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW76" id="CHILDCB22769ROW76" value="1084">
                <td class="text-center " id="TD22769ROW76DATA60085">
                  Hayes, David
                </td>
                <td class="text-center " id="TD22769ROW76DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW76DATA60087">
                  <input type="hidden" name="OLDCB22769ROW76DATA60087" id="OLDCB22769ROW76DATA60087" value="141364316">
                  <input type="text" class="form-control" id="CB22769ROW76DATA60087" name="CB22769ROW76DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141364316" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW76DATA60088">
                  <input type="hidden" name="OLDCB22769ROW76DATA60088" id="OLDCB22769ROW76DATA60088" value="10/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW76DATA60088" name="CB22769ROW76DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="10/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW76DATA60088,'CB22769ROW76DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW76DATA60088.value); return false;" name="CB22769ROW76DATA60088X" id="CB22769ROW76DATA60088X"><img src="images/calendar.gif" name="CB22769ROW76DATA60088I" id="CB22769ROW76DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW76DATA61259">
                  <input type="hidden" name="OLDCB22769ROW76DATA61259" id="OLDCB22769ROW76DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW76DATA61259" name="CB22769ROW76DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW76DATA61259,'CB22769ROW76DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW76DATA61259.value); return false;" name="CB22769ROW76DATA61259X" id="CB22769ROW76DATA61259X"><img src="images/calendar.gif" name="CB22769ROW76DATA61259I" id="CB22769ROW76DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW76DATA63175">
                  <input type="hidden" name="OLDCB22769ROW76DATA63175" id="OLDCB22769ROW76DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW76DATA63175" name="CB22769ROW76DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW77" id="CHILDCB22769ROW77" value="833">
                <td class="text-center " id="TD22769ROW77DATA60085">
                  Hickman, Trey
                </td>
                <td class="text-center " id="TD22769ROW77DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW77DATA60087">
                  <input type="hidden" name="OLDCB22769ROW77DATA60087" id="OLDCB22769ROW77DATA60087" value="140398057">
                  <input type="text" class="form-control" id="CB22769ROW77DATA60087" name="CB22769ROW77DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140398057" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW77DATA60088">
                  <input type="hidden" name="OLDCB22769ROW77DATA60088" id="OLDCB22769ROW77DATA60088" value="10/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW77DATA60088" name="CB22769ROW77DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="10/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW77DATA60088,'CB22769ROW77DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW77DATA60088.value); return false;" name="CB22769ROW77DATA60088X" id="CB22769ROW77DATA60088X"><img src="images/calendar.gif" name="CB22769ROW77DATA60088I" id="CB22769ROW77DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW77DATA61259">
                  <input type="hidden" name="OLDCB22769ROW77DATA61259" id="OLDCB22769ROW77DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW77DATA61259" name="CB22769ROW77DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW77DATA61259,'CB22769ROW77DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW77DATA61259.value); return false;" name="CB22769ROW77DATA61259X" id="CB22769ROW77DATA61259X"><img src="images/calendar.gif" name="CB22769ROW77DATA61259I" id="CB22769ROW77DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW77DATA63175">
                  <input type="hidden" name="OLDCB22769ROW77DATA63175" id="OLDCB22769ROW77DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW77DATA63175" name="CB22769ROW77DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW78" id="CHILDCB22769ROW78" value="1188">
                <td class="text-center " id="TD22769ROW78DATA60085">
                  Hickman, Maya
                </td>
                <td class="text-center " id="TD22769ROW78DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW78DATA60087">
                  <input type="hidden" name="OLDCB22769ROW78DATA60087" id="OLDCB22769ROW78DATA60087" value="141745152">
                  <input type="text" class="form-control" id="CB22769ROW78DATA60087" name="CB22769ROW78DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141745152" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW78DATA60088">
                  <input type="hidden" name="OLDCB22769ROW78DATA60088" id="OLDCB22769ROW78DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW78DATA60088" name="CB22769ROW78DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW78DATA60088,'CB22769ROW78DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW78DATA60088.value); return false;" name="CB22769ROW78DATA60088X" id="CB22769ROW78DATA60088X"><img src="images/calendar.gif" name="CB22769ROW78DATA60088I" id="CB22769ROW78DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW78DATA61259">
                  <input type="hidden" name="OLDCB22769ROW78DATA61259" id="OLDCB22769ROW78DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW78DATA61259" name="CB22769ROW78DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW78DATA61259,'CB22769ROW78DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW78DATA61259.value); return false;" name="CB22769ROW78DATA61259X" id="CB22769ROW78DATA61259X"><img src="images/calendar.gif" name="CB22769ROW78DATA61259I" id="CB22769ROW78DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW78DATA63175">
                  <input type="hidden" name="OLDCB22769ROW78DATA63175" id="OLDCB22769ROW78DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW78DATA63175" name="CB22769ROW78DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW79" id="CHILDCB22769ROW79" value="1285">
                <td class="text-center " id="TD22769ROW79DATA60085">
                  Hoy, Ashton
                </td>
                <td class="text-center " id="TD22769ROW79DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW79DATA60087">
                  <input type="hidden" name="OLDCB22769ROW79DATA60087" id="OLDCB22769ROW79DATA60087" value="142214954">
                  <input type="text" class="form-control" id="CB22769ROW79DATA60087" name="CB22769ROW79DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142214954" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW79DATA60088">
                  <input type="hidden" name="OLDCB22769ROW79DATA60088" id="OLDCB22769ROW79DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW79DATA60088" name="CB22769ROW79DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW79DATA60088,'CB22769ROW79DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW79DATA60088.value); return false;" name="CB22769ROW79DATA60088X" id="CB22769ROW79DATA60088X"><img src="images/calendar.gif" name="CB22769ROW79DATA60088I" id="CB22769ROW79DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW79DATA61259">
                  <input type="hidden" name="OLDCB22769ROW79DATA61259" id="OLDCB22769ROW79DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW79DATA61259" name="CB22769ROW79DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW79DATA61259,'CB22769ROW79DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW79DATA61259.value); return false;" name="CB22769ROW79DATA61259X" id="CB22769ROW79DATA61259X"><img src="images/calendar.gif" name="CB22769ROW79DATA61259I" id="CB22769ROW79DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW79DATA63175">
                  <input type="hidden" name="OLDCB22769ROW79DATA63175" id="OLDCB22769ROW79DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW79DATA63175" name="CB22769ROW79DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW80" id="CHILDCB22769ROW80" value="1287">
                <td class="text-center " id="TD22769ROW80DATA60085">
                  Hoy, Nicole
                </td>
                <td class="text-center " id="TD22769ROW80DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW80DATA60087">
                  <input type="hidden" name="OLDCB22769ROW80DATA60087" id="OLDCB22769ROW80DATA60087" value="142214952">
                  <input type="text" class="form-control" id="CB22769ROW80DATA60087" name="CB22769ROW80DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142214952" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW80DATA60088">
                  <input type="hidden" name="OLDCB22769ROW80DATA60088" id="OLDCB22769ROW80DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW80DATA60088" name="CB22769ROW80DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW80DATA60088,'CB22769ROW80DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW80DATA60088.value); return false;" name="CB22769ROW80DATA60088X" id="CB22769ROW80DATA60088X"><img src="images/calendar.gif" name="CB22769ROW80DATA60088I" id="CB22769ROW80DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW80DATA61259">
                  <input type="hidden" name="OLDCB22769ROW80DATA61259" id="OLDCB22769ROW80DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW80DATA61259" name="CB22769ROW80DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW80DATA61259,'CB22769ROW80DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW80DATA61259.value); return false;" name="CB22769ROW80DATA61259X" id="CB22769ROW80DATA61259X"><img src="images/calendar.gif" name="CB22769ROW80DATA61259I" id="CB22769ROW80DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW80DATA63175">
                  <input type="hidden" name="OLDCB22769ROW80DATA63175" id="OLDCB22769ROW80DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW80DATA63175" name="CB22769ROW80DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW81" id="CHILDCB22769ROW81" value="1216">
                <td class="text-center " id="TD22769ROW81DATA60085">
                  Hume, Beatrix
                </td>
                <td class="text-center " id="TD22769ROW81DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW81DATA60087">
                  <input type="hidden" name="OLDCB22769ROW81DATA60087" id="OLDCB22769ROW81DATA60087" value="141781963">
                  <input type="text" class="form-control" id="CB22769ROW81DATA60087" name="CB22769ROW81DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141781963" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW81DATA60088">
                  <input type="hidden" name="OLDCB22769ROW81DATA60088" id="OLDCB22769ROW81DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW81DATA60088" name="CB22769ROW81DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW81DATA60088,'CB22769ROW81DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW81DATA60088.value); return false;" name="CB22769ROW81DATA60088X" id="CB22769ROW81DATA60088X"><img src="images/calendar.gif" name="CB22769ROW81DATA60088I" id="CB22769ROW81DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW81DATA61259">
                  <input type="hidden" name="OLDCB22769ROW81DATA61259" id="OLDCB22769ROW81DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW81DATA61259" name="CB22769ROW81DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW81DATA61259,'CB22769ROW81DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW81DATA61259.value); return false;" name="CB22769ROW81DATA61259X" id="CB22769ROW81DATA61259X"><img src="images/calendar.gif" name="CB22769ROW81DATA61259I" id="CB22769ROW81DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW81DATA63175">
                  <input type="hidden" name="OLDCB22769ROW81DATA63175" id="OLDCB22769ROW81DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW81DATA63175" name="CB22769ROW81DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW82" id="CHILDCB22769ROW82" value="1225">
                <td class="text-center " id="TD22769ROW82DATA60085">
                  Hume, John
                </td>
                <td class="text-center " id="TD22769ROW82DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW82DATA60087">
                  <input type="hidden" name="OLDCB22769ROW82DATA60087" id="OLDCB22769ROW82DATA60087" value="141781951">
                  <input type="text" class="form-control" id="CB22769ROW82DATA60087" name="CB22769ROW82DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141781951" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW82DATA60088">
                  <input type="hidden" name="OLDCB22769ROW82DATA60088" id="OLDCB22769ROW82DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW82DATA60088" name="CB22769ROW82DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW82DATA60088,'CB22769ROW82DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW82DATA60088.value); return false;" name="CB22769ROW82DATA60088X" id="CB22769ROW82DATA60088X"><img src="images/calendar.gif" name="CB22769ROW82DATA60088I" id="CB22769ROW82DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW82DATA61259">
                  <input type="hidden" name="OLDCB22769ROW82DATA61259" id="OLDCB22769ROW82DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW82DATA61259" name="CB22769ROW82DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW82DATA61259,'CB22769ROW82DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW82DATA61259.value); return false;" name="CB22769ROW82DATA61259X" id="CB22769ROW82DATA61259X"><img src="images/calendar.gif" name="CB22769ROW82DATA61259I" id="CB22769ROW82DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW82DATA63175">
                  <input type="hidden" name="OLDCB22769ROW82DATA63175" id="OLDCB22769ROW82DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW82DATA63175" name="CB22769ROW82DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW83" id="CHILDCB22769ROW83" value="1205">
                <td class="text-center " id="TD22769ROW83DATA60085">
                  Idell, Claire
                </td>
                <td class="text-center " id="TD22769ROW83DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW83DATA60087">
                  <input type="hidden" name="OLDCB22769ROW83DATA60087" id="OLDCB22769ROW83DATA60087" value="141766357">
                  <input type="text" class="form-control" id="CB22769ROW83DATA60087" name="CB22769ROW83DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141766357" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW83DATA60088">
                  <input type="hidden" name="OLDCB22769ROW83DATA60088" id="OLDCB22769ROW83DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW83DATA60088" name="CB22769ROW83DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW83DATA60088,'CB22769ROW83DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW83DATA60088.value); return false;" name="CB22769ROW83DATA60088X" id="CB22769ROW83DATA60088X"><img src="images/calendar.gif" name="CB22769ROW83DATA60088I" id="CB22769ROW83DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW83DATA61259">
                  <input type="hidden" name="OLDCB22769ROW83DATA61259" id="OLDCB22769ROW83DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW83DATA61259" name="CB22769ROW83DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW83DATA61259,'CB22769ROW83DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW83DATA61259.value); return false;" name="CB22769ROW83DATA61259X" id="CB22769ROW83DATA61259X"><img src="images/calendar.gif" name="CB22769ROW83DATA61259I" id="CB22769ROW83DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW83DATA63175">
                  <input type="hidden" name="OLDCB22769ROW83DATA63175" id="OLDCB22769ROW83DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW83DATA63175" name="CB22769ROW83DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW84" id="CHILDCB22769ROW84" value="1189">
                <td class="text-center " id="TD22769ROW84DATA60085">
                  Idell, Gabe
                </td>
                <td class="text-center " id="TD22769ROW84DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW84DATA60087">
                  <input type="hidden" name="OLDCB22769ROW84DATA60087" id="OLDCB22769ROW84DATA60087" value="141766378">
                  <input type="text" class="form-control" id="CB22769ROW84DATA60087" name="CB22769ROW84DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141766378" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW84DATA60088">
                  <input type="hidden" name="OLDCB22769ROW84DATA60088" id="OLDCB22769ROW84DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW84DATA60088" name="CB22769ROW84DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW84DATA60088,'CB22769ROW84DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW84DATA60088.value); return false;" name="CB22769ROW84DATA60088X" id="CB22769ROW84DATA60088X"><img src="images/calendar.gif" name="CB22769ROW84DATA60088I" id="CB22769ROW84DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW84DATA61259">
                  <input type="hidden" name="OLDCB22769ROW84DATA61259" id="OLDCB22769ROW84DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW84DATA61259" name="CB22769ROW84DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW84DATA61259,'CB22769ROW84DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW84DATA61259.value); return false;" name="CB22769ROW84DATA61259X" id="CB22769ROW84DATA61259X"><img src="images/calendar.gif" name="CB22769ROW84DATA61259I" id="CB22769ROW84DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW84DATA63175">
                  <input type="hidden" name="OLDCB22769ROW84DATA63175" id="OLDCB22769ROW84DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW84DATA63175" name="CB22769ROW84DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW85" id="CHILDCB22769ROW85" value="1292">
                <td class="text-center " id="TD22769ROW85DATA60085">
                  Ingram, Alistair
                </td>
                <td class="text-center " id="TD22769ROW85DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW85DATA60087">
                  <input type="hidden" name="OLDCB22769ROW85DATA60087" id="OLDCB22769ROW85DATA60087" value="142320812">
                  <input type="text" class="form-control" id="CB22769ROW85DATA60087" name="CB22769ROW85DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142320812" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW85DATA60088">
                  <input type="hidden" name="OLDCB22769ROW85DATA60088" id="OLDCB22769ROW85DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW85DATA60088" name="CB22769ROW85DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW85DATA60088,'CB22769ROW85DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW85DATA60088.value); return false;" name="CB22769ROW85DATA60088X" id="CB22769ROW85DATA60088X"><img src="images/calendar.gif" name="CB22769ROW85DATA60088I" id="CB22769ROW85DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW85DATA61259">
                  <input type="hidden" name="OLDCB22769ROW85DATA61259" id="OLDCB22769ROW85DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW85DATA61259" name="CB22769ROW85DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW85DATA61259,'CB22769ROW85DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW85DATA61259.value); return false;" name="CB22769ROW85DATA61259X" id="CB22769ROW85DATA61259X"><img src="images/calendar.gif" name="CB22769ROW85DATA61259I" id="CB22769ROW85DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW85DATA63175">
                  <input type="hidden" name="OLDCB22769ROW85DATA63175" id="OLDCB22769ROW85DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW85DATA63175" name="CB22769ROW85DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW86" id="CHILDCB22769ROW86" value="1534">
                <td class="text-center " id="TD22769ROW86DATA60085">
                  Ingrams, Julie and Robert
                </td>
                <td class="text-center " id="TD22769ROW86DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW86DATA60087">
                  <input type="hidden" name="OLDCB22769ROW86DATA60087" id="OLDCB22769ROW86DATA60087" value="">
                  <input type="text" class="form-control" id="CB22769ROW86DATA60087" name="CB22769ROW86DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW86DATA60088">
                  <input type="hidden" name="OLDCB22769ROW86DATA60088" id="OLDCB22769ROW86DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW86DATA60088" name="CB22769ROW86DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW86DATA60088,'CB22769ROW86DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW86DATA60088.value); return false;" name="CB22769ROW86DATA60088X" id="CB22769ROW86DATA60088X"><img src="images/calendar.gif" name="CB22769ROW86DATA60088I" id="CB22769ROW86DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW86DATA61259">
                  <input type="hidden" name="OLDCB22769ROW86DATA61259" id="OLDCB22769ROW86DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW86DATA61259" name="CB22769ROW86DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW86DATA61259,'CB22769ROW86DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW86DATA61259.value); return false;" name="CB22769ROW86DATA61259X" id="CB22769ROW86DATA61259X"><img src="images/calendar.gif" name="CB22769ROW86DATA61259I" id="CB22769ROW86DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW86DATA63175">
                  <input type="hidden" name="OLDCB22769ROW86DATA63175" id="OLDCB22769ROW86DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW86DATA63175" name="CB22769ROW86DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW87" id="CHILDCB22769ROW87" value="1293">
                <td class="text-center " id="TD22769ROW87DATA60085">
                  Kathuria, Kabir
                </td>
                <td class="text-center " id="TD22769ROW87DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW87DATA60087">
                  <input type="hidden" name="OLDCB22769ROW87DATA60087" id="OLDCB22769ROW87DATA60087" value="142301196">
                  <input type="text" class="form-control" id="CB22769ROW87DATA60087" name="CB22769ROW87DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142301196" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW87DATA60088">
                  <input type="hidden" name="OLDCB22769ROW87DATA60088" id="OLDCB22769ROW87DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW87DATA60088" name="CB22769ROW87DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW87DATA60088,'CB22769ROW87DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW87DATA60088.value); return false;" name="CB22769ROW87DATA60088X" id="CB22769ROW87DATA60088X"><img src="images/calendar.gif" name="CB22769ROW87DATA60088I" id="CB22769ROW87DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW87DATA61259">
                  <input type="hidden" name="OLDCB22769ROW87DATA61259" id="OLDCB22769ROW87DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW87DATA61259" name="CB22769ROW87DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW87DATA61259,'CB22769ROW87DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW87DATA61259.value); return false;" name="CB22769ROW87DATA61259X" id="CB22769ROW87DATA61259X"><img src="images/calendar.gif" name="CB22769ROW87DATA61259I" id="CB22769ROW87DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW87DATA63175">
                  <input type="hidden" name="OLDCB22769ROW87DATA63175" id="OLDCB22769ROW87DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW87DATA63175" name="CB22769ROW87DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW88" id="CHILDCB22769ROW88" value="883">
                <td class="text-center " id="TD22769ROW88DATA60085">
                  Keenan, Danielle
                </td>
                <td class="text-center " id="TD22769ROW88DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW88DATA60087">
                  <input type="hidden" name="OLDCB22769ROW88DATA60087" id="OLDCB22769ROW88DATA60087" value="">
                  <input type="text" class="form-control" id="CB22769ROW88DATA60087" name="CB22769ROW88DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW88DATA60088">
                  <input type="hidden" name="OLDCB22769ROW88DATA60088" id="OLDCB22769ROW88DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW88DATA60088" name="CB22769ROW88DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW88DATA60088,'CB22769ROW88DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW88DATA60088.value); return false;" name="CB22769ROW88DATA60088X" id="CB22769ROW88DATA60088X"><img src="images/calendar.gif" name="CB22769ROW88DATA60088I" id="CB22769ROW88DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW88DATA61259">
                  <input type="hidden" name="OLDCB22769ROW88DATA61259" id="OLDCB22769ROW88DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW88DATA61259" name="CB22769ROW88DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW88DATA61259,'CB22769ROW88DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW88DATA61259.value); return false;" name="CB22769ROW88DATA61259X" id="CB22769ROW88DATA61259X"><img src="images/calendar.gif" name="CB22769ROW88DATA61259I" id="CB22769ROW88DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW88DATA63175">
                  <input type="hidden" name="OLDCB22769ROW88DATA63175" id="OLDCB22769ROW88DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW88DATA63175" name="CB22769ROW88DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW89" id="CHILDCB22769ROW89" value="880">
                <td class="text-center " id="TD22769ROW89DATA60085">
                  Keenan, Lilly
                </td>
                <td class="text-center " id="TD22769ROW89DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW89DATA60087">
                  <input type="hidden" name="OLDCB22769ROW89DATA60087" id="OLDCB22769ROW89DATA60087" value="140525998">
                  <input type="text" class="form-control" id="CB22769ROW89DATA60087" name="CB22769ROW89DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140525998" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW89DATA60088">
                  <input type="hidden" name="OLDCB22769ROW89DATA60088" id="OLDCB22769ROW89DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW89DATA60088" name="CB22769ROW89DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW89DATA60088,'CB22769ROW89DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW89DATA60088.value); return false;" name="CB22769ROW89DATA60088X" id="CB22769ROW89DATA60088X"><img src="images/calendar.gif" name="CB22769ROW89DATA60088I" id="CB22769ROW89DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW89DATA61259">
                  <input type="hidden" name="OLDCB22769ROW89DATA61259" id="OLDCB22769ROW89DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW89DATA61259" name="CB22769ROW89DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW89DATA61259,'CB22769ROW89DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW89DATA61259.value); return false;" name="CB22769ROW89DATA61259X" id="CB22769ROW89DATA61259X"><img src="images/calendar.gif" name="CB22769ROW89DATA61259I" id="CB22769ROW89DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW89DATA63175">
                  <input type="hidden" name="OLDCB22769ROW89DATA63175" id="OLDCB22769ROW89DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW89DATA63175" name="CB22769ROW89DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW90" id="CHILDCB22769ROW90" value="882">
                <td class="text-center " id="TD22769ROW90DATA60085">
                  Keenan, Peter
                </td>
                <td class="text-center " id="TD22769ROW90DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW90DATA60087">
                  <input type="hidden" name="OLDCB22769ROW90DATA60087" id="OLDCB22769ROW90DATA60087" value="12106992">
                  <input type="text" class="form-control" id="CB22769ROW90DATA60087" name="CB22769ROW90DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="12106992" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW90DATA60088">
                  <input type="hidden" name="OLDCB22769ROW90DATA60088" id="OLDCB22769ROW90DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW90DATA60088" name="CB22769ROW90DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW90DATA60088,'CB22769ROW90DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW90DATA60088.value); return false;" name="CB22769ROW90DATA60088X" id="CB22769ROW90DATA60088X"><img src="images/calendar.gif" name="CB22769ROW90DATA60088I" id="CB22769ROW90DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW90DATA61259">
                  <input type="hidden" name="OLDCB22769ROW90DATA61259" id="OLDCB22769ROW90DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW90DATA61259" name="CB22769ROW90DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW90DATA61259,'CB22769ROW90DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW90DATA61259.value); return false;" name="CB22769ROW90DATA61259X" id="CB22769ROW90DATA61259X"><img src="images/calendar.gif" name="CB22769ROW90DATA61259I" id="CB22769ROW90DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW90DATA63175">
                  <input type="hidden" name="OLDCB22769ROW90DATA63175" id="OLDCB22769ROW90DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW90DATA63175" name="CB22769ROW90DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW91" id="CHILDCB22769ROW91" value="1190">
                <td class="text-center " id="TD22769ROW91DATA60085">
                  kommineni, anish
                </td>
                <td class="text-center " id="TD22769ROW91DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW91DATA60087">
                  <input type="hidden" name="OLDCB22769ROW91DATA60087" id="OLDCB22769ROW91DATA60087" value="141716438">
                  <input type="text" class="form-control" id="CB22769ROW91DATA60087" name="CB22769ROW91DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141716438" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW91DATA60088">
                  <input type="hidden" name="OLDCB22769ROW91DATA60088" id="OLDCB22769ROW91DATA60088" value="08/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW91DATA60088" name="CB22769ROW91DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW91DATA60088,'CB22769ROW91DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW91DATA60088.value); return false;" name="CB22769ROW91DATA60088X" id="CB22769ROW91DATA60088X"><img src="images/calendar.gif" name="CB22769ROW91DATA60088I" id="CB22769ROW91DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW91DATA61259">
                  <input type="hidden" name="OLDCB22769ROW91DATA61259" id="OLDCB22769ROW91DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW91DATA61259" name="CB22769ROW91DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW91DATA61259,'CB22769ROW91DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW91DATA61259.value); return false;" name="CB22769ROW91DATA61259X" id="CB22769ROW91DATA61259X"><img src="images/calendar.gif" name="CB22769ROW91DATA61259I" id="CB22769ROW91DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW91DATA63175">
                  <input type="hidden" name="OLDCB22769ROW91DATA63175" id="OLDCB22769ROW91DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW91DATA63175" name="CB22769ROW91DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW92" id="CHILDCB22769ROW92" value="517">
                <td class="text-center " id="TD22769ROW92DATA60085">
                  kommineni, Avighna
                </td>
                <td class="text-center " id="TD22769ROW92DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW92DATA60087">
                  <input type="hidden" name="OLDCB22769ROW92DATA60087" id="OLDCB22769ROW92DATA60087" value="14123386">
                  <input type="text" class="form-control" id="CB22769ROW92DATA60087" name="CB22769ROW92DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14123386" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW92DATA60088">
                  <input type="hidden" name="OLDCB22769ROW92DATA60088" id="OLDCB22769ROW92DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW92DATA60088" name="CB22769ROW92DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW92DATA60088,'CB22769ROW92DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW92DATA60088.value); return false;" name="CB22769ROW92DATA60088X" id="CB22769ROW92DATA60088X"><img src="images/calendar.gif" name="CB22769ROW92DATA60088I" id="CB22769ROW92DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW92DATA61259">
                  <input type="hidden" name="OLDCB22769ROW92DATA61259" id="OLDCB22769ROW92DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW92DATA61259" name="CB22769ROW92DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW92DATA61259,'CB22769ROW92DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW92DATA61259.value); return false;" name="CB22769ROW92DATA61259X" id="CB22769ROW92DATA61259X"><img src="images/calendar.gif" name="CB22769ROW92DATA61259I" id="CB22769ROW92DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW92DATA63175">
                  <input type="hidden" name="OLDCB22769ROW92DATA63175" id="OLDCB22769ROW92DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW92DATA63175" name="CB22769ROW92DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW93" id="CHILDCB22769ROW93" value="577">
                <td class="text-center " id="TD22769ROW93DATA60085">
                  Kommineni, Vijaya Bhaskar
                </td>
                <td class="text-center " id="TD22769ROW93DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW93DATA60087">
                  <input type="hidden" name="OLDCB22769ROW93DATA60087" id="OLDCB22769ROW93DATA60087" value="14123381">
                  <input type="text" class="form-control" id="CB22769ROW93DATA60087" name="CB22769ROW93DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14123381" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW93DATA60088">
                  <input type="hidden" name="OLDCB22769ROW93DATA60088" id="OLDCB22769ROW93DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW93DATA60088" name="CB22769ROW93DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW93DATA60088,'CB22769ROW93DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW93DATA60088.value); return false;" name="CB22769ROW93DATA60088X" id="CB22769ROW93DATA60088X"><img src="images/calendar.gif" name="CB22769ROW93DATA60088I" id="CB22769ROW93DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW93DATA61259">
                  <input type="hidden" name="OLDCB22769ROW93DATA61259" id="OLDCB22769ROW93DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW93DATA61259" name="CB22769ROW93DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW93DATA61259,'CB22769ROW93DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW93DATA61259.value); return false;" name="CB22769ROW93DATA61259X" id="CB22769ROW93DATA61259X"><img src="images/calendar.gif" name="CB22769ROW93DATA61259I" id="CB22769ROW93DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW93DATA63175">
                  <input type="hidden" name="OLDCB22769ROW93DATA63175" id="OLDCB22769ROW93DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW93DATA63175" name="CB22769ROW93DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW94" id="CHILDCB22769ROW94" value="933">
                <td class="text-center " id="TD22769ROW94DATA60085">
                  Lorenzini, Mitch
                </td>
                <td class="text-center " id="TD22769ROW94DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW94DATA60087">
                  <input type="hidden" name="OLDCB22769ROW94DATA60087" id="OLDCB22769ROW94DATA60087" value="140975596">
                  <input type="text" class="form-control" id="CB22769ROW94DATA60087" name="CB22769ROW94DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140975596" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW94DATA60088">
                  <input type="hidden" name="OLDCB22769ROW94DATA60088" id="OLDCB22769ROW94DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW94DATA60088" name="CB22769ROW94DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW94DATA60088,'CB22769ROW94DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW94DATA60088.value); return false;" name="CB22769ROW94DATA60088X" id="CB22769ROW94DATA60088X"><img src="images/calendar.gif" name="CB22769ROW94DATA60088I" id="CB22769ROW94DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW94DATA61259">
                  <input type="hidden" name="OLDCB22769ROW94DATA61259" id="OLDCB22769ROW94DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW94DATA61259" name="CB22769ROW94DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW94DATA61259,'CB22769ROW94DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW94DATA61259.value); return false;" name="CB22769ROW94DATA61259X" id="CB22769ROW94DATA61259X"><img src="images/calendar.gif" name="CB22769ROW94DATA61259I" id="CB22769ROW94DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW94DATA63175">
                  <input type="hidden" name="OLDCB22769ROW94DATA63175" id="OLDCB22769ROW94DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW94DATA63175" name="CB22769ROW94DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW95" id="CHILDCB22769ROW95" value="1217">
                <td class="text-center " id="TD22769ROW95DATA60085">
                  Lorenzini, Paige
                </td>
                <td class="text-center " id="TD22769ROW95DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW95DATA60087">
                  <input type="hidden" name="OLDCB22769ROW95DATA60087" id="OLDCB22769ROW95DATA60087" value="141783213">
                  <input type="text" class="form-control" id="CB22769ROW95DATA60087" name="CB22769ROW95DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141783213" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW95DATA60088">
                  <input type="hidden" name="OLDCB22769ROW95DATA60088" id="OLDCB22769ROW95DATA60088" value="09/30/2026">
                  <input type="text" class="form-control" id="CB22769ROW95DATA60088" name="CB22769ROW95DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW95DATA60088,'CB22769ROW95DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW95DATA60088.value); return false;" name="CB22769ROW95DATA60088X" id="CB22769ROW95DATA60088X"><img src="images/calendar.gif" name="CB22769ROW95DATA60088I" id="CB22769ROW95DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW95DATA61259">
                  <input type="hidden" name="OLDCB22769ROW95DATA61259" id="OLDCB22769ROW95DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW95DATA61259" name="CB22769ROW95DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW95DATA61259,'CB22769ROW95DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW95DATA61259.value); return false;" name="CB22769ROW95DATA61259X" id="CB22769ROW95DATA61259X"><img src="images/calendar.gif" name="CB22769ROW95DATA61259I" id="CB22769ROW95DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW95DATA63175">
                  <input type="hidden" name="OLDCB22769ROW95DATA63175" id="OLDCB22769ROW95DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW95DATA63175" name="CB22769ROW95DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW96" id="CHILDCB22769ROW96" value="922">
                <td class="text-center " id="TD22769ROW96DATA60085">
                  Lorenzini, Pepper
                </td>
                <td class="text-center " id="TD22769ROW96DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW96DATA60087">
                  <input type="hidden" name="OLDCB22769ROW96DATA60087" id="OLDCB22769ROW96DATA60087" value="140975597">
                  <input type="text" class="form-control" id="CB22769ROW96DATA60087" name="CB22769ROW96DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140975597" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW96DATA60088">
                  <input type="hidden" name="OLDCB22769ROW96DATA60088" id="OLDCB22769ROW96DATA60088" value="07/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW96DATA60088" name="CB22769ROW96DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="07/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW96DATA60088,'CB22769ROW96DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW96DATA60088.value); return false;" name="CB22769ROW96DATA60088X" id="CB22769ROW96DATA60088X"><img src="images/calendar.gif" name="CB22769ROW96DATA60088I" id="CB22769ROW96DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW96DATA61259">
                  <input type="hidden" name="OLDCB22769ROW96DATA61259" id="OLDCB22769ROW96DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW96DATA61259" name="CB22769ROW96DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW96DATA61259,'CB22769ROW96DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW96DATA61259.value); return false;" name="CB22769ROW96DATA61259X" id="CB22769ROW96DATA61259X"><img src="images/calendar.gif" name="CB22769ROW96DATA61259I" id="CB22769ROW96DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW96DATA63175">
                  <input type="hidden" name="OLDCB22769ROW96DATA63175" id="OLDCB22769ROW96DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW96DATA63175" name="CB22769ROW96DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW97" id="CHILDCB22769ROW97" value="1032">
                <td class="text-center " id="TD22769ROW97DATA60085">
                  Lynch, Dixon
                </td>
                <td class="text-center " id="TD22769ROW97DATA60086">
                  Scout
                </td>
                <td class="text-center " id="TD22769ROW97DATA60087">
                  <input type="hidden" name="OLDCB22769ROW97DATA60087" id="OLDCB22769ROW97DATA60087" value="137363524">
                  <input type="text" class="form-control" id="CB22769ROW97DATA60087" name="CB22769ROW97DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="137363524" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW97DATA60088">
                  <input type="hidden" name="OLDCB22769ROW97DATA60088" id="OLDCB22769ROW97DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW97DATA60088" name="CB22769ROW97DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW97DATA60088,'CB22769ROW97DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW97DATA60088.value); return false;" name="CB22769ROW97DATA60088X" id="CB22769ROW97DATA60088X"><img src="images/calendar.gif" name="CB22769ROW97DATA60088I" id="CB22769ROW97DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW97DATA61259">
                  <input type="hidden" name="OLDCB22769ROW97DATA61259" id="OLDCB22769ROW97DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW97DATA61259" name="CB22769ROW97DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW97DATA61259,'CB22769ROW97DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW97DATA61259.value); return false;" name="CB22769ROW97DATA61259X" id="CB22769ROW97DATA61259X"><img src="images/calendar.gif" name="CB22769ROW97DATA61259I" id="CB22769ROW97DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW97DATA63175">
                  <input type="hidden" name="OLDCB22769ROW97DATA63175" id="OLDCB22769ROW97DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW97DATA63175" name="CB22769ROW97DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW98" id="CHILDCB22769ROW98" value="1034">
                <td class="text-center " id="TD22769ROW98DATA60085">
                  Lynch, Scott
                </td>
                <td class="text-center " id="TD22769ROW98DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW98DATA60087">
                  <input type="hidden" name="OLDCB22769ROW98DATA60087" id="OLDCB22769ROW98DATA60087" value="13223954">
                  <input type="text" class="form-control" id="CB22769ROW98DATA60087" name="CB22769ROW98DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="13223954" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW98DATA60088">
                  <input type="hidden" name="OLDCB22769ROW98DATA60088" id="OLDCB22769ROW98DATA60088" value="">
                  <input type="text" class="form-control" id="CB22769ROW98DATA60088" name="CB22769ROW98DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW98DATA60088,'CB22769ROW98DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW98DATA60088.value); return false;" name="CB22769ROW98DATA60088X" id="CB22769ROW98DATA60088X"><img src="images/calendar.gif" name="CB22769ROW98DATA60088I" id="CB22769ROW98DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW98DATA61259">
                  <input type="hidden" name="OLDCB22769ROW98DATA61259" id="OLDCB22769ROW98DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW98DATA61259" name="CB22769ROW98DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW98DATA61259,'CB22769ROW98DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW98DATA61259.value); return false;" name="CB22769ROW98DATA61259X" id="CB22769ROW98DATA61259X"><img src="images/calendar.gif" name="CB22769ROW98DATA61259I" id="CB22769ROW98DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW98DATA63175">
                  <input type="hidden" name="OLDCB22769ROW98DATA63175" id="OLDCB22769ROW98DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW98DATA63175" name="CB22769ROW98DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB22769ROW99" id="CHILDCB22769ROW99" value="693">
                <td class="text-center " id="TD22769ROW99DATA60085">
                  Mallios, Jim
                </td>
                <td class="text-center " id="TD22769ROW99DATA60086">
                  Adult
                </td>
                <td class="text-center " id="TD22769ROW99DATA60087">
                  <input type="hidden" name="OLDCB22769ROW99DATA60087" id="OLDCB22769ROW99DATA60087" value="102104016">
                  <input type="text" class="form-control" id="CB22769ROW99DATA60087" name="CB22769ROW99DATA60087" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="102104016" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD22769ROW99DATA60088">
                  <input type="hidden" name="OLDCB22769ROW99DATA60088" id="OLDCB22769ROW99DATA60088" value="12/31/2026">
                  <input type="text" class="form-control" id="CB22769ROW99DATA60088" name="CB22769ROW99DATA60088" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="12/31/2026" title="This member's BSA registration is active through this date" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW99DATA60088,'CB22769ROW99DATA60088X','MM/dd/yyyy', window.easyform.CB22769ROW99DATA60088.value); return false;" name="CB22769ROW99DATA60088X" id="CB22769ROW99DATA60088X"><img src="images/calendar.gif" name="CB22769ROW99DATA60088I" id="CB22769ROW99DATA60088I"></a>
                </td>
                <td class="text-center " id="TD22769ROW99DATA61259">
                  <input type="hidden" name="OLDCB22769ROW99DATA61259" id="OLDCB22769ROW99DATA61259" value="">
                  <input type="text" class="form-control" id="CB22769ROW99DATA61259" name="CB22769ROW99DATA61259" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended" style="background-color: rgb(255, 255, 255);">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.CB22769ROW99DATA61259,'CB22769ROW99DATA61259X','MM/dd/yyyy', window.easyform.CB22769ROW99DATA61259.value); return false;" name="CB22769ROW99DATA61259X" id="CB22769ROW99DATA61259X"><img src="images/calendar.gif" name="CB22769ROW99DATA61259I" id="CB22769ROW99DATA61259I"></a>
                </td>
                <td class="text-center " id="TD22769ROW99DATA63175">
                  <input type="hidden" name="OLDCB22769ROW99DATA63175" id="OLDCB22769ROW99DATA63175" value="N">
                  <input type="checkbox" onclick="easyFieldExit(this)" tabindex="130" value="Y" id="CB22769ROW99DATA63175" name="CB22769ROW99DATA63175" size="1" title="Is this former member considered to be an alumni of the group?">
                </td>
              </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage" onchange="SetRowsPerPage(this);">
<option value="20">20</option>
<option value="50">50</option>
<option value="100" selected="">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('22769,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('22769,2');"><img src="pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
      </tbody></table>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON0">
</form>
<script language="JavaScript" type="text/javascript">
  function ValidateGrid()
  {
    var easyform = document.getElementById('easyform');
    for (i=0;i<easyform.length;i++)
    {
      try
      {
        var tempobj=easyform.elements[i];
        var tempname=tempobj.name;
  if (tempname.match(/^CB22769ROW[0-9]+DATA60087/)) {TestRegExp(tempobj,/^[+]?\d\d*$/,'This field only allows numbers'); }if (tempname.match(/^CB22769ROW[0-9]+DATA60088/)) {TestRegExp(tempobj,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.'); }if (tempname.match(/^CB22769ROW[0-9]+DATA61259/)) {TestRegExp(tempobj,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.'); }
      }
      catch(err)
      {
      }
    }
  }
</script>
<div style="height: 100px;">&nbsp;</div>


</body></html>