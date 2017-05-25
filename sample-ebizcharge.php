<?php
/**
 * Test with EBizCharge for 'https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl'
 * @package EBizCharge
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/EBizChargeAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a EBizChargeWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[EBizChargeWsdlClass::WSDL_URL] = 'https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl';
 * $wsdl[EBizChargeWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[EBizChargeWsdlClass::WSDL_TRACE] = true;
 * $wsdl[EBizChargeWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[EBizChargeWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new EBizChargeWsdlClass($wsdl);
 */
/**
 * Examples
 */


/**********************************
 * Example for EBizChargeServiceAdd
 */
$eBizChargeServiceAdd = new EBizChargeServiceAdd();
// sample call for EBizChargeServiceAdd::addCustomer()
if($eBizChargeServiceAdd->addCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructCustomerObject(/*** update parameters list ***/)))
    print_r($eBizChargeServiceAdd->getResult());
else
    print_r($eBizChargeServiceAdd->getLastError());
// sample call for EBizChargeServiceAdd::addCustomerPaymentMethod()
if($eBizChargeServiceAdd->addCustomerPaymentMethod(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum,new EBizChargeStructPaymentMethod(/*** update parameters list ***/),$_makeDefault,$_verify))
    print_r($eBizChargeServiceAdd->getResult());
else
    print_r($eBizChargeServiceAdd->getLastError());
// sample call for EBizChargeServiceAdd::addProduct()
if($eBizChargeServiceAdd->addProduct(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructProduct(/*** update parameters list ***/)))
    print_r($eBizChargeServiceAdd->getResult());
else
    print_r($eBizChargeServiceAdd->getLastError());
// sample call for EBizChargeServiceAdd::addProductCategory()
if($eBizChargeServiceAdd->addProductCategory(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructProductCategory(/*** update parameters list ***/)))
    print_r($eBizChargeServiceAdd->getResult());
else
    print_r($eBizChargeServiceAdd->getLastError());
// sample call for EBizChargeServiceAdd::addProductInventoryLocation()
if($eBizChargeServiceAdd->addProductInventoryLocation(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructProductInventoryLocation(/*** update parameters list ***/)))
    print_r($eBizChargeServiceAdd->getResult());
else
    print_r($eBizChargeServiceAdd->getLastError());
// sample call for EBizChargeServiceAdd::addReceipt()
if($eBizChargeServiceAdd->addReceipt(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructReceipt(/*** update parameters list ***/)))
    print_r($eBizChargeServiceAdd->getResult());
else
    print_r($eBizChargeServiceAdd->getLastError());

/*************************************
 * Example for EBizChargeServiceAdjust
 */
$eBizChargeServiceAdjust = new EBizChargeServiceAdjust();
// sample call for EBizChargeServiceAdjust::adjustInventory()
if($eBizChargeServiceAdjust->adjustInventory(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productRefNum,$_inventory))
    print_r($eBizChargeServiceAdjust->getResult());
else
    print_r($eBizChargeServiceAdjust->getLastError());

/***********************************
 * Example for EBizChargeServiceBulk
 */
$eBizChargeServiceBulk = new EBizChargeServiceBulk();
// sample call for EBizChargeServiceBulk::bulkCurrencyConversion()
if($eBizChargeServiceBulk->bulkCurrencyConversion(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_fromCurrency,$_toCurrency,$_amounts))
    print_r($eBizChargeServiceBulk->getResult());
else
    print_r($eBizChargeServiceBulk->getLastError());

/**************************************
 * Example for EBizChargeServiceCapture
 */
$eBizChargeServiceCapture = new EBizChargeServiceCapture();
// sample call for EBizChargeServiceCapture::captureTransaction()
if($eBizChargeServiceCapture->captureTransaction(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_amount))
    print_r($eBizChargeServiceCapture->getResult());
else
    print_r($eBizChargeServiceCapture->getLastError());

/************************************
 * Example for EBizChargeServiceClose
 */
