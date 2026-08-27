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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="7632">
<input type="hidden" name="Form_ID" id="Form_ID" value="7393">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=7632&amp;Stack=0">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=7632">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=7632">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=7632">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?DB=2" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=7632">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=7632">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=7632">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=7632">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=7632&amp;Stack=0&amp;Application_ID=2840
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
Budget Template
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs24292">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=0&amp;Stack=2','');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs24291">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP62656155" id="OP62656155" value="">
    <input type="hidden" name="OP626575" id="OP626575" value="">
    <input type="hidden" name="OP626581" id="OP626581" value="">
    <input type="hidden" name="OP6265911" id="OP6265911" value="">
    <input type="hidden" name="OP6266011" id="OP6266011" value="">
    <input type="hidden" name="OP6266136" id="OP6266136" value="">
    <input type="hidden" name="OP6266211" id="OP6266211" value="">
  </div>
</div>
<div class="new-row" id="fs24293">
  <div class="container-fluid container-flex">
    <div class="center-block table-responsive">
      <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid24293">
        <thead>
        <tr>
          <input type="hidden" name="ROWCOUNTCB24293" id="ROWCOUNTCB24293" value="19">
          <th class="unsortable">
          &nbsp;
          </th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Seq<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Name<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Events<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Per<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Default<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">Disabled<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th class="unsortable">
          &nbsp;
          </th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="text-center " id="TD24293ROW0DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=1&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW0DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW0DATA62669">
            100
          </td>
          <td class="text-center " id="TD24293ROW0DATA62670">
            Registration fees
          </td>
          <td class="text-center " id="TD24293ROW0DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW0DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW0DATA62673">
            24.00
          </td>
          <td class="text-center " id="TD24293ROW0DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW0DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=1&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW1DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=24&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW1DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW1DATA62669">
            200
          </td>
          <td class="text-center " id="TD24293ROW1DATA62670">
            Unit charter fee
          </td>
          <td class="text-center " id="TD24293ROW1DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW1DATA62672">
            No
          </td>
          <td class="text-center " id="TD24293ROW1DATA62673">
            40.00
          </td>
          <td class="text-center " id="TD24293ROW1DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW1DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=24&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW2DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=2&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW2DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW2DATA62669">
            300
          </td>
          <td class="text-center " id="TD24293ROW2DATA62670">
            Scout Life
          </td>
          <td class="text-center " id="TD24293ROW2DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW2DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW2DATA62673">
            12.00
          </td>
          <td class="text-center " id="TD24293ROW2DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW2DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=2&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW3DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=3&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW3DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW3DATA62669">
            400
          </td>
          <td class="text-center " id="TD24293ROW3DATA62670">
            Accident insurance fees
          </td>
          <td class="text-center " id="TD24293ROW3DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW3DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW3DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW3DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW3DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=3&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW4DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=4&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW4DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW4DATA62669">
            500
          </td>
          <td class="text-center " id="TD24293ROW4DATA62670">
            Advancement
          </td>
          <td class="text-center " id="TD24293ROW4DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW4DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW4DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW4DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW4DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=4&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW5DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=25&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW5DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW5DATA62669">
            600
          </td>
          <td class="text-center " id="TD24293ROW5DATA62670">
            Recognition:  Handbooks/neckerchiefs
          </td>
          <td class="text-center " id="TD24293ROW5DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW5DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW5DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW5DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW5DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=25&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW6DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=26&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW6DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW6DATA62669">
            700
          </td>
          <td class="text-center " id="TD24293ROW6DATA62670">
            Recognition:  Pack leaders
          </td>
          <td class="text-center " id="TD24293ROW6DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW6DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW6DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW6DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW6DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=26&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW7DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=5&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW7DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW7DATA62669">
            1,000
          </td>
          <td class="text-center " id="TD24293ROW7DATA62670">
            Special events
          </td>
          <td class="text-center " id="TD24293ROW7DATA62671">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW7DATA62672">
            No
          </td>
          <td class="text-center " id="TD24293ROW7DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW7DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW7DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=5&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW8DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=6&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW8DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW8DATA62669">
            1,100
          </td>
          <td class="text-center " id="TD24293ROW8DATA62670">
            Special activities
          </td>
          <td class="text-center " id="TD24293ROW8DATA62671">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW8DATA62672">
            No
          </td>
          <td class="text-center " id="TD24293ROW8DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW8DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW8DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=6&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW9DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=7&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW9DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW9DATA62669">
            1,200
          </td>
          <td class="text-center " id="TD24293ROW9DATA62670">
            Camp
          </td>
          <td class="text-center " id="TD24293ROW9DATA62671">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW9DATA62672">
            No
          </td>
          <td class="text-center " id="TD24293ROW9DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW9DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW9DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=7&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW10DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=9&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW10DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW10DATA62669">
            2,000
          </td>
          <td class="text-center " id="TD24293ROW10DATA62670">
            Program materials
          </td>
          <td class="text-center " id="TD24293ROW10DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW10DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW10DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW10DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW10DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=9&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW11DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=10&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW11DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW11DATA62669">
            2,100
          </td>
          <td class="text-center " id="TD24293ROW11DATA62670">
            Leader basic training
          </td>
          <td class="text-center " id="TD24293ROW11DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW11DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW11DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW11DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW11DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=10&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW12DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=11&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW12DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW12DATA62669">
            2,200
          </td>
          <td class="text-center " id="TD24293ROW12DATA62670">
            Full uniforms
          </td>
          <td class="text-center " id="TD24293ROW12DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW12DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW12DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW12DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW12DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=11&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW13DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=12&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW13DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW13DATA62669">
            3,000
          </td>
          <td class="text-center " id="TD24293ROW13DATA62670">
            Reserve fund
          </td>
          <td class="text-center " id="TD24293ROW13DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW13DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW13DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW13DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW13DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=12&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW14DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=13&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW14DATA62668">
            Expense
          </td>
          <td class="text-center " id="TD24293ROW14DATA62669">
            3,100
          </td>
          <td class="text-center " id="TD24293ROW14DATA62670">
            Other expenses
          </td>
          <td class="text-center " id="TD24293ROW14DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW14DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW14DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW14DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW14DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=13&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW15DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=14&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW15DATA62668">
            Income
          </td>
          <td class="text-center " id="TD24293ROW15DATA62669">
            100
          </td>
          <td class="text-center " id="TD24293ROW15DATA62670">
            Annual dues
          </td>
          <td class="text-center " id="TD24293ROW15DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW15DATA62672">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW15DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW15DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW15DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=14&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW16DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=21&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW16DATA62668">
            Income
          </td>
          <td class="text-center " id="TD24293ROW16DATA62669">
            200
          </td>
          <td class="text-center " id="TD24293ROW16DATA62670">
            Surplus from prior year
          </td>
          <td class="text-center " id="TD24293ROW16DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW16DATA62672">
            No
          </td>
          <td class="text-center " id="TD24293ROW16DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW16DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW16DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=21&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW17DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=18&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW17DATA62668">
            Income
          </td>
          <td class="text-center " id="TD24293ROW17DATA62669">
            300
          </td>
          <td class="text-center " id="TD24293ROW17DATA62670">
            Other income
          </td>
          <td class="text-center " id="TD24293ROW17DATA62671">
            No
          </td>
          <td class="text-center " id="TD24293ROW17DATA62672">
            No
          </td>
          <td class="text-center " id="TD24293ROW17DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW17DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW17DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=18&amp;Stack=2','');">
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD24293ROW18DATA62666">
            <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=20&amp;Stack=2','');">
          </td>
          <td class="text-center " id="TD24293ROW18DATA62668">
            Fundraiser
          </td>
          <td class="text-center " id="TD24293ROW18DATA62669">
            100
          </td>
          <td class="text-center " id="TD24293ROW18DATA62670">
            Fundraisers
          </td>
          <td class="text-center " id="TD24293ROW18DATA62671">
            Yes
          </td>
          <td class="text-center " id="TD24293ROW18DATA62672">
            No
          </td>
          <td class="text-center " id="TD24293ROW18DATA62673">
            &nbsp;
          </td>
          <td class="text-center " id="TD24293ROW18DATA62674">
            No
          </td>
          <td class="text-center " id="TD24293ROW18DATA62667">
            <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=7632&amp;Form_ID=7391&amp;FK=0&amp;ID=20&amp;Stack=2','');">
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td colspan="9" class="text-center">
            <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=7632&amp;Form_ID=7393&amp;Stack=1&amp;SectionID=24293&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=7632&amp;Form_ID=7393&amp;Stack=1&amp;SectionID=24293&amp;ReportFormat=XLS','_blank');">
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
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON1" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=7632&amp;Form_ID=7392&amp;FK=0&amp;ID=0&amp;Stack=2','');">
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