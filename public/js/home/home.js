
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


    const dropdownSocialButton = document.querySelector('.social-dropdown > button'); // Tombol untuk membuka dropdown
    const  dropdownSocialMenu  = document.querySelector('.social-dropdown .absolute'); // Menu dropdown

    //Mobile Nav
    const productButton = document.querySelector('[aria-controls="disclosure-1"]');
    const productMenu = document.querySelector('#disclosure-1');

    const closeButton = document.querySelector('.mobile-nav button');
    const ToggleButton = document.querySelector('.mobile-toggle button');


    let infoDropdownTimeout;

    const showinfoDropdown= () => {
        clearTimeout(infoDropdownTimeout);
        dropdownMenu.classList.remove('hidden');
    };

    const hideinfoDropdown = () => {
        infoDropdownTimeout = setTimeout(() => {
            dropdownMenu.classList.add('hidden');
        }, 100);
    };

    dropdownButton .addEventListener('mouseover', showinfoDropdown);
    dropdownButton.addEventListener('mouseleave',  hideinfoDropdown);

    dropdownMenu .addEventListener('mouseover', showinfoDropdown);
    dropdownMenu .addEventListener('mouseleave',  hideinfoDropdown);



    let socialDropdownTimeout;

    const showDropdownSocialMenu = () => {
        clearTimeout(socialDropdownTimeout);
        dropdownSocialMenu.classList.remove('hidden');
    };

    const hideDropdownSocialMenu = () => {
        socialDropdownTimeout = setTimeout(() => {
            dropdownSocialMenu.classList.add('hidden');
        }, 100);
    };

    dropdownSocialButton.addEventListener('mouseover', showDropdownSocialMenu);
    dropdownSocialButton.addEventListener('mouseleave', hideDropdownSocialMenu);

    dropdownSocialMenu.addEventListener('mouseover', showDropdownSocialMenu);
    dropdownSocialMenu.addEventListener('mouseleave', hideDropdownSocialMenu);


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

