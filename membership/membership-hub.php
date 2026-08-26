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
<script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/XOqlk8PL_yVx6IdpLbpXdiLy/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-5gTdLl6IS0Y6zKiLKimmhaY3IOLosQFpvj9Tvt9s2RAiKLtLUEWOP5N8mtHLNUzF"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="5788">
<input type="hidden" name="Form_ID" id="Form_ID" value="6148">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0">
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
  <li class="list-group-item"><a href="#" onclick="easyEditHTMLPage();">Edit This Page</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalPageFormat">Format</a></li>
  <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#ModalReportingOptions">Reporting Options</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=5788">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=5788">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=5788">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=364" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=5788">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=5788">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=5788">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=5788">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0&amp;Application_ID=2840
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
Membership Hub
</p>
<input type="hidden" name="Custom_Form_ID" id="Custom_Form_ID" value="0">
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block widget39" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=129&amp;Stack=2">Scouts</a><sup><a class="widget-help-link" href="Help.aspx?ID=62" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              &nbsp;
              </th>
              <th>
              Name
              </th>
              <th>
              Level
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1018&amp;FK=1018&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1018&amp;FK=1018&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Aarons, Andrew
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=910&amp;FK=910&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=910&amp;FK=910&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Abbott, Albert
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1063&amp;FK=1063&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1063&amp;FK=1063&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Almaraz, Alexander
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1239&amp;FK=1239&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1239&amp;FK=1239&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez, Layla
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=664&amp;FK=664&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=664&amp;FK=664&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez, Mateo
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1240&amp;FK=1240&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1240&amp;FK=1240&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Applegate, Sebastian
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1184&amp;FK=1184&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1184&amp;FK=1184&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Babb, Tyson
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=488&amp;FK=488&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=488&amp;FK=488&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bayes, Dylan
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1154&amp;FK=1154&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1154&amp;FK=1154&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Blair, Frankie
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1155&amp;FK=1155&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1155&amp;FK=1155&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Blair, Joe
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1156&amp;FK=1156&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1156&amp;FK=1156&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bruyn, Emerson
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=964&amp;FK=964&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=964&amp;FK=964&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Emmett
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=762&amp;FK=762&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=762&amp;FK=762&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bush, Kai
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=763&amp;FK=763&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=763&amp;FK=763&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Byrd, Benjamin
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1143&amp;FK=1143&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1143&amp;FK=1143&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Ella
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=983&amp;FK=983&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=983&amp;FK=983&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Taylor
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=984&amp;FK=984&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=984&amp;FK=984&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                de los Santos Garza, Andrea
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=965&amp;FK=965&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=965&amp;FK=965&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                de los Santos Garza, Leo  Jr.
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1135&amp;FK=1135&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1135&amp;FK=1135&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                DeMartini, Emilia
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1136&amp;FK=1136&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1136&amp;FK=1136&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                DeMartini, Vincent
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1241&amp;FK=1241&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1241&amp;FK=1241&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Dennis, Khoi
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1266&amp;FK=1266&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1266&amp;FK=1266&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Diaz, Winslow
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1185&amp;FK=1185&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1185&amp;FK=1185&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                D'Vincent, Mason
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1539&amp;FK=1539&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1539&amp;FK=1539&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Espejel, Dean
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=633&amp;FK=633&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=633&amp;FK=633&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Files, Mikaela
              </td>
              <td class="text-left">
                Webelos / AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=651&amp;FK=651&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=651&amp;FK=651&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Files, Sofia
              </td>
              <td class="text-left">
                Webelos / AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=886&amp;FK=886&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=886&amp;FK=886&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gaete, Lincoln
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1088&amp;FK=1088&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1088&amp;FK=1088&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Galdo, Henry
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1114&amp;FK=1114&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1114&amp;FK=1114&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gibson, Charleston
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=811&amp;FK=811&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=811&amp;FK=811&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Goodine, Jack
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1187&amp;FK=1187&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1187&amp;FK=1187&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gurrola, Benjamin
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1157&amp;FK=1157&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1157&amp;FK=1157&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hallar, Henry
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=940&amp;FK=940&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=940&amp;FK=940&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Harrison, James
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1188&amp;FK=1188&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1188&amp;FK=1188&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hickman, Maya
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1285&amp;FK=1285&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1285&amp;FK=1285&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hoy, Ashton
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1216&amp;FK=1216&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1216&amp;FK=1216&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hume, Beatrix
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1189&amp;FK=1189&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1189&amp;FK=1189&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Idell, Gabe
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1292&amp;FK=1292&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1292&amp;FK=1292&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Ingram, Alistair
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1293&amp;FK=1293&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1293&amp;FK=1293&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Kathuria, Kabir
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=880&amp;FK=880&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=880&amp;FK=880&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Keenan, Lilly
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1190&amp;FK=1190&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1190&amp;FK=1190&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                kommineni, anish
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=517&amp;FK=517&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=517&amp;FK=517&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                kommineni, Avighna
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1217&amp;FK=1217&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1217&amp;FK=1217&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lorenzini, Paige
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=922&amp;FK=922&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=922&amp;FK=922&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lorenzini, Pepper
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1032&amp;FK=1032&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1032&amp;FK=1032&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lynch, Dixon
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=493&amp;FK=493&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=493&amp;FK=493&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Nicholas
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1255&amp;FK=1255&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1255&amp;FK=1255&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Marquez, Owen
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1158&amp;FK=1158&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1158&amp;FK=1158&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Beckett
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=923&amp;FK=923&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=923&amp;FK=923&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Evan
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1218&amp;FK=1218&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1218&amp;FK=1218&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McLeer, Levi
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1219&amp;FK=1219&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1219&amp;FK=1219&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McLeer, Liam
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1256&amp;FK=1256&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1256&amp;FK=1256&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Medler, Bennett
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1276&amp;FK=1276&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1276&amp;FK=1276&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Morris, Jack
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1002&amp;FK=1002&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1002&amp;FK=1002&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mysyk, Alexander
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1191&amp;FK=1191&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1191&amp;FK=1191&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Nair, Ananya
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1294&amp;FK=1294&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1294&amp;FK=1294&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Nallathambi, Kalki
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1277&amp;FK=1277&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1277&amp;FK=1277&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Niphadkar, Sahana
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1159&amp;FK=1159&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1159&amp;FK=1159&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                North, Arlo
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1160&amp;FK=1160&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1160&amp;FK=1160&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                North, Davis
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=643&amp;FK=643&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=643&amp;FK=643&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Omran, Haroun
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=765&amp;FK=765&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=765&amp;FK=765&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Phan, Erik
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1242&amp;FK=1242&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1242&amp;FK=1242&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Porter, Thora
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=968&amp;FK=968&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=968&amp;FK=968&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Purohit, Anay
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1243&amp;FK=1243&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1243&amp;FK=1243&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Rios, Luciana
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=737&amp;FK=737&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=737&amp;FK=737&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Robinson, Rohan
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=924&amp;FK=924&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=924&amp;FK=924&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Saldanha, Claire
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1161&amp;FK=1161&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1161&amp;FK=1161&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Saldanha, Eva
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=853&amp;FK=853&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=853&amp;FK=853&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Shuman, Luca
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=583&amp;FK=583&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=583&amp;FK=583&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Slonsky, Kyle
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=638&amp;FK=638&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=638&amp;FK=638&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Stappenbeck, Charlotte
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1262&amp;FK=1262&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1262&amp;FK=1262&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Stubblefield, Will
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1162&amp;FK=1162&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1162&amp;FK=1162&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Sujan, Jaxson
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1163&amp;FK=1163&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1163&amp;FK=1163&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Sujan, Kira
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1077&amp;FK=1077&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1077&amp;FK=1077&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Sujan, Mav
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=991&amp;FK=991&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=991&amp;FK=991&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swantner, Everett
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=992&amp;FK=992&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=992&amp;FK=992&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swenson, Jack
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1081&amp;FK=1081&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1081&amp;FK=1081&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Tabie, Logan
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=854&amp;FK=854&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=854&amp;FK=854&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Valencia Marshall, Angel
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1220&amp;FK=1220&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1220&amp;FK=1220&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Milo
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1221&amp;FK=1221&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1221&amp;FK=1221&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, oliver
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1193&amp;FK=1193&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1193&amp;FK=1193&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Rowan
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="bsaNewScout.aspx?Menu_Item_ID=5788&amp;Form_ID=3832&amp;Stack=2">Add a Scout</a></p>
      </div>
    </div>
    <div class="center-block widget40" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=129&amp;Stack=2">Adults</a><sup><a class="widget-help-link" href="Help.aspx?ID=62" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              &nbsp;
              </th>
              <th>
              Name
              </th>
              <th>
              Leadership
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1027&amp;FK=1027&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1027&amp;FK=1027&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Aarons, Ashley
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1086&amp;FK=1086&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1086&amp;FK=1086&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Aarons, Stephen
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=914&amp;FK=914&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=914&amp;FK=914&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Abbott, William
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1064&amp;FK=1064&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1064&amp;FK=1064&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Almaraz, Eric
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=668&amp;FK=668&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=668&amp;FK=668&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez, Jorge
              </td>
              <td class="text-left">
                Cubmaster, Key 3 Delegate
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=714&amp;FK=714&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=714&amp;FK=714&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez, Kristy
              </td>
              <td class="text-left">
                Committee Member, Event Chair
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1245&amp;FK=1245&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1245&amp;FK=1245&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Applegate, Chris
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1202&amp;FK=1202&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1202&amp;FK=1202&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Babb, Chris
              </td>
              <td class="text-left">
                Unit Training Chair
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=578&amp;FK=578&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=578&amp;FK=578&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bayes, Phillip
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1169&amp;FK=1169&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1169&amp;FK=1169&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bruyn, Meaghan
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=976&amp;FK=976&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=976&amp;FK=976&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                Committee Member, Advancement Chair
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=977&amp;FK=977&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=977&amp;FK=977&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Asst. Den Leader, Key 3 Delegate, Committee Chairman
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1610&amp;FK=1610&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1610&amp;FK=1610&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael2
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=785&amp;FK=785&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=785&amp;FK=785&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bush, Greg
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=908&amp;FK=908&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=908&amp;FK=908&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Byrd, Amanda
              </td>
              <td class="text-left">
                Committee Member, Quartermaster
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=786&amp;FK=786&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=786&amp;FK=786&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Byrd, Ryan
              </td>
              <td class="text-left">
                Tiger Den Leader, Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1535&amp;FK=1535&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1535&amp;FK=1535&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chakarvarty, Mridul
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1065&amp;FK=1065&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1065&amp;FK=1065&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Amy
              </td>
              <td class="text-left">
                Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=986&amp;FK=986&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=986&amp;FK=986&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                Tiger Den Leader, Den Leader, Committee Member, Treasurer
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=630&amp;FK=630&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=630&amp;FK=630&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Corkill, Cynthia
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1259&amp;FK=1259&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1259&amp;FK=1259&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Daru, Bhargav
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=978&amp;FK=978&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=978&amp;FK=978&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                De Los Santos Tamez, Diego
              </td>
              <td class="text-left">
                Tiger Den Leader, Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1139&amp;FK=1139&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1139&amp;FK=1139&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                DeMartini, Trevor
              </td>
              <td class="text-left">
                Unit Scouter Reserve
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1246&amp;FK=1246&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1246&amp;FK=1246&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Dennis, Michael
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=614&amp;FK=614&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=614&amp;FK=614&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Desouky, Noura
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1268&amp;FK=1268&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1268&amp;FK=1268&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Diaz, Adam
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=562&amp;FK=562&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=562&amp;FK=562&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Dranguet, Benjamin
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1281&amp;FK=1281&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1281&amp;FK=1281&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Duryee, David
              </td>
              <td class="text-left">
                Chartered Organization Rep.
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1203&amp;FK=1203&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1203&amp;FK=1203&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                D'Vincent, Lilli
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=654&amp;FK=654&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=654&amp;FK=654&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Elrakabawy, Erin
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1609&amp;FK=1609&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1609&amp;FK=1609&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Espejel, Moshe
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=564&amp;FK=564&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=564&amp;FK=564&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Files, Michael
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1122&amp;FK=1122&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1122&amp;FK=1122&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Files, Michael
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=888&amp;FK=888&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=888&amp;FK=888&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gaete, Holly
              </td>
              <td class="text-left">
                New Member Coordinator
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=893&amp;FK=893&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=893&amp;FK=893&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Galdo, Anne
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1123&amp;FK=1123&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1123&amp;FK=1123&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gibson, Steven
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=832&amp;FK=832&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=832&amp;FK=832&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Goodine, David
              </td>
              <td class="text-left">
                Den Leader, Asst. Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1204&amp;FK=1204&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1204&amp;FK=1204&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gurrola, Jacqueline
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1232&amp;FK=1232&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1232&amp;FK=1232&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Gurrola, Matthew
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1170&amp;FK=1170&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1170&amp;FK=1170&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hallar, Ingrid
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1171&amp;FK=1171&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1171&amp;FK=1171&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hanss Blair, Rachel
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=944&amp;FK=944&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=944&amp;FK=944&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Harrison, Abi
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1084&amp;FK=1084&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1084&amp;FK=1084&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hayes, David
              </td>
              <td class="text-left">
                Unit Scouter Reserve
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=833&amp;FK=833&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=833&amp;FK=833&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hickman, Trey
              </td>
              <td class="text-left">
                Asst. Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1287&amp;FK=1287&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1287&amp;FK=1287&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hoy, Nicole
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1225&amp;FK=1225&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1225&amp;FK=1225&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hume, John
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1205&amp;FK=1205&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1205&amp;FK=1205&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Idell, Claire
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1534&amp;FK=1534&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1534&amp;FK=1534&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Ingrams, Julie and Robert
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=883&amp;FK=883&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=883&amp;FK=883&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Keenan, Danielle
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=882&amp;FK=882&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=882&amp;FK=882&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Keenan, Peter
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=577&amp;FK=577&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=577&amp;FK=577&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Kommineni, Vijaya Bhaskar
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=933&amp;FK=933&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=933&amp;FK=933&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lorenzini, Mitch
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1034&amp;FK=1034&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1034&amp;FK=1034&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lynch, Scott
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=688&amp;FK=688&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=688&amp;FK=688&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=693&amp;FK=693&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=693&amp;FK=693&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jim
              </td>
              <td class="text-left">
                Unit Scouter Reserve
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=556&amp;FK=556&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=556&amp;FK=556&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Tracy
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1260&amp;FK=1260&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1260&amp;FK=1260&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Marquez, David
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=856&amp;FK=856&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=856&amp;FK=856&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Marshall, Angie
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=866&amp;FK=866&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=866&amp;FK=866&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Marshall, Mark
              </td>
              <td class="text-left">
                Unit Scouter Reserve
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1124&amp;FK=1124&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1124&amp;FK=1124&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                Asst. Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=934&amp;FK=934&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=934&amp;FK=934&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Kristin
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1269&amp;FK=1269&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1269&amp;FK=1269&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McLeer, Douglas
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1226&amp;FK=1226&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1226&amp;FK=1226&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McLeer, Krissy
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1282&amp;FK=1282&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1282&amp;FK=1282&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Morris, Lacey
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1288&amp;FK=1288&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1288&amp;FK=1288&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mysyk, Andriy
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1206&amp;FK=1206&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1206&amp;FK=1206&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Nair, Jithun
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1533&amp;FK=1533&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1533&amp;FK=1533&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Nallathambi, Ravetha
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=789&amp;FK=789&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=789&amp;FK=789&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Nguyen, Phuong
              </td>
              <td class="text-left">
                Secretary
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1283&amp;FK=1283&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1283&amp;FK=1283&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Niphadkar, Shraddha
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1172&amp;FK=1172&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1172&amp;FK=1172&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                North, Allison
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=599&amp;FK=599&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=599&amp;FK=599&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Omran, Ahmed
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1079&amp;FK=1079&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1079&amp;FK=1079&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Patel, Amy
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1173&amp;FK=1173&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1173&amp;FK=1173&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Patel, Sujan
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1247&amp;FK=1247&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1247&amp;FK=1247&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Porter, Koley
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=980&amp;FK=980&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=980&amp;FK=980&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Purohit, Vijendra
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1532&amp;FK=1532&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1532&amp;FK=1532&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                revspsg@gmail.com, Revathi N
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1207&amp;FK=1207&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1207&amp;FK=1207&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Rios, Amanda
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=745&amp;FK=745&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=745&amp;FK=745&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Robinson, Nick
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=935&amp;FK=935&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=935&amp;FK=935&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Saldanha, Mithila
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=622&amp;FK=622&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=622&amp;FK=622&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Shuman, Frank
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=649&amp;FK=649&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=649&amp;FK=649&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Shuman, Natalie
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=899&amp;FK=899&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=899&amp;FK=899&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Slonsky, Henry
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=591&amp;FK=591&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=591&amp;FK=591&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Slonsky, Yasemin
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1208&amp;FK=1208&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1208&amp;FK=1208&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Staffield, Brittany
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=616&amp;FK=616&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=616&amp;FK=616&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Stappenbeck, Steve
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1263&amp;FK=1263&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1263&amp;FK=1263&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Stubblefield, Joel
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1066&amp;FK=1066&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1066&amp;FK=1066&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Susannah Benton, Susannah
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=995&amp;FK=995&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=995&amp;FK=995&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swantner, Albert
              </td>
              <td class="text-left">
                Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=996&amp;FK=996&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=996&amp;FK=996&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swenson, Lindsey
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1089&amp;FK=1089&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1089&amp;FK=1089&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swenson, Matt
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1085&amp;FK=1085&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1085&amp;FK=1085&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Tabie, Mike
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1264&amp;FK=1264&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1264&amp;FK=1264&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Vital, Jessie
              </td>
              <td class="text-left">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1227&amp;FK=1227&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1227&amp;FK=1227&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                Den Leader
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1209&amp;FK=1209&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1209&amp;FK=1209&amp;Form_ID=127&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                Asst. Den Leader
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;Form_ID=1488&amp;Stack=2">Add an Adult</a></p>
      </div>
    </div>
    <div class="center-block widget42" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=285&amp;Stack=2">Adult Leadership Terms</a><sup><a class="widget-help-link" href="Help.aspx?ID=195" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Position
              </th>
              <th>
              Name
              </th>
              <th>
              Start
              </th>
              <th>
              End
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=142&amp;FK=142&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Cubmaster
              </td>
              <td class="text-left">
                Alvarez, Jorge
              </td>
              <td class="text-center">
                05/19/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=201&amp;FK=201&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Tiger Den Leader
              </td>
              <td class="text-left">
                Byrd, Ryan
              </td>
              <td class="text-center">
                09/01/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=203&amp;FK=203&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Tiger Den Leader
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-center">
                08/10/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=204&amp;FK=204&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Tiger Den Leader
              </td>
              <td class="text-left">
                De Los Santos Tamez, Diego
              </td>
              <td class="text-center">
                10/24/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=146&amp;FK=146&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader
              </td>
              <td class="text-left">
                Byrd, Ryan
              </td>
              <td class="text-center">
                08/12/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=207&amp;FK=207&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader
              </td>
              <td class="text-left">
                Chidester, Amy
              </td>
              <td class="text-center">
                09/14/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=196&amp;FK=196&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-center">
                08/10/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=170&amp;FK=170&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader
              </td>
              <td class="text-left">
                De Los Santos Tamez, Diego
              </td>
              <td class="text-center">
                10/16/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=205&amp;FK=205&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader
              </td>
              <td class="text-left">
                Goodine, David
              </td>
              <td class="text-center">
                07/17/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=189&amp;FK=189&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-center">
                06/01/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=164&amp;FK=164&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader
              </td>
              <td class="text-left">
                Swantner, Albert
              </td>
              <td class="text-center">
                09/21/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=210&amp;FK=210&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leader
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-center">
                09/15/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=191&amp;FK=191&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Asst. Den Leader
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-center">
                08/10/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=190&amp;FK=190&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Asst. Den Leader
              </td>
              <td class="text-left">
                Goodine, David
              </td>
              <td class="text-center">
                07/01/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=186&amp;FK=186&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Asst. Den Leader
              </td>
              <td class="text-left">
                Hickman, Trey
              </td>
              <td class="text-center">
                06/01/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=180&amp;FK=180&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Asst. Den Leader
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-center">
                10/19/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=211&amp;FK=211&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Asst. Den Leader
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-center">
                10/20/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=220&amp;FK=220&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chartered Organization Rep.
              </td>
              <td class="text-left">
                Duryee, David
              </td>
              <td class="text-center">
                02/03/2026
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=144&amp;FK=144&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Key 3 Delegate
              </td>
              <td class="text-left">
                Alvarez, Jorge
              </td>
              <td class="text-center">
                05/19/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=215&amp;FK=215&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Key 3 Delegate
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-center">
                01/29/2026
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=214&amp;FK=214&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Committee Chairman
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-center">
                01/29/2026
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=198&amp;FK=198&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Committee Member
              </td>
              <td class="text-left">
                Alvarez, Kristy
              </td>
              <td class="text-center">
                05/31/2023
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=182&amp;FK=182&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Committee Member
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-center">
                04/15/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=200&amp;FK=200&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Committee Member
              </td>
              <td class="text-left">
                Byrd, Amanda
              </td>
              <td class="text-center">
                10/07/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=202&amp;FK=202&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Committee Member
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-center">
                06/28/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=208&amp;FK=208&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Secretary
              </td>
              <td class="text-left">
                Nguyen, Phuong
              </td>
              <td class="text-center">
                09/14/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=169&amp;FK=169&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Treasurer
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-center">
                09/24/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=165&amp;FK=165&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                New Member Coordinator
              </td>
              <td class="text-left">
                Gaete, Holly
              </td>
              <td class="text-center">
                09/22/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=103&amp;FK=103&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Event Chair
              </td>
              <td class="text-left">
                Alvarez, Kristy
              </td>
              <td class="text-center">
                05/31/2023
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=141&amp;FK=141&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Quartermaster
              </td>
              <td class="text-left">
                Byrd, Amanda
              </td>
              <td class="text-center">
                06/05/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=212&amp;FK=212&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Unit Training Chair
              </td>
              <td class="text-left">
                Babb, Chris
              </td>
              <td class="text-center">
                12/01/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=199&amp;FK=199&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Advancement Chair
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-center">
                04/16/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=188&amp;FK=188&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Unit Scouter Reserve
              </td>
              <td class="text-left">
                DeMartini, Trevor
              </td>
              <td class="text-center">
                06/12/2025
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=173&amp;FK=173&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Unit Scouter Reserve
              </td>
              <td class="text-left">
                Hayes, David
              </td>
              <td class="text-center">
                12/05/2024
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=76&amp;FK=76&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Unit Scouter Reserve
              </td>
              <td class="text-left">
                Mallios, Jim
              </td>
              <td class="text-center">
                11/02/2022
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=127&amp;FK=127&amp;Form_ID=283&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Unit Scouter Reserve
              </td>
              <td class="text-left">
                Marshall, Mark
              </td>
              <td class="text-center">
                09/17/2023
              </td>
              <td class="text-center">

              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;Form_ID=283&amp;Stack=2">Add a Leadership Term</a></p>
      </div>
    </div>
    <div class="center-block widget43" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=403&amp;Stack=2">Recent Adult Training</a><sup><a class="widget-help-link" href="Help.aspx?ID=196" target="twhUserGuide">?&nbsp;</a></sup></h3>
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
              Course
              </th>
              <th>
              Completed
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=979&amp;FK=979&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Swantner, Albert
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                05/03/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=978&amp;FK=978&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Slonsky, Henry
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                04/23/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=977&amp;FK=977&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Duryee, David
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                11/18/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=976&amp;FK=976&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                04/23/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=975&amp;FK=975&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                04/23/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=974&amp;FK=974&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                05/13/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=973&amp;FK=973&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                05/13/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=965&amp;FK=965&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                CS19 Annual Charter Renewal Rechartering
              </td>
              <td class="text-center">
                09/13/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=964&amp;FK=964&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                CS19 Annual Program Planning for Cub Scouting
              </td>
              <td class="text-center">
                09/13/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=963&amp;FK=963&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                CS19 Pack Finance
              </td>
              <td class="text-center">
                09/13/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=962&amp;FK=962&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                YPT Certification Test
              </td>
              <td class="text-center">
                10/06/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=961&amp;FK=961&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Bullying
              </td>
              <td class="text-center">
                10/06/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=960&amp;FK=960&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Sexual Abuse
              </td>
              <td class="text-center">
                10/06/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=959&amp;FK=959&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Overview and Policies
              </td>
              <td class="text-center">
                10/06/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=958&amp;FK=958&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Planning Your Event
              </td>
              <td class="text-center">
                09/30/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=957&amp;FK=957&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Planning Your Cub Scout Outdoor Event v2
              </td>
              <td class="text-center">
                09/30/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=956&amp;FK=956&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Pack Camping Program
              </td>
              <td class="text-center">
                09/30/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=955&amp;FK=955&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                Introduction to the Cub Scout Outdoor Program v2
              </td>
              <td class="text-center">
                09/30/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=954&amp;FK=954&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Michael
              </td>
              <td class="text-left">
                BALOO (Basic Adult Ldr Outdoor Orient)
              </td>
              <td class="text-center">
                10/04/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=937&amp;FK=937&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Babb, Chris
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                12/01/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=936&amp;FK=936&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Babb, Chris
              </td>
              <td class="text-left">
                Safeguarding Youth Training
              </td>
              <td class="text-center">
                12/01/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=933&amp;FK=933&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                CS19 Pack Structure
              </td>
              <td class="text-center">
                11/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=932&amp;FK=932&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                CS19 Involving Adults in Cub Scouting
              </td>
              <td class="text-center">
                11/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=931&amp;FK=931&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                CS19 Keeping Cub Scouting Safe
              </td>
              <td class="text-center">
                11/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=930&amp;FK=930&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                CS19 Preparing Families for Outdoor Adventures
              </td>
              <td class="text-center">
                11/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=929&amp;FK=929&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                CS19 Conducting a Pack Committee Meeting
              </td>
              <td class="text-center">
                11/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=928&amp;FK=928&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                CS19 Cub Scout Uniforms
              </td>
              <td class="text-center">
                11/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=927&amp;FK=927&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bucklin, Mary
              </td>
              <td class="text-left">
                CS19 Aims and Methods of Cub Scouting
              </td>
              <td class="text-center">
                11/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=926&amp;FK=926&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">
                06/20/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=925&amp;FK=925&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                CS19 Childhood Development
              </td>
              <td class="text-center">
                06/04/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=924&amp;FK=924&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                CS19 Denners and Den Chiefs
              </td>
              <td class="text-center">
                06/04/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=923&amp;FK=923&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                CS19 Den Management
              </td>
              <td class="text-center">
                10/26/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=922&amp;FK=922&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                CS19 Resources
              </td>
              <td class="text-center">
                06/19/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=921&amp;FK=921&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                CS19 Conducting a Cub Scout Den Meeting
              </td>
              <td class="text-center">
                09/10/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=920&amp;FK=920&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                CS19 Advancement
              </td>
              <td class="text-center">
                06/19/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=919&amp;FK=919&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Russ
              </td>
              <td class="text-left">
                CS19 Bobcat
              </td>
              <td class="text-center">
                06/19/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=902&amp;FK=902&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Continue the Journey
              </td>
              <td class="text-center">
                10/22/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=901&amp;FK=901&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Childhood Development
              </td>
              <td class="text-center">
                10/22/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=900&amp;FK=900&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Denners and Den Chiefs
              </td>
              <td class="text-center">
                10/22/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=899&amp;FK=899&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Pack Structure
              </td>
              <td class="text-center">
                10/22/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=898&amp;FK=898&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Involving Adults in Cub Scouting
              </td>
              <td class="text-center">
                10/22/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=897&amp;FK=897&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Keeping Cub Scouting Safe
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=896&amp;FK=896&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Preparing Families for Outdoor Adventures
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=895&amp;FK=895&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Den Management
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=894&amp;FK=894&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Resources
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=893&amp;FK=893&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Conducting a Cub Scout Den Meeting
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=892&amp;FK=892&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Cub Scout Uniforms
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=891&amp;FK=891&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Advancement
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=890&amp;FK=890&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Bobcat
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=889&amp;FK=889&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Aims and Methods of Cub Scouting
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=888&amp;FK=888&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                CS19 Welcome
              </td>
              <td class="text-center">
                10/23/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=887&amp;FK=887&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                CS19 Continue the Journey
              </td>
              <td class="text-center">
                10/05/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=886&amp;FK=886&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                CS19 Denners and Den Chiefs
              </td>
              <td class="text-center">
                10/05/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=885&amp;FK=885&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                CS19 Keeping Cub Scouting Safe
              </td>
              <td class="text-center">
                10/05/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=884&amp;FK=884&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                CS19 Preparing Families for Outdoor Adventures
              </td>
              <td class="text-center">
                10/05/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=883&amp;FK=883&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                CS19 Den Management
              </td>
              <td class="text-center">
                10/05/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=882&amp;FK=882&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                CS19 Resources
              </td>
              <td class="text-center">
                10/05/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=881&amp;FK=881&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                CS19 Conducting a Cub Scout Den Meeting
              </td>
              <td class="text-center">
                10/05/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=880&amp;FK=880&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Amy
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">
                10/06/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=879&amp;FK=879&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Byrd, Ryan
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">
                10/20/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=878&amp;FK=878&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez, Jorge
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">
                10/03/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=852&amp;FK=852&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                10/22/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=851&amp;FK=851&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hayes, David
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                10/31/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=850&amp;FK=850&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Goodine, David
              </td>
              <td class="text-left">
                Safeguarding Youth Training Certification
              </td>
              <td class="text-center">
                10/25/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=832&amp;FK=832&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">
                09/29/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=831&amp;FK=831&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Continue the Journey
              </td>
              <td class="text-center">
                09/29/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=830&amp;FK=830&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Childhood Development
              </td>
              <td class="text-center">
                09/29/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=829&amp;FK=829&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Denners and Den Chiefs
              </td>
              <td class="text-center">
                09/29/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=828&amp;FK=828&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Pack Structure
              </td>
              <td class="text-center">
                09/29/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=827&amp;FK=827&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Involving Adults in Cub Scouting
              </td>
              <td class="text-center">
                09/29/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=826&amp;FK=826&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Keeping Cub Scouting Safe
              </td>
              <td class="text-center">
                09/29/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=825&amp;FK=825&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Preparing Families for Outdoor Adventures
              </td>
              <td class="text-center">
                09/29/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=824&amp;FK=824&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Den Management
              </td>
              <td class="text-center">
                09/25/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=823&amp;FK=823&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Resources
              </td>
              <td class="text-center">
                09/25/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=822&amp;FK=822&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Conducting a Cub Scout Den Meeting
              </td>
              <td class="text-center">
                09/24/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=821&amp;FK=821&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Cub Scout Uniforms
              </td>
              <td class="text-center">
                09/24/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=820&amp;FK=820&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Advancement
              </td>
              <td class="text-center">
                09/24/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=819&amp;FK=819&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Bobcat
              </td>
              <td class="text-center">
                09/20/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=818&amp;FK=818&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Aims and Methods of Cub Scouting
              </td>
              <td class="text-center">
                09/20/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=817&amp;FK=817&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-left">
                CS19 Welcome
              </td>
              <td class="text-center">
                09/20/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=815&amp;FK=815&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">
                10/28/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=814&amp;FK=814&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Continue the Journey
              </td>
              <td class="text-center">
                10/27/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=813&amp;FK=813&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Childhood Development
              </td>
              <td class="text-center">
                10/27/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=812&amp;FK=812&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Denners and Den Chiefs
              </td>
              <td class="text-center">
                10/27/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=811&amp;FK=811&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Pack Structure
              </td>
              <td class="text-center">
                10/26/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=810&amp;FK=810&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Involving Adults in Cub Scouting
              </td>
              <td class="text-center">
                10/25/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=809&amp;FK=809&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Keeping Cub Scouting Safe
              </td>
              <td class="text-center">
                10/27/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=808&amp;FK=808&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Preparing Families for Outdoor Adventures
              </td>
              <td class="text-center">
                10/27/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=807&amp;FK=807&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Den Management
              </td>
              <td class="text-center">
                10/22/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=806&amp;FK=806&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Resources
              </td>
              <td class="text-center">
                10/22/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=805&amp;FK=805&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Conducting a Cub Scout Den Meeting
              </td>
              <td class="text-center">
                10/22/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=804&amp;FK=804&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Cub Scout Uniforms
              </td>
              <td class="text-center">
                10/19/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=803&amp;FK=803&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Advancement
              </td>
              <td class="text-center">
                10/19/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=802&amp;FK=802&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Bobcat
              </td>
              <td class="text-center">
                10/19/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=801&amp;FK=801&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Aims and Methods of Cub Scouting
              </td>
              <td class="text-center">
                10/19/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=800&amp;FK=800&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                McFarland, Ian
              </td>
              <td class="text-left">
                CS19 Welcome
              </td>
              <td class="text-center">
                10/19/2024
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=799&amp;FK=799&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">
                08/25/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=798&amp;FK=798&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jason
              </td>
              <td class="text-left">
                CS19 Childhood Development
              </td>
              <td class="text-center">
                08/25/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=797&amp;FK=797&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hickman, Trey
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">
                02/06/2025
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=796&amp;FK=796&amp;Form_ID=401&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Hickman, Trey
              </td>
              <td class="text-left">
                CS19 Continue the Journey
              </td>
              <td class="text-center">
                02/07/2025
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;Form_ID=401&amp;Stack=2">Add Adult Training</a></p>
      </div>
    </div>
    <div class="center-block widget44" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=403&amp;Stack=2">Leaders Who Need YPT</a><sup><a class="widget-help-link" href="Help.aspx?ID=196" target="twhUserGuide">?&nbsp;</a></sup></h3>
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
              YPT Expired
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=668&amp;FK=668&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez, Jorge
              </td>
              <td class="text-center">
                07/04/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=714&amp;FK=714&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Alvarez, Kristy
              </td>
              <td class="text-center">
                06/15/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=908&amp;FK=908&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Byrd, Amanda
              </td>
              <td class="text-center">
                05/19/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1065&amp;FK=1065&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Chidester, Amy
              </td>
              <td class="text-center">
                09/14/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=693&amp;FK=693&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Mallios, Jim
              </td>
              <td class="text-center">
                08/26/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=866&amp;FK=866&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Marshall, Mark
              </td>
              <td class="text-center">
                05/19/2026
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1227&amp;FK=1227&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Westphal, Jenny
              </td>
              <td class="text-center">
                09/18/2026
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="center-block widget45" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=403&amp;Stack=2">Required Training</a><sup><a class="widget-help-link" href="Help.aspx?ID=196" target="twhUserGuide">?&nbsp;</a></sup></h3>
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
              Course
              </th>
              <th>
              Expired
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=978&amp;FK=978&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                De Los Santos Tamez, Diego
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=832&amp;FK=832&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Goodine, David
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">

              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1209&amp;FK=1209&amp;Form_ID=6145&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-left">
                Whittington, Aric
              </td>
              <td class="text-left">
                Hazardous Weather Training
              </td>
              <td class="text-center">

              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center">Update Person To Add Training</p>
      </div>
    </div>
    <div class="center-block widget46" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=2361&amp;Stack=2">Dynamic Subgroups</a><sup><a class="widget-help-link" href="Help.aspx?ID=281" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              &nbsp;
              </th>
              <th>
              Dynamic Subgroup
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=20&amp;FK=20&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=20&amp;FK=20&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Announce
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=6&amp;FK=6&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=6&amp;FK=6&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=3&amp;FK=3&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=3&amp;FK=3&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Bear
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=40&amp;FK=40&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=40&amp;FK=40&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Committee Chair
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=39&amp;FK=39&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=39&amp;FK=39&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Cubmaster
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=9&amp;FK=9&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=9&amp;FK=9&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 1
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=27&amp;FK=27&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=27&amp;FK=27&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 10
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=28&amp;FK=28&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=28&amp;FK=28&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 11
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=29&amp;FK=29&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=29&amp;FK=29&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 12
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=30&amp;FK=30&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=30&amp;FK=30&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 13
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=31&amp;FK=31&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=31&amp;FK=31&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 14
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=32&amp;FK=32&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=32&amp;FK=32&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 15
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=33&amp;FK=33&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=33&amp;FK=33&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 16
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=34&amp;FK=34&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=34&amp;FK=34&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 17
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=35&amp;FK=35&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=35&amp;FK=35&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 18
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=15&amp;FK=15&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=15&amp;FK=15&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 19
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=10&amp;FK=10&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=10&amp;FK=10&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 2
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=16&amp;FK=16&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=16&amp;FK=16&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 20
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=17&amp;FK=17&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=17&amp;FK=17&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 21
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=18&amp;FK=18&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=18&amp;FK=18&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 22
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=19&amp;FK=19&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=19&amp;FK=19&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 23
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=36&amp;FK=36&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=36&amp;FK=36&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 24
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=37&amp;FK=37&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=37&amp;FK=37&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 25
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=11&amp;FK=11&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=11&amp;FK=11&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 3
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=25&amp;FK=25&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=25&amp;FK=25&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 4
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=12&amp;FK=12&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=12&amp;FK=12&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 5
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=22&amp;FK=22&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=22&amp;FK=22&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 6
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=13&amp;FK=13&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=13&amp;FK=13&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 7
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=14&amp;FK=14&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=14&amp;FK=14&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 8
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=26&amp;FK=26&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=26&amp;FK=26&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den 9
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=43&amp;FK=43&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=43&amp;FK=43&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Den Leaders
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=8&amp;FK=8&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=8&amp;FK=8&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Key 3
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=7&amp;FK=7&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=7&amp;FK=7&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Leaders + Committee
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=5&amp;FK=5&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=5&amp;FK=5&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lion
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=44&amp;FK=44&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=44&amp;FK=44&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Lions + Tigers
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=21&amp;FK=21&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=21&amp;FK=21&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Membership
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=41&amp;FK=41&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=41&amp;FK=41&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Popcorn Kernel
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=1&amp;FK=1&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1&amp;FK=1&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Tiger
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=24&amp;FK=24&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=24&amp;FK=24&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Treasurer
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=4&amp;FK=4&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=4&amp;FK=4&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Webelos
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=23&amp;FK=23&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=23&amp;FK=23&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Webelos + AOL
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=2&amp;FK=2&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=2&amp;FK=2&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Wolf
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;PreselectID=42&amp;FK=42&amp;Form_ID=2364&amp;Stack=2">
                <span class="glyphicon glyphicon-envelope">
                </span></a>
              </td>
              <td class="text-center">
                <a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;ID=42&amp;FK=42&amp;Form_ID=2359&amp;Stack=2">
                <span class="glyphicon glyphicon-pencil">
                </span></a>
              </td>
              <td class="text-left">
                Wreath Wrangler
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;Form_ID=2359&amp;Stack=2">Add a Dynamic Subgroup</a></p>
      </div>
    </div>
    <div class="center-block widget47" style="margin-bottom: 20px; max-width: 480px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=5508&amp;Stack=2">Skills &amp; Interests</a><sup><a class="widget-help-link" href="Help.aspx?ID=338" target="twhUserGuide">?&nbsp;</a></sup></h3>
        <div class="scrollingdiv" style="height: 250px;">
          <table class="table-condensed table-striped" style="justify-content: space-between; width: 100%;">
            <thead class="thead-sticky">
            <tr>
              <th>
              &nbsp;
              </th>
              <th>
              Skill
              </th>
              <th>
              Name
              </th>
            </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <p align="center"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;Form_ID=5506&amp;Stack=2">Add a Member's Skill</a></p>
      </div>
    </div>
    <div class="center-block widget48" style="margin-bottom: 20px; max-width: 400px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Membership Information</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=285&amp;Stack=2">Leadership Terms</a><sup><a class="widget-help-link" href="Help.aspx?ID=195" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=403&amp;Stack=2">Training Completed</a><sup><a class="widget-help-link" href="Help.aspx?ID=196" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=5508&amp;Stack=2">Skills and Interests of Adult Members</a><sup><a class="widget-help-link" href="Help.aspx?ID=338" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormDetail.aspx?Menu_Item_ID=5788&amp;Form_ID=3796&amp;Stack=2">Transfer Scouts</a><sup><a class="widget-help-link" href="Help.aspx?ID=322" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormRunProcedure.aspx?Menu_Item_ID=5788&amp;Form_ID=6174&amp;Stack=2">Merge Duplicate Members</a><sup><a class="widget-help-link" href="Help.aspx?ID=366" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormRunProcedure.aspx?Menu_Item_ID=5788&amp;Form_ID=925&amp;Stack=2">Advance Scout Grade Level</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=664&amp;Stack=2">Inactive Members</a><sup><a class="widget-help-link" href="Help.aspx?ID=64" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=2002&amp;Stack=2">Update All . . . Age Levels</a><sup><a class="widget-help-link" href="Help.aspx?ID=275" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=6887&amp;Stack=2">Update All . . . Registration Dates</a><sup><a class="widget-help-link" href="Help.aspx?ID=384" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=7074&amp;Stack=2">Update All . . . Medical Dates</a><sup><a class="widget-help-link" href="Help.aspx?ID=381" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
      </div>
    </div>
    <div class="center-block widget49" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Upload Membership Data</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadScoutbookPlusRoster.aspx?Menu_Item_ID=5788&amp;Form_ID=7713&amp;Stack=2">Upload ScoutbookPlus Roster Report</a><sup><a class="widget-help-link" href="Help.aspx?ID=400" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadScoutScoutBook.aspx?Menu_Item_ID=5788&amp;Form_ID=3180&amp;Stack=2">Upload Scouts From ScoutBook</a><sup><a class="widget-help-link" href="Help.aspx?ID=304" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadAdultsScoutBook.aspx?Menu_Item_ID=5788&amp;Form_ID=3181&amp;Stack=2">Upload Adults From ScoutBook</a><sup><a class="widget-help-link" href="Help.aspx?ID=305" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadMyScoutingRoster.aspx?Menu_Item_ID=5788&amp;Form_ID=6904&amp;Stack=2">Upload Roster Report From My.Scouting</a><sup><a class="widget-help-link" href="Help.aspx?ID=375" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadSOARmembers.aspx?Menu_Item_ID=5788&amp;Form_ID=6557&amp;Stack=2">Upload SOAR Members</a><sup><a class="widget-help-link" href="Help.aspx?ID=371" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadSOARfamily.aspx?Menu_Item_ID=5788&amp;Form_ID=6610&amp;Stack=2">Upload SOAR Family</a><sup><a class="widget-help-link" href="Help.aspx?ID=372" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadScouts.aspx?Menu_Item_ID=5788&amp;Form_ID=1705&amp;Stack=2">Upload Scouts From Packmaster PC</a><sup><a class="widget-help-link" href="Help.aspx?ID=229" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadScoutNetRoster.aspx?Menu_Item_ID=5788&amp;Form_ID=1627&amp;Stack=2">Upload Members From ScoutNet</a><sup><a class="widget-help-link" href="Help.aspx?ID=227" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadScoutsScoutTrack2.aspx?Menu_Item_ID=5788&amp;Form_ID=1845&amp;Stack=2">Upload Scouts From ScoutTrack</a><sup><a class="widget-help-link" href="Help.aspx?ID=233" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadAdultsScoutTrack2.aspx?Menu_Item_ID=5788&amp;Form_ID=1846&amp;Stack=2">Upload Adults From ScoutTrack</a><sup><a class="widget-help-link" href="Help.aspx?ID=234" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="bsaUploadTrainingUniversal.aspx?Menu_Item_ID=5788&amp;Form_ID=5818&amp;Stack=2">Upload Training from My.Scouting.Org</a><sup><a class="widget-help-link" href="Help.aspx?ID=319" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
      </div>
    </div>
    <div class="center-block widget54" style="margin-bottom: 20px; width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Set Up</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=2361&amp;Stack=2">Dynamic Subgroups</a><sup><a class="widget-help-link" href="Help.aspx?ID=281" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=1442&amp;Stack=2">Leadership Positions</a><sup><a class="widget-help-link" href="Help.aspx?ID=193" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=1447&amp;Stack=2">Training Courses</a><sup><a class="widget-help-link" href="Help.aspx?ID=210" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=5504&amp;Stack=2">Skills and Interests</a><sup><a class="widget-help-link" href="Help.aspx?ID=338" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=4240&amp;Stack=2">Dress Codes</a><sup><a class="widget-help-link" href="Help.aspx?ID=330" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormList.aspx?Menu_Item_ID=5788&amp;Form_ID=3648&amp;Stack=2">Shirt Sizes</a><sup><a class="widget-help-link" href="Help.aspx?ID=313" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
      </div>
    </div>
    <div class="center-block widget53" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Training Reports</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=2431&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Expired Training By Course</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=2432&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Expired Training By Person</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=2433&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Required Training By Course</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=2434&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Required Training By Person</a></div>
      </div>
    </div>
    <div class="center-block widget51" style="margin-bottom: 20px; max-width: 560px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h3 style="margin-top: 4px; padding-top: 0;">Directories</h3>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=568&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Member Directory</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=569&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Leader Directory</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=1496&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Committee Directory</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=663&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Contact List</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=1361&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Emergency Contact List</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=2081&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Den List By Member Name</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=2082&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Den List By Den</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=6095&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Den List With Parent Info</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=7790&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Members with Allergies or Dietary Restrictions</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=1329&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Family Cross Reference</a><sup><a class="widget-help-link" href="Help.aspx?ID=179" target="twhUserGuide">&nbsp;?&nbsp;</a></sup></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=979&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Birthday List</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReportMultiSection.aspx?Menu_Item_ID=5788&amp;Form_ID=3684&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Shirt Sizes</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=977&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Medical Form Effective Dates</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=6899&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">Upcoming BSA Registration Renewals</a></div>
        <div style="margin-top: 4px; margin-bottom: 4px; font-size: 110%; text-align: left;"><a class="widgetlink" href="FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=6898&amp;Stack=2&amp;ReportFormat=PDF" target="_blank">BSA Registrations</a></div>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>