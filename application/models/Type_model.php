<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_model extends CI_Model {
  public function __construct()
  {
    parent::__construct();
  }
  public function get_data()
  {
    return $this->db->get("tb_book_type")->result();
  }
}
?>
