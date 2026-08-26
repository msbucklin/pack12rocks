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
<script src="ckeditor/ckeditor.js?v=2"></script><style>.cke{visibility:hidden;}</style>
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
  <input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="291">
  <input type="hidden" name="Form_ID" id="Form_ID" value="270">
  <input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
  <input type="hidden" name="Pass" id="Pass" value="1">
  <input type="hidden" name="Stack" id="Stack" value="1">
  <input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
  <input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
  <input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
  <input type="hidden" name="Report_Format" id="Report_Format" value="">
  <input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=291&amp;Stack=1">
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
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=291">Change My Password</a></li>
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=291">Configure My Quick Menu</a></li>
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=291">Bookmark This Site</a></li>
    </ul>
  </div>
  <div id="helpmenu" class="navtools">
    <ul class="list-group">
    <li class="list-group-item"><a href="Help.aspx?ID=25" target="_blank">User Guide</a></li>
    <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
    <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=291">TroopWebHost User Forum</a></li>
    <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=291">Enhancement Requests</a></li>
    <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=291">My Support Tickets</a></li>
    <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=291">My Unit's Support Tickets</a></li>
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
          The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormList.aspx?Menu_Item_ID=291&amp;Stack=1&amp;Application_ID=2840
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
  Add &amp; Update Announcements
  </p>
  <input type="hidden" name="FK" id="FK" value="0">
  <input type="hidden" name="ID" id="ID" value="0">
  <div class="new-row" id="fs7352">
    <div class="container-fluid container-flex">
      <div class="center-block " style="max-width: 740px; min-width: 200px;">
        <p>
        Use this page to create announcements that will be displayed on your Home page and in the automated electronic newsletter while they are in effect.  For more information, select <b>User Guide</b> from the <b>Help</b> menu above.
        </p>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs793">
    <div class="container-fluid container-flex">
      <input type="hidden" name="OP39031" id="OP39031" value="">
      <input type="hidden" name="OP3904127" id="OP3904127" value="">
      <input type="hidden" name="OP390516" id="OP390516" value="">
      <input type="hidden" name="OP390616" id="OP390616" value="">
      <input type="hidden" name="OP5502611" id="OP5502611" value="">
      <input type="hidden" name="OP5502711" id="OP5502711" value="">
      <input type="hidden" name="OP5502811" id="OP5502811" value="">
    </div>
  </div>
  <div class="new-row" id="fs794">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON8" type="button" name="query" title="Modify the selection criteria for this list" value="Query" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON9" type="button" name="add" title="Add a new row to this table" value="Add a New Item" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=0&amp;Stack=2','');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs795">
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
</span></div>
</td>
</tr>
          <tr>
            <td>
              <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid795">
                <thead>
                <tr>
                  <input type="hidden" name="ROWCOUNTCB795" id="ROWCOUNTCB795" value="93">
                  <th class="unsortable">
                  &nbsp;
                  </th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Title<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Text<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Start<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">End<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Website<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Newsletter<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">Mobile App<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                  <th class="unsortable">
                  &nbsp;
                  </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="text-center " id="TD795ROW0DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=96&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW0DATA3911">
                    Natural Bridge Caverns – Next Saturday
                  </td>
                  <td class="text-center " id="TD795ROW0DATA3912">
                    <p>Just a reminder that our <b>Pack 12 trip to Natural Bridge Caverns is next Saturday, July 18!</b></p>

<p>If you plan on attending, <b>please RSVP as soon as possible</b> on the Pack 12 calendar so we can finalize our plans and make sure we have an accurate headcount.</p>

<p>We’re looking forward to a fun day exploring the caverns with everyone. See you there!</p>
                  </td>
                  <td class="text-center " id="TD795ROW0DATA3913">
                    05/30/2026
                  </td>
                  <td class="text-center " id="TD795ROW0DATA3914">
                    07/12/2026
                  </td>
                  <td class="text-center " id="TD795ROW0DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW0DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW0DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW0DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=96&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW1DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=95&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW1DATA3911">
                    Announcements
                  </td>
                  <td class="text-center " id="TD795ROW1DATA3912">
                    <p>The end of the school year is finally upon us… and your scouts are just about ready to level up to their next rank! We’ve got a fun couple of weeks ahead as we wrap up another great scouting year together.</p>

<hr>
<h2><b>This Saturday - Graduation</b></h2>

<p>Pack Graduation will be held on Saturday, May 16th.</p>

<p>This is always one of our favorite events of the year as scouts celebrate all the hard work they’ve put in and officially move up to their next rank.</p>

<hr>
<h2><b>May 30th - Raingutter Regatta</b></h2>

<p>Scouts will build and race boats down water-filled lanes using only air from a straw, plus we’ll have side games, lunch, and s’mores. <strong>Please RSVP</strong> on the Pack 12 calendar so we can plan accordingly for supplies, food, and activities.</p>

<hr>
<h1><br>
<b>Pack 12 Needs You</b></h1>

<p>Pack 12 can only be successful when parents and families jump in to help. Cub Scouts is a parent-led program, and we truly need your support to make these events, meetings, campouts, and activities possible.</p>

<p>That doesn’t mean everyone has to take on a huge role. Sometimes it’s helping run a game, organizing an activity, assisting at an event, or simply lending a hand where needed. When lots of families help a little, it makes a huge difference.</p>

<p>We’d also encourage parents to consider joining the committee group or volunteering to chair a committee. You do not have to figure it all out on your own—we promise there is plenty of support, and the group genuinely has a lot of fun working together.</p>

<p>If you’re willing to help in any way—big or small—please reach out to any Pack 12 leader. We’d love to have you involved.</p>
                  </td>
                  <td class="text-center " id="TD795ROW1DATA3913">
                    05/02/2026
                  </td>
                  <td class="text-center " id="TD795ROW1DATA3914">
                    05/23/2026
                  </td>
                  <td class="text-center " id="TD795ROW1DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW1DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW1DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW1DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=95&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW2DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=94&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW2DATA3911">
                    Pack Announcements
                  </td>
                  <td class="text-center " id="TD795ROW2DATA3912">
                    <p><b>Rocket Derby – May 9th</b></p>

<p>Rocket Derby is coming up on May 9th. Kits have&nbsp;be given to your den leaders. Scouts will build and decorate their own rockets, then launch them to see whose flies the highest and fastest!</p>

<hr>
<p><b>Graduation – May 16th</b></p>

<p>Pack Graduation will be held on May 16th.</p>

<p>All rank requirements must be completed by the week of May 4th.</p>

<hr>
<p><b>Summer Activities Coming Soon</b></p>

<p>This year, we are&nbsp;planning two summer activities—one in June and one in July. More details to come!</p>

<hr>
<p><b>Get Involved</b></p>

<p>We’d love for parents or guardians to help out in some way—big or small. It’s fun, fulfilling, and a great group of people to spend time with. If you’re interested in any role—big or small, long-term or short-term—please reach out to any Pack 12 leader. We’d be happy to chat and see what might be a good fit.</p>
                  </td>
                  <td class="text-center " id="TD795ROW2DATA3913">
                    04/11/2026
                  </td>
                  <td class="text-center " id="TD795ROW2DATA3914">
                    04/28/2026
                  </td>
                  <td class="text-center " id="TD795ROW2DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW2DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW2DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW2DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=94&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW3DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=93&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW3DATA3911">
                    Pack Volunteer Opportunities
                  </td>
                  <td class="text-center " id="TD795ROW3DATA3912">
                    <p>We would like to see every family volunteer in some way throughout the year. There are lots of opportunities, both large and small, so surely one fits your abilities and interests! Please let us know if you have any interest helping out with one or more of the volunteer opportunities listed. If you have any questions, please contact our&nbsp;<a href="mailto:committeechair.Pack12Austin@twhcs.email">Committee Chair</a>&nbsp;or&nbsp;<a href="mailto:cubmaster.Pack12Austin@twhcs.email">Cubmaster</a>.</p>

<h3><span style="font-size:18px;"><strong>Primary Volunteer Needs&nbsp;(click each for more info)</strong></span></h3>

<ul>
	<li><a href="https://docs.google.com/document/d/1WWvLHQqBFrRBuGL6bvguWbkCGGYB1DB8vgUQgsvhm7c/edit?usp=drive_link" target="_blank">Membership Chair</a></li>
	<li><a href="https://docs.google.com/document/d/127MKCX0vk3Bpp8_dKsCZoOyFPhwojieacPsN3uER_3Y/edit?usp=drive_link" target="_blank">Fundraising Chair</a></li>
	<li><a href="https://docs.google.com/document/d/1tAhaLJXIkAOFqJhYMYouSD4J8ORgVS-s2cv8cqSkiRE/edit?usp=drive_link">Webmaster</a></li>
</ul>

<h3><span style="font-size:18px;"><strong>Curious? Come Sit In on a Committee Meeting</strong></span></h3>

<p>Not ready to commit to a role just yet? No problem! Parents are always welcome to attend our monthly Pack Committee Meetings to see what they’re all about.</p>

<p>It’s a great way to get a feel for how the Pack runs, learn what’s coming up, and share your ideas. Come hang out, ask questions, or just listen in — no pressure to take on a job long-term!</p>
                  </td>
                  <td class="text-center " id="TD795ROW3DATA3913">
                    02/07/2026
                  </td>
                  <td class="text-center " id="TD795ROW3DATA3914">
                    02/28/2026
                  </td>
                  <td class="text-center " id="TD795ROW3DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW3DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW3DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW3DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=93&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW4DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=92&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW4DATA3911">
                    Pinewood Derby 2026
                  </td>
                  <td class="text-center " id="TD795ROW4DATA3912">
                    <p dir="ltr">Pinewood Derby is one month away on Saturday, Feb 7!<br>
<br>
<strong>Kits</strong></p>

<p dir="ltr">Kits were distributed at the December pack meeting. If you still need a kit, please reach out to Preston Fick at prestonfick@gmail.com or 512 658 0793.</p>

<p dir="ltr"><b id="docs-internal-guid-f5747a27-7fff-e18c-6c3b-5419563ed82f">Pinewood Derby Rules</b></p>

<p dir="ltr">Please also review the Office Rules for the Pinewood Derby race to ensure you qualify to win a Trophy or Medal.&nbsp;<a href="https://docs.google.com/document/d/1qRg3FRNaPmMwVIWSRl5jNInD4mgzp2uZUGzQ0rxbol8/edit?tab=t.0#heading=h.bfcaxcf66qfq">Pack 12 - 2026 Pinewood Derby Rules</a></p>

<p dir="ltr"><strong>Block Cutting</strong></p>

<p dir="ltr">For those scouts that are not doing block cutting as a den, or don't have access to woodworking tools two block cutting sessions will be held:</p>

<ul dir="ltr">
	<li>Sat Jan 17 10am-12pm</li>
	<li>Sun Jan 18 10am-12pm</li>
	<li>Mon Jan 19 10am-12pm</li>
</ul>

<p dir="ltr">11004 La Roca Cv<br>
Austin, TX 78739</p>

<p dir="ltr"><a href="https://www.signupgenius.com/go/9040E4DAFAA23A3F85-61580834-2026#/">Sign up for a slot</a><br>
<br>
<strong>Tips &amp; Tricks</strong></p>

<p dir="ltr">Mark Rober, a popular YouTuber, engineer, inventor, and educator has a great video on YouTube on how best to build a winning Pinewood Derby Car. &nbsp;Highly recommended to watch his video as you build your car.&nbsp;<b id="docs-internal-guid-7a836ff1-7fff-1dc3-0d4d-9835dfcccb3c"><a href="https://www.youtube.com/watch?v=-RjJtO51ykY">https://www.youtube.com/watch?v=-RjJtO51ykY</a> </b></p>

<p dir="ltr"><strong>Trophies, Awards &amp; Patches</strong></p>

<p dir="ltr">All scouts entering the Pinewood Derby race will receive a Patch from Pack 12.<br>
<br>
Trophies will be awarded for the <strong>Overall</strong> 1st place through &nbsp;3rd place winners based on the fastest cars across all entries.<br>
<br>
Trophies will also be awarded for each <strong>Rank</strong>, 1st place through 3rd place, based on the fastest cars in that rank.<br>
<br>
Scouts can also participate in a <strong>Design Category</strong> to win a medal, to be voted on by select judges.<br>
<br>
Design Award Categories for this year includes:</p>

<ul dir="ltr">
	<li>Best Scout Theme</li>
	<li>Most Patriotic</li>
	<li>Best Texas Theme</li>
	<li>Best Overall Paint Job</li>
	<li>Best Use of Flames</li>
	<li>Most Creative Design</li>
	<li>Best Fixer-Upper</li>
</ul>

<p><strong>Registration, Inspection, and Weigh-In</strong></p>

<p>All Pinewood Derby cars <b>must be registered in advance</b> and <b>submitted for inspection and weigh-in</b> in order to compete.</p>

<p>This year’s inspection and weigh-in will take place on <b>February 4 and 5 from 6:00–8:00 PM</b>.</p>

<p><a href="https://www.signupgenius.com/go/9040E4DAFAA23A3F85-61580894-2026">Sign up for a slot</a></p>

<p><strong>Race Day</strong></p>

<p>The race will take place Saturday, February 7 2026 from 3pm to 6pm at Clayton Elementary School. &nbsp;This is a class-A event.</p>

<p dir="ltr">We will have first responders on site, music, and other fun activities to keep our Scouts busy.</p>

<p dir="ltr">Pizza Rolls and Drinks will be served at the event. &nbsp;It is recommended that you bring Water Bottles and/or Cups for drinks served at the event.</p>

<p dir="ltr">We also recommend that you bring chairs (e.g. Folding/Camping chairs) to the event to guarantee a seat for your family.</p>

<p dir="ltr"><strong>Parent Volunteers Needed</strong></p>

<p dir="ltr"><meta charset="UTF-8">As you all know, Scouts and the&nbsp;Pinewood&nbsp;Derby event is a volunteer led program, run by Scout Leaders and Parents.&nbsp; We are looking for Parent Volunteers to help and would appreciate your participation. We need help on the days of Block cutting, Inspection and Race Day. If you are interested in participating in a role, please signup&nbsp;below:<br>
<br>
<a href="https://www.signupgenius.com/go/9040E4DAFAA23A3F85-61580935-2026#/">Sign Up to Volunteer</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW4DATA3913">
                    01/10/2026
                  </td>
                  <td class="text-center " id="TD795ROW4DATA3914">
                    02/06/2026
                  </td>
                  <td class="text-center " id="TD795ROW4DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW4DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW4DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW4DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=92&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW5DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=91&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW5DATA3911">
                    Cub Winter Festival (Council Event)
                  </td>
                  <td class="text-center " id="TD795ROW5DATA3912">
                    <p style="text-align:center"><img alt="" height="71" src="https://ogo.blob.core.windows.net/cspack12austin/Capitol_Area_Council_2025315132620106323.jpg" width="260"></p>

<p>Bundle up and join us for a frosty day of winter-themed fun, discovery, and adventure! Cub Scouts and their families are invited to explore the wonders of winter in this exciting, hands-on event.</p>

<p>Cool Activities Include:</p>

<ul>
	<li>Make Snow (yes, really!)</li>
	<li>Discover the secrets of Winter Animals and Hibernation</li>
	<li>Escape the past in the thrilling Ice Age Escape challenge</li>
	<li>Create your own Snowstorm and explore weather wonders</li>
	<li>Dive into an Arctic Animals Experiment to learn how they survive the cold</li>
	<li>Practice your skills with a BB fun shoot</li>
</ul>

<p><b>When:&nbsp;</b>Saturday, January 17, 2026&nbsp;from 8:30am-4:00pm</p>

<p><b>Where:</b>&nbsp;Smiling V Scout Ranch,&nbsp;250 County Rd 286 Spur, Liberty Hill, TX 78642</p>

<p><strong>More info:</strong> Register at:&nbsp;<a href="https://scoutingevent.com/564-94450" target="_blank">https://scoutingevent.com/564-94450</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW5DATA3913">
                    11/17/2025
                  </td>
                  <td class="text-center " id="TD795ROW5DATA3914">
                    01/17/2026
                  </td>
                  <td class="text-center " id="TD795ROW5DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW5DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW5DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW5DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=91&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW6DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=89&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW6DATA3911">
                    Scout Night with the Texas Stars (Council Event)
                  </td>
                  <td class="text-center " id="TD795ROW6DATA3912">
                    <p style="text-align:center"><img alt="" height="200" src="https://ogo.blob.core.windows.net/cspack12austin/TexasStarsIce_20259291259315003416.jpg" width="300"></p>

<p>Scout Night with the Texas Stars&nbsp;is set for December 13, as they face the San Jose Barracudas! <img alt="??" height="16" referrerpolicy="origin-when-cross-origin" src="https://static.xx.fbcdn.net/images/emoji.php/v9/tf8/2/16/1f3d2.png" width="16"></p>

<p>After the game, Scouts can roll out their sleeping bags for an overnight campout on the ice and enjoy a Pizza Party outside Section 115. <img alt="??" height="16" referrerpolicy="origin-when-cross-origin" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t4a/2/16/1f355.png" width="16"></p>

