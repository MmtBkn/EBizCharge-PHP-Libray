<?php
/**
 * File for class EBizChargeStructAccountDetails
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructAccountDetails originally named AccountDetails
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructAccountDetails extends EBizChargeWsdlClass
{
    /**
     * The CardholderAuthentication
     * @var string
     */
    public $CardholderAuthentication;
    /**
     * The CheckPlatform
     * @var string
     */
    public $CheckPlatform;
    /**
     * The CreditCardPlatform
     * @var string
     */
    public $CreditCardPlatform;
    /**
     * The DebitCardSupport
     * @var boolean
     */
    public $DebitCardSupport;
    /**
     * The DirectPayPlatform
     * @var string
     */
    public $DirectPayPlatform;
    /**
     * The Industry
     * @var string
     */
    public $Industry;
    /**
     * The SupportedCurrencies
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $SupportedCurrencies;
    /**
     * Constructor method for AccountDetails
     * @see parent::__construct()
     * @param string $_cardholderAuthentication
     * @param string $_checkPlatform
     * @param string $_creditCardPlatform
     * @param boolean $_debitCardSupport
     * @param string $_directPayPlatform
     * @param string $_industry
     * @param Array $_supportedCurrencies
     * @return EBizChargeStructAccountDetails
     */
    public function __construct($_cardholderAuthentication = NULL,$_checkPlatform = NULL,$_creditCardPlatform = NULL,$_debitCardSupport = NULL,$_directPayPlatform = NULL,$_industry = NULL,$_supportedCurrencies = NULL)
    {
        parent::__construct(array('CardholderAuthentication'=>$_cardholderAuthentication,'CheckPlatform'=>$_checkPlatform,'CreditCardPlatform'=>$_creditCardPlatform,'DebitCardSupport'=>$_debitCardSupport,'DirectPayPlatform'=>$_directPayPlatform,'Industry'=>$_industry,'SupportedCurrencies'=>$_supportedCurrencies),false);
    }
    /**
     * Get CardholderAuthentication value
     * @return string|null
     */
    public function getCardholderAuthentication()
    {
        return $this->CardholderAuthentication;
    }
    /**
     * Set CardholderAuthentication value
     * @param string $_cardholderAuthentication the CardholderAuthentication
     * @return string
     */
    public function setCardholderAuthentication($_cardholderAuthentication)
    {
        return ($this->CardholderAuthentication = $_cardholderAuthentication);
    }
    /**
     * Get CheckPlatform value
     * @return string|null
     */
    public function getCheckPlatform()
    {
        return $this->CheckPlatform;
    }
    /**
     * Set CheckPlatform value
     * @param string $_checkPlatform the CheckPlatform
     * @return string
     */
    public function setCheckPlatform($_checkPlatform)
    {
        return ($this->CheckPlatform = $_checkPlatform);
    }
    /**
     * Get CreditCardPlatform value
     * @return string|null
     */
    public function getCreditCardPlatform()
    {
        return $this->CreditCardPlatform;
    }
    /**
     * Set CreditCardPlatform value
     * @param string $_creditCardPlatform the CreditCardPlatform
     * @return string
     */
    public function setCreditCardPlatform($_creditCardPlatform)
    {
        return ($this->CreditCardPlatform = $_creditCardPlatform);
    }
    /**
     * Get DebitCardSupport value
     * @return boolean|null
     */
    public function getDebitCardSupport()
    {
        return $this->DebitCardSupport;
    }
    /**
     * Set DebitCardSupport value
     * @param boolean $_debitCardSupport the DebitCardSupport
     * @return boolean
     */
    public function setDebitCardSupport($_debitCardSupport)
    {
        return ($this->DebitCardSupport = $_debitCardSupport);
    }
    /**
     * Get DirectPayPlatform value
     * @return string|null
     */
    public function getDirectPayPlatform()
    {
        return $this->DirectPayPlatform;
    }
    /**
     * Set DirectPayPlatform value
     * @param string $_directPayPlatform the DirectPayPlatform
     * @return string
     */
    public function setDirectPayPlatform($_directPayPlatform)
    {
        return ($this->DirectPayPlatform = $_directPayPlatform);
    }
    /**
     * Get Industry value
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->Industry;
    }
    /**
     * Set Industry value
     * @param string $_industry the Industry
     * @return string
     */
    public function setIndustry($_industry)
    {
        return ($this->Industry = $_industry);
    }
    /**
     * Get SupportedCurrencies value
     * @return Array|null
     */
    public function getSupportedCurrencies()
    {
        return $this->SupportedCurrencies;
    }
    /**
     * Set SupportedCurrencies value
     * @param Array $_supportedCurrencies the SupportedCurrencies
     * @return Array
     */
    public function setSupportedCurrencies($_supportedCurrencies)
    {
        return ($this->SupportedCurrencies = $_supportedCurrencies);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructAccountDetails
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
