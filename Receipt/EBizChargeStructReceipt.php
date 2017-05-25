<?php
/**
 * File for class EBizChargeStructReceipt
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructReceipt originally named Receipt
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructReceipt extends EBizChargeWsdlClass
{
    /**
     * The ReceiptRefNum
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var integer
     */
    public $ReceiptRefNum;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $Subject;
    /**
     * The FromEmail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $FromEmail;
    /**
     * The Target
     * @var string
     */
    public $Target;
    /**
     * The ContentType
     * @var string
     */
    public $ContentType;
    /**
     * The TemplateHTML
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TemplateHTML;
    /**
     * The TemplateText
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $TemplateText;
    /**
     * Constructor method for Receipt
     * @see parent::__construct()
     * @param integer $_receiptRefNum
     * @param string $_name
     * @param string $_subject
     * @param string $_fromEmail
     * @param string $_target
     * @param string $_contentType
     * @param string $_templateHTML
     * @param string $_templateText
     * @return EBizChargeStructReceipt
     */
    public function __construct($_receiptRefNum = NULL,$_name = NULL,$_subject = NULL,$_fromEmail = NULL,$_target = NULL,$_contentType = NULL,$_templateHTML = NULL,$_templateText = NULL)
    {
        parent::__construct(array('ReceiptRefNum'=>$_receiptRefNum,'Name'=>$_name,'Subject'=>$_subject,'FromEmail'=>$_fromEmail,'Target'=>$_target,'ContentType'=>$_contentType,'TemplateHTML'=>$_templateHTML,'TemplateText'=>$_templateText),false);
    }
    /**
     * Get ReceiptRefNum value
     * @return integer|null
     */
    public function getReceiptRefNum()
    {
        return $this->ReceiptRefNum;
    }
    /**
     * Set ReceiptRefNum value
     * @param integer $_receiptRefNum the ReceiptRefNum
     * @return integer
     */
    public function setReceiptRefNum($_receiptRefNum)
    {
        return ($this->ReceiptRefNum = $_receiptRefNum);
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
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $_subject the Subject
     * @return string
     */
    public function setSubject($_subject)
    {
        return ($this->Subject = $_subject);
    }
    /**
     * Get FromEmail value
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->FromEmail;
    }
    /**
     * Set FromEmail value
     * @param string $_fromEmail the FromEmail
     * @return string
     */
    public function setFromEmail($_fromEmail)
    {
        return ($this->FromEmail = $_fromEmail);
    }
    /**
     * Get Target value
     * @return string|null
     */
    public function getTarget()
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @param string $_target the Target
     * @return string
     */
    public function setTarget($_target)
    {
        return ($this->Target = $_target);
    }
    /**
     * Get ContentType value
     * @return string|null
     */
    public function getContentType()
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @param string $_contentType the ContentType
     * @return string
     */
    public function setContentType($_contentType)
    {
        return ($this->ContentType = $_contentType);
    }
    /**
     * Get TemplateHTML value
     * @return string|null
     */
    public function getTemplateHTML()
    {
        return $this->TemplateHTML;
    }
    /**
     * Set TemplateHTML value
     * @param string $_templateHTML the TemplateHTML
     * @return string
     */
    public function setTemplateHTML($_templateHTML)
    {
        return ($this->TemplateHTML = $_templateHTML);
    }
    /**
     * Get TemplateText value
     * @return string|null
     */
    public function getTemplateText()
    {
        return $this->TemplateText;
    }
    /**
     * Set TemplateText value
     * @param string $_templateText the TemplateText
     * @return string
     */
    public function setTemplateText($_templateText)
    {
        return ($this->TemplateText = $_templateText);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructReceipt
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
