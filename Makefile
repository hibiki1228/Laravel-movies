up:
	docker-compose up -d
down:
	docker-compose down
serve:
	php artisan serve
mysql:
	mysql -u root -p Laravel_movies -b