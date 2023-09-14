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
const CPAY_SETTINGS = 'GercPay Settings';
const ADMIN_CFG_GERCPAY_MERCHANT_ID = 'Merchant ID';
const ADMIN_CFG_GERCPAY_MERCHANT_ID_DESCRIPTION = "Unique ID of the store in GercPay system";
const ADMIN_CFG_GERCPAY_SECRET_KEY = 'Secret key';
const ADMIN_CFG_GERCPAY_SECRET_KEY_DESCRIPTION = 'Custom character set is used to sign messages are forwarded.';
const ADMIN_CFG_GERCPAY_PAYMODE = 'Payment method';
const ADMIN_CFG_GERCPAY_TRANSACTION_REFUNDED = 'Order status for refunded payment';
const ADMIN_CFG_GERCPAY_APPROVE_URL = 'Successful payment redirect URL';
const ADMIN_CFG_GERCPAY_APPROVE_URL_DESCRIPTION = 'Redirect URL after successful payment';
const ADMIN_CFG_GERCPAY_DECLINE_URL = 'Failed payment redirect URL';
const ADMIN_CFG_GERCPAY_DECLINE_URL_DESCRIPTION = 'Redirect URL on payment failure';
const ADMIN_CFG_GERCPAY_CANCEL_URL = 'Cancel payment redirect URL';
const ADMIN_CFG_GERCPAY_CANCEL_URL_DESCRIPTION = 'Redirect URL when canceling a payment';
const PLG_JOOMSHOPPING_GERCPAY_STATUS_SUCCESS_DESC = 'Order status after successful payment';
const PLG_JOOMSHOPPING_GERCPAY_STATUS_FAIL_DESC = 'Order status after failed payment';
const PLG_JOOMSHOPPING_GERCPAY_STATUS_REFUND_DESC = 'Order status after refund';

const GERCPAY_UNKNOWN_ERROR = 'An error has occurred during payment. Please contact us to ensure your order has submitted.';
const GERCPAY_MERCHANT_DATA_ERROR = 'An error has occurred during payment. Merchant data is incorrect.';
const GERCPAY_ORDER_DECLINED = 'Thank you for shopping with us. However, the transaction has been declined.';
const GERCPAY_SIGNATURE_ERROR = 'An error has occurred during payment. Signature is not valid.';
const GERCPAY_REDIRECT_PENDING_STATUS_ERROR = 'An error during payment.';

const GERCPAY_ORDER_APPROVED = 'Gercpay payment successful. GercPay ID:';
const GERCPAY_PAYMENT_REFUNDED = 'Gercpay payment refunded successful. GercPay ID:';

const GERCPAY_PAY = 'Pay';
const GERCPAY_ORDER_DESCRIPTION = 'Payment by card on the site';

const PLG_JOOMSHOPPING_GERCPAY_SUCCESS = 'Congratulations! Payment successful.';
const PLG_JOOMSHOPPING_GERCPAY_FAIL = 'Sorry, there was an error during payment.';
const PLG_JOOMSHOPPING_GERCPAY_CANCEL = 'The payment was canceled by the user.';
const PLG_JOOMSHOPPING_GERCPAY_UNKNOWN_ERROR = 'An unknown error occurred during payment.';
