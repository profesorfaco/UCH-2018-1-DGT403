Diseño Gráfico · Universidad de Chile

# Multimedia II

### D3.JS

Recordemos que estamos revisando [D3.JS (Data-Driven Documents)](https://d3js.org/): Una biblioteca de JavaScript, que nos simplifica el trabajo con datos, a nivel de manipulación y visualización, atendiendo a estándares web. 

Con el siguiente *script* podemos crear, en el cuerpo de un documento **HTML**, un elemento **SVG** con atributos de ancho y alto de 100 pixeles, además de un fondo gris muy claro, definido por estilo **CSS**. Este script será comprendido por el navegador si y solo si es que antes vinculamos la biblioteca de [D3.JS (Data-Driven Documents)](https://d3js.org/).

```
var x = 500, y = 500;
var esto = d3.select("body").append("svg").attr("width",x).attr("height",y).style("background-color","#CCCCCC");
esto.append("circle").attr("cx",x/2).attr("cy",x/2).attr("r",x/4).attr("fill","#FF0000");
```

En el *script* presentado, estamos sacándole provecho al uso de de variables, lo que nos permite complejizar el trabajo.

### Referencias de D3.JS

- [D3 Basics](https://website.education.wisc.edu/~swu28/d3t/concept.html)
- [D3 in Depth](http://d3indepth.com/)
- [D3.js Tutorials - Learn D3.js Step by Step](http://www.tutorialsteacher.com/d3js/)
- [INTRO TO D3.JS](https://square.github.io/intro-to-d3/)
- [**Tutorial de D3 en español**](http://gcoch.github.io/D3-tutorial/)

Cuando usen estas referencias, favor revisen la versión de D3.JS en uso. Entre las versiones hay cambios: https://github.com/d3/d3/blob/master/CHANGES.md 


---

[Clase anterior](https://github.com/profesorfaco/multimedia2_6/) | [Clase siguiente](https://github.com/profesorfaco/multimedia2_8/)
