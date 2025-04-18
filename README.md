# webdescode WordPress Theme

## Description

The **webdescode** theme is a versatile and customizable WordPress theme designed to provide a seamless and engaging experience for websites. With a focus on flexibility and user-friendly customization, this theme offers various features and options to tailor your website according to your needs.

## Key Features

- **Custom Styles and Scripts:** Includes custom stylesheets, scripts, and integrates Font Awesome for enhanced visual appeal and functionality.
- **Custom Logo Support:** Flexible settings for integrating custom logos with various display options.
- **Navigation Menus:** Easily configurable navigation menus across header, footer, and sidebar.
- **Customizable Widgets and Sidebars:** Add widgets for extended site functionality and layout options.
- **Pagination Support:** Implement smooth pagination for efficient content browsing.
- **Related Posts:** Related posts based on categories for improving user experience and engagement.
- **Code Snippets Styling:** Built-in syntax highlighting for displaying code snippets with proper styling.
- **Clipboard Functionality:** Custom clipboard feature integrated for copying content without an additional plugin.
- **Block Patterns:** Custom block patterns and block categories to streamline content creation.
- **SEO Optimization:** The theme is designed with SEO best practices in mind to ensure maximum visibility.
- **Custom Background and Header:** Support for custom background and header images.
- **Accessibility Ready:** Built with accessibility in mind to ensure your site is usable by everyone.
- **Theme Background Image:** Easily set a custom background image for your site through the WordPress Customizer.

## Installation

To use this theme:

1. **Download:** Clone or download the repository.
2. **Installation:** Upload the theme folder to your WordPress installation's `wp-content/themes/` directory.
3. **Activation:** Log in to your WordPress dashboard, navigate to Appearance > Themes, and activate the **webdescode** theme.

## Customization

### Add Custom Logo

You can add your custom logo through the WordPress **Customizer**. Go to **Appearance > Customize > Site Identity** and upload your logo.

### Managing Menus

To manage menus, head to **Appearance > Menus**. Here you can create custom menus for your header, footer, or sidebar.

### Customize Excerpts

Modify the length of your post excerpts by going to **Appearance > Customize > Blog**.

### Widgets and Sidebars

Manage your sidebar and widget areas under **Appearance > Widgets**. The theme offers several widget areas for greater content flexibility.

### Set Background Image

To set a custom background image:

1. Go to **Appearance > Customize > Background Image**.
2. Upload and select your desired background image.
3. Adjust the display settings as needed.

## Usage

### Code Highlighting

For highlighting code snippets in your posts or pages, you can use the built-in code style feature:
```html
<code class="preformatted-text line-numbers language-js"></code>
```
This eliminates the need for external plugins such as PrismJS.

### Clipboard Feature

The theme includes a custom clipboard for copying code snippets, eliminating the need for a separate plugin.

### Breadcrumbs Customization

To replace the Yoast SEO breadcrumbs with custom breadcrumbs:

1. **Locate the `header.php` file** in your theme.
2. **Remove the following code** responsible for displaying Yoast SEO breadcrumbs:
```php
<?php if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
} ?>
```

## Contributing

Contributions, bug reports, and feature requests are welcome! Feel free to submit issues or pull requests to help improve this theme.

## License

This project is licensed under the [GNU General Public License v3.0](https://github.com/sobujmiah01/webdescode/blob/master/LICENSE.txt).

## Contact and Social Media

Connect with us on social media and visit our website for more information:

- [LinkedIn](https://www.linkedin.com/in/fsobujmiah/)
- [Facebook](https://www.facebook.com/sobujmiah01/)
- [YouTube](https://www.youtube.com/@webdescode)
- [Website](https://www.webdescode.com/)
- [Portfolio](https://www.sobujmiah.com/)

## Additional Requirements

This theme requires the usage of the Font Awesome plugin to display social media icons.

If you're happy with our theme, don't forget to leave us a smile! 😊
