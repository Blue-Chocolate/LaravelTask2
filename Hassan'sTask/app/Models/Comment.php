<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasTranslations, HasFactory;
    public $translatable = ['content'];
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'content', 'is_published', 'is_approved'];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function post()
    {
        return $this->belongsTo(Post::class);
    }

    function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
