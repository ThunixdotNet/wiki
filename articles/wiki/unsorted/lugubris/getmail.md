## getmail

---

getmail is a mail retriever designed to allow you to get your mail from one or more mail accounts on various mail servers to your local machine for reading with a minimum of fuss. getmail is designed to be secure, flexible, reliable, and easy-to-use.

### Configuration

- Create a file under .getmail in your home directory (Default: .getmail/getmailrc)

#### Retrieving email

Here is an example configuration file used with a thunix account:

```
[retriever]
type = SimplePOP3SSLRetriever
server = thunix.net
username = user
port = 995
password_command = ("/path/to/password-retriever", "-p", "myaccount@thunix.net")

[destination]
type = Maildir
path = ~/Maildir/inbox/
``

If the default filename (getmailrc) is not used then one can retrieve email by executing `$ getmail --rcfile thunix`, replace thunix with the filename used.

#### Password management

Passwords can be directly stored in the config file instead of using an external password retriever. To store password in config file use "password" parameter:

```
password = correct horse battery staple
```

This is not recommended, you should instead use an external retriever if possible. If "password" parameter is used then users should set right permission for ".getmail" directory, use `$ mkdir -m 0700 ~/.getmail` to create the directory.

### Related

- [getmail documentation](http://pyropus.ca/software/getmail/)
- [getmail - Arch Wiki](https://wiki.archlinux.org/index.php/Getmail)
