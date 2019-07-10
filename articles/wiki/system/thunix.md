man(8) Thunix man(8)

NAME Thunix - a public Linux server

SYNOPSIS ssh thunix.net

ADMINISTRATORS List of system adminstrators are:

       * amcclure  - Email: amcclure@thunix.net
                     IRC: amcclure/irc.tilde.chat, amcclure/irc.freenode.net

       * naglfar   - Email: naglfar@thunix.net
                     IRC: Naglfar/irc.tilde.chat, Naglfar/irc.freenode.net

       * ubergeek  - Email: ubergeek@thunix.net, ubergeek@yourtilde.com
                   - IRC: ubergeek/irc.tilde.chat, ub3g33k/irc.freenode.net

       * fosslinux - Email: fosslinux@thunix.net
                   - IRC: fosslinux/irc.tilde.chat

DESCRIPTION Thunix is a publicly accesible Linux server, running Debian
9, and managed using ansible playbooks.

       There  are  many  optional things to do on Thunix.  There is IRC chat availble with the weechat client.  Most build tools are available to you as well, to include
       git, make, gcc, go, python, and perl.  Mail facilties are also available for you to use via alpine, mutt, or even mailx.

       To enter chat, just type 'chat' and hit enter.  You'll be dropped into the #thunix chat room on the irc.tilde.chat network.

       You should create an account at tildegit.org, where Thunix's git repos are hosted, to include the system configuration definition files.

       Ansible is the tool we use to configure the systems that comprise Thunix.  Git and ansible are two tools your should familiarize yourself with.

Purpose The goal of Thunix is to be an open and collaborative
environment, conducive to learning the principles of \*Nix operating
systems, regarding how they work, how to administer them, how to use
them, and how to collaborate using them.

       Thunix tries to adhere to the values and philosophy of the Hacker Ethic whenever possible. The hacker ethics and beliefs as described by Levy are:

            *  Access  to  computers  -  and  anything which might teach you something about the way the world works - should be unlimited and total. Always yield to the
       Hands-On Imperative!

            * All information should be free

            * Mistrust authority - promote decentralization

            * Hackers should be judged by their hacking, not criteria such as degrees, age, race, sex, or position

            * You can create art and beauty on a computer

            * Computers can change your life for the better

       Thunix will never use proprietary software but users can do that if they wish. This is something they should avoid however.

Terms of Service Nothing is without its rules and regulations; thunix is
no exception. Below are the site's service terms. Everything in this
page should be clear to everyone who wishes to use thunix's services;
failure to abide by these terms can result in penalties such as service
bans and may result in legal action against any offending users,
depending on the severity of each case and any other individuals who may
have been affected. Thunix may conduct investigations on any suspected
violations, and we will cooperate with law enforcement agencies with
their investigations. Be sure to read this page carefully and understand
it.

       You  are  responsibe  for  checking your local mail account from time to time. This email address is the only one we retain, and as such, any warnings and notices
       regarding your account, or service status will be sent to this account.

            * Deliberately defacing the accounts of other users

            * Deliberately trying to disrupt thunix's server

            * Using thunix as a launch pad for disrupting other servers

            * Using thunix to impersonate other websites and businesses for criminal purposes

            * Storing/distributing pornography of any genre and medium (especially child pornography)

            * Storing/distributing content that defames any individual

            * Promoting racial, ethnic, religious, political and other forms of bigotry

            * Storing/distributing, promoting, or encouraging use of pirated/cracked software, license keys, license/registration circumvention programs,  or  any  ques‐
       tionable programs/scripts that can risk causing unauthorized modifications, or disrupts network services for any programs or devices.

            * Mining cryptocurrencies

            * Spamming on any forums, mailing lists, irc channels, newsgroups, etc.

            * Leaking or publishing any user's or individual's personal information without that person's consent.

       Copyright  infringement is not allowed on thunix, and we will not allow any illegal content to be distributed. It's also expected that all users respect the copy‐
       rights of those who produce original content of any kind and only share if the author or license grants you permission. Content hosted on accounts used for exter‐
       nal file storage must also follow copyright law.

       If  you  want  to  request  for  content  you  own  the  copyright  for  to  be  removed  from  thunix, please refer to our abuse reporting page (https://www.thu‐
       nix.net/abuse.php). In the email, please identify who you are, if you are the copyright holder or legally representing them, the exact files you want removed with
       links to the files and infringed content, and contact information such as phone numbers or a reply-to email address.

       Users  that  repeatedly violate the Terms of Service will have their account removed. Depending on the degree of the offense, their account may be removed immedi‐
       ately. These terms also apply to communication services such as forums, mailing lists, irc channels, newsgroups, and any other service either hosted  on  or  used
       for thunix. If you come across anything that violates the terms of service, please let us know with the abuse reporting page (https://www.thunix.net/abuse.php).

Architecture The Thunix system consists of one server, running Debian 9,
which runs inside of an LXD container. This allows for an out-of-band
administration of the host, in case of configuration-gone-awry.

       Hourly, thunix reaches out to tildegit, pull down the latest version of the configuration, and run the configuration tool, ensuring it is in a known,  and  easily
       replicable state.

       All repos for system configuration, Thunix-supplied/ran code is hosted on tildegit.org.  Thunix users are recommended to create accounts on tildegit, and contrib‐
       ute pull requests to make their desired changes to the system, or very minimally, submit issues for problems and/or requests.

SEE ALSO ssh(8), weechat(8), git(8), make(8), gcc(8), go(8), python(8),
perl(8), alpine(8), mutt(8), mailx(8), ansible-playbook(8),
tildegit.org(8)

AUTHOR Uber Geek (ubergeek@thunix.net) amcclure (amcclure@thunix.net)

1.5 24 May 2019 man(8)
