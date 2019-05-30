<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Cart::count();

        $id = $request->id;

        $rs = Cart::where('id','like','%'.$id.'%')->paginate(5);

        return view('admin.cart.index',['rs'=>$rs,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rs = $request->except('_token');

        if($request->hasFile('url'))
        {
            $file = $request->file('url');

            $suffix = $file->getClientOriginalExtension();

            $name = 'img_'.rand(1111,9999).time();

            $file->move('./uploads',$name.'.'.$suffix);

            $rs['url'] = '/uploads/'.$name.'.'.$suffix;

        }

        $data = Cart::create($rs);
        if($data)
        {
            echo "<script>alert('添加成功');parent.location.reload();</script>";
        }else
        {
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $rs = Cart::where('id',$id)->delete();
        if($rs)
        {
            echo 1;
        }else{
            echo 2;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rs = Cart::find($id);
        return view('admin.cart.edit',['rs'=>$rs]);
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
        $fn = Cart::where('id',$id)->first();

        // unlink('.'.$fn->url);

        $rs = $request->except('_token','_method');

        if($request->hasFile('url'))
        {
            $file = $request->file('url');

            $name = 'img_'.rand(1111,9999).time();

            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads',$name.'.'.$suffix);

            $rs['url'] = '/uploads/'.$name.'.'.$suffix;

        }

        $data = Cart::where('id',$id)->update($rs);

        if($data)
        {
            echo "<script>alert('修改成功');parent.location.reload();</script>";
        }else
        {
            return back();
        }
        
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
