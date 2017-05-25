<?php
/**
 * File for class EBizChargeServiceRefund
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceRefund originally named Refund
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceRefund extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named refundTransaction
     * Documentation : Refund part or all of a transaction
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param double $_amount
     * @return EBizChargeStructTransactionResponse
     */
    public function refundTransaction(EBizChargeStructUeSecurityToken $_token,$_refNum,$_amount)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->refundTransaction($_token,$_refNum,$_amount));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return EBizChargeStructTransactionResponse
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
