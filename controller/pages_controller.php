<?php

class PagesController extends Controller{

	private $header = '/views/pages/mainHeader.php';
	private $footer = '/views/pages/mainFooter.php';

	public function actionIndex() {
		$this->render($this->header, $this->footer);
	}

	public function actionSecondPage() {
		$this->render($this->header, $this->footer);	
	}

}