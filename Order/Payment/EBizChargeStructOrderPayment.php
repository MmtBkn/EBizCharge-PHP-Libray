<?php
/**
 * File for class EBizChargeStructOrderPayment
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructOrderPayment originally named OrderPayment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructOrderPayment extends EBizChargeWsdlClass
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Amount;
    /**
     * The AuthCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $AuthCode;
    /**
     * The CardNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CardNum;
    /**
     * The CashTendered
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CashTendered;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CardType;
    /**
     * The ChangeAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ChangeAmount;
    /**
     * The PaymentDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $PaymentDate;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $PaymentType;
    /**
     * The RefNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $RefNum;
    /**
     * Constructor method for OrderPayment
     * @see parent::__construct()
     * @param string $_amount
     * @param string $_authCode
     * @param string $_cardNum
     * @param string $_cashTendered
     * @param string $_cardType
     * @param string $_changeAmount
     * @param string $_paymentDate
     * @param string $_paymentType
     * @param string $_refNum
     * @return EBizChargeStructOrderPayment
     */
    public function __construct($_amount = NULL,$_authCode = NULL,$_cardNum = NULL,$_cashTendered = NULL,$_cardType = NULL,$_changeAmount = NULL,$_paymentDate = NULL,$_paymentType = NULL,$_refNum = NULL)
    {
        parent::__construct(array('Amount'=>$_amount,'AuthCode'=>$_authCode,'CardNum'=>$_cardNum,'CashTendered'=>$_cashTendered,'CardType'=>$_cardType,'ChangeAmount'=>$_changeAmount,'PaymentDate'=>$_paymentDate,'PaymentType'=>$_paymentType,'RefNum'=>$_refNum),false);
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $_amount the Amount
     * @return string
     */
    public function setAmount($_amount)
    {
        return ($this->Amount = $_amount);
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
     * Get CardNum value
     * @return string|null
     */
    public function getCardNum()
    {
        return $this->CardNum;
    }
    /**
     * Set CardNum value
     * @param string $_cardNum the CardNum
     * @return string
     */
    public function setCardNum($_cardNum)
    {
        return ($this->CardNum = $_cardNum);
    }
    /**
     * Get CashTendered value
     * @return string|null
     */
    public function getCashTendered()
    {
        return $this->CashTendered;
    }
    /**
     * Set CashTendered value
     * @param string $_cashTendered the CashTendered
     * @return string
     */
    public function setCashTendered($_cashTendered)
    {
        return ($this->CashTendered = $_cashTendered);
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
     * Get ChangeAmount value
     * @return string|null
     */
    public function getChangeAmount()
    {
        return $this->ChangeAmount;
    }
    /**
     * Set ChangeAmount value
     * @param string $_changeAmount the ChangeAmount
     * @return string
     */
    public function setChangeAmount($_changeAmount)
    {
        return ($this->ChangeAmount = $_changeAmount);
    }
    /**
     * Get PaymentDate value
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }
    /**
     * Set PaymentDate value
     * @param string $_paymentDate the PaymentDate
     * @return string
     */
    public function setPaymentDate($_paymentDate)
    {
        return ($this->PaymentDate = $_paymentDate);
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @param string $_paymentType the PaymentType
     * @return string
     */
    public function setPaymentType($_paymentType)
    {
        return ($this->PaymentType = $_paymentType);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructOrderPayment
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
