# GitHub Pages

The static deployment is built from `আলহেরাসাইট - Copy/cloned_site`. On each
push to `main`, GitHub Actions prepares `_site` and deploys it to GitHub Pages.
The build rewrites root-relative local links so the site also works at the
repository URL (`https://ziauddin53.github.io/alhera/`), serves the public
homepage at the site root, and omits PHP source files.

To enable deployment:

1. Push these changes to the repository's `main` branch.
2. In GitHub, open **Settings → Pages** and select **GitHub Actions** as the
   build and deployment source.
3. Check the **Actions** tab for the deployment URL and status.

To test the static output locally, run:

```sh
python3 scripts/build-pages.py --output _site
```

GitHub Pages only serves static files. Login and password reset do not have a
connected authentication service, and admission/status data remains a
browser-local demo; these features need a separate backend to work across
devices or send messages.
