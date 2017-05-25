<?php
/**
 * File for class EBizChargeStructCheckData
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCheckData originally named CheckData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCheckData extends EBizChargeWsdlClass
{
    /**
     * The Account
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
     * The CheckNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var integer
     */
    public $CheckNumber;
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
     * @var string
     */
    public $Routing;
    /**
     * The MICR
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $MICR;
    /**
     * The AuxOnUS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AuxOnUS;
    /**
     * The EpcCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $EpcCode;
    /**
     * The FrontImage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $FrontImage;
    /**
     * The BackImage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $BackImage;
    /**
     * Constructor method for CheckData
     * @see parent::__construct()
     * @param string $_account
     * @param string $_accountType
     * @param integer $_checkNumber
     * @param string $_driversLicense
     * @param string $_driversLicenseState
     * @param string $_recordType
     * @param string $_routing
     * @param string $_mICR
     * @param string $_auxOnUS
     * @param string $_epcCode
     * @param string $_frontImage
     * @param string $_backImage
     * @return EBizChargeStructCheckData
     */
    public function __construct($_account = NULL,$_accountType = NULL,$_checkNumber = NULL,$_driversLicense = NULL,$_driversLicenseState = NULL,$_recordType = NULL,$_routing = NULL,$_mICR = NULL,$_auxOnUS = NULL,$_epcCode = NULL,$_frontImage = NULL,$_backImage = NULL)
    {
        parent::__construct(array('Account'=>$_account,'AccountType'=>$_accountType,'CheckNumber'=>$_checkNumber,'DriversLicense'=>$_driversLicense,'DriversLicenseState'=>$_driversLicenseState,'RecordType'=>$_recordType,'Routing'=>$_routing,'MICR'=>$_mICR,'AuxOnUS'=>$_auxOnUS,'EpcCode'=>$_epcCode,'FrontImage'=>$_frontImage,'BackImage'=>$_backImage),false);
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
     * Get CheckNumber value
     * @return integer|null
     */
    public function getCheckNumber()
    {
        return $this->CheckNumber;
    }
    /**
     * Set CheckNumber value
     * @param integer $_checkNumber the CheckNumber
     * @return integer
     */
    public function setCheckNumber($_checkNumber)
    {
        return ($this->CheckNumber = $_checkNumber);
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
     * Get MICR value
     * @return string|null
     */
    public function getMICR()
    {
        return $this->MICR;
    }
    /**
     * Set MICR value
     * @param string $_mICR the MICR
     * @return string
     */
    public function setMICR($_mICR)
    {
        return ($this->MICR = $_mICR);
    }
    /**
     * Get AuxOnUS value
     * @return string|null
     */
    public function getAuxOnUS()
    {
        return $this->AuxOnUS;
    }
    /**
     * Set AuxOnUS value
     * @param string $_auxOnUS the AuxOnUS
     * @return string
     */
    public function setAuxOnUS($_auxOnUS)
    {
        return ($this->AuxOnUS = $_auxOnUS);
    }
    /**
     * Get EpcCode value
     * @return string|null
     */
    public function getEpcCode()
    {
        return $this->EpcCode;
    }
    /**
     * Set EpcCode value
     * @param string $_epcCode the EpcCode
     * @return string
     */
    public function setEpcCode($_epcCode)
    {
        return ($this->EpcCode = $_epcCode);
    }
    /**
     * Get FrontImage value
     * @return string|null
     */
    public function getFrontImage()
    {
        return $this->FrontImage;
    }
    /**
     * Set FrontImage value
     * @param string $_frontImage the FrontImage
     * @return string
     */
    public function setFrontImage($_frontImage)
    {
        return ($this->FrontImage = $_frontImage);
    }
    /**
     * Get BackImage value
     * @return string|null
     */
    public function getBackImage()
    {
        return $this->BackImage;
    }
    /**
     * Set BackImage value
     * @param string $_backImage the BackImage
     * @return string
     */
    public function setBackImage($_backImage)
    {
        return ($this->BackImage = $_backImage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructCheckData
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
