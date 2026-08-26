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
  if (onLoad||thisfield.name=='ENTRY44612')
{
  var Group_Transaction_Flag = 'N';
  if (Group_Transaction_Flag=='Y')
  {
    easyEnableField('ENTRY44612',false,false);
    easyEnableField('ENTRY446216',false,false);
    easyEnableField('ENTRY44631',false,false);
    easyEnableField('ENTRY44641',false,false);
    easyEnableField('ENTRY446536',false,false);
    easyEnableField('ENTRY44662',false,false);
    easyEnableField('ENTRY44672',false,false);
    easyEnableField('ENTRY44682',false,false);
    easyEnableField('ENTRY44692',false,false);
    easyEnableField('ENTRY44702',false,false);
    easyEnableField('ENTRY44712',false,false);
    easyEnableField('ENTRY311922',false,false);
    easyEnableField('ENTRY260832',false,false);
    easyEnableField('ENTRY260842',false,false);
    easyEnableField('ENTRY311935',false,false);
    easyEnableField('ENTRY2608216',false,false);
    easyEnableField('ENTRY629692',false,false);
  }
  else
  {
    var selectedvalue = easyGetFieldValue('ENTRY44612');
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
		easySetFieldValue('ENTRY44662','0');
	  }
	  if (FlagValues.substr(1,1)=='N')
	  {
		easySetFieldValue('ENTRY44672','0');
	  }
	  if (FlagValues.substr(2,1)=='N')
	  {
		easySetFieldValue('ENTRY44682','0');
	  }
	  if (FlagValues.substr(3,1)=='N')
	  {
		easySetFieldValue('ENTRY44692','0');
	  }
	  if (FlagValues.substr(4,1)=='N')
	  {
		easySetFieldValue('ENTRY44702','0');
	  }
	  if (FlagValues.substr(5,1)=='N')
	  {
		easySetFieldValue('ENTRY44712','0');
	  }
	  if (FlagValues.substr(6,1)=='N')
	  {
		easySetFieldValue('ENTRY260832','0');
	  }
	  if (FlagValues.substr(7,1)=='N')
	  {
		easySetFieldValue('ENTRY260842','0');
	  }
	  if (FlagValues.substr(8,1)=='N')
	  {
		easySetFieldValue('ENTRY2608216','');
	  }
	  if (FlagValues.substr(9,1)=='N')
	  {
		easySetFieldValue('ENTRY311922','');
	  }
	  if (FlagValues.substr(10,1)=='N')
	  {
		easySetFieldValue('ENTRY311935','');
	  }
	  if (FlagValues.substr(11,1)=='N')
	  {
		easySetFieldValue('ENTRY629692','0');
	  }
	  easyEnableField('ENTRY44662',(FlagValues.substr(0,1)=='Y'),true);
	  easySetRequired('ENTRY44662',(FlagValues.substr(0,1)=='Y'));

	  easyEnableField('ENTRY44672',(FlagValues.substr(1,1)=='Y'),true);
	  easySetRequired('ENTRY44672',(FlagValues.substr(1,1)=='Y'));

	  easyEnableField('ENTRY44682',(FlagValues.substr(2,1)=='Y'),true);
	  easySetRequired('ENTRY44682',(FlagValues.substr(2,1)=='Y'));

	  easyEnableField('ENTRY44692',(FlagValues.substr(3,1)=='Y'),true);
	  easySetRequired('ENTRY44692',(FlagValues.substr(3,1)=='Y'));

	  easyEnableField('ENTRY44702',(FlagValues.substr(4,1)=='Y'),true);
	  easySetRequired('ENTRY44702',(FlagValues.substr(4,1)=='Y'));

	  easyEnableField('ENTRY44712',(FlagValues.substr(5,1)=='Y'),true);
	  easySetRequired('ENTRY44712',(FlagValues.substr(5,1)=='Y'));

	  easyEnableField('ENTRY260832',(FlagValues.substr(6,1)=='Y'),true);
	  easySetRequired('ENTRY260832',(FlagValues.substr(6,1)=='Y'));

	  easyEnableField('ENTRY260842',(FlagValues.substr(7,1)=='Y'),true);
	  easySetRequired('ENTRY260842',(FlagValues.substr(7,1)=='Y'));

	  easyEnableField('ENTRY2608216',(FlagValues.substr(8,1)=='Y'),true);
	  easySetRequired('ENTRY2608216',(FlagValues.substr(8,1)=='Y'));

	  easyEnableField('ENTRY311922',(FlagValues.substr(9,1)=='Y'),true);

	  easyEnableField('ENTRY311935',(FlagValues.substr(10,1)=='Y'),true);

	  easyEnableField('ENTRY629692',(FlagValues.substr(11,1)=='Y'),true);
	  easySetRequired('ENTRY629692',(FlagValues.substr(11,1)=='Y'));
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
<input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="357">
<input type="hidden" name="Form_ID" id="Form_ID" value="319">
<input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type="hidden" name="Pass" id="Pass" value="1">
<input type="hidden" name="Stack" id="Stack" value="3">
<input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
<input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
<input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
<input type="hidden" name="Report_Format" id="Report_Format" value="">
<input type="hidden" name="Current_URL" id="Current_URL" value="/money/transaction-add.php?Form_ID=319&amp;FK=2&amp;ID=0&amp;Stack=3">
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=3','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=3','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=3','');">Users &amp; Passwords</a>
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
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=3','');">Calendar</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=3','');">Site Appearance</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
          </td>
          <td class="navlink">
            <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=3','');">Users &amp; Passwords</a>
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
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=357">Change My Password</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=357">Configure My Quick Menu</a></li>
  <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=357">Bookmark This Site</a></li>
  </ul>
</div>
<div id="helpmenu" class="navtools">
  <ul class="list-group">
  <li class="list-group-item"><a href="Help.aspx?ID=119" target="_blank">User Guide</a></li>
  <li class="list-group-item"><a href="https://www.youtube.com/playlist?list=PL4bC-UY63jygEqBauW0Ofz9FJBWsPkphf" target="_blank">Mobile App Tutorials</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3937&amp;Stack=0&amp;Menu_Item_ID=357">TroopWebHost User Forum</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3948&amp;Stack=0&amp;Menu_Item_ID=357">Enhancement Requests</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3944&amp;Stack=0&amp;Menu_Item_ID=357">My Support Tickets</a></li>
  <li class="list-group-item"><a href="FormList.aspx?Form_ID=3945&amp;Stack=0&amp;Menu_Item_ID=357">My Unit's Support Tickets</a></li>
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
        The URL for this page is:&nbsp; &nbsp; /money/transaction-add.php?Form_ID=319&amp;FK=2&amp;ID=0&amp;Stack=3&amp;Application_ID=2840
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
Individual Transaction
</p>
<input type="hidden" name="FK" id="FK" value="0">
<input type="hidden" name="ID" id="ID" value="0">
<div class="new-row" id="fs1472">
  <div class="container-fluid container-flex">
    <div class="center-block " style="max-width: 500px; min-width: 200px;">
      <p>
      When you move to the next field after selecting a transaction type, you should see some new fields appear on the screen.  You may also see some fields disappear.  If you do not see this behavior, please reselect the transaction type.  This will ensure that you enter the information necessary for the type of transaction you selected.
      </p>
    </div>
  </div>
