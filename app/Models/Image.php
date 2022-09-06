<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id', 'inventory_id', 'src'
    ];
    /**
     * Get the vehicle
     */
    public function vehicle()
    {
      return $this->belongsTo('App\Models\Inventory');
    }
}
