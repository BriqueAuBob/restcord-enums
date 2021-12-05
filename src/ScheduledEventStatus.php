<?php

namespace RestCord\Enums;

enum ScheduledEventStatus: int
{
    case SCHEDULED = 1;
    case ACTIVE = 2;
    case COMPLETED = 3;
    case CANCELLED = 4;
}