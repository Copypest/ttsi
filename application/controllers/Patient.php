<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Bidyut Biswas
 * @version : 1.0
 * @since : 22 June 2019
 */
class Patient extends BaseController
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
        $this->global['pageTitle'] = PROJECT_NAME.' : Dashboard';
        $data['customers'] = $this->patient_model->getData();
        $this->loadViews("patient/index", $this->global, $data , NULL);
    }
    

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $this->load->library('form_validation');
            $data['roles'] = $this->user_model->getUserRoles();

            $forms = $this->form_model->getForm(['forms_id'=>1]);
            $data['forms'] = $forms;
            
            $this->global['pageTitle'] = PROJECT_NAME.' : Add New Patient';

            if(!empty($this->input->post())){
                $this->form_validation->set_rules('membership_no','Membership No','trim|required');

                if ($this->form_validation->run() == TRUE){
                    $postedData     = $this->input->post();                   
                    $birthday       = $this->input->post('dob');
                    $date_expired   = $this->input->post('date_expired');
                    $date_left   = $this->input->post('date_left');
                    if(!empty($birthday)){
                        $birthdayA                 = explode('/',$birthday);
                        $postedData['dob']         = $birthdayA[2].'-'.$birthdayA[1].'-'.$birthdayA[0];
                        // $date_expiredA             = explode('/',$date_expired);
                        // $postedData['date_expired']= $date_expiredA[2].'-'.$date_expiredA[1].'-'.$date_expiredA[0];
                        // $date_leftA                 = explode('/',$date_left);
                        // $postedData['date_left']   = $date_leftA[2].'-'.$date_leftA[1].'-'.$date_leftA[0];
                    }
                    // echo '<pre>';
                    // print_r($postedData);
                    // echo $birthday;
                    // die;
                    $this->db->insert('patients',$postedData);

                    $this->session->set_flashdata('success', 'New patient added successfully');
                    redirect('patient');
                }
            }

            $this->loadViews("patient/addNew", $this->global, $data, NULL);
        }
    }


    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function edit($userId = NULL)
    {
        if($this->isAdmin() == TRUE || $userId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('patient');
            }
            $patientDetails  = $this->patient_model->getData(['id'=>$userId]);
            $data['patient'] = $patientDetails[0];
            $birthday        = $patientDetails[0]['dob'];
            $birthdayA       = explode('-',$birthday);
            $data['patient']['dob']  = $birthdayA[2].'/'.$birthdayA[1].'/'.$birthdayA[0];
                
            //$data['patient']['dob'] = $patientDetails[0]['dob'];
            //pre($data);die;
            
            $this->global['pageTitle'] = PROJECT_NAME.' : Edit User';
            $this->load->library('form_validation');
            if(!empty($this->input->post())){
                $postedData     = $this->input->post();
                $id     = $this->input->post('id');
             
                $this->form_validation->set_rules('membership_no','Membership No','trim|required');

                if ($this->form_validation->run() == TRUE){
                                   
                    $birthday   = $this->input->post('dob');                    

                    if(!empty($birthday)){
                        $birthdayA                      = explode('/',$birthday);
                        $postedData['dob']         = $birthdayA[2].'-'.$birthdayA[1].'-'.$birthdayA[0];
                    }
                    
                    $this->db->where('id',$id);
                    $this->db->update('patients',$postedData);

                    $this->session->set_flashdata('success', 'Patients Updated successfully');
                    redirect('patient');
                } 
            }    
            $this->loadViews("patient/edit", $this->global, $data, NULL);
        }
    }
    
    function details($id=""){
        if(empty($id) || $id == '' || $id == 0){

        }
        
    }
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

    public function deleteRow(){
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('patients');
        return true;
    }
    
    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    public function addTest(){
        $this->load->library('form_validation');
        $data = [];
        $this->global['pageTitle'] = PROJECT_NAME.' : Add Test Report';
        // $this->load->view('patient/addTest');
        $this->loadViews("patient/addTest", $this->global, $data, NULL);
    }

   
}

?>