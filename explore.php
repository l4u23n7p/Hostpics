<?php
require 'function.php';
$req = new SQLrequete('root', '', 'projet_php');
$req->view_all();