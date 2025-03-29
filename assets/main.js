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
/* Search Popup Functionality */
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const searchForm = document.querySelector('.search-form');
    const searchInput = document.querySelector('.search-field');
    const searchPopup = document.getElementById('search-popup');
    const searchPopupClose = document.getElementById('search-popup-close');
    const popupSearchInput = document.querySelector('.search-popup-field');
    
    // Open popup when clicking search input
    if(searchInput) {
      searchInput.addEventListener('click', function(e) {
        e.preventDefault();
        searchPopup.classList.add('active');
        popupSearchInput.focus();
      });
    }
    
    // Open popup when submitting main search form
    if(searchForm) {
      searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        searchPopup.classList.add('active');
        popupSearchInput.value = searchInput.value;
        popupSearchInput.focus();
      });
    }
    
    // Close popup
    if(searchPopupClose) {
      searchPopupClose.addEventListener('click', function() {
        searchPopup.classList.remove('active');
      });
    }
    
    // Close when clicking outside
    searchPopup.addEventListener('click', function(e) {
      if(e.target === searchPopup) {
        searchPopup.classList.remove('active');
      }
    });
    
    // Close with ESC key
    document.addEventListener('keydown', function(e) {
      if(e.key === 'Escape' && searchPopup.classList.contains('active')) {
        searchPopup.classList.remove('active');
      }
      
      // Open with Ctrl+K or Cmd+K
      if((e.ctrlKey || e.metaKey) && e.key === 'k') {
        e.preventDefault();
        searchPopup.classList.add('active');
        popupSearchInput.focus();
      }
    });
    
    // Submit popup form
    const popupForm = document.querySelector('.search-popup-form');
    if(popupForm) {
      popupForm.addEventListener('submit', function(e) {
        if(popupSearchInput.value.trim() === '') {
          e.preventDefault();
        }
      });
    }
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