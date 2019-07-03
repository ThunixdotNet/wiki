# Admin tools 

There's a set of tools to ease system administration.  These tools can be found in the poorly named repo [makeuser](https://tildegit.org/thunix/makeuser).

- makeuser: adds a user to our system

```makeuser {username} {email address} {ssh key}```

- rmuser: Removes user account, terminates processes, archives home directory

```rmuser {username}```

- makedb: Creates a db for a user, and emails the credentials and connection info to their thunix email address.

```makedb {username}```

- dbremove : Removes a db created by a user, after generating an mysqldump of it

```dbremove {username}```
