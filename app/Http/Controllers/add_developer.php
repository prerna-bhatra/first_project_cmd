<?php

namespace App\Http\Controllers;
use App\add_dev;
use Illuminate\Http\Request;

class add_developer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.add_developer_form');
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
        //
       $input=$request->all();
       
        if($file=$request->file('file'))
        {
            $file=$request->file('file');
            $name=$file->getClientOriginalName();
            $path = $request->photo->storeAs('images', $name);
            
           /* $file->move('public/images',$name);
            $input['img_dev']=$name;*/
        }
         add_dev::create($input);
         //return redirect('/'); 
        /* if ($input=='TRUE')
        {
            
        }*/
        echo "<script>
            window.location.href='/adddev';
            alert('Data Submited');
            </script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
