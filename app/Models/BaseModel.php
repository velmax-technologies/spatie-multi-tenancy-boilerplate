<?php

namespace App\Models;

use App\Traits\HasActivityLoggerTrait;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    use HasActivityLoggerTrait;
}