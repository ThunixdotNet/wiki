# Databases

There are some database technologies available on Thunix.

* MySQL/MariaDB
* Sqlite

## Sqlite

In the spirit of minimalism, the recommended database technology to use here is sqlite.  Sqlite DB's exist as a single, atomic file, and are a good use for light applications, with low to medium concurrent loads.

As an example, [tildegit](https://tildegit.org) is backed by a sqlite database.  It also allows for greater flexibility, and segregation for your application's data:  You can create as many sqlite databases as you need.

## MySQL/MariaDB

We have MariaDB server running on Thunix, and should you desire, we can provision a database for you.  In order to minimize admin overhead, the database will be named the same as your user account.  It's recommended that in order to segregate your applications in the single DB, use table-prefixes.

### Requesting a MySQL/MariaDB Database

Either opening an issue on [tildegit](https://tildegit.org/thunix), shooting an email to root, or asking in IRC is the way to get a DB created for your.

### Admin notes

The makedb and dbremove commands are used to create and destroy their respective databases.  See [makedb](/wiki/makedb) and [dbremove](/wiki/dbremove) for more information.