<p>Register: <a attributionsrc="/privacy_sandbox/comet/register/source/?xt=AZW71kQBBGqWEzQ2riehhc7tW5gMXkejInApvHFIF_HoSc-MsqFMnRrSWaljctcPwJAP0ROc-xah9nHmo5EjtCy_eAb82c0aWbFM1ApdVO4W4XYvbHYIzdulfCuay8GwYrUBId-cqOFV0LHKVTNXLN2reodJ0ppbFv12rORfILi4uhsHVqiHPbjd3ua07DGIc2muziT2rmj6M5PtyhmoiZ_HEv1-PShCjXb86WsThZ5gSOrTUgyZQAYk1yZhMLuci8YdzsyNvX6fTrXjhUJ_Mi1B6axefeD6rCj_vgDYJ9z4jCsPslDnX5UrlwkJk0y4prjWn2V60WMv_-zWP01KoQW6hPVcjAi4tvN9p7UA6WglQal26Y8LBt0zFiWZ3KpDqcVtAwzi1kFzdWAQr6utdxvpAWdKCEoqvgBw5CwYbCIjIUIYE44KfxnDj04wOivGz75bLQzFad29OiAoFtXvsyJ0wMB2iUX01Cq0h81o4hYaPYQYMezJK_AKsMC-oTJkgacu37PJQo_LNTfksrv15KQ7U5coGtbxy1qrUiAWuKoZzAEKvgLuQ47Bu2GpRoU47poTwEGKQkz1gtJr-VcJgtLZ0WmnISiEnULNzCtqqib5Y_B2KaeFCOtdJUXT51M37YWFOsUnz6LsWB_lDwkWsb50A8vQKNzl8SuS3Puh-Nm5CVMVXLUoffejxiqG3rfrHtaqlb6TTp4dCtSqfjg6rkYRz38fC7ZcuFwYMV_R1P4QulStqO2c_glLbKY1888h-NqWlQi9b4VHC5xHDe6RWnrhyihBhjJTKVUOLVwoxqR0RKwqxGtQhcvvpJV1XcgSSKEiEVGYDDMsV7YP14LVwhbYr1EQD8Pn7SbRpEbBOL0sPau7K0evdo0DWhRGMCw1SuzsTgIgRarE4eP3SIYJBkXS4fcnJFLaXlDZAL3WG-zg1MjwmGXgLjDC-KxsNMr348S_88Hzm27MRqtYmTaFXd-ADMgbsC8Z8eiXzJW4S7lkz8aqHnnAFIIwF4jrG1OX1z2Ah0tFNIWI01rw-3EZCEqdWW2fl26T13_RQRwzI-g_OjPdoqoCEPp6DTGtsjE8fartNxl7KW07GqBsk1fhg3yDZyRyj6Cww9sK1ACDhpdA9CuLpT-9Yv17iJ3rqx5fQoO5XCn1dHZtl31phN1WBufg110MgzhMaJsD94qmpgVfGHjS5FXAS2EDMHr_dMmso38fiqFKzEfSPDxnTd5IdwBbZHS1Faafc_YQhi8jxz45QUlc4zNO6IKPNO24Aqqdsa0SvcE95AGlqLtx_5a76Bqm9btFour_YZphE1YMfU_nAI4yR5UIwnMHytdJnCnAD21VDH6e2rPGv6YGStFE5jd-vdWc-JtrHUll09MMo_H0KfQkIfxkEEBwiSqS3gjZ_4hou7-E3Hr0oGi6BqfutjHyjjao0dbyxWXc1mG6VibJIbCMutU3P5j89-nmgEQhZyrM1MdPVtr4F-MqMXCcGOOsC4o7dAUI0UhNAIL1YUNguvvlZduXjWCU6XYFlTGvnR8MTo8hh0JPlc6FgPXdmLk6cCJy-RM5PR1QJuZbmdPV1q6nyFoMh7NHlIOqADRpKD5wCrhgIHPLiScxG_oMC3GfQqybH8Xk7Qw6TKtJnnalIVubPOZm4gNjJeg_CpYOhOoAPm9RP1ERQyYJhORlCuArXoexE4prLmkFo_rAeMiZAJxfJOJn2LbLR9V_sDrXKHEWWUQO3qlET98eXDQ-jATGBL1KUNLUiNU91T8GeDacergvhXcSuqs9Q-_Lbgx2WU-bd4s0Ur-Yy5mxbiWzRurET8sVP_Yu2I9u7S-pRYGQ2jkzfsXoCqZvH3Svk31XgP9l2rKpjNrDhto6tHCDDGp0GkPRkrt09VCwlY2rgcxNoV8zLam04p9EK7m6hy-jmxGDoL3h_vLX9F_ywFYSwWWO0PlwZJoRlFdKReV-V7L46-sHnwlSFpojSK22OCXU0RD9sLTq7LfbLFLJA0N88BH9d2VSlOS8Fh8caYVI0C4gtR80Bj1ajR0unpMToH2NbcnLs81syQTflsA9FDh05Hpis7I2Is2UzlSkHeRk1_JOKMbKFNjgBPrVSI4Uh-93LwHzWaDfeKKouhfapwt2zA0Uj4wADislO8h6e0jKUcTLnzvNXRc7mE1-UCBExNci9vVcFmmORvUVgAUtImG-Jz8a2-Z_pnairiU8KrVeNHOLImliHi4BbIMratAW-DmCWnPeoSvYULIqSthnc0bG1ClRo4zjon3cfqL8nJS5jaDSUxnXiygP1E4VoOIdxV6P0WNsxIpT_7petCNONkAHsKtkclwGE4mKEqHTPZHE6MLxRLfNbuAj8Y6qZTtmrBGUuMQpVzwleSK5HKyG70PjDVvHNsBwmuNDcVh4lBS7fTJiwST6dF8mVcUMu1WRVM3MeYpPkfFsrmI1Z4kxQNhVsJ05vw0mHKw31SwtrByqk-2QNhGwPfixaMtt1RqHCVtPJKwolEobrODK_T1k2xZ6o0tBt9HWvzn5Z1vieiJtu6E9Fr2Avxqnm2IyaKYbIIhu-BLO0JejApK71Qw5VHj98R67WI23-Xrvclsz-EMWLFURsIwlH2-Bhg9NnISfVRmsjxmNPSdlkUhKWvnJznzX8nAKndoMCGNMxnbLmoJzTPdydndLsYaOMtGXurlwid6kGywkPA20HDi1OA7FAs1X02n5MF2pyCL1wqQr16V4a2TaEUA87aazyk2TxN48NPS_OGsiYe3e8AW0wKhDgEAAZ0sYvtgYzCPqllKdtJqDmHUSq25sUKKPB53PuyDU4dzPpQApxNzWkcoh43qPPegOX95cjFEwJTf1jQ3ee2WKvHZ_4z4_qaxc6l_pgQecgrVVq4kZoWGBXtrVDWjwtTP-fYLX" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.gofevo.com%2Fevent%2FScoutingNightTexas%3Ffbclid%3DIwZXh0bgNhZW0CMTAAYnJpZBExbzRCSmRSemYwQXMxQVF5UwEeix8vVJM3bw5swFg4crmYqPORu_bfAbP6rj04v5Zu9Cl_AHedEyulOxc8448_aem_P3uXBzuCEC8UCgxOBErEFw&amp;h=AT0AgJSRvZxeWJU99l_e7l1fgtJuM0qyM4e0Xm4K7Md-CFJS44liNGhHRa5cQ-08uXmLbU6mpts8UaZtIaz-lJkF26Sb526gPk4n4nJ1k48-rng8YecHROE0o0AsnYQThv1vPYugxMC436M9RG0XTo0i7-WyF3FcQe0&amp;__tn__=-UK-y-R&amp;c[0]=AT3k2NIRICbtuzbmvEN1rYuwYZWU-nnEup-e4OfadyBt_1_0_CxnFFXSksCc35tM3pMWZb61EBv7-V7lUTmAsDA-oo-vqxJWXS0gruiYLl_rAPPnWItEAdvCiRkm4bNrlx4PWD9hRqcP-ktcLMpzZ_9epXwrGGceUcA8DZRd_bZA9uKdipSGIrxqZ_08UEeGzp27s-SfBEXAiHvEWKAJ7HUldWiPYa5iWMR3fywL-KEHzk2iZJgRHops" rel="nofollow noreferrer" role="link" tabindex="0" target="_blank">https://www.gofevo.com/event/ScoutingNightTexas</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW6DATA3913">
                    09/29/2025
                  </td>
                  <td class="text-center " id="TD795ROW6DATA3914">
                    12/13/2025
                  </td>
                  <td class="text-center " id="TD795ROW6DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW6DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW6DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW6DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=89&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW7DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=88&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW7DATA3911">
                    Cub-O (Council Event)
                  </td>
                  <td class="text-center " id="TD795ROW7DATA3912">
                    <p><meta charset="UTF-8"></p>

<p style="text-align:center"><img alt="" height="71" src="https://ogo.blob.core.windows.net/cspack12austin/Capitol_Area_Council_2025315132620106323.jpg" width="260"></p>

<p>Cub-O is a fun orienteering event where Scouts learn basic map and compass skills and compete for the fastest time in their age group following a point-to-point orienteering course to find up to 10 control points on the property. There is also a Maze-O Orienteering course near the check-in area where scouts are challenged to follow a map to visit the controls inside the maze.</p>

<p>Cub-O is an orienteering event for all ages. Lions, Tigers, Cub Scouts, Webelos, AOL, leaders, and parents are invited. Separate awards for each age group.&nbsp;</p>

<p><b>When:&nbsp;</b>Saturday, November 22, 2025 from 9am-2:00pm</p>

<p><b>Where:</b>&nbsp;Northeast Metro Park, 15500 Sun Light Near Way, Pflugerville, TX 78660</p>

<p><b>More Info:&nbsp;</b>Register:&nbsp;<a href="https://scoutingevent.com/564-102781">https://scoutingevent.com/564-102781</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW7DATA3913">
                    09/11/2025
                  </td>
                  <td class="text-center " id="TD795ROW7DATA3914">
                    11/22/2025
                  </td>
                  <td class="text-center " id="TD795ROW7DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW7DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW7DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW7DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=88&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW8DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=87&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW8DATA3911">
                    Scouterday Speedfest (Council Event)
                  </td>
                  <td class="text-center " id="TD795ROW8DATA3912">
                    <p><meta charset="UTF-8"></p>

<p style="text-align:center"><img alt="" height="71" src="https://ogo.blob.core.windows.net/cspack12austin/Capitol_Area_Council_2025315132620106323.jpg" width="260"></p>

<p>This special event is open to anyone who just joined Scouting, is interested in joining Scouting, or has been in Scouting for a while. In other words, EVERYONE is welcome.</p>

<p>From Pinewood Derby to pro-level race cars, there’s fun for the whole family!</p>

<p><b>When:</b>&nbsp;Saturday, November 8, 2025 from 10am-2:00pm</p>

<p><b>Where:&nbsp;</b>Circuit of the Americas, 9201 Circuit of the Americas Blvd, Del Valle, 78617</p>

<p><b>More Info:&nbsp;</b><a href="https://www.capitolareascouting.org/activities/speedfest/" target="_blank">https://www.capitolareascouting.org/activities/speedfest/</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW8DATA3913">
                    09/11/2025
                  </td>
                  <td class="text-center " id="TD795ROW8DATA3914">
                    11/08/2025
                  </td>
                  <td class="text-center " id="TD795ROW8DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW8DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW8DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW8DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=87&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW9DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=90&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW9DATA3911">
                    Baldwin Campus Cleanup Service Project
                  </td>
                  <td class="text-center " id="TD795ROW9DATA3912">
                    <p>Join us for our fall&nbsp;service project as we help clean up the Baldwin Elementary campus following their fall festival. This is a great opportunity to give back to our community and support a local school.</p>

<p>We’ll be collecting trash, sweeping, and tidying up the grounds — so please bring supplies such as trash bags, gloves, brooms, dustpans, and leaf blowers if you have them. Also remember to wear your class B's, sunscreen, a hat, and bring plenty of water to stay comfortable while we work.<br>
<br>
Participating in this service project will meet the community service requirement necessary for each Cub Scout rank.</p>

<ul>
	<li>Lions - King of the Jungle</li>
	<li>Tigers - Team Tiger</li>
	<li>Wolves - Council Fire</li>
	<li>Bears - Paws for Action</li>
	<li>Webelos - My Community</li>
	<li>AOL - Citizenship</li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW9DATA3913">
                    10/06/2025
                  </td>
                  <td class="text-center " id="TD795ROW9DATA3914">
                    10/27/2025
                  </td>
                  <td class="text-center " id="TD795ROW9DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW9DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW9DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW9DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=90&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW10DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=86&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW10DATA3911">
                    Jamboree-on-the-Internet (JOTI) and Jamboree On The Air (Council Event)
                  </td>
                  <td class="text-center " id="TD795ROW10DATA3912">
                    <p><img alt="" height="71" src="https://ogo.blob.core.windows.net/cspack12austin/Capitol_Area_Council_2025315132620106323.jpg" width="260"><meta charset="UTF-8"></p>

<p>Every year, Scouts around the world gather for a weekend gathering to experience cultural connections called Jamboree on the Air - Jamboree on the Internet (JOTA-JOTI). This year’s global JOTA-JOTI 2025 theme is The World Shaped by Youth. The Capitol Area Council invites you to get your JOTA-JOTI Passport to International Spirit and open up a world of international Scouting! Along the way, earn patches and awards!&nbsp;</p>

<p><b>When:&nbsp;</b>October 18, 8:00am - 4:00pm</p>

<p><b>Where:&nbsp;</b>Frank Fickett Center, 12500 N Interstate Hwy 35, Austin, TX 78753</p>

<p><b>More Info/Register:</b>&nbsp;<a href="https://scoutingevent.com/564-94266">https://scoutingevent.com/564-94266</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW10DATA3913">
                    09/11/2025
                  </td>
                  <td class="text-center " id="TD795ROW10DATA3914">
                    10/18/2025
                  </td>
                  <td class="text-center " id="TD795ROW10DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW10DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW10DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW10DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=86&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW11DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="350" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=59&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW11DATA3911">
                    BSA Medical Forms Needed
                  </td>
                  <td class="text-center " id="TD795ROW11DATA3912">
                    <p style="text-align:center"><img alt="" height="157" src="https://ogo.blob.core.windows.net/cspack12austin/BSA-medical-form-for-cub-scouts-f-1_20248271413452528753.jpg" width="300"></p>

<p>It's that time of year again, Medical Form time!! (And the crowd goes mild.)</p>

<p>Each year, it's required that we update our records with new BSA Medical Forms for Cub Scouts and their family members who plan to attend any overnight activities (camp out, winter overnight, lock in, etc.). Even if you turned one in last year, we need all new forms submitted this year.</p>

<p>BSA Medical Forms can be found here:&nbsp;<a href="https://filestore.scouting.org/filestore/HealthSafety/pdf/680-001_AB.pdf" target="_blank">https://filestore.scouting.org/filestore/HealthSafety/pdf/680-001_AB.pdf</a></p>

<p>Couple of reminders:</p>

<ul>
	<li>BSA Medical Forms - Forms A, B1, and B2 are required. (DO NOT DO Form C)</li>
	<li>A current copy of a health insurance card also needs to accompany each set of forms</li>
	<li>A completed form WITH health insurance card bust be submitted for EVERY ONE&nbsp;who will attend an overnight activity. This includes parents, spouses, non-scout siblings, etc. E-V-E-R-Y-O-N-E</li>
	<li>Forms can be turned into your Den Leader or at a Pack Meeting (There is no electronic or email submission)</li>
</ul>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW11DATA3913">
                    09/06/2025
                  </td>
                  <td class="text-center " id="TD795ROW11DATA3914">
                    10/15/2025
                  </td>
                  <td class="text-center " id="TD795ROW11DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW11DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW11DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW11DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="360" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=59&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW12DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="370" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=60&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW12DATA3911">
                    Pack 12 Facebook Group
                  </td>
                  <td class="text-center " id="TD795ROW12DATA3912">
                    <p style="text-align:center"><img alt="" height="225" src="https://ogo.blob.core.windows.net/cspack12austin/P12_FB_20248271728151121849.jpg" width="300"></p>

<p>We use a private Pack 12 Facebook Group to facilitate updates to event plans, exchange information, and post photos from the various activities going on in the Pack.</p>

<p><meta charset="UTF-8"></p>

<p>The Pack 12 Facebook Group is limited to our registered <strong>scout’s parents and legal guardians only</strong>. (Sorry, but no grandparents, aunts/uncles, best friends, neighbor’s dogs, etc. may join the Facebook group.)</p>

<p>Request access here:&nbsp;<a href="https://www.facebook.com/groups/pack12rocks" target="_blank">https://www.facebook.com/groups/pack12rocks</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW12DATA3913">
                    09/06/2025
                  </td>
                  <td class="text-center " id="TD795ROW12DATA3914">
                    09/30/2025
                  </td>
                  <td class="text-center " id="TD795ROW12DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW12DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW12DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW12DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="380" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=60&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW13DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="390" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=80&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW13DATA3911">
                    2025-2026 Pack 12 Calendar of Events
                  </td>
                  <td class="text-center " id="TD795ROW13DATA3912">
                    <p style="text-align:center"><img alt="" height="250" src="https://ogo.blob.core.windows.net/cspack12austin/pack12logo_20255201311297499728.png" width="250"></p>

<p>Pack 12 is already gearing up for our 2025-2026 scouting year, and our complete Calendar of Events is here.&nbsp;From Pack Meetings to Pinewood Derby to camping trips, you'll find all the important dates you need to mark on your family calendars.</p>

<p>2025-2026 Calendar of Events:&nbsp;<a href="https://drive.google.com/file/d/1JP0uu1GfSiF48CohzcH6EY_1mypXjs98/view?usp=sharing" target="_blank">https://drive.google.com/file/d/1JP0uu1GfSiF48CohzcH6EY_1mypXjs98/view?usp=sharing</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW13DATA3913">
                    05/20/2025
                  </td>
                  <td class="text-center " id="TD795ROW13DATA3914">
                    09/30/2025
                  </td>
                  <td class="text-center " id="TD795ROW13DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW13DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW13DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW13DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="400" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=80&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW14DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="410" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=83&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW14DATA3911">
                    Cub Kite and Rocket Festival (Council Event)
                  </td>
                  <td class="text-center " id="TD795ROW14DATA3912">
                    <p style="text-align:center"><img alt="" height="71" src="https://ogo.blob.core.windows.net/cspack12austin/Capitol_Area_Council_2025315132620106323.jpg" width="260"></p>

<p>Come out to Smilin V Scout Ranch for a day filled with Water Rockets, Rocket Club Demos, Kite Building and Flying.&nbsp;&nbsp;During this event youth will launch rockets of different types, build and fly their own kite, have time at the BB and Archery ranges and complete Champions of Nature Cub Adventures.&nbsp; Participants should bring a sack lunch.</p>

<p><strong>Where:</strong> Smilin V Scout Ranch</p>

<p><strong>When</strong>: Sept 27st, 2025.&nbsp; Check in opens at 8:30 and activities begin at 9am.&nbsp; Event runs until 3:45pm.&nbsp;</p>

<p><strong>How Much:</strong> $20 per youth participant/ $5 for each parent/caring adult</p>

