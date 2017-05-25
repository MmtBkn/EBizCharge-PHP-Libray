<?php
/**
 * File for class EBizChargeStructCustomerObject
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCustomerObject originally named CustomerObject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCustomerObject extends EBizChargeWsdlClass
{
    /**
     * The Amount
     * @var double
     */
    public $Amount;
    /**
     * The BillingAddress
     * @var EBizChargeStructAddress
     */
    public $BillingAddress;
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $Created;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Currency;
    /**
     * The CustNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CustNum;
    /**
     * The CustomData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CustomData;
    /**
     * The CustomFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $CustomFields;
    /**
     * The CustomerID
     * @var string
     */
    public $CustomerID;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The Enabled
     * @var boolean
     */
    public $Enabled;
    /**
     * The Failures
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Failures;
    /**
     * The LookupCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $LookupCode;
    /**
     * The Modified
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $Modified;
    /**
     * The Next
     * @var string
     */
    public $Next;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Notes;
    /**
     * The NumLeft
     * @var integer
     */
    public $NumLeft;
    /**
     * The OrderID
     * @var string
     */
    public $OrderID;
    /**
     * The PaymentMethods
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $PaymentMethods;
    /**
     * The PriceTier
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $PriceTier;
    /**
     * The ReceiptNote
     * @var string
     */
    public $ReceiptNote;
    /**
     * The Schedule
     * @var string
     */
    public $Schedule;
    /**
     * The SendReceipt
     * @var boolean
     */
    public $SendReceipt;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Source;
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Tax;
    /**
     * The TaxClass
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TaxClass;
    /**
     * The User
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $User;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $URL;
    /**
     * Constructor method for CustomerObject
     * @see parent::__construct()
     * @param double $_amount
     * @param EBizChargeStructAddress $_billingAddress
     * @param dateTime $_created
     * @param string $_currency
     * @param string $_custNum
     * @param string $_customData
     * @param Array $_customFields
     * @param string $_customerID
     * @param string $_description
     * @param boolean $_enabled
     * @param int $_failures
     * @param string $_lookupCode
     * @param dateTime $_modified
     * @param string $_next
     * @param string $_notes
     * @param integer $_numLeft
     * @param string $_orderID
     * @param Array $_paymentMethods
     * @param string $_priceTier
     * @param string $_receiptNote
     * @param string $_schedule
     * @param boolean $_sendReceipt
     * @param string $_source
     * @param double $_tax
     * @param string $_taxClass
     * @param string $_user
     * @param string $_uRL
     * @return EBizChargeStructCustomerObject
     */
    public function __construct($_amount = NULL,$_billingAddress = NULL,$_created = NULL,$_currency = NULL,$_custNum = NULL,$_customData = NULL,$_customFields = NULL,$_customerID = NULL,$_description = NULL,$_enabled = NULL,$_failures = NULL,$_lookupCode = NULL,$_modified = NULL,$_next = NULL,$_notes = NULL,$_numLeft = NULL,$_orderID = NULL,$_paymentMethods = NULL,$_priceTier = NULL,$_receiptNote = NULL,$_schedule = NULL,$_sendReceipt = NULL,$_source = NULL,$_tax = NULL,$_taxClass = NULL,$_user = NULL,$_uRL = NULL)
    {
        parent::__construct(array('Amount'=>$_amount,'BillingAddress'=>$_billingAddress,'Created'=>$_created,'Currency'=>$_currency,'CustNum'=>$_custNum,'CustomData'=>$_customData,'CustomFields'=>$_customFields,'CustomerID'=>$_customerID,'Description'=>$_description,'Enabled'=>$_enabled,'Failures'=>$_failures,'LookupCode'=>$_lookupCode,'Modified'=>$_modified,'Next'=>$_next,'Notes'=>$_notes,'NumLeft'=>$_numLeft,'OrderID'=>$_orderID,'PaymentMethods'=>$_paymentMethods,'PriceTier'=>$_priceTier,'ReceiptNote'=>$_receiptNote,'Schedule'=>$_schedule,'SendReceipt'=>$_sendReceipt,'Source'=>$_source,'Tax'=>$_tax,'TaxClass'=>$_taxClass,'User'=>$_user,'URL'=>$_uRL),false);
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
     * Get CustNum value
     * @return string|null
     */
    public function getCustNum()
    {
        return $this->CustNum;
    }
    /**
     * Set CustNum value
     * @param string $_custNum the CustNum
     * @return string
     */
    public function setCustNum($_custNum)
    {
        return ($this->CustNum = $_custNum);
    }
    /**
     * Get CustomData value
     * @return string|null
     */
    public function getCustomData()
    {
        return $this->CustomData;
    }
    /**
     * Set CustomData value
     * @param string $_customData the CustomData
     * @return string
     */
    public function setCustomData($_customData)
    {
        return ($this->CustomData = $_customData);
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
     * Get CustomerID value
     * @return string|null
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param string $_customerID the CustomerID
     * @return string
     */
    public function setCustomerID($_customerID)
    {
        return ($this->CustomerID = $_customerID);
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
     * Get Failures value
     * @return int|null
     */
    public function getFailures()
    {
        return $this->Failures;
    }
    /**
     * Set Failures value
     * @param int $_failures the Failures
     * @return int
     */
    public function setFailures($_failures)
    {
        return ($this->Failures = $_failures);
    }
    /**
     * Get LookupCode value
     * @return string|null
     */
    public function getLookupCode()
    {
        return $this->LookupCode;
    }
    /**
     * Set LookupCode value
     * @param string $_lookupCode the LookupCode
     * @return string
     */
    public function setLookupCode($_lookupCode)
    {
        return ($this->LookupCode = $_lookupCode);
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
     * Get Next value
     * @return string|null
     */
    public function getNext()
    {
        return $this->Next;
    }
    /**
     * Set Next value
     * @param string $_next the Next
     * @return string
     */
    public function setNext($_next)
    {
        return ($this->Next = $_next);
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
     * Get NumLeft value
     * @return integer|null
     */
    public function getNumLeft()
    {
        return $this->NumLeft;
    }
    /**
     * Set NumLeft value
     * @param integer $_numLeft the NumLeft
     * @return integer
     */
    public function setNumLeft($_numLeft)
    {
        return ($this->NumLeft = $_numLeft);
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
     * Get PaymentMethods value
     * @return Array|null
     */
    public function getPaymentMethods()
    {
        return $this->PaymentMethods;
    }
    /**
     * Set PaymentMethods value
     * @param Array $_paymentMethods the PaymentMethods
     * @return Array
     */
    public function setPaymentMethods($_paymentMethods)
    {
        return ($this->PaymentMethods = $_paymentMethods);
    }
    /**
     * Get PriceTier value
     * @return string|null
     */
    public function getPriceTier()
    {
        return $this->PriceTier;
    }
    /**
     * Set PriceTier value
     * @param string $_priceTier the PriceTier
     * @return string
     */
    public function setPriceTier($_priceTier)
    {
        return ($this->PriceTier = $_priceTier);
    }
    /**
     * Get ReceiptNote value
     * @return string|null
     */
    public function getReceiptNote()
    {
        return $this->ReceiptNote;
    }
    /**
     * Set ReceiptNote value
     * @param string $_receiptNote the ReceiptNote
     * @return string
     */
    public function setReceiptNote($_receiptNote)
    {
        return ($this->ReceiptNote = $_receiptNote);
    }
    /**
     * Get Schedule value
     * @return string|null
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }
    /**
     * Set Schedule value
     * @param string $_schedule the Schedule
     * @return string
     */
    public function setSchedule($_schedule)
    {
        return ($this->Schedule = $_schedule);
    }
    /**
     * Get SendReceipt value
     * @return boolean|null
     */
    public function getSendReceipt()
    {
        return $this->SendReceipt;
    }
    /**
     * Set SendReceipt value
     * @param boolean $_sendReceipt the SendReceipt
     * @return boolean
     */
    public function setSendReceipt($_sendReceipt)
    {
        return ($this->SendReceipt = $_sendReceipt);
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
     * Get User value
     * @return string|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param string $_user the User
     * @return string
     */
    public function setUser($_user)
    {
        return ($this->User = $_user);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructCustomerObject
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
