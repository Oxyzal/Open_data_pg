# Open_data_pg
## Explaination
This is a project where i take the data of the agents of valorant. 

## Install

## Usage
```bash
use Oxyzal\OpenDataPg\Api;

require_once __DIR__ . '/../vendor/autoload.php';

$api = new Api();

var_dump($api->getAbilitiesAgent()); //or getNameAgent
```

Name of agent : neon / kayo / breach ...
## Local Devolpement


```bash    
    composer install
```
Test unit :
```bash
    composer test
```

Test with phpstan
```bash    
    composer phpstan 
```
