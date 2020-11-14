<?php
require_once(__DIR__ . '/../util/validate.php');
require_once(__DIR__ . '/../util/constant.php');

function handleForm($errors)
{
    if (isset($_POST["submitButton"])) {
        processForm($errors);
        return;
    }

    displayForm($errors);
}
