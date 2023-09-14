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

const GERCPAY_SETTINGS = 'Налаштування GercPay';
const GERCPAY_MERCHANT_ID = 'Ідентифікатор торговця';
const GERCPAY_MERCHANT_ID_DESC = "Ідентифікатор торговця в системі GercPay";
const GERCPAY_SECRET_KEY = 'Секретний ключ';
const GERCPAY_SECRET_KEY_DESC = 'Секретний ключ торговця в системі GercPay';
const GERCPAY_PAYMODE = 'Платіжний метод';
const GERCPAY_ORDER_STATUS_END = "Статус замовлення успішного платежу";
const GERCPAY_ORDER_STATUS_END_DESC = "Статус замовлення для успішного платежу";
const GERCPAY_ORDER_STATUS_FAILED = "Статус замовлення неуспішного платежу";
const GERCPAY_ORDER_STATUS_FAILED_DESC = "Статус замовлення для неуспішного платежу";
const GERCPAY_ORDER_STATUS_REFUNDED = "Статус замовлення поверненого платежу";
const GERCPAY_ORDER_STATUS_REFUNDED_DESC = "Статус замовлення для поверненого платежу";
const GERCPAY_LANGUAGE = "Мова";
const GERCPAY_LANGUAGE_DESC = "Мова сторінки оплати";
const GERCPAY_APPROVE_URL = "URL перенаправлення успішного платежу";
const GERCPAY_APPROVE_URL_DESC = "URL перенаправлення для успішного платежу";
const GERCPAY_DECLINE_URL = "URL перенаправлення неуспішного платежу";
const GERCPAY_DECLINE_URL_DESC = "URL перенаправлення для неуспішного платежу";
const GERCPAY_CANCEL_URL = "URL перенаправлення відмови від платежу";
const GERCPAY_CANCEL_URL_DESC = "URL перенаправления в разі відмови від платежу";

const GERCPAY_ERROR_UNKNOWN = 'Сталася помилка при оплаті. Зв\'яжіться з нами, щоб переконатися, що ваше замовлення відправлене.';
const GERCPAY_ERROR_MERCHANT = 'Сталася помилка при оплаті. Дані продавця невірні.';
const GERCPAY_ORDER_DECLINED = 'Дякуємо за покупку. Однак транзакція була відхилена.';
const GERCPAY_ERROR_SIGNATURE = 'Сталася помилка при оплаті. Підпис недійсний.';
const GERCPAY_ERROR_REDIRECT_PENDING_STATUS = 'Помилка при оплаті.';
const GERCPAY_ERROR_OPERATION_TYPE = "Невідомий тип операції";

const GERCPAY_ORDER_APPROVED = 'Платіж пройшов успішно. ID GercPay:';
const GERCPAY_PAYMENT_REFUNDED = 'Платіж успішно повернений. ID GercPay:';

const GERCPAY_PAY = 'Оплатити';
const GERCPAY_ORDER_DESC = 'Оплата карткою на сайті';
const GERCPAY_REDIRECT_TO_PAYMENT_PAGE = 'Перенаправлення на сторінку оплати';
