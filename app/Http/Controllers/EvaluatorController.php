<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Project;

use Illuminate\Support\Facades\DB;

class EvaluatorController extends Controller
{

    public function showChoice()
    {
        $projects = DB::table('projects')->get();
    
        // get the 'keywords' column values from the collection
        $keywords = $projects->pluck('keywords');
    
        return view('evalchoice', ['projects' => $projects, 'keywords' => $keywords]);
    }

    public function showDash(Request $request)
    {
    $selectedKeywords = $request->input('keywords');

    $projects = Project::where(function($query) use ($selectedKeywords) {
        foreach ($selectedKeywords as $keyword) {
            $query->orWhere('keywords', 'LIKE', "%{$keyword}%");
        }
    })->get();

    return view('evaldash', ['projects' => $projects, 'selectedKeywords' => $selectedKeywords]);
    }

    public function assignScore(Request $request, $projectId)
    {


        $selectedScore = $request->input('selectedScore');

        // Update the 'table' field in the 'projects' table
        DB::table('projects')->where('proj_id', $projectId)->update(['score' => $selectedScore]);

        return redirect()->back()->with('success', 'Score assigned successfully');
    }
    // public function showDash(Request $request)
    // {
    //     $selectedKeywords = $request->input('keywords');

    //     return view('evaldash', ['selectedKeywords' => $selectedKeywords]);
    // }

    use AuthorizesRequests, ValidatesRequests;
}
