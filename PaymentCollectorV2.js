// V1  2/7/2020  jc  Copied SalesBoothV6.js


function searchNames(obj) {
    var searchString = obj.value;
    searchString = searchString.toUpperCase();
    var personCount = document.getElementById("PersonCount").value;
    var personTR;
    var personTD;
    var personName;
    //var matchCount = 0;
    //var matchRowNumber = 0;
    //var matchPersonID = 0;
    for (i = 0; i < personCount; i++) {
        personTR = document.getElementById("RowPerson" + i);
        personTD = document.getElementById("CellPerson" + i);
        personName = personTD.innerHTML;
        personName = personName.toUpperCase();
        if (personName.includes(searchString)) {
            personTR.style.display = "table-row";
            //matchCount = matchCount + 1;
            //matchRowNumber = i;
        }
        else {
            personTR.style.display = "none";
        }
    }
    //if (matchCount == 1) {
    //    matchPersonID = document.getElementById("CellPersonID" + matchRowNumber).value;
    //    matchObj = document.getElementById("CellPerson" + matchRowNumber);
    //    selectPerson(matchObj, matchPersonID);
    //}
}

function selectPerson(obj, personID) {
    var platform = document.getElementById("Platform").value;
    if (platform == "TWH") {
        showSubaccountBalances(personID);
    }
    var personName = obj.innerHTML;
    var balanceObjID = obj.id;
    balanceObjID = balanceObjID.replace("CellPerson", "CellPersonBalance")
    personBalance = document.getElementById(balanceObjID).value;
    if (personBalance.substr(0, 1) == "-") {
        personBalance = '<span style="color:red;">' + personBalance + '</span>';
    }
    else {
        personBalance = '$' + personBalance;
    }
    document.getElementById("Selected_Person_ID").value = personID;
    document.getElementById("CellName").innerHTML = personName + ' &nbsp; ' + personBalance;
    document.getElementById("RowHeading").style.display = "none";
    document.getElementById("RowSearch").style.display = "none";
    document.getElementById("RowName").style.display = "table-row";
    document.getElementById("RowAmount").style.display = "table-row";
    document.getElementById("PaymentButtons").style.display = "block";

    document.getElementById("PersonSection").style.display = "none";
    if (platform == "TWH") {
        document.getElementById("RowSubaccount").style.display = "table-row";
        document.getElementById("SubaccountSection").style.display = "inline-block";
    }    
    document.getElementById("Amount").focus();
}

function selectSubaccount(rowID) {
    var subaccountName = document.getElementById("CellSubaccount" + rowID).innerHTML;
    var subaccountID = document.getElementById("CellSubaccountID" + rowID).value;
    document.getElementById("Selected_Subaccount_Type_ID").value = subaccountID;
    document.getElementById("CellSubaccount").innerHTML = subaccountName;
    document.getElementById("Amount").focus();
}

function showSubaccountBalances(personID) {
    var pl = new SOAPClientParameters();
    var userDB = document.getElementById("User_Database_ID").value;
    pl.add("User_Database_ID", userDB);
    pl.add("Person_ID", personID);

    SOAPClient.invoke("EasyWebService.asmx", "GetSubaccountBalances", pl, true, ReceiveSubaccountList);
    return;
}

function ReceiveSubaccountList(val) {
    var SelectedPersonID = document.getElementById("Selected_Person_ID").value;
    var SubaccountID;
    var Balance;
    var PersonID;
    var ErrorMessage;
    var rowcount = document.getElementById("SubaccountCount").value;

    for (i = 0; i < val.length; i++) {
        try {
            ErrorMessage = val[i].ErrorMsg;
            if (ErrorMessage == null) {
                ErrorMessage = "";
            }
        }
        catch (err) {
            ErrorMessage = '';
        }
        if (ErrorMessage != '') {
            window.alert("Internal failure: " & ErrorMessage)
        }
        else {
            SubaccountID = val[i].SubaccountID;
            Balance = val[i].SubaccountBalance;
            PersonID = val[i].PersonID;
            if (PersonID == SelectedPersonID) {
                for (x = 0; x < rowcount; x++) {
                    if (document.getElementById("CellSubaccountID" + x).value == SubaccountID) {
                        subObj = document.getElementById("CellSubaccountBalance" + x);
                        subObj.innerHTML = Balance;
                        x = rowcount;
                    }
                }
            }
        }
    }
}



