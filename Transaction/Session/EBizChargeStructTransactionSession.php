<?php
/**
 * File for class EBizChargeStructTransactionSession
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructTransactionSession originally named TransactionSession
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructTransactionSession extends EBizChargeWsdlClass
{
    /**
     * The OrgID
     * @var string
     */
    public $OrgID;
    /**
     * The SessionID
     * @var string
     */
    public $SessionID;
    /**
     * Constructor method for TransactionSession
     * @see parent::__construct()
     * @param string $_orgID
     * @param string $_sessionID
     * @return EBizChargeStructTransactionSession
     */
    public function __construct($_orgID = NULL,$_sessionID = NULL)
    {
        parent::__construct(array('OrgID'=>$_orgID,'SessionID'=>$_sessionID),false);
    }
    /**
     * Get OrgID value
     * @return string|null
     */
    public function getOrgID()
    {
        return $this->OrgID;
    }
    /**
     * Set OrgID value
     * @param string $_orgID the OrgID
     * @return string
     */
    public function setOrgID($_orgID)
    {
        return ($this->OrgID = $_orgID);
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $_sessionID the SessionID
     * @return string
     */
    public function setSessionID($_sessionID)
    {
        return ($this->SessionID = $_sessionID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructTransactionSession
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
