        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');
         
        class Auth extends CI_Controller {
                public $jabatan;
         
                public function __construct(){ 
                        parent::__construct();
                        $this->load->model('M_auth','auth');


                }
                public function setError(){
                        $error='pesan kesalahan';
                        $this->error = $error;
                }
         
                public function index(){       
                        $val = $this->form_validation;
                        // $this->form_validation->set_rules('fieldname', 'fieldlabel', 'trim|required|min_length[5]|max_length[12]');
                        // $val->set_rules('username','username','required|max_length[12]');
                        $valReg = array(
                                array(
                                        'field' =>  'username',
                                        'label' => 'username',
                                        'rules'         =>  'required'
                                ),
                                array(
                                        'field' =>  'password',
                                        'label' => 'password',
                                        'rules'         =>  'required'
                                )
                        );
                        $val->set_rules($valReg);
                        if ($val->run() == FALSE) {            
                                $this->session->set_flashdata('error', '<i class="fa fa-info-circle"></i> Mohon Lengkapi Form Terlebih Dahulu');
                                redirect('admin/Login');
                        }
                        else{  
                                $inp = $this->input;                   
                                $cek = $this->auth->select($inp->post('username'),$inp->post('password'));
                                if ($cek == FALSE) {
                                        $this->session->set_flashdata('error', '<i class="fa fa-info-circle"></i> Username atau Password salah');
                                        redirect('admin/Login');
                                }
                                else{
                                        $data = $cek;
                                        if ($data['jabatan'] == 'Admin') {
                                                $array = array(
                                                        'nama' => 'assa',
                                                        'jabatan' => 'sasad'
                                                );                                     
                                                $this->session->set_userdata($array);
                                                 redirect(base_url('admin/dashboard'.$this->session->jabatan));
                                        }
                                        elseif ($data['jabatan'] == 'marketing') {
                                                $array = array(
                                                        'nama' => $data['nama'],
                                                        'jabatan' => $data['jabatan']
                                                );                                     
                                                $this->session->set_userdata($array);
                                                redirect('Marketing/home');
                                        }
                                        elseif ($data['jabatan'] == 'kasir') {
                                                $array = array(
                                                        'nama' => $data['nama'],
                                                        'jabatan' => $data['jabatan']
         
                                                );                                     
                                                $this->session->set_userdata($array);
                                                redirect('Kasir/home');
                                        }
                                }
                        }
                }
                public function logout(){
                        $this->session->sess_destroy('nama');
                        redirect('Admin/home');
                }
        }

