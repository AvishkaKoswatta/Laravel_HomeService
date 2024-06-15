<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'mobile',
        'description',
        'service_type',
        'charge_per_hour',
        'user_id' // Add this field
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bookmarkedBy()
    {
        return $this->belongsToMany(User::class, 'bookmarks')->withTimestamps();
    }
    public function isBookmarked()
    {
        $user = Auth::user();
        return $user ? $user->bookmarks->contains($this->id) : false;
    }
}
