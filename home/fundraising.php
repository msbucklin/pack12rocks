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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="6776">
<input type="hidden" name="Form_ID" id="Form_ID" value="2824">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/formCustom.aspx?Menu_Item_ID=6776&amp;Stack=0&amp;Custom_Form_ID=8">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=6776">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=6776">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=6776">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?DB=2" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=6776">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=6776">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=6776">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=6776">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/formCustom.aspx?Menu_Item_ID=6776&amp;Stack=0&amp;Custom_Form_ID=8&amp;Application_ID=2840
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
Fundraising
</p>
<input type="hidden" name="Custom_Form_ID" id="Custom_Form_ID" value="8">
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block " style="margin-bottom: 20px; max-width: 1920px; min-width: 200px; ">
      <div style="display: inline-block; margin-left: 10px; margin-right: 10px; width: calc(100% - 20px);">
        <h2><strong>PACK 12 FUNDRAISING:&nbsp;</strong></h2>

<p style="text-align:center"><img alt="" class="img-responsive" height="290.90909090909093" src="https://ogo.blob.core.windows.net/cspack12austin/Pack_12_Fundraising_2023531181675382281.jpg" width="640"></p>

<p>In Pack 12, fundraising constitutes almost half of Pack’s operating income.</p>

<p>For the 2024-25&nbsp;school year, each scout is expected to raise a minimum amount through fundraiser product sales. That minimum fundraising amount for the 2024-25&nbsp;school year is $200 in Gross Sales. Optionally, you can also select a hassle-free Fundraising Opt-Out Fee of $100.</p>

<ul>
	<li><strong>If you choose the Fundraising Opt-Out Fee, our Treasurer will email you an invoice.</strong></li>
</ul>

<p>&nbsp;</p>

<p><strong>Pack 12 has two fundraising events during the year:</strong></p>

<ul>
	<li>Popcorn sales through&nbsp;Trail’s End</li>
	<li>Holiday wreath sales through Mickman Brothers</li>
</ul>

<p><strong>Why do we fundraise?</strong></p>

<p style="text-align:center"><img alt="" class="img-responsive" height="137.5" src="https://ogo.blob.core.windows.net/cspack12austin/Why_Fundraise_20235311818391893218.png" width="640"></p>

<ul>
</ul>

<p><strong>How much does the Pack receive, and where is all the money going?</strong></p>

<ul>
	<li>Over 73% of popcorn sales support scouting with Pack 12 receiving 30-35% of all sales to help offset operational costs including the cost of registering Pack 12 with BSA, scout awards, patches, campouts, events, and other miscellaneous Pack expenses like storage and software.</li>
</ul>

<p style="text-align:center"><img alt="" class="img-responsive" height="211.02286401925392" src="https://ogo.blob.core.windows.net/cspack12austin/Trails_End_73_percent_to_scouting_20235311816508648740.png" width="640"></p>

<h3>&nbsp;</h3>

<h3><strong>POPCORN SALES THROUGH TRAILS END</strong></h3>

<p>Popcorn sales are Pack 12's primary source of fundraising. There are four options for conducting sales: Storefront Sales, Online Direct, Take Order, and Wagon Sales.</p>

<ul>
	<li><strong>Parent Resources</strong>

	<ul>
		<li><a href="https://docs.google.com/document/d/1pQy3Fvmjz-i7QNS44EJcq9cY0xe7TbUM/edit?usp=sharing&amp;ouid=116745202021374415641&amp;rtpof=true&amp;sd=true" target="_blank">Pack 12 Popcorn FAQ</a></li>
		<li><a href="https://drive.google.com/file/d/106uYZm-Wme2AfGWoFAWoOG6bj0LslLvN/view?usp=sharing" target="_blank">2024&nbsp;Parent Guide</a></li>
		<li><a href="https://drive.google.com/file/d/1cnUCwSFPQP9NgVpyTlevKGIIFQKJua0i/view?usp=sharing" target="_blank">2024&nbsp;Pricing Guide</a></li>
		<li><a href="https://docs.google.com/document/d/144I3fkeDgdgVC7mooxyUvYA1SPlwrrqV/edit?usp=sharing&amp;ouid=116745202021374415641&amp;rtpof=true&amp;sd=true" target="_blank">Scout Sales Pitch</a></li>
	</ul>
	</li>
	<li><strong>Storefront Sales:&nbsp;</strong>
	<ul>
		<li>During Storefront Sales, Pack 12 will be able to set up booths at pre-approved locations for the purpose of selling popcorn with immediate delivery to the customer</li>
		<li>The Pack purchases popcorn inventory for this event and sales proceeds are divided equally among the scouts present at the booth</li>
		<li>Scouts are encouraged to work at least one booth during the season</li>
		<li>You will use the&nbsp;<a href="https://www.trails-end.com/" target="_blank">Trail’s End</a>&nbsp;app/website to book your Show and Sell location &amp; to complete the transactions (Use the&nbsp;<strong>Storefront Sales</strong>&nbsp;method)</li>
		<li>Storefront Sales begin September 15, 2023&nbsp;and end when on-hand supply is exhausted or October 22, 2023&nbsp;(whichever comes first)</li>
	</ul>
	</li>
	<li><strong>Online Direct :&nbsp;</strong>
	<ul>
		<li>There is also an option to sell popcorn orders online through&nbsp;<a href="https://www.trails-end.com/" target="_blank">Trail's End</a></li>
		<li>Scouts email an order link to family and friends and orders are fulfilled and shipped directly to the customer</li>
		<li>Sign up your scout for online sales at&nbsp;<a href="https://www.trails-end.com/" target="_blank">https://www.trails-end.com/</a>&nbsp;and share your scout's store link</li>
		<li>Online Direct sales begin August 1, 2023&nbsp;and close October 28, 2023</li>
	</ul>
	</li>