<p>Register at&nbsp;<a href="https://scoutingevent.com/564-93882">https://scoutingevent.com/564-93882</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW14DATA3913">
                    08/17/2025
                  </td>
                  <td class="text-center " id="TD795ROW14DATA3914">
                    09/27/2025
                  </td>
                  <td class="text-center " id="TD795ROW14DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW14DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW14DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW14DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="420" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=83&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW15DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="430" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=85&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW15DATA3911">
                    New Scout Family Orientation
                  </td>
                  <td class="text-center " id="TD795ROW15DATA3912">
                    <p style="text-align:center"><img alt="" height="158" src="https://ogo.blob.core.windows.net/cspack12austin/Cub_Scout_Orientation_20249161031177263163.png" width="300"></p>

<p>Sunday, September 14th at Clayton Elementary Cafeteria from 4:00-6:00pm, all parents are invited to come to this event where we plan to give an overview on how the Cub Scout program will work for the 2025-2026&nbsp;school year. This is open to all parents of all scouts at any rank, but is most useful for those families new to Pack 12.&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW15DATA3913">
                    09/06/2025
                  </td>
                  <td class="text-center " id="TD795ROW15DATA3914">
                    09/15/2025
                  </td>
                  <td class="text-center " id="TD795ROW15DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW15DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW15DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW15DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="440" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=85&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW16DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="450" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=84&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW16DATA3911">
                    First Pack Meeting
                  </td>
                  <td class="text-center " id="TD795ROW16DATA3912">
                    <p style="text-align:center"><img alt="" height="120" src="https://ogo.blob.core.windows.net/cspack12austin/pack-meeting1_202392933363157410_20258222223313300447.jpg" width="300"></p>

<p>Mark those calendars for the First Pack Meeting of the 2025-26 school year. September 9th from 6:30-7:30pm at Baldwin Elementary Cafeteria.<br>
Please wear Class A Uniform if you have it.</p>
                  </td>
                  <td class="text-center " id="TD795ROW16DATA3913">
                    08/22/2025
                  </td>
                  <td class="text-center " id="TD795ROW16DATA3914">
                    09/10/2025
                  </td>
                  <td class="text-center " id="TD795ROW16DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW16DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW16DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW16DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="460" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=84&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW17DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="470" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=81&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW17DATA3911">
                    5th Grade AOL Boys
                  </td>
                  <td class="text-center " id="TD795ROW17DATA3912">
                    <p>Troop 448 (boys) is inviting all AOL boys for a morning of fun and games on Saturday, August 23rd at Cidercade (600 E Riverside Dr, Austin, TX 78704) from 10am - 12 Noon. Troop is covering admission for AOLs and a parent. Must wear Class B. No RSVP necessary, just show up in Class B shirts.</p>
                  </td>
                  <td class="text-center " id="TD795ROW17DATA3913">
                    08/01/2025
                  </td>
                  <td class="text-center " id="TD795ROW17DATA3914">
                    08/24/2025
                  </td>
                  <td class="text-center " id="TD795ROW17DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW17DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW17DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW17DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="480" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=81&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW18DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="490" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=82&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW18DATA3911">
                    5th Grade AOL Boys &amp; Girls
                  </td>
                  <td class="text-center " id="TD795ROW18DATA3912">
                    <p>Troop 19 (girls) and Troop 505 (boys) are hosting their troop meeting at the pool. AOL scouts will have an opportunity to test swimming skills and complete requirements for the Swimming elective adventure. Saturday, August 23rd at Western Oaks Community Pool (4910 Woodcreek Rd., Austin, TX 78749) from 9am - 11:30am. Bring swimsuit, towel, sunscreen, water bottle, AOL handbook, completed BSA Medical Form.&nbsp;(edited)&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW18DATA3913">
                    08/01/2025
                  </td>
                  <td class="text-center " id="TD795ROW18DATA3914">
                    08/24/2025
                  </td>
                  <td class="text-center " id="TD795ROW18DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW18DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW18DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW18DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="500" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=82&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW19DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="510" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=77&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW19DATA3911">
                    Upcoming Council Events
                  </td>
                  <td class="text-center " id="TD795ROW19DATA3912">
                    <p style="text-align:center"><img alt="" height="71" src="https://ogo.blob.core.windows.net/cspack12austin/Capitol_Area_Council_2025315132620106323.jpg" width="260"></p>

<p>The Capitol Area Council has scheduled a number of great events for our scouts. There's plenty of opportunities for fun, and even chances to earn some additional adventure awards. Please click on the links below for more information and to register. These events are managed at the Council level, so families are on their own to register for participation.</p>

<ul>
	<li aria-level="1" dir="ltr">
	<p dir="ltr" role="presentation"><b id="docs-internal-guid-9d84dd92-7fff-abec-a4f4-810e15c04b8c">TechLab @ Anderson High School w/o June 23; w/o July 7; w/o July 14; w/o July 21 <a href="https://scoutingevent.com/564-91740">https://scoutingevent.com/564-91740</a>&nbsp;</b></p>
	</li>
	<li aria-level="1" dir="ltr">
	<p dir="ltr" role="presentation"><b>June 29-July 2 - Outdoor Overnight Adventure @ LostPines Scout Reservation <a href="https://scoutingevent.com/564-OOA2025">https://scoutingevent.com/564-OOA2025</a>&nbsp;</b></p>
	</li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW19DATA3913">
                    03/15/2025
                  </td>
                  <td class="text-center " id="TD795ROW19DATA3914">
                    06/23/2025
                  </td>
                  <td class="text-center " id="TD795ROW19DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW19DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW19DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW19DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="520" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=77&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW20DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="530" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=73&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW20DATA3911">
                    Pack Meeting - May 13
                  </td>
                  <td class="text-center " id="TD795ROW20DATA3912">
                    <p style="text-align:center"><img alt="" height="144" src="https://ogo.blob.core.windows.net/cspack12austin/pack-meeting1_202392933363157410.jpg" width="360"></p>

<p>Our last Pack Meeting of the school year is May 13 at 6:30pm at the Clayton Elementary Cafeteria.</p>

<p>WEAR YOUR YELLOW PACK 12&nbsp;CLASS B T-SHIRT</p>
                  </td>
                  <td class="text-center " id="TD795ROW20DATA3913">
                    05/01/2025
                  </td>
                  <td class="text-center " id="TD795ROW20DATA3914">
                    05/14/2025
                  </td>
                  <td class="text-center " id="TD795ROW20DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW20DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW20DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW20DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="540" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=73&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW21DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="550" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=39&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW21DATA3911">
                    Rank Advancement Deadline - May 11
                  </td>
                  <td class="text-center " id="TD795ROW21DATA3912">
                    <p style="text-align:center"><img alt="" height="203" src="https://ogo.blob.core.windows.net/cspack12austin/rank-requirements-jpg_20242242022496584956.jpg" width="300"></p>

<p><strong>Deadline for your scout to complete their Rank Requirements is May 11, 2025.</strong></p>

<p>If&nbsp;your scout has fallen behind in your rank requirements or has missed den meetings, please reach out to your den leaders to discuss what requirements may have been missed and how you and your scout can make them up.</p>

<p>Also, remember there are a few requirements families should handle themselves. Any of the Duty to God requirements are recommended to be handled by each family individually. If your family has completed those items, please let your den leader know so they can record them as complete.</p>

<p>Den Leaders: Please make sure your families are aware of any requirements they need to make up.</p>
                  </td>
                  <td class="text-center " id="TD795ROW21DATA3913">
                    05/01/2025
                  </td>
                  <td class="text-center " id="TD795ROW21DATA3914">
                    05/12/2025
                  </td>
                  <td class="text-center " id="TD795ROW21DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW21DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW21DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW21DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="560" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=39&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW22DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="570" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=79&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW22DATA3911">
                    Spring Campout - April 11-13
                  </td>
                  <td class="text-center " id="TD795ROW22DATA3912">
                    <p style="text-align:center"><img alt="" height="195" src="https://ogo.blob.core.windows.net/cspack12austin/pedernales-falls-state-park_20253151340291580049.jpg" width="260"></p>

<p>Join us on our Pack 12 Spring Campout at Pedernales Falls State Park.</p>

<p>RSVP by April 6:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=254">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=254</a></p>

<p>Learn more about Camping with Pack 12. Click MENU -&gt; HOME -&gt; CAMPING&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW22DATA3913">
                    03/15/2025
                  </td>
                  <td class="text-center " id="TD795ROW22DATA3914">
                    04/07/2025
                  </td>
                  <td class="text-center " id="TD795ROW22DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW22DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW22DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW22DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="580" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=79&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW23DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=78&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW23DATA3911">
                    Rocket Derby - RSVP by April 1
                  </td>
                  <td class="text-center " id="TD795ROW23DATA3912">
                    <p style="text-align:center"><img alt="" height="195" src="https://ogo.blob.core.windows.net/cspack12austin/Rocket_Derby_20253151340472946015.jpg" width="260"></p>

<p>Scouts who wish to participate in this year's Rocket Derby must RSVP on the Pack 12 website no later than April 1 in order to secure a rocket kit. Please make sure your scout is registered at&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=256">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=256</a></p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW23DATA3913">
                    03/15/2025
                  </td>
                  <td class="text-center " id="TD795ROW23DATA3914">
                    04/02/2025
                  </td>
                  <td class="text-center " id="TD795ROW23DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW23DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW23DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW23DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=78&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW24DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="610" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=75&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW24DATA3911">
                    Cub Scout STEMboree
                  </td>
                  <td class="text-center " id="TD795ROW24DATA3912">
                    <p style="text-align: center;"><img alt="" height="261" src="https://ogo.blob.core.windows.net/cspack12austin/STEMboree-2025_20252241041418336642.png" style="margin-bottom: 20px;" width="259"><br>
Capitol Area Council is hosting <strong>STEMboree</strong>&nbsp;<strong>2025</strong> from <strong>March&nbsp;29th - 30th&nbsp;</strong>at Smiling V Scout Ranch in Liberty Hill. STEMBoree is filled with Cub Scout activities, adventures, and awards with an emphasis on exploring Science, Technology, Engineering &amp; Math! This event takes place all-day&nbsp;Saturday with optional camping overnight into Sunday.<br>
<br>
For more info, and to register, visit&nbsp;<a data-sk="tooltip_parent" data-stringify-link="https://scoutingevent.com/564-81011" delay="150" href="https://scoutingevent.com/564-81011" rel="noopener noreferrer" target="_blank">https://scoutingevent.com/564-81011</a></p>

<table style="border: none !important; margin: 15px auto 0 auto;">
	<tbody>
		<tr>
			<td style="padding: 10px 20px 10px 0; text-align: center;"><strong>When</strong></td>
			<td style="padding: 10px 0 10px 0px;">March 28-30, 2025</td>
		</tr>
		<tr>
			<td style="padding: 10px 20px 10px 0; text-align: center;"><strong>Where</strong></td>
			<td style="padding: 10px 0 10px 0px;">Smilin V Scout Ranch<br>
			250 County Rd 286 Spur<br>
			Liberty Hill, TX 78642</td>
		</tr>
	</tbody>
</table>

<p style="text-align: center;">&nbsp;</p>

<p style="text-align: center;"><br>
&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW24DATA3913">
                    02/24/2025
                  </td>
                  <td class="text-center " id="TD795ROW24DATA3914">
                    03/28/2025
                  </td>
                  <td class="text-center " id="TD795ROW24DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW24DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW24DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW24DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=75&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW25DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=76&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW25DATA3911">
                    Help Make Pack 12 ROCK!
                  </td>
                  <td class="text-center " id="TD795ROW25DATA3912">
                    <p>We would like to see every family volunteer in some way throughout the year. There are lots of opportunities, both large and small, so surely one fits your abilities and interests! Please let us know if you have any interest helping out with one or more of the volunteer opportunities listed. If you have any questions, please contact our <a href="mailto:committeechair.Pack12Austin@twhcs.email	">Committee Chair</a> or <a href="mailto:cubmaster.Pack12Austin@twhcs.email	">Cubmaster</a>.</p>

<p>PRIMARY VOLUNTEER NEEDS (click to see more info)</p>

<ul>
	<li><a href="https://docs.google.com/document/d/1s2ORIqOEpKoZGkjXNhegLz16e_CYeR2qGSx1CIc7Noo/edit?usp=sharing" target="_blank">Advancement Chair</a></li>
	<li><a href="https://docs.google.com/document/d/1ToKVGzmXjMx24KuevyJxSPblLzABuSZsT7YD8HrfOMY/edit?usp=sharing" target="_blank">Co-Derby Chair</a></li>
	<li><a href="https://docs.google.com/document/d/1rR7xtFyI8xYPwXiKHLqw0E6dAW8202_ySLbikaOCfkY/edit?usp=sharing" target="_blank">Pack Training Chair</a></li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW25DATA3913">
                    02/25/2025
                  </td>
                  <td class="text-center " id="TD795ROW25DATA3914">
                    03/25/2025
                  </td>
                  <td class="text-center " id="TD795ROW25DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW25DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW25DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW25DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=76&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW26DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="650" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=74&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW26DATA3911">
                    RESCHEDULED - Webelos Cubmaster Campout 2/28-3/2
                  </td>
                  <td class="text-center " id="TD795ROW26DATA3912">
                    <p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35">Hi Webelos Families,</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35">Hope you're all keeping warm this weekend. We had to (again) postpone the Cubmaster Campout. The Muleshoe Bend park office has graciously allowed us to move our campout from this weekend to NEXT weekend (3/1). I'm sending this to all previously registered Webelos and re-opening registration for the Webelos who did not register.&nbsp;</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35">Please let me know if you're planning to attend the Cubmaster Campout by this Thur 2/27-- even if you already registered, please do so again here, so that I know to expect you.&nbsp;</b><b><span style="background-color:#ffff00;">Please fill out this Google Form:&nbsp;</span></b><a href="https://forms.gle/6joy46BcpG2dTQ6t7"><span style="background-color:#ffff00;">https://forms.gle/6joy46BcpG2dTQ6t7</span></a></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><span style="background-color:#ffff00;">DATE/TIME</span>:</b><b> Start Saturday 3/1 9am, End Sunday 3/2 after breakfast and flags. I will be arriving on Friday evening 2/28 to set things up. If you would like to come Friday, you are welcome to join me – but it’s optional.&nbsp;</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><span style="background-color:#ffff00;">LOCATION</span>: Muleshoe Bend Recreation Area (2820 Co Rd 414, Spicewood, TX 78669) - about 45 min from Austin</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><span style="background-color:#ffff00;">UPON ARRIVAL</span>: Check-in with the park ranger, pay the entrance fee: $12 per adult, children 12 and under are free</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><span style="background-color:#ffff00;">FOOD</span>: The pack will be providing food for Saturday lunch, dinner, and Sunday breakfast - please remind me of any food allergies</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><span style="background-color:#ffff00;">UNIFORM</span>: We will wear Class A (blue/ tan shirts) for the flags in the morning and evening, then Class B (yellow T-shirt) for all activities</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><span style="background-color:#ffff00;">CAMPING SITES</span>: We have the following site and note that they do not have electricity or water. We will bring water jugs to share among the sites. #s 15, 16, 17, 18, 19, 20, 21 (see map). We are on the right side&nbsp;near Lake Travis.&nbsp;</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><span style="background-color:#ffff00;">AGENDA</span>:</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><u>Saturday Morning</u> - Arrive before flags at 9am, then scouts will have an opportunity to put together and take home a survival kit and learn about building shelters in the wilderness.&nbsp; We've done this every year for Cubmaster Campout and most scouts still carry that kit with them all the way through BSA!</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><u>Saturday After-Noon through Sunday </u>- Activities will be along the Wilderness Survival theme including cooking tin foil dinners.</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><u>Saturday Night Campout </u>- Webelos will go through a small ceremony as they are recognized as the new leaders of the Pack.</b></p>

<p dir="ltr"><b id="docs-internal-guid-809d5f97-7fff-bea8-235d-0f5a598fcc35"><u>Sunday Morning </u>- a quick breakfast and then break camp after flags and Rose and Thorns.</b></p>

<p dir="ltr">&nbsp;</p>

<p dir="ltr"><b>Looking forward to make this happen! 3rd times a charm right?!</b></p>
                  </td>
                  <td class="text-center " id="TD795ROW26DATA3913">
                    02/23/2025
                  </td>
                  <td class="text-center " id="TD795ROW26DATA3914">
                    02/27/2025
                  </td>
                  <td class="text-center " id="TD795ROW26DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW26DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW26DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW26DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="660" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=74&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW27DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="670" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=71&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW27DATA3911">
                    Pinewood Derby
                  </td>
                  <td class="text-center " id="TD795ROW27DATA3912">
                    <p><meta charset="UTF-8"></p>

<p>Pinewood Derby is only a few weeks away on Saturday, Feb&nbsp;8! Den Leaders should have distributed kits already. If you still need a kit, please reach out to Preston Fick at&nbsp;<a href="mailto:prestonfick@gmail.com">prestonfick@gmail.com</a>&nbsp;or 512 658 0793.</p>

<p><b>Pinewood Derby Rules</b><br>
Please also review the Office Rules for the Pinewood Derby race to ensure you qualify to win a Trophy or Medal.&nbsp;<a href="https://docs.google.com/document/d/102XfWTVjZh8ZP0k-7a0aDeER9emPX9p8EW3Edzs5jPc/edit?tab=t.0" rel="noopener noreferrer">Pack 12 - 2025 Pinewood Derby Rules</a></p>

<p><b>Pinewood Derby Information</b><br>
This document captures all the key Information you need for Block Cutting, Inspection/Weigh-In, Tips &amp; Tricks and Race Day Details. The document also includes the Design Award Categories for this year.&nbsp;<a href="https://docs.google.com/document/d/1ZOc2OT11U7gm_Fr7i-Pfv0DJrmXsISFgtoqAvg4Csfc/edit?usp=drive_link" rel="noopener noreferrer">Pack 12 - 2025 Pinewood Derby Information</a></p>

<p><b>Block Cutting</b></p>

<p>For those scouts that are not doing block cutting as a den, or don't have access to woodworking tools two block cutting sessions will be held Fri Jan 17 and Sat Jan 18. Signup for a slot below:</p>

<p><a href="https://www.signupgenius.com/go/9040E4DAFAA23A3F85-54344074-2025" rel="noopener noreferrer">https://www.signupgenius.com/go/9040E4DAFAA23A3F85-54344074-2025</a></p>

<p><b>Race Registration</b></p>

<p>Once you have a name for your car, register using the following link before Feb 3 (note, this is the official way to register your car vs the normal Pack 12 site RSVP. This form can be changed if needed):</p>

