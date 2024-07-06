<?php

namespace GollumSF\Doctrine;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class TinyInt extends Type
{
	public const TINYINT = 'tinyint';

	/**
	 * @inheritDoc
	 */
	public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
	{
		return 'TINYINT' . (!empty($column['unsigned']) ? ' UNSIGNED' : '') . ' COMMENT \'(DC2Type:tinyint)\'';
	}

	public function getName(): string
	{
		return self::TINYINT;
	}
}
