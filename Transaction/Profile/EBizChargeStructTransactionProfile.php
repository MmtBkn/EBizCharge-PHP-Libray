<?php
/**
 * File for class EBizChargeStructTransactionProfile
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructTransactionProfile originally named TransactionProfile
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructTransactionProfile extends EBizChargeWsdlClass
{
    /**
     * The DeviceID
     * @var string
     */
    public $DeviceID;
    /**
     * The Policy
     * @var string
     */
    public $Policy;
    /**
     * The ProfileData
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $ProfileData;
    /**
     * The RiskRating
     * @var string
     */
    public $RiskRating;
    /**
     * The Score
     * @var string
     */
    public $Score;
    /**
     * The SessionID
     * @var string
     */
    public $SessionID;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The Scoring
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $Scoring;
    /**
     * Constructor method for TransactionProfile
     * @see parent::__construct()
     * @param string $_deviceID
     * @param string $_policy
     * @param Array $_profileData
     * @param string $_riskRating
     * @param string $_score
     * @param string $_sessionID
     * @param string $_status
     * @param Array $_scoring
     * @return EBizChargeStructTransactionProfile
     */
    public function __construct($_deviceID = NULL,$_policy = NULL,$_profileData = NULL,$_riskRating = NULL,$_score = NULL,$_sessionID = NULL,$_status = NULL,$_scoring = NULL)
    {
        parent::__construct(array('DeviceID'=>$_deviceID,'Policy'=>$_policy,'ProfileData'=>$_profileData,'RiskRating'=>$_riskRating,'Score'=>$_score,'SessionID'=>$_sessionID,'Status'=>$_status,'Scoring'=>$_scoring),false);
    }
    /**
     * Get DeviceID value
     * @return string|null
     */
    public function getDeviceID()
    {
        return $this->DeviceID;
    }
    /**
     * Set DeviceID value
     * @param string $_deviceID the DeviceID
     * @return string
     */
    public function setDeviceID($_deviceID)
    {
        return ($this->DeviceID = $_deviceID);
    }
    /**
     * Get Policy value
     * @return string|null
     */
    public function getPolicy()
    {
        return $this->Policy;
    }
    /**
     * Set Policy value
     * @param string $_policy the Policy
     * @return string
     */
    public function setPolicy($_policy)
    {
        return ($this->Policy = $_policy);
    }
    /**
     * Get ProfileData value
     * @return Array|null
     */
    public function getProfileData()
    {
        return $this->ProfileData;
    }
    /**
     * Set ProfileData value
     * @param Array $_profileData the ProfileData
     * @return Array
     */
    public function setProfileData($_profileData)
    {
        return ($this->ProfileData = $_profileData);
    }
    /**
     * Get RiskRating value
     * @return string|null
     */
    public function getRiskRating()
    {
        return $this->RiskRating;
    }
    /**
     * Set RiskRating value
     * @param string $_riskRating the RiskRating
     * @return string
     */
    public function setRiskRating($_riskRating)
    {
        return ($this->RiskRating = $_riskRating);
    }
    /**
     * Get Score value
     * @return string|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param string $_score the Score
     * @return string
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
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
     * Get Scoring value
     * @return Array|null
     */
    public function getScoring()
    {
        return $this->Scoring;
    }
    /**
     * Set Scoring value
     * @param Array $_scoring the Scoring
     * @return Array
     */
    public function setScoring($_scoring)
    {
        return ($this->Scoring = $_scoring);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructTransactionProfile
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
