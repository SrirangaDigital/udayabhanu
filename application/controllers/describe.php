<?php

class describe extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function pdf($pdf) {

		if($this->viewHelper->isLoggedIn()) {

			$data['pdfID'] = $pdf;
			
			$this->viewFullScreen('describe/pdf', $data);
			return;
		}
				
		$this->view('user/login');				
	}
}

?>
