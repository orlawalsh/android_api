<?php

/**
 * Database config variables
 */
define("DB_HOST", "us-cdbr-iron-east-03.cleardb.net");
define("DB_USER", "b91ef53baf216d");
define("DB_PASSWORD", "695a46e2");
define("DB_DATABASE", "heroku_4790a1bc4c207ca");
?>


// mysql -h us-cdbr-iron-east-03.cleardb.net -u b91ef53baf216d -pheroku_4790a1bc4c207ca < android_api.sql 

// mysqldump -h us-cdbr-iron-east-03.cleardb.net -u b91ef53baf216d -p695a46e2 heroku_4790a1bc4c207ca | mysql -h 127.0.0.1 -u owalsh -proot android_api

// mysql --host=us-cdbr-iron-east-03.cleardb.net --user=b91ef53baf216d --password=695a46e2 --reconnect heroku_4790a1bc4c207ca < android_api.sql