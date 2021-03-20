# thunix wiki

Requires a webserver and PHP. The web server needs to be configured to:

- serve wiki.php by default (not index.php)
- when a requested URL does not correspond to an actual file, pass the requested page to wiki.php?page=

On apache, this is achieved by provided [.htaccess](.htaccess). On nginx, you can do something like:

```
server {
	listen 80;
	root /var/www/wiki_webroot;
	index wiki.php;
	server_name _;

	location ~ \.php$ {
		include snippets/fastcgi-php.conf;
		fastcgi_pass unix:/var/run/php/php7.3-fpm.sock;
	}

	location ~ ^/(.+)$ {
		try_files $uri $uri/ /wiki.php?page=$1;
	}
}
```
