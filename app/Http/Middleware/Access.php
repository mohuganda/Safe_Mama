<?php

namespace App\Http\Middleware;

use App\Jobs\AccessLogJob;
use Closure;
use Illuminate\Http\Request;
//use Stevebauman\Location\Facades\Location;

class Access
{

    public function handle(Request $request, Closure $next)
    {
        //  /* Static IP address */
        // $visitorInfo = Location::get($ip);

        $ip = env('APP_DEBUG')?'41.210.143.17':$request->ip();
        $req_log = $request->all();

        unset($req_log->cover);
        unset($req_log->files);

         //AccessLogJob::dispatch($ip,$req_log);

        return $next($request);
    }
}
