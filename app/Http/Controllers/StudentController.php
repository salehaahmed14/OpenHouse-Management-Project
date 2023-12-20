<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addProject(Request $request){
        return view('projectform');
    }

    //store listing
    public function storeProject(Request $request){
        $formFields = $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'keywords' => 'required'
        ]);

        Project::create($formFields);

        return redirect('studentdash/' . $formFields['user_id'])->with('message', 'Project Uploaded Successfully!');

    }

    //success
    public function displayProject(Request $request, $user_id)
    {
        // Fetch all projects with the specified user_id
        $projects = Project::where('user_id', $user_id)->get();

        return view('showStudentProject', compact('projects', 'user_id'));
    }
}
