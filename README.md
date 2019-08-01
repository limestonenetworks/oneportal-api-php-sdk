# Oneportal API SDK

### SDK
SDK classes have been auto generated from the [open api documentation](https://api.dallas-idc.com/v2/documentation) for the oneportal api. They can be used to interface with the api programmatically.

### Client
Included is a console client with some basic commands configured. 

```
Available commands:
     help            Displays help for a command
     list            Lists commands
     tinker          Tinker!
    project
     project:create  Creates a new project.
     project:delete  Delete a project.
     project:get     Get a project.
```

The client expects a `.env` file in the root of the project. Example `.env` with all of the required fields:

```
API_URL=https://api.dallas-idc.com
API_USERNAME=YOUR_OP_USERNAME
API_PASSWORD=YOUR_OP_PASSWORD
API_CLIENT_ID=YOUR_OAUTH_CLIENT_ID
API_CLIENT_SECRET=YOUR_OAUTH_CLIENT_SECRET
```