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

Add another line, this will be your timezone

```
TIMEZONE=<Time zone, for example EDT>
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

### 2. Test Your Deployment and Add Data

Administration is done purely in command line.

To manage the application, you `cd` into the application folder, and use following commands.

```
$ php artisan event:create
$ php artisan event:delete {id}
$ php artisan event:get {id}
$ php artisan access_key:list
$ php artisan event:list
$ php artisan hash:generate {count} {phrase} # 500 hash thing, you prob don't need this
$ php artisan event:update {id}
```

To access the announcement dashboard, you need to goto `live.domain.com/admin?=ADMIN_KEY`.

Try type an announcement to make sure it works.

### 3. Automatically Send Message to Slack Channel When Creating Anncoument

You need to create a custom Slack integration for this. Goto this link for more detail: https://api.slack.com/bot-users

After you have created the integration, you should receive an API key, add the following lines to `.env` file.

```
SLACK_KEY=<Slack API Key>
SLACK_CHANNEL=<The channel you want to post message to, for example #mychannel, make sure you invte the bot to channel first>
```

### 4. Desktop and Android Notifications
iOS does not support web notifications yet, so we only need to worry about desktop & Android.

First you will need a FCM API key, create a Google account and signup for FCM.

Add the following lines to `.env`:

```
FCM_TOPIC=<Choose a topic name, can be anything>
FCM_KEY=<Your FCM API key>
```
