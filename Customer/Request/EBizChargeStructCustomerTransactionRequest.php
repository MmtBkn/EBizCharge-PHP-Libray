<?php
/**
 * File for class EBizChargeStructCustomerTransactionRequest
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCustomerTransactionRequest originally named CustomerTransactionRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCustomerTransactionRequest extends EBizChargeWsdlClass
{
    /**
     * The Command
     * @var string
     */
    public $Command;
    /**
     * The CardCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CardCode;
    /**
     * The ClientIP
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ClientIP;
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
     * The CustReceiptEmail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CustReceiptEmail;
    /**
     * The CustReceiptName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CustReceiptName;
    /**
     * The MerchReceipt
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $MerchReceipt;
    /**
     * The MerchReceiptEmail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $MerchReceiptEmail;
    /**
     * The MerchReceiptName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $MerchReceiptName;
    /**
     * The Details
     * @var EBizChargeStructTransactionDetail
     */
    public $Details;
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
     * The isRecurring
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $isRecurring;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $LineItems;
    /**
     * The Software
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Software;
    /**
     * Constructor method for CustomerTransactionRequest
     * @see parent::__construct()
     * @param string $_command
     * @param string $_cardCode
     * @param string $_clientIP
     * @param Array $_customFields
     * @param boolean $_custReceipt
     * @param string $_custReceiptEmail
     * @param string $_custReceiptName
     * @param boolean $_merchReceipt
     * @param string $_merchReceiptEmail
     * @param string $_merchReceiptName
     * @param EBizChargeStructTransactionDetail $_details
     * @param boolean $_ignoreDuplicate
     * @param string $_inventoryLocation
     * @param boolean $_isRecurring
     * @param Array $_lineItems
     * @param string $_software
     * @return EBizChargeStructCustomerTransactionRequest
     */
    public function __construct($_command = NULL,$_cardCode = NULL,$_clientIP = NULL,$_customFields = NULL,$_custReceipt = NULL,$_custReceiptEmail = NULL,$_custReceiptName = NULL,$_merchReceipt = NULL,$_merchReceiptEmail = NULL,$_merchReceiptName = NULL,$_details = NULL,$_ignoreDuplicate = NULL,$_inventoryLocation = NULL,$_isRecurring = NULL,$_lineItems = NULL,$_software = NULL)
    {
        parent::__construct(array('Command'=>$_command,'CardCode'=>$_cardCode,'ClientIP'=>$_clientIP,'CustomFields'=>$_customFields,'CustReceipt'=>$_custReceipt,'CustReceiptEmail'=>$_custReceiptEmail,'CustReceiptName'=>$_custReceiptName,'MerchReceipt'=>$_merchReceipt,'MerchReceiptEmail'=>$_merchReceiptEmail,'MerchReceiptName'=>$_merchReceiptName,'Details'=>$_details,'IgnoreDuplicate'=>$_ignoreDuplicate,'InventoryLocation'=>$_inventoryLocation,'isRecurring'=>$_isRecurring,'LineItems'=>$_lineItems,'Software'=>$_software),false);
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
     * Get CardCode value
     * @return string|null
     */
    public function getCardCode()
    {
        return $this->CardCode;
    }
    /**
     * Set CardCode value
     * @param string $_cardCode the CardCode
     * @return string
     */
    public function setCardCode($_cardCode)
    {
        return ($this->CardCode = $_cardCode);
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
     * Get CustReceiptEmail value
     * @return string|null
     */
    public function getCustReceiptEmail()
    {
        return $this->CustReceiptEmail;
    }
    /**
     * Set CustReceiptEmail value
     * @param string $_custReceiptEmail the CustReceiptEmail
     * @return string
     */
    public function setCustReceiptEmail($_custReceiptEmail)
    {
        return ($this->CustReceiptEmail = $_custReceiptEmail);
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
     * Get MerchReceipt value
     * @return boolean|null
     */
    public function getMerchReceipt()
    {
        return $this->MerchReceipt;
    }
    /**
     * Set MerchReceipt value
     * @param boolean $_merchReceipt the MerchReceipt
     * @return boolean
     */
    public function setMerchReceipt($_merchReceipt)
    {
        return ($this->MerchReceipt = $_merchReceipt);
    }
    /**
     * Get MerchReceiptEmail value
     * @return string|null
     */
    public function getMerchReceiptEmail()
    {
        return $this->MerchReceiptEmail;
    }
    /**
     * Set MerchReceiptEmail value
     * @param string $_merchReceiptEmail the MerchReceiptEmail
     * @return string
     */
    public function setMerchReceiptEmail($_merchReceiptEmail)
    {
        return ($this->MerchReceiptEmail = $_merchReceiptEmail);
    }
    /**
     * Get MerchReceiptName value
     * @return string|null
     */
    public function getMerchReceiptName()
    {
        return $this->MerchReceiptName;
    }
    /**
     * Set MerchReceiptName value
     * @param string $_merchReceiptName the MerchReceiptName
     * @return string
     */
    public function setMerchReceiptName($_merchReceiptName)
    {
        return ($this->MerchReceiptName = $_merchReceiptName);
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
     * Get isRecurring value
     * @return boolean|null
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }
    /**
     * Set isRecurring value
     * @param boolean $_isRecurring the isRecurring
     * @return boolean
     */
    public function setIsRecurring($_isRecurring)
    {
        return ($this->isRecurring = $_isRecurring);
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
     * @return EBizChargeStructCustomerTransactionRequest
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
