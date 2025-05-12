import './bootstrap';

import * as bootstrap from 'bootstrap';

import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: false
    });
});


import 'bootstrap-icons/font/bootstrap-icons.css';


import './component/navbar';

// PRODUCT JS

document.addEventListener('DOMContentLoaded', function() {
    const categoryContainer = document.querySelector('.category-container');
    const categoryItems = document.querySelectorAll('.category-item');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentIndex = 0;
    let itemsPerView = window.innerWidth < 768 ? 2 : 4; // Menampilkan 2 item pada mobile, 4 pada desktop
    
    // Function to update visibility
    function updateCategories() {
        categoryItems.forEach((item, index) => {
            if (index >= currentIndex && index < currentIndex + itemsPerView) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    // Initial update
    updateCategories();
    
    // Next button click
    nextBtn.addEventListener('click', function() {
        if (currentIndex + itemsPerView < categoryItems.length) {
            currentIndex++;
            updateCategories();
        }
    });
    
    // Previous button click
    prevBtn.addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateCategories();
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        const newItemsPerView = window.innerWidth < 768 ? 2 : 4;
        
        if (newItemsPerView !== itemsPerView) {
            itemsPerView = newItemsPerView;
            currentIndex = 0; // Reset position on resize
            updateCategories();
        }
    });
  });
  
  // Wait for the document to be fully loaded
  document.addEventListener('DOMContentLoaded', function() {
      // Get all buy now buttons
      const buyButtons = document.querySelectorAll('.buy-now-btn');
      
      // Add click event to all buttons
      buyButtons.forEach(button => {
        button.addEventListener('click', function() {
          // Get product info
          const productCard = this.closest('.product-card');
          const productTitle = productCard.querySelector('.product-title').textContent;
          const productPrice = productCard.querySelector('.current-price').textContent;
          
          // Show confirmation or redirect to order page
          alert(`Processing ${this.textContent} for: ${productTitle} (${productPrice})`);
        });
      });
    });


    document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.carousel-slide');
  const dots = document.querySelectorAll('.dot');
  const prevBtn = document.querySelector('.carousel-prev');
  const nextBtn = document.querySelector('.carousel-next');
  let currentIndex = 0;
    
  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
      
    slides[index].classList.add('active');
    dots[index].classList.add('active');
  }
    
  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }
    
  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  }
   
  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);
    
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      currentIndex = index;
      showSlide(currentIndex);
    });
  });   
  // Auto slide every 5 seconds
  setInterval(nextSlide, 4000);
});

document.addEventListener('DOMContentLoaded', function() {
            // For mobile: ensure dropdowns work correctly with click
            if (window.innerWidth < 992) {
                document.querySelectorAll('.dropdown-toggle').forEach(item => {
                    item.addEventListener('click', event => {
                        const dropdownList = item.nextElementSibling;
                        if (dropdownList.classList.contains('show')) {
                            dropdownList.classList.remove('show');
                        } else {
                            document.querySelectorAll('.dropdown-menu.show').forEach(openMenu => {
                                openMenu.classList.remove('show');
                            });
                            dropdownList.classList.add('show');
                        }
                    });
                });
            }
            
            // Close dropdowns when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.dropdown')) {
                    document.querySelectorAll('.dropdown-menu.show').forEach(openMenu => {
                        openMenu.classList.remove('show');
                    });
                }
            });
        });

        function initMap() {
          // Koordinat
          const cvSpektrumLocation = { lat: -6.3548217, lng: 106.9264499 };
          
          const map = new google.maps.Map(document.getElementById("map"), {
              center: cvSpektrumLocation,
              zoom: 15,
              mapTypeControl: false,
              streetViewControl: false,
              fullscreenControl: false
          });
          
          // Menambahkan marker di lokasi
          const marker = new google.maps.Marker({
              position: cvSpektrumLocation,
              map: map,
              title: "CV. Spektrum Teknologi"
          });
      }

// UNTUK CARD ANIMASI DI JASA

      document.querySelectorAll('.card-hover').forEach(card => {
        const overlayContent = card.querySelector('.overlay-bg');
    
        card.addEventListener('mouseleave', () => {
          overlayContent.style.animation = 'none';
          // Trigger reflow to restart animation
          void overlayContent.offsetWidth;
          overlayContent.style.animation = '';
        });
      });

// PRODUCT JS

document.addEventListener('DOMContentLoaded', function() {
  const categoryContainer = document.querySelector('.category-container');
  const categoryItems = document.querySelectorAll('.category-item');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  
  let currentIndex = 0;
  let itemsPerView = window.innerWidth < 768 ? 2 : 4; // Menampilkan 2 item pada mobile, 4 pada desktop
  
  // Function to update visibility
  function updateCategories() {
      categoryItems.forEach((item, index) => {
          if (index >= currentIndex && index < currentIndex + itemsPerView) {
              item.style.display = 'block';
          } else {
              item.style.display = 'none';
          }
      });
  }
  
  // Initial update
  updateCategories();
  
  // Next button click
  nextBtn.addEventListener('click', function() {
      if (currentIndex + itemsPerView < categoryItems.length) {
          currentIndex++;
          updateCategories();
      }
  });
  
  // Previous button click
  prevBtn.addEventListener('click', function() {
      if (currentIndex > 0) {
          currentIndex--;
          updateCategories();
      }
  });
  
  // Handle window resize
  window.addEventListener('resize', function() {
      const newItemsPerView = window.innerWidth < 768 ? 2 : 4;
      
      if (newItemsPerView !== itemsPerView) {
          itemsPerView = newItemsPerView;
          currentIndex = 0; // Reset position on resize
          updateCategories();
      }
  });
});

// Wait for the document to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get all buy now buttons
    const buyButtons = document.querySelectorAll('.buy-now-btn');
    
    // Add click event to all buttons
    buyButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Get product info
        const productCard = this.closest('.product-card');
        const productTitle = productCard.querySelector('.product-title').textContent;
        const productPrice = productCard.querySelector('.current-price').textContent;
        
        // Show confirmation or redirect to order page
        alert(`Processing ${this.textContent} for: ${productTitle} (${productPrice})`);
        
        // Here you would typically redirect to checkout or process the order
        // window.location.href = 'checkout.html?product=' + encodeURIComponent(productTitle);
      });
    });
  });