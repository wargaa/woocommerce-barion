<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for Barion Gateway.
 */
return array(
	'enabled' => array(
		'title' 			=> __('Enable/Disable', 'woocommerce'),
		'type' 			=> 'checkbox',
		'label' 			=> __('Enable Barion', 'woocommerce'),
		'default' 		=> 'no'
	),
	'title' => array(
		'title' 			=> __('Title', 'woocommerce'),
		'type'			=> 'text',
		'default' 		=> __('Barion', 'woocommerce'),
		'description' 	=> __('This controls the title which the user sees during checkout.', 'woocommerce'),
		'desc_tip' 		=> true
	),
	'description' => array(
		'title' 			=> __('Description', 'woocommerce'),
		'type' 			=> 'textarea',
		'default' 		=> __('Pay securely by Credit or Debit card or internet banking through Barion.', 'woocommerce'),
		'description' 	=> __('This controls the description which the user sees during checkout.', 'woocommerce'),
		'desc_tip' 		=> true
	),
	'poskey' => array(
		'title' 			=> __('POSKey', 'woocommerce'),
		'type' 			=> 'text',
		'description' 	=> __('Given to Merchant by Barion'),
		'desc_tip' 		=> true
	)
	'payee' => array(
		'title' 			=> __('Barion e-mail', 'woocommerce'),
		'type' 			=> 'text',
		'description' 	=> __('Your Barion e-mail address'),
		'desc_tip' 		=> true,
        'default'       => get_option( 'admin_email' ),
		'placeholder'   => 'you@youremail.com'
	),
	'redirect_page' => array(
		'title' 			=> __('Return Page', 'woocommerce'),
		'type' 			=> 'select',
		'options' 		=> $this->barion_get_pages('Select Page'),
		'description' 	=> __('URL of success page', 'woocommerce'),
		'desc_tip' 		=> true
    ),
	'test_mode' => array(
		'title' 			=> __('Mode', 'woocommerce'),
		'type' 			=> 'select',
		'label' 			=> __('Barion Tranasction Mode.', 'woocommerce'),
		'options' 		=> array('test'=>'Test Mode', 'secure'=>'Live Mode'),
		'default' 		=> 'test',
		'description' 	=> __('Mode of Barion activities'),
		'desc_tip' 		=> true
    )
);
