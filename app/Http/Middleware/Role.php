<?php

namespace App\Http\Middleware;

use App\Models\Login;
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
            case Login::ADMIN:
                return redirect('/dashboardadmin');
            case Login::KAKOMLI:
                return redirect('/dashboardkakomli');
            case Login::PEMBIMBING:
                return redirect('/dashboardpembimbing');
            case Login::SISWA:
                return redirect('/dashboardsiswa');
            default:
                return redirect('/login');
        }
    }
}
