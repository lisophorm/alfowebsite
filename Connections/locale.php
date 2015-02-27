<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_locale = "localhost";
$database_locale = "bug01_portfolio";
$username_locale = "bug01_gino";
$password_locale = "k0st0golov";
$locale = mysql_pconnect($hostname_locale, $username_locale, $password_locale) or trigger_error(mysql_error(),E_USER_ERROR); 
?>