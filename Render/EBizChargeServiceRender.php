<?php
/**
 * File for class EBizChargeServiceRender
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceRender originally named Render
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceRender extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named renderReceipt
     * Documentation : Render receipt for transaction
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param integer $_receiptRefNum
     * @param string $_contentType
     * @return string
     */
    public function renderReceipt(EBizChargeStructUeSecurityToken $_token,$_refNum,$_receiptRefNum,$_contentType)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->renderReceipt($_token,$_refNum,$_receiptRefNum,$_contentType));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named renderReceiptByName
     * Documentation : Render receipt for transaction
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param string $_receiptName
     * @param string $_contentType
     * @return string
     */
    public function renderReceiptByName(EBizChargeStructUeSecurityToken $_token,$_refNum,$_receiptName,$_contentType)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->renderReceiptByName($_token,$_refNum,$_receiptName,$_contentType));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return string
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
