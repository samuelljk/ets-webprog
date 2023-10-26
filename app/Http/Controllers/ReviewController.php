<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function indexforHomepage(){
        return view('/homepage', [
            "reviews" => Review::all()
        ]);
    }

    // public function show(Post $post){
    //     return view('hotel-page', [
    //         "reviews" => Review::find($slug)
    //     ]);
    // }
}
