<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Super Class
 *  
 *  Description
 *  
 *  @license        GNU General Public License      
 *  @author 		Suren Shanaka 
 *  @link 			https://github.com/surenshanaka
 *
 *  @file        	index.php 
 *  @version    	Release: 1.0 
 *  @date        	09/24/2014
 *  @copyright  	2014 Suren Shanaka
 */
class Index extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = ucfirst('Home Page');
		$this->load->view('template/header',$data);
		$this->load->view('home',$data);
		$this->load->view('template/footer',$data);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */