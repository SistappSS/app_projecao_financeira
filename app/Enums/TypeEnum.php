<?php

namespace App\Enums;

enum TypeEnum: string
{
    case LIFETIME = "payment_unique";
    case MONTHLY = "monthly";
    case YEARLY = "yearly";
}
