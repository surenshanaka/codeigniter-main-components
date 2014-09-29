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
 *  @file        	user.php 
 *  @version    	Release: 1.0 
 *  @date        	09/25/2014
 *  @copyright  	2014 Suren Shanaka
 */
class User extends Admin_Controller {

	public function index(){
        //fetch all users from database
        $this->data['users'] = $this->user_m->get();

        // load view
        $this->data['subview'] = 'admin/user/index';
        $this->load->view('admin/_layout_main',$this->data);
    }

    public function login(){

        // Redirect a user if he's already loggedin
        $dashboard = 'admin/dashboard';
        $this->user_m->logged_in() == FALSE || redirect($dashboard);

        // set form
        $rules = $this->user_m->rules;
        $this->form_validation->set_rules($rules);

        // process form
        if($this->form_validation->run() == TRUE){
            // can login and redirect it..
            if($this->user_m->login() == TRUE){
                redirect($dashboard);
            }
            else{
                $this->session->set_flashdata('error','That email/password combination does not exist');
                redirect('admin/user/login','refresh');
            }
        }

        // load the view
        $this->data['subview'] = 'admin/user/login';
        $this->load->view('admin/_layout_modal',$this->data);
    }

    public function logout(){
        $this->user_m->logout();
        redirect('admin/user/login');
    }   
	

}

/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */