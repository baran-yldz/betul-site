document.addEventListener('DOMContentLoaded', () => {
    const mobileToggle = document.getElementById('mobile-toggle');
    const navMenu = document.getElementById('nav-menu');

    mobileToggle.addEventListener('click', () => {
        // Menüyü aç/kapat
        navMenu.classList.toggle('active');
        
        // Hamburger ikonunu "X" formuna sokmak istersen buraya animasyon ekleyebiliriz
        console.log("Menü tetiklendi");
    });

    // Menü linklerinden birine tıklandığında menüyü otomatik kapat
    const navLinks = document.querySelectorAll('.nav-left ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
        });
    });
});