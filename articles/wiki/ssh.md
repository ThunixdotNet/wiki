## SSH and Thunix (And magic!)

---

When you [sign up](https://www.thunix.net/signup.php) for an account on thunix, you'll be given remote access to a Linux shell server, with web hosting, gopher hosting and email. And because of our [GDPR and privacy policy](https://www.thunix.net/gdpr.php), we take security seriously. This is why we use SSH key pairs to grant access to our server through SSH or SFTP.

On our signup page, you'll seen an entry for a "Public SSH Key." SSH key pairs work on the basis of having two files; one is a public key that you can send to us when we create your account, while the other is a private key that you keep on your computer, away from public knowledge. If you're wondering where to find these things, you have to generate them yourself.

Generating SSH key pairs requires software that also allows you to connect to a shell server using SSH (such as OpenSSH or PuTTY). On Windows and UNIX-like operating systems with OpenSSH Client software installed, including all Linux variants, BSD variants and macOS, the terminal command:

`ssh-keygen`

Will generate both the public and private SSH key files for you. You would be prompted for a file name to save the key files as, then a passphrase to help generate the files from. Then, out of the two files, open the public key file (the file with the file suffix \*.pub) in your favourite text editor, copy all its text and paste it in the Public SSH Key section of our signup page when submitting your registration form.

PuTTY handles key generation differently, as the PuTTYGen program is graphical. However, the interface makes key generation very self-explanatory (it simply involves moving your mouse cursor around your screen). The resulting key files can be saved and, as with the public key file saved by OpenSSH's shh-keygen program, open your new public key file in your favourite text editor, copy all its text and paste it in the Public SSH Key section of our signup page when submitting your registration form.

## Logging into Thunix through SSH

---

Now that you have an account with us, it's time for you to connect to our server with an SSH client program. On all operating systems using OpenSSH Client, it's a simple matter of opening a terminal and running the command:

`ssh -i [path_to-private_key] [username]@thunix.net`

Where `[path_to-private_key]` is the directory path to your previously generated private SSH key and where `[username]` is the username you registered when signing up for our services.

Logging into your account with PuTTY is also quite simple. When you first run PuTTY, simply fill in `[username]@thunix.net` as your host name, where '[username]` is the username you registered when signing up for our services. Then, in the Category column of PuTTY's interface, expand the SSH category, select the Auth category and look for a text field called Private Key for Authentication; click on the Browse button, open the private key that you generated earlier and click on the Open button at the bottom of the program window.

If everything has been done correctly, you should see a BASH terminal prompt; you're not logged into Thunix!