function updateCashPresets(totalAmount) {
    //  First preset clears the current cash value
    var html = '<a onclick="setCashAmount(\'0\')">clear</a>';

    //  Second preset is exact change
    var amount = convertToDollars(totalAmount, false);
    html = html + ' &nbsp; <a onclick="setCashAmount(\'' + amount + '\')">' + amount + '</a>';

    //  Third preset is the next higher dollar amount, if the total included pennies
    var pennies = amount.substr(amount.length - 2);
    if (pennies != '00') {
        var dollars = amount.substring(0, amount.length - 3);
        var dollarsNum = parseInt(dollars);
        dollarsNum = dollarsNum + 1;
        dollarsNum = dollarsNum * 100;
        amount = convertToDollars(dollarsNum);
        html = html + ' &nbsp; <a onclick="setCashAmount(\'' + amount + '\')">' + amount + '</a>';
    }

    //  Fourth preset is the next multiple of 5
    var nextAmount = computeNextPreset(amount, 5);
    if (convertToPennies(nextAmount) > convertToPennies(amount)) {
        amount = nextAmount;
        html = html + ' &nbsp; <a onclick="setCashAmount(\'' + amount + '\')">' + amount + '</a>';
    }

    //  Fifth preset is the next multiple of 10
    var nextAmount = computeNextPreset(amount, 10);
    if (convertToPennies(nextAmount) > convertToPennies(amount)) {
        amount = nextAmount;
        html = html + ' &nbsp; <a onclick="setCashAmount(\'' + amount + '\')">' + amount + '</a>';
    }

    //  Sixth preset is the next multiple of 20
    var nextAmount = computeNextPreset(amount, 20);
    if (convertToPennies(nextAmount) > convertToPennies(amount)) {
        amount = nextAmount;
        html = html + ' &nbsp; <a onclick="setCashAmount(\'' + amount + '\')">' + amount + '</a>';
    }

    //  Seventh preset is the next multiple of 50
    var nextAmount = computeNextPreset(amount, 50);
    if (convertToPennies(nextAmount) > convertToPennies(amount)) {
        amount = nextAmount;
        html = html + ' &nbsp; <a onclick="setCashAmount(\'' + amount + '\')">' + amount + '</a>';
    }

    //  Eight preset is the next multiple of 100
    var nextAmount = computeNextPreset(amount, 100);
    if (convertToPennies(nextAmount) > convertToPennies(amount) && html.length < 350) {
        amount = nextAmount;
        html = html + ' &nbsp; <a onclick="setCashAmount(\'' + amount + '\')">' + amount + '</a>';
    }


    document.getElementById('PresetCashAmounts').innerHTML = html;
}

function computeNextPreset(amount, increment) {
    var amountPennies = convertToPennies(amount);
    var incrementPennies = increment * 100;
    var remainder = amountPennies % incrementPennies;
    var result;
    if (remainder == 0) {
        result = amount;
    }
    else {
        var resultPennies = amountPennies + (incrementPennies - remainder);
        result = convertToDollars(resultPennies, false);
    }
    return result;
}

function updateCash(amountDue) {
    var AmountInDollars = convertToDollars(amountDue, false);

    document.getElementById('AmountDue').value = AmountInDollars;
    updateCashPresets(amountDue);

    document.getElementById("CashAmount").value = AmountInDollars;

    computeChange();
}

function updateCheck(amountDue) {
    var AmountInDollars = convertToDollars(amountDue, false);
    document.getElementById('CheckAmount').value = AmountInDollars;

    //updateCheckAmount();
}

//function updateCheckAmount() {
//    var objCheckAmount = document.getElementById('CheckAmount');

//    var amountDue = convertToPennies(objAmountDue.value);
//    var CheckAmount = convertToPennies(objCheckAmount.value);

//    objCheckAmount.value = convertToDollars(CheckAmount, false);

//    var CompleteButton = document.getElementById('CompleteCheckButton');

//    if (CheckAmount < amountDue) {
//        objCheckAmount.style.backgroundColor = '#FF9999';
//        CompleteButton.disabled = true;
//    }
//    else {
//        objCheckAmount.style.backgroundColor = '#FFFFFF';
//        CompleteButton.disabled = false;
//    }

//}

