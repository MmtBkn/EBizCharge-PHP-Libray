<?php
/**
 * File for class EBizChargeStructAddress
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructAddress originally named Address
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructAddress extends EBizChargeWsdlClass
{
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $City;
    /**
     * The Company
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Company;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Country;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Email;
    /**
     * The Fax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Fax;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $LastName;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Phone;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $State;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Street;
    /**
     * The Street2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Street2;
    /**
     * The Zip
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Zip;
    /**
     * Constructor method for Address
     * @see parent::__construct()
     * @param string $_city
     * @param string $_company
     * @param string $_country
     * @param string $_email
     * @param string $_fax
     * @param string $_firstName
     * @param string $_lastName
     * @param string $_phone
     * @param string $_state
     * @param string $_street
     * @param string $_street2
     * @param string $_zip
     * @return EBizChargeStructAddress
     */
    public function __construct($_city = NULL,$_company = NULL,$_country = NULL,$_email = NULL,$_fax = NULL,$_firstName = NULL,$_lastName = NULL,$_phone = NULL,$_state = NULL,$_street = NULL,$_street2 = NULL,$_zip = NULL)
    {
        parent::__construct(array('City'=>$_city,'Company'=>$_company,'Country'=>$_country,'Email'=>$_email,'Fax'=>$_fax,'FirstName'=>$_firstName,'LastName'=>$_lastName,'Phone'=>$_phone,'State'=>$_state,'Street'=>$_street,'Street2'=>$_street2,'Zip'=>$_zip),false);
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $_city the City
     * @return string
     */
    public function setCity($_city)
    {
        return ($this->City = $_city);
    }
    /**
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $_company the Company
     * @return string
     */
    public function setCompany($_company)
    {
        return ($this->Company = $_company);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $_country the Country
     * @return string
     */
    public function setCountry($_country)
    {
        return ($this->Country = $_country);
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $_email the Email
     * @return string
     */
    public function setEmail($_email)
    {
        return ($this->Email = $_email);
    }
    /**
     * Get Fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->Fax;
    }
    /**
     * Set Fax value
     * @param string $_fax the Fax
     * @return string
     */
    public function setFax($_fax)
    {
        return ($this->Fax = $_fax);
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $_firstName the FirstName
     * @return string
     */
    public function setFirstName($_firstName)
    {
        return ($this->FirstName = $_firstName);
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $_lastName the LastName
     * @return string
     */
    public function setLastName($_lastName)
    {
        return ($this->LastName = $_lastName);
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $_phone the Phone
     * @return string
     */
    public function setPhone($_phone)
    {
        return ($this->Phone = $_phone);
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $_state the State
     * @return string
     */
    public function setState($_state)
    {
        return ($this->State = $_state);
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $_street the Street
     * @return string
     */
    public function setStreet($_street)
    {
        return ($this->Street = $_street);
    }
    /**
     * Get Street2 value
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->Street2;
    }
    /**
     * Set Street2 value
     * @param string $_street2 the Street2
     * @return string
     */
    public function setStreet2($_street2)
    {
        return ($this->Street2 = $_street2);
    }
    /**
     * Get Zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->Zip;
    }
    /**
     * Set Zip value
     * @param string $_zip the Zip
     * @return string
     */
    public function setZip($_zip)
    {
        return ($this->Zip = $_zip);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructAddress
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
