<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{
		echo view('layout/header.php');
		echo view('layout/navbar.php');
		echo view('layout/after_nav.php');


		echo view('layout/footer.php');
	}
}