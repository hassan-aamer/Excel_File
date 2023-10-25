<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\UserExcel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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


    public function store(Request $request)
    {
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


    public function update(Request $request, $id)
    {
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
