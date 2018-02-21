<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view($header);
$this->load->view($navbar);
?>
<!--Content goes here-->
<div class="container-fluid" style="padding-top: 70px;">
    <h1 class="text-center">New Card</h1>
</div>
<?php
$this->load->view($footer);