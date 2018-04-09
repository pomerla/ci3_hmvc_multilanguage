<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		
		$siteLang = $this->session->userdata('site_lang');
		
		if ($siteLang) { 
			$this->load->library('common/language','modules/welcome/language/'.$siteLang); // Language Class
			$this->language->load('welcome/welcome'); // Module language library
			
			$this->lang->load($siteLang,$siteLang); // General library of the framework language
       } else {
		    $this->load->library('common/language','modules/welcome/language/english'); // Language Class
			$this->language->load('welcome/welcome'); // Module language library
			
			$this->lang->load('english','english'); // General library of the framework language
       }
	}
	
	
	public function index()
	{
		$data = array(
            'title' => $this->lang->line('text_language'),
            'text_profile' => $this->lang->line('text_profile'),
			'st_1' => $this->language->get('1_st'),
			'st_2' => $this->language->get('2_st'),
			'st_3' => $this->language->get('3_st'),
			'st_4' => $this->language->get('4_st'),
			'text_user_guide' => $this->language->get('text_user_guide'),
        );
		$this->load->view('welcome_message', $data);
	}
	
	public function hmvc()
	{
		$data = array(
            'title' => $this->lang->line('text_language'),
            'text_profile' => $this->lang->line('text_profile'),
			'st_1' => $this->language->get('1_st'),
			'st_2' => $this->language->get('2_st'),
			'st_3' => $this->language->get('3_st'),
			'st_4' => $this->language->get('4_st'),
			'text_user_guide' => $this->language->get('text_user_guide'),
        );
		$this->load->view('welcome_message_hmvc', $data);
	}
}
