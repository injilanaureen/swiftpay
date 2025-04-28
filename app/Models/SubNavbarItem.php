<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubNavbarItem extends Model
{
    protected $table = 'navbar_sub_items'; // Make sure this is correct

    protected $fillable = ['navbar_item_id', 'name', 'url', 'position'];

    public function parent()
    {
        return $this->belongsTo(NavbarItem::class, 'navbar_item_id');
    }   
}
