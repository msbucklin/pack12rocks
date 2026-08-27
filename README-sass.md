# Sass workflow for Pack 12 Rocks

This project now includes a local Sass source file for the top-level override stylesheet.

## Source
- scss/bootstrap_override_colors_Cub_Scouts.scss

## Output for upload
- css/bootstrap_override_colors_Cub_Scouts.css

## Compile

From the project root:

```bash
npm run build:css
```

Or watch for changes:

```bash
npm run watch:css
```

## Notes
- The generated CSS file is the one uploaded to the site.
- The Sass file is where edits should be made for maintainability.
- `npm run build:css` emits compressed CSS without a source map to keep the upload artifact small.
- Sass is not currently installed in this environment because npm registry access is blocked, so the compile command will work once npm registry access is available.
