# Codebase Review: Wonnegauer Designwerkstatt

## Architecture
This is a custom PHP-based website built without a heavy framework. It uses a straightforward structure suitable for a small to medium-sized informational site.
- **Entry point**: `public/index.php` serves as the front controller.
- **Routing & Config**: `config.php` likely handles routes and global settings.
- **Helpers**: `helpers.php` provides utilities like the `url()` function.

## Directory Structure
- **`/components/`**: Reusable view partials like `header.php` and `footer.php`.
- **`/views/`**: Contains the main layout (`layout.php`) and individual page templates (e.g., `index.php`, `kontakt.php`, `impressum.php`).
- **`/public/`**: The web root containing assets (`/assets/`), `manifest.json`, service worker `sw.js`, and the entry `index.php`.

## Assets
- CSS is located at `public/assets/style.css`.
- JavaScript is at `public/assets/nav.js`, which handles navigation, cookie banners, etc.

## Proposed Changes for Current Request
1. **Add Printer Icon to Footer**: Modify `components/footer.php` to include a new list item in the `.footer-nav` containing the SVG and "Drucken" text.
2. **Add Custom JS**: Add an event listener to `public/assets/nav.js` to trigger `window.print()` when the button is clicked.
