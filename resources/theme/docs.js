/* global Alpine */

document.addEventListener('alpine:initializing', () => {
    Alpine.store('tocNavHighlighter', {
        visibleHeadingId: null,
    });

    let store = Alpine.store('tocNavHighlighter');
    let headings = [];

    document.addEventListener(
        'scroll',
        Alpine.throttle(() => {
            onScroll();
        }, 25),
    );

    document.addEventListener('livewire:navigated', () => {
        headings = document.querySelectorAll('h1, h2, h3, h4');

        assignHeadingIds();
        onScroll();
    });

    function assignHeadingIds() {
        headings.forEach((heading) => {
            if (!heading.id) {
                heading.id = heading.textContent.trim().replace(/\s+/g, '-').toLowerCase();
            }

            heading.style.scrollMarginTop = '80px'; // sesuaikan tinggi header kamu (65px + margin nafas)
        });
    }

    function onScroll() {
        let isAtTop = window.scrollY < 175;
        let isAtBottom = window.scrollY + window.innerHeight > document.body.offsetHeight - 175;
        let relativeTop = isAtBottom ? window.innerHeight : isAtTop ? 250 : window.innerHeight / 2;

        let headingMap = {};

        headings.forEach((heading) => {
            let offset = heading.getBoundingClientRect().top - relativeTop;
            headingMap[offset] = heading;
        });

        let closest =
            isAtTop || isAtBottom
                ? Math.max(...Object.keys(headingMap).filter((top) => top < 0))
                : Math.min(...Object.keys(headingMap).filter((top) => top > 0));

        if ([Infinity, -Infinity, NaN].includes(closest)) {
            store.visibleHeadingId = null;
            return;
        }

        store.visibleHeadingId = headingMap[closest]?.id;
    }
});
