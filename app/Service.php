<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag_id',
        'company_id',
        'name_en',
        'name_uz',
        'name_ru',
        'service_en',
        'service_uz',
        'service_ru',
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
        'tag_id' => 'integer',
        'company_id' => 'integer',
    ];


    public function tag()
    {
        return $this->belongsTo(\App\Tag::class);
    }

    public function company()
    {
        return $this->belongsTo(\App\Company::class);
    }
}
