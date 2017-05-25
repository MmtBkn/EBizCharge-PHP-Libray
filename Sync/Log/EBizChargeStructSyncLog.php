<?php
/**
 * File for class EBizChargeStructSyncLog
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructSyncLog originally named SyncLog
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructSyncLog extends EBizChargeWsdlClass
{
    /**
     * The SyncPosition
     * @var integer
     */
    public $SyncPosition;
    /**
     * The ObjectName
     * @var string
     */
    public $ObjectName;
    /**
     * The RefNum
     * @var string
     */
    public $RefNum;
    /**
     * The ChangeDate
     * @var dateTime
     */
    public $ChangeDate;
    /**
     * The Action
     * @var string
     */
    public $Action;
    /**
     * Constructor method for SyncLog
     * @see parent::__construct()
     * @param integer $_syncPosition
     * @param string $_objectName
     * @param string $_refNum
     * @param dateTime $_changeDate
     * @param string $_action
     * @return EBizChargeStructSyncLog
     */
    public function __construct($_syncPosition = NULL,$_objectName = NULL,$_refNum = NULL,$_changeDate = NULL,$_action = NULL)
    {
        parent::__construct(array('SyncPosition'=>$_syncPosition,'ObjectName'=>$_objectName,'RefNum'=>$_refNum,'ChangeDate'=>$_changeDate,'Action'=>$_action),false);
    }
    /**
     * Get SyncPosition value
     * @return integer|null
     */
    public function getSyncPosition()
    {
        return $this->SyncPosition;
    }
    /**
     * Set SyncPosition value
     * @param integer $_syncPosition the SyncPosition
     * @return integer
     */
    public function setSyncPosition($_syncPosition)
    {
        return ($this->SyncPosition = $_syncPosition);
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $_objectName the ObjectName
     * @return string
     */
    public function setObjectName($_objectName)
    {
        return ($this->ObjectName = $_objectName);
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
     * Get ChangeDate value
     * @return dateTime|null
     */
    public function getChangeDate()
    {
        return $this->ChangeDate;
    }
    /**
     * Set ChangeDate value
     * @param dateTime $_changeDate the ChangeDate
     * @return dateTime
     */
    public function setChangeDate($_changeDate)
    {
        return ($this->ChangeDate = $_changeDate);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $_action the Action
     * @return string
     */
    public function setAction($_action)
    {
        return ($this->Action = $_action);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructSyncLog
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
