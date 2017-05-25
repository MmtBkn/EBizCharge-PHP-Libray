<?php
/**
 * File for class EBizChargeStructBatchStatus
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructBatchStatus originally named BatchStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructBatchStatus extends EBizChargeWsdlClass
{
    /**
     * The BatchRefNum
     * @var integer
     */
    public $BatchRefNum;
    /**
     * The Closed
     * @var string
     */
    public $Closed;
    /**
     * The CreditsAmount
     * @var double
     */
    public $CreditsAmount;
    /**
     * The CreditsCount
     * @var integer
     */
    public $CreditsCount;
    /**
     * The NetAmount
     * @var double
     */
    public $NetAmount;
    /**
     * The Opened
     * @var string
     */
    public $Opened;
    /**
     * The SalesAmount
     * @var double
     */
    public $SalesAmount;
    /**
     * The SalesCount
     * @var integer
     */
    public $SalesCount;
    /**
     * The Scheduled
     * @var string
     */
    public $Scheduled;
    /**
     * The Sequence
     * @var integer
     */
    public $Sequence;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The TransactionCount
     * @var integer
     */
    public $TransactionCount;
    /**
     * The VoidsAmount
     * @var double
     */
    public $VoidsAmount;
    /**
     * The VoidsCount
     * @var integer
     */
    public $VoidsCount;
    /**
     * Constructor method for BatchStatus
     * @see parent::__construct()
     * @param integer $_batchRefNum
     * @param string $_closed
     * @param double $_creditsAmount
     * @param integer $_creditsCount
     * @param double $_netAmount
     * @param string $_opened
     * @param double $_salesAmount
     * @param integer $_salesCount
     * @param string $_scheduled
     * @param integer $_sequence
     * @param string $_status
     * @param integer $_transactionCount
     * @param double $_voidsAmount
     * @param integer $_voidsCount
     * @return EBizChargeStructBatchStatus
     */
    public function __construct($_batchRefNum = NULL,$_closed = NULL,$_creditsAmount = NULL,$_creditsCount = NULL,$_netAmount = NULL,$_opened = NULL,$_salesAmount = NULL,$_salesCount = NULL,$_scheduled = NULL,$_sequence = NULL,$_status = NULL,$_transactionCount = NULL,$_voidsAmount = NULL,$_voidsCount = NULL)
    {
        parent::__construct(array('BatchRefNum'=>$_batchRefNum,'Closed'=>$_closed,'CreditsAmount'=>$_creditsAmount,'CreditsCount'=>$_creditsCount,'NetAmount'=>$_netAmount,'Opened'=>$_opened,'SalesAmount'=>$_salesAmount,'SalesCount'=>$_salesCount,'Scheduled'=>$_scheduled,'Sequence'=>$_sequence,'Status'=>$_status,'TransactionCount'=>$_transactionCount,'VoidsAmount'=>$_voidsAmount,'VoidsCount'=>$_voidsCount),false);
    }
    /**
     * Get BatchRefNum value
     * @return integer|null
     */
    public function getBatchRefNum()
    {
        return $this->BatchRefNum;
    }
    /**
     * Set BatchRefNum value
     * @param integer $_batchRefNum the BatchRefNum
     * @return integer
     */
    public function setBatchRefNum($_batchRefNum)
    {
        return ($this->BatchRefNum = $_batchRefNum);
    }
    /**
     * Get Closed value
     * @return string|null
     */
    public function getClosed()
    {
        return $this->Closed;
    }
    /**
     * Set Closed value
     * @param string $_closed the Closed
     * @return string
     */
    public function setClosed($_closed)
    {
        return ($this->Closed = $_closed);
    }
    /**
     * Get CreditsAmount value
     * @return double|null
     */
    public function getCreditsAmount()
    {
        return $this->CreditsAmount;
    }
    /**
     * Set CreditsAmount value
     * @param double $_creditsAmount the CreditsAmount
     * @return double
     */
    public function setCreditsAmount($_creditsAmount)
    {
        return ($this->CreditsAmount = $_creditsAmount);
    }
    /**
     * Get CreditsCount value
     * @return integer|null
     */
    public function getCreditsCount()
    {
        return $this->CreditsCount;
    }
    /**
     * Set CreditsCount value
     * @param integer $_creditsCount the CreditsCount
     * @return integer
     */
    public function setCreditsCount($_creditsCount)
    {
        return ($this->CreditsCount = $_creditsCount);
    }
    /**
     * Get NetAmount value
     * @return double|null
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }
    /**
     * Set NetAmount value
     * @param double $_netAmount the NetAmount
     * @return double
     */
    public function setNetAmount($_netAmount)
    {
        return ($this->NetAmount = $_netAmount);
    }
    /**
     * Get Opened value
     * @return string|null
     */
    public function getOpened()
    {
        return $this->Opened;
    }
    /**
     * Set Opened value
     * @param string $_opened the Opened
     * @return string
     */
    public function setOpened($_opened)
    {
        return ($this->Opened = $_opened);
    }
    /**
     * Get SalesAmount value
     * @return double|null
     */
    public function getSalesAmount()
    {
        return $this->SalesAmount;
    }
    /**
     * Set SalesAmount value
     * @param double $_salesAmount the SalesAmount
     * @return double
     */
    public function setSalesAmount($_salesAmount)
    {
        return ($this->SalesAmount = $_salesAmount);
    }
    /**
     * Get SalesCount value
     * @return integer|null
     */
    public function getSalesCount()
    {
        return $this->SalesCount;
    }
    /**
     * Set SalesCount value
     * @param integer $_salesCount the SalesCount
     * @return integer
     */
    public function setSalesCount($_salesCount)
    {
        return ($this->SalesCount = $_salesCount);
    }
    /**
     * Get Scheduled value
     * @return string|null
     */
    public function getScheduled()
    {
        return $this->Scheduled;
    }
    /**
     * Set Scheduled value
     * @param string $_scheduled the Scheduled
     * @return string
     */
    public function setScheduled($_scheduled)
    {
        return ($this->Scheduled = $_scheduled);
    }
    /**
     * Get Sequence value
     * @return integer|null
     */
    public function getSequence()
    {
        return $this->Sequence;
    }
    /**
     * Set Sequence value
     * @param integer $_sequence the Sequence
     * @return integer
     */
    public function setSequence($_sequence)
    {
        return ($this->Sequence = $_sequence);
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
     * Get TransactionCount value
     * @return integer|null
     */
    public function getTransactionCount()
    {
        return $this->TransactionCount;
    }
    /**
     * Set TransactionCount value
     * @param integer $_transactionCount the TransactionCount
     * @return integer
     */
    public function setTransactionCount($_transactionCount)
    {
        return ($this->TransactionCount = $_transactionCount);
    }
    /**
     * Get VoidsAmount value
     * @return double|null
     */
    public function getVoidsAmount()
    {
        return $this->VoidsAmount;
    }
    /**
     * Set VoidsAmount value
     * @param double $_voidsAmount the VoidsAmount
     * @return double
     */
    public function setVoidsAmount($_voidsAmount)
    {
        return ($this->VoidsAmount = $_voidsAmount);
    }
    /**
     * Get VoidsCount value
     * @return integer|null
     */
    public function getVoidsCount()
    {
        return $this->VoidsCount;
    }
    /**
     * Set VoidsCount value
     * @param integer $_voidsCount the VoidsCount
     * @return integer
     */
    public function setVoidsCount($_voidsCount)
    {
        return ($this->VoidsCount = $_voidsCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructBatchStatus
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
