<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Migration Controller
 *  
 *  Description
 *  
 *  @license        GNU General Public License      
 *  @author 		Suren Shanaka 
 *  @link 			https://github.com/surenshanaka
 *
 *  @file        	migration.php  
 *  @version    	Release: 1.0
 *  @date        	09/24/2014
 *  @copyright  	2014 Suren Shanaka
 */
class Migration extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
        $this->load->library('migration');
        if (! $this->migration->current()) {
        	show_error($this->migration->error_string());
        } else {
        	echo 'Migration Worked!';
        }

    }
}

/* End of file migration.php */
/* Location: ./application/controllers/admin/migration.php */