</div>
<div class="new-row" id="fs946">
  <div class="container-fluid container-flex">
    <div class="center-block ">
      <table class="no-border">
        <tbody>
        <tr id="DIVENTRY44612">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44612" style="visibility: visible">
            *
            </span>
            Transaction Type
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44612" id="RVALENTRY44612" value="Y">
            <input type="hidden" name="OLD44612" id="OLD44612" value="0">
            <select id="ENTRY44612" name="ENTRY44612" class="form-control" onblur="TestRegExp(this,'','')" tabindex="110" title="The type of transaction determines the accounts that must be specified." onchange="UpdateDependentList(this,'ENTRY629692','3176','2840','1','0','0','977','column');" size="1" style="background-color: rgb(255, 170, 170);">
              <option selected="" value="0"> </option>
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
              <option value="10">Starting Member Account Balance</option>
              <option value="19">Transfer Between Events</option>
              <option value="9">Transfer Between Group Accounts</option>
              <option value="8">Transfer Between Member Accounts</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY446216">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY446216" style="visibility: visible">
            *
            </span>
            Transaction Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY446216" id="RVALENTRY446216" value="Y">
            <input type="hidden" name="OLD446216" id="OLD446216" value="08/26/2026">
            <input type="text" class="form-control" id="ENTRY446216" name="ENTRY446216" tabindex="120" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="08/26/2026" title="The date on which this transaction occurred">&nbsp;<a href="#" tabindex="120" onclick="cal.select(window.easyform.ENTRY446216,'ENTRY446216X','MM/dd/yyyy', window.easyform.ENTRY446216.value); return false;" name="ENTRY446216X" id="ENTRY446216X"><img src="/assets/images/calendar.gif" name="ENTRY446216I" id="ENTRY446216I"></a>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY2608216" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY2608216" style="visibility: hidden">
            *
            </span>
            Deposit Date
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY2608216" id="RVALENTRY2608216" value="N">
            <input type="hidden" name="OLD2608216" id="OLD2608216" value="">
            <input type="text" class="form-control" id="ENTRY2608216" name="ENTRY2608216" tabindex="130" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="The date on which the deposit will be made.  The reconciliation function will display the sum of all transactions with the same deposit date." disabled="">&nbsp;<a href="#" tabindex="130" onclick="cal.select(window.easyform.ENTRY2608216,'ENTRY2608216X','MM/dd/yyyy', window.easyform.ENTRY2608216.value); return false;" name="ENTRY2608216X" id="ENTRY2608216X"><img src="/assets/images/calendar.gif" name="ENTRY2608216I" id="ENTRY2608216I"></a>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY44631">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44631" style="visibility: hidden">
            *
            </span>
            Description
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44631" id="RVALENTRY44631" value="N">
            <input type="hidden" name="OLD44631" id="OLD44631" value="">
            <input type="text" class="form-control" id="ENTRY44631" name="ENTRY44631" tabindex="140" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="A description of this specific transaction">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY44641">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44641" style="visibility: hidden">
            *
            </span>
            Reference
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44641" id="RVALENTRY44641" value="N">
            <input type="hidden" name="OLD44641" id="OLD44641" value="">
            <input type="text" class="form-control" id="ENTRY44641" name="ENTRY44641" tabindex="150" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The check number or other reference information pertaining to this transaction.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY446536">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY446536" style="visibility: visible">
            *
            </span>
            Amount
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY446536" id="RVALENTRY446536" value="Y">
            <input type="hidden" name="OLD446536" id="OLD446536" value="0">
            <input type="text" class="form-control" id="ENTRY446536" name="ENTRY446536" tabindex="160" size="9" onblur="TestRegExp(this,/^[+-]?(\d*)(\.\d\d?)?$/,'Please enter a number with no more than 2 digits after the decimal point.')" maxlength="9" value="0" title="The amount, in dollars and cents, of this transaction.">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY44662" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44662" style="visibility: hidden">
            *
            </span>
            Debit Group Account
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44662" id="RVALENTRY44662" value="N">
            <input type="hidden" name="OLD44662" id="OLD44662" value="0">
            <select id="ENTRY44662" name="ENTRY44662" class="form-control" onblur="TestRegExp(this,'','')" tabindex="170" title="The group account to be reduced by the amount of this transaction." size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="2">Frost Bank Checking Account</option>
              <option value="1">PayPal</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY44672" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44672" style="visibility: hidden">
            *
            </span>
            Credit Group Account
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44672" id="RVALENTRY44672" value="N">
            <input type="hidden" name="OLD44672" id="OLD44672" value="0">
            <select id="ENTRY44672" name="ENTRY44672" class="form-control" onblur="TestRegExp(this,'','')" tabindex="180" title="The group account to be increased by the amount of this transaction." size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="2">Frost Bank Checking Account</option>
              <option value="1">PayPal</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY44682" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44682" style="visibility: hidden">
            *
            </span>
            Charge To Person
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44682" id="RVALENTRY44682" value="N">
            <input type="hidden" name="OLD44682" id="OLD44682" value="0">
            <select id="ENTRY44682" name="ENTRY44682" class="form-control" onblur="TestRegExp(this,'','')" tabindex="190" title="The person whose account should be reduced by the amount of this transaction." size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="1018">Aarons, Andrew &nbsp; &nbsp; [0.00]</option>
              <option value="1027">Aarons, Ashley &nbsp; &nbsp; [0.00]</option>
              <option value="1086">Aarons, Stephen &nbsp; &nbsp; [0.00]</option>
              <option value="910">Abbott, Albert &nbsp; &nbsp; [70.00]</option>
              <option value="914">Abbott, William &nbsp; &nbsp; [70.00]</option>
              <option value="1063">Almaraz, Alexander &nbsp; &nbsp; [0.00]</option>
              <option value="1064">Almaraz, Eric &nbsp; &nbsp; [0.00]</option>
              <option value="668">Alvarez, Jorge &nbsp; &nbsp; [15.75]</option>
              <option value="714">Alvarez, Kristen "Kristy" &nbsp; &nbsp; [0.00]</option>
              <option value="1239">Alvarez, Layla &nbsp; &nbsp; [0.00]</option>
              <option value="664">Alvarez, Mateo &nbsp; &nbsp; [0.00]</option>
              <option value="1245">Applegate, Chris &nbsp; &nbsp; [0.00]</option>
              <option value="1240">Applegate, Sebastian &nbsp; &nbsp; [0.00]</option>
              <option value="1202">Babb, Chris &nbsp; &nbsp; [0.00]</option>
              <option value="1184">Babb, Tyson &nbsp; &nbsp; [0.00]</option>
              <option value="488">Bayes, Dylan &nbsp; &nbsp; [0.00]</option>
              <option value="578">Bayes, Phillip &nbsp; &nbsp; [0.00]</option>
              <option value="1621">Benson, Lawrence &nbsp; &nbsp; [0.00]</option>
              <option value="1617">Benson, Nicolas &nbsp; &nbsp; [0.00]</option>
              <option value="1154">Blair, Frankie &nbsp; &nbsp; [0.00]</option>
              <option value="1155">Blair, Joe &nbsp; &nbsp; [0.00]</option>
              <option value="1156">Bruyn, Emerson &nbsp; &nbsp; [0.00]</option>
              <option value="1169">Bruyn, Meaghan &nbsp; &nbsp; [0.00]</option>
              <option value="964">Bucklin, Emmett &nbsp; &nbsp; [0.00]</option>
              <option value="976">Bucklin, Mary &nbsp; &nbsp; [0.00]</option>
              <option value="977">Bucklin, Michael &nbsp; &nbsp; [0.00]</option>
              <option value="1610">Bucklin, Michael2 &nbsp; &nbsp; [0.00]</option>
              <option value="1611">Bucklin, Michael3 &nbsp; &nbsp; [0.00]</option>
              <option value="785">Bush, Greg &nbsp; &nbsp; [0.00]</option>
              <option value="762">Bush, Kai &nbsp; &nbsp; [0.00]</option>
              <option value="908">Byrd, Amanda &nbsp; &nbsp; [105.00]</option>
              <option value="1618">Byrd, Barrett &nbsp; &nbsp; [0.00]</option>
              <option value="763">Byrd, Benjamin &nbsp; &nbsp; [0.00]</option>
              <option value="786">Byrd, Bradley "Ryan" &nbsp; &nbsp; [0.00]</option>
              <option value="1535">Chakarvarty, Mridul &nbsp; &nbsp; [0.00]</option>
              <option value="1065">Chidester, Amy &nbsp; &nbsp; [0.00]</option>
              <option value="1143">Chidester, Ella &nbsp; &nbsp; [0.00]</option>
              <option value="986">Chidester, Russ &nbsp; &nbsp; [0.00]</option>
              <option value="983">Chidester, Taylor &nbsp; &nbsp; [0.00]</option>
              <option value="630">Corkill, Cynthia &nbsp; &nbsp; [0.00]</option>
              <option value="1259">Daru, Bhargav &nbsp; &nbsp; [0.00]</option>
              <option value="984">De Los Santos Garza, Andrea &nbsp; &nbsp; [0.00]</option>
              <option value="965">De Los Santos Garza, Diego "Leo" Jr. &nbsp; &nbsp; [0.00]</option>
              <option value="978">De Los Santos Tamez, Diego &nbsp; &nbsp; [45.00]</option>
              <option value="1135">DeMartini, Emilia &nbsp; &nbsp; [0.00]</option>
              <option value="1139">DeMartini, Trevor &nbsp; &nbsp; [0.00]</option>
              <option value="1136">DeMartini, Vincent &nbsp; &nbsp; [0.00]</option>
              <option value="1241">Dennis, Khoi &nbsp; &nbsp; [0.00]</option>
              <option value="1246">Dennis, Michael &nbsp; &nbsp; [0.00]</option>
              <option value="614">Desouky, Noura &nbsp; &nbsp; [0.00]</option>
              <option value="1268">Diaz, Adam &nbsp; &nbsp; [0.00]</option>
              <option value="1266">Diaz, Winslow &nbsp; &nbsp; [0.00]</option>
              <option value="562">Dranguet, Benjamin &nbsp; &nbsp; [0.00]</option>
              <option value="1281">Duryee, David &nbsp; &nbsp; [0.00]</option>
              <option value="1203">D'Vincent, Lilli &nbsp; &nbsp; [0.00]</option>
              <option value="1185">D'Vincent, Mason &nbsp; &nbsp; [0.00]</option>
              <option value="654">Elrakabawy, Erin &nbsp; &nbsp; [0.00]</option>
              <option value="1021">Elwell, Connor &nbsp; &nbsp; [1.97]</option>
              <option value="1539">Espejel, Dean &nbsp; &nbsp; [0.00]</option>
              <option value="1609">Espejel, Moshe &nbsp; &nbsp; [0.00]</option>
              <option value="831">Fick, Preston &nbsp; &nbsp; [238.46]</option>
              <option value="1122">Files, Michael &nbsp; &nbsp; [140.00]</option>
              <option value="564">Files, Michael &nbsp; &nbsp; [89.94]</option>
              <option value="888">Gaete, Holly &nbsp; &nbsp; [0.00]</option>
              <option value="886">Gaete, Lincoln &nbsp; &nbsp; [0.00]</option>
              <option value="893">Galdo, Anne &nbsp; &nbsp; [0.00]</option>
              <option value="1088">Galdo, Henry &nbsp; &nbsp; [0.00]</option>
              <option value="1114">Gibson, Charleston &nbsp; &nbsp; [0.00]</option>
              <option value="1123">Gibson, Steven &nbsp; &nbsp; [0.00]</option>
              <option value="832">Goodine, David &nbsp; &nbsp; [0.00]</option>
              <option value="811">Goodine, Jack &nbsp; &nbsp; [0.00]</option>
              <option value="1187">Gurrola, Benjamin &nbsp; &nbsp; [-14.50]</option>
              <option value="1204">Gurrola, Jacqueline &nbsp; &nbsp; [-19.75]</option>
              <option value="1232">Gurrola, Matthew &nbsp; &nbsp; [-19.75]</option>
              <option value="1157">Hallar, Henry &nbsp; &nbsp; [0.00]</option>
              <option value="1170">Hallar, Ingrid &nbsp; &nbsp; [0.00]</option>
              <option value="1171">Hanss Blair, Rachel &nbsp; &nbsp; [0.00]</option>
              <option value="944">Harrison, Abi &nbsp; &nbsp; [0.00]</option>
              <option value="940">Harrison, James &nbsp; &nbsp; [0.00]</option>
              <option value="1084">Hayes, David &nbsp; &nbsp; [0.00]</option>
              <option value="833">Hickman, Arthur "Trey" &nbsp; &nbsp; [0.00]</option>
              <option value="1188">Hickman, Maya &nbsp; &nbsp; [0.00]</option>
              <option value="1285">Hoy, Ashton &nbsp; &nbsp; [0.00]</option>
              <option value="1287">Hoy, Nicole &nbsp; &nbsp; [0.00]</option>
              <option value="1216">Hume, Beatrix &nbsp; &nbsp; [0.00]</option>
              <option value="1225">Hume, John &nbsp; &nbsp; [0.00]</option>
              <option value="1205">Idell, Claire &nbsp; &nbsp; [0.00]</option>
              <option value="1189">Idell, Gabe &nbsp; &nbsp; [0.00]</option>
              <option value="1292">Ingram, Alistair &nbsp; &nbsp; [0.00]</option>
              <option value="1534">Ingrams, Julie &amp; Robert &nbsp; &nbsp; [0.00]</option>
              <option value="1293">Kathuria, Kabir &nbsp; &nbsp; [0.00]</option>
              <option value="883">Keenan, Danielle &nbsp; &nbsp; [0.00]</option>
              <option value="880">Keenan, Lilly &nbsp; &nbsp; [0.00]</option>
              <option value="882">Keenan, Peter &nbsp; &nbsp; [0.00]</option>
              <option value="1190">kommineni, anish &nbsp; &nbsp; [0.00]</option>
              <option value="517">kommineni, Avighna &nbsp; &nbsp; [0.00]</option>
              <option value="577">Kommineni, Vijaya Bhaskar &nbsp; &nbsp; [0.00]</option>
              <option value="1623">Koran, Katie &amp; Kenny &nbsp; &nbsp; [0.00]</option>
              <option value="1619">Koran, Teddy &nbsp; &nbsp; [0.00]</option>
              <option value="933">Lorenzini, Mitch &nbsp; &nbsp; [0.00]</option>
              <option value="1217">Lorenzini, Paige &nbsp; &nbsp; [0.00]</option>
              <option value="922">Lorenzini, Pepper &nbsp; &nbsp; [0.00]</option>
              <option value="1032">Lynch, Dixon &nbsp; &nbsp; [0.00]</option>
              <option value="1034">Lynch, Richard "Scott" &nbsp; &nbsp; [0.00]</option>
              <option value="693">Mallios, George "Jim" &nbsp; &nbsp; [0.00]</option>
              <option value="688">Mallios, Jason &nbsp; &nbsp; [0.00]</option>
              <option value="493">Mallios, Nicholas &nbsp; &nbsp; [0.00]</option>
              <option value="556">Mallios, Tracy &nbsp; &nbsp; [0.00]</option>
              <option value="1260">Marquez, David &nbsp; &nbsp; [0.00]</option>
              <option value="1255">Marquez, Owen &nbsp; &nbsp; [0.00]</option>
              <option value="856">Marshall, Angie &nbsp; &nbsp; [0.00]</option>
              <option value="866">Marshall, Mark &nbsp; &nbsp; [31.02]</option>
              <option value="1158">McFarland, Beckett &nbsp; &nbsp; [0.00]</option>
              <option value="923">McFarland, Evan &nbsp; &nbsp; [0.00]</option>
              <option value="1124">McFarland, Ian &nbsp; &nbsp; [0.00]</option>
              <option value="934">McFarland, Kristin &nbsp; &nbsp; [0.00]</option>
              <option value="1269">McLeer, Douglas &nbsp; &nbsp; [0.00]</option>
              <option value="1226">McLeer, Krissy &nbsp; &nbsp; [0.00]</option>
              <option value="1218">McLeer, Levi &nbsp; &nbsp; [0.00]</option>
              <option value="1219">McLeer, Liam &nbsp; &nbsp; [0.00]</option>
              <option value="1256">Medler, Bennett &nbsp; &nbsp; [0.00]</option>
              <option value="1620">Modglin, Abel &nbsp; &nbsp; [0.00]</option>
              <option value="1622">Modglin, Kirk &nbsp; &nbsp; [0.00]</option>
              <option value="1276">Morris, Jack &nbsp; &nbsp; [0.00]</option>
              <option value="1282">Morris, Lacey &nbsp; &nbsp; [0.00]</option>
              <option value="1002">Mysyk, Alexander &nbsp; &nbsp; [0.00]</option>
              <option value="1288">Mysyk, Andriy &nbsp; &nbsp; [0.00]</option>
              <option value="1191">Nair, Ananya &nbsp; &nbsp; [-29.00]</option>
              <option value="1206">Nair, Jithun &nbsp; &nbsp; [-39.50]</option>
              <option value="1294">Nallathambi, Kalki &nbsp; &nbsp; [0.00]</option>
              <option value="1533">Nallathambi, Ravetha &nbsp; &nbsp; [0.00]</option>
              <option value="789">Nguyen, Phuong &nbsp; &nbsp; [0.00]</option>
              <option value="1277">Niphadkar, Sahana &nbsp; &nbsp; [-43.50]</option>
              <option value="1283">Niphadkar, Shraddha &nbsp; &nbsp; [-94.00]</option>
              <option value="1172">North, Allison &nbsp; &nbsp; [0.00]</option>
              <option value="1159">North, Arlo &nbsp; &nbsp; [0.00]</option>
              <option value="1160">North, Davis &nbsp; &nbsp; [0.00]</option>
              <option value="599">Omran, Ahmed &nbsp; &nbsp; [0.00]</option>
              <option value="643">Omran, Haroun &nbsp; &nbsp; [0.00]</option>
              <option value="1079">Patel, Amy &nbsp; &nbsp; [0.00]</option>
              <option value="1173">Patel, Sujan &nbsp; &nbsp; [0.00]</option>
              <option value="765">Phan, Erik &nbsp; &nbsp; [144.00]</option>
              <option value="1247">Porter, Koley &nbsp; &nbsp; [0.00]</option>
              <option value="1242">Porter, Thora &nbsp; &nbsp; [0.00]</option>
              <option value="968">Purohit, Anay &nbsp; &nbsp; [0.00]</option>
              <option value="980">Purohit, Vijendra &nbsp; &nbsp; [0.00]</option>
              <option value="1207">Rios, Amanda &nbsp; &nbsp; [0.00]</option>
              <option value="1243">Rios, Luciana &nbsp; &nbsp; [0.00]</option>
              <option value="745">Robinson, Nick &nbsp; &nbsp; [0.00]</option>
              <option value="737">Robinson, Rohan &nbsp; &nbsp; [0.00]</option>
              <option value="924">Saldanha, Claire &nbsp; &nbsp; [0.00]</option>
              <option value="1161">Saldanha, Eva &nbsp; &nbsp; [0.00]</option>
              <option value="935">Saldanha, Mithila &nbsp; &nbsp; [0.00]</option>
              <option value="622">Shuman, Frank &nbsp; &nbsp; [0.00]</option>
              <option value="853">Shuman, Luca &nbsp; &nbsp; [0.00]</option>
              <option value="649">Shuman, Natalie &nbsp; &nbsp; [0.00]</option>
              <option value="899">Slonsky, Henry &nbsp; &nbsp; [0.00]</option>
              <option value="583">Slonsky, Kyle &nbsp; &nbsp; [0.00]</option>
              <option value="591">Slonsky, Yasemin &nbsp; &nbsp; [0.00]</option>
              <option value="1208">Staffield, Brittany &nbsp; &nbsp; [0.00]</option>
              <option value="638">Stappenbeck, Charlotte &nbsp; &nbsp; [0.00]</option>
              <option value="616">Stappenbeck, Stephen "Steve" &nbsp; &nbsp; [0.00]</option>
              <option value="1263">Stubblefield, Joel &nbsp; &nbsp; [0.00]</option>
              <option value="1262">Stubblefield, Will &nbsp; &nbsp; [0.00]</option>
              <option value="1162">Sujan, Jaxson &nbsp; &nbsp; [0.00]</option>
              <option value="1163">Sujan, Kira &nbsp; &nbsp; [0.00]</option>
              <option value="1077">Sujan, Maverick "Mav" &nbsp; &nbsp; [350.00]</option>
              <option value="1066">Susannah Benton, Susannah &nbsp; &nbsp; [0.00]</option>
              <option value="995">Swantner, Albert &nbsp; &nbsp; [0.25]</option>
              <option value="991">Swantner, Everett &nbsp; &nbsp; [1.00]</option>
              <option value="992">Swenson, Jack &nbsp; &nbsp; [1.00]</option>
              <option value="996">Swenson, Lindsey &nbsp; &nbsp; [0.00]</option>
              <option value="1089">Swenson, Matt &nbsp; &nbsp; [0.00]</option>
              <option value="1081">Tabie, Logan &nbsp; &nbsp; [0.00]</option>
              <option value="1085">Tabie, Mike &nbsp; &nbsp; [0.00]</option>
              <option value="854">Valencia Marshall, Angel &nbsp; &nbsp; [385.57]</option>
              <option value="768">Walker, Sophia &nbsp; &nbsp; [50.00]</option>
              <option value="1227">Westphal, Jenny &nbsp; &nbsp; [-39.50]</option>
              <option value="1220">Westphal, Milo &nbsp; &nbsp; [-14.50]</option>
              <option value="1221">Westphal, Oliver &nbsp; &nbsp; [54.00]</option>
              <option value="1209">Whittington, Aric &nbsp; &nbsp; [0.00]</option>
              <option value="1193">Whittington, Rowan &nbsp; &nbsp; [0.00]</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY44692" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44692" style="visibility: hidden">
            *
            </span>
            Credit To Person
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44692" id="RVALENTRY44692" value="N">
            <input type="hidden" name="OLD44692" id="OLD44692" value="0">
            <select id="ENTRY44692" name="ENTRY44692" class="form-control" onblur="TestRegExp(this,'','')" tabindex="200" title="The person whose account balance should be increased by the amount of this transaction" size="1" disabled="">
              <option selected="" value="0"> </option>
              <option value="1018">Aarons, Andrew &nbsp; &nbsp; [0.00]</option>
              <option value="1027">Aarons, Ashley &nbsp; &nbsp; [0.00]</option>
              <option value="1086">Aarons, Stephen &nbsp; &nbsp; [0.00]</option>
              <option value="910">Abbott, Albert &nbsp; &nbsp; [70.00]</option>
              <option value="914">Abbott, William &nbsp; &nbsp; [70.00]</option>
              <option value="1063">Almaraz, Alexander &nbsp; &nbsp; [0.00]</option>
              <option value="1064">Almaraz, Eric &nbsp; &nbsp; [0.00]</option>
              <option value="668">Alvarez, Jorge &nbsp; &nbsp; [15.75]</option>
              <option value="714">Alvarez, Kristen "Kristy" &nbsp; &nbsp; [0.00]</option>
              <option value="1239">Alvarez, Layla &nbsp; &nbsp; [0.00]</option>
              <option value="664">Alvarez, Mateo &nbsp; &nbsp; [0.00]</option>
              <option value="1245">Applegate, Chris &nbsp; &nbsp; [0.00]</option>
              <option value="1240">Applegate, Sebastian &nbsp; &nbsp; [0.00]</option>
              <option value="1202">Babb, Chris &nbsp; &nbsp; [0.00]</option>
              <option value="1184">Babb, Tyson &nbsp; &nbsp; [0.00]</option>
              <option value="488">Bayes, Dylan &nbsp; &nbsp; [0.00]</option>
              <option value="578">Bayes, Phillip &nbsp; &nbsp; [0.00]</option>
              <option value="1621">Benson, Lawrence &nbsp; &nbsp; [0.00]</option>
              <option value="1617">Benson, Nicolas &nbsp; &nbsp; [0.00]</option>
              <option value="1154">Blair, Frankie &nbsp; &nbsp; [0.00]</option>
              <option value="1155">Blair, Joe &nbsp; &nbsp; [0.00]</option>
              <option value="1156">Bruyn, Emerson &nbsp; &nbsp; [0.00]</option>
              <option value="1169">Bruyn, Meaghan &nbsp; &nbsp; [0.00]</option>
              <option value="964">Bucklin, Emmett &nbsp; &nbsp; [0.00]</option>
              <option value="976">Bucklin, Mary &nbsp; &nbsp; [0.00]</option>
              <option value="977">Bucklin, Michael &nbsp; &nbsp; [0.00]</option>
              <option value="1610">Bucklin, Michael2 &nbsp; &nbsp; [0.00]</option>
              <option value="1611">Bucklin, Michael3 &nbsp; &nbsp; [0.00]</option>
              <option value="785">Bush, Greg &nbsp; &nbsp; [0.00]</option>
              <option value="762">Bush, Kai &nbsp; &nbsp; [0.00]</option>
              <option value="908">Byrd, Amanda &nbsp; &nbsp; [105.00]</option>
              <option value="1618">Byrd, Barrett &nbsp; &nbsp; [0.00]</option>
              <option value="763">Byrd, Benjamin &nbsp; &nbsp; [0.00]</option>
              <option value="786">Byrd, Bradley "Ryan" &nbsp; &nbsp; [0.00]</option>
              <option value="1535">Chakarvarty, Mridul &nbsp; &nbsp; [0.00]</option>
              <option value="1065">Chidester, Amy &nbsp; &nbsp; [0.00]</option>
              <option value="1143">Chidester, Ella &nbsp; &nbsp; [0.00]</option>
              <option value="986">Chidester, Russ &nbsp; &nbsp; [0.00]</option>
              <option value="983">Chidester, Taylor &nbsp; &nbsp; [0.00]</option>
              <option value="630">Corkill, Cynthia &nbsp; &nbsp; [0.00]</option>
              <option value="1259">Daru, Bhargav &nbsp; &nbsp; [0.00]</option>
              <option value="984">De Los Santos Garza, Andrea &nbsp; &nbsp; [0.00]</option>
              <option value="965">De Los Santos Garza, Diego "Leo" Jr. &nbsp; &nbsp; [0.00]</option>
              <option value="978">De Los Santos Tamez, Diego &nbsp; &nbsp; [45.00]</option>
              <option value="1135">DeMartini, Emilia &nbsp; &nbsp; [0.00]</option>
              <option value="1139">DeMartini, Trevor &nbsp; &nbsp; [0.00]</option>
              <option value="1136">DeMartini, Vincent &nbsp; &nbsp; [0.00]</option>
              <option value="1241">Dennis, Khoi &nbsp; &nbsp; [0.00]</option>
              <option value="1246">Dennis, Michael &nbsp; &nbsp; [0.00]</option>
              <option value="614">Desouky, Noura &nbsp; &nbsp; [0.00]</option>
              <option value="1268">Diaz, Adam &nbsp; &nbsp; [0.00]</option>
              <option value="1266">Diaz, Winslow &nbsp; &nbsp; [0.00]</option>
              <option value="562">Dranguet, Benjamin &nbsp; &nbsp; [0.00]</option>
              <option value="1281">Duryee, David &nbsp; &nbsp; [0.00]</option>
              <option value="1203">D'Vincent, Lilli &nbsp; &nbsp; [0.00]</option>
              <option value="1185">D'Vincent, Mason &nbsp; &nbsp; [0.00]</option>
              <option value="654">Elrakabawy, Erin &nbsp; &nbsp; [0.00]</option>
              <option value="1021">Elwell, Connor &nbsp; &nbsp; [1.97]</option>
              <option value="1539">Espejel, Dean &nbsp; &nbsp; [0.00]</option>
              <option value="1609">Espejel, Moshe &nbsp; &nbsp; [0.00]</option>
              <option value="831">Fick, Preston &nbsp; &nbsp; [238.46]</option>
              <option value="1122">Files, Michael &nbsp; &nbsp; [140.00]</option>
              <option value="564">Files, Michael &nbsp; &nbsp; [89.94]</option>
              <option value="888">Gaete, Holly &nbsp; &nbsp; [0.00]</option>
              <option value="886">Gaete, Lincoln &nbsp; &nbsp; [0.00]</option>
              <option value="893">Galdo, Anne &nbsp; &nbsp; [0.00]</option>
              <option value="1088">Galdo, Henry &nbsp; &nbsp; [0.00]</option>
              <option value="1114">Gibson, Charleston &nbsp; &nbsp; [0.00]</option>
              <option value="1123">Gibson, Steven &nbsp; &nbsp; [0.00]</option>
              <option value="832">Goodine, David &nbsp; &nbsp; [0.00]</option>
              <option value="811">Goodine, Jack &nbsp; &nbsp; [0.00]</option>
              <option value="1187">Gurrola, Benjamin &nbsp; &nbsp; [-14.50]</option>
              <option value="1204">Gurrola, Jacqueline &nbsp; &nbsp; [-19.75]</option>
              <option value="1232">Gurrola, Matthew &nbsp; &nbsp; [-19.75]</option>
              <option value="1157">Hallar, Henry &nbsp; &nbsp; [0.00]</option>
              <option value="1170">Hallar, Ingrid &nbsp; &nbsp; [0.00]</option>
              <option value="1171">Hanss Blair, Rachel &nbsp; &nbsp; [0.00]</option>
              <option value="944">Harrison, Abi &nbsp; &nbsp; [0.00]</option>
              <option value="940">Harrison, James &nbsp; &nbsp; [0.00]</option>
              <option value="1084">Hayes, David &nbsp; &nbsp; [0.00]</option>
              <option value="833">Hickman, Arthur "Trey" &nbsp; &nbsp; [0.00]</option>
              <option value="1188">Hickman, Maya &nbsp; &nbsp; [0.00]</option>
              <option value="1285">Hoy, Ashton &nbsp; &nbsp; [0.00]</option>
              <option value="1287">Hoy, Nicole &nbsp; &nbsp; [0.00]</option>
              <option value="1216">Hume, Beatrix &nbsp; &nbsp; [0.00]</option>
              <option value="1225">Hume, John &nbsp; &nbsp; [0.00]</option>
              <option value="1205">Idell, Claire &nbsp; &nbsp; [0.00]</option>
              <option value="1189">Idell, Gabe &nbsp; &nbsp; [0.00]</option>
              <option value="1292">Ingram, Alistair &nbsp; &nbsp; [0.00]</option>
              <option value="1534">Ingrams, Julie &amp; Robert &nbsp; &nbsp; [0.00]</option>
              <option value="1293">Kathuria, Kabir &nbsp; &nbsp; [0.00]</option>
              <option value="883">Keenan, Danielle &nbsp; &nbsp; [0.00]</option>
              <option value="880">Keenan, Lilly &nbsp; &nbsp; [0.00]</option>
              <option value="882">Keenan, Peter &nbsp; &nbsp; [0.00]</option>
              <option value="1190">kommineni, anish &nbsp; &nbsp; [0.00]</option>
              <option value="517">kommineni, Avighna &nbsp; &nbsp; [0.00]</option>
              <option value="577">Kommineni, Vijaya Bhaskar &nbsp; &nbsp; [0.00]</option>
              <option value="1623">Koran, Katie &amp; Kenny &nbsp; &nbsp; [0.00]</option>
              <option value="1619">Koran, Teddy &nbsp; &nbsp; [0.00]</option>
              <option value="933">Lorenzini, Mitch &nbsp; &nbsp; [0.00]</option>
              <option value="1217">Lorenzini, Paige &nbsp; &nbsp; [0.00]</option>
              <option value="922">Lorenzini, Pepper &nbsp; &nbsp; [0.00]</option>
              <option value="1032">Lynch, Dixon &nbsp; &nbsp; [0.00]</option>
              <option value="1034">Lynch, Richard "Scott" &nbsp; &nbsp; [0.00]</option>
              <option value="693">Mallios, George "Jim" &nbsp; &nbsp; [0.00]</option>
              <option value="688">Mallios, Jason &nbsp; &nbsp; [0.00]</option>
              <option value="493">Mallios, Nicholas &nbsp; &nbsp; [0.00]</option>
              <option value="556">Mallios, Tracy &nbsp; &nbsp; [0.00]</option>
              <option value="1260">Marquez, David &nbsp; &nbsp; [0.00]</option>
              <option value="1255">Marquez, Owen &nbsp; &nbsp; [0.00]</option>
              <option value="856">Marshall, Angie &nbsp; &nbsp; [0.00]</option>
              <option value="866">Marshall, Mark &nbsp; &nbsp; [31.02]</option>
              <option value="1158">McFarland, Beckett &nbsp; &nbsp; [0.00]</option>
              <option value="923">McFarland, Evan &nbsp; &nbsp; [0.00]</option>
              <option value="1124">McFarland, Ian &nbsp; &nbsp; [0.00]</option>
              <option value="934">McFarland, Kristin &nbsp; &nbsp; [0.00]</option>
              <option value="1269">McLeer, Douglas &nbsp; &nbsp; [0.00]</option>
              <option value="1226">McLeer, Krissy &nbsp; &nbsp; [0.00]</option>
              <option value="1218">McLeer, Levi &nbsp; &nbsp; [0.00]</option>
              <option value="1219">McLeer, Liam &nbsp; &nbsp; [0.00]</option>
              <option value="1256">Medler, Bennett &nbsp; &nbsp; [0.00]</option>
              <option value="1620">Modglin, Abel &nbsp; &nbsp; [0.00]</option>
              <option value="1622">Modglin, Kirk &nbsp; &nbsp; [0.00]</option>
              <option value="1276">Morris, Jack &nbsp; &nbsp; [0.00]</option>
              <option value="1282">Morris, Lacey &nbsp; &nbsp; [0.00]</option>
              <option value="1002">Mysyk, Alexander &nbsp; &nbsp; [0.00]</option>
              <option value="1288">Mysyk, Andriy &nbsp; &nbsp; [0.00]</option>
              <option value="1191">Nair, Ananya &nbsp; &nbsp; [-29.00]</option>
              <option value="1206">Nair, Jithun &nbsp; &nbsp; [-39.50]</option>
              <option value="1294">Nallathambi, Kalki &nbsp; &nbsp; [0.00]</option>
              <option value="1533">Nallathambi, Ravetha &nbsp; &nbsp; [0.00]</option>
              <option value="789">Nguyen, Phuong &nbsp; &nbsp; [0.00]</option>
              <option value="1277">Niphadkar, Sahana &nbsp; &nbsp; [-43.50]</option>
              <option value="1283">Niphadkar, Shraddha &nbsp; &nbsp; [-94.00]</option>
              <option value="1172">North, Allison &nbsp; &nbsp; [0.00]</option>
              <option value="1159">North, Arlo &nbsp; &nbsp; [0.00]</option>
              <option value="1160">North, Davis &nbsp; &nbsp; [0.00]</option>
              <option value="599">Omran, Ahmed &nbsp; &nbsp; [0.00]</option>
              <option value="643">Omran, Haroun &nbsp; &nbsp; [0.00]</option>
              <option value="1079">Patel, Amy &nbsp; &nbsp; [0.00]</option>
              <option value="1173">Patel, Sujan &nbsp; &nbsp; [0.00]</option>
              <option value="765">Phan, Erik &nbsp; &nbsp; [144.00]</option>
              <option value="1247">Porter, Koley &nbsp; &nbsp; [0.00]</option>
              <option value="1242">Porter, Thora &nbsp; &nbsp; [0.00]</option>
              <option value="968">Purohit, Anay &nbsp; &nbsp; [0.00]</option>
              <option value="980">Purohit, Vijendra &nbsp; &nbsp; [0.00]</option>
              <option value="1207">Rios, Amanda &nbsp; &nbsp; [0.00]</option>
              <option value="1243">Rios, Luciana &nbsp; &nbsp; [0.00]</option>
              <option value="745">Robinson, Nick &nbsp; &nbsp; [0.00]</option>
              <option value="737">Robinson, Rohan &nbsp; &nbsp; [0.00]</option>
              <option value="924">Saldanha, Claire &nbsp; &nbsp; [0.00]</option>
              <option value="1161">Saldanha, Eva &nbsp; &nbsp; [0.00]</option>
              <option value="935">Saldanha, Mithila &nbsp; &nbsp; [0.00]</option>
              <option value="622">Shuman, Frank &nbsp; &nbsp; [0.00]</option>
              <option value="853">Shuman, Luca &nbsp; &nbsp; [0.00]</option>
              <option value="649">Shuman, Natalie &nbsp; &nbsp; [0.00]</option>
              <option value="899">Slonsky, Henry &nbsp; &nbsp; [0.00]</option>
              <option value="583">Slonsky, Kyle &nbsp; &nbsp; [0.00]</option>
              <option value="591">Slonsky, Yasemin &nbsp; &nbsp; [0.00]</option>
              <option value="1208">Staffield, Brittany &nbsp; &nbsp; [0.00]</option>
              <option value="638">Stappenbeck, Charlotte &nbsp; &nbsp; [0.00]</option>
              <option value="616">Stappenbeck, Stephen "Steve" &nbsp; &nbsp; [0.00]</option>
              <option value="1263">Stubblefield, Joel &nbsp; &nbsp; [0.00]</option>
              <option value="1262">Stubblefield, Will &nbsp; &nbsp; [0.00]</option>
              <option value="1162">Sujan, Jaxson &nbsp; &nbsp; [0.00]</option>
              <option value="1163">Sujan, Kira &nbsp; &nbsp; [0.00]</option>
              <option value="1077">Sujan, Maverick "Mav" &nbsp; &nbsp; [350.00]</option>
              <option value="1066">Susannah Benton, Susannah &nbsp; &nbsp; [0.00]</option>
              <option value="995">Swantner, Albert &nbsp; &nbsp; [0.25]</option>
              <option value="991">Swantner, Everett &nbsp; &nbsp; [1.00]</option>
              <option value="992">Swenson, Jack &nbsp; &nbsp; [1.00]</option>
              <option value="996">Swenson, Lindsey &nbsp; &nbsp; [0.00]</option>
              <option value="1089">Swenson, Matt &nbsp; &nbsp; [0.00]</option>
              <option value="1081">Tabie, Logan &nbsp; &nbsp; [0.00]</option>
              <option value="1085">Tabie, Mike &nbsp; &nbsp; [0.00]</option>
              <option value="854">Valencia Marshall, Angel &nbsp; &nbsp; [385.57]</option>
              <option value="768">Walker, Sophia &nbsp; &nbsp; [50.00]</option>
              <option value="1227">Westphal, Jenny &nbsp; &nbsp; [-39.50]</option>
              <option value="1220">Westphal, Milo &nbsp; &nbsp; [-14.50]</option>
              <option value="1221">Westphal, Oliver &nbsp; &nbsp; [54.00]</option>
              <option value="1209">Whittington, Aric &nbsp; &nbsp; [0.00]</option>
              <option value="1193">Whittington, Rowan &nbsp; &nbsp; [0.00]</option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY44702" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44702" style="visibility: hidden">
            *
            </span>
            Debit Event
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44702" id="RVALENTRY44702" value="N">
            <input type="hidden" name="OLD44702" id="OLD44702" value="0">
            <select id="ENTRY44702" name="ENTRY44702" class="form-control" onblur="TestRegExp(this,'','')" tabindex="210" title="The event balance to be reduced by the amount of this transaction." size="1" disabled="">
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
        <tr id="DIVENTRY44712" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY44712" style="visibility: hidden">
            *
            </span>
            Credit Event
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY44712" id="RVALENTRY44712" value="N">
            <input type="hidden" name="OLD44712" id="OLD44712" value="0">
            <select id="ENTRY44712" name="ENTRY44712" class="form-control" onblur="TestRegExp(this,'','')" tabindex="220" title="The event balance to be increased by the amount of this transaction" size="1" disabled="">
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
        <tr id="DIVENTRY311922" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY311922" style="visibility: hidden">
            *
            </span>
            Payment Intended For Event
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY311922" id="RVALENTRY311922" value="N">
            <input type="hidden" name="OLD311922" id="OLD311922" value="0">
            <select id="ENTRY311922" name="ENTRY311922" class="form-control" onblur="TestRegExp(this,'','')" tabindex="230" title="The event for which this payment was intended" size="1" disabled="">
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
        <tr id="DIVENTRY260832" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY260832" style="visibility: hidden">
            *
            </span>
            Debit Fund
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY260832" id="RVALENTRY260832" value="N">
            <input type="hidden" name="OLD260832" id="OLD260832" value="0">
            <select id="ENTRY260832" name="ENTRY260832" class="form-control" onblur="TestRegExp(this,'','')" tabindex="240" title="The fund whose balance should be reduced by the amount of this transaction" size="1" disabled="">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY260842" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY260842" style="visibility: hidden">
            *
            </span>
            Credit Fund
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY260842" id="RVALENTRY260842" value="N">
            <input type="hidden" name="OLD260842" id="OLD260842" value="0">
            <select id="ENTRY260842" name="ENTRY260842" class="form-control" onblur="TestRegExp(this,'','')" tabindex="250" title="The fund whose balance will be increased by the amount of this transaction" size="1" disabled="">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY629692" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY629692" style="visibility: hidden">
            *
            </span>
            Budget Item
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY629692" id="RVALENTRY629692" value="N">
            <input type="hidden" name="OLD629692" id="OLD629692" value="0">
            <select id="ENTRY629692" name="ENTRY629692" class="form-control" onblur="TestRegExp(this,'','')" tabindex="260" title="The budget item to which this transaction should be applied" size="1" disabled="">
              <option selected="" value="0"> </option>
            </select>
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY311935" style="visibility: collapse; display: none;">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY311935" style="visibility: hidden">
            *
            </span>
            Fiscal Year
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY311935" id="RVALENTRY311935" value="N">
            <input type="hidden" name="OLD311935" id="OLD311935" value="">
            <input type="text" class="form-control" id="ENTRY311935" name="ENTRY311935" tabindex="270" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="" title="The fiscal year to which this transaction applies" disabled="">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY3119450">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY3119450" style="visibility: hidden">
            *
            </span>
            Receipt
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY3119450" id="RVALENTRY3119450" value="N">
            <input type="hidden" name="OLD3119450" id="OLD3119450" value="">
            <input type="file" tabindex="280" id="ENTRY3119450" name="ENTRY3119450" class="form-control" title="Upload a document or image showing the receipt for this transaction">
            <span class="entrypostscript">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY5737569">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY5737569" style="visibility: hidden">
            *
            </span>
            Transaction ID
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY5737569" id="RVALENTRY5737569" value="">
            <input type="hidden" name="OLD5737569" id="OLD5737569" value="">
            <input type="hidden" name="ENTRY5737569" id="ENTRY5737569" value="">
            <span class="text-left">

            </span>
          </td>
        </tr>
        <tr id="DIVENTRY447211">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY447211" style="visibility: hidden">
            *
            </span>
            Group Transaction?
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY447211" id="RVALENTRY447211" value="">
            <input type="hidden" name="OLD447211" id="OLD447211" value="N">
            <input type="hidden" name="ENTRY447211" id="ENTRY447211" value="N">
            <span class="text-left">
            No
            </span>
          </td>
        </tr>
        <tr id="DIVENTRY46882">
          <td class="text-right">
            <label class="control-label">
            <span class="RequiredIndicator" id="RDIVENTRY46882" style="visibility: hidden">
            *
            </span>
            Update Group
            </label>
          </td>
          <td class="text-left">
            <input type="hidden" name="RVALENTRY46882" id="RVALENTRY46882" value="">
            <input type="hidden" name="OLD46882" id="OLD46882" value="0">
            <input type="hidden" name="ENTRY46882" id="ENTRY46882" value="0">
            <span class="text-left">

            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="new-row" id="fs947">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="320" id="BUTTON22" type="button" name="save add again" title="Save this information as a new row in  the database and prepare to add another row" value="Save &amp; Add Another" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="330" id="BUTTON23" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="LinkTo('/home/home.php','_top');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="340" id="BUTTON24" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
        </span>
        <span style="display:inline;">
        <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="350" id="BUTTON25" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON25">
        </span>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FirstControl" id="FirstControl" value="ENTRY44612">
</form>
<div style="height: 100px;">&nbsp;</div>


</body></html>