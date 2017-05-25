<?php
/**
 * File for class EBizChargeStructProductSearchResult
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructProductSearchResult originally named ProductSearchResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructProductSearchResult extends EBizChargeWsdlClass
{
    /**
     * The Products
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $Products;
    /**
     * The ProductsMatched
     * @var integer
     */
    public $ProductsMatched;
    /**
     * The ProductsReturned
     * @var integer
     */
    public $ProductsReturned;
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
     * Constructor method for ProductSearchResult
     * @see parent::__construct()
     * @param Array $_products
     * @param integer $_productsMatched
     * @param integer $_productsReturned
     * @param integer $_limit
     * @param integer $_startIndex
     * @return EBizChargeStructProductSearchResult
     */
    public function __construct($_products = NULL,$_productsMatched = NULL,$_productsReturned = NULL,$_limit = NULL,$_startIndex = NULL)
    {
        parent::__construct(array('Products'=>$_products,'ProductsMatched'=>$_productsMatched,'ProductsReturned'=>$_productsReturned,'Limit'=>$_limit,'StartIndex'=>$_startIndex),false);
    }
    /**
     * Get Products value
     * @return Array|null
     */
    public function getProducts()
    {
        return $this->Products;
    }
    /**
     * Set Products value
     * @param Array $_products the Products
     * @return Array
     */
    public function setProducts($_products)
    {
        return ($this->Products = $_products);
    }
    /**
     * Get ProductsMatched value
     * @return integer|null
     */
    public function getProductsMatched()
    {
        return $this->ProductsMatched;
    }
    /**
     * Set ProductsMatched value
     * @param integer $_productsMatched the ProductsMatched
     * @return integer
     */
    public function setProductsMatched($_productsMatched)
    {
        return ($this->ProductsMatched = $_productsMatched);
    }
    /**
     * Get ProductsReturned value
     * @return integer|null
     */
    public function getProductsReturned()
    {
        return $this->ProductsReturned;
    }
    /**
     * Set ProductsReturned value
     * @param integer $_productsReturned the ProductsReturned
     * @return integer
     */
    public function setProductsReturned($_productsReturned)
    {
        return ($this->ProductsReturned = $_productsReturned);
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
     * @return EBizChargeStructProductSearchResult
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
