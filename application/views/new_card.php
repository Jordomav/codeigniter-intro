<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view($header);
$this->load->view($navbar);
?>
<!--Content goes here-->
<div class="container-fluid" style="padding-top: 70px;">
    <h1 class="text-center">New Card</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('newcard/create'); ?>
    <?php echo form_input(array('id' => 'card_title', 'name' => 'card_title')); ?><br />
    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
    <?php echo form_close() ?>
</div>
<?php
$this->load->view($footer);