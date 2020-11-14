<?php
require_once(__DIR__ . '/../sql/get-one.php');
require_once(__DIR__ . '/set-value.php');
require_once(__DIR__ . '/../base/error-css.php');
require_once(__DIR__ . '/constant.php');

function displayForm($errors)
{
    ?>
    <h1><?php
        echo getPageTitle();
        ?></h1>

    <?php
    if (array_key_exists(INVALID_ALBUM_ID_KEY_NAME, $errors)) { ?>
        <span class="error"><?php echo
            $errors[INVALID_ALBUM_ID_KEY_NAME] ?></span><br/>
        <?php return;
    } ?>
    <form method="post">
        <div style="width: 30em;">
            <label for="albumName">Album Name: (5-30 characters)</label>
            <br/>
            <input type="text" name="albumName" id="albumName"
                   value="<?php
                   $album = getAlbum();
                   $name = isset($album) ? $album["name"] : "";
                   setValueFromPostRequest(ALBUM_NAME_KEY_NAME, $name) ?>"/>
            <br/>
            <?php if (array_key_exists(ALBUM_NAME_KEY_NAME, $errors)) { ?>
                <span class="error"><?php echo $errors[ALBUM_NAME_KEY_NAME] ?></span>
            <?php } ?>
            <div style="clear: both;">
                <input type="submit" name="submitButton" id="submitButton" value="Save"/>
                <input type="button" value="Back" onClick="history.go(-1);">
            </div>
        </div>
    </form>
    <?php
}

function getPageTitle()
{
    return isset($_GET["id"]) ? EDIT_AN_ALBUM_TITLE : CREATE_AN_ALBUM_TITLE;
}
