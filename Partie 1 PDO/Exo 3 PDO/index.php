<?php

require('model.php');

$Clients = new Clients;

$listeClients = $Clients->getAllClient(20);

require('vue.php');