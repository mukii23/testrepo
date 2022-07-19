<?php 


class firstclass{
	private static $app = null;

	private function __construct()
	{
	}

	public static function get()
	{
		if (!self::$app) {
			self::$app = new firstclass();
		}

		return self::$app;
	}

	public function bootstrap()
	{
		echo 'App is bootstrapping...';
	}
}
$app = firstclass::get();
$app->bootstrap();

// firstclass::bootstrap();


 ?> 

