<?php
class Summoner extends Eloquent {

	public function users() 
    {
        return $this->belongsTo('User');
    }

    public function stats()
    {
        return $this->hasMany('Stat', 'summoner_id');
    }

     public function matches()
    {
        return $this->hasMany('Match');
    }
}