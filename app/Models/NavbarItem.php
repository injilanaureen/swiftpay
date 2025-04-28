<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavbarItem extends Model
{
    protected $fillable = ['name', 'url', 'position'];

    public function subItems()
    {
        return $this->hasMany(SubNavbarItem::class);
    }
}

