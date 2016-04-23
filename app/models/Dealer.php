<?php

class Dealer extends Eloquent{
  protected $table = 'dealerRecords';
  
  
  public function rating(){
    
    
       return $this->hasMany('Rating');
    
  }
  
}