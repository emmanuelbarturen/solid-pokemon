# Caso de uso para el principio Inversión de dependencias

## Baseline

Tenemos la información de los pokemones que vamos creando en una base de datos en duro porque hemos estado desarrollando
sólo de local, haciendo pruebas de concepto.

## Upgrade

Muchos otros developers se van a unir al desarrollo del metaverso porkemon por lo que necesitamos migrar la base de datos
a la nube y consumirla para tener la información de los pokemones siempre actualizada. 

## Ejemplos

- Ejemplo que viola el principio de inversión de dependencias.    
  `php solid dependency:pokedex-wrong`
- Ejemplo que aplica correctamente el principio inversión de dependencias.      
  `php solid dependency:pokedex-refactored`