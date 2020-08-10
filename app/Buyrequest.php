<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buyrequest extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag_id',
        'category_id',
        'name',
        'email',
        'company',
        'wants',
        'amount',
        'image',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tag_id' => 'integer',
        'category_id' => 'integer',
    ];


    public function tag()
    {
        return $this->belongsTo(\App\Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }
}
