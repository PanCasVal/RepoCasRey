# Pasteles

Sitio web estático de una pastelería, listo para GitHub Pages.

## Catálogo
- `Pasteles` con 10 porciones
- `Panqués y Pays` con 8 a 10 porciones
- `Gelatinas` con 10 porciones

## Imágenes
Las imágenes están preparadas como SVG dentro de `assets/img/` para que después las reemplaces por fotos reales si quieres.

## Ejecutar localmente
Puedes abrir `index.html` directamente en el navegador o usar un servidor estático simple:

```bash
python -m http.server 8000
```

Luego abre:

```text
http://localhost:8000
```

## Estructura
- `index.html` : página principal
- `assets/css/style.css` : estilos
- `assets/js/app.js` : interactividad
- `assets/img/` : imágenes de cada producto

## Publicar en GitHub Pages
1. Sube los cambios al repositorio.
2. Ve a `Settings` > `Pages`.
3. En `Build and deployment`, elige `Deploy from a branch`.
4. Selecciona la rama `main` y la carpeta `/root`.
5. Guarda y espera el enlace público.

## Git
```bash
git add .
git commit -m "Convert to static site"
git push
```
