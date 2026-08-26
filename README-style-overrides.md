# Style Override Consolidation Research

This document records recurring HTML structures in the local PHP snapshots and
how the current Sass override layer handles them. It is a research snapshot for
future consolidation work and a status log for completed consolidation slices.

## Scope and methodology

- Snapshot date: August 26, 2026.
- Pages reviewed: 124 PHP pages, excluding `index.php` and `includes/menu.php`.
- Sass source: `assets/scss/`.
- Sass entry point: `assets/scss/bootstrap_override_colors_Cub_Scouts.scss`.
- Generated output: `assets/css/bootstrap_override_colors_Cub_Scouts.css`.
- Counts below use actual HTML elements, not asset references. For example,
  nearly every page loads `sortableV2.js`, but only 68 pages contain a sortable
  table.

The snapshots share a large TroopWebHost shell: navigation, modal dialogs,
hidden state fields, `easyform`, `.new-row`, `.container-flex`, and
`.center-block`. The useful page-family boundaries begin inside that shell.

## Structural inventory

| Marker or structure | Pages | Notes |
| --- | ---: | --- |
| `.page-title` | 121 | Present almost everywhere, currently hidden globally. |
| `.new-row` and `.center-block` | 120 | Primary generated layout shell. |
| Button inputs using `.btn` | 121 | Action rows are nearly universal. |
| Sortable data table | 68 | Actual `<table>` with a `sortable` class. |
| `.table-responsive` shell | 63 | Usually wraps a grid and its toolbar. |
| `table.no-border` | 58 | Used for edit forms, detail views, upload forms, and some widgets. |
| `.control-label` | 53 | Strong signal for generated detail/edit forms. |
| `.RequiredIndicator` | 46 | Required-field marker in editable forms. |
| `.entrypostscript` | 41 | Supplemental form-field text and grouped controls. |
| `.rows-per-page` | 36 | List toolbar control. |
| `.pagination` | 16 | Paginated list subset. |
| `.bodyheading` | 11 | Section heading embedded in `no-border` tables. |
| Numbered widget classes | 7 | Home and hub dashboard family. |
| `.nav-tabs` | 3 | Upcoming Events, Adventures and Badges, Admin Contacts. |
| `.display-only-data` | 1 | Event detail rich-text values. |

### Dominant family overlap

The two largest families overlap and should not be treated as mutually
exclusive page types:

| Family | Pages |
| --- | ---: |
| Sortable grid only | 45 |
| Detail/form table only | 35 |
| Hybrid: sortable grid and detail/form table | 23 |
| Neither | 21 |

Hybrid examples include:

- `administration/user.php`
- `administration/user-role-edit.php`
- `events/event.php`
- `membership/member.php`
- `money/account-update.php`
- `money/transaction-update.php`
- `my-stuff/my-info.php`
- `my-stuff/sign-up-upcoming-events.php`

This overlap matters: a page-level selector that styles every table as a list
or every table as a form will affect the wrong region on hybrid pages.

## Page families

### Shared application shell

Common markup:

- `form#easyform`
- `.navtable`, `.navicon`, `#mainmenu`, `.navmenulower*`
- `.new-row > .container-fluid.container-flex > .center-block`
- Bootstrap modal markup for format, reporting, help, and report choices
- Hidden fields such as `Menu_Item_ID`, `Form_ID`, `Stack`, and action state

Current Sass ownership:

- `base/_reset.scss`
- `base/_global.scss`
- `layout/_grid.scss`
- `components/_navigation.scss`

Notes:

- `Menu_Item_ID` is the best page identity marker when it is present and
  stable. Existing examples use `body:has(#Menu_Item_ID[value="319"])`.
- Generated section IDs such as `#fs952` usually identify a region on only one
  page. Most `fs` IDs occur once; the most repeated IDs occur only twice.
- Broad global rules have a large blast radius. In particular,
  `base/_global.scss` disables many Bootstrap clearfix pseudo-elements, hides
  `.page-title`, and resets all `.center-block` margins.

### Action rows

Common markup:

