// noinspection ES6RedundantAwait,JSCheckFunctionSignatures

import { bundledLanguages, codeToHtml } from './shiki.bundle.js';

export default async function highlightAllCodeBlocks() {
    const blocks = document.querySelectorAll('pre code');

    for (const block of blocks) {
        const code = block.textContent;
        let lang = (block.className.match(/lang-(\w+)/) || [null, 'plaintext'])[1];
        lang = lang in bundledLanguages ? lang : 'plaintext';

        block.parentElement.outerHTML = await codeToHtml(code, {
            lang,
            themes: {
                light: 'github-light',
                dark: 'github-dark',
            },
            wrap: true,
        });
    }
}
