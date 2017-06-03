<?php

namespace App;

use App\Models\SbUser;
use Illuminate\Notifications\Notifiable;

class User extends SbUser
{
    use Notifiable;
}
