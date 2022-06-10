<?php
if ($_POST["message"]) {
    mail("admin@bluebees.ventures", "BlueBees Limited Contact Form Submission by " . $_POST["name"], $_POST["message"]);
}
