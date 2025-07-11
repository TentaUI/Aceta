Alpine.store('tocNavHighlighter', {
    visibleHeadingId: null,
    headings: [],

    init() {
        this.updateHeadings();
        this.assignHeadingIds();
        this.onScroll();

        document.addEventListener('scroll', Alpine.throttle(() => {
            this.onScroll();
        }, 25));

        document.addEventListener('livewire:navigated', () => {
            this.updateHeadings();
            this.assignHeadingIds();
            this.onScroll();
        });
    },

    updateHeadings() {
        this.headings = Array.from(document.querySelectorAll('h1, h2, h3, h4'));
    },

    assignHeadingIds() {
        this.headings.forEach((heading) => {
            if (!heading.id) {
                heading.id = heading.textContent.trim().replace(/\s+/g, '-').toLowerCase();
            }
            heading.style.scrollMarginTop = '80px';
        });
    },

    onScroll() {
        let isAtTop = window.scrollY < 175;
        let isAtBottom = window.scrollY + window.innerHeight > document.body.offsetHeight - 175;
        let relativeTop = isAtBottom ? window.innerHeight : isAtTop ? 250 : window.innerHeight / 2;

        let headingMap = {};

        this.headings.forEach((heading) => {
            let offset = heading.getBoundingClientRect().top - relativeTop;
            headingMap[offset] = heading;
        });

        let closest =
            isAtTop || isAtBottom
                ? Math.max(...Object.keys(headingMap).filter((top) => top < 0))
                : Math.min(...Object.keys(headingMap).filter((top) => top > 0));

        if ([Infinity, -Infinity, NaN].includes(closest)) {
            this.visibleHeadingId = null;
            return;
        }

        this.visibleHeadingId = headingMap[closest]?.id;
    },

    setVisibleHeading(id) {
        setTimeout(() => {
            this.visibleHeadingId = id;
        }, 10);
    },
});
