<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test88Controller extends Controller
{
  /*  //分配视图方法一
    public function index1(){
        $name="张三";
        $age=28;


        return view('mylaravel')->with('name',$name)->with('age',$age);
    }
    //方法二

    public function  index2(){
        $data=[
            'name'=>'张三',
            'age'=>28
        ];
        return view('mylaravel',$data);
    }*/

    //方法三
    public  function  index3(){
        $data=[
            'name1'=>'张三',
            'age1'=>31
        ];
        //$title="陈老师正在讲解laravel课程";
        $str="<script>alert(1)</script>";
        return view('mylaravel',compact('data','title','str'));
    }

    //子模板

    public  function  zimoban(){

        return view('zimoban');
    }
    //子模板1

    public  function  zimoban1(){

        return view('zimoban1');
    }


    public function layouts(){
        return view('layouts');
    }
}


