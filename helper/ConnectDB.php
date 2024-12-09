<?php

class ConnectDB
{
	private static $self;

	public static function makeConnection(): mysqli
	{
		if (empty(self::$self)) {
			self::$self = new mysqli(
				DB_HOST,
				DB_USERNAME,
				DB_PASSWORD,DB_NAME
			);
		}
		mysqli_set_charset(self::$self,'UTF8');
		return self::$self;
	}

	public static function notInjection($val): string
	{
		return self::$self->real_escape_string(trim($val));
	}
}