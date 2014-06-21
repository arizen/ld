<?php

class ViewHelperController extends BaseController {

	public static function stringToOneByOneArray($string, $delimiter){
		$explodedString = explode($delimiter, $string);

		return $explodedString;
	}
}
