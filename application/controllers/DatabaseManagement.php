<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseManagement extends CI_Controller
{

    public function index()
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
}
