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
<body onunload="CloseErrorBox()" onload="easyFieldExit(this); easySetFocus();GetDeviceWidth();">
<form enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/FormDetail.aspx" target="_self" method="post" name="easyform" id="easyform">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="339">
<input type="hidden" name="Form_ID" id="Form_ID" value="2772">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=339&amp;Stack=0">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=339">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=339">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=339">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=248" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=339">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=339">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=339">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=339">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=339&amp;Stack=0&amp;Application_ID=2840
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
Blocked E-Mail Addresses
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="1">
<div class="new-row" id="fs12244">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY414252">
          <td class="text-center" "="" colspan="1">
            <input type="hidden" name="RVALENTRY414252" id="RVALENTRY414252" value="">
            <span class="bodyheading">
            Pack 12 Austin
            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs12238">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 800px; min-width: 200px;">
      <h3>
      E-Mail Is No Longer Being Delivered To These Addresses
      </h3>
    </div>
  </div>
</div>
<div class="new-row" id="fs12239">
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
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('12239,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('12239,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
        <tr>
          <td>
            <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid12239">
              <thead>
              <tr>
                <input type="hidden" name="ROWCOUNTCB12239" id="ROWCOUNTCB12239" value="20">
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Email Address<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th class="unsortable">
                &nbsp;
                </th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Error Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Error Subtype<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Error Detail<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
                <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Rejected Added<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="text-center " id="TD12239ROW0DATA41394">
                  <a href="mailto:afifkafena@gmail.com">afifkafena@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW0DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW0DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=13569&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW0DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW0DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW0DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW0DATA41399">
                  Aug 13 2024  6:04AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW1DATA41394">
                  <a href="mailto:anitatsmith@gmail.com">anitatsmith@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW1DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW1DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="130" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=12822&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW1DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW1DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW1DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW1DATA41399">
                  Jan 15 2024  6:06AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW2DATA41394">
                  <a href="mailto:austinsdouglas@gmail.com">austinsdouglas@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW2DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW2DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=12329&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW2DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW2DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW2DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW2DATA41399">
                  Sep 26 2023  7:58AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW3DATA41394">
                  <a href="mailto:bddranguet@msn.com">bddranguet@msn.com</a>
                </td>
                <td class="text-center " id="TD12239ROW3DATA41395">
                  Complaint
                </td>
                <td class="text-center " id="TD12239ROW3DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=15718&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW3DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW3DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW3DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW3DATA41399">
                  Oct 15 2025  5:16PM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW4DATA41394">
                  <a href="mailto:beaufannon@gmail.com">beaufannon@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW4DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW4DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="160" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=14442&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW4DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW4DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW4DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW4DATA41399">
                  Jan 11 2025  8:54AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW5DATA41394">
                  <a href="mailto:brittanyannemuller@gmail.com">brittanyannemuller@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW5DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW5DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="170" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=11906&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW5DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW5DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW5DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW5DATA41399">
                  Aug 14 2023  8:37AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW6DATA41394">
                  <a href="mailto:bstaffield@gmail.com">bstaffield@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW6DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW6DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="180" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=15707&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW6DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW6DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW6DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW6DATA41399">
                  Oct 14 2025  6:21AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW7DATA41394">
                  <a href="mailto:christopherhbergen@gmail.com">christopherhbergen@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW7DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW7DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="190" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=15189&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW7DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW7DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW7DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW7DATA41399">
                  Aug 14 2025  6:17AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW8DATA41394">
                  <a href="mailto:dranumeha@gmail.com">dranumeha@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW8DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW8DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="200" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=12008&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW8DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW8DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW8DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW8DATA41399">
                  Aug 28 2023 10:34AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW9DATA41394">
                  <a href="mailto:eerales@gmail.com">eerales@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW9DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW9DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=16196&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW9DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW9DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW9DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW9DATA41399">
                  Mar  8 2026  2:14PM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW10DATA41394">
                  <a href="mailto:janek.niefeldt@gmail.com">janek.niefeldt@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW10DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW10DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="220" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=13484&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW10DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW10DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW10DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW10DATA41399">
                  Jul 28 2024  1:14PM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW11DATA41394">
                  <a href="mailto:jasonhoekstra@gmail.com">jasonhoekstra@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW11DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW11DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=14840&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW11DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW11DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW11DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW11DATA41399">
                  Apr 23 2025  6:02AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW12DATA41394">
                  <a href="mailto:jcurrer@gmail.com">jcurrer@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW12DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW12DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="240" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=14834&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW12DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW12DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW12DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW12DATA41399">
                  Apr 21 2025 12:17PM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW13DATA41394">
                  <a href="mailto:jennifer@beproductable.com">jennifer@beproductable.com</a>
                </td>
                <td class="text-center " id="TD12239ROW13DATA41395">
                  Bounce
                </td>
                <td class="text-center " id="TD12239ROW13DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="250" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=12625&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW13DATA41396">
                  Permanent
                </td>
                <td class="text-center " id="TD12239ROW13DATA41397">
                  General
                </td>
                <td class="text-center " id="TD12239ROW13DATA41398">
                  smtp; 550-5.1.1 The email account that you tried to reach does not exist. Please try
 550-5.1.1 double-checking the recipient's email address for typos or
 550-5.1.1 unnecessary spaces. Learn more at
 550 5.1.1  https://support.google.com/mail/?p=NoSuchUser bl8-20020a05622a244800b00417048548c7si454935qtb.2 - gsmtp
                </td>
                <td class="text-center " id="TD12239ROW13DATA41399">
                  Nov 17 2023  3:08PM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW14DATA41394">
                  <a href="mailto:Luannareyes@yahoo.com">Luannareyes@yahoo.com</a>
                </td>
                <td class="text-center " id="TD12239ROW14DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW14DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="260" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=12378&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW14DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW14DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW14DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW14DATA41399">
                  Oct  4 2023  4:27PM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW15DATA41394">
                  <a href="mailto:mallios@aol.com">mallios@aol.com</a>
                </td>
                <td class="text-center " id="TD12239ROW15DATA41395">
                  Complaint
                </td>
                <td class="text-center " id="TD12239ROW15DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="270" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=13461&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW15DATA41396">
                  abuse
                </td>
                <td class="text-center " id="TD12239ROW15DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW15DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW15DATA41399">
                  Jul 19 2024 10:48AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW16DATA41394">
                  <a href="mailto:mikebuse@gmail.com">mikebuse@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW16DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW16DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="280" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=15443&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW16DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW16DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW16DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW16DATA41399">
                  Sep 10 2025  7:23AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW17DATA41394">
                  <a href="mailto:mxufabian@gmail.com">mxufabian@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW17DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW17DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=15640&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW17DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW17DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW17DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW17DATA41399">
                  Oct  3 2025  8:08AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW18DATA41394">
                  <a href="mailto:nataliebshuman@gmail.com">nataliebshuman@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW18DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW18DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=12576&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW18DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW18DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW18DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW18DATA41399">
                  Nov  8 2023 11:36AM
                </td>
              </tr>
              <tr>
                <td class="text-center " id="TD12239ROW19DATA41394">
                  <a href="mailto:oalvarez.xyz@gmail.com">oalvarez.xyz@gmail.com</a>
                </td>
                <td class="text-center " id="TD12239ROW19DATA41395">
                  Unsubscribe
                </td>
                <td class="text-center " id="TD12239ROW19DATA41424">
                  <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="310" id="BUTTON4" type="button" name="delete" title="Resume Sending" value="Resume Sending" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=339&amp;Form_ID=2773&amp;FK=1&amp;ID=15277&amp;Stack=2','');">
                </td>
                <td class="text-center " id="TD12239ROW19DATA41396">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW19DATA41397">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW19DATA41398">
                  &nbsp;
                </td>
                <td class="text-center " id="TD12239ROW19DATA41399">
                  Aug 24 2025  5:34PM
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <td colspan="7" class="text-center">
                  <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=339&amp;Form_ID=2772&amp;ID=1&amp;Stack=1&amp;SectionID=12239&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=339&amp;Form_ID=2772&amp;ID=1&amp;Stack=1&amp;SectionID=12239&amp;ReportFormat=XLS','_blank');">
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
<ul class="pagination pagination-sm"><li><a><img src="/assets/images/pageleft.gif"></a></li><li class="active"><a>1</a></li><li><a class="bodytext" href="javascript:GoToSectionPageNumber('12239,2');">2</a></li><li><a href="javascript:GoToSectionPageNumber('12239,2');"><img src="/assets/images/pageright.gif"></a></li></ul></span>
</div>
</td>
</tr>
      </tbody></table>
    </div>
  </div>
</div>
<div class="new-row" id="fs12240">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 800px; min-width: 200px;">
      <p>
      <br><b>Unsubscribe</b> means the recipient clicked on the "Unsubscribe" link in an e-mail from this site and then confirmed this request on the website.
      </p>
      <p>
      <b>Permanent Bounce</b> means that this domain is blocking all messages from this site going to this e-mail address.  The error detail may provide additional information. This can be caused by an incorrectly spelled e-mail address.
      </p>
      <p>
      <b>Complaint</b> can be caused when the recipient reports a message from this site as spam.
      </p>
      <p>
      We are no longer attempting to send e-mail to any addresses on this list.
      </p>
      <p>
      To resume sending messages to an address, click the <b>Resume Sending</b> button next to that address.  This will remove it from our internal blacklist.
      </p>
      <p>
      Removing an address from this list may  be enough to restore delivery to that address, especially in the case of a permanent bounce or complaint.  It may be necessary to contact the recipient's e-mail service provider to resolve the issue.
      </p>
      <h3>
      <br>E-Mail Error Notification History
      </h3>
    </div>
  </div>
</div>
<div class="new-row" id="fs12241">
  <div class="container-fluid container-flex">
    <div class="center-block table-responsive">
      <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid12241">
        <thead>
        <tr>
          <input type="hidden" name="ROWCOUNTCB12241" id="ROWCOUNTCB12241" value="4">
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Message Sent<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Notification Received<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 2);return false;">Recipient<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 3);return false;">Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 4);return false;">Error Type<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 5);return false;">Error Subtype<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 6);return false;">Error Detail<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
          <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 7);return false;">From<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="text-center " id="TD12241ROW0DATA41406">
            Oct 13 2025  7:56PM
          </td>
          <td class="text-center " id="TD12241ROW0DATA41407">
            Oct 15 2025  5:16PM
          </td>
          <td class="text-center " id="TD12241ROW0DATA41408">
            <a href="mailto:bddranguet@msn.com">bddranguet@msn.com</a>
          </td>
          <td class="text-center " id="TD12241ROW0DATA41409">
            Complaint
          </td>
          <td class="text-center " id="TD12241ROW0DATA41410">
            &nbsp;
          </td>
          <td class="text-center " id="TD12241ROW0DATA41411">
            &nbsp;
          </td>
          <td class="text-center " id="TD12241ROW0DATA41412">
            &nbsp;
          </td>
          <td class="text-center " id="TD12241ROW0DATA41413">
            <a href="mailto:Mail@OurGroupOnline.org">Mail@OurGroupOnline.org</a>
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD12241ROW1DATA41406">
            Oct  4 2025  8:36AM
          </td>
          <td class="text-center " id="TD12241ROW1DATA41407">
            Oct  4 2025  8:36AM
          </td>
          <td class="text-center " id="TD12241ROW1DATA41408">
            <a href="mailto:xxkrisxx02@yahoo.com">xxkrisxx02@yahoo.com</a>
          </td>
          <td class="text-center " id="TD12241ROW1DATA41409">
            Bounce
          </td>
          <td class="text-center " id="TD12241ROW1DATA41410">
            Transient
          </td>
          <td class="text-center " id="TD12241ROW1DATA41411">
            MailboxFull
          </td>
          <td class="text-center " id="TD12241ROW1DATA41412">
            smtp; 552 5.2.2 This message could not be delivered because the recipient's mailbox is full. Please try again later or contact the recipient directly. See https://senders.yahooinc.com/smtp-error-codes#mailbox-full for more information
          </td>
          <td class="text-center " id="TD12241ROW1DATA41413">
            <a href="mailto:info@TroopWebHostCS.org">info@TroopWebHostCS.org</a>
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD12241ROW2DATA41406">
            Jul 18 2024 12:08PM
          </td>
          <td class="text-center " id="TD12241ROW2DATA41407">
            Jul 19 2024 10:48AM
          </td>
          <td class="text-center " id="TD12241ROW2DATA41408">
            <a href="mailto:mallios@aol.com">mallios@aol.com</a>
          </td>
          <td class="text-center " id="TD12241ROW2DATA41409">
            Complaint
          </td>
          <td class="text-center " id="TD12241ROW2DATA41410">
            abuse
          </td>
          <td class="text-center " id="TD12241ROW2DATA41411">
            &nbsp;
          </td>
          <td class="text-center " id="TD12241ROW2DATA41412">
            &nbsp;
          </td>
          <td class="text-center " id="TD12241ROW2DATA41413">
            <a href="mailto:Mail@OurGroupOnline.org">Mail@OurGroupOnline.org</a>
          </td>
        </tr>
        <tr>
          <td class="text-center " id="TD12241ROW3DATA41406">
            Nov 17 2023  3:08PM
          </td>
          <td class="text-center " id="TD12241ROW3DATA41407">
            Nov 17 2023  3:08PM
          </td>
          <td class="text-center " id="TD12241ROW3DATA41408">
            <a href="mailto:jennifer@beproductable.com">jennifer@beproductable.com</a>
          </td>
          <td class="text-center " id="TD12241ROW3DATA41409">
            Bounce
          </td>
          <td class="text-center " id="TD12241ROW3DATA41410">
            Permanent
          </td>
          <td class="text-center " id="TD12241ROW3DATA41411">
            General
          </td>
          <td class="text-center " id="TD12241ROW3DATA41412">
            smtp; 550-5.1.1 The email account that you tried to reach does not exist. Please try
 550-5.1.1 double-checking the recipient's email address for typos or
 550-5.1.1 unnecessary spaces. Learn more at
 550 5.1.1  https://support.google.com/mail/?p=NoSuchUser bl8-20020a05622a244800b00417048548c7si454935qtb.2 - gsmtp
          </td>
          <td class="text-center " id="TD12241ROW3DATA41413">
            <a href="mailto:Mail@OurGroupOnline.org">Mail@OurGroupOnline.org</a>
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td colspan="8" class="text-center">
            <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=339&amp;Form_ID=2772&amp;ID=1&amp;Stack=1&amp;SectionID=12241&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=339&amp;Form_ID=2772&amp;ID=1&amp;Stack=1&amp;SectionID=12241&amp;ReportFormat=XLS','_blank');">
          </td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON4">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>