<?php
require_once(__DIR__ . '/util/constant.php');
require_once(__DIR__ . '/sql/get-all.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Albums</title>
</head>
<body>
<h1>Albums</h1>
<input type="button" value="Create an album" onClick="location.href = '<?php echo ALBUM_SAVE_PATH ?>'">
<table cellpadding="20">
    <?php


    $albums = getAll();
    foreach ($albums as $album) {
        $id = $album['id'];
        $name = $album['name'];
        ?>
        <tr>
            <td>
                <a href="show?id=<?php echo $id ?>"><b><?php echo $name ?></b></a>
                <input type="button" value="Edit"
                       onClick="location.href = '<?php echo ALBUM_EDIT_PATH . $id ?>'">
                <input type="button" value="Delete"
                       onClick="location.href = '<?php echo ALBUM_DELETE_PATH . $id ?>'">
                <input type="button" value="Add photo"
                       onClick="location.href = '<?php echo PHOTO_ADD_PATH . $id ?>'">
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
