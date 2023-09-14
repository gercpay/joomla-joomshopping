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
// Protection against direct access.
defined('_JEXEC') or die();
/** @var $params array */
/** @var $orders \Joomla\Component\Jshopping\Administrator\Model\OrdersModel */
?>

<fieldset class="options-form">
    <legend><?php echo GERCPAY_SETTINGS; ?></legend>
  <div class="form-grid">
    <div class="control-group">
      <div class="control-label">
        <label for="gercpay_merchant_id"><?php echo GERCPAY_MERCHANT_ID; ?></label>
        <span class="star" aria-hidden="true">&nbsp;*</span>
      </div>
      <div class="controls">
        <input type="text" id="gercpay_merchant_id" name="pm_params[gercpay_merchant_id]"
               class="form-control required" value="<?php echo $params['gercpay_merchant_id']; ?>">
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_MERCHANT_ID_DESC; ?></div>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for="gercpay_secret_key"><?php echo GERCPAY_SECRET_KEY; ?></label>
        <span class="star" aria-hidden="true">&nbsp;*</span>
      </div>
      <div class="controls">
        <input type="text" id="gercpay_secret_key" name="pm_params[gercpay_secret_key]"
               class="form-control required" value="<?php echo $params['gercpay_secret_key']; ?>">
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_SECRET_KEY_DESC; ?></div>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for="transaction_end_status"><?php echo GERCPAY_ORDER_STATUS_END ?></label>
      </div>
      <div class="controls">
        <?php print JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_end_status]', 'class = "form-select" size = "1"', 'status_id', 'name', $params['transaction_end_status'], 'transaction_end_status'); ?>
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_ORDER_STATUS_END_DESC; ?></div>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for="transaction_failed_status"><?php echo GERCPAY_ORDER_STATUS_FAILED ?></label>
      </div>
      <div class="controls">
        <?php print JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_failed_status]', 'class = "form-select" size = "1"', 'status_id', 'name', $params['transaction_failed_status'], 'transaction_failed_status'); ?>
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_ORDER_STATUS_FAILED_DESC; ?></div>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for="transaction_refunded_status"><?php echo GERCPAY_ORDER_STATUS_REFUNDED ?></label>
      </div>
      <div class="controls">
        <?php print JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_refunded_status]', 'class = "form-select" size = "1"', 'status_id', 'name', $params['transaction_refunded_status'], 'transaction_refunded_status'); ?>
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_ORDER_STATUS_REFUNDED_DESC; ?></div>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for="gercpay_language"><?php echo GERCPAY_LANGUAGE ?></label>
      </div>
      <div class="controls">
        <?php print JHTML::_('select.genericlist', $this->getPaymentpageLanguages(), 'pm_params[gercpay_language]', 'class = "form-select" size = "1"', 'status_id', 'name', $params['gercpay_language'], 'gercpay_language'); ?>
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_LANGUAGE_DESC; ?></div>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for="gercpay_approve_url"><?php echo GERCPAY_APPROVE_URL; ?></label>
      </div>
      <div class="controls">
        <input type="text" id="gercpay_approve_url" name="pm_params[gercpay_approve_url]"
               class="form-control required" value="<?php echo $params['gercpay_approve_url']; ?>">
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_APPROVE_URL_DESC; ?></div>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for="gercpay_decline_url"><?php echo GERCPAY_DECLINE_URL; ?></label>
      </div>
      <div class="controls">
        <input type="text" id="gercpay_decline_url" name="pm_params[gercpay_decline_url]"
               class="form-control required" value="<?php echo $params['gercpay_decline_url']; ?>">
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_DECLINE_URL_DESC; ?></div>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for="gercpay_cancel_url"><?php echo GERCPAY_CANCEL_URL; ?></label>
      </div>
      <div class="controls">
        <input type="text" id="gercpay_cancel_url" name="pm_params[gercpay_cancel_url]"
               class="form-control required" value="<?php echo $params['gercpay_cancel_url']; ?>">
        <div class="form-text hide-aware-inline-help"><?php echo GERCPAY_CANCEL_URL_DESC; ?></div>
      </div>
    </div>
  </div>
  </fieldset>
<div class="clr"></div>
<style>
    .form-grid {width: 60%;}
    .options-form {margin-top: 20px;}
    .controls input[type=text] {width: 100%;}
</style>