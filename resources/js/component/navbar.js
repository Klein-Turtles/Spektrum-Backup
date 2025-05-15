// document.addEventListener('DOMContentLoaded', function() {
//     const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
//     const dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');
//     let currentPath = window.location.pathname.split("/").pop();

//     if (currentPath === "") {
//         currentPath = "index";
//     } else {
//         currentPath = currentPath.replace('.html', '');
//     }

//     // Cek dropdown item dulu
//     let activeDropdownParent = null;

//     dropdownItems.forEach(item => {
//         let linkPath = item.getAttribute('href');
//         if (linkPath) {
//             linkPath = linkPath.replace('.html', '');
//             if (linkPath.endsWith(currentPath)) {
//                 item.classList.add('active');
//                 activeDropdownParent = item.closest('.dropdown'); // Ambil parent dropdown-nya
//             }
//         }
//     });

//     // Kalau ada yang aktif di dropdown, tandai nav-link parent-nya
//     if (activeDropdownParent) {
//         const parentLink = activeDropdownParent.querySelector('.nav-link');
//         if (parentLink) {
//             parentLink.classList.add('active');
//         }
//     } else {
//         // Kalau ga ada yang aktif di dropdown, cek nav-link biasa
//         navLinks.forEach(link => {
//             let linkPath = link.getAttribute('href');
//             if (linkPath) {
//                 linkPath = linkPath.replace('.html', '');
//                 if (linkPath.includes(currentPath)) {
//                     link.classList.add('active');
//                 }
//             }
//         });
//     }
// });
