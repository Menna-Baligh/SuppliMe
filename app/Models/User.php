<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
     * @var list<string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
    public function supportMessages()
    {
        return $this->hasMany(SupportMessage::class);
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function shippings()
    {
        return $this->hasMany(Shipping::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function carts(){
        return $this->hasMany(Cart::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class ,'product_user','user_id','product_id')->withTimestamps();
    }

    protected function image() : Attribute {
        return Attribute::make(
            get: fn($value)=> asset($value ? '/storage/'.$value: '/images/default-avatar.jpg')
        );
    }
}