<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSf-fZN9Kv2VcYcjOny4ANWQmEThi-YoR7NggzXDsFvXGpQNcA/viewform" rel="noopener noreferrer">https://docs.google.com/forms/d/e/1FAIpQLSf-fZN9Kv2VcYcjOny4ANWQmEThi-YoR7NggzXDsFvXGpQNcA/viewform</a></p>

<p><b>Weigh-in and Inspection</b></p>

<p>Scouts will bring cars to weigh-in, inspect and catalog cars for the race. Once they are entered, the scouts will not see the cars again until race day. Weigh-in will be held Tues Feb 4 and Weds Feb 5. Signup for a slot below:</p>

<p><a href="https://www.signupgenius.com/go/9040E4DAFAA23A3F85-54343981-pwdweighin" rel="noopener noreferrer">https://www.signupgenius.com/go/9040E4DAFAA23A3F85-54343981-pwdweighin</a></p>

<p><b>Parent Volunteers Needed</b><br>
As you all know, Scouts and the Pinewood Derby event is a volunteer-led program, run by Scout Leaders and Parents.&nbsp; We are looking for Parent Volunteers to help and would appreciate your participation. We need help on the days of Block cutting, Inspection and Race Day. If you are interested in participating in a role, please signup&nbsp;below:</p>

<p><a href="https://www.signupgenius.com/go/9040E4DAFAA23A3F85-54344034-2025" rel="noopener noreferrer">https://www.signupgenius.com/go/9040E4DAFAA23A3F85-54344034-2025</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW27DATA3913">
                    01/11/2025
                  </td>
                  <td class="text-center " id="TD795ROW27DATA3914">
                    02/09/2025
                  </td>
                  <td class="text-center " id="TD795ROW27DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW27DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW27DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW27DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="680" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=71&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW28DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="690" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=64&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW28DATA3911">
                    Winter Overnight - Sea World San Antonio - 1/25-26
                  </td>
                  <td class="text-center " id="TD795ROW28DATA3912">
                    <p style="text-align:center"><img alt="" height="458" src="https://ogo.blob.core.windows.net/cspack12austin/Sea_World_20249181123146015859.jpg" width="600"></p>

<p>We are SO excited to announce the Winter overnight will be at SEAWORLD in San Antonio!!! New date is January 25/26, 2025!</p>

<p><b>REGISTRATION CLOSES 12/10/24.</b></p>

<p>Register for this event at:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=255">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=255</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW28DATA3913">
                    09/18/2024
                  </td>
                  <td class="text-center " id="TD795ROW28DATA3914">
                    12/10/2024
                  </td>
                  <td class="text-center " id="TD795ROW28DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW28DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW28DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW28DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="700" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=64&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW29DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="710" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=70&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW29DATA3911">
                    Holiday Wreaths
                  </td>
                  <td class="text-center " id="TD795ROW29DATA3912">
                    <h1 style="text-align: center;">Our last fundraiser of the year just kicked off – Holiday Wreaths!</h1>

<p style="text-align:center"><a data-download-id="4bca56b8-e9a8-4913-9c76-730af665e2ca"><img alt="sma03_Cranberry_Splash_Lights_2048px.jpg" data-download-id="4bca56b8-e9a8-4913-9c76-730af665e2ca" data-widget="uploadimage" src="data:image/jpeg;base64,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"></a></p>

<p style="text-align: center;"><meta charset="UTF-8"></p>

<p style="text-align: center;">There are two options for your scout to help fundraise with holiday wreath sales:</p>

<ul>
	<li style="text-align: center;"><strong><u>Traditional local delivery</u></strong>&nbsp;– For scouts that want to sell items locally (door to door, local friends and family, etc.) this is the best method. Take the envelope from above, fill out the lines on the front with orders, collect the funds at time of sale), and turn in the order.&nbsp;Sales brochures and order envelopes are available in a box at&nbsp;<b>7300 Red Pebble Rd</b>.

	<p>We must submit these orders by November 15th, so please return your order envelope at the&nbsp;<strong><u>November Pack meeting (November 12th)</u></strong>&nbsp;– These orders will be delivered to us the week of December 2nd. As soon as they are received, we will organize them and make them available for pickup and delivery.</p>
	</li>
	<li>
	<p style="text-align: center;"><strong><u>Gift It Forward</u></strong>&nbsp;– For scouts that wish to sell items online or for shipment rather than local delivery, use the following link or QR code:<br>
	<br>
	<u><font face="inherit"><a href="https://giftitforward.com/fundraising-code/PK12TX001" rel="noopener noreferrer">https://giftitforward.com/fundraising-code/PK12TX001</a></font></u></p>

	<p style="text-align: center;"><b><font color="#080809" face="inherit">You can combine popcorn sales and wreath sales for your minimum fundraising requirement of $200 and you can also combine them for the Winter Overnight&nbsp;</font><font color="#080809" face="system-ui, -apple-system, system-ui, .SFNSText-Regular, sans-serif">Scholarship</font><font color="#080809"><font face="inherit">&nbsp;($1,200 = Free Scout Winter Overnight; $1,500 = Free Scout + Parent winter&nbsp;</font>overnight<font face="inherit">)</font></font></b></p>
	</li>
</ul>

<ol>
</ol>
                  </td>
                  <td class="text-center " id="TD795ROW29DATA3913">
                    11/01/2024
                  </td>
                  <td class="text-center " id="TD795ROW29DATA3914">
                    11/13/2024
                  </td>
                  <td class="text-center " id="TD795ROW29DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW29DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW29DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW29DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="720" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=70&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW30DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="730" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=69&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW30DATA3911">
                    USS Lexington Overnight - 4th &amp; 5th graders - 1/11-12
                  </td>
                  <td class="text-center " id="TD795ROW30DATA3912">
                    <p>&nbsp;</p>

<p style="text-align:center"><img alt="" height="480" src="https://ogo.blob.core.windows.net/cspack12austin/USS_Lexington_202410191526189756125.jpg" width="600"></p>

<p>AOL'S, WEBELOS BONUS</p>

<p>Overnight bonus activity for our 4th and 5th graders!&nbsp;The LEX overnight is optional and costs $75/person. This includes overnight stay in crew quarters, two meals. RSVP by Nov 10th&nbsp;at:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=289" target="_blank">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=289</a></p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW30DATA3913">
                    10/19/2024
                  </td>
                  <td class="text-center " id="TD795ROW30DATA3914">
                    11/12/2024
                  </td>
                  <td class="text-center " id="TD795ROW30DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW30DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW30DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW30DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="740" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=69&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW31DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="750" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=68&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW31DATA3911">
                    Pack 12 Fundraising
                  </td>
                  <td class="text-center " id="TD795ROW31DATA3912">
                    <p style="text-align:center"><img alt="" height="393.04347826086956" src="https://ogo.blob.core.windows.net/cspack12austin/Support_Scouting_Popcorn_20241019159146491003.jpg" width="640"></p>

<p>Fundraising constitutes more than half of Pack’s operating income. For the 2024-25&nbsp;school year, each scout is expected to raise a minimum of $200 through fundraiser product sales.</p>

<p><strong>Pack 12 has two fundraising events during the year:</strong></p>

<ul>
	<li>Popcorn sales through&nbsp;Trail’s End (Currently running through 11/10)</li>
	<li>Holiday wreath sales through Mickman Brothers (starting w/o 10/21&nbsp;through 11/15)</li>
</ul>

<p>Optionally, you can also select a hassle-free Fundraising Opt-Out / Enrichment Fee of $100.</p>

<ul>
	<li><strong>If you choose the Fundraising Opt-Out Fee, our Treasurer will debit your scout's account in November.</strong></li>
</ul>

<p><strong>Scouts selling $1,200 = scholarship for scout to attend Winter Overnight<br>
Scouts selling $1,500 = scholarship for scout AND parent to attend Winter Overnight<br>
Pack selling $40,000 = Ice Cream Party for scouts who fundraised&nbsp;</strong></p>

<p>&nbsp;</p>

<ul>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW31DATA3913">
                    10/15/2024
                  </td>
                  <td class="text-center " id="TD795ROW31DATA3914">
                    11/02/2024
                  </td>
                  <td class="text-center " id="TD795ROW31DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW31DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW31DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW31DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="760" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=68&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW32DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="770" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=67&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW32DATA3911">
                    Service Project - Baldwin Elementary - 10/27
                  </td>
                  <td class="text-center " id="TD795ROW32DATA3912">
                    <p style="text-align:center"><img alt="" height="338" src="https://ogo.blob.core.windows.net/cspack12austin/Baldwin_Elementary_202410191458203333339.jpg" width="600"></p>

<p>Baldwin Campus Cleanup &amp; Planter Construction</p>

<p>Lions - Bears will be helping clean up the Baldwin campus. Webelos and AOL can participate in Planter Construction with hand tools.</p>

<p>Participating in this service project will meet the community service requirement necessary for each Cub Scout rank.</p>

<ul>
	<li>Lions - King of the Jungle</li>
	<li>Tigers - Team Tiger</li>
	<li>Wolves - Council Fire</li>
	<li>Bears - Paws for Action</li>
	<li>Webelos - My Community &amp; Build It</li>
	<li>AOL - Citizenship</li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW32DATA3913">
                    10/15/2024
                  </td>
                  <td class="text-center " id="TD795ROW32DATA3914">
                    10/27/2024
                  </td>
                  <td class="text-center " id="TD795ROW32DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW32DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW32DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW32DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="780" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=67&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW33DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="790" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=58&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW33DATA3911">
                    Fall Campout - Nov 1-3
                  </td>
                  <td class="text-center " id="TD795ROW33DATA3912">
                    <p style="text-align:center"><img alt="" height="337" src="https://ogo.blob.core.windows.net/cspack12austin/Goliad_State_Park_2024818164624821439.jpg" width="600"></p>

<p>Join us on our Pack 12 Fall Campout at Goliad State Park and Historic Site in Goliad, TX and learn about the settlement of Texas.</p>

<p>Visit historic sites like the Mission Espiritu Santo, Presidio la Bahía, and the Zaragoza Birthplace State Historic Site.&nbsp;</p>

<p>RSVP:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=234">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=234</a></p>

<p>Learn more about Camping with Pack 12. Click MENU -&gt; HOME -&gt; CAMPING&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW33DATA3913">
                    09/10/2024
                  </td>
                  <td class="text-center " id="TD795ROW33DATA3914">
                    10/25/2024
                  </td>
                  <td class="text-center " id="TD795ROW33DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW33DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW33DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW33DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="800" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=58&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW34DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="810" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=65&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW34DATA3911">
                    Council Event - Cub Galactic Event in the Pines - 10/19
                  </td>
                  <td class="text-center " id="TD795ROW34DATA3912">
                    <p style="text-align:center"><img alt="" height="338" src="https://ogo.blob.core.windows.net/cspack12austin/star-wars-movies-and-series-guide-article-feature_a12ab7bb_202492511252553119.jpg" width="600"></p>

<p>Hello young Padawans, to Tom Wooten you should come!</p>

<p>Bring your lightsaber and come dressed for Jedi training. Padawans from across our council will be meeting to practice their skills, complete work up to 5 adventures, practice their aim with BB, archery, and sling shot, and learn about space and life on different planets.</p>

<p>Where: Camp Tom Wooten in Bastrop, TX<br>
When: October 19, 2024.&nbsp; Check in opens at 8:30 and activities begin at 9am.&nbsp; Event runs until 3:45pm.&nbsp;<br>
What: During this event youth will learn about the solar system, make glow lanterns&nbsp;and bird feeders, and have the opportunity to fish and shoot BB, archery, and slingshot.&nbsp; Participants should bring a sack lunch.<br>
How Much: $35 per youth participant/ $10 for each parent/caring adult</p>

<p>Register at:&nbsp;<a href="https://scoutingevent.com/564-81514">https://scoutingevent.com/564-81514</a></p>

<p>*This is a Capitol Area Council Event. This is not organized by Pack 12*</p>
                  </td>
                  <td class="text-center " id="TD795ROW34DATA3913">
                    09/25/2024
                  </td>
                  <td class="text-center " id="TD795ROW34DATA3914">
                    10/19/2024
                  </td>
                  <td class="text-center " id="TD795ROW34DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW34DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW34DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW34DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="820" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=65&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW35DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="830" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=63&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW35DATA3911">
                    Pack 12 Parent Orientation
                  </td>
                  <td class="text-center " id="TD795ROW35DATA3912">
                    <p style="text-align: center;"><img alt="" height="336.9162995594714" src="https://ogo.blob.core.windows.net/cspack12austin/Cub_Scout_Orientation_20249161031177263163.png" width="640"></p>

<p>If you were not able to attend the Pack 12 Orientation for the 2024-25 school year, please see the attached presentation for updates to the Cub Scout Program.</p>

<p><a href="https://docs.google.com/presentation/d/1JZDLqm_t4-n_zRePRVNFT3t1QXt60F1S/edit?usp=sharing&amp;ouid=116745202021374415641&amp;rtpof=true&amp;sd=true">https://docs.google.com/presentation/d/1JZDLqm_t4-n_zRePRVNFT3t1QXt60F1S/edit?usp=sharing&amp;ouid=116745202021374415641&amp;rtpof=true&amp;sd=true</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW35DATA3913">
                    09/16/2024
                  </td>
                  <td class="text-center " id="TD795ROW35DATA3914">
                    10/19/2024
                  </td>
                  <td class="text-center " id="TD795ROW35DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW35DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW35DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW35DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="840" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=63&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW36DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="850" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=66&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW36DATA3911">
                    Council Event - Jamboree on the Air/Internet - 10/18-19
                  </td>
                  <td class="text-center " id="TD795ROW36DATA3912">
                    <p style="text-align:center"><img alt="" height="320" src="https://ogo.blob.core.windows.net/cspack12austin/MD_image_17248925510_17206_20241016111163712443.png" width="436"></p>

<p>Communicate by HAM Radio and participate in activities that will help them meet the requirements for the International Spirit Award. You will also receive our special event patch and work on your Cub Scouts Champions of Nature Elective.</p>

<p>Frank Fickett Center<br>
12500 N Interstate Hwy 35, Austin, TX 78753</p>

<p>Costs: $25/scout - $10/adult<br>
Register at:&nbsp;<a href="https://scoutingevent.com/564-81096" target="_blank">https://scoutingevent.com/564-81096</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW36DATA3913">
                    10/15/2024
                  </td>
                  <td class="text-center " id="TD795ROW36DATA3914">
                    10/18/2024
                  </td>
                  <td class="text-center " id="TD795ROW36DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW36DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW36DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW36DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="860" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=66&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW37DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="870" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=56&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW37DATA3911">
                    Pack Meeting - 10/15
                  </td>
                  <td class="text-center " id="TD795ROW37DATA3912">
                    <p style="text-align:center"><img alt="" height="200" src="https://ogo.blob.core.windows.net/cspack12austin/pack-meeting1_202392933363157410.jpg" width="500"></p>

<p>Mark those calendars for the October Pack Meeting of the 2024-25 school year. October 15th from 6:30-7:30pm at Baldwin Elementary Cafeteria.</p>

<p>Please wear Class A Uniform if you have it.</p>
                  </td>
                  <td class="text-center " id="TD795ROW37DATA3913">
                    10/01/2024
                  </td>
                  <td class="text-center " id="TD795ROW37DATA3914">
                    10/16/2024
                  </td>
                  <td class="text-center " id="TD795ROW37DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW37DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW37DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW37DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="880" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=56&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW38DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="890" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=57&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW38DATA3911">
                    Popcorn Fundraiser - Sep 10 - Nov 10
                  </td>
                  <td class="text-center " id="TD795ROW38DATA3912">
                    <p style="text-align:center"><img alt="" height="360.3692307692308" src="https://ogo.blob.core.windows.net/cspack12austin/Popcorn_20248181640164870542.jpg" width="640"></p>

<p>It's popcorn time at Pack 12!</p>

<p>Make sure to sign your scout(s) up to help in Pack 12's fundraiser. To register visit <a href="https://trails-end.com" target="_blank">https://trails-end.com</a> or download the Trails End app from your mobile device app store. More information on Popcorn fundraising can be found by logging into the Pack 12 website and going to MENU -&gt; HOME -&gt; FUNDRAISING.&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW38DATA3913">
                    09/09/2024
                  </td>
                  <td class="text-center " id="TD795ROW38DATA3914">
                    10/08/2024
                  </td>
                  <td class="text-center " id="TD795ROW38DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW38DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW38DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW38DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="900" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=57&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW39DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="910" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=61&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW39DATA3911">
                    COUNCIL EVENT - Cub Kite and Rocket Festival - 9/21
                  </td>
                  <td class="text-center " id="TD795ROW39DATA3912">
                    <p style="text-align:center"><img alt="" height="413" src="https://ogo.blob.core.windows.net/cspack12austin/Cub_Kite_Fest_20248281027244652628.jpg" width="550"></p>

<p>Come out to Smilin V Scout Ranch for a day filled with Water Rockets, Rocket Club Demos, Kite Building and Flying.&nbsp; This is an event organized by the Capitol Area Council. Interested families may self register at the link below.</p>

<p>Where: Smilin V Scout Ranch</p>

<p>When: Sept 21st, 2024.&nbsp; Check in opens at 8:30 and activities begin at 9am.&nbsp; Event runs until 3:45pm.&nbsp;</p>

<p>What: During this event youth will launch rockets of different types, build and fly their own kite, have time at the BB and Archery ranges and complete Champions of Nature Cub Adventures.&nbsp; Participants should bring a sack lunch.</p>

<p>How Much: $35 per youth participant/ $10 for each parent/caring adult</p>

<p>Registration:&nbsp;<a href="https://scoutingevent.com/564-85642">https://scoutingevent.com/564-85642</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW39DATA3913">
                    08/28/2024
                  </td>
                  <td class="text-center " id="TD795ROW39DATA3914">
                    09/20/2024
                  </td>
                  <td class="text-center " id="TD795ROW39DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW39DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW39DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW39DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="920" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=61&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW40DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="930" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=62&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW40DATA3911">
                    Help Make Pack 12 ROCK!
                  </td>
                  <td class="text-center " id="TD795ROW40DATA3912">
                    <p style="text-align:center"><img alt="" height="252" src="https://ogo.blob.core.windows.net/cspack12austin/Pack_12_Volunteers_2024828223785438618.jpg" width="600"></p>

<p>As you know, Cub Scouting is a FAMILY activity. We have a wonderful group of leaders, but they need your help to make Pack 12 the very best it can be! Join us and help make Pack 12 ROCK!</p>

