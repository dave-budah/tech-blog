const sr = ScrollReveal({
    origin: 'bottom',
    distance: '60px',
    duration: 3000,
    delay: 600,
    reset: true
});

sr.reveal('.hero-text', { origin: 'top' });
sr.reveal('.hero-image', { origin: 'bottom' });
sr.reveal('.services-title', {
    delay: 600,
    distance: '100px',
    interval: 100,
    origin: 'top'
});

sr.reveal('.services-block', {
    delay: 600,
    distance: '100px',
    interval: 100,
    origin: 'bottom'
});
sr.reveal('.projects-title', {
    delay: 600,
    distance: '100px',
    interval: 100,
    origin: 'top'
});
sr.reveal('.projects-block', { origin: 'bottom' });
sr.reveal('.articles-title', {
    delay: 600,
    distance: '100px',
    interval: 100,
    origin: 'top'
});
sr.reveal('.articles-block', { origin: 'bottom' });
sr.reveal('.contact-details', { origin: 'top' });
sr.reveal('.message-box', { origin: 'bottom' });
sr.reveal('.show-title-block', {
     delay: 600,
    distance: '100px',
    interval: 100,
    origin: 'top'
});
