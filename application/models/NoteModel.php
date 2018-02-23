<?php

class NoteModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function form_insert($data)
    {
        $this->db->insert('notes', $data);
    }

    function form_update($data, $note)
    {
        $this->db->where('id', $note);
        $this->db->update('notes', $data);
    }

}
