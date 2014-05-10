
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('baza');
		$this->load->model('books');
		$this->load->helper('form');
	}


	public function index()
	{
		$this->load->view('main');
	}

	public function info(){
		echo 'Kontroler test, funkcja info.';
	}

	public function find(){
		$name = $this->input->post('tytul');
		$data=$this->books->search_By_Name($name);
		if(!empty($data)){
			$viewBag = array();
			foreach ($data->result() as $row)
			{
			    $text= $row->book_id."<br>";
			    $text.= $row->book_title."<br>";
			    $text.= $row->author_name."<br>";
			    $text.= $row->author_surname."<br>";
			    $viewBag['book'][$row->book_id]=$text;

			}
		}
		else {
			$viewBag['nodata']=true;
		}
		$this->load->view('main',$viewBag);
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */