## Shiki Codegen Optimization

Shiki can be heavy if all languages and themes are loaded.  
To optimize performance, we only generate the required languages and themes using `shiki-codegen`.

If you need additional languages or themes in the future, simply regenerate the bundle with:

```bash
npx shiki-codegen ./resources/theme/plugins/shiki.bundle.js --engine javascript --langs javascript,php,blade,bash,html,dotenv --themes github-light,github-dark
```

Make sure to adjust the `--langs` and `--themes` options according to your needs.
