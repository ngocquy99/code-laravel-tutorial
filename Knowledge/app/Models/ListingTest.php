<?php 
namespace App\Models;
class ListingTest {
    public static function all() {
        return [
        [
            'id'=> 1,
            'title '=> 'listing 1',
            'description ' => 'mieu ta so mot' 
        ] ];
    }

    public static function find($id){
        $listingTest = self::all();

        foreach($listingTest as $listingg){
            if($listingg['id']==$id)
            return$listingg;
        }
    }
}