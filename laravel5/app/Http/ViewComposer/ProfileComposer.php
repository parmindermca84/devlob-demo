<?php
namespace App\Http\ViewComposer;

use Illuminate\View\View;

class ProfileComposer
{
	public function compose(View $View)
	{
		$View->with('married', random_int(0, 1));
	}
}