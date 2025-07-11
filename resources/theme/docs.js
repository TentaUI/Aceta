/* global Alpine */

export const createNavigation = () => {
    return {
        active: null,
        headings: [],

        init() {
            this.updateHeadings();
            this.onScroll();

            document.addEventListener(
                'scroll',
                Alpine.throttle(() => {
                    this.onScroll();
                }, 25),
            );
        },

        reinit() {
            this.updateHeadings();
            this.onScroll();
        },

        updateHeadings() {
            this.headings = Array.from(document.querySelectorAll('h1, h2, h3, h4'));

            this.headings.forEach((heading) => {
                if (!heading.id) {
                    heading.id = heading.textContent.trim().replace(/\s+/g, '-').toLowerCase();
                }
                heading.style.scrollMarginTop = '97px';
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
                this.active = null;
                return;
            }

            this.active = headingMap[closest]?.id;
        },

        isActive(id) {
            return (this.active === id);
        },

        setActive(id) {
            setTimeout(() => {
                this.active = id;
            }, 10);
        },
    };
};
