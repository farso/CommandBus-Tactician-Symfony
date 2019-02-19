<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/18/19
 * Time: 10:27 AM
 */

namespace App\Users\Domain\Entities\Traits;


trait ToArray
{
    public function toArray() {
        $vars = get_object_vars ( $this );
        $array = array ();
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value;
        }
        return $array;
    }
}