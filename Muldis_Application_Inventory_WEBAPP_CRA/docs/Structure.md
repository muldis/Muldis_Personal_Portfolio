# MULDIS-APPINV-WEBAPP-CRA - Structure

This document consists of multiple parts; for a directory to all of the
parts, see [Overview](../README.md).

This part of the document explains how MULDIS-APPINV-WEBAPP-CRA
is structured, with an overview of its parts and how it works.

This document part is not exhaustive; where there are gaps, you can see the
source code files.

## Framework

MULDIS-APPINV-WEBAPP-CRA is a TypeScript/JavaScript application that runs
primarily in the end-user's web browser with supporting functionality
in a server-side Node.js <https://nodejs.org> environment.

It is written against the ECMAScript standard version 12 (2021) so you
should have a fairly modern Node.js and web browser.

MULDIS-APPINV-WEBAPP-CRA is built around the Create React App framework, so the
latter's main documentation <https://create-react-app.dev> can be used to
understand its architecture and how to build and run it at a generic level.

MULDIS-APPINV-WEBAPP-CRA is built around the React web library, so the
latter's main documentation <https://react.dev> can be used to
understand its architecture and how to build and run it at a generic level.

This current document will focus on the parts that are the most interesting
for the MULDIS-APPINV-WEBAPP-CRA functionality itself.

## Files

These are the MULDIS-APPINV-WEBAPP-CRA component files:

```
package.json   - Main Javascript config file the build system uses
public/
public/index.html
public/manifest.json
public/robots.txt
src/
src/app-types.ts   - A core MULDIS-APPINV-WEBAPP-CRA logic file with most type defs and validators
src/App.css
src/App.test.tsx
src/App.tsx   - A core MULDIS-APPINV-WEBAPP-CRA logic file with the entire MULDIS-APPINV-WEBAPP-CRA user interface or client side logic
src/index.css
src/index.tsx
src/react-app-env.d.ts
src/reportWebVitals.ts
src/setupTests.ts
tsconfig.json
```
