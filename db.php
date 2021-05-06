<?php
include_once('koneksi.php'); //sertakan semua kode yang ada di config.php
 
if( !mysql_connect($server, $user, $password) ) {
    die(mysql_error());
} else {
    if( !mysql_select_db($db) ){
        die(mysql_error());
    }
}
?>