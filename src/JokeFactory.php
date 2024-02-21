<?php

namespace UniversoNarrado\BackpackPackage;
class JokeFactory
{
	private $jokes;

	public function __construct()
	{
		$this->jokes = [
			"If you spend too much time thinking about a thing, you'll never get it done.",
			"Why do we tell actors to 'break a leg?' Because every play has a cast.",
			"Helvetica and Times New Roman walk into a bar. 'Get out!' shouts the bartender. 'We don't serve your type here.'",
		];
	}

	public function getRandomJoke()
	{
		return $this->jokes[array_rand($this->jokes)];
	}
}