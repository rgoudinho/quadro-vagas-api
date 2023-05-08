<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function getAllCompanies()
    {
        $company = Companies::all()->toJson(JSON_PRETTY_PRINT);
        return response($company);
    }

    public function createCompany(Request $request)
    {
        $company = new Companies;
        $company->name = $request->name;
        $company->save();

        return response()->json([
            "message" => "company record created"
        ], 201);
    }

    public function getCompany($id)
    {
        if(Companies::where('id', $id)->exists()){
            $company = Companies::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($company, 200);
          } else {
            return response()->json([
              "message" => "Company not found"
            ], 404);
        }
    }

    public function updateCompany(Request $request, $id)
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
                "message" => "Company not found"
            ], 404);
        }
    }

    public function deleteCompany($id)
    {
        if(Companies::where('id', $id)->exists()){
            $job = Companies::find($id);
            $job->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Company not found"
            ], 404);
        }
    }
}
