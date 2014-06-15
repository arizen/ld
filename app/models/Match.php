<?php
class Match extends Eloquent {

	public function users() 
    {
        return $this->belongsTo('Summoner');
    }

}