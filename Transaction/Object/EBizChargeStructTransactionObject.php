<?php
/**
 * File for class EBizChargeStructTransactionObject
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructTransactionObject originally named TransactionObject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructTransactionObject extends EBizChargeWsdlClass
{
    /**
     * The AccountHolder
     * @var string
     */
    public $AccountHolder;
    /**
     * The BillingAddress
     * @var EBizChargeStructAddress
     */
    public $BillingAddress;
    /**
     * The CheckData
     * @var EBizChargeStructCheckData
     */
    public $CheckData;
    /**
     * The CheckTrace
     * @var EBizChargeStructCheckTrace
     */
    public $CheckTrace;
    /**
     * The ClientIP
     * @var string
     */
    public $ClientIP;
    /**
     * The CreditCardData
     * @var EBizChargeStructCreditCardData
     */
    public $CreditCardData;
    /**
     * The CustomerID
     * @var string
     */
    public $CustomerID;
    /**
     * The CustomFields
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $CustomFields;
    /**
     * The DateTime
     * @var string
     */
    public $DateTime;
    /**
     * The Details
     * @var EBizChargeStructTransactionDetail
     */
    public $Details;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $LineItems;
    /**
     * The Response
     * @var EBizChargeStructTransactionResponse
     */
    public $Response;
    /**
     * The ServerIP
     * @var string
     */
    public $ServerIP;
    /**
     * The ShippingAddress
     * @var EBizChargeStructAddress
     */
    public $ShippingAddress;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The TransactionType
     * @var string
     */
    public $TransactionType;
    /**
     * The User
     * @var string
     */
    public $User;
    /**
     * Constructor method for TransactionObject
     * @see parent::__construct()
     * @param string $_accountHolder
     * @param EBizChargeStructAddress $_billingAddress
     * @param EBizChargeStructCheckData $_checkData
     * @param EBizChargeStructCheckTrace $_checkTrace
     * @param string $_clientIP
     * @param EBizChargeStructCreditCardData $_creditCardData
     * @param string $_customerID
     * @param Array $_customFields
     * @param string $_dateTime
     * @param EBizChargeStructTransactionDetail $_details
     * @param Array $_lineItems
     * @param EBizChargeStructTransactionResponse $_response
     * @param string $_serverIP
     * @param EBizChargeStructAddress $_shippingAddress
     * @param string $_source
     * @param string $_status
     * @param string $_transactionType
     * @param string $_user
     * @return EBizChargeStructTransactionObject
     */
    public function __construct($_accountHolder = NULL,$_billingAddress = NULL,$_checkData = NULL,$_checkTrace = NULL,$_clientIP = NULL,$_creditCardData = NULL,$_customerID = NULL,$_customFields = NULL,$_dateTime = NULL,$_details = NULL,$_lineItems = NULL,$_response = NULL,$_serverIP = NULL,$_shippingAddress = NULL,$_source = NULL,$_status = NULL,$_transactionType = NULL,$_user = NULL)
    {
        parent::__construct(array('AccountHolder'=>$_accountHolder,'BillingAddress'=>$_billingAddress,'CheckData'=>$_checkData,'CheckTrace'=>$_checkTrace,'ClientIP'=>$_clientIP,'CreditCardData'=>$_creditCardData,'CustomerID'=>$_customerID,'CustomFields'=>$_customFields,'DateTime'=>$_dateTime,'Details'=>$_details,'LineItems'=>$_lineItems,'Response'=>$_response,'ServerIP'=>$_serverIP,'ShippingAddress'=>$_shippingAddress,'Source'=>$_source,'Status'=>$_status,'TransactionType'=>$_transactionType,'User'=>$_user),false);
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
     * Get CheckTrace value
     * @return EBizChargeStructCheckTrace|null
     */
    public function getCheckTrace()
    {
        return $this->CheckTrace;
    }
    /**
     * Set CheckTrace value
     * @param EBizChargeStructCheckTrace $_checkTrace the CheckTrace
     * @return EBizChargeStructCheckTrace
     */
    public function setCheckTrace($_checkTrace)
    {
        return ($this->CheckTrace = $_checkTrace);
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
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $_dateTime the DateTime
     * @return string
     */
    public function setDateTime($_dateTime)
    {
        return ($this->DateTime = $_dateTime);
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
     * Get Response value
     * @return EBizChargeStructTransactionResponse|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param EBizChargeStructTransactionResponse $_response the Response
     * @return EBizChargeStructTransactionResponse
     */
    public function setResponse($_response)
    {
        return ($this->Response = $_response);
    }
    /**
     * Get ServerIP value
     * @return string|null
     */
    public function getServerIP()
    {
        return $this->ServerIP;
    }
    /**
     * Set ServerIP value
     * @param string $_serverIP the ServerIP
     * @return string
     */
    public function setServerIP($_serverIP)
    {
        return ($this->ServerIP = $_serverIP);
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
     * Get TransactionType value
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }
    /**
     * Set TransactionType value
     * @param string $_transactionType the TransactionType
     * @return string
     */
    public function setTransactionType($_transactionType)
    {
        return ($this->TransactionType = $_transactionType);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructTransactionObject
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
