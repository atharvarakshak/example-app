<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Song extends Model
{
    use HasFactory;
    // Add fillable fields corresponding to database columns
    protected $fillable=['title', 'artist'];

    // Getter function for title field
    public function getTitle(){
        return $this->title;
    }
     // Getter function for title field
     public function getArtist(){
        return $this->artist;
    }
}
?>