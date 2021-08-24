<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if(!$this->session->has_userdata('idCaisse')){
            redirect(site_url('Accueil'));
        }
	}

}

?>