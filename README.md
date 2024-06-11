# la-cajamarquina
Proyecto de capstone

## Crear archivo .htaccess en la ruta principal

```apache
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
