<?php declare(strict_types=1);

namespace Forrest79\SimpleTranslator\Tests;

use Nette\Application;

class HomepagePresenter implements Application\IPresenter
{
	public Application\Request $request;


	public function run(Application\Request $request): Application\IResponse
	{
		$this->request = $request;
		return new Application\Responses\TextResponse('');
	}

}
