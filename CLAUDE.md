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

## Local Environment
- Local Sites (by Flywheel) at /Users/rtg/Local Sites/minotti/
- Backup theme at minotti5x-old-backup for reference

## Gotchas
- Never use `git checkout origin/<branch> -- .` to compare files — it overwrites the working tree. Use `git archive | tar` to a temp dir instead.
