<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'tag_id',
        'name_en',
        'name_uz',
        'name_ru',
        'slug_en',
        'desc_en',
        'desc_uz',
        'desc_ru',
        'image',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'tag_id' => 'integer',
    ];


    public function company()
    {
        return $this->belongsTo(\App\Company::class);
    }

    public function tag()
    {
        return $this->belongsTo(\App\Tag::class);
    }
}
