<?php

namespace App\Presenters;

use Nette,
	App\Forms\SignFormFactory,
	App\Forms\TemplateControl;


/**
 * Sign in/out presenters.
 */
class Sign3Presenter extends BasePresenter
{
	/** @var SignFormFactory @inject */
	public $factory;


	/**
	 * Sign-in form factory.
	 * @return Nette\Application\UI\Form
	 */
	protected function createComponentSignInForm()
	{
		$form = $this->factory->create(function ($form) {
			$form->getPresenter()->redirect('Homepage:');
		});
		return new TemplateControl($form, __DIR__ . '/templates/components/form.latte');
	}

}
