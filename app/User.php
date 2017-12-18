<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'id_usuario');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class,'id_usuario');
    }

    public function phones()
    {
        return $this->hasMany(Phone::class,'id_usuario');
    }

}
