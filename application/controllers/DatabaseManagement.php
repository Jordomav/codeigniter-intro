<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseManagement extends CI_Controller
{

    public function migrate_cards()
    {
        $this->load->dbforge();
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

    public function migrate_notes()
    {
        $this->load->dbforge();
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
