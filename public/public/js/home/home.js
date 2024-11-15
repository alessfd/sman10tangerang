
function getCarouselData() {
    return {
        currentIndex: 0,
        images: [
            'https://source.unsplash.com/collection/1346951/800x800?sig=1',
            'https://source.unsplash.com/collection/1346951/800x800?sig=2',
            'https://source.unsplash.com/collection/1346951/800x800?sig=3',
            'https://source.unsplash.com/collection/1346951/800x800?sig=4',
            'https://source.unsplash.com/collection/1346951/800x800?sig=5',
            'https://source.unsplash.com/collection/1346951/800x800?sig=6',
            'https://source.unsplash.com/collection/1346951/800x800?sig=7',
            'https://source.unsplash.com/collection/1346951/800x800?sig=8',
            'https://source.unsplash.com/collection/1346951/800x800?sig=9',
        ],
        increment() {
            this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
        },
        decrement() {
            this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
        },
    }
}


// const mobileNavMenu = document.querySelector('.mobile-nav');
document.addEventListener('DOMContentLoaded', () => {
    const dropdownButton = document.querySelector('.relative > button'); // Tombol untuk membuka dropdown
    const dropdownMenu = document.querySelector('.absolute'); // Menu dropdown
    const mobileNavMenu = document.querySelector('.mobile-nav');

    //Mobile Nav
    const productButton = document.querySelector('[aria-controls="disclosure-1"]');
    const productMenu = document.querySelector('#disclosure-1');

    const closeButton = document.querySelector('.mobile-nav button');
    const ToggleButton = document.querySelector('.mobile-toggle button');


    // Menampilkan atau menyembunyikan dropdown saat tombol diklik
    dropdownButton.addEventListener('mouseover', (event) => {
        event.stopPropagation(); // Mencegah event click bubble agar dropdown tidak langsung tertutup
        dropdownMenu.classList.toggle('hidden'); // Toggle kelas hidden pada dropdown
    });

    dropdownMenu.addEventListener('mouseleave', () => {
        dropdownMenu.classList.add('hidden');
    });

    closeButton.addEventListener('click', () => {
        event.stopPropagation();
        document.body.classList.toggle('no-scroll');
        mobileNavMenu.classList.toggle('hidden');
    })

    ToggleButton.addEventListener('click', () => {
        event.stopPropagation();
        document.body.classList.toggle('no-scroll');
        mobileNavMenu.classList.toggle('hidden');
    })

    productButton.addEventListener('click', () => {
        // Toggle visibilitas sub-menu 'Product'
        productMenu.classList.toggle('hidden');
        // Toggle rotasi ikon panah
        const icon = productButton.querySelector('svg');
        icon.classList.toggle('rotate-180');
    });

    // Menutup dropdown saat mengklik di luar dropdown
    document.addEventListener('click', (event) => {
        if (!dropdownMenu.classList.contains('hidden') && !dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden'); // Menambahkan kelas hidden untuk menyembunyikan dropdown
        }

        // if (!mobileNavMenu.classList.contains('hidden') && !ToggleButton.contains(event.target) && !ToggleButton.contains(event.target)) {
        //     mobileNavMenu.classList.add('hidden')
        //     document.body.classList.toggle('no-scroll');
        // }
    });
});

