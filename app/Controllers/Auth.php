<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{

		$js_link = [
			// au besoin d'autre script js pour la vue
			'js/login/inscription.js',
			'js/login/connexion.js'
		];
		$css_link = [
			// au besoin d'autre style css pour la vue
			"css/login.css"
		];

		$data = [
			'js_link' => $js_link,
			'css_link' => $css_link,
			'title' => 'connexion'
		];
		echo view('layout/default/header_view.php',$data);
		echo view('layout/login/navbar_view.php',$data);
		echo view('login/auth_view.php',$data);
		echo view('layout/default/footer_view.php',$data);
	}

	public function load_page($type)
	{
		if ($type == 'inscription') {
			echo view('login/inscription_view');
		}else if ($type == 'connexion') {
			echo view('login/connexion_view');
		}
	}
}