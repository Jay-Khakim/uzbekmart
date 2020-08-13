<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\CompanyRequest;


class Company extends Model
{
    use CrudTrait;
    // use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'companies';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function tag(){
        return $this->belongsTo('App\Models\Tag'); 
    }
    public function category(){
        return $this->belongsTo('App\Models\Category'); 
    }
    public function subcategory(){
        return $this->belongsTo('App\Models\Subcategory'); 
    }

   
	public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "img";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    }





    // public function setImageAttribute($value)
    // {   
    //     // $value =Company::get();
    //     $attribute_name = "image";
    //     // or use your own disk, defined in config/filesystems.php
    //     // $disk = config('backpack.base.root_disk_name');
    //     $disk = config('public'); 

    //     // destination path relative to the disk above
    //     $destination_path = "public/uploads/company/"; 

    //     // if the image was erased
    //     if ($value==null) {
    //         // delete the image from disk
    //         \Storage::disk($disk)->delete($this->{$attribute_name});

    //         // set null in the database column
    //         $this->attributes[$attribute_name] = null;
    //     }

    //     // if a base64 was sent, store it in the db
    //     if (Str::startsWith($value, 'data:image'))
    //     {
    //         // 0. Make the image
    //         $image = \Image::make($value)->encode('jpg', 90);

    //         // 1. Generate a filename.
    //         $filename = md5($value.time()).'.jpg';

    //         // 2. Store the image on disk.
    //         \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

    //         // 3. Delete the previous image, if there was one.
    //         \Storage::disk($disk)->delete($this->{$attribute_name});

    //         // 4. Save the public path to the database
    //         // but first, remove "public/" from the path, since we're pointing to it 
    //         // from the root folder; that way, what gets saved in the db
    //         // is the public URL (everything that comes after the domain name)
    //         $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
    //         $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
    //     }
    // }


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
