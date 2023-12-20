<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showProjects()
    {
        $projects = DB::table('projects')->get();

        return view('admindash', ['projects' => $projects]);
    }
    public function assignTable(Request $request, $projectId)
    {
        $request->validate([
            'selectedTable' => 'required|string',
        ]);

        $selectedTable = $request->input('selectedTable');

        // Update the 'table' field in the 'projects' table
        DB::table('projects')->where('proj_id', $projectId)->update(['table' => $selectedTable]);

        return redirect()->back()->with('success', 'Table assigned successfully');
    }

    use AuthorizesRequests, ValidatesRequests;
}
