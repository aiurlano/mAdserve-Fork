<?php
class MAD_Admin_Redirect
{

    static function redirect($adminPage = 'www/cp/index.php')
    {
header ("Location: ".$adminPage."");
	}
}

?>