# Práctica Evaluable I: Diseño del sitio web de una red social

## Introducción
En este documento se tratará de explicar el porque de las decisiones tomadas sobre la maquetación de la página web y otras cuestiones de implementación con las etiquetas de HTML 5 y opciones de CSS 3.  
## Decisiones de diseño
En un primer momento surge la necesidad de dar una organización de los elementos web ordenada y que se puede modificar de forma sencilla, en un primer lugar se penso en crear haciendo uso de css una serie de clases que sirvieran como la típica combinación de contenedor/fila/columna típica de los frameworks actuales como por ejemplo bootstrap, sin embargo esa forma hacia que a nivel de HTML se tuvieran que introducir niveles de etiquetas que no tendrían sentido lógico con las etiquetas de HTML 5, en otras palabras tendríamos que usar la etiqueta div para evitar sections dentro de sections.

Finalmente se decidio hacer uso de una opción de CSS 3 llamada grid, que permite organizar la pantalla creando una malla a través de la que se colocarán los elementos en función de como se vayan configurando, como ejemplo se incluirá un ejemplo del código:

~~~
.container {
  display: grid;
  grid-template-columns: auto 150px;
  grid-template-rows: auto 150px auto auto;
}

header,
footer {
  grid-column-start: 1;
  grid-column-end: 3;
}
~~~

La clase de CSS *container* hace que el lo que tenga dentro del elemento HTML se organice de la forma descrita inmediatemente después, con "*display: grid;*" estamos indicando el tipo de caja que se usará el elemento HTML, luego "*grid-template-columns: auto 150px;*" sirve para configurar como serán las columnas de la malla, en este caso hay dos columnas la primera tiene un tamaño automático y la segunda solo tiene 150 pixeles de ancho, por último "*grid-template-rows: auto 150px auto auto;*" sirve para configurar las filas de la malla, en este caso hay 4 filas todas con un tamaño automático exceptuando la segunda que tiene 150 pixeles de largo.

Ahora bien si queremos que un elemento html ocupe el 100% de la pantalla a lo ancho es decir (width: 100%) tenemos que indicar en la hoja de estilo correspondiente las columnas y filas que estas ocuparan, por ejemplo en este caso se usa que el header y el footer van a ocupar toda la pantalla a lo ancho por lo tanto como tenemos dos columnas y tras índices en la malla, el elemento comenzará desde el primer índice hasta el último, si solo va a ocupar una única fila o columna puede usarse la orden "*grid-columna: n*" donde n es el número de la columna. Para indicar las filas se hace de forma análoga.

### Archivo de estilo: grid.CSS

### Archivo de estilo: style.css

### Archivo: index.html


## Descripción de los elementos

### Header

###

## Aspectos innovadores
