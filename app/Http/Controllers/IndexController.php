<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Model\User;

class IndexController extends Controller
{
    public function index(){
   //     $pdo=DB::connection()->getPdo();
        //    dd($pdo);
/*
        $users=DB::table('user')->where('user_id','>',1)->get();
        dd($users);*/

/*     $user=User::where('user_id','>',1)->get();*/
     $user=User::find(1);
     $user->user_name="wangwu";
     $user->update();//更新到数据库
     dd($user);
        return view('welcome');
    }
}
