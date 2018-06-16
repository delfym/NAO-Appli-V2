<?php 

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class MailExist extends Constraint
{

	public $message = "Cette adresse mail n'est associée à aucun compte";
}