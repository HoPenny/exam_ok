<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function hello()
    {
        return 'Hello';
    }

    public function play($id){
        if($id == 1){
            return view('game1');
        }elseif($id == 2){
            return view('game2');
        }
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function gallery(){
        $images = [];
        $images[] = ['src' =>"https://metaschool.asia/storage/elements/PopularBackend.png", 'href' =>'https://source.unsplash.com/-gS54SWrHMg/2000x1000'];
        $images[] = ['src' =>"https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg", 'href' =>'https://source.unsplash.com/AU1rKyKPJco/1000x2000'];
        $images[] = ['src' =>"https://www.cdc.gov/healthypets/images/pets/cute-dog-headshot.jpg?_=42445", 'href' =>'https://source.unsplash.com/-gS54SWrHMg/2000x1000'];
        $images[] = ['src' =>"https://media.nature.com/lw767/magazine-assets/d41586-020-01430-5/d41586-020-01430-5_17977552.jpg", 'href' =>'https://source.unsplash.com/AU1rKyKPJco/1000x2000'];
        $images[] = ['src' =>"https://media.cnn.com/api/v1/images/stellar/prod/220818142713-dogs-tears-emotions-wellness-stock.jpg?c=original", 'href' =>'https://source.unsplash.com/-gS54SWrHMg/2000x1000'];
        $images[] = ['src' =>"https://ichef.bbci.co.uk/news/976/cpsprodpb/17638/production/_124800859_gettyimages-817514614.jpg", 'href' =>'https://source.unsplash.com/AU1rKyKPJco/1000x2000'];
        $images[] = ['src' =>"https://media-cldnry.s-nbcnews.com/image/upload/rockcms/2022-08/220805-border-collie-play-mn-1100-82d2f1.jpg", 'href' =>'https://source.unsplash.com/-gS54SWrHMg/2000x1000'];
        $images[] = ['src' =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb8-GiEdqmoads_1qmz2ZoT74L3xvkhyxGDg&usqp=CAU", 'href' =>'https://source.unsplash.com/AU1rKyKPJco/1000x2000'];
        $text = 'zack';
        $data = ['images' => $images , 'text' => $text];
        return view('gallery',$data);
    }

    public function demo(Request $request){
        return $request->all();
        //dd($request->y);
        //第一種
        //return view('test.demo')->with(['name'=>'品爵','age'=>'<b>18</b>']);
        //第二種
        // $data = [];
        // $data['name'] = '品爵';
        // $data['age'] = '<b>18</b>';
        // return view('test.demo',$data);
        //第三種
        $name = '品爵';
        $age = '<b>18</b>'; 
        $games = ['PS5','Nintentdo Switch','XBox'];
        $text = 'zack';
        return view('test.demo',compact('name','age','games','text'));

        

    }
}
