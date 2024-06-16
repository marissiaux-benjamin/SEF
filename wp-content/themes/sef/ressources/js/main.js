const ratio = .6;
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}

function handleIntersect(entries, observer) {
    entries.forEach(entry => {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible');
            observer.unobserve(entry.target);
        }
    });
}

const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('.reveal').forEach(element => {
    observer.observe(element);
});