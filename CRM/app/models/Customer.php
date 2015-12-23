<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 12/21/2015
 * Time: 5:21 PM
 */



class Customer extends Eloquent{

    protected $table = 'customer';
    protected $primaryKey = 'c_id';

    public $timestamps = false;


    public function activities(){

        return $this->hasMany('Activity','cutomer_id', 'c_id');

    }

    public function contacts(){

        return $this->hasMany('Contact','customer_id' , 'c_id');
    }
}