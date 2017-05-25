<?php
/**
 * File for class EBizChargeStructRecurringBilling
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructRecurringBilling originally named RecurringBilling
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructRecurringBilling extends EBizChargeWsdlClass
{
    /**
     * The Amount
     * @var double
     */
    public $Amount;
    /**
     * The Enabled
     * @var boolean
     */
    public $Enabled;
    /**
     * The Expire
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Expire;
    /**
     * The Next
     * @var string
     */
    public $Next;
    /**
     * The NumLeft
     * @var integer
     */
    public $NumLeft;
    /**
     * The Schedule
     * @var string
     */
    public $Schedule;
    /**
     * Constructor method for RecurringBilling
     * @see parent::__construct()
     * @param double $_amount
     * @param boolean $_enabled
     * @param string $_expire
     * @param string $_next
     * @param integer $_numLeft
     * @param string $_schedule
     * @return EBizChargeStructRecurringBilling
     */
    public function __construct($_amount = NULL,$_enabled = NULL,$_expire = NULL,$_next = NULL,$_numLeft = NULL,$_schedule = NULL)
    {
        parent::__construct(array('Amount'=>$_amount,'Enabled'=>$_enabled,'Expire'=>$_expire,'Next'=>$_next,'NumLeft'=>$_numLeft,'Schedule'=>$_schedule),false);
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
     * Get Expire value
     * @return string|null
     */
    public function getExpire()
    {
        return $this->Expire;
    }
    /**
     * Set Expire value
     * @param string $_expire the Expire
     * @return string
     */
    public function setExpire($_expire)
    {
        return ($this->Expire = $_expire);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructRecurringBilling
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
