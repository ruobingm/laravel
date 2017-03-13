<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function info($id){
//        return route('memberinfo');

//        return 'id_is:'.$id ;

//        return view('Member/info',[
//            'name'=>'M',
//            'age'=>18
//        ]);
        //return Member::getMember();

        //查询 sql
//        $result = DB::select('select * from yali_admin where uid =?',[3]);
//        dd($result);exit;

        //插入
//        $bool = DB::insert('insert into yali_admin(username,pwd_key,password) value (?,?,md5(?))',['mmmssss','dsjdhd','123456']);
//        print_r($bool);

        //更新
//        $num  = DB::update('update yali_admin set username =?,pwd_key=? where uid=?',['mmm44m3332','pwdkey',617]);
//        dd($num);

        //删除
//        $number = DB::delete('delete from yali_admin where uid = ?',[617]);
//        dd($number);

        //添加 构造函数
//        $bool = DB::table('admin')->insert([
//            ['username'=>'abc123','pwd_key'=>'dfdfg7','password'=>md5('abc123')],
//            ['username'=>'abc456','pwd_key'=>'23ddg7','password'=>md5('abc456')],
//        ]);
//        var_dump($bool);exit;

        //更新 构造函数
//        $num = DB::table('admin')->where(['username'=>'abc123'])->update(['pwd_key'=>'1111dd']);
//        var_dump($num);exit;

        //自增
            //add_uid自增1 默认
//        $num = DB::table('admin')->where(['username'=>'abc123'])->increment('add_uid');
            //add_uid自增5
//        $num = DB::table('admin')->where(['username'=>'abc123'])->increment('add_uid',5);
//        var_dump($num);

        //自减
            //add_uid自减1 默认
//        $num = DB::table('admin')->where(['username'=>'abc123'])->decrement('add_uid');
            //add_uid自减5
//        $num = DB::table('admin')->where(['username'=>'abc123'])->decrement('add_uid',5);
//        var_dump($num);

        //删除 构造函数
//        $num = DB::table('admin')->where(['username'=>'abc123'])->delete();
//        var_dump($num);exit;

        //查询 构造函数  first(单条记录 理解为tp的find)      orderBy('字段'，'排序方式')
//        $first = DB::table('admin')->where('uid','>',600)->orderBy('addtime','desc')->first();
//        dd($first);exit;

        //查询 get构造函数 类似于tp的select  where('字段','条件','数值')  单条件查询
//        $arr = DB::table('admin')->where('uid','>=',600)->get();
//        dd($arr);exit;

        //查询  get构造函数  whereRaw("条件，参数用？",[参数1，参数2])  多条件查询  如下例子 uid大于等于600 且 status等于0
//        $arr = DB::table('admin')->whereRaw('uid>=? and status=?',[600,0])->get();
//        dd($arr);exit;

        //查询 pluck构造函数  查询某字段结果集  一维！
//        $username = DB::table('admin')->pluck('username');
//        dd($username);exit;

        //查询 lists构造函数  查询某字段结果集  一维！跟pluck的区别 可以用指定的字段来做为下标值  下例子用uid来做下标值
//        $username = DB::table('admin')->lists('username','uid');
//        dd($username);exit;

        //查询 select  类似于tp的field 指定字段作用
//        $arr = DB::table('admin')->select('uid','username','password')->get();
//        dd($arr);exit;

        //查询 chunk  类似tp 分页查询  可带闭包进行判断
//        DB::table('admin')->where('uid','>=',600)->chunk(3,function($arr){
            //每次输出3条
//            var_dump($arr);
//            foreach($arr as $k=>$v){
//                var_dump($v->uid);
//            }
            //符合条件再查询3条
//            if($arr->uid>600){
//                var_dump($arr);
//            }
//        });

        //查询构造器中的聚合函数  count() 、max('字段')、min('字段')、avg('字段')平均值、sum('字段') 之和
//        $num = DB::table('admin')->count();

//        $num = DB::table('admin')->max('addtime');

//        $num = DB::table('admin')->min('addtime');

//        $num = DB::table('admin')->avg('addtime');

//        $num = DB::table('admin')->sum('addtime');
//        dd($num);exit;

        //eloquent ORM模型find() all()

    }
}
