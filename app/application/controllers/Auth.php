<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            "User_model"    => "user"
        ]);
    }

    public function index()
    {
        redirect(base_url("auth/login"));
    }

    public function login()
    {
        if ($this->session->has_userdata(SESSION)) {
            redirect(base_url("dashboard"));
        }

        $data = [
            "URL_LOGIN" => base_url("auth/login-proses"),
        ];
        $this->loadView('auth/login', $data);
    }

    public function register()
    {
        if ($this->session->has_userdata(SESSION)) {
            redirect(base_url("dashboard"));
        }

        $data = [
            "URL_REGISTER" => base_url("auth/register-proses"),
        ];
        $this->loadView('auth/register', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url("auth"));
    }

    public function register_proses()
    {
        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'nohp',
                'label' => 'No Handphone',
                'rules' => 'trim|required',
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required',
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[user.email]',
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim|min_length[8]',
            ],
            [
                'field' => 'konfirmasi_password',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|trim|matches[password]',
            ],
        ];

        $load   = $this->form_validation->set_rules($config);
        $run    = $this->form_validation->run();
        if (!$run) {
            $error  = $this->form_validation->error_array();
            $this->session->set_flashdata("gagal", validationError($error));
            redirect(base_url("auth/register"));
        }

        $nama           = $this->input->post("nama");
        $nohp           = $this->input->post("nohp");
        $jenis_kelamin  = $this->input->post("jenis_kelamin");
        $email          = $this->input->post("email");
        $password       = $this->input->post("password");

        $dataInsert     = [
            "role"          => USER,
            "email"         => $email,
            "password"      => md5($password),
            "nama"          => $nama,
            "jenis_kelamin" => $jenis_kelamin,
            "nohp"          => $nohp
        ];

        $insert         = $this->user->insert($dataInsert);
        if (!$insert) {
            $this->session->set_flashdata("gagal", "Terjadi kesalahan saat melakukan pendaftaran");
            redirect(base_url("auth/register"));
        }

        $this->session->set_flashdata("sukses", "Pendaftaran berhasil. Silahkan masuk menggunakan akun anda");
        redirect(base_url("auth/login"));
    }

    public function login_proses()
    {
        $email      = $this->input->post('email');
        $password   = md5($this->input->post('password'));

        $cekAkun  = $this->user->where(["LOWER(email)"   => strtolower($email)])->get();

        if ($cekAkun) {
            if ($password == $cekAkun['password']) {
                $this->session->set_userdata(SESSION, $cekAkun);
                redirect("dashboard");
            } else {
                $this->session->set_flashdata("gagal", "Password yang anda masukan tidak sesuai!");
                redirect(base_url("auth/login"));
            }
        } else {
            $this->session->set_flashdata("gagal", "Username yang anda masukan tidak sesuai!");
            redirect(base_url("auth/login"));
        }
    }

    public function cek()
    {
        phpinfo();
        die;
    }
}
