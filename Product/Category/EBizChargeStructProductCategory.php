<?php
/**
 * File for class EBizChargeStructProductCategory
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructProductCategory originally named ProductCategory
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructProductCategory extends EBizChargeWsdlClass
{
    /**
     * The ProductCategoryRefNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ProductCategoryRefNum;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $Created;
    /**
     * The Modified
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $Modified;
    /**
     * Constructor method for ProductCategory
     * @see parent::__construct()
     * @param string $_productCategoryRefNum
     * @param string $_name
     * @param dateTime $_created
     * @param dateTime $_modified
     * @return EBizChargeStructProductCategory
     */
    public function __construct($_productCategoryRefNum = NULL,$_name = NULL,$_created = NULL,$_modified = NULL)
    {
        parent::__construct(array('ProductCategoryRefNum'=>$_productCategoryRefNum,'Name'=>$_name,'Created'=>$_created,'Modified'=>$_modified),false);
    }
    /**
     * Get ProductCategoryRefNum value
     * @return string|null
     */
    public function getProductCategoryRefNum()
    {
        return $this->ProductCategoryRefNum;
    }
    /**
     * Set ProductCategoryRefNum value
     * @param string $_productCategoryRefNum the ProductCategoryRefNum
     * @return string
     */
    public function setProductCategoryRefNum($_productCategoryRefNum)
    {
        return ($this->ProductCategoryRefNum = $_productCategoryRefNum);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get Created value
     * @return dateTime|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param dateTime $_created the Created
     * @return dateTime
     */
    public function setCreated($_created)
    {
        return ($this->Created = $_created);
    }
    /**
     * Get Modified value
     * @return dateTime|null
     */
    public function getModified()
    {
        return $this->Modified;
    }
    /**
     * Set Modified value
     * @param dateTime $_modified the Modified
     * @return dateTime
     */
    public function setModified($_modified)
    {
        return ($this->Modified = $_modified);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructProductCategory
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
