/* global Alpine */
// noinspection JSCheckFunctionSignatures,JSValidateTypes
// noinspection JSCheckFunctionSignatures

import './main.css';
import './docs.js';
import { createNavigation } from './docs.js';
import highlightAllCodeBlocks from './plugins/shiki.js';

document.addEventListener('alpine:init', () => {
    const STORAGE_KEY = 'tenta.theme.dark';

    const state = Alpine.reactive({
        theme: {
            dark: window.$tenta?.theme?.dark ?? JSON.parse(localStorage.getItem(STORAGE_KEY) ?? 'false'),
        },
    });

    Alpine.effect(() => {
        document.documentElement.classList.toggle('dark', state.theme.dark);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(state.theme.dark));
    });

    Alpine.store('tenta', {
        theme: {
            get dark() {
                return state.theme.dark;
            },
            set dark(value) {
                state.theme.dark = value;
            },
            toggle() {
                state.theme.dark = !state.theme.dark;
            },
        },
        navigation: createNavigation(),
    });

    window.$tenta = Alpine.store('tenta');
    window.$tenta.navigation.init();
});


document.addEventListener('livewire:navigated', () => {
    document.documentElement.classList.toggle('dark', $tenta.theme.dark);
    $tenta.navigation.reinit();
     highlightAllCodeBlocks();
});
