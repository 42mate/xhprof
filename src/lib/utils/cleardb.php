<?php

include '../config.php';

mysql_connect($_xhprof['dbhost'], $_xhprof['dbuser'], $_xhprof['dbpass']);
mysql_select_db($_xhprof['dbname']);
mysql_query("DELETE FROM xhprof");