```html
<div class="new-row" id="fs...">
  <div class="container-fluid container-flex">
    <div class="center-block">
      <div class="text-center">
        <span><input class="btn ..."></span>
      </div>
    </div>
  </div>
</div>
```

Existing abstraction:

- `@mixin list-action-row` in `abstracts/_mixins.scss`.
- Global button visuals in `base/_global.scss`.

Current limitation:

- The mixin is used only by Upcoming Events and Admin Contacts even though the
  action-row structure appears throughout the site.
- Some mobile pages need full-width buttons, two-column button grids, centered
  buttons, or destructive actions separated from primary actions. Those layout
  differences should remain page variants rather than one universal rule.

Representative pages:

- `events/upcoming-events.php`
- `money/individual-transactions.php`
- `my-stuff/change-password.php`
- `administration/user.php`

### Sortable list and management grids

Common markup:

- `.center-block.table-responsive`
- Outer presentation table containing toolbar rows
- `table.table-striped.table-bordered.table-condensed.table-curved.sortable`
- Sort links with `.sortheader` and `.sortarrow`
- Optional rows-per-page and pagination controls
- Action buttons in the first or last column

Existing abstraction:

- `components/_tables.scss` owns the visual baseline for
  `table.sortable.table-curved`.
- `@mixin list-toolbar-shell` owns the rows-per-page and pagination shell.
- `@mixin list-page-tabs` owns the three tabbed-list headers.
- Page partials still own column widths, alignment, visibility, and mobile
  layout.

Representative pages:

- Simple lists: `membership/active-members.php`,
  `resources/add-update-forms.php`.
- Wide financial grids: `money/individual-transactions.php`,
  `money/group-transactions.php`.
- Lists with tabs: `events/upcoming-events.php`,
  `cub-scouts/adventures-and-badges.php`,
  `administration/admin-contacts.php`.
- Administration matrices: `administration/admin-user-permissions.php`,
  `administration/user-role-edit.php`.

Important variants:

- Horizontal scrolling is appropriate for wide financial and permission
  matrices.
- Some mobile grids preserve table layout and hide or truncate columns.
- Other pages transform rows into stacked/card-like records.
- Calendar tables are not ordinary sortable grids and require fixed seven-day
  geometry.
- Rotated or vertical headers should remain an explicit matrix/calendar
  variant, not part of the shared table baseline.

### Detail and edit forms

Common markup:

- `table.no-border`
- Two-column label/value rows
- `.control-label`, `.text-right`, `.text-left`
- `.RequiredIndicator`, `.form-control`, `.entrypostscript`
- Hidden required-value inputs mixed into visible field markup
- `.bodyheading` rows dividing long forms into sections

Representative pages:

- Small form: `my-stuff/change-password.php`.
- Long profile form: `my-stuff/my-info.php`.
- Member form: `membership/member.php`.
- Transaction form: `money/transaction-add.php`.
- Configuration add form: `site-configuration/training-courses-add.php`.
- Upload form: `membership/upload-scoutbookplus-roster-report.php`.

Potential shared layers to investigate later:

- Detail/form card shell.
- Desktop label/value column sizing.
- Mobile stacked labels and controls.
- Required indicators and validation state.
- Section-heading rows.
- Compound controls such as date/time groups and phone-number segments.

Cautions:

- `no-border` does not mean only one thing. It is also used by read-only detail
  views, upload instructions, confirmation pages, and widget forms.
- Compound fields depend on generated `DIVENTRY...` IDs and adjacent hidden
  inputs. Consolidate their shell first; keep field-specific grouping local.
- Read-only rich text can contain images, video, and embeds. The Event page is
  currently the only page with `.display-only-data` and needs scoped responsive
  media behavior.

### Hub and widget dashboards

Pages:

- `home/home.php`
- `home/home2.php`
- `home/home-parent.php`
- `home/home-loggedout.php`
- `events/events-hub.php`
- `membership/membership-hub.php`
- `money/financial-hub.php`

Common markup:

- `.center-block.widget5`, `.widget60`, `.widget75`, and related numbered
  widget classes
- Widget heading followed by a compact table, paragraph, or form
- Multiple widgets inside one flex container

