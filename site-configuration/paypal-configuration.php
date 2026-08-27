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
               easyFieldExit(thisfield);
          }
          else
          {
            easyFieldExit(thisfield);
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
            easyFieldExit(thisfield);
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
          easyFieldExit(thisfield);
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


 if (onLoad||thisfield.name=='ENTRY4462811')
{
  var PayPal_Flag = easyGetFieldValue('ENTRY4462811');
  if (PayPal_Flag=='Y')
  {
    easyEnableField('ENTRY446292',true,true);
    easyEnableField('ENTRY446302',true,true);
    easySetRequired('ENTRY446292',true);
    easyEnableField('ENTRY629832',true,true);
  }
  else
  {
    easyEnableField('ENTRY446292',false,true);
    easyEnableField('ENTRY446302',false,true);
    easySetRequired('ENTRY446292',false);
    easyEnableField('ENTRY629832',false,true);
  }
}

if (onLoad||thisfield.name=='ENTRY446292')
{
  var selectedvalue = easyGetFieldValue('ENTRY446292');
  GetTransactionTypeFlags(selectedvalue);
}



if (onLoad||thisfield.name=='ENTRY282932')
{
  try
  {
    var selectedvalue = easyGetFieldValue('ENTRY282932');
    GetTransactionTypeFlagsForPayPalDeposit(selectedvalue);
  }
  catch(err)
  {
  }
}


    }
  function GetTransactionTypeFlags(TransactionID)
{
  var pl = new SOAPClientParameters();
  pl.add("BSA_Transaction_Type_ID",TransactionID);
  pl.add("User_Database_ID",2840);

  SOAPClient.invoke("EasyWebService.asmx","GetTransactionTypeFlags",pl,true,ReturnTransactionTypeFlags);
  return;
}

function ReturnTransactionTypeFlags(retObj)
{
	 //  if there is an error, display it and exit
	 if (retObj.ErrorMsg && retObj.ErrorMessage.length > 0)
	  {
		window.alert(retObj.ErrorMessage.text);
		return true;
	  }

	  var FlagValues = retObj.TransactionTypeFlags;

	  if (FlagValues.substr(6,1)=='N')
	  {
		easySetFieldValue('ENTRY446302','0');
	  }

	  easyEnableField('ENTRY446302',(FlagValues.substr(6,1)=='Y'),true);
	  easySetRequired('ENTRY446302',(FlagValues.substr(6,1)=='Y'));
}

function GetTransactionTypeFlagsForPayPalDeposit(TransactionID)
{
  var pl = new SOAPClientParameters();
  pl.add("BSA_Transaction_Type_ID",TransactionID);
  pl.add("User_Database_ID",2840);

  SOAPClient.invoke("EasyWebService.asmx","GetTransactionTypeFlags",pl,true,ReturnTransactionTypeFlagsForPayPalDeposit);
  return;
}

