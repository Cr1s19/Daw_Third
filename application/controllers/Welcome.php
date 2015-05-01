<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function marker(){
        $this->load->library("googlemaps");
        $config["center"] = "37.4419, -122.1419";
        $config["zoom"] = "auto";
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker["position"] = "37.429, -122.1419";
        $this->googlemaps->add_marker($marker);
        $data["map"] = $this->googlemaps->create_map();
        $this->load->view("marker", $data);
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
