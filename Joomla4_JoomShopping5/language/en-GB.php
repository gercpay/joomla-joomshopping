<?php
/**
 * @package     JoomShopping
 * @subpackage  Plugins - GercPay
 * @package     JoomShopping
 * @subpackage  Payment
 * @author      GercPay
 * @link        https://gercpay.com.ua
 * @copyright   2021 GercPay
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @since       3.0
 */
// Protection against direct access
defined('_JEXEC') or die();

const GERCPAY_SETTINGS = 'GercPay Settings';
const GERCPAY_MERCHANT_ID = 'Merchant ID';
const GERCPAY_MERCHANT_ID_DESC = "Merchant ID in GercPay system";
const GERCPAY_SECRET_KEY = 'Secret key';
const GERCPAY_SECRET_KEY_DESC = 'Secret merchant\'s key in GercPay system';
const GERCPAY_PAYMODE = 'Payment method';
const GERCPAY_ORDER_STATUS_END = "Order status successful payment";
const GERCPAY_ORDER_STATUS_END_DESC = "Order status for successful payment";
const GERCPAY_ORDER_STATUS_FAILED = "Order status failed payment";
const GERCPAY_ORDER_STATUS_FAILED_DESC = "Order status for failed payment";
const GERCPAY_ORDER_STATUS_REFUNDED = "Order status refunded payment";
const GERCPAY_ORDER_STATUS_REFUNDED_DESC = "Order status for refunded payment";
const GERCPAY_LANGUAGE = "Language";
const GERCPAY_LANGUAGE_DESC = "Payment page language";
const GERCPAY_APPROVE_URL = "Successful payment redirect URL";
const GERCPAY_APPROVE_URL_DESC = "Redirect URL after successful payment";
const GERCPAY_DECLINE_URL = "Failed payment redirect URL";
const GERCPAY_DECLINE_URL_DESC = "Redirect URL on payment failure";
const GERCPAY_CANCEL_URL = "Cancel payment redirect URL";
const GERCPAY_CANCEL_URL_DESC = "Redirect URL when canceling a payment";

const GERCPAY_ERROR_UNKNOWN = 'An error has occurred during payment. Please contact us to ensure your order has submitted.';
const GERCPAY_ERROR_MERCHANT = 'An error has occurred during payment. Merchant data is incorrect.';
const GERCPAY_ORDER_DECLINED = 'Thank you for shopping with us. However, the transaction has been declined.';
const GERCPAY_ERROR_SIGNATURE = 'An error has occurred during payment. Signature is not valid.';
const GERCPAY_ERROR_REDIRECT_PENDING_STATUS = 'An error during payment.';
const GERCPAY_ERROR_OPERATION_TYPE = "Unknown operation type";

const GERCPAY_ORDER_APPROVED = 'Gercpay payment successful. GercPay ID:';
const GERCPAY_PAYMENT_REFUNDED = 'Gercpay payment refunded successful. GercPay ID:';

const GERCPAY_PAY = 'Pay';
const GERCPAY_ORDER_DESC = 'Payment by card on the site';
const GERCPAY_REDIRECT_TO_PAYMENT_PAGE = 'Redirect to payment page';
