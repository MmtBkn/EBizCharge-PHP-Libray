<?php
/**
 * File for class EBizChargeServiceAdd
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceAdd originally named Add
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceAdd extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named addCustomer
     * Documentation : Add a Stored Customer Record
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructCustomerObject $_customerData
     * @return integer
     */
    public function addCustomer(EBizChargeStructUeSecurityToken $_token,EBizChargeStructCustomerObject $_customerData)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->addCustomer($_token,$_customerData));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named addCustomerPaymentMethod
     * Documentation : Add Payment Method For a Customer
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @param EBizChargeStructPaymentMethod $_paymentMethod
     * @param boolean $_makeDefault
     * @param boolean $_verify
     * @return integer
     */
    public function addCustomerPaymentMethod(EBizChargeStructUeSecurityToken $_token,$_custNum,EBizChargeStructPaymentMethod $_paymentMethod,$_makeDefault,$_verify)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->addCustomerPaymentMethod($_token,$_custNum,$_paymentMethod,$_makeDefault,$_verify));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named addProduct
     * Documentation : Add a new product
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructProduct $_product
     * @return string
     */
    public function addProduct(EBizChargeStructUeSecurityToken $_token,EBizChargeStructProduct $_product)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->addProduct($_token,$_product));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named addProductCategory
     * Documentation : Add a new product category
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructProductCategory $_productCategory
     * @return string
     */
    public function addProductCategory(EBizChargeStructUeSecurityToken $_token,EBizChargeStructProductCategory $_productCategory)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->addProductCategory($_token,$_productCategory));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named addProductInventoryLocation
     * Documentation : Add a new product inventory location
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructProductInventoryLocation $_productInventoryLocation
     * @return string
     */
    public function addProductInventoryLocation(EBizChargeStructUeSecurityToken $_token,EBizChargeStructProductInventoryLocation $_productInventoryLocation)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->addProductInventoryLocation($_token,$_productInventoryLocation));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named addReceipt
     * Documentation : Add a new receipt template
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructReceipt $_receipt
     * @return integer
     */
    public function addReceipt(EBizChargeStructUeSecurityToken $_token,EBizChargeStructReceipt $_receipt)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->addReceipt($_token,$_receipt));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return integer|string
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
