<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'content', 'category_id', 'meta_description', 'reading_time'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getDateForHuman()
    {
        return Carbon::create($this->created_at)->diffForHumans();
    }
}
