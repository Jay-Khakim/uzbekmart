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
        'name_en',
        'name_uz',
        'name_ru',
        'email',
        'company_en',
        'company_uz',
        'company_ru',
        'wants_en',
        'wants_ru',
        'wants_uz',
        'amount_en',
        'amount_ru',
        'amount_uz',
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
