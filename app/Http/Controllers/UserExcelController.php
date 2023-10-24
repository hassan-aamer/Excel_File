<?php

namespace App\Http\Controllers;

use App\Models\UserExcel;
use Illuminate\Http\Request;

class UserExcelController extends Controller
{

    public function index()
    {
        $users = UserExcel::all();
        return view('Pages.index',compact('users'));
    }


    public function create()
    {
        return view('Pages.create');
    }


    public function store(Request $request)
    {
        UserExcel::create(
            $request->all()
        );
        return view('Pages.create');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $Users = UserExcel::where('id',$id)->first();
        return view('Pages.edit',compact('Users'));
    }


    public function update(Request $request, $id)
    {
        $Users = UserExcel::findorFail($id);
        $Users->update(
            $request->all()
        );
        return view('Pages.index');
    }


    public function destroy($id)
    {
        UserExcel::findorFail($id)->delete();
        return back();
    }
}
