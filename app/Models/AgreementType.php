<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgreementType extends Model
{
    use HasFactory;

    protected $table = "type_agreement";

    protected $fillable = [
    	'id',
        'name',
    ];
}
