<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Location extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'input',
        'description',
        'output',
        'shape',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
    ];


    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }


    public function deliveries()
    {
        return $this->belongsTo(Delivery::class);
    }


    public function machines()
    {
        return $this->hasMany(Machine::class);
    }


    public function building()
    {
        return $this->belongsTo(Building::class);
    }


}
