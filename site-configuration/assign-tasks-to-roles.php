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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="387">
<input type="hidden" name="Form_ID" id="Form_ID" value="1461">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=387&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=387">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=387">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=387">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=201" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=387">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=387">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=387">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=387">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=387&amp;Stack=1&amp;Application_ID=2840
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
Assign Tasks To Roles
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs7290">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 640px; min-width: 200px;">
      <h2>
      Assign Tasks To Roles
      </h2>
      <p>
      These are the tasks that can be made available to users of this application.  You can assign these tasks to User Roles.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs7273">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP286201" id="OP286201" value="">
    <input type="hidden" name="OP2862810" id="OP2862810" value="">
  </div>
</div>
<div class="new-row" id="fs7274">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON4" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs7275">
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
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('7275,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('7275,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        <tr>
          <td>
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid7275">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB7275" id="ROWCOUNTCB7275" value="100">
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Authorized Task<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Task Description<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD7275ROW0DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=48&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW0DATA28626">
                  Backup Database
                </td>
                <td class="text-center " id="TD7275ROW0DATA28627">
                  Run the database backup function
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW1DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=119&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW1DATA28626">
                  Delete Multiple Photos
                </td>
                <td class="text-center " id="TD7275ROW1DATA28627">
                  Allows user to access the Delete Multiple Photos page, which allows you to delete a group of photos in one operation
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW2DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=128&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW2DATA28626">
                  Download Photos
                </td>
                <td class="text-center " id="TD7275ROW2DATA28627">
                  Download multiple photos from a photo gallery
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW3DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=86&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW3DATA28626">
                  Enter Fundraiser Sales From Booth
                </td>
                <td class="text-center " id="TD7275ROW3DATA28627">
                  Sell fundraiser items using the booth sales page
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW4DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=116&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW4DATA28626">
                  Enter Group Transaction For An Event
                </td>
                <td class="text-center " id="TD7275ROW4DATA28627">
                  Allow the user to access the "Add Group Transaction For Participants" button on the calendar detail page.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW5DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=100&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW5DATA28626">
                  Enter My Child's Advancement
                </td>
                <td class="text-center " id="TD7275ROW5DATA28627">
                  Allows a parent to sign off on requirements for his/her child's achievements
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW6DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=87&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW6DATA28626">
                  Enter My Fundraiser Orders
                </td>
                <td class="text-center " id="TD7275ROW6DATA28627">
                  Allows the user to enter fundraiser orders that he/she sold
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW7DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=88&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW7DATA28626">
                  Enter Payments For Fundraiser Sales
                </td>
                <td class="text-center " id="TD7275ROW7DATA28627">
                  Allows the user to enter monetary transactions that are linked to fundraiser orders
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW8DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=166&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW8DATA28626">
                  Events Hub
                </td>
                <td class="text-center " id="TD7275ROW8DATA28627">
                  View the Events Hub
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW9DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=165&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW9DATA28626">
                  Financial Hub
                </td>
                <td class="text-center " id="TD7275ROW9DATA28627">
                  View the financial hub page
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW10DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=52&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW10DATA28626">
                  Maintain Agenda and Minutes
                </td>
                <td class="text-center " id="TD7275ROW10DATA28627">
                  Upload documents to the event agenda and minutes
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW11DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=40&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW11DATA28626">
                  Maintain All E-Mail
                </td>
                <td class="text-center " id="TD7275ROW11DATA28627">
                  View, edit and delete any e-mail created from this site
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW12DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=36&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW12DATA28626">
                  Maintain Announcements
                </td>
                <td class="text-center " id="TD7275ROW12DATA28627">
                  Add, update, and delete announcements
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW13DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=66&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW13DATA28626">
                  Maintain Awards
                </td>
                <td class="text-center " id="TD7275ROW13DATA28627">
                  Add, update, and delete special awards for scouts and adults
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW14DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=177&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW14DATA28626">
                  Maintain Awards - Sign Off only
                </td>
                <td class="text-center " id="TD7275ROW14DATA28627">
                  Allows user to sign-off on awards for adults and scouts, but not access any other advancement features.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW15DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=67&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW15DATA28626">
                  Maintain Committees
                </td>
                <td class="text-center " id="TD7275ROW15DATA28627">
                  Add, change and delete committees and their members
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW16DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=118&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW16DATA28626">
                  Maintain Contact Reasons
                </td>
                <td class="text-center " id="TD7275ROW16DATA28627">
                  Maintain the list of possible reasons that may be selected from the Contact Us form
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW17DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=117&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW17DATA28626">
                  Maintain Contacts
                </td>
                <td class="text-center " id="TD7275ROW17DATA28627">
                  Maintain the information received from the Contact Us form
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW18DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=82&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW18DATA28626">
                  Maintain Cub Scout Advancement
                </td>
                <td class="text-center " id="TD7275ROW18DATA28627">
                  Enter and update the badges and adventures earned in the cub scout program
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW19DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=176&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW19DATA28626">
                  Maintain Cub Scout Advancement - Adventures and Badges only
                </td>
                <td class="text-center " id="TD7275ROW19DATA28627">
                  Allows user to access the Adventures &amp; Badges page, but none of the other advancement functions
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW20DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=95&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW20DATA28626">
                  Maintain Dynamic Subgroups
                </td>
                <td class="text-center " id="TD7275ROW20DATA28627">
                  Add, update and delete the definitions of dynamic subgroups
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW21DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=83&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW21DATA28626">
                  Maintain E-Mail Blocking
                </td>
                <td class="text-center " id="TD7275ROW21DATA28627">
                  View all e-mail addresses that are being blocked and remove them from the blacklist
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW22DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=44&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW22DATA28626">
                  Maintain E-Mail Groups
                </td>
                <td class="text-center " id="TD7275ROW22DATA28627">
                  Add, update, and delete e-mail groups
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW23DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=175&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW23DATA28626">
                  Maintain Event Auto Charge Amounts
                </td>
                <td class="text-center " id="TD7275ROW23DATA28627">
                  Allows user to set or update the amount to be automatically charged when a member signs up for an event
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW24DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=59&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW24DATA28626">
                  Maintain Event Configuration Tables
                </td>
                <td class="text-center " id="TD7275ROW24DATA28627">
                  Maintain the Event Type and Activity Type tables
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW25DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=55&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW25DATA28626">
                  Maintain Events
                </td>
                <td class="text-center " id="TD7275ROW25DATA28627">
                  Add and update events and locations, and all other related information
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW26DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=18&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW26DATA28626">
                  Maintain Financial Information
                </td>
                <td class="text-center " id="TD7275ROW26DATA28627">
                  Enter monetary transactions and configure the accounting subsystem
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW27DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=41&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW27DATA28626">
                  Maintain Forms
                </td>
                <td class="text-center " id="TD7275ROW27DATA28627">
                  Add, update and delete forms
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW28DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW28DATA28626">
                  Maintain Forum Topics and Postings
                </td>
                <td class="text-center " id="TD7275ROW28DATA28627">
                  View and edit any form topic or post
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW29DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=90&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW29DATA28626">
                  Maintain Fundraiser Inventory
                </td>
                <td class="text-center " id="TD7275ROW29DATA28627">
                  Enter transactions to track inventory of fundraiser merchandise
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW30DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=91&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW30DATA28626">
                  Maintain Fundraiser Inventory Transaction Types
                </td>
                <td class="text-center " id="TD7275ROW30DATA28627">
                  Maintain the fundraiser inventory transaction types
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW31DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=92&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW31DATA28626">
                  Maintain Fundraiser Orders
                </td>
                <td class="text-center " id="TD7275ROW31DATA28627">
                  Enter new  orders and  update existing orders for a fundraising drive
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW32DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=89&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW32DATA28626">
                  Maintain Fundraising Drives
                </td>
                <td class="text-center " id="TD7275ROW32DATA28627">
                  Create and manage fundraising drives
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW33DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=85&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW33DATA28626">
                  Maintain Girl Scout Advancement
                </td>
                <td class="text-center " id="TD7275ROW33DATA28627">
                  Enter and update the badges and journeys earned in the girl scout program
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW34DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=29&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW34DATA28626">
                  Maintain Group Equipment Information
                </td>
                <td class="text-center " id="TD7275ROW34DATA28627">
                  Manage group equipment inventory; check-in and check-out items to troop members.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW35DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=45&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW35DATA28626">
                  Maintain Leadership Records
                </td>
                <td class="text-center " id="TD7275ROW35DATA28627">
                  Maintain leadership records
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW36DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=28&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW36DATA28626">
                  Maintain Library Inventory
                </td>
                <td class="text-center " id="TD7275ROW36DATA28627">
                  Maintain library inventory;  check-out and check-in library materials.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW37DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=64&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW37DATA28626">
                  Maintain Manually Published Newsletters
                </td>
                <td class="text-center " id="TD7275ROW37DATA28627">
                  Upload newsletter documents that were created manually (not the automated newsletter)
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW38DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=25&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW38DATA28626">
                  Maintain Membership Information
                </td>
                <td class="text-center " id="TD7275ROW38DATA28627">
                  Add and update membership records
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW39DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=49&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW39DATA28626">
                  Maintain Newsletter Settings
                </td>
                <td class="text-center " id="TD7275ROW39DATA28627">
                  Configure the automated electronic newsletter
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW40DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=63&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW40DATA28626">
                  Maintain Resource Links
                </td>
                <td class="text-center " id="TD7275ROW40DATA28627">
                  Maintain a list of links to resources on other websites, to be displayed on the Resource Links page
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW41DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=103&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW41DATA28626">
                  Maintain Shirt Sizes
                </td>
                <td class="text-center " id="TD7275ROW41DATA28627">
                  Maintain the list of available shirt sizes
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW42DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=35&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW42DATA28626">
                  Maintain Site Configuration
                </td>
                <td class="text-center " id="TD7275ROW42DATA28627">
                  Maintain the security configuration tables and site appearance
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW43DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=124&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW43DATA28626">
                  Maintain Skills and Interests
                </td>
                <td class="text-center " id="TD7275ROW43DATA28627">
                  Maintain list of possible skills and interests
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW44DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=120&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW44DATA28626">
                  Maintain Surveys
                </td>
                <td class="text-center " id="TD7275ROW44DATA28627">
                  Add and update surveys of unit members
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW45DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=102&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW45DATA28626">
                  Maintain Training Courses
                </td>
                <td class="text-center " id="TD7275ROW45DATA28627">
                  Maintain the list of training courses that are valid for this group.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW46DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=46&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW46DATA28626">
                  Maintain Training Records
                </td>
                <td class="text-center " id="TD7275ROW46DATA28627">
                  Enter and update adult training records
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW47DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=115&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW47DATA28626">
                  Maintain TroopWebHost Administrative Contacts
                </td>
                <td class="text-center " id="TD7275ROW47DATA28627">
                  Select the members to receive periodic messages from TroopWebHost
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW48DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=33&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW48DATA28626">
                  Maintain User IDs and Passwords
                </td>
                <td class="text-center " id="TD7275ROW48DATA28627">
                  Maintain user IDs and passwords
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW49DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=77&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW49DATA28626">
                  Make On-Line Payments
                </td>
                <td class="text-center " id="TD7275ROW49DATA28627">
                  Make on-line payments to the group using PayPal or Square
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW50DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=167&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW50DATA28626">
                  Membership Hub
                </td>
                <td class="text-center " id="TD7275ROW50DATA28627">
                  View the Membership Hub
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW51DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=151&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW51DATA28626">
                  Mobile App - Feature - CC Leaders On Texts
                </td>
                <td class="text-center " id="TD7275ROW51DATA28627">
                  When a scout sends a text to an adult, or an adult sends a text to a scout, add the designated leaders to the recipient list
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW52DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=153&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW52DATA28626">
                  Mobile App - Feature - Enter Activity Credits
                </td>
                <td class="text-center " id="TD7275ROW52DATA28627">
                  Allow mobile app user to enter the credits earned on an event for camping nights, service hours, hiking miles, etc., and override those credits for individual scouts
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW53DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="650" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=179&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW53DATA28626">
                  Mobile App - Feature - Send Message
                </td>
                <td class="text-center " id="TD7275ROW53DATA28627">
                  Allows a user of the TroopWebHost Mobile App to compose and send a message to other members of the unit.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW54DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="660" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=158&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW54DATA28626">
                  Mobile App - Feature - Send Message To Group From Event
                </td>
                <td class="text-center " id="TD7275ROW54DATA28627">
                  It will allow the user to initiate a message from an event, with options to go to the participants, or participants' parents, etc.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW55DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="670" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=150&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW55DATA28626">
                  Mobile App - Feature - Send Text To Individual Member
                </td>
                <td class="text-center " id="TD7275ROW55DATA28627">
                  Allow mobile app user to initiate a text message to any other individual member
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW56DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="680" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=156&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW56DATA28626">
                  Mobile App - Feature - Sign Off On Cub Scout Requirements
                </td>
                <td class="text-center " id="TD7275ROW56DATA28627">
                  Allow user of TWH mobile app to sign off on requirements for adventures and awards.  User must also be authorized for "View All Cub Scouts Advancement"
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW57DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="690" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=157&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW57DATA28626">
                  Mobile App - Feature - Sign Off On My Family's Cub Scout Advancement
                </td>
                <td class="text-center " id="TD7275ROW57DATA28627">
                  Allow a parent to sign off on their children's cub scout advancement.  Requires access to the My Family menu item.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW58DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="700" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=144&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW58DATA28626">
                  Mobile App - Feature - Take Attendance From Calendar
                </td>
                <td class="text-center " id="TD7275ROW58DATA28627">
                  Allow mobile app user to take attendance for an event or shift selected from the calendar
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW59DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="710" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=155&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW59DATA28626">
                  Mobile App - Feature - View All Cub Scouts Advancement
                </td>
                <td class="text-center " id="TD7275ROW59DATA28627">
                  Allows user to view advancement status for any cub scout.  Must be authorized for user to sign off on requirements.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW60DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="720" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=161&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW60DATA28626">
                  Mobile App - Feature – View Event Participant Balances
                </td>
                <td class="text-center " id="TD7275ROW60DATA28627">
                  Allow user of the mobile app to view member balances on the event participant list
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW61DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="730" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=160&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW61DATA28626">
                  Mobile App - Feature - View Member Account Balances
                </td>
                <td class="text-center " id="TD7275ROW61DATA28627">
                  Allow user of the mobile app to view the balances of any member
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW62DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="740" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=145&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW62DATA28626">
                  Mobile App - Feature - View Member Contact Info
                </td>
                <td class="text-center " id="TD7275ROW62DATA28627">
                  Allow mobile app user to view phone numbers, email addresses, and home address for any member
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW63DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="750" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=148&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW63DATA28626">
                  Mobile App - Feature - View Member Emergency Contacts
                </td>
                <td class="text-center " id="TD7275ROW63DATA28627">
                  Allow mobile app user to view the emergency contacts for any member
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW64DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="760" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=146&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW64DATA28626">
                  Mobile App - Feature - View Member Medical Info
                </td>
                <td class="text-center " id="TD7275ROW64DATA28627">
                  Allow mobile app user to view the medical information for any member
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW65DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="770" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=149&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW65DATA28626">
                  Mobile App - Feature - View Member Swim Test
                </td>
                <td class="text-center " id="TD7275ROW65DATA28627">
                  Allow mobile app user to view the swim test results for any member
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW66DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="780" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=147&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW66DATA28626">
                  Mobile App - Feature - View Member Training
                </td>
                <td class="text-center " id="TD7275ROW66DATA28627">
                  Allow mobile app user to view the YPT status of any adult member
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW67DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="790" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=159&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW67DATA28626">
                  Mobile App - Feature - View My Account Balance
                </td>
                <td class="text-center " id="TD7275ROW67DATA28627">
                  Allow user of the mobile app to view their own account balance and those of their family members
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW68DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="800" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=152&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW68DATA28626">
                  Mobile App - Feature - View Personal Identifiers
                </td>
                <td class="text-center " id="TD7275ROW68DATA28627">
                  Allow mobile app user to view the date of birth and BSA ID for any member
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW69DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="810" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=130&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW69DATA28626">
                  Mobile App - Menu - Calendar
                </td>
                <td class="text-center " id="TD7275ROW69DATA28627">
                  Allow user of TWH Mobile App to access the "Calendar" menu item
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW70DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="820" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=163&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW70DATA28626">
                  Mobile App - Menu - Equipment Inventory
                </td>
                <td class="text-center " id="TD7275ROW70DATA28627">
                  Allows user to check in and check out troop equipment
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW71DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="830" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=142&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW71DATA28626">
                  Mobile App - Menu - Launch Website
                </td>
                <td class="text-center " id="TD7275ROW71DATA28627">
                  Allow user of TWH Mobile App to access the "Launch Website" menu item
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW72DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="840" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=162&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW72DATA28626">
                  Mobile App - Menu - Library Inventory
                </td>
                <td class="text-center " id="TD7275ROW72DATA28627">
                  Allows user to check in and check out library materials
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW73DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="850" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=133&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW73DATA28626">
                  Mobile App - Menu - Member Directory
                </td>
                <td class="text-center " id="TD7275ROW73DATA28627">
                  Allow user of TWH Mobile App to access the "Member Directory" menu item
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW74DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="860" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=178&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW74DATA28626">
                  Mobile App - Menu - Messages
                </td>
                <td class="text-center " id="TD7275ROW74DATA28627">
                  Allows user of the TroopWebHost Mobile App to access the "Messages" menu item.
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW75DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="870" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=129&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW75DATA28626">
                  Mobile App - Menu - My Account
                </td>
                <td class="text-center " id="TD7275ROW75DATA28627">
                  Allow user of TWH Mobile App to access the "My Account" menu item
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW76DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="880" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=135&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW76DATA28626">
                  Mobile App - Menu - My Achievements (Girl Scout)
                </td>
                <td class="text-center " id="TD7275ROW76DATA28627">
                  NOT YET AVAILABLE! Allow girl scout user of TWH Mobile App to access the "My Girl Scout Achievements" menu item
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW77DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="890" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=132&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW77DATA28626">
                  Mobile App - Menu - My Advancement (Cub Scout)
                </td>
                <td class="text-center " id="TD7275ROW77DATA28627">
                  Allow Cub Scout user of TWH Mobile App to access the "My Adventures" menu item
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW78DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="900" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=154&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW78DATA28626">
                  Mobile App - Menu - My Family
                </td>
                <td class="text-center " id="TD7275ROW78DATA28627">
                  Allow adult user of TWH mobile app to view a list of their scouts, from which they can update personal information and view advancement
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW79DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="910" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=141&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW79DATA28626">
                  Mobile App - Menu - Refresh Data
                </td>
                <td class="text-center " id="TD7275ROW79DATA28627">
                  Allow user of TWH Mobile App to access the "Refresh Data" menu item
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW80DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="920" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=126&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW80DATA28626">
                  My Skills and Interests
                </td>
                <td class="text-center " id="TD7275ROW80DATA28627">
                  Allows the user to check off a list of their skills and interests
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW81DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="930" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=37&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW81DATA28626">
                  My Stuff
                </td>
                <td class="text-center " id="TD7275ROW81DATA28627">
                  Access the My Stuff menu options for Change My Password, My Contact Information and Sign Up
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW82DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="940" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=170&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW82DATA28626">
                  My Stuff (Adult) Hub
                </td>
                <td class="text-center " id="TD7275ROW82DATA28627">
                  View the My Stuff hub for adults
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW83DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="950" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=171&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW83DATA28626">
                  My Stuff (Scout) Hub
                </td>
                <td class="text-center " id="TD7275ROW83DATA28627">
                  View the My Stuff hub for scouts
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW84DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="960" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=71&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW84DATA28626">
                  My Stuff My Account
                </td>
                <td class="text-center " id="TD7275ROW84DATA28627">
                  Access the My Account option from the My Stuff menu
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW85DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="970" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=75&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW85DATA28626">
                  My Stuff My Awards
                </td>
                <td class="text-center " id="TD7275ROW85DATA28627">
                  Access the My Awards option from the My Stuff menu
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW86DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="980" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=73&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW86DATA28626">
                  My Stuff My Equipment
                </td>
                <td class="text-center " id="TD7275ROW86DATA28627">
                  Access the My Equipment option from the My Stuff menu
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW87DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="990" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=70&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW87DATA28626">
                  My Stuff My Family
                </td>
                <td class="text-center " id="TD7275ROW87DATA28627">
                  Access the My Family option from the My Stuff menu
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW88DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1000" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=72&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW88DATA28626">
                  My Stuff My Library Materials
                </td>
                <td class="text-center " id="TD7275ROW88DATA28627">
                  Access the My Library Materials option from the My Stuff menu
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW89DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1010" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=74&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW89DATA28626">
                  My Stuff My Training History
                </td>
                <td class="text-center " id="TD7275ROW89DATA28627">
                  Access the My Training History option from the My Stuff menu
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW90DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1020" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=127&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW90DATA28626">
                  Payment Collector
                </td>
                <td class="text-center " id="TD7275ROW90DATA28627">
                  Use the Payment Collector module to accept in person payments to member accounts with cash, checks, or credit cards
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW91DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1030" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=101&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW91DATA28626">
                  Renew Subscription
                </td>
                <td class="text-center " id="TD7275ROW91DATA28627">
                  Access the page to renew the subscription for this site
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW92DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1040" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=105&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW92DATA28626">
                  Review Expense Reimbursement Requests
                </td>
                <td class="text-center " id="TD7275ROW92DATA28627">
                  Allows user to approve or reject pending requests for expense reimbursement
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW93DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1050" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=38&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW93DATA28626">
                  Send E-Mail
                </td>
                <td class="text-center " id="TD7275ROW93DATA28627">
                  Send e-mails to other members
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW94DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1060" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=58&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW94DATA28626">
                  Send Invitation
                </td>
                <td class="text-center " id="TD7275ROW94DATA28627">
                  Send event invitations to other members
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW95DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1070" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=114&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW95DATA28626">
                  Send Quick Text Message
                </td>
                <td class="text-center " id="TD7275ROW95DATA28627">
                  Send a quick text message to event participants
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW96DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1080" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=108&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW96DATA28626">
                  Set Award Date
                </td>
                <td class="text-center " id="TD7275ROW96DATA28627">
                  Access the Set Award Date page
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW97DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1090" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=106&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW97DATA28626">
                  Submit Expense Reimbursement Requests
                </td>
                <td class="text-center " id="TD7275ROW97DATA28627">
                  Allows user to submit requests for expense reimbursement to the treasurer
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW98DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1100" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=78&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW98DATA28626">
                  Subscribe to Calendar
                </td>
                <td class="text-center " id="TD7275ROW98DATA28627">
                  Allows user to subscribe to the group calendar from Google Calendar or other calendar software
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD7275ROW99DATA28623">
                  <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1110" id="BUTTON5" type="button" name="update" title="Assign To Roles" value="Assign To Roles" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=387&amp;Form_ID=1459&amp;FK=0&amp;ID=56&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD7275ROW99DATA28626">
                  Take Attendance
                </td>
                <td class="text-center " id="TD7275ROW99DATA28627">
                  Take attendance for events
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="3" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=387&amp;Form_ID=1461&amp;Stack=1&amp;SectionID=7275&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=387&amp;Form_ID=1461&amp;Stack=1&amp;SectionID=7275&amp;ReportFormat=XLS','_blank');">
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
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('7275,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('7275,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
      </tbody></table>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON4">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>