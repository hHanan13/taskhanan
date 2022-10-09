<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class alboum extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = ['id','created_at','updated_at'];
    protected $appends = ['image_path'];

    public function user(){

        return $this->belongsTo(User::class,'user_id','id');
        
       }

       public function getImagePathAttribute()
    {
        return asset('images/alboums/' . $this->image);

    }//end of get image path

       public function scopeSearch($query, $term)
       {
   
           $term = "%$term";
           $query->where(function ($query) use ($term) {
               $query->where('name_en', 'like', $term);
           });
       }
}
