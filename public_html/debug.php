<?php
include_once (__DIR__.'/includes/db_connect.php');
include_once (__DIR__.'/includes/functions.php');
sec_session_start();
ob_start();

if (login_check($mysqli) == true) {
    echo nl2br( file_get_contents((__DIR__.'/../error.log')) );
    echo $log;
} else {
    $url = 'http://104.236.162.97/';
    while (ob_get_status()) {
        ob_end_clean();
    }
    header( "Location: $url" );
}

        
        
        /*

 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

