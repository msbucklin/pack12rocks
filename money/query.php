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
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/xg_pWYS8-HRESiV6Rdg4aY_R/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-qWH0xCejb2gc1yqo8ob4TQrvIcQ9XjhOfGKbhFr/+LvFrJdTE3bA+FQP/FLAiQhz"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="352">
<input type="hidden" name="Form_ID" id="Form_ID" value="5803">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="5">
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
      <a href="#" class="navlink nav-home-link" onclick="LinkTo('/home/home.php','_top')">Pack 12 Austin</a>
    </td>
    <td class="quickmenu1">
      <table>
        <tbody><tr>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=5','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=5','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=5','');">Users &amp; Passwords</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=5','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=5','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=5','');">Users &amp; Passwords</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=352">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=352">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=352">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=350" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=352">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=352">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=352">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=352">My Unit's Support Tickets</a></li>
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
Individual Transactions
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<h3>
Selection Criteria
</h3>
<div class="new-row" id="fs19515">
  <div class="container-fluid container-flex">
    <div class="center-block search-container">
      <table class="table-align-top no-border">
        <tbody>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Action
            </label>
          </td>
          <td>
            <select name="OP54399147" tabindex="110" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="=">Equal</option>
              <option value="&lt;&gt;">Not Equal</option>
            </select>
          </td>
          <td>
            <span class="text-left" id="SPAN54399147" name="SPAN54399147">
            <span style="white-space: nowrap;"><input type="radio" id="QUERY54399147" name="QUERY54399147" tabindex="120" disabled="" onclick="easyFieldExit(this)" onkeydown="submitSearch();" style="visibility: hidden" value="I"><span id="QTEXT54399147" style="visibility: hidden">Insert</span></span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="QUERY54399147" name="QUERY54399147" tabindex="120" disabled="" onclick="easyFieldExit(this)" onkeydown="submitSearch();" style="visibility: hidden" value="U"><span id="QTEXT54399147" style="visibility: hidden">Update</span></span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="QUERY54399147" name="QUERY54399147" tabindex="120" disabled="" onclick="easyFieldExit(this)" onkeydown="submitSearch();" style="visibility: hidden" value="D"><span id="QTEXT54399147" style="visibility: hidden">Delete</span></span>
            </span>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Occurred at
            </label>
          </td>
          <td>
            <select name="OP5442469" tabindex="130" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="=">=</option>
              <option value="&lt;">&lt;</option>
              <option value="&lt;=">&lt;=</option>
              <option value="&gt;">&gt;</option>
              <option value="&gt;=">&gt;=</option>
              <option value="&lt;&gt;">&lt;&gt;</option>
              <option value="between">Between</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY5442469" name="QUERY5442469" tabindex="140" size="12" disabled="" style="visibility: hidden" onblur="TestRegExp(this,'','')" onfocus="FocusTestRegExp(this,//,'This is not a valid value for this field')" maxlength="200" value="" title="">&nbsp;<a href="#" tabindex="140" onclick="cal.select(window.easyform.QUERY5442469,'QUERY5442469X','MM/dd/yyyy', window.easyform.QUERY5442469.value); return false;" name="QUERY5442469X" id="QUERY5442469X"><img src="images/calendar.gif" name="QUERY5442469I" id="QUERY5442469I" style="visibility: hidden"></a>
            <span id="QAND5442469" class="entrypostscript" style="visibility: hidden">...and...</span>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY25442469" name="QUERY25442469" tabindex="150" size="12" disabled="" style="visibility: hidden" onblur="TestRegExp(this,'','')" onfocus="FocusTestRegExp(this,//,'This is not a valid value for this field')" maxlength="200" value="" title="">&nbsp;<a href="#" tabindex="150" onclick="cal.select(window.easyform.QUERY25442469,'QUERY25442469X','MM/dd/yyyy', window.easyform.QUERY25442469.value); return false;" name="QUERY25442469X" id="QUERY25442469X"><img src="images/calendar.gif" name="QUERY25442469I" id="QUERY25442469I" style="visibility: hidden"></a>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            User ID
            </label>
          </td>
          <td>
            <select name="OP544002" tabindex="160" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544002" name="QUERY544002" class="form-control" onblur="TestRegExp(this,'','')" tabindex="170" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="211690">AAarons</option>
              <option value="211699">AAarons766</option>
              <option value="206308">AAbbott</option>
              <option value="219369">AAlmaraz</option>
              <option value="161214">AAnand Shankar</option>
              <option value="188093">ABanerji</option>
              <option value="161171">ABell</option>
              <option value="204148">AByrd</option>
              <option value="161098">ACapar</option>
              <option value="161128">ACarty</option>
              <option value="219371">AChidester</option>
              <option value="211701">AComan</option>
              <option value="161207">ACross</option>
              <option value="161157">ADavis</option>
              <option value="159279">ADe la garza</option>
              <option value="209354">ADelossantosgarza</option>
              <option value="253975">ADiaz</option>
              <option value="161263">ADouglas</option>
              <option value="161083">AFoster</option>
              <option value="198675">AGaldo</option>
              <option value="161104">AGautreaux</option>
              <option value="161190">AGautreaux358</option>
              <option value="161102">AGraham</option>
              <option value="208416">AHarrison</option>
              <option value="184360">AHickman</option>
              <option value="273911">AHoy</option>
              <option value="276945">AIngram</option>
              <option value="188095">AKafena</option>
              <option value="225762">AKelly</option>
              <option value="161096">AKohli</option>
              <option value="161220">AKohli592</option>
              <option value="161071">Akommineni</option>
              <option value="241583">akommineni2</option>
              <option value="161215">AKumar</option>
              <option value="161106">ALai</option>
              <option value="161158">ALiu</option>
              <option value="186107">AMarshall</option>
              <option value="161248">AMartin</option>
              <option value="179444">AMatter</option>
              <option value="280258">AModglin</option>
              <option value="161251">AMuller</option>
              <option value="273968">AMysyk</option>
              <option value="241584">ANair</option>
              <option value="161034">ANiefeldt</option>
              <option value="238892">ANorth</option>
              <option value="238905">ANorth708</option>
              <option value="161153">AOmran</option>
              <option value="161122">AParma</option>
              <option value="161198">AParma692</option>
              <option value="223609">APatel</option>
              <option value="161126">APrishtina</option>
              <option value="161152">APrishtina596</option>
              <option value="209201">APurohit</option>
              <option value="241600">ARios</option>
              <option value="161141">ARutherford</option>
              <option value="161246">ASchroeder</option>
              <option value="209546">ASwantner</option>
              <option value="207149">ATiwari</option>
              <option value="186105">AValencia Marshall</option>
              <option value="182465">AWalker</option>
              <option value="185086">AWallace</option>
              <option value="241602">AWhittington</option>
              <option value="182437">BByrd</option>
              <option value="280256">bbyrd2</option>
              <option value="250270">BDaru</option>
              <option value="161116">BDranguet</option>
              <option value="188094">BFannon</option>
              <option value="161036">BGammill</option>
              <option value="241580">BGurrola</option>
              <option value="242126">BHume</option>
              <option value="161154">bjain</option>
              <option value="225761">BJohnson</option>
              <option value="238891">BMcfarland</option>
              <option value="184362">BMcManus</option>
              <option value="250267">BMedler</option>
              <option value="161173">BMills</option>
              <option value="161255">BMuller</option>
              <option value="221051">BParker</option>
              <option value="221053">BParker465</option>
              <option value="190271">BPrishtina</option>
              <option value="177239">BPurbach</option>
              <option value="208253">BSides</option>
              <option value="241601">BStaffield</option>
              <option value="247288">CApplegate</option>
              <option value="241595">CBabb</option>
              <option value="213254">CBergen</option>
              <option value="161147">CBrady</option>
              <option value="161159">CBranagh</option>
              <option value="161125">CCantin</option>
              <option value="161138">CCarty</option>
              <option value="161212">CCross</option>
              <option value="184357">CFannon</option>
              <option value="184378">CFannon288</option>
              <option value="227801">CGibson</option>
              <option value="161206">CHogue</option>
              <option value="241598">CIdell</option>
              <option value="249542">CIsaak</option>
              <option value="179445">CMcGrath</option>
              <option value="161240">CMontalvo</option>
              <option value="208251">CSaldanha</option>
              <option value="161033">CSavage</option>
              <option value="161200">CSmits</option>
              <option value="198682">csmits2</option>
              <option value="161202">CSmits957</option>
              <option value="161046">CTimperley</option>
              <option value="161108">CTrad</option>
              <option value="161042">DBayes</option>
              <option value="161166">DDavis</option>
              <option value="209211">DDe Los Santos Tamez</option>
              <option value="209198">DDelossantosgarza</option>
              <option value="264357">DDuryee</option>
              <option value="277972">DEspejel</option>
              <option value="184380">DGoodine</option>
              <option value="208796">DGremillion</option>
              <option value="223887">DHayes</option>
              <option value="161253">DHayward</option>
              <option value="188812">DKeenan</option>
              <option value="161185">DKIM</option>
              <option value="161089">DLlorente</option>
              <option value="212338">DLynch</option>
              <option value="250271">DMarquez</option>
              <option value="253976">DMcleer</option>
              <option value="238893">DNorth</option>
              <option value="184363">DSmits</option>
              <option value="161039">DSunwoo</option>
              <option value="247287">DVelazquezescorza</option>
              <option value="219370">EAlmaraz</option>
              <option value="161210">EBennett</option>
              <option value="213246">EBergen</option>
              <option value="238889">EBruyn</option>
              <option value="209197">EBucklin</option>
              <option value="237731">EChidester</option>
              <option value="209149">EDavis</option>
              <option value="231341">EDemartini</option>
              <option value="184376">EDriscoll</option>
              <option value="161208">EElrakabawy</option>
              <option value="179451">EEspinoza</option>
              <option value="217024">EHoekstra</option>
              <option value="161169">EJung Jang</option>
              <option value="188088">EKafena</option>
              <option value="184361">ELieberknecht</option>
              <option value="202728">elieberknecht2</option>
              <option value="208250">EMcfarland</option>
              <option value="161252">EMuller</option>
              <option value="182439">EPhan</option>
              <option value="241585">ERios</option>
              <option value="238894">ESaldanha</option>
              <option value="161078">ESchroeder</option>
              <option value="161097">ESchroeder500</option>
              <option value="161130">ESusanto</option>
              <option value="209541">ESwantner</option>
              <option value="209542">eswantner2</option>
              <option value="238887">FBlair</option>
              <option value="161035">FOspina</option>
              <option value="161176">FShuman</option>
              <option value="161178">FTu</option>
              <option value="247291">FVelazquez Martinez</option>
              <option value="161040">GBennett</option>
              <option value="161043">GBinford</option>
              <option value="182459">GBush</option>
              <option value="161055">GDe La Garza</option>
              <option value="198683">GGaldo</option>
              <option value="241582">GIdell</option>
              <option value="161247">GMallios</option>
              <option value="161196">GParma</option>
              <option value="161070">GSaquing</option>
              <option value="182440">GShan</option>
              <option value="161105">GSolis</option>
              <option value="161180">HBrady</option>
              <option value="161174">HCanales</option>
              <option value="195803">HGaete</option>
              <option value="224758">HGaldo</option>
              <option value="161199">HGibby</option>
              <option value="161155">HGraham</option>
              <option value="238890">HHallar</option>
              <option value="161249">HHayward</option>
              <option value="161044">HLeonard</option>
              <option value="161197">HOmran</option>
              <option value="227381">HPatel</option>
              <option value="161060">HPina</option>
              <option value="161167">HSavage</option>
              <option value="182464">HShan</option>
              <option value="198681">hslonsky</option>
              <option value="161163">HSlonskyOld</option>
              <option value="238903">IHallar</option>
              <option value="227811">IMcFarland</option>
              <option value="161140">IMohmmad</option>
              <option value="161093">IOspina</option>
              <option value="161222">JAlvarez</option>
              <option value="208411">jalvarez2</option>
              <option value="209196">JBatchelder</option>
              <option value="161088">JBinford</option>
              <option value="238888">JBlair</option>
              <option value="161235">JCanales</option>
              <option value="161124">JCantin</option>
              <option value="211117">JCurrer</option>
              <option value="209153">JDavis</option>
              <option value="161069">JDoran</option>
              <option value="161075">JDoran406</option>
              <option value="161204">JDoran477</option>
              <option value="161261">JDouglas</option>
              <option value="161144">JFlores</option>
              <option value="161239">JFlores259</option>
              <option value="241579">JGonzalez</option>
              <option value="184359">JGoodine</option>
              <option value="241597">JGurrola</option>
              <option value="208412">JHarrison</option>
              <option value="209150">JHinote</option>
              <option value="215784">JHinote189</option>
              <option value="217027">JHoekstra</option>
              <option value="161120">JHudson</option>
              <option value="242135">JHume</option>
              <option value="277186">JIngrams</option>
              <option value="161099">JKelble</option>
              <option value="161114">JKelble28</option>
              <option value="161107">JLai</option>
              <option value="198676">jlai2</option>
              <option value="161242">JMallios</option>
              <option value="161237">JMartin</option>
              <option value="161217">JMeier</option>
              <option value="161041">JMontalvo</option>
              <option value="264352">JMorris</option>
              <option value="241599">JNair</option>
              <option value="161216">JNiefeldt</option>
              <option value="161038">JPark</option>
              <option value="220624">jpark2</option>
              <option value="161238">JPerez</option>
              <option value="161160">JPrishtina</option>
              <option value="177242">JPurbach</option>
              <option value="161191">JRunde</option>
              <option value="252479">JStubblefield</option>
              <option value="238895">JSujan</option>
              <option value="161080">JSunwoo</option>
              <option value="209543">JSwenson</option>
              <option value="188096">JWalker</option>
              <option value="242137">JWestphal</option>
              <option value="174794">KAlvarez</option>
              <option value="211700">KBell</option>
              <option value="210472">KBurns</option>
              <option value="182436">KBush</option>
              <option value="161077">KDavis</option>
              <option value="161148">KDe La Garza</option>
              <option value="247284">KDennis</option>
              <option value="161231">KFlores</option>
              <option value="161072">KGibby</option>
              <option value="161119">KHudgens</option>
              <option value="161109">KHudson</option>
              <option value="276946">KKathuria</option>
              <option value="161081">KKillough</option>
              <option value="161139">KKillough391</option>
              <option value="161234">KKillough50</option>
              <option value="280261">KKoran</option>
              <option value="161095">KKumari</option>
              <option value="161050">KLlorente</option>
              <option value="208261">KMcFarland</option>
              <option value="179453">KMcGrath</option>
              <option value="242136">KMcLeer</option>
              <option value="184382">KMcManus</option>
              <option value="280260">KModglin</option>
              <option value="276947">KNallathambi</option>
              <option value="161087">KPatterson</option>
              <option value="247290">KPorter</option>
              <option value="161064">KRajesh</option>
              <option value="161193">KRunde</option>
              <option value="161051">KRutherford</option>
              <option value="198679">krutherford2</option>
              <option value="231346">KRutherford227</option>
              <option value="227813">KRutherford782</option>
              <option value="161201">KRutherford905</option>
              <option value="161136">KSlonsky</option>
              <option value="161137">KSlonsky676</option>
              <option value="238896">KSujan</option>
              <option value="184383">KTadi</option>
              <option value="247282">LAlvarez</option>
              <option value="280259">LBenson</option>
              <option value="241596">LD'Vincent</option>
              <option value="179443">LEspinoza</option>
              <option value="209199">LFabian</option>
              <option value="161061">LFlores</option>
              <option value="195801">LGaete</option>
              <option value="188649">LKeenan</option>
              <option value="242128">LMcleer</option>
              <option value="242129">lmcleer2</option>
              <option value="264358">LMorris</option>
              <option value="161262">LReyes</option>
              <option value="161264">LReyes981</option>
              <option value="247286">LRios</option>
              <option value="186104">LShuman</option>
              <option value="209547">LSwenson</option>
              <option value="223883">LTabie</option>
              <option value="161243">LTiwari</option>
              <option value="161133">LTrad</option>
              <option value="161265">LVelasquez</option>
              <option value="185783">LWallace</option>
              <option value="161218">MAlvarez</option>
              <option value="211259">MBatchelder</option>
              <option value="161244">MBennett</option>
              <option value="238902">MBruyn</option>
              <option value="209209">MBucklin</option>
              <option value="278475">mbucklin2</option>
              <option value="278995">mbucklin3</option>
              <option value="209210">MBucklin796</option>
              <option value="210474">MBurns</option>
              <option value="161175">MCapar</option>
              <option value="277187">MChakarvarty</option>
              <option value="211692">MCouch</option>
              <option value="161260">Mde la Puente</option>
              <option value="247289">MDennis</option>
              <option value="241578">MDvincent</option>
              <option value="278042">MEspejel</option>
              <option value="209212">MFabian</option>
              <option value="230108">MFabian368</option>
              <option value="161209">MFoster</option>
              <option value="161094">MGautreaux</option>
              <option value="161172">MGautreaux138</option>
              <option value="241581">MHickman</option>
              <option value="209154">MHinote</option>
              <option value="161211">MHogue</option>
              <option value="161254">MHutchins</option>
              <option value="161086">MKramer</option>
              <option value="161067">MLee</option>
              <option value="208260">MLorenzini</option>
              <option value="186545">MMarshall</option>
              <option value="161224">MMonahan</option>
              <option value="227812">MMonahan347</option>
              <option value="161156">MMontalvo</option>
              <option value="245521">mpgurrola</option>
              <option value="161076">MRutherford</option>
              <option value="198680">mrutherford2</option>
              <option value="208262">MSaldanha</option>
              <option value="161142">MSaquing</option>
              <option value="161194">MSavage</option>
              <option value="223607">MSujan</option>
              <option value="224920">MSwenson</option>
              <option value="263661">MSwensonmatthewjgmailcom</option>
              <option value="223888">MTabie</option>
              <option value="161225">MTiwari</option>
              <option value="161058">MTorres</option>
              <option value="161085">MTrad</option>
              <option value="185087">MWallace</option>
              <option value="242130">MWestphal</option>
              <option value="161090">NBell</option>
              <option value="280255">NBenson</option>
              <option value="161054">NCarty</option>
              <option value="161168">NDesouky</option>
              <option value="161213">NElrakabawy</option>
              <option value="273913">NHoy</option>
              <option value="161103">NKim</option>
              <option value="161047">NMallios</option>
              <option value="161049">NMeier</option>
              <option value="186195">NPatel</option>
              <option value="186196">NPatel951</option>
              <option value="209200">NPinamonahan</option>
              <option value="161182">NPina-Monahan</option>
              <option value="179454">NRobinson</option>
              <option value="161203">NShuman</option>
              <option value="210041">NYang</option>
              <option value="208415">OAlvarez</option>
              <option value="250266">OMarquez</option>
              <option value="208252">OShipley</option>
              <option value="182441">OWalker</option>
              <option value="242131">OWestphal</option>
              <option value="161219">PAlvarez</option>
              <option value="161132">PBayes</option>
              <option value="211691">PBell</option>
              <option value="188651">PKeenan</option>
              <option value="161233">PLee</option>
              <option value="208249">PLorenzini</option>
              <option value="242127">plorenzini2</option>
              <option value="161223">PMakwana</option>
              <option value="182463">PNguyen</option>
              <option value="188087">RBanerji</option>
              <option value="161091">RBennett</option>
              <option value="182460">RByrd</option>
              <option value="161229">RCanales</option>
              <option value="209356">RChidester</option>
              <option value="214592">RCruz</option>
              <option value="161115">RDranguet</option>
              <option value="161129">RDuraimani</option>
              <option value="161143">RElrakabawy</option>
              <option value="161146">RGibby</option>
              <option value="238904">RHanss Blair</option>
              <option value="249544">RIsaak</option>
              <option value="161074">RKelble</option>
              <option value="161059">RLee</option>
              <option value="212340">RLynch</option>
              <option value="179452">RMatter</option>
              <option value="161221">RMehta</option>
              <option value="277185">RNallathambi</option>
              <option value="161030">RRekepalli</option>
              <option value="161037">RRekepalli845</option>
              <option value="179446">RRobinson</option>
              <option value="161135">RSavage</option>
              <option value="161092">RSoni</option>
              <option value="241586">RWhittington</option>
              <option value="223999">SAarons</option>
              <option value="161236">SAndrews</option>
              <option value="247283">SApplegate</option>
              <option value="229681">SBenton</option>
              <option value="161127">SCantin</option>
              <option value="161113">SCross</option>
              <option value="161117">SCross880</option>
              <option value="211115">SCurrer</option>
              <option value="161101">SGarg</option>
              <option value="227810">SGibson</option>
              <option value="208259">SGuerra Shipley</option>
              <option value="161250">SHutchins</option>
              <option value="161230">SJain</option>
              <option value="225757">SJohnson</option>
              <option value="225758">SKelly</option>
              <option value="161082">SLeonard</option>
              <option value="186198">SMehta</option>
              <option value="161151">SMurray</option>
              <option value="161066">SNiefeldt</option>
              <option value="264353">SNiphadkar</option>
              <option value="264359">SNiphadkar406</option>
              <option value="238906">SPatel</option>
              <option value="161165">SPatterson</option>
              <option value="161134">SSiddamshetti</option>
              <option value="161048">SSingh</option>
              <option value="170311">ssingh2</option>
              <option value="161065">SSingh892</option>
              <option value="161161">SSoni</option>
              <option value="219481">SSusannahbenton</option>
              <option value="184365">STadi</option>
              <option value="182442">SWalker</option>
              <option value="241577">TBabb</option>
              <option value="209353">TChidester</option>
              <option value="214587">TCruz</option>
              <option value="231345">TDeMartini</option>
              <option value="208794">TGremillion</option>
              <option value="184381">THickman</option>
              <option value="161188">THudson</option>
              <option value="280257">TKoran</option>
              <option value="161110">TMallios</option>
              <option value="161111">TMeier</option>
              <option value="247285">TPorter</option>
              <option value="208263">TSides</option>
              <option value="184364">TSmits</option>
              <option value="161241">TSolis</option>
              <option value="185081">TWallace</option>
              <option value="177243">UPurbach</option>
              <option value="209208">VBatchelder</option>
              <option value="231342">VDemartini</option>
              <option value="161131">VKommineni</option>
              <option value="161186">VKramer</option>
              <option value="209213">VPurohit</option>
              <option value="161079">VSiddamshetti</option>
              <option value="206312">WAbbott</option>
              <option value="161162">WBranagh</option>
              <option value="253973">WDiaz</option>
              <option value="217025">WHoekstra</option>
              <option value="161032">WKramer</option>
              <option value="252478">WStubblefield</option>
              <option value="210043">XJiang</option>
              <option value="161121">XLiu</option>
              <option value="161100">YOmran</option>
              <option value="220626">YPark</option>
              <option value="227371">YPatel</option>
              <option value="161145">YSlonsky</option>
              <option value="161052">ZShuman</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Transaction Type
            </label>
          </td>
          <td>
            <select name="OP544012" tabindex="180" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544012" name="QUERY544012" class="form-control" onblur="TestRegExp(this,'','')" tabindex="190" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="16">Charge Member Account</option>
              <option value="4">Charge Member Account For Event</option>
              <option value="5">Charge Member Dues</option>
              <option value="15">Credit Member Account</option>
              <option value="7">Credit Member Account From Event</option>
              <option value="13">Deposit To Group Account</option>
              <option value="6">Deposit To Group Account From Event</option>
              <option value="1">Deposit To Member Account</option>
              <option value="12">Group Expense Paid By Member</option>
              <option value="3">Group Expense Paid By Member For Event</option>
              <option value="14">Group Expense Paid From Group Account</option>
              <option value="2">Group Expense Paid From Group Account For Event</option>
              <option value="22">PayPal Deposit To Member Account</option>
              <option value="17">Reimburse Member From Member Account</option>
              <option value="11">Starting Account Balance for Our Group</option>
              <option value="18">Starting Event Balance</option>
              <option value="20">Starting Fund Balance</option>
              <option value="10">Starting Member Account Balance</option>
              <option value="19">Transfer Between Events</option>
              <option value="21">Transfer Between Funds</option>
              <option value="9">Transfer Between Group Accounts</option>
              <option value="8">Transfer Between Member Accounts</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Transaction Date
            </label>
          </td>
          <td>
            <select name="OP5440216" tabindex="200" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="=">=</option>
              <option value="&lt;">&lt;</option>
              <option value="&lt;=">&lt;=</option>
              <option value="&gt;">&gt;</option>
              <option value="&gt;=">&gt;=</option>
              <option value="&lt;&gt;">&lt;&gt;</option>
              <option value="between">Between</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY5440216" name="QUERY5440216" tabindex="210" size="12" disabled="" style="visibility: hidden" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="">&nbsp;<a href="#" tabindex="210" onclick="cal.select(window.easyform.QUERY5440216,'QUERY5440216X','MM/dd/yyyy', window.easyform.QUERY5440216.value); return false;" name="QUERY5440216X" id="QUERY5440216X"><img src="images/calendar.gif" name="QUERY5440216I" id="QUERY5440216I" style="visibility: hidden"></a>
            <span id="QAND5440216" class="entrypostscript" style="visibility: hidden">...and...</span>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY25440216" name="QUERY25440216" tabindex="220" size="12" disabled="" style="visibility: hidden" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="">&nbsp;<a href="#" tabindex="220" onclick="cal.select(window.easyform.QUERY25440216,'QUERY25440216X','MM/dd/yyyy', window.easyform.QUERY25440216.value); return false;" name="QUERY25440216X" id="QUERY25440216X"><img src="images/calendar.gif" name="QUERY25440216I" id="QUERY25440216I" style="visibility: hidden"></a>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Deposit Date
            </label>
          </td>
          <td>
            <select name="OP5440316" tabindex="230" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="=">=</option>
              <option value="&lt;">&lt;</option>
              <option value="&lt;=">&lt;=</option>
              <option value="&gt;">&gt;</option>
              <option value="&gt;=">&gt;=</option>
              <option value="&lt;&gt;">&lt;&gt;</option>
              <option value="between">Between</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY5440316" name="QUERY5440316" tabindex="240" size="12" disabled="" style="visibility: hidden" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="">&nbsp;<a href="#" tabindex="240" onclick="cal.select(window.easyform.QUERY5440316,'QUERY5440316X','MM/dd/yyyy', window.easyform.QUERY5440316.value); return false;" name="QUERY5440316X" id="QUERY5440316X"><img src="images/calendar.gif" name="QUERY5440316I" id="QUERY5440316I" style="visibility: hidden"></a>
            <span id="QAND5440316" class="entrypostscript" style="visibility: hidden">...and...</span>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY25440316" name="QUERY25440316" tabindex="250" size="12" disabled="" style="visibility: hidden" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="">&nbsp;<a href="#" tabindex="250" onclick="cal.select(window.easyform.QUERY25440316,'QUERY25440316X','MM/dd/yyyy', window.easyform.QUERY25440316.value); return false;" name="QUERY25440316X" id="QUERY25440316X"><img src="images/calendar.gif" name="QUERY25440316I" id="QUERY25440316I" style="visibility: hidden"></a>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Description
            </label>
          </td>
          <td>
            <select name="OP544041" tabindex="260" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="begins with">Begins With</option>
              <option value="contains">Contains</option>
              <option value="ends with">Ends With</option>
              <option value="between">Between</option>
              <option value="=">=</option>
              <option value="&lt;&gt;">Not Equal</option>
              <option value="&lt;">&lt;</option>
              <option value="&lt;=">&lt;=</option>
              <option value="&gt;">&gt;</option>
              <option value="&gt;=">&gt;=</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY544041" name="QUERY544041" tabindex="270" size="50" disabled="" style="visibility: hidden" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="">
            <span id="QAND544041" class="entrypostscript" style="visibility: hidden">...and...</span>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY2544041" name="QUERY2544041" tabindex="280" size="50" disabled="" style="visibility: hidden" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="">
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Reference
            </label>
          </td>
          <td>
            <select name="OP544051" tabindex="290" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="begins with">Begins With</option>
              <option value="contains">Contains</option>
              <option value="ends with">Ends With</option>
              <option value="between">Between</option>
              <option value="=">=</option>
              <option value="&lt;&gt;">Not Equal</option>
              <option value="&lt;">&lt;</option>
              <option value="&lt;=">&lt;=</option>
              <option value="&gt;">&gt;</option>
              <option value="&gt;=">&gt;=</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY544051" name="QUERY544051" tabindex="300" size="50" disabled="" style="visibility: hidden" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="">
            <span id="QAND544051" class="entrypostscript" style="visibility: hidden">...and...</span>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY2544051" name="QUERY2544051" tabindex="310" size="50" disabled="" style="visibility: hidden" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="">
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Amount
            </label>
          </td>
          <td>
            <select name="OP5440636" tabindex="320" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="=">=</option>
              <option value="&lt;">&lt;</option>
              <option value="&lt;=">&lt;=</option>
              <option value="&gt;">&gt;</option>
              <option value="&gt;=">&gt;=</option>
              <option value="&lt;&gt;">&lt;&gt;</option>
              <option value="between">Between</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY5440636" name="QUERY5440636" tabindex="330" size="9" disabled="" style="visibility: hidden" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="">
            <span id="QAND5440636" class="entrypostscript" style="visibility: hidden">...and...</span>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY25440636" name="QUERY25440636" tabindex="340" size="9" disabled="" style="visibility: hidden" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="" title="">
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Debit Troop Account
            </label>
          </td>
          <td>
            <select name="OP544072" tabindex="350" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544072" name="QUERY544072" class="form-control" onblur="TestRegExp(this,'','')" tabindex="360" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="2">Frost Bank Checking Account</option>
              <option value="1">PayPal</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Credit Troop Account
            </label>
          </td>
          <td>
            <select name="OP544082" tabindex="370" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544082" name="QUERY544082" class="form-control" onblur="TestRegExp(this,'','')" tabindex="380" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="2">Frost Bank Checking Account</option>
              <option value="1">PayPal</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Debit Member
            </label>
          </td>
          <td>
            <select name="OP544092" tabindex="390" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544092" name="QUERY544092" class="form-control" onblur="TestRegExp(this,'','')" tabindex="400" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="1018">Aarons, Andrew</option>
              <option value="1027">Aarons, Ashley</option>
              <option value="1086">Aarons, Stephen</option>
              <option value="910">Abbott, Albert</option>
              <option value="914">Abbott, William</option>
              <option value="1063">Almaraz, Alexander</option>
              <option value="1064">Almaraz, Eric</option>
              <option value="939">Alvarez, Jordan</option>
              <option value="668">Alvarez, Jorge</option>
              <option value="714">Alvarez, Kristy</option>
              <option value="1239">Alvarez, Layla</option>
              <option value="664">Alvarez, Mateo</option>
              <option value="943">Alvarez, Omar</option>
              <option value="665">Alvarez, Paolo</option>
              <option value="660">Anand Shankar, Arjun</option>
              <option value="682">Andrews, Sue Ann</option>
              <option value="1245">Applegate, Chris</option>
              <option value="1240">Applegate, Sebastian</option>
              <option value="1202">Babb, Chris</option>
              <option value="1184">Babb, Tyson</option>
              <option value="827">Bains, Gaganpreet</option>
              <option value="805">Bains, Jupp</option>
              <option value="806">Bains, Waris</option>
              <option value="875">Banerji, Abhra</option>
              <option value="869">Banerji, Rabin</option>
              <option value="1230">Barton, Paxton</option>
              <option value="1231">Barton, Phil</option>
              <option value="963">Batchelder, Jonathan</option>
              <option value="1012">Batchelder, Mark</option>
              <option value="975">Batchelder, Veronica</option>
              <option value="488">Bayes, Dylan</option>
              <option value="578">Bayes, Phillip</option>
              <option value="617">Bell, Albie</option>
              <option value="1028">Bell, Katie</option>
              <option value="536">Bell, Nate</option>
              <option value="1019">Bell, Petey</option>
              <option value="656">Bennett, Eleanor</option>
              <option value="486">Bennett, Goodhue</option>
              <option value="690">Bennett, Mary</option>
              <option value="537">Bennett, Robbie</option>
              <option value="1621">Benson, Lawrence</option>
              <option value="1617">Benson, Nicolas</option>
              <option value="1128">Benton, Susannah</option>
              <option value="1042">Bergen, Chris</option>
              <option value="1037">Bergen, Emmett</option>
              <option value="489">Binford, Grayson</option>
              <option value="534">Binford, Jason</option>
              <option value="1154">Blair, Frankie</option>
              <option value="1155">Blair, Joe</option>
              <option value="593">Brady, Christopher</option>
              <option value="626">Brady, Heather</option>
              <option value="605">Branagh, Colin</option>
              <option value="608">Branagh, Wayne</option>
              <option value="1156">Bruyn, Emerson</option>
              <option value="1169">Bruyn, Meaghan</option>
              <option value="964">Bucklin, Emmett</option>
              <option value="976">Bucklin, Mary</option>
              <option value="977">Bucklin, Michael</option>
              <option value="1610">Bucklin, Michael2</option>
              <option value="1611">Bucklin, Michael3</option>
              <option value="1004">Burns, Kai</option>
              <option value="1006">Burns, Mike</option>
              <option value="595">Buse, Hendrix</option>
              <option value="674">Buse, Jayme</option>
              <option value="691">Buse, Michael</option>
              <option value="785">Bush, Greg</option>
              <option value="762">Bush, Kai</option>
              <option value="908">Byrd, Amanda</option>
              <option value="1618">Byrd, Barrett</option>
              <option value="763">Byrd, Benjamin</option>
              <option value="786">Byrd, Ryan</option>
              <option value="620">Canales, Hudson</option>
              <option value="681">Canales, Jorge</option>
              <option value="675">Canales, Rebecca</option>
              <option value="571">Cantin, Candy</option>
              <option value="570">Cantin, Jason</option>
              <option value="573">Cantin, Samuel</option>
              <option value="544">Capar, Alp</option>
              <option value="621">Capar, Mia</option>
              <option value="764">Cardwell, Matthew</option>
              <option value="836">Cardwell, Robert</option>
              <option value="574">Carty, Addison</option>
              <option value="584">Carty, Caroline</option>
              <option value="500">Carty, Nate</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="1143">Chidester, Ella</option>
              <option value="986">Chidester, Russ</option>
              <option value="983">Chidester, Taylor</option>
              <option value="1029">Coman, Adela</option>
              <option value="715">Corder, Catharine</option>
              <option value="502">Corder, Clifford</option>
              <option value="1121">Corder, Clifford</option>
              <option value="499">Corder, Myra</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1020">Couch, Marcus</option>
              <option value="653">Cross, Andrew</option>
              <option value="658">Cross, Cole</option>
              <option value="563">Cross, Stacy</option>
              <option value="559">Cross, Stan</option>
              <option value="1051">Cruz, Ryan</option>
              <option value="1046">Cruz, Taryn</option>
              <option value="1010">Currer, Josh</option>
              <option value="1008">Currer, Silas</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="603">Davis, Alisande</option>
              <option value="612">Davis, Dylan</option>
              <option value="951">Davis, Eagle</option>
              <option value="955">Davis, Jim</option>
              <option value="523">Davis, Keegan</option>
              <option value="1">De La Garza, Adrian</option>
              <option value="501">De La Garza, Gabby</option>
              <option value="594">De La Garza, Kimberly</option>
              <option value="705">de la Puente, Matias</option>
              <option value="984">De Los Santos Garza, Andrea</option>
              <option value="965">De Los Santos Garza, Leo  Jr.</option>
              <option value="978">De Los Santos Tamez, Diego</option>
              <option value="1532">Delete, Delete</option>
              <option value="1135">DeMartini, Emilia</option>
              <option value="1139">DeMartini, Trevor</option>
              <option value="1136">DeMartini, Vincent</option>
              <option value="1241">Dennis, Khoi</option>
              <option value="1246">Dennis, Michael</option>
              <option value="614">Desouky, Noura</option>
              <option value="1268">Diaz, Adam</option>
              <option value="1266">Diaz, Winslow</option>
              <option value="521">Doran, James</option>
              <option value="650">Doran, Jason</option>
              <option value="515">Doran, Jill</option>
              <option value="708">Douglas, Austin</option>
              <option value="706">Douglas, Jack</option>
              <option value="562">Dranguet, Benjamin</option>
              <option value="561">Dranguet, Ryan</option>
              <option value="828">Driscoll, Evan</option>
              <option value="575">Duraimani, Rajesh</option>
              <option value="1281">Duryee, David</option>
              <option value="1203">D'Vincent, Lilli</option>
              <option value="1185">D'Vincent, Mason</option>
              <option value="654">Elrakabawy, Erin</option>
              <option value="659">Elrakabawy, Noah</option>
              <option value="589">Elrakabawy, Raef</option>
              <option value="1021">Elwell, Connor</option>
              <option value="1022">Elwell, Jack</option>
              <option value="829">Erales, Felix</option>
              <option value="807">Erales, Jonah</option>
              <option value="808">Erales, Maxwell</option>
              <option value="1539">Espejel, Dean</option>
              <option value="1609">Espejel, Moshe</option>
              <option value="742">Espinoza, Erin</option>
              <option value="734">Espinoza, Logan</option>
              <option value="966">Fabian, Luca</option>
              <option value="979">Fabian, Mel</option>
              <option value="1131">Fabian, Melle</option>
              <option value="876">Fannon, Beau</option>
              <option value="830">Fannon, Christina</option>
              <option value="809">Fannon, Connor</option>
              <option value="787">Feng, Guo</option>
              <option value="810">Fick, Ezra</option>
              <option value="831">Fick, Preston</option>
              <option value="564">Files, Michael</option>
              <option value="1122">Files, Michael</option>
              <option value="633">Files, Mikaela</option>
              <option value="651">Files, Sofia</option>
              <option value="685">Flores, Joey</option>
              <option value="590">Flores, Jose  III</option>
              <option value="677">Flores, Kirstine</option>
              <option value="507">Flores, Logan</option>
              <option value="529">Foster, Amelia</option>
              <option value="655">Foster, Michelle</option>
              <option value="888">Gaete, Holly</option>
              <option value="886">Gaete, Lincoln</option>
              <option value="893">Galdo, Anne</option>
              <option value="901">Galdo, Gabe</option>
              <option value="1088">Galdo, Henry</option>
              <option value="482">Gammill, Bonnie</option>
              <option value="547">Garg, Suchi</option>
              <option value="636">Gautreaux, Alex</option>
              <option value="550">Gautreaux, Andrew</option>
              <option value="540">Gautreaux, MaryLynn</option>
              <option value="618">Gautreaux, Michael</option>
              <option value="645">Gibby, Harper</option>
              <option value="518">Gibby, Kai</option>
              <option value="592">Gibby, Robert</option>
              <option value="1114">Gibson, Charleston</option>
              <option value="1123">Gibson, Steven</option>
              <option value="1030">Glock, Lu</option>
              <option value="1186">Gonzalez, Jane</option>
              <option value="832">Goodine, David</option>
              <option value="811">Goodine, Jack</option>
              <option value="548">Graham, Adam</option>
              <option value="601">Graham, Hudson</option>
              <option value="948">Gremillion, Dallas</option>
              <option value="946">Gremillion, Tony</option>
              <option value="932">Guerra Shipley, Symone</option>
              <option value="1187">Gurrola, Benjamin</option>
              <option value="1204">Gurrola, Jacqueline</option>
              <option value="1232">Gurrola, Matthew</option>
              <option value="1157">Hallar, Henry</option>
              <option value="1170">Hallar, Ingrid</option>
              <option value="1171">Hanss Blair, Rachel</option>
              <option value="944">Harrison, Abi</option>
              <option value="940">Harrison, James</option>
              <option value="1084">Hayes, David</option>
              <option value="699">Hayward, Daniel</option>
              <option value="695">Hayward, Harlan</option>
              <option value="812">Hickman, Aaron</option>
              <option value="1188">Hickman, Maya</option>
              <option value="833">Hickman, Trey</option>
              <option value="788">Hinojosa-Cardwell, Teresa</option>
              <option value="952">Hinote, Jake</option>
              <option value="1055">Hinote, John</option>
              <option value="956">Hinote, Mistie</option>
              <option value="1058">Hoekstra, Bea</option>
              <option value="1061">Hoekstra, Jason</option>
              <option value="1059">Hoekstra, William</option>
              <option value="652">Hogue, Cason</option>
              <option value="657">Hogue, Matthew</option>
              <option value="1285">Hoy, Ashton</option>
              <option value="1287">Hoy, Nicole</option>
              <option value="565">Hudgens, Kristen</option>
              <option value="566">Hudson, Jay</option>
              <option value="555">Hudson, Kellen</option>
              <option value="634">Hudson, Tiffany</option>
              <option value="1216">Hume, Beatrix</option>
              <option value="1225">Hume, John</option>
              <option value="700">Hutchins, Magdalena</option>
              <option value="696">Hutchins, Samuel</option>
              <option value="1205">Idell, Claire</option>
              <option value="1189">Idell, Gabe</option>
              <option value="1292">Ingram, Alistair</option>
              <option value="1534">Ingrams, Julie and Robert</option>
              <option value="1250">Isaak, Christian</option>
              <option value="1252">Isaak, Rachel</option>
              <option value="600">jain, bhavik</option>
              <option value="676">Jain, Sudhir</option>
              <option value="1000">Jiang, Xuling</option>
              <option value="1097">Johnson, Bridget</option>
              <option value="1093">Johnson, Samuel</option>
              <option value="615">Jung Jang, Eun</option>
              <option value="877">Kafena, Afif</option>
              <option value="870">Kafena, Evangeline</option>
              <option value="1293">Kathuria, Kabir</option>
              <option value="883">Keenan, Danielle</option>
              <option value="880">Keenan, Lilly</option>
              <option value="882">Keenan, Peter</option>
              <option value="560">Kelble, Jillian</option>
              <option value="545">Kelble, Joe</option>
              <option value="520">Kelble, Rhys</option>
              <option value="1098">Kelly, Andi</option>
              <option value="1094">Kelly, Spencer</option>
              <option value="527">Killough, Kaden</option>
              <option value="680">Killough, Kent</option>
              <option value="585">Killough, Klayten</option>
              <option value="631">KIM, Dong Sung</option>
              <option value="549">Kim, Nathan</option>
              <option value="1047">Klein, James</option>
              <option value="1053">Klein, Jamie</option>
              <option value="1052">Klein, Taylor</option>
              <option value="542">Kohli, Anumeha</option>
              <option value="666">Kohli, Aria</option>
              <option value="1190">kommineni, anish</option>
              <option value="517">kommineni, Avighna</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
              <option value="1623">Koran, Katie and Kenny</option>
              <option value="1619">Koran, Teddy</option>
              <option value="532">Kramer, Matthew</option>
              <option value="632">Kramer, Victoria</option>
              <option value="478">Kramer, Weyland</option>
              <option value="661">Kumar, Anand</option>
              <option value="541">Kumari, Kamla</option>
              <option value="552">Lai, Aaliyah</option>
              <option value="553">Lai, James</option>
              <option value="894">Lai, James</option>
              <option value="513">Lee, Mia</option>
              <option value="679">Lee, Paul</option>
              <option value="505">Lee, Ronan</option>
              <option value="490">Leonard, Harper</option>
              <option value="528">Leonard, Sam</option>
              <option value="813">Lieberknecht, Eleanor</option>
              <option value="902">Lieberknecht, Elizabeth</option>
              <option value="604">Liu, Austin</option>
              <option value="567">Liu, Xianzhi</option>
              <option value="535">Llorente, Dorian</option>
              <option value="496">Llorente, Kristin</option>
              <option value="933">Lorenzini, Mitch</option>
              <option value="1217">Lorenzini, Paige</option>
              <option value="922">Lorenzini, Pepper</option>
              <option value="1032">Lynch, Dixon</option>
              <option value="1034">Lynch, Scott</option>
              <option value="669">Makwana, Prakash</option>
              <option value="688">Mallios, Jason</option>
              <option value="693">Mallios, Jim</option>
              <option value="493">Mallios, Nicholas</option>
              <option value="556">Mallios, Tracy</option>
              <option value="1260">Marquez, David</option>
              <option value="1255">Marquez, Owen</option>
              <option value="856">Marshall, Angie</option>
              <option value="866">Marshall, Mark</option>
              <option value="694">Martin, Abby</option>
              <option value="683">Martin, Jude</option>
              <option value="735">Matter, Alex</option>
              <option value="743">Matter, Rebecca</option>
              <option value="1038">Maza, Barry</option>
              <option value="1043">Maza, Heather</option>
              <option value="1158">McFarland, Beckett</option>
              <option value="923">McFarland, Evan</option>
              <option value="1124">McFarland, Ian</option>
              <option value="934">McFarland, Kristin</option>
              <option value="736">McGrath, Carter</option>
              <option value="744">McGrath, Kimberly</option>
              <option value="1269">McLeer, Douglas</option>
              <option value="1226">McLeer, Krissy</option>
              <option value="1218">McLeer, Levi</option>
              <option value="1219">McLeer, Liam</option>
              <option value="814">McManus, Bear</option>
              <option value="834">McManus, Keith</option>
              <option value="1256">Medler, Bennett</option>
              <option value="508">Mehta, Aarav</option>
              <option value="509">Mehta, Arya</option>
              <option value="610">Mehta, Dimpesh</option>
              <option value="667">Mehta, Rian</option>
              <option value="864">Mehta, Shreya</option>
              <option value="663">Meier, Joshua</option>
              <option value="495">Meier, Neve</option>
              <option value="557">Meier, Townes</option>
              <option value="619">Mills, Brady</option>
              <option value="1620">Modglin, Abel</option>
              <option value="1622">Modglin, Kirk</option>
              <option value="586">Mohmmad, Ivan</option>
              <option value="1125">Monahan, Matthew</option>
              <option value="670">Monahan2, Matthew</option>
              <option value="686">Montalvo, Cori</option>
              <option value="487">Montalvo, Jace</option>
              <option value="602">Montalvo, Matt</option>
              <option value="1276">Morris, Jack</option>
              <option value="1282">Morris, Lacey</option>
              <option value="697">Muller, Aubrey</option>
              <option value="701">Muller, Brittany</option>
              <option value="698">Muller, Elijah</option>
              <option value="597">Murray, Shanna</option>
              <option value="1002">Mysyk, Alexander</option>
              <option value="1288">Mysyk, Andriy</option>
              <option value="596">Mysyk, Andriy</option>
              <option value="641">Mysyk, Daniel</option>
              <option value="1191">Nair, Ananya</option>
              <option value="1206">Nair, Jithun</option>
              <option value="1294">Nallathambi, Kalki</option>
              <option value="1533">Nallathambi, Ravetha</option>
              <option value="530">Ng, Melissa</option>
              <option value="789">Nguyen, Phuong</option>
              <option value="480">Niefeldt, Anita</option>
              <option value="662">Niefeldt, Janek</option>
              <option value="512">Niefeldt, Sebastian</option>
              <option value="1277">Niphadkar, Sahana</option>
              <option value="1283">Niphadkar, Shraddha</option>
              <option value="846">Nomura, Asuka</option>
              <option value="841">Nomura, Edison</option>
              <option value="1172">North, Allison</option>
              <option value="1159">North, Arlo</option>
              <option value="1160">North, Davis</option>
              <option value="599">Omran, Ahmed</option>
              <option value="643">Omran, Haroun</option>
              <option value="546">Omran, Youssef</option>
              <option value="481">Ospina, Franny</option>
              <option value="539">Ospina, Ivan</option>
              <option value="484">Park, Jin Soo</option>
              <option value="1068">Park, Jude</option>
              <option value="1070">Park, Yongshin</option>
              <option value="1075">Parker, Brandon</option>
              <option value="1073">Parker, Bryce</option>
              <option value="644">Parma, Allyson</option>
              <option value="568">Parma, Andy</option>
              <option value="642">Parma, Giuliana</option>
              <option value="1079">Patel, Amy</option>
              <option value="1110">Patel, Hemang</option>
              <option value="861">Patel, Niam</option>
              <option value="862">Patel, Nirvaan</option>
              <option value="1173">Patel, Sujan</option>
              <option value="1100">Patel, Yug</option>
              <option value="533">Patterson, Kaitlyn</option>
              <option value="611">Patterson, Sue Ann</option>
              <option value="519">Perez, Hjalmar</option>
              <option value="684">Perez, Jane</option>
              <option value="569">Perez-Ng, Gabriela</option>
              <option value="765">Phan, Erik</option>
              <option value="506">Pina, Helen</option>
              <option value="967">Pina-Monahan, Nico</option>
              <option value="628">Pina-Monahan, Nina</option>
              <option value="1247">Porter, Koley</option>
              <option value="1242">Porter, Thora</option>
              <option value="598">Prishtina, Adam</option>
              <option value="572">Prishtina, Alexander</option>
              <option value="884">Prishtina, Benjamin</option>
              <option value="606">Prishtina, Jennifer</option>
              <option value="717">Purbach, Barrett</option>
              <option value="720">Purbach, Jennifer</option>
              <option value="721">Purbach, Ulrich</option>
              <option value="968">Purohit, Anay</option>
              <option value="980">Purohit, Vijendra</option>
              <option value="510">Rajesh, Karthik</option>
              <option value="483">Rekepalli, Reetu</option>
              <option value="476">Rekepalli, Reiyuan</option>
              <option value="709">Reyes, LuAnna</option>
              <option value="707">Reyes, Luke</option>
              <option value="1207">Rios, Amanda</option>
              <option value="1192">Rios, Esai</option>
              <option value="1243">Rios, Luciana</option>
              <option value="745">Robinson, Nick</option>
              <option value="737">Robinson, Rohan</option>
              <option value="637">Runde, James</option>
              <option value="639">Runde, Katie</option>
              <option value="587">Rutherford, Alexander</option>
              <option value="647">Rutherford, Katherine</option>
              <option value="497">Rutherford, Kendal</option>
              <option value="1140">Rutherford, Kendal</option>
              <option value="1126">Rutherford, Kendal</option>
              <option value="897">Rutherford, Kendal</option>
              <option value="898">Rutherford, Matthew</option>
              <option value="522">Rutherford, Matthew</option>
              <option value="924">Saldanha, Claire</option>
              <option value="1161">Saldanha, Eva</option>
              <option value="935">Saldanha, Mithila</option>
              <option value="516">Saquing, Gabe</option>
              <option value="588">Saquing, Michele</option>
              <option value="479">Savage, Collin</option>
              <option value="613">Savage, Henri</option>
              <option value="640">Savage, Meghan</option>
              <option value="581">Savage, Robert</option>
              <option value="558">Schmid, Ben</option>
              <option value="491">Schmid, Natalie</option>
              <option value="635">Schmid, Tarisa</option>
              <option value="692">Schroeder, Adam</option>
              <option value="524">Schroeder, Elliot</option>
              <option value="543">Schroeder, Erin</option>
              <option value="766">Shan, Gordon</option>
              <option value="790">Shan, Honggang</option>
              <option value="925">Shipley, Oliver</option>
              <option value="622">Shuman, Frank</option>
              <option value="853">Shuman, Luca</option>
              <option value="649">Shuman, Natalie</option>
              <option value="498">Shuman, Zan</option>
              <option value="580">Siddamshetti, Shriyan</option>
              <option value="525">Siddamshetti, Vamshi</option>
              <option value="926">Sides, Bowie</option>
              <option value="936">Sides, Todd</option>
              <option value="511">Singh, Shaant</option>
              <option value="711">Singh, Surinder</option>
              <option value="494">Singh, Suvaan</option>
              <option value="899">Slonsky, Henry</option>
              <option value="582">Slonsky, Keanu</option>
              <option value="583">Slonsky, Kyle</option>
              <option value="591">Slonsky, Yasemin</option>
              <option value="609">SlonskyDeleted, HenryDeleted</option>
              <option value="646">Smits, Carter</option>
              <option value="648">Smits, Cory</option>
              <option value="900">Smits, Cory</option>
              <option value="815">Smits, Dalton</option>
              <option value="816">Smits, Turner</option>
              <option value="551">Solis, Grace</option>
              <option value="687">Solis, Thuy</option>
              <option value="538">Soni, Randhir</option>
              <option value="607">Soni, Shashwat</option>
              <option value="1208">Staffield, Brittany</option>
              <option value="629">Stappenbeck, Augusten</option>
              <option value="638">Stappenbeck, Charlotte</option>
              <option value="616">Stappenbeck, Steve</option>
              <option value="1263">Stubblefield, Joel</option>
              <option value="1262">Stubblefield, Will</option>
              <option value="503">Su, James</option>
              <option value="623">Su, Liehao</option>
              <option value="477">Su, Lisa</option>
              <option value="1162">Sujan, Jaxson</option>
              <option value="1163">Sujan, Kira</option>
              <option value="1077">Sujan, Mav</option>
              <option value="485">Sunwoo, Dam</option>
              <option value="526">Sunwoo, Jason</option>
              <option value="1066">Susannah Benton, Susannah</option>
              <option value="576">Susanto, Elisha</option>
              <option value="995">Swantner, Albert</option>
              <option value="990">Swantner, Elliott</option>
              <option value="991">Swantner, Everett</option>
              <option value="992">Swenson, Jack</option>
              <option value="996">Swenson, Lindsey</option>
              <option value="1089">Swenson, Matt</option>
              <option value="1271">Swenson.MatthewJ@gmail.com, Matthew S</option>
              <option value="1081">Tabie, Logan</option>
              <option value="1085">Tabie, Mike</option>
              <option value="835">Tadi, Krishna</option>
              <option value="817">Tadi, Satvik</option>
              <option value="492">Timperley, Cinda</option>
              <option value="916">Tiwari, Anuj</option>
              <option value="689">Tiwari, Leslie</option>
              <option value="671">Tiwari, Mila</option>
              <option value="504">Torres, Maxwell</option>
              <option value="554">Trad, Charles  Jr.</option>
              <option value="579">Trad, Lucas</option>
              <option value="531">Trad, Megan</option>
              <option value="624">Tu, Fiona</option>
              <option value="854">Valencia Marshall, Angel</option>
              <option value="710">Velasquez, Lynda</option>
              <option value="1248">Velazquez Martinez, Francisco</option>
              <option value="1244">VelazquezEscorza, Diego Emilio</option>
              <option value="1264">Vital, Jessie</option>
              <option value="791">Walker, Annie</option>
              <option value="878">Walker, Josh</option>
              <option value="767">Walker, Owen</option>
              <option value="768">Walker, Sophia</option>
              <option value="847">Wallace, Audrey</option>
              <option value="850">Wallace, Lily</option>
              <option value="848">Wallace, Matthew</option>
              <option value="842">Wallace, Tristan</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1220">Westphal, Milo</option>
              <option value="1221">Westphal, Oliver</option>
              <option value="1209">Whittington, Aric</option>
              <option value="1193">Whittington, Rowan</option>
              <option value="627">Workman, Chip  IV</option>
              <option value="625">Workman, Logan</option>
              <option value="998">Yang, Neil</option>
              <option value="769">Yao, Eden</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Credit Member
            </label>
          </td>
          <td>
            <select name="OP544102" tabindex="410" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544102" name="QUERY544102" class="form-control" onblur="TestRegExp(this,'','')" tabindex="420" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="1018">Aarons, Andrew</option>
              <option value="1027">Aarons, Ashley</option>
              <option value="1086">Aarons, Stephen</option>
              <option value="910">Abbott, Albert</option>
              <option value="914">Abbott, William</option>
              <option value="1063">Almaraz, Alexander</option>
              <option value="1064">Almaraz, Eric</option>
              <option value="939">Alvarez, Jordan</option>
              <option value="668">Alvarez, Jorge</option>
              <option value="714">Alvarez, Kristy</option>
              <option value="1239">Alvarez, Layla</option>
              <option value="664">Alvarez, Mateo</option>
              <option value="943">Alvarez, Omar</option>
              <option value="665">Alvarez, Paolo</option>
              <option value="660">Anand Shankar, Arjun</option>
              <option value="682">Andrews, Sue Ann</option>
              <option value="1245">Applegate, Chris</option>
              <option value="1240">Applegate, Sebastian</option>
              <option value="1202">Babb, Chris</option>
              <option value="1184">Babb, Tyson</option>
              <option value="827">Bains, Gaganpreet</option>
              <option value="805">Bains, Jupp</option>
              <option value="806">Bains, Waris</option>
              <option value="875">Banerji, Abhra</option>
              <option value="869">Banerji, Rabin</option>
              <option value="1230">Barton, Paxton</option>
              <option value="1231">Barton, Phil</option>
              <option value="963">Batchelder, Jonathan</option>
              <option value="1012">Batchelder, Mark</option>
              <option value="975">Batchelder, Veronica</option>
              <option value="488">Bayes, Dylan</option>
              <option value="578">Bayes, Phillip</option>
              <option value="617">Bell, Albie</option>
              <option value="1028">Bell, Katie</option>
              <option value="536">Bell, Nate</option>
              <option value="1019">Bell, Petey</option>
              <option value="656">Bennett, Eleanor</option>
              <option value="486">Bennett, Goodhue</option>
              <option value="690">Bennett, Mary</option>
              <option value="537">Bennett, Robbie</option>
              <option value="1621">Benson, Lawrence</option>
              <option value="1617">Benson, Nicolas</option>
              <option value="1128">Benton, Susannah</option>
              <option value="1042">Bergen, Chris</option>
              <option value="1037">Bergen, Emmett</option>
              <option value="489">Binford, Grayson</option>
              <option value="534">Binford, Jason</option>
              <option value="1154">Blair, Frankie</option>
              <option value="1155">Blair, Joe</option>
              <option value="593">Brady, Christopher</option>
              <option value="626">Brady, Heather</option>
              <option value="605">Branagh, Colin</option>
              <option value="608">Branagh, Wayne</option>
              <option value="1156">Bruyn, Emerson</option>
              <option value="1169">Bruyn, Meaghan</option>
              <option value="964">Bucklin, Emmett</option>
              <option value="976">Bucklin, Mary</option>
              <option value="977">Bucklin, Michael</option>
              <option value="1610">Bucklin, Michael2</option>
              <option value="1611">Bucklin, Michael3</option>
              <option value="1004">Burns, Kai</option>
              <option value="1006">Burns, Mike</option>
              <option value="595">Buse, Hendrix</option>
              <option value="674">Buse, Jayme</option>
              <option value="691">Buse, Michael</option>
              <option value="785">Bush, Greg</option>
              <option value="762">Bush, Kai</option>
              <option value="908">Byrd, Amanda</option>
              <option value="1618">Byrd, Barrett</option>
              <option value="763">Byrd, Benjamin</option>
              <option value="786">Byrd, Ryan</option>
              <option value="620">Canales, Hudson</option>
              <option value="681">Canales, Jorge</option>
              <option value="675">Canales, Rebecca</option>
              <option value="571">Cantin, Candy</option>
              <option value="570">Cantin, Jason</option>
              <option value="573">Cantin, Samuel</option>
              <option value="544">Capar, Alp</option>
              <option value="621">Capar, Mia</option>
              <option value="764">Cardwell, Matthew</option>
              <option value="836">Cardwell, Robert</option>
              <option value="574">Carty, Addison</option>
              <option value="584">Carty, Caroline</option>
              <option value="500">Carty, Nate</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="1143">Chidester, Ella</option>
              <option value="986">Chidester, Russ</option>
              <option value="983">Chidester, Taylor</option>
              <option value="1029">Coman, Adela</option>
              <option value="715">Corder, Catharine</option>
              <option value="502">Corder, Clifford</option>
              <option value="1121">Corder, Clifford</option>
              <option value="499">Corder, Myra</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1020">Couch, Marcus</option>
              <option value="653">Cross, Andrew</option>
              <option value="658">Cross, Cole</option>
              <option value="563">Cross, Stacy</option>
              <option value="559">Cross, Stan</option>
              <option value="1051">Cruz, Ryan</option>
              <option value="1046">Cruz, Taryn</option>
              <option value="1010">Currer, Josh</option>
              <option value="1008">Currer, Silas</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="603">Davis, Alisande</option>
              <option value="612">Davis, Dylan</option>
              <option value="951">Davis, Eagle</option>
              <option value="955">Davis, Jim</option>
              <option value="523">Davis, Keegan</option>
              <option value="1">De La Garza, Adrian</option>
              <option value="501">De La Garza, Gabby</option>
              <option value="594">De La Garza, Kimberly</option>
              <option value="705">de la Puente, Matias</option>
              <option value="984">De Los Santos Garza, Andrea</option>
              <option value="965">De Los Santos Garza, Leo  Jr.</option>
              <option value="978">De Los Santos Tamez, Diego</option>
              <option value="1532">Delete, Delete</option>
              <option value="1135">DeMartini, Emilia</option>
              <option value="1139">DeMartini, Trevor</option>
              <option value="1136">DeMartini, Vincent</option>
              <option value="1241">Dennis, Khoi</option>
              <option value="1246">Dennis, Michael</option>
              <option value="614">Desouky, Noura</option>
              <option value="1268">Diaz, Adam</option>
              <option value="1266">Diaz, Winslow</option>
              <option value="521">Doran, James</option>
              <option value="650">Doran, Jason</option>
              <option value="515">Doran, Jill</option>
              <option value="708">Douglas, Austin</option>
              <option value="706">Douglas, Jack</option>
              <option value="562">Dranguet, Benjamin</option>
              <option value="561">Dranguet, Ryan</option>
              <option value="828">Driscoll, Evan</option>
              <option value="575">Duraimani, Rajesh</option>
              <option value="1281">Duryee, David</option>
              <option value="1203">D'Vincent, Lilli</option>
              <option value="1185">D'Vincent, Mason</option>
              <option value="654">Elrakabawy, Erin</option>
              <option value="659">Elrakabawy, Noah</option>
              <option value="589">Elrakabawy, Raef</option>
              <option value="1021">Elwell, Connor</option>
              <option value="1022">Elwell, Jack</option>
              <option value="829">Erales, Felix</option>
              <option value="807">Erales, Jonah</option>
              <option value="808">Erales, Maxwell</option>
              <option value="1539">Espejel, Dean</option>
              <option value="1609">Espejel, Moshe</option>
              <option value="742">Espinoza, Erin</option>
              <option value="734">Espinoza, Logan</option>
              <option value="966">Fabian, Luca</option>
              <option value="979">Fabian, Mel</option>
              <option value="1131">Fabian, Melle</option>
              <option value="876">Fannon, Beau</option>
              <option value="830">Fannon, Christina</option>
              <option value="809">Fannon, Connor</option>
              <option value="787">Feng, Guo</option>
              <option value="810">Fick, Ezra</option>
              <option value="831">Fick, Preston</option>
              <option value="564">Files, Michael</option>
              <option value="1122">Files, Michael</option>
              <option value="633">Files, Mikaela</option>
              <option value="651">Files, Sofia</option>
              <option value="685">Flores, Joey</option>
              <option value="590">Flores, Jose  III</option>
              <option value="677">Flores, Kirstine</option>
              <option value="507">Flores, Logan</option>
              <option value="529">Foster, Amelia</option>
              <option value="655">Foster, Michelle</option>
              <option value="888">Gaete, Holly</option>
              <option value="886">Gaete, Lincoln</option>
              <option value="893">Galdo, Anne</option>
              <option value="901">Galdo, Gabe</option>
              <option value="1088">Galdo, Henry</option>
              <option value="482">Gammill, Bonnie</option>
              <option value="547">Garg, Suchi</option>
              <option value="636">Gautreaux, Alex</option>
              <option value="550">Gautreaux, Andrew</option>
              <option value="540">Gautreaux, MaryLynn</option>
              <option value="618">Gautreaux, Michael</option>
              <option value="645">Gibby, Harper</option>
              <option value="518">Gibby, Kai</option>
              <option value="592">Gibby, Robert</option>
              <option value="1114">Gibson, Charleston</option>
              <option value="1123">Gibson, Steven</option>
              <option value="1030">Glock, Lu</option>
              <option value="1186">Gonzalez, Jane</option>
              <option value="832">Goodine, David</option>
              <option value="811">Goodine, Jack</option>
              <option value="548">Graham, Adam</option>
              <option value="601">Graham, Hudson</option>
              <option value="948">Gremillion, Dallas</option>
              <option value="946">Gremillion, Tony</option>
              <option value="932">Guerra Shipley, Symone</option>
              <option value="1187">Gurrola, Benjamin</option>
              <option value="1204">Gurrola, Jacqueline</option>
              <option value="1232">Gurrola, Matthew</option>
              <option value="1157">Hallar, Henry</option>
              <option value="1170">Hallar, Ingrid</option>
              <option value="1171">Hanss Blair, Rachel</option>
              <option value="944">Harrison, Abi</option>
              <option value="940">Harrison, James</option>
              <option value="1084">Hayes, David</option>
              <option value="699">Hayward, Daniel</option>
              <option value="695">Hayward, Harlan</option>
              <option value="812">Hickman, Aaron</option>
              <option value="1188">Hickman, Maya</option>
              <option value="833">Hickman, Trey</option>
              <option value="788">Hinojosa-Cardwell, Teresa</option>
              <option value="952">Hinote, Jake</option>
              <option value="1055">Hinote, John</option>
              <option value="956">Hinote, Mistie</option>
              <option value="1058">Hoekstra, Bea</option>
              <option value="1061">Hoekstra, Jason</option>
              <option value="1059">Hoekstra, William</option>
              <option value="652">Hogue, Cason</option>
              <option value="657">Hogue, Matthew</option>
              <option value="1285">Hoy, Ashton</option>
              <option value="1287">Hoy, Nicole</option>
              <option value="565">Hudgens, Kristen</option>
              <option value="566">Hudson, Jay</option>
              <option value="555">Hudson, Kellen</option>
              <option value="634">Hudson, Tiffany</option>
              <option value="1216">Hume, Beatrix</option>
              <option value="1225">Hume, John</option>
              <option value="700">Hutchins, Magdalena</option>
              <option value="696">Hutchins, Samuel</option>
              <option value="1205">Idell, Claire</option>
              <option value="1189">Idell, Gabe</option>
              <option value="1292">Ingram, Alistair</option>
              <option value="1534">Ingrams, Julie and Robert</option>
              <option value="1250">Isaak, Christian</option>
              <option value="1252">Isaak, Rachel</option>
              <option value="600">jain, bhavik</option>
              <option value="676">Jain, Sudhir</option>
              <option value="1000">Jiang, Xuling</option>
              <option value="1097">Johnson, Bridget</option>
              <option value="1093">Johnson, Samuel</option>
              <option value="615">Jung Jang, Eun</option>
              <option value="877">Kafena, Afif</option>
              <option value="870">Kafena, Evangeline</option>
              <option value="1293">Kathuria, Kabir</option>
              <option value="883">Keenan, Danielle</option>
              <option value="880">Keenan, Lilly</option>
              <option value="882">Keenan, Peter</option>
              <option value="560">Kelble, Jillian</option>
              <option value="545">Kelble, Joe</option>
              <option value="520">Kelble, Rhys</option>
              <option value="1098">Kelly, Andi</option>
              <option value="1094">Kelly, Spencer</option>
              <option value="527">Killough, Kaden</option>
              <option value="680">Killough, Kent</option>
              <option value="585">Killough, Klayten</option>
              <option value="631">KIM, Dong Sung</option>
              <option value="549">Kim, Nathan</option>
              <option value="1047">Klein, James</option>
              <option value="1053">Klein, Jamie</option>
              <option value="1052">Klein, Taylor</option>
              <option value="542">Kohli, Anumeha</option>
              <option value="666">Kohli, Aria</option>
              <option value="1190">kommineni, anish</option>
              <option value="517">kommineni, Avighna</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
              <option value="1623">Koran, Katie and Kenny</option>
              <option value="1619">Koran, Teddy</option>
              <option value="532">Kramer, Matthew</option>
              <option value="632">Kramer, Victoria</option>
              <option value="478">Kramer, Weyland</option>
              <option value="661">Kumar, Anand</option>
              <option value="541">Kumari, Kamla</option>
              <option value="552">Lai, Aaliyah</option>
              <option value="553">Lai, James</option>
              <option value="894">Lai, James</option>
              <option value="513">Lee, Mia</option>
              <option value="679">Lee, Paul</option>
              <option value="505">Lee, Ronan</option>
              <option value="490">Leonard, Harper</option>
              <option value="528">Leonard, Sam</option>
              <option value="813">Lieberknecht, Eleanor</option>
              <option value="902">Lieberknecht, Elizabeth</option>
              <option value="604">Liu, Austin</option>
              <option value="567">Liu, Xianzhi</option>
              <option value="535">Llorente, Dorian</option>
              <option value="496">Llorente, Kristin</option>
              <option value="933">Lorenzini, Mitch</option>
              <option value="1217">Lorenzini, Paige</option>
              <option value="922">Lorenzini, Pepper</option>
              <option value="1032">Lynch, Dixon</option>
              <option value="1034">Lynch, Scott</option>
              <option value="669">Makwana, Prakash</option>
              <option value="688">Mallios, Jason</option>
              <option value="693">Mallios, Jim</option>
              <option value="493">Mallios, Nicholas</option>
              <option value="556">Mallios, Tracy</option>
              <option value="1260">Marquez, David</option>
              <option value="1255">Marquez, Owen</option>
              <option value="856">Marshall, Angie</option>
              <option value="866">Marshall, Mark</option>
              <option value="694">Martin, Abby</option>
              <option value="683">Martin, Jude</option>
              <option value="735">Matter, Alex</option>
              <option value="743">Matter, Rebecca</option>
              <option value="1038">Maza, Barry</option>
              <option value="1043">Maza, Heather</option>
              <option value="1158">McFarland, Beckett</option>
              <option value="923">McFarland, Evan</option>
              <option value="1124">McFarland, Ian</option>
              <option value="934">McFarland, Kristin</option>
              <option value="736">McGrath, Carter</option>
              <option value="744">McGrath, Kimberly</option>
              <option value="1269">McLeer, Douglas</option>
              <option value="1226">McLeer, Krissy</option>
              <option value="1218">McLeer, Levi</option>
              <option value="1219">McLeer, Liam</option>
              <option value="814">McManus, Bear</option>
              <option value="834">McManus, Keith</option>
              <option value="1256">Medler, Bennett</option>
              <option value="508">Mehta, Aarav</option>
              <option value="509">Mehta, Arya</option>
              <option value="610">Mehta, Dimpesh</option>
              <option value="667">Mehta, Rian</option>
              <option value="864">Mehta, Shreya</option>
              <option value="663">Meier, Joshua</option>
              <option value="495">Meier, Neve</option>
              <option value="557">Meier, Townes</option>
              <option value="619">Mills, Brady</option>
              <option value="1620">Modglin, Abel</option>
              <option value="1622">Modglin, Kirk</option>
              <option value="586">Mohmmad, Ivan</option>
              <option value="1125">Monahan, Matthew</option>
              <option value="670">Monahan2, Matthew</option>
              <option value="686">Montalvo, Cori</option>
              <option value="487">Montalvo, Jace</option>
              <option value="602">Montalvo, Matt</option>
              <option value="1276">Morris, Jack</option>
              <option value="1282">Morris, Lacey</option>
              <option value="697">Muller, Aubrey</option>
              <option value="701">Muller, Brittany</option>
              <option value="698">Muller, Elijah</option>
              <option value="597">Murray, Shanna</option>
              <option value="1002">Mysyk, Alexander</option>
              <option value="1288">Mysyk, Andriy</option>
              <option value="596">Mysyk, Andriy</option>
              <option value="641">Mysyk, Daniel</option>
              <option value="1191">Nair, Ananya</option>
              <option value="1206">Nair, Jithun</option>
              <option value="1294">Nallathambi, Kalki</option>
              <option value="1533">Nallathambi, Ravetha</option>
              <option value="530">Ng, Melissa</option>
              <option value="789">Nguyen, Phuong</option>
              <option value="480">Niefeldt, Anita</option>
              <option value="662">Niefeldt, Janek</option>
              <option value="512">Niefeldt, Sebastian</option>
              <option value="1277">Niphadkar, Sahana</option>
              <option value="1283">Niphadkar, Shraddha</option>
              <option value="846">Nomura, Asuka</option>
              <option value="841">Nomura, Edison</option>
              <option value="1172">North, Allison</option>
              <option value="1159">North, Arlo</option>
              <option value="1160">North, Davis</option>
              <option value="599">Omran, Ahmed</option>
              <option value="643">Omran, Haroun</option>
              <option value="546">Omran, Youssef</option>
              <option value="481">Ospina, Franny</option>
              <option value="539">Ospina, Ivan</option>
              <option value="484">Park, Jin Soo</option>
              <option value="1068">Park, Jude</option>
              <option value="1070">Park, Yongshin</option>
              <option value="1075">Parker, Brandon</option>
              <option value="1073">Parker, Bryce</option>
              <option value="644">Parma, Allyson</option>
              <option value="568">Parma, Andy</option>
              <option value="642">Parma, Giuliana</option>
              <option value="1079">Patel, Amy</option>
              <option value="1110">Patel, Hemang</option>
              <option value="861">Patel, Niam</option>
              <option value="862">Patel, Nirvaan</option>
              <option value="1173">Patel, Sujan</option>
              <option value="1100">Patel, Yug</option>
              <option value="533">Patterson, Kaitlyn</option>
              <option value="611">Patterson, Sue Ann</option>
              <option value="519">Perez, Hjalmar</option>
              <option value="684">Perez, Jane</option>
              <option value="569">Perez-Ng, Gabriela</option>
              <option value="765">Phan, Erik</option>
              <option value="506">Pina, Helen</option>
              <option value="967">Pina-Monahan, Nico</option>
              <option value="628">Pina-Monahan, Nina</option>
              <option value="1247">Porter, Koley</option>
              <option value="1242">Porter, Thora</option>
              <option value="598">Prishtina, Adam</option>
              <option value="572">Prishtina, Alexander</option>
              <option value="884">Prishtina, Benjamin</option>
              <option value="606">Prishtina, Jennifer</option>
              <option value="717">Purbach, Barrett</option>
              <option value="720">Purbach, Jennifer</option>
              <option value="721">Purbach, Ulrich</option>
              <option value="968">Purohit, Anay</option>
              <option value="980">Purohit, Vijendra</option>
              <option value="510">Rajesh, Karthik</option>
              <option value="483">Rekepalli, Reetu</option>
              <option value="476">Rekepalli, Reiyuan</option>
              <option value="709">Reyes, LuAnna</option>
              <option value="707">Reyes, Luke</option>
              <option value="1207">Rios, Amanda</option>
              <option value="1192">Rios, Esai</option>
              <option value="1243">Rios, Luciana</option>
              <option value="745">Robinson, Nick</option>
              <option value="737">Robinson, Rohan</option>
              <option value="637">Runde, James</option>
              <option value="639">Runde, Katie</option>
              <option value="587">Rutherford, Alexander</option>
              <option value="647">Rutherford, Katherine</option>
              <option value="497">Rutherford, Kendal</option>
              <option value="1140">Rutherford, Kendal</option>
              <option value="1126">Rutherford, Kendal</option>
              <option value="897">Rutherford, Kendal</option>
              <option value="898">Rutherford, Matthew</option>
              <option value="522">Rutherford, Matthew</option>
              <option value="924">Saldanha, Claire</option>
              <option value="1161">Saldanha, Eva</option>
              <option value="935">Saldanha, Mithila</option>
              <option value="516">Saquing, Gabe</option>
              <option value="588">Saquing, Michele</option>
              <option value="479">Savage, Collin</option>
              <option value="613">Savage, Henri</option>
              <option value="640">Savage, Meghan</option>
              <option value="581">Savage, Robert</option>
              <option value="558">Schmid, Ben</option>
              <option value="491">Schmid, Natalie</option>
              <option value="635">Schmid, Tarisa</option>
              <option value="692">Schroeder, Adam</option>
              <option value="524">Schroeder, Elliot</option>
              <option value="543">Schroeder, Erin</option>
              <option value="766">Shan, Gordon</option>
              <option value="790">Shan, Honggang</option>
              <option value="925">Shipley, Oliver</option>
              <option value="622">Shuman, Frank</option>
              <option value="853">Shuman, Luca</option>
              <option value="649">Shuman, Natalie</option>
              <option value="498">Shuman, Zan</option>
              <option value="580">Siddamshetti, Shriyan</option>
              <option value="525">Siddamshetti, Vamshi</option>
              <option value="926">Sides, Bowie</option>
              <option value="936">Sides, Todd</option>
              <option value="511">Singh, Shaant</option>
              <option value="711">Singh, Surinder</option>
              <option value="494">Singh, Suvaan</option>
              <option value="899">Slonsky, Henry</option>
              <option value="582">Slonsky, Keanu</option>
              <option value="583">Slonsky, Kyle</option>
              <option value="591">Slonsky, Yasemin</option>
              <option value="609">SlonskyDeleted, HenryDeleted</option>
              <option value="646">Smits, Carter</option>
              <option value="648">Smits, Cory</option>
              <option value="900">Smits, Cory</option>
              <option value="815">Smits, Dalton</option>
              <option value="816">Smits, Turner</option>
              <option value="551">Solis, Grace</option>
              <option value="687">Solis, Thuy</option>
              <option value="538">Soni, Randhir</option>
              <option value="607">Soni, Shashwat</option>
              <option value="1208">Staffield, Brittany</option>
              <option value="629">Stappenbeck, Augusten</option>
              <option value="638">Stappenbeck, Charlotte</option>
              <option value="616">Stappenbeck, Steve</option>
              <option value="1263">Stubblefield, Joel</option>
              <option value="1262">Stubblefield, Will</option>
              <option value="503">Su, James</option>
              <option value="623">Su, Liehao</option>
              <option value="477">Su, Lisa</option>
              <option value="1162">Sujan, Jaxson</option>
              <option value="1163">Sujan, Kira</option>
              <option value="1077">Sujan, Mav</option>
              <option value="485">Sunwoo, Dam</option>
              <option value="526">Sunwoo, Jason</option>
              <option value="1066">Susannah Benton, Susannah</option>
              <option value="576">Susanto, Elisha</option>
              <option value="995">Swantner, Albert</option>
              <option value="990">Swantner, Elliott</option>
              <option value="991">Swantner, Everett</option>
              <option value="992">Swenson, Jack</option>
              <option value="996">Swenson, Lindsey</option>
              <option value="1089">Swenson, Matt</option>
              <option value="1271">Swenson.MatthewJ@gmail.com, Matthew S</option>
              <option value="1081">Tabie, Logan</option>
              <option value="1085">Tabie, Mike</option>
              <option value="835">Tadi, Krishna</option>
              <option value="817">Tadi, Satvik</option>
              <option value="492">Timperley, Cinda</option>
              <option value="916">Tiwari, Anuj</option>
              <option value="689">Tiwari, Leslie</option>
              <option value="671">Tiwari, Mila</option>
              <option value="504">Torres, Maxwell</option>
              <option value="554">Trad, Charles  Jr.</option>
              <option value="579">Trad, Lucas</option>
              <option value="531">Trad, Megan</option>
              <option value="624">Tu, Fiona</option>
              <option value="854">Valencia Marshall, Angel</option>
              <option value="710">Velasquez, Lynda</option>
              <option value="1248">Velazquez Martinez, Francisco</option>
              <option value="1244">VelazquezEscorza, Diego Emilio</option>
              <option value="1264">Vital, Jessie</option>
              <option value="791">Walker, Annie</option>
              <option value="878">Walker, Josh</option>
              <option value="767">Walker, Owen</option>
              <option value="768">Walker, Sophia</option>
              <option value="847">Wallace, Audrey</option>
              <option value="850">Wallace, Lily</option>
              <option value="848">Wallace, Matthew</option>
              <option value="842">Wallace, Tristan</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1220">Westphal, Milo</option>
              <option value="1221">Westphal, Oliver</option>
              <option value="1209">Whittington, Aric</option>
              <option value="1193">Whittington, Rowan</option>
              <option value="627">Workman, Chip  IV</option>
              <option value="625">Workman, Logan</option>
              <option value="998">Yang, Neil</option>
              <option value="769">Yao, Eden</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Debit Event
            </label>
          </td>
          <td>
            <select name="OP544112" tabindex="430" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544112" name="QUERY544112" class="form-control" onblur="TestRegExp(this,'','')" tabindex="440" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="468">(AT FALL CAMPOUT) Lions: Backyard Bass Fishing &amp; Angler Ed with Tx Wildlife (11/08/25)</option>
              <option value="467">(AT FALL CAMPOUT) Tigers: Skins &amp; Skulls program with Texas Wildlife (11/08/25)</option>
              <option value="466">(AT FALL CAMPOUT)Lions:  Skins &amp; Skulls program with Texas Wildlife (11/08/25)</option>
              <option value="284">(BOYS AOL) Troop 448 - Astronomy Overnight Campout (10/19/24)</option>
              <option value="266">(BOYS AOL) Troop 505 - Invitational Capture the Flag Campout (10/18/24)</option>
              <option value="285">(BOYS AOL) Troop 555 - Grelle Campout (10/19/24)</option>
              <option value="287">(BOYS) - Troop 61 Open House (10/27/24)</option>
              <option value="288">(GIRLS AOL) - Troop 4443 Krause Springs Campout (10/11/24)</option>
              <option value="286">(GIRLS) - Troop 19 Halloween Costume Party (10/27/24)</option>
              <option value="342">Advancement Cut Off for Graduation (05/11/25)</option>
              <option value="583">AOL Crossover Ceremony (02/27/27)</option>
              <option value="373">AOL Crossover Ceremony (03/07/26)</option>
              <option value="263">AOL Den 22 Community Service- Tree Planting (12/14/24)</option>
              <option value="260">AOL Den 22 Meeting - BOBCAT (09/13/24)</option>
              <option value="264">AOL Den 22 Meeting - First Aid (01/17/25)</option>
              <option value="262">AOL Den 22 Meeting - OUTDOOR ADVENTURER (10/11/24)</option>
              <option value="265">AOL Den 22 Meeting - PERSONAL FITNESS (11/22/24)</option>
              <option value="90">AOL Scouting Adventure - Troop 505 Open House (09/16/23)</option>
              <option value="1">April Pack Meeting (04/11/23)</option>
              <option value="64">Aquanaut Adventure (08/19/23)</option>
              <option value="258">Aquanauts (08/24/24)</option>
              <option value="180">Archery Rangemaster Training (01/06/24)</option>
              <option value="584">Arrows &amp; BB's Adventure Day (03/06/27)</option>
              <option value="568">Arrows Swim Test (07/10/26)</option>
              <option value="569">Arrows Swim Test (07/26/26)</option>
              <option value="566">Arrows, BBs &amp; Campfires (09/25/26)</option>
              <option value="210">Austin Fire Station 27 - Den 4 Lions (03/24/24)</option>
              <option value="237">Baldwin Back to School Night K-2nd (08/29/24)</option>
              <option value="343">Baldwin Campus Beautification Day (03/08/25)</option>
              <option value="458">Baldwin Campus Cleanup Service Project (10/26/25)</option>
              <option value="223">Baldwin Ceremony of Colors (05/23/24)</option>
              <option value="163">Baldwin Cleanup (11/05/23)</option>
              <option value="33">Baldwin End of Year 5th Grade Ceremony - Flag Detail (05/25/23)</option>
              <option value="392">Baldwin Meet the Teacher Night (08/15/25)</option>
              <option value="236">Baldwin Meet the Teacher Night (08/16/24)</option>
              <option value="324">Baldwin Veteran's Day Celebration - Flag Ceremony (11/11/24)</option>
              <option value="274">BALOO Adult Leader Training (10/11/24)</option>
              <option value="478">BALOO Training (01/09/26)</option>
              <option value="179">BB Gun Rangemaster Training (01/06/24)</option>
              <option value="199">BEAR DENS - Fire Station Visit by Den 3 (02/18/24)</option>
              <option value="400">Bears Den Meeting (03/29/26)</option>
              <option value="401">Bears Den Meeting (04/26/26)</option>
              <option value="482">Block Cutting for Pinewood Derby (01/17/26)</option>
              <option value="483">Block Cutting for Pinewood Derby (01/18/26)</option>
              <option value="484">Block Cutting for Pinewood Derby (01/19/26)</option>
              <option value="488">Block Cutting for Pinewood Derby (01/22/26)</option>
              <option value="35">Bowling with the Pack (07/15/23)</option>
              <option value="208">BSA Distinguished Citizen Award (03/28/24)</option>
              <option value="162">Building a Better World (10/08/23)</option>
              <option value="372">CANCELLED - Cubmaster Campout (03/06/26)</option>
              <option value="140">CANCELLED - Den 1 Meeting (11/12/23)</option>
              <option value="25">CANCELLED: Recruitment Table @ Clayton Carnival (04/28/23)</option>
              <option value="507">Ceremony of Colors at Baldwin Elementary Graduation (05/28/26)</option>
              <option value="346">Ceremony of Colors at Baldwin Elementary Graduation (05/29/25)</option>
              <option value="506">Cidercade Hangout (06/20/26)</option>
              <option value="24">Circle C 4th of July Parade (07/01/23)</option>
              <option value="511">Circle C 4th of July Parade (07/04/26)</option>
              <option value="498">Clayton Carnival Recruitment Booth (04/11/26)</option>
              <option value="169">Clayton Elementary Veterans Day Celebration - Flag Ceremony (11/10/23)</option>
              <option value="390">Clayton Meet the Teacher Night (08/14/25)</option>
              <option value="235">Clayton Meet the Teacher Night (08/15/24)</option>
              <option value="323">Clayton Veterans Day Assembly - Flag Ceremony (11/08/24)</option>
              <option value="341">Clayton's Spring Carnival Recruitment Booth (04/05/25)</option>
              <option value="340">Clean-up at Clayton and Community Center (04/06/25)</option>
              <option value="247">Committee &amp; Leader Meeting (03/09/25)</option>
              <option value="248">Committee &amp; Leader Meeting (04/06/25)</option>
              <option value="249">Committee &amp; Leader Meeting (05/04/25)</option>
              <option value="242">Committee &amp; Leader Meeting (10/06/24)</option>
              <option value="243">Committee &amp; Leader Meeting (11/10/24)</option>
              <option value="244">Committee &amp; Leader Meeting (12/01/24)</option>
              <option value="114">Committee / Den Leader Meeting (01/07/24)</option>
              <option value="115">Committee / Den Leader Meeting (02/04/24)</option>
              <option value="116">Committee / Den Leader Meeting (03/03/24)</option>
              <option value="117">Committee / Den Leader Meeting (04/07/24)</option>
              <option value="118">Committee / Den Leader Meeting (05/05/24)</option>
              <option value="58">Committee / Den Leader Meeting (09/10/23)</option>
              <option value="59">Committee / Den Leader Meeting (10/01/23)</option>
              <option value="69">Committee / Den Leader Meeting (11/05/23)</option>
              <option value="70">Committee / Den Leader Meeting (12/03/23)</option>
              <option value="21">Committee / Leader Meeting (05/07/23)</option>
              <option value="120">Crossover (02/24/24)</option>
              <option value="253">Crossover Campout (NOW CEREMONY ONLY) (02/22/25)</option>
              <option value="337">Crossover Ceremony (02/22/25)</option>
              <option value="552">Cub Kite and Rocket Festival (Council Event) (09/26/26)</option>
              <option value="553">Cub Winter Festival (Council Event) (01/16/27)</option>
              <option value="339">Cubmaster Campout (03/01/25)</option>
              <option value="62">Cubmaster Campout (12/08/23)</option>
              <option value="352">Cubmobile Derby (08/16/25)</option>
              <option value="222">Cubmobile Derby (08/18/24)</option>
              <option value="437">Den 1 Meeting (01/10/26)</option>
              <option value="142">Den 1 Meeting (01/14/24)</option>
              <option value="438">Den 1 Meeting (02/21/26)</option>
              <option value="144">Den 1 Meeting (03/17/24)</option>
              <option value="280">Den 1 Meeting (03/25/25)</option>
              <option value="145">Den 1 Meeting (04/14/24)</option>
              <option value="18">Den 1 Meeting (04/18/23)</option>
              <option value="281">Den 1 Meeting (04/22/25)</option>
              <option value="404">Den 1 Meeting (09/14/25)</option>
              <option value="84">Den 1 Meeting (09/17/23)</option>
              <option value="269">Den 1 Meeting (09/17/24)</option>
              <option value="434">Den 1 Meeting (10/05/25)</option>
              <option value="139">Den 1 Meeting (10/15/23)</option>
              <option value="275">Den 1 Meeting (10/22/24)</option>
              <option value="435">Den 1 Meeting (11/01/25)</option>
              <option value="276">Den 1 Meeting (11/19/24)</option>
              <option value="473">Den 1 Meeting (11/30/25)</option>
              <option value="141">Den 1 Meeting (12/17/23)</option>
              <option value="277">Den 1 Meeting (12/17/24)</option>
              <option value="487">Den 10 Meeting (02/15/26)</option>
              <option value="492">Den 10 Meeting (03/08/26)</option>
              <option value="495">Den 10 Meeting (03/29/26)</option>
              <option value="497">Den 10 Meeting (04/26/26)</option>
              <option value="393">Den 10 Meeting (09/14/25)</option>
              <option value="464">Den 10 Meeting (11/02/25)</option>
              <option value="476">Den 10 Meeting (12/14/25)</option>
              <option value="453">Den 12 (Bears) Meeting (01/18/26)</option>
              <option value="454">Den 12 (Bears) Meeting (02/22/26)</option>
              <option value="451">Den 12 (Bears) Meeting (11/16/25)</option>
              <option value="452">Den 12 (Bears) Meeting (12/14/25)</option>
              <option value="450">Den 12 Bears Meeting (10/12/25)</option>
              <option value="27">Den 19 Make-up Session (04/16/23)</option>
              <option value="92">Den 19 Meeting - Building a Better World (10/08/23)</option>
              <option value="189">Den 19 Meeting (01/21/24)</option>
              <option value="91">Den 19 Meeting (09/24/23)</option>
              <option value="93">Den 19 Meeting (10/22/23)</option>
              <option value="94">Den 19 Meeting (11/05/23)</option>
              <option value="136">Den 2 - make up day (03/23/24)</option>
              <option value="398">Den 2 (Bears) Meeting (01/11/26)</option>
              <option value="399">Den 2 (Bears) Meeting (02/22/26)</option>
              <option value="397">Den 2 (Bears) Meeting (12/14/25)</option>
              <option value="131">Den 2 activity (e.g. hike) (11/11/23)</option>
              <option value="395">Den 2 Bears Meeting (10/12/25)</option>
              <option value="133">Den 2 meeting (01/10/24)</option>
              <option value="134">Den 2 meeting (02/07/24)</option>
              <option value="135">Den 2 meeting (03/06/24)</option>
              <option value="137">Den 2 meeting (04/03/24)</option>
              <option value="138">Den 2 meeting (05/01/24)</option>
              <option value="394">Den 2 Meeting (09/21/25)</option>
              <option value="129">Den 2 meeting (10/04/23)</option>
              <option value="293">Den 2 Meeting (10/20/24)</option>
              <option value="130">Den 2 meeting (11/01/23)</option>
              <option value="132">Den 2 meeting (holiday dinner at my house) (12/06/23)</option>
              <option value="79">Den 21 Meeting (01/11/24)</option>
              <option value="80">Den 21 Meeting (01/25/24)</option>
              <option value="29">Den 21 Meeting (04/20/23)</option>
              <option value="31">Den 21 Meeting (05/06/23)</option>
              <option value="43">Den 21 Meeting (06/15/23)</option>
              <option value="46">Den 21 Meeting (07/27/23)</option>
              <option value="47">Den 21 Meeting (08/17/23)</option>
              <option value="72">Den 21 Meeting (09/14/23)</option>
              <option value="73">Den 21 Meeting (09/28/23)</option>
              <option value="74">Den 21 Meeting (10/12/23)</option>
              <option value="75">Den 21 Meeting (10/26/23)</option>
              <option value="76">Den 21 Meeting (11/09/23)</option>
              <option value="77">Den 21 Meeting (11/30/23)</option>
              <option value="78">Den 21 Meeting (12/14/23)</option>
              <option value="283">Den 22 AOL campout Pedernales Falls (11/08/24)</option>
              <option value="408">Den 3 - December Den Meeting (12/14/25)</option>
              <option value="407">Den 3 - November Den Meeting - Group Bike Ride (11/16/25)</option>
              <option value="406">Den 3 - October Den Meeting (Time changed to 1:30PM) (10/26/25)</option>
              <option value="182">Den 3  Optional Makeup Meeting (12/17/23)</option>
              <option value="405">Den 3 - September Den Meeting (09/14/25)</option>
              <option value="207">Den 3 Cleanup Project*** note the new time (04/07/24)</option>
              <option value="28">Den 3 Make-up Session (04/16/23)</option>
              <option value="330">Den 3 Meeting (01/05/25)</option>
              <option value="183">Den 3 meeting (01/21/24)</option>
              <option value="331">Den 3 Meeting (02/16/25)</option>
              <option value="198">Den 3 Meeting (02/25/24)</option>
              <option value="205">Den 3 Meeting (03/24/24)</option>
              <option value="332">Den 3 Meeting (03/30/25)</option>
              <option value="333">Den 3 Meeting (04/27/25)</option>
              <option value="206">Den 3 Meeting (04/28/24)</option>
              <option value="272">Den 3 Meeting (09/22/24)</option>
              <option value="128">Den 3 Meeting (10/22/23)</option>
              <option value="164">Den 3 Meeting (10/22/23)</option>
              <option value="273">Den 3 Meeting (10/27/24)</option>
              <option value="170">Den 3 Meeting (11/19/23)</option>
              <option value="329">Den 3 Meeting (12/15/24)</option>
              <option value="325">Den 3 Mtg (11/17/24)</option>
              <option value="178">Den 4 Lions  - Den Meeting (12/20/23)</option>
              <option value="150">Den 4 Lions Meeting (10/18/23)</option>
              <option value="270">Den 4 Meeting (09/24/24)</option>
              <option value="101">Den 5 Meeting (01/17/24)</option>
              <option value="102">Den 5 Meeting (02/21/24)</option>
              <option value="103">Den 5 Meeting (03/20/24)</option>
              <option value="104">Den 5 Meeting (04/17/24)</option>
              <option value="97">Den 5 Meeting (09/20/23)</option>
              <option value="98">Den 5 Meeting (10/18/23)</option>
              <option value="322">Den 5 Meeting (10/27/24)</option>
              <option value="99">Den 5 Meeting (11/15/23)</option>
              <option value="100">Den 5 Meeting (12/20/23)</option>
              <option value="291">Den 5 Webelos (10/23/24)</option>
              <option value="109">Den 6 Meeting (01/24/24)</option>
              <option value="111">Den 6 Meeting (03/20/24)</option>
              <option value="112">Den 6 Meeting (04/17/24)</option>
              <option value="113">Den 6 Meeting (05/01/24)</option>
              <option value="105">Den 6 Meeting (09/20/23)</option>
              <option value="106">Den 6 Meeting (10/18/23)</option>
              <option value="107">Den 6 Meeting (11/08/23)</option>
              <option value="108">Den 6 Meeting (12/06/23)</option>
              <option value="211">Den 7 Meeting - Running with the Pack (03/24/24)</option>
              <option value="188">Den 7 Meeting (with Den 8!) (rescheduled) (02/11/24)</option>
              <option value="177">Den 7 Wolves  - Den Meeting (12/18/23)</option>
              <option value="149">Den 7 Wolves Meeting (10/16/23)</option>
              <option value="187">Den 8 meeting (01/21/24)</option>
              <option value="197">Den 8 meeting (02/11/24)</option>
              <option value="204">Den 8 meeting (03/03/24)</option>
              <option value="338">Den 8 meeting (03/09/25)</option>
              <option value="212">Den 8 meeting (04/14/24)</option>
              <option value="259">Den 8 meeting (09/15/24)</option>
              <option value="292">Den 8 meeting (10/20/24)</option>
              <option value="147">Den 8 meeting (10/22/23)</option>
              <option value="326">Den 8 meeting (11/17/24)</option>
              <option value="175">Den 8 meeting (11/26/23)</option>
              <option value="336">Den 8 Pinewood Derby workshop (01/18/25)</option>
              <option value="449">Den 8 Webelos meeting (10/12/25)</option>
              <option value="517">Den Leader &amp; Committee Meeting (01/10/27)</option>
              <option value="367">Den Leader &amp; Committee Meeting (01/11/26)</option>
              <option value="518">Den Leader &amp; Committee Meeting (02/07/27)</option>
              <option value="519">Den Leader &amp; Committee Meeting (03/07/27)</option>
              <option value="374">Den Leader &amp; Committee Meeting (03/08/26)</option>
              <option value="520">Den Leader &amp; Committee Meeting (04/04/27)</option>
              <option value="376">Den Leader &amp; Committee Meeting (04/12/26)</option>
              <option value="521">Den Leader &amp; Committee Meeting (05/02/27)</option>
              <option value="379">Den Leader &amp; Committee Meeting (05/03/26)</option>
              <option value="512">Den Leader &amp; Committee Meeting (08/09/26)</option>
              <option value="356">Den Leader &amp; Committee Meeting (08/10/25)</option>
              <option value="355">Den Leader &amp; Committee Meeting (09/07/25)</option>
              <option value="513">Den Leader &amp; Committee Meeting (09/13/26)</option>
              <option value="514">Den Leader &amp; Committee Meeting (10/04/26)</option>
              <option value="360">Den Leader &amp; Committee Meeting (10/05/25)</option>
              <option value="515">Den Leader &amp; Committee Meeting (11/01/26)</option>
              <option value="362">Den Leader &amp; Committee Meeting (11/02/25)</option>
              <option value="516">Den Leader &amp; Committee Meeting (12/06/26)</option>
              <option value="365">Den Leader &amp; Committee Meeting (12/07/25)</option>
              <option value="57">Den Leader Training (09/24/23)</option>
              <option value="300">Den Leader Training (10/23/24)</option>
              <option value="344">Den Meeting (03/30/25)</option>
              <option value="578">Den Meeting (04/11/27)</option>
              <option value="308">Den Meeting (04/27/24)</option>
              <option value="83">Den Meeting (Den 3) (09/24/23)</option>
              <option value="416">Den5 Den Meeting (01/21/26)</option>
              <option value="412">Den5 Den Meeting (09/17/25)</option>
              <option value="413">Den5 Den Meeting (10/22/25)</option>
              <option value="414">Den5 Den Meeting (11/19/25)</option>
              <option value="559">District Roundtable (01/07/27)</option>
              <option value="560">District Roundtable (02/04/27)</option>
              <option value="561">District Roundtable (03/04/27)</option>
              <option value="562">District Roundtable (04/01/27)</option>
              <option value="563">District Roundtable (05/06/27)</option>
              <option value="564">District Roundtable (06/04/26)</option>
              <option value="565">District Roundtable (07/02/26)</option>
              <option value="554">District Roundtable (08/06/26)</option>
              <option value="555">District Roundtable (09/03/26)</option>
              <option value="556">District Roundtable (10/01/26)</option>
              <option value="557">District Roundtable (11/05/26)</option>
              <option value="558">District Roundtable (12/03/26)</option>
              <option value="209">Eclipse Extravaganza (04/06/24)</option>
              <option value="200">Engineering (02/15/24)</option>
              <option value="234">Fall Campout - Goliad State Park (11/01/24)</option>
              <option value="60">Fall Campout (10/27/23)</option>
              <option value="364">Fall Campout (11/07/25)</option>
              <option value="549">Fall Campout (11/13/26)</option>
              <option value="353">Fall Recruitment - Baldwin (09/02/25)</option>
              <option value="67">Fall Recruitment - Baldwin BTS Night (K-2nd) (08/24/23)</option>
              <option value="37">Fall Recruitment - Baldwin Elementary (08/29/23)</option>
              <option value="224">Fall Recruitment - Circle C (08/24/24)</option>
              <option value="38">Fall Recruitment - Circle C (08/31/23)</option>
              <option value="225">Fall Recruitment - Circle C (09/01/24)</option>
              <option value="354">Fall Recruitment - Clayton (09/04/25)</option>
              <option value="53">Fall Recruitment - Clayton Meet the Teacher Night (08/10/23)</option>
              <option value="250">Family Pack Orientation (09/15/24)</option>
              <option value="56">FIRST Lion / Tiger Den Meeting (09/23/23)</option>
              <option value="50">Flag Retirement Ceremony (07/04/23)</option>
              <option value="541">Graduation (05/15/27)</option>
              <option value="181">Holiday Service Project (12/16/23)</option>
              <option value="219">Independence Day Parade (07/04/24)</option>
              <option value="350">Independence Day Parade (CANCELLED) (07/04/25)</option>
              <option value="351">Innerspace Caverns (07/19/25)</option>
              <option value="550">Into the Woods Cub Scout Adventure Weekend (Council Event) (11/06/26)</option>
              <option value="81">Jamboree On The Air (10/20/23)</option>
              <option value="579">Join Scouting Night (08/25/26)</option>
              <option value="426">Lion Den #6 &amp; # 7 Meeting (02/15/26)</option>
              <option value="420">Lion Den #6 &amp; #7 Meeting (10/05/25)</option>
              <option value="428">Lion Den #6 &amp; Den #7 Meeting (05/03/26)</option>
              <option value="427">Lion Den #6 Meeting (03/29/26)</option>
              <option value="459">Lion's Den #6 &amp; #7 Art Supply Pickup (10/12/25)</option>
              <option value="479">Lion's Den #6 &amp; #7 Card Delivery/Resident Holiday Party (12/23/25)</option>
              <option value="423">Lions Den #6 &amp; #7 Holiday Card Making Workshop (12/14/25)</option>
              <option value="461">Lions Den #6 &amp; #7 Service Project ART DUE 10/20-10/22 (10/20/25)</option>
              <option value="422">Lions Den #6, #7, Fire Station Tour/Den Meeting (11/02/25)</option>
              <option value="493">Lions Den #7 Meeting (03/15/26)</option>
              <option value="317">Lions Den 9 Meeting (01/19/25)</option>
              <option value="318">Lions Den 9 Meeting (02/16/24)</option>
              <option value="321">Lions Den 9 Meeting (02/16/25)</option>
              <option value="319">Lions Den 9 Meeting (03/30/25)</option>
              <option value="320">Lions Den 9 Meeting (04/27/25)</option>
              <option value="314">Lions Den 9 Meeting (10/27/24)</option>
              <option value="315">Lions Den 9 Meeting (11/17/24)</option>
              <option value="316">Lions Den 9 Meeting (12/15/24)</option>
              <option value="462">Lion's Service Project Art on Display @ Austin Studio Tour (11/15/25)</option>
              <option value="32">Make-up Den Meeting and Bobcat Clinic (04/29/23)</option>
              <option value="481">Meet an elected official (01/06/26)</option>
              <option value="345">Meeting the Sheriff (05/06/25)</option>
              <option value="503">Messengers Of Peace Service Project (04/18/26)</option>
              <option value="489">Mighty Ducks - Bonus Cycling Event (02/21/26)</option>
              <option value="490">Mighty Ducks - Make-up Requirements Meeting (02/08/26)</option>
              <option value="567">Natural Bridge Caverns (07/18/26)</option>
              <option value="63">NEW DATE: Committee / Den Leader Meeting (08/20/23)</option>
              <option value="36">NEW DATE: Cubmobile Derby (08/26/23)</option>
              <option value="55">New Scout Ceremony (09/16/23)</option>
              <option value="358">New Scout Family Meeting (09/14/25)</option>
              <option value="125">NEW TIME - Rocket Derby (05/04/24)</option>
              <option value="504">Optional - Service Event (04/25/26)</option>
              <option value="289">Overnight at the USS Lexington (01/11/25)</option>
              <option value="20">Pack 12 Graduation (05/09/23)</option>
              <option value="383">Pack 12 Graduation (05/16/26)</option>
              <option value="257">Pack 12 Graduation (05/17/25)</option>
              <option value="124">Pack 12 Graduation (05/19/24)</option>
              <option value="213">Pack 12 Recruitment @ Clayto's Playground (04/27/24)</option>
              <option value="121">Pack Meeting (01/09/24)</option>
              <option value="526">Pack Meeting (01/12/27)</option>
              <option value="368">Pack Meeting (01/13/26)</option>
              <option value="230">Pack Meeting (01/14/25)</option>
              <option value="527">Pack Meeting (02/09/27)</option>
              <option value="122">Pack Meeting (03/05/24)</option>
              <option value="528">Pack Meeting (03/09/27)</option>
              <option value="231">Pack Meeting (03/11/25)</option>
              <option value="375">Pack Meeting (03/24/26)</option>
              <option value="529">Pack Meeting (04/06/27)</option>
              <option value="232">Pack Meeting (04/08/25)</option>
              <option value="123">Pack Meeting (04/09/24)</option>
              <option value="377">Pack Meeting (04/14/26)</option>
              <option value="382">Pack Meeting (05/12/26)</option>
              <option value="233">Pack Meeting (05/13/25)</option>
              <option value="217">Pack Meeting (05/14/24)</option>
              <option value="40">Pack Meeting (10/10/23)</option>
              <option value="523">Pack Meeting (10/13/26)</option>
              <option value="361">Pack Meeting (10/14/25)</option>
              <option value="227">Pack Meeting (10/15/24)</option>
              <option value="524">Pack Meeting (11/10/26)</option>
              <option value="363">Pack Meeting (11/11/25)</option>
              <option value="228">Pack Meeting (11/12/24)</option>
              <option value="41">Pack Meeting (11/14/23)</option>
              <option value="525">Pack Meeting (12/08/26)</option>
              <option value="366">Pack Meeting (12/09/25)</option>
              <option value="229">Pack Meeting (12/10/24)</option>
              <option value="42">Pack Meeting (12/12/23)</option>
              <option value="522">Pack Meeting (Open House &amp; Parent Orientation) (09/08/26)</option>
              <option value="530">Pack Meeting (Rocket Building!) (05/04/27)</option>
              <option value="357">Pack Meeting / Open House (09/09/25)</option>
              <option value="226">Pack Meeting / Open House (09/10/24)</option>
              <option value="39">Pack Meeting / Open House (09/12/23)</option>
              <option value="535">Pack Meeting Setup (AOLs) (01/12/27)</option>
              <option value="531">Pack Meeting Setup (AOLs) (09/08/26)</option>
              <option value="537">Pack Meeting Setup (Bears) (03/09/27)</option>
              <option value="533">Pack Meeting Setup (Bears) (11/10/26)</option>
              <option value="536">Pack Meeting Setup (Webelos) (02/09/27)</option>
              <option value="539">Pack Meeting Setup (Webelos) (05/04/27)</option>
              <option value="532">Pack Meeting Setup (Webelos) (10/13/26)</option>
              <option value="538">Pack Meeting Setup (Wolves) (04/06/27)</option>
              <option value="534">Pack Meeting Setup (Wolves) (12/08/26)</option>
              <option value="221">Parent &amp; Volunteer Meeting (08/11/24)</option>
              <option value="241">Parent &amp; Volunteer Meeting (09/08/24)</option>
              <option value="119">Pinewood Derby (02/03/24)</option>
              <option value="371">Pinewood Derby (02/07/26)</option>
              <option value="252">Pinewood Derby (02/08/25)</option>
              <option value="544">Pinewood Derby (02/20/27)</option>
              <option value="545">Pinewood Derby Inspections (Option 1) (02/16/27)</option>
              <option value="546">Pinewood Derby Inspections (Option 2) (02/18/27)</option>
              <option value="334">Pinewood Derby Weigh-In (02/04/25)</option>
              <option value="335">Pinewood Derby Weigh-In (02/05/25)</option>
              <option value="387">Popcorn Unit Booth Selections (07/23/25)</option>
              <option value="388">Popcorn Unit Booth Selections (07/24/25)</option>
              <option value="386">Popcorn Unit Booth Selections Begin (07/22/25)</option>
              <option value="190">PWD Block Cutting (01/19/24)</option>
              <option value="176">PWD Block-cutting (01/17/24)</option>
              <option value="185">PWD Weigh-in (01/30/24)</option>
              <option value="186">PWD Weigh-in (01/31/24)</option>
              <option value="500">Raingutter Regatta (05/30/26)</option>
              <option value="349">Raingutter Regatta (06/07/25)</option>
              <option value="218">Raingutter Regatta (06/08/24)</option>
              <option value="23">Raingutter Regatta (06/17/23)</option>
              <option value="215">Rank Requirement Deadline for Graduation (05/01/24)</option>
              <option value="359">Registration Dues Deadline (09/30/25)</option>
              <option value="26">Requirement Deadline for Graduation (05/02/23)</option>
              <option value="381">Requirement Deadline for Graduation (05/10/26)</option>
              <option value="214">RESCHEDULED - Cleanup @ Clayton Elementary (05/11/24)</option>
              <option value="378">RESCHEDULED TO FALL -- Spring Campout (04/17/26)</option>
              <option value="216">Rocket Derby - Inspections (05/03/24)</option>
              <option value="540">Rocket Derby (04/17/27)</option>
              <option value="380">Rocket Derby (05/09/26)</option>
              <option value="256">Rocket Derby (05/10/25)</option>
              <option value="19">Rocket Derby (05/21/23)</option>
              <option value="508">Rocket Derby Inspections and Build (Session 1) (05/06/26)</option>
              <option value="509">Rocket Derby Inspections and Build (Session 2) (05/07/26)</option>
              <option value="347">Rocket Derby Inspections, Day 1 (05/07/25)</option>
              <option value="348">Rocket Derby Inspections, Day 2 (05/08/25)</option>
              <option value="30">Rocket Derby Workshop (04/15/23)</option>
              <option value="85">Round Table (09/07/23)</option>
              <option value="86">Round Table (10/05/23)</option>
              <option value="282">Roundtable (10/03/24)</option>
              <option value="582">Scouting 101 &amp; Cub Mobile (Troop Hosted Event) (10/03/26)</option>
              <option value="384">Scouting 101 (formerly Webelos Woods) (10/25/25)</option>
              <option value="255">Sea World Winter Overnight (01/25/25)</option>
              <option value="299">Service Project - Baldwin Campus Cleanup &amp; Planter Construction (10/27/24)</option>
              <option value="502">Spring Campout - Alternative Event - Please RSVP (04/18/26)</option>
              <option value="542">Spring Campout (04/02/27)</option>
              <option value="254">Spring Campout (04/11/25)</option>
              <option value="126">Spring Campout (04/19/24)</option>
              <option value="17">Spring Campout (04/21/23)</option>
              <option value="585">Spring Picnic (05/01/27)</option>
              <option value="34">Spring Recruitment (05/24/23)</option>
              <option value="22">STILL ON: Clayton Cleanup (04/29/23)</option>
              <option value="220">Summer Activity - Rock Climbing (07/20/24)</option>
              <option value="446">Thunderbird District Roundtable (03/05/26)</option>
              <option value="447">Thunderbird District Roundtable (04/02/26)</option>
              <option value="448">Thunderbird District Roundtable (05/07/26)</option>
              <option value="441">Thunderbird District Roundtable (10/02/25)</option>
              <option value="442">Thunderbird District Roundtable (11/06/25)</option>
              <option value="443">Thunderbird District Roundtable (12/04/25)</option>
              <option value="267">Thunderbird District Scouting 101 | Webelos Woods (10/12/24)</option>
              <option value="429">Tigers Den #9 &amp; #11 @ Radha Rani Hindu Temple (12/13/25)</option>
              <option value="430">Tigers Den #9 &amp; #11 Meeting (01/11/26)</option>
              <option value="431">Tigers Den #9 &amp; #11 Meeting (02/22/26)</option>
              <option value="432">Tigers Den #9 &amp; #11 Meeting (03/29/26)</option>
              <option value="433">Tigers Den #9 &amp; #11 Meeting (04/26/26)</option>
              <option value="460">Tigers Den #9 &amp; #11 Meeting/Fire Station Tour (11/02/25)</option>
              <option value="421">Tigers Den #9 Meeting (10/05/25)</option>
              <option value="307">Tigers Den 10 Meeting - Rolling Tigers (03/30/25)</option>
              <option value="306">Tigers Den 10 Meeting - Tiger Tag (03/02/25)</option>
              <option value="304">Tigers Den 10 Meeting (01/19/25)</option>
              <option value="313">Tigers Den 10 Meeting (04/27/25)</option>
              <option value="301">Tigers Den 10 Meeting (10/27/24)</option>
              <option value="312">Tigers Den 10 Meeting (11/17/24)</option>
              <option value="303">Tigers Den 10 Meeting (12/15/24)</option>
              <option value="465">Touch An Ambulance Event/First Aide with Ally Medical (11/16/25)</option>
              <option value="409">Troop 19 Campout - Pedernales Falls (12/06/25)</option>
              <option value="411">Troop 19 Halloween Party (10/26/25)</option>
              <option value="127">Troop 3337 Open House (10/01/23)</option>
              <option value="471">Troop 4443 - Edwards Aquifer Education Center (12/06/25)</option>
              <option value="470">Troop 4443 Halloween Party (11/02/25)</option>
              <option value="410">Troop 4443 Ice Cream Social (10/19/25)</option>
              <option value="477">Troop 448 Meeting with AOL Activities (12/08/25)</option>
              <option value="475">Troop 448 troop meeting (12/08/25)</option>
              <option value="165">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="166">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="167">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="168">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="268">Troop 505 Open House (09/28/24)</option>
              <option value="184">University of Scouting (01/20/24)</option>
              <option value="548">USS Lexington (Overnight) (01/16/27)</option>
              <option value="171">Veteran's Day Flag Ceremony (11/09/23)</option>
              <option value="469">Veterans Day Flag Ceremony at Baldwin Elementary (11/11/25)</option>
              <option value="472">Veterans Day Flag Ceremony at Clayton Elementary (11/11/25)</option>
              <option value="245">VIRTUAL - Committee &amp; Leader Meeting (01/12/25)</option>
              <option value="246">VIRTUAL - Committee &amp; Leader Meeting (02/02/25)</option>
              <option value="327">Visit with Girls Troop 4443 (11/17/24)</option>
              <option value="66">Webelos 1/2-Day Adventure (01/13/24)</option>
              <option value="89">Webelos Adventure: First Responder - Troop 448 (09/25/23)</option>
              <option value="580">Webelos and AOL Swim Adventure (08/22/26)</option>
              <option value="87">Webelos Den 22 Meeting - First meeting (09/13/23)</option>
              <option value="155">Webelos Den 22 Meeting (01/24/24)</option>
              <option value="201">Webelos Den 22 Meeting (02/07/24)</option>
              <option value="157">Webelos Den 22 Meeting (02/28/24)</option>
              <option value="158">Webelos Den 22 Meeting (03/20/24)</option>
              <option value="159">Webelos Den 22 Meeting (04/24/24)</option>
              <option value="148">Webelos Den 22 Meeting (10/04/23)</option>
              <option value="151">Webelos Den 22 Meeting (10/18/23)</option>
              <option value="152">Webelos Den 22 Meeting (11/08/23)</option>
              <option value="153">Webelos Den 22 Meeting (11/29/23)</option>
              <option value="154">Webelos Den 22 Meeting (12/20/23)</option>
              <option value="203">Webelos den 22/23  hike 3 mi (04/10/24)</option>
              <option value="202">Webelos Den 22/23 Meeting (02/21/24)</option>
              <option value="95">Webelos Den 23 Meeting - First meeting (09/13/23)</option>
              <option value="191">Webelos Den 23 Meeting (01/24/24)</option>
              <option value="192">Webelos Den 23 Meeting (02/07/24)</option>
              <option value="193">Webelos Den 23 Meeting (02/28/24)</option>
              <option value="194">Webelos Den 23 Meeting (03/20/24)</option>
              <option value="195">Webelos Den 23 Meeting (04/24/24)</option>
              <option value="172">Webelos Den 23 Meeting (11/08/23)</option>
              <option value="173">Webelos Den 23 Meeting (11/29/23)</option>
              <option value="174">Webelos Den 23 Meeting (12/20/23)</option>
              <option value="576">Webelos Den Meeting (02/07/27)</option>
              <option value="577">Webelos Den Meeting (03/14/27)</option>
              <option value="571">Webelos Den Meeting (09/20/26)</option>
              <option value="572">Webelos Den Meeting (10/18/26)</option>
              <option value="573">Webelos Den Meeting (11/08/26)</option>
              <option value="574">Webelos Den Meeting (12/13/26)</option>
              <option value="494">Webelos hike (03/22/26)</option>
              <option value="505">Webelos hike (05/02/26)</option>
              <option value="543">Webelos Wilderness Weekend (03/05/27)</option>
              <option value="61">Webelos Woods (10/21/23)</option>
              <option value="403">Webolos Den 8 Meeting (09/07/25)</option>
              <option value="480">Webolos Den Meeting (12/14/25)</option>
              <option value="485">Weigh-in day for Pinewood Derby (02/04/26)</option>
              <option value="486">Weigh-in day for Pinewood Derby (02/05/26)</option>
              <option value="581">Welcome Back, Pack Picnic (08/29/26)</option>
              <option value="547">Winter Overnight (Lone Star Flight Museum) (01/23/27)</option>
              <option value="369">Winter Overnight at San Antonio Zoo (01/31/26)</option>
              <option value="96">Winter Overnight: NASA Space Center Houston (01/27/24)</option>
              <option value="463">Wolfs Den Meeting #10 Fishing (10/19/25)</option>
              <option value="295">Wolves Den 2 Meeting (01/19/25)</option>
              <option value="311">Wolves Den 2 Meeting (02/16/25)</option>
              <option value="296">Wolves Den 2 Meeting (03/02/25)</option>
              <option value="297">Wolves Den 2 Meeting (03/30/25)</option>
              <option value="298">Wolves Den 2 Meeting (04/27/25)</option>
              <option value="294">Wolves Den 2 Meeting (11/17/24)</option>
              <option value="309">Wolves Den 2 Meeting (12/15/24)</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Credit Event
            </label>
          </td>
          <td>
            <select name="OP544122" tabindex="450" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544122" name="QUERY544122" class="form-control" onblur="TestRegExp(this,'','')" tabindex="460" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="468">(AT FALL CAMPOUT) Lions: Backyard Bass Fishing &amp; Angler Ed with Tx Wildlife (11/08/25)</option>
              <option value="467">(AT FALL CAMPOUT) Tigers: Skins &amp; Skulls program with Texas Wildlife (11/08/25)</option>
              <option value="466">(AT FALL CAMPOUT)Lions:  Skins &amp; Skulls program with Texas Wildlife (11/08/25)</option>
              <option value="284">(BOYS AOL) Troop 448 - Astronomy Overnight Campout (10/19/24)</option>
              <option value="266">(BOYS AOL) Troop 505 - Invitational Capture the Flag Campout (10/18/24)</option>
              <option value="285">(BOYS AOL) Troop 555 - Grelle Campout (10/19/24)</option>
              <option value="287">(BOYS) - Troop 61 Open House (10/27/24)</option>
              <option value="288">(GIRLS AOL) - Troop 4443 Krause Springs Campout (10/11/24)</option>
              <option value="286">(GIRLS) - Troop 19 Halloween Costume Party (10/27/24)</option>
              <option value="342">Advancement Cut Off for Graduation (05/11/25)</option>
              <option value="583">AOL Crossover Ceremony (02/27/27)</option>
              <option value="373">AOL Crossover Ceremony (03/07/26)</option>
              <option value="263">AOL Den 22 Community Service- Tree Planting (12/14/24)</option>
              <option value="260">AOL Den 22 Meeting - BOBCAT (09/13/24)</option>
              <option value="264">AOL Den 22 Meeting - First Aid (01/17/25)</option>
              <option value="262">AOL Den 22 Meeting - OUTDOOR ADVENTURER (10/11/24)</option>
              <option value="265">AOL Den 22 Meeting - PERSONAL FITNESS (11/22/24)</option>
              <option value="90">AOL Scouting Adventure - Troop 505 Open House (09/16/23)</option>
              <option value="1">April Pack Meeting (04/11/23)</option>
              <option value="64">Aquanaut Adventure (08/19/23)</option>
              <option value="258">Aquanauts (08/24/24)</option>
              <option value="180">Archery Rangemaster Training (01/06/24)</option>
              <option value="584">Arrows &amp; BB's Adventure Day (03/06/27)</option>
              <option value="568">Arrows Swim Test (07/10/26)</option>
              <option value="569">Arrows Swim Test (07/26/26)</option>
              <option value="566">Arrows, BBs &amp; Campfires (09/25/26)</option>
              <option value="210">Austin Fire Station 27 - Den 4 Lions (03/24/24)</option>
              <option value="237">Baldwin Back to School Night K-2nd (08/29/24)</option>
              <option value="343">Baldwin Campus Beautification Day (03/08/25)</option>
              <option value="458">Baldwin Campus Cleanup Service Project (10/26/25)</option>
              <option value="223">Baldwin Ceremony of Colors (05/23/24)</option>
              <option value="163">Baldwin Cleanup (11/05/23)</option>
              <option value="33">Baldwin End of Year 5th Grade Ceremony - Flag Detail (05/25/23)</option>
              <option value="392">Baldwin Meet the Teacher Night (08/15/25)</option>
              <option value="236">Baldwin Meet the Teacher Night (08/16/24)</option>
              <option value="324">Baldwin Veteran's Day Celebration - Flag Ceremony (11/11/24)</option>
              <option value="274">BALOO Adult Leader Training (10/11/24)</option>
              <option value="478">BALOO Training (01/09/26)</option>
              <option value="179">BB Gun Rangemaster Training (01/06/24)</option>
              <option value="199">BEAR DENS - Fire Station Visit by Den 3 (02/18/24)</option>
              <option value="400">Bears Den Meeting (03/29/26)</option>
              <option value="401">Bears Den Meeting (04/26/26)</option>
              <option value="482">Block Cutting for Pinewood Derby (01/17/26)</option>
              <option value="483">Block Cutting for Pinewood Derby (01/18/26)</option>
              <option value="484">Block Cutting for Pinewood Derby (01/19/26)</option>
              <option value="488">Block Cutting for Pinewood Derby (01/22/26)</option>
              <option value="35">Bowling with the Pack (07/15/23)</option>
              <option value="208">BSA Distinguished Citizen Award (03/28/24)</option>
              <option value="162">Building a Better World (10/08/23)</option>
              <option value="372">CANCELLED - Cubmaster Campout (03/06/26)</option>
              <option value="140">CANCELLED - Den 1 Meeting (11/12/23)</option>
              <option value="25">CANCELLED: Recruitment Table @ Clayton Carnival (04/28/23)</option>
              <option value="507">Ceremony of Colors at Baldwin Elementary Graduation (05/28/26)</option>
              <option value="346">Ceremony of Colors at Baldwin Elementary Graduation (05/29/25)</option>
              <option value="506">Cidercade Hangout (06/20/26)</option>
              <option value="24">Circle C 4th of July Parade (07/01/23)</option>
              <option value="511">Circle C 4th of July Parade (07/04/26)</option>
              <option value="498">Clayton Carnival Recruitment Booth (04/11/26)</option>
              <option value="169">Clayton Elementary Veterans Day Celebration - Flag Ceremony (11/10/23)</option>
              <option value="390">Clayton Meet the Teacher Night (08/14/25)</option>
              <option value="235">Clayton Meet the Teacher Night (08/15/24)</option>
              <option value="323">Clayton Veterans Day Assembly - Flag Ceremony (11/08/24)</option>
              <option value="341">Clayton's Spring Carnival Recruitment Booth (04/05/25)</option>
              <option value="340">Clean-up at Clayton and Community Center (04/06/25)</option>
              <option value="247">Committee &amp; Leader Meeting (03/09/25)</option>
              <option value="248">Committee &amp; Leader Meeting (04/06/25)</option>
              <option value="249">Committee &amp; Leader Meeting (05/04/25)</option>
              <option value="242">Committee &amp; Leader Meeting (10/06/24)</option>
              <option value="243">Committee &amp; Leader Meeting (11/10/24)</option>
              <option value="244">Committee &amp; Leader Meeting (12/01/24)</option>
              <option value="114">Committee / Den Leader Meeting (01/07/24)</option>
              <option value="115">Committee / Den Leader Meeting (02/04/24)</option>
              <option value="116">Committee / Den Leader Meeting (03/03/24)</option>
              <option value="117">Committee / Den Leader Meeting (04/07/24)</option>
              <option value="118">Committee / Den Leader Meeting (05/05/24)</option>
              <option value="58">Committee / Den Leader Meeting (09/10/23)</option>
              <option value="59">Committee / Den Leader Meeting (10/01/23)</option>
              <option value="69">Committee / Den Leader Meeting (11/05/23)</option>
              <option value="70">Committee / Den Leader Meeting (12/03/23)</option>
              <option value="21">Committee / Leader Meeting (05/07/23)</option>
              <option value="120">Crossover (02/24/24)</option>
              <option value="253">Crossover Campout (NOW CEREMONY ONLY) (02/22/25)</option>
              <option value="337">Crossover Ceremony (02/22/25)</option>
              <option value="552">Cub Kite and Rocket Festival (Council Event) (09/26/26)</option>
              <option value="553">Cub Winter Festival (Council Event) (01/16/27)</option>
              <option value="339">Cubmaster Campout (03/01/25)</option>
              <option value="62">Cubmaster Campout (12/08/23)</option>
              <option value="352">Cubmobile Derby (08/16/25)</option>
              <option value="222">Cubmobile Derby (08/18/24)</option>
              <option value="437">Den 1 Meeting (01/10/26)</option>
              <option value="142">Den 1 Meeting (01/14/24)</option>
              <option value="438">Den 1 Meeting (02/21/26)</option>
              <option value="144">Den 1 Meeting (03/17/24)</option>
              <option value="280">Den 1 Meeting (03/25/25)</option>
              <option value="145">Den 1 Meeting (04/14/24)</option>
              <option value="18">Den 1 Meeting (04/18/23)</option>
              <option value="281">Den 1 Meeting (04/22/25)</option>
              <option value="404">Den 1 Meeting (09/14/25)</option>
              <option value="84">Den 1 Meeting (09/17/23)</option>
              <option value="269">Den 1 Meeting (09/17/24)</option>
              <option value="434">Den 1 Meeting (10/05/25)</option>
              <option value="139">Den 1 Meeting (10/15/23)</option>
              <option value="275">Den 1 Meeting (10/22/24)</option>
              <option value="435">Den 1 Meeting (11/01/25)</option>
              <option value="276">Den 1 Meeting (11/19/24)</option>
              <option value="473">Den 1 Meeting (11/30/25)</option>
              <option value="141">Den 1 Meeting (12/17/23)</option>
              <option value="277">Den 1 Meeting (12/17/24)</option>
              <option value="487">Den 10 Meeting (02/15/26)</option>
              <option value="492">Den 10 Meeting (03/08/26)</option>
              <option value="495">Den 10 Meeting (03/29/26)</option>
              <option value="497">Den 10 Meeting (04/26/26)</option>
              <option value="393">Den 10 Meeting (09/14/25)</option>
              <option value="464">Den 10 Meeting (11/02/25)</option>
              <option value="476">Den 10 Meeting (12/14/25)</option>
              <option value="453">Den 12 (Bears) Meeting (01/18/26)</option>
              <option value="454">Den 12 (Bears) Meeting (02/22/26)</option>
              <option value="451">Den 12 (Bears) Meeting (11/16/25)</option>
              <option value="452">Den 12 (Bears) Meeting (12/14/25)</option>
              <option value="450">Den 12 Bears Meeting (10/12/25)</option>
              <option value="27">Den 19 Make-up Session (04/16/23)</option>
              <option value="92">Den 19 Meeting - Building a Better World (10/08/23)</option>
              <option value="189">Den 19 Meeting (01/21/24)</option>
              <option value="91">Den 19 Meeting (09/24/23)</option>
              <option value="93">Den 19 Meeting (10/22/23)</option>
              <option value="94">Den 19 Meeting (11/05/23)</option>
              <option value="136">Den 2 - make up day (03/23/24)</option>
              <option value="398">Den 2 (Bears) Meeting (01/11/26)</option>
              <option value="399">Den 2 (Bears) Meeting (02/22/26)</option>
              <option value="397">Den 2 (Bears) Meeting (12/14/25)</option>
              <option value="131">Den 2 activity (e.g. hike) (11/11/23)</option>
              <option value="395">Den 2 Bears Meeting (10/12/25)</option>
              <option value="133">Den 2 meeting (01/10/24)</option>
              <option value="134">Den 2 meeting (02/07/24)</option>
              <option value="135">Den 2 meeting (03/06/24)</option>
              <option value="137">Den 2 meeting (04/03/24)</option>
              <option value="138">Den 2 meeting (05/01/24)</option>
              <option value="394">Den 2 Meeting (09/21/25)</option>
              <option value="129">Den 2 meeting (10/04/23)</option>
              <option value="293">Den 2 Meeting (10/20/24)</option>
              <option value="130">Den 2 meeting (11/01/23)</option>
              <option value="132">Den 2 meeting (holiday dinner at my house) (12/06/23)</option>
              <option value="79">Den 21 Meeting (01/11/24)</option>
              <option value="80">Den 21 Meeting (01/25/24)</option>
              <option value="29">Den 21 Meeting (04/20/23)</option>
              <option value="31">Den 21 Meeting (05/06/23)</option>
              <option value="43">Den 21 Meeting (06/15/23)</option>
              <option value="46">Den 21 Meeting (07/27/23)</option>
              <option value="47">Den 21 Meeting (08/17/23)</option>
              <option value="72">Den 21 Meeting (09/14/23)</option>
              <option value="73">Den 21 Meeting (09/28/23)</option>
              <option value="74">Den 21 Meeting (10/12/23)</option>
              <option value="75">Den 21 Meeting (10/26/23)</option>
              <option value="76">Den 21 Meeting (11/09/23)</option>
              <option value="77">Den 21 Meeting (11/30/23)</option>
              <option value="78">Den 21 Meeting (12/14/23)</option>
              <option value="283">Den 22 AOL campout Pedernales Falls (11/08/24)</option>
              <option value="408">Den 3 - December Den Meeting (12/14/25)</option>
              <option value="407">Den 3 - November Den Meeting - Group Bike Ride (11/16/25)</option>
              <option value="406">Den 3 - October Den Meeting (Time changed to 1:30PM) (10/26/25)</option>
              <option value="182">Den 3  Optional Makeup Meeting (12/17/23)</option>
              <option value="405">Den 3 - September Den Meeting (09/14/25)</option>
              <option value="207">Den 3 Cleanup Project*** note the new time (04/07/24)</option>
              <option value="28">Den 3 Make-up Session (04/16/23)</option>
              <option value="330">Den 3 Meeting (01/05/25)</option>
              <option value="183">Den 3 meeting (01/21/24)</option>
              <option value="331">Den 3 Meeting (02/16/25)</option>
              <option value="198">Den 3 Meeting (02/25/24)</option>
              <option value="205">Den 3 Meeting (03/24/24)</option>
              <option value="332">Den 3 Meeting (03/30/25)</option>
              <option value="333">Den 3 Meeting (04/27/25)</option>
              <option value="206">Den 3 Meeting (04/28/24)</option>
              <option value="272">Den 3 Meeting (09/22/24)</option>
              <option value="128">Den 3 Meeting (10/22/23)</option>
              <option value="164">Den 3 Meeting (10/22/23)</option>
              <option value="273">Den 3 Meeting (10/27/24)</option>
              <option value="170">Den 3 Meeting (11/19/23)</option>
              <option value="329">Den 3 Meeting (12/15/24)</option>
              <option value="325">Den 3 Mtg (11/17/24)</option>
              <option value="178">Den 4 Lions  - Den Meeting (12/20/23)</option>
              <option value="150">Den 4 Lions Meeting (10/18/23)</option>
              <option value="270">Den 4 Meeting (09/24/24)</option>
              <option value="101">Den 5 Meeting (01/17/24)</option>
              <option value="102">Den 5 Meeting (02/21/24)</option>
              <option value="103">Den 5 Meeting (03/20/24)</option>
              <option value="104">Den 5 Meeting (04/17/24)</option>
              <option value="97">Den 5 Meeting (09/20/23)</option>
              <option value="98">Den 5 Meeting (10/18/23)</option>
              <option value="322">Den 5 Meeting (10/27/24)</option>
              <option value="99">Den 5 Meeting (11/15/23)</option>
              <option value="100">Den 5 Meeting (12/20/23)</option>
              <option value="291">Den 5 Webelos (10/23/24)</option>
              <option value="109">Den 6 Meeting (01/24/24)</option>
              <option value="111">Den 6 Meeting (03/20/24)</option>
              <option value="112">Den 6 Meeting (04/17/24)</option>
              <option value="113">Den 6 Meeting (05/01/24)</option>
              <option value="105">Den 6 Meeting (09/20/23)</option>
              <option value="106">Den 6 Meeting (10/18/23)</option>
              <option value="107">Den 6 Meeting (11/08/23)</option>
              <option value="108">Den 6 Meeting (12/06/23)</option>
              <option value="211">Den 7 Meeting - Running with the Pack (03/24/24)</option>
              <option value="188">Den 7 Meeting (with Den 8!) (rescheduled) (02/11/24)</option>
              <option value="177">Den 7 Wolves  - Den Meeting (12/18/23)</option>
              <option value="149">Den 7 Wolves Meeting (10/16/23)</option>
              <option value="187">Den 8 meeting (01/21/24)</option>
              <option value="197">Den 8 meeting (02/11/24)</option>
              <option value="204">Den 8 meeting (03/03/24)</option>
              <option value="338">Den 8 meeting (03/09/25)</option>
              <option value="212">Den 8 meeting (04/14/24)</option>
              <option value="259">Den 8 meeting (09/15/24)</option>
              <option value="292">Den 8 meeting (10/20/24)</option>
              <option value="147">Den 8 meeting (10/22/23)</option>
              <option value="326">Den 8 meeting (11/17/24)</option>
              <option value="175">Den 8 meeting (11/26/23)</option>
              <option value="336">Den 8 Pinewood Derby workshop (01/18/25)</option>
              <option value="449">Den 8 Webelos meeting (10/12/25)</option>
              <option value="517">Den Leader &amp; Committee Meeting (01/10/27)</option>
              <option value="367">Den Leader &amp; Committee Meeting (01/11/26)</option>
              <option value="518">Den Leader &amp; Committee Meeting (02/07/27)</option>
              <option value="519">Den Leader &amp; Committee Meeting (03/07/27)</option>
              <option value="374">Den Leader &amp; Committee Meeting (03/08/26)</option>
              <option value="520">Den Leader &amp; Committee Meeting (04/04/27)</option>
              <option value="376">Den Leader &amp; Committee Meeting (04/12/26)</option>
              <option value="521">Den Leader &amp; Committee Meeting (05/02/27)</option>
              <option value="379">Den Leader &amp; Committee Meeting (05/03/26)</option>
              <option value="512">Den Leader &amp; Committee Meeting (08/09/26)</option>
              <option value="356">Den Leader &amp; Committee Meeting (08/10/25)</option>
              <option value="355">Den Leader &amp; Committee Meeting (09/07/25)</option>
              <option value="513">Den Leader &amp; Committee Meeting (09/13/26)</option>
              <option value="514">Den Leader &amp; Committee Meeting (10/04/26)</option>
              <option value="360">Den Leader &amp; Committee Meeting (10/05/25)</option>
              <option value="515">Den Leader &amp; Committee Meeting (11/01/26)</option>
              <option value="362">Den Leader &amp; Committee Meeting (11/02/25)</option>
              <option value="516">Den Leader &amp; Committee Meeting (12/06/26)</option>
              <option value="365">Den Leader &amp; Committee Meeting (12/07/25)</option>
              <option value="57">Den Leader Training (09/24/23)</option>
              <option value="300">Den Leader Training (10/23/24)</option>
              <option value="344">Den Meeting (03/30/25)</option>
              <option value="578">Den Meeting (04/11/27)</option>
              <option value="308">Den Meeting (04/27/24)</option>
              <option value="83">Den Meeting (Den 3) (09/24/23)</option>
              <option value="416">Den5 Den Meeting (01/21/26)</option>
              <option value="412">Den5 Den Meeting (09/17/25)</option>
              <option value="413">Den5 Den Meeting (10/22/25)</option>
              <option value="414">Den5 Den Meeting (11/19/25)</option>
              <option value="559">District Roundtable (01/07/27)</option>
              <option value="560">District Roundtable (02/04/27)</option>
              <option value="561">District Roundtable (03/04/27)</option>
              <option value="562">District Roundtable (04/01/27)</option>
              <option value="563">District Roundtable (05/06/27)</option>
              <option value="564">District Roundtable (06/04/26)</option>
              <option value="565">District Roundtable (07/02/26)</option>
              <option value="554">District Roundtable (08/06/26)</option>
              <option value="555">District Roundtable (09/03/26)</option>
              <option value="556">District Roundtable (10/01/26)</option>
              <option value="557">District Roundtable (11/05/26)</option>
              <option value="558">District Roundtable (12/03/26)</option>
              <option value="209">Eclipse Extravaganza (04/06/24)</option>
              <option value="200">Engineering (02/15/24)</option>
              <option value="234">Fall Campout - Goliad State Park (11/01/24)</option>
              <option value="60">Fall Campout (10/27/23)</option>
              <option value="364">Fall Campout (11/07/25)</option>
              <option value="549">Fall Campout (11/13/26)</option>
              <option value="353">Fall Recruitment - Baldwin (09/02/25)</option>
              <option value="67">Fall Recruitment - Baldwin BTS Night (K-2nd) (08/24/23)</option>
              <option value="37">Fall Recruitment - Baldwin Elementary (08/29/23)</option>
              <option value="224">Fall Recruitment - Circle C (08/24/24)</option>
              <option value="38">Fall Recruitment - Circle C (08/31/23)</option>
              <option value="225">Fall Recruitment - Circle C (09/01/24)</option>
              <option value="354">Fall Recruitment - Clayton (09/04/25)</option>
              <option value="53">Fall Recruitment - Clayton Meet the Teacher Night (08/10/23)</option>
              <option value="250">Family Pack Orientation (09/15/24)</option>
              <option value="56">FIRST Lion / Tiger Den Meeting (09/23/23)</option>
              <option value="50">Flag Retirement Ceremony (07/04/23)</option>
              <option value="541">Graduation (05/15/27)</option>
              <option value="181">Holiday Service Project (12/16/23)</option>
              <option value="219">Independence Day Parade (07/04/24)</option>
              <option value="350">Independence Day Parade (CANCELLED) (07/04/25)</option>
              <option value="351">Innerspace Caverns (07/19/25)</option>
              <option value="550">Into the Woods Cub Scout Adventure Weekend (Council Event) (11/06/26)</option>
              <option value="81">Jamboree On The Air (10/20/23)</option>
              <option value="579">Join Scouting Night (08/25/26)</option>
              <option value="426">Lion Den #6 &amp; # 7 Meeting (02/15/26)</option>
              <option value="420">Lion Den #6 &amp; #7 Meeting (10/05/25)</option>
              <option value="428">Lion Den #6 &amp; Den #7 Meeting (05/03/26)</option>
              <option value="427">Lion Den #6 Meeting (03/29/26)</option>
              <option value="459">Lion's Den #6 &amp; #7 Art Supply Pickup (10/12/25)</option>
              <option value="479">Lion's Den #6 &amp; #7 Card Delivery/Resident Holiday Party (12/23/25)</option>
              <option value="423">Lions Den #6 &amp; #7 Holiday Card Making Workshop (12/14/25)</option>
              <option value="461">Lions Den #6 &amp; #7 Service Project ART DUE 10/20-10/22 (10/20/25)</option>
              <option value="422">Lions Den #6, #7, Fire Station Tour/Den Meeting (11/02/25)</option>
              <option value="493">Lions Den #7 Meeting (03/15/26)</option>
              <option value="317">Lions Den 9 Meeting (01/19/25)</option>
              <option value="318">Lions Den 9 Meeting (02/16/24)</option>
              <option value="321">Lions Den 9 Meeting (02/16/25)</option>
              <option value="319">Lions Den 9 Meeting (03/30/25)</option>
              <option value="320">Lions Den 9 Meeting (04/27/25)</option>
              <option value="314">Lions Den 9 Meeting (10/27/24)</option>
              <option value="315">Lions Den 9 Meeting (11/17/24)</option>
              <option value="316">Lions Den 9 Meeting (12/15/24)</option>
              <option value="462">Lion's Service Project Art on Display @ Austin Studio Tour (11/15/25)</option>
              <option value="32">Make-up Den Meeting and Bobcat Clinic (04/29/23)</option>
              <option value="481">Meet an elected official (01/06/26)</option>
              <option value="345">Meeting the Sheriff (05/06/25)</option>
              <option value="503">Messengers Of Peace Service Project (04/18/26)</option>
              <option value="489">Mighty Ducks - Bonus Cycling Event (02/21/26)</option>
              <option value="490">Mighty Ducks - Make-up Requirements Meeting (02/08/26)</option>
              <option value="567">Natural Bridge Caverns (07/18/26)</option>
              <option value="63">NEW DATE: Committee / Den Leader Meeting (08/20/23)</option>
              <option value="36">NEW DATE: Cubmobile Derby (08/26/23)</option>
              <option value="55">New Scout Ceremony (09/16/23)</option>
              <option value="358">New Scout Family Meeting (09/14/25)</option>
              <option value="125">NEW TIME - Rocket Derby (05/04/24)</option>
              <option value="504">Optional - Service Event (04/25/26)</option>
              <option value="289">Overnight at the USS Lexington (01/11/25)</option>
              <option value="20">Pack 12 Graduation (05/09/23)</option>
              <option value="383">Pack 12 Graduation (05/16/26)</option>
              <option value="257">Pack 12 Graduation (05/17/25)</option>
              <option value="124">Pack 12 Graduation (05/19/24)</option>
              <option value="213">Pack 12 Recruitment @ Clayto's Playground (04/27/24)</option>
              <option value="121">Pack Meeting (01/09/24)</option>
              <option value="526">Pack Meeting (01/12/27)</option>
              <option value="368">Pack Meeting (01/13/26)</option>
              <option value="230">Pack Meeting (01/14/25)</option>
              <option value="527">Pack Meeting (02/09/27)</option>
              <option value="122">Pack Meeting (03/05/24)</option>
              <option value="528">Pack Meeting (03/09/27)</option>
              <option value="231">Pack Meeting (03/11/25)</option>
              <option value="375">Pack Meeting (03/24/26)</option>
              <option value="529">Pack Meeting (04/06/27)</option>
              <option value="232">Pack Meeting (04/08/25)</option>
              <option value="123">Pack Meeting (04/09/24)</option>
              <option value="377">Pack Meeting (04/14/26)</option>
              <option value="382">Pack Meeting (05/12/26)</option>
              <option value="233">Pack Meeting (05/13/25)</option>
              <option value="217">Pack Meeting (05/14/24)</option>
              <option value="40">Pack Meeting (10/10/23)</option>
              <option value="523">Pack Meeting (10/13/26)</option>
              <option value="361">Pack Meeting (10/14/25)</option>
              <option value="227">Pack Meeting (10/15/24)</option>
              <option value="524">Pack Meeting (11/10/26)</option>
              <option value="363">Pack Meeting (11/11/25)</option>
              <option value="228">Pack Meeting (11/12/24)</option>
              <option value="41">Pack Meeting (11/14/23)</option>
              <option value="525">Pack Meeting (12/08/26)</option>
              <option value="366">Pack Meeting (12/09/25)</option>
              <option value="229">Pack Meeting (12/10/24)</option>
              <option value="42">Pack Meeting (12/12/23)</option>
              <option value="522">Pack Meeting (Open House &amp; Parent Orientation) (09/08/26)</option>
              <option value="530">Pack Meeting (Rocket Building!) (05/04/27)</option>
              <option value="357">Pack Meeting / Open House (09/09/25)</option>
              <option value="226">Pack Meeting / Open House (09/10/24)</option>
              <option value="39">Pack Meeting / Open House (09/12/23)</option>
              <option value="535">Pack Meeting Setup (AOLs) (01/12/27)</option>
              <option value="531">Pack Meeting Setup (AOLs) (09/08/26)</option>
              <option value="537">Pack Meeting Setup (Bears) (03/09/27)</option>
              <option value="533">Pack Meeting Setup (Bears) (11/10/26)</option>
              <option value="536">Pack Meeting Setup (Webelos) (02/09/27)</option>
              <option value="539">Pack Meeting Setup (Webelos) (05/04/27)</option>
              <option value="532">Pack Meeting Setup (Webelos) (10/13/26)</option>
              <option value="538">Pack Meeting Setup (Wolves) (04/06/27)</option>
              <option value="534">Pack Meeting Setup (Wolves) (12/08/26)</option>
              <option value="221">Parent &amp; Volunteer Meeting (08/11/24)</option>
              <option value="241">Parent &amp; Volunteer Meeting (09/08/24)</option>
              <option value="119">Pinewood Derby (02/03/24)</option>
              <option value="371">Pinewood Derby (02/07/26)</option>
              <option value="252">Pinewood Derby (02/08/25)</option>
              <option value="544">Pinewood Derby (02/20/27)</option>
              <option value="545">Pinewood Derby Inspections (Option 1) (02/16/27)</option>
              <option value="546">Pinewood Derby Inspections (Option 2) (02/18/27)</option>
              <option value="334">Pinewood Derby Weigh-In (02/04/25)</option>
              <option value="335">Pinewood Derby Weigh-In (02/05/25)</option>
              <option value="387">Popcorn Unit Booth Selections (07/23/25)</option>
              <option value="388">Popcorn Unit Booth Selections (07/24/25)</option>
              <option value="386">Popcorn Unit Booth Selections Begin (07/22/25)</option>
              <option value="190">PWD Block Cutting (01/19/24)</option>
              <option value="176">PWD Block-cutting (01/17/24)</option>
              <option value="185">PWD Weigh-in (01/30/24)</option>
              <option value="186">PWD Weigh-in (01/31/24)</option>
              <option value="500">Raingutter Regatta (05/30/26)</option>
              <option value="349">Raingutter Regatta (06/07/25)</option>
              <option value="218">Raingutter Regatta (06/08/24)</option>
              <option value="23">Raingutter Regatta (06/17/23)</option>
              <option value="215">Rank Requirement Deadline for Graduation (05/01/24)</option>
              <option value="359">Registration Dues Deadline (09/30/25)</option>
              <option value="26">Requirement Deadline for Graduation (05/02/23)</option>
              <option value="381">Requirement Deadline for Graduation (05/10/26)</option>
              <option value="214">RESCHEDULED - Cleanup @ Clayton Elementary (05/11/24)</option>
              <option value="378">RESCHEDULED TO FALL -- Spring Campout (04/17/26)</option>
              <option value="216">Rocket Derby - Inspections (05/03/24)</option>
              <option value="540">Rocket Derby (04/17/27)</option>
              <option value="380">Rocket Derby (05/09/26)</option>
              <option value="256">Rocket Derby (05/10/25)</option>
              <option value="19">Rocket Derby (05/21/23)</option>
              <option value="508">Rocket Derby Inspections and Build (Session 1) (05/06/26)</option>
              <option value="509">Rocket Derby Inspections and Build (Session 2) (05/07/26)</option>
              <option value="347">Rocket Derby Inspections, Day 1 (05/07/25)</option>
              <option value="348">Rocket Derby Inspections, Day 2 (05/08/25)</option>
              <option value="30">Rocket Derby Workshop (04/15/23)</option>
              <option value="85">Round Table (09/07/23)</option>
              <option value="86">Round Table (10/05/23)</option>
              <option value="282">Roundtable (10/03/24)</option>
              <option value="582">Scouting 101 &amp; Cub Mobile (Troop Hosted Event) (10/03/26)</option>
              <option value="384">Scouting 101 (formerly Webelos Woods) (10/25/25)</option>
              <option value="255">Sea World Winter Overnight (01/25/25)</option>
              <option value="299">Service Project - Baldwin Campus Cleanup &amp; Planter Construction (10/27/24)</option>
              <option value="502">Spring Campout - Alternative Event - Please RSVP (04/18/26)</option>
              <option value="542">Spring Campout (04/02/27)</option>
              <option value="254">Spring Campout (04/11/25)</option>
              <option value="126">Spring Campout (04/19/24)</option>
              <option value="17">Spring Campout (04/21/23)</option>
              <option value="585">Spring Picnic (05/01/27)</option>
              <option value="34">Spring Recruitment (05/24/23)</option>
              <option value="22">STILL ON: Clayton Cleanup (04/29/23)</option>
              <option value="220">Summer Activity - Rock Climbing (07/20/24)</option>
              <option value="446">Thunderbird District Roundtable (03/05/26)</option>
              <option value="447">Thunderbird District Roundtable (04/02/26)</option>
              <option value="448">Thunderbird District Roundtable (05/07/26)</option>
              <option value="441">Thunderbird District Roundtable (10/02/25)</option>
              <option value="442">Thunderbird District Roundtable (11/06/25)</option>
              <option value="443">Thunderbird District Roundtable (12/04/25)</option>
              <option value="267">Thunderbird District Scouting 101 | Webelos Woods (10/12/24)</option>
              <option value="429">Tigers Den #9 &amp; #11 @ Radha Rani Hindu Temple (12/13/25)</option>
              <option value="430">Tigers Den #9 &amp; #11 Meeting (01/11/26)</option>
              <option value="431">Tigers Den #9 &amp; #11 Meeting (02/22/26)</option>
              <option value="432">Tigers Den #9 &amp; #11 Meeting (03/29/26)</option>
              <option value="433">Tigers Den #9 &amp; #11 Meeting (04/26/26)</option>
              <option value="460">Tigers Den #9 &amp; #11 Meeting/Fire Station Tour (11/02/25)</option>
              <option value="421">Tigers Den #9 Meeting (10/05/25)</option>
              <option value="307">Tigers Den 10 Meeting - Rolling Tigers (03/30/25)</option>
              <option value="306">Tigers Den 10 Meeting - Tiger Tag (03/02/25)</option>
              <option value="304">Tigers Den 10 Meeting (01/19/25)</option>
              <option value="313">Tigers Den 10 Meeting (04/27/25)</option>
              <option value="301">Tigers Den 10 Meeting (10/27/24)</option>
              <option value="312">Tigers Den 10 Meeting (11/17/24)</option>
              <option value="303">Tigers Den 10 Meeting (12/15/24)</option>
              <option value="465">Touch An Ambulance Event/First Aide with Ally Medical (11/16/25)</option>
              <option value="409">Troop 19 Campout - Pedernales Falls (12/06/25)</option>
              <option value="411">Troop 19 Halloween Party (10/26/25)</option>
              <option value="127">Troop 3337 Open House (10/01/23)</option>
              <option value="471">Troop 4443 - Edwards Aquifer Education Center (12/06/25)</option>
              <option value="470">Troop 4443 Halloween Party (11/02/25)</option>
              <option value="410">Troop 4443 Ice Cream Social (10/19/25)</option>
              <option value="477">Troop 448 Meeting with AOL Activities (12/08/25)</option>
              <option value="475">Troop 448 troop meeting (12/08/25)</option>
              <option value="165">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="166">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="167">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="168">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="268">Troop 505 Open House (09/28/24)</option>
              <option value="184">University of Scouting (01/20/24)</option>
              <option value="548">USS Lexington (Overnight) (01/16/27)</option>
              <option value="171">Veteran's Day Flag Ceremony (11/09/23)</option>
              <option value="469">Veterans Day Flag Ceremony at Baldwin Elementary (11/11/25)</option>
              <option value="472">Veterans Day Flag Ceremony at Clayton Elementary (11/11/25)</option>
              <option value="245">VIRTUAL - Committee &amp; Leader Meeting (01/12/25)</option>
              <option value="246">VIRTUAL - Committee &amp; Leader Meeting (02/02/25)</option>
              <option value="327">Visit with Girls Troop 4443 (11/17/24)</option>
              <option value="66">Webelos 1/2-Day Adventure (01/13/24)</option>
              <option value="89">Webelos Adventure: First Responder - Troop 448 (09/25/23)</option>
              <option value="580">Webelos and AOL Swim Adventure (08/22/26)</option>
              <option value="87">Webelos Den 22 Meeting - First meeting (09/13/23)</option>
              <option value="155">Webelos Den 22 Meeting (01/24/24)</option>
              <option value="201">Webelos Den 22 Meeting (02/07/24)</option>
              <option value="157">Webelos Den 22 Meeting (02/28/24)</option>
              <option value="158">Webelos Den 22 Meeting (03/20/24)</option>
              <option value="159">Webelos Den 22 Meeting (04/24/24)</option>
              <option value="148">Webelos Den 22 Meeting (10/04/23)</option>
              <option value="151">Webelos Den 22 Meeting (10/18/23)</option>
              <option value="152">Webelos Den 22 Meeting (11/08/23)</option>
              <option value="153">Webelos Den 22 Meeting (11/29/23)</option>
              <option value="154">Webelos Den 22 Meeting (12/20/23)</option>
              <option value="203">Webelos den 22/23  hike 3 mi (04/10/24)</option>
              <option value="202">Webelos Den 22/23 Meeting (02/21/24)</option>
              <option value="95">Webelos Den 23 Meeting - First meeting (09/13/23)</option>
              <option value="191">Webelos Den 23 Meeting (01/24/24)</option>
              <option value="192">Webelos Den 23 Meeting (02/07/24)</option>
              <option value="193">Webelos Den 23 Meeting (02/28/24)</option>
              <option value="194">Webelos Den 23 Meeting (03/20/24)</option>
              <option value="195">Webelos Den 23 Meeting (04/24/24)</option>
              <option value="172">Webelos Den 23 Meeting (11/08/23)</option>
              <option value="173">Webelos Den 23 Meeting (11/29/23)</option>
              <option value="174">Webelos Den 23 Meeting (12/20/23)</option>
              <option value="576">Webelos Den Meeting (02/07/27)</option>
              <option value="577">Webelos Den Meeting (03/14/27)</option>
              <option value="571">Webelos Den Meeting (09/20/26)</option>
              <option value="572">Webelos Den Meeting (10/18/26)</option>
              <option value="573">Webelos Den Meeting (11/08/26)</option>
              <option value="574">Webelos Den Meeting (12/13/26)</option>
              <option value="494">Webelos hike (03/22/26)</option>
              <option value="505">Webelos hike (05/02/26)</option>
              <option value="543">Webelos Wilderness Weekend (03/05/27)</option>
              <option value="61">Webelos Woods (10/21/23)</option>
              <option value="403">Webolos Den 8 Meeting (09/07/25)</option>
              <option value="480">Webolos Den Meeting (12/14/25)</option>
              <option value="485">Weigh-in day for Pinewood Derby (02/04/26)</option>
              <option value="486">Weigh-in day for Pinewood Derby (02/05/26)</option>
              <option value="581">Welcome Back, Pack Picnic (08/29/26)</option>
              <option value="547">Winter Overnight (Lone Star Flight Museum) (01/23/27)</option>
              <option value="369">Winter Overnight at San Antonio Zoo (01/31/26)</option>
              <option value="96">Winter Overnight: NASA Space Center Houston (01/27/24)</option>
              <option value="463">Wolfs Den Meeting #10 Fishing (10/19/25)</option>
              <option value="295">Wolves Den 2 Meeting (01/19/25)</option>
              <option value="311">Wolves Den 2 Meeting (02/16/25)</option>
              <option value="296">Wolves Den 2 Meeting (03/02/25)</option>
              <option value="297">Wolves Den 2 Meeting (03/30/25)</option>
              <option value="298">Wolves Den 2 Meeting (04/27/25)</option>
              <option value="294">Wolves Den 2 Meeting (11/17/24)</option>
              <option value="309">Wolves Den 2 Meeting (12/15/24)</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Intended To Pay For Event
            </label>
          </td>
          <td>
            <select name="OP544132" tabindex="470" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544132" name="QUERY544132" class="form-control" onblur="TestRegExp(this,'','')" tabindex="480" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="468">(AT FALL CAMPOUT) Lions: Backyard Bass Fishing &amp; Angler Ed with Tx Wildlife (11/08/25)</option>
              <option value="467">(AT FALL CAMPOUT) Tigers: Skins &amp; Skulls program with Texas Wildlife (11/08/25)</option>
              <option value="466">(AT FALL CAMPOUT)Lions:  Skins &amp; Skulls program with Texas Wildlife (11/08/25)</option>
              <option value="284">(BOYS AOL) Troop 448 - Astronomy Overnight Campout (10/19/24)</option>
              <option value="266">(BOYS AOL) Troop 505 - Invitational Capture the Flag Campout (10/18/24)</option>
              <option value="285">(BOYS AOL) Troop 555 - Grelle Campout (10/19/24)</option>
              <option value="287">(BOYS) - Troop 61 Open House (10/27/24)</option>
              <option value="288">(GIRLS AOL) - Troop 4443 Krause Springs Campout (10/11/24)</option>
              <option value="286">(GIRLS) - Troop 19 Halloween Costume Party (10/27/24)</option>
              <option value="342">Advancement Cut Off for Graduation (05/11/25)</option>
              <option value="583">AOL Crossover Ceremony (02/27/27)</option>
              <option value="373">AOL Crossover Ceremony (03/07/26)</option>
              <option value="263">AOL Den 22 Community Service- Tree Planting (12/14/24)</option>
              <option value="260">AOL Den 22 Meeting - BOBCAT (09/13/24)</option>
              <option value="264">AOL Den 22 Meeting - First Aid (01/17/25)</option>
              <option value="262">AOL Den 22 Meeting - OUTDOOR ADVENTURER (10/11/24)</option>
              <option value="265">AOL Den 22 Meeting - PERSONAL FITNESS (11/22/24)</option>
              <option value="90">AOL Scouting Adventure - Troop 505 Open House (09/16/23)</option>
              <option value="1">April Pack Meeting (04/11/23)</option>
              <option value="64">Aquanaut Adventure (08/19/23)</option>
              <option value="258">Aquanauts (08/24/24)</option>
              <option value="180">Archery Rangemaster Training (01/06/24)</option>
              <option value="584">Arrows &amp; BB's Adventure Day (03/06/27)</option>
              <option value="568">Arrows Swim Test (07/10/26)</option>
              <option value="569">Arrows Swim Test (07/26/26)</option>
              <option value="566">Arrows, BBs &amp; Campfires (09/25/26)</option>
              <option value="210">Austin Fire Station 27 - Den 4 Lions (03/24/24)</option>
              <option value="237">Baldwin Back to School Night K-2nd (08/29/24)</option>
              <option value="343">Baldwin Campus Beautification Day (03/08/25)</option>
              <option value="458">Baldwin Campus Cleanup Service Project (10/26/25)</option>
              <option value="223">Baldwin Ceremony of Colors (05/23/24)</option>
              <option value="163">Baldwin Cleanup (11/05/23)</option>
              <option value="33">Baldwin End of Year 5th Grade Ceremony - Flag Detail (05/25/23)</option>
              <option value="392">Baldwin Meet the Teacher Night (08/15/25)</option>
              <option value="236">Baldwin Meet the Teacher Night (08/16/24)</option>
              <option value="324">Baldwin Veteran's Day Celebration - Flag Ceremony (11/11/24)</option>
              <option value="274">BALOO Adult Leader Training (10/11/24)</option>
              <option value="478">BALOO Training (01/09/26)</option>
              <option value="179">BB Gun Rangemaster Training (01/06/24)</option>
              <option value="199">BEAR DENS - Fire Station Visit by Den 3 (02/18/24)</option>
              <option value="400">Bears Den Meeting (03/29/26)</option>
              <option value="401">Bears Den Meeting (04/26/26)</option>
              <option value="482">Block Cutting for Pinewood Derby (01/17/26)</option>
              <option value="483">Block Cutting for Pinewood Derby (01/18/26)</option>
              <option value="484">Block Cutting for Pinewood Derby (01/19/26)</option>
              <option value="488">Block Cutting for Pinewood Derby (01/22/26)</option>
              <option value="35">Bowling with the Pack (07/15/23)</option>
              <option value="208">BSA Distinguished Citizen Award (03/28/24)</option>
              <option value="162">Building a Better World (10/08/23)</option>
              <option value="372">CANCELLED - Cubmaster Campout (03/06/26)</option>
              <option value="140">CANCELLED - Den 1 Meeting (11/12/23)</option>
              <option value="25">CANCELLED: Recruitment Table @ Clayton Carnival (04/28/23)</option>
              <option value="507">Ceremony of Colors at Baldwin Elementary Graduation (05/28/26)</option>
              <option value="346">Ceremony of Colors at Baldwin Elementary Graduation (05/29/25)</option>
              <option value="506">Cidercade Hangout (06/20/26)</option>
              <option value="24">Circle C 4th of July Parade (07/01/23)</option>
              <option value="511">Circle C 4th of July Parade (07/04/26)</option>
              <option value="498">Clayton Carnival Recruitment Booth (04/11/26)</option>
              <option value="169">Clayton Elementary Veterans Day Celebration - Flag Ceremony (11/10/23)</option>
              <option value="390">Clayton Meet the Teacher Night (08/14/25)</option>
              <option value="235">Clayton Meet the Teacher Night (08/15/24)</option>
              <option value="323">Clayton Veterans Day Assembly - Flag Ceremony (11/08/24)</option>
              <option value="341">Clayton's Spring Carnival Recruitment Booth (04/05/25)</option>
              <option value="340">Clean-up at Clayton and Community Center (04/06/25)</option>
              <option value="247">Committee &amp; Leader Meeting (03/09/25)</option>
              <option value="248">Committee &amp; Leader Meeting (04/06/25)</option>
              <option value="249">Committee &amp; Leader Meeting (05/04/25)</option>
              <option value="242">Committee &amp; Leader Meeting (10/06/24)</option>
              <option value="243">Committee &amp; Leader Meeting (11/10/24)</option>
              <option value="244">Committee &amp; Leader Meeting (12/01/24)</option>
              <option value="114">Committee / Den Leader Meeting (01/07/24)</option>
              <option value="115">Committee / Den Leader Meeting (02/04/24)</option>
              <option value="116">Committee / Den Leader Meeting (03/03/24)</option>
              <option value="117">Committee / Den Leader Meeting (04/07/24)</option>
              <option value="118">Committee / Den Leader Meeting (05/05/24)</option>
              <option value="58">Committee / Den Leader Meeting (09/10/23)</option>
              <option value="59">Committee / Den Leader Meeting (10/01/23)</option>
              <option value="69">Committee / Den Leader Meeting (11/05/23)</option>
              <option value="70">Committee / Den Leader Meeting (12/03/23)</option>
              <option value="21">Committee / Leader Meeting (05/07/23)</option>
              <option value="120">Crossover (02/24/24)</option>
              <option value="253">Crossover Campout (NOW CEREMONY ONLY) (02/22/25)</option>
              <option value="337">Crossover Ceremony (02/22/25)</option>
              <option value="552">Cub Kite and Rocket Festival (Council Event) (09/26/26)</option>
              <option value="553">Cub Winter Festival (Council Event) (01/16/27)</option>
              <option value="339">Cubmaster Campout (03/01/25)</option>
              <option value="62">Cubmaster Campout (12/08/23)</option>
              <option value="352">Cubmobile Derby (08/16/25)</option>
              <option value="222">Cubmobile Derby (08/18/24)</option>
              <option value="437">Den 1 Meeting (01/10/26)</option>
              <option value="142">Den 1 Meeting (01/14/24)</option>
              <option value="438">Den 1 Meeting (02/21/26)</option>
              <option value="144">Den 1 Meeting (03/17/24)</option>
              <option value="280">Den 1 Meeting (03/25/25)</option>
              <option value="145">Den 1 Meeting (04/14/24)</option>
              <option value="18">Den 1 Meeting (04/18/23)</option>
              <option value="281">Den 1 Meeting (04/22/25)</option>
              <option value="404">Den 1 Meeting (09/14/25)</option>
              <option value="84">Den 1 Meeting (09/17/23)</option>
              <option value="269">Den 1 Meeting (09/17/24)</option>
              <option value="434">Den 1 Meeting (10/05/25)</option>
              <option value="139">Den 1 Meeting (10/15/23)</option>
              <option value="275">Den 1 Meeting (10/22/24)</option>
              <option value="435">Den 1 Meeting (11/01/25)</option>
              <option value="276">Den 1 Meeting (11/19/24)</option>
              <option value="473">Den 1 Meeting (11/30/25)</option>
              <option value="141">Den 1 Meeting (12/17/23)</option>
              <option value="277">Den 1 Meeting (12/17/24)</option>
              <option value="487">Den 10 Meeting (02/15/26)</option>
              <option value="492">Den 10 Meeting (03/08/26)</option>
              <option value="495">Den 10 Meeting (03/29/26)</option>
              <option value="497">Den 10 Meeting (04/26/26)</option>
              <option value="393">Den 10 Meeting (09/14/25)</option>
              <option value="464">Den 10 Meeting (11/02/25)</option>
              <option value="476">Den 10 Meeting (12/14/25)</option>
              <option value="453">Den 12 (Bears) Meeting (01/18/26)</option>
              <option value="454">Den 12 (Bears) Meeting (02/22/26)</option>
              <option value="451">Den 12 (Bears) Meeting (11/16/25)</option>
              <option value="452">Den 12 (Bears) Meeting (12/14/25)</option>
              <option value="450">Den 12 Bears Meeting (10/12/25)</option>
              <option value="27">Den 19 Make-up Session (04/16/23)</option>
              <option value="92">Den 19 Meeting - Building a Better World (10/08/23)</option>
              <option value="189">Den 19 Meeting (01/21/24)</option>
              <option value="91">Den 19 Meeting (09/24/23)</option>
              <option value="93">Den 19 Meeting (10/22/23)</option>
              <option value="94">Den 19 Meeting (11/05/23)</option>
              <option value="136">Den 2 - make up day (03/23/24)</option>
              <option value="398">Den 2 (Bears) Meeting (01/11/26)</option>
              <option value="399">Den 2 (Bears) Meeting (02/22/26)</option>
              <option value="397">Den 2 (Bears) Meeting (12/14/25)</option>
              <option value="131">Den 2 activity (e.g. hike) (11/11/23)</option>
              <option value="395">Den 2 Bears Meeting (10/12/25)</option>
              <option value="133">Den 2 meeting (01/10/24)</option>
              <option value="134">Den 2 meeting (02/07/24)</option>
              <option value="135">Den 2 meeting (03/06/24)</option>
              <option value="137">Den 2 meeting (04/03/24)</option>
              <option value="138">Den 2 meeting (05/01/24)</option>
              <option value="394">Den 2 Meeting (09/21/25)</option>
              <option value="129">Den 2 meeting (10/04/23)</option>
              <option value="293">Den 2 Meeting (10/20/24)</option>
              <option value="130">Den 2 meeting (11/01/23)</option>
              <option value="132">Den 2 meeting (holiday dinner at my house) (12/06/23)</option>
              <option value="79">Den 21 Meeting (01/11/24)</option>
              <option value="80">Den 21 Meeting (01/25/24)</option>
              <option value="29">Den 21 Meeting (04/20/23)</option>
              <option value="31">Den 21 Meeting (05/06/23)</option>
              <option value="43">Den 21 Meeting (06/15/23)</option>
              <option value="46">Den 21 Meeting (07/27/23)</option>
              <option value="47">Den 21 Meeting (08/17/23)</option>
              <option value="72">Den 21 Meeting (09/14/23)</option>
              <option value="73">Den 21 Meeting (09/28/23)</option>
              <option value="74">Den 21 Meeting (10/12/23)</option>
              <option value="75">Den 21 Meeting (10/26/23)</option>
              <option value="76">Den 21 Meeting (11/09/23)</option>
              <option value="77">Den 21 Meeting (11/30/23)</option>
              <option value="78">Den 21 Meeting (12/14/23)</option>
              <option value="283">Den 22 AOL campout Pedernales Falls (11/08/24)</option>
              <option value="408">Den 3 - December Den Meeting (12/14/25)</option>
              <option value="407">Den 3 - November Den Meeting - Group Bike Ride (11/16/25)</option>
              <option value="406">Den 3 - October Den Meeting (Time changed to 1:30PM) (10/26/25)</option>
              <option value="182">Den 3  Optional Makeup Meeting (12/17/23)</option>
              <option value="405">Den 3 - September Den Meeting (09/14/25)</option>
              <option value="207">Den 3 Cleanup Project*** note the new time (04/07/24)</option>
              <option value="28">Den 3 Make-up Session (04/16/23)</option>
              <option value="330">Den 3 Meeting (01/05/25)</option>
              <option value="183">Den 3 meeting (01/21/24)</option>
              <option value="331">Den 3 Meeting (02/16/25)</option>
              <option value="198">Den 3 Meeting (02/25/24)</option>
              <option value="205">Den 3 Meeting (03/24/24)</option>
              <option value="332">Den 3 Meeting (03/30/25)</option>
              <option value="333">Den 3 Meeting (04/27/25)</option>
              <option value="206">Den 3 Meeting (04/28/24)</option>
              <option value="272">Den 3 Meeting (09/22/24)</option>
              <option value="128">Den 3 Meeting (10/22/23)</option>
              <option value="164">Den 3 Meeting (10/22/23)</option>
              <option value="273">Den 3 Meeting (10/27/24)</option>
              <option value="170">Den 3 Meeting (11/19/23)</option>
              <option value="329">Den 3 Meeting (12/15/24)</option>
              <option value="325">Den 3 Mtg (11/17/24)</option>
              <option value="178">Den 4 Lions  - Den Meeting (12/20/23)</option>
              <option value="150">Den 4 Lions Meeting (10/18/23)</option>
              <option value="270">Den 4 Meeting (09/24/24)</option>
              <option value="101">Den 5 Meeting (01/17/24)</option>
              <option value="102">Den 5 Meeting (02/21/24)</option>
              <option value="103">Den 5 Meeting (03/20/24)</option>
              <option value="104">Den 5 Meeting (04/17/24)</option>
              <option value="97">Den 5 Meeting (09/20/23)</option>
              <option value="98">Den 5 Meeting (10/18/23)</option>
              <option value="322">Den 5 Meeting (10/27/24)</option>
              <option value="99">Den 5 Meeting (11/15/23)</option>
              <option value="100">Den 5 Meeting (12/20/23)</option>
              <option value="291">Den 5 Webelos (10/23/24)</option>
              <option value="109">Den 6 Meeting (01/24/24)</option>
              <option value="111">Den 6 Meeting (03/20/24)</option>
              <option value="112">Den 6 Meeting (04/17/24)</option>
              <option value="113">Den 6 Meeting (05/01/24)</option>
              <option value="105">Den 6 Meeting (09/20/23)</option>
              <option value="106">Den 6 Meeting (10/18/23)</option>
              <option value="107">Den 6 Meeting (11/08/23)</option>
              <option value="108">Den 6 Meeting (12/06/23)</option>
              <option value="211">Den 7 Meeting - Running with the Pack (03/24/24)</option>
              <option value="188">Den 7 Meeting (with Den 8!) (rescheduled) (02/11/24)</option>
              <option value="177">Den 7 Wolves  - Den Meeting (12/18/23)</option>
              <option value="149">Den 7 Wolves Meeting (10/16/23)</option>
              <option value="187">Den 8 meeting (01/21/24)</option>
              <option value="197">Den 8 meeting (02/11/24)</option>
              <option value="204">Den 8 meeting (03/03/24)</option>
              <option value="338">Den 8 meeting (03/09/25)</option>
              <option value="212">Den 8 meeting (04/14/24)</option>
              <option value="259">Den 8 meeting (09/15/24)</option>
              <option value="292">Den 8 meeting (10/20/24)</option>
              <option value="147">Den 8 meeting (10/22/23)</option>
              <option value="326">Den 8 meeting (11/17/24)</option>
              <option value="175">Den 8 meeting (11/26/23)</option>
              <option value="336">Den 8 Pinewood Derby workshop (01/18/25)</option>
              <option value="449">Den 8 Webelos meeting (10/12/25)</option>
              <option value="517">Den Leader &amp; Committee Meeting (01/10/27)</option>
              <option value="367">Den Leader &amp; Committee Meeting (01/11/26)</option>
              <option value="518">Den Leader &amp; Committee Meeting (02/07/27)</option>
              <option value="519">Den Leader &amp; Committee Meeting (03/07/27)</option>
              <option value="374">Den Leader &amp; Committee Meeting (03/08/26)</option>
              <option value="520">Den Leader &amp; Committee Meeting (04/04/27)</option>
              <option value="376">Den Leader &amp; Committee Meeting (04/12/26)</option>
              <option value="521">Den Leader &amp; Committee Meeting (05/02/27)</option>
              <option value="379">Den Leader &amp; Committee Meeting (05/03/26)</option>
              <option value="512">Den Leader &amp; Committee Meeting (08/09/26)</option>
              <option value="356">Den Leader &amp; Committee Meeting (08/10/25)</option>
              <option value="355">Den Leader &amp; Committee Meeting (09/07/25)</option>
              <option value="513">Den Leader &amp; Committee Meeting (09/13/26)</option>
              <option value="514">Den Leader &amp; Committee Meeting (10/04/26)</option>
              <option value="360">Den Leader &amp; Committee Meeting (10/05/25)</option>
              <option value="515">Den Leader &amp; Committee Meeting (11/01/26)</option>
              <option value="362">Den Leader &amp; Committee Meeting (11/02/25)</option>
              <option value="516">Den Leader &amp; Committee Meeting (12/06/26)</option>
              <option value="365">Den Leader &amp; Committee Meeting (12/07/25)</option>
              <option value="57">Den Leader Training (09/24/23)</option>
              <option value="300">Den Leader Training (10/23/24)</option>
              <option value="344">Den Meeting (03/30/25)</option>
              <option value="578">Den Meeting (04/11/27)</option>
              <option value="308">Den Meeting (04/27/24)</option>
              <option value="83">Den Meeting (Den 3) (09/24/23)</option>
              <option value="416">Den5 Den Meeting (01/21/26)</option>
              <option value="412">Den5 Den Meeting (09/17/25)</option>
              <option value="413">Den5 Den Meeting (10/22/25)</option>
              <option value="414">Den5 Den Meeting (11/19/25)</option>
              <option value="559">District Roundtable (01/07/27)</option>
              <option value="560">District Roundtable (02/04/27)</option>
              <option value="561">District Roundtable (03/04/27)</option>
              <option value="562">District Roundtable (04/01/27)</option>
              <option value="563">District Roundtable (05/06/27)</option>
              <option value="564">District Roundtable (06/04/26)</option>
              <option value="565">District Roundtable (07/02/26)</option>
              <option value="554">District Roundtable (08/06/26)</option>
              <option value="555">District Roundtable (09/03/26)</option>
              <option value="556">District Roundtable (10/01/26)</option>
              <option value="557">District Roundtable (11/05/26)</option>
              <option value="558">District Roundtable (12/03/26)</option>
              <option value="209">Eclipse Extravaganza (04/06/24)</option>
              <option value="200">Engineering (02/15/24)</option>
              <option value="234">Fall Campout - Goliad State Park (11/01/24)</option>
              <option value="60">Fall Campout (10/27/23)</option>
              <option value="364">Fall Campout (11/07/25)</option>
              <option value="549">Fall Campout (11/13/26)</option>
              <option value="353">Fall Recruitment - Baldwin (09/02/25)</option>
              <option value="67">Fall Recruitment - Baldwin BTS Night (K-2nd) (08/24/23)</option>
              <option value="37">Fall Recruitment - Baldwin Elementary (08/29/23)</option>
              <option value="224">Fall Recruitment - Circle C (08/24/24)</option>
              <option value="38">Fall Recruitment - Circle C (08/31/23)</option>
              <option value="225">Fall Recruitment - Circle C (09/01/24)</option>
              <option value="354">Fall Recruitment - Clayton (09/04/25)</option>
              <option value="53">Fall Recruitment - Clayton Meet the Teacher Night (08/10/23)</option>
              <option value="250">Family Pack Orientation (09/15/24)</option>
              <option value="56">FIRST Lion / Tiger Den Meeting (09/23/23)</option>
              <option value="50">Flag Retirement Ceremony (07/04/23)</option>
              <option value="541">Graduation (05/15/27)</option>
              <option value="181">Holiday Service Project (12/16/23)</option>
              <option value="219">Independence Day Parade (07/04/24)</option>
              <option value="350">Independence Day Parade (CANCELLED) (07/04/25)</option>
              <option value="351">Innerspace Caverns (07/19/25)</option>
              <option value="550">Into the Woods Cub Scout Adventure Weekend (Council Event) (11/06/26)</option>
              <option value="81">Jamboree On The Air (10/20/23)</option>
              <option value="579">Join Scouting Night (08/25/26)</option>
              <option value="426">Lion Den #6 &amp; # 7 Meeting (02/15/26)</option>
              <option value="420">Lion Den #6 &amp; #7 Meeting (10/05/25)</option>
              <option value="428">Lion Den #6 &amp; Den #7 Meeting (05/03/26)</option>
              <option value="427">Lion Den #6 Meeting (03/29/26)</option>
              <option value="459">Lion's Den #6 &amp; #7 Art Supply Pickup (10/12/25)</option>
              <option value="479">Lion's Den #6 &amp; #7 Card Delivery/Resident Holiday Party (12/23/25)</option>
              <option value="423">Lions Den #6 &amp; #7 Holiday Card Making Workshop (12/14/25)</option>
              <option value="461">Lions Den #6 &amp; #7 Service Project ART DUE 10/20-10/22 (10/20/25)</option>
              <option value="422">Lions Den #6, #7, Fire Station Tour/Den Meeting (11/02/25)</option>
              <option value="493">Lions Den #7 Meeting (03/15/26)</option>
              <option value="317">Lions Den 9 Meeting (01/19/25)</option>
              <option value="318">Lions Den 9 Meeting (02/16/24)</option>
              <option value="321">Lions Den 9 Meeting (02/16/25)</option>
              <option value="319">Lions Den 9 Meeting (03/30/25)</option>
              <option value="320">Lions Den 9 Meeting (04/27/25)</option>
              <option value="314">Lions Den 9 Meeting (10/27/24)</option>
              <option value="315">Lions Den 9 Meeting (11/17/24)</option>
              <option value="316">Lions Den 9 Meeting (12/15/24)</option>
              <option value="462">Lion's Service Project Art on Display @ Austin Studio Tour (11/15/25)</option>
              <option value="32">Make-up Den Meeting and Bobcat Clinic (04/29/23)</option>
              <option value="481">Meet an elected official (01/06/26)</option>
              <option value="345">Meeting the Sheriff (05/06/25)</option>
              <option value="503">Messengers Of Peace Service Project (04/18/26)</option>
              <option value="489">Mighty Ducks - Bonus Cycling Event (02/21/26)</option>
              <option value="490">Mighty Ducks - Make-up Requirements Meeting (02/08/26)</option>
              <option value="567">Natural Bridge Caverns (07/18/26)</option>
              <option value="63">NEW DATE: Committee / Den Leader Meeting (08/20/23)</option>
              <option value="36">NEW DATE: Cubmobile Derby (08/26/23)</option>
              <option value="55">New Scout Ceremony (09/16/23)</option>
              <option value="358">New Scout Family Meeting (09/14/25)</option>
              <option value="125">NEW TIME - Rocket Derby (05/04/24)</option>
              <option value="504">Optional - Service Event (04/25/26)</option>
              <option value="289">Overnight at the USS Lexington (01/11/25)</option>
              <option value="20">Pack 12 Graduation (05/09/23)</option>
              <option value="383">Pack 12 Graduation (05/16/26)</option>
              <option value="257">Pack 12 Graduation (05/17/25)</option>
              <option value="124">Pack 12 Graduation (05/19/24)</option>
              <option value="213">Pack 12 Recruitment @ Clayto's Playground (04/27/24)</option>
              <option value="121">Pack Meeting (01/09/24)</option>
              <option value="526">Pack Meeting (01/12/27)</option>
              <option value="368">Pack Meeting (01/13/26)</option>
              <option value="230">Pack Meeting (01/14/25)</option>
              <option value="527">Pack Meeting (02/09/27)</option>
              <option value="122">Pack Meeting (03/05/24)</option>
              <option value="528">Pack Meeting (03/09/27)</option>
              <option value="231">Pack Meeting (03/11/25)</option>
              <option value="375">Pack Meeting (03/24/26)</option>
              <option value="529">Pack Meeting (04/06/27)</option>
              <option value="232">Pack Meeting (04/08/25)</option>
              <option value="123">Pack Meeting (04/09/24)</option>
              <option value="377">Pack Meeting (04/14/26)</option>
              <option value="382">Pack Meeting (05/12/26)</option>
              <option value="233">Pack Meeting (05/13/25)</option>
              <option value="217">Pack Meeting (05/14/24)</option>
              <option value="40">Pack Meeting (10/10/23)</option>
              <option value="523">Pack Meeting (10/13/26)</option>
              <option value="361">Pack Meeting (10/14/25)</option>
              <option value="227">Pack Meeting (10/15/24)</option>
              <option value="524">Pack Meeting (11/10/26)</option>
              <option value="363">Pack Meeting (11/11/25)</option>
              <option value="228">Pack Meeting (11/12/24)</option>
              <option value="41">Pack Meeting (11/14/23)</option>
              <option value="525">Pack Meeting (12/08/26)</option>
              <option value="366">Pack Meeting (12/09/25)</option>
              <option value="229">Pack Meeting (12/10/24)</option>
              <option value="42">Pack Meeting (12/12/23)</option>
              <option value="522">Pack Meeting (Open House &amp; Parent Orientation) (09/08/26)</option>
              <option value="530">Pack Meeting (Rocket Building!) (05/04/27)</option>
              <option value="357">Pack Meeting / Open House (09/09/25)</option>
              <option value="226">Pack Meeting / Open House (09/10/24)</option>
              <option value="39">Pack Meeting / Open House (09/12/23)</option>
              <option value="535">Pack Meeting Setup (AOLs) (01/12/27)</option>
              <option value="531">Pack Meeting Setup (AOLs) (09/08/26)</option>
              <option value="537">Pack Meeting Setup (Bears) (03/09/27)</option>
              <option value="533">Pack Meeting Setup (Bears) (11/10/26)</option>
              <option value="536">Pack Meeting Setup (Webelos) (02/09/27)</option>
              <option value="539">Pack Meeting Setup (Webelos) (05/04/27)</option>
              <option value="532">Pack Meeting Setup (Webelos) (10/13/26)</option>
              <option value="538">Pack Meeting Setup (Wolves) (04/06/27)</option>
              <option value="534">Pack Meeting Setup (Wolves) (12/08/26)</option>
              <option value="221">Parent &amp; Volunteer Meeting (08/11/24)</option>
              <option value="241">Parent &amp; Volunteer Meeting (09/08/24)</option>
              <option value="119">Pinewood Derby (02/03/24)</option>
              <option value="371">Pinewood Derby (02/07/26)</option>
              <option value="252">Pinewood Derby (02/08/25)</option>
              <option value="544">Pinewood Derby (02/20/27)</option>
              <option value="545">Pinewood Derby Inspections (Option 1) (02/16/27)</option>
              <option value="546">Pinewood Derby Inspections (Option 2) (02/18/27)</option>
              <option value="334">Pinewood Derby Weigh-In (02/04/25)</option>
              <option value="335">Pinewood Derby Weigh-In (02/05/25)</option>
              <option value="387">Popcorn Unit Booth Selections (07/23/25)</option>
              <option value="388">Popcorn Unit Booth Selections (07/24/25)</option>
              <option value="386">Popcorn Unit Booth Selections Begin (07/22/25)</option>
              <option value="190">PWD Block Cutting (01/19/24)</option>
              <option value="176">PWD Block-cutting (01/17/24)</option>
              <option value="185">PWD Weigh-in (01/30/24)</option>
              <option value="186">PWD Weigh-in (01/31/24)</option>
              <option value="500">Raingutter Regatta (05/30/26)</option>
              <option value="349">Raingutter Regatta (06/07/25)</option>
              <option value="218">Raingutter Regatta (06/08/24)</option>
              <option value="23">Raingutter Regatta (06/17/23)</option>
              <option value="215">Rank Requirement Deadline for Graduation (05/01/24)</option>
              <option value="359">Registration Dues Deadline (09/30/25)</option>
              <option value="26">Requirement Deadline for Graduation (05/02/23)</option>
              <option value="381">Requirement Deadline for Graduation (05/10/26)</option>
              <option value="214">RESCHEDULED - Cleanup @ Clayton Elementary (05/11/24)</option>
              <option value="378">RESCHEDULED TO FALL -- Spring Campout (04/17/26)</option>
              <option value="216">Rocket Derby - Inspections (05/03/24)</option>
              <option value="540">Rocket Derby (04/17/27)</option>
              <option value="380">Rocket Derby (05/09/26)</option>
              <option value="256">Rocket Derby (05/10/25)</option>
              <option value="19">Rocket Derby (05/21/23)</option>
              <option value="508">Rocket Derby Inspections and Build (Session 1) (05/06/26)</option>
              <option value="509">Rocket Derby Inspections and Build (Session 2) (05/07/26)</option>
              <option value="347">Rocket Derby Inspections, Day 1 (05/07/25)</option>
              <option value="348">Rocket Derby Inspections, Day 2 (05/08/25)</option>
              <option value="30">Rocket Derby Workshop (04/15/23)</option>
              <option value="85">Round Table (09/07/23)</option>
              <option value="86">Round Table (10/05/23)</option>
              <option value="282">Roundtable (10/03/24)</option>
              <option value="582">Scouting 101 &amp; Cub Mobile (Troop Hosted Event) (10/03/26)</option>
              <option value="384">Scouting 101 (formerly Webelos Woods) (10/25/25)</option>
              <option value="255">Sea World Winter Overnight (01/25/25)</option>
              <option value="299">Service Project - Baldwin Campus Cleanup &amp; Planter Construction (10/27/24)</option>
              <option value="502">Spring Campout - Alternative Event - Please RSVP (04/18/26)</option>
              <option value="542">Spring Campout (04/02/27)</option>
              <option value="254">Spring Campout (04/11/25)</option>
              <option value="126">Spring Campout (04/19/24)</option>
              <option value="17">Spring Campout (04/21/23)</option>
              <option value="585">Spring Picnic (05/01/27)</option>
              <option value="34">Spring Recruitment (05/24/23)</option>
              <option value="22">STILL ON: Clayton Cleanup (04/29/23)</option>
              <option value="220">Summer Activity - Rock Climbing (07/20/24)</option>
              <option value="446">Thunderbird District Roundtable (03/05/26)</option>
              <option value="447">Thunderbird District Roundtable (04/02/26)</option>
              <option value="448">Thunderbird District Roundtable (05/07/26)</option>
              <option value="441">Thunderbird District Roundtable (10/02/25)</option>
              <option value="442">Thunderbird District Roundtable (11/06/25)</option>
              <option value="443">Thunderbird District Roundtable (12/04/25)</option>
              <option value="267">Thunderbird District Scouting 101 | Webelos Woods (10/12/24)</option>
              <option value="429">Tigers Den #9 &amp; #11 @ Radha Rani Hindu Temple (12/13/25)</option>
              <option value="430">Tigers Den #9 &amp; #11 Meeting (01/11/26)</option>
              <option value="431">Tigers Den #9 &amp; #11 Meeting (02/22/26)</option>
              <option value="432">Tigers Den #9 &amp; #11 Meeting (03/29/26)</option>
              <option value="433">Tigers Den #9 &amp; #11 Meeting (04/26/26)</option>
              <option value="460">Tigers Den #9 &amp; #11 Meeting/Fire Station Tour (11/02/25)</option>
              <option value="421">Tigers Den #9 Meeting (10/05/25)</option>
              <option value="307">Tigers Den 10 Meeting - Rolling Tigers (03/30/25)</option>
              <option value="306">Tigers Den 10 Meeting - Tiger Tag (03/02/25)</option>
              <option value="304">Tigers Den 10 Meeting (01/19/25)</option>
              <option value="313">Tigers Den 10 Meeting (04/27/25)</option>
              <option value="301">Tigers Den 10 Meeting (10/27/24)</option>
              <option value="312">Tigers Den 10 Meeting (11/17/24)</option>
              <option value="303">Tigers Den 10 Meeting (12/15/24)</option>
              <option value="465">Touch An Ambulance Event/First Aide with Ally Medical (11/16/25)</option>
              <option value="409">Troop 19 Campout - Pedernales Falls (12/06/25)</option>
              <option value="411">Troop 19 Halloween Party (10/26/25)</option>
              <option value="127">Troop 3337 Open House (10/01/23)</option>
              <option value="471">Troop 4443 - Edwards Aquifer Education Center (12/06/25)</option>
              <option value="470">Troop 4443 Halloween Party (11/02/25)</option>
              <option value="410">Troop 4443 Ice Cream Social (10/19/25)</option>
              <option value="477">Troop 448 Meeting with AOL Activities (12/08/25)</option>
              <option value="475">Troop 448 troop meeting (12/08/25)</option>
              <option value="165">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="166">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="167">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="168">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="268">Troop 505 Open House (09/28/24)</option>
              <option value="184">University of Scouting (01/20/24)</option>
              <option value="548">USS Lexington (Overnight) (01/16/27)</option>
              <option value="171">Veteran's Day Flag Ceremony (11/09/23)</option>
              <option value="469">Veterans Day Flag Ceremony at Baldwin Elementary (11/11/25)</option>
              <option value="472">Veterans Day Flag Ceremony at Clayton Elementary (11/11/25)</option>
              <option value="245">VIRTUAL - Committee &amp; Leader Meeting (01/12/25)</option>
              <option value="246">VIRTUAL - Committee &amp; Leader Meeting (02/02/25)</option>
              <option value="327">Visit with Girls Troop 4443 (11/17/24)</option>
              <option value="66">Webelos 1/2-Day Adventure (01/13/24)</option>
              <option value="89">Webelos Adventure: First Responder - Troop 448 (09/25/23)</option>
              <option value="580">Webelos and AOL Swim Adventure (08/22/26)</option>
              <option value="87">Webelos Den 22 Meeting - First meeting (09/13/23)</option>
              <option value="155">Webelos Den 22 Meeting (01/24/24)</option>
              <option value="201">Webelos Den 22 Meeting (02/07/24)</option>
              <option value="157">Webelos Den 22 Meeting (02/28/24)</option>
              <option value="158">Webelos Den 22 Meeting (03/20/24)</option>
              <option value="159">Webelos Den 22 Meeting (04/24/24)</option>
              <option value="148">Webelos Den 22 Meeting (10/04/23)</option>
              <option value="151">Webelos Den 22 Meeting (10/18/23)</option>
              <option value="152">Webelos Den 22 Meeting (11/08/23)</option>
              <option value="153">Webelos Den 22 Meeting (11/29/23)</option>
              <option value="154">Webelos Den 22 Meeting (12/20/23)</option>
              <option value="203">Webelos den 22/23  hike 3 mi (04/10/24)</option>
              <option value="202">Webelos Den 22/23 Meeting (02/21/24)</option>
              <option value="95">Webelos Den 23 Meeting - First meeting (09/13/23)</option>
              <option value="191">Webelos Den 23 Meeting (01/24/24)</option>
              <option value="192">Webelos Den 23 Meeting (02/07/24)</option>
              <option value="193">Webelos Den 23 Meeting (02/28/24)</option>
              <option value="194">Webelos Den 23 Meeting (03/20/24)</option>
              <option value="195">Webelos Den 23 Meeting (04/24/24)</option>
              <option value="172">Webelos Den 23 Meeting (11/08/23)</option>
              <option value="173">Webelos Den 23 Meeting (11/29/23)</option>
              <option value="174">Webelos Den 23 Meeting (12/20/23)</option>
              <option value="576">Webelos Den Meeting (02/07/27)</option>
              <option value="577">Webelos Den Meeting (03/14/27)</option>
              <option value="571">Webelos Den Meeting (09/20/26)</option>
              <option value="572">Webelos Den Meeting (10/18/26)</option>
              <option value="573">Webelos Den Meeting (11/08/26)</option>
              <option value="574">Webelos Den Meeting (12/13/26)</option>
              <option value="494">Webelos hike (03/22/26)</option>
              <option value="505">Webelos hike (05/02/26)</option>
              <option value="543">Webelos Wilderness Weekend (03/05/27)</option>
              <option value="61">Webelos Woods (10/21/23)</option>
              <option value="403">Webolos Den 8 Meeting (09/07/25)</option>
              <option value="480">Webolos Den Meeting (12/14/25)</option>
              <option value="485">Weigh-in day for Pinewood Derby (02/04/26)</option>
              <option value="486">Weigh-in day for Pinewood Derby (02/05/26)</option>
              <option value="581">Welcome Back, Pack Picnic (08/29/26)</option>
              <option value="547">Winter Overnight (Lone Star Flight Museum) (01/23/27)</option>
              <option value="369">Winter Overnight at San Antonio Zoo (01/31/26)</option>
              <option value="96">Winter Overnight: NASA Space Center Houston (01/27/24)</option>
              <option value="463">Wolfs Den Meeting #10 Fishing (10/19/25)</option>
              <option value="295">Wolves Den 2 Meeting (01/19/25)</option>
              <option value="311">Wolves Den 2 Meeting (02/16/25)</option>
              <option value="296">Wolves Den 2 Meeting (03/02/25)</option>
              <option value="297">Wolves Den 2 Meeting (03/30/25)</option>
              <option value="298">Wolves Den 2 Meeting (04/27/25)</option>
              <option value="294">Wolves Den 2 Meeting (11/17/24)</option>
              <option value="309">Wolves Den 2 Meeting (12/15/24)</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Debit Fund
            </label>
          </td>
          <td>
            <select name="OP544142" tabindex="490" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544142" name="QUERY544142" class="form-control" onblur="TestRegExp(this,'','')" tabindex="500" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Credit Fund
            </label>
          </td>
          <td>
            <select name="OP544152" tabindex="510" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544152" name="QUERY544152" class="form-control" onblur="TestRegExp(this,'','')" tabindex="520" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Fiscal Year
            </label>
          </td>
          <td>
            <select name="OP544165" tabindex="530" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="=">=</option>
              <option value="&lt;">&lt;</option>
              <option value="&lt;=">&lt;=</option>
              <option value="&gt;">&gt;</option>
              <option value="&gt;=">&gt;=</option>
              <option value="&lt;&gt;">&lt;&gt;</option>
              <option value="between">Between</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY544165" name="QUERY544165" tabindex="540" size="7" disabled="" style="visibility: hidden" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="">
            <span id="QAND544165" class="entrypostscript" style="visibility: hidden">...and...</span>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY2544165" name="QUERY2544165" tabindex="550" size="7" disabled="" style="visibility: hidden" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="">
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Group Transaction?
            </label>
          </td>
          <td>
            <select name="OP5441711" tabindex="560" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="=">Equal</option>
              <option value="&lt;&gt;">Not Equal</option>
            </select>
          </td>
          <td>
            <span class="text-left" id="SPAN5441711" name="SPAN5441711">
            <span style="white-space: nowrap;"><input type="radio" id="QUERY5441711" name="QUERY5441711" tabindex="570" disabled="" onclick="easyFieldExit(this)" onkeydown="submitSearch();" style="visibility: hidden" value="Y"><span id="QTEXT5441711" style="visibility: hidden">Yes</span></span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="QUERY5441711" name="QUERY5441711" tabindex="570" disabled="" onclick="easyFieldExit(this)" onkeydown="submitSearch();" style="visibility: hidden" value="N"><span id="QTEXT5441711" style="visibility: hidden">No</span></span>
            </span>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Debit Reconciled To Statement
            </label>
          </td>
          <td>
            <select name="OP544182" tabindex="580" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544182" name="QUERY544182" class="form-control" onblur="TestRegExp(this,'','')" tabindex="590" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Credit Reconciled To Statement
            </label>
          </td>
          <td>
            <select name="OP544192" tabindex="600" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544192" name="QUERY544192" class="form-control" onblur="TestRegExp(this,'','')" tabindex="610" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Sold By
            </label>
          </td>
          <td>
            <select name="OP544202" tabindex="620" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY544202" name="QUERY544202" class="form-control" onblur="TestRegExp(this,'','')" tabindex="630" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="1018">Aarons, Andrew</option>
              <option value="1027">Aarons, Ashley</option>
              <option value="1086">Aarons, Stephen</option>
              <option value="910">Abbott, Albert</option>
              <option value="914">Abbott, William</option>
              <option value="1063">Almaraz, Alexander</option>
              <option value="1064">Almaraz, Eric</option>
              <option value="939">Alvarez, Jordan</option>
              <option value="668">Alvarez, Jorge</option>
              <option value="714">Alvarez, Kristy</option>
              <option value="1239">Alvarez, Layla</option>
              <option value="664">Alvarez, Mateo</option>
              <option value="943">Alvarez, Omar</option>
              <option value="665">Alvarez, Paolo</option>
              <option value="660">Anand Shankar, Arjun</option>
              <option value="682">Andrews, Sue Ann</option>
              <option value="1245">Applegate, Chris</option>
              <option value="1240">Applegate, Sebastian</option>
              <option value="1202">Babb, Chris</option>
              <option value="1184">Babb, Tyson</option>
              <option value="827">Bains, Gaganpreet</option>
              <option value="805">Bains, Jupp</option>
              <option value="806">Bains, Waris</option>
              <option value="875">Banerji, Abhra</option>
              <option value="869">Banerji, Rabin</option>
              <option value="1230">Barton, Paxton</option>
              <option value="1231">Barton, Phil</option>
              <option value="963">Batchelder, Jonathan</option>
              <option value="1012">Batchelder, Mark</option>
              <option value="975">Batchelder, Veronica</option>
              <option value="488">Bayes, Dylan</option>
              <option value="578">Bayes, Phillip</option>
              <option value="617">Bell, Albie</option>
              <option value="1028">Bell, Katie</option>
              <option value="536">Bell, Nate</option>
              <option value="1019">Bell, Petey</option>
              <option value="656">Bennett, Eleanor</option>
              <option value="486">Bennett, Goodhue</option>
              <option value="690">Bennett, Mary</option>
              <option value="537">Bennett, Robbie</option>
              <option value="1621">Benson, Lawrence</option>
              <option value="1617">Benson, Nicolas</option>
              <option value="1128">Benton, Susannah</option>
              <option value="1042">Bergen, Chris</option>
              <option value="1037">Bergen, Emmett</option>
              <option value="489">Binford, Grayson</option>
              <option value="534">Binford, Jason</option>
              <option value="1154">Blair, Frankie</option>
              <option value="1155">Blair, Joe</option>
              <option value="593">Brady, Christopher</option>
              <option value="626">Brady, Heather</option>
              <option value="605">Branagh, Colin</option>
              <option value="608">Branagh, Wayne</option>
              <option value="1156">Bruyn, Emerson</option>
              <option value="1169">Bruyn, Meaghan</option>
              <option value="964">Bucklin, Emmett</option>
              <option value="976">Bucklin, Mary</option>
              <option value="977">Bucklin, Michael</option>
              <option value="1610">Bucklin, Michael2</option>
              <option value="1611">Bucklin, Michael3</option>
              <option value="1004">Burns, Kai</option>
              <option value="1006">Burns, Mike</option>
              <option value="595">Buse, Hendrix</option>
              <option value="674">Buse, Jayme</option>
              <option value="691">Buse, Michael</option>
              <option value="785">Bush, Greg</option>
              <option value="762">Bush, Kai</option>
              <option value="908">Byrd, Amanda</option>
              <option value="1618">Byrd, Barrett</option>
              <option value="763">Byrd, Benjamin</option>
              <option value="786">Byrd, Ryan</option>
              <option value="620">Canales, Hudson</option>
              <option value="681">Canales, Jorge</option>
              <option value="675">Canales, Rebecca</option>
              <option value="571">Cantin, Candy</option>
              <option value="570">Cantin, Jason</option>
              <option value="573">Cantin, Samuel</option>
              <option value="544">Capar, Alp</option>
              <option value="621">Capar, Mia</option>
              <option value="764">Cardwell, Matthew</option>
              <option value="836">Cardwell, Robert</option>
              <option value="574">Carty, Addison</option>
              <option value="584">Carty, Caroline</option>
              <option value="500">Carty, Nate</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="1143">Chidester, Ella</option>
              <option value="986">Chidester, Russ</option>
              <option value="983">Chidester, Taylor</option>
              <option value="1029">Coman, Adela</option>
              <option value="715">Corder, Catharine</option>
              <option value="502">Corder, Clifford</option>
              <option value="1121">Corder, Clifford</option>
              <option value="499">Corder, Myra</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1020">Couch, Marcus</option>
              <option value="653">Cross, Andrew</option>
              <option value="658">Cross, Cole</option>
              <option value="563">Cross, Stacy</option>
              <option value="559">Cross, Stan</option>
              <option value="1051">Cruz, Ryan</option>
              <option value="1046">Cruz, Taryn</option>
              <option value="1010">Currer, Josh</option>
              <option value="1008">Currer, Silas</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="603">Davis, Alisande</option>
              <option value="612">Davis, Dylan</option>
              <option value="951">Davis, Eagle</option>
              <option value="955">Davis, Jim</option>
              <option value="523">Davis, Keegan</option>
              <option value="1">De La Garza, Adrian</option>
              <option value="501">De La Garza, Gabby</option>
              <option value="594">De La Garza, Kimberly</option>
              <option value="705">de la Puente, Matias</option>
              <option value="984">De Los Santos Garza, Andrea</option>
              <option value="965">De Los Santos Garza, Leo  Jr.</option>
              <option value="978">De Los Santos Tamez, Diego</option>
              <option value="1532">Delete, Delete</option>
              <option value="1135">DeMartini, Emilia</option>
              <option value="1139">DeMartini, Trevor</option>
              <option value="1136">DeMartini, Vincent</option>
              <option value="1241">Dennis, Khoi</option>
              <option value="1246">Dennis, Michael</option>
              <option value="614">Desouky, Noura</option>
              <option value="1268">Diaz, Adam</option>
              <option value="1266">Diaz, Winslow</option>
              <option value="521">Doran, James</option>
              <option value="650">Doran, Jason</option>
              <option value="515">Doran, Jill</option>
              <option value="708">Douglas, Austin</option>
              <option value="706">Douglas, Jack</option>
              <option value="562">Dranguet, Benjamin</option>
              <option value="561">Dranguet, Ryan</option>
              <option value="828">Driscoll, Evan</option>
              <option value="575">Duraimani, Rajesh</option>
              <option value="1281">Duryee, David</option>
              <option value="1203">D'Vincent, Lilli</option>
              <option value="1185">D'Vincent, Mason</option>
              <option value="654">Elrakabawy, Erin</option>
              <option value="659">Elrakabawy, Noah</option>
              <option value="589">Elrakabawy, Raef</option>
              <option value="1021">Elwell, Connor</option>
              <option value="1022">Elwell, Jack</option>
              <option value="829">Erales, Felix</option>
              <option value="807">Erales, Jonah</option>
              <option value="808">Erales, Maxwell</option>
              <option value="1539">Espejel, Dean</option>
              <option value="1609">Espejel, Moshe</option>
              <option value="742">Espinoza, Erin</option>
              <option value="734">Espinoza, Logan</option>
              <option value="966">Fabian, Luca</option>
              <option value="979">Fabian, Mel</option>
              <option value="1131">Fabian, Melle</option>
              <option value="876">Fannon, Beau</option>
              <option value="830">Fannon, Christina</option>
              <option value="809">Fannon, Connor</option>
              <option value="787">Feng, Guo</option>
              <option value="810">Fick, Ezra</option>
              <option value="831">Fick, Preston</option>
              <option value="564">Files, Michael</option>
              <option value="1122">Files, Michael</option>
              <option value="633">Files, Mikaela</option>
              <option value="651">Files, Sofia</option>
              <option value="685">Flores, Joey</option>
              <option value="590">Flores, Jose  III</option>
              <option value="677">Flores, Kirstine</option>
              <option value="507">Flores, Logan</option>
              <option value="529">Foster, Amelia</option>
              <option value="655">Foster, Michelle</option>
              <option value="888">Gaete, Holly</option>
              <option value="886">Gaete, Lincoln</option>
              <option value="893">Galdo, Anne</option>
              <option value="901">Galdo, Gabe</option>
              <option value="1088">Galdo, Henry</option>
              <option value="482">Gammill, Bonnie</option>
              <option value="547">Garg, Suchi</option>
              <option value="636">Gautreaux, Alex</option>
              <option value="550">Gautreaux, Andrew</option>
              <option value="540">Gautreaux, MaryLynn</option>
              <option value="618">Gautreaux, Michael</option>
              <option value="645">Gibby, Harper</option>
              <option value="518">Gibby, Kai</option>
              <option value="592">Gibby, Robert</option>
              <option value="1114">Gibson, Charleston</option>
              <option value="1123">Gibson, Steven</option>
              <option value="1030">Glock, Lu</option>
              <option value="1186">Gonzalez, Jane</option>
              <option value="832">Goodine, David</option>
              <option value="811">Goodine, Jack</option>
              <option value="548">Graham, Adam</option>
              <option value="601">Graham, Hudson</option>
              <option value="948">Gremillion, Dallas</option>
              <option value="946">Gremillion, Tony</option>
              <option value="932">Guerra Shipley, Symone</option>
              <option value="1187">Gurrola, Benjamin</option>
              <option value="1204">Gurrola, Jacqueline</option>
              <option value="1232">Gurrola, Matthew</option>
              <option value="1157">Hallar, Henry</option>
              <option value="1170">Hallar, Ingrid</option>
              <option value="1171">Hanss Blair, Rachel</option>
              <option value="944">Harrison, Abi</option>
              <option value="940">Harrison, James</option>
              <option value="1084">Hayes, David</option>
              <option value="699">Hayward, Daniel</option>
              <option value="695">Hayward, Harlan</option>
              <option value="812">Hickman, Aaron</option>
              <option value="1188">Hickman, Maya</option>
              <option value="833">Hickman, Trey</option>
              <option value="788">Hinojosa-Cardwell, Teresa</option>
              <option value="952">Hinote, Jake</option>
              <option value="1055">Hinote, John</option>
              <option value="956">Hinote, Mistie</option>
              <option value="1058">Hoekstra, Bea</option>
              <option value="1061">Hoekstra, Jason</option>
              <option value="1059">Hoekstra, William</option>
              <option value="652">Hogue, Cason</option>
              <option value="657">Hogue, Matthew</option>
              <option value="1285">Hoy, Ashton</option>
              <option value="1287">Hoy, Nicole</option>
              <option value="565">Hudgens, Kristen</option>
              <option value="566">Hudson, Jay</option>
              <option value="555">Hudson, Kellen</option>
              <option value="634">Hudson, Tiffany</option>
              <option value="1216">Hume, Beatrix</option>
              <option value="1225">Hume, John</option>
              <option value="700">Hutchins, Magdalena</option>
              <option value="696">Hutchins, Samuel</option>
              <option value="1205">Idell, Claire</option>
              <option value="1189">Idell, Gabe</option>
              <option value="1292">Ingram, Alistair</option>
              <option value="1534">Ingrams, Julie and Robert</option>
              <option value="1250">Isaak, Christian</option>
              <option value="1252">Isaak, Rachel</option>
              <option value="600">jain, bhavik</option>
              <option value="676">Jain, Sudhir</option>
              <option value="1000">Jiang, Xuling</option>
              <option value="1097">Johnson, Bridget</option>
              <option value="1093">Johnson, Samuel</option>
              <option value="615">Jung Jang, Eun</option>
              <option value="877">Kafena, Afif</option>
              <option value="870">Kafena, Evangeline</option>
              <option value="1293">Kathuria, Kabir</option>
              <option value="883">Keenan, Danielle</option>
              <option value="880">Keenan, Lilly</option>
              <option value="882">Keenan, Peter</option>
              <option value="560">Kelble, Jillian</option>
              <option value="545">Kelble, Joe</option>
              <option value="520">Kelble, Rhys</option>
              <option value="1098">Kelly, Andi</option>
              <option value="1094">Kelly, Spencer</option>
              <option value="527">Killough, Kaden</option>
              <option value="680">Killough, Kent</option>
              <option value="585">Killough, Klayten</option>
              <option value="631">KIM, Dong Sung</option>
              <option value="549">Kim, Nathan</option>
              <option value="1047">Klein, James</option>
              <option value="1053">Klein, Jamie</option>
              <option value="1052">Klein, Taylor</option>
              <option value="542">Kohli, Anumeha</option>
              <option value="666">Kohli, Aria</option>
              <option value="1190">kommineni, anish</option>
              <option value="517">kommineni, Avighna</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
              <option value="1623">Koran, Katie and Kenny</option>
              <option value="1619">Koran, Teddy</option>
              <option value="532">Kramer, Matthew</option>
              <option value="632">Kramer, Victoria</option>
              <option value="478">Kramer, Weyland</option>
              <option value="661">Kumar, Anand</option>
              <option value="541">Kumari, Kamla</option>
              <option value="552">Lai, Aaliyah</option>
              <option value="553">Lai, James</option>
              <option value="894">Lai, James</option>
              <option value="513">Lee, Mia</option>
              <option value="679">Lee, Paul</option>
              <option value="505">Lee, Ronan</option>
              <option value="490">Leonard, Harper</option>
              <option value="528">Leonard, Sam</option>
              <option value="813">Lieberknecht, Eleanor</option>
              <option value="902">Lieberknecht, Elizabeth</option>
              <option value="604">Liu, Austin</option>
              <option value="567">Liu, Xianzhi</option>
              <option value="535">Llorente, Dorian</option>
              <option value="496">Llorente, Kristin</option>
              <option value="933">Lorenzini, Mitch</option>
              <option value="1217">Lorenzini, Paige</option>
              <option value="922">Lorenzini, Pepper</option>
              <option value="1032">Lynch, Dixon</option>
              <option value="1034">Lynch, Scott</option>
              <option value="669">Makwana, Prakash</option>
              <option value="688">Mallios, Jason</option>
              <option value="693">Mallios, Jim</option>
              <option value="493">Mallios, Nicholas</option>
              <option value="556">Mallios, Tracy</option>
              <option value="1260">Marquez, David</option>
              <option value="1255">Marquez, Owen</option>
              <option value="856">Marshall, Angie</option>
              <option value="866">Marshall, Mark</option>
              <option value="694">Martin, Abby</option>
              <option value="683">Martin, Jude</option>
              <option value="735">Matter, Alex</option>
              <option value="743">Matter, Rebecca</option>
              <option value="1038">Maza, Barry</option>
              <option value="1043">Maza, Heather</option>
              <option value="1158">McFarland, Beckett</option>
              <option value="923">McFarland, Evan</option>
              <option value="1124">McFarland, Ian</option>
              <option value="934">McFarland, Kristin</option>
              <option value="736">McGrath, Carter</option>
              <option value="744">McGrath, Kimberly</option>
              <option value="1269">McLeer, Douglas</option>
              <option value="1226">McLeer, Krissy</option>
              <option value="1218">McLeer, Levi</option>
              <option value="1219">McLeer, Liam</option>
              <option value="814">McManus, Bear</option>
              <option value="834">McManus, Keith</option>
              <option value="1256">Medler, Bennett</option>
              <option value="508">Mehta, Aarav</option>
              <option value="509">Mehta, Arya</option>
              <option value="610">Mehta, Dimpesh</option>
              <option value="667">Mehta, Rian</option>
              <option value="864">Mehta, Shreya</option>
              <option value="663">Meier, Joshua</option>
              <option value="495">Meier, Neve</option>
              <option value="557">Meier, Townes</option>
              <option value="619">Mills, Brady</option>
              <option value="1620">Modglin, Abel</option>
              <option value="1622">Modglin, Kirk</option>
              <option value="586">Mohmmad, Ivan</option>
              <option value="1125">Monahan, Matthew</option>
              <option value="670">Monahan2, Matthew</option>
              <option value="686">Montalvo, Cori</option>
              <option value="487">Montalvo, Jace</option>
              <option value="602">Montalvo, Matt</option>
              <option value="1276">Morris, Jack</option>
              <option value="1282">Morris, Lacey</option>
              <option value="697">Muller, Aubrey</option>
              <option value="701">Muller, Brittany</option>
              <option value="698">Muller, Elijah</option>
              <option value="597">Murray, Shanna</option>
              <option value="1002">Mysyk, Alexander</option>
              <option value="1288">Mysyk, Andriy</option>
              <option value="596">Mysyk, Andriy</option>
              <option value="641">Mysyk, Daniel</option>
              <option value="1191">Nair, Ananya</option>
              <option value="1206">Nair, Jithun</option>
              <option value="1294">Nallathambi, Kalki</option>
              <option value="1533">Nallathambi, Ravetha</option>
              <option value="530">Ng, Melissa</option>
              <option value="789">Nguyen, Phuong</option>
              <option value="480">Niefeldt, Anita</option>
              <option value="662">Niefeldt, Janek</option>
              <option value="512">Niefeldt, Sebastian</option>
              <option value="1277">Niphadkar, Sahana</option>
              <option value="1283">Niphadkar, Shraddha</option>
              <option value="846">Nomura, Asuka</option>
              <option value="841">Nomura, Edison</option>
              <option value="1172">North, Allison</option>
              <option value="1159">North, Arlo</option>
              <option value="1160">North, Davis</option>
              <option value="599">Omran, Ahmed</option>
              <option value="643">Omran, Haroun</option>
              <option value="546">Omran, Youssef</option>
              <option value="481">Ospina, Franny</option>
              <option value="539">Ospina, Ivan</option>
              <option value="484">Park, Jin Soo</option>
              <option value="1068">Park, Jude</option>
              <option value="1070">Park, Yongshin</option>
              <option value="1075">Parker, Brandon</option>
              <option value="1073">Parker, Bryce</option>
              <option value="644">Parma, Allyson</option>
              <option value="568">Parma, Andy</option>
              <option value="642">Parma, Giuliana</option>
              <option value="1079">Patel, Amy</option>
              <option value="1110">Patel, Hemang</option>
              <option value="861">Patel, Niam</option>
              <option value="862">Patel, Nirvaan</option>
              <option value="1173">Patel, Sujan</option>
              <option value="1100">Patel, Yug</option>
              <option value="533">Patterson, Kaitlyn</option>
              <option value="611">Patterson, Sue Ann</option>
              <option value="519">Perez, Hjalmar</option>
              <option value="684">Perez, Jane</option>
              <option value="569">Perez-Ng, Gabriela</option>
              <option value="765">Phan, Erik</option>
              <option value="506">Pina, Helen</option>
              <option value="967">Pina-Monahan, Nico</option>
              <option value="628">Pina-Monahan, Nina</option>
              <option value="1247">Porter, Koley</option>
              <option value="1242">Porter, Thora</option>
              <option value="598">Prishtina, Adam</option>
              <option value="572">Prishtina, Alexander</option>
              <option value="884">Prishtina, Benjamin</option>
              <option value="606">Prishtina, Jennifer</option>
              <option value="717">Purbach, Barrett</option>
              <option value="720">Purbach, Jennifer</option>
              <option value="721">Purbach, Ulrich</option>
              <option value="968">Purohit, Anay</option>
              <option value="980">Purohit, Vijendra</option>
              <option value="510">Rajesh, Karthik</option>
              <option value="483">Rekepalli, Reetu</option>
              <option value="476">Rekepalli, Reiyuan</option>
              <option value="709">Reyes, LuAnna</option>
              <option value="707">Reyes, Luke</option>
              <option value="1207">Rios, Amanda</option>
              <option value="1192">Rios, Esai</option>
              <option value="1243">Rios, Luciana</option>
              <option value="745">Robinson, Nick</option>
              <option value="737">Robinson, Rohan</option>
              <option value="637">Runde, James</option>
              <option value="639">Runde, Katie</option>
              <option value="587">Rutherford, Alexander</option>
              <option value="647">Rutherford, Katherine</option>
              <option value="497">Rutherford, Kendal</option>
              <option value="1140">Rutherford, Kendal</option>
              <option value="1126">Rutherford, Kendal</option>
              <option value="897">Rutherford, Kendal</option>
              <option value="898">Rutherford, Matthew</option>
              <option value="522">Rutherford, Matthew</option>
              <option value="924">Saldanha, Claire</option>
              <option value="1161">Saldanha, Eva</option>
              <option value="935">Saldanha, Mithila</option>
              <option value="516">Saquing, Gabe</option>
              <option value="588">Saquing, Michele</option>
              <option value="479">Savage, Collin</option>
              <option value="613">Savage, Henri</option>
              <option value="640">Savage, Meghan</option>
              <option value="581">Savage, Robert</option>
              <option value="558">Schmid, Ben</option>
              <option value="491">Schmid, Natalie</option>
              <option value="635">Schmid, Tarisa</option>
              <option value="692">Schroeder, Adam</option>
              <option value="524">Schroeder, Elliot</option>
              <option value="543">Schroeder, Erin</option>
              <option value="766">Shan, Gordon</option>
              <option value="790">Shan, Honggang</option>
              <option value="925">Shipley, Oliver</option>
              <option value="622">Shuman, Frank</option>
              <option value="853">Shuman, Luca</option>
              <option value="649">Shuman, Natalie</option>
              <option value="498">Shuman, Zan</option>
              <option value="580">Siddamshetti, Shriyan</option>
              <option value="525">Siddamshetti, Vamshi</option>
              <option value="926">Sides, Bowie</option>
              <option value="936">Sides, Todd</option>
              <option value="511">Singh, Shaant</option>
              <option value="711">Singh, Surinder</option>
              <option value="494">Singh, Suvaan</option>
              <option value="899">Slonsky, Henry</option>
              <option value="582">Slonsky, Keanu</option>
              <option value="583">Slonsky, Kyle</option>
              <option value="591">Slonsky, Yasemin</option>
              <option value="609">SlonskyDeleted, HenryDeleted</option>
              <option value="646">Smits, Carter</option>
              <option value="648">Smits, Cory</option>
              <option value="900">Smits, Cory</option>
              <option value="815">Smits, Dalton</option>
              <option value="816">Smits, Turner</option>
              <option value="551">Solis, Grace</option>
              <option value="687">Solis, Thuy</option>
              <option value="538">Soni, Randhir</option>
              <option value="607">Soni, Shashwat</option>
              <option value="1208">Staffield, Brittany</option>
              <option value="629">Stappenbeck, Augusten</option>
              <option value="638">Stappenbeck, Charlotte</option>
              <option value="616">Stappenbeck, Steve</option>
              <option value="1263">Stubblefield, Joel</option>
              <option value="1262">Stubblefield, Will</option>
              <option value="503">Su, James</option>
              <option value="623">Su, Liehao</option>
              <option value="477">Su, Lisa</option>
              <option value="1162">Sujan, Jaxson</option>
              <option value="1163">Sujan, Kira</option>
              <option value="1077">Sujan, Mav</option>
              <option value="485">Sunwoo, Dam</option>
              <option value="526">Sunwoo, Jason</option>
              <option value="1066">Susannah Benton, Susannah</option>
              <option value="576">Susanto, Elisha</option>
              <option value="995">Swantner, Albert</option>
              <option value="990">Swantner, Elliott</option>
              <option value="991">Swantner, Everett</option>
              <option value="992">Swenson, Jack</option>
              <option value="996">Swenson, Lindsey</option>
              <option value="1089">Swenson, Matt</option>
              <option value="1271">Swenson.MatthewJ@gmail.com, Matthew S</option>
              <option value="1081">Tabie, Logan</option>
              <option value="1085">Tabie, Mike</option>
              <option value="835">Tadi, Krishna</option>
              <option value="817">Tadi, Satvik</option>
              <option value="492">Timperley, Cinda</option>
              <option value="916">Tiwari, Anuj</option>
              <option value="689">Tiwari, Leslie</option>
              <option value="671">Tiwari, Mila</option>
              <option value="504">Torres, Maxwell</option>
              <option value="554">Trad, Charles  Jr.</option>
              <option value="579">Trad, Lucas</option>
              <option value="531">Trad, Megan</option>
              <option value="624">Tu, Fiona</option>
              <option value="854">Valencia Marshall, Angel</option>
              <option value="710">Velasquez, Lynda</option>
              <option value="1248">Velazquez Martinez, Francisco</option>
              <option value="1244">VelazquezEscorza, Diego Emilio</option>
              <option value="1264">Vital, Jessie</option>
              <option value="791">Walker, Annie</option>
              <option value="878">Walker, Josh</option>
              <option value="767">Walker, Owen</option>
              <option value="768">Walker, Sophia</option>
              <option value="847">Wallace, Audrey</option>
              <option value="850">Wallace, Lily</option>
              <option value="848">Wallace, Matthew</option>
              <option value="842">Wallace, Tristan</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1220">Westphal, Milo</option>
              <option value="1221">Westphal, Oliver</option>
              <option value="1209">Whittington, Aric</option>
              <option value="1193">Whittington, Rowan</option>
              <option value="627">Workman, Chip  IV</option>
              <option value="625">Workman, Logan</option>
              <option value="998">Yang, Neil</option>
              <option value="769">Yao, Eden</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Payment Processor
            </label>
          </td>
          <td>
            <select name="OP544211" tabindex="640" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="begins with">Begins With</option>
              <option value="contains">Contains</option>
              <option value="ends with">Ends With</option>
              <option value="between">Between</option>
              <option value="=">=</option>
              <option value="&lt;&gt;">Not Equal</option>
              <option value="&lt;">&lt;</option>
              <option value="&lt;=">&lt;=</option>
              <option value="&gt;">&gt;</option>
              <option value="&gt;=">&gt;=</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY544211" name="QUERY544211" tabindex="650" size="50" disabled="" style="visibility: hidden" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="">
            <span id="QAND544211" class="entrypostscript" style="visibility: hidden">...and...</span>
            <input type="text" onkeydown="submitSearch();" class="form-control" id="QUERY2544211" name="QUERY2544211" tabindex="660" size="50" disabled="" style="visibility: hidden" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="">
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            In Person Deposit
            </label>
          </td>
          <td>
            <select name="OP5442211" tabindex="670" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="=">Equal</option>
              <option value="&lt;&gt;">Not Equal</option>
            </select>
          </td>
          <td>
            <span class="text-left" id="SPAN5442211" name="SPAN5442211">
            <span style="white-space: nowrap;"><input type="radio" id="QUERY5442211" name="QUERY5442211" tabindex="680" disabled="" onclick="easyFieldExit(this)" onkeydown="submitSearch();" style="visibility: hidden" value="Y"><span id="QTEXT5442211" style="visibility: hidden">Yes</span></span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="QUERY5442211" name="QUERY5442211" tabindex="680" disabled="" onclick="easyFieldExit(this)" onkeydown="submitSearch();" style="visibility: hidden" value="N"><span id="QTEXT5442211" style="visibility: hidden">No</span></span>
            </span>
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding:0px; margin:0px;">
            <hr style="padding:0px; margin:0px;">
          </td>
        </tr>
        <tr>
          <td class="text-right">
            <label class="control-label">
            Booth Payment Type
            </label>
          </td>
          <td>
            <select name="OP54423115" tabindex="690" onchange="TestQueryOperator(this)" onkeydown="submitSearch();" class="form-control" size="1" title="How" this="" column="" should="" be="" compared="" to="" the="" value="" you="" provide="">
              <option selected="" value=""> </option>
              <option value="in">Matches</option>
              <option value="not in">Not One Of</option>
              <option value="is null">Is Empty</option>
              <option value="not null">Not Empty</option>
            </select>
          </td>
          <td>
            <select id="QUERY54423115" name="QUERY54423115" class="form-control" onblur="TestRegExp(this,'','')" tabindex="700" title="" onkeydown="submitSearch();" disabled="" style="visibility: hidden" multiple="" size="3">
              <option value="Cash">Cash</option>
              <option value="Check">Check</option>
              <option value="Card">Card</option>
            </select>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs19516">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="710" id="BUTTON27" type="submit" name="show" title="Show the rows that match the selection criteria entered above" value="Show" onclick="buttonlink(this);"><script>function submitSearch(){if (window.event.keyCode==13)  {    var button = document.getElementById('BUTTON27');    buttonlink(button);  }}</script>
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="OP54399147">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>