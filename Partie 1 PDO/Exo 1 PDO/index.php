<?php

require('model.php');

$Clients = new Clients;

$listeClients = $Clients->getAllClient();

require('vue.php');