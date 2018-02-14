App : Product Service of a e-commerce site

### api.py : 
	- Product class extends Resource
	- get method return json format
	- api.add_resource is for adding routine
	- listening at port 80(localhost) with debug mode

### requirements.txt :
	- list of dependencies
	- this is not specific to docker it is just python thing

### Dockerfile:
	- FROM keyword to specify the "base image"
	- FOR keyword to copy the source code into the image
	- '.' means current folder
	- CMD keyword to run the python

### ocker-compose.yml:
	- configuration file
	- define all of our services in this configuration file
	- in one command it'll spin up all the containers that we need
	- one container can access all of the others containers defined in this compose file
	- their host name must match the service name("product-service")
	- 1st line specifies version of composed file format
	- build keyword to docker compose what to build
	- volumes keyword to mount "./product" to "/usr/src/app"
	- ports keyword to may 5001 to 80

### index.php:
	- "file_get_contents" for making an API request to product-service 

### run docker: 
	- docker-compose up
	- then hit "http://localhost:5001/" in your browser to see json view
	- hit http://localhost:5000/ to see web view