Existing abstraction:

- `components/_widgets.scss`.
- `widget-card`, `widget-heading`, and `widget-table` mixins.
- `pages/home/_home.scss` also applies the widget mixins.

Consolidation note:

- Widget number indicates shape/behavior more reliably than page directory.
  Shared widget visuals belong in the component partial; only dashboard
  composition and exceptional widget content should remain page-scoped.

### Query, chooser, and report forms

Representative pages:

- `money/query.php`
- `money/fiscal-year-query.php`
- `money/report-financial-history.php`
- `money/reconciliation-deposits-select.php`
- `money/reconciliation-withdrawals-select.php`
- `events/event-reports.php`

These mostly reuse the detail/form shell but often add centered submit rows,
date ranges, radio groups, or report-format behavior. Treat them as form
variants until markup comparison proves a separate component is useful.

### Upload and batch-update pages

Representative pages:

- `membership/upload-adults-from-scoutbook.php`
- `membership/upload-roster-from-my-scouting.php`
- `membership/update-all-medical-form-date.php`
- `cub-scouts/upload-scoutbook-plus-advancement.php`
- `money/upload-account-balances-from-spreadsheet.php`

These combine instructions, file inputs, action rows, and sometimes preview or
result grids. They should compose shared form, action-row, and table components
rather than receive a single broad upload-page rule.

## Current Sass ownership

The entry point imports shared layers in this order:

1. Variables and mixins.
2. Reset and global rules.
3. Generated layout/grid rules.
4. Navigation, widgets, and tables.
5. Page-specific partials.

Current shared mixins:

- `widget-card`
- `widget-heading`
- `widget-table`
- `responsive-media-reset`
- `list-page-tabs`
- `list-action-row`
- `list-toolbar-shell`

There are 29 Sass files. The largest active consolidation targets are:

| Partial | Lines | Observation |
| --- | ---: | --- |
| `pages/events/_event.scss` | 2,736 | Contains Event and Events Hub behavior; ownership is broader than its name. |
| `pages/membership/_member.scss` | 875 | Long hybrid detail/grid page with many field-specific rules. |
| `components/_navigation.scss` | 509 | Shared and intentionally global. |
| `pages/membership/_membership-hub.scss` | 507 | Dashboard composition plus widget variants. |
| `pages/my-stuff/_my-info.scss` | 497 | Long form, compound fields, and a sortable section. |
| `pages/administration/_user.scss` | 427 | Hybrid form/list behavior and mobile overrides. |
| `pages/administration/_user-role-edit.scss` | 426 | Permission matrix specialization. |

## Known duplication and ownership issues

- Three root-level page partials are identical to Administration copies:
  `_admin-user-permissions.scss`, `_user-role-edit.scss`, and
  `_user-send-password.scss`.
- Only the files under `pages/administration/` are imported. The root-level
  copies are inactive and are candidates for deletion after a separate review.
- `pages/events/_event.scss` also contains Events Hub styling scoped by
  `Menu_Item_ID=5787`. This should eventually move to a hub-specific partial or
  shared dashboard layer.
- `pages/home/_content.scss` targets section IDs also found on non-home forms.
  Generated-ID selectors in broadly imported partials need a page scope before
  they can be considered safe.
- Several page partials repeat action-row flex rules, card shells, label/value
  table rules, and mobile full-width control rules already represented by
  mixins or component partials.

## Selector reliability

Prefer selectors in this order when consolidating:

1. Semantic/stable classes already emitted across pages, such as `.sortable`,
   `.table-curved`, `.no-border`, `.control-label`, and `.rows-per-page`.
2. A page identity scope using `Menu_Item_ID`, combined with structural
   classes for the region being changed.
3. Generated section IDs (`#fs...`) for genuine one-page exceptions.
4. Generated field IDs (`#DIVENTRY...`) only for compound-field layout that
   cannot be expressed structurally.

Avoid using a filename convention as proof of structure. Add, update, report,
and hub filenames are useful hints, but the markup must decide component
membership.

## Suggested future investigation order

Status as of August 26, 2026:

