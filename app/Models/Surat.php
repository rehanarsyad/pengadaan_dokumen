<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'letter_number',
        'date_signin',
        'activity',
        'location',
        'odp_invite',
        'hour',
        'assistant_officer',
        'officer',
        'protokol_team',
        'clothes',
        'description',
        'verified_at',
        'created_by'
    ];
}