function ReturnTransactionTypeFlagsForPayPalDeposit(retObj)
{
	 //  if there is an error, display it and exit
	 if (retObj.ErrorMsg && retObj.ErrorMessage.length > 0)
	  {
		window.alert(retObj.ErrorMessage.text);
		return true;
	  }

	  var FlagValues = retObj.TransactionTypeFlags;

	  if (FlagValues.substr(7,1)=='N')
	  {
		easySetFieldValue('ENTRY282912','0');
	  }

	  easyEnableField('ENTRY282912',(FlagValues.substr(7,1)=='Y'),true);
	  easySetRequired('ENTRY282912',(FlagValues.substr(7,1)=='Y'));
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="407">
<input type="hidden" name="Form_ID" id="Form_ID" value="1439">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="1">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=407&amp;Stack=1">
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=407">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=407">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=407">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=220" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=407">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=407">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=407">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=407">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=407&amp;Stack=1&amp;Application_ID=2840
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
Configure PayPal
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="1">
<div class="new-row" id="fs7195">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr>
          <td class="bodysubheading text-center" colspan="2">
            PayPal Configuration
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            If your group has a PayPal merchant account, you can accept payments on-line.
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            Please read all five pages in the <a href="http://www.ourgrouponline.org/help.aspx?id=217" target="_blank">User Guide</a> to learn how to set up your group to accept PayPal payments.
            <br><br>
          </td>
        </tr>
        <tr>
          <td class="bodyheading text-center" colspan="2">
            Do NOT go further if you have not read the <a href="help.aspx?id=217" target="_blank">User Guide PayPal instructions</a>!<br>
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY282971">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY282971" style="visibility: hidden">
            *
            </span>
            Business ID of PayPal Account
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY282971" id="RVALENTRY282971" value="N">
            <input type="hidden" name="OLD282971" id="OLD282971" value="Q4QPKWYB9YTYA">
            <input type="text" class="form-control" id="ENTRY282971" name="ENTRY282971" tabindex="110" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="Q4QPKWYB9YTYA" title="The business ID that identifies this group's PayPal account." style="background-color: rgb(255, 255, 255);">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY29576106">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY29576106" style="visibility: visible">
            *
            </span>
            PayPal Account Type/Rate
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY29576106" id="RVALENTRY29576106" value="Y">
            <input type="hidden" name="OLD29576106" id="OLD29576106" value="Standard">
            <span class="text-left" id="SPAN29576106" name="SPAN29576106">
            <span style="white-space: nowrap;"><input type="radio" id="ENTRY29576106" name="ENTRY29576106" tabindex="120" onclick="easyFieldExit(this)" checked="" value="Standard">Standard</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY29576106" name="ENTRY29576106" tabindex="120" onclick="easyFieldExit(this)" value="Non-Profit">Non-Profit</span>
            </span>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <b>Do not select the Non-Profit rate unless you have received approval from PayPal for this special rate.<br>PayPal will require proof of your organization's 501c(3) status before approving this rate.</b>
            <br><br>
          </td>
        </tr>
        <tr id="DIVENTRY283012">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY283012" style="visibility: visible">
            *
            </span>
            PayPal Group  Account
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY283012" id="RVALENTRY283012" value="Y">
            <input type="hidden" name="OLD283012" id="OLD283012" value="1">
            <select id="ENTRY283012" name="ENTRY283012" class="form-control" onblur="TestRegExp(this,'','')" tabindex="130" title="The group account to which all PayPal payments will be recorded." size="1">
              <option value="2">Frost Bank Checking Account</option>
              <option selected="" value="1">PayPal</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY282932">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY282932" style="visibility: visible">
            *
            </span>
            PayPal Deposit Transaction Type
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY282932" id="RVALENTRY282932" value="Y">
            <input type="hidden" name="OLD282932" id="OLD282932" value="22">
            <select id="ENTRY282932" name="ENTRY282932" class="form-control" onblur="TestRegExp(this,'','')" tabindex="140" title="The transaction type of the PayPal deposit transaction that will be created when a member completes a PayPal deposit to the group." size="1">
              <option value="1">Deposit To Member Account</option>
              <option selected="" value="22">PayPal Deposit To Member Account</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY282912" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY282912" style="visibility: hidden">
            *
            </span>
            Fund for PayPal Deposits
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY282912" id="RVALENTRY282912" value="N">
            <input type="hidden" name="OLD282912" id="OLD282912" value="0">
            <select id="ENTRY282912" name="ENTRY282912" class="form-control" onblur="TestRegExp(this,'','')" tabindex="150" title="The fund to which a deposit to a member account via PayPal will be recorded." size="1" disabled="">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">
            Required if your transaction type requires a fund, otherwise leave empty
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2830035">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2830035" style="visibility: hidden">
            *
            </span>
            Email Address for PayPal Notifications
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2830035" id="RVALENTRY2830035" value="N">
            <input type="hidden" name="OLD2830035" id="OLD2830035" value="cspack12rocks@gmail.com">
            <input type="text" class="form-control" id="ENTRY2830035" name="ENTRY2830035" tabindex="160" size="50" onblur="TestRegExp(this,/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_\-\+])*@([-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,'Please enter a valid e-mail address.  Here is an example of a valid e-mail address:  jsmith@earthlink.net')" maxlength="255" value="cspack12rocks@gmail.com" title="The email address to which the PayPal system will send notifications of received or rejected payments.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4462811">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4462811" style="visibility: hidden">
            *
            </span>
            Group Absorbs Credit Card Fee For Member Payments
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4462811" id="RVALENTRY4462811" value="N">
            <input type="hidden" name="OLD4462811" id="OLD4462811" value="N">
            <input type="checkbox" onclick="easyFieldExit(this)" tabindex="170" value="Y" id="ENTRY4462811" name="ENTRY4462811" size="1" title="Check this box if you want your group to absorb the cost of the credit card processing fee when members deposit money to their account">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY446292" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY446292" style="visibility: hidden">
            *
            </span>
            Transaction Type For Credit Card Fee Absorbed By Group
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY446292" id="RVALENTRY446292" value="N">
            <input type="hidden" name="OLD446292" id="OLD446292" value="0">
            <select id="ENTRY446292" name="ENTRY446292" class="form-control" onblur="TestRegExp(this,'','')" tabindex="180" title="The transaction type to use when recording the credit card processing fee that will be absorbed by the group." size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="14">Group Expense Paid From Group Account</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY446302" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY446302" style="visibility: hidden">
            *
            </span>
            Fund To Charge Credit Card Fee
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY446302" id="RVALENTRY446302" value="N">
            <input type="hidden" name="OLD446302" id="OLD446302" value="0">
            <select id="ENTRY446302" name="ENTRY446302" class="form-control" onblur="TestRegExp(this,'','')" tabindex="190" title="The fund to which the expense of the credit card processing fee will be charged when the group absorbs the fee" size="1" disabled="">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY629832" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY629832" style="visibility: hidden">
            *
            </span>
            Credit Card Fee Budget Item
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY629832" id="RVALENTRY629832" value="N">
            <input type="hidden" name="OLD629832" id="OLD629832" value="0">
            <select id="ENTRY629832" name="ENTRY629832" class="form-control" onblur="TestRegExp(this,'','')" tabindex="200" title="The budget item to which the on-line payment fee should be expensed if the group is absorbing that fee." size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="3">Accident insurance fees</option>
              <option value="4">Advancement</option>
              <option value="11">Full uniforms</option>
              <option value="10">Leader basic training</option>
              <option value="13">Other expenses</option>
              <option value="9">Program materials</option>
              <option value="25">Recognition:  Handbooks/neckerchiefs</option>
              <option value="26">Recognition:  Pack leaders</option>
              <option value="1">Registration fees</option>
              <option value="12">Reserve fund</option>
              <option value="2">Scout Life</option>
              <option value="24">Unit charter fee</option>
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
<div class="new-row" id="fs7196">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="210" id="BUTTON16" type="button" name="save" title="Save the information that you entered on this page" value="Save" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="220" id="BUTTON17" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON17">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="230" id="BUTTON18" type="button" name="sql" title="Disable PayPal Payments For This Site" value="Disable PayPal Payments For This Site" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY282971">
</form>
<div style="height: 100px;">&nbsp;</div>


<div id="1p-menu-live-region" role="status" aria-live="polite" aria-atomic="true" aria-relevant="all" style="clip: rect(0px, 0px, 0px, 0px); clip-path: inset(50%); height: 1px; overflow: hidden; position: fixed; top: 0px; left: 0px; white-space: nowrap; width: 1px; overflow-wrap: normal;">1Password menu is available. Press down arrow to select.</div></body></html>