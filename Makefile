start:
	php -S localhost:8080 -t ./ public/index.php

cs:
	./vendor/bin/phpcs --standard=PSR12 src

fix:
	./vendor/bin/phpcbf --standard=PSR12 src
