<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabourContractor;

class registercontroller extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $posts = LabourContractor::all();
    
            return response()->json([
                'status' => true,
                'posts' => $posts
            ]);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $post = LabourContractor::create($request->all());
    
            return response()->json([
                'status' => true,
                'message' => "Post Created successfully!",
                'post' => $post
            ], 200);
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Post  $post
         * @return \Illuminate\Http\Response
         */
        public function show(LabourContractor $post)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Post  $post
         * @return \Illuminate\Http\Response
         */
        public function edit(LabourContractor $post)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Post  $post
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request )
        {
            $input= $request->all();
            $obj = LabourContractor::find($input['id']);

        $obj->contractor_name = $input['contractor_name'];
        $obj->GST = $input['GST'];
        $obj->pan_number = $input['pan_number'];
        $obj->mobile_number = $input['mobile_number'];
        $obj->address = $input['address'];
        $obj->save();
          return response()->json([
                'status' => true,
                'message' => "Post Updated successfully!",
                'post' => $obj
            ], 200);
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Post  $post
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            // $id=$request->input('id');
            // $obj = LabourContractor::find($id);
            // $obj->delete();
            LabourContractor::destroy($id);
            
    
            return response()->json([
                'status' => true,
                'message' => "Post Deleted successfully!",
            ], 200);
        }
    }

