<?php 

spl_autoload_register(fn($ClassFileName) => require_once __DIR__."/classes/$ClassFileName".".php");
