<?php
/**
 * File for class EBizChargeServiceSearch
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceSearch originally named Search
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceSearch extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named searchBatches
     * Documentation : Search Settled Batches
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param string $_sort
     * @return EBizChargeStructBatchSearchResult
     */
    public function searchBatches(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchBatches($_token,$_search,$_matchAll,$_start,$_limit,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchBatchesCount
     * Documentation : Search Settled Batches, return counts only
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param string $_sort
     * @return EBizChargeStructBatchSearchResult
     */
    public function searchBatchesCount(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchBatchesCount($_token,$_search,$_matchAll,$_start,$_limit,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchCustomerID
     * Documentation : Find the customer refnum (CustNum) associated with the userdefined CustID
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_custID
     * @return integer
     */
    public function searchCustomerID(EBizChargeStructUeSecurityToken $_token,$_custID)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchCustomerID($_token,$_custID));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchCustomers
     * Documentation : Search customer database
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param string $_sort
     * @return EBizChargeStructCustomerSearchResult
     */
    public function searchCustomers(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchCustomers($_token,$_search,$_matchAll,$_start,$_limit,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchCustomersCount
     * Documentation : Search customer database return only count of what was found
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param string $_sort
     * @return EBizChargeStructCustomerSearchResult
     */
    public function searchCustomersCount(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchCustomersCount($_token,$_search,$_matchAll,$_start,$_limit,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchCustomersCustom
     * Documentation : Search Customers and return specified fields
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param stringArray $_fieldList
     * @param string $_format
     * @param string $_sort
     * @return string
     */
    public function searchCustomersCustom(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchCustomersCustom($_token,$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchProducts
     * Documentation : Search Products
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param string $_sort
     * @return EBizChargeStructProductSearchResult
     */
    public function searchProducts(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchProducts($_token,$_search,$_matchAll,$_start,$_limit,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchProductsCount
     * Documentation : Search Products, return counts only
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param string $_sort
     * @return EBizChargeStructProductSearchResult
     */
    public function searchProductsCount(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchProductsCount($_token,$_search,$_matchAll,$_start,$_limit,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchProductsCustom
     * Documentation : Search Products and return custom response
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param stringArray $_fieldList
     * @param string $_format
     * @param string $_sort
     * @return string
     */
    public function searchProductsCustom(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchProductsCustom($_token,$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchTransactions
     * Documentation : Search transactions and return transaction records
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param string $_sort
     * @return EBizChargeStructTransactionSearchResult
     */
    public function searchTransactions(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchTransactions($_token,$_search,$_matchAll,$_start,$_limit,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchTransactionsCount
     * Documentation : Search transactions and return counts, omit tran data
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param string $_sort
     * @return EBizChargeStructTransactionSearchResult
     */
    public function searchTransactionsCount(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchTransactionsCount($_token,$_search,$_matchAll,$_start,$_limit,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchTransactionsCustom
     * Documentation : Search Transactions and return specified fields
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param SearchParamArray $_search
     * @param boolean $_matchAll
     * @param integer $_start
     * @param integer $_limit
     * @param stringArray $_fieldList
     * @param string $_format
     * @param string $_sort
     * @return string
     */
    public function searchTransactionsCustom(EBizChargeStructUeSecurityToken $_token,$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchTransactionsCustom($_token,$_search,$_matchAll,$_start,$_limit,$_fieldList,$_format,$_sort));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return EBizChargeStructBatchSearchResult|EBizChargeStructCustomerSearchResult|EBizChargeStructProductSearchResult|EBizChargeStructTransactionSearchResult|integer|string
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
