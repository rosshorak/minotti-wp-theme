# Minotti WordPress Theme (minotti5x)

## Stack
- WordPress theme built on TailPress framework
- Vite for asset bundling, Tailwind CSS v4
- Composer for PHP dependencies, npm for frontend

## Repository
- GitHub: rosshorak/minotti-wp-theme (branch: main)
- Build artifacts (dist/, vendor/, node_modules/, *.lock) are gitignored — not committed

## Conventions
- Products mega dropdown uses `href="#"` placeholder intentionally — do not replace with external URL
- Do not add "Co-Authored-By" or any AI attribution lines to commit messages

## Development Setup

1. `nvm use` — switch to Node v23 (per `.nvmrc`)
2. `npm install` — install frontend dependencies
3. `npm run dev` — starts Vite dev server on `http://localhost:3000`
4. Open `http://minotti.local` in your browser

Vite serves CSS/JS assets with hot-reload. WordPress (via Local WP) serves the site at `minotti.local`. The TailPress ViteCompiler auto-detects the dev server and loads assets from it.

### Building for production
1. `npm run build` — compiles assets to `dist/`
2. FTP the theme files to the server

### Custom styles
Edit `resources/css/custom/styles.css` for custom CSS. All custom CSS files are imported via `resources/css/app.css`.

### Vite config
- `vite.config.mjs` — `origin` must match your Local WP site URL (`http://minotti.local`)
- If using localhost routing mode instead of site domains, update `origin` to match the port (e.g. `http://localhost:10106`)

## Local Environment
- Local Sites (by Flywheel) at /Users/rtg/Local Sites/minotti/
- Site domains mode: `http://minotti.local`
- Backup theme at minotti5x-old-backup for reference

## Gotchas
- Never use `git checkout origin/<branch> -- .` to compare files — it overwrites the working tree. Use `git archive | tar` to a temp dir instead.
- Disable caching plugins during local development — they prevent Vite hot-reload from working.
