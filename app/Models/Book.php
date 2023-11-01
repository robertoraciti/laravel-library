<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "author",
        "genre_id",
        "plot",
        "isbn",
        "publishing_year",
        "pages",
        "price"
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }

    public function getGenreBadge()
    {
        return $this->genre ? "<span class='badge mx-1' style='background-color: {$this->genre->color}'>{$this->genre->name}</span>" : "<span class='badge mx-1' style='background-color: grey'>Nessuna categoria</span>";
    }

    public function getTypologyBadges()
    {
        $badges = "";
        
    
        if(!empty($this->typologies->toArray())) {

            
            foreach ($this->typologies as $typology) {
                
                $badges .= "<span class='badge mx-1' style='background-color: {$typology->color}'>{$typology->name}</span>";
                
            }
            }else{
                $badges = "<span class='badge rounded-pill mx-1' style='background-color: grey'>Nessuna tipologia</span>";
            
            }
                
        return $badges;
}}