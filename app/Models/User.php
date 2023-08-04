<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_name1',
        'last_name2',
        'phone',
        'curp',
        'rfc',
        'nationality',
        'place_born',
        'account_number_bank',
        'bank',
        'clabe',
        'infonavit',
        'position',
        'date_start',
        'remplacement_employee_id',
        'remplacement_employee_name',
        'remplacement_employee_reasons',
        'remplacement_employee_date',
        'scholarship',
        'gender',
        'marital_status',
        'street',
        'number',
        'suburb',
        'colony',
        'city',
        'state',
        'cp',
        'file_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
