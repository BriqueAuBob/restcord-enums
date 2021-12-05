<?php

namespace RestCord\Enums;

enum ScheduledEventType: int
{
    case STAGE_INSTANCE = 1;
    case VOICE = 2;
    case EXTERNAL = 3;
}