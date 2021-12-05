Enums for `RestCord - PHP Edition`
======================

What is this?
------------

This is a PHP 8.1 Enums package to use with [RestCord](https://github.com/restcord/restcord) on your projects.
It can be used with another library like DiscordPHP or your own Discord REST API wrapper.


Requirements:
------------

- PHP 8.1

Usage example
------------

Create a new voice channel:
```php
<?php

use RestCord\DiscordClient;
use RestCord\Enums\ChannelType;

$client = new DiscordClient([ 'token' => 'bot-token' ]);
$client->guild->createGuildChannel([
    'guild.id' => 81384788765712384,
    'name' => 'new-channel',
    'type' => ChannelType::GUILD_VOICE->value
])
```

Missing enums?
------------
Do a [pull request](https://github.com/BriqueAuBob/restcord-enums/pulls) or an [issue](https://github.com/BriqueAuBob/restcord-enums/issues) and I will update the package!