@echo off

if "%OS%"=="Windows_NT" @setlocal

set CURR_HOME=%~dp0

"%PHP_COMMAND%" -qC "%CURR_HOME%\bin\phar-skeleton" %*

if "%OS%"=="Windows_NT" @endlocal
