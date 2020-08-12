# Backend Developer Test

## Objetivo

El objetivo es valorar tu capacidad de comprensión y mejora de código que no has escrito tú.

El código de la carpeta `src` está mal estructurado pero tiene buena cobertura de tests,
deberás **refactorizarlo** para hacerlo más comprensible, mantenible y escalable. 

Todo esto, deberás hacerlo manteniendo los tests funcionando. Es posible que necesites iterarlos
llegado a cierto punto de la prueba, ya sea porque cambies algun nombre de clase o porque cambien 
parámetros de entrada. No hay ningúna limitación al respecto.

La única limitación es que la funcionalidad se mantenga igual. (Puedes modificar la forma en la que 
entran y salen los parámetros si consideras que eso mejora la comprensión)

La duración de la prueba debe ser inferior a las 3 horas.

## Como empezar

1. Hacer un repositorio nuevo utilizando el código de este (sin hacer un fork).
2. Hacer al menos un primer commit con el código original, para ver la hora de inicio.
3. Hacer commits individuales por cada refactor que se está haciendo. El último commit marca el final.

## Que valoramos

* Que los test sigan pasando después del refactor
* La utilización de Git
* Aplicación de patrones de diseño
* Estilo de código siguiendo el PSR
* Simplicidad de la solución
* Mejora en la API de las clases
* PHPStan reporta 0 errores en el nivel actual
* Psalm reporta 0 errores en el nivel actual 

## Bonus points

Si has cumplido todos los requisitos que valoramos, y te sobra tiempo puedes mejorar tu prueba
ampliando con estos nuevos requisitos (recomendamos seguir el orden definido):

* Incrementar el nivel de PHPStan
* Incrementar el nivel de Psalm
* Configurar PHP-cs-fixer
* Configuración de Github Actions para ejecutar PHPUnit, PHPStan, Psalm y PHP-cs-fixer
* Añadir un entorno local con Docker que permita ejecutar todas las herramientas de PHP
