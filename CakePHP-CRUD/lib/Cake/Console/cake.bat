::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
::
:: Bake is a shell script for running CakePHP bake script
::
:: CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
:: Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
::
:: Licensed under The MIT License
:: Redistributions of files must retain the above copyright notice.
::
:: @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
:: @link          http://cakephp.org CakePHP(tm) Project
:: @package       Cake.Console
:: @since         CakePHP(tm) v 1.2.0.5012
:: @license       http://www.opensource.org/licenses/mit-license.php MIT License
::
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

:: In order for this script to work as intended, the cake\console\ folder must be in your PATH

@echo.
@echo off

SET app=%0
SET lib=%~dp0

php -q "%lib%cake.php" -working "%CD% " %*

echo.

exit /B %ERRORLEVEL%