</ul>

<ul>
	<li><strong>Take Order (with Online Direct):&nbsp;</strong>

	<ul>
		<li>Take Orders are popcorn orders taken&nbsp;door-to-door by scouts for&nbsp;<strong>later delivery</strong></li>
		<li>Orders are recorded on&nbsp;<a href="https://www.trails-end.com/" target="_blank">Trail’s End</a>&nbsp;app (Use the&nbsp;<strong>Online Direct</strong>&nbsp;method)</li>
		<li>Payment is taken on site with the app and popcorn will be shipped directly to the customer (no need to return to deliver product)</li>
		<li>There is no need to take product with you for Take Order sales</li>
		<li>Download the&nbsp;<a href="https://drive.google.com/file/d/1sInojQxQBk_ox1uL8f5K4Vq_QGCGnQGk/view?usp=sharing" target="_blank">Paper Take Order Form</a>&nbsp;(NOTE: All sales must be logged in the Trail's End App)</li>
		<li>Take Order sales&nbsp;begin August 1, 2023&nbsp;and close October 28, 2023</li>
	</ul>
	</li>
</ul>

<ul>
	<li><strong>Take Order (with Wagon Sales):&nbsp;</strong>

	<ul>
		<li>Take Orders are popcorn orders taken&nbsp;door-to-door by scouts for&nbsp;<strong>later delivery</strong></li>
		<li>Orders are recorded on&nbsp;<a href="https://www.trails-end.com/" target="_blank">Trail’s End</a>&nbsp;app (Use the&nbsp;<strong>Wagon Sale</strong>&nbsp;method)</li>
		<li>Payment is taken on site with the app and&nbsp;order must be marked as&nbsp;<strong>UNDELIVERED</strong>&nbsp;at checkout</li>
		<li>Capture the customers address and contact information&nbsp;</li>
		<li>After Take Order sales window has ended, the Pack will place an order for all undelivered product and provide to Scouts so they can deliver to customers on a subsequent visit</li>
		<li>There is no need to take product with you for Take Order sales</li>
		<li>Download the&nbsp;<a href="https://drive.google.com/file/d/1sInojQxQBk_ox1uL8f5K4Vq_QGCGnQGk/view?usp=sharing" target="_blank">Paper Take Order Form</a>&nbsp;(NOTE: All sales must be logged in the Trail's End App)</li>
		<li>Take Order sales&nbsp;begin September 15, 2023&nbsp;and close October 22, 2023</li>
	</ul>
	</li>
</ul>

<ul>
	<li><strong>Wagon Sales:&nbsp;</strong>

	<ul>
		<li>Wagon Sales are popcorn orders taken&nbsp;door-to-door by scouts for&nbsp;<strong>immediate delivery</strong></li>
		<li>Scouts take the popcorn inventory with them in order to deliver product when the order is placed</li>
		<li>Orders are recorded on&nbsp;<a href="https://www.trails-end.com/" target="_blank">Trail’s End</a>&nbsp;app (Use the&nbsp;<strong>Wagon Sales</strong>&nbsp;method)</li>
		<li>Payment is taken on site with the app and popcorn is handed to the customer</li>
		<li>Parents must reach out to the&nbsp;Popcorn Kernel&nbsp;to schedule inventory pick-up&nbsp;<strong>before</strong>&nbsp;the Wagon Sale</li>
		<li>Wagon Sales begin September 15, 2023&nbsp;and&nbsp;end when on-hand supply is exhausted or October 22, 2023&nbsp;(whichever comes first)</li>
	</ul>
	</li>
</ul>

<p>&nbsp;</p>

<h3><strong>HOLIDAY WREATH SALES THROUGH MICKMAN BROTHERS</strong></h3>

<p>Holiday wreath sales take place in mid to late October, and there are two options for conducting sales: take order and online.</p>

<ul>
	<li>
	<p><strong>"Traditional" Take Order:</strong></p>

	<ul>
		<li>Take orders are wreath orders taken by individual scouts for later delivery by the scouts</li>
		<li>Orders are recorded on a provided order form and turned into Pack 12
		<ul>
			<li>Forms will be available at the October Pack meeting</li>
		</ul>
		</li>
		<li>Orders take place in October
		<ul>
			<li>Sales solicitations are made by individual scouts and wreaths can be delivered in person or shipped</li>
			<li><strong>Order Form Due Date: TBD</strong></li>
		</ul>
		</li>
		<li>Wreath deliveries take place shortly after Thanksgiving and scouts will be notified to pick up orders for delivery</li>
		<li>Pack 12 earns 40% of Take Order sales</li>
	</ul>
	</li>
</ul>

<ul>
	<li><strong>Online Orders / Direct Ship:</strong>

	<ul>
		<li>Wreath Sales can also be done&nbsp;<strong>Online until TBD</strong>&nbsp;at&nbsp;<a href="https://giftitforward.com/" target="_blank">GiftItForward.com</a>&nbsp;with code PK12TX001</li>
		<li>Pack 12 earns $8.00 per item sold through Online / Direct Ship</li>
	</ul>
	</li>
</ul>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>