function computeChange() {
    var CompleteButton = document.getElementById('CompleteCashButton');
    var objAmountDue = document.getElementById('AmountDue');
    var AmountDue = convertToPennies(objAmountDue.value);

    var objCashAmount = document.getElementById('CashAmount');
    var CashAmountString = objCashAmount.value;
    CashAmountString = CashAmountString.trim();
    var CashAmount = convertToPennies(objCashAmount.value);

    if (CashAmountString == '' || CashAmount == 0) {
        objCashAmount.value = '';
        document.getElementById('ChangeAmount').value = '';
        CompleteButton.disabled = true;
        return;
    }

    objCashAmount.value = convertToDollars(CashAmount, false);

    var diff = CashAmount - AmountDue;
    if (diff < 0) {
        objCashAmount.style.backgroundColor = '#FF9999';
        CompleteButton.disabled = true;
        diff = 0;
    }
    else {
        objCashAmount.style.backgroundColor = '#FFFFFF';
        CompleteButton.disabled = false;
    }

    var displayDiff = convertToDollars(diff, false);

    var objChangeAmount = document.getElementById('ChangeAmount');

    objChangeAmount.value = displayDiff;
}

//function updateChange() {
//    var objAmountDue = document.getElementById('AmountDue');
//    var AmountDue = convertToPennies(objAmountDue.value);

//    var objCashAmount = document.getElementById('CashAmount');
//    var CashAmount = convertToPennies(objCashAmount.value);

//    var diff = CashAmount - AmountDue;

//    if (diff < 0) {
//        diff = 0;
//    }

//    var displayDiff = convertToDollars(diff, false);

//    var objChangeAmount = document.getElementById('ChangeAmount');

//    var ChangeAmount = convertToPennies(objChangeAmount.value);
//    if (ChangeAmount < 0) {
//        ChangeAmount = 0;
//    }
//    if (ChangeAmount > diff) {
//        ChangeAmount = diff;
//    }


//    var ChangeAmountDollars = convertToDollars(ChangeAmount, false);
//    if (objChangeAmount.value != ChangeAmountDollars) {
//        objChangeAmount.value = ChangeAmountDollars;
//    }
//}

function convertToPennies(amount) {
    var inputAmount = amount.trim();
    if (inputAmount == '') {
        inputAmount = '0';
    }
    var decimalPos = inputAmount.indexOf('.');
    var amountLength = inputAmount.length;

    if (decimalPos >= 0) {
        var diff = amountLength - decimalPos;
        if (diff > 3) {
            inputAmount = inputAmount.substring(0, decimalPos + 3);
        }
        else {
            if (diff == 2) {
                inputAmount = inputAmount + '0';
            }
            else {
                if (diff == 1) {
                    inputAmount = inputAmount + '00';
                }
            }
        }
    }

    inputAmount = inputAmount.replace('$', '');
    inputAmount = inputAmount.replace('.', '');
    inputAmount = inputAmount.replace(',', '');

    var outputPennies = parseInt(inputAmount);
    if (decimalPos == -1) {
        outputPennies = outputPennies * 100;
    }
    return outputPennies;
}
function convertToDollars(amount, dollarSign) {
    var inputAmount = amount.toString();
    var outputDollars;

    if (inputAmount.length < 3) {
        inputAmount = '000' + inputAmount;
        inputAmount = inputAmount.substr(inputAmount.length - 3);
    }
    var decimalPos = inputAmount.length - 2;
    outputDollars = inputAmount.substr(0, decimalPos) + '.' + inputAmount.substr(decimalPos);
    if (dollarSign) {
        outputDollars = '$' + outputDollars;
    }
    return outputDollars;
}

function resumePayment() {
    var platform = document.getElementById("Platform").value;
    if (platform == "TWH") {
        document.getElementById("SubaccountSection").style.display = "inline-block";
    }

    document.getElementById("PersonSection").style.display = "none";
    document.getElementById('CashSection').style.display = 'none';
    document.getElementById('CheckSection').style.display = 'none';
    window.location.href = '#NewSale';
}

function startCash() {
    setTotalAmount();
    var platform = document.getElementById("Platform").value;
    if (platform == "TWH") {
        document.getElementById("SubaccountSection").style.display = "none";
    }
    document.getElementById("PersonSection").style.display = "none";
    document.getElementById('CashSection').style.display = 'inline';
    document.getElementById('CheckSection').style.display = 'none';
    window.location.href = '#CashPayment';
}

