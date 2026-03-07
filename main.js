document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const menuCollapse = document.getElementById('socialishaNav');
    
    // Bootstrap Collapse objesini başlat
    const bsCollapse = new bootstrap.Collapse(menuCollapse, {toggle: false});

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                bsCollapse.hide();
            }
        });
    });
});