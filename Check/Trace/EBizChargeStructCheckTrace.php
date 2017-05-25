<?php
/**
 * File for class EBizChargeStructCheckTrace
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCheckTrace originally named CheckTrace
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCheckTrace extends EBizChargeWsdlClass
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Status;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $StatusCode;
    /**
     * The BankNote
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $BankNote;
    /**
     * The Effective
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Effective;
    /**
     * The Processed
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Processed;
    /**
     * The Returned
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Returned;
    /**
     * The ReturnCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ReturnCode;
    /**
     * The Reason
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Reason;
    /**
     * The Settled
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Settled;
    /**
     * The TrackingNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TrackingNum;
    /**
     * Constructor method for CheckTrace
     * @see parent::__construct()
     * @param string $_status
     * @param string $_statusCode
     * @param string $_bankNote
     * @param string $_effective
     * @param string $_processed
     * @param string $_returned
     * @param string $_returnCode
     * @param string $_reason
     * @param string $_settled
     * @param string $_trackingNum
     * @return EBizChargeStructCheckTrace
     */
    public function __construct($_status = NULL,$_statusCode = NULL,$_bankNote = NULL,$_effective = NULL,$_processed = NULL,$_returned = NULL,$_returnCode = NULL,$_reason = NULL,$_settled = NULL,$_trackingNum = NULL)
    {
        parent::__construct(array('Status'=>$_status,'StatusCode'=>$_statusCode,'BankNote'=>$_bankNote,'Effective'=>$_effective,'Processed'=>$_processed,'Returned'=>$_returned,'ReturnCode'=>$_returnCode,'Reason'=>$_reason,'Settled'=>$_settled,'TrackingNum'=>$_trackingNum),false);
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
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $_statusCode the StatusCode
     * @return string
     */
    public function setStatusCode($_statusCode)
    {
        return ($this->StatusCode = $_statusCode);
    }
    /**
     * Get BankNote value
     * @return string|null
     */
    public function getBankNote()
    {
        return $this->BankNote;
    }
    /**
     * Set BankNote value
     * @param string $_bankNote the BankNote
     * @return string
     */
    public function setBankNote($_bankNote)
    {
        return ($this->BankNote = $_bankNote);
    }
    /**
     * Get Effective value
     * @return string|null
     */
    public function getEffective()
    {
        return $this->Effective;
    }
    /**
     * Set Effective value
     * @param string $_effective the Effective
     * @return string
     */
    public function setEffective($_effective)
    {
        return ($this->Effective = $_effective);
    }
    /**
     * Get Processed value
     * @return string|null
     */
    public function getProcessed()
    {
        return $this->Processed;
    }
    /**
     * Set Processed value
     * @param string $_processed the Processed
     * @return string
     */
    public function setProcessed($_processed)
    {
        return ($this->Processed = $_processed);
    }
    /**
     * Get Returned value
     * @return string|null
     */
    public function getReturned()
    {
        return $this->Returned;
    }
    /**
     * Set Returned value
     * @param string $_returned the Returned
     * @return string
     */
    public function setReturned($_returned)
    {
        return ($this->Returned = $_returned);
    }
    /**
     * Get ReturnCode value
     * @return string|null
     */
    public function getReturnCode()
    {
        return $this->ReturnCode;
    }
    /**
     * Set ReturnCode value
     * @param string $_returnCode the ReturnCode
     * @return string
     */
    public function setReturnCode($_returnCode)
    {
        return ($this->ReturnCode = $_returnCode);
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $_reason the Reason
     * @return string
     */
    public function setReason($_reason)
    {
        return ($this->Reason = $_reason);
    }
    /**
     * Get Settled value
     * @return string|null
     */
    public function getSettled()
    {
        return $this->Settled;
    }
    /**
     * Set Settled value
     * @param string $_settled the Settled
     * @return string
     */
    public function setSettled($_settled)
    {
        return ($this->Settled = $_settled);
    }
    /**
     * Get TrackingNum value
     * @return string|null
     */
    public function getTrackingNum()
    {
        return $this->TrackingNum;
    }
    /**
     * Set TrackingNum value
     * @param string $_trackingNum the TrackingNum
     * @return string
     */
    public function setTrackingNum($_trackingNum)
    {
        return ($this->TrackingNum = $_trackingNum);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructCheckTrace
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
