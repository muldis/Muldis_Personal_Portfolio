# Muldis Application Inventory (MULDIS-APPINV)

This document describes MULDIS-APPINV, a simple web-based database application that
empowers an organization to track and manage applications that they are
developing, tracking details for each such as its product title, start
date, and names of people in various roles; it supports listing, viewing,
adding, editing, and removing product records.

MULDIS-APPINV is implemented as a pair of applications named MULDIS-APPINV-DBMS and
MULDIS-APPINV-WEBAPP, such that the latter is what end users typically interact
with directly using a generic web browser, and the former is a supporting
service providing a RESTful API that the latter consumes.

## Contents

This document consists of multiple parts:

1. MULDIS-APPINV - Overview (the current part)
1. [MULDIS-APPINV - End User Manual](docs/Manual.md)
1. [MULDIS-APPINV - Structure](docs/Structure.md)
1. [MULDIS-APPINV - Local Deployment and Testing](docs/Local.md)
1. [MULDIS-APPINV - Assumptions](docs/Assumptions.md)

The [MULDIS-APPINV - End User Manual](docs/Manual.md) part is what regular end
users, who are simply using an already deployed instance of MULDIS-APPINV, need to
know; the other documentation parts are mainly for someone wanting to
deploy or develop the application or otherwise learn more about how it
works internally.

## Author

Darren Duncan - darren@DarrenDuncan.net

## License and Copyright

MULDIS-APPINV is Copyright © 2023, Darren Duncan.

MULDIS-APPINV is free software;
you can redistribute it and/or modify it under the terms of the Apache
License, Version 2.0 (AL2) as published by the Apache Software Foundation
(<https://www.apache.org>).  You should have received a copy of the
AL2 as part of the MULDIS-APPINV distribution, in the file
[LICENSE/Apache-2.0.txt](../LICENSE/Apache-2.0.txt); if not, see
<https://www.apache.org/licenses/LICENSE-2.0>.

Any versions of MULDIS-APPINV that you modify and distribute must carry prominent
notices stating that you changed the files and the date of any changes, in
addition to preserving this original copyright notice and other credits.
MULDIS-APPINV is distributed in the hope that it will be
useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
