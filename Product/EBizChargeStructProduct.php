<?php
/**
 * File for class EBizChargeStructProduct
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructProduct originally named Product
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructProduct extends EBizChargeWsdlClass
{
    /**
     * The ProductRefNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ProductRefNum;
    /**
     * The ProductID
     * @var string
     */
    public $ProductID;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $SKU;
    /**
     * The UPC
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $UPC;
    /**
     * The Category
     * @var string
     */
    public $Category;
    /**
     * The Enabled
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $Enabled;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Description;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Model;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Weight;
    /**
     * The ShipWeight
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $ShipWeight;
    /**
     * The Price
     * @var double
     */
    public $Price;
    /**
     * The WholesalePrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $WholesalePrice;
    /**
     * The ListPrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $ListPrice;
    /**
     * The DateAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DateAvailable;
    /**
     * The Manufacturer
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Manufacturer;
    /**
     * The PhysicalGood
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $PhysicalGood;
    /**
     * The TaxClass
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TaxClass;
    /**
     * The MinQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var integer
     */
    public $MinQuantity;
    /**
     * The ImageURL
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ImageURL;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $URL;
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $Created;
    /**
     * The Modified
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $Modified;
    /**
     * The Inventory
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $Inventory;
    /**
     * The PriceTiers
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $PriceTiers;
    /**
     * Constructor method for Product
     * @see parent::__construct()
     * @param string $_productRefNum
     * @param string $_productID
     * @param string $_sKU
     * @param string $_uPC
     * @param string $_category
     * @param boolean $_enabled
     * @param string $_name
     * @param string $_description
     * @param string $_model
     * @param double $_weight
     * @param double $_shipWeight
     * @param double $_price
     * @param double $_wholesalePrice
     * @param double $_listPrice
     * @param string $_dateAvailable
     * @param string $_manufacturer
     * @param boolean $_physicalGood
     * @param string $_taxClass
     * @param integer $_minQuantity
     * @param string $_imageURL
     * @param string $_uRL
     * @param dateTime $_created
     * @param dateTime $_modified
     * @param Array $_inventory
     * @param Array $_priceTiers
     * @return EBizChargeStructProduct
     */
    public function __construct($_productRefNum = NULL,$_productID = NULL,$_sKU = NULL,$_uPC = NULL,$_category = NULL,$_enabled = NULL,$_name = NULL,$_description = NULL,$_model = NULL,$_weight = NULL,$_shipWeight = NULL,$_price = NULL,$_wholesalePrice = NULL,$_listPrice = NULL,$_dateAvailable = NULL,$_manufacturer = NULL,$_physicalGood = NULL,$_taxClass = NULL,$_minQuantity = NULL,$_imageURL = NULL,$_uRL = NULL,$_created = NULL,$_modified = NULL,$_inventory = NULL,$_priceTiers = NULL)
    {
        parent::__construct(array('ProductRefNum'=>$_productRefNum,'ProductID'=>$_productID,'SKU'=>$_sKU,'UPC'=>$_uPC,'Category'=>$_category,'Enabled'=>$_enabled,'Name'=>$_name,'Description'=>$_description,'Model'=>$_model,'Weight'=>$_weight,'ShipWeight'=>$_shipWeight,'Price'=>$_price,'WholesalePrice'=>$_wholesalePrice,'ListPrice'=>$_listPrice,'DateAvailable'=>$_dateAvailable,'Manufacturer'=>$_manufacturer,'PhysicalGood'=>$_physicalGood,'TaxClass'=>$_taxClass,'MinQuantity'=>$_minQuantity,'ImageURL'=>$_imageURL,'URL'=>$_uRL,'Created'=>$_created,'Modified'=>$_modified,'Inventory'=>$_inventory,'PriceTiers'=>$_priceTiers),false);
    }
    /**
     * Get ProductRefNum value
     * @return string|null
     */
    public function getProductRefNum()
    {
        return $this->ProductRefNum;
    }
    /**
     * Set ProductRefNum value
     * @param string $_productRefNum the ProductRefNum
     * @return string
     */
    public function setProductRefNum($_productRefNum)
    {
        return ($this->ProductRefNum = $_productRefNum);
    }
    /**
     * Get ProductID value
     * @return string|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param string $_productID the ProductID
     * @return string
     */
    public function setProductID($_productID)
    {
        return ($this->ProductID = $_productID);
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $_sKU the SKU
     * @return string
     */
    public function setSKU($_sKU)
    {
        return ($this->SKU = $_sKU);
    }
    /**
     * Get UPC value
     * @return string|null
     */
    public function getUPC()
    {
        return $this->UPC;
    }
    /**
     * Set UPC value
     * @param string $_uPC the UPC
     * @return string
     */
    public function setUPC($_uPC)
    {
        return ($this->UPC = $_uPC);
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $_category the Category
     * @return string
     */
    public function setCategory($_category)
    {
        return ($this->Category = $_category);
    }
    /**
     * Get Enabled value
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }
    /**
     * Set Enabled value
     * @param boolean $_enabled the Enabled
     * @return boolean
     */
    public function setEnabled($_enabled)
    {
        return ($this->Enabled = $_enabled);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
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
     * Get Model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->Model;
    }
    /**
     * Set Model value
     * @param string $_model the Model
     * @return string
     */
    public function setModel($_model)
    {
        return ($this->Model = $_model);
    }
    /**
     * Get Weight value
     * @return double|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param double $_weight the Weight
     * @return double
     */
    public function setWeight($_weight)
    {
        return ($this->Weight = $_weight);
    }
    /**
     * Get ShipWeight value
     * @return double|null
     */
    public function getShipWeight()
    {
        return $this->ShipWeight;
    }
    /**
     * Set ShipWeight value
     * @param double $_shipWeight the ShipWeight
     * @return double
     */
    public function setShipWeight($_shipWeight)
    {
        return ($this->ShipWeight = $_shipWeight);
    }
    /**
     * Get Price value
     * @return double|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param double $_price the Price
     * @return double
     */
    public function setPrice($_price)
    {
        return ($this->Price = $_price);
    }
    /**
     * Get WholesalePrice value
     * @return double|null
     */
    public function getWholesalePrice()
    {
        return $this->WholesalePrice;
    }
    /**
     * Set WholesalePrice value
     * @param double $_wholesalePrice the WholesalePrice
     * @return double
     */
    public function setWholesalePrice($_wholesalePrice)
    {
        return ($this->WholesalePrice = $_wholesalePrice);
    }
    /**
     * Get ListPrice value
     * @return double|null
     */
    public function getListPrice()
    {
        return $this->ListPrice;
    }
    /**
     * Set ListPrice value
     * @param double $_listPrice the ListPrice
     * @return double
     */
    public function setListPrice($_listPrice)
    {
        return ($this->ListPrice = $_listPrice);
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
     * Get Manufacturer value
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->Manufacturer;
    }
    /**
     * Set Manufacturer value
     * @param string $_manufacturer the Manufacturer
     * @return string
     */
    public function setManufacturer($_manufacturer)
    {
        return ($this->Manufacturer = $_manufacturer);
    }
    /**
     * Get PhysicalGood value
     * @return boolean|null
     */
    public function getPhysicalGood()
    {
        return $this->PhysicalGood;
    }
    /**
     * Set PhysicalGood value
     * @param boolean $_physicalGood the PhysicalGood
     * @return boolean
     */
    public function setPhysicalGood($_physicalGood)
    {
        return ($this->PhysicalGood = $_physicalGood);
    }
    /**
     * Get TaxClass value
     * @return string|null
     */
    public function getTaxClass()
    {
        return $this->TaxClass;
    }
    /**
     * Set TaxClass value
     * @param string $_taxClass the TaxClass
     * @return string
     */
    public function setTaxClass($_taxClass)
    {
        return ($this->TaxClass = $_taxClass);
    }
    /**
     * Get MinQuantity value
     * @return integer|null
     */
    public function getMinQuantity()
    {
        return $this->MinQuantity;
    }
    /**
     * Set MinQuantity value
     * @param integer $_minQuantity the MinQuantity
     * @return integer
     */
    public function setMinQuantity($_minQuantity)
    {
        return ($this->MinQuantity = $_minQuantity);
    }
    /**
     * Get ImageURL value
     * @return string|null
     */
    public function getImageURL()
    {
        return $this->ImageURL;
    }
    /**
     * Set ImageURL value
     * @param string $_imageURL the ImageURL
     * @return string
     */
    public function setImageURL($_imageURL)
    {
        return ($this->ImageURL = $_imageURL);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $_uRL the URL
     * @return string
     */
    public function setURL($_uRL)
    {
        return ($this->URL = $_uRL);
    }
    /**
     * Get Created value
     * @return dateTime|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param dateTime $_created the Created
     * @return dateTime
     */
    public function setCreated($_created)
    {
        return ($this->Created = $_created);
    }
    /**
     * Get Modified value
     * @return dateTime|null
     */
    public function getModified()
    {
        return $this->Modified;
    }
    /**
     * Set Modified value
     * @param dateTime $_modified the Modified
     * @return dateTime
     */
    public function setModified($_modified)
    {
        return ($this->Modified = $_modified);
    }
    /**
     * Get Inventory value
     * @return Array|null
     */
    public function getInventory()
    {
        return $this->Inventory;
    }
    /**
     * Set Inventory value
     * @param Array $_inventory the Inventory
     * @return Array
     */
    public function setInventory($_inventory)
    {
        return ($this->Inventory = $_inventory);
    }
    /**
     * Get PriceTiers value
     * @return Array|null
     */
    public function getPriceTiers()
    {
        return $this->PriceTiers;
    }
    /**
     * Set PriceTiers value
     * @param Array $_priceTiers the PriceTiers
     * @return Array
     */
    public function setPriceTiers($_priceTiers)
    {
        return ($this->PriceTiers = $_priceTiers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructProduct
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
