<?php
/**
 * File for class EBizChargeStructUeSecurityToken
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructUeSecurityToken originally named ueSecurityToken
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructUeSecurityToken extends EBizChargeWsdlClass
{
    /**
     * The ClientIP
     * @var string
     */
    public $ClientIP;
    /**
     * The PinHash
     * @var EBizChargeStructUeHash
     */
    public $PinHash;
    /**
     * The SourceKey
     * @var string
     */
    public $SourceKey;
    /**
     * Constructor method for ueSecurityToken
     * @see parent::__construct()
     * @param string $_clientIP
     * @param EBizChargeStructUeHash $_pinHash
     * @param string $_sourceKey
     * @return EBizChargeStructUeSecurityToken
     */
    public function __construct($_clientIP = NULL,$_pinHash = NULL,$_sourceKey = NULL)
    {
        parent::__construct(array('ClientIP'=>$_clientIP,'PinHash'=>$_pinHash,'SourceKey'=>$_sourceKey),false);
    }
    /**
     * Get ClientIP value
     * @return string|null
     */
    public function getClientIP()
    {
        return $this->ClientIP;
    }
    /**
     * Set ClientIP value
     * @param string $_clientIP the ClientIP
     * @return string
     */
    public function setClientIP($_clientIP)
    {
        return ($this->ClientIP = $_clientIP);
    }
    /**
     * Get PinHash value
     * @return EBizChargeStructUeHash|null
     */
    public function getPinHash()
    {
        return $this->PinHash;
    }
    /**
     * Set PinHash value
     * @param EBizChargeStructUeHash $_pinHash the PinHash
     * @return EBizChargeStructUeHash
     */
    public function setPinHash($_pinHash)
    {
        return ($this->PinHash = $_pinHash);
    }
    /**
     * Get SourceKey value
     * @return string|null
     */
    public function getSourceKey()
    {
        return $this->SourceKey;
    }
    /**
     * Set SourceKey value
     * @param string $_sourceKey the SourceKey
     * @return string
     */
    public function setSourceKey($_sourceKey)
    {
        return ($this->SourceKey = $_sourceKey);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructUeSecurityToken
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
