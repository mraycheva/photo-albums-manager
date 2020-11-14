<?php
function setValueFromPostRequest($fieldName, $fallbackValue)
{
    if (isset($_POST[$fieldName])) {
        echo $_POST[$fieldName];
        return;
    }

    echo $fallbackValue;
}
