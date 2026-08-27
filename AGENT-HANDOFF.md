# Pack12Rocks Agent Handoff

## Purpose
This file contains optional historical page maps and deeper context. Start with `AGENTS.md` and consult this file only when needed.

## Core Project Rules
- CSS/Sass only for production behavior changes. Do not rely on editing live HTML markup structure.
- Preserve existing page behavior and legacy scripts.
- Prefer page-scoped selectors over global selectors.
- For generated tables, use `:nth-of-type(...)` rather than `:nth-child(...)` when hidden inputs may appear among cells.

## Build / Validation
- Sass entry: `assets/scss/bootstrap_override_colors_Cub_Scouts.scss`
- Main output: `assets/css/bootstrap_override_colors_Cub_Scouts.css`
- Quick compile check:
  - `npm run build:css`
- `npm test` is effectively a no-op in this project.

## Design Language (Current)
- Page base: `#f5f8fb` (often with subtle gold wash gradient)
- Widget/table header gradient: `#eaf3ff` -> `#dfeeff`
- Text primary: dark navy / deep slate
- Row striping: white and very light blue (`#f7faff`)
- Buttons: around 40px height, rounded corners (~10px)

## Global Reset Best Practice
**Never apply aggressive resets globally.** Use targeted mixins instead.

Example: Previously, `table { max-width: 100%; }` was applied globally, breaking table cell layout across all pages. Solution:
- Create a mixin: `@mixin responsive-media-reset { img, iframe, svg, video { max-width: 100%; } }`
- Apply only where needed via `@include responsive-media-reset;` inside scoped blocks

This keeps global resets minimal and safe:
```scss
* { box-sizing: border-box; }
body { background-color: #fff; }
```

Page-specific responsive behavior lives in scoped page files.

## High-Risk / Repeated Pitfalls
- **Unscoped selectors are dangerous**: All page-specific styling must be wrapped with `body:has(#Menu_Item_ID[value="XXXX"]) { ... }`
  - Never apply broad selectors targeting generic page layout classes (`.new-row`, `.container-fluid`, `.center-block`) without proper scoping
  - Media queries and responsive rules are particularly dangerous when global—they compound size/display issues across pages
- Legacy pages may load remote CSS after local CSS; specificity and scope matter.
- Some partials were previously corrupted by ambiguous patching. Read target blocks before editing.
- If table cells stack unexpectedly, restore explicit table semantics:
  - `display: table`, `table-row-group`, `table-row`, `table-cell`
  - reset `float`, `position`, `writing-mode`, `transform`

## Scoping Strategy (Critical)
**Every page must scope its styles strictly to prevent cross-page pollution.**

The pattern: `body:has(#Menu_Item_ID[value="XXXX"]) { /* page-specific styles */ }`

Examples:
- Menu_Item_ID=319 (Upcoming Events): `body:has(#Menu_Item_ID[value="319"]) { ... }`
- Menu_Item_ID=5787 (Events Hub): `body:has(#Menu_Item_ID[value="5787"]) { ... }`
- Menu_Item_ID=5788 (Membership Hub): `body:has(#Menu_Item_ID[value="5788"]) { ... }`

### Why This Matters
Generic selectors like `.new-row`, `.center-block`, and `.text-center` appear across multiple pages. Without scoping, styling meant for one page leaks to others, causing:
- Table layouts breaking on unrelated pages
- Button sizes/spacing inconsistent
- Global media queries conflicting with page-specific responsive intent
- Debugging nightmares as selector conflicts cascade

## Events Hub (Menu_Item_ID=5787) Map
File: `events/events-hub.php`

Widget classes on page:
- `widget35`: View Calendar card
- `widget33`: Attendance Not Finalized table
- `widget29`: Upcoming Events table
- `widget30`: Upcoming Shifts table
- `widget31`: Past Events table
- `widget32`: Past Shifts table
- `widget34`: Event Locations table
- `widget36`: Event Information links
- `widget37`: Reports links
- `widget38`: Set Up links

Primary styles live in: `scss/pages/events/_event.scss` under the Events Hub scoped block:
- `body:has(#Menu_Item_ID[value="5787"]) { ... }`

## Current Responsive Table Intent (Events Hub)
At mobile/tablet breakpoints (generally up to 991px), reduced-column views are used:
- `widget33` (Attendance Not Finalized): show Edit, Date, Event
- `widget29` (Upcoming Events): show Edit, Date, Event
- `widget30` (Upcoming Shifts): show Shift Start, Description
- `widget31` (Past Events): show Edit, Date, Event
- `widget32` (Past Shifts): currently configured to show first 3 columns (Edit, Shift Start, Description), hide 4+
- `widget34` (Event Locations): show edit + location, with location truncation

## Truncation Notes
For reliable ellipsis in table cells:
- Use fixed table layout where needed.
- Apply `white-space: nowrap; overflow: hidden; text-overflow: ellipsis;`
- If needed, add `max-width: 0` on the constrained cell.

## Three-Column Card Row
Desktop layout (>=992px) intentionally places:
- Event Information (`widget36`)
- Reports (`widget37`)
- Set Up (`widget38`)
in a 3-column row.

## Styling Individual Pages
When adding styles for a specific page:

1. **Create or update the page's SCSS file** in its navigation folder under `assets/scss/pages/`:
   - File naming: `_PAGENAME.scss` (e.g., `_upcoming-events.scss`, `_admin-contacts.scss`)

2. **Wrap all styles in the scoping selector**:
   ```scss
   body:has(#Menu_Item_ID[value="XXXX"]) {
     // All page-specific styles here
   }
   ```

3. **Import the file** in `assets/scss/bootstrap_override_colors_Cub_Scouts.scss`:
   ```scss
  @import "pages/events/upcoming-events";
   ```

4. **Keep it minimal**: Only style what's needed for this page. Let global styles handle baseline.

5. **Test locally**:
   ```bash
  npm run build:css
   ```

6. **Verify in browser**: Open the page and confirm styles apply correctly, then verify another page isn't affected.

## Where to Continue
- Check `assets/scss/pages/` for existing page files to use as style reference.
- If user reports styling issues on a specific page, verify the page is scoped with `body:has(#Menu_Item_ID[value="XXXX"])`.
- If styles appear on unrelated pages, audit the offending SCSS file for unscoped selectors and wrap them.
- Example well-scoped files: `_event.scss`, `_membership-hub.scss`, `_admin-contacts.scss`.
