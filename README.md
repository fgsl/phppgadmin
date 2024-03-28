# phpPgaAdmin for PHP 8

This is a fork of [phpPgAdmin](https://github.com/phppgadmin/phppgadmin), made for running on PHP 8 accessing PostgreSQL 15 or superior.

I have made it for solve my problem. I saw some forks of phppgadmin but I have not seen a refactoring effort yet.

If someone is interested, clone this repository and send pull requests. I would like to refactor phppgadmin for a code which is completely compatible with PHP 8.

The purpose of this project is to rewrite phpPgAdmin completely object-oriented using the modern PHP implementation.

## Installation

Unpack the tag file into the web root folder. There is no need for URL rewrite.

## Configuration

This refactoring allows configuration overriding. You can set [config.inc.php](./conf/config.inc.php) file to a global configuration and keep a `local.config.inc.php` file for a local configuration. So, you can have one only `config.inc.php` file.

For having a local configuration, copy [local.config.inc.php-dist](./conf/local.config.inc.php-dist) to `local.config.inc.php` and set the variables that you need.

## Do you want to help?

Open a issue, implement the change and make a pull request.

What is the guidelines?

* Try to be simple;
* Don't use deprecated resources.
* Create unit tests.
