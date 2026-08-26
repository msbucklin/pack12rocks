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
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/XOqlk8PL_yVx6IdpLbpXdiLy/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-5gTdLl6IS0Y6zKiLKimmhaY3IOLosQFpvj9Tvt9s2RAiKLtLUEWOP5N8mtHLNUzF"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
<body onunload="CloseErrorBox()" onload="easySetFocus();GetDeviceWidth();">
<form enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/formCustom.aspx" target="_self" method="post" name="easyform" id="easyform">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="5781">
<input type="hidden" name="Form_ID" id="Form_ID" value="6142">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/formCustom.aspx?Menu_Item_ID=5781&amp;Stack=0">
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
  <li class="list-group-item"><a href="#" onclick="easyEditHTMLPage();">Edit This Page</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalPageFormat">Format</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalReportingOptions">Reporting Options</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=5781">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=5781">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=5781">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=361" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=5781">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=5781">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=5781">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=5781">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/formCustom.aspx?Menu_Item_ID=5781&amp;Stack=0&amp;Application_ID=2840
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
Financial Hub
</p>
<input type="hidden" name="Custom_Form_ID" id="Custom_Form_ID" value="0">
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block " style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h1 style="text-align: center;">Financial Hub</h1>
      </div>
    </div>
  </div>
</div>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block widget22" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=3705&amp;Stack=2">Pending Reimbursement Requests</a><sup><a class="widget-help-link" href="Help.aspx?ID=317" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Submitted
              </th>
              <th>
              By
              </th>
              <th>
              Amount
              </th>
              <th>
              Description
              </th>
            </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="center-block widget14" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=321&amp;Stack=2">Recent Transactions</a><sup><a class="widget-help-link" href="Help.aspx?ID=119" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Date
              </th>
              <th>
              Description
              </th>
              <th>
              Amount
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2663&amp;FK=2663&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/20/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                39.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2662&amp;FK=2662&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/20/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2661&amp;FK=2661&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/19/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2660&amp;FK=2660&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/19/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2659&amp;FK=2659&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/11/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2658&amp;FK=2658&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/11/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2657&amp;FK=2657&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/11/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2656&amp;FK=2656&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/11/26
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2655&amp;FK=2655&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/11/26
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2654&amp;FK=2654&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/11/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                68.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2653&amp;FK=2653&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/10/26
              </td>
              <td class="text-left">
                Xfer for Natural Bridge
              </td>
              <td class="text-right">
                19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2652&amp;FK=2652&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/10/26
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2651&amp;FK=2651&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/10/26
              </td>
              <td class="text-left">
                Xfer for Natural Bridge
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2650&amp;FK=2650&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/10/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                54.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2649&amp;FK=2649&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/10/26
              </td>
              <td class="text-left">
                Natural Bridge Cavern payment
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2648&amp;FK=2648&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/10/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                50.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2647&amp;FK=2647&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/10/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2646&amp;FK=2646&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/09/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                68.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2645&amp;FK=2645&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/08/26
              </td>
              <td class="text-left">
                caverns
              </td>
              <td class="text-right">
                19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2644&amp;FK=2644&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                54.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2643&amp;FK=2643&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/08/26
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                20.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2642&amp;FK=2642&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                50.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2588&amp;FK=2588&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/30/26
              </td>
              <td class="text-left">
                Adult's yellow t-shirt, as reported by Amy C, den leader.
              </td>
              <td class="text-right">
                15.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2587&amp;FK=2587&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/12/26
              </td>
              <td class="text-left">
                Zero out balance
              </td>
              <td class="text-right">
                170.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2586&amp;FK=2586&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/12/26
              </td>
              <td class="text-left">
                Zero out balance
              </td>
              <td class="text-right">
                170.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2585&amp;FK=2585&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/12/26
              </td>
              <td class="text-left">
                zeroing out account for graduating scout family.
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2584&amp;FK=2584&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/12/26
              </td>
              <td class="text-left">
                Zeroing out account for graduating scout family.
              </td>
              <td class="text-right">
                44.97
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2583&amp;FK=2583&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/11/26
              </td>
              <td class="text-left">
                Zeroing out account for graduating scout family.
              </td>
              <td class="text-right">
                119.23
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2582&amp;FK=2582&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/07/26
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                2.97
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2581&amp;FK=2581&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/07/26
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                5.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2580&amp;FK=2580&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/10/26
              </td>
              <td class="text-left">
                I accidentally paid the SA zoo campout twice, moving money to clear my balance. I
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2579&amp;FK=2579&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/18/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2578&amp;FK=2578&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/18/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2575&amp;FK=2575&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/16/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                40.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2574&amp;FK=2574&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/16/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2573&amp;FK=2573&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/16/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2570&amp;FK=2570&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/26
              </td>
              <td class="text-left">
                Chk#1967 for Winter Overnight
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2569&amp;FK=2569&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/26
              </td>
              <td class="text-left">
                Chk#1967 for Winter Overnight
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2568&amp;FK=2568&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/26
              </td>
              <td class="text-left">
                Chk#479 for Winter Overnight
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2567&amp;FK=2567&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/26
              </td>
              <td class="text-left">
                Chk#479 for Winter Overnight
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2566&amp;FK=2566&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/26
              </td>
              <td class="text-left">
                Transferring per request by Allison.
              </td>
              <td class="text-right">
                30.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2565&amp;FK=2565&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/26
              </td>
              <td class="text-left">
                Transferring per request by Allison.
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2564&amp;FK=2564&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                67.65
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2563&amp;FK=2563&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/13/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2562&amp;FK=2562&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/12/26
              </td>
              <td class="text-left">
                Removing Winter Overnight registration on duplicate account.
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2561&amp;FK=2561&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                Credit unpaid PayPal fees as one-time write-off.
              </td>
              <td class="text-right">
                5.38
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2560&amp;FK=2560&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                Credit unpaid PayPal fees as one-time write-off.
              </td>
              <td class="text-right">
                2.93
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2559&amp;FK=2559&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                Credit unpaid PayPal fees as one-time write-off.
              </td>
              <td class="text-right">
                2.93
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2558&amp;FK=2558&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                Credit unpaid PayPal fees as one-time write-off.
              </td>
              <td class="text-right">
                0.63
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2557&amp;FK=2557&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2556&amp;FK=2556&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                Transferring from Scout to mom for Winter Overnight.
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2555&amp;FK=2555&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                Crediting deposit in PayPal that didn't show in Pack12 account.
              </td>
              <td class="text-right">
                485.05
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2554&amp;FK=2554&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                134.62
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2553&amp;FK=2553&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                67.07
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2552&amp;FK=2552&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/10/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2551&amp;FK=2551&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/10/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2548&amp;FK=2548&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/10/26
              </td>
              <td class="text-left">
                Zoo Emmy
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2547&amp;FK=2547&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/10/26
              </td>
              <td class="text-left">
                Zoo Vinny
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2546&amp;FK=2546&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/10/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                210.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2538&amp;FK=2538&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/09/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2535&amp;FK=2535&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                210.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2533&amp;FK=2533&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2532&amp;FK=2532&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2531&amp;FK=2531&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2530&amp;FK=2530&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2529&amp;FK=2529&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2528&amp;FK=2528&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2527&amp;FK=2527&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2526&amp;FK=2526&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2525&amp;FK=2525&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2524&amp;FK=2524&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2519&amp;FK=2519&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2518&amp;FK=2518&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2511&amp;FK=2511&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/05/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2506&amp;FK=2506&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/05/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2505&amp;FK=2505&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/05/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2501&amp;FK=2501&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/04/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2500&amp;FK=2500&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/04/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2497&amp;FK=2497&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/03/26
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2496&amp;FK=2496&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/31/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2495&amp;FK=2495&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/31/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                65.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2494&amp;FK=2494&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/30/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                170.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2493&amp;FK=2493&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/30/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2492&amp;FK=2492&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/30/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2490&amp;FK=2490&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/30/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2489&amp;FK=2489&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/30/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2486&amp;FK=2486&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/22/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                67.07
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2485&amp;FK=2485&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/22/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2483&amp;FK=2483&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/21/25
              </td>
              <td class="text-left">
                Transfer Between Member Accounts
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2482&amp;FK=2482&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/21/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2481&amp;FK=2481&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/21/25
              </td>
              <td class="text-left">
                Patches
              </td>
              <td class="text-right">
                351.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2480&amp;FK=2480&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/21/25
              </td>
              <td class="text-left">
                Arrows
              </td>
              <td class="text-right">
                552.42
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2479&amp;FK=2479&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/21/25
              </td>
              <td class="text-left">
                Wood blocks - 50 count
              </td>
              <td class="text-right">
                119.23
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2478&amp;FK=2478&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/21/25
              </td>
              <td class="text-left">
                Pack Fishing Poles
              </td>
              <td class="text-right">
                175.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2477&amp;FK=2477&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/20/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2476&amp;FK=2476&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/20/25
              </td>
              <td class="text-left">
                PayPal Deposit
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2471&amp;FK=2471&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/16/25
              </td>
              <td class="text-left">
                Account Adjustment to reflect current balance
              </td>
              <td class="text-right">
                76,765.12
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2470&amp;FK=2470&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/16/25
              </td>
              <td class="text-left">
                Account Adjustment to reflect current balance
              </td>
              <td class="text-right">
                24,861.70
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2466&amp;FK=2466&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/12/25
              </td>
              <td class="text-left">
                Zeroing out account for inactive scout.
              </td>
              <td class="text-right">
                12.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2465&amp;FK=2465&amp;Form_ID=319&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/12/25
              </td>
              <td class="text-left">
                Zeroing out account for inactive scout.
              </td>
              <td class="text-right">
                95.00
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=319&amp;Stack=2">Add a Transaction</a></p>
      </div>
    </div>
    <div class="center-block widget15" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=330&amp;Stack=2">Recent Group Transactions</a><sup><a class="widget-help-link" href="Help.aspx?ID=120" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Date
              </th>
              <th>
              Description
              </th>
              <th>
              Amount
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=26&amp;FK=26&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/18/26
              </td>
              <td class="text-left">
                Natural Bridge Caverns
              </td>
              <td class="text-right">
                19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=25&amp;FK=25&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/18/26
              </td>
              <td class="text-left">
                Natural Bridge Caverns
              </td>
              <td class="text-right">
                14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=24&amp;FK=24&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/19/25
              </td>
              <td class="text-left">
                Winter Overnight at San Antonio Zoo - Guests
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=23&amp;FK=23&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/19/25
              </td>
              <td class="text-left">
                Winter Overnight at San Antonio Zoo - Scout Participant
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=22&amp;FK=22&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/19/25
              </td>
              <td class="text-left">
                Winter Overnight at San Antonio Zoo - Adult Participant
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=21&amp;FK=21&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/10/25
              </td>
              <td class="text-left">
                Annual Pack Fees, Due 9/30/25
              </td>
              <td class="text-right">
                170.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=20&amp;FK=20&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/13/25
              </td>
              <td class="text-left">
                Innerspace Caverns Tour - July 2025
              </td>
              <td class="text-right">
                15.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=19&amp;FK=19&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/29/25
              </td>
              <td class="text-left">
                Enrichment fee
              </td>
              <td class="text-right">
                100.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=18&amp;FK=18&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/08/25
              </td>
              <td class="text-left">
                $95 per person for SeaWorld Winter Overnight
              </td>
              <td class="text-right">
                95.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=17&amp;FK=17&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/05/24
              </td>
              <td class="text-left">
                Overnight at the USS Lexington, Jan 11-12
              </td>
              <td class="text-right">
                75.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=16&amp;FK=16&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/17/24
              </td>
              <td class="text-left">
                Pack 12 t-shirt
              </td>
              <td class="text-right">
                12.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=15&amp;FK=15&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/19/24
              </td>
              <td class="text-left">
                Pack 12 t-shirt
              </td>
              <td class="text-right">
                12.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=14&amp;FK=14&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/16/24
              </td>
              <td class="text-left">
                2024-25 Pack 12 fee ($70/scout)
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=13&amp;FK=13&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/05/24
              </td>
              <td class="text-left">
                Credit BSA charge to new scouts
              </td>
              <td class="text-right">
                80.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=12&amp;FK=12&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/05/24
              </td>
              <td class="text-left">
                BSA National Registration Fee = $80 per scout
              </td>
              <td class="text-right">
                80.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=11&amp;FK=11&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/20/23
              </td>
              <td class="text-left">
                Charge for Winter Overnight NASA space center 01/27/2024
              </td>
              <td class="text-right">
                80.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=9&amp;FK=9&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/16/23
              </td>
              <td class="text-left">
                Enrichment Fee
              </td>
              <td class="text-right">
                100.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=8&amp;FK=8&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/10/23
              </td>
              <td class="text-left">
                Charge for Winter Overnight NASA space center 01/27/2024
              </td>
              <td class="text-right">
                80.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=7&amp;FK=7&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/18/23
              </td>
              <td class="text-left">
                Pack 12 t-shirt(s) - $12.50 each
              </td>
              <td class="text-right">
                12.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=6&amp;FK=6&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/03/23
              </td>
              <td class="text-left">
                Winter Overnight: NASA Space Center Houston 01/27/24
              </td>
              <td class="text-right">
                80.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=5&amp;FK=5&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/13/23
              </td>
              <td class="text-left">
                Pack 12 dues
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=4&amp;FK=4&amp;Form_ID=328&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/15/23
              </td>
              <td class="text-left">
                Bowling Charges
              </td>
              <td class="text-right">
                11.00
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=328&amp;Stack=2">Add a Group Transaction</a></p>
      </div>
    </div>
    <div class="center-block widget28" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=324&amp;Stack=2">Member Balances</a><sup><a class="widget-help-link" href="Help.aspx?ID=125" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Name
              </th>
              <th>
              Type
              </th>
              <th>
              Balance
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=910&amp;FK=910&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Abbott, Albert
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=914&amp;FK=914&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Abbott, William
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                70.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=668&amp;FK=668&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez, Jorge
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                15.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=908&amp;FK=908&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Byrd, Amanda
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                105.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=978&amp;FK=978&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                De Los Santos Tamez, Diego
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                45.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1021&amp;FK=1021&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Elwell, Connor
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                1.97
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=831&amp;FK=831&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Fick, Preston
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                238.46
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=564&amp;FK=564&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Files, Michael
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                89.94
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1122&amp;FK=1122&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Files, Michael
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                140.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=832&amp;FK=832&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Goodine, David
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                -19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=811&amp;FK=811&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Goodine, Jack
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                -14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1187&amp;FK=1187&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gurrola, Benjamin
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                -14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1204&amp;FK=1204&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gurrola, Jacqueline
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                -19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1232&amp;FK=1232&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gurrola, Matthew
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                -19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=866&amp;FK=866&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Marshall, Mark
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                31.02
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1191&amp;FK=1191&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Nair, Ananya
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                -29.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1206&amp;FK=1206&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Nair, Jithun
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                -39.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1277&amp;FK=1277&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Niphadkar, Sahana
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                -43.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1283&amp;FK=1283&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Niphadkar, Shraddha
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                -94.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=765&amp;FK=765&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Phan, Erik
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                144.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1077&amp;FK=1077&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Sujan, Mav
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                350.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=995&amp;FK=995&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swantner, Albert
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                0.25
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=991&amp;FK=991&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swantner, Everett
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                1.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=992&amp;FK=992&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swenson, Jack
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                -29.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=996&amp;FK=996&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swenson, Lindsey
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                -19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1089&amp;FK=1089&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swenson, Matt
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                -19.75
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=854&amp;FK=854&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Valencia Marshall, Angel
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                385.57
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=768&amp;FK=768&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Walker, Sophia
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                50.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1227&amp;FK=1227&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                Adult
              </td>
              <td class="text-right">
                -39.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1220&amp;FK=1220&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Milo
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                -14.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1221&amp;FK=1221&amp;Form_ID=325&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, oliver
              </td>
              <td class="text-left">
                Scout
              </td>
              <td class="text-right">
                54.00
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center">Excludes Members With Zero Balance</p>
      </div>
    </div>
    <div class="center-block widget20" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=318&amp;Stack=2">Group Accounts</a><sup><a class="widget-help-link" href="Help.aspx?ID=127" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Account
              </th>
              <th>
              Balance
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=2&amp;FK=2&amp;Form_ID=316&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Frost Bank Checking Account
              </td>
              <td class="text-right">
                42,555.72
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=1&amp;FK=1&amp;Form_ID=316&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                PayPal
              </td>
              <td class="text-right">
                4,922.53
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=316&amp;Stack=2">Add a Group Account</a></p>
      </div>
    </div>
    <div class="center-block widget21" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=1371&amp;Stack=2">Fund Balances</a><sup><a class="widget-help-link" href="Help.aspx?ID=185" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Category
              </th>
              <th>
              Fund
              </th>
              <th>
              Balance
              </th>
            </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=1369&amp;Stack=2">Add a Fund</a></p>
      </div>
    </div>
    <div class="center-block widget16" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=337&amp;Stack=2">Event Balances</a><sup><a class="widget-help-link" href="Help.aspx?ID=126" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Date
              </th>
              <th>
              Event
              </th>
              <th>
              Expense
              </th>
              <th>
              Income
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=567&amp;FK=567&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/18/2026
              </td>
              <td class="text-left">
                Natural Bridge Caverns
              </td>
              <td class="text-right">
                0.00
              </td>
              <td class="text-right">
                832.50
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=373&amp;FK=373&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/07/2026
              </td>
              <td class="text-left">
                AOL Crossover Ceremony
              </td>
              <td class="text-right">
                552.42
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=371&amp;FK=371&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/07/2026
              </td>
              <td class="text-left">
                Pinewood Derby
              </td>
              <td class="text-right">
                119.23
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=369&amp;FK=369&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/31/2026
              </td>
              <td class="text-left">
                Winter Overnight at San Antonio Zoo
              </td>
              <td class="text-right">
                70.00
              </td>
              <td class="text-right">
                9,450.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=364&amp;FK=364&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/07/2025
              </td>
              <td class="text-left">
                Fall Campout
              </td>
              <td class="text-right">
                351.00
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=351&amp;FK=351&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/19/2025
              </td>
              <td class="text-left">
                Innerspace Caverns
              </td>
              <td class="text-right">
                79.00
              </td>
              <td class="text-right">
                672.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=257&amp;FK=257&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/17/2025
              </td>
              <td class="text-left">
                Pack 12 Graduation
              </td>
              <td class="text-right">
                50.00
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=256&amp;FK=256&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/10/2025
              </td>
              <td class="text-left">
                Rocket Derby
              </td>
              <td class="text-right">
                714.56
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=254&amp;FK=254&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                04/11/2025
              </td>
              <td class="text-left">
                Spring Campout
              </td>
              <td class="text-right">
                335.96
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=339&amp;FK=339&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                03/01/2025
              </td>
              <td class="text-left">
                Cubmaster Campout
              </td>
              <td class="text-right">
                558.08
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=337&amp;FK=337&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/22/2025
              </td>
              <td class="text-left">
                Crossover Ceremony
              </td>
              <td class="text-right">
                218.88
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=252&amp;FK=252&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/08/2025
              </td>
              <td class="text-left">
                Pinewood Derby
              </td>
              <td class="text-right">
                428.49
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=335&amp;FK=335&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/05/2025
              </td>
              <td class="text-left">
                Pinewood Derby Weigh-In
              </td>
              <td class="text-right">
                40.00
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=255&amp;FK=255&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/25/2025
              </td>
              <td class="text-left">
                Sea World Winter Overnight
              </td>
              <td class="text-right">
                2,756.62
              </td>
              <td class="text-right">
                15,529.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=289&amp;FK=289&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/11/2025
              </td>
              <td class="text-left">
                Overnight at the USS Lexington
              </td>
              <td class="text-right">
                150.00
              </td>
              <td class="text-right">
                4,275.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=234&amp;FK=234&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                11/01/2024
              </td>
              <td class="text-left">
                Fall Campout - Goliad State Park
              </td>
              <td class="text-right">
                291.53
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=299&amp;FK=299&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/27/2024
              </td>
              <td class="text-left">
                Service Project - Baldwin Campus Cleanup &amp; Planter Construction
              </td>
              <td class="text-right">
                33.35
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=274&amp;FK=274&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/11/2024
              </td>
              <td class="text-left">
                BALOO Adult Leader Training
              </td>
              <td class="text-right">
                100.00
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=222&amp;FK=222&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/18/2024
              </td>
              <td class="text-left">
                Cubmobile Derby
              </td>
              <td class="text-right">
                17.79
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=218&amp;FK=218&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                06/08/2024
              </td>
              <td class="text-left">
                Raingutter Regatta
              </td>
              <td class="text-right">
                39.47
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=120&amp;FK=120&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/24/2024
              </td>
              <td class="text-left">
                Crossover
              </td>
              <td class="text-right">
                189.30
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=119&amp;FK=119&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                02/03/2024
              </td>
              <td class="text-left">
                Pinewood Derby
              </td>
              <td class="text-right">
                848.48
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=96&amp;FK=96&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                01/27/2024
              </td>
              <td class="text-left">
                Winter Overnight: NASA Space Center Houston
              </td>
              <td class="text-right">
                2,720.00
              </td>
              <td class="text-right">
                18,960.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=62&amp;FK=62&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                12/08/2023
              </td>
              <td class="text-left">
                Cubmaster Campout
              </td>
              <td class="text-right">
                113.57
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=81&amp;FK=81&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                10/20/2023
              </td>
              <td class="text-left">
                Jamboree On The Air
              </td>
              <td class="text-right">
                91.98
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=55&amp;FK=55&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                09/16/2023
              </td>
              <td class="text-left">
                New Scout Ceremony
              </td>
              <td class="text-right">
                0.00
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=36&amp;FK=36&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                08/26/2023
              </td>
              <td class="text-left">
                NEW DATE: Cubmobile Derby
              </td>
              <td class="text-right">
                54.24
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=35&amp;FK=35&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                07/15/2023
              </td>
              <td class="text-left">
                Bowling with the Pack
              </td>
              <td class="text-right">
                286.00
              </td>
              <td class="text-right">
                297.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=23&amp;FK=23&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                06/17/2023
              </td>
              <td class="text-left">
                Raingutter Regatta
              </td>
              <td class="text-right">
                39.35
              </td>
              <td class="text-right">
                0.00
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;ID=19&amp;FK=19&amp;Form_ID=338&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-center">
                05/21/2023
              </td>
              <td class="text-left">
                Rocket Derby
              </td>
              <td class="text-right">
                433.83
              </td>
              <td class="text-right">
                93.20
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=161&amp;Stack=2">Add an Event</a></p>
      </div>
    </div>
    <div class="center-block widget23" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=446&amp;Stack=2">Bank Statements</a><sup><a class="widget-help-link" href="Help.aspx?ID=128" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Date
              </th>
              <th>
              Account
              </th>
              <th>
              Closing Balance
              </th>
            </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=444&amp;Stack=2">Add a Bank Statement</a></p>
      </div>
    </div>
    <div class="center-block widget17" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Financial Reports</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReportMultiSection.aspx?Menu_Item_ID=5781&amp;Form_ID=327&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Account Balances</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=521&amp;Stack=2">Financial History</a><sup><a class="widget-help-link" href="Help.aspx?ID=132" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5781&amp;Form_ID=1387&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Fund Balances</a><sup><a class="widget-help-link" href="Help.aspx?ID=117" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5781&amp;Form_ID=1712&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Fund Balances By Fiscal Year</a><sup><a class="widget-help-link" href="Help.aspx?ID=117" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=3218&amp;Stack=2">Fund Balances On Effective Date</a><sup><a class="widget-help-link" href="Help.aspx?ID=132" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
      </div>
    </div>
    <div class="center-block widget24" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Other Functions</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=335&amp;Stack=2">Email Account Balances</a><sup><a class="widget-help-link" href="Help.aspx?ID=129" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=1523&amp;Stack=2">View Recent On-Line Payments</a><sup><a class="widget-help-link" href="Help.aspx?ID=343" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="PaymentCollector.aspx?Menu_Item_ID=5781&amp;Form_ID=5738&amp;Stack=2">Payment Collector</a><sup><a class="widget-help-link" href="Help.aspx?ID=346" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=7414&amp;Stack=2">Fiscal Years &amp; Budgets</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadAccounts.aspx?Menu_Item_ID=5781&amp;Form_ID=323&amp;Stack=2">Upload Account Balances</a><sup><a class="widget-help-link" href="Help.aspx?ID=118" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5781&amp;Form_ID=1375&amp;Stack=2&amp;ReportFormat=XLS" target="_blank">Export All Transactions To Excel</a></div>
      </div>
    </div>
    <div class="center-block widget25" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Set Up</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=1374&amp;Stack=2">Transaction Types</a><sup><a class="widget-help-link" href="Help.aspx?ID=186" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5781&amp;Form_ID=1368&amp;Stack=2">Fund Categories</a><sup><a class="widget-help-link" href="Help.aspx?ID=185" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=3708&amp;Stack=2">Configure Expense Reimbursements</a><sup><a class="widget-help-link" href="Help.aspx?ID=316" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=5737&amp;Stack=2">Configure Payment Collector</a><sup><a class="widget-help-link" href="Help.aspx?ID=345" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=1439&amp;Stack=2">Configure PayPal</a><sup><a class="widget-help-link" href="Help.aspx?ID=220" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5781&amp;Form_ID=5668&amp;Stack=2">Configure Square</a><sup><a class="widget-help-link" href="Help.aspx?ID=342" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>