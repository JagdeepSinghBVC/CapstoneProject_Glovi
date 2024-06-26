<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'country_id', 'state_id', 'country_code', 'status'];

}
