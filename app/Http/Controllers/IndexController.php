<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Personaje;
use Carbon\Carbon;

class IndexController extends Controller
{
    /**
     * Muestra la vista Index con cartas 4* aleatorias y cumpleaños.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cumples = Personaje::cumples()->toJson();
        $cartas = Carta::where('rareza', 4)->inRandomOrder()->limit(3)->get();

        return view('index', [
            'cumples' => $cumples,
            'cartas' => $cartas,
        ]);
    }

    /**
     * Convierte los cumpleaños de los personajes en fechas de eventos del calendario.
     */
    public function mostrarCumples()
    {
        $cumples = Personaje::cumples();
        $events = [];

        foreach ($cumples as $cumple) {
            $event = [
                'title' => explode(' ', $cumple->nombre)[0],
                'start' => Carbon::createFromFormat('d-m', $cumple->respuesta)->setYear(Carbon::now()->year),
                'allDay' => true,
                'textColor' => 'black',
                'classNames' => [
                    'fc-cumple-' . strtolower(explode(' ', $cumple->nombre)[0]),
                    'fc-negro',
                    'fc-centro'
                ],
            ];
            if ($cumples->where('respuesta', $cumple->respuesta)->count() == 1) {
                 $event['display'] = 'background';
            }

            $events[] = $event;

        }

        return response()->json($events);
    }
}
