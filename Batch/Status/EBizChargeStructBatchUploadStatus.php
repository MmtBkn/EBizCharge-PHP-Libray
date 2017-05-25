<?php
/**
 * File for class EBizChargeStructBatchUploadStatus
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructBatchUploadStatus originally named BatchUploadStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructBatchUploadStatus extends EBizChargeWsdlClass
{
    /**
     * The Approved
     * @var integer
     */
    public $Approved;
    /**
     * The UploadRefNum
     * @var integer
     */
    public $UploadRefNum;
    /**
     * The Declined
     * @var integer
     */
    public $Declined;
    /**
     * The Errors
     * @var integer
     */
    public $Errors;
    /**
     * The Finished
     * @var string
     */
    public $Finished;
    /**
     * The Remaining
     * @var integer
     */
    public $Remaining;
    /**
     * The Started
     * @var string
     */
    public $Started;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The Transactions
     * @var integer
     */
    public $Transactions;
    /**
     * Constructor method for BatchUploadStatus
     * @see parent::__construct()
     * @param integer $_approved
     * @param integer $_uploadRefNum
     * @param integer $_declined
     * @param integer $_errors
     * @param string $_finished
     * @param integer $_remaining
     * @param string $_started
     * @param string $_status
     * @param integer $_transactions
     * @return EBizChargeStructBatchUploadStatus
     */
    public function __construct($_approved = NULL,$_uploadRefNum = NULL,$_declined = NULL,$_errors = NULL,$_finished = NULL,$_remaining = NULL,$_started = NULL,$_status = NULL,$_transactions = NULL)
    {
        parent::__construct(array('Approved'=>$_approved,'UploadRefNum'=>$_uploadRefNum,'Declined'=>$_declined,'Errors'=>$_errors,'Finished'=>$_finished,'Remaining'=>$_remaining,'Started'=>$_started,'Status'=>$_status,'Transactions'=>$_transactions),false);
    }
    /**
     * Get Approved value
     * @return integer|null
     */
    public function getApproved()
    {
        return $this->Approved;
    }
    /**
     * Set Approved value
     * @param integer $_approved the Approved
     * @return integer
     */
    public function setApproved($_approved)
    {
        return ($this->Approved = $_approved);
    }
    /**
     * Get UploadRefNum value
     * @return integer|null
     */
    public function getUploadRefNum()
    {
        return $this->UploadRefNum;
    }
    /**
     * Set UploadRefNum value
     * @param integer $_uploadRefNum the UploadRefNum
     * @return integer
     */
    public function setUploadRefNum($_uploadRefNum)
    {
        return ($this->UploadRefNum = $_uploadRefNum);
    }
    /**
     * Get Declined value
     * @return integer|null
     */
    public function getDeclined()
    {
        return $this->Declined;
    }
    /**
     * Set Declined value
     * @param integer $_declined the Declined
     * @return integer
     */
    public function setDeclined($_declined)
    {
        return ($this->Declined = $_declined);
    }
    /**
     * Get Errors value
     * @return integer|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param integer $_errors the Errors
     * @return integer
     */
    public function setErrors($_errors)
    {
        return ($this->Errors = $_errors);
    }
    /**
     * Get Finished value
     * @return string|null
     */
    public function getFinished()
    {
        return $this->Finished;
    }
    /**
     * Set Finished value
     * @param string $_finished the Finished
     * @return string
     */
    public function setFinished($_finished)
    {
        return ($this->Finished = $_finished);
    }
    /**
     * Get Remaining value
     * @return integer|null
     */
    public function getRemaining()
    {
        return $this->Remaining;
    }
    /**
     * Set Remaining value
     * @param integer $_remaining the Remaining
     * @return integer
     */
    public function setRemaining($_remaining)
    {
        return ($this->Remaining = $_remaining);
    }
    /**
     * Get Started value
     * @return string|null
     */
    public function getStarted()
    {
        return $this->Started;
    }
    /**
     * Set Started value
     * @param string $_started the Started
     * @return string
     */
    public function setStarted($_started)
    {
        return ($this->Started = $_started);
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
     * Get Transactions value
     * @return integer|null
     */
    public function getTransactions()
    {
        return $this->Transactions;
    }
    /**
     * Set Transactions value
     * @param integer $_transactions the Transactions
     * @return integer
     */
    public function setTransactions($_transactions)
    {
        return ($this->Transactions = $_transactions);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructBatchUploadStatus
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
