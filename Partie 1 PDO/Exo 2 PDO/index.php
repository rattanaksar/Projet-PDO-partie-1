<?php

require('model.php');

$Showtypes = new ShowTypes;

$listeShowTypes = $Showtypes-> getAllShowTypes();

require('vue.php');