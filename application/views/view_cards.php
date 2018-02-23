<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view($header);
$this->load->view($navbar);
?>
    <!--Content goes here-->
    <div class="container" style="padding-top: 70px">
        <h1 class="text-center">View Cards</h1>
        <?php
        foreach ($cards->result() as $card) {
            echo "
            <div class='row'>
                <div class='card-body'>
                    <h1><a href='/viewcard/$card->id'>$card->card_title</a></h1>
                </div>
            </div>
            ";
        }
        ?>
    </div>
<?php
$this->load->view($footer);