<?php namespace App\Http\Controllers;

use Cache;
use Parsedown;

class HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $content = $this->getContent();

		return view('welcome', compact('content'));
	}

    /**
     * @return string
     */
    private function getContent()
    {
        return Cache::get('content', function ()
        {
            return Parsedown::instance()->text(file_get_contents(base_path('vendor/kalnoy/cruddy/README.md')));
        });
    }
}
