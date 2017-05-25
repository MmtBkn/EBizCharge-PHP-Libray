<?php
/**
 * File for class EBizChargeStructTransactionDetail
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructTransactionDetail originally named TransactionDetail
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructTransactionDetail extends EBizChargeWsdlClass
{
    /**
     * The AllowPartialAuth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $AllowPartialAuth;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Amount;
    /**
     * The Clerk
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Clerk;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Currency;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Description;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Comments;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Discount;
    /**
     * The Duty
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Duty;
    /**
     * The Invoice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Invoice;
    /**
     * The NonTax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $NonTax;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $OrderID;
    /**
     * The PONum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $PONum;
    /**
     * The SessionID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $SessionID;
    /**
     * The ShipFromZip
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ShipFromZip;
    /**
     * The Shipping
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Shipping;
    /**
     * The Subtotal
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Subtotal;
    /**
     * The Table
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Table;
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Tax;
    /**
     * The Terminal
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Terminal;
    /**
     * The Tip
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Tip;
    /**
     * Constructor method for TransactionDetail
     * @see parent::__construct()
     * @param boolean $_allowPartialAuth
     * @param double $_amount
     * @param string $_clerk
     * @param string $_currency
     * @param string $_description
     * @param string $_comments
     * @param double $_discount
     * @param double $_duty
     * @param string $_invoice
     * @param boolean $_nonTax
     * @param string $_orderID
     * @param string $_pONum
     * @param string $_sessionID
     * @param string $_shipFromZip
     * @param double $_shipping
     * @param double $_subtotal
     * @param string $_table
     * @param double $_tax
     * @param string $_terminal
     * @param double $_tip
     * @return EBizChargeStructTransactionDetail
     */
    public function __construct($_allowPartialAuth = NULL,$_amount = NULL,$_clerk = NULL,$_currency = NULL,$_description = NULL,$_comments = NULL,$_discount = NULL,$_duty = NULL,$_invoice = NULL,$_nonTax = NULL,$_orderID = NULL,$_pONum = NULL,$_sessionID = NULL,$_shipFromZip = NULL,$_shipping = NULL,$_subtotal = NULL,$_table = NULL,$_tax = NULL,$_terminal = NULL,$_tip = NULL)
    {
        parent::__construct(array('AllowPartialAuth'=>$_allowPartialAuth,'Amount'=>$_amount,'Clerk'=>$_clerk,'Currency'=>$_currency,'Description'=>$_description,'Comments'=>$_comments,'Discount'=>$_discount,'Duty'=>$_duty,'Invoice'=>$_invoice,'NonTax'=>$_nonTax,'OrderID'=>$_orderID,'PONum'=>$_pONum,'SessionID'=>$_sessionID,'ShipFromZip'=>$_shipFromZip,'Shipping'=>$_shipping,'Subtotal'=>$_subtotal,'Table'=>$_table,'Tax'=>$_tax,'Terminal'=>$_terminal,'Tip'=>$_tip),false);
    }
    /**
     * Get AllowPartialAuth value
     * @return boolean|null
     */
    public function getAllowPartialAuth()
    {
        return $this->AllowPartialAuth;
    }
    /**
     * Set AllowPartialAuth value
     * @param boolean $_allowPartialAuth the AllowPartialAuth
     * @return boolean
     */
    public function setAllowPartialAuth($_allowPartialAuth)
    {
        return ($this->AllowPartialAuth = $_allowPartialAuth);
    }
    /**
     * Get Amount value
     * @return double|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param double $_amount the Amount
     * @return double
     */
    public function setAmount($_amount)
    {
        return ($this->Amount = $_amount);
    }
    /**
     * Get Clerk value
     * @return string|null
     */
    public function getClerk()
    {
        return $this->Clerk;
    }
    /**
     * Set Clerk value
     * @param string $_clerk the Clerk
     * @return string
     */
    public function setClerk($_clerk)
    {
        return ($this->Clerk = $_clerk);
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $_currency the Currency
     * @return string
     */
    public function setCurrency($_currency)
    {
        return ($this->Currency = $_currency);
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
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $_comments the Comments
     * @return string
     */
    public function setComments($_comments)
    {
        return ($this->Comments = $_comments);
    }
    /**
     * Get Discount value
     * @return double|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param double $_discount the Discount
     * @return double
     */
    public function setDiscount($_discount)
    {
        return ($this->Discount = $_discount);
    }
    /**
     * Get Duty value
     * @return double|null
     */
    public function getDuty()
    {
        return $this->Duty;
    }
    /**
     * Set Duty value
     * @param double $_duty the Duty
     * @return double
     */
    public function setDuty($_duty)
    {
        return ($this->Duty = $_duty);
    }
    /**
     * Get Invoice value
     * @return string|null
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }
    /**
     * Set Invoice value
     * @param string $_invoice the Invoice
     * @return string
     */
    public function setInvoice($_invoice)
    {
        return ($this->Invoice = $_invoice);
    }
    /**
     * Get NonTax value
     * @return boolean|null
     */
    public function getNonTax()
    {
        return $this->NonTax;
    }
    /**
     * Set NonTax value
     * @param boolean $_nonTax the NonTax
     * @return boolean
     */
    public function setNonTax($_nonTax)
    {
        return ($this->NonTax = $_nonTax);
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $_orderID the OrderID
     * @return string
     */
    public function setOrderID($_orderID)
    {
        return ($this->OrderID = $_orderID);
    }
    /**
     * Get PONum value
     * @return string|null
     */
    public function getPONum()
    {
        return $this->PONum;
    }
    /**
     * Set PONum value
     * @param string $_pONum the PONum
     * @return string
     */
    public function setPONum($_pONum)
    {
        return ($this->PONum = $_pONum);
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $_sessionID the SessionID
     * @return string
     */
    public function setSessionID($_sessionID)
    {
        return ($this->SessionID = $_sessionID);
    }
    /**
     * Get ShipFromZip value
     * @return string|null
     */
    public function getShipFromZip()
    {
        return $this->ShipFromZip;
    }
    /**
     * Set ShipFromZip value
     * @param string $_shipFromZip the ShipFromZip
     * @return string
     */
    public function setShipFromZip($_shipFromZip)
    {
        return ($this->ShipFromZip = $_shipFromZip);
    }
    /**
     * Get Shipping value
     * @return double|null
     */
    public function getShipping()
    {
        return $this->Shipping;
    }
    /**
     * Set Shipping value
     * @param double $_shipping the Shipping
     * @return double
     */
    public function setShipping($_shipping)
    {
        return ($this->Shipping = $_shipping);
    }
    /**
     * Get Subtotal value
     * @return double|null
     */
    public function getSubtotal()
    {
        return $this->Subtotal;
    }
    /**
     * Set Subtotal value
     * @param double $_subtotal the Subtotal
     * @return double
     */
    public function setSubtotal($_subtotal)
    {
        return ($this->Subtotal = $_subtotal);
    }
    /**
     * Get Table value
     * @return string|null
     */
    public function getTable()
    {
        return $this->Table;
    }
    /**
     * Set Table value
     * @param string $_table the Table
     * @return string
     */
    public function setTable($_table)
    {
        return ($this->Table = $_table);
    }
    /**
     * Get Tax value
     * @return double|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param double $_tax the Tax
     * @return double
     */
    public function setTax($_tax)
    {
        return ($this->Tax = $_tax);
    }
    /**
     * Get Terminal value
     * @return string|null
     */
    public function getTerminal()
    {
        return $this->Terminal;
    }
    /**
     * Set Terminal value
     * @param string $_terminal the Terminal
     * @return string
     */
    public function setTerminal($_terminal)
    {
        return ($this->Terminal = $_terminal);
    }
    /**
     * Get Tip value
     * @return double|null
     */
    public function getTip()
    {
        return $this->Tip;
    }
    /**
     * Set Tip value
     * @param double $_tip the Tip
     * @return double
     */
    public function setTip($_tip)
    {
        return ($this->Tip = $_tip);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructTransactionDetail
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
