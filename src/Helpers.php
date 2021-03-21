<?php

/**
 * @param string|null $param
 * @return string
 */
function site(string $param = null): string
{
  if ($param && !empty(SITE[$param])) {
    return SITE[$param];
  }

  return SITE["root"];
}

/**
 * @param string $path
 * @param bool $time
 * @return string
 */
function asset(string $path, $time = true): string
{
  $file = SITE["root"] . "/views/assets/{$path}";
  $fileOnDir = dirname(__DIR__, 1) . "/views/assets/{$path}";
  if ($time && file_exists($fileOnDir)) {
    $file .= "?time=" . filemtime($fileOnDir);
  }
  return $file;
}

/**
 * @param string $path
 * @return string
 */
function package(string $path): string
{
  $package = SITE["root"] . "/node_modules/{$path}";
  return $package;
}


/**
 * @param string|null $type
 * @param string|null $message
 * @return array|null
 */
function flash(string $type = null, string $message = null): ?array
{
  if ($type && $message) {
    $_SESSION["flash"] = [
      "type" => $type,
      "message" => $message
    ];
    return null;
  }

  if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
    unset($_SESSION["flash"]);
    return $flash;
  }

  return null;
}

/**
 * @param string|null $type
 * @param string|null $name
 * @param string|null $tmpFile
 * @return bool
 */
function uploadImage(string $type = null, string $name = null, string $tmpFile = null): bool
{
  if ($type && $name && $tmpFile) {
    switch ($type) {
      case 'product':
        $path = $file = SITE["root"] . "/views/assets/images/product/";
        break;

      case 'profile':
        $path = $file = SITE["root"] . "/views/assets/images/profile/";
        break;

      default:
        return false;
        break;
    }

    if(move_uploaded_file($tmpFile, $path . $name)) {
      return true;
    }
  }

  return false;
}

/**
 * @param string|null $type
 * @param string|null $name
 * @return bool
 */
function removeImage(string $type = null, string $name = null): bool
{
  if ($type && $name) {
    switch ($type) {
      case 'product':
        $path = $file = SITE["root"] . "/views/assets/images/product/";
        break;

      case 'profile':
        $path = $file = SITE["root"] . "/views/assets/images/profile/";
        break;

      default:
        return false;
        break;
    }

    if(unlink($path . $name)) {
      return true;
    }
  }

  return false;
}
