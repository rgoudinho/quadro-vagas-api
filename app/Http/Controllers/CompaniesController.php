<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function getAllCompanies()
    {
        $companie = Companies::all()->toJson(JSON_PRETTY_PRINT);
        return response($companie);
    }

    public function createCompanie(Request $request)
    {
        $companie = new Companies;
        $companie->name = $request->name;
        $companie->save();

        return response()->json([
            "message" => "companie record created"
        ], 201);
    }

    public function getCompanie($id)
    {
        if(Companies::where('id', $id)->exists()){
            $companie = Companies::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($companie, 200);
          } else {
            return response()->json([
              "message" => "Companie not found"
            ], 404);
        }
    }

    public function updateCompanie(Request $request, $id)
    {
        if (Companies::where('id', $id)->exists()) {
            $student = Companies::find($id);
            $student->name = is_null($request->name) ? $student->name : $request->name;
            $student->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Companie not found"
            ], 404);
        }
    }

    public function deleteCompanie($id)
    {
        if(Companies::where('id', $id)->exists()){
            $job = Companies::find($id);
            $job->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Companie not found"
            ], 404);
        }
    }
}
