<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function intro()
    {
        $view_data['page'] = 'intro';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $view_data['side_menu'] = $this->load->view('about/side_menu_v', $view_data, true);
        $this->load->view('about/intro_v', $view_data);
    }

    public function vision()
    {
        $view_data['page'] = 'vision';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $view_data['side_menu'] = $this->load->view('about/side_menu_v', $view_data, true);
        $this->load->view('about/vision_v', $view_data);
    }

    public function history()
    {
        $view_data['page'] = 'history';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $view_data['side_menu'] = $this->load->view('about/side_menu_v', $view_data, true);
        $this->load->view('about/history_v', $view_data);
    }

    public function come()
    {
        $view_data['page'] = 'come';
        $empty_data = array();
        $view_data['header'] = $this->load->view('header_v', $empty_data, true);
        $view_data['footer'] = $this->load->view('footer_v', $empty_data, true);
        $view_data['side_menu'] = $this->load->view('about/side_menu_v', $view_data, true);
        $this->load->view('about/come_v', $view_data);
    }
}
