# VNC

## Setup

If you came here, you are most likely wanting to gain access to vnc. The process
is not very difficult:

1. Open your shell and type `acquirevnc`. This will
   automatically give you a port number. **Note this down.**
2. The script will also prompt you to give a password. Follow the on-screen
   prompts, and note this password down, preferably in a password manager.
3. Install a VNC client on your local machine. The client for tigervnc is
   recommended.

## Connection

1. Forward the port to your local machine. To do this, run
   `ssh -L xxxx:localhost:xxxx -f -N -C username@thunix.net` on
   your local machine **every time** before you connect to your vnc. Replace
   username with your username and xxxx with your port nummber.
2. Connect to `localhost:xxxx` in your vnc client, where xxxx is your port number.
3. Type in your password you chose earlier when prompted.

## Starting VNC Server

You normally should not need to start your vnc server, as the `acquirevnc`
script starts your server for you. However, in the unlikely case of a server
reboot or a vnc crash, all you need to do is run `startvnc` and vnc will begin
in the background.

## Support

While the process is designed to be as easy as possible, it is easy to trip up.
For help, jump in our IRC channel on irc.tilde.chat/6697 in channel #thunix.
