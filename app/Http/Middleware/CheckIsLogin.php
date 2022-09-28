<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        dump("Отладочная информация : ".$user);
        if (Auth::check()) {
            // Пользователь вошёл в систему...
            $user = Auth::user();
            dump('пользователь в системе, перенаправление на окно просмотра данных...');
            sleep(7);
            return route('user');
        } else {
            //return redirect()->route('/login');
            dump('пользователь не в системе, перенаправление на окно входа...');
            sleep(7);
            return redirect('/login');
        }
    }
}
