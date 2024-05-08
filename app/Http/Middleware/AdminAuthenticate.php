<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// class AdminAuthenticate extends Middleware
// {

//     protected function redirectTo(Request $request): ?string
//     {
//         if (Auth::guard('admin')->check()) {
//             return redirect('admin.login');//login
//         }
//         return $request->expectsJson() ? null : route('admin.login');
//     }

//     protected function authenticate($request, array $guards)
//     {
//             if ($this->auth->guard('admin')->check()) {
//                 return $this->auth->shouldUse('admin');
//             }

//         $this->unauthenticated($request, ['admin']);
//     }
// }
class AdminAuthenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  array  $guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if ($this->auth->guard('admin')->check()) {
            return $next($request);
        }

        return redirect()->route('admin.login');
    }
}
