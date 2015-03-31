<?php namespace Uninett\Filters;

use Illuminate\Routing\Route;
use Illuminate\Http\Request;
Use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class CacheFilter {

	public function fetch(Route $route, Request $request){
		Log::debug('Fetching view from cache');

		$key = $this->makeCacheKey($request->url());

		if(Cache::has($key)) return Cache::get($key);

	}
	public function put(Route $route, Request $request, Response $response){

		Log::debug('Putting view into cache');

		$key = $this->makeCacheKey($request->url());

		if(!Cache::has($key)) return Cache::put($key, $response->getContent(), Config::get('uninett.cache_time'));
	}

	protected function makeCacheKey($url){
		return 'route_' . Str::slug($url);

	}
}