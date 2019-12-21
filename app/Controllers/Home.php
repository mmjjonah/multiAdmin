<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		echo view('layout/default/header.php');
		echo view('layout/default/navbar.php');
		echo view('layout/default/after_nav.php');
		echo view('layout/default/sidebar.php');
		echo view('index.php');
		echo view('layout/default/footer.php');
	}

	//--------------------------------------------------------------------

}
