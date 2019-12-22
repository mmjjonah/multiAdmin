<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$js_link = [
			// au besoin d'autre script js pour la vue
		];
		$css_link = [
			// au besoin d'autre style css pour la vue
		];
		$data = [
			'js_link' => $js_link,
			'css_link' => $css_link,
			'title' => 'dashboard'
		];

		echo view('layout/default/header_view.php',$data);
		echo view('layout/dashboard/navbar_view.php',$data);
		echo view('layout/dashboard/nav_tools_view.php',$data);
		echo view('layout/dashboard/sidebar_view.php',$data);
		echo view('index.php',$data);
		echo view('layout/default/footer_view.php',$data);
	}

	//--------------------------------------------------------------------

}
