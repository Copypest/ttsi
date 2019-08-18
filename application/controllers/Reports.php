<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Bidyut Biswas
 * @version : 1.0
 * @since : 22 June 2019
 */
class Reports extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('patient_model');
        $this->load->model('form_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $data = [];
        $this->global['pageTitle'] = PROJECT_NAME.' : Reports';
        // $data['customers'] = $this->patient_model->getData();
        $this->loadViews("reports/index", $this->global, $data , NULL);
    }
    

    

   
}

?>