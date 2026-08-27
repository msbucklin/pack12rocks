# Pack12Rocks TroopWebHost Styles

This project modernizes a TroopWebHost site with CSS overrides. The captured PHP, HTML, and JavaScript files document the generated site but are read-only. Styling source lives in `assets/scss/`, and the compiled stylesheet is `assets/css/bootstrap_override_colors_Cub_Scouts.css`.

## Use the Styling Agent

The workspace includes a custom GitHub Copilot agent named **TroopWebHost Stylist**. It applies the UI patterns already established in this project to additional pages.

1. Open this repository as a workspace in VS Code.
2. Open GitHub Copilot Chat.
3. Open the agent picker at the top of the Chat view.
4. Select **TroopWebHost Stylist**.
5. Name the captured page and describe the visual result or problem to address.

For example:

```text
Style events/event-attendance.php using the established form and action-button patterns. Make the layout work on desktop and mobile.
```

```text
Apply our existing responsive table treatment to membership/training.php.
```

```text
Fix the mobile spacing and action layout on events/upload-scoutbook-events.php.
```

Include screenshots or specific observations when appearance is important, such as "the labels are too narrow" or "the buttons stack incorrectly below 767px."

## What the Agent Does

The agent will:

- Inspect the requested captured page for stable generated IDs and structure.
- Reuse existing Sass mixins, components, and nearby page patterns.
- Scope page-specific rules with `Menu_Item_ID` and `Form_ID` when available.
- Modify Sass only; captured markup and JavaScript remain unchanged.
- Compile the production CSS with `npm run build:css` after its first styling edit.
- Run Sass/CSS diagnostics and whitespace checks before finishing.
- Ask you to review the result in your browser.

## Build Manually

Install dependencies once:

```bash
npm install
```

Compile the stylesheet from the project root:

```bash
npm run build:css
```

Upload `assets/css/bootstrap_override_colors_Cub_Scouts.css` to TroopWebHost using the site's normal stylesheet deployment process.

## Project Rules

- Treat captured PHP, HTML, and JavaScript as read-only references.
- Make maintainable changes in `assets/scss/`, not directly in generated CSS.
- Keep page-specific selectors scoped to stable generated page and form IDs.
- Prefer established project patterns over introducing a new visual system for each page.