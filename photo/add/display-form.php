<?php
require_once(__DIR__ . '/../../util/set-value.php');
require_once(__DIR__ . '/../../base/error-css.php');
require_once(__DIR__ . '/../../util/constant.php');

function displayForm($errors)
{
    ?>
    <h1>Add a photo</h1>
    <?php
    if (array_key_exists(INVALID_ALBUM_ID_KEY_NAME, $errors)) { ?>
        <span class="error"><?php echo
            $errors[INVALID_ALBUM_ID_KEY_NAME] ?></span><br/>
        <?php return;
    } ?>
    <form method="post" enctype="multipart/form-data">
        <div style="width: 30em;">
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
            <label for="photoName">Name (5 to 20 characters):</label><br/>
            <input type="text" name="photoName" id="photoName"
                   value="<?php setValueFromPostRequest(PHOTO_NAME_KEY_NAME, "") ?>"/>
            <br/>

            <?php if (array_key_exists(PHOTO_NAME_KEY_NAME, $errors)) { ?>
                <span class="error"><?php echo INVALID_NAME_MESSAGE ?></span><br/>
            <?php } ?>

            <label for="photo">Photo (JPG / JPEG):</label><br/>
            <input type="file" name="photo" id="photo" value=""/>
            <br/>

            <input type="hidden" name="album-id" id="album-id"
                   value="<?php $albumId = $_GET[ALBUM_ID_KEY_NAME];
                   echo $albumId; ?>"/>
            <?php if (array_key_exists(PHOTO_KEY_NAME, $errors)) { ?>
                <span class="error"><?php echo $errors[PHOTO_KEY_NAME] ?></span><br/>
            <?php } ?>

            <div style="clear: both;">
                <input type="submit" name="submitButton" value="Save"/>
                <input type="button" value="Back" onClick="history.go(-1);">
            </div>
        </div>
    </form>
    <?php
}
