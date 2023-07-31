# MULDIS-APPINV - Structure

This document consists of multiple parts; for a directory to all of the
parts, see [Overview](../README.md).

This part of the document explains how MULDIS-APPINV is structured, with an overview
of its parts and how it works.

This document part is not exhaustive; where there are gaps, you can see the
source code files.

MULDIS-APPINV is implemented as a pair of applications named MULDIS-APPINV-DBMS and
MULDIS-APPINV-WEBAPP, such that the latter is what end users typically interact
with directly using a generic web browser, and the former is a supporting
service providing a RESTful API that the latter consumes.

## MULDIS-APPINV-DBMS

### Framework

MULDIS-APPINV-DBMS is a TypeScript/JavaScript application that runs in a
server-side Node.js <https://nodejs.org> environment.

It is written against the ECMAScript standard version 12 (2021) so you
should have a fairly modern Node.js.

MULDIS-APPINV-DBMS is built around the NestJS framework, so the latter's main
documentation site <https://docs.nestjs.com> can be used to understand its
architecture and how to build and run it at a generic level.

This current document will focus on the parts that are the most interesting
for the MULDIS-APPINV functionality itself.

### Files

These are the MULDIS-APPINV-DBMS component files:

```
data.json   - This is the active database file (not in version control).
data_seed_for_copying.json   - Example data for data.json in version control.
nest-cli.json
package.json   - Main Javascript config file the build system uses
src/
src/app-types.ts   - A core MULDIS-APPINV logic file with most type defs and validators
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
src/products/products.service.ts   - A core MULDIS-APPINV logic file with the file processing and REST handlers
test/
test/app.e2e-spec.ts
test/jest-e2e.json
tsconfig.build.json
tsconfig.json
```

Note that MULDIS-APPINV-DBMS and MULDIS-APPINV-WEBAPP each have an identical copy of the 1
file `app-types.ts` defining common data types and validators and such;
logically this would be a shared library, but actually implementing it as
one on NPM etc would have been overkill; perhaps a future update could have
a single shared copy in the repository somehow.

### Logic

MULDIS-APPINV-DBMS is logically structured as if it might be using an external DBMS
server somewhere, but it actually uses a local JSON file for the data
instead, since for the purposes of this simple application it means
everything is self-contained and simple and minimizes external deps, and we
don't expect to need to scale beyond what that can handle.

## MULDIS-APPINV-WEBAPP

### Framework

MULDIS-APPINV-WEBAPP is a TypeScript/JavaScript application that runs primarily in
the end-user's web browser with supporting functionality in a server-side
Node.js <https://nodejs.org> environment.

It is written against the ECMAScript standard version 12 (2021) so you
should have a fairly modern Node.js and web browser.

MULDIS-APPINV-WEBAPP is built around the React library, so the latter's main
documentation site <https://react.dev/learn> can be used to understand its
architecture and how to build and run it at a generic level.

This current document will focus on the parts that are the most interesting
for the MULDIS-APPINV functionality itself.

### Files

These are the MULDIS-APPINV-WEBAPP component files:

```
package.json   - Main Javascript config file the build system uses
public/
public/index.html
public/manifest.json
public/robots.txt
src/
src/app-types.ts   - A core MULDIS-APPINV logic file with most type defs and validators
src/App.css
src/App.test.tsx
src/App.tsx   - A core MULDIS-APPINV logic file with the entire MULDIS-APPINV user interface or client side logic
src/index.css
src/index.tsx
src/react-app-env.d.ts
src/reportWebVitals.ts
src/setupTests.ts
tsconfig.json
```

Note that MULDIS-APPINV-DBMS and MULDIS-APPINV-WEBAPP each have an identical copy of the 1
file `app-types.ts` defining common data types and validators and such;
logically this would be a shared library, but actually implementing it as
one on NPM etc would have been overkill; perhaps a future update could have
a single shared copy in the repository somehow.
