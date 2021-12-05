<?php

namespace RestCord\Enums;

enum ChannelType: int
{
    case GUILD_TEXT = 0;
    case DM = 1;
    case GUILD_VOICE = 2;
    case GROUP_DM = 3;
    case GUILD_CATEGORY = 4;
    case GUILD_NEWS = 5;
    case GUILD_STORE = 6;
    case GUILD_NEWS_THREAD = 7;
    case GUILD_PUBLIC_THREAD = 8;
    case GUILD_PRIVATE_THREAD = 9;
    case GUILD_STAGE_VOICE = 10;
}