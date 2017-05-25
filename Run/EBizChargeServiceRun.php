<?php
/**
 * File for class EBizChargeServiceRun
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceRun originally named Run
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceRun extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named runBatchUpload
     * Documentation : Start a Paused Batch Upload
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_uploadRefNum
     * @return boolean
     */
    public function runBatchUpload(EBizChargeStructUeSecurityToken $_token,$_uploadRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runBatchUpload($_token,$_uploadRefNum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runCredit
     * Documentation : Run a Credit transaction
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructTransactionRequestObject $_params
     * @return EBizChargeStructTransactionResponse
     */
    public function runCredit(EBizChargeStructUeSecurityToken $_token,EBizChargeStructTransactionRequestObject $_params)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runCredit($_token,$_params));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runCheckCredit
     * Documentation : Run a Check Credit transaction
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructTransactionRequestObject $_params
     * @return EBizChargeStructTransactionResponse
     */
    public function runCheckCredit(EBizChargeStructUeSecurityToken $_token,EBizChargeStructTransactionRequestObject $_params)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runCheckCredit($_token,$_params));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runCustomerTransaction
     * Documentation : Run a sale for a customer stored in the customer database
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @param integer $_paymentMethodID
     * @param EBizChargeStructCustomerTransactionRequest $_parameters
     * @return EBizChargeStructTransactionResponse
     */
    public function runCustomerTransaction(EBizChargeStructUeSecurityToken $_token,$_custNum,$_paymentMethodID,EBizChargeStructCustomerTransactionRequest $_parameters)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runCustomerTransaction($_token,$_custNum,$_paymentMethodID,$_parameters));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runQuickSale
     * Documentation : Run a sale based on the credit card details of a previous transaction.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param EBizChargeStructTransactionDetail $_details
     * @param boolean $_authOnly
     * @return EBizChargeStructTransactionResponse
     */
    public function runQuickSale(EBizChargeStructUeSecurityToken $_token,$_refNum,EBizChargeStructTransactionDetail $_details,$_authOnly)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runQuickSale($_token,$_refNum,$_details,$_authOnly));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runQuickCredit
     * Documentation : Run a credit based on the credit card details of a previous transaction.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param EBizChargeStructTransactionDetail $_details
     * @return EBizChargeStructTransactionResponse
     */
    public function runQuickCredit(EBizChargeStructUeSecurityToken $_token,$_refNum,EBizChargeStructTransactionDetail $_details)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runQuickCredit($_token,$_refNum,$_details));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runCheckSale
     * Documentation : Run a Check Sale
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructTransactionRequestObject $_params
     * @return EBizChargeStructTransactionResponse
     */
    public function runCheckSale(EBizChargeStructUeSecurityToken $_token,EBizChargeStructTransactionRequestObject $_params)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runCheckSale($_token,$_params));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runSale
     * Documentation : Run a Credit CardSale
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructTransactionRequestObject $_params
     * @return EBizChargeStructTransactionResponse
     */
    public function runSale(EBizChargeStructUeSecurityToken $_token,EBizChargeStructTransactionRequestObject $_params)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runSale($_token,$_params));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runAuthOnly
     * Documentation : Run an AuthOnly Credit Card Sale
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructTransactionRequestObject $_params
     * @return EBizChargeStructTransactionResponse
     */
    public function runAuthOnly(EBizChargeStructUeSecurityToken $_token,EBizChargeStructTransactionRequestObject $_params)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runAuthOnly($_token,$_params));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runTransaction
     * Documentation : Runs a Transaction using the USAePay Transaction API
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructTransactionRequestObject $_parameters
     * @return EBizChargeStructTransactionResponse
     */
    public function runTransaction(EBizChargeStructUeSecurityToken $_token,EBizChargeStructTransactionRequestObject $_parameters)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runTransaction($_token,$_parameters));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named runTransactionAPI
     * Documentation : Provides a Soap wrapper for the USAePay Transaction API
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param FieldValueArray $_parameters
     * @return EBizChargeStructTransactionResponse
     */
    public function runTransactionAPI(EBizChargeStructUeSecurityToken $_token,$_parameters)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->runTransactionAPI($_token,$_parameters));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return boolean|EBizChargeStructTransactionResponse
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
