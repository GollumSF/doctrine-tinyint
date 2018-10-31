# Doctrine TinyInt

An tinyint type for Doctrine MYSQL

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
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