$eBizChargeServiceClose = new EBizChargeServiceClose();
// sample call for EBizChargeServiceClose::closeBatch()
if($eBizChargeServiceClose->closeBatch(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_batchRefNum))
    print_r($eBizChargeServiceClose->getResult());
else
    print_r($eBizChargeServiceClose->getLastError());

/**************************************
 * Example for EBizChargeServiceConvert
 */
$eBizChargeServiceConvert = new EBizChargeServiceConvert();
// sample call for EBizChargeServiceConvert::convertTranToCust()
if($eBizChargeServiceConvert->convertTranToCust(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_updateData))
    print_r($eBizChargeServiceConvert->getResult());
else
    print_r($eBizChargeServiceConvert->getLastError());
// sample call for EBizChargeServiceConvert::convertTranToPayMethod()
if($eBizChargeServiceConvert->convertTranToPayMethod(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_custNum,$_methodName,$_makeDefault))
    print_r($eBizChargeServiceConvert->getResult());
else
    print_r($eBizChargeServiceConvert->getLastError());

/***********************************
 * Example for EBizChargeServiceCopy
 */
$eBizChargeServiceCopy = new EBizChargeServiceCopy();
// sample call for EBizChargeServiceCopy::copyCustomer()
if($eBizChargeServiceCopy->copyCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum,new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceCopy->getResult());
else
    print_r($eBizChargeServiceCopy->getLastError());

/*************************************
 * Example for EBizChargeServiceCreate
 */
$eBizChargeServiceCreate = new EBizChargeServiceCreate();
// sample call for EBizChargeServiceCreate::createBatchUpload()
if($eBizChargeServiceCreate->createBatchUpload(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_fileName,$_autoStart,$_format,$_encoding,$_fields,$_data,$_overrideDuplicates))
    print_r($eBizChargeServiceCreate->getResult());
else
    print_r($eBizChargeServiceCreate->getLastError());

/***************************************
 * Example for EBizChargeServiceCurrency
 */
$eBizChargeServiceCurrency = new EBizChargeServiceCurrency();
// sample call for EBizChargeServiceCurrency::currencyConversion()
if($eBizChargeServiceCurrency->currencyConversion(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_fromCurrency,$_toCurrency,$_amount))
    print_r($eBizChargeServiceCurrency->getResult());
else
    print_r($eBizChargeServiceCurrency->getLastError());

/*************************************
 * Example for EBizChargeServiceDelete
 */
$eBizChargeServiceDelete = new EBizChargeServiceDelete();
// sample call for EBizChargeServiceDelete::deleteCustomer()
if($eBizChargeServiceDelete->deleteCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum))
    print_r($eBizChargeServiceDelete->getResult());
else
    print_r($eBizChargeServiceDelete->getLastError());
// sample call for EBizChargeServiceDelete::deleteCustomerPaymentMethod()
if($eBizChargeServiceDelete->deleteCustomerPaymentMethod(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custnum,$_paymentMethodID))
    print_r($eBizChargeServiceDelete->getResult());
else
    print_r($eBizChargeServiceDelete->getLastError());
// sample call for EBizChargeServiceDelete::deleteProduct()
if($eBizChargeServiceDelete->deleteProduct(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productRefNum))
    print_r($eBizChargeServiceDelete->getResult());
else
    print_r($eBizChargeServiceDelete->getLastError());
// sample call for EBizChargeServiceDelete::deleteProductCategory()
if($eBizChargeServiceDelete->deleteProductCategory(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productCategoryRefNum))
    print_r($eBizChargeServiceDelete->getResult());
else
    print_r($eBizChargeServiceDelete->getLastError());
// sample call for EBizChargeServiceDelete::deleteReceipt()
if($eBizChargeServiceDelete->deleteReceipt(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_receiptRefNum))
    print_r($eBizChargeServiceDelete->getResult());
else
    print_r($eBizChargeServiceDelete->getLastError());

/**************************************
 * Example for EBizChargeServiceDisable
 */
$eBizChargeServiceDisable = new EBizChargeServiceDisable();
// sample call for EBizChargeServiceDisable::disableCustomer()
if($eBizChargeServiceDisable->disableCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum))
    print_r($eBizChargeServiceDisable->getResult());
else
    print_r($eBizChargeServiceDisable->getLastError());

/*************************************
 * Example for EBizChargeServiceEnable
 */
$eBizChargeServiceEnable = new EBizChargeServiceEnable();
// sample call for EBizChargeServiceEnable::enableCustomer()
if($eBizChargeServiceEnable->enableCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum))
    print_r($eBizChargeServiceEnable->getResult());
else
    print_r($eBizChargeServiceEnable->getLastError());

/************************************
 * Example for EBizChargeServiceEmail
 */
$eBizChargeServiceEmail = new EBizChargeServiceEmail();
// sample call for EBizChargeServiceEmail::emailTransactionReceipt()
if($eBizChargeServiceEmail->emailTransactionReceipt(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_receiptRefNum,$_email))
    print_r($eBizChargeServiceEmail->getResult());
else
    print_r($eBizChargeServiceEmail->getLastError());
// sample call for EBizChargeServiceEmail::emailTransactionReceiptByName()
if($eBizChargeServiceEmail->emailTransactionReceiptByName(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_receiptName,$_email))
    print_r($eBizChargeServiceEmail->getResult());
else
    print_r($eBizChargeServiceEmail->getLastError());

/**********************************
 * Example for EBizChargeServiceGet
 */
$eBizChargeServiceGet = new EBizChargeServiceGet();
// sample call for EBizChargeServiceGet::getAccountDetails()
if($eBizChargeServiceGet->getAccountDetails(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getBankList()
if($eBizChargeServiceGet->getBankList(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getBatchStatus()
if($eBizChargeServiceGet->getBatchStatus(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_batchRefNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getBatchTransactions()
if($eBizChargeServiceGet->getBatchTransactions(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_batchRefNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getBatchUploadStatus()
if($eBizChargeServiceGet->getBatchUploadStatus(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_uploadRefNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getCheckTrace()
if($eBizChargeServiceGet->getCheckTrace(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getCustomer()
if($eBizChargeServiceGet->getCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getCustomerHistory()
if($eBizChargeServiceGet->getCustomerHistory(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getCustomerPaymentMethod()
if($eBizChargeServiceGet->getCustomerPaymentMethod(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum,$_methodID))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getCustomerPaymentMethods()
if($eBizChargeServiceGet->getCustomerPaymentMethods(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getCustomerReport()
if($eBizChargeServiceGet->getCustomerReport(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_report,$_options,$_format))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getCustomFields()
if($eBizChargeServiceGet->getCustomFields(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getProduct()
if($eBizChargeServiceGet->getProduct(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productRefNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getProductCategory()
if($eBizChargeServiceGet->getProductCategory(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productCategoryRefNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getProductCategories()
if($eBizChargeServiceGet->getProductCategories(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getProductInventory()
if($eBizChargeServiceGet->getProductInventory(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productRefNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getProductInventoryLocation()
if($eBizChargeServiceGet->getProductInventoryLocation(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_inventoryLocation))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getProductInventoryLocations()
if($eBizChargeServiceGet->getProductInventoryLocations(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getReceipt()
if($eBizChargeServiceGet->getReceipt(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_receiptRefNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getReceiptByName()
if($eBizChargeServiceGet->getReceiptByName(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_name))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getReceipts()
if($eBizChargeServiceGet->getReceipts(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_target))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getReport()
if($eBizChargeServiceGet->getReport(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_report,$_options,$_format))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getSession()
if($eBizChargeServiceGet->getSession(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getSupportedCurrencies()
if($eBizChargeServiceGet->getSupportedCurrencies(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getSyncLog()
if($eBizChargeServiceGet->getSyncLog(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_objectName,$_fromPosition))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getSyncLogCurrentPosition()
if($eBizChargeServiceGet->getSyncLogCurrentPosition(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_objectName))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getSystemInfo()
if($eBizChargeServiceGet->getSystemInfo(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getTransaction()
if($eBizChargeServiceGet->getTransaction(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getTransactionCustom()
if($eBizChargeServiceGet->getTransactionCustom(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_fields))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getTransactionProfile()
if($eBizChargeServiceGet->getTransactionProfile(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getTransactionReport()
if($eBizChargeServiceGet->getTransactionReport(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_startDate,$_endDate,$_report,$_format))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());
// sample call for EBizChargeServiceGet::getTransactionStatus()
if($eBizChargeServiceGet->getTransactionStatus(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum))
    print_r($eBizChargeServiceGet->getResult());
else
    print_r($eBizChargeServiceGet->getLastError());

/*************************************
 * Example for EBizChargeServiceLookup
 */
$eBizChargeServiceLookup = new EBizChargeServiceLookup();
// sample call for EBizChargeServiceLookup::lookupCardToken()
if($eBizChargeServiceLookup->lookupCardToken(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_lookup))
    print_r($eBizChargeServiceLookup->getResult());
else
    print_r($eBizChargeServiceLookup->getLastError());

/***********************************
 * Example for EBizChargeServiceMove
 */
$eBizChargeServiceMove = new EBizChargeServiceMove();
// sample call for EBizChargeServiceMove::moveCustomer()
if($eBizChargeServiceMove->moveCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum,new EBizChargeStructUeSecurityToken(/*** update parameters list ***/)))
    print_r($eBizChargeServiceMove->getResult());
else
    print_r($eBizChargeServiceMove->getLastError());

/************************************
 * Example for EBizChargeServicePause
 */
$eBizChargeServicePause = new EBizChargeServicePause();
// sample call for EBizChargeServicePause::pauseBatchUpload()
if($eBizChargeServicePause->pauseBatchUpload(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_uploadRefNum))
    print_r($eBizChargeServicePause->getResult());
else
    print_r($eBizChargeServicePause->getLastError());

/***********************************
 * Example for EBizChargeServicePost
 */
$eBizChargeServicePost = new EBizChargeServicePost();
// sample call for EBizChargeServicePost::postAuth()
if($eBizChargeServicePost->postAuth(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructTransactionRequestObject(/*** update parameters list ***/)))
    print_r($eBizChargeServicePost->getResult());
else
    print_r($eBizChargeServicePost->getLastError());

/************************************
 * Example for EBizChargeServiceQuick
 */
$eBizChargeServiceQuick = new EBizChargeServiceQuick();
// sample call for EBizChargeServiceQuick::quickUpdateCustomer()
if($eBizChargeServiceQuick->quickUpdateCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum,$_updateData))
    print_r($eBizChargeServiceQuick->getResult());
else
    print_r($eBizChargeServiceQuick->getLastError());
// sample call for EBizChargeServiceQuick::quickUpdateProduct()
if($eBizChargeServiceQuick->quickUpdateProduct(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productRefNum,$_updateData))
    print_r($eBizChargeServiceQuick->getResult());
else
    print_r($eBizChargeServiceQuick->getLastError());

/*************************************
 * Example for EBizChargeServiceRefund
 */
$eBizChargeServiceRefund = new EBizChargeServiceRefund();
// sample call for EBizChargeServiceRefund::refundTransaction()
if($eBizChargeServiceRefund->refundTransaction(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_amount))
    print_r($eBizChargeServiceRefund->getResult());
else
    print_r($eBizChargeServiceRefund->getLastError());

/*************************************
 * Example for EBizChargeServiceRender
 */
$eBizChargeServiceRender = new EBizChargeServiceRender();
// sample call for EBizChargeServiceRender::renderReceipt()
if($eBizChargeServiceRender->renderReceipt(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_receiptRefNum,$_contentType))
    print_r($eBizChargeServiceRender->getResult());
else
    print_r($eBizChargeServiceRender->getLastError());
// sample call for EBizChargeServiceRender::renderReceiptByName()
if($eBizChargeServiceRender->renderReceiptByName(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_receiptName,$_contentType))
    print_r($eBizChargeServiceRender->getResult());
else
    print_r($eBizChargeServiceRender->getLastError());

/**********************************
 * Example for EBizChargeServiceRun
 */
$eBizChargeServiceRun = new EBizChargeServiceRun();
// sample call for EBizChargeServiceRun::runBatchUpload()
if($eBizChargeServiceRun->runBatchUpload(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_uploadRefNum))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runCredit()
if($eBizChargeServiceRun->runCredit(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructTransactionRequestObject(/*** update parameters list ***/)))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runCheckCredit()
if($eBizChargeServiceRun->runCheckCredit(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructTransactionRequestObject(/*** update parameters list ***/)))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runCustomerTransaction()
if($eBizChargeServiceRun->runCustomerTransaction(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum,$_paymentMethodID,new EBizChargeStructCustomerTransactionRequest(/*** update parameters list ***/)))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runQuickSale()
if($eBizChargeServiceRun->runQuickSale(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,new EBizChargeStructTransactionDetail(/*** update parameters list ***/),$_authOnly))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runQuickCredit()
if($eBizChargeServiceRun->runQuickCredit(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,new EBizChargeStructTransactionDetail(/*** update parameters list ***/)))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runCheckSale()
if($eBizChargeServiceRun->runCheckSale(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructTransactionRequestObject(/*** update parameters list ***/)))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runSale()
if($eBizChargeServiceRun->runSale(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructTransactionRequestObject(/*** update parameters list ***/)))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runAuthOnly()
if($eBizChargeServiceRun->runAuthOnly(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructTransactionRequestObject(/*** update parameters list ***/)))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runTransaction()
if($eBizChargeServiceRun->runTransaction(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructTransactionRequestObject(/*** update parameters list ***/)))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());
// sample call for EBizChargeServiceRun::runTransactionAPI()
if($eBizChargeServiceRun->runTransactionAPI(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_parameters))
    print_r($eBizChargeServiceRun->getResult());
else
    print_r($eBizChargeServiceRun->getLastError());

/***********************************
 * Example for EBizChargeServiceSave
 */
$eBizChargeServiceSave = new EBizChargeServiceSave();
// sample call for EBizChargeServiceSave::saveCard()
if($eBizChargeServiceSave->saveCard(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructCreditCardData(/*** update parameters list ***/)))
    print_r($eBizChargeServiceSave->getResult());
else
    print_r($eBizChargeServiceSave->getLastError());
// sample call for EBizChargeServiceSave::saveCards()
if($eBizChargeServiceSave->saveCards(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_creditCards))
    print_r($eBizChargeServiceSave->getResult());
else
    print_r($eBizChargeServiceSave->getLastError());

/*************************************
 * Example for EBizChargeServiceSearch
 */
$eBizChargeServiceSearch = new EBizChargeServiceSearch();
// sample call for EBizChargeServiceSearch::searchBatches()
if($eBizChargeServiceSearch->searchBatches(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchBatchesCount()
if($eBizChargeServiceSearch->searchBatchesCount(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchCustomerID()
if($eBizChargeServiceSearch->searchCustomerID(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custID))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchCustomers()
if($eBizChargeServiceSearch->searchCustomers(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchCustomersCount()
if($eBizChargeServiceSearch->searchCustomersCount(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchCustomersCustom()
if($eBizChargeServiceSearch->searchCustomersCustom(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchProducts()
if($eBizChargeServiceSearch->searchProducts(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchProductsCount()
if($eBizChargeServiceSearch->searchProductsCount(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchProductsCustom()
if($eBizChargeServiceSearch->searchProductsCustom(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchTransactions()
if($eBizChargeServiceSearch->searchTransactions(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchTransactionsCount()
if($eBizChargeServiceSearch->searchTransactionsCount(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());
// sample call for EBizChargeServiceSearch::searchTransactionsCustom()
if($eBizChargeServiceSearch->searchTransactionsCustom(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort))
    print_r($eBizChargeServiceSearch->getResult());
else
    print_r($eBizChargeServiceSearch->getLastError());

/**********************************
 * Example for EBizChargeServiceSet
 */
$eBizChargeServiceSet = new EBizChargeServiceSet();
// sample call for EBizChargeServiceSet::setDefaultPaymentMethod()
if($eBizChargeServiceSet->setDefaultPaymentMethod(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum,$_methodID))
    print_r($eBizChargeServiceSet->getResult());
else
    print_r($eBizChargeServiceSet->getLastError());

/*************************************
 * Example for EBizChargeServiceUpdate
 */
$eBizChargeServiceUpdate = new EBizChargeServiceUpdate();
// sample call for EBizChargeServiceUpdate::updateCustomer()
if($eBizChargeServiceUpdate->updateCustomer(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_custNum,new EBizChargeStructCustomerObject(/*** update parameters list ***/)))
    print_r($eBizChargeServiceUpdate->getResult());
else
    print_r($eBizChargeServiceUpdate->getLastError());
// sample call for EBizChargeServiceUpdate::updateCustomerPaymentMethod()
if($eBizChargeServiceUpdate->updateCustomerPaymentMethod(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),new EBizChargeStructPaymentMethod(/*** update parameters list ***/),$_verify))
    print_r($eBizChargeServiceUpdate->getResult());
else
    print_r($eBizChargeServiceUpdate->getLastError());
// sample call for EBizChargeServiceUpdate::updateProduct()
if($eBizChargeServiceUpdate->updateProduct(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productRefNum,new EBizChargeStructProduct(/*** update parameters list ***/)))
    print_r($eBizChargeServiceUpdate->getResult());
else
    print_r($eBizChargeServiceUpdate->getLastError());
// sample call for EBizChargeServiceUpdate::updateProductCategory()
if($eBizChargeServiceUpdate->updateProductCategory(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_productCategoryRefNum,new EBizChargeStructProductCategory(/*** update parameters list ***/)))
    print_r($eBizChargeServiceUpdate->getResult());
else
    print_r($eBizChargeServiceUpdate->getLastError());
// sample call for EBizChargeServiceUpdate::updateReceipt()
if($eBizChargeServiceUpdate->updateReceipt(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_receiptRefNum,new EBizChargeStructReceipt(/*** update parameters list ***/)))
    print_r($eBizChargeServiceUpdate->getResult());
else
    print_r($eBizChargeServiceUpdate->getLastError());

/*************************************
 * Example for EBizChargeServiceUpload
 */
$eBizChargeServiceUpload = new EBizChargeServiceUpload();
// sample call for EBizChargeServiceUpload::uploadProductFile()
if($eBizChargeServiceUpload->uploadProductFile(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_existingProducts,$_defaultCategory,$_defaultWarehouse,$_columns,$_data))
    print_r($eBizChargeServiceUpload->getResult());
else
    print_r($eBizChargeServiceUpload->getLastError());

/***********************************
 * Example for EBizChargeServiceVoid
 */
$eBizChargeServiceVoid = new EBizChargeServiceVoid();
// sample call for EBizChargeServiceVoid::voidTransaction()
if($eBizChargeServiceVoid->voidTransaction(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum))
    print_r($eBizChargeServiceVoid->getResult());
else
    print_r($eBizChargeServiceVoid->getLastError());

/***************************************
 * Example for EBizChargeServiceOverride
 */
$eBizChargeServiceOverride = new EBizChargeServiceOverride();
// sample call for EBizChargeServiceOverride::overrideTransaction()
if($eBizChargeServiceOverride->overrideTransaction(new EBizChargeStructUeSecurityToken(/*** update parameters list ***/),$_refNum,$_reason))
    print_r($eBizChargeServiceOverride->getResult());
else
    print_r($eBizChargeServiceOverride->getLastError());
