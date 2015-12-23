<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 12/21/2015
 * Time: 6:02 PM
 */

class Activity extends Eloquent {

    protected $table = 'activity';
    protected $primaryKey = 'activity_id';

    public $timestamps = false;

    public function customer(){

        return $this->belongsTo('Customer');
    }


}