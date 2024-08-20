<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail; add "implements MustVerifyEmail" after Authenticable
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class student extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'address',
        'password',
        'date_of_birth',
        'student_id',
        'fees',
        'enc_pass',
        'height',
        'weight',
        'date_of_joining',
        'batch_id',
        'image',
        'contact_number',
        'attended_class',
        'position',
        'status',
        'type',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
