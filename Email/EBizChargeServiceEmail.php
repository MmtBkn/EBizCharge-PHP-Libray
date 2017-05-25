<?php
/**
 * File for class EBizChargeServiceEmail
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceEmail originally named Email
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceEmail extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named emailTransactionReceipt
     * Documentation : Email a transaction receipt specified by ReceiptRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param integer $_receiptRefNum
     * @param string $_email
     * @return boolean
     */
    public function emailTransactionReceipt(EBizChargeStructUeSecurityToken $_token,$_refNum,$_receiptRefNum,$_email)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->emailTransactionReceipt($_token,$_refNum,$_receiptRefNum,$_email));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named emailTransactionReceiptByName
     * Documentation : Email a transaction receipt specied by ReceiptName
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param string $_receiptName
     * @param string $_email
     * @return boolean
     */
    public function emailTransactionReceiptByName(EBizChargeStructUeSecurityToken $_token,$_refNum,$_receiptName,$_email)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->emailTransactionReceiptByName($_token,$_refNum,$_receiptName,$_email));
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
