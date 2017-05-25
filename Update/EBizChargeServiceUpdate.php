<?php
/**
 * File for class EBizChargeServiceUpdate
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceUpdate originally named Update
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceUpdate extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named updateCustomer
     * Documentation : Replace all data for customer specified by CustNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @param EBizChargeStructCustomerObject $_customerData
     * @return boolean
     */
    public function updateCustomer(EBizChargeStructUeSecurityToken $_token,$_custNum,EBizChargeStructCustomerObject $_customerData)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->updateCustomer($_token,$_custNum,$_customerData));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named updateCustomerPaymentMethod
     * Documentation : Update a Customer Payment Method
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructPaymentMethod $_paymentMethod
     * @param boolean $_verify
     * @return boolean
     */
    public function updateCustomerPaymentMethod(EBizChargeStructUeSecurityToken $_token,EBizChargeStructPaymentMethod $_paymentMethod,$_verify)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->updateCustomerPaymentMethod($_token,$_paymentMethod,$_verify));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named updateProduct
     * Documentation : Replace all data for product specified by ProductRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_productRefNum
     * @param EBizChargeStructProduct $_product
     * @return boolean
     */
    public function updateProduct(EBizChargeStructUeSecurityToken $_token,$_productRefNum,EBizChargeStructProduct $_product)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->updateProduct($_token,$_productRefNum,$_product));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named updateProductCategory
     * Documentation : Replace all data for product category specified by ProductCategoryRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_productCategoryRefNum
     * @param EBizChargeStructProductCategory $_productCategory
     * @return boolean
     */
    public function updateProductCategory(EBizChargeStructUeSecurityToken $_token,$_productCategoryRefNum,EBizChargeStructProductCategory $_productCategory)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->updateProductCategory($_token,$_productCategoryRefNum,$_productCategory));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named updateReceipt
     * Documentation : Update receipt template
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_receiptRefNum
     * @param EBizChargeStructReceipt $_receipt
     * @return integer
     */
    public function updateReceipt(EBizChargeStructUeSecurityToken $_token,$_receiptRefNum,EBizChargeStructReceipt $_receipt)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->updateReceipt($_token,$_receiptRefNum,$_receipt));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return boolean|integer
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
