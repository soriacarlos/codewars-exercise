# Ejercicios PHP CodeWars

---

![](https://badgen.net/badge/Proyecto/Practice/purple)
![](https://badgen.net/badge/PHP/+8.3/blue)
![](https://badgen.net/badge/PHPUnit/12.0.7/red)

![](https://badgen.net/badge/Versión/1.0.0/black)

---

<!-- TOC -->
* [Ejercicios PHP CodeWars](#ejercicios-php-codewars)
  * [Instalación](#instalación)
    * [Instalar dependencias](#instalar-dependencias)
    * [Verificar funcionamiento](#verificar-funcionamiento)
  * [Tests (PHPUnit)](#tests-phpunit)
<!-- TOC -->

---
## Instalación
Iniciar contenedor

```shell
make build
```
```shell
make up
```

### Instalar dependencias
```shell
make composer CMD="install"
```

---
### Verificar funcionamiento
Para verificar que esté iniciado todo correctamente, debería de ver la versión de php (phpinfo) en la siguiente url:
```text
http://localhost:8000/
```

---
## Tests (PHPUnit)
Este proyecto cuenta con PHPUnit para correr los Tests.

Ejecutar comando:
```shell
make phpunit
```
o dentro del contenedor
```text
root@08edd989b14c:/var/www/html# phpunit src/tests
```