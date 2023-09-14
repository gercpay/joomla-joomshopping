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

const GERCPAY_SETTINGS = 'Настройки GercPay';
const GERCPAY_MERCHANT_ID = 'Идентификатор торговца';
const GERCPAY_MERCHANT_ID_DESC = "Идентификатор торговца в системе GercPay";
const GERCPAY_SECRET_KEY = 'Секретный ключ';
const GERCPAY_SECRET_KEY_DESC = 'Секретный ключ торговца в системе GercPay';
const GERCPAY_PAYMODE = 'Платёжный метод';
const GERCPAY_ORDER_STATUS_END = "Статус заказа успешного платежа";
const GERCPAY_ORDER_STATUS_END_DESC = "Статус заказа для успешного платежа";
const GERCPAY_ORDER_STATUS_FAILED = "Статус заказа неуспешного платежа";
const GERCPAY_ORDER_STATUS_FAILED_DESC = "Статус заказа для неуспешного платежа";
const GERCPAY_ORDER_STATUS_REFUNDED = "Статус заказа возвращённого платежа";
const GERCPAY_ORDER_STATUS_REFUNDED_DESC = "Order status for refunded payment";
const GERCPAY_LANGUAGE = "Язык";
const GERCPAY_LANGUAGE_DESC = "Язык страницы оплаты";
const GERCPAY_APPROVE_URL = "URL перенаправления успешного платежа";
const GERCPAY_APPROVE_URL_DESC = "URL перенаправления для успешного платежа";
const GERCPAY_DECLINE_URL = "URL перенаправления неуспешного платежа";
const GERCPAY_DECLINE_URL_DESC = "URL перенаправления для неуспешного платежа";
const GERCPAY_CANCEL_URL = "URL перенаправления отказа от платежа";
const GERCPAY_CANCEL_URL_DESC = "URL перенаправления при отказе от платежа";

const GERCPAY_ERROR_UNKNOWN = 'Произошла ошибка при оплате. Свяжитесь с нами, чтобы убедиться, что ваш заказ отправлен.';
const GERCPAY_ERROR_MERCHANT = 'Произошла ошибка при оплате. Данные продавца неверны.';
const GERCPAY_ORDER_DECLINED = 'Спасибо за покупку. Однако транзакция была отклонена.';
const GERCPAY_ERROR_SIGNATURE = 'Произошла ошибка при оплате. Подпись недействительна.';
const GERCPAY_ERROR_REDIRECT_PENDING_STATUS = 'Ошибка при оплате.';
const GERCPAY_ERROR_OPERATION_TYPE = "Неизвестный тип операции";

const GERCPAY_ORDER_APPROVED = 'Платеж прошел успешно. ID GercPay:';
const GERCPAY_PAYMENT_REFUNDED = 'Платеж успешно возвращён. ID GercPay:';

const GERCPAY_PAY = 'Оплатить';
const GERCPAY_ORDER_DESC = 'Оплата картой на сайте';
const GERCPAY_REDIRECT_TO_PAYMENT_PAGE = 'Перенаправление на страницу оплаты';
