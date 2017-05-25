<?php
/**
 * File for class EBizChargeServiceDelete
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceDelete originally named Delete
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceDelete extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named deleteCustomer
     * Documentation : Delete the customer specified by CustNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @return boolean
     */
    public function deleteCustomer(EBizChargeStructUeSecurityToken $_token,$_custNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->deleteCustomer($_token,$_custNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named deleteCustomerPaymentMethod
     * Documentation : Delete Payment Method
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custnum
     * @param integer $_paymentMethodID
     * @return boolean
     */
    public function deleteCustomerPaymentMethod(EBizChargeStructUeSecurityToken $_token,$_custnum,$_paymentMethodID)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->deleteCustomerPaymentMethod($_token,$_custnum,$_paymentMethodID));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named deleteProduct
     * Documentation : Delete product specified by ProductRefNum.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_productRefNum
     * @return boolean
     */
    public function deleteProduct(EBizChargeStructUeSecurityToken $_token,$_productRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->deleteProduct($_token,$_productRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named deleteProductCategory
     * Documentation : Delete product category specified by ProductCategoryRefNum.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_productCategoryRefNum
     * @return boolean
     */
    public function deleteProductCategory(EBizChargeStructUeSecurityToken $_token,$_productCategoryRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->deleteProductCategory($_token,$_productCategoryRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named deleteReceipt
     * Documentation : Delete a customer receipt template
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_receiptRefNum
     * @return boolean
     */
    public function deleteReceipt(EBizChargeStructUeSecurityToken $_token,$_receiptRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->deleteReceipt($_token,$_receiptRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return boolean
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
