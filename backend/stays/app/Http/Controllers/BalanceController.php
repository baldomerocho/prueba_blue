<?php

namespace App\Http\Controllers;

use App\Helpers\GetPrices;
use App\Models\V1\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BalanceController extends Controller
{
    public function diff($plate){

        $entrada = Activity::where('plate', $plate)
            ->where('type', 'in')
            ->where('status', 'in_progress')
            ->orderBy('created_at', 'desc')
            ->first();

        $salida = Activity::where('plate', $plate)
            ->where('type', 'out')
            ->where('status', 'in_progress')
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$entrada || !$salida) {
            return response()->json(['message' => 'Not found activity'], 404);
        }

        $horaEntrada = Carbon::parse($entrada->created_at);
        $horaSalida = Carbon::parse($salida->created_at);

        $diferenciaEnMinutos = $horaEntrada->diffInMinutes($horaSalida);

        $price = GetPrices::perPlate($plate);

        $subTotal = $price * $diferenciaEnMinutos;
        return response()->json(
            [
                'subtotal' => $subTotal,
                'plate' => $plate,
                'minutes' => $diferenciaEnMinutos,
            ]
        );
    }
}
