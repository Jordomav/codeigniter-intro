<?php

class NoteModel extends CI_Model
{

    /**
     * NoteModel constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Add new note to the DB.
     * @param $data
     */
    function form_insert($data)
    {
        $this->db->insert('notes', $data);
    }

    /**
     * Get requested note and then update it in the DB.
     * @param $data
     * @param $note
     */
    function form_update($data, $note)
    {
        $this->db->where('id', $note);
        $this->db->update('notes', $data);
    }

    function form_remove($note)
    {
        $this->db->where('id', $note);
        $this->db->delete('notes');
    }

}
