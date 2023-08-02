# MULDIS-APPINV-DBMS-NEST - Structure

This document consists of multiple parts; for a directory to all of the
parts, see [Overview](../README.md).

This part of the document explains how MULDIS-APPINV-DBMS-NEST
is structured, with an overview of its parts and how it works.

This document part is not exhaustive; where there are gaps, you can see the
source code files.

## Framework

MULDIS-APPINV-DBMS-NEST is a TypeScript/JavaScript application that runs
in a server-side Node.js <https://nodejs.org> environment.

It is written against the ECMAScript standard version 12 (2021) so you
should have a fairly modern Node.js.

MULDIS-APPINV-DBMS-NEST is built around the Nest framework, so the
latter's main documentation <https://nestjs.com> can be used to
understand its architecture and how to build and run it at a generic level.

MULDIS-APPINV-DBMS-NEST is also built around the Express framework, so the
latter's main documentation <https://expressjs.com> can be used to
understand its architecture and how to build and run it at a generic level.

This current document will focus on the parts that are the most interesting
for the MULDIS-APPINV-DBMS-NEST functionality itself.

## Files

These are the MULDIS-APPINV-DBMS-NEST component files:

```
data.json   - This is the active database file (not in version control).
data_seed_for_copying.json   - Example data for data.json in version control.
nest-cli.json
package.json   - Main Javascript config file the build system uses
src/
src/app-types.ts   - A core MULDIS-APPINV-DBMS-NEST logic file with most type defs and validators
src/app.controller.spec.ts
src/app.controller.ts
src/app.module.ts
src/app.service.ts
src/main.ts
src/products/
src/products/api-product-s-psid.ts   - Type def used by REST API
src/products/api-product.ts   - Type def used by REST API
src/products/products.controller.spec.ts
src/products/products.controller.ts   - Provides the core REST API, shim for products.service.ts
src/products/products.module.ts
src/products/products.service.spec.ts
src/products/products.service.ts   - A core MULDIS-APPINV-DBMS-NEST logic file with the file processing and REST handlers
test/
test/app.e2e-spec.ts
test/jest-e2e.json
tsconfig.build.json
tsconfig.json
```

## Logic

MULDIS-APPINV-DBMS-NEST is logically structured as if it might be using an
external DBMS server somewhere, but it actually uses a local JSON file for
the data instead, since for the purposes of this simple application it
means everything is self-contained and simple and minimizes external deps,
and we don't expect to need to scale beyond what that can handle.
