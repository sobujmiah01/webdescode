jQuery(document).ready(function ($) {
    // Copy to clipboard functionality for code blocks
    const codeBlocks = document.querySelectorAll('.preformatted-text.line-numbers');
    codeBlocks.forEach(codeBlock => {
        codeBlock.addEventListener('click', () => {
            const textArea = document.createElement("textarea");
            textArea.value = codeBlock.innerText.trim(); // Use innerText for formatted content
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);

            // Visual feedback for copy action
            codeBlock.classList.add('copied');
            setTimeout(() => {
                codeBlock.classList.remove('copied');
            }, 4000);
        });
    });
});
/* search popup */
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const searchPopup = document.getElementById('search-popup');
    const closeButton = document.getElementById('search-popup-close');
    
    // Open popup when search input is clicked
    searchInput.addEventListener('click', function(e) {
        e.preventDefault();
        searchPopup.style.display = 'flex';
    });
    
    // Open popup when Enter is pressed in search input
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            searchPopup.style.display = 'flex';
        }
    });
    
    // Close popup when close button is clicked
    closeButton.addEventListener('click', function() {
        searchPopup.style.display = 'none';
    });
    
    // Close popup when clicking outside the search form
    searchPopup.addEventListener('click', function(e) {
        if (e.target === searchPopup) {
            searchPopup.style.display = 'none';
        }
    });
});
/* 404 page animation */
// Add some interactive animations
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.suggested-links a');
    
    links.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
/* menu */
/* JavaScript for Menu Toggle */
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main_navigation');
    const header = document.querySelector('.Header_main_menu');
  
    if (menuToggle) {
      menuToggle.addEventListener('click', function() {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        header.classList.toggle('mobile-menu-active');
        document.body.style.overflow = isExpanded ? '' : 'hidden';
      });
  
      // Close menu when clicking on links (mobile only)
      const navLinks = document.querySelectorAll('.main_navigation a');
      navLinks.forEach(link => {
        link.addEventListener('click', function() {
          if (window.innerWidth < 768) {
            menuToggle.setAttribute('aria-expanded', 'false');
            header.classList.remove('mobile-menu-active');
            document.body.style.overflow = '';
          }
        });
      });
    }
  
    // Close menu when clicking outside (mobile only)
    document.addEventListener('click', function(e) {
      if (window.innerWidth < 768 && 
          !e.target.closest('.menu-toggle') && 
          !e.target.closest('.main_navigation')) {
        if (menuToggle) menuToggle.setAttribute('aria-expanded', 'false');
        if (header) header.classList.remove('mobile-menu-active');
        document.body.style.overflow = '';
      }
    });
  });