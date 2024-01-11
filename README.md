# TA.BA_PREN_WEB

This repository belongs to the repository TA.BA_PREN_PY [TA.BA_PREN_PY](https://github.com/flawas/TA.BA_PREN_PY). This repository provides a website for the built machine. It contains information about the machine itself, the project team and collects data from the machine. The machine sends the data to a frontend site using a Python webhook. This site receives the provided JSON file and stores the data in the database.
## Installation

To install this project, set up a web server and a MySQL database. Place all files on the web space and define the configuration in the config.php file. 

```php
define('DATABASE_USERNAME', 'YOUR-USERNAME'); 
define('DATABASE_PASSWORD', 'YOUR-PASSWORD');
define('DATABASE_NAME', 'YOUR-DATABASE');
define('DATABASE_HOST', 'YOUR-HOST');
define('WRITE_LOG', true); //Enable log.txt File
```
The website then has a connection to the MySQL database. This configuration is required to transfer the collected data to the database.

## Production
When the website is connected to the MySQL database, it is possible to send data with a Webhook from the [PREN_PY] (https://github.com/flawas/TA.BA_PREN_PY) code to the database. The last three results will be displayed on the website. 

## Authors

- [@flawas](https://www.github.com/flawas)
