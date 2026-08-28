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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="336">
<input type="hidden" name="Form_ID" id="Form_ID" value="200">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=336&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=336">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=336">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=336">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=50" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=336">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=336">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=336">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=336">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=336&amp;Stack=1&amp;Application_ID=2840
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
My Outbox
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs6993">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP26791140" id="OP26791140" value="">
    <input type="hidden" name="OP2679017" id="OP2679017" value="">
  </div>
</div>
<div class="new-row" id="fs2471">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON2" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs6999">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON3" type="button" name="save continue" title="New Email" value="New Email" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=194&amp;FK=0&amp;Stack=2','');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs535">
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
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('535,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('535,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        <tr>
          <td>
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid535">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB535" id="ROWCOUNTCB535" value="20">
                <th class="unsortable">
                &nbsp;
                </th>
                <th class="unsortable">
                &nbsp;
                </th>
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
                <td class="text-center " id="TD535ROW0DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2563&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW0DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2563&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW0DATA2972">
                  test
                </td>
                <td class="text-center " id="TD535ROW0DATA2973">
                  08/26/2026 10:21 AM
                </td>
                <td class="text-center " id="TD535ROW0DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW0DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2563&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW1DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2550&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW1DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2550&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW1DATA2972">
                  Upcoming Event: Meet Troops 505 &amp; 19 + Complete the Swimming Adventure!
                </td>
                <td class="text-center " id="TD535ROW1DATA2973">
                  08/07/2026 4:47 PM
                </td>
                <td class="text-center " id="TD535ROW1DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW1DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2550&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW2DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2549&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW2DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2549&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW2DATA2972">
                  Newsletter Correction
                </td>
                <td class="text-center " id="TD535ROW2DATA2973">
                  07/26/2026 11:54 AM
                </td>
                <td class="text-center " id="TD535ROW2DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW2DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2549&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW3DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2547&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW3DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2547&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW3DATA2972">
                  Reminder: Please RSVP for Our July 18 Natural Bridge Caverns Trip
                </td>
                <td class="text-center " id="TD535ROW3DATA2973">
                  07/04/2026 11:48 AM
                </td>
                <td class="text-center " id="TD535ROW3DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW3DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2547&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW4DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2545&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW4DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2545&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW4DATA2972">
                  Scouts Needed for Circle C 4th of July Parade
                </td>
                <td class="text-center " id="TD535ROW4DATA2973">
                  06/30/2026 4:26 PM
                </td>
                <td class="text-center " id="TD535ROW4DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW4DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2545&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW5DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2544&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW5DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2544&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW5DATA2972">
                  Reminder: Cidercade Hangout Tomorrow 2-4pm
                </td>
                <td class="text-center " id="TD535ROW5DATA2973">
                  06/19/2026 8:13 PM
                </td>
                <td class="text-center " id="TD535ROW5DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW5DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2544&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW6DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2540&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW6DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2540&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW6DATA2972">
                  Reminders: Graduation Today
                </td>
                <td class="text-center " id="TD535ROW6DATA2973">
                  05/16/2026 10:08 AM
                </td>
                <td class="text-center " id="TD535ROW6DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW6DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2540&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW7DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2537&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW7DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2537&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW7DATA2972">
                  Raingutter Regatta
                </td>
                <td class="text-center " id="TD535ROW7DATA2973">
                  05/13/2026 4:53 PM
                </td>
                <td class="text-center " id="TD535ROW7DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW7DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2537&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW8DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2536&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW8DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2536&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW8DATA2972">
                  Rocket Derby Final Reminders
                </td>
                <td class="text-center " id="TD535ROW8DATA2973">
                  05/08/2026 10:14 PM
                </td>
                <td class="text-center " id="TD535ROW8DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW8DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2536&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW9DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2535&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW9DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2535&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW9DATA2972">
                  Reminder: Rocket Derby Inspection
                </td>
                <td class="text-center " id="TD535ROW9DATA2973">
                  05/07/2026 10:31 AM
                </td>
                <td class="text-center " id="TD535ROW9DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW9DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2535&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW10DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2533&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW10DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2533&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW10DATA2972">
                  Important Information About Rocket Derby
                </td>
                <td class="text-center " id="TD535ROW10DATA2973">
                  05/02/2026 6:32 PM
                </td>
                <td class="text-center " id="TD535ROW10DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW10DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2533&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW11DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2520&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW11DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2520&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW11DATA2972">
                  Reminder: Please RSVP for Saturday’s Pack 12 Day Camp
                </td>
                <td class="text-center " id="TD535ROW11DATA2973">
                  04/17/2026 6:58 AM
                </td>
                <td class="text-center " id="TD535ROW11DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW11DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2520&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW12DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2506&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW12DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2506&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW12DATA2972">
                  Clayton Cleanup Cancelled Due to Weather
                </td>
                <td class="text-center " id="TD535ROW12DATA2973">
                  04/10/2026 7:07 PM
                </td>
                <td class="text-center " id="TD535ROW12DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW12DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2506&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW13DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2502&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW13DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2502&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW13DATA2972">
                  Spring Campout Attendance Inquiry
                </td>
                <td class="text-center " id="TD535ROW13DATA2973">
                  04/09/2026 12:33 PM
                </td>
                <td class="text-center " id="TD535ROW13DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW13DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2502&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW14DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2500&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW14DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2500&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW14DATA2972">
                  Volunteers Needed This Weekend – Pack 12 Events
                </td>
                <td class="text-center " id="TD535ROW14DATA2973">
                  04/07/2026 11:10 AM
                </td>
                <td class="text-center " id="TD535ROW14DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW14DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2500&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW15DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2499&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW15DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2499&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW15DATA2972">
                  Optional Pack Service Project – Bench Build &amp; Campus Cleanup
                </td>
                <td class="text-center " id="TD535ROW15DATA2973">
                  04/02/2026 3:03 PM
                </td>
                <td class="text-center " id="TD535ROW15DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW15DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2499&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW16DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2498&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW16DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2498&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW16DATA2972">
                  Optional Pack Service Project – Bench Build &amp; Campus Cleanup
                </td>
                <td class="text-center " id="TD535ROW16DATA2973">
                  04/02/2026 3:02 PM
                </td>
                <td class="text-center " id="TD535ROW16DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW16DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2498&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW17DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2492&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW17DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="650" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2492&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW17DATA2972">
                  Bear Den Meeting 3/29 5PM – Cycling Belt Loop &amp; Upcoming Plans
                </td>
                <td class="text-center " id="TD535ROW17DATA2973">
                  03/12/2026 9:00 PM
                </td>
                <td class="text-center " id="TD535ROW17DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW17DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="660" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2492&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW18DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="670" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2488&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW18DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="680" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2488&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW18DATA2972">
                  Pack Meeting Rescheduled to March 24th
                </td>
                <td class="text-center " id="TD535ROW18DATA2973">
                  03/08/2026 6:13 PM
                </td>
                <td class="text-center " id="TD535ROW18DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW18DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="690" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2488&amp;Stack=2','');">
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD535ROW19DATA2970">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="700" id="BUTTON4" type="button" name="update" title="View" value="View" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=336&amp;Form_ID=198&amp;FK=0&amp;ID=2459&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW19DATA44228">
                  <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="710" id="BUTTON5" type="button" name="save continue" title="Reply" value="Reply" onclick="LinkTo('FormReplyEmail.aspx?Menu_Item_ID=336&amp;Form_ID=373&amp;FK=0&amp;ID=2459&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD535ROW19DATA2972">
                  Bears Next Den Meeting Time &amp; Location Update
                </td>
                <td class="text-center " id="TD535ROW19DATA2973">
                  02/14/2026 8:04 AM
                </td>
                <td class="text-center " id="TD535ROW19DATA26564">
                  &nbsp;
                </td>
                <td class="text-center " id="TD535ROW19DATA8694">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="720" id="BUTTON9" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=336&amp;Form_ID=202&amp;FK=0&amp;ID=2459&amp;Stack=2','');">
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="6" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=336&amp;Form_ID=200&amp;Stack=1&amp;SectionID=535&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=336&amp;Form_ID=200&amp;Stack=1&amp;SectionID=535&amp;ReportFormat=XLS','_blank');">
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
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('535,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('535,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
      </tbody></table>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON2">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>