# Thunix API

This is the working spec for the Thunix API.  Until finalization, the spec will be consider v1.  v1 of the API shall be considered unstable, and a work in progress.

The API will be authenticated, at all times, using the user's credentials sent in the host headers.

The API shall return a 200 for successful requests, with the JSON paylod.

The API shall return a 400 for any endpoint not existent.

The API shall return a 401 for unauthenticated requests.

The API shall return a 403 for requests which are authenticated, but not permissible for the authenticated user.

The API shall return a 418 for requests to the "/teapot" endpoint.

The API shall return a 420 for requests exceeding the rate limits.

The API shall return a 501 for requests which exist in the spec, but have not been implemented yet.


## API Format

The API is a RESTful API, and the following URIs will be used:

```
https://{hostname}/api/1/{action}
```


## Informational APIs

### ip_info

This endpoint shall return a JSON payload containing interfaces, with the name, address, and netmask: 


```
{
        "Interfaces":[
                {
                        "Interface":"lo",
                        "Address":"127.0.0.1",
                        "Netmask":"255.0.0.0"
                },
                {
                        "Interface":"eth0",
                        "Address":"213.239.234.117",
                        "Netmask":"255.255.255.255"
                },
                {
                        "Interface":"client1",
                        "Address":"10.0.1.1",
                        "Netmask":"255.255.255.0"
                },
                {
                        "Interface":"wg-p2p",
                        "Address":"10.0.0.5",
                        "Netmask":"255.255.255.0"
                }
        ]
}
```

### uptime

This will return a JSON payload of system uptime:

```
{
   "days":164,
   "hours":16,
   "mins":22,
   "secs":3
}
```

### teapot

This shall return a JSON payload, describing the current tea making capabilities of the system:

```
{
   "tea" : "available",
   "height" : "short",
   "width" : "stout
}
```
