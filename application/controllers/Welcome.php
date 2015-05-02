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
        $config["center"] = "20.596202, -100.403871";
        $config["zoom"] = "auto";
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker["position"] = "20.596202, -100.403871";
        $config["center"] = "20.613051, -100.405856";
        $config["zoom"] = "auto";
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker["position"] = "20.613051, -100.405856";
        $this->googlemaps->add_marker($marker);
        $data["map"] = $this->googlemaps->create_map();
        $this->load->view("marker", $data);
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
    
    public function directions()
    {
     $this->load->library("googlemaps");
     $config["center"] = "20.596202, -100.403871";
     $config["zoom"] = "auto";
     $config["directions"] = TRUE;
     $config["directionsStart"] = "empire state building";
     $config["directionsEnd"] = "statue of liberty";
     $config["directionsDivID"] = "directionsDiv";
     $this->googlemaps->initialize($config);
     $data["map"] = $this->googlemaps->create_map();

     $this->load->view("directions", $data);
    }
    
    public function geolocation()
    {
      $this->load->library("googlemaps");

      $config = array();
      $config["center"] = "auto";
      $config["onboundschanged"] = "if (!centreGot) {
      var mapCentre = map.getCenter();
      marker_0.setOptions({
      position: new google.maps.LatLng(mapCentre.lat(),      mapCentre.lng()) 
      });
      }
      centreGot = true;";
      $this->googlemaps->initialize($config);

      // set up the marker ready for positioning 
      // once we know the users location
      $marker = array();
      $this->googlemaps->add_marker($marker);
      
      $config["styles"] = array(
    array("name"=>"Red Parks", "definition"=>array(
    array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-30"))),
    array("featureType"=>"poi.park", "stylers"=>array(array("saturation"=>"10"), array("hue"=>"#990000")))
  )),
  array("name"=>"Black Roads", "definition"=>array(
    array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-70"))),
    array("featureType"=>"road.arterial", "elementType"=>"geometry", "stylers"=>array(array("hue"=>"#000000")))
  )),
  array("name"=>"No Businesses", "definition"=>array(
    array("featureType"=>"poi.business", "elementType"=>"labels", "stylers"=>array(array("visibility"=>"off")))
  ))
);
$config['stylesAsMapTypes'] = true;
$config['stylesAsMapTypesDefault'] = "Black Roads"; 
$this->googlemaps->initialize($config);
        $data["map"] = $this->googlemaps->create_map();

      $this->load->view("geolocation", $data);
     }
    
    public function Nuevos_Huertos()
    {
        $this->load->library('googlemaps');
        $config['center'] = '20.596202, -100.403871';
        $config['zoom'] = 'auto';
        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = '37.429, -122.1419';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'updateDatabase(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();

        $this->load->view('view_file', $data);
    }
}
