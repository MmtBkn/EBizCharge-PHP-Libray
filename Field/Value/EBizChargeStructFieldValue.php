<?php
/**
 * File for class EBizChargeStructFieldValue
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructFieldValue originally named FieldValue
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructFieldValue extends EBizChargeWsdlClass
{
    /**
     * The Field
     * @var string
     */
    public $Field;
    /**
     * The Value
     * @var string
     */
    public $Value;
    /**
     * Constructor method for FieldValue
     * @see parent::__construct()
     * @param string $_field
     * @param string $_value
     * @return EBizChargeStructFieldValue
     */
    public function __construct($_field = NULL,$_value = NULL)
    {
        parent::__construct(array('Field'=>$_field,'Value'=>$_value),false);
    }
    /**
     * Get Field value
     * @return string|null
     */
    public function getField()
    {
        return $this->Field;
    }
    /**
     * Set Field value
     * @param string $_field the Field
     * @return string
     */
    public function setField($_field)
    {
        return ($this->Field = $_field);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $_value the Value
     * @return string
     */
    public function setValue($_value)
    {
        return ($this->Value = $_value);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructFieldValue
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
