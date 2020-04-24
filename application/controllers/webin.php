<?php
class webin extends CI_Controller{
    function index(){
        $this->load->view('header');
        $this->load->view('webin');
        $this->load->view('footer');
    }
}