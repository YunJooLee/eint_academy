<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {

    public function apply()
    {
        $view_data['page'] = 'apply';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $this->load->view('education/apply_v', $view_data);
    }

    public function apply_way()
    {
        $view_data['page'] = 'apply';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $this->load->view('education/apply_way_v', $view_data);
    }

    public function apply_state()
    {
        $view_data['page'] = 'apply';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $this->load->view('education/apply_state_v', $view_data);
    }
}
