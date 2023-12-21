<?php

namespace App\Models;

use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,Searchable;

    protected $fillable=['title','price','body','img','user_id','category_id'];



    public function toSearchableArray(){
        $category=$this->category;
        $array=[
         'id'=>$this->id,
         'title'=>$this->title,
         'body'=>$this->body,
         'category'=>$category
        ];
        
        return $array;
    }






    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
