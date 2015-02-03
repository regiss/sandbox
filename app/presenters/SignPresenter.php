<?php

namespace App\Presenters;

use Nette,
	App\Forms\SignFormFactory;


/**
 * Sign in/out presenters.
 */
class SignPresenter extends BasePresenter
{
	/** @var SignFormFactory @inject */
	public $factory;


	/**
	 * Sign-in form factory.
	 * @return Nette\Application\UI\Form
	 */
	protected function createComponentSignInForm()
	{
		return $this->factory->create(function ($form) {
			$form->getPresenter()->redirect('Homepage:');
		});
	}


	public function actionOut()
	{
		$this->getUser()->logout();
		$this->flashMessage('You have been signed out.');
		$this->redirect('in');
	}

}
