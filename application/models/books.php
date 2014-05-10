<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Books extends CI_Model {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}
 	public function search_By_Name($name){
 	$this->db->select('*');
 	$this->db->from('books');
 	$this->db->like('book_title', $name);
 	$this->db->join('authors', 'book_author = author_id');
 	return $this->db->get();
 	}
 	

 
 }
 
 /* End of file users.php */
 /* Location: ./application/models/users.php */