function startCheck() {
    setTotalAmount();
    var platform = document.getElementById("Platform").value;
    if (platform == "TWH") {
        document.getElementById("SubaccountSection").style.display = "none";
    }
    document.getElementById("PersonSection").style.display = "none";
    document.getElementById('CashSection').style.display = 'none';
    document.getElementById('CheckSection').style.display = 'inline';
    window.location.href = '#CheckPayment';
    document.getElementById('CheckReference').focus();
}

function setTotalAmount() {
    AmountObj = document.getElementById("Amount");

    var CashAmount = convertToPennies(AmountObj.value);
    
    if (CashAmount != 0 && TestRegExp(AmountObj, /^[+-]?(\d*)(\.\d\d?)?$/, 'Please enter a valid amount')) {

        document.getElementById('CompleteCashButton').disabled = false;
        document.getElementById('CompleteCheckButton').disabled = false;

        document.getElementById('paymentButtonCash').disabled = false;
        document.getElementById('paymentButtonCheck').disabled = false;

        try {
            document.getElementById('paymentButtonCard').disabled = false;
        }
        catch (err) {
        }


        TotalAmountObj = document.getElementById("TotalAmount");

        var AmountInDollars = AmountObj.value;
        var AmountInPennies = convertToPennies(AmountInDollars);

        TotalAmountObj.value = AmountInPennies;

        updateCash(AmountInPennies);
        updateCheck(AmountInPennies);

    }
    else {
        document.getElementById('CompleteCashButton').disabled = true;
        document.getElementById('CompleteCheckButton').disabled = true;
        document.getElementById('paymentButtonCash').disabled = true;
        document.getElementById('paymentButtonCheck').disabled = true;

        try {
            document.getElementById('paymentButtonCard').disabled = true;
        }
        catch (err) {
        }

        AmountObj.focus();
        return false;
    }
}


function setCashAmount(inputAmount) {
    document.getElementById('CashAmount').value = inputAmount;
    computeChange();
}

//function clearCheckAmount() {
//    document.getElementById('CheckAmount').value = '';
//}


function cancelPayment() {
    document.getElementById("RowHeading").style.display = "table-row";

    document.getElementById('paymentSection').style.display = 'block';

    document.getElementById("RowSearch").style.display = "table-row";
    document.getElementById("SearchName").value = "";

    document.getElementById("RowName").style.display = "none";
    document.getElementById("Selected_Person_ID").value = "";
    document.getElementById("CellName").innerHTML = "";

    var platform = document.getElementById("Platform").value;
    if (platform == "TWH") {
        document.getElementById("RowSubaccount").style.display = "none";
        var DefaultSubaccountID = document.getElementById("Default_Subaccount_Type_ID").value;
        document.getElementById("Selected_Subaccount_Type_ID").value = DefaultSubaccountID;
        var DefaultSubaccountName = document.getElementById("Default_Subaccount_Name").value;
        document.getElementById("CellSubaccount").innerHTML = DefaultSubaccountName;
        document.getElementById("SubaccountSection").style.display = "none";

        var rowcount = document.getElementById("SubaccountCount").value;
        for (x = 0; x < rowcount; x++) {
            subObj = document.getElementById("CellSubaccountBalance" + x);
            subObj.innerHTML = "";
        }
    }

    document.getElementById("RowAmount").style.display = "none";
    document.getElementById("Amount").value = "";

    document.getElementById("CheckReference").value = "";
    
    document.getElementById("PaymentButtons").style.display = "none";

    document.getElementById("PersonSection").style.display = "inline-block";

    var personCount = document.getElementById("PersonCount").value;
    var personTR;
    for (i = 0; i < personCount; i++) {
        personTR = document.getElementById("RowPerson" + i);
        personTR.style.display = "table-row";
    }

    document.getElementById("SearchName").focus();
}


