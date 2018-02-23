<?php

class NoteModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function form_insert($data)
    {
        $this->load->database();
        $this->db->insert('notes', $data);
    }

    function form_update($data, $note)
    {
        $this->load->database();
        $this->db->where('id', $note);
        $this->db->update('notes', $data);
    }

}
