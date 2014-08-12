<?php
$r = $this->readData(); //you data returned as array
$a = new stdClass();
$a->aaData = $r;


echo json_encode($a);
die;