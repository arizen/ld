<?php
class Stat extends Eloquent {

	public function users() 
    {
        return $this->belongsTo('Summoner');
    }

    public function stats()
    {
        return $this->hasMany('Stat', 'summoner_id');
    }
}