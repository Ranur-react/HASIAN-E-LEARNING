<?php if (!defined('BASEPATH'))exit ('no direct script access allowed');

class Model extends CI_MODEL{

  public function get_pelajar(){
    $q=$this->db->query("select * from tblpelajar");
    return $q;
  }
}
