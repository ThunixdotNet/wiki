## Your Thunix Email

---

Every thunix account comes with a functional email address and mail box. This email address is the same as your SSH login name and your password is that which you received from the server's staff, in your signup confirmation email. However, if need to change your password on your thunix SSH account, use the `PASSWD` command through SSH. Though your SSH account has a password, this will NOT affect how you log into your account using SSH or an SFTP client, as your public/private key pair will always work. The account password, however, will affect only your thunix email address and ZNC IRC bouncer.

Your email can be accessed in one of three ways:

1. Running the Mutt or Alpine email clients through your SSH account
2. Logging into your email account from our [Rainloop web mail](https://www.thunix.net/webmail/) service
3. Through an email client program installed on your computer, using IMAP

Unlike the email services provided by Microsoft, Yahoo, Google and other providers, who intrusively spy on its users beyond reasonable law enforcement and advertising tactics, thunix email services will always respect user privacy, as you can see through our [GDPR Statement and Privacy Policy](https://www.thunix.net/gdpr.php).

## Mutt and Alpine Email Clients

---

Both Mutt and Alpine email clients are installed on thunix's server. They're open and accessible to every user, simply by running either the command `mutt` or `alpine` through SSH. For further assistance with either of these programs, it's highly suggested to read their man pages on the server; do this by running either `man mutt` or `man alpine` through SSH. The server is set up in such a way that allows both Mutt and Alpine to be able to fetch and send emails, so no manual configuration is required.

## Rainloop Web Mail Service

---

Thunix uses the Rainloop web interface to give users email access through their web browsers. Logging in requires the same username and password as your SSH account. Rainloop's interface is very easy to navigate, comparable to those of Microsoft Outlook, Google Mail or other browser-based email services, with utilities for organising your inbox, reporting spam and writing new messages.

## Email Client Setup with IMAP

---

You can also access thunix email using your favourite client software, including but not limited to Mozilla Thunderbird, Microsoft Office Outlook, Claws Mail or any email client that supports IMAP. The below picture illustrates the settings needed to configure your email client to fetch mail from thunix. Though it shows Thunderbird's configuration menu, this applies to all email client programs.

![Email settings in a Thunderbird dialog](https://www.thunix.net/images/mail.png)
