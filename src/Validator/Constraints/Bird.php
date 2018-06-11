<?php 

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;


class Bird extends Constraint
{
	
	public $message = "Oiseau non valide !";
}