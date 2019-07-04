<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {
  public function __construct()
  {
    parent::__construct();
  }
  public function get_data()
  {
    return $this->db->query("select * from tb_book b, tb_book_type t
    where b.id_book_type = t.id_book_type")->result();
  }
  
  public function get_data_by_id($id)
  {
    return $this->db->query("select * from tb_book b, tb_book_type t
    where b.id_book = '".$id."' and b.id_book_type = t.id_book_type")->row();
  }
  public function insert($data)
  {
    $this->db->insert("tb_book",$data);
    return $this->db->affected_rows();
  }
  public function update($data,$id="")
  {
    $this->db->where("id_book",$id)->update("tb_book",$data);
    return $this->db->affected_rows();
  }
  public function delete($id)
  {
    $this->db->where("id_book",$id)->delete("tb_book");
    return $this->db->affected_rows();
  }
}
?>
