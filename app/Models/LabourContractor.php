<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabourContractor extends Model
{
    use HasFactory;

    protected $table = 'registers';

    protected $fillable = ['site_id','contractor_name', 'GST','pan_number','mobile_number','address'];
}
