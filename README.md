# Objetivo
Criado para facilitar o Crud com banco MYSQL

# Requisitos
PHP: Versão 7 ou acima | oizumi-junho\conn-php: Qualquer versão

# Configuração do arquivo composer.json

```

    "require": {
        "oizumi-junho\conn-php": "*.*.*",
        "php": ">=7.0"
    }

```

# Configuração do config.php

```

<?php

define("BDHost", "localhost");
define("BDUsername", "root");
define("BDPassword", "");
define("BDDatabase", "api");

```

# Exemplos de uso

```

<?php

require __DIR__ . '/vendor/autoload.php';

use OizumiJunho\Conn\Create;
use OizumiJunho\Conn\Delete;
use OizumiJunho\Conn\Read;
use OizumiJunho\Conn\Update;

$query = "delete from usuarios";

var_dump(Delete::ExeDelete($query));

$query = "insert into usuarios (email, password, ativo) values ('teste', 'teste', 'sim')";

var_dump(Create::ExeCreate($query));

$query = "update usuarios set email = 'teste@teste1.com.br where id = 1'";

var_dump(Update::ExeUpdate($query));

$query = "select * from usuarios";

var_dump(Read::ExeRead($query));

```