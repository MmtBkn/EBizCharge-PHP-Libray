<?php
/**
 * File for class EBizChargeStructBatchSearchResult
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructBatchSearchResult originally named BatchSearchResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructBatchSearchResult extends EBizChargeWsdlClass
{
    /**
     * The Batches
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $Batches;
    /**
     * The BatchesMatched
     * @var integer
     */
    public $BatchesMatched;
    /**
     * The BatchesReturned
     * @var integer
     */
    public $BatchesReturned;
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
     * Constructor method for BatchSearchResult
     * @see parent::__construct()
     * @param Array $_batches
     * @param integer $_batchesMatched
     * @param integer $_batchesReturned
     * @param integer $_limit
     * @param integer $_startIndex
     * @return EBizChargeStructBatchSearchResult
     */
    public function __construct($_batches = NULL,$_batchesMatched = NULL,$_batchesReturned = NULL,$_limit = NULL,$_startIndex = NULL)
    {
        parent::__construct(array('Batches'=>$_batches,'BatchesMatched'=>$_batchesMatched,'BatchesReturned'=>$_batchesReturned,'Limit'=>$_limit,'StartIndex'=>$_startIndex),false);
    }
    /**
     * Get Batches value
     * @return Array|null
     */
    public function getBatches()
    {
        return $this->Batches;
    }
    /**
     * Set Batches value
     * @param Array $_batches the Batches
     * @return Array
     */
    public function setBatches($_batches)
    {
        return ($this->Batches = $_batches);
    }
    /**
     * Get BatchesMatched value
     * @return integer|null
     */
    public function getBatchesMatched()
    {
        return $this->BatchesMatched;
    }
    /**
     * Set BatchesMatched value
     * @param integer $_batchesMatched the BatchesMatched
     * @return integer
     */
    public function setBatchesMatched($_batchesMatched)
    {
        return ($this->BatchesMatched = $_batchesMatched);
    }
    /**
     * Get BatchesReturned value
     * @return integer|null
     */
    public function getBatchesReturned()
    {
        return $this->BatchesReturned;
    }
    /**
     * Set BatchesReturned value
     * @param integer $_batchesReturned the BatchesReturned
     * @return integer
     */
    public function setBatchesReturned($_batchesReturned)
    {
        return ($this->BatchesReturned = $_batchesReturned);
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
     * @return EBizChargeStructBatchSearchResult
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
