<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'description', 'email', 'telephone', 'mobile', 'additional_tel', 'fax', 'registration_number', 'address1', 'address2', 'city', 'country', 'map', 'facebook', 'twitter', 'youtube'];
}
