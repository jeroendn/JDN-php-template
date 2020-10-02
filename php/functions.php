<?php
function dbError($e) {
  ?><div class="dberror">A database error occured!<?php if (SHOW_ERRORS): ?> Error: <?php echo $e; endif; ?></div><?php
}

function getDomainName() {
  return $_SERVER['HTTP_HOST'];
}

function getPageTitle() {
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $currentPageTitle = basename($url);

  if ($currentPageTitle == getDomainName()) {
    $currentPageTitle = 'home';
  }

  return $currentPageTitle;
}
