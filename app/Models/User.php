<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role', 
        'nid', 
        'phone',
        'dob',
        'gender',
        'permanent_address',
        'image'
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
    
    // Define relationship with Credential
    public function credential()
    {
        return $this->hasOne(Credential::class);
    }
    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }

    public function notices()
    {
        return $this->hasMany(Notice::class);
    }

}
