# Prueba-tecnica
Este repositorio incluye: 
- Una memoria de la prueba
- El archivo clavesSSH.pem necesario para conectarse por SSH a la maquina
- Los diferentes archivos modificados durante la instalación. main.tf para Terraform y wp-config.php para WordPress. Los elementos como claves o contraseñas han sido sustituidos por "***". Tambien se inluye el archivo de deploy de maquinas mediante Terraform.

Para conectarse a la maquina por SSH utilizar usuario predeterminado ec2-user junto con IP pública:
- ssh -i .\clavesSSH.pem ec2-user@13.38.56.105

Para ver la instalacion de WordPress en funcionamiento visitar sitio web del balanceador de carga:
- application-load-balancer-867082386.eu-west-3.elb.amazonaws.com
