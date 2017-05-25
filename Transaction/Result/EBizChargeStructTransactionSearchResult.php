<?php
/**
 * File for class EBizChargeStructTransactionSearchResult
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructTransactionSearchResult originally named TransactionSearchResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructTransactionSearchResult extends EBizChargeWsdlClass
{
    /**
     * The AuthOnlyAmount
     * @var float
     */
    public $AuthOnlyAmount;
    /**
     * The AuthOnlyCount
     * @var integer
     */
    public $AuthOnlyCount;
    /**
     * The CreditsAmount
     * @var float
     */
    public $CreditsAmount;
    /**
     * The CreditsCount
     * @var integer
     */
    public $CreditsCount;
    /**
     * The DeclinesAmount
     * @var float
     */
    public $DeclinesAmount;
    /**
     * The DeclinesCount
     * @var integer
     */
    public $DeclinesCount;
    /**
     * The ErrorsAmount
     * @var float
     */
    public $ErrorsAmount;
    /**
     * The ErrorsCount
     * @var integer
     */
    public $ErrorsCount;
    /**
     * The Limit
     * @var integer
     */
    public $Limit;
    /**
     * The SalesAmount
     * @var float
     */
    public $SalesAmount;
    /**
     * The SalesCount
     * @var integer
     */
    public $SalesCount;
    /**
     * The StartIndex
     * @var integer
     */
    public $StartIndex;
    /**
     * The Transactions
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
     * @var Array
     */
    public $Transactions;
    /**
     * The TransactionsMatched
     * @var integer
     */
    public $TransactionsMatched;
    /**
     * The TransactionsReturned
     * @var integer
     */
    public $TransactionsReturned;
    /**
     * The VoidsAmount
     * @var float
     */
    public $VoidsAmount;
    /**
     * The VoidsCount
     * @var integer
     */
    public $VoidsCount;
    /**
     * Constructor method for TransactionSearchResult
     * @see parent::__construct()
     * @param float $_authOnlyAmount
     * @param integer $_authOnlyCount
     * @param float $_creditsAmount
     * @param integer $_creditsCount
     * @param float $_declinesAmount
     * @param integer $_declinesCount
     * @param float $_errorsAmount
     * @param integer $_errorsCount
     * @param integer $_limit
     * @param float $_salesAmount
     * @param integer $_salesCount
     * @param integer $_startIndex
     * @param Array $_transactions
     * @param integer $_transactionsMatched
     * @param integer $_transactionsReturned
     * @param float $_voidsAmount
     * @param integer $_voidsCount
     * @return EBizChargeStructTransactionSearchResult
     */
    public function __construct($_authOnlyAmount = NULL,$_authOnlyCount = NULL,$_creditsAmount = NULL,$_creditsCount = NULL,$_declinesAmount = NULL,$_declinesCount = NULL,$_errorsAmount = NULL,$_errorsCount = NULL,$_limit = NULL,$_salesAmount = NULL,$_salesCount = NULL,$_startIndex = NULL,$_transactions = NULL,$_transactionsMatched = NULL,$_transactionsReturned = NULL,$_voidsAmount = NULL,$_voidsCount = NULL)
    {
        parent::__construct(array('AuthOnlyAmount'=>$_authOnlyAmount,'AuthOnlyCount'=>$_authOnlyCount,'CreditsAmount'=>$_creditsAmount,'CreditsCount'=>$_creditsCount,'DeclinesAmount'=>$_declinesAmount,'DeclinesCount'=>$_declinesCount,'ErrorsAmount'=>$_errorsAmount,'ErrorsCount'=>$_errorsCount,'Limit'=>$_limit,'SalesAmount'=>$_salesAmount,'SalesCount'=>$_salesCount,'StartIndex'=>$_startIndex,'Transactions'=>$_transactions,'TransactionsMatched'=>$_transactionsMatched,'TransactionsReturned'=>$_transactionsReturned,'VoidsAmount'=>$_voidsAmount,'VoidsCount'=>$_voidsCount),false);
    }
    /**
     * Get AuthOnlyAmount value
     * @return float|null
     */
    public function getAuthOnlyAmount()
    {
        return $this->AuthOnlyAmount;
    }
    /**
     * Set AuthOnlyAmount value
     * @param float $_authOnlyAmount the AuthOnlyAmount
     * @return float
     */
    public function setAuthOnlyAmount($_authOnlyAmount)
    {
        return ($this->AuthOnlyAmount = $_authOnlyAmount);
    }
    /**
     * Get AuthOnlyCount value
     * @return integer|null
     */
    public function getAuthOnlyCount()
    {
        return $this->AuthOnlyCount;
    }
    /**
     * Set AuthOnlyCount value
     * @param integer $_authOnlyCount the AuthOnlyCount
     * @return integer
     */
    public function setAuthOnlyCount($_authOnlyCount)
    {
        return ($this->AuthOnlyCount = $_authOnlyCount);
    }
    /**
     * Get CreditsAmount value
     * @return float|null
     */
    public function getCreditsAmount()
    {
        return $this->CreditsAmount;
    }
    /**
     * Set CreditsAmount value
     * @param float $_creditsAmount the CreditsAmount
     * @return float
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
     * Get DeclinesAmount value
     * @return float|null
     */
    public function getDeclinesAmount()
    {
        return $this->DeclinesAmount;
    }
    /**
     * Set DeclinesAmount value
     * @param float $_declinesAmount the DeclinesAmount
     * @return float
     */
    public function setDeclinesAmount($_declinesAmount)
    {
        return ($this->DeclinesAmount = $_declinesAmount);
    }
    /**
     * Get DeclinesCount value
     * @return integer|null
     */
    public function getDeclinesCount()
    {
        return $this->DeclinesCount;
    }
    /**
     * Set DeclinesCount value
     * @param integer $_declinesCount the DeclinesCount
     * @return integer
     */
    public function setDeclinesCount($_declinesCount)
    {
        return ($this->DeclinesCount = $_declinesCount);
    }
    /**
     * Get ErrorsAmount value
     * @return float|null
     */
    public function getErrorsAmount()
    {
        return $this->ErrorsAmount;
    }
    /**
     * Set ErrorsAmount value
     * @param float $_errorsAmount the ErrorsAmount
     * @return float
     */
    public function setErrorsAmount($_errorsAmount)
    {
        return ($this->ErrorsAmount = $_errorsAmount);
    }
    /**
     * Get ErrorsCount value
     * @return integer|null
     */
    public function getErrorsCount()
    {
        return $this->ErrorsCount;
    }
    /**
     * Set ErrorsCount value
     * @param integer $_errorsCount the ErrorsCount
     * @return integer
     */
    public function setErrorsCount($_errorsCount)
    {
        return ($this->ErrorsCount = $_errorsCount);
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
     * Get SalesAmount value
     * @return float|null
     */
    public function getSalesAmount()
    {
        return $this->SalesAmount;
    }
    /**
     * Set SalesAmount value
     * @param float $_salesAmount the SalesAmount
     * @return float
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
     * Get Transactions value
     * @return Array|null
     */
    public function getTransactions()
    {
        return $this->Transactions;
    }
    /**
     * Set Transactions value
     * @param Array $_transactions the Transactions
     * @return Array
     */
    public function setTransactions($_transactions)
    {
        return ($this->Transactions = $_transactions);
    }
    /**
     * Get TransactionsMatched value
     * @return integer|null
     */
    public function getTransactionsMatched()
    {
        return $this->TransactionsMatched;
    }
    /**
     * Set TransactionsMatched value
     * @param integer $_transactionsMatched the TransactionsMatched
     * @return integer
     */
    public function setTransactionsMatched($_transactionsMatched)
    {
        return ($this->TransactionsMatched = $_transactionsMatched);
    }
    /**
     * Get TransactionsReturned value
     * @return integer|null
     */
    public function getTransactionsReturned()
    {
        return $this->TransactionsReturned;
    }
    /**
     * Set TransactionsReturned value
     * @param integer $_transactionsReturned the TransactionsReturned
     * @return integer
     */
    public function setTransactionsReturned($_transactionsReturned)
    {
        return ($this->TransactionsReturned = $_transactionsReturned);
    }
    /**
     * Get VoidsAmount value
     * @return float|null
     */
    public function getVoidsAmount()
    {
        return $this->VoidsAmount;
    }
    /**
     * Set VoidsAmount value
     * @param float $_voidsAmount the VoidsAmount
     * @return float
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
     * @return EBizChargeStructTransactionSearchResult
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
