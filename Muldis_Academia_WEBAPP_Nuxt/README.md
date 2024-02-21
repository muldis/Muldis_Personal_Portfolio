# Muldis Academia: WEBAPP: NUXT (MULDIS-ACAD-WEBAPP-NUXT)

This document describes MULDIS-ACAD-WEBAPP-NUXT,
which is a concrete implementation of the abstract WEBAPP
component of the abstract MULDIS-ACAD application.
It is built in the TypeScript language using the Nuxt and Vue web frameworks.

MULDIS-ACAD is a simple web-based database application that empowers an
academic organization to manage student data.

MULDIS-ACAD has the 2 components DBMS and WEBAPP, such that the latter is
what end users typically interact with directly using a generic web
browser, and the former is a supporting service providing a RESTful API
that the latter consumes.

Each of DBMS and WEBAPP is abstract and can have multiple alternative
concrete implementations, each one built with a different technology.

## Contents

**The rest of this documentation still has to be written.**

MULDIS-ACAD-WEBAPP-NUXT is a work in progress.
It is not yet ready to use for its intended purpose, nor is it yet even a
minimum viable product.
The current version supports viewing a list of students, which works now,
but the web user interface for adding/editing/removing students has yet to
be added, though the corresponding MULDIS-ACAD-DBMS-LARA API does currently
implement all of that functionality too and could be used with a tool like
Postman in the meantime.  The missing UI is expected to be added very soon.

## Author

Darren Duncan - darren@DarrenDuncan.net

## License and Copyright

MULDIS-ACAD-WEBAPP-NUXT is Copyright © 2024, Darren Duncan.

MULDIS-ACAD-WEBAPP-NUXT is free software;
you can redistribute it and/or modify it under the terms of the Apache
License, Version 2.0 (AL2) as published by the Apache Software Foundation
(<https://www.apache.org>).  You should have received a copy of the
AL2 as part of the MULDIS-ACAD-WEBAPP-NUXT distribution, in the file
[LICENSE/Apache-2.0.txt](../LICENSE/Apache-2.0.txt); if not, see
<https://www.apache.org/licenses/LICENSE-2.0>.

Any versions of MULDIS-ACAD-WEBAPP-NUXT
that you modify and distribute must carry prominent
notices stating that you changed the files and the date of any changes, in
addition to preserving this original copyright notice and other credits.
MULDIS-ACAD-WEBAPP-NUXT is distributed in the hope that it will be
useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
