<?php

require('model.php');

$Shows = new Shows;

$listeShows = $Shows->getAllShows();

require('vue.php');