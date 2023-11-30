<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\V1\Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity = Activity::paginate(10);
        return response()->json($activity, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityRequest $request)
    {
        DB::beginTransaction();
        try {
            if($request->type == 'out'){
                $inActivity = Activity::where('id', $request->activity_related)->where('type', 'in')->where('status', 'in_progress')->firstOrFail();
                if($inActivity->plate != $request->plate){
                    return response()->json([
                        'message' => 'Plate does not match'
                    ], 400);
                }
            }
            $activity = Activity::create($request->validated());
            DB::commit();
            return response()->json($activity, 201);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            DB::rollBack();
            return response()->json([
                'message' => 'Something went wrong'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        //
    }

    public function setStatus($plate)
    {
        $activity = Activity::where('plate', $plate)
            ->where('status', 'in_progress')
            ->where('type', 'out')
            ->firstOrFail();
        $activity->status = 'finished';
        $activity->save();
        return response()->json($activity, 200);
    }
}
