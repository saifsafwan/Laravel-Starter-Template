<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'link',
        'picture',
    ];



    /**
     * Relationship
     *
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
