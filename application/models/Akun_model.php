<?php
class Akun_model extends CI_Model {
  function loginAkun($data){
    $this->db->select('*');
    $this->db->from('akun');
    $this->db->where('email_akun',$data['email_akun']);
    $this->db->where('pass_akun',$data['pass_akun']);
    $query = $this->db->get();
    return $query;
  }
  function cekEmail($data){
    $this->db->select('*');
    $this->db->from('akun');
    $this->db->where('email_akun',$data['email_akun']);
    $query = $this->db->get();
    return $query;
  }
  function registerAkun($data,$table){
    $this->db->insert($table,$data);
  }
  function dataAkun($id_akun){
    $this->db->select('*');
    $this->db->from('akun');
    $this->db->where('id_akun',$id_akun);
    $query = $this->db->get();
    return $query;
  }
}
?>
