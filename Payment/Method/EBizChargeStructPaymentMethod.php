<?php
/**
 * File for class EBizChargeStructPaymentMethod
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructPaymentMethod originally named PaymentMethod
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructPaymentMethod extends EBizChargeWsdlClass
{
    /**
     * The MethodType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $MethodType;
    /**
     * The MethodID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var integer
     */
    public $MethodID;
    /**
     * The MethodName
     * @var string
     */
    public $MethodName;
    /**
     * The SecondarySort
     * @var integer
     */
    public $SecondarySort;
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var dateTime
     */
    public $Created;
    /**
     * The Modified
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var dateTime
     */
    public $Modified;
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Account;
    /**
     * The AccountType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AccountType;
    /**
     * The DriversLicense
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DriversLicense;
    /**
     * The DriversLicenseState
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DriversLicenseState;
    /**
     * The RecordType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $RecordType;
    /**
     * The Routing
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Routing;
    /**
     * The AvsStreet
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AvsStreet;
    /**
     * The AvsZip
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AvsZip;
    /**
     * The CardCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CardCode;
    /**
     * The CardExpiration
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CardExpiration;
    /**
     * The CardNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CardNumber;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CardType;
    /**
     * The Balance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Balance;
    /**
     * The MaxBalance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $MaxBalance;
    /**
     * The AutoReload
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AutoReload;
    /**
     * The ReloadSchedule
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ReloadSchedule;
    /**
     * The ReloadThreshold
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ReloadThreshold;
    /**
     * The ReloadAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ReloadAmount;
    /**
     * The ReloadMethodID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var integer
     */
    public $ReloadMethodID;
    /**
     * Constructor method for PaymentMethod
     * @see parent::__construct()
     * @param string $_methodType
     * @param integer $_methodID
     * @param string $_methodName
     * @param integer $_secondarySort
     * @param dateTime $_created
     * @param dateTime $_modified
     * @param string $_account
     * @param string $_accountType
     * @param string $_driversLicense
     * @param string $_driversLicenseState
     * @param string $_recordType
     * @param string $_routing
     * @param string $_avsStreet
     * @param string $_avsZip
     * @param string $_cardCode
     * @param string $_cardExpiration
     * @param string $_cardNumber
     * @param string $_cardType
     * @param double $_balance
     * @param double $_maxBalance
     * @param string $_autoReload
     * @param string $_reloadSchedule
     * @param string $_reloadThreshold
     * @param string $_reloadAmount
     * @param integer $_reloadMethodID
     * @return EBizChargeStructPaymentMethod
     */
    public function __construct($_methodType = NULL,$_methodID = NULL,$_methodName = NULL,$_secondarySort = NULL,$_created = NULL,$_modified = NULL,$_account = NULL,$_accountType = NULL,$_driversLicense = NULL,$_driversLicenseState = NULL,$_recordType = NULL,$_routing = NULL,$_avsStreet = NULL,$_avsZip = NULL,$_cardCode = NULL,$_cardExpiration = NULL,$_cardNumber = NULL,$_cardType = NULL,$_balance = NULL,$_maxBalance = NULL,$_autoReload = NULL,$_reloadSchedule = NULL,$_reloadThreshold = NULL,$_reloadAmount = NULL,$_reloadMethodID = NULL)
    {
        parent::__construct(array('MethodType'=>$_methodType,'MethodID'=>$_methodID,'MethodName'=>$_methodName,'SecondarySort'=>$_secondarySort,'Created'=>$_created,'Modified'=>$_modified,'Account'=>$_account,'AccountType'=>$_accountType,'DriversLicense'=>$_driversLicense,'DriversLicenseState'=>$_driversLicenseState,'RecordType'=>$_recordType,'Routing'=>$_routing,'AvsStreet'=>$_avsStreet,'AvsZip'=>$_avsZip,'CardCode'=>$_cardCode,'CardExpiration'=>$_cardExpiration,'CardNumber'=>$_cardNumber,'CardType'=>$_cardType,'Balance'=>$_balance,'MaxBalance'=>$_maxBalance,'AutoReload'=>$_autoReload,'ReloadSchedule'=>$_reloadSchedule,'ReloadThreshold'=>$_reloadThreshold,'ReloadAmount'=>$_reloadAmount,'ReloadMethodID'=>$_reloadMethodID),false);
    }
    /**
     * Get MethodType value
     * @return string|null
     */
    public function getMethodType()
    {
        return $this->MethodType;
    }
    /**
     * Set MethodType value
     * @param string $_methodType the MethodType
     * @return string
     */
    public function setMethodType($_methodType)
    {
        return ($this->MethodType = $_methodType);
    }
    /**
     * Get MethodID value
     * @return integer|null
     */
    public function getMethodID()
    {
        return $this->MethodID;
    }
    /**
     * Set MethodID value
     * @param integer $_methodID the MethodID
     * @return integer
     */
    public function setMethodID($_methodID)
    {
        return ($this->MethodID = $_methodID);
    }
    /**
     * Get MethodName value
     * @return string|null
     */
    public function getMethodName()
    {
        return $this->MethodName;
    }
    /**
     * Set MethodName value
     * @param string $_methodName the MethodName
     * @return string
     */
    public function setMethodName($_methodName)
    {
        return ($this->MethodName = $_methodName);
    }
    /**
     * Get SecondarySort value
     * @return integer|null
     */
    public function getSecondarySort()
    {
        return $this->SecondarySort;
    }
    /**
     * Set SecondarySort value
     * @param integer $_secondarySort the SecondarySort
     * @return integer
     */
    public function setSecondarySort($_secondarySort)
    {
        return ($this->SecondarySort = $_secondarySort);
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
     * Get Account value
     * @return string|null
     */
    public function getAccount()
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @param string $_account the Account
     * @return string
     */
    public function setAccount($_account)
    {
        return ($this->Account = $_account);
    }
    /**
     * Get AccountType value
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }
    /**
     * Set AccountType value
     * @param string $_accountType the AccountType
     * @return string
     */
    public function setAccountType($_accountType)
    {
        return ($this->AccountType = $_accountType);
    }
    /**
     * Get DriversLicense value
     * @return string|null
     */
    public function getDriversLicense()
    {
        return $this->DriversLicense;
    }
    /**
     * Set DriversLicense value
     * @param string $_driversLicense the DriversLicense
     * @return string
     */
    public function setDriversLicense($_driversLicense)
    {
        return ($this->DriversLicense = $_driversLicense);
    }
    /**
     * Get DriversLicenseState value
     * @return string|null
     */
    public function getDriversLicenseState()
    {
        return $this->DriversLicenseState;
    }
    /**
     * Set DriversLicenseState value
     * @param string $_driversLicenseState the DriversLicenseState
     * @return string
     */
    public function setDriversLicenseState($_driversLicenseState)
    {
        return ($this->DriversLicenseState = $_driversLicenseState);
    }
    /**
     * Get RecordType value
     * @return string|null
     */
    public function getRecordType()
    {
        return $this->RecordType;
    }
    /**
     * Set RecordType value
     * @param string $_recordType the RecordType
     * @return string
     */
    public function setRecordType($_recordType)
    {
        return ($this->RecordType = $_recordType);
    }
    /**
     * Get Routing value
     * @return string|null
     */
    public function getRouting()
    {
        return $this->Routing;
    }
    /**
     * Set Routing value
     * @param string $_routing the Routing
     * @return string
     */
    public function setRouting($_routing)
    {
        return ($this->Routing = $_routing);
    }
    /**
     * Get AvsStreet value
     * @return string|null
     */
    public function getAvsStreet()
    {
        return $this->AvsStreet;
    }
    /**
     * Set AvsStreet value
     * @param string $_avsStreet the AvsStreet
     * @return string
     */
    public function setAvsStreet($_avsStreet)
    {
        return ($this->AvsStreet = $_avsStreet);
    }
    /**
     * Get AvsZip value
     * @return string|null
     */
    public function getAvsZip()
    {
        return $this->AvsZip;
    }
    /**
     * Set AvsZip value
     * @param string $_avsZip the AvsZip
     * @return string
     */
    public function setAvsZip($_avsZip)
    {
        return ($this->AvsZip = $_avsZip);
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
     * Get CardExpiration value
     * @return string|null
     */
    public function getCardExpiration()
    {
        return $this->CardExpiration;
    }
    /**
     * Set CardExpiration value
     * @param string $_cardExpiration the CardExpiration
     * @return string
     */
    public function setCardExpiration($_cardExpiration)
    {
        return ($this->CardExpiration = $_cardExpiration);
    }
    /**
     * Get CardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $_cardNumber the CardNumber
     * @return string
     */
    public function setCardNumber($_cardNumber)
    {
        return ($this->CardNumber = $_cardNumber);
    }
    /**
     * Get CardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param string $_cardType the CardType
     * @return string
     */
    public function setCardType($_cardType)
    {
        return ($this->CardType = $_cardType);
    }
    /**
     * Get Balance value
     * @return double|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param double $_balance the Balance
     * @return double
     */
    public function setBalance($_balance)
    {
        return ($this->Balance = $_balance);
    }
    /**
     * Get MaxBalance value
     * @return double|null
     */
    public function getMaxBalance()
    {
        return $this->MaxBalance;
    }
    /**
     * Set MaxBalance value
     * @param double $_maxBalance the MaxBalance
     * @return double
     */
    public function setMaxBalance($_maxBalance)
    {
        return ($this->MaxBalance = $_maxBalance);
    }
    /**
     * Get AutoReload value
     * @return string|null
     */
    public function getAutoReload()
    {
        return $this->AutoReload;
    }
    /**
     * Set AutoReload value
     * @param string $_autoReload the AutoReload
     * @return string
     */
    public function setAutoReload($_autoReload)
    {
        return ($this->AutoReload = $_autoReload);
    }
    /**
     * Get ReloadSchedule value
     * @return string|null
     */
    public function getReloadSchedule()
    {
        return $this->ReloadSchedule;
    }
    /**
     * Set ReloadSchedule value
     * @param string $_reloadSchedule the ReloadSchedule
     * @return string
     */
    public function setReloadSchedule($_reloadSchedule)
    {
        return ($this->ReloadSchedule = $_reloadSchedule);
    }
    /**
     * Get ReloadThreshold value
     * @return string|null
     */
    public function getReloadThreshold()
    {
        return $this->ReloadThreshold;
    }
    /**
     * Set ReloadThreshold value
     * @param string $_reloadThreshold the ReloadThreshold
     * @return string
     */
    public function setReloadThreshold($_reloadThreshold)
    {
        return ($this->ReloadThreshold = $_reloadThreshold);
    }
    /**
     * Get ReloadAmount value
     * @return string|null
     */
    public function getReloadAmount()
    {
        return $this->ReloadAmount;
    }
    /**
     * Set ReloadAmount value
     * @param string $_reloadAmount the ReloadAmount
     * @return string
     */
    public function setReloadAmount($_reloadAmount)
    {
        return ($this->ReloadAmount = $_reloadAmount);
    }
    /**
     * Get ReloadMethodID value
     * @return integer|null
     */
    public function getReloadMethodID()
    {
        return $this->ReloadMethodID;
    }
    /**
     * Set ReloadMethodID value
     * @param integer $_reloadMethodID the ReloadMethodID
     * @return integer
     */
    public function setReloadMethodID($_reloadMethodID)
    {
        return ($this->ReloadMethodID = $_reloadMethodID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructPaymentMethod
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
