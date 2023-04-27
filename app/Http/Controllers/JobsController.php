<?php

namespace App\Http\Controllers;

use App\Models\Jobs as Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function getAllJobs()
    {
        $jobs = Jobs::all()->toJson(JSON_PRETTY_PRINT);
        return response($jobs);
    }

    public function createJob(Request $request)
    {
        $jobs = new Jobs;
        $jobs->title = $request->title;
        $jobs->wage = $request->wage;
        $jobs->description = $request->description;
        $jobs->companie_id = $request->companie_id;
        $jobs->save();

        return response()->json([
            "message" => "job record created"
        ], 201);
    }

    public function getJob($id)
    {
        if(Jobs::where('id', $id)->exists()){
            $job = Jobs::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($job, 200);
          } else {
            return response()->json([
              "message" => "Job not found"
            ], 404);
        }
    }

    public function updateJob(Request $request, $id)
    {
        if (Jobs::where('id', $id)->exists()) {
            $student = Jobs::find($id);
            $student->title = is_null($request->title) ? $student->title : $request->title;
            $student->wage = is_null($request->wage) ? $student->wage : $request->wage;
            $student->description = is_null($request->description) ? $student->description : $request->description;
            $student->companie_id = is_null($request->companie_id) ? $student->companie_id : $request->companie_id;
            $student->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Jobs not found"
            ], 404);
        }
    }

   public function deleteJob($id)
    {
        if(Jobs::where('id', $id)->exists()){
            $job = Jobs::find($id);
            $job->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Job not found"
            ], 404);
        }
    }
}
