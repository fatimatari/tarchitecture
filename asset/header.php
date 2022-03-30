<?php

$head_server = 'https://tarchitecture.info';
$head_title = 'TARchitecture';
$head_desc = 'Need Space? We Design You One.';

$where = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['where']);
$what = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['what']);
if ($where == '') $where = 'home';
?>