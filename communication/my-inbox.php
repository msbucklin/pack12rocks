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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="335">
<input type="hidden" name="Form_ID" id="Form_ID" value="625">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=335&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=335">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=335">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=335">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=50" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=335">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=335">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=335">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=335">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=335&amp;Stack=1&amp;Application_ID=2840
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
My Inbox
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7000">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP268062" id="OP268062" value="">
    <input type="hidden" name="OP26807140" id="OP26807140" value="">
    <input type="hidden" name="OP2680817" id="OP2680817" value="">
  </div>
</div>
<div class="new-row" id="fs7001">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON3" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs2470">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON4" type="button" name="save continue" title="New Email" value="New Email" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=194&amp;FK=0&amp;Stack=2','');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs2469">
  <div class="container-fluid container-flex">
    <div class="center-block table-responsive">
      <table>
        <tbody><tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage" onchange="SetRowsPerPage(this);">
<option value="20" selected="">20</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,2');">2</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,3');">3</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,4');">4</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,5');">5</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,6');">6</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,7');">7</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,8');">8</a></li><li><a>&nbsp;...</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,15');">15</a></li><li><a href="javascript:GoToSectionPageNumber('2469,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        <tr>
          <td>
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid2469">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB2469" id="ROWCOUNTCB2469" value="20">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Sender<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Subject<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Sent On<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Attachment<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD2469ROW0DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2563&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW0DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW0DATA9722">
                  test
                </td>
                <td class="text-center " id="TD2469ROW0DATA9723">
                  08/26/2026 10:21 AM
                </td>
                <td class="text-center " id="TD2469ROW0DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW0DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2563&amp;ID=2563&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW1DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2562&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW1DATA9879">
                  teamalvarez2010@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW1DATA9722">
                  TONIGHT: Send a friend to Join Scouting Night! (Drop-in anytime 6–7 PM)
                </td>
                <td class="text-center " id="TD2469ROW1DATA9723">
                  08/25/2026 3:06 PM
                </td>
                <td class="text-center " id="TD2469ROW1DATA26563">
                  <a href="https://ogo.blob.core.windows.net/cspack12austin/Pack_12_Recruitment_Events_2026_20268251652886293182.png">Pack 12 Recruitment Events 2026.png</a>
                </td>
                <td class="text-center " id="TD2469ROW1DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2562&amp;ID=2562&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW2DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2561&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW2DATA9879">
                  teamalvarez2010@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW2DATA9722">
                  One week from today! Pack Picnic 8/29 — RSVP, sides sign-up, and new Pack 12 tees
                </td>
                <td class="text-center " id="TD2469ROW2DATA9723">
                  08/22/2026 9:01 PM
                </td>
                <td class="text-center " id="TD2469ROW2DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW2DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2561&amp;ID=2561&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW3DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2560&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW3DATA9879">
                  aswantner@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW3DATA9722">
                  Welcome to a New Webelos Scouting Year!
                </td>
                <td class="text-center " id="TD2469ROW3DATA9723">
                  08/22/2026 11:17 AM
                </td>
                <td class="text-center " id="TD2469ROW3DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW3DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2560&amp;ID=2560&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW4DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2559&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW4DATA9879">
                  aswantner@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW4DATA9722">
                  Welcome to a New Webelos Scouting Year!
                </td>
                <td class="text-center " id="TD2469ROW4DATA9723">
                  08/22/2026 11:17 AM
                </td>
                <td class="text-center " id="TD2469ROW4DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW4DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2559&amp;ID=2559&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW5DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2558&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW5DATA9879">
                  teamalvarez2010@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW5DATA9722">
                  Welcome Back, Pack Picnic 8/29 (save the date)
                </td>
                <td class="text-center " id="TD2469ROW5DATA9723">
                  08/11/2026 10:01 PM
                </td>
                <td class="text-center " id="TD2469ROW5DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW5DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2558&amp;ID=2558&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW6DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2552&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW6DATA9879">
                  teamalvarez2010@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW6DATA9722">
                  Swimming adventure - SIGN UP FORM
                </td>
                <td class="text-center " id="TD2469ROW6DATA9723">
                  08/10/2026 10:42 AM
                </td>
                <td class="text-center " id="TD2469ROW6DATA26563">
                  <a href="https://ogo.blob.core.windows.net/cspack12austin/SwimAdventure2026_202681011421863092362.pdf">SwimAdventure2026.pdf</a>
                </td>
                <td class="text-center " id="TD2469ROW6DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2552&amp;ID=2552&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW7DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2551&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW7DATA9879">
                  russchid@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW7DATA9722">
                  Pack 12 Invoice - Natural Bridge Caverns
                </td>
                <td class="text-center " id="TD2469ROW7DATA9723">
                  08/07/2026 10:11 PM
                </td>
                <td class="text-center " id="TD2469ROW7DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW7DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2551&amp;ID=2551&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW8DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2550&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW8DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW8DATA9722">
                  Upcoming Event: Meet Troops 505 &amp; 19 + Complete the Swimming Adventure!
                </td>
                <td class="text-center " id="TD2469ROW8DATA9723">
                  08/07/2026 4:47 PM
                </td>
                <td class="text-center " id="TD2469ROW8DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW8DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2550&amp;ID=2550&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW9DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2549&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW9DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW9DATA9722">
                  Newsletter Correction
                </td>
                <td class="text-center " id="TD2469ROW9DATA9723">
                  07/26/2026 11:54 AM
                </td>
                <td class="text-center " id="TD2469ROW9DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW9DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2549&amp;ID=2549&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW10DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2548&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW10DATA9879">
                  teamalvarez2010@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW10DATA9722">
                  Natural Bridge Caverns Info for this Saturday!
                </td>
                <td class="text-center " id="TD2469ROW10DATA9723">
                  07/16/2026 10:14 AM
                </td>
                <td class="text-center " id="TD2469ROW10DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW10DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2548&amp;ID=2548&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW11DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2547&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW11DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW11DATA9722">
                  Reminder: Please RSVP for Our July 18 Natural Bridge Caverns Trip
                </td>
                <td class="text-center " id="TD2469ROW11DATA9723">
                  07/04/2026 11:48 AM
                </td>
                <td class="text-center " id="TD2469ROW11DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW11DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2547&amp;ID=2547&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW12DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2545&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW12DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW12DATA9722">
                  Scouts Needed for Circle C 4th of July Parade
                </td>
                <td class="text-center " id="TD2469ROW12DATA9723">
                  06/30/2026 4:26 PM
                </td>
                <td class="text-center " id="TD2469ROW12DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW12DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2545&amp;ID=2545&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW13DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2544&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW13DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW13DATA9722">
                  Reminder: Cidercade Hangout Tomorrow 2-4pm
                </td>
                <td class="text-center " id="TD2469ROW13DATA9723">
                  06/19/2026 8:13 PM
                </td>
                <td class="text-center " id="TD2469ROW13DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW13DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2544&amp;ID=2544&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW14DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2542&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW14DATA9879">
                  teamalvarez2010@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW14DATA9722">
                  Raingutter Regatta - Event Details &amp; RSVP
                </td>
                <td class="text-center " id="TD2469ROW14DATA9723">
                  05/18/2026 5:39 PM
                </td>
                <td class="text-center " id="TD2469ROW14DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW14DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2542&amp;ID=2542&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW15DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2541&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW15DATA9879">
                  teamalvarez2010@gmail.com
                </td>
                <td class="text-center " id="TD2469ROW15DATA9722">
                  Year End Video &amp; Graduation Pics
                </td>
                <td class="text-center " id="TD2469ROW15DATA9723">
                  05/17/2026 6:51 PM
                </td>
                <td class="text-center " id="TD2469ROW15DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW15DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2541&amp;ID=2541&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW16DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2540&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW16DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW16DATA9722">
                  Reminders: Graduation Today
                </td>
                <td class="text-center " id="TD2469ROW16DATA9723">
                  05/16/2026 10:08 AM
                </td>
                <td class="text-center " id="TD2469ROW16DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW16DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2540&amp;ID=2540&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW17DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2536&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW17DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW17DATA9722">
                  Rocket Derby Final Reminders
                </td>
                <td class="text-center " id="TD2469ROW17DATA9723">
                  05/08/2026 10:14 PM
                </td>
                <td class="text-center " id="TD2469ROW17DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW17DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2536&amp;ID=2536&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW18DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2535&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW18DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW18DATA9722">
                  Reminder: Rocket Derby Inspection
                </td>
                <td class="text-center " id="TD2469ROW18DATA9723">
                  05/07/2026 10:31 AM
                </td>
                <td class="text-center " id="TD2469ROW18DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW18DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2535&amp;ID=2535&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD2469ROW19DATA9721">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON5" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=335&amp;Form_ID=198&amp;FK=0&amp;ID=2533&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD2469ROW19DATA9879">
                  msbucklin@icloud.com
                </td>
                <td class="text-center " id="TD2469ROW19DATA9722">
                  Important Information About Rocket Derby
                </td>
                <td class="text-center " id="TD2469ROW19DATA9723">
                  05/02/2026 6:32 PM
                </td>
                <td class="text-center " id="TD2469ROW19DATA26563">
                  &nbsp;
                </td>
                <td class="text-center " id="TD2469ROW19DATA9880">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON10" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=335&amp;Form_ID=373&amp;FK=2533&amp;ID=2533&amp;Stack=2','');">
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="6" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=335&amp;Form_ID=625&amp;Stack=1&amp;SectionID=2469&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=335&amp;Form_ID=625&amp;Stack=1&amp;SectionID=2469&amp;ReportFormat=XLS','_blank');">
                </td>
              </tr>
              </tfoot>
            </table>
          </td>
        </tr>
        <tr>
<td>
<div style="float:right;">
<span class="rows-per-page">
Rows Per Page:
<select class="rows-per-page" id="SelectRowsPerPage" name="SelectRowsPerPage" onchange="SetRowsPerPage(this);">
<option value="20" selected="">20</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="ALL">ALL</option>
</select>
&nbsp;
</span>
<span>
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,2');">2</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,3');">3</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,4');">4</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,5');">5</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,6');">6</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,7');">7</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,8');">8</a></li><li><a>&nbsp;...</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('2469,15');">15</a></li><li><a href="javascript:GoToSectionPageNumber('2469,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
      </tbody></table>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON3">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>