function submitForm(SelectedAction) {
    document.getElementById('Selected_Action').value = SelectedAction;
//    if (SelectedAction == 'Cash' || SelectedAction == 'Card') {
//        document.getElementById('AmountDue').disabled = false;
//    }
//    if (SelectedAction == 'Check') {
//        document.getElementById('CheckAmountDue').disabled = false;
//    }

    if (SelectedAction == 'Launch') {
        var DateObj = document.getElementById("DepositDate");
        if (TestRegExp(DateObj, /^(((((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))[\/-](1[6-9]|[2-9]\d)?\d{2})|(0?2[\/-]29[\/-](((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))|((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8])[\/-]((1[6-9]|[2-9]\d)?\d{2}))|(((1[6-9]|[2-9]\d)\d{2})[\/-](((0?[13578]|1[02])[\/-]31)|((0?[13-9]|1[0-2])[\/-](29|30)))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)))[\/-](0?2[\/-]29)|(((1[6-9]|[2-9]\d)\d{2}))[\/-]((0?[1-9])|(1[0-2]))[\/-](0?[1-9]|1\d|2[0-8]))$/, 'Please enter a valid date.')) {
            document.getElementById('easyform').submit();
        }
        else {
            return false;
        }
    }
    else {
        if (SelectedAction == 'Cash' || SelectedAction == 'Check' || SelectedAction == 'Card') {
            var AmountObj = document.getElementById("Amount");
            if (TestRegExp(AmountObj, /^[+-]?(\d*)(\.\d\d?)?$/, 'Please enter a valid amount')) {
                //  Disable buttons that could allow user to resubmit the same order twice
                document.getElementById('CompleteCashButton').disabled = true;
                document.getElementById('CompleteCheckButton').disabled = true;
                document.getElementById('paymentButtonCash').disabled = true;
                document.getElementById('paymentButtonCheck').disabled = true;
                
                try {
                    document.getElementById('paymentButtonCard').disabled = true;
                }
                catch (err) {
                }

                document.getElementById('easyform').submit();
            }
            else {
                AmountObj.focus();
                return false;
            }
        }
        else {
            document.getElementById('easyform').submit();
        }
    }
}


//function checkLaunchComplete() {
//    var DepositDate = document.getElementById('DepositDate').value;
//    var BadDate = true;

//    var objRegExp = new RegExp('^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d$');
//    if (objRegExp.test(DepositDate)) {
//        BadDate = false;
//    }

//    var Subaccount_Type_ID = document.getElementById('Subaccount_Type_ID').value;

//    // need regexp to validate DepositDate

//    if (BadDate || (Subaccount_Type_ID == '0' || Subaccount_Type_ID == '')) {
//        document.getElementById('Continue').disabled = true;
//    }
//    else {
//        document.getElementById('Continue').disabled = false;
//    }
//}

function updateCashDeposit() {
    if (validDeposit()) {
        document.getElementById('DepositButton').disabled = false;
    }
    else {
        document.getElementById('DepositButton').disabled = true;
    }
}

function submitDeposit() {
    if (validDeposit()) {
        document.getElementById('CheckAmount').disabled = false;
        submitForm('Deposit');
    }
    else {
        window.alert('Deposit must be greater than zero');
    }
}

function validDeposit() {
    var CashString = document.getElementById('CashAmount').value;
    var CashPennies = convertToPennies(CashString);
    document.getElementById('CashAmount').value = convertToDollars(CashPennies);
    var CheckString = document.getElementById('CheckAmount').value;
    var CheckPennies = convertToPennies(CheckString);

    if (CashPennies <= 0 && CheckPennies <= 0) {
        return false;
    }
    else {
        return true;
    }
}


function GoToNewPayment() {
    var returnFormID = document.getElementById('Return_Form_ID').value;
    var menuItemID = document.getElementById('Menu_Item_ID').value;
    var applicationID = document.getElementById('Application_ID').value;
    //var win = window.open('https://www.TroopWebHost.org/PaymentCollector.aspx?GoTo=GoToNewPaymentFromCreditCard&Menu_Item_ID=' + menuItemID + '&Form_ID=' + returnFormID, 'Booth');
    var targetURL = 'PaymentCollector.aspx?GoTo=GoToNewPaymentFromCreditCard&Menu_Item_ID=' + menuItemID + '&Form_ID=' + returnFormID + '&Application_ID=' + applicationID

    //window.alert(targetURL);

    var windowName = window.name;
    if (windowName == null) {
        windowName = 'undefined';
    }
    //window.alert('Window Name: ' + windowName);
    if (windowName == 'PaymentCollector') {
        window.location = targetURL;
    }
    else {
        var win = window.open(targetURL, 'PaymentCollector');
        self.close();
    }
}


