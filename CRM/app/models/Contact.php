<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 12/21/2015
 * Time: 6:08 PM
 */

class Contact extends Eloquent {

    protected $table = 'contact';
    protected $primaryKey = 'contact_id';

    public $timestamps = false;

    public function customer(){

        return $this->belongsTo('Customer');

    }
}