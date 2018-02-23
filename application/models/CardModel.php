<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 2/22/18
 * Time: 1:52 AM
 */

class CardModel extends CI_Model {

    /**
     * CardModel constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Add new card to the DB.
     * @param $data
     */
    function form_insert($data){

        $this->db->insert('cards', $data);
    }

    /**
     * Get requested card and then update it in the DB.
     * @param $data
     * @param $card
     */
    function form_update($data, $card)
    {
        $this->db->where('id', $card);
        $this->db->update('cards', $data);
    }
}