<p>We would like to see every family volunteer in some way throughout the year. There are lots of opportunities, both large and small, so surely one fits your abilities and interests! Please let us know if you have any interest helping out with one or more of the volunteer opportunities listed.</p>

<p>If you have any questions, please contact our Committee Chair at <a href="mailto:committeechair.Pack12Austin@twhcs.email?subject=Pack%2012%20Volunteer&amp;body=I'm%20interested%20in%20volunteering%20with%20Pack%2012!">committeechair.Pack12Austin@twhcs.email</a>. Please take some time to consider if any of the following roles would interest you.</p>

<p>These are critical roles necessary to ensuring the ongoing success of Pack 12:</p>

<ul>
	<li><a href="https://docs.google.com/document/d/1WWvLHQqBFrRBuGL6bvguWbkCGGYB1DB8vgUQgsvhm7c/edit?usp=sharing" target="_blank">Membership Chair</a></li>
	<li><a href="https://docs.google.com/document/d/127MKCX0vk3Bpp8_dKsCZoOyFPhwojieacPsN3uER_3Y/edit?usp=sharing" target="_blank">Fundraising Chair - Popcorn</a></li>
	<li><a href="https://docs.google.com/document/d/1rR7xtFyI8xYPwXiKHLqw0E6dAW8202_ySLbikaOCfkY/edit?usp=sharing" target="_blank">Pack Trainer</a></li>
	<li><a href="https://docs.google.com/document/d/1Mif3g95jy5dTSMwkkFdgH4sE4tJoaGPEg57eGRgy-ag/edit?usp=sharing" target="_blank">Assistant Committee Chair (succession planning)</a></li>
	<li><a href="https://docs.google.com/document/d/19iMyV12DbnCW6jyAueWegvKMou1llHcThXBVtDuN2r0/edit?usp=sharing" target="_blank">Treasurer (succession planning)</a></li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW40DATA3913">
                    09/01/2024
                  </td>
                  <td class="text-center " id="TD795ROW40DATA3914">
                    09/10/2024
                  </td>
                  <td class="text-center " id="TD795ROW40DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW40DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW40DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW40DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="940" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=62&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW41DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="950" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=54&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW41DATA3911">
                    World Friendship Fund
                  </td>
                  <td class="text-center " id="TD795ROW41DATA3912">
                    <p style="text-align:center"><img alt="" height="384" src="https://ogo.blob.core.windows.net/cspack12austin/Logo-qjjk8qt4q2z7dy85oodh8h1pfz01lh7uspy3sv72tw_2024812164055727844.jpg" width="640"></p>

