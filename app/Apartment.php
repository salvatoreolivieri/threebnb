<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'rooms',
        'beds',
        'bathrooms',
        'sqm',
        'address',
        'latitude',
        'longitude',
        'image',
        'image_original_name',
        'visible'
    ];

    public function sponsorships(){
        return $this->belongsToMany('App\Sponsorship');
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }

    public function messages(){
        return $this->hasMany('App\Message');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function views(){
        return $this->hasMany('App\View');
    }

    public static function coordinates($indirizzo){
        $coordinates = [
            'latitude' => 12.345678,
            'longitude' => 123.4567789
        ];

        return $coordinates;
    }
}
