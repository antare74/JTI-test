<?php

namespace App\Http\Controllers;

use App\Services\Socket;
use Faker\Generator;
use Illuminate\Http\Request;
use Illuminate\Container\Container;
use Pusher\Pusher as Pusher;

class InputController extends Controller
{
    public function index() {
        // $options = [
        //     'cluster' => env('PUSHER_APP_CLUSTER'),
        //     'useTLS' => false
        // ];
        // $pusher = new Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), $options);
        // dd($pusher->trigger('jti-channel', 'jti-event', ['message' => 'hello world']));
        // $faker = Container::getInstance()->make(Generator::class);

        // dd($faker->unique()->randomNumber(2));
        return view('pages.input');
    }
}
