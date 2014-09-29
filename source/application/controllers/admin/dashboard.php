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
 *  @file        	dashboard.php 
 *  @version    	Release: 1.0 
 *  @date        	09/26/2014
 *  @copyright  	2014 Suren Shanaka
 */
class Dashboard extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index(){
        $this->data['subview'] = 'admin/dashboard/index';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function modal(){
        $this->load->view('admin/_layout_modal', $this->data);
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */