<?php namespace App\Providers;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->app->rebinding('request', function ($app, Request $request)
        {
		    $this->detectLocale($request);
        });
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

    /**
     * @param Request $request
     */
    protected function detectLocale(Request $request)
    {
        /** @var Repository $config */
        $config = $this->app->make('config');

        if ( ! $config->get('app.auto_locale', true)) return;

        $locales = $config->get('app.locales');
        $languages = $request->getLanguages();

        foreach ($languages as $lang)
        {
            if (in_array($lang, $locales))
            {
                $this->app->setLocale($lang);

                break;
            }
        }
    }
}
