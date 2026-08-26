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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="5838">
<input type="hidden" name="Form_ID" id="Form_ID" value="6174">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormRunProcedure.aspx?Menu_Item_ID=5838&amp;Stack=0">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=5838">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=5838">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=5838">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=366" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=5838">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=5838">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=5838">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=5838">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormRunProcedure.aspx?Menu_Item_ID=5838&amp;Stack=0&amp;Application_ID=2840
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
Merge Duplicate Membership Records
</p>
<div class="new-row">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY000000031">
          <td class="text-right">
            <label class="control-label">
            <span class="entryprompt" id="RDIVENTRY000000031" style="visibility: visible">
            <font size="2" color="red">*</font>
            <input type="hidden" name="RVALENTRY000000031" value="Y">
            </span>
            Membership Record To Keep
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="OLD000000031" id="OLD000000031" value="0">
            <select name="ENTRY000000031" id="ENTRY000000031" class="form-control" size="1" title="The membership record that will be saved.  All of the information linked to the other record will be connected to this one" onblur="TestRegExp(this,'','')" style="background-color: rgb(255, 255, 255);">
              <option selected="" value="0"> </option>
              <option value="1018">Aarons, Andrew</option>
              <option value="1027">Aarons, Ashley</option>
              <option value="1086">Aarons, Stephen</option>
              <option value="910">Abbott, Albert</option>
              <option value="914">Abbott, William</option>
              <option value="1063">Almaraz, Alexander</option>
              <option value="1064">Almaraz, Eric</option>
              <option value="668">Alvarez, Jorge</option>
              <option value="714">Alvarez, Kristy</option>
              <option value="1239">Alvarez, Layla</option>
              <option value="664">Alvarez, Mateo</option>
              <option value="1245">Applegate, Chris</option>
              <option value="1240">Applegate, Sebastian</option>
              <option value="1202">Babb, Chris</option>
              <option value="1184">Babb, Tyson</option>
              <option value="488">Bayes, Dylan</option>
              <option value="578">Bayes, Phillip</option>
              <option value="1154">Blair, Frankie</option>
              <option value="1155">Blair, Joe</option>
              <option value="1156">Bruyn, Emerson</option>
              <option value="1169">Bruyn, Meaghan</option>
              <option value="964">Bucklin, Emmett</option>
              <option value="976">Bucklin, Mary</option>
              <option value="977">Bucklin, Michael</option>
              <option value="1610">Bucklin, Michael2</option>
              <option value="1611">Bucklin, Michael3</option>
              <option value="785">Bush, Greg</option>
              <option value="762">Bush, Kai</option>
              <option value="908">Byrd, Amanda</option>
              <option value="763">Byrd, Benjamin</option>
              <option value="786">Byrd, Ryan</option>
              <option value="1535">Chakarvarty, Mridul</option>
              <option value="1065">Chidester, Amy</option>
              <option value="1143">Chidester, Ella</option>
              <option value="986">Chidester, Russ</option>
              <option value="983">Chidester, Taylor</option>
              <option value="630">Corkill, Cynthia</option>
              <option value="1259">Daru, Bhargav</option>
              <option value="984">de los Santos Garza, Andrea</option>
              <option value="965">de los Santos Garza, Leo  Jr.</option>
              <option value="978">De Los Santos Tamez, Diego</option>
              <option value="1135">DeMartini, Emilia</option>
              <option value="1139">DeMartini, Trevor</option>
              <option value="1136">DeMartini, Vincent</option>
              <option value="1241">Dennis, Khoi</option>
              <option value="1246">Dennis, Michael</option>
              <option value="614">Desouky, Noura</option>
              <option value="1268">Diaz, Adam</option>
              <option value="1266">Diaz, Winslow</option>
              <option value="562">Dranguet, Benjamin</option>
              <option value="1281">Duryee, David</option>
              <option value="1203">D'Vincent, Lilli</option>
              <option value="1185">D'Vincent, Mason</option>
              <option value="654">Elrakabawy, Erin</option>
              <option value="1539">Espejel, Dean</option>
              <option value="1609">Espejel, Moshe</option>
              <option value="564">Files, Michael</option>
              <option value="1122">Files, Michael</option>
              <option value="633">Files, Mikaela</option>
              <option value="651">Files, Sofia</option>
              <option value="888">Gaete, Holly</option>
              <option value="886">Gaete, Lincoln</option>
              <option value="893">Galdo, Anne</option>
              <option value="1088">Galdo, Henry</option>
              <option value="1114">Gibson, Charleston</option>
              <option value="1123">Gibson, Steven</option>
              <option value="832">Goodine, David</option>
              <option value="811">Goodine, Jack</option>
              <option value="1187">Gurrola, Benjamin</option>
              <option value="1204">Gurrola, Jacqueline</option>
              <option value="1232">Gurrola, Matthew</option>
              <option value="1157">Hallar, Henry</option>
              <option value="1170">Hallar, Ingrid</option>
              <option value="1171">Hanss Blair, Rachel</option>
              <option value="944">Harrison, Abi</option>
              <option value="940">Harrison, James</option>
              <option value="1084">Hayes, David</option>
              <option value="833">Hickman, Trey</option>
              <option value="1188">Hickman, Maya</option>
              <option value="1285">Hoy, Ashton</option>
              <option value="1287">Hoy, Nicole</option>
              <option value="1216">Hume, Beatrix</option>
              <option value="1225">Hume, John</option>
              <option value="1205">Idell, Claire</option>
              <option value="1189">Idell, Gabe</option>
              <option value="1292">Ingram, Alistair</option>
              <option value="1534">Ingrams, Julie and Robert</option>
              <option value="1293">Kathuria, Kabir</option>
              <option value="883">Keenan, Danielle</option>
              <option value="880">Keenan, Lilly</option>
              <option value="882">Keenan, Peter</option>
              <option value="1190">kommineni, anish</option>
              <option value="517">kommineni, Avighna</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
              <option value="933">Lorenzini, Mitch</option>
              <option value="1217">Lorenzini, Paige</option>
              <option value="922">Lorenzini, Pepper</option>
              <option value="1032">Lynch, Dixon</option>
              <option value="1034">Lynch, Scott</option>
              <option value="693">Mallios, Jim</option>
              <option value="688">Mallios, Jason</option>
              <option value="493">Mallios, Nicholas</option>
              <option value="556">Mallios, Tracy</option>
              <option value="1260">Marquez, David</option>
              <option value="1255">Marquez, Owen</option>
              <option value="856">Marshall, Angie</option>
              <option value="866">Marshall, Mark</option>
              <option value="1158">McFarland, Beckett</option>
              <option value="923">McFarland, Evan</option>
              <option value="1124">McFarland, Ian</option>
              <option value="934">McFarland, Kristin</option>
              <option value="1269">McLeer, Douglas</option>
              <option value="1226">McLeer, Krissy</option>
              <option value="1218">McLeer, Levi</option>
              <option value="1219">McLeer, Liam</option>
              <option value="1256">Medler, Bennett</option>
              <option value="1276">Morris, Jack</option>
              <option value="1282">Morris, Lacey</option>
              <option value="1002">Mysyk, Alexander</option>
              <option value="1288">Mysyk, Andriy</option>
              <option value="1191">Nair, Ananya</option>
              <option value="1206">Nair, Jithun</option>
              <option value="1294">Nallathambi, Kalki</option>
              <option value="1533">Nallathambi, Ravetha</option>
              <option value="789">Nguyen, Phuong</option>
              <option value="1277">Niphadkar, Sahana</option>
              <option value="1283">Niphadkar, Shraddha</option>
              <option value="1172">North, Allison</option>
              <option value="1159">North, Arlo</option>
              <option value="1160">North, Davis</option>
              <option value="599">Omran, Ahmed</option>
              <option value="643">Omran, Haroun</option>
              <option value="1079">Patel, Amy</option>
              <option value="1173">Patel, Sujan</option>
              <option value="765">Phan, Erik</option>
              <option value="1247">Porter, Koley</option>
              <option value="1242">Porter, Thora</option>
              <option value="968">Purohit, Anay</option>
              <option value="980">Purohit, Vijendra</option>
              <option value="1532">revspsg@gmail.com, Revathi N</option>
              <option value="1207">Rios, Amanda</option>
              <option value="1243">Rios, Luciana</option>
              <option value="745">Robinson, Nick</option>
              <option value="737">Robinson, Rohan</option>
              <option value="924">Saldanha, Claire</option>
              <option value="1161">Saldanha, Eva</option>
              <option value="935">Saldanha, Mithila</option>
              <option value="622">Shuman, Frank</option>
              <option value="853">Shuman, Luca</option>
              <option value="649">Shuman, Natalie</option>
              <option value="899">Slonsky, Henry</option>
              <option value="583">Slonsky, Kyle</option>
              <option value="591">Slonsky, Yasemin</option>
              <option value="1208">Staffield, Brittany</option>
              <option value="638">Stappenbeck, Charlotte</option>
              <option value="616">Stappenbeck, Steve</option>
              <option value="1263">Stubblefield, Joel</option>
              <option value="1262">Stubblefield, Will</option>
              <option value="1162">Sujan, Jaxson</option>
              <option value="1163">Sujan, Kira</option>
              <option value="1077">Sujan, Mav</option>
              <option value="1066">Susannah Benton, Susannah</option>
              <option value="995">Swantner, Albert</option>
              <option value="991">Swantner, Everett</option>
              <option value="992">Swenson, Jack</option>
              <option value="996">Swenson, Lindsey</option>
              <option value="1089">Swenson, Matt</option>
              <option value="1081">Tabie, Logan</option>
              <option value="1085">Tabie, Mike</option>
              <option value="854">Valencia Marshall, Angel</option>
              <option value="1264">Vital, Jessie</option>
              <option value="1227">Westphal, Jenny</option>
              <option value="1220">Westphal, Milo</option>
              <option value="1221">Westphal, oliver</option>
              <option value="1209">Whittington, Aric</option>
              <option value="1193">Whittington, Rowan</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY000000032">
          <td class="text-right">
            <label class="control-label">
            <span class="entryprompt" id="RDIVENTRY000000032" style="visibility: visible">
            <font size="2" color="red">*</font>
            <input type="hidden" name="RVALENTRY000000032" value="Y">
            </span>
            Membership Record To Deactivate
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="OLD000000032" id="OLD000000032" value="0">
            <select name="ENTRY000000032" id="ENTRY000000032" class="form-control" size="1" title="This record will be made inactive and all of its related information will be linked to the first record you selected" onblur="TestRegExp(this,'','')">
              <option selected="" value="0"> </option>
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
              <option value="984">de los Santos Garza, Andrea</option>
              <option value="965">de los Santos Garza, Leo  Jr.</option>
              <option value="978">De Los Santos Tamez, Diego</option>
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
              <option value="833">Hickman, Trey</option>
              <option value="1188">Hickman, Maya</option>
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
              <option value="1052">Klein, Taylor</option>
              <option value="1047">Klein, James</option>
              <option value="1053">Klein, Jamie</option>
              <option value="542">Kohli, Anumeha</option>
              <option value="666">Kohli, Aria</option>
              <option value="1190">kommineni, anish</option>
              <option value="517">kommineni, Avighna</option>
              <option value="577">Kommineni, Vijaya Bhaskar</option>
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
              <option value="693">Mallios, Jim</option>
              <option value="688">Mallios, Jason</option>
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
              <option value="1532">revspsg@gmail.com, Revathi N</option>
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
              <option value="1221">Westphal, oliver</option>
              <option value="1209">Whittington, Aric</option>
              <option value="1193">Whittington, Rowan</option>
              <option value="627">Workman, Chip  IV</option>
              <option value="625">Workman, Logan</option>
              <option value="998">Yang, Neil</option>
              <option value="769">Yao, Eden</option>
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
<div class="new-row" id="fs20625">
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
<div class="new-row" id="fs20626">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 560px; min-width: 200px;">
      <p>
      This procedure will merge two membership records which were accidentally created for the same person.
      </p>
      <p>
      It will reconnect all of the related information from the second record that you specify above to the first record that you selected.  It will then mark the second record as inactive.
      </p>
      <p>
      <b>Be careful!</b>&nbsp;&nbsp; There is no <b><i>Undo</i></b> function! &nbsp; Once you merge two records they cannot be automatically unmerged.
      </p>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY000000031">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>