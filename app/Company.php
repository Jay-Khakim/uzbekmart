<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subcategory_id',
        'category_id',
        'tag_id',
        'companytype',
        'name_en',
        'name_uz',
        'name_ru',
        'slug_en',
        'desc_en',
        'desc_uz',
        'desc_ru',
        'status',
        'image',
        'web',
        'email',
        'phone',
        'address_en',
        'address_uz',
        'address_ru',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subcategory_id' => 'integer',
        'category_id' => 'integer',
        'tag_id' => 'integer',
    ];


    public function subcategory()
    {
        return $this->belongsTo(\App\Subcategory::class);
    }

    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

    public function tag()
    {
        return $this->belongsTo(\App\Tag::class);
    }
}
