<?php
class jayson_RAA_Listener {
	public static function Listen($class, array &$extend) {
		$extend[] = 'jayson_RAA_Extend_'.$class;
	}
}
