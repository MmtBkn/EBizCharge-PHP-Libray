<?php
/**
 * File for class EBizChargeStructLineItem
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructLineItem originally named LineItem
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructLineItem extends EBizChargeWsdlClass
{
    /**
     * The ProductRefNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ProductRefNum;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $SKU;
    /**
     * The CommodityCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CommodityCode;
    /**
     * The ProductName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ProductName;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Description;
    /**
     * The DiscountAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DiscountAmount;
    /**
     * The DiscountRate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DiscountRate;
    /**
     * The UnitOfMeasure
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $UnitOfMeasure;
    /**
     * The UnitPrice
     * @var string
     */
    public $UnitPrice;
    /**
     * The Qty
     * @var string
     */
    public $Qty;
    /**
     * The Taxable
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $Taxable;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TaxAmount;
    /**
     * The TaxRate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TaxRate;
    /**
     * Constructor method for LineItem
     * @see parent::__construct()
     * @param string $_productRefNum
     * @param string $_sKU
     * @param string $_commodityCode
     * @param string $_productName
     * @param string $_description
     * @param string $_discountAmount
     * @param string $_discountRate
     * @param string $_unitOfMeasure
     * @param string $_unitPrice
     * @param string $_qty
     * @param boolean $_taxable
     * @param string $_taxAmount
     * @param string $_taxRate
     * @return EBizChargeStructLineItem
     */
    public function __construct($_productRefNum = NULL,$_sKU = NULL,$_commodityCode = NULL,$_productName = NULL,$_description = NULL,$_discountAmount = NULL,$_discountRate = NULL,$_unitOfMeasure = NULL,$_unitPrice = NULL,$_qty = NULL,$_taxable = NULL,$_taxAmount = NULL,$_taxRate = NULL)
    {
        parent::__construct(array('ProductRefNum'=>$_productRefNum,'SKU'=>$_sKU,'CommodityCode'=>$_commodityCode,'ProductName'=>$_productName,'Description'=>$_description,'DiscountAmount'=>$_discountAmount,'DiscountRate'=>$_discountRate,'UnitOfMeasure'=>$_unitOfMeasure,'UnitPrice'=>$_unitPrice,'Qty'=>$_qty,'Taxable'=>$_taxable,'TaxAmount'=>$_taxAmount,'TaxRate'=>$_taxRate),false);
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
     * Get CommodityCode value
     * @return string|null
     */
    public function getCommodityCode()
    {
        return $this->CommodityCode;
    }
    /**
     * Set CommodityCode value
     * @param string $_commodityCode the CommodityCode
     * @return string
     */
    public function setCommodityCode($_commodityCode)
    {
        return ($this->CommodityCode = $_commodityCode);
    }
    /**
     * Get ProductName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param string $_productName the ProductName
     * @return string
     */
    public function setProductName($_productName)
    {
        return ($this->ProductName = $_productName);
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
     * Get DiscountAmount value
     * @return string|null
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }
    /**
     * Set DiscountAmount value
     * @param string $_discountAmount the DiscountAmount
     * @return string
     */
    public function setDiscountAmount($_discountAmount)
    {
        return ($this->DiscountAmount = $_discountAmount);
    }
    /**
     * Get DiscountRate value
     * @return string|null
     */
    public function getDiscountRate()
    {
        return $this->DiscountRate;
    }
    /**
     * Set DiscountRate value
     * @param string $_discountRate the DiscountRate
     * @return string
     */
    public function setDiscountRate($_discountRate)
    {
        return ($this->DiscountRate = $_discountRate);
    }
    /**
     * Get UnitOfMeasure value
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }
    /**
     * Set UnitOfMeasure value
     * @param string $_unitOfMeasure the UnitOfMeasure
     * @return string
     */
    public function setUnitOfMeasure($_unitOfMeasure)
    {
        return ($this->UnitOfMeasure = $_unitOfMeasure);
    }
    /**
     * Get UnitPrice value
     * @return string|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param string $_unitPrice the UnitPrice
     * @return string
     */
    public function setUnitPrice($_unitPrice)
    {
        return ($this->UnitPrice = $_unitPrice);
    }
    /**
     * Get Qty value
     * @return string|null
     */
    public function getQty()
    {
        return $this->Qty;
    }
    /**
     * Set Qty value
     * @param string $_qty the Qty
     * @return string
     */
    public function setQty($_qty)
    {
        return ($this->Qty = $_qty);
    }
    /**
     * Get Taxable value
     * @return boolean|null
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }
    /**
     * Set Taxable value
     * @param boolean $_taxable the Taxable
     * @return boolean
     */
    public function setTaxable($_taxable)
    {
        return ($this->Taxable = $_taxable);
    }
    /**
     * Get TaxAmount value
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param string $_taxAmount the TaxAmount
     * @return string
     */
    public function setTaxAmount($_taxAmount)
    {
        return ($this->TaxAmount = $_taxAmount);
    }
    /**
     * Get TaxRate value
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }
    /**
     * Set TaxRate value
     * @param string $_taxRate the TaxRate
     * @return string
     */
    public function setTaxRate($_taxRate)
    {
        return ($this->TaxRate = $_taxRate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructLineItem
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
