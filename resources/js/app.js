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
