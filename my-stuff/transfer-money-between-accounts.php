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
  if (onLoad||thisfield.name=='ENTRY485522')
{
  var Group_Transaction_Flag = 'N';
  if (Group_Transaction_Flag=='Y')
  {
    easyEnableField('ENTRY485522',false,false);
    easyEnableField('ENTRY4855316',false,false);
    easyEnableField('ENTRY485541',false,false);
    easyEnableField('ENTRY485551',false,false);
    easyEnableField('ENTRY4855636',false,false);
    easyEnableField('ENTRY485572',false,false);
    easyEnableField('ENTRY485582',false,false);
    easyEnableField('ENTRY485592',false,false);
    easyEnableField('ENTRY485602',false,false);
    easyEnableField('ENTRY485612',false,false);
    easyEnableField('ENTRY485622',false,false);
    easyEnableField('ENTRY485662',false,false);
    easyEnableField('ENTRY485642',false,false);
    easyEnableField('ENTRY485652',false,false);
    easyEnableField('ENTRY485755',false,false);
    easyEnableField('ENTRY4856316',false,false);
    easyEnableField('ENTRY630732',false,false);
  }
  else
  {
    var selectedvalue = easyGetFieldValue('ENTRY485522');
    GetTransactionTypeFlags(selectedvalue);
  }
}


    }
  function GetTransactionTypeFlags(TransactionID)
{
  var pl = new SOAPClientParameters();
  pl.add("BSA_Transaction_Type_ID",TransactionID);
  pl.add("User_Database_ID",2840);

//  SOAPClient.invoke("https://www.TroopWebHostCS.org/EasyWebService.asmx","GetTransactionTypeFlags",pl,true,ReturnTransactionTypeFlags);
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


	  if (FlagValues.substr(0,1)=='N')
	  {
		easySetFieldValue('ENTRY485572','0');
	  }
	  if (FlagValues.substr(1,1)=='N')
	  {
		easySetFieldValue('ENTRY485582','0');
	  }
	  if (FlagValues.substr(2,1)=='N')
	  {
		easySetFieldValue('ENTRY485592','0');
	  }
	  if (FlagValues.substr(3,1)=='N')
	  {
		easySetFieldValue('ENTRY485602','0');
	  }
	  if (FlagValues.substr(4,1)=='N')
	  {
		easySetFieldValue('ENTRY485612','0');
	  }
	  if (FlagValues.substr(5,1)=='N')
	  {
		easySetFieldValue('ENTRY485622','0');
	  }
	  if (FlagValues.substr(6,1)=='N')
	  {
		easySetFieldValue('ENTRY485642','0');
	  }
	  if (FlagValues.substr(7,1)=='N')
	  {
		easySetFieldValue('ENTRY485652','0');
	  }
	  if (FlagValues.substr(8,1)=='N')
	  {
		easySetFieldValue('ENTRY4856316','');
	  }
	  if (FlagValues.substr(9,1)=='N')
	  {
		easySetFieldValue('ENTRY485662','');
	  }
	  if (FlagValues.substr(10,1)=='N')
	  {
		easySetFieldValue('ENTRY485755','');
	  }
	  if (FlagValues.substr(11,1)=='N')
	  {
		easySetFieldValue('ENTRY630732','0');
	  }
	  easyEnableField('ENTRY485572',(FlagValues.substr(0,1)=='Y'),true);
	  easySetRequired('ENTRY485572',(FlagValues.substr(0,1)=='Y'));

	  easyEnableField('ENTRY485582',(FlagValues.substr(1,1)=='Y'),true);
	  easySetRequired('ENTRY485582',(FlagValues.substr(1,1)=='Y'));

	  easyEnableField('ENTRY485592',(FlagValues.substr(2,1)=='Y'),true);
	  easySetRequired('ENTRY485592',(FlagValues.substr(2,1)=='Y'));

	  easyEnableField('ENTRY485602',(FlagValues.substr(3,1)=='Y'),true);
	  easySetRequired('ENTRY485602',(FlagValues.substr(3,1)=='Y'));

	  easyEnableField('ENTRY485612',(FlagValues.substr(4,1)=='Y'),true);
	  easySetRequired('ENTRY485612',(FlagValues.substr(4,1)=='Y'));

	  easyEnableField('ENTRY485622',(FlagValues.substr(5,1)=='Y'),true);
	  easySetRequired('ENTRY485622',(FlagValues.substr(5,1)=='Y'));

	  easyEnableField('ENTRY485642',(FlagValues.substr(6,1)=='Y'),true);
	  easySetRequired('ENTRY485642',(FlagValues.substr(6,1)=='Y'));

	  easyEnableField('ENTRY485652',(FlagValues.substr(7,1)=='Y'),true);
	  easySetRequired('ENTRY485652',(FlagValues.substr(7,1)=='Y'));

	  easyEnableField('ENTRY4856316',(FlagValues.substr(8,1)=='Y'),true);
	  easySetRequired('ENTRY4856316',(FlagValues.substr(8,1)=='Y'));

	  easyEnableField('ENTRY485662',(FlagValues.substr(9,1)=='Y'),true);

	  easyEnableField('ENTRY485755',(FlagValues.substr(10,1)=='Y'),true);

	  easyEnableField('ENTRY630732',(FlagValues.substr(11,1)=='Y'),true);
	  easySetRequired('ENTRY630732',(FlagValues.substr(11,1)=='Y'));
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="308">
<input type="hidden" name="Form_ID" id="Form_ID" value="3960">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="2">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=308&amp;Form_ID=3960&amp;FK=0&amp;ID=0&amp;Stack=2">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=2','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=2','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=308">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=308">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=308">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?DB=2" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=308">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=308">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=308">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=308">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=308&amp;Form_ID=3960&amp;FK=0&amp;ID=0&amp;Stack=2&amp;Application_ID=2840
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
My Family
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs15955">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 640px; min-width: 200px;">
      <p>
      This page allows you to transfer money between the members of your family.
      </p>
      <p>
      The system will transfer money from the selected <i>Charge To Person</i>, increasing the balance of the selected <i>Credit To Person</i>.
      </p>
      <p>
      You may only transfer money from accounts that have a positive balance.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs15953">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY485522">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485522" style="visibility: visible">
            *
            </span>
            Transaction Type
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485522" id="RVALENTRY485522" value="Y">
            <input type="hidden" name="OLD485522" id="OLD485522" value="0">
            <select id="ENTRY485522" name="ENTRY485522" class="form-control" onblur="TestRegExp(this,'','')" tabindex="110" title="The type of transaction determines the accounts that must be specified." onchange="UpdateDependentList(this,'ENTRY630732','3176','2840','1','0','0','1610','column');" size="1" style="background-color: rgb(255, 255, 255);">
              <option value="8">Transfer Between Member Accounts</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4855316">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4855316" style="visibility: hidden">
            *
            </span>
            Transaction Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4855316" id="RVALENTRY4855316" value="">
            <input type="hidden" name="OLD4855316" id="OLD4855316" value="08/28/2026">
            <input type="hidden" name="ENTRY4855316" id="ENTRY4855316" value="08/28/2026">
            <span class="text-left">
            08/28/2026
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4856316" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4856316" style="visibility: hidden">
            *
            </span>
            Deposit Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4856316" id="RVALENTRY4856316" value="N">
            <input type="hidden" name="OLD4856316" id="OLD4856316" value="">
            <input type="hidden" name="ENTRY4856316" id="ENTRY4856316" value="" disabled="">
            <span class="text-left">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485541">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485541" style="visibility: hidden">
            *
            </span>
            Description
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485541" id="RVALENTRY485541" value="N">
            <input type="hidden" name="OLD485541" id="OLD485541" value="">
            <input type="text" class="form-control" id="ENTRY485541" name="ENTRY485541" tabindex="140" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="A description of this specific transaction">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485551">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485551" style="visibility: hidden">
            *
            </span>
            Reference
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485551" id="RVALENTRY485551" value="N">
            <input type="hidden" name="OLD485551" id="OLD485551" value="">
            <input type="text" class="form-control" id="ENTRY485551" name="ENTRY485551" tabindex="150" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The check number or other reference information pertaining to this transaction.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4855636">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4855636" style="visibility: visible">
            *
            </span>
            Amount
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4855636" id="RVALENTRY4855636" value="Y">
            <input type="hidden" name="OLD4855636" id="OLD4855636" value="0">
            <input type="text" class="form-control" id="ENTRY4855636" name="ENTRY4855636" tabindex="160" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="0" title="The amount, in dollars and cents, of this transaction.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485572" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485572" style="visibility: hidden">
            *
            </span>
            Debit Group Account
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485572" id="RVALENTRY485572" value="N">
            <input type="hidden" name="OLD485572" id="OLD485572" value="0">
            <select id="ENTRY485572" name="ENTRY485572" class="form-control" onblur="TestRegExp(this,'','')" tabindex="170" title="The group account to be reduced by the amount of this transaction." size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="2">Frost Bank Checking Account</option>
              <option value="1">PayPal</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485582" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485582" style="visibility: hidden">
            *
            </span>
            Credit Group Account
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485582" id="RVALENTRY485582" value="N">
            <input type="hidden" name="OLD485582" id="OLD485582" value="0">
            <select id="ENTRY485582" name="ENTRY485582" class="form-control" onblur="TestRegExp(this,'','')" tabindex="180" title="The group account to be increased by the amount of this transaction." size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="2">Frost Bank Checking Account</option>
              <option value="1">PayPal</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485592" style="visibility: visible; display: table-row;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485592" style="visibility: visible;">
            *
            </span>
            Charge To Person
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485592" id="RVALENTRY485592" value="Y">
            <input type="hidden" name="OLD485592" id="OLD485592" value="0">
            <select id="ENTRY485592" name="ENTRY485592" class="form-control" onblur="TestRegExp(this,'','')" tabindex="190" title="The person whose account should be reduced by the amount of this transaction." size="1">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485602" style="visibility: visible; display: table-row;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485602" style="visibility: visible;">
            *
            </span>
            Credit To Person
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485602" id="RVALENTRY485602" value="Y">
            <input type="hidden" name="OLD485602" id="OLD485602" value="0">
            <select id="ENTRY485602" name="ENTRY485602" class="form-control" onblur="TestRegExp(this,'','')" tabindex="200" title="The person whose account balance should be increased by the amount of this transaction" size="1">
              <option selected="" value="0"> </option>
              <option value="1610">Bucklin, Michael2 &nbsp; &nbsp; [-1.00]</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485612" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485612" style="visibility: hidden">
            *
            </span>
            Debit Event
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485612" id="RVALENTRY485612" value="N">
            <input type="hidden" name="OLD485612" id="OLD485612" value="0">
            <select id="ENTRY485612" name="ENTRY485612" class="form-control" onblur="TestRegExp(this,'','')" tabindex="210" title="The event balance to be reduced by the amount of this transaction." size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="541">Graduation (05/15/27)</option>
              <option value="563">District Roundtable (05/06/27)</option>
              <option value="585">Spring Picnic (05/01/27)</option>
              <option value="540">Rocket Derby (04/17/27)</option>
              <option value="542">Spring Campout (04/02/27)</option>
              <option value="562">District Roundtable (04/01/27)</option>
              <option value="584">Arrows &amp; BB's Adventure Day (03/06/27)</option>
              <option value="543">Webelos Wilderness Weekend (03/05/27)</option>
              <option value="561">District Roundtable (03/04/27)</option>
              <option value="583">AOL Crossover Ceremony (02/27/27)</option>
              <option value="544">Pinewood Derby (02/20/27)</option>
              <option value="546">Pinewood Derby Inspections (Option 2) (02/18/27)</option>
              <option value="545">Pinewood Derby Inspections (Option 1) (02/16/27)</option>
              <option value="560">District Roundtable (02/04/27)</option>
              <option value="547">Winter Overnight (Lone Star Flight Museum) (01/23/27)</option>
              <option value="548">USS Lexington (Overnight) (01/16/27)</option>
              <option value="559">District Roundtable (01/07/27)</option>
              <option value="558">District Roundtable (12/03/26)</option>
              <option value="549">Fall Campout (11/13/26)</option>
              <option value="557">District Roundtable (11/05/26)</option>
              <option value="582">Scouting 101 &amp; Cub Mobile (Troop Hosted Event) (10/03/26)</option>
              <option value="556">District Roundtable (10/01/26)</option>
              <option value="566">Arrows, BBs &amp; Campfires (09/25/26)</option>
              <option value="555">District Roundtable (09/03/26)</option>
              <option value="581">Welcome Back, Pack Picnic (08/29/26)</option>
              <option value="580">Webelos and AOL Swim Adventure (08/22/26)</option>
              <option value="554">District Roundtable (08/06/26)</option>
              <option value="567">Natural Bridge Caverns (07/18/26)</option>
              <option value="511">Circle C 4th of July Parade (07/04/26)</option>
              <option value="565">District Roundtable (07/02/26)</option>
              <option value="506">Cidercade Hangout (06/20/26)</option>
              <option value="564">District Roundtable (06/04/26)</option>
              <option value="500">Raingutter Regatta (05/30/26)</option>
              <option value="507">Ceremony of Colors at Baldwin Elementary Graduation (05/28/26)</option>
              <option value="383">Pack 12 Graduation (05/16/26)</option>
              <option value="380">Rocket Derby (05/09/26)</option>
              <option value="509">Rocket Derby Inspections and Build (Session 2) (05/07/26)</option>
              <option value="508">Rocket Derby Inspections and Build (Session 1) (05/06/26)</option>
              <option value="502">Spring Campout - Alternative Event - Please RSVP (04/18/26)</option>
              <option value="503">Messengers Of Peace Service Project (04/18/26)</option>
              <option value="378">RESCHEDULED TO FALL -- Spring Campout (04/17/26)</option>
              <option value="373">AOL Crossover Ceremony (03/07/26)</option>
              <option value="372">CANCELLED - Cubmaster Campout (03/06/26)</option>
              <option value="371">Pinewood Derby (02/07/26)</option>
              <option value="486">Weigh-in day for Pinewood Derby (02/05/26)</option>
              <option value="485">Weigh-in day for Pinewood Derby (02/04/26)</option>
              <option value="369">Winter Overnight at San Antonio Zoo (01/31/26)</option>
              <option value="488">Block Cutting for Pinewood Derby (01/22/26)</option>
              <option value="484">Block Cutting for Pinewood Derby (01/19/26)</option>
              <option value="483">Block Cutting for Pinewood Derby (01/18/26)</option>
              <option value="482">Block Cutting for Pinewood Derby (01/17/26)</option>
              <option value="478">BALOO Training (01/09/26)</option>
              <option value="475">Troop 448 troop meeting (12/08/25)</option>
              <option value="477">Troop 448 Meeting with AOL Activities (12/08/25)</option>
              <option value="409">Troop 19 Campout - Pedernales Falls (12/06/25)</option>
              <option value="465">Touch An Ambulance Event/First Aide with Ally Medical (11/16/25)</option>
              <option value="462">Lion's Service Project Art on Display @ Austin Studio Tour (11/15/25)</option>
              <option value="472">Veterans Day Flag Ceremony at Clayton Elementary (11/11/25)</option>
              <option value="469">Veterans Day Flag Ceremony at Baldwin Elementary (11/11/25)</option>
              <option value="364">Fall Campout (11/07/25)</option>
              <option value="458">Baldwin Campus Cleanup Service Project (10/26/25)</option>
              <option value="384">Scouting 101 (formerly Webelos Woods) (10/25/25)</option>
              <option value="459">Lion's Den #6 &amp; #7 Art Supply Pickup (10/12/25)</option>
              <option value="358">New Scout Family Meeting (09/14/25)</option>
              <option value="352">Cubmobile Derby (08/16/25)</option>
              <option value="351">Innerspace Caverns (07/19/25)</option>
              <option value="350">Independence Day Parade (CANCELLED) (07/04/25)</option>
              <option value="349">Raingutter Regatta (06/07/25)</option>
              <option value="346">Ceremony of Colors at Baldwin Elementary Graduation (05/29/25)</option>
              <option value="257">Pack 12 Graduation (05/17/25)</option>
              <option value="256">Rocket Derby (05/10/25)</option>
              <option value="348">Rocket Derby Inspections, Day 2 (05/08/25)</option>
              <option value="347">Rocket Derby Inspections, Day 1 (05/07/25)</option>
              <option value="254">Spring Campout (04/11/25)</option>
              <option value="340">Clean-up at Clayton and Community Center (04/06/25)</option>
              <option value="343">Baldwin Campus Beautification Day (03/08/25)</option>
              <option value="339">Cubmaster Campout (03/01/25)</option>
              <option value="337">Crossover Ceremony (02/22/25)</option>
              <option value="253">Crossover Campout (NOW CEREMONY ONLY) (02/22/25)</option>
              <option value="252">Pinewood Derby (02/08/25)</option>
              <option value="335">Pinewood Derby Weigh-In (02/05/25)</option>
              <option value="334">Pinewood Derby Weigh-In (02/04/25)</option>
              <option value="255">Sea World Winter Overnight (01/25/25)</option>
              <option value="289">Overnight at the USS Lexington (01/11/25)</option>
              <option value="324">Baldwin Veteran's Day Celebration - Flag Ceremony (11/11/24)</option>
              <option value="283">Den 22 AOL campout Pedernales Falls (11/08/24)</option>
              <option value="323">Clayton Veterans Day Assembly - Flag Ceremony (11/08/24)</option>
              <option value="234">Fall Campout - Goliad State Park (11/01/24)</option>
              <option value="286">(GIRLS) - Troop 19 Halloween Costume Party (10/27/24)</option>
              <option value="287">(BOYS) - Troop 61 Open House (10/27/24)</option>
              <option value="299">Service Project - Baldwin Campus Cleanup &amp; Planter Construction (10/27/24)</option>
              <option value="300">Den Leader Training (10/23/24)</option>
              <option value="284">(BOYS AOL) Troop 448 - Astronomy Overnight Campout (10/19/24)</option>
              <option value="285">(BOYS AOL) Troop 555 - Grelle Campout (10/19/24)</option>
              <option value="266">(BOYS AOL) Troop 505 - Invitational Capture the Flag Campout (10/18/24)</option>
              <option value="274">BALOO Adult Leader Training (10/11/24)</option>
              <option value="288">(GIRLS AOL) - Troop 4443 Krause Springs Campout (10/11/24)</option>
              <option value="268">Troop 505 Open House (09/28/24)</option>
              <option value="250">Family Pack Orientation (09/15/24)</option>
              <option value="241">Parent &amp; Volunteer Meeting (09/08/24)</option>
              <option value="258">Aquanauts (08/24/24)</option>
              <option value="222">Cubmobile Derby (08/18/24)</option>
              <option value="221">Parent &amp; Volunteer Meeting (08/11/24)</option>
              <option value="220">Summer Activity - Rock Climbing (07/20/24)</option>
              <option value="219">Independence Day Parade (07/04/24)</option>
              <option value="218">Raingutter Regatta (06/08/24)</option>
              <option value="223">Baldwin Ceremony of Colors (05/23/24)</option>
              <option value="214">RESCHEDULED - Cleanup @ Clayton Elementary (05/11/24)</option>
              <option value="125">NEW TIME - Rocket Derby (05/04/24)</option>
              <option value="126">Spring Campout (04/19/24)</option>
              <option value="209">Eclipse Extravaganza (04/06/24)</option>
              <option value="208">BSA Distinguished Citizen Award (03/28/24)</option>
              <option value="120">Crossover (02/24/24)</option>
              <option value="199">BEAR DENS - Fire Station Visit by Den 3 (02/18/24)</option>
              <option value="119">Pinewood Derby (02/03/24)</option>
              <option value="186">PWD Weigh-in (01/31/24)</option>
              <option value="185">PWD Weigh-in (01/30/24)</option>
              <option value="96">Winter Overnight: NASA Space Center Houston (01/27/24)</option>
              <option value="184">University of Scouting (01/20/24)</option>
              <option value="190">PWD Block Cutting (01/19/24)</option>
              <option value="176">PWD Block-cutting (01/17/24)</option>
              <option value="66">Webelos 1/2-Day Adventure (01/13/24)</option>
              <option value="180">Archery Rangemaster Training (01/06/24)</option>
              <option value="179">BB Gun Rangemaster Training (01/06/24)</option>
              <option value="181">Holiday Service Project (12/16/23)</option>
              <option value="62">Cubmaster Campout (12/08/23)</option>
              <option value="165">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="166">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="167">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="168">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="169">Clayton Elementary Veterans Day Celebration - Flag Ceremony (11/10/23)</option>
              <option value="171">Veteran's Day Flag Ceremony (11/09/23)</option>
              <option value="163">Baldwin Cleanup (11/05/23)</option>
              <option value="60">Fall Campout (10/27/23)</option>
              <option value="61">Webelos Woods (10/21/23)</option>
              <option value="81">Jamboree On The Air (10/20/23)</option>
              <option value="127">Troop 3337 Open House (10/01/23)</option>
              <option value="89">Webelos Adventure: First Responder - Troop 448 (09/25/23)</option>
              <option value="57">Den Leader Training (09/24/23)</option>
              <option value="56">FIRST Lion / Tiger Den Meeting (09/23/23)</option>
              <option value="55">New Scout Ceremony (09/16/23)</option>
              <option value="90">AOL Scouting Adventure - Troop 505 Open House (09/16/23)</option>
              <option value="36">NEW DATE: Cubmobile Derby (08/26/23)</option>
              <option value="64">Aquanaut Adventure (08/19/23)</option>
              <option value="35">Bowling with the Pack (07/15/23)</option>
              <option value="50">Flag Retirement Ceremony (07/04/23)</option>
              <option value="24">Circle C 4th of July Parade (07/01/23)</option>
              <option value="23">Raingutter Regatta (06/17/23)</option>
              <option value="33">Baldwin End of Year 5th Grade Ceremony - Flag Detail (05/25/23)</option>
              <option value="19">Rocket Derby (05/21/23)</option>
              <option value="32">Make-up Den Meeting and Bobcat Clinic (04/29/23)</option>
              <option value="22">STILL ON: Clayton Cleanup (04/29/23)</option>
              <option value="17">Spring Campout (04/21/23)</option>
              <option value="30">Rocket Derby Workshop (04/15/23)</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485622" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485622" style="visibility: hidden">
            *
            </span>
            Credit Event
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485622" id="RVALENTRY485622" value="N">
            <input type="hidden" name="OLD485622" id="OLD485622" value="0">
            <select id="ENTRY485622" name="ENTRY485622" class="form-control" onblur="TestRegExp(this,'','')" tabindex="220" title="The event balance to be increased by the amount of this transaction" size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="541">Graduation (05/15/27)</option>
              <option value="563">District Roundtable (05/06/27)</option>
              <option value="585">Spring Picnic (05/01/27)</option>
              <option value="540">Rocket Derby (04/17/27)</option>
              <option value="542">Spring Campout (04/02/27)</option>
              <option value="562">District Roundtable (04/01/27)</option>
              <option value="584">Arrows &amp; BB's Adventure Day (03/06/27)</option>
              <option value="543">Webelos Wilderness Weekend (03/05/27)</option>
              <option value="561">District Roundtable (03/04/27)</option>
              <option value="583">AOL Crossover Ceremony (02/27/27)</option>
              <option value="544">Pinewood Derby (02/20/27)</option>
              <option value="546">Pinewood Derby Inspections (Option 2) (02/18/27)</option>
              <option value="545">Pinewood Derby Inspections (Option 1) (02/16/27)</option>
              <option value="560">District Roundtable (02/04/27)</option>
              <option value="547">Winter Overnight (Lone Star Flight Museum) (01/23/27)</option>
              <option value="548">USS Lexington (Overnight) (01/16/27)</option>
              <option value="559">District Roundtable (01/07/27)</option>
              <option value="558">District Roundtable (12/03/26)</option>
              <option value="549">Fall Campout (11/13/26)</option>
              <option value="557">District Roundtable (11/05/26)</option>
              <option value="582">Scouting 101 &amp; Cub Mobile (Troop Hosted Event) (10/03/26)</option>
              <option value="556">District Roundtable (10/01/26)</option>
              <option value="566">Arrows, BBs &amp; Campfires (09/25/26)</option>
              <option value="555">District Roundtable (09/03/26)</option>
              <option value="581">Welcome Back, Pack Picnic (08/29/26)</option>
              <option value="580">Webelos and AOL Swim Adventure (08/22/26)</option>
              <option value="554">District Roundtable (08/06/26)</option>
              <option value="567">Natural Bridge Caverns (07/18/26)</option>
              <option value="511">Circle C 4th of July Parade (07/04/26)</option>
              <option value="565">District Roundtable (07/02/26)</option>
              <option value="506">Cidercade Hangout (06/20/26)</option>
              <option value="564">District Roundtable (06/04/26)</option>
              <option value="500">Raingutter Regatta (05/30/26)</option>
              <option value="507">Ceremony of Colors at Baldwin Elementary Graduation (05/28/26)</option>
              <option value="383">Pack 12 Graduation (05/16/26)</option>
              <option value="380">Rocket Derby (05/09/26)</option>
              <option value="509">Rocket Derby Inspections and Build (Session 2) (05/07/26)</option>
              <option value="508">Rocket Derby Inspections and Build (Session 1) (05/06/26)</option>
              <option value="502">Spring Campout - Alternative Event - Please RSVP (04/18/26)</option>
              <option value="503">Messengers Of Peace Service Project (04/18/26)</option>
              <option value="378">RESCHEDULED TO FALL -- Spring Campout (04/17/26)</option>
              <option value="373">AOL Crossover Ceremony (03/07/26)</option>
              <option value="372">CANCELLED - Cubmaster Campout (03/06/26)</option>
              <option value="371">Pinewood Derby (02/07/26)</option>
              <option value="486">Weigh-in day for Pinewood Derby (02/05/26)</option>
              <option value="485">Weigh-in day for Pinewood Derby (02/04/26)</option>
              <option value="369">Winter Overnight at San Antonio Zoo (01/31/26)</option>
              <option value="488">Block Cutting for Pinewood Derby (01/22/26)</option>
              <option value="484">Block Cutting for Pinewood Derby (01/19/26)</option>
              <option value="483">Block Cutting for Pinewood Derby (01/18/26)</option>
              <option value="482">Block Cutting for Pinewood Derby (01/17/26)</option>
              <option value="478">BALOO Training (01/09/26)</option>
              <option value="475">Troop 448 troop meeting (12/08/25)</option>
              <option value="477">Troop 448 Meeting with AOL Activities (12/08/25)</option>
              <option value="409">Troop 19 Campout - Pedernales Falls (12/06/25)</option>
              <option value="465">Touch An Ambulance Event/First Aide with Ally Medical (11/16/25)</option>
              <option value="462">Lion's Service Project Art on Display @ Austin Studio Tour (11/15/25)</option>
              <option value="472">Veterans Day Flag Ceremony at Clayton Elementary (11/11/25)</option>
              <option value="469">Veterans Day Flag Ceremony at Baldwin Elementary (11/11/25)</option>
              <option value="364">Fall Campout (11/07/25)</option>
              <option value="458">Baldwin Campus Cleanup Service Project (10/26/25)</option>
              <option value="384">Scouting 101 (formerly Webelos Woods) (10/25/25)</option>
              <option value="459">Lion's Den #6 &amp; #7 Art Supply Pickup (10/12/25)</option>
              <option value="358">New Scout Family Meeting (09/14/25)</option>
              <option value="352">Cubmobile Derby (08/16/25)</option>
              <option value="351">Innerspace Caverns (07/19/25)</option>
              <option value="350">Independence Day Parade (CANCELLED) (07/04/25)</option>
              <option value="349">Raingutter Regatta (06/07/25)</option>
              <option value="346">Ceremony of Colors at Baldwin Elementary Graduation (05/29/25)</option>
              <option value="257">Pack 12 Graduation (05/17/25)</option>
              <option value="256">Rocket Derby (05/10/25)</option>
              <option value="348">Rocket Derby Inspections, Day 2 (05/08/25)</option>
              <option value="347">Rocket Derby Inspections, Day 1 (05/07/25)</option>
              <option value="254">Spring Campout (04/11/25)</option>
              <option value="340">Clean-up at Clayton and Community Center (04/06/25)</option>
              <option value="343">Baldwin Campus Beautification Day (03/08/25)</option>
              <option value="339">Cubmaster Campout (03/01/25)</option>
              <option value="337">Crossover Ceremony (02/22/25)</option>
              <option value="253">Crossover Campout (NOW CEREMONY ONLY) (02/22/25)</option>
              <option value="252">Pinewood Derby (02/08/25)</option>
              <option value="335">Pinewood Derby Weigh-In (02/05/25)</option>
              <option value="334">Pinewood Derby Weigh-In (02/04/25)</option>
              <option value="255">Sea World Winter Overnight (01/25/25)</option>
              <option value="289">Overnight at the USS Lexington (01/11/25)</option>
              <option value="324">Baldwin Veteran's Day Celebration - Flag Ceremony (11/11/24)</option>
              <option value="283">Den 22 AOL campout Pedernales Falls (11/08/24)</option>
              <option value="323">Clayton Veterans Day Assembly - Flag Ceremony (11/08/24)</option>
              <option value="234">Fall Campout - Goliad State Park (11/01/24)</option>
              <option value="286">(GIRLS) - Troop 19 Halloween Costume Party (10/27/24)</option>
              <option value="287">(BOYS) - Troop 61 Open House (10/27/24)</option>
              <option value="299">Service Project - Baldwin Campus Cleanup &amp; Planter Construction (10/27/24)</option>
              <option value="300">Den Leader Training (10/23/24)</option>
              <option value="284">(BOYS AOL) Troop 448 - Astronomy Overnight Campout (10/19/24)</option>
              <option value="285">(BOYS AOL) Troop 555 - Grelle Campout (10/19/24)</option>
              <option value="266">(BOYS AOL) Troop 505 - Invitational Capture the Flag Campout (10/18/24)</option>
              <option value="274">BALOO Adult Leader Training (10/11/24)</option>
              <option value="288">(GIRLS AOL) - Troop 4443 Krause Springs Campout (10/11/24)</option>
              <option value="268">Troop 505 Open House (09/28/24)</option>
              <option value="250">Family Pack Orientation (09/15/24)</option>
              <option value="241">Parent &amp; Volunteer Meeting (09/08/24)</option>
              <option value="258">Aquanauts (08/24/24)</option>
              <option value="222">Cubmobile Derby (08/18/24)</option>
              <option value="221">Parent &amp; Volunteer Meeting (08/11/24)</option>
              <option value="220">Summer Activity - Rock Climbing (07/20/24)</option>
              <option value="219">Independence Day Parade (07/04/24)</option>
              <option value="218">Raingutter Regatta (06/08/24)</option>
              <option value="223">Baldwin Ceremony of Colors (05/23/24)</option>
              <option value="214">RESCHEDULED - Cleanup @ Clayton Elementary (05/11/24)</option>
              <option value="125">NEW TIME - Rocket Derby (05/04/24)</option>
              <option value="126">Spring Campout (04/19/24)</option>
              <option value="209">Eclipse Extravaganza (04/06/24)</option>
              <option value="208">BSA Distinguished Citizen Award (03/28/24)</option>
              <option value="120">Crossover (02/24/24)</option>
              <option value="199">BEAR DENS - Fire Station Visit by Den 3 (02/18/24)</option>
              <option value="119">Pinewood Derby (02/03/24)</option>
              <option value="186">PWD Weigh-in (01/31/24)</option>
              <option value="185">PWD Weigh-in (01/30/24)</option>
              <option value="96">Winter Overnight: NASA Space Center Houston (01/27/24)</option>
              <option value="184">University of Scouting (01/20/24)</option>
              <option value="190">PWD Block Cutting (01/19/24)</option>
              <option value="176">PWD Block-cutting (01/17/24)</option>
              <option value="66">Webelos 1/2-Day Adventure (01/13/24)</option>
              <option value="180">Archery Rangemaster Training (01/06/24)</option>
              <option value="179">BB Gun Rangemaster Training (01/06/24)</option>
              <option value="181">Holiday Service Project (12/16/23)</option>
              <option value="62">Cubmaster Campout (12/08/23)</option>
              <option value="165">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="166">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="167">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="168">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="169">Clayton Elementary Veterans Day Celebration - Flag Ceremony (11/10/23)</option>
              <option value="171">Veteran's Day Flag Ceremony (11/09/23)</option>
              <option value="163">Baldwin Cleanup (11/05/23)</option>
              <option value="60">Fall Campout (10/27/23)</option>
              <option value="61">Webelos Woods (10/21/23)</option>
              <option value="81">Jamboree On The Air (10/20/23)</option>
              <option value="127">Troop 3337 Open House (10/01/23)</option>
              <option value="89">Webelos Adventure: First Responder - Troop 448 (09/25/23)</option>
              <option value="57">Den Leader Training (09/24/23)</option>
              <option value="56">FIRST Lion / Tiger Den Meeting (09/23/23)</option>
              <option value="55">New Scout Ceremony (09/16/23)</option>
              <option value="90">AOL Scouting Adventure - Troop 505 Open House (09/16/23)</option>
              <option value="36">NEW DATE: Cubmobile Derby (08/26/23)</option>
              <option value="64">Aquanaut Adventure (08/19/23)</option>
              <option value="35">Bowling with the Pack (07/15/23)</option>
              <option value="50">Flag Retirement Ceremony (07/04/23)</option>
              <option value="24">Circle C 4th of July Parade (07/01/23)</option>
              <option value="23">Raingutter Regatta (06/17/23)</option>
              <option value="33">Baldwin End of Year 5th Grade Ceremony - Flag Detail (05/25/23)</option>
              <option value="19">Rocket Derby (05/21/23)</option>
              <option value="32">Make-up Den Meeting and Bobcat Clinic (04/29/23)</option>
              <option value="22">STILL ON: Clayton Cleanup (04/29/23)</option>
              <option value="17">Spring Campout (04/21/23)</option>
              <option value="30">Rocket Derby Workshop (04/15/23)</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485662" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485662" style="visibility: hidden">
            *
            </span>
            Payment Intended For Event
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485662" id="RVALENTRY485662" value="N">
            <input type="hidden" name="OLD485662" id="OLD485662" value="0">
            <select id="ENTRY485662" name="ENTRY485662" class="form-control" onblur="TestRegExp(this,'','')" tabindex="230" title="The event for which this payment was intended" size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="541">Graduation (05/15/27)</option>
              <option value="563">District Roundtable (05/06/27)</option>
              <option value="585">Spring Picnic (05/01/27)</option>
              <option value="540">Rocket Derby (04/17/27)</option>
              <option value="542">Spring Campout (04/02/27)</option>
              <option value="562">District Roundtable (04/01/27)</option>
              <option value="584">Arrows &amp; BB's Adventure Day (03/06/27)</option>
              <option value="543">Webelos Wilderness Weekend (03/05/27)</option>
              <option value="561">District Roundtable (03/04/27)</option>
              <option value="583">AOL Crossover Ceremony (02/27/27)</option>
              <option value="544">Pinewood Derby (02/20/27)</option>
              <option value="546">Pinewood Derby Inspections (Option 2) (02/18/27)</option>
              <option value="545">Pinewood Derby Inspections (Option 1) (02/16/27)</option>
              <option value="560">District Roundtable (02/04/27)</option>
              <option value="547">Winter Overnight (Lone Star Flight Museum) (01/23/27)</option>
              <option value="548">USS Lexington (Overnight) (01/16/27)</option>
              <option value="559">District Roundtable (01/07/27)</option>
              <option value="558">District Roundtable (12/03/26)</option>
              <option value="549">Fall Campout (11/13/26)</option>
              <option value="557">District Roundtable (11/05/26)</option>
              <option value="582">Scouting 101 &amp; Cub Mobile (Troop Hosted Event) (10/03/26)</option>
              <option value="556">District Roundtable (10/01/26)</option>
              <option value="566">Arrows, BBs &amp; Campfires (09/25/26)</option>
              <option value="555">District Roundtable (09/03/26)</option>
              <option value="581">Welcome Back, Pack Picnic (08/29/26)</option>
              <option value="580">Webelos and AOL Swim Adventure (08/22/26)</option>
              <option value="554">District Roundtable (08/06/26)</option>
              <option value="567">Natural Bridge Caverns (07/18/26)</option>
              <option value="511">Circle C 4th of July Parade (07/04/26)</option>
              <option value="565">District Roundtable (07/02/26)</option>
              <option value="506">Cidercade Hangout (06/20/26)</option>
              <option value="564">District Roundtable (06/04/26)</option>
              <option value="500">Raingutter Regatta (05/30/26)</option>
              <option value="507">Ceremony of Colors at Baldwin Elementary Graduation (05/28/26)</option>
              <option value="383">Pack 12 Graduation (05/16/26)</option>
              <option value="380">Rocket Derby (05/09/26)</option>
              <option value="509">Rocket Derby Inspections and Build (Session 2) (05/07/26)</option>
              <option value="508">Rocket Derby Inspections and Build (Session 1) (05/06/26)</option>
              <option value="502">Spring Campout - Alternative Event - Please RSVP (04/18/26)</option>
              <option value="503">Messengers Of Peace Service Project (04/18/26)</option>
              <option value="378">RESCHEDULED TO FALL -- Spring Campout (04/17/26)</option>
              <option value="373">AOL Crossover Ceremony (03/07/26)</option>
              <option value="372">CANCELLED - Cubmaster Campout (03/06/26)</option>
              <option value="371">Pinewood Derby (02/07/26)</option>
              <option value="486">Weigh-in day for Pinewood Derby (02/05/26)</option>
              <option value="485">Weigh-in day for Pinewood Derby (02/04/26)</option>
              <option value="369">Winter Overnight at San Antonio Zoo (01/31/26)</option>
              <option value="488">Block Cutting for Pinewood Derby (01/22/26)</option>
              <option value="484">Block Cutting for Pinewood Derby (01/19/26)</option>
              <option value="483">Block Cutting for Pinewood Derby (01/18/26)</option>
              <option value="482">Block Cutting for Pinewood Derby (01/17/26)</option>
              <option value="478">BALOO Training (01/09/26)</option>
              <option value="475">Troop 448 troop meeting (12/08/25)</option>
              <option value="477">Troop 448 Meeting with AOL Activities (12/08/25)</option>
              <option value="409">Troop 19 Campout - Pedernales Falls (12/06/25)</option>
              <option value="465">Touch An Ambulance Event/First Aide with Ally Medical (11/16/25)</option>
              <option value="462">Lion's Service Project Art on Display @ Austin Studio Tour (11/15/25)</option>
              <option value="472">Veterans Day Flag Ceremony at Clayton Elementary (11/11/25)</option>
              <option value="469">Veterans Day Flag Ceremony at Baldwin Elementary (11/11/25)</option>
              <option value="364">Fall Campout (11/07/25)</option>
              <option value="458">Baldwin Campus Cleanup Service Project (10/26/25)</option>
              <option value="384">Scouting 101 (formerly Webelos Woods) (10/25/25)</option>
              <option value="459">Lion's Den #6 &amp; #7 Art Supply Pickup (10/12/25)</option>
              <option value="358">New Scout Family Meeting (09/14/25)</option>
              <option value="352">Cubmobile Derby (08/16/25)</option>
              <option value="351">Innerspace Caverns (07/19/25)</option>
              <option value="350">Independence Day Parade (CANCELLED) (07/04/25)</option>
              <option value="349">Raingutter Regatta (06/07/25)</option>
              <option value="346">Ceremony of Colors at Baldwin Elementary Graduation (05/29/25)</option>
              <option value="257">Pack 12 Graduation (05/17/25)</option>
              <option value="256">Rocket Derby (05/10/25)</option>
              <option value="348">Rocket Derby Inspections, Day 2 (05/08/25)</option>
              <option value="347">Rocket Derby Inspections, Day 1 (05/07/25)</option>
              <option value="254">Spring Campout (04/11/25)</option>
              <option value="340">Clean-up at Clayton and Community Center (04/06/25)</option>
              <option value="343">Baldwin Campus Beautification Day (03/08/25)</option>
              <option value="339">Cubmaster Campout (03/01/25)</option>
              <option value="337">Crossover Ceremony (02/22/25)</option>
              <option value="253">Crossover Campout (NOW CEREMONY ONLY) (02/22/25)</option>
              <option value="252">Pinewood Derby (02/08/25)</option>
              <option value="335">Pinewood Derby Weigh-In (02/05/25)</option>
              <option value="334">Pinewood Derby Weigh-In (02/04/25)</option>
              <option value="255">Sea World Winter Overnight (01/25/25)</option>
              <option value="289">Overnight at the USS Lexington (01/11/25)</option>
              <option value="324">Baldwin Veteran's Day Celebration - Flag Ceremony (11/11/24)</option>
              <option value="283">Den 22 AOL campout Pedernales Falls (11/08/24)</option>
              <option value="323">Clayton Veterans Day Assembly - Flag Ceremony (11/08/24)</option>
              <option value="234">Fall Campout - Goliad State Park (11/01/24)</option>
              <option value="286">(GIRLS) - Troop 19 Halloween Costume Party (10/27/24)</option>
              <option value="287">(BOYS) - Troop 61 Open House (10/27/24)</option>
              <option value="299">Service Project - Baldwin Campus Cleanup &amp; Planter Construction (10/27/24)</option>
              <option value="300">Den Leader Training (10/23/24)</option>
              <option value="284">(BOYS AOL) Troop 448 - Astronomy Overnight Campout (10/19/24)</option>
              <option value="285">(BOYS AOL) Troop 555 - Grelle Campout (10/19/24)</option>
              <option value="266">(BOYS AOL) Troop 505 - Invitational Capture the Flag Campout (10/18/24)</option>
              <option value="274">BALOO Adult Leader Training (10/11/24)</option>
              <option value="288">(GIRLS AOL) - Troop 4443 Krause Springs Campout (10/11/24)</option>
              <option value="268">Troop 505 Open House (09/28/24)</option>
              <option value="250">Family Pack Orientation (09/15/24)</option>
              <option value="241">Parent &amp; Volunteer Meeting (09/08/24)</option>
              <option value="258">Aquanauts (08/24/24)</option>
              <option value="222">Cubmobile Derby (08/18/24)</option>
              <option value="221">Parent &amp; Volunteer Meeting (08/11/24)</option>
              <option value="220">Summer Activity - Rock Climbing (07/20/24)</option>
              <option value="219">Independence Day Parade (07/04/24)</option>
              <option value="218">Raingutter Regatta (06/08/24)</option>
              <option value="223">Baldwin Ceremony of Colors (05/23/24)</option>
              <option value="214">RESCHEDULED - Cleanup @ Clayton Elementary (05/11/24)</option>
              <option value="125">NEW TIME - Rocket Derby (05/04/24)</option>
              <option value="126">Spring Campout (04/19/24)</option>
              <option value="209">Eclipse Extravaganza (04/06/24)</option>
              <option value="208">BSA Distinguished Citizen Award (03/28/24)</option>
              <option value="120">Crossover (02/24/24)</option>
              <option value="199">BEAR DENS - Fire Station Visit by Den 3 (02/18/24)</option>
              <option value="119">Pinewood Derby (02/03/24)</option>
              <option value="186">PWD Weigh-in (01/31/24)</option>
              <option value="185">PWD Weigh-in (01/30/24)</option>
              <option value="96">Winter Overnight: NASA Space Center Houston (01/27/24)</option>
              <option value="184">University of Scouting (01/20/24)</option>
              <option value="190">PWD Block Cutting (01/19/24)</option>
              <option value="176">PWD Block-cutting (01/17/24)</option>
              <option value="66">Webelos 1/2-Day Adventure (01/13/24)</option>
              <option value="180">Archery Rangemaster Training (01/06/24)</option>
              <option value="179">BB Gun Rangemaster Training (01/06/24)</option>
              <option value="181">Holiday Service Project (12/16/23)</option>
              <option value="62">Cubmaster Campout (12/08/23)</option>
              <option value="165">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="166">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="167">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="168">Troop 505 - Webelos and AOL Invited Campout (11/10/23)</option>
              <option value="169">Clayton Elementary Veterans Day Celebration - Flag Ceremony (11/10/23)</option>
              <option value="171">Veteran's Day Flag Ceremony (11/09/23)</option>
              <option value="163">Baldwin Cleanup (11/05/23)</option>
              <option value="60">Fall Campout (10/27/23)</option>
              <option value="61">Webelos Woods (10/21/23)</option>
              <option value="81">Jamboree On The Air (10/20/23)</option>
              <option value="127">Troop 3337 Open House (10/01/23)</option>
              <option value="89">Webelos Adventure: First Responder - Troop 448 (09/25/23)</option>
              <option value="57">Den Leader Training (09/24/23)</option>
              <option value="56">FIRST Lion / Tiger Den Meeting (09/23/23)</option>
              <option value="55">New Scout Ceremony (09/16/23)</option>
              <option value="90">AOL Scouting Adventure - Troop 505 Open House (09/16/23)</option>
              <option value="36">NEW DATE: Cubmobile Derby (08/26/23)</option>
              <option value="64">Aquanaut Adventure (08/19/23)</option>
              <option value="35">Bowling with the Pack (07/15/23)</option>
              <option value="50">Flag Retirement Ceremony (07/04/23)</option>
              <option value="24">Circle C 4th of July Parade (07/01/23)</option>
              <option value="23">Raingutter Regatta (06/17/23)</option>
              <option value="33">Baldwin End of Year 5th Grade Ceremony - Flag Detail (05/25/23)</option>
              <option value="19">Rocket Derby (05/21/23)</option>
              <option value="32">Make-up Den Meeting and Bobcat Clinic (04/29/23)</option>
              <option value="22">STILL ON: Clayton Cleanup (04/29/23)</option>
              <option value="17">Spring Campout (04/21/23)</option>
              <option value="30">Rocket Derby Workshop (04/15/23)</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485642" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485642" style="visibility: hidden">
            *
            </span>
            Debit Fund
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485642" id="RVALENTRY485642" value="N">
            <input type="hidden" name="OLD485642" id="OLD485642" value="0">
            <select id="ENTRY485642" name="ENTRY485642" class="form-control" onblur="TestRegExp(this,'','')" tabindex="240" title="The fund whose balance should be reduced by the amount of this transaction" size="1" disabled="">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485652" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485652" style="visibility: hidden">
            *
            </span>
            Credit Fund
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485652" id="RVALENTRY485652" value="N">
            <input type="hidden" name="OLD485652" id="OLD485652" value="0">
            <select id="ENTRY485652" name="ENTRY485652" class="form-control" onblur="TestRegExp(this,'','')" tabindex="250" title="The fund whose balance will be increased by the amount of this transaction" size="1" disabled="">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY630732" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY630732" style="visibility: hidden">
            *
            </span>
            Budget Item
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY630732" id="RVALENTRY630732" value="N">
            <input type="hidden" name="OLD630732" id="OLD630732" value="0">
            <select id="ENTRY630732" name="ENTRY630732" class="form-control" onblur="TestRegExp(this,'','')" tabindex="260" title="The budget item to which this transaction should be applied" size="1" disabled="">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY485755" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY485755" style="visibility: hidden">
            *
            </span>
            Fiscal Year
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY485755" id="RVALENTRY485755" value="N">
            <input type="hidden" name="OLD485755" id="OLD485755" value="">
            <input type="text" class="form-control" id="ENTRY485755" name="ENTRY485755" tabindex="270" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The fiscal year to which this transaction applies" disabled="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY4856711">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY4856711" style="visibility: hidden">
            *
            </span>
            Group Transaction?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY4856711" id="RVALENTRY4856711" value="">
            <input type="hidden" name="OLD4856711" id="OLD4856711" value="N">
            <input type="hidden" name="ENTRY4856711" id="ENTRY4856711" value="N">
            <span class="text-left">
            No
            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs15954">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="290" id="BUTTON21" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="300" id="BUTTON22" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="310" id="BUTTON23" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON23">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY485522">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>