# Enum

Simple classe, trait and interface for implement enum in PHP 

## Installation:

```shell
composer require gollumsf/doctrine-tinyint
```

## Configuration:

```yaml
doctrine:
    dbal:
        types:
            tinyint:  GollumSF\Doctrine\TinyInt
```


## Usage:


```php
use App\Entity;

/**
 * @ORM\Table()
 */
class Entity {
	
	/**
	 * @ORM\Column(type="tinyint")
	 * @var int
	 */
	private $tinyint;
	
	/////////
	// ... //
	/////////
	
}
```
