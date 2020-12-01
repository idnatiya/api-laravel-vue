<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\RequestLogs as RequestLogsModel; 
use Illuminate\Http\Request;

class RequestLogs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        RequestLogsModel::create([
            'router'    => substr($request->path(), 0, 255), 
            'method'    => $request->method(), 
            'body'      => json_encode($request->input())
        ]); 

        return $next($request);
    }
}
