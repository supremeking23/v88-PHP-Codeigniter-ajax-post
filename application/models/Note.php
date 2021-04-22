<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('Asia/Manila');
class Note extends CI_Model {
    
    // no need since we are using prepared statement
    // function mysqli_real_escape_string($val){

    //     $escape_string = mysqli_real_escape_string($this->db->conn_id, $val);
    //     return $escape_string;
    // }





    function get_note_by_id($id){
        // $query = "SE";
        // $values = array($message_id); 
        // return $this->db->query($query,$values)->row_array();
        return $this->db->query("SELECT * FROM notes WHERE id = ?",$id)->row_array();
    }

    function get_all_notes(){
        return $this->db->query("SELECT * FROM notes")->result_array();
    }



    function add_note($note){
        $query = "INSERT INTO notes(description,created_at) VALUES (?,?)";
        $values = array($note["description"],date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
    }


}

?>