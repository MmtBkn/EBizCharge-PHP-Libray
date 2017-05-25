<?php
/**
 * File for class EBizChargeStructSystemInfo
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructSystemInfo originally named SystemInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructSystemInfo extends EBizChargeWsdlClass
{
    /**
     * The ApiVersion
     * @var string
     */
    public $ApiVersion;
    /**
     * The Environment
     * @var string
     */
    public $Environment;
    /**
     * The Datacenter
     * @var string
     */
    public $Datacenter;
    /**
     * The Time
     * @var string
     */
    public $Time;
    /**
     * Constructor method for SystemInfo
     * @see parent::__construct()
     * @param string $_apiVersion
     * @param string $_environment
     * @param string $_datacenter
     * @param string $_time
     * @return EBizChargeStructSystemInfo
     */
    public function __construct($_apiVersion = NULL,$_environment = NULL,$_datacenter = NULL,$_time = NULL)
    {
        parent::__construct(array('ApiVersion'=>$_apiVersion,'Environment'=>$_environment,'Datacenter'=>$_datacenter,'Time'=>$_time),false);
    }
    /**
     * Get ApiVersion value
     * @return string|null
     */
    public function getApiVersion()
    {
        return $this->ApiVersion;
    }
    /**
     * Set ApiVersion value
     * @param string $_apiVersion the ApiVersion
     * @return string
     */
    public function setApiVersion($_apiVersion)
    {
        return ($this->ApiVersion = $_apiVersion);
    }
    /**
     * Get Environment value
     * @return string|null
     */
    public function getEnvironment()
    {
        return $this->Environment;
    }
    /**
     * Set Environment value
     * @param string $_environment the Environment
     * @return string
     */
    public function setEnvironment($_environment)
    {
        return ($this->Environment = $_environment);
    }
    /**
     * Get Datacenter value
     * @return string|null
     */
    public function getDatacenter()
    {
        return $this->Datacenter;
    }
    /**
     * Set Datacenter value
     * @param string $_datacenter the Datacenter
     * @return string
     */
    public function setDatacenter($_datacenter)
    {
        return ($this->Datacenter = $_datacenter);
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $_time the Time
     * @return string
     */
    public function setTime($_time)
    {
        return ($this->Time = $_time);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructSystemInfo
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
