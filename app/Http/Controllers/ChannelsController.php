<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Channel;
use Illuminate\Support\Facades\DB;

class ChannelsController extends Controller
{
    public function index(){
        $channels = Channel::all();
        return view("index", compact("channels"));
    }
    // public function create(){
    //     return view("create");
    // }
    // public function store(Request $request){

    //     Channel::create($request->post());
    //     return redirect()->route('channel.index')->with('success','Channel has been created successfully.');

    // }
    // public function show(string $id){
    //     $channel = DB::selectOne("SELECT * FROM channels WHERE ChannelID = ?", [$id]);
    //     return view("post", compact('channel'));
    // }
    // public function edit(string $id){
    //     $channel = DB::selectOne("SELECT * FROM channels WHERE ChannelID = ?", [$id]);
    //     return view("edit", compact('channel'));
    // }
   
}
