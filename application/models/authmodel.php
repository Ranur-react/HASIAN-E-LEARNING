<?php if (!defined('BASEPATH'))exit ('no direct script access allowed');

class Authmodel extends CI_MODEL{

  public function cek($in){
    $username = $in['username'];
    $password = $in['password'];

    $qlogin = $this->db->query("SELECT * FROM tbluser WHERE username='$username' AND password='$password'");

    if($qlogin->num_rows() > 0){
      foreach ($qlogin->result() as $data){
        $session['iduser'] = $data->iduser;
        $session['username'] = $data->username;
        $session['namauser'] = $data->namauser;
        $session['login'] = TRUE;
        $this->session->set_userdata($session);
      }

  }
  if($session['login']== TRUE)
  redirect('belajar');
else
  redirect('auth');
}
}
