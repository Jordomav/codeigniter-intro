<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view($header);
$this->load->view($navbar);
?>
    <!--Content goes here-->
    <div class="container" style="padding-top: 70px;">
        <?php echo $card->card_title ?>
    </div>
<?php
$this->load->view($footer);