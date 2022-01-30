# Principios S.O.L.I.D. explicado con Pokemón en PHP

Adaptación de los ejemplos de Jorge Méndez en su post [**De POO a SOLID explicado con
Pokémon.**](https://dev.to/konami12/de-poo-a-solid-explicado-con-pokemon-2bn5)

Proyecto creado con Laravel Zero. Ejecutable de este proyecto es `solid`. Las acciones disponibles de este proyecto
pueden verlos con el siguiente comando:

```bash
$ php solid
```

## Instalación

Instalar dependencias

```bash   
$ composer install
```

Correr migraciones

```bash
$ php solid migrate   
```


## Conclusiones
Como podemos ver cada uno de los principios de SOLID consigue un objetivo en concreto.

### Principio de Responsabilidad Única:
Su propósito es separar los comportamientos.

### Principio Abierto/Cerrado:
Su objetivo es ampliar el comportamiento de una clase sin modificar el comportamiento existente.

### Principio de Sustitución de Liskov:
**Su objetivo es aplicar coherencia entre clases.

### Principio de Segregación de la Interfaz:
**Su objetivo es dividir un conjunto de acciones en conjuntos más pequeños para ejecutar solo el conjunto de acciones que se requieren.

### Principio de inversiones Dependencias:
**Su objetivo es reducir la dependencia de una clase de alto nivel en la clase de bajo nivel mediante la introducción de una interfaz.
