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
 *  @file        	user_m.php 
 *  @version    	Release: 1.0 
 *  @date        	09/26/2014
 *  @copyright  	2014 Suren Shanaka
 */
class User_m extends MY_Model {

	protected $_table_name = 'users';
    protected $_order_by = 'name';
    public    $rules = array(
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'password',
            'rules' => 'trim|required'
        ),
    );
    public    $rules_admin = array(
        'name' => array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|xss_clean'
        ),
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|callback__unique_email|xss_clean'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'password',
            'rules' => 'trim|matches[password_confirm]'
        ),
        'password_confirm' => array(
            'field' => 'password_confirm',
            'label' => 'confirm_password',
            'rules' => 'trim|matches[password]'
        ),
    );

    function __construct()
    {
        parent::__construct();
    }


    /**
     * Purpose of the function          using for user login
     * @author                          Suren Shanaka
     */
    public function login()
    {
        $user = $this->get_by(array(
            'email' => $this->input->post('email'),
            'password' => $this->hash($this->input->post('password')),
        ), TRUE);
        
        if(count($user))
        {            
            // log in user
            $data = array(
                'name' => $user->name,
                'email' => $user->email,
                'id' => $user->id,
                'loggedin' => TRUE,
            );
            $this->session->set_userdata($data);
        }
        else
        {
            //echo 'user not counted';
            //return FALSE;
        }
    }
    public function logout(){
        $this->session->sess_destroy();
    }

    public function logged_in(){
        return (bool) $this->session->userdata('loggedin');
    }

    public function get_new(){
        $user = new stdClass();
        $user->name = '';
        $user->email = '';
        $user->password = '';
        return $user;
    }

    public function hash($string){
        return hash('sha512', $string.config_item('encryption_key'));
        //return hash('sha1', $string.config_item('encryption_key'));
        //return $string;
    }

	

}

/* End of file user_m.php */
/* Location: ./application/models/user_m.php */