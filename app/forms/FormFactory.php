<?php

namespace App\Forms;

use Nette,
	Nette\Application\UI\Form;


class FormFactory extends Nette\Object
{

	/**
	 * @return Form
	 */
	public function create()
	{
		$form = new Form;
		//$form->setTranslator(...);
		//$form->setRenderer(...);
		return $form;
	}

}
