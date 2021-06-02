<?php

namespace App\Http\Middleware;

use App\Models\Vendor;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckVendor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        $uri = $request->path();

        if(str_contains($uri, 'logout'))
            return $next($request);

        $user = Auth::user();

        $vendor = Vendor::where('UserId', $user->id)->first();

        $redirect = '';




        if (str_contains($uri, 'admin/mobile'))
        {
            $redirect = '/admin/mobile/profile';

        }

        if (str_contains($uri, 'admin'))
        {
            $redirect = '/admin/profile';
        }


        if($user->type != 1 && !isset($vendor) && !str_contains($uri, 'admin/profile'))
        {

            return redirect($redirect);
        }

        return $next($request);
    }
}
