// document.addEventListener('DOMContentLoaded', function() {
//     const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
//     let currentPath = window.location.pathname.split("/").pop();

//     if (currentPath === "") {
//         currentPath = "index";
//     } else {
//         currentPath = currentPath.replace('.html', '');
//     }

//     navLinks.forEach(link => {
//         let linkPath = link.getAttribute('href');
//         if (linkPath) {
//             linkPath = linkPath.replace('.html', '');
//             if (linkPath.includes(currentPath)) {
//                 link.classList.add('active');
//             }
//         }
//     });
// });
