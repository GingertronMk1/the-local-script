<?php

namespace App;

enum UserRoleEnum: string
{
    case ROLE_ADMIN = 'admin';
    case ROLE_USER = 'user';
}
