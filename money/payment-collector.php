
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Begin Payment Collection</title>
<link rel="stylesheet" type="text/css" href="SalesBooth.css">
<script language="JavaScript" src="assets/js/PaymentCollectorV2.js">
</script>
<script language="JavaScript" src="/assets/js/PaymentCollectorV2.js">
</script>
</head>
<body>
<form action="PaymentCollector.aspx" method="post" name="easyform" id="easyform">
<input type=hidden name="Platform" id="Platform" value="OGO">
<input type=hidden name="Selected_Action" id="Selected_Action" value="">
<input type=hidden name="Last_Action" id="Last_Action" value="">
<input type=hidden name="Hover_Action" id="Hover_Action" value="">
<input type=hidden name="Selected_Button_ID" id="Selected_Button_ID" value="">
<input type=hidden name="Menu_Item_ID" id="Menu_Item_ID" value="4995">
<input type=hidden name="Form_ID" id="Form_ID" value="5738">
<input type=hidden name="User_Database_ID" id="User_Database_ID" value="2840">
<input type=hidden name="SessionCounter" id="SessionCounter" value="1">
<input type=hidden name="TotalAmount" id="TotalAmount" value="0">
<input type=hidden name="Link_To_Menu_Item_ID" id="Link_To_Menu_Item_ID" value="">
<input type=hidden name="Pass" id="Pass" value="1">
<input type=hidden name="Stack" id="Stack" value="1">
<input type=hidden name="reference" id="reference" value="">
<input type=hidden name="merchantEmail" id="merchantEmail" value="">
<input type=hidden name="returnUrl" id="returnUrl" value="">
<div class="mainSection" style="display:inline;float:left;width:90%;">
  <div class="headingSection">
    Payment Collector<br><span style="font-size: 75%; font-style: italic;">Collect payments to deposit to member accounts</span>
  </div>
  <div style="width:99%;">
    <table class="paymentTable">
      <tr id="RowDepositDate" >
        <td style="text-align:right;">
          When you do plan to deposit cash and checks collected today?
        </td>
        <td>
          <input type="text" name="DepositDate" id="DepositDate" style="width:10em;"  OnBlur="TestRegExp(this,/^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/,'Please enter a valid date.')"   value="8/27/2026">
        </td>
      </tr>
    </table>
  </div>
  <div class="buttonSection" style="display:block;">
    <input type="button" id="Continue" value="Continue" class="orderButton" onclick="submitForm('Launch');">
  </div>
</div>
</form>
</body>
</html>
