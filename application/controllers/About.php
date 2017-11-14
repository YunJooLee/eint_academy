<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function intro()
    {
        $view_data = array();
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $this->load->view('about/intro_v', $view_data);
    }
}
