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
        
        // Updated upstream
        public function index()     {
            $this->load->view('index');
}
        public function register()  {
             $this->load->view("register");
}
        public function login()     {
             $this->load->view("login");
        }
        public function util()      {
            $this->load->view("util");
        }
        public function logout()    {
            $this->load->view("logout");
        }
        /*
        public function map()      {
             $this->load->view("map");
        }
        */
        // Stashed changes
        public function map(){
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
            $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
            $marker['infowindow_content'] = 'Tu ubicación actual';
            $this->googlemaps->add_marker($marker);

            $config["styles"] = array(
                array("name"=>"Purple Parks", "definition"=>array(
                    array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-30"))),
                        array("featureType"=>"poi.park", "stylers"=>array(array("saturation"=>"10"), array("hue"=>"#4F0A95"))))),
                        array("name"=>"Black Roads", "definition"=>array(
                            array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-70"))),
                                array("featureType"=>"road.arterial", "elementType"=>"geometry", "stylers"=>array(array("hue"=>"#049BA9"))))),
                        array("name"=>"No Businesses", "definition"=>array(
                            array("featureType"=>"poi.business", "elementType"=>"labels", "stylers"=>array(array("visibility"=>"off")))))
                );
            $config['stylesAsMapTypes'] = true;
            $config['stylesAsMapTypesDefault'] = "Black Roads"; 
            $this->googlemaps->initialize($config);
            
            
            $marker = array();
            $marker['position'] = '20.619586, -100.389526';
            $marker['infowindow_content'] = 'Asunción Fernández Meléndez #243, Querétaro (ciudad) - Querétaro';
            $this->googlemaps->add_marker($marker);
            
            $marker = array();
            $marker['position'] = '20.574949, -100.372220';
            $marker['infowindow_content'] = 'Anillo Vial Fray Junípero Serra #9576. Detrás del Fracc. El Refugio, Querétaro (ciudad) - Querétaro';
            $this->googlemaps->add_marker($marker);
            
            $marker = array();
            $marker['position'] = '20.5958596, -100.4082444';
            $marker['infowindow_content'] = 'Universidad 3, Centro Universitario (U.a.q.), Santiago de Querétaro, Qro.';
            $this->googlemaps->add_marker($marker);
            
            $marker = array();
            $marker['position'] = '20.5690070, -100.3768229';
            $marker['infowindow_content'] = 'Islas Aleutianas #148-1. Col. Loma Linda, Querétaro, Querétaro';
            $this->googlemaps->add_marker($marker);
            
            
            $data["map"] = $this->googlemaps->create_map();
            $this->load->view("map", $data);
         }

        public function Nuevos_Huertos(){
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
?>
