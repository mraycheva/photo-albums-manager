<?php
require_once(__DIR__ . '/../sql/get-one.php');
require_once(__DIR__ . '/../../util/set-value.php');
require_once(__DIR__ . '/../../base/error-css.php');
require_once(__DIR__ . '/../../util/constant.php');

function displayForm($errors)
{
    ?>
    <h1>Edit a photo</h1>
    <?php
    if (array_key_exists(INVALID_PHOTO_ID_KEY_NAME, $errors)) { ?>
        <span class="error"><?php echo
            $errors[INVALID_PHOTO_ID_KEY_NAME] ?></span><br/>
        <?php return;
    } ?>
    <form method="post" enctype="multipart/form-data">
        <div style="width: 30em;">
            <label for="photoName">Name (5 to 20 characters):</label><br/>
            <input type="text" name="photoName" id="photoName"
                   value="<?php setValueFromPostRequest(PHOTO_NAME_KEY_NAME, getPhoto()["name"]) ?>"/>
            <br/>
            <?php if (array_key_exists(PHOTO_NAME_KEY_NAME, $errors)) { ?>
                <span class="error"><?php echo INVALID_NAME_MESSAGE; ?></span><br/>
            <?php } ?>
            <?php

            if (array_key_exists(PHOTO_KEY_NAME, $errors)) { ?>
                <span class="error"><?php echo $errors[PHOTO_KEY_NAME] ?></span><br/>
            <?php } ?>

            <div style="clear: both;">
                <input type="submit" name="submitButton" value="Save"/>
            </div>
            <input type="button" value="Back" onClick="history.go(-1);">

        </div>
    </form>
    <?php
}
