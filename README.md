# Doctrine TinyInt

A tinyint type for Doctrine MYSQL

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
use GollumSF\Doctrine\TinyInt;

#[ORM\Entity]
#[ORM\Table(name: 'entities')]
class Entity {
	
	#[Column(name: 'tinyint', type: TinyInt::TINYINT)]
	private int $tinyint;
	
	/////////
	// ... //
	/////////
	
}
```
