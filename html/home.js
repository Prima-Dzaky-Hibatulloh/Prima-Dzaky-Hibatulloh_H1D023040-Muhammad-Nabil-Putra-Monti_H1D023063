const humMenu = document.querySelector('.hum-menu');
const headerKanan = document.querySelector('.navbar-right');

humMenu.addEventListener('click', () => {
  headerKanan.classList.toggle('active');
});

document.addEventListener('click', (event) => {
    if (!humMenu.contains(event.target) && !headerKanan.contains(event.target)) {
      // Hapus class 'active' jika klik di luar elemen
      headerKanan.classList.remove('active');
    }
  });
