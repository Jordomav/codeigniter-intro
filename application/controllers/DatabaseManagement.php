<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseManagement extends CI_Controller
{

    /**
     * DatabaseManagement constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->dbforge();

    }

    /**
     * Migrate and create cards table.
     */
    public function migrate_cards()
    {
        $fields = array(
            'card_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => TRUE,
            ),
        );
        $this->dbforge->add_field('id');
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('cards');
    }

    /**
     * Migrate and create notes table.
     */
    public function migrate_notes()
    {
        $fields = array(
            'note_text' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => TRUE,
            ),
            'card_id' => array(
                'type' => 'INT'
            ),
        );
        $this->dbforge->add_field('id');
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('notes');
    }
}