<p>At the 1st pack meeting of the year (Tuesday, September 10), Sofia and I welcome you to the World Friendship Fund collection (<a href="https://www.scouting.org/international/resources/22-329/">https://www.scouting.org/international/resources/22-329</a>). We will be collecting money to send to the other scouts across the world. There will be QR codes at all of the entrances/exits, also there will be a box that you can put dollar bills, or change if you have spare money with you.<br>
<br>
Yours in Scouting,<br>
Mikaela Files<br>
Den 8 Bear</p>
                  </td>
                  <td class="text-center " id="TD795ROW41DATA3913">
                    08/16/2024
                  </td>
                  <td class="text-center " id="TD795ROW41DATA3914">
                    09/10/2024
                  </td>
                  <td class="text-center " id="TD795ROW41DATA55029">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW41DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW41DATA55031">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW41DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="960" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=54&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW42DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="970" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=53&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW42DATA3911">
                    Pack 12 – 2024-2025 Calendar of Events
                  </td>
                  <td class="text-center " id="TD795ROW42DATA3912">
                    <p style="text-align:center"><img alt="" height="338" src="https://ogo.blob.core.windows.net/cspack12austin/Pack12-2024_25-cover_20247301858515886172.jpg" width="600"></p>

<p>As you and your scout(s) begin to lay out your family's calendar&nbsp;for the upcoming school year, feel free to reference the Pack 12 Calendar of Events for the 2024-25 school year in the link below.</p>

<p><a href="https://drive.google.com/file/d/1G-SHNy5P-VJWnJXuYkQ6B0qY8Hzbqiu9/view?usp=sharing" target="_blank">Pack 12 2024-25 Calendar Overview</a>&nbsp;</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW42DATA3913">
                    07/30/2024
                  </td>
                  <td class="text-center " id="TD795ROW42DATA3914">
                    09/10/2024
                  </td>
                  <td class="text-center " id="TD795ROW42DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW42DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW42DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW42DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="980" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=53&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW43DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="990" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=55&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW43DATA3911">
                    Recruitment Events - 8/24 &amp; 9/1
                  </td>
                  <td class="text-center " id="TD795ROW43DATA3912">
                    <p style="text-align:center"><img alt="" height="360.3692307692308" src="https://ogo.blob.core.windows.net/cspack12austin/Recruiter-Strip_20248181626411973518.jpg" width="640"></p>

<p>We need Pack 12 scouts and parents to come assist at our two upcoming recruiting events on August 24 and September 1st at the Circle C Community Center.&nbsp;</p>

<p>Help families learn more about Pack 12 and your scouts will earn their Recruiter Strip. A patch that scouts earn and place on their uniform.</p>

<p>RSVP for September 1:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=225">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=225</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW43DATA3913">
                    08/18/2024
                  </td>
                  <td class="text-center " id="TD795ROW43DATA3914">
                    09/01/2024
                  </td>
                  <td class="text-center " id="TD795ROW43DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW43DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW43DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW43DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1000" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=55&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW44DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1010" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=52&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW44DATA3911">
                    August 18 - Cubmobile
                  </td>
                  <td class="text-center " id="TD795ROW44DATA3912">
                    <p style="text-align:center"><img alt="" height="338" src="https://ogo.blob.core.windows.net/cspack12austin/Cubmobile_Derby_2_2024791143174661652.jpg" width="600"></p>

<p><strong>THIS IS AN OPEN RECRUITMENT EVENT WHERE SCOUTS AND THEIR FAMILIES CAN INVITE FRIENDS TO PARTICIPATE.&nbsp;</strong>(Please include any guests in RSVP headcount)</p>

<p>Build a Cubmobile (soapbox)&nbsp;car as a den and race it down the Pack 12 Speedway at Clayton Elementary on August 18 at 8am. We will also have Ice Cream for some frozen treats! Please RSVP at&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=222">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=222</a></p>

<p>If your den does not already have a Cubmobile car, now is the time to start working on one. &nbsp;Basic plans can be found here:&nbsp;<a href="https://drive.google.com/file/d/1WnETW_sG15FTgeQxAnKghoQ7NCGVHVTc/view?usp=drive_link" target="_blank">Cubmobile Build Instructions</a>. &nbsp;There are&nbsp;wheels and other extra parts available in the pack storage bin for those that need them.</p>

<p>Bicycle helmets and closed-toe shoes are required of all racers. &nbsp;Knee and elbow pads are not required, but encouraged.&nbsp; Bring a pop-up tent if you have one, sunscreen, hats, and plenty of water.&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW44DATA3913">
                    07/21/2024
                  </td>
                  <td class="text-center " id="TD795ROW44DATA3914">
                    08/18/2024
                  </td>
                  <td class="text-center " id="TD795ROW44DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW44DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW44DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW44DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1020" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=52&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW45DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1030" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=51&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW45DATA3911">
                    July 20 - Indoor Rock Climbing
                  </td>
                  <td class="text-center " id="TD795ROW45DATA3912">
                    <p style="text-align:center"><img alt="" height="337" src="https://ogo.blob.core.windows.net/cspack12austin/Crux_Climbing_2_2024791139585221697.jpg" width="600"></p>

<p><strong>THIS IS AN OPEN RECRUITMENT EVENT WHERE SCOUTS AND THEIR FAMILIES CAN INVITE FRIENDS TO PARTICIPATE.&nbsp;</strong>(Please include any guests in RSVP headcount)</p>

<p>Scouts and friends will have a chance to explore rock climbing and bouldering on July 20th at 4pm at&nbsp;Crux Indoor Climbing Center located at 121 Pickle Dr. Ste 100,&nbsp;Austin, TX 78704.</p>

<p>$16 per participant. Cost includes harness &amp;&nbsp;shoe rental.&nbsp;Pack is providing instructors to help scouts during the event. PLEASE RSVP at&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=220">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=220</a></p>

<p>Class B T-Shirts, Socks required.</p>
                  </td>
                  <td class="text-center " id="TD795ROW45DATA3913">
                    07/09/2024
                  </td>
                  <td class="text-center " id="TD795ROW45DATA3914">
                    07/20/2024
                  </td>
                  <td class="text-center " id="TD795ROW45DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW45DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW45DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW45DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1040" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=51&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW46DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1050" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=46&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW46DATA3911">
                    Council Event - TechLab Summer Day Camp
                  </td>
                  <td class="text-center " id="TD795ROW46DATA3912">
                    <p style="text-align:center"><img alt="" height="297.8616352201258" src="https://ogo.blob.core.windows.net/cspack12austin/2024-TechLab-landing-page-header-795x370_2024571617332314547.png" width="640"></p>

<p>Week-long STEAM DAY CAMP.&nbsp;Open for all youth entering 3rd grade - 9th grade (does not need to be a scout)</p>

<p>Info &amp; Registration: <a href="https://www.bsacac.org/activities/stem/techlab/" target="_blank">https://www.bsacac.org/activities/stem/techlab/</a></p>

<p>Choice of week</p>

<ul>
	<li>Week 1 – June 24-28</li>
	<li>Week 2 – July 8-12</li>
	<li>Week 3 – July 15-19</li>
	<li>Week 4 – July 22-26</li>
</ul>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW46DATA3913">
                    05/07/2024
                  </td>
                  <td class="text-center " id="TD795ROW46DATA3914">
                    07/19/2024
                  </td>
                  <td class="text-center " id="TD795ROW46DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW46DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW46DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW46DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1060" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=46&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW47DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1070" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=47&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW47DATA3911">
                    Council Event - Outdoor Overnight Adventure
                  </td>
                  <td class="text-center " id="TD795ROW47DATA3912">
                    <p style="text-align: center;"><img alt="" height="239.8993710691824" src="https://ogo.blob.core.windows.net/cspack12austin/2024-outdoor-overnight-ADVENTURE-web-banner_20245716204776353.jpg" width="640"></p>

<p>4 Day overnight camp. Open to Cub Scouts of all ranks (must be registered scout) Activities include swimming, archery, boating, BB guns, climbing, fishing, and more. Canvas tent &amp; meals provided.</p>

<p>Parent Guide &amp; Info:&nbsp;<a href="https://scoutingevent.com/Download/564128102/OR/Outdoor_Overnight_Adventure_2024_Parent_Guide_v12.pdf" target="_blank">https://scoutingevent.com/Download/564128102/OR/Outdoor_Overnight_Adventure_2024_Parent_Guide_v12.pdf</a></p>

<p>Registration: <a href="https://www.bsacac.org/activities/cub-scout-activities/outdoorovernightadventure/" target="_blank">https://www.bsacac.org/activities/cub-scout-activities/outdoorovernightadventure/</a></p>

<p>Jun 30 - Jul 3</p>
                  </td>
                  <td class="text-center " id="TD795ROW47DATA3913">
                    05/07/2024
                  </td>
                  <td class="text-center " id="TD795ROW47DATA3914">
                    06/28/2024
                  </td>
                  <td class="text-center " id="TD795ROW47DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW47DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW47DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW47DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1080" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=47&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW48DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1090" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=50&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW48DATA3911">
                    Raingutter Regatta - June 8
                  </td>
                  <td class="text-center " id="TD795ROW48DATA3912">
                    <p style="text-align:center"><img alt="" height="429" src="https://ogo.blob.core.windows.net/cspack12austin/Raingutter_Regatta_20245161429329904383.jpg" width="600"></p>

<p>Join Pack 12 at our annual Raingutter Regatta on June 8th at VFW 4443. Scouts will have an opportunity to&nbsp;build and race sailboats from recycled materials and then race them down our 10' raingutter. Families are asked to bring materials such as egg cartons, Amazon envelopes, pool noodles, styrofoam packaging, or other materials you believe will make great sailboat. Please RSVP on the calendar for accurate food headcount.&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=218" target="_blank">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=218</a><br>
<br>
We'll also have a cookout where the VFW/Pack will provide the protein and&nbsp;families are asked&nbsp;to help bring side dishes - SignUp Genius to come.</p>
                  </td>
                  <td class="text-center " id="TD795ROW48DATA3913">
                    05/16/2024
                  </td>
                  <td class="text-center " id="TD795ROW48DATA3914">
                    06/08/2024
                  </td>
                  <td class="text-center " id="TD795ROW48DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW48DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW48DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW48DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1100" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=50&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW49DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1110" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=48&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW49DATA3911">
                    Council Event - Days of Discovery Day Camp
                  </td>
                  <td class="text-center " id="TD795ROW49DATA3912">
                    <p style="text-align:center"><img alt="" height="239.8993710691824" src="https://ogo.blob.core.windows.net/cspack12austin/days-of-discovery-web-banner_2024571624552203275.jpg" width="640"></p>

<p>Week-long day camp exploring the pioneer days of 1800’s. Learn about the skills used in days gone past, such as metal shaping, quilting, candle making, gardening, archery, animal care, and more. Open for all youth entering 1st grade - 5th grade (does not need to be a scout)</p>

<p>Choice of Week:</p>

<ul>
	<li>Week 1: June 3-7, 2024</li>
	<li>Week 2: June 10-14, 2024</li>
</ul>

<p>Info &amp; Registration: <a href="https://www.bsacac.org/activities/cub-scout-activities/daysofdiscovery/&nbsp;" target="_blank">https://www.bsacac.org/activities/cub-scout-activities/daysofdiscovery/&nbsp;</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW49DATA3913">
                    05/07/2024
                  </td>
                  <td class="text-center " id="TD795ROW49DATA3914">
                    06/07/2024
                  </td>
                  <td class="text-center " id="TD795ROW49DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW49DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW49DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW49DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1120" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=48&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW50DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1130" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=44&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW50DATA3911">
                    Pack 12 Graduation - May 19
                  </td>
                  <td class="text-center " id="TD795ROW50DATA3912">
                    <p style="text-align:center"><img alt="" height="429" src="https://ogo.blob.core.windows.net/cspack12austin/P12_Graduation_202457168429751001.jpg" width="600"></p>

<p>Celebrate your scouts' accomplishments as they earn their rank at the Pack 12 Graduation.</p>

<p>Scouts should be dressed (wearing) their&nbsp;current rank's neckerchief and cap,&nbsp;and parents should bring their scouts new neckerchief and cap for their next rank. During the ceremony, parents will help change their neckerchief and cap to the new version.</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW50DATA3913">
                    05/07/2024
                  </td>
                  <td class="text-center " id="TD795ROW50DATA3914">
                    05/19/2024
                  </td>
                  <td class="text-center " id="TD795ROW50DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW50DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW50DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW50DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1140" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=44&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW51DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1150" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=49&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW51DATA3911">
                    Pack Meeting - May 14
                  </td>
                  <td class="text-center " id="TD795ROW51DATA3912">
                    <p style="text-align: center;"><img alt="" height="450" src="https://ogo.blob.core.windows.net/cspack12austin/Tug_O_War_2024571724442618043.jpg" width="600"></p>

<p>Final Pack Meeting of the year. Please wear Class B (yellow t-shirt) and closed toe shoes for our annual Tug-O-War!</p>
                  </td>
                  <td class="text-center " id="TD795ROW51DATA3913">
                    05/07/2024
                  </td>
                  <td class="text-center " id="TD795ROW51DATA3914">
                    05/14/2024
                  </td>
                  <td class="text-center " id="TD795ROW51DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW51DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW51DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW51DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1160" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=49&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW52DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1170" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=42&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW52DATA3911">
                    Clayton Elementary Cleanup - May 11
                  </td>
                  <td class="text-center " id="TD795ROW52DATA3912">
                    <p style="text-align:center"><img alt="" height="304" src="https://ogo.blob.core.windows.net/cspack12austin/ClaytonES_8231_2024472127116286787.jpg" width="470"></p>

<p>Pack 12's Spring Community Service Project is helping clean up the grounds at Clayton Elementary.&nbsp;</p>

<p>Pack 12 will supply trash bags and gloves for our scouts to walk the grounds and help pick up trash.<br>
No leaf blowers are needed for this clean up event.</p>
                  </td>
                  <td class="text-center " id="TD795ROW52DATA3913">
                    05/02/2024
                  </td>
                  <td class="text-center " id="TD795ROW52DATA3914">
                    05/11/2024
                  </td>
                  <td class="text-center " id="TD795ROW52DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW52DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW52DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW52DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1180" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=42&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW53DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1190" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=43&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW53DATA3911">
                    UPDATED TIME 10 am - Rocket Derby - May 4 (Inspections May 3)
                  </td>
                  <td class="text-center " id="TD795ROW53DATA3912">
                    <p style="text-align:center"><img alt="" height="500" src="https://ogo.blob.core.windows.net/cspack12austin/a3b6748f799627e1b644633f57da46fa_2024472130291615716.jpg" width="474"></p>

<p><strong>UPDATED TIME: We will start at 10am due to fog and potential rain earlier</strong></p>

<p>All rockets participating in the Rocket Derby must be submitted for inspection on May 3rd. Sign up for a time slot at:&nbsp;<a href="https://www.signupgenius.com/go/10C0D45ABAC2BA2FBCE9-48714812-rocket#/">https://www.signupgenius.com/go/10C0D45ABAC2BA2FBCE9-48714812-rocket#/</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW53DATA3913">
                    04/07/2024
                  </td>
                  <td class="text-center " id="TD795ROW53DATA3914">
                    05/04/2024
                  </td>
                  <td class="text-center " id="TD795ROW53DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW53DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW53DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW53DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1200" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=43&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW54DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1210" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=45&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW54DATA3911">
                    Outstanding Dues
                  </td>
                  <td class="text-center " id="TD795ROW54DATA3912">
                    <p style="text-align:center"><img alt="" height="382" src="https://ogo.blob.core.windows.net/cspack12austin/70001949-0-image-a-44_1681915440210_202447213587718305.jpeg" width="636"></p>

<p>Parents&nbsp;- Please check your family's account balances to make sure you've completed any outstanding payments for the year.&nbsp;</p>

<p>To see any account balances owed, go to MENU -&gt; MY STUFF -&gt; MY FAMILY</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW54DATA3913">
                    04/07/2024
                  </td>
                  <td class="text-center " id="TD795ROW54DATA3914">
                    05/01/2024
                  </td>
                  <td class="text-center " id="TD795ROW54DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW54DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW54DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW54DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1220" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=45&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW55DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1230" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=41&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW55DATA3911">
                    Spring Campout Registration Open
                  </td>
                  <td class="text-center " id="TD795ROW55DATA3912">
                    <p style="text-align:center"><img alt="" height="393.21033210332104" src="https://ogo.blob.core.windows.net/cspack12austin/Bastrop_State_Park_20242242038438160581.jpg" width="640"></p>

<p>Pack 12's Spring Campout is scheduled for April 19-21 at Bastrop State Park. Less than 1 hour from Austin and a stone's throw from Buc-ee's. Registration is open now and deadline to register is April 7th.&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW55DATA3913">
                    02/24/2024
                  </td>
                  <td class="text-center " id="TD795ROW55DATA3914">
                    04/10/2024
                  </td>
                  <td class="text-center " id="TD795ROW55DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW55DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW55DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW55DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1240" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=41&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW56DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1250" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=40&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW56DATA3911">
                    Committee / Den Leader Meeting March 3rd
                  </td>
                  <td class="text-center " id="TD795ROW56DATA3912">
                    <p style="text-align:center"><img alt="" height="342" src="https://ogo.blob.core.windows.net/cspack12austin/Den_Leader_Ashton_20242242040442758271.jpg" width="600"></p>

<p>Pack 12 leaders,<br>
We will be conducting our annual planning meeting during our March 3rd&nbsp;Pack 12 Committee/Leader meeting at Cubmaster Nate’s home. All Committee Members and Den Leaders are asked to attend.</p>

<p><u><strong>Any parents looking to volunteer with Pack 12 are welcome to join.</strong></u> Meeting details are on the Pack 12 calendar.<br>
<br>
Agenda includes<br>
- March&nbsp;Pack Meeting<br>
- Spring Campout<br>
- Rocket Derby<br>
- Rank Advancement Progress &amp; Graduation<br>
- 2024-2025 Planning<br>
&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW56DATA3913">
                    02/24/2024
                  </td>
                  <td class="text-center " id="TD795ROW56DATA3914">
                    03/03/2024
                  </td>
                  <td class="text-center " id="TD795ROW56DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW56DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW56DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW56DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1260" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=40&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW57DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1270" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=38&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW57DATA3911">
                    Pack 12 Crossover, Feb 24 @ 10AM
                  </td>
                  <td class="text-center " id="TD795ROW57DATA3912">
                    <p style="text-align:center"><img alt="" height="360.2962962962963" src="https://ogo.blob.core.windows.net/cspack12austin/IMG_3345_2024217819516562554.jpg" width="640"></p>

<p>All Pack 12 scouts are encouraged to attend the Pack 12 Crossover Ceremony on Saturday, February 24th, beginning at 10AM at VFW 4443 (7614 Thomas Springs Rd, Austin, TX 78736). Crossover is where we celebrate the achievements of our departing 5th grade scouts as they transition into Scouts BSA Troops, and turn over our Pack to our 4th grade Webelos.&nbsp;</p>

<p><strong>ALL 4th AND 5th GRADE SCOUTS SHOULD ATTEND THIS CEREMONY, and all other scouts are highly encouraged to attend.</strong></p>

<p>Agenda will include Activities &amp; Games for all scouts, BBQ lunch will be served (Pack 12 provides protein, families are asked to bring potluck sides &amp; vegetarian options), followed by the crossover ceremony.</p>

<p>RSVP Here:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=120" target="_blank">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=120</a></p>

<p>Potluck Sign Up Here:&nbsp;<a href="https://www.signupgenius.com/go/30E054AACA62CA6FD0-47835522-2024#/" target="_blank">https://www.signupgenius.com/go/30E054AACA62CA6FD0-47835522-2024#/</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW57DATA3913">
                    02/16/2024
                  </td>
                  <td class="text-center " id="TD795ROW57DATA3914">
                    02/24/2024
                  </td>
                  <td class="text-center " id="TD795ROW57DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW57DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW57DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW57DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1280" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=38&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW58DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1290" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=32&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW58DATA3911">
                    NASA Space Center Houston Overnight - WAITLIST
                  </td>
                  <td class="text-center " id="TD795ROW58DATA3912">
                    <p style="text-align:center"><img alt="" height="479.5733333333333" src="https://ogo.blob.core.windows.net/cspack12austin/NASA-Space-Center-Houston-2022-01-01_20239141849417410029.jpeg" width="640"></p>

<p><strong>ANY NEW RSVPs BEYOND OUR 200 SECURED SPOTS WILL BE WAITLISTED.</strong></p>

<p>Get ready to launch into an incredible experience at NASA during&nbsp;Pack 12's Winter Overnight at Space Center Houston.</p>

<p>The overnight has a choice of indoor accommodations as well as outdoor camping under the SpaceX rocket or NASA 905 shuttle aircraft carrier and shuttle. Activities include&nbsp;hands-on STEM experiences, a general admission ticket to explore Space Center Houston exhibits and experiences to be used either before or after the Overnight, and a&nbsp;NASA Tram Tour to Johnson Space Center the morning of your 2nd Day.</p>

<p>Registration is open now, but limited to the first 200 registrants.&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=96">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=96</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW58DATA3913">
                    09/14/2023
                  </td>
                  <td class="text-center " id="TD795ROW58DATA3914">
                    11/30/2023
                  </td>
                  <td class="text-center " id="TD795ROW58DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW58DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW58DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW58DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1300" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=32&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW59DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1310" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=37&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW59DATA3911">
                    NEW LOCATION: Webelos Woods - Oct 21 Dick Nichols Park
                  </td>
                  <td class="text-center " id="TD795ROW59DATA3912">
                    <p style="text-align:center"><img alt="" height="335" src="https://ogo.blob.core.windows.net/cspack12austin/webelos_woods_2020a__1__20231011020563684140.jpg" width="621"></p>

<p>WEBELOS WOODS IS NO LONGER A CAMPING EVENT! The entire event will take place on Saturday morning, Oct. 21 from 9 until noon at Dick Nichols Park. Webelos and AOL Scouts (4th &amp; 5th grade) arrive in time for flag ceremony at 9 AM. Each troop will have an opportunity to impress the prospective scouts and their parents, then all are welcome to stay for snacks from noon until 1 p.m.</p>
                  </td>
                  <td class="text-center " id="TD795ROW59DATA3913">
                    10/01/2023
                  </td>
                  <td class="text-center " id="TD795ROW59DATA3914">
                    10/22/2023
                  </td>
                  <td class="text-center " id="TD795ROW59DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW59DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW59DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW59DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1320" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=37&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW60DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1330" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=35&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW60DATA3911">
                    BSA Medical Forms Needed
                  </td>
                  <td class="text-center " id="TD795ROW60DATA3912">
                    <p style="text-align:center"><img alt="" height="334.93333333333334" src="https://ogo.blob.core.windows.net/cspack12austin/BSA-medical-form-for-cub-scouts-f-1_20239241654305141518.jpg" width="640"></p>

<p>EVERY INDIVIDUAL who is&nbsp;planning to attend a Pack overnight trip (camping, winter overnight, etc.) must submit a completed BSA Medical Form along with a current copy of their Health Insurance. This means scouts, parents, siblings, and spouses.</p>

<p>Families are asked to turn in their BSA Medcal Forms + copy of Health Insurance card to their Den Leaders as soon as possible as we will need them on-file prior to our Fall Campout in October. Families failing to submit their BSA Medical Forms will not be allowed to attend overnight activities.</p>

<p><a href="https://filestore.scouting.org/filestore/HealthSafety/pdf/680-001_AB.pdf" target="_blank">BSA MEDICAL FORM CAN BE FOUND HERE</a>.</p>
                  </td>
                  <td class="text-center " id="TD795ROW60DATA3913">
                    09/24/2023
                  </td>
                  <td class="text-center " id="TD795ROW60DATA3914">
                    10/21/2023
                  </td>
                  <td class="text-center " id="TD795ROW60DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW60DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW60DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW60DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1340" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=35&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW61DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1350" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=33&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW61DATA3911">
                    Fall Campout - Oct 27-29
                  </td>
                  <td class="text-center " id="TD795ROW61DATA3912">
                    <p style="text-align:center"><img alt="" height="360" src="https://ogo.blob.core.windows.net/cspack12austin/Fall_Campout_2023_202391523332723289.jpg" width="640"></p>

<p>Registration is open for Pack 12's Fall Campout.</p>

<p>This year, we're not going too far as we'll be heading to McGimsey Scout Park in San Antonio, TX. McGimsey is 140 acres in the middle of San Antonio, but you'd never realize you're in the city.&nbsp;There will be hiking, fishing, archery, gagaball and even a pirate ship to explore!&nbsp;&nbsp;RSVP for the campout here:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=60">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=60</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW61DATA3913">
                    09/15/2023
                  </td>
                  <td class="text-center " id="TD795ROW61DATA3914">
                    10/15/2023
                  </td>
                  <td class="text-center " id="TD795ROW61DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW61DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW61DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW61DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1360" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=33&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW62DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1370" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=27&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW62DATA3911">
                    Pack Meeting - October 10th
                  </td>
                  <td class="text-center " id="TD795ROW62DATA3912">
                    <p style="text-align:center"><img alt="" height="200" src="https://ogo.blob.core.windows.net/cspack12austin/pack-meeting1_202392933363157410.jpg" width="500"></p>

<p>The next Pack Meeting is Tuesday, October 10th&nbsp;at Baldwin Elementary Cafeteria beginning at 6:30pm. ALL PACK 12 scouts are invited to attend every pack&nbsp;meeting.</p>

<p>Please wear Class A uniforms and be prompt as we have many topics to go through.</p>
                  </td>
                  <td class="text-center " id="TD795ROW62DATA3913">
                    09/29/2023
                  </td>
                  <td class="text-center " id="TD795ROW62DATA3914">
                    10/11/2023
                  </td>
                  <td class="text-center " id="TD795ROW62DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW62DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW62DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW62DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1380" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=27&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW63DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1390" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=36&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW63DATA3911">
                    Sync the Pack 12 Calendar Automatically
                  </td>
                  <td class="text-center " id="TD795ROW63DATA3912">
                    <p style="text-align:center"><img alt="" height="335" src="https://ogo.blob.core.windows.net/cspack12austin/2022_What-Is-Calendar-Sync-1024x536_2023924171227235929.png" width="640"></p>

<p>With the <strong>Subscribe to Calendar</strong> feature on the Pack 12 Website, it's really easy to sync the Pack's Calendar, and even your Den-specific events, with your personal calendar.</p>

<p>Simply log into the Pack 12 website and go to MENU -&gt; MY STUFF -&gt; SUBSCRIBE TO CALENDAR. Copy the unique URL for your account, and add to a calendar subscription on your mobile phone.</p>
                  </td>
                  <td class="text-center " id="TD795ROW63DATA3913">
                    09/24/2023
                  </td>
                  <td class="text-center " id="TD795ROW63DATA3914">
                    10/09/2023
                  </td>
                  <td class="text-center " id="TD795ROW63DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW63DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW63DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW63DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1400" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=36&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW64DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1410" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=28&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW64DATA3911">
                    Committee / Den Leader Meeting - October 1st
                  </td>
                  <td class="text-center " id="TD795ROW64DATA3912">
                    <p style="text-align:center"><img alt="" height="300" src="https://ogo.blob.core.windows.net/cspack12austin/pack-committee_20237152212354253783.jpg" width="428"></p>

<p>Next Pack 12 Committee / Den Leader meeting is October 1st at Cubmaster Nate's home.</p>

<p>If you're a committee member or den leader, you or a member of your den <strong>NEEDS TO BE HERE</strong>. Additionally, if you're a parent interested in helping Pack 12, you're also invited to attend and learn about the volunteering opportunities with the Pack.</p>
                  </td>
                  <td class="text-center " id="TD795ROW64DATA3913">
                    09/22/2023
                  </td>
                  <td class="text-center " id="TD795ROW64DATA3914">
                    10/02/2023
                  </td>
                  <td class="text-center " id="TD795ROW64DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW64DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW64DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW64DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1420" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=28&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW65DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1430" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=30&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW65DATA3911">
                    Popcorn Fundraiser – Sep 15-Oct 28
                  </td>
                  <td class="text-center " id="TD795ROW65DATA3912">
                    <p style="text-align:center"><img alt="" height="290.90909090909093" src="https://ogo.blob.core.windows.net/cspack12austin/Popcorn_Booth_2023913221211808955.jpg" width="640"></p>

<p>It's popcorn time at Pack 12!</p>

<p>Make sure to sign your scout(s) up to help in Pack 12's fundraiser. To register visit <a href="https://trails-end.com" target="_blank">https://trails-end.com</a> or download the Trails End app from your mobile device app store. More information on Popcorn fundraising can be found by logging into the Pack 12 website and going to MENU -&gt; HOME -&gt; FUNDRAISING.&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW65DATA3913">
                    09/13/2023
                  </td>
                  <td class="text-center " id="TD795ROW65DATA3914">
                    09/30/2023
                  </td>
                  <td class="text-center " id="TD795ROW65DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW65DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW65DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW65DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1440" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=30&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW66DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1450" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=34&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW66DATA3911">
                    Den Leader Training - September 24
                  </td>
                  <td class="text-center " id="TD795ROW66DATA3912">
                    <p style="text-align:center"><img alt="" height="121" src="https://ogo.blob.core.windows.net/cspack12austin/trained-patch-300x121-300x121_202391995286839333.jpg" width="300"></p>

<p>All new AND existing Den Leaders and Assistant Den Leaders are invited to this training to learn more about executing the Cub Scout program for your den.&nbsp;We'll cover leader registration, best practices, conducting a den meeting, additional/optional training,&nbsp;and adult leader award opportunities.&nbsp;Existing leaders may refresh their skills, learn new skills, or pass on tips and tricks to new leaders.</p>

<p>This is an in-person training at Cubmaster Nate's home at 4pm. No uniform is needed for this training.</p>
                  </td>
                  <td class="text-center " id="TD795ROW66DATA3913">
                    09/19/2023
                  </td>
                  <td class="text-center " id="TD795ROW66DATA3914">
                    09/25/2023
                  </td>
                  <td class="text-center " id="TD795ROW66DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW66DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW66DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW66DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1460" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=34&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW67DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1470" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=31&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW67DATA3911">
                    New Scout Celebration - September 16
                  </td>
                  <td class="text-center " id="TD795ROW67DATA3912">
                    <p style="text-align:center"><img alt="" height="426.5625" src="https://ogo.blob.core.windows.net/cspack12austin/New_Scout_Celebration_20239132221403156476.jpg" width="640"></p>

<p>LOCATION CHANGE DUE TO CHANCE OF RAIN: Abiding Love Lutheran Church Activity Center at 7210 Brush Country Rd, Austin, TX 78749</p>

<p>All <u><strong>NEW</strong></u> Pack 12 Cub Scouts (from all ranks) are invited to Founders Park in Dripping Springs on Saturday&nbsp;at 5:30pm for our celebration.</p>

<ul>
	<li>
	<p>Wear Class A Uniforms</p>
	</li>
	<li>
	<p>Bring Camp Chairs</p>
	</li>
	<li>
	<p>Bring Water Bottles</p>
	</li>
	<li>
	<p>Cheese &amp; Pepperoni Pizza Rolls will be provided</p>
	</li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW67DATA3913">
                    09/13/2023
                  </td>
                  <td class="text-center " id="TD795ROW67DATA3914">
                    09/17/2023
                  </td>
                  <td class="text-center " id="TD795ROW67DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW67DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW67DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW67DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1480" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=31&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW68DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1490" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=29&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW68DATA3911">
                    New Scout Ceremony - September 16th
                  </td>
                  <td class="text-center " id="TD795ROW68DATA3912">
                    <p style="text-align:center"><img alt="" height="360" src="https://ogo.blob.core.windows.net/cspack12austin/Scout_Salute_202392944308266726.jpg" width="640"></p>

<p>New scouts and their families are invited to attend the Pack 12 New Scout Ceremony on Saturday, September 16th at Founders Park in Dripping Springs, beginning at 5:30pm.<br>
The New Scout Ceremony is for&nbsp;<strong>ALL NEW SCOUTS</strong>&nbsp;in Pack 12 who joined the pack after January 1, 2023&nbsp;regardless of rank, including transfers and scouts re-entering the Pack.</p>

<p>Please RSVP for an accurate food/beverage count:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=55">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=55</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW68DATA3913">
                    09/01/2023
                  </td>
                  <td class="text-center " id="TD795ROW68DATA3914">
                    09/16/2023
                  </td>
                  <td class="text-center " id="TD795ROW68DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW68DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW68DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW68DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1500" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=29&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW69DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1510" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=22&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW69DATA3911">
                    NEW DATE - Cubmobile - Aug 26th
                  </td>
                  <td class="text-center " id="TD795ROW69DATA3912">
                    <p>Cubmobile has been rescheduled to August 26th to help draw more participation. Please RSVP for the event on pack12rocks.org so we can manage our race schedule.<br>
RSVP at:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=36">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=36</a></p>

<p>Each den only needs one cubmobile car to participate. If your den does not already have a car, it is time to start building one. Reach out to your den leader to see when you can set some time to build your Cubmobile. If your den doesn't feel like they can build one for the event, please reach out to <a href="mailto:jason@jasoncantin.com?subject=Cubmobile%20Help">Jason Cantin</a> or <a href="mailto:ncarty97@gmail.com?subject=Cubmobile%20Help">Nate Carty</a> to work out alternate plans.</p>

<p><a href="https://drive.google.com/file/d/1WnETW_sG15FTgeQxAnKghoQ7NCGVHVTc/view?usp=sharing" target="_blank">Cubmobile Building Instructions</a></p>

<p>&nbsp;</p>

<p style="text-align:center"><img alt="" height="398.9237668161435" src="https://ogo.blob.core.windows.net/cspack12austin/Cubmobile_2022_20235311858523993260.jpg" width="640"></p>
                  </td>
                  <td class="text-center " id="TD795ROW69DATA3913">
                    05/31/2023
                  </td>
                  <td class="text-center " id="TD795ROW69DATA3914">
                    08/26/2023
                  </td>
                  <td class="text-center " id="TD795ROW69DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW69DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW69DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW69DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1520" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=22&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW70DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1530" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=26&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW70DATA3911">
                    NEW DATE - Committee / Den Leader Meeting - Aug 20th
                  </td>
                  <td class="text-center " id="TD795ROW70DATA3912">
                    <p>The first Pack 12 Committee / Den Leader meeting of the 2023-24 year has been moved to August 20th&nbsp;at Cubmaster Nate's home.</p>

<p>If you're a committee member or den leader, you or a member of your den <strong>NEEDS TO BE HERE</strong> as we will be discussing a number of changes for the 2023-24 year. Additionally, if you're a parent interested in helping Pack 12, you're also invited to attend and learn about the volunteering opportunities with the Pack.</p>

<p>Event Details at:&nbsp; <a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=63">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=63</a></p>

<p style="text-align:center"><img alt="" height="448.75" src="https://ogo.blob.core.windows.net/cspack12austin/pack-committee_20237152212354253783.jpg" width="640"></p>
                  </td>
                  <td class="text-center " id="TD795ROW70DATA3913">
                    07/15/2023
                  </td>
                  <td class="text-center " id="TD795ROW70DATA3914">
                    08/20/2023
                  </td>
                  <td class="text-center " id="TD795ROW70DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW70DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW70DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW70DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1540" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=26&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW71DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1550" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=25&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW71DATA3911">
                    Bowling with the Pack
                  </td>
                  <td class="text-center " id="TD795ROW71DATA3912">
                    <p>On July 15th we invite everyone to join us for Pack 12 Bowl-A-Rama at Westgate Lanes (2701 W William Cannon Dr.) The cost will be $11.00 per person, shoes are included. Please RSVP at&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=35">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=35</a></p>

<p style="text-align:center"><img alt="" height="254.08" src="https://ogo.blob.core.windows.net/cspack12austin/Bowling_20236211822471709755.jpg" width="640"></p>
                  </td>
                  <td class="text-center " id="TD795ROW71DATA3913">
                    06/21/2023
                  </td>
                  <td class="text-center " id="TD795ROW71DATA3914">
                    07/14/2023
                  </td>
                  <td class="text-center " id="TD795ROW71DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW71DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW71DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW71DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1560" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=25&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW72DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1570" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=13&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW72DATA3911">
                    Summertime Council Events
                  </td>
                  <td class="text-center " id="TD795ROW72DATA3912">
                    <p>Our Capitol Area Council is conducting multiple events throughout the summer. Events include:</p>

<ul>
	<li><a href="https://www.bsacac.org/activities/cub-scout-activities/cub-scout-day-camp/">Cub Scout Day Camp</a> - 3 day summer day camps, June, July (all scouts eligible)</li>
	<li><a href="https://www.bsacac.org/activities/stem/techlab/">TechLab Summer STEAM Day Camp</a> - Anderson HS Late June and through July (rising 3rd - 5th graders)</li>
	<li><a href="https://www.bsacac.org/activities/cub-scout-activities/webelos-extreme-adventure-camp/">Webelos Extreme</a> - July 5th - 8th Lost Pines (rising 4th &amp; 5th graders)</li>
</ul>

<p>If your scout is interested in participating, click on the link on each event for registration information. These are not Pack events, so families&nbsp;will be responsible for registering for these events on their own.</p>

<p>Participation in one of these events also makes your scout eligible for the Cub Scout Outdoor Activity Award.</p>

<p style="text-align:center"><img alt="" height="257" src="https://ogo.blob.core.windows.net/cspack12austin/Outdoor-Activity-Emblem_20235261645242878062.jpg" width="448"></p>
                  </td>
                  <td class="text-center " id="TD795ROW72DATA3913">
                    04/12/2023
                  </td>
                  <td class="text-center " id="TD795ROW72DATA3914">
                    07/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW72DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW72DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW72DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW72DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1580" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=13&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW73DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1590" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=24&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW73DATA3911">
                    4th of July Parade
                  </td>
                  <td class="text-center " id="TD795ROW73DATA3912">
                    <p>Join Pack 12 for a 4th of July parade around Circle C Ranch on <strong>Saturday, July 1</strong>. Arrival at 8:30 at Circle C Swim Center (corner of La Crosse &amp; Escarpment). The parade begins at 9am.<br>
<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=24">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=24</a></p>

<p>Following the parade will be face painting, balloon twisting, snow cones.</p>

<p style="text-align:center"><img alt="" height="254.08" src="https://ogo.blob.core.windows.net/cspack12austin/Circle_C_4th_of_July_Parade_2023621181785259472.jpg" width="640"></p>
                  </td>
                  <td class="text-center " id="TD795ROW73DATA3913">
                    06/21/2023
                  </td>
                  <td class="text-center " id="TD795ROW73DATA3914">
                    06/30/2023
                  </td>
                  <td class="text-center " id="TD795ROW73DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW73DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW73DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW73DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1600" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=24&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW74DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1610" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=21&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW74DATA3911">
                    RSVP for Summer Pack Events
                  </td>
                  <td class="text-center " id="TD795ROW74DATA3912">
                    <p>Pack 12's Summer Events are now available on the website to&nbsp;RSVP.</p>

<ul>
	<li>June 17: <a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=23" target="_blank">Raingutter Regatta,&nbsp;Outdoor Games, &amp; Cookout @ VFW4443</a></li>
	<li>July 1: <a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=24" target="_blank">4th of July Parade @ Circle C Swim Center</a></li>
	<li>July 15: <a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=35" target="_blank">Bowling with the Pack @ Westgate Lanes</a></li>
	<li>August 5: <a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=36" target="_blank">Cub Mobile Derby &amp; Ice Cream Party @ Abiding Love Lutheran Church</a></li>
</ul>

<p>If your scout participates in one event each month, they will earn the Summertime Pack Award!</p>

<p style="text-align:center"><img alt="" height="207.11111111111111" src="https://ogo.blob.core.windows.net/cspack12austin/summertime-pins_orig_20235261642204236533.jpg" width="640"></p>
                  </td>
                  <td class="text-center " id="TD795ROW74DATA3913">
                    05/25/2023
                  </td>
                  <td class="text-center " id="TD795ROW74DATA3914">
                    06/17/2023
                  </td>
                  <td class="text-center " id="TD795ROW74DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW74DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW74DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW74DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1620" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=21&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW75DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1630" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=23&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW75DATA3911">
                    This Coming Saturday - Raingutter Regatta 6/17
                  </td>
                  <td class="text-center " id="TD795ROW75DATA3912">
                    <p>Egg cartons, pool noodles, plastic&nbsp;cups, oh my!</p>

<p>Don't forget to start&nbsp;saving your recyclables for the Raingutter Regatta on June 17th. Bring those recyclables to the VFW where scouts will be building their boats on-site before racing them down the raingutter.</p>

<ul>
	<li>RSVP for the event here:&nbsp;<a href="https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=23">https://www.TroopWebHostCS.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=2486&amp;Stack=0&amp;Application_ID=2840&amp;ID=23</a></li>
	<li>Sign up to bring a side dish here:&nbsp;<a href="https://www.signupgenius.com/go/20f0b48afa929a4fc1-raingutter#/">https://www.signupgenius.com/go/20f0b48afa929a4fc1-raingutter#/</a></li>
	<li>Volunteer here:&nbsp;<a href="https://www.signupgenius.com/go/20f0b48afa929a4fc1-raingutter1#/">https://www.signupgenius.com/go/20f0b48afa929a4fc1-raingutter1#/</a></li>
</ul>

<p>&nbsp;</p>

<p style="text-align:center"><img alt="" height="426.5625" src="https://ogo.blob.core.windows.net/cspack12austin/Raingutter_2022_2023611143485308066.jpg" width="640"></p>
                  </td>
                  <td class="text-center " id="TD795ROW75DATA3913">
                    06/01/2023
                  </td>
                  <td class="text-center " id="TD795ROW75DATA3914">
                    06/16/2023
                  </td>
                  <td class="text-center " id="TD795ROW75DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW75DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW75DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW75DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1640" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=23&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW76DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1650" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=17&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW76DATA3911">
                    Extra Time for Rank Advancement
                  </td>
                  <td class="text-center " id="TD795ROW76DATA3912">
                    <p>If your scout did not complete their rank requirements in time for graduation, no need to worry. There's still time for them to earn their&nbsp;rank patch before we close our advancement records.</p>

<ul>
	<li><strong>May 30, 2023</strong> - Final advancement deadline for scouts <strong>registered in Pack 12 before January 1, 2023</strong>&nbsp;</li>
	<li><strong>July 31, 2023</strong>&nbsp;- if <strong>joined Pack 12 after January 1, 2023</strong></li>
</ul>

<p>Reach out to your Den Leader to learn more about what your scout may need to complete their rank requirements.</p>

<p><b id="docs-internal-guid-83f75ffc-7fff-656e-2000-5a19a8d31151">Please note: Scouts are NOT required to complete rank advancement to continue in scouting.</b></p>
                  </td>
                  <td class="text-center " id="TD795ROW76DATA3913">
                    05/07/2023
                  </td>
                  <td class="text-center " id="TD795ROW76DATA3914">
                    06/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW76DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW76DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW76DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW76DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1660" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=17&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW77DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1670" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW77DATA3911">
                    Volunteer with the Pack
                  </td>
                  <td class="text-center " id="TD795ROW77DATA3912">
                    <p>Pack 12 is grateful to all our parents who have helped the Pack have a great 2022-23 scouting year. But we are still looking for additional help in these areas...</p>

<ul>
	<li><strong>Popcorn Fundraising</strong>&nbsp;- Help the Pack run our fall popcorn sales fundraiser. This fundraiser helps offset almost 50% of the Pack's operating costs. Multiple volunteers welcomed.</li>
	<li><strong>Cub Scout Derbies</strong>&nbsp;- Helps plan and execute our Cub Scout Derbies including Pinewood Derby, Rocket Derby, Raingutter Regatta, and Cubmobile Derby. Multiple volunteers welcomed and encouraged.</li>
	<li><strong>Event Coordination</strong> - Help the Pack reserve our meeting facilities, campsite, and event locations.</li>
	<li><strong>Secretary</strong> - Helps the Pack&nbsp;clearly communicate with parents to keep everyone informed</li>
</ul>

<p>Please email Adrian De La Garza <adriandlg@mac.com> or Nate Carty <ncarty97@gmail.com> if you're interested or would like to learn more about the positions.</ncarty97@gmail.com></adriandlg@mac.com></p>
                  </td>
                  <td class="text-center " id="TD795ROW77DATA3913">
                    05/10/2023
                  </td>
                  <td class="text-center " id="TD795ROW77DATA3914">
                    05/31/2023
                  </td>
                  <td class="text-center " id="TD795ROW77DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW77DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW77DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW77DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1680" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=20&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW78DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1690" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=18&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW78DATA3911">
                    Spring Recruitment - May 24
                  </td>
                  <td class="text-center " id="TD795ROW78DATA3912">
                    <p>Pack 12's next recruitment event is coming up on May 24 at the Circle C Community Center from 6:00-7:30pm.</p>

<p>Please join us to help facilitate the event for families who are thinking about joining Cub Scouts and Pack 12. We need adults to help us run the paper rocket launcher and also to help direct families and answer questions. Bring your scout in their Class A uniform and they will earn their "Recruiter" patch.&nbsp;</p>

<p>Please RSVP here:&nbsp;<a href="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=34">https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=34</a></p>
                  </td>
                  <td class="text-center " id="TD795ROW78DATA3913">
                    05/10/2023
                  </td>
                  <td class="text-center " id="TD795ROW78DATA3914">
                    05/24/2023
                  </td>
                  <td class="text-center " id="TD795ROW78DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW78DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW78DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW78DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1700" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=18&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW79DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1710" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=12&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW79DATA3911">
                    Prepare for Pack Graduation
                  </td>
                  <td class="text-center " id="TD795ROW79DATA3912">
                    <p>Pack 12's Graduation will be held at the May 9th Pack Meeting.</p>

<ul>
	<li>Scouts should wear: Class A uniform&nbsp;- including their current rank regalia (neckerchief, slide, cap)</li>
	<li>Parents should also bring: Next rank neckerchief, slide, cap - which can be purchased at the <a href="https://www.bsacac.org/about/shop-info/">Scout Shop</a> in north Austin</li>
	<li>Parents will swap out their scouts neckerchief, slide, and cap during the ceremony
	<ul>
		<li>For example: If your scout is currently a&nbsp;1st grade Tiger. They should wear their Tiger neckerchief, slide, and cap to graduation. During the ceremony, parents will remove the Tiger items and&nbsp;replace them for their Wolf neckerchief, slide, and cap.</li>
	</ul>
	</li>
	<li>The Pack will provide the Rank patches for all scouts who have completed requirements by the May 2nd deadline</li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW79DATA3913">
                    04/12/2023
                  </td>
                  <td class="text-center " id="TD795ROW79DATA3914">
                    05/09/2023
                  </td>
                  <td class="text-center " id="TD795ROW79DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW79DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW79DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW79DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1720" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=12&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW80DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1730" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=11&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW80DATA3911">
                    Rank Requirement Deadline
                  </td>
                  <td class="text-center " id="TD795ROW80DATA3912">
                    <p>Rank Advancement deadline for your scout to receive their Rank Patch at the Pack Graduation ceremony is&nbsp;<strong><u>May 2nd</u></strong></p>

<ul>
	<li>All requirements must be completed AND entered into Scoutbook to receive rank patch at graduation</li>
	<li>Parents can work with their scout to make up any missed requirements</li>
	<li>Parent can mark requirements&nbsp;as complete in Scoutbook or let your den leader know</li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW80DATA3913">
                    04/12/2023
                  </td>
                  <td class="text-center " id="TD795ROW80DATA3914">
                    05/02/2023
                  </td>
                  <td class="text-center " id="TD795ROW80DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW80DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW80DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW80DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1740" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=11&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW81DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1750" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=16&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW81DATA3911">
                    Service Project: Clayton Elementary Clean Up
                  </td>
                  <td class="text-center " id="TD795ROW81DATA3912">
                    <p>Even with the cancellation of Clayton Carnival, there is still a need to remove trash&nbsp;around the campus, so our planned clean up of Clayton Elementary is still on starting at 10AM.</p>
                  </td>
                  <td class="text-center " id="TD795ROW81DATA3913">
                    04/28/2023
                  </td>
                  <td class="text-center " id="TD795ROW81DATA3914">
                    04/29/2023
                  </td>
                  <td class="text-center " id="TD795ROW81DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW81DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW81DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW81DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1760" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=16&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW82DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1770" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=15&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW82DATA3911">
                    CANCELLED: Pack 12 Recruitment Table Volunteers
                  </td>
                  <td class="text-center " id="TD795ROW82DATA3912">
                    <p>DUE TO APPROACHING WEATHER, THE CLAYTON CARNIVAL AND PACK 12 RECRUITING TABLE HAS BEEN CANCELLED.</p>

<p>-------&nbsp;<br>
Pack 12 is being provided a recruitment table at the Clayton Elementary Carnival&nbsp;on Friday, April 28th from 5-8pm. We're looking for den leaders, assistant den leaders, and Pack 12 parents to help man the recruitment table for 1 hour each to help share information about Pack 12 and invite families to our Spring recruitment event.&nbsp;</p>

<p>We're specifically looking for parents and leaders who do NOT attend Clayton Elementary to help recruit new scouts for Pack 12, since Clayton Elementary families will be participating in the carnival.&nbsp;</p>

<p>Register for a shift here:&nbsp;<a href="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=25">https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=318&amp;Form_ID=259&amp;Stack=2&amp;ID=25</a><br>
(Please only register adults for volunteering)</p>
                  </td>
                  <td class="text-center " id="TD795ROW82DATA3913">
                    04/15/2023
                  </td>
                  <td class="text-center " id="TD795ROW82DATA3914">
                    04/29/2023
                  </td>
                  <td class="text-center " id="TD795ROW82DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW82DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW82DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW82DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1780" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=15&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW83DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1790" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=14&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW83DATA3911">
                    Subscribe to the Pack 12 Calendar
                  </td>
                  <td class="text-center " id="TD795ROW83DATA3912">
                    <p>The new Pack 12 website has the ability to subscribe/sync the Pack calendar with your personal device.</p>

<ul>
	<li>Log in to:&nbsp;<a href="https://www.troopwebhostcs.org/Pack12Austin/">https://www.troopwebhostcs.org/Pack12Austin/</a></li>
	<li>From the&nbsp;<b>MENU</b>&nbsp;on top left, click&nbsp;<b>MY STUFF</b>&nbsp;-&gt;&nbsp;<b>SUBSCRIBE TO CALENDAR</b></li>
	<li>Copy the Calendar Subscription URL to add to&nbsp;to the calendar program of your choice:
	<ul>
		<li><b>Apple Calendar / iPhone</b>:&nbsp;<br>
		<a href="https://support.apple.com/guide/calendar/subscribe-to-calendars-icl1022/mac#:~:text=In%20the%20Calendar%20app%20on,an%20account%20for%20the%20subscription">https://support.apple.com/guide/calendar/subscribe-to-calendars-icl1022/mac#:~:text=In%20the%20Calendar%20app%20on,an%20account%20for%20the%20subscription</a>&nbsp;</li>
		<li><b>Google Calendar</b>&nbsp;(view “use a link to add public calendar” section):&nbsp;<br>
		<a href="https://support.google.com/calendar/answer/37100?hl=en&amp;co=GENIE.Platform%3DDesktop#zippy=%2Csee-how-to-subscribe-to-a-calendar-you-dont-own">https://support.google.com/calendar/answer/37100?hl=en&amp;co=GENIE.Platform%3DDesktop#zippy=%2Csee-how-to-subscribe-to-a-calendar-you-dont-own</a>&nbsp;</li>
		<li><b>Outlook</b>&nbsp;(view “subscribe to a calendar” section):&nbsp;<br>
		<a href="https://support.microsoft.com/en-gb/office/import-or-subscribe-to-a-calendar-in-outlook-com-cff1429c-5af6-41ec-a5b4-74f2c278e98c">https://support.microsoft.com/en-gb/office/import-or-subscribe-to-a-calendar-in-outlook-com-cff1429c-5af6-41ec-a5b4-74f2c278e98c</a>&nbsp;</li>
	</ul>
	</li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW83DATA3913">
                    04/14/2023
                  </td>
                  <td class="text-center " id="TD795ROW83DATA3914">
                    04/28/2023
                  </td>
                  <td class="text-center " id="TD795ROW83DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW83DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW83DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW83DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1800" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=14&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW84DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1810" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=8&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW84DATA3911">
                    Welcome to the new Pack 12 Website
                  </td>
                  <td class="text-center " id="TD795ROW84DATA3912">
                    <p>With our previous web hosting software, SOAR, going off-line, we've been hard at work getting this new website up and running in order to provide you and your scout with the resources you need to help finish up a great year of scouting with Pack 12.&nbsp;</p>

<p>Make sure to bookmark our new site:&nbsp;<a href="https://www.troopwebhostcs.org/Pack12Austin/">https://www.troopwebhostcs.org/Pack12Austin/</a></p>

<h3>Event Calendar</h3>

<p>We're working on getting our event calendar loaded onto this new website, so make sure to check the status of your Event Registrations.&nbsp; If you registered for events on the previous website and you're not seeing your RSVP here, please let us know so we can get it corrected.&nbsp; If you still need to signup for any upcoming events, please do so now.</p>

<h3>Future Capability</h3>

<p>We are&nbsp;continuing&nbsp;to learn more about our website features, and we will likely&nbsp;expand its functionality as we become more educated on how the site works.</p>
                  </td>
                  <td class="text-center " id="TD795ROW84DATA3913">
                    04/04/2023
                  </td>
                  <td class="text-center " id="TD795ROW84DATA3914">
                    04/21/2023
                  </td>
                  <td class="text-center " id="TD795ROW84DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW84DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW84DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW84DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1820" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=8&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW85DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1830" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=10&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW85DATA3911">
                    Pack Meeting - April 11
                  </td>
                  <td class="text-center " id="TD795ROW85DATA3912">
                    <p>April's Pack meeting will be held this Tuesday, April 11th at Clayton Elementary Cafeteria from 6:30pm - 7:30pm. (enter at the blacktop behind the school)</p>

<p>Uniform:</p>

<ul>
	<li>Class B - Yellow Pack 12 T-shirt</li>
</ul>

<p>Activity:</p>

<ul>
	<li>Tug of War - Your scout is welcome to bring gloves if they'd like.</li>
</ul>

<p>Den assignments:&nbsp;</p>

<ul>
	<li>Set Up/Clean Up: Den 2</li>
	<li>Flags: Den 1</li>
	<li>Prayer: Den 6</li>
</ul>
                  </td>
                  <td class="text-center " id="TD795ROW85DATA3913">
                    04/07/2023
                  </td>
                  <td class="text-center " id="TD795ROW85DATA3914">
                    04/12/2023
                  </td>
                  <td class="text-center " id="TD795ROW85DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW85DATA55030">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW85DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW85DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1840" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=10&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW86DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1850" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=1&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW86DATA3911">
                    Step #1  -  Getting Started
                  </td>
                  <td class="text-center " id="TD795ROW86DATA3912">
                    <p style="font-size: 80%; color: red;">This is an <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=25" target="x4glAppHelp">announcement&nbsp;</a> section.&nbsp; It is currently set up to display only after you log on to the site.&nbsp; This announcement will disappear in a few days.</p>

<p align="center"><img align="center" alt="" src="http://www.ourgrouponline.com/Images/happy.jpg"></p>

<p>Now that you've logged on, you can begin setting up your site.&nbsp; These initial steps are <strong>best performed from a computer with a full size screen</strong>.&nbsp; While it is possible to operate your TroopWebHostCS site from a cell phone, you'll find the administrative functions much easier to use with a large screen and keyboard.</p>

<p>We strongly recommend that you first&nbsp;take a few minutes to skim through the first chapter of our User Guide, entitled <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=2" target="x4glAppHelp">Getting Started</a>.&nbsp; &nbsp;<a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=4" target="x4glAppHelp">Get&nbsp;other leaders involved</a> early in the process and use the <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=5" target="x4glAppHelp">checklist</a> to track assignments.</p>

<p>Your TroopWebHost site will have one or more <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=20" target="x4glAppHelp">public pages</a>, which you'll want to set up first.&nbsp;&nbsp; These pages should:</p>

<ul>
	<li>Tell the public about your scouting unit and recruit new members.</li>
	<li>Instruct your members on how to log on and use the site.</li>
</ul>

<p>Each page consists of <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=22" target="x4glAppHelp">sections</a>.&nbsp; Each section can be available to the public, or to logged on members, or both.&nbsp; You maintain these sections by <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=22" target="x4glAppHelp">editing the page</a>.</p>

<p>Some sections can extract current information from your database.&nbsp; The section you're reading now is pulled from the Announcements table.&nbsp; See <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=25" target="x4glAppHelp">this page</a> to learn how to enter announcements.</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW86DATA3913">
                    01/11/2022
                  </td>
                  <td class="text-center " id="TD795ROW86DATA3914">
                    04/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW86DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW86DATA55030">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW86DATA55031">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW86DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1860" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=1&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW87DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1870" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=5&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW87DATA3911">
                    Step #2  -  Adding Members
                  </td>
                  <td class="text-center " id="TD795ROW87DATA3912">
                    <p style="font-size: 80%; color: red;">This is an <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=25" target="x4glAppHelp">announcement&nbsp;</a>.&nbsp; It will disappear in a few days.</p>

<p align="center"><img align="center" alt="" src="https://www.troopwebhost.com/Images2/Scouts400wide.jpg"></p>

<p>Your next step is to <strong>enter or upload your membership information</strong>.&nbsp; If you are migrating from another system, like <a href="http://www.troopwebhostCS.org/help.aspx?ID=304" target="x4glAppHelp">Scoutbook</a> or <a href="http://www.troopwebhostCS.org/help.aspx?ID=327" target="x4glAppHelp">Packmaster</a>, you may be able to export a file from that system that you can then upload into your TroopWebHostCS site.&nbsp; You'll find instructions for that process in the User Guide, but if you need help, please open a&nbsp;<a href="http://www.troopwebhostCS.org/help.aspx?ID=326" target="x4glAppHelp">Support Ticket</a>&nbsp;and we'll guide you through the process.</p>

<p>If you are not migrating from another system, use the&nbsp;<a href="http://www.troopwebhostCS.org/help.aspx?ID=62" target="x4glAppHelp">Add New Scout</a>&nbsp;button to enter scouts and their parents into the system.&nbsp; We recommend that you start by entering the scouts whose parents are leaders in the pack who are going to help you set up this site.&nbsp;&nbsp;</p>

<p>The system automatically creates a user ID and password for each scout and each adult you add to your roster.&nbsp; These user IDs&nbsp;will be authorized for a&nbsp;<a href="http://www.troopwebhostCS.org/help.aspx?ID=15" target="x4glAppHelp">user role</a>&nbsp;that gives them limited access to the system.&nbsp; You will need to&nbsp;<a href="http://www.troopwebhostCS.org/help.aspx?ID=16" target="x4glAppHelp">give leaders more access</a>&nbsp;so they can help you set up the site.</p>

<p>The&nbsp;<strong><a href="https://www.troopwebhostCS.org/formCustom.aspx?Menu_Item_ID=5788&amp;Stack=2">Membership Hub</a>&nbsp;is a great place to manage all of your membership information</strong>, including den numbers, leadership positions, and training.</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW87DATA3913">
                    01/10/2022
                  </td>
                  <td class="text-center " id="TD795ROW87DATA3914">
                    04/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW87DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW87DATA55030">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW87DATA55031">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW87DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1880" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=5&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW88DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1890" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=2&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW88DATA3911">
                    Step #3  -  Sending Out User IDs and Passwords
                  </td>
                  <td class="text-center " id="TD795ROW88DATA3912">
                    <p style="font-size: 80%; color: red;">This is an <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=25" target="x4glAppHelp">announcement&nbsp;</a>.&nbsp; It will disappear in a few days.</p>

<p align="center"><img align="center" alt="" src="https://www.troopwebhost.com/images/EmailIcon.png"></p>

<p>Once you have loaded your membership data into the system - or at least the membership records for the adult leaders who are helping you - you'll need&nbsp;to <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=17" target="x4glAppHelp">send them instructions on how to log on to the site</a>.</p>

<p>The <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=17" target="x4glAppHelp">Send User IDs and Passwords</a> page will send a personalized email to each person you select.&nbsp; That email will contain their user ID and a temporary password, along with a link to a page showing how to log on to the site.</p>

<p><strong>At this time, you should only send User IDs to the leaders who are helping you set up the site.</strong>&nbsp; There's no point in sending logon information yet to the scouts and parents, since there won't be much for them to see.&nbsp;</p>

<p>One more suggestion:&nbsp; Don't use this function to send to anyone who is already using this site, because it will reset their password&nbsp;and they'll have to change it again.</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW88DATA3913">
                    01/09/2022
                  </td>
                  <td class="text-center " id="TD795ROW88DATA3914">
                    04/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW88DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW88DATA55030">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW88DATA55031">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW88DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1900" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=2&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW89DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1910" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=3&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW89DATA3911">
                    Step #4  -  Setting Up Your Calendar
                  </td>
                  <td class="text-center " id="TD795ROW89DATA3912">
                    <p style="font-size: 80%; color: red;">This is an <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=25" target="x4glAppHelp">announcement&nbsp;</a>.&nbsp; It will disappear in a few days.</p>

<p align="center"><img align="center" alt="" src="https://www.TroopWebHost.com/images/CalendarImage.gif"></p>

<p>Once you've loaded your roster, the next step is to <strong>load up the calendar</strong>.&nbsp; This is a responsibility that should be assigned to the leader who usually schedules events for your pack.</p>

<p>Every event on the calendar has an event type.&nbsp; The <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=197" target="x4glAppHelp">event type</a> determines what type of&nbsp; information you can enter about this event.&nbsp;&nbsp;</p>

<p>You can <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=197" target="x4glAppHelp">customize event types</a> to meet the needs of your scouting unit.&nbsp;</p>

<p>Most events also require a <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=88" target="x4glAppHelp">location</a>.&nbsp; Since most scouting units tend to use the same locations many times - think of your weekly meeting location, or nearby state campgrounds - we let you <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=88" target="x4glAppHelp">enter lots of information about these locations</a>, which you can then reference from every event that occurs there.</p>

<p>Once you have your locations into the system, you can begin <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=89" target="x4glAppHelp">entering events into your calendar</a>.</p>

<p><strong>The <a class="bodylinks" href="formCustom.aspx?Menu_Item_ID=5787&amp;Stack=2">Events Hub</a> is a great place to manage every aspect of your calendar.</strong></p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW89DATA3913">
                    01/08/2022
                  </td>
                  <td class="text-center " id="TD795ROW89DATA3914">
                    04/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW89DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW89DATA55030">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW89DATA55031">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW89DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1920" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=3&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW90DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1930" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=4&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW90DATA3911">
                    Step #5  -  Advancement
                  </td>
                  <td class="text-center " id="TD795ROW90DATA3912">
                    <p style="font-size: 80%; color: red;">This is an <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=25" target="x4glAppHelp">announcement&nbsp;</a>.&nbsp; It will disappear in a few days.</p>

<p align="center"><img align="center" alt="" src="https://www.ourgrouponline.com/Images/Help/CubScouts/AOLpatch.png"></p>

<p>TroopWebHost can manage every aspect of Cub Scout advancement, from signing off on requirements for adventures and badges to preparing for your next awards ceremony.&nbsp; Once you've loaded all of your scouts into the roster, this would be a good time to get your <b>den leaders&nbsp;</b>involved.</p>

<p>The first step is to verify each scout's current age level and den number, which you can do from the <a href="http://www.TroopWebHostCS.org/help.aspx?ID=239" target="x4glAppHelp">Update Cub Scout Age Levels</a> page.</p>

<p>The next step is to load your scout's current advancement status into the system.&nbsp; All of your current advancement information should be available from <a href="http://www.TroopWebHostCS.org/help.aspx?ID=306" target="x4glAppHelp">ScoutBook</a>.&nbsp; &nbsp;If you need help, please open a <a href="http://www.TroopWebHostCS.org/help.aspx?ID=326" target="x4glAppHelp">Support Ticket</a>&nbsp;asking for assistance and we'll guide you through the process.</p>

<p>Learn how to sign off on requirements in the <a href="http://www.TroopWebHostCS.org/help.aspx?ID=241" target="x4glAppHelp">Adventures &amp; Badges</a> page and in the <a href="http://www.TroopWebHost.org/help.aspx?ID=505" target="x4glAppHelp">Mobile App</a>.&nbsp; Then train all of the leaders who are authorized to sign off on requirements to use TroopWebHostCS going forward.</p>

<p>Prior to an awards ceremony, transfer all completed adventures, badges and awards to the BSA using <a href="http://www.TroopWebHostCS.org/help.aspx?ID=290" target="x4glAppHelp">Internet Advancement 2.0</a>.&nbsp; Then go to the <a href="http://www.TroopWebHostCS.org/help.aspx?ID=245" target="x4glAppHelp">Pending Awards</a> page to produce the reports you'll need for the ceremony.</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW90DATA3913">
                    01/07/2022
                  </td>
                  <td class="text-center " id="TD795ROW90DATA3914">
                    04/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW90DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW90DATA55030">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW90DATA55031">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW90DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1940" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=4&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW91DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1950" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=6&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW91DATA3911">
                    Step #6  -  Get Your Pack Using It!
                  </td>
                  <td class="text-center " id="TD795ROW91DATA3912">
                    <p style="font-size: 80%; color: red;">This is an <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=25" target="x4glAppHelp">announcement&nbsp;</a>.&nbsp; It will disappear in a few days.</p>

<p align="center"><img align="center" alt="" src="https://www.troopwebhost.com/Images/RolloutMeeting.jpg"></p>

<p>At this point you have:</p>

<ul>
	<li>Loaded all scouts and adults into the Membership roster.</li>
	<li>Entered upcoming events into the Calendar.</li>
	<li>Brought every scout's advancement records up to date on adventures, badges and awards.</li>
</ul>

<p>You may now be ready to get scouts and their parents using the system.&nbsp; We recommend that you begin by demonstrating the system at one or more meetings.</p>

<p>Simultaneously, you should&nbsp;<a class="bodylinks" href="https://www.TroopWebHostCS.org/help.aspx?ID=17" target="x4glAppHelp">send them their User IDs and Passwords</a> so they will be able to access the site immediately.</p>

<p>You should also encourage them to use the <a class="bodylinks" href="https://www.troopwebhost.com/mobile.htm" target="_blank">TroopWebHost mobile app</a>, which is available for free from the Apple App Store and Google Play Store.</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW91DATA3913">
                    01/05/2022
                  </td>
                  <td class="text-center " id="TD795ROW91DATA3914">
                    04/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW91DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW91DATA55030">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW91DATA55031">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW91DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1960" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=6&amp;Stack=2','');">
                  </td>
                </tr>
                <tr>
                  <td class="text-center " id="TD795ROW92DATA3909">
                    <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1970" id="BUTTON10" type="button" name="update" title="Update the information in this row" value="Update" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=291&amp;Form_ID=268&amp;FK=0&amp;ID=7&amp;Stack=2','');">
                  </td>
                  <td class="text-center " id="TD795ROW92DATA3911">
                    Steps 7, 8, 9, etc.  -  Use The Rest Of The System!
                  </td>
                  <td class="text-center " id="TD795ROW92DATA3912">
                    <p style="font-size: 80%; color: red;">This is an <a class="bodylinks" href="http://www.TroopWebHostCS.org/help.aspx?ID=25" target="x4glAppHelp">announcement&nbsp;</a>.&nbsp; It will disappear in a few days.</p>

<p align="center"><img align="center" alt="" src="https://www.troopwebhost.com/Images2/Money400wide.jpg"></p>

<p><strong>Congratulations!&nbsp; </strong>Your TroopWebHost site is operational.&nbsp; <strong>But there's still much more to do:</strong></p>

<ul>
	<li>Set up the <a href="http://www.troopwebhostCS.org/help.aspx?ID=174" target="x4glAppHelp">weekly automated newsletter</a>.</li>
	<li><a href="http://www.troopwebhostCS.org/help.aspx?ID=48" target="x4glAppHelp">Send mass emails</a> to your entire troop or selected members</li>
	<li>Manage your troop's money with the <a href="http://www.troopwebhostCS.org/help.aspx?ID=115" target="x4glAppHelp">TroopWebHostCS accounting system</a>.</li>
	<li><a href="http://www.troopwebhostCS.org/help.aspx?ID=272" target="x4glAppHelp">Manage fundraisers</a>.</li>
	<li>Upload <a href="http://www.troopwebhostCS.org/help.aspx?ID=95" target="x4glAppHelp">forms and documents</a> that your troop uses</li>
	<li>Keep track of <a href="http://www.troopwebhostCS.org/help.aspx?ID=101" target="x4glAppHelp">pack equipment</a> and <a href="http://www.troopwebhostCS.org/help.aspx?ID=101" target="x4glAppHelp">library materials</a>.</li>
</ul>

<p>If you have any questions about how to move forward, just open a&nbsp;<a href="http://www.troopwebhostCS.org/help.aspx?ID=326" target="x4glAppHelp">Support Ticket</a>.&nbsp; We'll be glad to help!</p>

<p>&nbsp;</p>
                  </td>
                  <td class="text-center " id="TD795ROW92DATA3913">
                    01/04/2022
                  </td>
                  <td class="text-center " id="TD795ROW92DATA3914">
                    04/05/2023
                  </td>
                  <td class="text-center " id="TD795ROW92DATA55029">
                    Yes
                  </td>
                  <td class="text-center " id="TD795ROW92DATA55030">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW92DATA55031">
                    No
                  </td>
                  <td class="text-center " id="TD795ROW92DATA3910">
                    <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="1980" id="BUTTON18" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=291&amp;Form_ID=269&amp;FK=0&amp;ID=7&amp;Stack=2','');">
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <td colspan="9" class="text-center">
                    <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=291&amp;Form_ID=270&amp;Stack=1&amp;SectionID=795&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=291&amp;Form_ID=270&amp;Stack=1&amp;SectionID=795&amp;ReportFormat=XLS','_blank');">
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
</span></div>
</td>
</tr>
        </tbody></table>
      </div>
    </div>
  </div>
  <input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON8">
  </form>
  <div style="height: 100px;">&nbsp;</div>


</body></html>