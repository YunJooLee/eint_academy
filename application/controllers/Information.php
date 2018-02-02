<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

    public function education()
    {
        $view_data['page'] = 'education';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $view_data['side_menu'] = $this->load->view('information/side_menu_v', $view_data, true);
        $this->load->view('information/education_v', $view_data);
    }


    public function refund()
    {
        $view_data['page'] = 'refund';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $view_data['side_menu'] = $this->load->view('information/side_menu_v', $view_data, true);
        $this->load->view('information/refund_v', $view_data);
    }

    public function facility()
    {
        $view_data['page'] = 'facility';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $view_data['side_menu'] = $this->load->view('information/side_menu_v', $view_data, true);
        $this->load->view('information/facility_v', $view_data);
    }
}
