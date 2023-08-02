# Muldis Application Inventory: WEBAPP: CRA (MULDIS-APPINV-WEBAPP-CRA)

This document describes MULDIS-APPINV-WEBAPP-CRA,
which is a concrete implementation of the abstract WEBAPP
component of the abstract MULDIS-APPINV application.
It is built in the TypeScript language using the Create React App framework
using the React web library.

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

## Contents

This document consists of multiple parts:

1. MULDIS-APPINV-WEBAPP-CRA - Overview (the current part)
1. [MULDIS-APPINV-WEBAPP-CRA - End User Manual](docs/Manual.md)
1. [MULDIS-APPINV-WEBAPP-CRA - Structure](docs/Structure.md)
1. [MULDIS-APPINV-WEBAPP-CRA - Local Deployment and Testing](docs/Local.md)
1. [MULDIS-APPINV-WEBAPP-CRA - Assumptions](docs/Assumptions.md)

The [MULDIS-APPINV-WEBAPP-CRA - End User Manual](docs/Manual.md)
part is what regular end users, who are simply using an already deployed
instance of MULDIS-APPINV-WEBAPP-CRA,
need to know; the other documentation parts are mainly for someone wanting
to deploy or develop the application or otherwise learn more about how it
works internally.

## Author

Darren Duncan - darren@DarrenDuncan.net

## License and Copyright

MULDIS-APPINV-WEBAPP-CRA is Copyright © 2023, Darren Duncan.

MULDIS-APPINV-WEBAPP-CRA is free software;
you can redistribute it and/or modify it under the terms of the Apache
License, Version 2.0 (AL2) as published by the Apache Software Foundation
(<https://www.apache.org>).  You should have received a copy of the
AL2 as part of the MULDIS-APPINV-WEBAPP-CRA distribution, in the file
[LICENSE/Apache-2.0.txt](../LICENSE/Apache-2.0.txt); if not, see
<https://www.apache.org/licenses/LICENSE-2.0>.

Any versions of MULDIS-APPINV-WEBAPP-CRA
that you modify and distribute must carry prominent
notices stating that you changed the files and the date of any changes, in
addition to preserving this original copyright notice and other credits.
MULDIS-APPINV-WEBAPP-CRA is distributed in the hope that it will be
useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
