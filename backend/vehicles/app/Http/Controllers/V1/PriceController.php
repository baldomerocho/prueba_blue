<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Models\V1\Price;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Price::paginate();
        return response()->json($prices);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePriceRequest $request)
    {
        DB::beginTransaction();
        try {
            $price = Price::create($request->validated());
            DB::commit();
            return response()->json($price);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json([
                "message" => "Error creating price"
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        return response()->json($price);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriceRequest $request, Price $price)
    {
        DB::beginTransaction();
        try {
            $price->update($request->validated());
            DB::commit();
            return response()->json($price);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json([
                "message" => "Error updating price"
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        DB::beginTransaction();
        try {
            $price->delete();
            DB::commit();
            return response()->json([
                "message" => "Price deleted"
            ]);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json([
                "message" => "Error deleting price"
            ], 500);
        }
    }
}
