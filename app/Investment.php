<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investment extends Model
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
        'title_en',
        'title_uz',
        'title_ru',
        'slug_en',
        'address_en',
        'address_uz',
        'address_ru',
        'amount',
        'avaragepower_en',
        'avaragepower_uz',
        'avaragepower_ru',
        'iir',
        'npv',
        'payback',
        'workplaces',
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
