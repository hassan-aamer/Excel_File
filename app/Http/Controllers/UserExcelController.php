<?php

namespace App\Http\Controllers;

use App\Models\UserExcel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\UserExcelRequest;

class UserExcelController extends Controller
{

    public function index()
    {
        $users = UserExcel::all();
        return view('Pages.index', compact('users'));
    }


    public function create()
    {
        return view('Pages.create');
    }


    public function store(UserExcelRequest $request)
    {
        $validated = $request->validated();
        try {
            UserExcel::create(
                $request->all()
            );
            session()->flash('Add', 'تم اضافة المستخدم بنجاح');
            return view('Pages.create');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', $e->getMessage());
        }
    }



    public function edit($id)
    {
        $Users = UserExcel::where('id', $id)->first();
        return view('Pages.edit', compact('Users'));
    }


    public function update(UserExcelRequest $request, $id)
    {
        $validated = $request->validated();
        try {
            $Users = UserExcel::findorFail($id);
            $Users->update(
                $request->all()
            );
            session()->flash('Add', 'تم تعديل المستخدم بنجاح');
            return view('Pages.edit');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', $e->getMessage());
        }
    }


    public function destroy($id)
    {
        UserExcel::findorFail($id)->delete();
        session()->flash('Add', 'تم حدف المستخدم بنجاح');
        return redirect()->route('userExcel.index');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));
        session()->flash('Add', 'تم رفع الملف بنجاح');
        return back();
    }
}
