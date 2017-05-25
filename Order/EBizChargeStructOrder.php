<?php
/**
 * File for class EBizChargeStructOrder
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructOrder originally named Order
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructOrder extends EBizChargeWsdlClass
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Age;
    /**
     * The AgeVerification
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AgeVerification;
    /**
     * The BillingAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var EBizChargeStructAddress
     */
    public $BillingAddress;
    /**
     * The Clerk
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Clerk;
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Created;
    /**
     * The CustomFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $CustomFields;
    /**
     * The DiscountAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $DiscountAmount;
    /**
     * The DiscountDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DiscountDescription;
    /**
     * The DiscountRate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $DiscountRate;
    /**
     * The DiscountType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DiscountType;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $LineItems;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Notes;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $OrderID;
    /**
     * The OrderRefNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $OrderRefNum;
    /**
     * The OrderType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $OrderType;
    /**
     * The Paid
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Paid;
    /**
     * The Payments
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $Payments;
    /**
     * The PONUm
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $PONUm;
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var EBizChargeStructAddress
     */
    public $ShippingAddress;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Source;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Status;
    /**
     * The Table
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Table;
    /**
     * The Terminal
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Terminal;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $TaxAmount;
    /**
     * The TaxDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TaxDescription;
    /**
     * The TaxLocation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TaxLocation;
    /**
     * The TaxRate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $TaxRate;
    /**
     * Constructor method for Order
     * @see parent::__construct()
     * @param string $_age
     * @param string $_ageVerification
     * @param EBizChargeStructAddress $_billingAddress
     * @param string $_clerk
     * @param string $_created
     * @param Array $_customFields
     * @param double $_discountAmount
     * @param string $_discountDescription
     * @param double $_discountRate
     * @param string $_discountType
     * @param Array $_lineItems
     * @param string $_notes
     * @param string $_orderID
     * @param string $_orderRefNum
     * @param string $_orderType
     * @param string $_paid
     * @param Array $_payments
     * @param string $_pONUm
     * @param EBizChargeStructAddress $_shippingAddress
     * @param string $_source
     * @param string $_status
     * @param string $_table
     * @param string $_terminal
     * @param double $_taxAmount
     * @param string $_taxDescription
     * @param string $_taxLocation
     * @param double $_taxRate
     * @return EBizChargeStructOrder
     */
    public function __construct($_age = NULL,$_ageVerification = NULL,$_billingAddress = NULL,$_clerk = NULL,$_created = NULL,$_customFields = NULL,$_discountAmount = NULL,$_discountDescription = NULL,$_discountRate = NULL,$_discountType = NULL,$_lineItems = NULL,$_notes = NULL,$_orderID = NULL,$_orderRefNum = NULL,$_orderType = NULL,$_paid = NULL,$_payments = NULL,$_pONUm = NULL,$_shippingAddress = NULL,$_source = NULL,$_status = NULL,$_table = NULL,$_terminal = NULL,$_taxAmount = NULL,$_taxDescription = NULL,$_taxLocation = NULL,$_taxRate = NULL)
    {
        parent::__construct(array('Age'=>$_age,'AgeVerification'=>$_ageVerification,'BillingAddress'=>$_billingAddress,'Clerk'=>$_clerk,'Created'=>$_created,'CustomFields'=>$_customFields,'DiscountAmount'=>$_discountAmount,'DiscountDescription'=>$_discountDescription,'DiscountRate'=>$_discountRate,'DiscountType'=>$_discountType,'LineItems'=>$_lineItems,'Notes'=>$_notes,'OrderID'=>$_orderID,'OrderRefNum'=>$_orderRefNum,'OrderType'=>$_orderType,'Paid'=>$_paid,'Payments'=>$_payments,'PONUm'=>$_pONUm,'ShippingAddress'=>$_shippingAddress,'Source'=>$_source,'Status'=>$_status,'Table'=>$_table,'Terminal'=>$_terminal,'TaxAmount'=>$_taxAmount,'TaxDescription'=>$_taxDescription,'TaxLocation'=>$_taxLocation,'TaxRate'=>$_taxRate),false);
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $_age the Age
     * @return string
     */
    public function setAge($_age)
    {
        return ($this->Age = $_age);
    }
    /**
     * Get AgeVerification value
     * @return string|null
     */
    public function getAgeVerification()
    {
        return $this->AgeVerification;
    }
    /**
     * Set AgeVerification value
     * @param string $_ageVerification the AgeVerification
     * @return string
     */
    public function setAgeVerification($_ageVerification)
    {
        return ($this->AgeVerification = $_ageVerification);
    }
    /**
     * Get BillingAddress value
     * @return EBizChargeStructAddress|null
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }
    /**
     * Set BillingAddress value
     * @param EBizChargeStructAddress $_billingAddress the BillingAddress
     * @return EBizChargeStructAddress
     */
    public function setBillingAddress($_billingAddress)
    {
        return ($this->BillingAddress = $_billingAddress);
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
     * Get Created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $_created the Created
     * @return string
     */
    public function setCreated($_created)
    {
        return ($this->Created = $_created);
    }
    /**
     * Get CustomFields value
     * @return Array|null
     */
    public function getCustomFields()
    {
        return $this->CustomFields;
    }
    /**
     * Set CustomFields value
     * @param Array $_customFields the CustomFields
     * @return Array
     */
    public function setCustomFields($_customFields)
    {
        return ($this->CustomFields = $_customFields);
    }
    /**
     * Get DiscountAmount value
     * @return double|null
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }
    /**
     * Set DiscountAmount value
     * @param double $_discountAmount the DiscountAmount
     * @return double
     */
    public function setDiscountAmount($_discountAmount)
    {
        return ($this->DiscountAmount = $_discountAmount);
    }
    /**
     * Get DiscountDescription value
     * @return string|null
     */
    public function getDiscountDescription()
    {
        return $this->DiscountDescription;
    }
    /**
     * Set DiscountDescription value
     * @param string $_discountDescription the DiscountDescription
     * @return string
     */
    public function setDiscountDescription($_discountDescription)
    {
        return ($this->DiscountDescription = $_discountDescription);
    }
    /**
     * Get DiscountRate value
     * @return double|null
     */
    public function getDiscountRate()
    {
        return $this->DiscountRate;
    }
    /**
     * Set DiscountRate value
     * @param double $_discountRate the DiscountRate
     * @return double
     */
    public function setDiscountRate($_discountRate)
    {
        return ($this->DiscountRate = $_discountRate);
    }
    /**
     * Get DiscountType value
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->DiscountType;
    }
    /**
     * Set DiscountType value
     * @param string $_discountType the DiscountType
     * @return string
     */
    public function setDiscountType($_discountType)
    {
        return ($this->DiscountType = $_discountType);
    }
    /**
     * Get LineItems value
     * @return Array|null
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    /**
     * Set LineItems value
     * @param Array $_lineItems the LineItems
     * @return Array
     */
    public function setLineItems($_lineItems)
    {
        return ($this->LineItems = $_lineItems);
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $_notes the Notes
     * @return string
     */
    public function setNotes($_notes)
    {
        return ($this->Notes = $_notes);
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
     * Get OrderRefNum value
     * @return string|null
     */
    public function getOrderRefNum()
    {
        return $this->OrderRefNum;
    }
    /**
     * Set OrderRefNum value
     * @param string $_orderRefNum the OrderRefNum
     * @return string
     */
    public function setOrderRefNum($_orderRefNum)
    {
        return ($this->OrderRefNum = $_orderRefNum);
    }
    /**
     * Get OrderType value
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->OrderType;
    }
    /**
     * Set OrderType value
     * @param string $_orderType the OrderType
     * @return string
     */
    public function setOrderType($_orderType)
    {
        return ($this->OrderType = $_orderType);
    }
    /**
     * Get Paid value
     * @return string|null
     */
    public function getPaid()
    {
        return $this->Paid;
    }
    /**
     * Set Paid value
     * @param string $_paid the Paid
     * @return string
     */
    public function setPaid($_paid)
    {
        return ($this->Paid = $_paid);
    }
    /**
     * Get Payments value
     * @return Array|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @param Array $_payments the Payments
     * @return Array
     */
    public function setPayments($_payments)
    {
        return ($this->Payments = $_payments);
    }
    /**
     * Get PONUm value
     * @return string|null
     */
    public function getPONUm()
    {
        return $this->PONUm;
    }
    /**
     * Set PONUm value
     * @param string $_pONUm the PONUm
     * @return string
     */
    public function setPONUm($_pONUm)
    {
        return ($this->PONUm = $_pONUm);
    }
    /**
     * Get ShippingAddress value
     * @return EBizChargeStructAddress|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param EBizChargeStructAddress $_shippingAddress the ShippingAddress
     * @return EBizChargeStructAddress
     */
    public function setShippingAddress($_shippingAddress)
    {
        return ($this->ShippingAddress = $_shippingAddress);
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $_source the Source
     * @return string
     */
    public function setSource($_source)
    {
        return ($this->Source = $_source);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $_status the Status
     * @return string
     */
    public function setStatus($_status)
    {
        return ($this->Status = $_status);
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
     * Get TaxAmount value
     * @return double|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param double $_taxAmount the TaxAmount
     * @return double
     */
    public function setTaxAmount($_taxAmount)
    {
        return ($this->TaxAmount = $_taxAmount);
    }
    /**
     * Get TaxDescription value
     * @return string|null
     */
    public function getTaxDescription()
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @param string $_taxDescription the TaxDescription
     * @return string
     */
    public function setTaxDescription($_taxDescription)
    {
        return ($this->TaxDescription = $_taxDescription);
    }
    /**
     * Get TaxLocation value
     * @return string|null
     */
    public function getTaxLocation()
    {
        return $this->TaxLocation;
    }
    /**
     * Set TaxLocation value
     * @param string $_taxLocation the TaxLocation
     * @return string
     */
    public function setTaxLocation($_taxLocation)
    {
        return ($this->TaxLocation = $_taxLocation);
    }
    /**
     * Get TaxRate value
     * @return double|null
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }
    /**
     * Set TaxRate value
     * @param double $_taxRate the TaxRate
     * @return double
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
     * @return EBizChargeStructOrder
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
