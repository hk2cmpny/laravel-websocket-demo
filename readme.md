# Laravel Websocket Demo

This is a simple project for demonstrating laravel websocket.

### Clone project

```bash
git clone git@github.com:hk2cmpny/laravel-websocket-demo.git
```

### Install dependancies

```bash
composer install
```

### Run Laravel server

```bash
php artisan serve
```

### Run WebSocket Server

```bash
php artisan websocket:serve
```

### Run Digital Signage as static html file

```bash
php -S 0.0.0.0:8080
```

### Test working

**Browser** - open browser and open `localhost:8080` in that, we need to do give project id and device id here.
we need to do it three times

1. ProjectID = p1, DeviceID = 1 [Ref: TAB#1]
2. ProjectID = p1, DeviceID = 2 [Ref: TAB#2]
3. ProjectID = p2, DeviceID = 3 [Ref: TAB#3]


**Calling webhook** - now we can call webhook to verify correct device is reciving currect data call the following url in browser

* `http://localhost:8000/webhook/thermo_123` -> this should reflect to [TAB#1]
* `http://localhost:8000/webhook/cam_001` -> this should reflect to [TAB#2]
* `http://localhost:8000/webhook/cam_555` -> this should reflect to [TAB#3]

### Conclusion

I hope this will work for you, let me know if anything you wish to know more in detail.
