<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view($header);
$this->load->view($navbar);
?>
    <!--Content goes here-->
    <div class="container" style="padding-top: 70px">
        <?php echo validation_errors(); ?>
        <?php echo form_open('editcard/update_note/' . $note->id); ?>
        <?php echo form_input(array('id' => 'note_text', 'name' => 'note_text', 'value' => $note->note_text)); ?><br />
        <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
        <?php echo form_close() ?>
    </div>
<?php
$this->load->view($footer);