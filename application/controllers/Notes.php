<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');
class Notes extends CI_Controller {

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

    

	public function index(){	
       
		$this->load->view('posts/index');
	}

	public function index_json(){
		$data["notes"] = $this->note->get_all_notes();
		echo json_encode($data);
	}

	public function index_html(){
	  $data["notes"] = $this->note->get_all_notes();
	  $this->load->view("posts/includes/notes", $data);
	}

	public function create(){
		echo "bulaga";

		$note_details = array(
			"description" => $this->input->post("note"),
		);

		$add_note = $this->note->add_note($note_details);

		if($add_note === TRUE){
			redirect(base_url());
		}
	}

   

}
