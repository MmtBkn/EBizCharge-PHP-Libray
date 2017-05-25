<?php
/**
 * File for the class which returns the class map definition
 * @package EBizCharge
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * Class which returns the class map definition by the static method EBizChargeClassMap::classMap()
 * @package EBizCharge
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AccountDetails' => 'EBizChargeStructAccountDetails',
  'Address' => 'EBizChargeStructAddress',
  'Bank' => 'EBizChargeStructBank',
  'BatchSearchResult' => 'EBizChargeStructBatchSearchResult',
  'BatchStatus' => 'EBizChargeStructBatchStatus',
  'BatchUploadStatus' => 'EBizChargeStructBatchUploadStatus',
  'CheckData' => 'EBizChargeStructCheckData',
  'CheckTrace' => 'EBizChargeStructCheckTrace',
  'CreditCardData' => 'EBizChargeStructCreditCardData',
  'CreditCardToken' => 'EBizChargeStructCreditCardToken',
  'CurrencyConversion' => 'EBizChargeStructCurrencyConversion',
  'CurrencyObject' => 'EBizChargeStructCurrencyObject',
  'CustomerObject' => 'EBizChargeStructCustomerObject',
  'CustomerSearchResult' => 'EBizChargeStructCustomerSearchResult',
  'CustomerTransactionRequest' => 'EBizChargeStructCustomerTransactionRequest',
  'FieldValue' => 'EBizChargeStructFieldValue',
  'LineItem' => 'EBizChargeStructLineItem',
  'Order' => 'EBizChargeStructOrder',
  'OrderLineItem' => 'EBizChargeStructOrderLineItem',
  'OrderPayment' => 'EBizChargeStructOrderPayment',
  'PaymentMethod' => 'EBizChargeStructPaymentMethod',
  'PriceTier' => 'EBizChargeStructPriceTier',
  'Product' => 'EBizChargeStructProduct',
  'ProductCategory' => 'EBizChargeStructProductCategory',
  'ProductInventory' => 'EBizChargeStructProductInventory',
  'ProductInventoryLocation' => 'EBizChargeStructProductInventoryLocation',
  'ProductSearchResult' => 'EBizChargeStructProductSearchResult',
  'Receipt' => 'EBizChargeStructReceipt',
  'RecurringBilling' => 'EBizChargeStructRecurringBilling',
  'SearchParam' => 'EBizChargeStructSearchParam',
  'SyncLog' => 'EBizChargeStructSyncLog',
  'SystemInfo' => 'EBizChargeStructSystemInfo',
  'TransactionDetail' => 'EBizChargeStructTransactionDetail',
  'TransactionObject' => 'EBizChargeStructTransactionObject',
  'TransactionProfile' => 'EBizChargeStructTransactionProfile',
  'TransactionRequestObject' => 'EBizChargeStructTransactionRequestObject',
  'TransactionResponse' => 'EBizChargeStructTransactionResponse',
  'TransactionSearchResult' => 'EBizChargeStructTransactionSearchResult',
  'TransactionSession' => 'EBizChargeStructTransactionSession',
  'ueHash' => 'EBizChargeStructUeHash',
  'ueSecurityToken' => 'EBizChargeStructUeSecurityToken',
);
    }
}
