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
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<meta http-equiv="EXPIRES" content="0">
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
<script src="/ckeditor/ckeditor.js?v=2"></script><style>.cke{visibility:hidden;}</style>
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
    function RotateImage(ImageID, TableName, ColumnName, ImageRowID, RotateDirection) {
    var pl = new SOAPClientParameters();
    pl.add("ImageID", ImageID);
    pl.add("TableName", TableName);
    pl.add("ColumnName", ColumnName);
    pl.add("ImageRowID", ImageRowID);
    pl.add("RotateDirection", RotateDirection);
    pl.add("UserID",  209210);
    pl.add("ApplicationID", 2840);
    pl.add("ImageKey", 1993142);
    SOAPClient.invoke("EasyWebService.asmx", "RotateImage", pl, true, RotateImageReturn);
    return;
    }
    function RotateImageReturn(val)
    {
    if (val.ErrorMsg && val.ErrorMsg.length > 0)
    {
    window.alert(val.ErrorMsg);
    }
    else
    {
    var ImageID = val.ImageID;
    var ImageObj = document.getElementById(ImageID);
    var ImageURL = ImageObj.src;
    var currentdate = new Date();
    var Time = 'parm=' + currentdate.getDay() + currentdate.getHours() + currentdate.getMinutes() + currentdate.getSeconds() + currentdate.getMilliseconds();
    var UrlParmIndex = ImageURL.indexOf("?");
    if (UrlParmIndex>-1)
    {
    ImageURL = ImageURL.substring(0,UrlParmIndex+1) + Time;
    }
    else
    {
    ImageURL = ImageURL + "?" + Time;
    }
    ImageObj.src = ImageURL;
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
    if (thisfield.name=='ENTRY194952'||thisfield.name=='ENTRY489152')
{
  var CellPhone = easyGetFieldValue('ENTRY194952');
  var CarrierID = easyGetFieldValue('ENTRY489152');
  if (CellPhone != '' && CarrierID != '' && CarrierID != '0')
  {
    GetSMSAddress(CellPhone,CarrierID);
  }
}



if (thisfield.name=='ENTRY4979111')
{
  var Flag = easyGetFieldValue('ENTRY4979111');
  if (Flag=='Y')
  {
     easySetFieldValue('ENTRY4979011','N');
  }
}


if (thisfield.name=='ENTRY4979011')
{
  var Flag = easyGetFieldValue('ENTRY4979011');
  if (Flag=='Y')
  {
     easySetFieldValue('ENTRY4979111','N');
  }
}


if (thisfield.name=='ENTRY4979311')
{
  var Flag = easyGetFieldValue('ENTRY4979311');
  if (Flag=='Y')
  {
     easySetFieldValue('ENTRY4979211','N');
  }
}


if (thisfield.name=='ENTRY4979211')
{
  var Flag = easyGetFieldValue('ENTRY4979211');
  if (Flag=='Y')
  {
     easySetFieldValue('ENTRY4979311','N');
  }
}

      }
    function GetSMSAddress(CellPhone, CarrierID)
{
  var pl = new SOAPClientParameters();
  pl.add("Phone_Number", CellPhone);
  pl.add("Cell_Phone_Carrier_ID", CarrierID);

  SOAPClient.invoke("EasyWebService.asmx","GetSMSAddress",pl,true,ReturnSMSAddress);
  return;
}

function ReturnSMSAddress(retObj)
{
  //  if there is an error, display it and exit
  if (retObj.ErrorMsg && retObj.ErrorMessage.length > 0)
  {
    window.alert(retObj.ErrorMessage.text);
    return true;
  }

  var SMSAddress = retObj.SMS_Address;
  if (SMSAddress != '')
  {
    easySetFieldValue('ENTRY973635',SMSAddress);
  }
}
    //-->
  </script>
  <script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/config.js?v=2&amp;t=G87E"></script><link rel="stylesheet" type="text/css" href="https://www.troopwebhostcs.org/ckeditor/skins/moono/editor.css?t=G87E"><script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/lang/en.js?t=G87E"></script><script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/styles.js?t=G87E"></script><script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/plugins/doksoft_backup/plugin.js?t=G87E"></script><script type="text/javascript" src="https://www.troopwebhostcs.org/ckeditor/plugins/doksoft_backup/lang/en.js?t=G87E"></script></head>
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
  <input type="hidden" name="Menu_Item_ID" id="Menu_Item_ID" value="5788">
  <input type="hidden" name="Form_ID" id="Form_ID" value="127">
  <input type="hidden" name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
  <input type="hidden" name="Pass" id="Pass" value="1">
  <input type="hidden" name="Stack" id="Stack" value="2">
  <input type="hidden" name="NextSectionPageNumber" id="NextSectionPageNumber" value="">
  <input type="hidden" name="NewRowsPerPage" id="NewRowsPerPage" value="">
  <input type="hidden" name="ChildRowID" id="ChildRowID" value="0">
  <input type="hidden" name="Report_Format" id="Report_Format" value="">
  <input type="hidden" name="Current_URL" id="Current_URL" value="https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1018&amp;FK=1018&amp;Form_ID=127&amp;Stack=2">
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
              <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=2','');">Site Appearance</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
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
              <a href="javascript:LinkTo('FormDetail.aspx?Menu_Item_ID=409&amp;Stack=2','');">Site Appearance</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=318&amp;Stack=2','');">Calendar</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('formCustom.aspx?Menu_Item_ID=5788&amp;Stack=0','');">Membership Hub</a>
            </td>
            <td class="navlink">
              <a href="javascript:LinkTo('FormList.aspx?Menu_Item_ID=343&amp;Stack=2','');">Users &amp; Passwords</a>
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
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=258&amp;Stack=0&amp;Menu_Item_ID=5788">Change My Password</a></li>
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=2568&amp;Stack=0&amp;Menu_Item_ID=5788">Configure My Quick Menu</a></li>
    <li class="list-group-item"><a href="FormDetail.aspx?Form_ID=1951&amp;Stack=0&amp;Menu_Item_ID=5788">Bookmark This Site</a></li>
    </ul>
  </div>
  <div id="helpmenu" class="navtools">
    <ul class="list-group">
    <li class="list-group-item"><a href="Help.aspx?ID=62" target="_blank">User Guide</a></li>
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
          The URL for this page is:&nbsp; &nbsp; https://www.troopwebhostcs.org/FormDetail.aspx?Menu_Item_ID=5788&amp;ID=1018&amp;FK=1018&amp;Form_ID=127&amp;Stack=2&amp;Application_ID=2840
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
  Member
  </p>
  <input type="hidden" name="FK" id="FK" value="0">
  <input type="hidden" name="ID" id="ID" value="1018">
  <div class="new-row" id="fs16107">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="110" id="BUTTON1" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="LinkTo('/home/home.php','_top');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="120" id="BUTTON2" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="130" id="BUTTON3" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON3">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-info" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="140" id="BUTTON4" type="button" name="save continue" title="Scouting History Report" value="Scouting History Report" onclick="LinkTo('FormReportMultiSection.aspx?Menu_Item_ID=5788&amp;Form_ID=1005&amp;FK=1018&amp;ID=1018&amp;Stack=2','FormReportMultiSectionaspxWindow');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-primary" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="150" id="BUTTON5" type="button" name="update" title="Deactivate Entire Family" value="Deactivate Entire Family" onclick="LinkTo('FormDetail.aspx?Menu_Item_ID=5788&amp;Form_ID=7460&amp;ID=1018&amp;Stack=3','');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs313">
    <div class="container-fluid container-flex">
      <div class="center-block ">
        <table class="no-border">
          <tbody>
          <tr id="DIVENTRY19652">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY19652" style="visibility: visible">
              *
              </span>
              Membership Type
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY19652" id="RVALENTRY19652" value="Y">
              <input type="hidden" name="OLD19652" id="OLD19652" value="3">
              <select id="ENTRY19652" name="ENTRY19652" class="form-control" onblur="TestRegExp(this,'','')" tabindex="160" title="The type of membership this person holds in this group." size="1">
                <option value="2">Adult</option>
                <option selected="" value="3">Scout</option>
              </select>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY193725" style="visibility: visible">
              *
              </span>
              Name
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY193725" id="RVALENTRY193725" value="Y">
              <span id="DIVENTRY193725">
              <input type="hidden" name="OLD193725" id="OLD193725" value="Andrew">
              <input type="text" class="form-control" id="ENTRY193725" name="ENTRY193725" tabindex="171" size="24" onblur="TestRegExp(this,'','')" maxlength="24" value="Andrew" title="First Name">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY193727" id="RVALENTRY193727" value="N">
              <span id="DIVENTRY193727">
              <input type="hidden" name="OLD193727" id="OLD193727" value="">
              <input type="text" class="form-control" id="ENTRY193727" name="ENTRY193727" tabindex="172" size="24" onblur="TestRegExp(this,'','')" maxlength="24" value="" title="Middle name">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY193728" id="RVALENTRY193728" value="Y">
              <span id="DIVENTRY193728">
              <input type="hidden" name="OLD193728" id="OLD193728" value="Aarons">
              <input type="text" class="form-control" id="ENTRY193728" name="ENTRY193728" tabindex="173" size="30" onblur="TestRegExp(this,'','')" maxlength="30" value="Aarons" title="Last name">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY193751" id="RVALENTRY193751" value="N">
              <span id="DIVENTRY193751">
              <input type="hidden" name="OLD193751" id="OLD193751" value="">
              <select id="ENTRY193751" name="ENTRY193751" class="form-control" onblur="TestRegExp(this,'','')" tabindex="174" title="" size="1">
                <option selected="" value=""> </option>
                <option value="Sr.">Sr.</option>
                <option value="Jr.">Jr.</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
              </select>
              <span class="entrypostscript">

              </span>
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY94421">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY94421" style="visibility: hidden">
              *
              </span>
              Preferred Name
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY94421" id="RVALENTRY94421" value="N">
              <input type="hidden" name="OLD94421" id="OLD94421" value="">
              <input type="text" class="form-control" id="ENTRY94421" name="ENTRY94421" tabindex="180" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The name this person would prefer to use instead of their legal first name.">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY223362" style="visibility: hidden">
              *
              </span>
              Photograph
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY223362" id="RVALENTRY223362" value="N">
              <span id="DIVENTRY223362">
              <input type="hidden" name="OLD223362" id="OLD223362" value="">
              <span id="DIVPHOTO223362"></span><input type="file" tabindex="191" id="ENTRY223362" name="ENTRY223362" class="form-control" onchange="ShowUploadPhoto(this);" title=""><input type="hidden" id="DELETEFILE223362" name="DELETEFILE223362" value="Save">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY223365" id="RVALENTRY223365" value="N">
              <span id="DIVENTRY223365">
              <input type="hidden" name="OLD223365" id="OLD223365" value="">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY223366" id="RVALENTRY223366" value="N">
              <span id="DIVENTRY223366">
              <input type="hidden" name="OLD223366" id="OLD223366" value="">
              <span class="entrypostscript">

              </span>
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY336352">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY336352" style="visibility: hidden">
              *
              </span>
              Scouting Level
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY336352" id="RVALENTRY336352" value="N">
              <input type="hidden" name="OLD336352" id="OLD336352" value="3">
              <select id="ENTRY336352" name="ENTRY336352" class="form-control" onblur="TestRegExp(this,'','')" tabindex="200" title="The level of the scouting program this scout is currently at, based on age." size="1">
                <option value="0"> </option>
                <option value="1">Bobcat</option>
                <option value="117">Lion</option>
                <option value="2">Tiger</option>
                <option selected="" value="3">Wolf</option>
                <option value="4">Bear</option>
                <option value="118">Webelos</option>
                <option value="119">AOL</option>
                <option value="5">Webelos / AOL</option>
              </select>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY345625">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY345625" style="visibility: hidden">
              *
              </span>
              Den Number
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY345625" id="RVALENTRY345625" value="N">
              <input type="hidden" name="OLD345625" id="OLD345625" value="9">
              <input type="text" class="form-control" id="ENTRY345625" name="ENTRY345625" tabindex="210" size="7" onblur="TestRegExp(this,/^[+-]?\d\d*$/,'This field will only accept positive numbers with no decimal points or commas.')" maxlength="7" value="9" title="The den number to which this member belongs">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY204169">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY204169" style="visibility: hidden">
              *
              </span>
              Current Leadership Position
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY204169" id="RVALENTRY204169" value="">
              <input type="hidden" name="OLD204169" id="OLD204169" value="">
              <input type="hidden" name="ENTRY204169" id="ENTRY204169" value="">
              <span class="text-left">

              </span>
            </td>
          </tr>
          <tr>
            <td class="text-center" colspan="2">
              &nbsp;
              <br><br>
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY193929" style="visibility: hidden">
              *
              </span>
              Address
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY193929" id="RVALENTRY193929" value="N">
              <span id="DIVENTRY193929">
              <input type="hidden" name="OLD193929" id="OLD193929" value="6524 Aden Lane">
              <input type="text" class="form-control" id="ENTRY193929" name="ENTRY193929" tabindex="231" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="6524 Aden Lane" title="Street address or P.O. Box">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY193930" id="RVALENTRY193930" value="N">
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY193930" style="visibility: hidden">
              *
              </span>

              </label>
            </td>
            <td class="text-left">
              <span id="DIVENTRY193930">
              <input type="hidden" name="OLD193930" id="OLD193930" value="">
              <input type="text" class="form-control" id="ENTRY193930" name="ENTRY193930" tabindex="232" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="Continuation of address information">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY193931" id="RVALENTRY193931" value="N">
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY193931" style="visibility: hidden">
              *
              </span>
              City
              </label>
            </td>
            <td class="text-left">
              <span id="DIVENTRY193931">
              <input type="hidden" name="OLD193931" id="OLD193931" value="Austin">
              <input type="text" class="form-control" id="ENTRY193931" name="ENTRY193931" tabindex="233" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="Austin" title="City">
              <span class="entrypostscript">
              ,
              </span>
              </span>
              <input type="hidden" name="RVALENTRY193932" id="RVALENTRY193932" value="N">
              <span id="DIVENTRY193932">
              <input type="hidden" name="OLD193932" id="OLD193932" value="TX">
              <select id="ENTRY193932" name="ENTRY193932" class="form-control" onblur="TestRegExp(this,'','')" tabindex="234" title="State" size="1">
                <option value=""> </option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="BC">British Columbia</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MB">Manitoba</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="PR">Puerto Rico</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option selected="" value="TX">Texas</option>
                <option value="UA">United Arab Emirates</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY193933" id="RVALENTRY193933" value="N">
              <span id="DIVENTRY193933">
              <input type="hidden" name="OLD193933" id="OLD193933" value="78739">
              <input type="text" class="form-control" id="ENTRY193933" name="ENTRY193933" tabindex="235" size="10" onblur="TestRegExp(this,'','')" maxlength="10" value="78739" title="Zip code (postal code)">
              <span class="entrypostscript">

              </span>
              </span>
              <input type="hidden" name="RVALENTRY193934" id="RVALENTRY193934" value="N">
              <span id="DIVENTRY193934">
              <input type="hidden" name="OLD193934" id="OLD193934" value="">
              <select id="ENTRY193934" name="ENTRY193934" class="form-control" onblur="TestRegExp(this,'','')" tabindex="236" title="Country" size="1">
                <option selected="" value=""> </option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="Mexico">Mexico</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="USA">USA</option>
              </select>
              <span class="entrypostscript">

              </span>
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY194152">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY194152" style="visibility: hidden">
              *
              </span>
              Home Phone
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY194152" id="RVALENTRY194152" value="N">
              <input type="hidden" name="OLD194152" id="OLD194152" value="(979) 324-3091">
              <input type="text" class="form-control" id="ENTRY194152" name="ENTRY194152" tabindex="240" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="(979) 324-3091" title="The home telephone number for this person.">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY194952">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY194952" style="visibility: hidden">
              *
              </span>
              Cell Phone
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY194952" id="RVALENTRY194952" value="N">
              <input type="hidden" name="OLD194952" id="OLD194952" value="">
              <input type="text" class="form-control" id="ENTRY194952" name="ENTRY194952" tabindex="250" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="Cell Phone">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY489152">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY489152" style="visibility: hidden">
              *
              </span>
              Cell Phone Carrier
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY489152" id="RVALENTRY489152" value="N">
              <input type="hidden" name="OLD489152" id="OLD489152" value="0">
              <select id="ENTRY489152" name="ENTRY489152" class="form-control" onblur="TestRegExp(this,'','')" tabindex="260" title="The company that services the cell phone number for this person" size="1">
                <option selected="" value="0"> </option>
                <option value="1">3 River Wireless</option>
                <option value="2">ACS Wireless</option>
                <option value="3">Alltel</option>
                <option value="4">AT&amp;T</option>
                <option value="5">Bell Canada</option>
                <option value="7">Bell Mobility (Canada)</option>
                <option value="9">Blue Sky Frog</option>
                <option value="10">Bluegrass Cellular</option>
                <option value="11">Boost Mobile</option>
                <option value="12">BPL Mobile</option>
                <option value="13">Carolina West Wireless</option>
                <option value="79">Cellcom</option>
                <option value="14">Cellular One</option>
                <option value="15">Cellular South</option>
                <option value="16">Centennial Wireless</option>
                <option value="17">CenturyTel</option>
                <option value="18">Cingular (Now AT&amp;T)</option>
                <option value="19">Clearnet</option>
                <option value="20">Comcast</option>
                <option value="74">Consumer Cellular (AT&amp;T)</option>
                <option value="75">Consumer Cellular (Platinum)</option>
                <option value="21">Corr Wireless Communications</option>
                <option value="73">Cricket</option>
                <option value="22">Dobson</option>
                <option value="23">Edge Wireless</option>
                <option value="24">Fido</option>
                <option value="25">Golden Telecom</option>
                <option value="82">Good2Go Mobile</option>
                <option value="72">Google Project Fi</option>
                <option value="26">Helio</option>
                <option value="27">Houston Cellular</option>
                <option value="28">Idea Cellular</option>
                <option value="29">Illinois Valley Cellular</option>
                <option value="30">Inland Cellular Telephone</option>
                <option value="31">MCI</option>
                <option value="34">Metro PCS</option>
                <option value="35">Microcell</option>
                <option value="36">Midwest Wireless</option>
                <option value="77">Mint Mobile</option>
                <option value="37">Mobilcomm</option>
                <option value="38">MTS</option>
                <option value="39">Nextel</option>
                <option value="40">OnlineBeep</option>
                <option value="41">PCS One</option>
                <option value="42">President's Choice</option>
                <option value="43">Public Service Cellular</option>
                <option value="80">Pure TalkUSA</option>
                <option value="44">Qwest</option>
                <option value="84">Red Pocket</option>
                <option value="76">Republic Wireless</option>
                <option value="45">Rogers AT&amp;T Wireless</option>
                <option value="46">Rogers Canada</option>
                <option value="83">Simple Mobile</option>
                <option value="57">Solo Mobile</option>
                <option value="47">Southwestern Bell</option>
                <option value="81">Spectrum Mobile</option>
                <option value="48">Sprint</option>
                <option value="49">Sumcom</option>
                <option value="50">Surewest Communications</option>
                <option value="52">Telus</option>
                <option value="85">Ting</option>
                <option value="51">T-Mobile</option>
                <option value="53">Tracfone</option>
                <option value="54">Triton</option>
                <option value="55">Unicel</option>
                <option value="56">US Cellular</option>
                <option value="66">US West</option>
                <option value="67">Verizon</option>
                <option value="68">Virgin Mobile</option>
                <option value="69">Virgin Mobile Canada</option>
                <option value="70">West Central Wireless</option>
                <option value="71">Western Wireless</option>
                <option value="78">Xfinity Mobile</option>
              </select>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY973635">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY973635" style="visibility: hidden">
              *
              </span>
              SMS Text Mail Address
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY973635" id="RVALENTRY973635" value="N">
              <input type="hidden" name="OLD973635" id="OLD973635" value="">
              <input type="text" class="form-control" id="ENTRY973635" name="ENTRY973635" tabindex="270" size="50" onblur="TestRegExp(this,/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_\-\+])*@([-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,'Please enter a valid e-mail address.  Here is an example of a valid e-mail address:  jsmith@earthlink.net')" maxlength="255" value="" title="This is usually your 10-digit cell phone number followed by your carrier's URL.  For example, 2395551212@txt.att.net.  A truncated version of group email messages will be sent to this address.">
              <span class="entrypostscript">
              <a href="https://en.wikipedia.org/wiki/SMS_gateway" target="_blank">What's an SMS address?</a>
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY195135">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY195135" style="visibility: hidden">
              *
              </span>
              Email Address
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY195135" id="RVALENTRY195135" value="N">
              <input type="hidden" name="OLD195135" id="OLD195135" value="ashleynaarons@gmail.com">
              <input type="text" class="form-control" id="ENTRY195135" name="ENTRY195135" tabindex="280" size="50" onblur="TestRegExp(this,/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_\-\+])*@([-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,'Please enter a valid e-mail address.  Here is an example of a valid e-mail address:  jsmith@earthlink.net')" maxlength="255" value="ashleynaarons@gmail.com" title="The e-mail address to which all messages should be sent for this person.">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY973535">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY973535" style="visibility: hidden">
              *
              </span>
              Email Address #2
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY973535" id="RVALENTRY973535" value="N">
              <input type="hidden" name="OLD973535" id="OLD973535" value="">
              <input type="text" class="form-control" id="ENTRY973535" name="ENTRY973535" tabindex="290" size="50" onblur="TestRegExp(this,/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_\-\+])*@([-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,'Please enter a valid e-mail address.  Here is an example of a valid e-mail address:  jsmith@earthlink.net')" maxlength="255" value="" title="A secondary e-mail address">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY1932811">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY1932811" style="visibility: hidden">
              *
              </span>
              Don't Send Me The Electronic Newsletter
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY1932811" id="RVALENTRY1932811" value="N">
              <input type="hidden" name="OLD1932811" id="OLD1932811" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="300" value="Y" id="ENTRY1932811" name="ENTRY1932811" size="1" title="Checking this box will prevent the system from sending you an e-mail with the automatically generated newsletter">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY4512511">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY4512511" style="visibility: hidden">
              *
              </span>
              Don't Send Me Event Reminders
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY4512511" id="RVALENTRY4512511" value="N">
              <input type="hidden" name="OLD4512511" id="OLD4512511" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="310" value="Y" id="ENTRY4512511" name="ENTRY4512511" size="1" title="Check this box to prevent the system from sending you messages reminding you of upcoming events">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY4701411">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY4701411" style="visibility: visible">
              *
              </span>
              Don't Send Me Reimbursement Request Notifications
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY4701411" id="RVALENTRY4701411" value="Y">
              <input type="hidden" name="OLD4701411" id="OLD4701411" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="320" value="Y" id="ENTRY4701411" name="ENTRY4701411" size="1" title="If you are the treasurer, use this option to stop the system from sending you email notifications of new requests for expense reimbursement">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY5672711">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY5672711" style="visibility: hidden">
              *
              </span>
              Don't Email Me When Event Signups Change
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY5672711" id="RVALENTRY5672711" value="N">
              <input type="hidden" name="OLD5672711" id="OLD5672711" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="330" value="Y" id="ENTRY5672711" name="ENTRY5672711" size="1" title="Check this box to opt out of receiving email notifications when the signup status changes for members on an upcoming event">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY195658">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY195658" style="visibility: hidden">
              *
              </span>
              Registered Gender
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY195658" id="RVALENTRY195658" value="N">
              <input type="hidden" name="OLD195658" id="OLD195658" value="">
              <span class="text-left" id="SPAN195658" name="SPAN195658">
              <span style="white-space: nowrap;"><input type="radio" id="ENTRY195658" name="ENTRY195658" tabindex="340" onclick="easyFieldExit(this)" value="M">Male</span> &nbsp; <span style="white-space: nowrap;"><input type="radio" id="ENTRY195658" name="ENTRY195658" tabindex="340" onclick="easyFieldExit(this)" value="F">Female</span>
              </span>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY193816">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY193816" style="visibility: hidden">
              *
              </span>
              Date of Birth
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY193816" id="RVALENTRY193816" value="N">
              <input type="hidden" name="OLD193816" id="OLD193816" value="">
              <input type="text" class="form-control" id="ENTRY193816" name="ENTRY193816" tabindex="350" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="This person's date of birth">&nbsp;<a href="#" tabindex="350" onclick="cal.select(window.easyform.ENTRY193816,'ENTRY193816X','MM/dd/yyyy', window.easyform.ENTRY193816.value); return false;" name="ENTRY193816X" id="ENTRY193816X"><img src="images/calendar.gif" name="ENTRY193816I" id="ENTRY193816I"></a>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY465512">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY465512" style="visibility: hidden">
              *
              </span>
              Shirt Size
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY465512" id="RVALENTRY465512" value="N">
              <input type="hidden" name="OLD465512" id="OLD465512" value="0">
              <select id="ENTRY465512" name="ENTRY465512" class="form-control" onblur="TestRegExp(this,'','')" tabindex="360" title="This person's shirt size" size="1">
                <option selected="" value="0"> </option>
                <option value="4">Youth Small</option>
                <option value="5">Youth Medium</option>
                <option value="6">Youth Large</option>
                <option value="1">Adult Small</option>
                <option value="2">Adult Medium</option>
                <option value="3">Adult Large</option>
                <option value="7">Adult X-Large</option>
                <option value="8">Adult 2XL</option>
              </select>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY288801">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY288801" style="visibility: hidden">
              *
              </span>
              School
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY288801" id="RVALENTRY288801" value="N">
              <input type="hidden" name="OLD288801" id="OLD288801" value="">
              <input type="text" class="form-control" id="ENTRY288801" name="ENTRY288801" tabindex="370" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="School attended by this student">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY2888153">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY2888153" style="visibility: hidden">
              *
              </span>
              Grade
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY2888153" id="RVALENTRY2888153" value="N">
              <input type="hidden" name="OLD2888153" id="OLD2888153" value="1">
              <select id="ENTRY2888153" name="ENTRY2888153" class="form-control" onblur="TestRegExp(this,'','')" tabindex="380" title="This student's grade in school" size="1">
                <option value=""> </option>
                <option value="K">K</option>
                <option selected="" value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
              </select>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY944390">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY944390" style="visibility: hidden">
              *
              </span>
              Membership ID
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY944390" id="RVALENTRY944390" value="N">
              <input type="hidden" name="OLD944390" id="OLD944390" value="141145570">
              <input type="text" class="form-control" id="ENTRY944390" name="ENTRY944390" tabindex="390" size="20" onblur="TestRegExp(this,/^[+]?\d\d*$/,'This field only allows numbers')" maxlength="20" value="141145570" title="This person's membership ID number">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY6007716">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY6007716" style="visibility: hidden">
              *
              </span>
              BSA Registration Expires On
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY6007716" id="RVALENTRY6007716" value="N">
              <input type="hidden" name="OLD6007716" id="OLD6007716" value="09/30/2026">
              <input type="text" class="form-control" id="ENTRY6007716" name="ENTRY6007716" tabindex="400" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="09/30/2026" title="This member's BSA registration is active through this date">&nbsp;<a href="#" tabindex="400" onclick="cal.select(window.easyform.ENTRY6007716,'ENTRY6007716X','MM/dd/yyyy', window.easyform.ENTRY6007716.value); return false;" name="ENTRY6007716X" id="ENTRY6007716X"><img src="images/calendar.gif" name="ENTRY6007716I" id="ENTRY6007716I"></a>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY4867311">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY4867311" style="visibility: hidden">
              *
              </span>
              Scout Life?
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY4867311" id="RVALENTRY4867311" value="N">
              <input type="hidden" name="OLD4867311" id="OLD4867311" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="410" value="Y" id="ENTRY4867311" name="ENTRY4867311" size="1" title="Does this scout subscribe to Scout Life magazine?">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY194016">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY194016" style="visibility: hidden">
              *
              </span>
              Membership Start Date
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY194016" id="RVALENTRY194016" value="N">
              <input type="hidden" name="OLD194016" id="OLD194016" value="06/07/2025">
              <input type="text" class="form-control" id="ENTRY194016" name="ENTRY194016" tabindex="420" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="06/07/2025" title="The date this person joined the group.">&nbsp;<a href="#" tabindex="420" onclick="cal.select(window.easyform.ENTRY194016,'ENTRY194016X','MM/dd/yyyy', window.easyform.ENTRY194016.value); return false;" name="ENTRY194016X" id="ENTRY194016X"><img src="images/calendar.gif" name="ENTRY194016I" id="ENTRY194016I"></a>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY195216">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY195216" style="visibility: hidden">
              *
              </span>
              Membership Termination Date
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY195216" id="RVALENTRY195216" value="N">
              <input type="hidden" name="OLD195216" id="OLD195216" value="">
              <input type="text" class="form-control" id="ENTRY195216" name="ENTRY195216" tabindex="430" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="Date this person's membership ended">&nbsp;<a href="#" tabindex="430" onclick="cal.select(window.easyform.ENTRY195216,'ENTRY195216X','MM/dd/yyyy', window.easyform.ENTRY195216.value); return false;" name="ENTRY195216X" id="ENTRY195216X"><img src="images/calendar.gif" name="ENTRY195216I" id="ENTRY195216I"></a>
              <span class="entrypostscript">
              Do not enter a value in this field if this person is currently an active member
              </span>
            </td>
          </tr>
          <tr id="DIVENTRY3824711">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY3824711" style="visibility: hidden">
              *
              </span>
              Alumni?
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY3824711" id="RVALENTRY3824711" value="N">
              <input type="hidden" name="OLD3824711" id="OLD3824711" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="440" value="Y" id="ENTRY3824711" name="ENTRY3824711" size="1" title="Is this former member considered to be an alumni of the group?">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY2881310">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY2881310" style="visibility: hidden">
              *
              </span>
              Prior Experience
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY2881310" id="RVALENTRY2881310" value="N">
              <input type="hidden" name="OLD2881310" id="OLD2881310" value="">
              <textarea class="form-control" cols="50" rows="5" tabindex="450" onblur="TestRegExp(this,'','')" id="ENTRY2881310" name="ENTRY2881310" wrap="virtual" title="Prior experience relevant to this group"></textarea>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY384010">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY384010" style="visibility: hidden">
              *
              </span>
              About Me
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY384010" id="RVALENTRY384010" value="N">
              <input type="hidden" name="OLD384010" id="OLD384010" value="">
              <textarea class="form-control" cols="50" rows="5" tabindex="460" onblur="TestRegExp(this,'','')" id="ENTRY384010" name="ENTRY384010" wrap="virtual" title="A brief biography of this person that is suitable for display on the public web site.  This will be displayed on the leadership page of the public web site."></textarea>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY3824811">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY3824811" style="visibility: hidden">
              *
              </span>
              Don't include on public leaders page
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY3824811" id="RVALENTRY3824811" value="N">
              <input type="hidden" name="OLD3824811" id="OLD3824811" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="470" value="Y" id="ENTRY3824811" name="ENTRY3824811" size="1" title="Don't include this member on the public page that shows the leaders of this group">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY1213516">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY1213516" style="visibility: hidden">
              *
              </span>
              Medical Form Effective Date
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY1213516" id="RVALENTRY1213516" value="N">
              <input type="hidden" name="OLD1213516" id="OLD1213516" value="">
              <input type="text" class="form-control" id="ENTRY1213516" name="ENTRY1213516" tabindex="480" size="12" onblur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" onfocus="FocusTestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')" maxlength="10" value="" title="The effective date of this person's medical form">&nbsp;<a href="#" tabindex="480" onclick="cal.select(window.easyform.ENTRY1213516,'ENTRY1213516X','MM/dd/yyyy', window.easyform.ENTRY1213516.value); return false;" name="ENTRY1213516X" id="ENTRY1213516X"><img src="images/calendar.gif" name="ENTRY1213516I" id="ENTRY1213516I"></a>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY121391">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY121391" style="visibility: hidden">
              *
              </span>
              Health Insurance
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY121391" id="RVALENTRY121391" value="N">
              <input type="hidden" name="OLD121391" id="OLD121391" value="">
              <input type="text" class="form-control" id="ENTRY121391" name="ENTRY121391" tabindex="490" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The health insurance company and policy for this individual">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY12140149">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY12140149" style="visibility: hidden">
              *
              </span>
              Allergies
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY12140149" id="RVALENTRY12140149" value="N">
              <input type="hidden" name="OLD12140149" id="OLD12140149" value="">
              <input type="text" class="form-control" id="ENTRY12140149" name="ENTRY12140149" tabindex="500" size="50" onblur="TestRegExp(this,'','')" maxlength="256" value="" title="Allergies">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY54540149">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY54540149" style="visibility: hidden">
              *
              </span>
              Dietary Restrictions
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY54540149" id="RVALENTRY54540149" value="N">
              <input type="hidden" name="OLD54540149" id="OLD54540149" value="">
              <input type="text" class="form-control" id="ENTRY54540149" name="ENTRY54540149" tabindex="510" size="50" onblur="TestRegExp(this,'','')" maxlength="256" value="" title="">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr>
            <td class="bodyheading text-center" colspan="2">
              Emergency Contacts
              <br><br>
            </td>
          </tr>
          <tr id="DIVENTRY121471">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY121471" style="visibility: hidden">
              *
              </span>
              Emergency Contact 1 Name
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY121471" id="RVALENTRY121471" value="N">
              <input type="hidden" name="OLD121471" id="OLD121471" value="">
              <input type="text" class="form-control" id="ENTRY121471" name="ENTRY121471" tabindex="520" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The name of an emergency contact for this individual">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY1214892">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY1214892" style="visibility: hidden">
              *
              </span>
              Emergency Contact 1 Phone
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY1214892" id="RVALENTRY1214892" value="N">
              <input type="hidden" name="OLD1214892" id="OLD1214892" value="">
              <input type="text" class="form-control" id="ENTRY1214892" name="ENTRY1214892" tabindex="530" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="The telephone number for this emergency contact">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY121491">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY121491" style="visibility: hidden">
              *
              </span>
              Emergency Contact 2 Name
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY121491" id="RVALENTRY121491" value="N">
              <input type="hidden" name="OLD121491" id="OLD121491" value="">
              <input type="text" class="form-control" id="ENTRY121491" name="ENTRY121491" tabindex="540" size="50" onblur="TestRegExp(this,'','')" maxlength="100" value="" title="The name of a second emergency contact for this individual">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY1215092">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY1215092" style="visibility: hidden">
              *
              </span>
              Emergency Contact 2 Phone
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY1215092" id="RVALENTRY1215092" value="N">
              <input type="hidden" name="OLD1215092" id="OLD1215092" value="">
              <input type="text" class="form-control" id="ENTRY1215092" name="ENTRY1215092" tabindex="550" size="50" onblur="TestRegExp(this,'','')" maxlength="50" value="" title="The telephone number for a second emergency contact for this individual">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr>
            <td class="bodyheading text-center" colspan="2">
              Web Host Services Administrative Contact
              <br><br>
            </td>
          </tr>
          <tr id="DIVENTRY4979011">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY4979011" style="visibility: hidden">
              *
              </span>
              Send me the Web Host Services monthly newsletter
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY4979011" id="RVALENTRY4979011" value="N">
              <input type="hidden" name="OLD4979011" id="OLD4979011" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="560" value="Y" id="ENTRY4979011" name="ENTRY4979011" size="1" title="Check this box to receive the monthly newsletter announcement email from the company that hosts this website, Web Host Services.">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr id="DIVENTRY4979211">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY4979211" style="visibility: hidden">
              *
              </span>
              Notify me when our website subscription is up for renewal
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY4979211" id="RVALENTRY4979211" value="N">
              <input type="hidden" name="OLD4979211" id="OLD4979211" value="N">
              <input type="checkbox" onclick="easyFieldExit(this)" tabindex="570" value="Y" id="ENTRY4979211" name="ENTRY4979211" size="1" title="Check this box to receive a reminder when our website subscription is up for renewal">
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          <tr>
            <td class="bodyheading text-center" colspan="2">
              <br>Notes
              <br><br>
            </td>
          </tr>
          <tr id="DIVENTRY46552127">
            <td class="text-right">
              <label class="control-label">
              <span class="RequiredIndicator" id="RDIVENTRY46552127" style="visibility: hidden">
              *
              </span>
              Notes
              </label>
            </td>
            <td class="text-left">
              <input type="hidden" name="RVALENTRY46552127" id="RVALENTRY46552127" value="N">
              <input type="hidden" name="OLD46552127" id="OLD46552127" value="">
              <input type="hidden" id="HTMLEditKeyENTRY46552127" value="HTMLEditENTRY46552127">
              <textarea id="ENTRY46552127" name="ENTRY46552127" style="visibility: hidden; display: none;"></textarea><div id="cke_ENTRY46552127" class="cke_1 cke cke_reset cke_chrome cke_editor_ENTRY46552127 cke_ltr cke_browser_webkit cke_hidpi" dir="ltr" lang="en" role="application" aria-labelledby="cke_ENTRY46552127_arialbl"><span id="cke_ENTRY46552127_arialbl" class="cke_voice_label">Rich Text Editor, ENTRY46552127</span><div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;"><span id="cke_9" class="cke_voice_label">Editor toolbars</span><span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_9" onmousedown="return false;"><span id="cke_13" class="cke_toolbar" aria-labelledby="cke_13_label" role="toolbar"><span id="cke_13_label" class="cke_voice_label">Basic Styles</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_14" class="cke_button cke_button__bold cke_button_off" href="javascript:void('Bold')" title="Bold" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -24px;background-size:16px;">&nbsp;</span><span id="cke_14_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Bold</span></a><a id="cke_15" class="cke_button cke_button__italic cke_button_off" href="javascript:void('Italic')" title="Italic" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_15_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(5,event);" onfocus="return CKEDITOR.tools.callFunction(6,event);" onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -48px;background-size:16px;">&nbsp;</span><span id="cke_15_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Italic</span></a><a id="cke_16" class="cke_button cke_button__underline cke_button_off" href="javascript:void('Underline')" title="Underline" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_16_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(8,event);" onfocus="return CKEDITOR.tools.callFunction(9,event);" onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span class="cke_button_icon cke_button__underline_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -144px;background-size:16px;">&nbsp;</span><span id="cke_16_label" class="cke_button_label cke_button__underline_label" aria-hidden="false">Underline</span></a><a id="cke_17" class="cke_button cke_button__strike cke_button_off" href="javascript:void('Strikethrough')" title="Strikethrough" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(11,event);" onfocus="return CKEDITOR.tools.callFunction(12,event);" onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span class="cke_button_icon cke_button__strike_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -72px;background-size:16px;">&nbsp;</span><span id="cke_17_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">Strikethrough</span></a><a id="cke_18" class="cke_button cke_button__subscript cke_button_off" href="javascript:void('Subscript')" title="Subscript" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span class="cke_button_icon cke_button__subscript_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -96px;background-size:16px;">&nbsp;</span><span id="cke_18_label" class="cke_button_label cke_button__subscript_label" aria-hidden="false">Subscript</span></a><a id="cke_19" class="cke_button cke_button__superscript cke_button_off" href="javascript:void('Superscript')" title="Superscript" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_19_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(17,event);" onfocus="return CKEDITOR.tools.callFunction(18,event);" onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span class="cke_button_icon cke_button__superscript_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -120px;background-size:16px;">&nbsp;</span><span id="cke_19_label" class="cke_button_label cke_button__superscript_label" aria-hidden="false">Superscript</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_20" class="cke_button cke_button__removeformat cke_button_off" href="javascript:void('Remove Format')" title="Remove Format" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_20_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(20,event);" onfocus="return CKEDITOR.tools.callFunction(21,event);" onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span class="cke_button_icon cke_button__removeformat_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -792px;background-size:16px;">&nbsp;</span><span id="cke_20_label" class="cke_button_label cke_button__removeformat_label" aria-hidden="false">Remove Format</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_21" class="cke_toolbar" aria-labelledby="cke_21_label" role="toolbar"><span id="cke_21_label" class="cke_voice_label">Paragraph</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_22" class="cke_button cke_button__numberedlist cke_button_off" href="javascript:void('Insert/Remove Numbered List')" title="Insert/Remove Numbered List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_22_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(23,event);" onfocus="return CKEDITOR.tools.callFunction(24,event);" onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -648px;background-size:16px;">&nbsp;</span><span id="cke_22_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Insert/Remove Numbered List</span></a><a id="cke_23" class="cke_button cke_button__bulletedlist cke_button_off" href="javascript:void('Insert/Remove Bulleted List')" title="Insert/Remove Bulleted List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_23_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(26,event);" onfocus="return CKEDITOR.tools.callFunction(27,event);" onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -600px;background-size:16px;">&nbsp;</span><span id="cke_23_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Insert/Remove Bulleted List</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_24" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('Decrease Indent')" title="Decrease Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_24_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(29,event);" onfocus="return CKEDITOR.tools.callFunction(30,event);" onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span class="cke_button_icon cke_button__outdent_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -456px;background-size:16px;">&nbsp;</span><span id="cke_24_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">Decrease Indent</span></a><a id="cke_25" class="cke_button cke_button__indent cke_button_off" href="javascript:void('Increase Indent')" title="Increase Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(32,event);" onfocus="return CKEDITOR.tools.callFunction(33,event);" onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span class="cke_button_icon cke_button__indent_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -408px;background-size:16px;">&nbsp;</span><span id="cke_25_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">Increase Indent</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_26" class="cke_button cke_button__justifyleft cke_button_off" href="javascript:void('Align Left')" title="Align Left" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_26_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(35,event);" onfocus="return CKEDITOR.tools.callFunction(36,event);" onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span class="cke_button_icon cke_button__justifyleft_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1152px;background-size:16px;">&nbsp;</span><span id="cke_26_label" class="cke_button_label cke_button__justifyleft_label" aria-hidden="false">Align Left</span></a><a id="cke_27" class="cke_button cke_button__justifycenter cke_button_off" href="javascript:void('Center')" title="Center" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_27_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(38,event);" onfocus="return CKEDITOR.tools.callFunction(39,event);" onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span class="cke_button_icon cke_button__justifycenter_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1128px;background-size:16px;">&nbsp;</span><span id="cke_27_label" class="cke_button_label cke_button__justifycenter_label" aria-hidden="false">Center</span></a><a id="cke_28" class="cke_button cke_button__justifyright cke_button_off" href="javascript:void('Align Right')" title="Align Right" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_28_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(41,event);" onfocus="return CKEDITOR.tools.callFunction(42,event);" onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span class="cke_button_icon cke_button__justifyright_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1176px;background-size:16px;">&nbsp;</span><span id="cke_28_label" class="cke_button_label cke_button__justifyright_label" aria-hidden="false">Align Right</span></a><a id="cke_29" class="cke_button cke_button__justifyblock cke_button_off" href="javascript:void('Justify')" title="Justify" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_29_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(44,event);" onfocus="return CKEDITOR.tools.callFunction(45,event);" onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span class="cke_button_icon cke_button__justifyblock_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1104px;background-size:16px;">&nbsp;</span><span id="cke_29_label" class="cke_button_label cke_button__justifyblock_label" aria-hidden="false">Justify</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_30" class="cke_toolbar" aria-labelledby="cke_30_label" role="toolbar"><span id="cke_30_label" class="cke_voice_label">Styles</span><span class="cke_toolbar_start"></span><span id="cke_10" class="cke_combo cke_combo__format cke_combo_off" role="presentation"><span id="cke_10_label" class="cke_combo_label">Format</span><a class="cke_combo_button" title="Paragraph Format" tabindex="-1" href="javascript:void('Paragraph Format')" hidefocus="true" role="button" aria-labelledby="cke_10_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(48,event,this);" onfocus="return CKEDITOR.tools.callFunction(49,event);" onclick="CKEDITOR.tools.callFunction(47,this);return false;"><span id="cke_10_text" class="cke_combo_text cke_combo_inlinelabel">Format</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_11" class="cke_combo cke_combo__font cke_combo_off" role="presentation"><span id="cke_11_label" class="cke_combo_label">Font</span><a class="cke_combo_button" title="Font Name" tabindex="-1" href="javascript:void('Font Name')" hidefocus="true" role="button" aria-labelledby="cke_11_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(51,event,this);" onfocus="return CKEDITOR.tools.callFunction(52,event);" onclick="CKEDITOR.tools.callFunction(50,this);return false;"><span id="cke_11_text" class="cke_combo_text cke_combo_inlinelabel">Font</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_12" class="cke_combo cke_combo__fontsize cke_combo_off" role="presentation"><span id="cke_12_label" class="cke_combo_label">Size</span><a class="cke_combo_button" title="Font Size" tabindex="-1" href="javascript:void('Font Size')" hidefocus="true" role="button" aria-labelledby="cke_12_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(54,event,this);" onfocus="return CKEDITOR.tools.callFunction(55,event);" onclick="CKEDITOR.tools.callFunction(53,this);return false;"><span id="cke_12_text" class="cke_combo_text cke_combo_inlinelabel">Size</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_31" class="cke_toolbar" aria-labelledby="cke_31_label" role="toolbar"><span id="cke_31_label" class="cke_voice_label">Colors</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_32" class="cke_button cke_button__textcolor cke_button_off" href="javascript:void('Text Color')" title="Text Color" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_32_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(56,event);" onfocus="return CKEDITOR.tools.callFunction(57,event);" onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span class="cke_button_icon cke_button__textcolor_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1080px;background-size:16px;">&nbsp;</span><span id="cke_32_label" class="cke_button_label cke_button__textcolor_label" aria-hidden="false">Text Color</span><span class="cke_button_arrow"></span></a><a id="cke_33" class="cke_button cke_button__bgcolor cke_button_off" href="javascript:void('Background Color')" title="Background Color" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_33_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(59,event);" onfocus="return CKEDITOR.tools.callFunction(60,event);" onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span class="cke_button_icon cke_button__bgcolor_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1056px;background-size:16px;">&nbsp;</span><span id="cke_33_label" class="cke_button_label cke_button__bgcolor_label" aria-hidden="false">Background Color</span><span class="cke_button_arrow"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_34" class="cke_toolbar" aria-labelledby="cke_34_label" role="toolbar"><span id="cke_34_label" class="cke_voice_label">Clipboard/Undo</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_35" class="cke_button cke_button__cut cke_button_disabled " href="javascript:void('Cut')" title="Cut" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_35_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(62,event);" onfocus="return CKEDITOR.tools.callFunction(63,event);" onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span class="cke_button_icon cke_button__cut_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -264px;background-size:16px;">&nbsp;</span><span id="cke_35_label" class="cke_button_label cke_button__cut_label" aria-hidden="false">Cut</span></a><a id="cke_36" class="cke_button cke_button__copy cke_button_disabled " href="javascript:void('Copy')" title="Copy" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_36_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(65,event);" onfocus="return CKEDITOR.tools.callFunction(66,event);" onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span class="cke_button_icon cke_button__copy_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -216px;background-size:16px;">&nbsp;</span><span id="cke_36_label" class="cke_button_label cke_button__copy_label" aria-hidden="false">Copy</span></a><a id="cke_37" class="cke_button cke_button__paste cke_button_off" href="javascript:void('Paste')" title="Paste" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_37_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(68,event);" onfocus="return CKEDITOR.tools.callFunction(69,event);" onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span class="cke_button_icon cke_button__paste_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -312px;background-size:16px;">&nbsp;</span><span id="cke_37_label" class="cke_button_label cke_button__paste_label" aria-hidden="false">Paste</span></a><a id="cke_38" class="cke_button cke_button__pastetext cke_button_off" href="javascript:void('Paste as plain text')" title="Paste as plain text" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_38_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(71,event);" onfocus="return CKEDITOR.tools.callFunction(72,event);" onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span class="cke_button_icon cke_button__pastetext_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -720px;background-size:16px;">&nbsp;</span><span id="cke_38_label" class="cke_button_label cke_button__pastetext_label" aria-hidden="false">Paste as plain text</span></a><a id="cke_39" class="cke_button cke_button__pastefromword cke_button_off" href="javascript:void('Paste from Word')" title="Paste from Word" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_39_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(74,event);" onfocus="return CKEDITOR.tools.callFunction(75,event);" onclick="CKEDITOR.tools.callFunction(76,this);return false;"><span class="cke_button_icon cke_button__pastefromword_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -768px;background-size:16px;">&nbsp;</span><span id="cke_39_label" class="cke_button_label cke_button__pastefromword_label" aria-hidden="false">Paste from Word</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_40" class="cke_button cke_button__undo cke_button_disabled " href="javascript:void('Undo')" title="Undo" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_40_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(77,event);" onfocus="return CKEDITOR.tools.callFunction(78,event);" onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span class="cke_button_icon cke_button__undo_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -1008px;background-size:16px;">&nbsp;</span><span id="cke_40_label" class="cke_button_label cke_button__undo_label" aria-hidden="false">Undo</span></a><a id="cke_41" class="cke_button cke_button__redo cke_button_disabled " href="javascript:void('Redo')" title="Redo" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_41_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(80,event);" onfocus="return CKEDITOR.tools.callFunction(81,event);" onclick="CKEDITOR.tools.callFunction(82,this);return false;"><span class="cke_button_icon cke_button__redo_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -960px;background-size:16px;">&nbsp;</span><span id="cke_41_label" class="cke_button_label cke_button__redo_label" aria-hidden="false">Redo</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_42" class="cke_toolbar" aria-labelledby="cke_42_label" role="toolbar"><span id="cke_42_label" class="cke_voice_label">Links</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_43" class="cke_button cke_button__link cke_button_off" href="javascript:void('Link')" title="Link" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_43_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(83,event);" onfocus="return CKEDITOR.tools.callFunction(84,event);" onclick="CKEDITOR.tools.callFunction(85,this);return false;"><span class="cke_button_icon cke_button__link_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -528px;background-size:16px;">&nbsp;</span><span id="cke_43_label" class="cke_button_label cke_button__link_label" aria-hidden="false">Link</span></a><a id="cke_44" class="cke_button cke_button__unlink cke_button_disabled " href="javascript:void('Unlink')" title="Unlink" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_44_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(86,event);" onfocus="return CKEDITOR.tools.callFunction(87,event);" onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span class="cke_button_icon cke_button__unlink_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -552px;background-size:16px;">&nbsp;</span><span id="cke_44_label" class="cke_button_label cke_button__unlink_label" aria-hidden="false">Unlink</span></a><a id="cke_45" class="cke_button cke_button__anchor cke_button_off" href="javascript:void('Anchor')" title="Anchor" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_45_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(89,event);" onfocus="return CKEDITOR.tools.callFunction(90,event);" onclick="CKEDITOR.tools.callFunction(91,this);return false;"><span class="cke_button_icon cke_button__anchor_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -504px;background-size:16px;">&nbsp;</span><span id="cke_45_label" class="cke_button_label cke_button__anchor_label" aria-hidden="false">Anchor</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_46" class="cke_toolbar" aria-labelledby="cke_46_label" role="toolbar"><span id="cke_46_label" class="cke_voice_label">Insert</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_47" class="cke_button cke_button__image cke_button_off" href="javascript:void('Image')" title="Image" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_47_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(92,event);" onfocus="return CKEDITOR.tools.callFunction(93,event);" onclick="CKEDITOR.tools.callFunction(94,this);return false;"><span class="cke_button_icon cke_button__image_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -360px;background-size:16px;">&nbsp;</span><span id="cke_47_label" class="cke_button_label cke_button__image_label" aria-hidden="false">Image</span></a><a id="cke_48" class="cke_button cke_button__table cke_button_off" href="javascript:void('Table')" title="Table" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_48_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(95,event);" onfocus="return CKEDITOR.tools.callFunction(96,event);" onclick="CKEDITOR.tools.callFunction(97,this);return false;"><span class="cke_button_icon cke_button__table_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -912px;background-size:16px;">&nbsp;</span><span id="cke_48_label" class="cke_button_label cke_button__table_label" aria-hidden="false">Table</span></a><a id="cke_49" class="cke_button cke_button__horizontalrule cke_button_off" href="javascript:void('Insert Horizontal Line')" title="Insert Horizontal Line" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_49_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(98,event);" onfocus="return CKEDITOR.tools.callFunction(99,event);" onclick="CKEDITOR.tools.callFunction(100,this);return false;"><span class="cke_button_icon cke_button__horizontalrule_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -336px;background-size:16px;">&nbsp;</span><span id="cke_49_label" class="cke_button_label cke_button__horizontalrule_label" aria-hidden="false">Insert Horizontal Line</span></a><a id="cke_50" class="cke_button cke_button__specialchar cke_button_off" href="javascript:void('Insert Special Character')" title="Insert Special Character" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_50_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(101,event);" onfocus="return CKEDITOR.tools.callFunction(102,event);" onclick="CKEDITOR.tools.callFunction(103,this);return false;"><span class="cke_button_icon cke_button__specialchar_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -864px;background-size:16px;">&nbsp;</span><span id="cke_50_label" class="cke_button_label cke_button__specialchar_label" aria-hidden="false">Insert Special Character</span></a><a id="cke_51" class="cke_button cke_button__youtube cke_button_off" href="javascript:void('Embed YouTube Video')" title="Embed YouTube Video" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_51_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(104,event);" onfocus="return CKEDITOR.tools.callFunction(105,event);" onclick="CKEDITOR.tools.callFunction(106,this);return false;"><span class="cke_button_icon cke_button__youtube_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/youtube/images/icon.png?t=G87E');background-position:0 undefinedpx;background-size:16px;">&nbsp;</span><span id="cke_51_label" class="cke_button_label cke_button__youtube_label" aria-hidden="false">Embed YouTube Video</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_52" class="cke_toolbar" aria-labelledby="cke_52_label" role="toolbar"><span id="cke_52_label" class="cke_voice_label">Tools</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_53" class="cke_button cke_button__maximize cke_button_off" href="javascript:void('Maximize')" title="Maximize" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_53_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(107,event);" onfocus="return CKEDITOR.tools.callFunction(108,event);" onclick="CKEDITOR.tools.callFunction(109,this);return false;"><span class="cke_button_icon cke_button__maximize_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -672px;background-size:16px;">&nbsp;</span><span id="cke_53_label" class="cke_button_label cke_button__maximize_label" aria-hidden="false">Maximize</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_54" class="cke_toolbar" aria-labelledby="cke_54_label" role="toolbar"><span id="cke_54_label" class="cke_voice_label">Document</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_55" class="cke_button cke_button__source cke_button_off" href="javascript:void('Source')" title="Source" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_55_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(110,event);" onfocus="return CKEDITOR.tools.callFunction(111,event);" onclick="CKEDITOR.tools.callFunction(112,this);return false;"><span class="cke_button_icon cke_button__source_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 -840px;background-size:16px;">&nbsp;</span><span id="cke_55_label" class="cke_button_label cke_button__source_label" aria-hidden="false">Source</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_56" class="cke_toolbar" aria-labelledby="cke_56_label" role="toolbar"><span id="cke_56_label" class="cke_voice_label">others</span><span class="cke_toolbar_start"></span><span class="cke_toolbar_end"></span></span><span id="cke_59" class="cke_toolbar" aria-labelledby="cke_59_label" role="toolbar"><span id="cke_59_label" class="cke_voice_label">about</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_60" class="cke_button cke_button__about cke_button_off" href="javascript:void('About CKEditor')" title="About CKEditor" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_60_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(119,event);" onfocus="return CKEDITOR.tools.callFunction(120,event);" onclick="CKEDITOR.tools.callFunction(121,this);return false;"><span class="cke_button_icon cke_button__about_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/icons_hidpi.png?t=G87E');background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_60_label" class="cke_button_label cke_button__about_label" aria-hidden="false">About CKEditor</span></a></span><span class="cke_toolbar_end"></span></span></span></span><div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 200px;"><span id="cke_65" class="cke_voice_label">Press ALT 0 for help</span><iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" style="width: 100%; height: 100%;" title="Rich Text Editor, ENTRY46552127" aria-describedby="cke_65" tabindex="0" allowtransparency="true"></iframe></div><span id="cke_1_bottom" class="cke_bottom cke_reset_all" role="presentation" style="user-select: none;"><span id="cke_1_resizer" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" title="Resize" onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span id="cke_1_path_label" class="cke_voice_label">Elements path</span><span id="cke_1_path" class="cke_path" role="group" aria-labelledby="cke_1_path_label"><span class="cke_path_empty">&nbsp;</span></span><span class="cke_toolgroup" style="float: right; margin: -3px 10px 0px 0px;"><a id="cke_58" class="cke_button cke_button__doksoft_backup_save cke_button_off" href="javascript:void('Perform backup now')" title="Perform backup now" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_58_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(116,event);" onfocus="return CKEDITOR.tools.callFunction(117,event);" onclick="CKEDITOR.tools.callFunction(118,this);return false;"><span class="cke_button_icon cke_button__doksoft_backup_save_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/doksoft_backup/icons/doksoft_backup_save.png?t=G87E');background-position:0 undefinedpx;background-size:16px;">&nbsp;</span><span id="cke_58_label" class="cke_button_label cke_button__doksoft_backup_save_label" aria-hidden="false">{label}</span></a><a id="cke_57" class="cke_button cke_button__doksoft_backup_load cke_button_off" href="javascript:void('Restore backup...')" title="Restore backup..." tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_57_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(113,event);" onfocus="return CKEDITOR.tools.callFunction(114,event);" onclick="CKEDITOR.tools.callFunction(115,this);return false;"><span class="cke_button_icon cke_button__doksoft_backup_load_icon" style="background-image:url('https://www.troopwebhostcs.org/ckeditor/plugins/doksoft_backup/icons/doksoft_backup_load.png?t=G87E');background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_57_label" class="cke_button_label cke_button__doksoft_backup_load_label" aria-hidden="false" style="display: inline-block !important">Restore</span></a></span></span></div></div>
              <script>
                CKEDITOR.replace( 'ENTRY46552127', {
                 extraPlugins: 'doksoft_backup,uploadimage',
                    toolbar_name: 'doksoft_backup_save,doksoft_backup_load',
                    imageUploadUrl: 'UploadImage.aspx?max=1200'
                });
                  CKEDITOR.disableAutoInline = true;
                  CKEDITOR.config.removePlugins = 'scayt,wsc,contextmenu';
              </script>
              <span class="entrypostscript">

              </span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs314">
    <div class="container-fluid container-flex">
      <div class="center-block">
        <div class="text-center">
          <span style="display:inline;">
          <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="590" id="BUTTON93" type="button" name="save exit" title="Save this information to the database and exit from this page" value="Save &amp; Exit" onclick="LinkTo('/home/home.php','_top');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="600" id="BUTTON94" type="button" name="cancel" title="Exit without saving this information" value="Cancel" onclick="buttonlink(this,'N');">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-warning" onmouseover="SetAction(this)" onmouseout="ResetAction()" type="reset" tabindex="610" id="BUTTON95" title="Discard the information that you entered on this page and restore the previous values" value="Reset" name="BUTTON95">
          </span>
          <span style="display:inline;">
          <input class="btn btn-sm btn-success" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="620" id="BUTTON96" type="button" name="save add child" title="Add Relationship" value="Add Relationship" onclick="buttonlink(this,'N');">
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="new-row" id="fs480">
    <div class="container-fluid container-flex">
      <div class="center-block table-responsive">
        <table class="table-striped table-bordered table-condensed table-curved sortable" id="sortablegrid480">
          <thead>
          <tr>
            <input type="hidden" name="ROWCOUNTCB480" id="ROWCOUNTCB480" value="2">
            <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 0);return false;">Relative<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
            <th><a href="#" class="sortheader" onclick="ts_resortTable(this, 1);return false;">Relationship<span class="sortarrow"><img border="0" src="1.gif" alt="↓"></span></a></th>
            <th class="unsortable">
            &nbsp;
            </th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="text-center " id="TD480ROW0DATA2682">
              Ashley  Aarons
            </td>
            <td class="text-center " id="TD480ROW0DATA2683">
              Parent/Guardian
            </td>
            <td class="text-center " id="TD480ROW0DATA3038">
              <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="630" id="BUTTON99" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=5788&amp;Form_ID=205&amp;FK=1018&amp;ID=408&amp;Stack=3','');">
            </td>
          </tr>
          <tr>
            <td class="text-center " id="TD480ROW1DATA2682">
              Stephen  Aarons
            </td>
            <td class="text-center " id="TD480ROW1DATA2683">
              Parent/Guardian
            </td>
            <td class="text-center " id="TD480ROW1DATA3038">
              <input class="btn btn-sm btn-danger" onmouseover="SetAction(this)" onmouseout="ResetAction()" tabindex="640" id="BUTTON99" type="button" name="delete" title="Delete this row permanently from the database" value="Delete" onclick="LinkTo('FormDelete.aspx?Menu_Item_ID=5788&amp;Form_ID=205&amp;FK=1018&amp;ID=450&amp;Stack=3','');">
            </td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
            <td colspan="3" class="text-center">
              <input type="button" value="Print (Export to PDF)" onclick="window.open('FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=127&amp;ID=1018&amp;Stack=2&amp;SectionID=480&amp;ReportFormat=PDF','_blank');"> &nbsp; &nbsp; <input type="button" value="Open in Excel" onclick="window.open('FormReport.aspx?Menu_Item_ID=5788&amp;Form_ID=127&amp;ID=1018&amp;Stack=2&amp;SectionID=480&amp;ReportFormat=XLS','_blank');">
            </td>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <input type="hidden" name="FirstControl" id="FirstControl" value="BUTTON1">
  </form>
  <div style="height: 100px;">&nbsp;</div>


</body></html>