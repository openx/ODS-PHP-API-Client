# ODS PHP API CLIENT
Requirements:

  - php and apache2
  - php composer
  - zend framework 2

### I. SETTING UP THE ENVIRONMENT

1. Update Ubuntu
```$ apt-get update && apt-get upgrade```

2. Install required packages:
```
$ sudo apt-get install apache2 php
$ sudo apt-get install php-cli
$ sudo apt-get install php7.2-mbstring
$ sudo apt-get install php7.2-dom
$ sudo apt-get install php7.2-ldap
$ sudo apt-get install zip unzip
```

3. Use the command "php --ini" to identify which config file does your php use. Then edit it (with sudo!) 
Please make sure to adjust the 
```
max_execution_time
max_input_time
default_socket_timeout
```
to a higher number (example 240) so that PHP won't kill the script during execution (in case of large reports).

4. Install PHP Composer
```sh
$ curl -sS https://getcomposer.org/installer | sudo php
$ sudo mv composer.phar /usr/local/bin/composer
$ sudo chmod +x /usr/local/bin/composer
```

5. Clone php client repository into your workspace
```$ git clone https://github.com/openx/ODS-PHP-API-Client```

7. Initialize the composer in your workspace catalog:
composer init
```$ composer init```

- add in the "require" (alternatively in both "require" and "require-dev") following dependencies:
```
zendframework/zendframework (version >= 2.5.1)
zendoauth
zendrest
```
(Composer will ask you whether you want to install these packages now, please do so)

8. Configure set_path.php file
- the value of '$path1' variable should point to 'vendor' directory in your workspace

### II. SETTING UP THE PHP API CLIENT

1. Add your credentials in pull_fields.php, date_range.php and pull_report.php files
2. Adjust the settings of your report in the variable: $myJson

DONE

- Run pull_fields.php to see available fields
```$ php pull_fields.php```

- Run date_range.php to see available timeframe for selected attributes and metrics
```$ php pull_fields.php```

- Run pull_report.php to see pull your report
```$ php pull_report.php```
