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
<form enctype="multipart/form-data" action="https://www.TroopWebHostCS.org/FormRunProcedure.aspx" target="_self" method="post" name="easyform" id="easyform">
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="5430">
<input type="hidden" name="Form_ID" id="Form_ID" value="5906">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormRunProcedure.aspx?Menu_Item_ID=5430&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=5430">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=5430">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=5430">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=352" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=5430">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=5430">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=5430">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=5430">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormRunProcedure.aspx?Menu_Item_ID=5430&amp;Stack=1&amp;Application_ID=2840
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
Merge Duplicate Locations
</p>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY000000027">
          <td class="text-right">
            <label class="control-label">
            <span class="entryprompt" id="RDIVENTRY000000027" style="visibility: visible">
            <font size="2" color="red">*</font>
            <input type="hidden" name="RVALENTRY000000027" value="Y">
            </span>
            Location Record To Keep
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="OLD000000027" id="OLD000000027" value="0">
            <select name="ENTRY000000027" id="ENTRY000000027" class="form-control" size="1" title="Select the location record you wish to keep.  All references to the other location will be changed to reference this location." onblur="TestRegExp(this,'','')" style="background-color: rgb(255, 255, 255);">
              <option selected="" value="0"> </option>
              <option value="89">3755 S Capital of Texas Hwy</option>
              <option value="63">5101 Wasson Road, Austin, TX 78745</option>
              <option value="68">7224 Mitra Dr</option>
              <option value="12">Abiding Love Lutheran Church</option>
              <option value="83">Alvarez House</option>
              <option value="82">ATX Bikes</option>
              <option value="42">Austin Community College - Eastview Campus</option>
              <option value="50">Austin Fire Station 27</option>
              <option value="78">Austin Lighthouse School for the Blind</option>
              <option value="57">Austin Ridge Bible Church Southwest</option>
              <option value="10">Baldwin Elementary</option>
              <option value="1">Baldwin Elementary - Cafeteria</option>
              <option value="41">Bastrop State Park</option>
              <option value="27">Bethany Lutheran Church</option>
              <option value="28">Bonnie's house</option>
              <option value="79">Bradfield Village Park</option>
              <option value="81">Bucklin House</option>
              <option value="21">Camp Green Dixon</option>
              <option value="39">Camp Tom Wooten - Cub World</option>
              <option value="71">Cidercade</option>
              <option value="4">Circle C Community Center</option>
              <option value="76">Circle C Fire Station #43</option>
              <option value="11">Circle C Ranch Metropolitan Park</option>
              <option value="8">Circle C Swim Center</option>
              <option value="9">Clayton Elementary</option>
              <option value="2">Clayton Elementary - Cafeteria</option>
              <option value="13">Clayton Elementary Playground</option>
              <option value="52">Crux Climbing Center</option>
              <option value="6">Cubmaster Nate's Home</option>
              <option value="77">Den Leader Home</option>
              <option value="75">Den Leader Home</option>
              <option value="37">Dick Nichols Park</option>
              <option value="60">Emma Long Municipal Park</option>
              <option value="45">Fire Station 43</option>
              <option value="5">Founders Memorial Park</option>
              <option value="70">Frank Fickett Scout Center</option>
              <option value="86">Garner State Park</option>
              <option value="40">Gaston Place</option>
              <option value="53">Goliad State Park &amp; Historic Site</option>
              <option value="48">Google Meet</option>
              <option value="56">Grelle Recreation Area</option>
              <option value="49">Hilton Austin</option>
              <option value="72">Inks Lake State Park</option>
              <option value="69">Innerspace Cavern</option>
              <option value="65">Jason Mallios' house</option>
              <option value="14">Jason's Workshop</option>
              <option value="43">Jorge's Workshop</option>
              <option value="87">Keenan House</option>
              <option value="58">Krause Springs</option>
              <option value="93">Lake Somerville State Park</option>
              <option value="92">Lost Pines Scout Reservation</option>
              <option value="51">Mary Moore Searight Metro Park</option>
              <option value="19">McGimsey Scout Park</option>
              <option value="94">Meridian Neighborhood Pavilion and Pool</option>
              <option value="73">Meridian Park Pavilion</option>
              <option value="33">Mia Lee Home</option>
              <option value="20">Muleshoe Bend Recreation Area</option>
              <option value="91">Natural Bridge Caverns</option>
              <option value="15">Oak Hill HEB</option>
              <option value="17">Oak Hill United Methodist Church</option>
              <option value="90">Onion Creek Park</option>
              <option value="84">Palm Valley Lutheran Church</option>
              <option value="3">Pedernales Falls State Park</option>
              <option value="66">Peter Keenan's House</option>
              <option value="38">Robert's Workshop</option>
              <option value="80">San Antonio Zoo</option>
              <option value="55">Sea World San Antonio</option>
              <option value="47">Slaughter Creek Trail</option>
              <option value="24">Smilin V Scout Ranch</option>
              <option value="32">Space Center Houston</option>
              <option value="30">St. Catherine of Siena Catholic Church</option>
              <option value="85">Stonebridge Nursing and Rehab Center</option>
              <option value="44">Surinder's Garage</option>
              <option value="67">Swantner's House</option>
              <option value="34">TBD</option>
              <option value="36">Texas Capitol</option>
              <option value="18">The Alamo</option>
              <option value="25">The Bennetts</option>
              <option value="64">The Texas Military Forces Museum</option>
              <option value="74">Travis County Community Center</option>
              <option value="59">USS Lexington</option>
              <option value="35">VFW Post 3377</option>
              <option value="7">VFW Post 4443</option>
              <option value="62">Violet Crown Trail</option>
              <option value="26">Ward North American</option>
              <option value="22">Western Oaks Park Pool</option>
              <option value="16">Westgate Lanes</option>
              <option value="23">Whittmeyer Ranch</option>
              <option value="88">Zilker Park</option>
              <option value="61">Zoom</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY000000028">
          <td class="text-right">
            <label class="control-label">
            <span class="entryprompt" id="RDIVENTRY000000028" style="visibility: visible">
            <font size="2" color="red">*</font>
            <input type="hidden" name="RVALENTRY000000028" value="Y">
            </span>
            Location Record To Delete
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="OLD000000028" id="OLD000000028" value="0">
            <select name="ENTRY000000028" id="ENTRY000000028" class="form-control" size="1" title="All references to this location will be changed to point to the first location you selected.  This record will then be deleted." onblur="TestRegExp(this,'','')">
              <option selected="" value="0"> </option>
              <option value="89">3755 S Capital of Texas Hwy</option>
              <option value="63">5101 Wasson Road, Austin, TX 78745</option>
              <option value="68">7224 Mitra Dr</option>
              <option value="12">Abiding Love Lutheran Church</option>
              <option value="83">Alvarez House</option>
              <option value="82">ATX Bikes</option>
              <option value="42">Austin Community College - Eastview Campus</option>
              <option value="50">Austin Fire Station 27</option>
              <option value="78">Austin Lighthouse School for the Blind</option>
              <option value="57">Austin Ridge Bible Church Southwest</option>
              <option value="10">Baldwin Elementary</option>
              <option value="1">Baldwin Elementary - Cafeteria</option>
              <option value="41">Bastrop State Park</option>
              <option value="27">Bethany Lutheran Church</option>
              <option value="28">Bonnie's house</option>
              <option value="79">Bradfield Village Park</option>
              <option value="81">Bucklin House</option>
              <option value="21">Camp Green Dixon</option>
              <option value="39">Camp Tom Wooten - Cub World</option>
              <option value="71">Cidercade</option>
              <option value="4">Circle C Community Center</option>
              <option value="76">Circle C Fire Station #43</option>
              <option value="11">Circle C Ranch Metropolitan Park</option>
              <option value="8">Circle C Swim Center</option>
              <option value="9">Clayton Elementary</option>
              <option value="2">Clayton Elementary - Cafeteria</option>
              <option value="13">Clayton Elementary Playground</option>
              <option value="52">Crux Climbing Center</option>
              <option value="6">Cubmaster Nate's Home</option>
              <option value="77">Den Leader Home</option>
              <option value="75">Den Leader Home</option>
              <option value="37">Dick Nichols Park</option>
              <option value="60">Emma Long Municipal Park</option>
              <option value="45">Fire Station 43</option>
              <option value="5">Founders Memorial Park</option>
              <option value="70">Frank Fickett Scout Center</option>
              <option value="86">Garner State Park</option>
              <option value="40">Gaston Place</option>
              <option value="53">Goliad State Park &amp; Historic Site</option>
              <option value="48">Google Meet</option>
              <option value="56">Grelle Recreation Area</option>
              <option value="49">Hilton Austin</option>
              <option value="72">Inks Lake State Park</option>
              <option value="69">Innerspace Cavern</option>
              <option value="65">Jason Mallios' house</option>
              <option value="14">Jason's Workshop</option>
              <option value="43">Jorge's Workshop</option>
              <option value="87">Keenan House</option>
              <option value="58">Krause Springs</option>
              <option value="93">Lake Somerville State Park</option>
              <option value="92">Lost Pines Scout Reservation</option>
              <option value="51">Mary Moore Searight Metro Park</option>
              <option value="19">McGimsey Scout Park</option>
              <option value="94">Meridian Neighborhood Pavilion and Pool</option>
              <option value="73">Meridian Park Pavilion</option>
              <option value="33">Mia Lee Home</option>
              <option value="20">Muleshoe Bend Recreation Area</option>
              <option value="91">Natural Bridge Caverns</option>
              <option value="15">Oak Hill HEB</option>
              <option value="17">Oak Hill United Methodist Church</option>
              <option value="90">Onion Creek Park</option>
              <option value="84">Palm Valley Lutheran Church</option>
              <option value="3">Pedernales Falls State Park</option>
              <option value="66">Peter Keenan's House</option>
              <option value="38">Robert's Workshop</option>
              <option value="80">San Antonio Zoo</option>
              <option value="55">Sea World San Antonio</option>
              <option value="47">Slaughter Creek Trail</option>
              <option value="24">Smilin V Scout Ranch</option>
              <option value="32">Space Center Houston</option>
              <option value="30">St. Catherine of Siena Catholic Church</option>
              <option value="85">Stonebridge Nursing and Rehab Center</option>
              <option value="44">Surinder's Garage</option>
              <option value="67">Swantner's House</option>
              <option value="34">TBD</option>
              <option value="36">Texas Capitol</option>
              <option value="18">The Alamo</option>
              <option value="25">The Bennetts</option>
              <option value="64">The Texas Military Forces Museum</option>
              <option value="74">Travis County Community Center</option>
              <option value="59">USS Lexington</option>
              <option value="35">VFW Post 3377</option>
              <option value="7">VFW Post 4443</option>
              <option value="62">Violet Crown Trail</option>
              <option value="26">Ward North American</option>
              <option value="22">Western Oaks Park Pool</option>
              <option value="16">Westgate Lanes</option>
              <option value="23">Whittmeyer Ranch</option>
              <option value="88">Zilker Park</option>
              <option value="61">Zoom</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs19825">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON0" type="button" name="save continue" title="Save this information and go to the next page" value="Continue" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="120" id="BUTTON1" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON1">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<div class="new-row" id="fs19826">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 800px; min-width: 200px;">
      <p>
      This procedure will merge two location records which were accidentally created for the same place.
      </p>
      <p>
      It will reconnect all of the events currently linked to the second record that you specify above to the first record that you selected.&nbsp; It will then delete the second record.
      </p>
      <p>
      <b>Be careful!</b>&nbsp;&nbsp; There is no <b><i>Undo</i></b> function! &nbsp; Once you merge two records they cannot be automatically unmerged.
      </p>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY000000027">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>