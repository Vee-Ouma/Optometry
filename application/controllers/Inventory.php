<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html//Di
	 */
	public function index()
	{

		//call db nethods here

		//eg  count all patients
		//$patients = get_count('patients');

		//add to table

		//insertRecord('patints',array('name'=>'You '))

		$this->load->view('dashboard/header');
		$this->load->view('dashboard/side_bar');
		$this->load->view('dashboard/inventory');
		$this->load->view('dashboard/footer');
	}


}
