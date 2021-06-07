<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\User;
use Illuminate\Support\Facades\Gate;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('viewAny',Bank::class);
        $bank=Bank::all();
        return view('admin.bank.index',compact('bank'));
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
        $this->validate($request,[
            "name"=>"required",
            "email"=>"required",
            "member"=>"required",
            "location"=>"required",
            "phone"=>"required",
            "image"=>"required",
            "password"=>"required"
        ]);
       $image=$request->image;
       $image_new_name=time().$image->getClientOriginalName();
       $image->move('uploads/bank/',$image_new_name);
        $bank=Bank::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "member"=>$request->member,
            "location"=>$request->location,
            "phone"=>$request->phone,
            "image"=>'uploads/bank/'.$image_new_name,
            "password"=>bcrypt($request->password)
        ]);
        return redirect()->back();
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
    public function addbank(Request $request,$id)
    {
        $bank=Bank::find($id);
        $user=User::where('email','=',$bank->email)->get();
        {
            if($user===null)
            {
                  $name=$bank->name;
        $email=$bank->email;
        $password=$bank->password;
        $user=new User();
        $user->name=$name;
        $user->email=$email;
        $user->password=$password;
        $user->role_id=3;
        $user->status=1;
        $user->save();

            }
            else{
                return redirect()->route('bank.index')->with('message','Bank is Already Listed');

            }
        }



    }
}
