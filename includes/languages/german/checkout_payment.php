<?php
/*
  $Id: checkout_payment.php,v 1.22 2003/12/03 17:09:26 sparky Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Kasse');
define('NAVBAR_TITLE_2', 'Zahlungsweise');

define('HEADING_TITLE', 'Zahlungsweise');

define('TABLE_HEADING_BILLING_ADDRESS', 'Rechnungsadresse');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Bitte w&auml;hlen Sie aus Ihrem Adressbuch die gew&uuml;nschte Rechnungsadresse f&uuml;r Ihre Bestellung aus.');
define('TITLE_BILLING_ADDRESS', 'Rechnungsadresse:');

define('TABLE_HEADING_CONDITIONS', 'Terms and Conditions');
define('TEXT_CONDITIONS_DESCRIPTION', 'Please acknowledge the terms and conditions bound to this order by ticking the following box. The terms and conditions can be read <a href="' . tep_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><u>here</u></a>.');
define('TEXT_CONDITIONS_CONFIRM', 'I have read and agreed to the terms and conditions bound to this order.');

define('TABLE_HEADING_PAYMENT_METHOD', 'Zahlungsweise');
define('TEXT_SELECT_PAYMENT_METHOD', 'Bitte w&auml;hlen Sie die gew&uuml;nschte Zahlungsweise f&uuml;r Ihre Bestellung aus.');
define('TITLE_PLEASE_SELECT', 'Bitte w&auml;hlen Sie');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'Zur Zeit bieten wir Ihnen nur eine Zahlungsweise an.');

define('TABLE_HEADING_COMMENTS', 'F&uuml;gen Sie hier Ihre Anmerkungen zu dieser Bestellung ein');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Fortsetzung des Bestellvorganges');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', 'zur Best&auml;tigung Ihrer Bestellung.');
?>
