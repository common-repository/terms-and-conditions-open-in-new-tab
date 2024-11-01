<?php
/*
Plugin Name:Terms and Conditions Open in New Tab
Plugin URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Description: If you are using WooCommerce and would like the Terms and Conditions hyperlink at checkout to open in a new tab upon click, this plugin will help fix that issue.
Version: 1.0
Author: Hans Skillrud
Author URI: https://termageddon.com
*/
function newtab_woocommerce_checkout_terms_and_conditions()
{
    remove_action('woocommerce_checkout_terms_and_conditions', 'wc_terms_and_conditions_page_content', 30);
}
add_action('wp', 'newtab_woocommerce_checkout_terms_and_conditions');
