apidoc:
	php artisan l5-swagger:generate
format:
	vendor/bin/pint
deploy:
	git push heroku main
create-model:
	php artisan make:model Posts -a

