<?php
$a = false;
var_dump(isset($a) != true);
$a = null;
var_dump(is_null($a) != false);