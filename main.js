document.addEventListener('DOMContentLoaded', () => {
    // 1. Hamburger Menü Açma/Kapama (Bootstrap'e güveniyoruz)
    const menuCollapse = document.getElementById('bsocialNav');

    if (menuCollapse) {
        // Bootstrap'in kendi Collapse mekanizmasını başlat
        const bsCollapse = new bootstrap.Collapse(menuCollapse, { toggle: false });

        // 2. Linklere tıklanınca menüyü otomatik kapat (Mobil için)
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 992) {
                    bsCollapse.hide();
                }
            });
        });

        console.log("Menü JS başarıyla yüklendi.");
    } else {
        console.error("Hata: 'bsocialNav' ID'li menü bulunamadı!");
    }

});