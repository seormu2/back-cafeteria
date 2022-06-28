Instalacion del proyecto

se ijecuta este comando : https://github.com/seormu2/back-cafeteria.git

abrir el proyecto en visual studio 

abrir una terminal y ejecutar el siguiente comando: php artisan install

corre las migraciones


---------

Obtuve un error a la hora de consumir el servicio de crear producto y no logre solucionarlo, por tal razon paso el objeto para insertarlo directamente de postman:
{
    "nameProduct" : "arroz4",
    "referency" : "12",
    "price" : 2000,
    "weight" : 2,
    "stock" : 20,
    "idCategory" : 2
}