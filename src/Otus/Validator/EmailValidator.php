<?php

namespace Otus\Validator;

class EmailValidator implements Api\ValidatorInterface
{
	private $email;

	public function __construct(string $email)
	{
		$this->email = $email;
	}

	public function validate(): bool
	{
		return filter_var($this->email, FILTER_VALIDATE_EMAIL);
	}

}
