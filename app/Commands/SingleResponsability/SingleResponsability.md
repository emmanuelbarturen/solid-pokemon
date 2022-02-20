# Caso de uso para el principio de responsabilidad única

## Baseline

Estamos programando el metaverso para pokémon y hemos empezado con crear la clase Pokémon. Esta clase inicialmente puede
instanciar a un pokémon, guardarlo en base de datos y generar un log de guardado.

## Upgrade

Necesitamos instanciar más de un tipo de pokémon por lo que necesitamos utilizar herencia para guardar diferentes
clases. mysqli está siendo un motor muy limitado por lo que se nos pide utilizar una base de datos más robusta como
mysql.

Los logs en consola ya no son útiles y necesitamos enviarlas a un archivo de texto.

## Ejemplos

- Ejemplo que viola el principio de responsabilidad única.   
  `php solid single-responsability:wrong-store-pokemon`
- Ejemplo que aplica correctamente el principio de responsabilidad única.   
  `php solid single-responsability:refactored-store-pokemon`