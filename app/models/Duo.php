<?php
class Duo extends Eloquent {

	public function users() 
    {
        return $this->belongsTo('User');
    }
}