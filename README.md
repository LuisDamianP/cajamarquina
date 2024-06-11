# la-cajamarquina
Proyecto de capstone
## Crear archivo .htaccess en la ruta principal
//.htaccess
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]

## Agregar este codigo en el archivo creado
