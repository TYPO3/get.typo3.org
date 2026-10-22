# AGENTS.md — TYPO3 project

Instructions for AI agents working in this TYPO3 project. Read this first, then verify against the actual project state. Do not assume; check.

## 0. Orient yourself (always do this first)

```bash
composer show typo3/cms-core | head -5      # exact TYPO3 version
php -v                                      # PHP version
vendor/bin/typo3 list                       # available CLI commands
vendor/bin/typo3 site:list                  # configured sites
vendor/bin/typo3 extension:list             # active extensions
```

- The TYPO3 version decides which APIs and docs apply. Never use docs for a different major version.
- Docs for the installed version: https://docs.typo3.org/ (select the matching version in the URL).
- Official docs are the source of truth. Blog posts and older answers may describe removed APIs.

## 1. Project layout (Composer mode)

| Path | Purpose | Edit? |
|---|---|---|
| `composer.json` / `composer.lock` | Dependencies | Yes, via `composer` only |
| `packages/<vendor>_<name>/` | Project's own extensions (site package) | **Yes, main work area** |
| `config/sites/<identifier>/` | Site configuration: languages, base URLs, routing, site settings | Yes (YAML) |
| `config/system/settings.php` | Instance settings | Only if asked; never commit secrets |
| `config/system/additional.php` | Environment overrides | Use env variables for secrets |
| `public/` | Web root, mostly generated | No |
| `var/` | Cache, logs, lock files | No (read logs for debugging) |
| `vendor/` | Third-party code including TYPO3 core | **Never edit** |

## 2. Hard rules

1. **Never modify `vendor/` or TYPO3 core.** Extend through extensions, events (PSR-14), middleware, TCA overrides, or TypoScript.
2. **Never write SQL directly to content tables.** Use the DataHandler (`TYPO3\CMS\Core\DataHandling\DataHandler`) so permissions, history, workspaces and cache clearing work.
3. **Never commit credentials.** Use environment variables or `.env` files excluded from VCS.
4. **Don't use the Install Tool in production.** Use CLI commands.
5. **Install extensions with Composer**, not by uploading to the backend.
6. **Stay in scope.** Don't upgrade TYPO3 major versions or add extensions unless the task says so.
7. **Prefer configuration as code** (site config, Site Sets, TCA, TypoScript in files) over changes made in the backend.

## 3. Common tasks

### Local environment (DDEV)
```bash
ddev start
ddev composer install
ddev typo3 cache:flush
```

### After changing extension code or TCA
```bash
vendor/bin/typo3 cache:flush
vendor/bin/typo3 extension:setup          # applies DB schema for active extensions
```

### After pulling a new TYPO3 version
```bash
vendor/bin/typo3 upgrade:list
vendor/bin/typo3 upgrade:run
```

### Add a language
Edit `config/sites/<identifier>/config.yaml` under `languages:`, then flush caches. Translate page and content records via the backend or the DataHandler.

### Add a content type
Preferred order:
1. Content Blocks (`friendsoftypo3/content-blocks`), if installed in this project
2. Own extension: TCA in `Configuration/TCA/Overrides/tt_content.php`, Fluid template in `Resources/Private/`, registration in the site package

Never invent field names. Check existing TCA first.

### Create or change pages and content programmatically
Use the DataHandler from a CLI command or script in the site package. Don't insert into `pages` or `tt_content` by SQL.

### Debugging
- Logs: `var/log/`
- Cache problems: `vendor/bin/typo3 cache:flush`
- Routing problems: check `config/sites/<identifier>/config.yaml` (`base`, `routes`, `routeEnhancers`)
- Fluid errors: check template paths and `settings` in the site configuration or Site Set

## 4. Definition of done

- [ ] `composer validate` passes
- [ ] `vendor/bin/typo3 cache:flush` runs clean
- [ ] `vendor/bin/typo3 extension:setup` runs without errors
- [ ] Changes live in `packages/` or `config/`, none in `vendor/`
- [ ] Tests pass if present (`composer test` or the project's test script)
- [ ] Summary lists files changed and any manual backend steps still needed

## 5. When to stop and ask

- The task needs a major version upgrade or a new third-party extension
- The change touches production data, user permissions or backend user accounts
- Docs for the installed version contradict what you found in the code
- You cannot reproduce the problem locally

## 6. Useful references

- Docs: https://docs.typo3.org/
- Security advisories: https://news.typo3.com/security
- Supported versions and requirements: https://get.typo3.org/api/v1/major/
- Coding guidelines: see the "TYPO3 Explained" and "Core API" manuals for the installed version
