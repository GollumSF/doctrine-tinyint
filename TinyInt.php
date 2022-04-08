<?php

namespace GollumSF\Doctrine;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class TinyInt extends Type {
	const TINYINT = 'tinyint';
	
	/**
	 * @param array $fieldDeclaration
	 * @param AbstractPlatform $platform
	 * @return string
	 */
	public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform) {
		return 'TINYINT' . ( ! empty($fieldDeclaration['unsigned']) ? ' UNSIGNED' : '');
	}
	
	/**
	 * @return string
	 */
	public function getName() {
		return self::TINYINT;
	}
}