function submitToSquare(client_id, metadata) {
    var payment_amount = document.getElementById('CreditCardAmount').value;
    var callbackUrl = document.getElementById('returnUrl').value;
    payment_amount = convertToPennies(payment_amount);

    // window.alert('payment_amount: ' + payment_amount + '  client_id: ' + client_id);

    var clientType = getMobileOperatingSystem();

    //window.alert(clientType);

    //  Disable buttons that could allow user to resubmit the same order twice
    document.getElementById('paymentButtonCash').disabled = true;
    document.getElementById('paymentButtonCheck').disabled = true;
    document.getElementById('paymentButtonCard').disabled = true;
    document.getElementById('PaymentButtons').style.display = 'block';
    document.getElementById('PersonSection').style.display = 'none';
    document.getElementById('paymentSection').style.display = 'none';

    var platform = document.getElementById("Platform").value;
    if (platform == "TWH") {
        document.getElementById('SubaccountSection').style.display = 'none';
    }

    document.getElementById('CashSection').style.display = 'none';
    document.getElementById('CheckSection').style.display = 'none';


    switch (clientType) {
        case 'Android':
            submitToSquareAndroid(client_id, metadata, payment_amount, callbackUrl);
            break;
        case 'iOS':
            submitToIOS(client_id, metadata, payment_amount, callbackUrl);
            break;
        default:
            window.alert('Square POS app is not supported on this platform')
    }
}

function submitToSquareAndroid(client_id, metadata, payment_amount, callbackUrl) {
    var posUrl =
        "intent:#Intent;" +
        "action=com.squareup.pos.action.CHARGE;" +
        "package=com.squareup;" +
        "S.com.squareup.pos.WEB_CALLBACK_URI=" + callbackUrl + ";" +
        "S.com.squareup.pos.CLIENT_ID=" + client_id + ";" +
        "S.com.squareup.pos.API_VERSION=v1.3;" +
        "i.com.squareup.pos.TOTAL_AMOUNT=" + payment_amount + ";" +
        "S.com.squareup.pos.CURRENCY_CODE=USD;" +
        "S.com.squareup.pos.TENDER_TYPES=com.squareup.pos.TENDER_CARD;" +
        "S.com.squareup.pos.REQUEST_METADATA=" + metadata + ";" +
        "l.com.squareup.pos.AUTO_RETURN_TIMEOUT_MS=3200;" +
        "end";



    //window.alert("ANDROID: " + posUrl);

    //window.open(posUrl);

    window.location = posUrl;
}

function submitToIOS(client_id, metadata, payment_amount, callbackUrl) {
    var dataParameter = {
        amount_money: {
            amount: payment_amount,
            currency_code: "USD"
        },
        callback_url: callbackUrl,
        client_id: client_id,
        version: "1.3",
        state: metadata,
        options: {
            supported_tender_types: ["CREDIT_CARD"],
            auto_return: true
        }
    };


    //window.alert("IOS: " + "square-commerce-v1://payment/create?data=" + encodeURIComponent(JSON.stringify(dataParameter)));

    window.location = "square-commerce-v1://payment/create?data=" + encodeURIComponent(JSON.stringify(dataParameter));
}

function getMobileOperatingSystem() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // Windows Phone must come first because its UA also contains "Android"
    if (/windows phone/i.test(userAgent)) {
        return "Windows Phone";
    }

    if (/android|Chrome/i.test(userAgent)) {
        return "Android";
    }

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod|Safari/.test(userAgent) && !window.MSStream) {
        return "iOS";
    }

    return "unknown";
}

function TestRegExp(thisfield, regex, errormsg) {
    var goodcolor = "#FFFFFF";
    var errorcolor = "#FFAAAA";
    var testvalue = thisfield.value;

    thisfield.style.backgroundColor = goodcolor;
    if ((testvalue.length == 0) || (testvalue.match(/^\ +$/))) {
        thisfield.style.backgroundColor = errorcolor;
        return false;
    }
    else {
        var objRegExp = new RegExp(regex);
        if (objRegExp.test(thisfield.value)) {
            return true;
        }
        else {
            thisfield.style.backgroundColor = errorcolor;
            thisfield.title = errormsg;
            return false;
        }
    }
}