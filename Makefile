include .env
# Vars
CONTAINER_PREFIX = "${APP_PREFIX}"

help: ## Help menu
	@echo "App Tasks"
	@cat $(MAKEFILE_LIST) | pcregrep -o -e "^([\w]*):\s?##(.*)"
	@echo

ssh: ## connect to fpm container
	docker exec -it $(CONTAINER_PREFIX)-fpm ash

start: ## starts docker compose
	docker-compose -f docker-compose.yml up

restart: ## starts docker compose
	docker-compose restart

stop: ## stops all containers
	docker-compose stop

composer-optimized: ## runs an optimized no-dev composer install
	composer install --apcu-autoloader --optimize-autoloader

copy-env: ## copies local id_rsa to server
	 scp -P 7822 prod.env fivetale@mi3-ls12.a2hosting.com:~/cagedmovies.fivetalents.software/.env

prod: ## ssh into prod server
	ssh fivetale@mi3-ls12.a2hosting.com -p 7822 -t "cd ~/cagedmovies.fivetalents.software/ ; bash"
