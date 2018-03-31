# htv2-live
Hack the Valley 2 Live Page

## Setup

There are a lot of stuff you need to configure, so brace yourself. (*´∀`)~♥

### 0. Prerequisites
* PHP >= 7.1
* MySQL Database
* Linux OS is preferred
* PHP composer
* Slack bot token (OPTIONAL, If you want sync announcements to Slack)
* FCM API Key (OPTIONAL, If you want desktop and Android push notifications)
* Apache2 (Nginx is useable, but you need to configure it yourself)

### 1. Get Basic Web App Working

First, let's install all dependencies by running the following command
```bash
$ composer install
```

Then you need to copy `.env.example` to `.env`, and edit the `.env` file

```bash
$ cp .env.example .env
$ vi .env # Use your favorite text editor here, i choose vi because i like it
```

Modify the following lines so it contains the correct database information:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=htv2_live
DB_USERNAME=root
DB_PASSWORD=root
```

Add a new line at end of the file, this is your admin password

```
ADMIN_KEY=<Choose a random password>
```

Save the file and run the following command to create all database tables you need

```bash
$ php artisan migrate
```

And run the following command to generate an application key used for cookie encrytion

```bash
$ php artisan key:generate
```

You have now successfully configured the PHP part, now let's make server work (I assume you use Apache 2).

First create a new virtual host that points to `/public` folder, this application does not support subdirectories, for example `domain.com/live` will not work, but `live.domain.com` will.

Then make sure you have `AllowOverride all` applied to `/public`.

Save and restart Apache.
