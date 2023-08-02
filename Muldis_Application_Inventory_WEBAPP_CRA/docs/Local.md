# MULDIS-APPINV-WEBAPP-REACT - Local Deployment and Testing

This document consists of multiple parts; for a directory to all of the
parts, see [Overview](../README.md).

This part of the document explains how to install and run
MULDIS-APPINV-WEBAPP-REACT on a local developer machine,
which is also a basis that they can develop it further.

It also talks about how to run the automated tests locally.

These instructions assume a modern UNIX-like shell environment, like one
would have with a modern Linux or Apple MacOS system.  If you are using a
Microsoft Windows system, some alterations may be necessary.

## Installation

### Git

You are recommended to have Git <https://git-scm.com> installed on your
local machine, as a means to get the project source code, although you can
also download it without using that.

On MacOS, Apple provides Git as part of its devtools; you can cause it to
be installed by trying to run "git" in the Terminal which is initially a
shim and then you approve the Apple devtools install.

### Homebrew

The Homebrew <https://brew.sh> package manager for MacOS is used to install
other prerequisites such as Node.js, so Homebrew has to be installed first
to do that.

### Prerequisite - Node.js

You should have Node.js <https://nodejs.org> installed.
A common way to do so is using your operating system's package manager,
or with Homebrew <https://brew.sh> in the case of MacOS.

This will provide the `npm` (Node Package Manager) utility and other tools
you would use for most setup or runtime tasks afterwards.

### Project Source Code

Obtain the latest source code for this project from its current repository.
You can use a `git` client to clone/pull it, or GitHub can privide a zip file.

All shell command sequences given here to setup or run
MULDIS-APPINV-WEBAPP-REACT itself assume
your starting current working directory is the root level of your clone of
this project's source folder, unless otherwise stated.

### Node Package Manager

Before the first run of the MULDIS-APPINV-WEBAPP-REACT server, in a shell session,
first `cd` into the `Muldis_Application_Inventory_WEBAPP_React` folder
and run the following command, which will fetch/install
the server's additional JavaScript library dependencies:

```
    npm install
```

## Running the Server

To start the MULDIS-APPINV-WEBAPP-REACT server, in a shell session,
first `cd` into the `Muldis_Application_Inventory_WEBAPP_React` folder
and run either of the following commands,
adjusting for your choices of host or port:

```
    REACT_APP_DBMS_HOST=localhost REACT_APP_DBMS_PORT=3000 PORT=8080 npm start
```

Or:

```
    REACT_APP_DBMS_HOST=localhost REACT_APP_DBMS_PORT=3000 npm run build
    PORT=8080 npm run serve
```

The first option of 1 command is easier when one is actively developing
this project.  The server is running in a mode that watches for changes to
the source code files, automatically reloads them if it sees any changed,
and provides some helpful diagnostics when some problems occur.

The second option of 2 commands is better for a production or
production-like situation.  The first command only needs to be run when
there are changes made to the project.  The second command will run the
server produced by the first command and will not auto-reload on changes.

Any environment variable can be set inline like shown here,
or by setting it in a `.env` file.

The MULDIS-APPINV-WEBAPP-REACT server will listen on localhost port 8080,
or whatever alternate `PORT` you choose.
Make sure its not the same as any other MULDIS-APPINV component.

MULDIS-APPINV-WEBAPP-REACT will invoke a DBMS component using the latter's
location specified by `REACT_APP_DBMS_HOST` and `REACT_APP_DBMS_PORT`.

To stop the server, hit CTRL-C in the same shell session.

## Using the MULDIS-APPINV-WEBAPP-REACT Application

Visit <http://localhost:8080> in a web browser,
while both this server and a referred-to DBMS server are running,
to actually use the application as a regular end user.

## Running the Automated Tests

MULDIS-APPINV-WEBAPP-REACT includes an automated test suite.

The following assumes that `npm install` has been run, but that the
applications are not currently running.

To run the MULDIS-APPINV-WEBAPP-REACT automated tests, in a shell session,
first `cd` into the `Muldis_Application_Inventory_WEBAPP_React` folder
and run the following:

```
npm test
```
