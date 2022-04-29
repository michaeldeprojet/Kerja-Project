<?php

namespace App\Http\Middleware;

use App\Models\Login;
use App\Models\User;
use App\Models\DataAkunSiswa;
use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(in_array($request->user()->role,$roles)){
            return $next($request);
        }

        switch($request->user()->role) {
            case User::ADMIN:
                return redirect('/dashboardadmin');
            case User::KAKOMLI:
                return redirect('/dashboardkakomli');
            case User::PEMBIMBING:
                return redirect('/dashboardpembimbing');
            case User::SISWA:
                return redirect('/dashboardsiswa');
            default:
                return redirect('/login');
        }
    }
}
