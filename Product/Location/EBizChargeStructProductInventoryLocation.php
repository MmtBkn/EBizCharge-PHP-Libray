<?php
/**
 * File for class EBizChargeStructProductInventoryLocation
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructProductInventoryLocation originally named ProductInventoryLocation
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructProductInventoryLocation extends EBizChargeWsdlClass
{
    /**
     * The InventoryLocation
     * @var string
     */
    public $InventoryLocation;
    /**
     * The LocationName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $LocationName;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for ProductInventoryLocation
     * @see parent::__construct()
     * @param string $_inventoryLocation
     * @param string $_locationName
     * @param string $_description
     * @return EBizChargeStructProductInventoryLocation
     */
    public function __construct($_inventoryLocation = NULL,$_locationName = NULL,$_description = NULL)
    {
        parent::__construct(array('InventoryLocation'=>$_inventoryLocation,'LocationName'=>$_locationName,'Description'=>$_description),false);
    }
    /**
     * Get InventoryLocation value
     * @return string|null
     */
    public function getInventoryLocation()
    {
        return $this->InventoryLocation;
    }
    /**
     * Set InventoryLocation value
     * @param string $_inventoryLocation the InventoryLocation
     * @return string
     */
    public function setInventoryLocation($_inventoryLocation)
    {
        return ($this->InventoryLocation = $_inventoryLocation);
    }
    /**
     * Get LocationName value
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->LocationName;
    }
    /**
     * Set LocationName value
     * @param string $_locationName the LocationName
     * @return string
     */
    public function setLocationName($_locationName)
    {
        return ($this->LocationName = $_locationName);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $_description the Description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->Description = $_description);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructProductInventoryLocation
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
