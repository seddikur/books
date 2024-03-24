<?php

return [

    'class' => yii\db\Connection::class,
//    'dsn' => 'pgsql:host=localhost;port=15013;dbname=pgdb',
    'dsn' => 'pgsql:host=books-pg13-1;port=5432;dbname=pgdb',
    'username' => 'pgdev',
    'password' => 'pgdev',
    'charset' => 'utf8',
//    'enableSchemaCache' => true,
//    'enableQueryCache' => false,
//    'schemaCacheDuration' => 3600,
//    'schemaCache' => 'cache',


//    'class' => 'yii\db\Connection',
//    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
//    'username' => 'root',
//    'password' => '',
//    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
