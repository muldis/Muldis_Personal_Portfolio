# Muldis Academia: DBMS: Laravel (MULDIS-ACAD-DBMS-LARA)

This document describes MULDIS-ACAD-DBMS-LARA,
which is a concrete implementation of the abstract DBMS
component of the abstract MULDIS-ACAD application.
It is built in the PHP language using the Laravel web framework.

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

## Author

Darren Duncan - darren@DarrenDuncan.net

## License and Copyright

MULDIS-ACAD-DBMS-LARA is Copyright © 2024, Darren Duncan.

MULDIS-ACAD-DBMS-LARA is free software;
you can redistribute it and/or modify it under the terms of the Apache
License, Version 2.0 (AL2) as published by the Apache Software Foundation
(<https://www.apache.org>).  You should have received a copy of the
AL2 as part of the MULDIS-ACAD-DBMS-LARA distribution, in the file
[LICENSE/Apache-2.0.txt](../LICENSE/Apache-2.0.txt); if not, see
<https://www.apache.org/licenses/LICENSE-2.0>.

Any versions of MULDIS-ACAD-DBMS-LARA
that you modify and distribute must carry prominent
notices stating that you changed the files and the date of any changes, in
addition to preserving this original copyright notice and other credits.
MULDIS-ACAD-DBMS-LARA is distributed in the hope that it will be
useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
