<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 2017/3/9
 * Time: 16:37
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model{

    public static function getMember(){
        return 'memeber name is m';
    }
}