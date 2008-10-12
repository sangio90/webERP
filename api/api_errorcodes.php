<?php

/* Define error codes that are returned by api functions*/
	Define('NoAuthorisation', 1);
	Define('IncorrectDebtorNumberLength', 1000);
	Define('DebtorNoAlreadyExists', 1001);
	Define('IncorrectDebtorNameLength', 1002);
	Define('InvalidAddressLine', 1003);
	Define('CurrencyCodeNotSetup', 1004);
	Define('SalesTypeNotSetup', 1005);
	Define('InvalidClientSinceDate', 1006);
	Define('HoldReasonNotSetup', 1007);
	Define('PaymentTermsNotSetup', 1008);
	Define('InvalidDiscount', 1009);
	Define('InvalidPaymentDiscount', 1010);
	Define('InvalidLastPaid', 1011);
	Define('InvalidLastPaidDate', 1012);
	Define('InvalidCreditLimit', 1013);
	Define('InvalidInvAddrBranch', 1014);
	Define('InvalidDiscountCode', 1015);
	Define('InvalidEDIInvoices', 1016);
	Define('InvalidEDIOrders', 1017);
	Define('InvalidEDIReference', 1018);
	Define('InvalidEDITransport', 1019);
	Define('InvalidEDIAddress', 1020);
	Define('InvalidEDIServerUser', 1021);
	Define('InvalidEDIServerPassword', 1022);
	Define('InvalidTaxRef', 1023);
	Define('InvalidCustomerPOLine', 1024);
	Define('DatabaseUpdateFailed', 1025);
	Define('NoDebtorNumber', 1026);
	Define('DebtorDoesntExist', 1027);
	Define('IncorrectBranchNumberLength', 1028);
	Define('BranchNoAlreadyExists', 1029);
	Define('IncorrectBranchNameLength', 1030);
	Define('InvalidEstDeliveryDays', 1031);
	Define('AreaCodeNotSetup', 1032);
	Define('SalesmanCodeNotSetup', 1033);
	Define('InvalidFwdDate', 1034);
	Define('InvalidPhoneNumber', 1035);
	Define('InvalidFaxNumber', 1036);
	Define('InvalidContactName', 1037);
	Define('InvalidEmailAddress', 1038);
	Define('LocationCodeNotSetup', 1039);
	Define('TaxGroupIdNotSetup', 1040);
	Define('ShipperNotSetup', 1041);
	Define('InvalidDeliverBlind', 1042);
	Define('InvalidDisableTrans', 1043);
	Define('InvalidSpecialInstructions', 1044);
	Define('InvalidCustBranchCode', 1045);
	Define('BranchNoDoesntExist', 1046);
	Define('StockCodeDoesntExist', 1047);
	Define('StockCategoryDoesntExist', 1048);
	Define('IncorrectStockDescriptionLength', 1049);
	Define('IncorrectUnitsLength', 1050);
	Define('IncorrectMBFlag', 1051);
	Define('InvalidCurCostDate', 1052);
	Define('InvalidActualCost', 1053);
	Define('InvalidLowestLevel', 1054);
	Define('InvalidDiscontinued', 1055);
	Define('InvalidEOQ', 1056);
	Define('InvalidVolume', 1057);
	Define('InvalidKgs', 1058);
	Define('IncorrectBarCodeLength', 1059);
	Define('IncorrectDiscountCategory', 1060);
	Define('TaxCategoriesDoesntExist', 1061);
	Define('InvalidSerialised', 1062);
	Define('IncorrectAppendFile', 1063);
	Define('InvalidPerishable', 1064);
	Define('InvalidDecmalPlaces', 1065);
	Define('IncorrectLongStockDescriptionLength', 1066);
	Define('StockCodeAlreadyExists', 1067);
	Define('TransactionNumberAlreadyExists', 1068);
	Define('InvalidTranDate', 1069);
	Define('InvalidSettled', 1070);
	Define('IncorrectReference', 1071);
	Define('IncorrectTpe', 1072);
	Define('InvalidOrderNumbers', 1073);
	Define('InvalidExchangeRate', 1074);
	Define('InvalidOVAmount', 1075);
	Define('InvalidOVGst', 1076);
	Define('InvalidOVFreight', 1077);
	Define('InvalidDiffOnExchange', 1078);
	Define('InvalidAllocation', 1079);
	Define('IncorrectInvoiceText', 1080);
	Define('InvalidShipVia', 1081);
	Define('InvalidEdiSent', 1082);
	Define('InvalidConsignment', 1083);
	Define('InvalidLastCost', 1084);
	Define('InvalidMaterialCost', 1085);
	Define('InvalidLabourCost', 1086);
	Define('InvalidOverheadCost', 1087);
	Define('InvalidCustomerRef', 1088);
	Define('InvalidBuyerName', 1089);
	Define('InvalidComments', 1090);
	Define('InvalidOrderDate', 1091);
	Define('InvalidDeliverTo', 1092);
	Define('InvalidDeliverBlind', 1093);
	Define('InvalidFreightCost', 1094);
	Define('InvalidDeliveryDate', 1095);
	Define('InvalidQuotationFlag', 1096);
	Define('OrderHeaderNotSetup', 1097);
	Define('InvalidUnitPrice', 1098);
	Define('InvalidQuantity', 1099);
	Define('InvalidDiscountPercent', 1100);
	Define('InvalidNarrative', 1101);
	Define('InvalidItemDueDate', 1102);
	Define('InvalidPOLine', 1103);
	Define('GLAccountCodeAlreadyExists', 1104);
	Define('IncorrectAccountNameLength', 1105);
	Define('AccountGroupDoesntExist', 1106);
	Define('GLAccountSectionAlreadyExists', 1107);
	Define('IncorrectSectionNameLength', 1108);
	Define('GLAccountGroupAlreadyExists', 1109);
	Define('GLAccountSectionDoesntExist', 1110);
	Define('InvalidPandL', 1111);
	Define('InvalidSequenceInTB', 1112);
	Define('GLAccountGroupDoesntExist', 1113);

