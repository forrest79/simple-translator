<?php declare(strict_types=1);

namespace Forrest79\SimpleTranslator;

use Forrest79\SimpleTranslator;
use Nette\Application;

class RequestResolver
{
	private string $parameter;

	private SimpleTranslator\Translator $translator;


	public function __construct(string $parameter, SimpleTranslator\Translator $translator)
	{
		$this->parameter = $parameter;
		$this->translator = $translator;
	}


	/**
	 * @throws Exceptions\BadLocaleNameException
	 */
	public function onRequest(Application\Application $application, Application\Request $request): void
	{
		$locale = $request->getParameter($this->parameter);
		if ($locale !== NULL) {
			assert(is_string($locale));
			$this->translator->setLocale($locale);
		}
	}

}
