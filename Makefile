.PONY: run

run:
	@docker-compose run --rm php
	@docker-compose down
