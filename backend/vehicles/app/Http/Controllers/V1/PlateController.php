<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlateRequest;
use App\Http\Requests\UpdatePlateRequest;
use App\Models\V1\Plate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlateRequest $request)
    {
        $plate = Plate::create($request->validated());
        return response()->json($plate);
    }

    /**
     * Display the specified resource.
     */
    public function show($plate)
    {
        $search = Plate::where("plate", $plate)->first();
        if ($search) {
            return response()->json($search);
        } else {
            return response()->json([
                "message" => "Plate not found"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlateRequest $request, Plate $plate)
    {
        DB::beginTransaction();
        try {
            $plate->update($request->validated());
            DB::commit();
            return response()->json($plate);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json([
                "message" => "Error updating plate"
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plate $plate)
    {
        DB::beginTransaction();
        try {
            $plate->delete();
            DB::commit();
            return response()->json([
                "message" => "Plate deleted"
            ]);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json([
                "message" => "Error deleting plate"
            ], 500);
        }
    }
}
