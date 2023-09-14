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
defined('_JEXEC') or die('Restricted access');
/** @var $gercpay_args array */
?>

  <html lang="<?php echo $gercpay_args['gercpay_language']?>">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title></title>
  </head>
  <body>
  <form id="paymentform" action="<?php print GercPayApi::getApiUrl(); ?>" name="paymentform" method="post">
      <?php foreach ($gercpay_args as $key => $value) : ?>
        <input type="hidden" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
      <?php endforeach; ?>
  </form>
  <?php print GERCPAY_REDIRECT_TO_PAYMENT_PAGE ?>
  <br>
  <script type="text/javascript">document.querySelector('#paymentform').submit();</script>
  </body>
  </html>
<?php die(); ?>