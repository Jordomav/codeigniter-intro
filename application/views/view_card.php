<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view($header);
$this->load->view($navbar);
?>
    <!--Content goes here-->
    <div class="container" style="padding-top: 70px;">
        <h1><?php echo $card->card_title ?></h1><?php echo "<a href='/editcard/$card->id'>(Edit)</a>" ?>
        <h3>Notes:</h3>
        <?php foreach ($notes as $note): ?>
            <div class="note_body">
                <p><?php echo $note->note_text ?></p><?php echo "<a href='/editcard/edit_note/$note->id'>(Edit)</a>"?>
            </div>
        <?php endforeach; ?>
        <?php echo validation_errors(); ?>
        <?php echo form_open('viewcard/add_note/' . $card->id); ?>
        <?php echo form_input(array('id' => 'note_text', 'name' => 'note_text')); ?><br />
        <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
        <?php echo form_close() ?>
    </div>
<?php
$this->load->view($footer);