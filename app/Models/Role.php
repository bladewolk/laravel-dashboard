<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    CONST ROOT = 1;
    CONST ADMIN = 2;
    CONST MANAGER = 3;
    CONST USER = 4;
}
