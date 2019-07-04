<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $data["book"] = $this->bookmodel->get_data();
		$this->load->view('crud',$data);
	}
	public function insert()
	{
	    $data["type"] = $this->typemodel->get_data();
		$this->load->view('insert/crud',$data);
	}
	
	
	public function insert_book()
	{
	    $d = array("id_book"=>0,"title"=>$_POST['title'],
	    "author"=>$_POST['author'],"date_published"=>$_POST['date_published'],
	    "number_of_pages"=>$_POST['number_of_pages'],"id_book_type"=>$_POST['id_book_type']);
	    $this->bookmodel->insert($d);
	}
	
	public function update($id = "")
	{
	    if($id == ""){
	        redirect("crud");
	    }else{
    	    $data["book"] = $this->bookmodel->get_data_by_id($id);
	        $data["type"] = $this->typemodel->get_data();
    		$this->load->view('update/crud',$data);   
	    }
	}
	
	public function delete_book($id = "")
	{
	    if($id == ""){
	        redirect("crud");
	    }else{ 
	        $this->bookmodel->delete($id);
	        redirect("crud");
	    }
	}
	
	public function update_book()
	{
	    $d = array("title"=>$_POST['title'],
	    "author"=>$_POST['author'],"date_published"=>$_POST['date_published'],
	    "number_of_pages"=>$_POST['number_of_pages'],"id_book_type"=>$_POST['id_book_type']);
	    $this->bookmodel->update($d,$_POST['id']);
	}
	
	
}
