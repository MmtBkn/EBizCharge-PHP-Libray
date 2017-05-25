<?php
/**
 * File for class EBizChargeStructCustomerSearchResult
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCustomerSearchResult originally named CustomerSearchResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCustomerSearchResult extends EBizChargeWsdlClass
{
    /**
     * The Customers
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $Customers;
    /**
     * The CustomersMatched
     * @var integer
     */
    public $CustomersMatched;
    /**
     * The CustomersReturned
     * @var integer
     */
    public $CustomersReturned;
    /**
     * The Limit
     * @var integer
     */
    public $Limit;
    /**
     * The StartIndex
     * @var integer
     */
    public $StartIndex;
    /**
     * Constructor method for CustomerSearchResult
     * @see parent::__construct()
     * @param Array $_customers
     * @param integer $_customersMatched
     * @param integer $_customersReturned
     * @param integer $_limit
     * @param integer $_startIndex
     * @return EBizChargeStructCustomerSearchResult
     */
    public function __construct($_customers = NULL,$_customersMatched = NULL,$_customersReturned = NULL,$_limit = NULL,$_startIndex = NULL)
    {
        parent::__construct(array('Customers'=>$_customers,'CustomersMatched'=>$_customersMatched,'CustomersReturned'=>$_customersReturned,'Limit'=>$_limit,'StartIndex'=>$_startIndex),false);
    }
    /**
     * Get Customers value
     * @return Array|null
     */
    public function getCustomers()
    {
        return $this->Customers;
    }
    /**
     * Set Customers value
     * @param Array $_customers the Customers
     * @return Array
     */
    public function setCustomers($_customers)
    {
        return ($this->Customers = $_customers);
    }
    /**
     * Get CustomersMatched value
     * @return integer|null
     */
    public function getCustomersMatched()
    {
        return $this->CustomersMatched;
    }
    /**
     * Set CustomersMatched value
     * @param integer $_customersMatched the CustomersMatched
     * @return integer
     */
    public function setCustomersMatched($_customersMatched)
    {
        return ($this->CustomersMatched = $_customersMatched);
    }
    /**
     * Get CustomersReturned value
     * @return integer|null
     */
    public function getCustomersReturned()
    {
        return $this->CustomersReturned;
    }
    /**
     * Set CustomersReturned value
     * @param integer $_customersReturned the CustomersReturned
     * @return integer
     */
    public function setCustomersReturned($_customersReturned)
    {
        return ($this->CustomersReturned = $_customersReturned);
    }
    /**
     * Get Limit value
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }
    /**
     * Set Limit value
     * @param integer $_limit the Limit
     * @return integer
     */
    public function setLimit($_limit)
    {
        return ($this->Limit = $_limit);
    }
    /**
     * Get StartIndex value
     * @return integer|null
     */
    public function getStartIndex()
    {
        return $this->StartIndex;
    }
    /**
     * Set StartIndex value
     * @param integer $_startIndex the StartIndex
     * @return integer
     */
    public function setStartIndex($_startIndex)
    {
        return ($this->StartIndex = $_startIndex);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructCustomerSearchResult
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
