const dropdownButtons = document.querySelectorAll('.dropdown-btn');
        dropdownButtons.forEach(button => {
            button.addEventListener('click', function() {
                this.classList.toggle('active');
                const dropdownContent = this.nextElementSibling;

                if (dropdownContent.style.maxHeight) {
                    dropdownContent.style.maxHeight = null;
                } else {
                    dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
                }

                // Mengatur tinggi navbar untuk menyesuaikan dengan konten
                const navbar = document.querySelector('.navbar');
                navbar.style.height = 'auto'; // Biarkan navbar menyesuaikan tinggi
            });
        });

        const navbar = document.querySelector('.navbar');
        navbar.classList.add('show'); // Pastikan navbar muncul secara default

        document.getElementById('toggle-navbar').addEventListener('click', function() {
            if (navbar.classList.contains('show')) {
                navbar.classList.remove('show'); // Sembunyikan navbar
                setTimeout(() => {
                    navbar.style.display = 'none'; // Hapus display setelah animasi
                }, 500); // Sesuaikan dengan durasi transisi CSS
            } else {
                navbar.style.display = 'block'; // Tampilkan navbar
                setTimeout(() => {
                    navbar.classList.add('show'); // Tambahkan kelas untuk efek transisi
                }, 10); // Beri sedikit jeda agar transisi berlaku
            }
        });

        function showLogoutPopup() {
            const confirmation = confirm("Apakah Anda yakin ingin log out?");
            if (confirmation) {
                alert("Anda telah log out.");
            }
        }