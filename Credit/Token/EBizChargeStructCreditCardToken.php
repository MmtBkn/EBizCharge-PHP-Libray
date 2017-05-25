<?php
/**
 * File for class EBizChargeStructCreditCardToken
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCreditCardToken originally named CreditCardToken
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCreditCardToken extends EBizChargeWsdlClass
{
    /**
     * The CardRef
     * @var string
     */
    public $CardRef;
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
     * Constructor method for CreditCardToken
     * @see parent::__construct()
     * @param string $_cardRef
     * @param string $_cardExpiration
     * @param string $_cardNumber
     * @param string $_cardType
     * @return EBizChargeStructCreditCardToken
     */
    public function __construct($_cardRef = NULL,$_cardExpiration = NULL,$_cardNumber = NULL,$_cardType = NULL)
    {
        parent::__construct(array('CardRef'=>$_cardRef,'CardExpiration'=>$_cardExpiration,'CardNumber'=>$_cardNumber,'CardType'=>$_cardType),false);
    }
    /**
     * Get CardRef value
     * @return string|null
     */
    public function getCardRef()
    {
        return $this->CardRef;
    }
    /**
     * Set CardRef value
     * @param string $_cardRef the CardRef
     * @return string
     */
    public function setCardRef($_cardRef)
    {
        return ($this->CardRef = $_cardRef);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructCreditCardToken
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
