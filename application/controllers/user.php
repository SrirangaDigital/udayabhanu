<?php

class user extends Controller {

	public function __construct() {

		parent::__construct();
	}

	public function logout($query = []) {

		$this->absoluteRedirect(AUTHENTICATION_URL . "user/logout?returnUrl=" . BASE_URL);
	}
	
	public function resetPassword($query = []) {
		
		if(!isset($query['s']) || !isset($query['t'])) { $this->view('error/blah'); return;}
		$this->view('user/resetPassword', $query);
	}

	public function changePassword($query = []) {

		if(!$this->viewHelper->isLoggedIn()) { $this->absoluteRedirect(SUBSCRIPTION_URL . 'subscription/index'); return; }
		$this->view('user/changePassword', $query);
	}

	public function login($query = []) {

		if($this->viewHelper->isLoggedIn()) {

			$redirectUrl = ($this->viewHelper->isLoggedInAsAdmin()) ? BASE_URL : BASE_URL . 'profile/v/' . $_SESSION['auth_username'];
			$this->absoluteRedirect($redirectUrl);
			return;
		}
				
		$this->view('user/login');
	}
}

?>
