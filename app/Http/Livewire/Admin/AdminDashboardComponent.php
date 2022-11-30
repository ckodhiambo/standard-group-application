<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.school-admin-dashboard');
    }

    public function addStudent(Request $request){
        $request->session()
            ->reflash();

        $name = $request->input('name');
        $stream_name = $request->input('stream_name');
        $email = $request->input('email');
        $password = Hash::make('12345678');

        $student = new User([
            'name' => $name,
            'stream_name' => $stream_name,
            'email' => $email,
            'password' => $password
        ]);

        //Saving Student Photo
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $ext = $file->getClientOriginalExtension();
            //Current time and file extension
            $filename = time() . '.' . $ext;
            $file->move('attachment', $filename);
            $student->attachment = $filename;
        }
        $student->stream()->associate($student);
        $student->save();

        return back();
    }
}
