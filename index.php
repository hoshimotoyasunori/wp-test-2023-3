<?php
$title='test-site';

ob_start();
require 'views/components/header.php';
$contents = ob_get_clean();
echo $contents;

require 'views/components/rss.php';
require 'views/components/main.php';
require 'views/components/sub1.php';
require 'views/components/sub2.php';
require 'views/components/footer.php';

?>