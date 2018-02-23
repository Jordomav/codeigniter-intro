<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 2/22/18
 * Time: 1:52 AM
 */

class CardModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function form_insert($data){
        $this->load->database();
        $this->db->insert('cards', $data);
    }

    function form_update($data, $card)
    {
        $this->load->database();
        $this->db->where('id', $card);
        $this->db->update('cards', $data);
    }
}
