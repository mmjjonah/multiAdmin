<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		echo view('layout/header.php');
		echo view('layout/navbar.php');
		echo view('layout/after_nav.php');
		echo view('layout/sidebar.php');
		echo view('index.php');
		echo view('layout/footer.php');
	}

	//--------------------------------------------------------------------

}