- The regression matrix below is established and was used for the first visual
  checks.
- Exact-match action rows on Automatic Send, User, and Send Password now use
  `list-action-row(center)` while retaining their page-specific mobile grids.
- Desktop and 390-pixel mobile checks confirmed the expected flex/grid modes,
  button counts, and no horizontal page overflow on all three pages.
- Upcoming Events and Admin Contacts already used the shared action-row mixin.
- Change Password, My Info, User Permissions, and other specialized action
  sections remain local because their width, spacing, or card behavior differs.
- Users and Passwords and User Permissions now use `list-toolbar-shell` while
  retaining their existing generated labels, pagination refinements, and
  distinct mobile layouts.
- Desktop and 390-pixel mobile checks confirmed both toolbar variants preserve
  their pre-change shell width, overflow, borders, spacing, pagination geometry,
  and zero horizontal page overflow.
- All Users and Passwords `#fs718`, `#fs719`, and `#sortablegrid719` rules now
  live in `pages/administration/_users-and-passwords.scss`; none remain in the
  Membership partial. Desktop and 390-pixel mobile checks confirmed the move
  preserved toolbar geometry, the three-column/one-column card layouts, button
  wrapping, and page overflow behavior.
- Pagination arrow images are already missing on the local Users and Passwords
  and User Permissions snapshots because their markup references relative
  `/assets/images/pageleft.gif` and `/assets/images/pageright.gif` files that are not in those directories.

Remaining investigation order:

1. Add explicit action-row variants only when another equivalent group is
   identified; do not apply the mixin to `.text-center` table cells.
2. Consolidate the remaining tabbed-list shell used by Adventures and Badges.
3. Define shared detail/edit form shells while preserving compound fields.
4. Move common sortable-table visuals and only proven responsive behavior into
   table components.
5. Separate Events Hub rules from the Event detail partial.
6. Reconcile widget rules between `_widgets.scss`, `_home.scss`, and hub
   partials.
7. Remove inactive duplicate partials after confirming they are not referenced
   by external build tooling.
8. Reduce global overrides only after representative desktop and mobile checks.

## Regression matrix for future changes

| Behavior | Desktop and mobile representatives |
| --- | --- |
| Standard list | `membership/active-members.php` |
| Very wide financial list | `money/individual-transactions.php` |
| Paginated list toolbar | `membership/training.php` |
| Tabbed list | `events/upcoming-events.php` |
| Permission matrix | `administration/admin-user-permissions.php` |
| Small edit form | `my-stuff/change-password.php` |
| Long compound form | `my-stuff/my-info.php` |
| Hybrid detail and list | `membership/member.php` |
| Rich-text detail/media | `events/event.php` |
| Calendar grid | `events/calendar.php` |
| Widget dashboard | `home/home.php` |
| Hub dashboard | `membership/membership-hub.php` |
| Upload workflow | `money/upload-account-balances-from-spreadsheet.php` |
| Configuration list/add pair | `site-configuration/training-courses.php` and `site-configuration/training-courses-add.php` |

For each future consolidation, verify at minimum:

- No unexpected horizontal page overflow.
- Intended table overflow remains usable.
- Labels, inputs, and action buttons do not overlap.
- Hidden generated fields do not create layout gaps.
- Sort links, pagination, modals, and menu toggles still work.
- Page-specific column visibility and mobile transformations remain intact.

## Reproducing the inventory

Useful searches from the project root:

```bash
# User-facing PHP page count
rg --files -g '*.php' | grep -v '^includes/' | grep -v '^index\.php$' | wc -l

# Pages with an actual sortable table
rg -l --pcre2 '<table[^>]+class="[^"]*sortable' --glob '*.php'

# Pages with generated detail/form tables
rg -l --pcre2 '<table[^>]+class="[^"]*no-border' --glob '*.php'

# Current Sass files and imports
rg --files assets/scss -g '*.scss'
rg '^@import|@include|@mixin' assets/scss -g '*.scss'
```

Re-run these counts when additional snapshots are added. The project index now
discovers PHP pages automatically, but this research document is intentionally
a point-in-time structural analysis.