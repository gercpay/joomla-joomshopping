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
use Joomla\CMS\Language\LanguageHelper;

defined('_JEXEC') or die();
/** @var array $params */
/** @var JshoppingModelOrders $orders */
$langs = LanguageHelper::getKnownLanguages();
$languages = [];
foreach ($langs as $langCode => $lang) {
    $languages[] = explode('-', $langCode)[0];
}
?>
<fieldset class="options-form">
  <legend><?php echo CPAY_SETTINGS; ?></legend>
  <div class="form-grid">
    <div class="control-group">
      <div class="control-label">
        <label for="gercpay_merchant_id"><?php echo ADMIN_CFG_GERCPAY_MERCHANT_ID; ?></label>
      </div>
      <div class="cpay-controls">
        <input id="gercpay_merchant_id" type="text" name="pm_params[gercpay_merchant_id]" class="inputbox"
               value="<?= $params['gercpay_merchant_id'] ?>">
          <?= JHtml::tooltip(ADMIN_CFG_GERCPAY_MERCHANT_ID_DESCRIPTION) ?>
      </div>
    </div>

    <div class="control-group">
      <div class="control-label">
        <label for="gercpay_secret_key"><?php echo ADMIN_CFG_GERCPAY_SECRET_KEY; ?></label>
      </div>
      <div class="cpay-controls">
        <input id="gercpay_secret_key" type="text" name="pm_params[gercpay_secret_key]" class="inputbox"
               value="<?= $params['gercpay_secret_key'] ?>">
          <?= JHtml::tooltip(ADMIN_CFG_GERCPAY_SECRET_KEY_DESCRIPTION) ?>
      </div>
    </div>

    <div class="control-group">
      <div class="control-label">
        <label for="transaction_end_status"><?php echo _JSHOP_TRANSACTION_END; ?></label>
      </div>
      <div class="cpay-controls">
          <?php print JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_end_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_end_status']); ?>
          <?= JHtml::tooltip(PLG_JOOMSHOPPING_GERCPAY_STATUS_SUCCESS_DESC) ?>
      </div>
    </div>

    <div class="control-group">
      <div class="control-label">
        <label for="transaction_failed_status"><?php echo _JSHOP_TRANSACTION_FAILED; ?></label>
      </div>
      <div class="cpay-controls">
          <?php echo JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_failed_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_failed_status']); ?>
          <?= JHtml::tooltip(PLG_JOOMSHOPPING_GERCPAY_STATUS_FAIL_DESC) ?>
      </div>
    </div>

    <div class="control-group">
      <div class="control-label">
        <label for="transaction_refunded_status"><?php echo ADMIN_CFG_GERCPAY_TRANSACTION_REFUNDED; ?></label>
      </div>
      <div class="cpay-controls">
          <?php echo JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_refunded_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_refunded_status']); ?>
          <?= JHtml::tooltip(PLG_JOOMSHOPPING_GERCPAY_STATUS_REFUND_DESC) ?>
      </div>
    </div>

    <?php if (count($languages) > 0) :?>
        <?php foreach ($languages as $language) :?>
          <div class="control-group">
            <div class="control-label">
              <label for="gercpay_approve_url"><?php echo ADMIN_CFG_GERCPAY_APPROVE_URL; ?><?= ' (<strong>' . $language . '</strong>)' ?></label>
            </div>
            <div class="cpay-controls">
              <input id="gercpay_approve_url" type="text" name="pm_params[gercpay_approve_url<?= "-$language" ?>]" class="inputbox"
                     value="<?= $params["gercpay_approve_url-$language"] ?? '' ?>">
                <?= JHtml::tooltip(ADMIN_CFG_GERCPAY_APPROVE_URL_DESCRIPTION) ?>
            </div>
          </div>
        <?php endforeach; ?>
        <?php foreach ($languages as $language) :?>
          <div class="control-group">
            <div class="control-label">
              <label for="gercpay_decline_url"><?php echo ADMIN_CFG_GERCPAY_DECLINE_URL; ?><?= ' (<strong>' . $language . '</strong>)' ?></label>
            </div>
            <div class="cpay-controls">
              <input id="gercpay_decline_url" type="text" name="pm_params[gercpay_decline_url<?= "-$language" ?>]" class="inputbox"
                     value="<?= $params["gercpay_decline_url-$language"] ?? '' ?>">
                <?= JHtml::tooltip(ADMIN_CFG_GERCPAY_DECLINE_URL_DESCRIPTION) ?>
            </div>
          </div>
        <?php endforeach; ?>
        <?php foreach ($languages as $language) :?>
        <div class="control-group">
          <div class="control-label">
            <label for="gercpay_cancel_url"><?php echo ADMIN_CFG_GERCPAY_CANCEL_URL; ?><?= ' (<strong>' . $language . '</strong>)' ?></label>
          </div>
          <div class="cpay-controls">
            <input id="gercpay_cancel_url" type="text" name="pm_params[gercpay_cancel_url<?= "-$language" ?>]" class="inputbox"
                   value="<?= $params["gercpay_cancel_url-$language"] ?? '' ?>">
              <?= JHtml::tooltip(ADMIN_CFG_GERCPAY_CANCEL_URL_DESCRIPTION) ?>
          </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
  </div>
</fieldset>
<div class="clr"></div>
<style>
    .form-grid {width: 40%;}
    .control-group {display: flex; flex-wrap: wrap;}
    .control-label {margin-bottom: 5px; width: 100%;}
    .cpay-controls {display: flex; align-items: baseline; width: 100%;}
    .cpay-controls input, .cpay-controls select {margin-right: 10px; width: 80%;}
    .options-form {margin-top: 20px; margin-left: 5%;}
    .controls input[type=text] {width: 100%;}
</style>