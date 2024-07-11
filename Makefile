all : up

up :
	docker-compose -f ./srcs/docker-compose.yml up

build :
	docker-compose -f ./srcs/docker-compose.yml up --build

stop :
	docker-compose -f ./srcs/docker-compose.yml stop

clean :
	docker-compose -f ./srcs/docker-compose.yml down

re : clean up

