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
                'title' => explode(' ', $cumple->nombre)[0],
                'start' => Carbon::createFromFormat('d-m', $cumple->respuesta),
                'allDay' => true,
                'classNames' => [
                    'fc-cumple-' . strtolower(explode(' ', $cumple->nombre)[0]),
                    'fc-negro',
                    'fc-centro'
                ],
                'display' => 'background',
            ];

            $events[] = $event;

        }

        return response()->json($events);
    }
}
