<?php

namespace Epigra\LaravelLocalize;

use Closure;
use Carbon\Carbon;
use Session;
use App;

class LocaleMiddleware
{
    protected $languages;

    public function __construct()
    {
        $this->languages = config('app.locales');
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!Session::has('locale')) {
            Session::put('locale', $request->getPreferredLanguage($this->languages));
        }

        App::setLocale(session()->get('locale'));
        Carbon::setLocale(session()->get('locale'));

        return $next($request);
    }
}
