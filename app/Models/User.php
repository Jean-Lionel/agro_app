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
        "nom",
        "prenom",
        "address",
        "role",
        "date_naissance",
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
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

    public static function boot(){
        parent::boot();
        self::creating(function($model){
            $model->name = $model->nom . " ".  $model->prenom;
        });
    }

    // Getting user role
    public function isAdmin(){
        return $this->role == 'ADMNISTRATEUR';
    } 
    public function isClient(){
        return $this->role == 'CLIENT';
    }   
    public function isAgent(){
        return $this->role == 'AGENT';
    }
}
