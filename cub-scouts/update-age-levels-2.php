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
<link rel="stylesheet" type="text/css" href="">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="417">
<input type="hidden" name="Form_ID" id="Form_ID" value="2002">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5787&amp;Stack=0','');">Events Hub</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=1','');">Users &amp; Passwords</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5787&amp;Stack=0','');">Events Hub</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=417">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=417">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=417">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=275" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=417">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=417">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=417">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=417">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx&amp;Application_ID=2840
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
Update Cub Scout Age Levels
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs9472">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
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
<div class="new-row" id="fs9471">
  <div class="container-fluid container-flex">
    <input type="hidden" name="OP338972" id="OP338972" value="">
    <input type="hidden" name="OP339062" id="OP339062" value="">
    <input type="hidden" name="OP558985" id="OP558985" value="">
    <input type="hidden" name="OP5589969" id="OP5589969" value="">
    <input type="hidden" name="OP6480753" id="OP6480753" value="">
  </div>
</div>
<div class="new-row" id="fs9474">
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
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('9474,2');">2</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('9474,3');">3</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('9474,4');">4</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('9474,5');">5</a></li><li><a href="javascript:GoToSectionPageNumber('9474,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        <tr>
          <td>
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid9474">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB9474" id="ROWCOUNTCB9474" value="20">
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Name<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Age<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Grade<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Level<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Den<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Membership #<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW0" id="CHILDCB9474ROW0" value="1018">
                <td class="text-center " id="TD9474ROW0DATA33948">
                  Aarons, Andrew
                </td>
                <td class="text-center " id="TD9474ROW0DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW0DATA64806">
                  1
                </td>
                <td class="text-center " id="TD9474ROW0DATA33950">
                  <input type="hidden" name="OLDCB9474ROW0DATA33950" id="OLDCB9474ROW0DATA33950" value="3">
                  <select id="CB9474ROW0DATA33950" name="CB9474ROW0DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option selected="" value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW0DATA34563">
                  <input type="hidden" name="OLDCB9474ROW0DATA34563" id="OLDCB9474ROW0DATA34563" value="9">
                  <input type="text" class="form-control" id="CB9474ROW0DATA34563" name="CB9474ROW0DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="9" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW0DATA54673">
                  <input type="hidden" name="OLDCB9474ROW0DATA54673" id="OLDCB9474ROW0DATA54673" value="141145570">
                  <input type="text" class="form-control" id="CB9474ROW0DATA54673" name="CB9474ROW0DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141145570" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW1" id="CHILDCB9474ROW1" value="910">
                <td class="text-center " id="TD9474ROW1DATA33948">
                  Abbott, Albert
                </td>
                <td class="text-center " id="TD9474ROW1DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW1DATA64806">
                  1
                </td>
                <td class="text-center " id="TD9474ROW1DATA33950">
                  <input type="hidden" name="OLDCB9474ROW1DATA33950" id="OLDCB9474ROW1DATA33950" value="4">
                  <select id="CB9474ROW1DATA33950" name="CB9474ROW1DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option selected="" value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW1DATA34563">
                  <input type="hidden" name="OLDCB9474ROW1DATA34563" id="OLDCB9474ROW1DATA34563" value="10">
                  <input type="text" class="form-control" id="CB9474ROW1DATA34563" name="CB9474ROW1DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="10" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW1DATA54673">
                  <input type="hidden" name="OLDCB9474ROW1DATA54673" id="OLDCB9474ROW1DATA54673" value="140478818">
                  <input type="text" class="form-control" id="CB9474ROW1DATA54673" name="CB9474ROW1DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140478818" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW2" id="CHILDCB9474ROW2" value="1063">
                <td class="text-center " id="TD9474ROW2DATA33948">
                  Almaraz, Alexander
                </td>
                <td class="text-center " id="TD9474ROW2DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW2DATA64806">
                  3
                </td>
                <td class="text-center " id="TD9474ROW2DATA33950">
                  <input type="hidden" name="OLDCB9474ROW2DATA33950" id="OLDCB9474ROW2DATA33950" value="118">
                  <select id="CB9474ROW2DATA33950" name="CB9474ROW2DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option selected="" value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW2DATA34563">
                  <input type="hidden" name="OLDCB9474ROW2DATA34563" id="OLDCB9474ROW2DATA34563" value="2">
                  <input type="text" class="form-control" id="CB9474ROW2DATA34563" name="CB9474ROW2DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="2" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW2DATA54673">
                  <input type="hidden" name="OLDCB9474ROW2DATA54673" id="OLDCB9474ROW2DATA54673" value="141326187">
                  <input type="text" class="form-control" id="CB9474ROW2DATA54673" name="CB9474ROW2DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141326187" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW3" id="CHILDCB9474ROW3" value="1239">
                <td class="text-center " id="TD9474ROW3DATA33948">
                  Alvarez, Layla
                </td>
                <td class="text-center " id="TD9474ROW3DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW3DATA64806">
                  1
                </td>
                <td class="text-center " id="TD9474ROW3DATA33950">
                  <input type="hidden" name="OLDCB9474ROW3DATA33950" id="OLDCB9474ROW3DATA33950" value="2">
                  <select id="CB9474ROW3DATA33950" name="CB9474ROW3DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option selected="" value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW3DATA34563">
                  <input type="hidden" name="OLDCB9474ROW3DATA34563" id="OLDCB9474ROW3DATA34563" value="6">
                  <input type="text" class="form-control" id="CB9474ROW3DATA34563" name="CB9474ROW3DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="6" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW3DATA54673">
                  <input type="hidden" name="OLDCB9474ROW3DATA54673" id="OLDCB9474ROW3DATA54673" value="141823106">
                  <input type="text" class="form-control" id="CB9474ROW3DATA54673" name="CB9474ROW3DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141823106" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW4" id="CHILDCB9474ROW4" value="664">
                <td class="text-center " id="TD9474ROW4DATA33948">
                  Alvarez, Mateo
                </td>
                <td class="text-center " id="TD9474ROW4DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW4DATA64806">
                  2
                </td>
                <td class="text-center " id="TD9474ROW4DATA33950">
                  <input type="hidden" name="OLDCB9474ROW4DATA33950" id="OLDCB9474ROW4DATA33950" value="118">
                  <select id="CB9474ROW4DATA33950" name="CB9474ROW4DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option selected="" value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW4DATA34563">
                  <input type="hidden" name="OLDCB9474ROW4DATA34563" id="OLDCB9474ROW4DATA34563" value="2">
                  <input type="text" class="form-control" id="CB9474ROW4DATA34563" name="CB9474ROW4DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="2" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW4DATA54673">
                  <input type="hidden" name="OLDCB9474ROW4DATA54673" id="OLDCB9474ROW4DATA54673" value="14416426">
                  <input type="text" class="form-control" id="CB9474ROW4DATA54673" name="CB9474ROW4DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14416426" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW5" id="CHILDCB9474ROW5" value="1240">
                <td class="text-center " id="TD9474ROW5DATA33948">
                  Applegate, Sebastian
                </td>
                <td class="text-center " id="TD9474ROW5DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW5DATA64806">
                  3
                </td>
                <td class="text-center " id="TD9474ROW5DATA33950">
                  <input type="hidden" name="OLDCB9474ROW5DATA33950" id="OLDCB9474ROW5DATA33950" value="4">
                  <select id="CB9474ROW5DATA33950" name="CB9474ROW5DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option selected="" value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW5DATA34563">
                  <input type="hidden" name="OLDCB9474ROW5DATA34563" id="OLDCB9474ROW5DATA34563" value="4">
                  <input type="text" class="form-control" id="CB9474ROW5DATA34563" name="CB9474ROW5DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="4" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW5DATA54673">
                  <input type="hidden" name="OLDCB9474ROW5DATA54673" id="OLDCB9474ROW5DATA54673" value="141860675">
                  <input type="text" class="form-control" id="CB9474ROW5DATA54673" name="CB9474ROW5DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141860675" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW6" id="CHILDCB9474ROW6" value="1184">
                <td class="text-center " id="TD9474ROW6DATA33948">
                  Babb, Tyson
                </td>
                <td class="text-center " id="TD9474ROW6DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW6DATA64806">
                  2
                </td>
                <td class="text-center " id="TD9474ROW6DATA33950">
                  <input type="hidden" name="OLDCB9474ROW6DATA33950" id="OLDCB9474ROW6DATA33950" value="3">
                  <select id="CB9474ROW6DATA33950" name="CB9474ROW6DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option selected="" value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW6DATA34563">
                  <input type="hidden" name="OLDCB9474ROW6DATA34563" id="OLDCB9474ROW6DATA34563" value="11">
                  <input type="text" class="form-control" id="CB9474ROW6DATA34563" name="CB9474ROW6DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="11" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW6DATA54673">
                  <input type="hidden" name="OLDCB9474ROW6DATA54673" id="OLDCB9474ROW6DATA54673" value="141761657">
                  <input type="text" class="form-control" id="CB9474ROW6DATA54673" name="CB9474ROW6DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141761657" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW7" id="CHILDCB9474ROW7" value="488">
                <td class="text-center " id="TD9474ROW7DATA33948">
                  Bayes, Dylan
                </td>
                <td class="text-center " id="TD9474ROW7DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW7DATA64806">
                  4
                </td>
                <td class="text-center " id="TD9474ROW7DATA33950">
                  <input type="hidden" name="OLDCB9474ROW7DATA33950" id="OLDCB9474ROW7DATA33950" value="119">
                  <select id="CB9474ROW7DATA33950" name="CB9474ROW7DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option selected="" value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW7DATA34563">
                  <input type="hidden" name="OLDCB9474ROW7DATA34563" id="OLDCB9474ROW7DATA34563" value="5">
                  <input type="text" class="form-control" id="CB9474ROW7DATA34563" name="CB9474ROW7DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="5" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW7DATA54673">
                  <input type="hidden" name="OLDCB9474ROW7DATA54673" id="OLDCB9474ROW7DATA54673" value="13890034">
                  <input type="text" class="form-control" id="CB9474ROW7DATA54673" name="CB9474ROW7DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="13890034" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW8" id="CHILDCB9474ROW8" value="1617">
                <td class="text-center " id="TD9474ROW8DATA33948">
                  Benson, Nicolas
                </td>
                <td class="text-center " id="TD9474ROW8DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW8DATA64806">
                  0
                </td>
                <td class="text-center " id="TD9474ROW8DATA33950">
                  <input type="hidden" name="OLDCB9474ROW8DATA33950" id="OLDCB9474ROW8DATA33950" value="4">
                  <select id="CB9474ROW8DATA33950" name="CB9474ROW8DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option selected="" value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW8DATA34563">
                  <input type="hidden" name="OLDCB9474ROW8DATA34563" id="OLDCB9474ROW8DATA34563" value="4">
                  <input type="text" class="form-control" id="CB9474ROW8DATA34563" name="CB9474ROW8DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="4" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW8DATA54673">
                  <input type="hidden" name="OLDCB9474ROW8DATA54673" id="OLDCB9474ROW8DATA54673" value="142378570">
                  <input type="text" class="form-control" id="CB9474ROW8DATA54673" name="CB9474ROW8DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142378570" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW9" id="CHILDCB9474ROW9" value="1154">
                <td class="text-center " id="TD9474ROW9DATA33948">
                  Blair, Frankie
                </td>
                <td class="text-center " id="TD9474ROW9DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW9DATA64806">
                  2
                </td>
                <td class="text-center " id="TD9474ROW9DATA33950">
                  <input type="hidden" name="OLDCB9474ROW9DATA33950" id="OLDCB9474ROW9DATA33950" value="3">
                  <select id="CB9474ROW9DATA33950" name="CB9474ROW9DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option selected="" value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW9DATA34563">
                  <input type="hidden" name="OLDCB9474ROW9DATA34563" id="OLDCB9474ROW9DATA34563" value="11">
                  <input type="text" class="form-control" id="CB9474ROW9DATA34563" name="CB9474ROW9DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="11" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW9DATA54673">
                  <input type="hidden" name="OLDCB9474ROW9DATA54673" id="OLDCB9474ROW9DATA54673" value="141705347">
                  <input type="text" class="form-control" id="CB9474ROW9DATA54673" name="CB9474ROW9DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141705347" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW10" id="CHILDCB9474ROW10" value="1155">
                <td class="text-center " id="TD9474ROW10DATA33948">
                  Blair, Joe
                </td>
                <td class="text-center " id="TD9474ROW10DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW10DATA64806">
                  4
                </td>
                <td class="text-center " id="TD9474ROW10DATA33950">
                  <input type="hidden" name="OLDCB9474ROW10DATA33950" id="OLDCB9474ROW10DATA33950" value="118">
                  <select id="CB9474ROW10DATA33950" name="CB9474ROW10DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option selected="" value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW10DATA34563">
                  <input type="hidden" name="OLDCB9474ROW10DATA34563" id="OLDCB9474ROW10DATA34563" value="12">
                  <input type="text" class="form-control" id="CB9474ROW10DATA34563" name="CB9474ROW10DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="12" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW10DATA54673">
                  <input type="hidden" name="OLDCB9474ROW10DATA54673" id="OLDCB9474ROW10DATA54673" value="141705328">
                  <input type="text" class="form-control" id="CB9474ROW10DATA54673" name="CB9474ROW10DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141705328" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW11" id="CHILDCB9474ROW11" value="1156">
                <td class="text-center " id="TD9474ROW11DATA33948">
                  Bruyn, Emerson
                </td>
                <td class="text-center " id="TD9474ROW11DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW11DATA64806">
                  1
                </td>
                <td class="text-center " id="TD9474ROW11DATA33950">
                  <input type="hidden" name="OLDCB9474ROW11DATA33950" id="OLDCB9474ROW11DATA33950" value="2">
                  <select id="CB9474ROW11DATA33950" name="CB9474ROW11DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option selected="" value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW11DATA34563">
                  <input type="hidden" name="OLDCB9474ROW11DATA34563" id="OLDCB9474ROW11DATA34563" value="6">
                  <input type="text" class="form-control" id="CB9474ROW11DATA34563" name="CB9474ROW11DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="6" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW11DATA54673">
                  <input type="hidden" name="OLDCB9474ROW11DATA54673" id="OLDCB9474ROW11DATA54673" value="141695536">
                  <input type="text" class="form-control" id="CB9474ROW11DATA54673" name="CB9474ROW11DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141695536" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW12" id="CHILDCB9474ROW12" value="964">
                <td class="text-center " id="TD9474ROW12DATA33948">
                  Bucklin, Emmett
                </td>
                <td class="text-center " id="TD9474ROW12DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW12DATA64806">
                  1
                </td>
                <td class="text-center " id="TD9474ROW12DATA33950">
                  <input type="hidden" name="OLDCB9474ROW12DATA33950" id="OLDCB9474ROW12DATA33950" value="118">
                  <select id="CB9474ROW12DATA33950" name="CB9474ROW12DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option selected="" value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW12DATA34563">
                  <input type="hidden" name="OLDCB9474ROW12DATA34563" id="OLDCB9474ROW12DATA34563" value="2">
                  <input type="text" class="form-control" id="CB9474ROW12DATA34563" name="CB9474ROW12DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="2" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW12DATA54673">
                  <input type="hidden" name="OLDCB9474ROW12DATA54673" id="OLDCB9474ROW12DATA54673" value="141089159">
                  <input type="text" class="form-control" id="CB9474ROW12DATA54673" name="CB9474ROW12DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141089159" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW13" id="CHILDCB9474ROW13" value="762">
                <td class="text-center " id="TD9474ROW13DATA33948">
                  Bush, Kai
                </td>
                <td class="text-center " id="TD9474ROW13DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW13DATA64806">
                  1
                </td>
                <td class="text-center " id="TD9474ROW13DATA33950">
                  <input type="hidden" name="OLDCB9474ROW13DATA33950" id="OLDCB9474ROW13DATA33950" value="4">
                  <select id="CB9474ROW13DATA33950" name="CB9474ROW13DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option selected="" value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW13DATA34563">
                  <input type="hidden" name="OLDCB9474ROW13DATA34563" id="OLDCB9474ROW13DATA34563" value="4">
                  <input type="text" class="form-control" id="CB9474ROW13DATA34563" name="CB9474ROW13DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="4" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW13DATA54673">
                  <input type="hidden" name="OLDCB9474ROW13DATA54673" id="OLDCB9474ROW13DATA54673" value="140355039">
                  <input type="text" class="form-control" id="CB9474ROW13DATA54673" name="CB9474ROW13DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140355039" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW14" id="CHILDCB9474ROW14" value="1618">
                <td class="text-center " id="TD9474ROW14DATA33948">
                  Byrd, Barrett
                </td>
                <td class="text-center " id="TD9474ROW14DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW14DATA64806">
                  0
                </td>
                <td class="text-center " id="TD9474ROW14DATA33950">
                  <input type="hidden" name="OLDCB9474ROW14DATA33950" id="OLDCB9474ROW14DATA33950" value="117">
                  <select id="CB9474ROW14DATA33950" name="CB9474ROW14DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option selected="" value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW14DATA34563">
                  <input type="hidden" name="OLDCB9474ROW14DATA34563" id="OLDCB9474ROW14DATA34563" value="1">
                  <input type="text" class="form-control" id="CB9474ROW14DATA34563" name="CB9474ROW14DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="1" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW14DATA54673">
                  <input type="hidden" name="OLDCB9474ROW14DATA54673" id="OLDCB9474ROW14DATA54673" value="142361001">
                  <input type="text" class="form-control" id="CB9474ROW14DATA54673" name="CB9474ROW14DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="142361001" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW15" id="CHILDCB9474ROW15" value="763">
                <td class="text-center " id="TD9474ROW15DATA33948">
                  Byrd, Benjamin
                </td>
                <td class="text-center " id="TD9474ROW15DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW15DATA64806">
                  1
                </td>
                <td class="text-center " id="TD9474ROW15DATA33950">
                  <input type="hidden" name="OLDCB9474ROW15DATA33950" id="OLDCB9474ROW15DATA33950" value="4">
                  <select id="CB9474ROW15DATA33950" name="CB9474ROW15DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option selected="" value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW15DATA34563">
                  <input type="hidden" name="OLDCB9474ROW15DATA34563" id="OLDCB9474ROW15DATA34563" value="4">
                  <input type="text" class="form-control" id="CB9474ROW15DATA34563" name="CB9474ROW15DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="4" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW15DATA54673">
                  <input type="hidden" name="OLDCB9474ROW15DATA54673" id="OLDCB9474ROW15DATA54673" value="140382790">
                  <input type="text" class="form-control" id="CB9474ROW15DATA54673" name="CB9474ROW15DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="140382790" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW16" id="CHILDCB9474ROW16" value="984">
                <td class="text-center " id="TD9474ROW16DATA33948">
                  De Los Santos Garza, Andrea
                </td>
                <td class="text-center " id="TD9474ROW16DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW16DATA64806">
                  1
                </td>
                <td class="text-center " id="TD9474ROW16DATA33950">
                  <input type="hidden" name="OLDCB9474ROW16DATA33950" id="OLDCB9474ROW16DATA33950" value="3">
                  <select id="CB9474ROW16DATA33950" name="CB9474ROW16DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option selected="" value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW16DATA34563">
                  <input type="hidden" name="OLDCB9474ROW16DATA34563" id="OLDCB9474ROW16DATA34563" value="9">
                  <input type="text" class="form-control" id="CB9474ROW16DATA34563" name="CB9474ROW16DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="9" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW16DATA54673">
                  <input type="hidden" name="OLDCB9474ROW16DATA54673" id="OLDCB9474ROW16DATA54673" value="141090813">
                  <input type="text" class="form-control" id="CB9474ROW16DATA54673" name="CB9474ROW16DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141090813" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW17" id="CHILDCB9474ROW17" value="965">
                <td class="text-center " id="TD9474ROW17DATA33948">
                  De Los Santos Garza, Leo  Jr.
                </td>
                <td class="text-center " id="TD9474ROW17DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW17DATA64806">
                  2
                </td>
                <td class="text-center " id="TD9474ROW17DATA33950">
                  <input type="hidden" name="OLDCB9474ROW17DATA33950" id="OLDCB9474ROW17DATA33950" value="4">
                  <select id="CB9474ROW17DATA33950" name="CB9474ROW17DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option selected="" value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW17DATA34563">
                  <input type="hidden" name="OLDCB9474ROW17DATA34563" id="OLDCB9474ROW17DATA34563" value="10">
                  <input type="text" class="form-control" id="CB9474ROW17DATA34563" name="CB9474ROW17DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="10" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW17DATA54673">
                  <input type="hidden" name="OLDCB9474ROW17DATA54673" id="OLDCB9474ROW17DATA54673" value="141089461">
                  <input type="text" class="form-control" id="CB9474ROW17DATA54673" name="CB9474ROW17DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141089461" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW18" id="CHILDCB9474ROW18" value="1135">
                <td class="text-center " id="TD9474ROW18DATA33948">
                  DeMartini, Emilia
                </td>
                <td class="text-center " id="TD9474ROW18DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW18DATA64806">
                  2
                </td>
                <td class="text-center " id="TD9474ROW18DATA33950">
                  <input type="hidden" name="OLDCB9474ROW18DATA33950" id="OLDCB9474ROW18DATA33950" value="3">
                  <select id="CB9474ROW18DATA33950" name="CB9474ROW18DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option selected="" value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW18DATA34563">
                  <input type="hidden" name="OLDCB9474ROW18DATA34563" id="OLDCB9474ROW18DATA34563" value="11">
                  <input type="text" class="form-control" id="CB9474ROW18DATA34563" name="CB9474ROW18DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="11" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW18DATA54673">
                  <input type="hidden" name="OLDCB9474ROW18DATA54673" id="OLDCB9474ROW18DATA54673" value="141615743">
                  <input type="text" class="form-control" id="CB9474ROW18DATA54673" name="CB9474ROW18DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141615743" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
                </td>
              </tr>
              <tr>
                <input type="hidden" name="CHILDCB9474ROW19" id="CHILDCB9474ROW19" value="1136">
                <td class="text-center " id="TD9474ROW19DATA33948">
                  DeMartini, Vincent
                </td>
                <td class="text-center " id="TD9474ROW19DATA33949">
                  &nbsp;
                </td>
                <td class="text-center " id="TD9474ROW19DATA64806">
                  2
                </td>
                <td class="text-center " id="TD9474ROW19DATA33950">
                  <input type="hidden" name="OLDCB9474ROW19DATA33950" id="OLDCB9474ROW19DATA33950" value="118">
                  <select id="CB9474ROW19DATA33950" name="CB9474ROW19DATA33950" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The level of the scouting program this scout is currently at, based on age." size="1">
                    <option value="0"> </option>
                    <option value="117">Lion</option>
                    <option value="2">Tiger</option>
                    <option value="3">Wolf</option>
                    <option value="4">Bear</option>
                    <option selected="" value="118">Webelos</option>
                    <option value="119">AOL</option>
                    <option value="5">Webelos / AOL</option>
                  </select>
                </td>
                <td class="text-center " id="TD9474ROW19DATA34563">
                  <input type="hidden" name="OLDCB9474ROW19DATA34563" id="OLDCB9474ROW19DATA34563" value="12">
                  <input type="text" class="form-control" id="CB9474ROW19DATA34563" name="CB9474ROW19DATA34563" tabindex="130" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="12" title="The den number to which this member belongs" style="background-color: rgb(255, 255, 255);">
                </td>
                <td class="text-center " id="TD9474ROW19DATA54673">
                  <input type="hidden" name="OLDCB9474ROW19DATA54673" id="OLDCB9474ROW19DATA54673" value="14649679">
                  <input type="text" class="form-control" id="CB9474ROW19DATA54673" name="CB9474ROW19DATA54673" tabindex="130" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="14649679" title="This person's membership ID number" style="background-color: rgb(255, 255, 255);">
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
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('9474,2');">2</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('9474,3');">3</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('9474,4');">4</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('9474,5');">5</a></li><li><a href="javascript:GoToSectionPageNumber('9474,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
      </tbody></table>
    </div>
  </div>
</div>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON0" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON2" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="160" id="BUTTON3" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON3">
        </span>
        <span style="display:inline;">
        </span>
      </div>
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
  if (tempname.match(/^CB9474ROW[0-9]+DATA34563/)) {TestRegExp(tempobj,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.'); }if (tempname.match(/^CB9474ROW[0-9]+DATA54673/)) {TestRegExp(tempobj,/^[+]?\d\d*$/,'This field only allows numbers'); }
      }
      catch(err)
      {
      }
    }
  }
</script>
<div style="height: 100px;">&nbsp;</div>


</body></html>