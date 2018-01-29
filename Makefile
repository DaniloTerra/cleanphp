DOCKER_RUN_PHP_UNIT:=docker run -v ${PWD}:/app --rm phpunit/phpunit:6.5.3
DOCKER_RUN_COMPOSER:=docker run -v ${PWD}:/app --rm composer:1.6

test:
	${DOCKER_RUN_PHP_UNIT} --bootstrap tests/bootstrap.php tests/

install-deps:
	${DOCKER_RUN_COMPOSER} install
