<?php
/**
 * File for class EBizChargeStructUeHash
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructUeHash originally named ueHash
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructUeHash extends EBizChargeWsdlClass
{
    /**
     * The HashValue
     * @var string
     */
    public $HashValue;
    /**
     * The Seed
     * @var string
     */
    public $Seed;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for ueHash
     * @see parent::__construct()
     * @param string $_hashValue
     * @param string $_seed
     * @param string $_type
     * @return EBizChargeStructUeHash
     */
    public function __construct($_hashValue = NULL,$_seed = NULL,$_type = NULL)
    {
        parent::__construct(array('HashValue'=>$_hashValue,'Seed'=>$_seed,'Type'=>$_type),false);
    }
    /**
     * Get HashValue value
     * @return string|null
     */
    public function getHashValue()
    {
        return $this->HashValue;
    }
    /**
     * Set HashValue value
     * @param string $_hashValue the HashValue
     * @return string
     */
    public function setHashValue($_hashValue)
    {
        return ($this->HashValue = $_hashValue);
    }
    /**
     * Get Seed value
     * @return string|null
     */
    public function getSeed()
    {
        return $this->Seed;
    }
    /**
     * Set Seed value
     * @param string $_seed the Seed
     * @return string
     */
    public function setSeed($_seed)
    {
        return ($this->Seed = $_seed);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $_type the Type
     * @return string
     */
    public function setType($_type)
    {
        return ($this->Type = $_type);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructUeHash
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
