<?php
$r = $this->readData(); //you data returned
$a = new stdClass();
$a->aaData = $r;


echo json_encode($a);
die;