<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_contacts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'number',
        'city',
        'state',
        'category',
    ];
}
