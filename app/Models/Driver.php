<?php

namespace App\Models;

// এই দুটি লাইন অবশ্যই থাকতে হবে
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Driver extends Authenticatable // এখানে মডেলটিকে Authenticatable থেকে এক্সটেন্ড করতে হবে
{
    use Notifiable;

    protected $table = 'drivers'; // তোমার টেবিলের নাম যদি drivers হয়

    protected $fillable = [
        'name',
        'mobile',
        'nid_number',
        'vehicle_type',
        'vehicle_number',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}