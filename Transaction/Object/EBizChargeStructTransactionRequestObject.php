<?php
/**
 * File for class EBizChargeStructTransactionRequestObject
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructTransactionRequestObject originally named TransactionRequestObject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructTransactionRequestObject extends EBizChargeWsdlClass
{
    /**
     * The AccountHolder
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AccountHolder;
    /**
     * The AuthCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AuthCode;
    /**
     * The BillingAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var EBizChargeStructAddress
     */
    public $BillingAddress;
    /**
     * The CheckData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var EBizChargeStructCheckData
     */
    public $CheckData;
    /**
     * The ClientIP
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ClientIP;
    /**
     * The Command
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Command;
    /**
     * The CreditCardData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var EBizChargeStructCreditCardData
     */
    public $CreditCardData;
    /**
     * The CustomerID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CustomerID;
    /**
     * The CustomFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $CustomFields;
    /**
     * The CustReceipt
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $CustReceipt;
    /**
     * The CustReceiptName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CustReceiptName;
    /**
     * The Details
     * @var EBizChargeStructTransactionDetail
     */
    public $Details;
    /**
     * The IfAuthExpired
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $IfAuthExpired;
    /**
     * The IgnoreDuplicate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $IgnoreDuplicate;
    /**
     * The InventoryLocation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $InventoryLocation;
    /**
     * The IsRecurring
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $IsRecurring;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $LineItems;
    /**
     * The RecurringBilling
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var EBizChargeStructRecurringBilling
     */
    public $RecurringBilling;
    /**
     * The RefNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $RefNum;
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var EBizChargeStructAddress
     */
    public $ShippingAddress;
    /**
     * The Software
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Software;
    /**
     * Constructor method for TransactionRequestObject
     * @see parent::__construct()
     * @param string $_accountHolder
     * @param string $_authCode
     * @param EBizChargeStructAddress $_billingAddress
     * @param EBizChargeStructCheckData $_checkData
     * @param string $_clientIP
     * @param string $_command
     * @param EBizChargeStructCreditCardData $_creditCardData
     * @param string $_customerID
     * @param Array $_customFields
     * @param boolean $_custReceipt
     * @param string $_custReceiptName
     * @param EBizChargeStructTransactionDetail $_details
     * @param string $_ifAuthExpired
     * @param boolean $_ignoreDuplicate
     * @param string $_inventoryLocation
     * @param boolean $_isRecurring
     * @param Array $_lineItems
     * @param EBizChargeStructRecurringBilling $_recurringBilling
     * @param string $_refNum
     * @param EBizChargeStructAddress $_shippingAddress
     * @param string $_software
     * @return EBizChargeStructTransactionRequestObject
     */
    public function __construct($_accountHolder = NULL,$_authCode = NULL,$_billingAddress = NULL,$_checkData = NULL,$_clientIP = NULL,$_command = NULL,$_creditCardData = NULL,$_customerID = NULL,$_customFields = NULL,$_custReceipt = NULL,$_custReceiptName = NULL,$_details = NULL,$_ifAuthExpired = NULL,$_ignoreDuplicate = NULL,$_inventoryLocation = NULL,$_isRecurring = NULL,$_lineItems = NULL,$_recurringBilling = NULL,$_refNum = NULL,$_shippingAddress = NULL,$_software = NULL)
    {
        parent::__construct(array('AccountHolder'=>$_accountHolder,'AuthCode'=>$_authCode,'BillingAddress'=>$_billingAddress,'CheckData'=>$_checkData,'ClientIP'=>$_clientIP,'Command'=>$_command,'CreditCardData'=>$_creditCardData,'CustomerID'=>$_customerID,'CustomFields'=>$_customFields,'CustReceipt'=>$_custReceipt,'CustReceiptName'=>$_custReceiptName,'Details'=>$_details,'IfAuthExpired'=>$_ifAuthExpired,'IgnoreDuplicate'=>$_ignoreDuplicate,'InventoryLocation'=>$_inventoryLocation,'IsRecurring'=>$_isRecurring,'LineItems'=>$_lineItems,'RecurringBilling'=>$_recurringBilling,'RefNum'=>$_refNum,'ShippingAddress'=>$_shippingAddress,'Software'=>$_software),false);
    }
    /**
     * Get AccountHolder value
     * @return string|null
     */
    public function getAccountHolder()
    {
        return $this->AccountHolder;
    }
    /**
     * Set AccountHolder value
     * @param string $_accountHolder the AccountHolder
     * @return string
     */
    public function setAccountHolder($_accountHolder)
    {
        return ($this->AccountHolder = $_accountHolder);
    }
    /**
     * Get AuthCode value
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->AuthCode;
    }
    /**
     * Set AuthCode value
     * @param string $_authCode the AuthCode
     * @return string
     */
    public function setAuthCode($_authCode)
    {
        return ($this->AuthCode = $_authCode);
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
     * Get CheckData value
     * @return EBizChargeStructCheckData|null
     */
    public function getCheckData()
    {
        return $this->CheckData;
    }
    /**
     * Set CheckData value
     * @param EBizChargeStructCheckData $_checkData the CheckData
     * @return EBizChargeStructCheckData
     */
    public function setCheckData($_checkData)
    {
        return ($this->CheckData = $_checkData);
    }
    /**
     * Get ClientIP value
     * @return string|null
     */
    public function getClientIP()
    {
        return $this->ClientIP;
    }
    /**
     * Set ClientIP value
     * @param string $_clientIP the ClientIP
     * @return string
     */
    public function setClientIP($_clientIP)
    {
        return ($this->ClientIP = $_clientIP);
    }
    /**
     * Get Command value
     * @return string|null
     */
    public function getCommand()
    {
        return $this->Command;
    }
    /**
     * Set Command value
     * @param string $_command the Command
     * @return string
     */
    public function setCommand($_command)
    {
        return ($this->Command = $_command);
    }
    /**
     * Get CreditCardData value
     * @return EBizChargeStructCreditCardData|null
     */
    public function getCreditCardData()
    {
        return $this->CreditCardData;
    }
    /**
     * Set CreditCardData value
     * @param EBizChargeStructCreditCardData $_creditCardData the CreditCardData
     * @return EBizChargeStructCreditCardData
     */
    public function setCreditCardData($_creditCardData)
    {
        return ($this->CreditCardData = $_creditCardData);
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
     * Get CustReceipt value
     * @return boolean|null
     */
    public function getCustReceipt()
    {
        return $this->CustReceipt;
    }
    /**
     * Set CustReceipt value
     * @param boolean $_custReceipt the CustReceipt
     * @return boolean
     */
    public function setCustReceipt($_custReceipt)
    {
        return ($this->CustReceipt = $_custReceipt);
    }
    /**
     * Get CustReceiptName value
     * @return string|null
     */
    public function getCustReceiptName()
    {
        return $this->CustReceiptName;
    }
    /**
     * Set CustReceiptName value
     * @param string $_custReceiptName the CustReceiptName
     * @return string
     */
    public function setCustReceiptName($_custReceiptName)
    {
        return ($this->CustReceiptName = $_custReceiptName);
    }
    /**
     * Get Details value
     * @return EBizChargeStructTransactionDetail|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param EBizChargeStructTransactionDetail $_details the Details
     * @return EBizChargeStructTransactionDetail
     */
    public function setDetails($_details)
    {
        return ($this->Details = $_details);
    }
    /**
     * Get IfAuthExpired value
     * @return string|null
     */
    public function getIfAuthExpired()
    {
        return $this->IfAuthExpired;
    }
    /**
     * Set IfAuthExpired value
     * @param string $_ifAuthExpired the IfAuthExpired
     * @return string
     */
    public function setIfAuthExpired($_ifAuthExpired)
    {
        return ($this->IfAuthExpired = $_ifAuthExpired);
    }
    /**
     * Get IgnoreDuplicate value
     * @return boolean|null
     */
    public function getIgnoreDuplicate()
    {
        return $this->IgnoreDuplicate;
    }
    /**
     * Set IgnoreDuplicate value
     * @param boolean $_ignoreDuplicate the IgnoreDuplicate
     * @return boolean
     */
    public function setIgnoreDuplicate($_ignoreDuplicate)
    {
        return ($this->IgnoreDuplicate = $_ignoreDuplicate);
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
     * Get IsRecurring value
     * @return boolean|null
     */
    public function getIsRecurring()
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param boolean $_isRecurring the IsRecurring
     * @return boolean
     */
    public function setIsRecurring($_isRecurring)
    {
        return ($this->IsRecurring = $_isRecurring);
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
     * Get RecurringBilling value
     * @return EBizChargeStructRecurringBilling|null
     */
    public function getRecurringBilling()
    {
        return $this->RecurringBilling;
    }
    /**
     * Set RecurringBilling value
     * @param EBizChargeStructRecurringBilling $_recurringBilling the RecurringBilling
     * @return EBizChargeStructRecurringBilling
     */
    public function setRecurringBilling($_recurringBilling)
    {
        return ($this->RecurringBilling = $_recurringBilling);
    }
    /**
     * Get RefNum value
     * @return string|null
     */
    public function getRefNum()
    {
        return $this->RefNum;
    }
    /**
     * Set RefNum value
     * @param string $_refNum the RefNum
     * @return string
     */
    public function setRefNum($_refNum)
    {
        return ($this->RefNum = $_refNum);
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
     * Get Software value
     * @return string|null
     */
    public function getSoftware()
    {
        return $this->Software;
    }
    /**
     * Set Software value
     * @param string $_software the Software
     * @return string
     */
    public function setSoftware($_software)
    {
        return ($this->Software = $_software);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructTransactionRequestObject
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
