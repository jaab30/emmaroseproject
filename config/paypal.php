<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => 'sandbox', // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'username'    => 'jaab30-facilitator_api1.yahoo.com',
        'password'    => 'R7MUJ3QSCXQHEL4U',
        'secret'      => "ASV57ivVN4A960WA9t1PMtwKn0F9A-gpCZoD4fGDLeGk0trJUDH1EbkX",
        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'app_id'      => 'APP-80W284485P519543T', // Used for testing Adaptive Payments API in sandbox mode
    ],
    'live' => [
        'username'    => 'jaab30_api1.yahoo.com',
        'password'    => 'L2BY4CQWBDMFYGD4',
        'secret'      => 'AoT8A-SDahtNjab7LpVj8f-nG1YnAs3XsfGNMOVXxOizYN6CYFWL1QFt',
        'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
        'app_id'      => '', // Used for Adaptive Payments API
    ],

    'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => 'USD',
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => '', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => true, // Validate SSL when creating api client.
];