/* Array of Descriptions of errors */
	$ErrorDescription['1'] = 'No Authorisation';
	$ErrorDescription['1000'] = 'Incorrect Debtor Number Length';
	$ErrorDescription['1001'] = 'Debtor No Already Exists';
	$ErrorDescription['1002'] = 'Incorrect Debtor Name Length';
	$ErrorDescription['1003'] = 'Invalid Address Line';
	$ErrorDescription['1004'] = 'Currency Code Not Setup';
	$ErrorDescription['1005'] = 'Sales Type Not Setup';
	$ErrorDescription['1006'] = 'Invalid Client Since Date';
	$ErrorDescription['1007'] = 'Hold Reason Not Setup';
	$ErrorDescription['1008'] = 'Payment Terms Not Setup';
	$ErrorDescription['1009'] = 'Invalid Discount';
	$ErrorDescription['1010'] = 'Invalid Payment Discount';
	$ErrorDescription['1011'] = 'Invalid Last Paid';
	$ErrorDescription['1012'] = 'Invalid Last Paid Date';
	$ErrorDescription['1013'] = 'Invalid Credit Limit';
	$ErrorDescription['1014'] = 'Invalid Inv Address Branch';
	$ErrorDescription['1015'] = 'Invalid Discount Code';
	$ErrorDescription['1016'] = 'Invalid EDI Invoices';
	$ErrorDescription['1017'] = 'Invalid EDI Orders';
	$ErrorDescription['1018'] = 'Invalid EDI Reference';
	$ErrorDescription['1019'] = 'Invalid EDI Transport';
	$ErrorDescription['1020'] = 'Invalid EDI Address';
	$ErrorDescription['1021'] = 'Invalid EDI Server User';
	$ErrorDescription['1022'] = 'Invalid EDI Server Password';
	$ErrorDescription['1023'] = 'Invalid Tax Reference';
	$ErrorDescription['1024'] = 'Invalid CustomerPOLine';
	$ErrorDescription['1025'] = 'Database Update Failed';
	$ErrorDescription['1026'] = 'No Debtor Number';
	$ErrorDescription['1027'] = 'Debtor Doesnt Exist';
	$ErrorDescription['1028'] = 'Incorrect Branch Number Length';
	$ErrorDescription['1029'] = 'Branch No Already Exists';
	$ErrorDescription['1030'] = 'Incorrect Branch Name Length';
	$ErrorDescription['1031'] = 'Invalid Est Delivery Days';
	$ErrorDescription['1032'] = 'Area Code Not Setup';
	$ErrorDescription['1033'] = 'Salesman Code Not Setup';
	$ErrorDescription['1034'] = 'Invalid Fwd Date';
	$ErrorDescription['1035'] = 'Invalid Phone Number';
	$ErrorDescription['1036'] = 'Invalid Fax Number';
	$ErrorDescription['1037'] = 'Invalid Contact Name';
	$ErrorDescription['1038'] = 'Invalid Email Address';
	$ErrorDescription['1039'] = 'Location Code Not Setup';
	$ErrorDescription['1040'] = 'Tax Group Id Not Setup';
	$ErrorDescription['1041'] = 'Shipper Not Setup';
	$ErrorDescription['1042'] = 'Invalid Deliver Blind';
	$ErrorDescription['1043'] = 'Invalid Disable Transactions';
	$ErrorDescription['1044'] = 'Invalid Special Instructions';
	$ErrorDescription['1045'] = 'Invalid Customer Branch Code';
	$ErrorDescription['1046'] = 'Branch No Doesnt Exist';
	$ErrorDescription['1047'] = 'Stock Code Doesnt Exist';
	$ErrorDescription['1048'] = 'Stock Category Doesnt Exist';
	$ErrorDescription['1049'] = 'Incorrect Stock Description Length';
	$ErrorDescription['1050'] = 'Incorrect Units Length';
	$ErrorDescription['1051'] = 'Incorrect MB Flag';
	$ErrorDescription['1052'] = 'Invalid Currrent Cost Date';
	$ErrorDescription['1053'] = 'Invalid Actual Cost';
	$ErrorDescription['1054'] = 'Invalid Lowest Level';
	$ErrorDescription['1055'] = 'Invalid Discontinued';
	$ErrorDescription['1056'] = 'Invalid EOQ';
	$ErrorDescription['1057'] = 'Invalid Volume';
	$ErrorDescription['1058'] = 'Invalid Kgs';
	$ErrorDescription['1059'] = 'Incorrect BarCode Length';
	$ErrorDescription['1060'] = 'Incorrect Discount Category';
	$ErrorDescription['1061'] = 'Tax Category Doesnt Exist';
	$ErrorDescription['1062'] = 'Invalid Serialised';
	$ErrorDescription['1063'] = 'Incorrect Append File';
	$ErrorDescription['1064'] = 'Invalid Perishable';
	$ErrorDescription['1065'] = 'Invalid Decimal Places';
	$ErrorDescription['1066'] = 'Incorrect Long Stock Description Length';
	$ErrorDescription['1067'] = 'Stock Code Already Exists';
	$ErrorDescription['1068'] = 'Transaction Number Already Exists';
	$ErrorDescription['1069'] = 'Invalid Transaction Date';
	$ErrorDescription['1070'] = 'Invalid Settled';
	$ErrorDescription['1071'] = 'Incorrect Reference';
	$ErrorDescription['1072'] = 'Incorrect TPE';
	$ErrorDescription['1073'] = 'Invalid Order Numbers';
	$ErrorDescription['1074'] = 'Invalid Exchange Rate';
	$ErrorDescription['1075'] = 'Invalid OV Amount';
	$ErrorDescription['1076'] = 'Invalid OV Gst';
	$ErrorDescription['1077'] = 'Invalid OV Freight';
	$ErrorDescription['1078'] = 'Invalid Diff On Exchange';
	$ErrorDescription['1079'] = 'Invalid Allocation';
	$ErrorDescription['1080'] = 'Incorrect Invoice Text';
	$ErrorDescription['1081'] = 'Invalid Ship Via';
	$ErrorDescription['1082'] = 'Invalid Edi Sent';
	$ErrorDescription['1083'] = 'Invalid Consignment';
	$ErrorDescription['1084'] = 'Invalid Last Cost';
	$ErrorDescription['1085'] = 'Invalid Material Cost';
	$ErrorDescription['1086'] = 'Invalid Labour Cost';
	$ErrorDescription['1087'] = 'Invalid Overhead Cost';
	$ErrorDescription['1088'] = 'Invalid Customer Reference';
	$ErrorDescription['1089'] = 'Invalid Buyer Name';
	$ErrorDescription['1090'] = 'Invalid Comments';
	$ErrorDescription['1091'] = 'Invalid Order Date';
	$ErrorDescription['1092'] = 'Invalid Delivery Name';
	$ErrorDescription['1093'] = 'Invalid Deliver Blind Flag';
	$ErrorDescription['1094'] = 'Invalid Freight Cost';
	$ErrorDescription['1095'] = 'Invalid Delivery Date';
	$ErrorDescription['1096'] = 'Invalid Quotation Flag';
	$ErrorDescription['1097'] = 'Order header not setup';
	$ErrorDescription['1098'] = 'Invalid unit cost';
	$ErrorDescription['1099'] = 'Invalid Quantity';
	$ErrorDescription['1100'] = 'Invalid Discount Percent';
	$ErrorDescription['1101'] = 'Invalid Narrative';
	$ErrorDescription['1102'] = 'Invalid Item Due';
	$ErrorDescription['1103'] = 'Invalid PO line';
	$ErrorDescription['1104'] = 'GL account code already exists';
	$ErrorDescription['1105'] = 'GL account code name is incorrect length';
	$ErrorDescription['1106'] = 'GL account group doesnt exist';
	$ErrorDescription['1107'] = 'GL account section already exists';
	$ErrorDescription['1108'] = 'GL account section name is incorrect length';
	$ErrorDescription['1109'] = 'GL account group already exists';
	$ErrorDescription['1110'] = 'GL account section doesnt exist';
	$ErrorDescription['1111'] = 'Invalid profit and loss flag';
	$ErrorDescription['1112'] = 'Invalid sequenceintb figure';
	$ErrorDescription['1112'] = 'GL account group doesnt exist';

?>