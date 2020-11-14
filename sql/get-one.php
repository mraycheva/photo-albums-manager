<?php
require_once(__DIR__ . '/../base/sql/get-one.php');

function getAlbum()
{
    return getOne("album");
}
