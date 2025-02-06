jQuery(document).ready(function ($) {
    // Initial UI setup
    function updateUI() {
        const isMobile = window.matchMedia("(max-width: 935px)").matches;
        if (isMobile) {
            $(".main_navigation").hide();
            $(".fa-bars").show();
            $(".fas.fa-search").show();
        } else {
            $(".main_navigation").show();
            $(".fa-bars, .fa-xmark").hide();
            $(".fas.fa-search").hide();
        }
    }

    // Toggle navigation on mobile
    function toggleNavigation() {
        $(".fa-bars, .fa-xmark").toggle();
        $(".main_navigation").toggle(200);
    }

    // Toggle search area on mobile
    function searchRes() {
        $(".search_aria").toggle(200);
    }

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

    // Comment form validation
    $('#commentform').on('submit', function (e) {
        let valid = true;
        const nameField = $('#author');
        const emailField = $('#email');
        const commentField = $('#comment');

        // Reset placeholders
        nameField.attr('placeholder', 'Name');
        emailField.attr('placeholder', 'Email');
        commentField.attr('placeholder', 'Comment');

        // Validate Name
        if (nameField.val().trim() === '') {
            nameField.val('');
            nameField.attr('placeholder', 'Enter your name');
            valid = false;
        }

        // Validate Email
        const emailValue = emailField.val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailValue === '') {
            emailField.val('');
            emailField.attr('placeholder', 'Enter your email');
            valid = false;
        } else if (!emailRegex.test(emailValue)) {
            emailField.val('');
            emailField.attr('placeholder', 'Enter a valid email');
            valid = false;
        }

        // Validate Comment
        if (commentField.val().trim() === '') {
            commentField.val('');
            commentField.attr('placeholder', 'Comment cannot be empty');
            valid = false;
        }

        // Prevent form submission if invalid
        if (!valid) {
            e.preventDefault();
        }
    });

    // Event handlers for navigation and search buttons
    $(document).on("click", ".fa-bars, .fa-xmark", function () {
        toggleNavigation();
    });

    $(document).on('click', '.fas.fa-search', function () {
        searchRes();
    });

    // Resize and orientation change handler with debounce
    let resizeTimer;
    $(window).on("resize orientationchange", function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(updateUI, 200); // Debounced resize handler
    });

    // Initial UI setup
    updateUI();
});
