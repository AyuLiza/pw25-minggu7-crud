document.addEventListener("DOMContentLoaded", function () {
  const menuIcon = document.getElementById("menu");
  const navMenu = document.querySelector(".navbar-nav");

  // Toggle menu saat tombol ditekan
  menuIcon.addEventListener("click", function (e) {
    e.stopPropagation(); // Mencegah event bubble ke document
    navMenu.classList.toggle("active");
  });

  // Klik di luar menu untuk menutupnya
  document.addEventListener("click", function (e) {
    if (!navMenu.contains(e.target) && !menuIcon.contains(e.target)) {
      navMenu.classList.remove("active");
    }
  });

  // ======= SCROLL KE BAGIAN HARGA =======
  const ctaButton = document.querySelector(".cta");
  const hargaSection = document.getElementById("harga");

  if (ctaButton && hargaSection) {
    ctaButton.addEventListener("click", function (event) {
      event.preventDefault();
      hargaSection.scrollIntoView({ behavior: "smooth" });
    });
  }

  // ======= FORM SUBMISSION DENGAN NOTIFIKASI =======
  const contactForm = document.getElementById("contactForm");
  const notif = document.getElementById("notif");

  if (contactForm && notif) {
    contactForm.addEventListener("submit", function (event) {
      event.preventDefault(); // Mencegah refresh halaman

      // Tampilkan notifikasi
      notif.classList.add("show");

      // Sembunyikan notifikasi setelah 3 detik
      setTimeout(() => {
        notif.classList.remove("show");
      }, 3000);

      // Reset form setelah submit
      this.reset();
    });
  }
});
