# Variables del proyecto
PROJECT_NAME = codewars-practice

# Construir la imagen
build:
	docker compose build --no-cache

# Levantar los contenedores
up:
	docker compose up -d

# Parar los contenedores
down:
	docker compose down

# Ver logs
logs:
	docker compose logs -f

# Verificar estado de los contenedores
ps:
	docker compose ps

# Ejecutar comandos dentro del contenedor
composer:
	docker exec -it $(PROJECT_NAME) composer $(CMD)

phpunit:
	docker exec -it $(PROJECT_NAME) ./vendor/bin/phpunit "src/tests"

# Borrar contenedores y volúmenes
clean:
	docker compose down --volumes --remove-orphans

# Acceso interactivo al contenedor
exec:
	docker exec -it $(PROJECT_NAME) sh