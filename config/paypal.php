<?php
return array(
/** set your paypal credential **/
'client_id' =>'AaQut6b_JTlahfsIG7A19StpCxgZIJYyE-uBAcm2fcN8sw2OfZTwDx5QRheU1PuT-VpYVToc6NY34dBH',
'secret' => 'ENiQMsUfKkKXn97PxEXki9tnvFrRFD8l_nRx_VP_dKGJlb6Pu80BXbTrlgccz4O_f41dJvfGkDBMEUkY',
/**
* SDK configuration
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);
