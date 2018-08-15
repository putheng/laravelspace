#!/bin/bash

# Random generator function
passwordgen() {
    l=$1
    [ "$l" == "" ] && l=25
    tr -dc A-Za-z0-9 < /dev/urandom | head -c ${l} | xargs
}

dbgen() {
    l=$1
    [ "$l" == "" ] && l=16
    tr -dc A-Za-z0-9 < /dev/urandom | head -c ${l} | xargs
}

usergen() {
    l=$1
    [ "$l" == "" ] && l=16
    tr -dc A-Za-z0-9 < /dev/urandom | head -c ${l} | xargs
}

PASS=$(passwordgen);
DB=$(dbgen);
USER=$(usergen);

mysql -uroot <<MYSQL_SCRIPT
CREATE DATABASE $1$DB;
CREATE USER '$1$USER'@'localhost' IDENTIFIED BY '$PASS';
CREATE USER '$1$USER'@'%' IDENTIFIED BY '$PASS';
GRANT ALL PRIVILEGES ON $1$DB.* TO '$1$USER'@'localhost';
GRANT ALL ON $1$DB.* TO '$1$USER'@'%';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

echo "MySQL user created."
echo "Databse:   $1$DB"
echo "Username:   $1$USER"
echo "Password:   $PASS"

## Show user
## SELECT User FROM mysql.user;

## Drop User
## DROP USER 'useridJ7F7Xd3GUJqxoO8b'@'localhost';
## DROP USER 'useridJ7F7Xd3GUJqxoO8b'@'%';

## show databases;
## drop database name;

