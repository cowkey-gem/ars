#!/bin/sh

cat ./tables.txt | while read line
do
    php ../artisan make:migration create_${line}_table
done
