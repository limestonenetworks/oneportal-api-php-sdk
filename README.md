# Oneportal API SDK

## SDK
SDK classes have been auto generated from the [open api documentation](https://api.dallas-idc.com/v2/documentation) for the OnePortal API. They can be used to interface with the API programmatically.

## Client
Included is a console client with some basic commands configured. 

```
Available commands:
  help            Displays help for a command
  list            Lists commands
  tinker          Tinker!
 core
  core:get        Get a core
  core:list       Get the list of cores.
 facility
  facility:list   Get the stock for a facility.
  facility:stock  Get the stock for a facility.
 image
  image:list      Get the image list.
 job
  job:get         Get a job status.
 project
  project:create  Creates a new project.
  project:delete  Delete a project.
  project:get     Get a project.
  project:list    Get the list of projects.
 server
  server:create   Creates a new server.
  server:delete   Delete an server
  server:list     Get the list of a project's server.
 sshkey
  sshkey:create   Creates a new ssh pubkey.
  sshkey:delete   Delete an ssh key.
  sshkey:get      Get an ssh key
  sshkey:list     Get the list of ssh keys
```

The client expects a `profile.ini` file in the root of the project. An example is provided in `profiles.ini.example`.

### Client Quickstart

#### Prerequisites
- [OnePortal API token](https://one.limestonenetworks.com/administrative/api.html)
- Docker Installation
  - Docker
  - docker-compose
- Local PHP Installation
  - PHP 7.2 or later
  - Composer

_Note: The Dockerfile and docker-compose configuration included in this repo can be used instead of installing PHP on your system._

#### Installation using local PHP
1) Install PHP and composer
2) Clone this repo: `git clone https://github.com/limestonenetworks/oneportal-api-php-sdk`
3) Change directory to the SDK: `cd oneportal-api-php-sdk`
4) Install SDK dependencies: `composer install`
5) Copy the example profiles.ini: `cp profiles.ini.example profiles.ini`
6) Configure `profiles.ini` with your [API token](https://one.limestonenetworks.com/administrative/api.html) and (optionally) project ID.
7) Run `./api core:list` to verify the API access is functioning

#### Installation using Docker Compose
1) Clone this repo: `git clone https://github.com/limestonenetworks/oneportal-api-php-sdk`
2) Change directory to the SDK: `cd oneportal-api-php-sdk`
3) Copy the example profiles.ini: `cp profiles.ini.example profiles.ini`
4) Configure `profiles.ini` with your [API token](https://one.limestonenetworks.com/administrative/api.html) and (optionally) project ID.
5) Start the docker container: `docker-compose up -d`
6) Console into the docker container: `docker-compose exec oneportal-sdk /bin/bash`
7) Install SDK dependencies: `composer install`
8) Run `./api core:list` to verify the API access is functioning

After installation is complete, run `./api` to see a list of available commands. Show available parameters for a command by passing `-h` (ie. `./api server:create -h`)
