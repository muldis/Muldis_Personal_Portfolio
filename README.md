# Muldis Skill Demos

This repository features multiple typically independent projects, each of
which is intended more to publicly demonstrate that I have experience with
a range of technologies, rather than being intended to actually be used in
industry, in contrast with the typical other Muldis repository.

You are still free to actually use these if they would be useful to you,
as with any open source project, but they are not intended to actually
contribute capabilities that don't already exist elsewhere.

## Muldis Application Inventory (MULDIS-APPINV)

MULDIS-APPINV is a simple web-based database application that empowers an
organization to track and manage applications that they are developing,
tracking details for each such as its product title, start date, and names
of people in various roles; it supports listing, viewing, adding, editing,
and removing product records.

MULDIS-APPINV has the 2 components DBMS and WEBAPP, such that the latter is
what end users typically interact with directly using a generic web
browser, and the former is a supporting service providing a RESTful API
that the latter consumes.

Each of DBMS and WEBAPP is abstract and can have multiple alternative
concrete implementations, each one built with a different technology.

### Muldis Application Inventory: DBMS: Nest (MULDIS-APPINV-DBMS-NEST)

MULDIS-APPINV-DBMS-NEST is a concrete implementation of the abstract DBMS
component of the abstract MULDIS-APPINV application.
It is built in the TypeScript language using the Nest framework
using the Express framework.

[Muldis_Application_Inventory_DBMS_Nest](Muldis_Application_Inventory_DBMS_Nest)

Technologies used include:

- TypeScript (<https://typescriptlang.org>)
- Node.js (<https://nodejs.org>)
- Nest (<https://nestjs.com>)
- Express (<https://expressjs.com>)
- JSON (<https://json.org>)
- REST APIs / Swagger

### Muldis Application Inventory: WEBAPP: CRA (MULDIS-APPINV-WEBAPP-CRA)

MULDIS-APPINV-WEBAPP-CRA is a concrete implementation of the abstract WEBAPP
component of the abstract MULDIS-APPINV application.
It is built in the TypeScript language using the Create React App framework
using the React web library.

[Muldis_Application_Inventory_WEBAPP_CRA](Muldis_Application_Inventory_WEBAPP_CRA)

Technologies used include:

- TypeScript (<https://typescriptlang.org>)
- Node.js (<https://nodejs.org>)
- Create React App (<https://create-react-app.dev>)
- React (<https://react.dev>)
- REST APIs

## Muldis Academia (MULDIS-ACAD)

MULDIS-ACAD is a simple web-based database application that empowers an
academic organization to manage student data.

MULDIS-ACAD has the 2 components DBMS and WEBAPP, such that the latter is
what end users typically interact with directly using a generic web
browser, and the former is a supporting service providing a RESTful API
that the latter consumes.

Each of DBMS and WEBAPP is abstract and can have multiple alternative
concrete implementations, each one built with a different technology.

### Muldis Academia: DBMS: Laravel (MULDIS-ACAD-DBMS-LARA)

This document describes MULDIS-ACAD-DBMS-LARA,
which is a concrete implementation of the abstract DBMS
component of the abstract MULDIS-ACAD application.
It is built in the PHP language using the Laravel web framework.

[Muldis_Academia_DBMS_Laravel](Muldis_Academia_DBMS_Laravel)

Technologies used include:

- PHP (<https://php.net>)
- Laravel (<https://laravel.com>)
- Eloquent (<https://laravel.com/docs/10.x/eloquent>)
- MySQL (<https://mysql.com>)
- REST APIs

### Muldis Academia: WEBAPP: NUXT (MULDIS-ACAD-WEBAPP-NUXT)

This document describes MULDIS-ACAD-WEBAPP-NUXT,
which is a concrete implementation of the abstract WEBAPP
component of the abstract MULDIS-ACAD application.
It is built in the TypeScript language using the Nuxt and Vue web frameworks.

[Muldis_Academia_WEBAPP_Nuxt](Muldis_Academia_WEBAPP_Nuxt)

Technologies used include:

- TypeScript (<https://typescriptlang.org>)
- Node.js (<https://nodejs.org>)
- Nuxt (<https://nuxt.com>)
- Vue (<https://vuejs.org>)
- REST APIs
