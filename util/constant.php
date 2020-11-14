<?php

const ROOT_DIR = '/album';

const ALBUM_SQL_DIR = ROOT_DIR . '/sql';

const ALBUM_DELETE_PATH = ALBUM_SQL_DIR . '/delete.php?id=';
const ALBUM_SAVE_PATH = ROOT_DIR . '/save';
const ALBUM_EDIT_PATH = ALBUM_SAVE_PATH . '?id=';
const ALBUM_SHOW_PATH = ROOT_DIR . '/show?id=';

const PHOTO_ROOT_DIR = ROOT_DIR . '/photo';

const PHOTO_ADD_PATH = PHOTO_ROOT_DIR . '/add?album-id=';
const PHOTO_EDIT_PATH = PHOTO_ROOT_DIR . '/edit?id=';
const PHOTO_DELETE_PATH = PHOTO_ROOT_DIR . '/sql/delete?id=';

const ERROR_KEY_NAME = 'error';
const ALBUM_ID_KEY_NAME = 'album-id';
const ALBUM_NAME_KEY_NAME = 'albumName';
const PHOTO_NAME_KEY_NAME = 'photoName';
const PHOTO_KEY_NAME = 'photo';
const TYPE_KEY_NAME = 'type';
const INVALID_ALBUM_ID_KEY_NAME = 'invalidAlbumId';
const INVALID_PHOTO_ID_KEY_NAME = 'invalidPhotoId';

const LOCATION_HEADER = 'Location: ';

const INVALID_NAME_MESSAGE = 'Invalid name';
const INVALID_FORMAT_MESSAGE = 'Invalid format';
const MISSING_PHOTO_MESSAGE = 'Missing photo';
const PHOTO_SIZE_NOT_ALLOWED_MESSAGE = 'Photo\'s size is bigger than allowed';
const PHOTO_CANNOT_BE_PROCESSED_MESSAGE = 'Photo cannot be processed';
const RESOURCE_DOES_NOT_EXIST_MESSAGE = 'Resource does not exist';

const JPEG_MIME_TYPE = 'image/jpeg';

const EDIT_AN_ALBUM_TITLE = 'Edit an album';
const CREATE_AN_ALBUM_TITLE = 'Create an album';
