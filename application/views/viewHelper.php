<?php
class viewHelper extends View {
	public function __construct() {

	}

	public function isLoggedIn() {

	    $isLoggedIn = false;
	    
	    if(isset($_SESSION['auth_logged_in']))
	        if($_SESSION['auth_logged_in'])
	            $isLoggedIn = true;

	    return $isLoggedIn;
	}

}
?>
