<?php
/**
 * File for class EBizChargeStructTransactionResponse
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructTransactionResponse originally named TransactionResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructTransactionResponse extends EBizChargeWsdlClass
{
    /**
     * The AcsUrl
     * @var string
     */
    public $AcsUrl;
    /**
     * The AuthAmount
     * @var double
     */
    public $AuthAmount;
    /**
     * The AuthCode
     * @var string
     */
    public $AuthCode;
    /**
     * The AvsResult
     * @var string
     */
    public $AvsResult;
    /**
     * The AvsResultCode
     * @var string
     */
    public $AvsResultCode;
    /**
     * The BatchNum
     * @var integer
     */
    public $BatchNum;
    /**
     * The BatchRefNum
     * @var integer
     */
    public $BatchRefNum;
    /**
     * The CardCodeResult
     * @var string
     */
    public $CardCodeResult;
    /**
     * The CardCodeResultCode
     * @var string
     */
    public $CardCodeResultCode;
    /**
     * The CardLevelResult
     * @var string
     */
    public $CardLevelResult;
    /**
     * The CardLevelResultCode
     * @var string
     */
    public $CardLevelResultCode;
    /**
     * The ConversionRate
     * @var double
     */
    public $ConversionRate;
    /**
     * The ConvertedAmount
     * @var double
     */
    public $ConvertedAmount;
    /**
     * The ConvertedAmountCurrency
     * @var string
     */
    public $ConvertedAmountCurrency;
    /**
     * The CustNum
     * @var integer
     */
    public $CustNum;
    /**
     * The Error
     * @var string
     */
    public $Error;
    /**
     * The ErrorCode
     * @var integer
     */
    public $ErrorCode;
    /**
     * The isDuplicate
     * @var boolean
     */
    public $isDuplicate;
    /**
     * The Payload
     * @var string
     */
    public $Payload;
    /**
     * The ProfilerScore
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ProfilerScore;
    /**
     * The ProfilerResponse
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ProfilerResponse;
    /**
     * The ProfilerReason
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ProfilerReason;
    /**
     * The RefNum
     * @var integer
     */
    public $RefNum;
    /**
     * The RemainingBalance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $RemainingBalance;
    /**
     * The Result
     * @var string
     */
    public $Result;
    /**
     * The ResultCode
     * @var string
     */
    public $ResultCode;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The StatusCode
     * @var string
     */
    public $StatusCode;
    /**
     * The VpasResultCode
     * @var string
     */
    public $VpasResultCode;
    /**
     * Constructor method for TransactionResponse
     * @see parent::__construct()
     * @param string $_acsUrl
     * @param double $_authAmount
     * @param string $_authCode
     * @param string $_avsResult
     * @param string $_avsResultCode
     * @param integer $_batchNum
     * @param integer $_batchRefNum
     * @param string $_cardCodeResult
     * @param string $_cardCodeResultCode
     * @param string $_cardLevelResult
     * @param string $_cardLevelResultCode
     * @param double $_conversionRate
     * @param double $_convertedAmount
     * @param string $_convertedAmountCurrency
     * @param integer $_custNum
     * @param string $_error
     * @param integer $_errorCode
     * @param boolean $_isDuplicate
     * @param string $_payload
     * @param string $_profilerScore
     * @param string $_profilerResponse
     * @param string $_profilerReason
     * @param integer $_refNum
     * @param double $_remainingBalance
     * @param string $_result
     * @param string $_resultCode
     * @param string $_status
     * @param string $_statusCode
     * @param string $_vpasResultCode
     * @return EBizChargeStructTransactionResponse
     */
    public function __construct($_acsUrl = NULL,$_authAmount = NULL,$_authCode = NULL,$_avsResult = NULL,$_avsResultCode = NULL,$_batchNum = NULL,$_batchRefNum = NULL,$_cardCodeResult = NULL,$_cardCodeResultCode = NULL,$_cardLevelResult = NULL,$_cardLevelResultCode = NULL,$_conversionRate = NULL,$_convertedAmount = NULL,$_convertedAmountCurrency = NULL,$_custNum = NULL,$_error = NULL,$_errorCode = NULL,$_isDuplicate = NULL,$_payload = NULL,$_profilerScore = NULL,$_profilerResponse = NULL,$_profilerReason = NULL,$_refNum = NULL,$_remainingBalance = NULL,$_result = NULL,$_resultCode = NULL,$_status = NULL,$_statusCode = NULL,$_vpasResultCode = NULL)
    {
        parent::__construct(array('AcsUrl'=>$_acsUrl,'AuthAmount'=>$_authAmount,'AuthCode'=>$_authCode,'AvsResult'=>$_avsResult,'AvsResultCode'=>$_avsResultCode,'BatchNum'=>$_batchNum,'BatchRefNum'=>$_batchRefNum,'CardCodeResult'=>$_cardCodeResult,'CardCodeResultCode'=>$_cardCodeResultCode,'CardLevelResult'=>$_cardLevelResult,'CardLevelResultCode'=>$_cardLevelResultCode,'ConversionRate'=>$_conversionRate,'ConvertedAmount'=>$_convertedAmount,'ConvertedAmountCurrency'=>$_convertedAmountCurrency,'CustNum'=>$_custNum,'Error'=>$_error,'ErrorCode'=>$_errorCode,'isDuplicate'=>$_isDuplicate,'Payload'=>$_payload,'ProfilerScore'=>$_profilerScore,'ProfilerResponse'=>$_profilerResponse,'ProfilerReason'=>$_profilerReason,'RefNum'=>$_refNum,'RemainingBalance'=>$_remainingBalance,'Result'=>$_result,'ResultCode'=>$_resultCode,'Status'=>$_status,'StatusCode'=>$_statusCode,'VpasResultCode'=>$_vpasResultCode),false);
    }
    /**
     * Get AcsUrl value
     * @return string|null
     */
    public function getAcsUrl()
    {
        return $this->AcsUrl;
    }
    /**
     * Set AcsUrl value
     * @param string $_acsUrl the AcsUrl
     * @return string
     */
    public function setAcsUrl($_acsUrl)
    {
        return ($this->AcsUrl = $_acsUrl);
    }
    /**
     * Get AuthAmount value
     * @return double|null
     */
    public function getAuthAmount()
    {
        return $this->AuthAmount;
    }
    /**
     * Set AuthAmount value
     * @param double $_authAmount the AuthAmount
     * @return double
     */
    public function setAuthAmount($_authAmount)
    {
        return ($this->AuthAmount = $_authAmount);
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
     * Get AvsResult value
     * @return string|null
     */
    public function getAvsResult()
    {
        return $this->AvsResult;
    }
    /**
     * Set AvsResult value
     * @param string $_avsResult the AvsResult
     * @return string
     */
    public function setAvsResult($_avsResult)
    {
        return ($this->AvsResult = $_avsResult);
    }
    /**
     * Get AvsResultCode value
     * @return string|null
     */
    public function getAvsResultCode()
    {
        return $this->AvsResultCode;
    }
    /**
     * Set AvsResultCode value
     * @param string $_avsResultCode the AvsResultCode
     * @return string
     */
    public function setAvsResultCode($_avsResultCode)
    {
        return ($this->AvsResultCode = $_avsResultCode);
    }
    /**
     * Get BatchNum value
     * @return integer|null
     */
    public function getBatchNum()
    {
        return $this->BatchNum;
    }
    /**
     * Set BatchNum value
     * @param integer $_batchNum the BatchNum
     * @return integer
     */
    public function setBatchNum($_batchNum)
    {
        return ($this->BatchNum = $_batchNum);
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
     * Get CardCodeResult value
     * @return string|null
     */
    public function getCardCodeResult()
    {
        return $this->CardCodeResult;
    }
    /**
     * Set CardCodeResult value
     * @param string $_cardCodeResult the CardCodeResult
     * @return string
     */
    public function setCardCodeResult($_cardCodeResult)
    {
        return ($this->CardCodeResult = $_cardCodeResult);
    }
    /**
     * Get CardCodeResultCode value
     * @return string|null
     */
    public function getCardCodeResultCode()
    {
        return $this->CardCodeResultCode;
    }
    /**
     * Set CardCodeResultCode value
     * @param string $_cardCodeResultCode the CardCodeResultCode
     * @return string
     */
    public function setCardCodeResultCode($_cardCodeResultCode)
    {
        return ($this->CardCodeResultCode = $_cardCodeResultCode);
    }
    /**
     * Get CardLevelResult value
     * @return string|null
     */
    public function getCardLevelResult()
    {
        return $this->CardLevelResult;
    }
    /**
     * Set CardLevelResult value
     * @param string $_cardLevelResult the CardLevelResult
     * @return string
     */
    public function setCardLevelResult($_cardLevelResult)
    {
        return ($this->CardLevelResult = $_cardLevelResult);
    }
    /**
     * Get CardLevelResultCode value
     * @return string|null
     */
    public function getCardLevelResultCode()
    {
        return $this->CardLevelResultCode;
    }
    /**
     * Set CardLevelResultCode value
     * @param string $_cardLevelResultCode the CardLevelResultCode
     * @return string
     */
    public function setCardLevelResultCode($_cardLevelResultCode)
    {
        return ($this->CardLevelResultCode = $_cardLevelResultCode);
    }
    /**
     * Get ConversionRate value
     * @return double|null
     */
    public function getConversionRate()
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param double $_conversionRate the ConversionRate
     * @return double
     */
    public function setConversionRate($_conversionRate)
    {
        return ($this->ConversionRate = $_conversionRate);
    }
    /**
     * Get ConvertedAmount value
     * @return double|null
     */
    public function getConvertedAmount()
    {
        return $this->ConvertedAmount;
    }
    /**
     * Set ConvertedAmount value
     * @param double $_convertedAmount the ConvertedAmount
     * @return double
     */
    public function setConvertedAmount($_convertedAmount)
    {
        return ($this->ConvertedAmount = $_convertedAmount);
    }
    /**
     * Get ConvertedAmountCurrency value
     * @return string|null
     */
    public function getConvertedAmountCurrency()
    {
        return $this->ConvertedAmountCurrency;
    }
    /**
     * Set ConvertedAmountCurrency value
     * @param string $_convertedAmountCurrency the ConvertedAmountCurrency
     * @return string
     */
    public function setConvertedAmountCurrency($_convertedAmountCurrency)
    {
        return ($this->ConvertedAmountCurrency = $_convertedAmountCurrency);
    }
    /**
     * Get CustNum value
     * @return integer|null
     */
    public function getCustNum()
    {
        return $this->CustNum;
    }
    /**
     * Set CustNum value
     * @param integer $_custNum the CustNum
     * @return integer
     */
    public function setCustNum($_custNum)
    {
        return ($this->CustNum = $_custNum);
    }
    /**
     * Get Error value
     * @return string|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param string $_error the Error
     * @return string
     */
    public function setError($_error)
    {
        return ($this->Error = $_error);
    }
    /**
     * Get ErrorCode value
     * @return integer|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param integer $_errorCode the ErrorCode
     * @return integer
     */
    public function setErrorCode($_errorCode)
    {
        return ($this->ErrorCode = $_errorCode);
    }
    /**
     * Get isDuplicate value
     * @return boolean|null
     */
    public function getIsDuplicate()
    {
        return $this->isDuplicate;
    }
    /**
     * Set isDuplicate value
     * @param boolean $_isDuplicate the isDuplicate
     * @return boolean
     */
    public function setIsDuplicate($_isDuplicate)
    {
        return ($this->isDuplicate = $_isDuplicate);
    }
    /**
     * Get Payload value
     * @return string|null
     */
    public function getPayload()
    {
        return $this->Payload;
    }
    /**
     * Set Payload value
     * @param string $_payload the Payload
     * @return string
     */
    public function setPayload($_payload)
    {
        return ($this->Payload = $_payload);
    }
    /**
     * Get ProfilerScore value
     * @return string|null
     */
    public function getProfilerScore()
    {
        return $this->ProfilerScore;
    }
    /**
     * Set ProfilerScore value
     * @param string $_profilerScore the ProfilerScore
     * @return string
     */
    public function setProfilerScore($_profilerScore)
    {
        return ($this->ProfilerScore = $_profilerScore);
    }
    /**
     * Get ProfilerResponse value
     * @return string|null
     */
    public function getProfilerResponse()
    {
        return $this->ProfilerResponse;
    }
    /**
     * Set ProfilerResponse value
     * @param string $_profilerResponse the ProfilerResponse
     * @return string
     */
    public function setProfilerResponse($_profilerResponse)
    {
        return ($this->ProfilerResponse = $_profilerResponse);
    }
    /**
     * Get ProfilerReason value
     * @return string|null
     */
    public function getProfilerReason()
    {
        return $this->ProfilerReason;
    }
    /**
     * Set ProfilerReason value
     * @param string $_profilerReason the ProfilerReason
     * @return string
     */
    public function setProfilerReason($_profilerReason)
    {
        return ($this->ProfilerReason = $_profilerReason);
    }
    /**
     * Get RefNum value
     * @return integer|null
     */
    public function getRefNum()
    {
        return $this->RefNum;
    }
    /**
     * Set RefNum value
     * @param integer $_refNum the RefNum
     * @return integer
     */
    public function setRefNum($_refNum)
    {
        return ($this->RefNum = $_refNum);
    }
    /**
     * Get RemainingBalance value
     * @return double|null
     */
    public function getRemainingBalance()
    {
        return $this->RemainingBalance;
    }
    /**
     * Set RemainingBalance value
     * @param double $_remainingBalance the RemainingBalance
     * @return double
     */
    public function setRemainingBalance($_remainingBalance)
    {
        return ($this->RemainingBalance = $_remainingBalance);
    }
    /**
     * Get Result value
     * @return string|null
     */
    public function getResult()
    {
        return $this->Result;
    }
    /**
     * Set Result value
     * @param string $_result the Result
     * @return string
     */
    public function setResult($_result)
    {
        return ($this->Result = $_result);
    }
    /**
     * Get ResultCode value
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->ResultCode;
    }
    /**
     * Set ResultCode value
     * @param string $_resultCode the ResultCode
     * @return string
     */
    public function setResultCode($_resultCode)
    {
        return ($this->ResultCode = $_resultCode);
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
     * Get VpasResultCode value
     * @return string|null
     */
    public function getVpasResultCode()
    {
        return $this->VpasResultCode;
    }
    /**
     * Set VpasResultCode value
     * @param string $_vpasResultCode the VpasResultCode
     * @return string
     */
    public function setVpasResultCode($_vpasResultCode)
    {
        return ($this->VpasResultCode = $_vpasResultCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructTransactionResponse
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
