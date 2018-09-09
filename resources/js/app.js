const attachObserver = observer => target => observer.observe(target);
const detachObserver = observer => target => observer.unobserve(target);

const observerCallback = (entries, observer) => entries
    .filter(entry => entry.isIntersecting)
    .map(({ target }) => target)
    .map(preloadImage)
    .map(detachObserver(observer));

const preloadImage = target => {
    const src = target.getAttribute('data-src');

    if (src) {
        // target.removeAttribute('data-src');
        target.classList.add('fadeInFull')
        target.setAttribute('src', src);
        target.addEventListener('load', () => console.log('loaded'));
    }

    return target;
}

const observer = new IntersectionObserver(observerCallback, {
    root: null,
    rootMargin: '0px',
    threshold: 0.75
});

Array
    .from(document.querySelectorAll('[data-src]'))
    .forEach(attachObserver(observer));

jsToggleNavigation.addEventListener('click', ({ target }) => {
    const isExpanded = !(target.getAttribute('aria-expanded') === 'true');
    target.setAttribute('aria-expanded', isExpanded);
});
