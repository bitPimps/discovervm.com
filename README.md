# discovervm.com

Static marketing and education site for **The Barral Institute** — a continuing education organization for healthcare professionals specializing in Visceral Manipulation (VM) since 1987.

## Tech Stack

| Layer | Technology |
|-------|-----------|
| HTML | Static single-page (`index.html`) |
| CSS framework | [Bootstrap 5.3.7](https://getbootstrap.com/) via CDN |
| Icons | [Bootstrap Icons 1.13.1](https://icons.getbootstrap.com/) via CDN |
| Custom CSS | SCSS → compiled to `css/app.min.css` |
| Server | IIS (Windows) — configured via `web.config` |
| Analytics | Google Tag Manager (GTM-5C2J4J7, GTM-5CHHWRV) |
| Structured data | JSON-LD (Schema.org) |

## Project Structure

```
discovervm.com/
├── index.html                  # Main page (all site content lives here)
├── sitemap.xml
├── robots.txt
├── web.config                  # IIS server config (error handlers, security headers, caching)
├── site.webmanifest            # PWA manifest
├── css/
│   └── app.min.css             # Compiled output — do not edit directly
├── src/
│   ├── scss/                   # Source stylesheets
│   │   ├── app.scss            # Entry point
│   │   ├── config/
│   │   │   ├── _colors.scss
│   │   │   ├── _backgrounds.scss
│   │   │   └── _typography.scss
│   │   └── modules/
│   │       ├── _buttons.scss
│   │       ├── _navbar.scss
│   │       └── _hero.scss
│   └── error_docs/             # Custom IIS error pages (400–503)
└── images/
    ├── logos/                  # Organization logos (bi, iahe, iahp, uii)
    ├── backgrounds/
    └── pages/
```

## Development

### Prerequisites

- [VS Code](https://code.visualstudio.com/) with the [Live Sass Compiler](https://marketplace.visualstudio.com/items?itemName=glenn2223.live-sass) extension

### Editing styles

1. Edit files under `src/scss/`
2. Live Sass Compiler auto-compiles on save → outputs to `css/app.min.css`
3. Never edit `css/app.min.css` directly

### Editing content

All page content is in `index.html`. The site is a single static HTML file — no build step is required for HTML changes.

## Deployment

The site runs on IIS. Deploy by copying changed files to the server root. Key server behaviours defined in `web.config`:

- Custom error pages routed to `src/error_docs/`
- Static asset cache: 364-day `max-age`
- Security headers: CSP, `X-Frame-Options`, `X-Content-Type-Options`

## Structured Data (Schema.org)

Three JSON-LD blocks are embedded at the bottom of `index.html`:

| Block | Type | `@id` |
|-------|------|-------|
| Organization | `EducationalOrganization`, `Organization` | `#organization` |
| Website | `WebSite` | `#website` |
| Founder | `Person` (Jean-Pierre Barral) | `#person-barral` |

Validate with:
- [Schema Markup Validator](https://validator.schema.org)
- [Google Rich Results Test](https://search.google.com/test/rich-results)

## External Links

| Destination | URL |
|-------------|-----|
| Course catalogue | https://www.barralinstitute.com/courses |
| Products shop | https://shop.iahe.com/Product-List/Visceral-Manipulation-Products |
| Find a therapist | https://www.iahp.com/pages/search/ |
| IAHE | https://www.iahe.com |
| Upledger Institute | https://www.upledger.com |
