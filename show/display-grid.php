<?php
require_once(__DIR__ . '/../photo/sql/get-all.php');
require_once(__DIR__ . '/../util/constant.php');
require_once(__DIR__ . '/../base/sql/exists.php');
require_once(__DIR__ . '/../base/error-css.php');

function displayGrid($pageTitle)
{
    if (!exists("album", $_GET["id"])) { ?>
        <span class="error"><?php echo
            RESOURCE_DOES_NOT_EXIST_MESSAGE ?></span><br/>
        <?php return;
    } ?>
    <h1><?php echo $pageTitle ?></h1>
    <input type="button" value="Add a photo" onClick="location.href = '<?php
    $id = $_GET["id"];
    echo PHOTO_ADD_PATH . $id ?>'">
    <input type="button" value="Back" onClick="history.go(-1);">
    <table cellpadding="20">
        <?php
        $photos = getAll();
        foreach ($photos as $photo) {
            $id = $photo['id'];
            ?>
            <tr>
                <td>
                    <div>
                        <?php
                        $image = imagecreatefromstring($photo['content']);
                        ob_start();
                        imagejpeg($image, null, 80);
                        $data = ob_get_contents();
                        ob_end_clean();
                        echo '<img src="data:image/' . $photo['extension'] . ';base64,' . base64_encode($data) . '" height="80"/>'; ?>
                        <br/>
                        <b><?php echo $photo['name'] ?></b>
                        <br/>
                        <input type="button" value="Edit"
                               onClick="location.href = '<?php echo PHOTO_EDIT_PATH . $id ?>'">
                        <input type="button" value="Delete"
                               onClick="location.href = '<?php echo PHOTO_DELETE_PATH . $id ?>'">
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php }
