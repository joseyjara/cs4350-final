<?php

class Dealer extends Eloquent{
  protected $table = 'dealerRecords';
  protected $primaryKey = "Dealer_Key";
  
  public function rating(){
    
    
       return $this->hasMany('Rating');
    
  }
  
}