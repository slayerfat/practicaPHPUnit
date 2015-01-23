# practicaPHPUnit
practicas de unit test en php

__practica completa.__

- se aprendio:
    - Unit test ultra basico.
    - namespaces y autoloader.
    - metodologia MVC ultra basico.
    - composer.
- sin embargo, por falta de informacion y por la pretension de usar Laravel como framework de php se decidio parar esta practica.

# dependecias necesarias

####primero que todo es necesario tener **php en el sistema.**

###node
para usar este repositorio es necesario tener instalado en el sistema [node.js](http://nodejs.org/)
chequear que node esta instalado `node -v` el sistema dira `v0.10.*` luego chequear que npm _(node package manager)_ este en el sistema `npm -v`

###composer
tambien es necesario instalar [composer](https://getcomposer.org/)

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

- si falla pueden `sudo !!`
- chequear que este instalado `composer -V` el sistema dira 

si falla porque no tienen curl
```
php -r "readfile('https://getcomposer.org/installer');" | php
mv composer.phar /usr/local/bin/composer
```

- chequear que este instalado `composer -V` el sistema dira 
`Composer version 1.0.-* (...) fecha`

###grunt

`npm install -g grunt-cli`

###bower

`npm install -g bower`

###clonar este repositorio
`git clone https://github.com/slayerfat/practicaPHPUnit`

###obtener las dependecias del sistema
_desde la carpeta clonada_ 

`npm install`

`bower install`

`composer install`

eso debera generar las carpetas vendor/ node_modules/ y bower_components/

#estructura del sistema
```
.
├── app
│   ├── php
│   │   ├── controladores
│   │   ├── core
│   │   ├── modelos
│   │   └── vistas
│   │       ├── calculadora
│   │       ├── home
│   │       └── ...
│   └── public
├── node_modules
│   └── ...
├── bower_components
│   └── ...
├── tests
│   └── php
│       ├── controladores
│       └── modelos
└── vendor
    ├── bin
    ├── composer
    ├── ...
    └── autoload.php
```
## practica de MVC

se decidio tambien practicar MVC gracias a 
  [este playlist](https://www.youtube.com/playlist?list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD)

## practica de phpunit
se decidio usar este tutorial como guia practica:
  [enlace del asunto](https://www.youtube.com/watch?v=84j61_aI0q8)
