<?php

# Import environment settings from dotCloud
$envjson = json_decode(file_get_contents("/home/dotcloud/environment.json"),true);

# Create MySQL Connection
$mysqli = new mysqli($envjson['DOTCLOUD_DB_MYSQL_HOST'],
                     'helloappuser',         # username
                     'helloworldpassword',   # password
                     'helloworldapp2',       # db name
                     $envjson['DOTCLOUD_DB_MYSQL_PORT']);

print_r($mysqli->query('SELECT now();')->fetch_row());

?>