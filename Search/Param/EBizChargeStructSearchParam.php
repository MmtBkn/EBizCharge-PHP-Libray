<?php
/**
 * File for class EBizChargeStructSearchParam
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructSearchParam originally named SearchParam
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructSearchParam extends EBizChargeWsdlClass
{
    /**
     * The Field
     * @var string
     */
    public $Field;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The Value
     * @var string
     */
    public $Value;
    /**
     * Constructor method for SearchParam
     * @see parent::__construct()
     * @param string $_field
     * @param string $_type
     * @param string $_value
     * @return EBizChargeStructSearchParam
     */
    public function __construct($_field = NULL,$_type = NULL,$_value = NULL)
    {
        parent::__construct(array('Field'=>$_field,'Type'=>$_type,'Value'=>$_value),false);
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
     * @return EBizChargeStructSearchParam
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
