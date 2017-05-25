<?php
/**
 * File for class EBizChargeStructProductInventory
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructProductInventory originally named ProductInventory
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructProductInventory extends EBizChargeWsdlClass
{
    /**
     * The InventoryLocation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $InventoryLocation;
    /**
     * The QtyOnHand
     * @var string
     */
    public $QtyOnHand;
    /**
     * The QtyOnOrder
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $QtyOnOrder;
    /**
     * The DateAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DateAvailable;
    /**
     * Constructor method for ProductInventory
     * @see parent::__construct()
     * @param string $_inventoryLocation
     * @param string $_qtyOnHand
     * @param string $_qtyOnOrder
     * @param string $_dateAvailable
     * @return EBizChargeStructProductInventory
     */
    public function __construct($_inventoryLocation = NULL,$_qtyOnHand = NULL,$_qtyOnOrder = NULL,$_dateAvailable = NULL)
    {
        parent::__construct(array('InventoryLocation'=>$_inventoryLocation,'QtyOnHand'=>$_qtyOnHand,'QtyOnOrder'=>$_qtyOnOrder,'DateAvailable'=>$_dateAvailable),false);
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
     * Get QtyOnHand value
     * @return string|null
     */
    public function getQtyOnHand()
    {
        return $this->QtyOnHand;
    }
    /**
     * Set QtyOnHand value
     * @param string $_qtyOnHand the QtyOnHand
     * @return string
     */
    public function setQtyOnHand($_qtyOnHand)
    {
        return ($this->QtyOnHand = $_qtyOnHand);
    }
    /**
     * Get QtyOnOrder value
     * @return string|null
     */
    public function getQtyOnOrder()
    {
        return $this->QtyOnOrder;
    }
    /**
     * Set QtyOnOrder value
     * @param string $_qtyOnOrder the QtyOnOrder
     * @return string
     */
    public function setQtyOnOrder($_qtyOnOrder)
    {
        return ($this->QtyOnOrder = $_qtyOnOrder);
    }
    /**
     * Get DateAvailable value
     * @return string|null
     */
    public function getDateAvailable()
    {
        return $this->DateAvailable;
    }
    /**
     * Set DateAvailable value
     * @param string $_dateAvailable the DateAvailable
     * @return string
     */
    public function setDateAvailable($_dateAvailable)
    {
        return ($this->DateAvailable = $_dateAvailable);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructProductInventory
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
