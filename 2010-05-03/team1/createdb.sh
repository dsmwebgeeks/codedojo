#!/bin/sh
sqlite3 links.sqlite3 'create table links(id integer, original string, shortened string);'
