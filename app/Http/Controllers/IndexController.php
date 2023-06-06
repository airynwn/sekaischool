<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Carbon\Carbon;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cumples = Personaje::cumples()->toJson();

        return view('index', [
            'cumples' => $cumples,
        ]);
    }

    public function mostrarCumples()
    {
        $cumples = Personaje::cumples();
        $events = [];

        foreach ($cumples as $cumple) {
            $event = [
                'title' => 'Cumpleaños de ' . explode(' ', $cumple->nombre)[0],
                'start' => Carbon::createFromFormat('d-m', $cumple->respuesta),
                'allDay' => true,
                'classNames' => strtolower(explode(' ', $cumple->nombre)[0]),
                'textColor' => 'black',
            ];

            $events[] = $event;

        }

        return response()->json($events);
    }
}
