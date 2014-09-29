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
 *  @file        	Admin_Controller.php 
 *  @version    	Release: 1.0 
 *  @date        	09/24/2014
 *  @copyright  	2014 Suren Shanaka
 */
class Admin_Controller extends MY_Controller {

	    function __construct(){
        parent::__construct();
        $this->data['meta_title'] = 'Custom Framework';
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_m');

        //login check
        $exception_urls = array(
            'admin/user/login',
            'admin/user/logout'
        );
        if(in_array(uri_string(), $exception_urls) == FALSE){ // if we are not in exception URLs do the check
            if($this->user_m->logged_in() == FALSE){
                redirect('admin/user/login');
            }
        }

    }

}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */