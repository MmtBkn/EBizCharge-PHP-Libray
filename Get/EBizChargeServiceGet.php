<?php
/**
 * File for class EBizChargeServiceGet
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceGet originally named Get
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceGet extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named getAccountDetails
     * Documentation : Retrieves Information about Merchants account
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken
     * @return EBizChargeStructAccountDetails
     */
    public function getAccountDetails(EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getAccountDetails($_eBizChargeStructUeSecurityToken));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getBankList
     * Documentation : Retrieves list of banks and financial institutions available for direct payment
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken
     * @return BankArray
     */
    public function getBankList(EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getBankList($_eBizChargeStructUeSecurityToken));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getBatchStatus
     * Documentation : Retrieve the status of the batch specified by BatchRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_batchRefNum
     * @return EBizChargeStructBatchStatus
     */
    public function getBatchStatus(EBizChargeStructUeSecurityToken $_token,$_batchRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getBatchStatus($_token,$_batchRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getBatchTransactions
     * Documentation : Retrieve transactions in the batch specified by BatchRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_batchRefNum
     * @return TransactionObjectArray
     */
    public function getBatchTransactions(EBizChargeStructUeSecurityToken $_token,$_batchRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getBatchTransactions($_token,$_batchRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getBatchUploadStatus
     * Documentation : Retrieve the status of the currently running batch.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_uploadRefNum
     * @return EBizChargeStructBatchUploadStatus
     */
    public function getBatchUploadStatus(EBizChargeStructUeSecurityToken $_token,$_uploadRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getBatchUploadStatus($_token,$_uploadRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCheckTrace
     * Documentation : Retreive all check status data for the transactions specified by RefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @return EBizChargeStructCheckTrace
     */
    public function getCheckTrace(EBizChargeStructUeSecurityToken $_token,$_refNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCheckTrace($_token,$_refNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCustomer
     * Documentation : Retrieve the customer details for the given CustNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @return EBizChargeStructCustomerObject
     */
    public function getCustomer(EBizChargeStructUeSecurityToken $_token,$_custNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCustomer($_token,$_custNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCustomerHistory
     * Documentation : Pull details of all transactions run for CustNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @return EBizChargeStructTransactionSearchResult
     */
    public function getCustomerHistory(EBizChargeStructUeSecurityToken $_token,$_custNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCustomerHistory($_token,$_custNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCustomerPaymentMethod
     * Documentation : Retrieve a specific customer Payment Methods for the given CustNum/MethodID
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @param integer $_methodID
     * @return EBizChargeStructPaymentMethod
     */
    public function getCustomerPaymentMethod(EBizChargeStructUeSecurityToken $_token,$_custNum,$_methodID)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCustomerPaymentMethod($_token,$_custNum,$_methodID));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCustomerPaymentMethods
     * Documentation : Retrieve the customers Payment Methods for the given CustNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @return PaymentMethodArray
     */
    public function getCustomerPaymentMethods(EBizChargeStructUeSecurityToken $_token,$_custNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCustomerPaymentMethods($_token,$_custNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCustomerReport
     * Documentation : Pull a customer report
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_report
     * @param FieldValueArray $_options
     * @param string $_format
     * @return string
     */
    public function getCustomerReport(EBizChargeStructUeSecurityToken $_token,$_report,$_options,$_format)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCustomerReport($_token,$_report,$_options,$_format));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCustomFields
     * Documentation : Retrieve the custom fields defined by merchants
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken
     * @return FieldValueArray
     */
    public function getCustomFields(EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCustomFields($_eBizChargeStructUeSecurityToken));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getProduct
     * Documentation : Retrieve the product details for the given ProductRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_productRefNum
     * @return EBizChargeStructProduct
     */
    public function getProduct(EBizChargeStructUeSecurityToken $_token,$_productRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getProduct($_token,$_productRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getProductCategory
     * Documentation : Retrieve the product category details for the given ProductCategoryRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_productCategoryRefNum
     * @return EBizChargeStructProductCategory
     */
    public function getProductCategory(EBizChargeStructUeSecurityToken $_token,$_productCategoryRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getProductCategory($_token,$_productCategoryRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getProductCategories
     * Documentation : Retreive list of product categories
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken
     * @return ProductCategoryArray
     */
    public function getProductCategories(EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getProductCategories($_eBizChargeStructUeSecurityToken));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getProductInventory
     * Documentation : Retrieve the product inventory
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_productRefNum
     * @return ProductInventoryArray
     */
    public function getProductInventory(EBizChargeStructUeSecurityToken $_token,$_productRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getProductInventory($_token,$_productRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getProductInventoryLocation
     * Documentation : Retrieve the product locations details for the given InventoryLocation
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_inventoryLocation
     * @return EBizChargeStructProductInventoryLocation
     */
    public function getProductInventoryLocation(EBizChargeStructUeSecurityToken $_token,$_inventoryLocation)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getProductInventoryLocation($_token,$_inventoryLocation));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getProductInventoryLocations
     * Documentation : Retreive list of product inventory locations (warehouses)
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken
     * @return ProductInventoryLocationArray
     */
    public function getProductInventoryLocations(EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getProductInventoryLocations($_eBizChargeStructUeSecurityToken));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getReceipt
     * Documentation : Retreive a receipt template by RefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_receiptRefNum
     * @return EBizChargeStructReceipt
     */
    public function getReceipt(EBizChargeStructUeSecurityToken $_token,$_receiptRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getReceipt($_token,$_receiptRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getReceiptByName
     * Documentation : Retreive a receipt template by receipt name
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_name
     * @return EBizChargeStructReceipt
     */
    public function getReceiptByName(EBizChargeStructUeSecurityToken $_token,$_name)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getReceiptByName($_token,$_name));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getReceipts
     * Documentation : Retreive list of receipt templates by target
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_target
     * @return ReceiptArray
     */
    public function getReceipts(EBizChargeStructUeSecurityToken $_token,$_target)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getReceipts($_token,$_target));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getReport
     * Documentation : Pull a merchant report
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_report
     * @param FieldValueArray $_options
     * @param string $_format
     * @return string
     */
    public function getReport(EBizChargeStructUeSecurityToken $_token,$_report,$_options,$_format)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getReport($_token,$_report,$_options,$_format));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getSession
     * Documentation : Open a transaction profiling session
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken
     * @return EBizChargeStructTransactionSession
     */
    public function getSession(EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getSession($_eBizChargeStructUeSecurityToken));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getSupportedCurrencies
     * Documentation : Retrieve Supported Currencies
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken
     * @return CurrencyObjectArray
     */
    public function getSupportedCurrencies(EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getSupportedCurrencies($_eBizChargeStructUeSecurityToken));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getSyncLog
     * Documentation : Retrieve changes to data objects made on the server
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_objectName
     * @param integer $_fromPosition
     * @return SyncLogArray
     */
    public function getSyncLog(EBizChargeStructUeSecurityToken $_token,$_objectName,$_fromPosition)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getSyncLog($_token,$_objectName,$_fromPosition));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getSyncLogCurrentPosition
     * Documentation : Returns the last position in the change log for a given object
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_objectName
     * @return integer
     */
    public function getSyncLogCurrentPosition(EBizChargeStructUeSecurityToken $_token,$_objectName)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getSyncLogCurrentPosition($_token,$_objectName));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getSystemInfo
     * Documentation : Retreive information about service
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken
     * @return EBizChargeStructSystemInfo
     */
    public function getSystemInfo(EBizChargeStructUeSecurityToken $_eBizChargeStructUeSecurityToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getSystemInfo($_eBizChargeStructUeSecurityToken));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getTransaction
     * Documentation : Retreive all information for the transactions specified by RefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @return EBizChargeStructTransactionObject
     */
    public function getTransaction(EBizChargeStructUeSecurityToken $_token,$_refNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getTransaction($_token,$_refNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getTransactionCustom
     * Documentation : Get Specific Transaction Details
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param stringArray $_fields
     * @return FieldValueArray
     */
    public function getTransactionCustom(EBizChargeStructUeSecurityToken $_token,$_refNum,$_fields)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getTransactionCustom($_token,$_refNum,$_fields));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getTransactionProfile
     * Documentation : Get Specific Transaction Fraud Profiling data
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @return EBizChargeStructTransactionProfile
     */
    public function getTransactionProfile(EBizChargeStructUeSecurityToken $_token,$_refNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getTransactionProfile($_token,$_refNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getTransactionReport
     * Documentation : Pull a transaction report
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_startDate
     * @param string $_endDate
     * @param string $_report
     * @param string $_format
     * @return string
     */
    public function getTransactionReport(EBizChargeStructUeSecurityToken $_token,$_startDate,$_endDate,$_report,$_format)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getTransactionReport($_token,$_startDate,$_endDate,$_report,$_format));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getTransactionStatus
     * Documentation : Retrieve the current status of transaction specified by RefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @return EBizChargeStructTransactionResponse
     */
    public function getTransactionStatus(EBizChargeStructUeSecurityToken $_token,$_refNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getTransactionStatus($_token,$_refNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return BankArray|CurrencyObjectArray|EBizChargeStructAccountDetails|EBizChargeStructBatchStatus|EBizChargeStructBatchUploadStatus|EBizChargeStructCheckTrace|EBizChargeStructCustomerObject|EBizChargeStructPaymentMethod|EBizChargeStructProduct|EBizChargeStructProductCategory|EBizChargeStructProductInventoryLocation|EBizChargeStructReceipt|EBizChargeStructSystemInfo|EBizChargeStructTransactionObject|EBizChargeStructTransactionProfile|EBizChargeStructTransactionResponse|EBizChargeStructTransactionSearchResult|EBizChargeStructTransactionSession|FieldValueArray|integer|PaymentMethodArray|ProductCategoryArray|ProductInventoryArray|ProductInventoryLocationArray|ReceiptArray|string|SyncLogArray|TransactionObjectArray
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
