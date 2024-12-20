## About
This package is a wrapper class of the PHP MySQLi database extension. This class provides connection and query error message and number properties. This class can navigate a ResultSet and provides useful properties of the ResultSet like number of rows. This library is used by the MySQL Table Editor project referenced [here](https://github.com/hotelmah/mysql-table-editor).


## Important
- Please edit the config.server.constants.php file in the src folder manually. The database connection properites are read from this file.


## Test File
- A test file is not included.


## In your Script
- Add the following:

`
require_once('vendor/autoload.php');
`

`
use MySQLi\ClsDataBaseMySqliMTE;
`


## Installation - Composer
- run this command in your project root:

`
composer require hotelmah/mysqli-wrapper
`

- There is no need to manually create/update a composer.json file in your project root since this command does it automatically.
- The package is listed on Packagist, but is hosted on GitHub where the source is pulled from.


## Installation - Manual
- Copy the src directory contents to an appropriately named directory like includes/ in your LAMP web hosting provider.
- Refer to the 'In your Script' heading above and/or test file.


## Feedback
- Forks and Pull Requests are welcomed.
- Suggestions and comments for improvement are requested.
- Thank you for reading!


## License
- GNU GENERAL PUBLIC LICENSE, Version 3.
