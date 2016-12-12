#!/usr/bin/env bash

mysql -u ubuntu -D phpunittest < tests/assets/teardown.sql
mysql -u ubuntu -D phpunittest < tests/assets/create.sql
mysql -u ubuntu -D phpunittest < tests/assets/data.sql

vendor/bin/phpunit tests