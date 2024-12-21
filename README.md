## About
This library/package is a wrapper class of the PHP MySQLi 8.0 database extension. This class provides connection and query error message and number properties. This class can navigate a ResultSet and provides useful properties of the ResultSet like number of rows.

The base class is generic and not specific to any particular project or library. The extended class in this library is used by the MySQL Table Editor (MTE) project referenced [here](https://github.com/hotelmah/mysql-table-editor).

If you would like me to write an extended class for your particular needs, please open an issue or discussion.


##  Features
- 3x Connection properties: connectionCheckIfGood(), connectionGetErrorNumber(), connectionGetErrorMessage().
- 9x Query related properties: queryCheckIfGood(), queryInfo(), queryGetErrorNumber(), queryGetErrorMessage(), queryGetErrorListCount(),  queryGetErrorListMessages(), queryGetInsUpdAutoGenID(), queryGetAffectedRows(), queryGetWarningCount().
- 2x ResultSet properties: resultSetFetchNumFields(), resultSetFetchNumRows().
- 4x ResultSet methods: resultSetFetchAllRows(), resultSetFetchNextRow(), resultSetFetchAllFields(), resultSetClose().
- 7x Connection/Server properties.


## Setup (Important)
- Please edit the config.server.constants.php file in the src folder manually. The database connection properties are read from this file.
- There is no automated setup for this.


## Test File
- A test file is not included.
- This is because there is no test database server and sample database to connect to.


## In your Script
- Add the following in your script:

`
require_once('vendor/autoload.php');
`

`
use MySQLi\ClsDataBaseWrapperBase;
`

Preferablly, you may want to extend the base for your particular needs.
The database config file is in the src folder and is read by the base class.


## Installation - Composer
- run this command in your project root:

`
composer require hotelmah/mysqli-wrapper
`

- There is no need to manually create/update a composer.json file in your project root since this command does it automatically.
- The package is listed on Packagist, but is hosted on GitHub where the source is pulled from.
- See setup section above.


## Installation - Manual
- Copy the src directory contents to an appropriately named directory like includes/ in your LAMP web hosting provider.
- Refer to the 'In your Script' heading above and/or test file.


## Feedback
- Forks and Pull Requests are welcomed.
- Suggestions and comments for improvement are requested.
- Thank you for reading!


## License
- GNU GENERAL PUBLIC LICENSE, Version 3.
