<?php
/**
 * File for class EBizChargeStructCreditCardData
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCreditCardData originally named CreditCardData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCreditCardData extends EBizChargeWsdlClass
{
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
     * The CardPresent
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $CardPresent;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CardType;
    /**
     * The CAVV
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CAVV;
    /**
     * The DUKPT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $DUKPT;
    /**
     * The ECI
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var integer
     */
    public $ECI;
    /**
     * The InternalCardAuth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $InternalCardAuth;
    /**
     * The MagStripe
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $MagStripe;
    /**
     * The MagSupport
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $MagSupport;
    /**
     * The Pares
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Pares;
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Signature;
    /**
     * The TermType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TermType;
    /**
     * The XID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $XID;
    /**
     * Constructor method for CreditCardData
     * @see parent::__construct()
     * @param string $_avsStreet
     * @param string $_avsZip
     * @param string $_cardCode
     * @param string $_cardExpiration
     * @param string $_cardNumber
     * @param boolean $_cardPresent
     * @param string $_cardType
     * @param string $_cAVV
     * @param string $_dUKPT
     * @param integer $_eCI
     * @param boolean $_internalCardAuth
     * @param string $_magStripe
     * @param string $_magSupport
     * @param string $_pares
     * @param string $_signature
     * @param string $_termType
     * @param string $_xID
     * @return EBizChargeStructCreditCardData
     */
    public function __construct($_avsStreet = NULL,$_avsZip = NULL,$_cardCode = NULL,$_cardExpiration = NULL,$_cardNumber = NULL,$_cardPresent = NULL,$_cardType = NULL,$_cAVV = NULL,$_dUKPT = NULL,$_eCI = NULL,$_internalCardAuth = NULL,$_magStripe = NULL,$_magSupport = NULL,$_pares = NULL,$_signature = NULL,$_termType = NULL,$_xID = NULL)
    {
        parent::__construct(array('AvsStreet'=>$_avsStreet,'AvsZip'=>$_avsZip,'CardCode'=>$_cardCode,'CardExpiration'=>$_cardExpiration,'CardNumber'=>$_cardNumber,'CardPresent'=>$_cardPresent,'CardType'=>$_cardType,'CAVV'=>$_cAVV,'DUKPT'=>$_dUKPT,'ECI'=>$_eCI,'InternalCardAuth'=>$_internalCardAuth,'MagStripe'=>$_magStripe,'MagSupport'=>$_magSupport,'Pares'=>$_pares,'Signature'=>$_signature,'TermType'=>$_termType,'XID'=>$_xID),false);
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
     * Get CardPresent value
     * @return boolean|null
     */
    public function getCardPresent()
    {
        return $this->CardPresent;
    }
    /**
     * Set CardPresent value
     * @param boolean $_cardPresent the CardPresent
     * @return boolean
     */
    public function setCardPresent($_cardPresent)
    {
        return ($this->CardPresent = $_cardPresent);
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
     * Get CAVV value
     * @return string|null
     */
    public function getCAVV()
    {
        return $this->CAVV;
    }
    /**
     * Set CAVV value
     * @param string $_cAVV the CAVV
     * @return string
     */
    public function setCAVV($_cAVV)
    {
        return ($this->CAVV = $_cAVV);
    }
    /**
     * Get DUKPT value
     * @return string|null
     */
    public function getDUKPT()
    {
        return $this->DUKPT;
    }
    /**
     * Set DUKPT value
     * @param string $_dUKPT the DUKPT
     * @return string
     */
    public function setDUKPT($_dUKPT)
    {
        return ($this->DUKPT = $_dUKPT);
    }
    /**
     * Get ECI value
     * @return integer|null
     */
    public function getECI()
    {
        return $this->ECI;
    }
    /**
     * Set ECI value
     * @param integer $_eCI the ECI
     * @return integer
     */
    public function setECI($_eCI)
    {
        return ($this->ECI = $_eCI);
    }
    /**
     * Get InternalCardAuth value
     * @return boolean|null
     */
    public function getInternalCardAuth()
    {
        return $this->InternalCardAuth;
    }
    /**
     * Set InternalCardAuth value
     * @param boolean $_internalCardAuth the InternalCardAuth
     * @return boolean
     */
    public function setInternalCardAuth($_internalCardAuth)
    {
        return ($this->InternalCardAuth = $_internalCardAuth);
    }
    /**
     * Get MagStripe value
     * @return string|null
     */
    public function getMagStripe()
    {
        return $this->MagStripe;
    }
    /**
     * Set MagStripe value
     * @param string $_magStripe the MagStripe
     * @return string
     */
    public function setMagStripe($_magStripe)
    {
        return ($this->MagStripe = $_magStripe);
    }
    /**
     * Get MagSupport value
     * @return string|null
     */
    public function getMagSupport()
    {
        return $this->MagSupport;
    }
    /**
     * Set MagSupport value
     * @param string $_magSupport the MagSupport
     * @return string
     */
    public function setMagSupport($_magSupport)
    {
        return ($this->MagSupport = $_magSupport);
    }
    /**
     * Get Pares value
     * @return string|null
     */
    public function getPares()
    {
        return $this->Pares;
    }
    /**
     * Set Pares value
     * @param string $_pares the Pares
     * @return string
     */
    public function setPares($_pares)
    {
        return ($this->Pares = $_pares);
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $_signature the Signature
     * @return string
     */
    public function setSignature($_signature)
    {
        return ($this->Signature = $_signature);
    }
    /**
     * Get TermType value
     * @return string|null
     */
    public function getTermType()
    {
        return $this->TermType;
    }
    /**
     * Set TermType value
     * @param string $_termType the TermType
     * @return string
     */
    public function setTermType($_termType)
    {
        return ($this->TermType = $_termType);
    }
    /**
     * Get XID value
     * @return string|null
     */
    public function getXID()
    {
        return $this->XID;
    }
    /**
     * Set XID value
     * @param string $_xID the XID
     * @return string
     */
    public function setXID($_xID)
    {
        return ($this->XID = $_xID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructCreditCardData
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
