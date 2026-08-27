# Pack12Rocks Agent Instructions

## Fast Path

- Production styling lives in `assets/scss/`; compiled output is `assets/css/bootstrap_override_colors_Cub_Scouts.css`.
- Treat captured PHP/HTML pages as read-only references unless the user explicitly requests markup changes.
- For a page task, inspect only the target page first. Extract `Menu_Item_ID`, `Form_ID`, fieldset IDs, control IDs, and nearby markup. Do not map the whole repository.
- Re-read a target Sass partial before editing because the user frequently adjusts styles between turns.
- Prefer extending an existing nearby page partial or shared mixin. Add a new partial only when the page has its own stable scope.

## Required Scoping

- Scope page styles with both generated IDs when available:
  `body:has(#Menu_Item_ID[value="..."]):has(#Form_ID[value="..."])`.
- Generic classes such as `.new-row`, `.center-block`, `.text-center`, and `.no-border` must never receive unscoped page-specific rules.
- Use stable generated IDs and `:has()` selectors rather than changing generated markup or shared JavaScript.

## Form Defaults

- Reuse `detail-form-shell`, `detail-form-table-labels`, and `detail-form-stacked-mobile` where appropriate.
- Forms should use the full available desktop width with 20px left/right page gutters unless the user says otherwise.
- Mobile forms, action rows, and guidance panels must retain explicit 20px left/right gutters. Put these overrides after mixin includes because `detail-form-shell` resets mobile padding.
- Mobile actions normally use a two-column grid and full-width buttons within each grid cell.
- Generated text nodes can become anonymous grid items. Pin controls to explicit grid rows/columns when needed.
- Shared mobile mixins may apply `display: block !important`; override the actual conflicting declaration when a grid or flex layout does not take effect.

## Validation

- After the first Sass edit, run `npm run build:css` immediately.
- Final checks: Sass/CSS diagnostics and `git -c core.whitespace=cr-at-eol diff --check`.
- Do not run `npm test`; it is a no-op.
- Do not start `npm run watch:css`; native watch fails with `EMFILE` in this workspace.
- Do not use browser automation unless the user explicitly requests it. Compile and statically validate, then ask the user to review visually.
- Do not inspect generated CSS after a successful build unless selector presence, specificity, or cascade order is in question.

## Communication

- Keep progress updates and final summaries brief. Report changed files, behavior, and validation only.
- Do not attribute unchanged styling to browser cache. Verify selector scope, display model, specificity, and cascade order first.

See `AGENT-HANDOFF.md` only when historical page maps or deeper repository context are needed.